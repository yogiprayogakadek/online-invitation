import os
import re
import requests
from urllib.parse import urlparse, parse_qs
from pathlib import Path

def extract_links_from_html(html_content):
    """Extract CSS and JS links from HTML content"""
    # Pattern untuk CSS dengan single dan double quotes
    css_pattern_single = r"href='([^']+\.css[^']*)'"
    css_pattern_double = r'href="([^"]+\.css[^"]*)"'

    # Pattern untuk JS dengan single dan double quotes
    js_pattern_single = r"src='([^']+\.js[^']*)'"
    js_pattern_double = r'src="([^"]+\.js[^"]*)"'

    css_links = re.findall(css_pattern_single, html_content)
    css_links += re.findall(css_pattern_double, html_content)

    js_links = re.findall(js_pattern_single, html_content)
    js_links += re.findall(js_pattern_double, html_content)

    # Remove duplicates while preserving order
    css_links = list(dict.fromkeys(css_links))
    js_links = list(dict.fromkeys(js_links))

    return css_links, js_links

def create_directories():
    """Create css and js directories if they don't exist"""
    os.makedirs('css', exist_ok=True)
    os.makedirs('js', exist_ok=True)
    print("✓ Directories created: css/ and js/")

def generate_filename(url, file_type):
    """Generate unique filename from URL"""
    parsed = urlparse(url)
    path_parts = parsed.path.strip('/').split('/')

    # Get the actual filename
    filename = path_parts[-1]

    # Remove query parameters from filename
    filename = filename.split('?')[0]

    # If filename doesn't have extension, add it
    if not filename.endswith(f'.{file_type}'):
        filename = f"{filename}.{file_type}"

    # Create a more descriptive name using path components
    if len(path_parts) > 1:
        # Use last 2-3 path components for better naming
        descriptive_parts = path_parts[-3:-1] if len(path_parts) > 2 else path_parts[-2:-1]
        descriptive_name = '-'.join(descriptive_parts) + '-' + filename
        return descriptive_name

    return filename

def download_file(url, filepath):
    """Download file from URL to filepath"""
    try:
        headers = {
            'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
        }
        response = requests.get(url, headers=headers, timeout=30)
        response.raise_for_status()

        with open(filepath, 'wb') as f:
            f.write(response.content)
        return True
    except Exception as e:
        print(f"✗ Error downloading {url}: {str(e)}")
        return False

def download_assets(css_links, js_links):
    """Download all CSS and JS files"""
    downloaded_files = {'css': {}, 'js': {}}

    print(f"\n📥 Downloading {len(css_links)} CSS files...")
    for i, url in enumerate(css_links, 1):
        filename = generate_filename(url, 'css')
        filepath = os.path.join('css', filename)

        print(f"[{i}/{len(css_links)}] Downloading: {filename}")
        if download_file(url, filepath):
            downloaded_files['css'][url] = filepath
            print(f"  ✓ Saved to: {filepath}")

    print(f"\n📥 Downloading {len(js_links)} JS files...")
    for i, url in enumerate(js_links, 1):
        filename = generate_filename(url, 'js')
        filepath = os.path.join('js', filename)

        print(f"[{i}/{len(js_links)}] Downloading: {filename}")
        if download_file(url, filepath):
            downloaded_files['js'][url] = filepath
            print(f"  ✓ Saved to: {filepath}")

    return downloaded_files

def generate_blade_template(downloaded_files, original_html):
    """Generate blade template with {{asset()}} paths"""
    blade_content = original_html

    # Replace CSS links (both single and double quotes)
    for original_url, filepath in downloaded_files['css'].items():
        asset_path = filepath.replace('\\', '/')
        blade_path = "{{ asset('" + asset_path + "') }}"

        # Replace both quote styles
        blade_content = blade_content.replace(f"href='{original_url}'", f"href=\"{blade_path}\"")
        blade_content = blade_content.replace(f'href="{original_url}"', f"href=\"{blade_path}\"")

    # Replace JS links (both single and double quotes)
    for original_url, filepath in downloaded_files['js'].items():
        asset_path = filepath.replace('\\', '/')
        blade_path = "{{ asset('" + asset_path + "') }}"

        # Replace both quote styles
        blade_content = blade_content.replace(f"src='{original_url}'", f"src=\"{blade_path}\"")
        blade_content = blade_content.replace(f'src="{original_url}"', f"src=\"{blade_path}\"")

    # Save blade template
    with open('assets_blade.html', 'w', encoding='utf-8') as f:
        f.write(blade_content)

    print(f"\n✓ Blade template saved to: assets_blade.html")

def main():
    # Read the HTML content from file or use your HTML string
    html_content = """
    <link rel='stylesheet' id='swiper-css'
        href='https://groovepublic.com/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5'
        media='all' />
    <link rel='stylesheet' id='elementor-post-5-css'
        href='https://groovepublic.com/wp-content/uploads/elementor/css/post-5.css?ver=1753711059' media='all' />
    <link rel='stylesheet' id='weddingpress-wdp-css'
        href='https://groovepublic.com/wp-content/plugins/weddingpress/assets/css/wdp.css?ver=2.9.2' media='all' />
    <link rel='stylesheet' id='dashicons-css'
        href='https://groovepublic.com/wp-includes/css/dashicons.min.css?ver=6.7.2' media='all' />
    <link rel='stylesheet' id='elementor-pro-css'
        href='https://groovepublic.com/wp-content/plugins/elementor-pro/assets/css/frontend.min.css?ver=3.23.2'
        media='all' />
    <link rel='stylesheet' id='font-awesome-5-all-css'
        href='https://groovepublic.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.23.3'
        media='all' />
    <link rel='stylesheet' id='font-awesome-4-shim-css'
        href='https://groovepublic.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.23.3'
        media='all' />
    <link rel='stylesheet' id='elementor-global-css'
        href='https://groovepublic.com/wp-content/uploads/elementor/css/global.css?ver=1753711098' media='all' />
    <link rel='stylesheet' id='elementor-post-478304-css'
        href='https://groovepublic.com/wp-content/uploads/elementor/css/post-478304.css?ver=1753751167'
        media='all' />
    """

    # You can also read from file:
    # with open('your_html_file.html', 'r', encoding='utf-8') as f:
    #     html_content = f.read()

    print("🚀 Starting asset downloader...")
    print("=" * 60)

    # Extract links
    css_links, js_links = extract_links_from_html(html_content)
    print(f"📊 Found {len(css_links)} CSS files and {len(js_links)} JS files")

    # Create directories
    create_directories()

    # Download files
    downloaded_files = download_assets(css_links, js_links)

    # Generate blade template
    generate_blade_template(downloaded_files, html_content)

    print("\n" + "=" * 60)
    print("✅ Process completed!")
    print(f"📁 CSS files saved in: css/")
    print(f"📁 JS files saved in: js/")
    print(f"📄 Blade template: assets_blade.html")
    print("\n💡 Tip: You can read HTML from file by uncommenting the file reading code")

if __name__ == "__main__":
    main()
