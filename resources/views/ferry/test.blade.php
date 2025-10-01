<!DOCTYPE html>
<html lang="en-US" prefix="og: https://ogp.me/ns#">
@include('ferry.templates.partials.head')

<body
    class="post-template post-template-elementor_canvas single single-post postid-478304 single-format-standard wp-custom-logo wp-embed-responsive theme-hello-elementor woocommerce-no-js hello-elementor-default elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-478304">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Ambil raw query string
            const raw = window.location.search; // contoh: "?to=Yogi+&+Ana" atau "?to=Yogi+%26+Ana&foo=bar"
            const guestNameEl = document.getElementById("guest-name");
            const inputEl = document.getElementById("form-field-name");

            // default
            const defaultGuest = "Tamu Undangan";

            if (!raw || raw.indexOf("to=") === -1) {
                guestNameEl.textContent = defaultGuest;
            } else {
                // ambil substring setelah "to="
                const start = raw.indexOf("to=") + 3;
                let valuePart = raw.substring(start); // ambil sampai akhir

                // jika ada param berikutnya yang benar-benar param (format &key=...), potong di sana
                // deteksi & diikuti nama param yang valid lalu '='
                const nextParamIdx = valuePart.search(/&[A-Za-z0-9_\-]+=/);
                if (nextParamIdx !== -1) {
                    valuePart = valuePart.substring(0, nextParamIdx);
                }

                // ganti + jadi spasi (karena + sering dipakai utk spasi dalam query) lalu decode
                const plusToSpace = valuePart.replace(/\+/g, " ");
                let decodedName;
                try {
                    decodedName = decodeURIComponent(plusToSpace);
                } catch (e) {
                    // kalau ada percent-encoding rusak, fallback ke string tanpa decode
                    decodedName = plusToSpace;
                }

                decodedName = decodedName.trim();

                if (!decodedName) {
                    guestNameEl.textContent = defaultGuest;
                    if (inputEl) inputEl.value = "";
                } else {
                    guestNameEl.textContent = decodedName;
                    if (inputEl) inputEl.value = decodedName;
                }
            }


        });
    </script>

    <e-page-transition class="e-page-transition--entering" exclude="^https\:\/\/groovepublic\.com\/wp\-admin\/">
    </e-page-transition>
    <div data-elementor-type="wp-post" data-elementor-id="478304" class="elementor elementor-478304"
        data-elementor-post-type="post">
        <div data-dce-background-color="#101010BF" data-dce-background-overlay-color="#101010"
            class="elementor-element elementor-element-2b95209c e-con-full hidden e-flex e-con e-parent"
            data-id="2b95209c" data-element_type="container"
            data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_play_on_mobile&quot;:&quot;yes&quot;,&quot;position&quot;:&quot;absolute&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;background_privacy_mode&quot;:&quot;yes&quot;,&quot;background_video_link&quot;:&quot;https:\/\/youtu.be\/CnGJrZv8jNY&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}">
            <div class="elementor-background-video-container">
                <div class="elementor-background-video-embed" autoplay muted playsinline></div>
            </div>
        </div>
        <div data-dce-background-image-url="{{ asset('assets/images/ferry/home_bg.jpg') }}"
            class="elementor-element elementor-element-31e5c03c e-con-full hidden e-flex e-con e-parent"
            data-id="31e5c03c" data-element_type="container" id="section-cover"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-element elementor-element-633f17d9 e-con-full hidden e-flex e-con e-child"
                data-id="633f17d9" data-element_type="container">
                <div class="elementor-element elementor-element-266647ab hidden e-flex e-con-boxed e-con e-child"
                    data-id="266647ab" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-12fdae86 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                            data-id="12fdae86" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">The Wedding of</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-56d33a35 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                            data-id="56d33a35" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Ferry Adel</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-492ed5fb wdp-sticky-section-no elementor-widget elementor-widget-heading"
                            data-id="492ed5fb" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">19.10.2025</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-6c1f068 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                    data-id="6c1f068" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-427b150e e-con-full e-flex e-con e-child"
                    data-id="427b150e" data-element_type="container"
                    data-settings="{&quot;dce_visibility_click&quot;:&quot;#tombol-buka&quot;,&quot;dce_visibility_click_show&quot;:&quot;slide&quot;,&quot;dce_visibility_event&quot;:&quot;click&quot;,&quot;dce_visibility_event_transition_delay&quot;:400}">
                    <div class="elementor-element elementor-element-783ad440 e-con-full e-flex e-con e-child"
                        data-id="783ad440" data-element_type="container">
                        <div class="elementor-element elementor-element-1ed218cf wdp-sticky-section-no elementor-widget elementor-widget-heading"
                            data-id="1ed218cf" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Dear,</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-48232bbc namatamu elementor-widget-mobile__width-inherit wdp-sticky-section-no elementor-widget elementor-widget-heading"
                            data-id="48232bbc" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default" id="guest-name">KIKI ADELYA
                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-311f16cf elementor-widget__width-initial elementor-widget-mobile__width-initial wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
                            data-id="311f16cf" data-element_type="widget" data-aos="zoom-in" data-aos-offset="0"
                            data-aos-delay="100" data-aos-duration="600" data-aos-easing="ease-in-out"
                            data-aos-anchor-placement="center" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                We apologize if there is any misspelling of name or title </div>
                        </div>
                        <div data-dce-background-color="#101010"
                            class="elementor-element elementor-element-170b97e2 elementor-align-center wdp-sticky-section-no elementor-widget elementor-widget-button"
                            data-id="170b97e2" data-element_type="widget" id="tombol-buka"
                            data-settings="{&quot;dce_visibility_click&quot;:&quot;#tombol-buka&quot;,&quot;dce_visibility_click_show&quot;:&quot;fade&quot;,&quot;dce_visibility_event&quot;:&quot;click&quot;,&quot;dce_visibility_event_transition_delay&quot;:400}"
                            data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="dce-animations">
                                    <div class="elementor-button-wrapper">
                                        <a class="elementor-button elementor-button-link elementor-size-xs"
                                            href="#">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-icon">
                                                    <i aria-hidden="true" class="fas fa-envelope-open"></i> </span>
                                                <span class="elementor-button-text">LET'S OPEN</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-90bee5c wdp-sticky-section-no elementor-widget elementor-widget-html"
                            data-id="90bee5c" data-element_type="widget" data-widget_type="html.default">
                            <div class="elementor-widget-container">
                                <script>
                                    document.getElementById("tombol-buka").addEventListener("click", function() {
                                        var video = document.querySelector(".elementor-background-video-hosted");
                                        if (video.paused) {
                                            video.play();
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-86ec710 e-con-full hidden e-flex e-con e-parent"
            data-id="86ec710" data-element_type="container" id="home"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-element elementor-element-0fe2238 e-con-full hidden e-flex e-con e-child"
                data-id="0fe2238" data-element_type="container">
                <div class="elementor-element elementor-element-1c63f12 e-flex e-con-boxed e-con e-child"
                    data-id="1c63f12" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-ad172f7 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                            data-id="ad172f7" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">The Wedding of</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-64f201a wdp-sticky-section-no elementor-widget elementor-widget-heading"
                            data-id="64f201a" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Ferry Adel</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-c59df61 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                            data-id="c59df61" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">19.10.2025</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-0290391 elementor-widget__width-initial elementor-widget-mobile__width-inherit animasi wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
                            data-id="0290391" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                بَارَكَ اللَّهُ لَكُمَا وَبَارَكَ عَلَيْكُمَا وَجَمَعَ بَيْنَكُمَا فِي خَيْرٍ <br />
                                Bārakallāhu lakumā wa bāraka ʿalaikumā wa jamaʿa bainakumā fī khair<br />
                                <br />
                                “Semoga Allah memberkahi kalian berdua<br />
                                melimpahkan keberkahan atas kalian,
                                dan mengumpulkan kalian berdua dalam kebaikan.”<br />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-353df57e e-con-full e-flex e-con e-parent" data-id="353df57e"
            data-element_type="container" id="profile">
            <div class="elementor-element elementor-element-8bcd072 e-con-full e-flex e-con e-child" data-id="8bcd072"
                data-element_type="container">
                <div class="elementor-element elementor-element-425a31c9 animated-slow dce_masking-none wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-image"
                    data-id="425a31c9" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:300}"
                    data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img fetchpriority="high" decoding="async" width="1399" height="2100"
                            src="{{ asset('assets/images/ferry/groom_bride/groom_2.jpeg') }}"
                            class="attachment-large size-large wp-image-479993" alt="" />
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-6907448a e-con-full e-flex e-con e-child"
                data-id="6907448a" data-element_type="container">
                <div class="elementor-element elementor-element-2f75ac41 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                    data-id="2f75ac41" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">The Groom</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-d89202b wdp-sticky-section-no elementor-widget elementor-widget-heading"
                    data-id="d89202b" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Ferry Septiadi, S.Kom.</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-16a7844a elementor-widget__width-initial elementor-widget-mobile__width-inherit wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
                    data-id="16a7844a" data-element_type="widget" data-aos="fade" data-aos-offset="0"
                    data-aos-delay="300" data-aos-duration="1000" data-aos-easing="ease-in-out"
                    data-aos-anchor-placement="center" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        Putra keempat dari pasangan<br />
                        Alm. I Made Supardela &amp; Halimah Tusa'diyah </div>
                </div>
                <div data-dce-background-color="#61CE7000"
                    class="elementor-element elementor-element-1bd90d51 elementor-align-left elementor-widget-mobile__width-initial elementor-widget__width-initial wdp-sticky-section-no elementor-widget elementor-widget-button"
                    data-id="1bd90d51" data-element_type="widget" data-aos="fade" data-aos-offset="0"
                    data-aos-delay="300" data-aos-duration="1000" data-aos-easing="ease-in-out"
                    data-aos-anchor-placement="center" data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <a class="elementor-button elementor-button-link elementor-size-xs"
                                href="https://www.instagram.com/ferryseptiady" target="_blank" rel="noopener">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-icon">
                                        <i aria-hidden="true" class="fab fa-instagram"></i> </span>
                                    <span class="elementor-button-text">ferryseptiady</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-8884828 e-con-full e-flex e-con e-parent" data-id="8884828"
            data-element_type="container">
            <div class="elementor-element elementor-element-2eedc723 e-con-full e-flex e-con e-child"
                data-id="2eedc723" data-element_type="container">
                <div class="elementor-element elementor-element-2a60e2f7 animated-slow dce_masking-none wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-image"
                    data-id="2a60e2f7" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:300}"
                    data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img decoding="async" width="1400" height="2100"
                            src="{{ asset('assets/images/ferry/groom_bride/bride.jpeg') }}"
                            class="attachment-large size-large wp-image-478572" alt="" />
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-7ecf2033 e-con-full e-flex e-con e-child"
                data-id="7ecf2033" data-element_type="container">
                <div class="elementor-element elementor-element-4cb57fc1 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                    data-id="4cb57fc1" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">The Bride</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-50c122d5 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                    data-id="50c122d5" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Kiki Adelya, S.Kom.</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-78f870f9 elementor-widget__width-initial elementor-widget-mobile__width-inherit wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
                    data-id="78f870f9" data-element_type="widget" data-aos="fade" data-aos-offset="0"
                    data-aos-delay="300" data-aos-duration="1000" data-aos-easing="ease-in-out"
                    data-aos-anchor-placement="center" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        Putri kedua dari pasangan<br />
                        H. Didik Supringadi, S.H. &amp; Ni Kadek Surani, S.Sos. </div>
                </div>
                <div data-dce-background-color="#61CE7000"
                    class="elementor-element elementor-element-1cec47b9 elementor-align-left elementor-widget-mobile__width-initial elementor-widget__width-initial wdp-sticky-section-no elementor-widget elementor-widget-button"
                    data-id="1cec47b9" data-element_type="widget" data-aos="fade" data-aos-offset="0"
                    data-aos-delay="300" data-aos-duration="1000" data-aos-easing="ease-in-out"
                    data-aos-anchor-placement="center" data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <a class="elementor-button elementor-button-link elementor-size-xs"
                                href="https://www.instagram.com/adelyaaa_" target="_blank" rel="noopener">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-icon">
                                        <i aria-hidden="true" class="fab fa-instagram"></i> </span>
                                    <span class="elementor-button-text">adelyaaa_</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-6b1f32ae e-flex e-con-boxed e-con e-parent" data-id="6b1f32ae"
            data-element_type="container" id="lovestory">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-5f2f0a5f e-con-full e-flex e-con e-child"
                    data-id="5f2f0a5f" data-element_type="container">
                    <div class="elementor-element elementor-element-137bfa4d transisi wdp-sticky-section-no elementor-widget elementor-widget-heading"
                        data-id="137bfa4d" data-element_type="widget" data-aos="fade" data-aos-offset="0"
                        data-aos-delay="300" data-aos-duration="1000" data-aos-easing="ease-in-out"
                        data-aos-anchor-placement="center" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">OUR<br />
                                LOVE<br />
                                STORY</h2>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-1e1aced1 e-con-full e-flex e-con e-child"
                    data-id="1e1aced1" data-element_type="container">
                    <div class="elementor-element elementor-element-17ca6f90 elementor-widget__width-initial elementor-widget-mobile__width-inherit wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
                        data-id="17ca6f90" data-element_type="widget" data-aos="fade" data-aos-offset="0"
                        data-aos-delay="300" data-aos-duration="1000" data-aos-easing="ease-in-out"
                        data-aos-anchor-placement="center" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>Pertemuan pertama di akhir tahun 2019 menjadi langkah awal dari cerita perkenalan
                                singkat.
                                Bangku kuliah yang segera berakhir ternyata menjadi awal perjalanan langkah kami.
                                Saling mengenal hari demi hari, berbagi cerita, suka dan duka hingga tak terasa
                                memasuki lembaran tahun demi tahun.</p>
                            <p>Perjalanan menuju tahun ke enam memberikan kami banyak cerita, harapan dan berbagai
                                pembelajaran kehidupan bersama. Dengan bertumbuhnya diri, sehingga akhirnya kami
                                memutuskan untuk memantaskan diri dengan melaksanakan pertunangan di tanggal 21
                                September 2025.</p>
                            <p>Berharap untuk menjadi pasangan yang dapat memberi ruang dan cinta kasih yang lebih
                                sesuai
                                ajaran kami, maka akhirnya kami memutuskan untuk merangkai lembaran baru menuju langkah
                                pernikahan
                                yang insyallah menjadi pernikahan yang sakinah mawaddah warahmah, aamin.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-12ab1c6c e-flex e-con-boxed e-con e-parent" data-id="12ab1c6c"
            data-element_type="container">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-40dc846 e-con-full e-flex e-con e-child"
                    data-id="40dc846" data-element_type="container">
                    <div class="elementor-element elementor-element-504887c3 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                        data-id="504887c3" data-element_type="widget" data-aos="fade" data-aos-offset="0"
                        data-aos-delay="300" data-aos-duration="1000" data-aos-easing="ease-in-out"
                        data-aos-anchor-placement="center" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">19 Oktober 2025<br />
                                16.00 - 21.00 Wita</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-6a0d7cf0 elementor-widget__width-initial elementor-widget-mobile__width-inherit wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
                        data-id="6a0d7cf0" data-element_type="widget" data-aos="fade" data-aos-offset="0"
                        data-aos-delay="300" data-aos-duration="1000" data-aos-easing="ease-in-out"
                        data-aos-anchor-placement="center" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p class="text-center"><strong>UC Silver Gold Bali</strong></p>
                            Jl. Raya Batubulan Gang Candrametu No.2, Batubulan, Kec. Sukawati, Kabupaten Gianyar
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-5689f1ee e-con-full e-flex e-con e-child"
                        data-id="5689f1ee" data-element_type="container">
                        <div data-dce-background-color="#111111"
                            class="elementor-element elementor-element-22a90fee elementor-align-left elementor-mobile-align-justify elementor-widget-mobile__width-auto wdp-sticky-section-no elementor-widget elementor-widget-button"
                            data-id="22a90fee" data-element_type="widget" data-aos="fade" data-aos-offset="0"
                            data-aos-delay="300" data-aos-duration="1000" data-aos-easing="ease-in-out"
                            data-aos-anchor-placement="center" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a class="elementor-button elementor-button-link elementor-size-xs"
                                        href="https://maps.app.goo.gl/fQGiC37iEx6fcuNq8" target="_blank"
                                        rel="noopener">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">LOKASI ACARA</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-26efd798 e-con-full e-flex e-con e-child"
                    data-id="26efd798" data-element_type="container">
                    <div class="elementor-element elementor-element-680c14c6 transisi wdp-sticky-section-no elementor-widget elementor-widget-heading"
                        data-id="680c14c6" data-element_type="widget" data-aos="fade" data-aos-offset="0"
                        data-aos-delay="300" data-aos-duration="1000" data-aos-easing="ease-in-out"
                        data-aos-anchor-placement="center" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">WEDDING RECEPTION</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-9e37589 cool-split e-flex e-con-boxed e-con e-parent"
            data-id="9e37589" data-element_type="container">
            <div class="e-con-inner">
                <div data-dce-background-image-url="{{ asset('assets/images/ferry/calendar.jpg') }}"
                    class="elementor-element elementor-element-44a7ee4a e-flex e-con-boxed e-con e-child"
                    data-id="44a7ee4a" data-element_type="container"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-38e0fa3f transisi wdp-sticky-section-no elementor-widget elementor-widget-heading"
                            data-id="38e0fa3f" data-element_type="widget" data-aos="fade" data-aos-offset="0"
                            data-aos-delay="300" data-aos-duration="1000" data-aos-easing="ease-in-out"
                            data-aos-anchor-placement="center" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default">Almost Time <br>for Our
                                    Celebration</h3>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-b79e523 elementor-widget__width-initial elementor-countdown--label-inline wdp-sticky-section-no elementor-widget elementor-widget-countdown"
                            data-id="b79e523" data-element_type="widget" data-widget_type="countdown.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-countdown-wrapper" data-date="1760860800">
                                    <div class="elementor-countdown-item"><span
                                            class="elementor-countdown-digits elementor-countdown-days"></span> <span
                                            class="elementor-countdown-label">D</span></div>
                                    <div class="elementor-countdown-item"><span
                                            class="elementor-countdown-digits elementor-countdown-hours"></span> <span
                                            class="elementor-countdown-label">H</span></div>
                                    <div class="elementor-countdown-item"><span
                                            class="elementor-countdown-digits elementor-countdown-minutes"></span>
                                        <span class="elementor-countdown-label">M</span>
                                    </div>
                                    <div class="elementor-countdown-item"><span
                                            class="elementor-countdown-digits elementor-countdown-seconds"></span>
                                        <span class="elementor-countdown-label">S</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-dce-background-color="#111111"
                            class="elementor-element elementor-element-c414fa2 wdp-sticky-section-no elementor-widget elementor-widget-dce_add_to_calendar"
                            data-id="c414fa2" data-element_type="widget"
                            data-widget_type="dce_add_to_calendar.default">
                            <div class="elementor-widget-container">

                                <div class="elementor-button-wrapper">
                                    <a download="Ferry-Adel"
                                        href="data:text/calendar;charset=utf8;base64,QkVHSU46VkNBTEVOREFSClZFUlNJT046Mi4wCkJFR0lOOlZFVkVOVApVSUQ6NTViNTliN2Q5YmFmNGZkY2JmYmI1MWJkZTgxOTVjMGYKU1VNTUFSWTpUaGUgV2VkZGluZyBvZiBGZXJyeSBBZGVsCkRUU1RBUlQ7VFpJRD1Bc2lhL0pha2FydGE6MjAyNTEwMTlUMTQzMDAwCkRURU5EO1RaSUQ9QXNpYS9KYWthcnRhOjIwMjUxMDE5VDE0MzAwMApERVNDUklQVElPTjo8cD5Ba3RpZmthbiBwZXJpbmdhdGFuIGFwYWJpbGEgYmVsdW0gYWt0aWYgc2VjYXJhIGJhd2Fhbi4gKGF0dXIgMTUgbWVuaXQgc2ViZWx1bW55YVwsIGF0YXUgc2VzdWFpa2FuIGxhZ2kpPC9wPjxwPkVuYWJsZSBhbGVydHMgaWYgdGhleSBhcmUgbm90IGFscmVhZHkgYWN0aXZlIGJ5IGRlZmF1bHQuIChzZXQgMTUgbWludXRlcyBwcmV2aW91c2x5XCwgb3IgYWRqdXN0IGFnYWluKTwvcD4KTExPQ0FUSU9OOmh0dHBzOi8vbWFwcy5hcHAuZ29vLmdsL0p5QmtyWXhMUWtpR1MyY1I2CkVORDpWRVZFTlQKRU5EOlZDQUxFTkRBUgo="
                                        class="elementor-button-link elementor-button elementor-size-sm"
                                        target="_blank" rel="nofollow" role="button">
                                        <span class="elementor-button-content-wrapper dce-flexbox">
                                            <span class="elementor-button-icon elementor-align-icon-right">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    id="b159ff04-3740-4ac3-96cc-b414ded50b3a" data-name="Layer 1"
                                                    width="16" height="16" viewBox="0 0 16 16">
                                                    <polygon
                                                        points="8.39 7.64 8.39 0 7.61 0 7.61 7.64 0 7.64 0 8.4 7.61 8.4 7.61 16 8.39 16 8.39 8.4 16 8.4 16 7.64 8.39 7.64">
                                                    </polygon>
                                                </svg> </span>
                                            <span class="elementor-button-text">Save the date</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-4b0d887 e-flex e-con-boxed e-con e-parent" data-id="4b0d887"
            data-element_type="container">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-30574b00 e-con-full e-flex e-con e-child"
                    data-id="30574b00" data-element_type="container">
                    <div class="elementor-element elementor-element-5bd92783 animated-slow dce_masking-none wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-image"
                        data-id="5bd92783" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:700}"
                        data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img decoding="async" width="1400" height="2100"
                                src="{{ asset('assets/images/ferry/galleries/21.jpg') }}"
                                class="attachment-large size-large wp-image-478602" alt="" />
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-449a03a4 elementor-widget__width-initial animated-slow dce_masking-none wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-image"
                        data-id="449a03a4" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:400}"
                        data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img loading="lazy" decoding="async" width="1400" height="2100"
                                src="{{ asset('assets/images/ferry/galleries/20.jpg') }}"
                                class="attachment-large size-large wp-image-478599" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-7cd94898 e-flex e-con-boxed e-con e-parent" data-id="7cd94898"
            data-element_type="container" id="rsvp">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-d279bca e-flex e-con-boxed e-con e-child"
                    data-id="d279bca" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-62f59467 transisi wdp-sticky-section-no elementor-widget elementor-widget-heading"
                            data-id="62f59467" data-element_type="widget" data-aos="fade" data-aos-offset="0"
                            data-aos-delay="300" data-aos-duration="1000" data-aos-easing="ease-in-out"
                            data-aos-anchor-placement="center" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Kindly Confirm Your Presence
                                    and Share Your Blessings</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-5a80cefd elementor-widget__width-inherit elementor-widget-mobile__width-inherit wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
                            data-id="5a80cefd" data-element_type="widget" data-aos="fade" data-aos-offset="0"
                            data-aos-delay="300" data-aos-duration="1000" data-aos-easing="ease-in-out"
                            data-aos-anchor-placement="center" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                Kami dengan hormat memohon tanggapan segera dari Anda untuk mengonfirmasi kehadiran pada
                                acara kami yang akan datang.
                                Selain konfirmasi tersebut, mohon luangkan waktu sejenak untuk menyampaikan salam hangat
                                serta doa terbaik Anda.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-7aa5bcbc e-con-full e-flex e-con e-child"
                    data-id="7aa5bcbc" data-element_type="container">
                    <div class="elementor-element elementor-element-41e82d45 elementor-widget__width-inherit elementor-button-align-stretch wdp-sticky-section-no elementor-widget elementor-widget-form"
                        data-id="41e82d45" data-element_type="widget" id="comment-form"
                        data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;20&quot;,&quot;button_width_mobile&quot;:&quot;20&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;,&quot;label_icon_size&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;field_icon_size&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                        data-widget_type="form.default">
                        <div class="elementor-widget-container">
                            <div class="dce-conditions-js-error-notice elementor-message elementor-message-danger"
                                style="display: none;">A problem was detected in the following Form. Submitting it
                                could result in errors. Please contact the site administrator.</div>
                            <script>
                                setTimeout(function() {
                                    let el = document.querySelector(".dce-conditions-js-error-notice");
                                    if (el)
                                        el.style.display = "block";
                                }, 2000);
                            </script>
                            <form class="elementor-form" method="post" id="commentform" name="comment_form">
                                <div data-field-conditions="[{&quot;id&quot;:&quot;field_b0d08a4&quot;,&quot;condition&quot;:&quot;(attendance == \&quot;Tidak Hadir\&quot;)&quot;,&quot;mode&quot;:&quot;hide&quot;,&quot;disableOnly&quot;:false}]"
                                    data-field-ids="[&quot;name&quot;,&quot;attendance&quot;,&quot;field_b0d08a4&quot;,&quot;comment&quot;,&quot;field_ca5c587&quot;,&quot;post_title&quot;,&quot;link_undangan&quot;]"
                                    class="elementor-form-fields-wrapper elementor-labels-above">
                                    <div
                                        class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100 elementor-field-required">
                                        <label for="form-field-name" class="elementor-field-label">
                                            Nama </label>
                                        <input size="1" type="text" name="guest_name" id="form-field-name"
                                            class="elementor-field elementor-size-sm  elementor-field-textual"
                                            required="required" aria-required="true">
                                    </div>
                                    <div
                                        class="elementor-field-type-radio elementor-field-group elementor-column elementor-field-group-attendance elementor-col-100 elementor-field-required">
                                        <label for="form-field-attendance" class="elementor-field-label">
                                            Kehadiran </label>
                                        <div class="elementor-field-subgroup  elementor-subgroup-inline"><span
                                                class="elementor-field-option"><input type="radio"
                                                    value="EXCITED TO ATTEND" id="form-field-attendance-0"
                                                    name="attendance" required="required" aria-required="true">
                                                <label for="form-field-attendance-0">AKAN HADIR</label></span><span
                                                class="elementor-field-option"><input type="radio"
                                                    value="Tidak Hadir" id="form-field-attendance-1"
                                                    name="attendance" required="required" aria-required="true">
                                                <label for="form-field-attendance-1">TIDAK HADIR </label></span></div>
                                    </div>
                                    <div
                                        class="elementor-field-type-number elementor-field-group elementor-column elementor-field-group-field_b0d08a4 elementor-col-100 elementor-field-required">
                                        <label for="form-field-field_b0d08a4" class="elementor-field-label">
                                            Jumlah Tamu (Sesuai Undangan) </label>
                                        <input type="number" name="no_of_guest" id="form-field-field_b0d08a4"
                                            class="elementor-field elementor-size-sm  elementor-field-textual"
                                            value="1" required="required" aria-required="true" min="1"
                                            max="2">
                                    </div>
                                    <div
                                        class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-comment elementor-col-100">
                                        <label for="form-field-comment" class="elementor-field-label">
                                            Ucapan & Doa </label>
                                        <textarea class="elementor-field-textual elementor-field  elementor-size-sm" name="message" id="form-field-comment"
                                            rows="6"></textarea>
                                    </div>
                                    <div
                                        class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-20 e-form__buttons elementor-sm-20">
                                        <button data-url="{{ route('ferry-adel.ucapan.store') }}"
                                            class="elementor-button elementor-size-sm" type="button"
                                            id="send-comment">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">Send</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-4668bcc8 wdp-sticky-section-no elementor-widget elementor-widget-html"
                        data-id="4668bcc8" data-element_type="widget" data-widget_type="html.default">
                        <div class="elementor-widget-container">
                            <meta name="viewport"
                                content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />

                            <script>
                                //ambil link
                                window.addEventListener('DOMContentLoaded', function() {
                                    var linkField = document.getElementById('form-field-link_undangan');
                                    if (linkField) {
                                        linkField.value = window.location.href;
                                    }
                                });

                                //jumlah max
                                // Ambil parameter dari URL
                                const urlParams = new URLSearchParams(window.location.search);
                                const maxValue = urlParams.get('max');

                                // Cari input field berdasarkan ID
                                const inputField = document.getElementById('form-field-field_b0d08a4');

                                // Jika parameter max ditemukan, atur nilai maksimum
                                if (maxValue && inputField) {
                                    inputField.max = maxValue;
                                }


                                //label maxValue
                                document.addEventListener("DOMContentLoaded", function() {
                                    const numberField = document.getElementById("form-field-field_b0d08a4");
                                    const maxGuests = numberField.getAttribute("max");
                                    const label = document.querySelector('label[for="form-field-field_b0d08a4"]');
                                    if (label && maxGuests) {
                                        label.textContent = `Jumlah Undangan (Sesuai Undangan)`;
                                    }
                                });



                                //TOMBOL + dan - -------------------------
                                document.addEventListener('DOMContentLoaded', () => {
                                    const inputField = document.querySelector('#form-field-field_b0d08a4');

                                    if (inputField) {
                                        // Bungkus input field dengan wrapper
                                        const wrapper = document.createElement('div');
                                        wrapper.className = 'number-input-wrapper';
                                        inputField.parentNode.insertBefore(wrapper, inputField);
                                        wrapper.appendChild(inputField);

                                        // Tambahkan teks "-" di dalam field di sebelah kiri
                                        const decrementText = document.createElement('span');
                                        decrementText.textContent = '-';
                                        decrementText.className = 'decrement-text';
                                        wrapper.appendChild(decrementText);

                                        // Tambahkan teks "+" di dalam field di sebelah kanan
                                        const incrementText = document.createElement('span');
                                        incrementText.textContent = '+';
                                        incrementText.className = 'increment-text';
                                        wrapper.appendChild(incrementText);

                                        // Tambahkan fungsionalitas untuk teks
                                        decrementText.addEventListener('click', () => {
                                            let value = parseInt(inputField.value, 10);
                                            if (!isNaN(value) && value > 1) { // Minimum nilai adalah 1
                                                inputField.value = value - 1;
                                            }
                                        });

                                        incrementText.addEventListener('click', () => {
                                            let value = parseInt(inputField.value, 10);
                                            let max = parseInt(inputField.max, 10); // Ambil nilai maksimum dari atribut max
                                            if (!isNaN(value) && (!max || value < max)) { // Cek jika tidak melebihi max
                                                inputField.value = value + 1;
                                            }
                                        });
                                    }
                                });
                            </script>


                            <style>
                                .number-input-wrapper {
                                    position: relative;
                                    display: inline-block;
                                    width: 100%;
                                    margin-top: 7px;
                                }

                                .number-input-wrapper input {
                                    width: 100px;
                                    /* Sesuaikan dengan kebutuhan */
                                    text-align: center;
                                    padding: 0 30px;
                                    /* Ruang untuk teks - dan + */
                                    box-sizing: border-box;
                                }

                                .number-input-wrapper .decrement-text,
                                .number-input-wrapper .increment-text {
                                    position: absolute;
                                    top: 50%;
                                    transform: translateY(-50%);
                                    font-size: 18px;
                                    font-weight: 400;
                                    color: #fff;
                                    cursor: pointer;
                                    user-select: none;
                                }

                                @media (min-width: 1024px) {

                                    .number-input-wrapper .decrement-text,
                                    .number-input-wrapper .increment-text {
                                        display: none;
                                    }
                                }


                                .number-input-wrapper .decrement-text {
                                    left: 0px;
                                    /* Posisi - di kiri dalam input */
                                    padding-left: 10px;
                                    padding-right: 40px;
                                }

                                .number-input-wrapper .increment-text {
                                    right: 0px;
                                    /* Posisi + di kanan dalam input */
                                    padding-right: 10px;
                                    padding-left: 40px;
                                }
                            </style>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-79d6ebf2 e-flex e-con-boxed e-con e-parent" data-id="79d6ebf2"
            data-element_type="container">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-73e6f2c9 miniscrollbar e-con-full e-flex e-con e-child"
                    data-id="73e6f2c9" data-element_type="container">
                    <div class="elementor-element elementor-element-6439cbd7 wdp-sticky-section-no elementor-widget elementor-widget-shortcode"
                        data-id="6439cbd7" data-element_type="widget" data-aos="fade" data-aos-offset="0"
                        data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out"
                        data-aos-anchor-placement="center" data-widget_type="shortcode.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-shortcode">
                                <div id="komentar-container">
                                    @forelse ($comments as $key => $comment)
                                        <div class="komentar-item" id="komentar-{{ $comment->id }}">
                                            <strong>{{ $comment->guest_name }}</strong>
                                            <p>{{ $comment->message }}
                                            </p><small>{{ date_format($comment->created_at, 'D, d-M-Y') }}</small>
                                        </div>
                                    @empty
                                        <p style="color: #fff; text-align: center; width: 100%;">No comments yet. Be
                                            the
                                            first to comment!</p>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-6ec3682b e-con-full e-flex e-con e-child"
                        data-id="6ec3682b" data-element_type="container">
                        <div data-dce-background-color="#111111"
                            class="elementor-element elementor-element-5c858495 elementor-hidden-desktop elementor-hidden-tablet wdp-sticky-section-no elementor-widget elementor-widget-button"
                            data-id="5c858495" data-element_type="widget" id="load-more-btn"
                            data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a class="elementor-button elementor-size-sm elementor-animation-shrink"
                                        role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Load More</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-dce-background-color="#11111100"
                            class="elementor-element elementor-element-439ebb4f elementor-hidden-desktop elementor-hidden-tablet wdp-sticky-section-no elementor-widget elementor-widget-button"
                            data-id="439ebb4f" data-element_type="widget" id="close-btn"
                            data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a class="elementor-button elementor-size-sm elementor-animation-shrink"
                                        role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Close</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-18bde15 wdp-sticky-section-no elementor-widget elementor-widget-html"
                        data-id="18bde15" data-element_type="widget" data-widget_type="html.default">
                        <div class="elementor-widget-container">
                            <style>
                                /*Hapus TOMBOL hapus komen di halaman elementor*/
                                .elementor-editor-active button.hapus-komentar {
                                    display: ;
                                }

                                /*tombol hapus*/
                                button.hapus-komentar {
                                    font-family: mabry;
                                    font-size: 10px;
                                    padding: 5px;
                                    border: none;

                                }

                                /*NAMA PENGIRIM*/
                                .komentar-item>strong {
                                    font-family: squel medium;
                                    font-weight: 500;
                                    font-size: 20px;
                                    color: #fff;

                                }

                                /*TEKS Komentar*/
                                .komentar-item>p {
                                    font-family: mabry;
                                    font-weight: 300;
                                    font-size: 14px;
                                    color: #fff;
                                    width: 45%;

                                }

                                .komentar-item>small {
                                    font-family: inter;
                                    font-weight: 300;
                                    font-size: 10px;
                                    color: #888;
                                }

                                /*DIVIDER komentar*/
                                .komentar-item {
                                    border-bottom: 1px solid #fff0;
                                    /* Ganti #ccc dengan warna yang diinginkan */
                                    padding-bottom: 0px;
                                    /* Menambahkan ruang di bawah komentar */
                                    margin-bottom: 10px;
                                    /* Menambahkan jarak antara komentar */
                                }




                                /*zigzag comment*/
                                #komentar-container {
                                    display: flex;
                                    flex-direction: column;
                                }

                                .komentar-item {
                                    width: 100%;
                                    /* Setiap item mengambil 100% lebar container */
                                    margin-bottom: 10px;
                                    /* Jarak antar item */
                                }

                                .komentar-item:nth-child(odd) {
                                    text-align: left;
                                    /* Konten di kiri */
                                }

                                .komentar-item:nth-child(even) {
                                    text-align: right;
                                    /* Konten di kanan */
                                }

                                .komentar-item p {
                                    width: 40%;
                                    /* Lebar <p> 45% */
                                }

                                .komentar-item:nth-child(even) p {
                                    margin-left: auto;
                                    /* Menjaga <p> di kanan */
                                }







                                /*scrollbar*/
                                .miniscrollbar::-webkit-scrollbar {
                                    width: 2px;
                                    /* Menentukan lebar scrollbar */
                                    height: 6px;
                                    /* Menentukan tinggi scrollbar pada horizontal */
                                }

                                .miniscrollbar::-webkit-scrollbar-thumb {
                                    background-color: darkgrey;
                                    /* Warna scrollbar */
                                    border-radius: 10px;
                                    /* Membuat scrollbar lebih bulat */
                                }

                                .miniscrollbar::-webkit-scrollbar-track {
                                    background: #fff2;
                                    /* Warna track scrollbar */
                                }





                                @media only screen and (max-width: 600px) {
                                    .komentar-item p {
                                        width: 80%;
                                    }

                                    .komentar-item>p {
                                        font-size: 14px !important;
                                    }
                                }
                            </style>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-38a77e16 wdp-sticky-section-no elementor-widget elementor-widget-html"
                        data-id="38a77e16" data-element_type="widget" data-widget_type="html.default">
                        <div class="elementor-widget-container">
                            <style>
                                .elementor-editor-active .komentar-item {
                                    opacity: 1;
                                    visibility: visible;
                                    position: relative;
                                }

                                /* Semua komentar disembunyikan secara default */
                                .komentar-item {
                                    opacity: 0;
                                    visibility: hidden;
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    transition: opacity 0.5s ease-in-out, visibility 0s linear 0s;
                                }

                                /* Komentar yang terlihat */
                                .komentar-item.show {
                                    opacity: 1;
                                    visibility: visible;
                                    position: relative;
                                    transition: opacity 0.5s ease-in-out, visibility 0s linear 0s;
                                }

                                /* Tampilkan komentar dalam grid dengan 1 kolom untuk tampilan mobile */
                                #komentar-container {
                                    display: grid;
                                    grid-template-columns: 1fr;
                                    /* Default 1 kolom */
                                    gap: 15px;
                                }

                                /* Tampilan grid untuk desktop dengan 3 kolom */
                                @media (min-width: 768px) {
                                    #komentar-container {
                                        grid-template-columns: 1fr 1fr 1fr;
                                        /* 3 kolom */
                                    }

                                    /* Tampilkan semua komentar pada desktop */
                                    .komentar-item {
                                        opacity: 1;
                                        visibility: visible;
                                        position: relative;
                                    }

                                    .show {
                                        background-color: #00000063;
                                        border-radius: 10px;
                                        padding: 20px;
                                        display: block;
                                    }



                                    /* Aturan komentar genap */
                                    .komentar-item:nth-child(even) p {
                                        margin-left: 0;
                                        text-align: left;
                                    }

                                    .komentar-item:nth-child(even) {
                                        text-align: left;
                                    }

                                    .komentar-item p {
                                        width: 70%;
                                    }

                                    @media only screen and (max-width: 600px) {
                                        .komentar-item:nth-child(even) {
                                            text-align: right;
                                        }

                                        .komentar-item:nth-child(even) p {
                                            margin-left: auto;
                                            text-align: right;
                                        }
                                    }

                                    /* Tombol "Load More" dan "Close" */
                            </style>

                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    const itemsPerPage = 5;
                                    const komentarContainer = document.getElementById("komentar-container");
                                    const loadMoreBtn = document.getElementById("load-more-btn");
                                    const closeBtn = document.getElementById("close-btn");
                                    let currentlyVisible = 0;

                                    function removeNestedContainers() {
                                        const nestedContainers = komentarContainer.querySelectorAll("#komentar-container");
                                        nestedContainers.forEach(nested => {
                                            komentarContainer.parentElement.appendChild(nested);
                                            const nestedItems = nested.querySelectorAll(".komentar-item");
                                            nestedItems.forEach(item => {
                                                item.classList.add("show");
                                            });
                                        });
                                    }

                                    function showAllCommentsInDesktop() {
                                        if (window.innerWidth >= 768) {
                                            const items = komentarContainer.querySelectorAll(".komentar-item");
                                            items.forEach(item => {
                                                item.classList.add("show");
                                            });
                                            loadMoreBtn.style.display = "none";
                                            closeBtn.style.display = "none";
                                        } else {
                                            updateComments();
                                        }
                                    }

                                    function updateComments() {
                                        removeNestedContainers();
                                        const items = komentarContainer.querySelectorAll(".komentar-item");

                                        if (window.innerWidth >= 768) {
                                            items.forEach(item => item.classList.add("show"));
                                            loadMoreBtn.style.display = "none";
                                            closeBtn.style.display = "none";
                                            return;
                                        }

                                        items.forEach((item, index) => {
                                            if (index < currentlyVisible) {
                                                item.classList.add("show");
                                            } else {
                                                item.classList.remove("show");
                                            }
                                        });

                                        if (currentlyVisible > itemsPerPage) {
                                            closeBtn.style.display = "block";
                                        } else {
                                            closeBtn.style.display = "none";
                                        }

                                        if (currentlyVisible >= items.length || items.length === 0) {
                                            loadMoreBtn.style.display = "none";
                                        } else {
                                            loadMoreBtn.style.display = "block";
                                        }
                                    }

                                    function loadMoreComments() {
                                        const items = komentarContainer.querySelectorAll(".komentar-item");
                                        const nextVisibleCount = currentlyVisible + itemsPerPage;

                                        for (let i = currentlyVisible; i < nextVisibleCount; i++) {
                                            if (items[i]) {
                                                items[i].classList.add("show");
                                            }
                                        }

                                        currentlyVisible = Math.min(nextVisibleCount, items.length);
                                        updateComments();
                                        saveVisibleComments();
                                    }

                                    function closeComments() {
                                        currentlyVisible = itemsPerPage;
                                        const items = komentarContainer.querySelectorAll(".komentar-item");

                                        items.forEach((item, index) => {
                                            if (index < itemsPerPage) {
                                                item.classList.add("show");
                                            } else {
                                                item.classList.remove("show");
                                            }
                                        });

                                        loadMoreBtn.style.display = "block";
                                        closeBtn.style.display = "none";
                                        saveVisibleComments();
                                    }

                                    function saveVisibleComments() {
                                        const items = komentarContainer.querySelectorAll(".komentar-item");
                                        const visibleIndexes = [];

                                        items.forEach((item, index) => {
                                            if (item.classList.contains("show")) {
                                                visibleIndexes.push(index);
                                            }
                                        });

                                        localStorage.setItem("visibleComments", JSON.stringify(visibleIndexes));
                                    }

                                    let resizeTimeout;
                                    window.addEventListener("resize", function() {
                                        clearTimeout(resizeTimeout);
                                        resizeTimeout = setTimeout(function() {
                                            showAllCommentsInDesktop();
                                        }, 250);
                                    });

                                    if (window.innerWidth < 768) {
                                        currentlyVisible = itemsPerPage;
                                    }

                                    // Tambahkan event listener untuk tombol close
                                    closeBtn.addEventListener("click", closeComments);
                                    loadMoreBtn.addEventListener("click", loadMoreComments);

                                    showAllCommentsInDesktop();
                                    updateComments();
                                });
                            </script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-3c6d9fa5 e-flex e-con-boxed e-con e-parent" data-id="3c6d9fa5"
            data-element_type="container" id="weddinggift">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-e46e152 e-con-full e-flex e-con e-child"
                    data-id="e46e152" data-element_type="container">
                    <div class="elementor-element elementor-element-2f177c25 e-flex e-con-boxed e-con e-child"
                        data-id="2f177c25" data-element_type="container">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-5416f685 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                data-id="5416f685" data-element_type="widget" data-aos="fade" data-aos-offset="0"
                                data-aos-delay="300" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                data-aos-anchor-placement="center" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Wedding Gift</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-226c6604 elementor-widget__width-inherit elementor-widget-mobile__width-inherit wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
                                data-id="226c6604" data-element_type="widget" data-aos="fade" data-aos-offset="0"
                                data-aos-delay="300" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                data-aos-anchor-placement="center" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    Bagi Bapak/Ibu/Saudara yang berkenan memberikan tanda kasih kepada kedua mempelai,
                                    dapat melalui nomor rekening berikut: </div>
                            </div>
                            <div class="elementor-element elementor-element-d65d7e4 e-con-full e-flex e-con e-child"
                                data-id="d65d7e4" data-element_type="container" data-aos="fade" data-aos-offset="0"
                                data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                data-aos-anchor-placement="center">
                                <div class="elementor-element elementor-element-a67fa92 e-con-full e-flex e-con e-child"
                                    data-id="a67fa92" data-element_type="container">
                                    <div class="elementor-element elementor-element-54a1484 e-con-full e-flex e-con e-child"
                                        data-id="54a1484" data-element_type="container">
                                        <div class="elementor-element elementor-element-2dc153b wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                            data-id="2dc153b" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Kiki Adelya
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-dce-background-color="#86868647"
                                        class="elementor-element elementor-element-35d1729 e-con-full e-flex e-con e-child"
                                        data-id="35d1729" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-element elementor-element-de1b558 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                            data-id="de1b558" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">BCA<br />
                                                    4160542433</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-961324f e-con-full e-flex e-con e-child"
                                        data-id="961324f" data-element_type="container">
                                        <div data-dce-background-color="#02010100"
                                            class="elementor-element elementor-element-1d15003 wdp-sticky-section-no elementor-widget elementor-widget-dce-copy-to-clipboard"
                                            data-id="1d15003" data-element_type="widget"
                                            data-widget_type="dce-copy-to-clipboard.default">
                                            <div class="elementor-widget-container">
                                                <div class="dce-clipboard-wrapper dce-clipboard-wrapper-textarea">
                                                    <button class="elementor-button elementor-size-sm" type="button"
                                                        id="dce-clipboard-btn-1"
                                                        data-clipboard-target="#dce-clipboard-value-1">
                                                        <span class="elementor-button-content-wrapper dce-flexbox">
                                                            <span
                                                                class="elementor-button-icon elementor-align-icon-left">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 312.1 389.8">
                                                                    <g id="Layer_2" data-name="Layer 2">
                                                                        <g id="Layer_1-2" data-name="Layer 1">
                                                                            <g>
                                                                                <path
                                                                                    d="M286.2,0c5.1,1.9,10.4,3.3,14.7,7a31.3,31.3,0,0,1,11.2,22.5V289.8c0,13.1-5.9,22.7-17.5,28.8a29.4,29.4,0,0,1-13.6,3,10.8,10.8,0,0,1-10.6-10.4c-.3-5.4,3.8-10.7,9.4-11.1,7.2-.5,10.8-4.1,10.7-12.6V34.1c0-9.4-3.1-12.5-12.6-12.5H103.2c-4.3,0-8.4.5-10.9,4.6-1.2,2-1.2,4.2-1.6,6.2-1.1,5.7-5.8,9.7-11.2,9.3A10.8,10.8,0,0,1,69.3,30.6a30.9,30.9,0,0,1,21.1-29c1.2-.4,2.6-.3,3.2-1.6Z">
                                                                                </path>
                                                                                <path
                                                                                    d="M0,229V100.4C0,84.6,8.6,73.2,23.6,69.1A36,36,0,0,1,33.4,68H209.6c20.1,0,33.2,13.2,33.2,33.3q.1,127.7,0,255.3c0,20.3-12.8,33.1-33.2,33.2H33.1C12.9,389.7,0,376.9,0,356.8Zm221,.2V102.1c0-9.3-3-12.3-12.2-12.3H31.8c-6,.1-9.2,2.9-10.1,8.7a23.6,23.6,0,0,0-.2,3.8V355.7a23.3,23.3,0,0,0,.6,5.3,8,8,0,0,0,6.9,6.6,23.3,23.3,0,0,0,5.3.3H159.5c16.7,0,33.5-.1,50.2,0,4.7,0,8.6-1.1,10.6-5.7.9-2.2.7-4.5.7-6.8Z">
                                                                                </path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg> </span>
                                                            <span class="elementor-button-text"></span>
                                                        </span>
                                                    </button>
                                                    <textarea class="elementor-size-sm dce-clipboard-value elementor-field-textual dce-offscreen dce-block"
                                                        id="dce-clipboard-value-1" aria-hidden="true">4160542433</textarea>
                                                </div>

                                                <script>
                                                    jQuery(function() {
                                                        var clipboard_1 = new ClipboardJS('#dce-clipboard-btn-1');
                                                        clipboard_1.on('success', function(e) {
                                                            jQuery('#dce-clipboard-btn-1').addClass('animated').addClass('tada');
                                                            setTimeout(function() {
                                                                jQuery('#dce-clipboard-btn-1').removeClass('animated').removeClass('tada');
                                                            }, 3000);
                                                            return false;
                                                        });
                                                        clipboard_1.on('error', function(e) {
                                                            console.log(e);
                                                        });
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-f04e1ba e-con-full e-flex e-con e-child"
                                    data-id="f04e1ba" data-element_type="container">
                                    <div class="elementor-element elementor-element-3de3fdf e-con-full e-flex e-con e-child"
                                        data-id="3de3fdf" data-element_type="container">
                                        <div class="elementor-element elementor-element-e3de025 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                            data-id="e3de025" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Jl. Astina
                                                    Selatan No. 13 Lingk. Candi Baru, Kec. Gianyar, Kab.
                                                    Gianyar, Bali</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-0021ddb e-con-full e-flex e-con e-child"
                                        data-id="0021ddb" data-element_type="container">
                                        <div data-dce-background-color="#02010100"
                                            class="elementor-element elementor-element-20955d8 elementor-align-right wdp-sticky-section-no elementor-widget elementor-widget-dce-copy-to-clipboard"
                                            data-id="20955d8" data-element_type="widget"
                                            data-widget_type="dce-copy-to-clipboard.default">
                                            <div class="elementor-widget-container">
                                                <div class="dce-clipboard-wrapper dce-clipboard-wrapper-textarea">
                                                    <button class="elementor-button elementor-size-sm" type="button"
                                                        id="dce-clipboard-btn-4"
                                                        data-clipboard-target="#dce-clipboard-value-4">
                                                        <span class="elementor-button-content-wrapper dce-flexbox">
                                                            <span
                                                                class="elementor-button-icon elementor-align-icon-left">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 312.1 389.8">
                                                                    <g id="Layer_2" data-name="Layer 2">
                                                                        <g id="Layer_1-2" data-name="Layer 1">
                                                                            <g>
                                                                                <path
                                                                                    d="M286.2,0c5.1,1.9,10.4,3.3,14.7,7a31.3,31.3,0,0,1,11.2,22.5V289.8c0,13.1-5.9,22.7-17.5,28.8a29.4,29.4,0,0,1-13.6,3,10.8,10.8,0,0,1-10.6-10.4c-.3-5.4,3.8-10.7,9.4-11.1,7.2-.5,10.8-4.1,10.7-12.6V34.1c0-9.4-3.1-12.5-12.6-12.5H103.2c-4.3,0-8.4.5-10.9,4.6-1.2,2-1.2,4.2-1.6,6.2-1.1,5.7-5.8,9.7-11.2,9.3A10.8,10.8,0,0,1,69.3,30.6a30.9,30.9,0,0,1,21.1-29c1.2-.4,2.6-.3,3.2-1.6Z">
                                                                                </path>
                                                                                <path
                                                                                    d="M0,229V100.4C0,84.6,8.6,73.2,23.6,69.1A36,36,0,0,1,33.4,68H209.6c20.1,0,33.2,13.2,33.2,33.3q.1,127.7,0,255.3c0,20.3-12.8,33.1-33.2,33.2H33.1C12.9,389.7,0,376.9,0,356.8Zm221,.2V102.1c0-9.3-3-12.3-12.2-12.3H31.8c-6,.1-9.2,2.9-10.1,8.7a23.6,23.6,0,0,0-.2,3.8V355.7a23.3,23.3,0,0,0,.6,5.3,8,8,0,0,0,6.9,6.6,23.3,23.3,0,0,0,5.3.3H159.5c16.7,0,33.5-.1,50.2,0,4.7,0,8.6-1.1,10.6-5.7.9-2.2.7-4.5.7-6.8Z">
                                                                                </path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg> </span>
                                                            <span class="elementor-button-text"></span>
                                                        </span>
                                                    </button>
                                                    <textarea class="elementor-size-sm dce-clipboard-value elementor-field-textual dce-offscreen dce-block"
                                                        id="dce-clipboard-value-4" aria-hidden="true">Jl. Astina Selatan No. 13 Lingk. Candi Baru, Kec. Gianyar, Kab. Gianyar, Bali</textarea>
                                                </div>

                                                <script>
                                                    jQuery(function() {
                                                        var clipboard_4 = new ClipboardJS('#dce-clipboard-btn-4');
                                                        clipboard_4.on('success', function(e) {
                                                            jQuery('#dce-clipboard-btn-4').addClass('animated').addClass('tada');
                                                            setTimeout(function() {
                                                                jQuery('#dce-clipboard-btn-4').removeClass('animated').removeClass('tada');
                                                            }, 3000);
                                                            return false;
                                                        });
                                                        clipboard_4.on('error', function(e) {
                                                            console.log(e);
                                                        });
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-dce-background-color="#111111"
                                    class="elementor-element elementor-element-8e585f5 elementor-align-left elementor-mobile-align-left elementor-widget-mobile__width-inherit elementor-widget__width-inherit wdp-sticky-section-no elementor-widget elementor-widget-button"
                                    data-id="8e585f5" data-element_type="widget" data-aos="fade" data-aos-offset="0"
                                    data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                    data-aos-anchor-placement="center" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-xs"
                                                href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjQzMDcwOCIsInRvZ2dsZSI6ZmFsc2V9"
                                                target="_blank">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-text">Confirm</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-5ee819e0 e-flex e-con-boxed e-con e-child"
                        data-id="5ee819e0" data-element_type="container">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-51077627 animated-slow dce_masking-none wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-image"
                                data-id="51077627" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:300}"
                                data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img decoding="async" src="{{ asset('assets/images/ferry/rekening.jpg') }}"
                                        title="1-59_compressed" alt="1-59_compressed" loading="lazy" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-72d39812 e-flex e-con-boxed e-con e-parent" data-id="72d39812"
            data-element_type="container" id="gallery">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-2f46f028 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                    data-id="2f46f028" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Our pre-wedding celebration.</h2>
                    </div>
                </div>
                <style>
                    .video-container {
                        width: 100%;
                        max-width: 100%;
                    }

                    .video-wrapper {
                        position: relative;
                        padding-bottom: 56.25%;
                        /* 16:9 aspect ratio */
                        height: 0;
                        overflow: hidden;
                    }

                    #youtube-player {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                    }

                    .video-thumbnail {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background-size: cover;
                        background-position: center;
                        cursor: pointer;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        transition: opacity 0.3s ease;
                    }

                    .video-thumbnail.hidden {
                        opacity: 0;
                        pointer-events: none;
                    }

                    .play-button {
                        width: 80px;
                        height: 80px;
                        cursor: pointer;
                        transition: transform 0.3s ease;
                    }

                    .play-button:hover {
                        transform: scale(1.1);
                    }

                    .play-button svg {
                        width: 100%;
                        height: 100%;
                        fill: #fff;
                        filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.3));
                    }

                    .screen-only {
                        position: absolute;
                        width: 1px;
                        height: 1px;
                        padding: 0;
                        margin: -1px;
                        overflow: hidden;
                        clip: rect(0, 0, 0, 0);
                        white-space: nowrap;
                        border: 0;
                    }
                </style>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const audio = document.getElementById('song');
                        let player;
                        let isAPIReady = false;

                        // Cek apakah YT API sudah ada
                        if (window.YT && window.YT.Player) {
                            initPlayer();
                        } else {
                            // Load YouTube API hanya sekali
                            if (!window.YTAPILoading) {
                                window.YTAPILoading = true;

                                window.onYouTubeIframeAPIReady = function() {
                                    isAPIReady = true;
                                    initPlayer();
                                };

                                var tag = document.createElement('script');
                                tag.src = "https://www.youtube.com/iframe_api";
                                var firstScriptTag = document.getElementsByTagName('script')[0];
                                firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                            }
                        }

                        function initPlayer() {
                            if (!document.getElementById('youtube-player')) return;

                            player = new YT.Player('youtube-player', {
                                videoId: 'lHBuzl7QBE8',
                                playerVars: {
                                    'autoplay': 0,
                                    'controls': 1,
                                    'modestbranding': 1,
                                    'loop': 1,
                                    'playlist': 'lHBuzl7QBE8',
                                    'rel': 0,
                                    'showinfo': 0,
                                    'iv_load_policy': 3
                                },
                                events: {
                                    'onReady': onPlayerReady,
                                    'onStateChange': onPlayerStateChange
                                }
                            });
                        }

                        function onPlayerReady(event) {
                            const thumbnail = document.getElementById('video-thumbnail');
                            if (thumbnail) {
                                thumbnail.addEventListener('click', function(e) {
                                    e.preventDefault();
                                    e.stopPropagation();
                                    this.classList.add('hidden');
                                    player.playVideo();
                                });
                            }
                        }

                        function onPlayerStateChange(event) {
                            if (!audio) return;

                            if (event.data === YT.PlayerState.PLAYING) {
                                if (!audio.paused) {
                                    audio.pause();
                                }
                            } else if (event.data === YT.PlayerState.PAUSED || event.data === YT.PlayerState.ENDED) {
                                if (audio.paused) {
                                    audio.play().catch(function(error) {
                                        console.log('Audio play prevented:', error);
                                    });
                                }
                            }
                        }
                    });
                </script>

                <div class="video-container">
                    <div class="video-wrapper">
                        <div id="youtube-player"></div>
                        <div class="video-thumbnail" id="video-thumbnail"
                            style="background-image: url('assets/images/ferry/youtube_thumbnail.jpg');">
                            <div class="play-button" role="button" aria-label="Play Video" tabindex="0">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 351 351.2">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <g>
                                                <path
                                                    d="M163.1,351.2l-18.5-2.7a170.7,170.7,0,0,1-77.2-33.9C32,286.9,10.4,250.7,2.7,206.4A175.8,175.8,0,0,1,125.4,7.5c68.2-20.4,141.4,1.7,186.5,56.8,20,24.4,32.2,52.5,37,83.8.8,5,1.4,10.1,2.1,15.2v23.3c-.2,1-.5,2-.6,3-1.4,8.4-2.1,17-4,25.3-8.9,38.4-28.7,70.2-58.9,95.5a170.1,170.1,0,0,1-82.1,38c-6.3,1.1-12.6,1.9-18.9,2.8ZM337.3,175.6c0-89.3-72.5-161.9-161.8-161.9S13.6,86.3,13.6,175.6,86.2,337.5,175.5,337.5,337.3,264.9,337.3,175.6Z">
                                                </path>
                                                <path
                                                    d="M117.3,175.3c0-26.8-.1-53.5.1-80.2a12.9,12.9,0,0,1,2.4-7.1c2.1-2.8,5.5-2.6,9.6-.3L176,114.6c31,17.9,62.1,35.8,93,53.8a12.7,12.7,0,0,1,5.1,5.9c1.3,3.3-.6,6-4.8,8.4l-49.7,28.8c-29.9,17.2-59.7,34.5-89.6,51.6a12.3,12.3,0,0,1-6.3,2c-4.1-.2-6.4-3.4-6.4-8.2-.1-8.3,0-16.5,0-24.7Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <span class="screen-only">Play Video</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-gallery-wrapper">
                    <div class="custom-gallery-container" id="customGallery">
                        @php
                            $order = [1, 2, 3, 4, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 6, 7, 8, 9];
                        @endphp

                        @foreach ($order as $index => $i)
                            @php
                                $ext = $i == 19 ? 'jpeg' : 'jpg';
                                $imgPath = asset("assets/images/ferry/galleries/{$i}.{$ext}");
                            @endphp

                            <div class="custom-gallery-item" data-index="{{ $index }}"
                                data-image="{{ $imgPath }}">
                                <img src="{{ $imgPath }}" alt="Gallery {{ $i }}" loading="lazy"
                                    decoding="async" width="400" height="600">
                                <div class="custom-gallery-overlay"></div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="custom-lightbox" id="customLightbox">
                    <button class="custom-lightbox-close" id="closeLightbox" aria-label="Close">&times;</button>
                    <div class="custom-lightbox-content">
                        <img class="custom-lightbox-image" id="lightboxImage" src="" alt="Gallery Image">
                    </div>
                    <div class="custom-lightbox-counter" id="lightboxCounter"></div>
                    <div class="swipe-indicator" id="swipeIndicator">← Swipe untuk navigasi →</div>
                </div>



            </div>
        </div>
        <div class="elementor-element elementor-element-6982c326 e-flex e-con-boxed e-con e-parent" data-id="6982c326"
            data-element_type="container">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-125eb89b e-con-full e-flex e-con e-child"
                    data-id="125eb89b" data-element_type="container">
                    <div class="elementor-element elementor-element-7637aa5f animated-slow dce_masking-none wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-image"
                        data-id="7637aa5f" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:300}"
                        data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img loading="lazy" decoding="async" width="2100" height="1756"
                                src="{{ asset('assets/images/ferry/home.jpg') }}"
                                class="attachment-large size-large wp-image-478959" alt="" />
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-1496a93d e-flex e-con-boxed e-con e-child"
                    data-id="1496a93d" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-3bd62f77 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                            data-id="3bd62f77" data-element_type="widget" data-aos="fade" data-aos-offset="0"
                            data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out"
                            data-aos-anchor-placement="center" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Thank You for Your
                                    Attendance and Support</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-757356e7 elementor-widget__width-inherit elementor-widget-mobile__width-inherit wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
                            data-id="757356e7" data-element_type="widget" data-aos="fade" data-aos-offset="0"
                            data-aos-delay="300" data-aos-duration="1000" data-aos-easing="ease-in-out"
                            data-aos-anchor-placement="center" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                Merupakan kebahagiaan dan kehormatan bagi kami apabila Bapak/Ibu/Saudara berkenan hadir
                                serta memberikan doa restu. </div>
                        </div>
                        <div class="elementor-element elementor-element-7b8ba4e6 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                            data-id="7b8ba4e6" data-element_type="widget" data-aos="fade" data-aos-offset="0"
                            data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out"
                            data-aos-anchor-placement="center" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Ferry Adel</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-bd268de hidden e-flex e-con-boxed e-con e-parent"
            data-id="bd268de" data-element_type="container">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-501dcb6 e-con-full navsound e-flex e-con e-child"
                    data-id="501dcb6" data-element_type="container"
                    data-settings="{&quot;position&quot;:&quot;fixed&quot;,&quot;dce_visibility_click&quot;:&quot;.mdw-side-menu-button&quot;,&quot;dce_visibility_click_show&quot;:&quot;fade&quot;,&quot;dce_visibility_click_toggle&quot;:&quot;yes&quot;,&quot;dce_visibility_event&quot;:&quot;click&quot;,&quot;dce_visibility_event_transition_delay&quot;:400}">
                    <div data-dce-background-color="#C2C2C200"
                        class="elementor-element elementor-element-e405301 wdp-sticky-section-no elementor-widget elementor-widget-dce_add_to_calendar"
                        data-id="e405301" data-element_type="widget" data-widget_type="dce_add_to_calendar.default">
                        <div class="elementor-widget-container">

                            <div class="elementor-button-wrapper">
                                <a download="Ferry-Adel"
                                    href="data:text/calendar;charset=utf8;base64,QkVHSU46VkNBTEVOREFSClZFUlNJT046Mi4wCkJFR0lOOlZFVkVOVApVSUQ6NTViNTliN2Q5YmFmNGZkY2JmYmI1MWJkZTgxOTVjMGYKU1VNTUFSWTpUaGUgV2VkZGluZyBvZiBGZXJyeSBBZGVsCkRUU1RBUlQ7VFpJRD1Bc2lhL0pha2FydGE6MjAyNTEwMTlUMTQzMDAwCkRURU5EO1RaSUQ9QXNpYS9KYWthcnRhOjIwMjUxMDE5VDE0MzAwMApERVNDUklQVElPTjo8cD5Ba3RpZmthbiBwZXJpbmdhdGFuIGFwYWJpbGEgYmVsdW0gYWt0aWYgc2VjYXJhIGJhd2Fhbi4gKGF0dXIgMTUgbWVuaXQgc2ViZWx1bW55YVwsIGF0YXUgc2VzdWFpa2FuIGxhZ2kpPC9wPjxwPkVuYWJsZSBhbGVydHMgaWYgdGhleSBhcmUgbm90IGFscmVhZHkgYWN0aXZlIGJ5IGRlZmF1bHQuIChzZXQgMTUgbWludXRlcyBwcmV2aW91c2x5XCwgb3IgYWRqdXN0IGFnYWluKTwvcD4KTExPQ0FUSU9OOmh0dHBzOi8vbWFwcy5hcHAuZ29vLmdsL0p5QmtyWXhMUWtpR1MyY1I2CkVORDpWRVZFTlQKRU5EOlZDQUxFTkRBUgo="
                                    class="elementor-button-link elementor-button elementor-size-sm" target="_blank"
                                    rel="nofollow" role="button">
                                    <span class="elementor-button-content-wrapper dce-flexbox">
                                        <span class="elementor-button-text">Save the date</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div data-dce-advanced-background-color="#68686861"
                        class="elementor-element elementor-element-3c57fb1 elementor-widget__width-initial elementor-widget-divider--view-line wdp-sticky-section-no elementor-widget elementor-widget-divider"
                        data-id="3c57fb1" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
                                <span class="elementor-divider-separator">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div data-dce-background-color="#C2C2C200"
                        class="elementor-element elementor-element-4a188b2 dqr wdp-sticky-section-no elementor-widget elementor-widget-button"
                        data-id="4a188b2" data-element_type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-size-sm" role="button">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-text">Download jpg</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div data-dce-advanced-background-color="#68686861"
                        class="elementor-element elementor-element-4a62ec7 elementor-widget__width-initial elementor-widget-divider--view-line wdp-sticky-section-no elementor-widget elementor-widget-divider"
                        data-id="4a62ec7" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
                                <span class="elementor-divider-separator">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-ae6e2d5 elementor-view-default wdp-sticky-section-no elementor-widget elementor-widget-weddingpress-audio"
                        data-id="ae6e2d5" data-element_type="widget" data-widget_type="weddingpress-audio.default">
                        <div class="elementor-widget-container">

                            <script>
                                var settingAutoplay = 'disable';
                                window.settingAutoplay = settingAutoplay === 'disable' ? false : true;
                            </script>

                            <div id="audio-container" class="audio-box">

                                <audio id="song" loop>
                                    <source src="{{ asset('assets/musics/the_way_you_look_at_me.mp3') }}"
                                        type="audio/mp3">
                                </audio>

                                <div class="elementor-icon-wrapper" id="unmute-sound" style="display: none;">
                                    <div class="elementor-icon">
                                        <i aria-hidden="true" class="fa fa-play-circle"></i>
                                    </div>
                                </div>

                                <div class="elementor-icon-wrapper" id="mute-sound" style="display: none;">
                                    <div class="elementor-icon">
                                        <i aria-hidden="true" class="fas fa-pause-circle"></i>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-2833199 elementor-widget-mobile__width-inherit elementor-fixed wdp-sticky-section-no elementor-widget elementor-widget-shortcode"
                    data-id="2833199" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;fixed&quot;}" data-widget_type="shortcode.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-shortcode">
                            <div data-elementor-type="section" data-elementor-id="258437"
                                class="elementor elementor-258437" data-elementor-post-type="elementor_library">
                                <div class="elementor-element elementor-element-45068ed mdw-side-menu-area e-flex e-con-boxed e-con e-parent"
                                    data-id="45068ed" data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-a27d9d8 e-con-full mdw-side-menu-button e-flex e-con e-child"
                                            data-id="a27d9d8" data-element_type="container" id="navsound-button"
                                            data-settings="{&quot;position&quot;:&quot;absolute&quot;}">
                                            <div class="elementor-element elementor-element-40682f0 elementor-view-default wdp-sticky-section-no elementor-widget elementor-widget-icon"
                                                data-id="40682f0" data-element_type="widget"
                                                data-widget_type="icon.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-wrapper">
                                                        <div class="elementor-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 21 7.5">
                                                                <defs>
                                                                    <style>
                                                                        .cls-1 {
                                                                            fill: ;
                                                                        }
                                                                    </style>
                                                                </defs>
                                                                <g id="Layer_2" data-name="Layer 2">
                                                                    <g id="Layer_1-2" data-name="Layer 1">
                                                                        <g>
                                                                            <path class="cls-1"
                                                                                d="M10.5,1.5H.3c-.2,0-.3,0-.3-.2V.2C0,0,0,0,.2,0H20.7c.2,0,.3,0,.3.3a1.7,1.7,0,0,0,0,1c0,.2-.1.2-.2.2H10.5Z">
                                                                            </path>
                                                                            <path class="cls-1"
                                                                                d="M10.5,7.5H.2c-.1,0-.2,0-.2-.2V6.1H20.7c.2,0,.3,0,.3.2a4,4,0,0,0,0,1.1c0,.2-.1.2-.2.2H10.5Z">
                                                                            </path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-646e438 navsound-button elementor-align-justify wdp-sticky-section-no elementor-widget elementor-widget-button"
                                                data-id="646e438" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a class="elementor-button elementor-button-link elementor-size-sm"
                                                            href="#">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">CLOSE</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-dce-background-overlay-color="#F7F4EE"
                                            class="elementor-element elementor-element-25af3ea e-con-full mdw-side-menu e-flex e-con e-child"
                                            data-id="25af3ea" data-element_type="container"
                                            data-settings="{&quot;position&quot;:&quot;absolute&quot;}">
                                            <div class="elementor-element elementor-element-6330979 e-con-full e-flex e-con e-child"
                                                data-id="6330979" data-element_type="container">
                                                <div class="elementor-element elementor-element-9ca20a0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width wdp-sticky-section-no elementor-widget elementor-widget-icon-list"
                                                    data-id="9ca20a0" data-element_type="widget"
                                                    data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item">
                                                                <a href="#home">

                                                                    <span class="elementor-icon-list-icon">
                                                                        <i aria-hidden="true"
                                                                            class="fas fa-arrow-right"></i> </span>
                                                                    <span class="elementor-icon-list-text">Home</span>
                                                                </a>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <a href="#profile">

                                                                    <span class="elementor-icon-list-icon">
                                                                        <i aria-hidden="true"
                                                                            class="fas fa-arrow-right"></i> </span>
                                                                    <span
                                                                        class="elementor-icon-list-text">Profile</span>
                                                                </a>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <a href="#lovestory">

                                                                    <span class="elementor-icon-list-icon">
                                                                        <i aria-hidden="true"
                                                                            class="fas fa-arrow-right"></i> </span>
                                                                    <span class="elementor-icon-list-text">Love
                                                                        Story</span>
                                                                </a>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <a href="#rsvp">

                                                                    <span class="elementor-icon-list-icon">
                                                                        <i aria-hidden="true"
                                                                            class="fas fa-arrow-right"></i> </span>
                                                                    <span class="elementor-icon-list-text">RSVP</span>
                                                                </a>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <a href="#weddinggift">

                                                                    <span class="elementor-icon-list-icon">
                                                                        <i aria-hidden="true"
                                                                            class="fas fa-arrow-right"></i> </span>
                                                                    <span class="elementor-icon-list-text">Wedding
                                                                        Gift</span>
                                                                </a>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <a href="#gallery">

                                                                    <span class="elementor-icon-list-icon">
                                                                        <i aria-hidden="true"
                                                                            class="fas fa-arrow-right"></i> </span>
                                                                    <span
                                                                        class="elementor-icon-list-text">Gallery</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-6f36671 e-con-full e-flex e-con e-child"
                                                    data-id="6f36671" data-element_type="container">
                                                    <div class="elementor-element elementor-element-6a3a61e e-con-full e-flex e-con e-child"
                                                        data-id="6a3a61e" data-element_type="container">
                                                        <div class="elementor-element elementor-element-9d0f45b elementor-widget__width-inherit mdw-side-menu-social elementor-icon-list--layout-traditional elementor-list-item-link-full_width wdp-sticky-section-no elementor-widget elementor-widget-icon-list"
                                                            data-id="9d0f45b" data-element_type="widget"
                                                            data-widget_type="icon-list.default">
                                                            <div class="elementor-widget-container">
                                                                <ul class="elementor-icon-list-items">
                                                                    <li class="elementor-icon-list-item">
                                                                        <span class="elementor-icon-list-text">Please
                                                                            click one of the menu options above to
                                                                            navigate directly to your desired
                                                                            page.</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1c42bd7 wdp-sticky-section-no elementor-widget elementor-widget-html"
                                                    data-id="1c42bd7" data-element_type="widget"
                                                    data-widget_type="html.default">
                                                    <div class="elementor-widget-container">
                                                        <style>
                                                            .mdw-side-menu-area {
                                                                --hide-on-scroll: true;
                                                                --hide-on-scroll-amount: 100;
                                                                --menu-icon-width: 48px;
                                                                --menu-icon-gap: 15px;
                                                            }

                                                            .mdw-side-menu-area .mdw-hide-on-scroll {
                                                                transition: all 0.3s ease-in-out;
                                                            }

                                                            .mdw-side-menu-area .mdw-hide-on-scroll.hide {
                                                                opacity: 0;
                                                                pointer-events: none;
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu-button {
                                                                cursor: pointer;
                                                                height: var(--min-height, 45px);
                                                                overflow: hidden !important;
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu-button .elementor-widget-button {
                                                                transition: all 0.5s cubic-bezier(0.76, 0, 0.24, 1);
                                                            }

                                                            .mdw-side-menu-area.open .mdw-side-menu-button .elementor-widget-button {
                                                                transform: translateY(-100%);
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu-button .elementor-button {
                                                                height: var(--min-height, 45px);
                                                                display: flex;
                                                                align-items: center;
                                                                justify-content: center;
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu-button .elementor-button-icon {
                                                                margin: 0;
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu-button .elementor-button-content-wrapper {
                                                                perspective: 6em;
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu-button .elementor-button-text:nth-child(1) {
                                                                transform-origin: top;
                                                                transition: transform .55s cubic-bezier(.645, .045, .355, 1), opacity .35s linear .2s;
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu-button .elementor-widget-button.open .elementor-button-text:nth-child(1) {
                                                                opacity: 0;
                                                                transform: rotateX(90deg) scaleX(.9) translate3d(0, -10px, 0);
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu-button .elementor-button-text:nth-child(2) {
                                                                position: absolute;
                                                                opacity: 0;
                                                                transform: rotateX(-90deg) scaleX(.9) translate3d(0, 10px, 0);
                                                                transform-origin: bottom;
                                                                transition: transform .55s cubic-bezier(.645, .045, .355, 1), opacity .35s linear .2s;
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu-button .elementor-widget-button.open .elementor-button-text:nth-child(2) {
                                                                opacity: 1;
                                                                transform: rotateX(0deg) scaleX(1) translateZ(0);
                                                                transition: transform .75s cubic-bezier(.645, .045, .355, 1), opacity .35s linear .3s;
                                                            }

                                                            .mdw-side-menu-area:not(.open-arrow) .mdw-side-menu {
                                                                pointer-events: none;
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu:before {
                                                                top: 0;
                                                                right: 0;
                                                                left: unset;
                                                                transition: all 0.75s cubic-bezier(.76, 0, .24, 1);
                                                            }

                                                            .mdw-side-menu-area:not(.open) .mdw-side-menu:before {
                                                                height: var(--button-height, 45px);
                                                                width: var(--button-width, 110px);
                                                                transform: translate(calc(-1*var(--button-right, 25px)), var(--button-top, 25px));
                                                            }

                                                            .mdw-side-menu-area:not(.anim) .mdw-side-menu:before {
                                                                transition: none;
                                                                opacity: 0;
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu .e-con::-webkit-scrollbar,
                                                            .mdw-side-menu-area .mdw-side-menu .e-container::-webkit-scrollbar {
                                                                display: none;
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu .e-con,
                                                            .mdw-side-menu-area .mdw-side-menu .e-container {
                                                                overflow-y: auto;
                                                                max-height: calc(100vh - 20px - var(--margin-block-start, 113px));
                                                                -ms-overflow-style: none;
                                                                scrollbar-width: none;
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu .elementor-icon-list-item,
                                                            .mdw-side-menu-area .mdw-side-menu .elementor-icon-list-item a {
                                                                perspective: calc(3*48px);
                                                                perspective-origin: bottom;
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu .elementor-icon-list-item {
                                                                margin-top: 0 !important;
                                                                padding-top: var(--padding-top);
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu .elementor-icon-list-item:first-child {
                                                                padding-top: 0;
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu .elementor-icon-list-item a {
                                                                outline: none;
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu .elementor-icon-list-icon {
                                                                width: var(--menu-icon-width, 48px);
                                                                height: calc(0.6*var(--menu-icon-width, 48px));
                                                                align-items: center;
                                                                padding-right: var(--menu-icon-gap, 15px);
                                                                overflow: hidden;
                                                                opacity: 0;
                                                                box-sizing: content-box;
                                                            }

                                                            .mdw-side-menu-area.open-arrow .mdw-side-menu .elementor-icon-list-icon {
                                                                opacity: 1;
                                                                transition: all 0s cubic-bezier(.215, .61, .355, 1) calc(var(--index, 0) * .1s + 0.55s);
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu .elementor-icon-list-icon i {
                                                                width: 100% !important;
                                                                height: 0.1em;
                                                                background: currentColor;
                                                                position: relative;
                                                                margin-left: calc(0px - var(--menu-icon-width, 48px) - var(--menu-icon-gap, 15px));
                                                                transition: all .65s cubic-bezier(.215, .61, .355, 1) !important;
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu .elementor-icon-list-icon svg {
                                                                display: none;
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu .elementor-icon-list-item:hover .elementor-icon-list-icon i {
                                                                margin-left: -0.07em;
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu .elementor-icon-list-icon i:before,
                                                            .mdw-side-menu-area .mdw-side-menu .elementor-icon-list-icon i:after {
                                                                content: "";
                                                                position: absolute;
                                                                width: 40%;
                                                                transform: rotate(45deg) translateX(0.05em);
                                                                transform-origin: right center;
                                                                height: 0.1em;
                                                                background: currentColor;
                                                                right: 0;
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu .elementor-icon-list-icon i:after {
                                                                transform: rotate(-45deg) translateX(0.05em);
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu .elementor-icon-list-text {
                                                                transform: rotateX(90deg) translate3d(0, 60px, 0);
                                                                opacity: 0;
                                                                transition: transform 0s linear .45s, opacity 0.3s linear !important;
                                                                transform-origin: center bottom;
                                                                padding-left: 0 !important;
                                                                max-width: calc(100% - var(--menu-icon-width, 48px) - var(--menu-icon-gap, 15px));
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu .elementor-icon-list-icon+.elementor-icon-list-text {
                                                                margin-left: calc(0px - var(--menu-icon-width, 48px) - var(--menu-icon-gap, 15px));
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu .elementor-icon-list-item:hover .elementor-icon-list-text {
                                                                margin-left: 0;
                                                            }

                                                            .mdw-side-menu-area.open-instant .mdw-side-menu .elementor-icon-list-text {
                                                                transform: rotateX(0deg);
                                                                opacity: 1;
                                                                transition: transform .65s cubic-bezier(.215, .61, .355, 1) calc(var(--index, 0) * .1s + .55s), opacity .35s linear calc(var(--index, 0) * .1s + .55s), margin-left .65s cubic-bezier(.215, .61, .355, 1) !important;
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu-social {
                                                                display: block;
                                                                background: none;
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu-social .elementor-widget-empty-icon {
                                                                display: none;
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu-social .elementor-icon-list-item {
                                                                width: 47%;
                                                                float: left;
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu-social a {
                                                                display: inline-block;
                                                                width: auto;
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu-social .elementor-icon-list-text {
                                                                transform: translate3d(0, 100%, 0);
                                                                transition: transform 0s linear .45s, opacity 0.3s linear;
                                                                max-width: 100%;
                                                            }

                                                            .mdw-side-menu-area.open-instant .mdw-side-menu-social .elementor-icon-list-text {
                                                                transition: opacity .45s linear 0s, transform .65s cubic-bezier(.215, .61, .355, 1) 0s !important;
                                                                transition-delay: calc(var(--index)*.1s + .7s) !important;
                                                            }



                                                            .mdw-side-menu-area .mdw-side-menu-social .elementor-icon-list-text:after {
                                                                content: "";
                                                                height: 1px;
                                                                width: 100%;
                                                                position: absolute;
                                                                bottom: 0;
                                                                left: 0;
                                                                background: currentColor;
                                                                transform: scaleX(0%);
                                                                transform-origin: left;
                                                                transition: all 0.75s cubic-bezier(.645, .045, .355, 1);
                                                            }

                                                            .mdw-side-menu-area .mdw-side-menu-social .elementor-icon-list-item:hover .elementor-icon-list-text:after {
                                                                transform: scaleX(100%);
                                                            }

                                                            @media (max-width:767px) {
                                                                .mdw-side-menu-area {
                                                                    --menu-icon-width: 38px;
                                                                    --menu-icon-gap: 10px;
                                                                }

                                                                .mdw-side-menu-area .mdw-side-menu-social .elementor-icon-list-item {
                                                                    width: 50%;
                                                                }
                                                            }
                                                        </style>
                                                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                                        <script>
                                                            if (!MDWNonce108) {
                                                                var MDWNonce108 = true
                                                                var $ = jQuery
                                                                $(document).ready(function() {

                                                                    function getCSS(el, property) {
                                                                        return getComputedStyle(el.get(0)).getPropertyValue(property)
                                                                    }

                                                                    function setCSS(el, property, value) {
                                                                        el.each(function(i) {
                                                                            el.get(i).style.setProperty(property, value)
                                                                        })
                                                                    }

                                                                    function setSmallState($this) {
                                                                        var button = $this.find('.mdw-side-menu-button'),
                                                                            mainMenu = $this.find('.mdw-side-menu'),
                                                                            buttonRight = (parseFloat(getCSS(button, 'right')) - parseFloat(getCSS(mainMenu,
                                                                                'right'))) + 'px',
                                                                            buttonTop = (parseFloat(getCSS(button, 'top')) - parseFloat(getCSS(mainMenu, 'top'))) +
                                                                            'px',
                                                                            buttonHeight = button.height(),
                                                                            buttonWidth = button.width()

                                                                        setCSS($this, '--button-right', buttonRight)
                                                                        setCSS($this, '--button-top', buttonTop)
                                                                        setCSS($this, '--button-height', buttonHeight + 'px')
                                                                        setCSS($this, '--button-width', buttonWidth + 'px')

                                                                        $this.find('.mdw-side-menu .elementor-widget-icon-list').each(function(i) {
                                                                            var paddingBottom = getCSS($(this).find('.elementor-icon-list-item').eq(0),
                                                                                'padding-bottom')
                                                                            setCSS($(this).find('.elementor-icon-list-item'), '--padding-top', paddingBottom)
                                                                        })
                                                                    }

                                                                    $(window).on('load resize', function() {
                                                                        $('.mdw-side-menu-area').each(function() {
                                                                            setSmallState($(this))
                                                                        })
                                                                    })

                                                                    $('.mdw-side-menu-area').each(function() {

                                                                        var $this = $(this)
                                                                        setSmallState($this)
                                                                        setTimeout(function() {
                                                                            $this.addClass('anim')
                                                                        }, 100)

                                                                        $(this).find('.mdw-side-menu .elementor-icon-list-item').each(function(i) {
                                                                            setCSS($(this), '--index', i)
                                                                            var icon = $(this).find('.elementor-icon-list-icon')
                                                                            if (icon.length && !icon.find('i').length) {
                                                                                icon.append('<i aria-hidden="true" class="fas fa-arrow-right"></i>')
                                                                            }
                                                                        })
                                                                    })

                                                                    $('.mdw-side-menu-button .elementor-widget-button').each(function() {
                                                                        var wrapper = $(this).find('.elementor-button-content-wrapper'),
                                                                            text = $(this).find('.elementor-button-text')
                                                                        text.clone().appendTo(wrapper)
                                                                    })

                                                                    var clickLock = false

                                                                    $('.mdw-side-menu-button').on('click', function() {
                                                                        if (clickLock) return
                                                                        var $this = $(this),
                                                                            menu = $this.closest('.mdw-side-menu-area'),
                                                                            button = $this.find('.elementor-widget-button')
                                                                        clickLock = true
                                                                        if (menu.hasClass('open')) {
                                                                            button.eq(1).removeClass('open')
                                                                            menu.removeClass('open-arrow')
                                                                            setTimeout(function() {
                                                                                menu.removeClass('open-instant')
                                                                            }, 300)
                                                                            setTimeout(function() {
                                                                                menu.removeClass('open')
                                                                            }, 500)
                                                                            setTimeout(function() {
                                                                                button.eq(0).removeClass('open')
                                                                            }, 750)
                                                                        } else {
                                                                            button.eq(0).addClass('open')
                                                                            setTimeout(function() {
                                                                                menu.addClass('open open-instant open-arrow')
                                                                            }, 500)
                                                                            setTimeout(function() {
                                                                                button.eq(1).addClass('open')
                                                                            }, 750)
                                                                        }
                                                                        setTimeout(function() {
                                                                            clickLock = false
                                                                        }, 750)
                                                                    })

                                                                    $('.mdw-side-menu-button a').on('click', function(e) {
                                                                        e.preventDefault()
                                                                    })

                                                                    $('body').on('click', function(e) {
                                                                        $('.mdw-side-menu-area').each(function() {
                                                                            if ($(this).hasClass('open-instant') && !$(e.target).closest(
                                                                                    '.mdw-side-menu').length && !$(e.target).closest(
                                                                                    '.mdw-side-menu-button').length) {
                                                                                $(this).find('.mdw-side-menu-button').trigger('click')
                                                                            }
                                                                        })
                                                                    })

                                                                    $(window).on('scroll', function() {
                                                                        $('.mdw-hide-on-scroll').each(function() {
                                                                            var offset = isNaN(parseFloat(getCSS($(this), '--hide-on-scroll-amount'))) ?
                                                                                parseFloat(getCSS($(this), '--hide-on-scroll-amount')) : 100
                                                                            if (getCSS($(this), '--hide-on-scroll').trim() == 'true') {
                                                                                if ($(window).scrollTop() > offset) {
                                                                                    $(this).addClass('hide')
                                                                                } else {
                                                                                    $(this).removeClass('hide')
                                                                                }
                                                                            }
                                                                        })
                                                                    })
                                                                })
                                                            }
                                                        </script>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-9d679ce wdp-sticky-section-no elementor-widget elementor-widget-html"
                                                    data-id="9d679ce" data-element_type="widget"
                                                    data-widget_type="html.default">
                                                    <div class="elementor-widget-container">
                                                        <script>
                                                            document.addEventListener("DOMContentLoaded", function() {
                                                                const listItems = document.querySelectorAll(".elementor-icon-list-item");

                                                                listItems.forEach(item => {
                                                                    const textElement = item.querySelector(".elementor-icon-list-text");
                                                                    if (textElement && textElement.textContent.trim() === "") {
                                                                        item.remove(); // Menghapus elemen <li> jika teks kosong
                                                                    }
                                                                });
                                                            });

                                                            /////
                                                            // Mendapatkan semua elemen <li> dalam daftar
                                                            const listItems = document.querySelectorAll('.elementor-icon-list-item');

                                                            // Menambahkan kelas "mdw-side-menu-button" ke setiap <li>
                                                            listItems.forEach(item => {
                                                                item.classList.add('mdw-side-menu-button');
                                                            });
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-acf50c5 wdp-sticky-section-no elementor-widget elementor-widget-html"
                    data-id="acf50c5" data-element_type="widget" data-widget_type="html.default">
                    <div class="elementor-widget-container">
                        <script>
                            document.addEventListener('DOMContentLoaded', () => {
                                const navSound = document.querySelector('.navsound');
                                const sideMenuArea = document.querySelector('.mdw-side-menu-area');

                                if (sideMenuArea) {
                                    // Fungsi untuk mengatur visibilitas navSound berdasarkan class sideMenuArea
                                    const updateNavSoundVisibility = () => {
                                        if (sideMenuArea.classList.contains('open') &&
                                            sideMenuArea.classList.contains('open-instant') &&
                                            sideMenuArea.classList.contains('open-arrow')) {
                                            navSound.classList.add('show');
                                        } else {
                                            navSound.classList.remove('show');
                                        }
                                    };

                                    // Jalankan saat pertama kali
                                    updateNavSoundVisibility();

                                    // Observer untuk memantau perubahan class pada sideMenuArea
                                    const observer = new MutationObserver(() => {
                                        updateNavSoundVisibility();
                                    });

                                    // Inisiasi observer
                                    observer.observe(sideMenuArea, {
                                        attributes: true,
                                        attributeFilter: ['class']
                                    });

                                    // Pastikan observer dihentikan jika tidak diperlukan lagi
                                    window.addEventListener('beforeunload', () => {
                                        observer.disconnect();
                                    });
                                } else {
                                    console.warn('.mdw-side-menu-area tidak ditemukan di halaman.');
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-2321b59 e-flex e-con-boxed e-con e-parent" data-id="2321b59"
            data-element_type="container">
            <div class="e-con-inner">
                <div class="dce-visibility-element-hidden dce-visibility-original-content dce-visibility-event elementor-element elementor-element-2eeae166 e-con-full hidden e-flex e-con e-child"
                    data-id="2eeae166" data-element_type="container"
                    data-settings="{&quot;position&quot;:&quot;fixed&quot;,&quot;enabled_visibility&quot;:&quot;yes&quot;,&quot;dce_visibility_selected&quot;:&quot;yes&quot;,&quot;dce_visibility_event&quot;:&quot;click&quot;}">
                    <div class="dce-visibility-element-hidden dce-visibility-original-content dce-visibility-event elementor-element elementor-element-5d865c7d e-con-full e-flex e-con e-child"
                        data-dce-background-color="#FFFFFF" data-id="5d865c7d" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;enabled_visibility&quot;:&quot;yes&quot;,&quot;dce_visibility_click&quot;:&quot;#openedit&quot;,&quot;dce_visibility_click_show&quot;:&quot;slide&quot;,&quot;dce_visibility_event_transition_delay&quot;:500,&quot;dce_visibility_click_toggle&quot;:&quot;yes&quot;,&quot;dce_visibility_selected&quot;:&quot;yes&quot;,&quot;dce_visibility_event&quot;:&quot;click&quot;}">
                        <div class="elementor-element elementor-element-46c2ccd5 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                            data-id="46c2ccd5" data-element_type="widget"
                            data-settings="{&quot;dce_enable_tooltip&quot;:&quot;yes&quot;,&quot;dce_tooltip_content&quot;:&quot;Klik update setelah melakukan perubahan di masing-masing bagian!  Jika tidak perubahan tidak disimpan&quot;,&quot;dce_tooltip_arrow&quot;:&quot;yes&quot;,&quot;dce_tooltip_follow_cursor&quot;:&quot;false&quot;,&quot;dce_tooltip_max_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:200,&quot;sizes&quot;:[]},&quot;dce_tooltip_max_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;dce_tooltip_max_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;dce_tooltip_touch&quot;:&quot;true&quot;,&quot;dce_tooltip_zindex&quot;:&quot;9999&quot;}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Note!</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-9df43db e-grid e-con-full e-con e-child"
                            data-id="9df43db" data-element_type="container">
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-5e8e7873 elementor-align-justify elementor-mobile-align-justify elementor-widget__width-initial wdp-sticky-section-no elementor-widget elementor-widget-button"
                        data-id="5e8e7873" data-element_type="widget" id="openedit"
                        data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-icon">
                                            <i aria-hidden="true" class="far fa-edit"></i> </span>
                                        <span class="elementor-button-text">EDit</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-3cf440e9 wdp-sticky-section-no elementor-widget elementor-widget-html"
                        data-id="3cf440e9" data-element_type="widget" data-widget_type="html.default">
                        <div class="elementor-widget-container">
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var submitButtons = document.querySelectorAll('.fea-submit-button.button');
                                    submitButtons.forEach(function(button) {
                                        button.textContent = "Update";
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-dbf62bf e-con-full e-flex e-con e-child"
                    data-id="dbf62bf" data-element_type="container">
                    <div class="elementor-element elementor-element-5609f1f2 wdp-sticky-section-no elementor-widget elementor-widget-html"
                        data-id="5609f1f2" data-element_type="widget" data-widget_type="html.default">
                        <div class="elementor-widget-container">
                            <meta name="theme-color" content="#000">
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-32339151 wdp-sticky-section-no elementor-widget elementor-widget-html"
                        data-id="32339151" data-element_type="widget" data-widget_type="html.default">
                        <div class="elementor-widget-container">
                            <style>
                                /* Posisi absolute di halaman biasa */
                                #section-cover {
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                }

                                /* Posisi normal saat di halaman edit Elementor */
                                .elementor-editor-active #section-cover {
                                    position: relative;
                                }


                                /*ANIMASI TEKS COVER*/
                                /* Default state for the element with class animasi */
                                .animasi {
                                    opacity: 0;
                                    /* Mulai dalam keadaan tidak terlihat */
                                    transform: scale(1.5);
                                    /* Mulai dari ukuran besar */
                                    filter: blur(10px);
                                    /* Mulai dengan blur */
                                    transition: opacity 1.5s ease, transform 1.5s ease, filter 1.5s ease;
                                    /* Perpanjang durasi menjadi 1.5 detik */
                                }

                                /* Zoom-out animation triggered after click */
                                .animasi.zoom-out {
                                    opacity: 1;
                                    /* Menjadi terlihat */
                                    transform: scale(1);
                                    /* Mengecil ke ukuran normal */
                                    filter: blur(0);
                                    /* Blur menghilang saat animasi berjalan */
                                }


                                .elementor-editor-active .animasi {
                                    opacity: 1 !important;
                                    transform: scale(1) !important;
                                    filter: blur(0) !important;
                                }
                            </style>





                            <script>
                                window.onbeforeunload = function() {
                                    window.scrollTo(0, 0);
                                };

                                var isSectionLocked = true; // Menyimpan status kunci tampilan section

                                // Menambahkan variabel untuk audio
                                const wdpAudio = document.body.contains(document.getElementById('song')) ? document.getElementById('song') : false;

                                // Mengunci tampilan section pertama saat halaman dimuat
                                window.addEventListener('DOMContentLoaded', function() {
                                    lockSection();
                                });

                                // Fungsi untuk mengunci tampilan section
                                function lockSection() {
                                    if (isSectionLocked) {
                                        disableScrolling();
                                        document.body.style.position = "fixed";
                                        document.body.style.overflowY = "scroll";
                                        document.body.style.height = "100vh";
                                        document.getElementById("section-cover").style.width =
                                            "100vw"; // Menambahkan gaya untuk membuat cover full width
                                    }
                                }

                                // Fungsi untuk membuka tampilan section
                                function unlockSection() {
                                    enableScrolling();
                                    document.body.style.position = "";
                                    document.body.style.overflowY = "";
                                    document.getElementById("section-cover").style.width =
                                        ""; // Menghapus gaya untuk mengembalikan lebar cover ke nilai aslinya
                                }

                                // Menambahkan event listener untuk perubahan visibility
                                document.addEventListener('visibilitychange', handleVisibilityChange);

                                function handleVisibilityChange() {
                                    if (document.hidden) {
                                        // Halaman tidak terlihat, jeda audio
                                        pauseAudio();
                                    } else {
                                        // Halaman terlihat kembali, lanjutkan pemutaran audio jika diperlukan
                                        playAudio();
                                    }
                                }

                                document.getElementById("tombol-buka").onclick = function() {
                                    unlockSection();
                                    playAudio();
                                };

                                function disableScrolling() {
                                    var x = window.scrollX;
                                    var y = window.scrollY;
                                    window.onscroll = function() {
                                        window.scrollTo(x, y);
                                    };
                                }

                                function enableScrolling() {
                                    window.onscroll = null;
                                }

                                // Fungsi untuk memutar audio
                                function playAudio() {
                                    if (wdpAudio) {
                                        wdpAudio.play();
                                    }
                                }

                                // Fungsi untuk menjeda audio
                                function pauseAudio() {
                                    if (wdpAudio) {
                                        wdpAudio.pause();
                                    }
                                }


                                //tambahkan animasi setelah cover
                                document.getElementById('tombol-buka').addEventListener('click', function() {
                                    // Menghilangkan section-cover dengan blur
                                    document.getElementById('section-cover').classList.add('blur-out');

                                    // Menambahkan animasi zoom-out ke elemen dengan class animasi setelah sedikit jeda
                                    setTimeout(function() {
                                        document.querySelectorAll('.animasi').forEach(function(element) {
                                            element.classList.add('zoom-out');
                                        });
                                    }, 50); // Jeda 50ms agar efek terlihat lebih smooth
                                });
                            </script>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-bfa2779 wdp-sticky-section-no elementor-widget elementor-widget-html"
                        data-id="bfa2779" data-element_type="widget" data-widget_type="html.default">
                        <div class="elementor-widget-container">
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
                            <script src="https://cdn.jsdelivr.net/npm/split-type@0.3.4/umd/index.min.js"></script>



                            <script>
                                gsap.registerPlugin(ScrollTrigger);

                                document.querySelectorAll(".cool-split").forEach((splitElement) => {
                                    splitElement.querySelectorAll("h3").forEach((h2Element) => {
                                        // Ambil warna default elemen <h2> sebelum animasi
                                        const defaultColor = window.getComputedStyle(h2Element).color;

                                        // Membagi teks di dalam elemen <h2> menjadi karakter
                                        const split = new SplitType(h2Element, {
                                            types: "words, chars"
                                        });

                                        // Pastikan elemen memiliki warna default dan terlihat sebelum animasi
                                        split.chars.forEach((char) => {
                                            char.style.color = defaultColor; // Tetapkan warna default
                                            char.style.opacity = 1; // Pastikan terlihat
                                        });

                                        // Timeline animasi untuk elemen ini
                                        gsap.timeline({
                                            scrollTrigger: {
                                                trigger: h2Element, // Elemen <h2> ini menjadi trigger
                                                start: "top 50%", // Animasi dimulai saat elemen masuk viewport
                                                end: "bottom 30%", // Animasi selesai saat elemen keluar dari viewport
                                                scrub: 0.5, // Sinkronisasi animasi dengan scroll
                                            },
                                        }).to(split.chars, {
                                            color: "#D9D9D9", // Ubah warna menjadi putih
                                            stagger: 0.1, // Tunda antar karakter
                                            duration: 0.3,
                                        });
                                    });
                                });
                            </script>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-108d2be wdp-sticky-section-no elementor-widget elementor-widget-html"
                        data-id="108d2be" data-element_type="widget" data-widget_type="html.default">
                        <div class="elementor-widget-container">
                            <style>
                                .section-tombol {
                                    opacity: 0;
                                    transform: translateY(20px);
                                    /* Posisi awal untuk animasi fade-up */
                                    transition: opacity 0.5s ease, transform 0.5s ease;
                                }

                                .section-tombol.fade-up {
                                    opacity: 1;
                                    transform: translateY(0);
                                    /* Posisi akhir */
                                }

                                .section-tombol.fade-down {
                                    opacity: 0;
                                    transform: translateY(20px);
                                    /* Kembali ke posisi awal */
                                }

                                /* Tambahan untuk mode edit Elementor */
                                .elementor-editor-active .section-tombol {
                                    opacity: 1 !important;
                                    transform: translateY(0) !important;
                                    display: block !important;
                                }
                            </style>

                            <script>
                                window.addEventListener('DOMContentLoaded', function() {
                                    var sectionTombol = document.querySelector('.section-tombol');

                                    // Jika dalam mode edit Elementor, elemen langsung terlihat
                                    if (document.body.classList.contains('elementor-editor-active')) {
                                        sectionTombol.style.display = 'block';
                                        sectionTombol.classList.add('fade-up');
                                        return;
                                    }

                                    sectionTombol.style.display = 'none'; // Disembunyikan secara default saat DOM selesai dimuat

                                    window.addEventListener('scroll', function() {
                                        var scrollPosition = window.scrollY || window.pageYOffset;

                                        // Atur kondisi kapan elemen akan muncul
                                        if (scrollPosition > 0) { // Muncul saat pengguna mulai menggulir
                                            if (!sectionTombol.classList.contains('visible')) {
                                                sectionTombol.style.display = 'block';
                                                setTimeout(() => {
                                                    sectionTombol.classList.add('fade-up');
                                                    sectionTombol.classList.add('visible');
                                                }, 10); // Sedikit delay agar animasi terlihat
                                            }
                                        } else {
                                            if (sectionTombol.classList.contains('visible')) {
                                                sectionTombol.classList.remove('fade-up');
                                                sectionTombol.classList.add('fade-down');
                                                sectionTombol.classList.remove('visible');

                                                setTimeout(() => {
                                                    if (!sectionTombol.classList.contains('visible')) {
                                                        sectionTombol.style.display = 'none';
                                                        sectionTombol.classList.remove('fade-down');
                                                    }
                                                }, 500); // Pastikan sesuai dengan durasi animasi CSS
                                            }
                                        }
                                    });
                                });
                            </script>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-00394a5 wdp-sticky-section-no elementor-widget elementor-widget-html"
                        data-id="00394a5" data-element_type="widget" data-widget_type="html.default">
                        <div class="elementor-widget-container">
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    // Seleksi semua elemen yang ingin disembunyikan
                                    var elements = document.querySelectorAll(".hidden");

                                    // Tambahkan delay untuk menghindari glitch
                                    setTimeout(function() {
                                        elements.forEach(function(element) {
                                            // Menghapus class 'hidden' dan menambahkan class 'visible'
                                            element.classList.remove("hidden");
                                            element.classList.add("visible");
                                        });
                                    }, 100); // Delay singkat, sesuaikan jika diperlukan
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dce-visibility-element-hidden dce-visibility-original-content dce-visibility-event elementor-element elementor-element-8bfda68 e-flex e-con-boxed e-con e-parent"
            data-dce-background-color="#101010E6" data-id="8bfda68" data-element_type="container"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;position&quot;:&quot;fixed&quot;,&quot;enabled_visibility&quot;:&quot;yes&quot;,&quot;dce_visibility_click&quot;:&quot;.dqr&quot;,&quot;dce_visibility_click_show&quot;:&quot;fade&quot;,&quot;dce_visibility_click_toggle&quot;:&quot;yes&quot;,&quot;dce_visibility_selected&quot;:&quot;yes&quot;,&quot;dce_visibility_event&quot;:&quot;click&quot;,&quot;dce_visibility_event_transition_delay&quot;:400}">
            <div class="e-con-inner">
                <div data-dce-background-color="#02010100"
                    class="elementor-element elementor-element-6756209 dqr wdp-sticky-section-no elementor-widget elementor-widget-button"
                    data-id="6756209" data-element_type="widget" data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 335.2 335.2">
                                            <g id="Layer_2" data-name="Layer 2">
                                                <g id="Layer_1-2" data-name="Layer 1">
                                                    <path
                                                        d="M11.8.8c4.8-.1,7.7,1.9,10.5,4.7L123.9,107c13.6,13.6,27.2,27.1,40.7,40.8,2.2,2.3,3.4,2.6,5.9.1q71.4-71.7,143-143.2C317,1.2,320.9-.8,325.9.3a12,12,0,0,1,6.3,19.5,41.1,41.1,0,0,1-2.9,3q-70.9,70.9-142.1,142c-2.2,2.3-2.3,3.3,0,5.7l143,142.7c2.4,2.4,4.5,5,4.9,8.5a12.1,12.1,0,0,1-6,12,12,12,0,0,1-13.6-1.4,39.7,39.7,0,0,1-3-2.8l-142-142.1c-2.4-2.5-3.6-2.2-5.9.1L21.8,330.4c-3.8,3.8-8,6-13.4,4.2a11.8,11.8,0,0,1-5.5-19,39.7,39.7,0,0,1,2.8-3l142.1-142c2.5-2.4,2.3-3.6,0-5.9Q76.4,93.5,5.2,22.1c-7.4-7.4-5.4-18,4-20.8A8.6,8.6,0,0,1,11.8.8Z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg> </span>
                                    <span class="elementor-button-text">Close</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-97cb3cf animated-slow wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-shortcode"
                    data-id="97cb3cf" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}"
                    data-widget_type="shortcode.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-shortcode">
                            <div data-elementor-type="section" data-elementor-id="377529"
                                class="elementor elementor-377529" data-elementor-post-type="elementor_library">
                                <div data-dce-background-overlay-color="#EBE3DA"
                                    class="elementor-element elementor-element-06243b8 e-con-full selebaran e-flex e-con e-parent"
                                    data-id="06243b8" data-element_type="container"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-element elementor-element-0692e8b bacground-save e-flex e-con-boxed e-con e-child"
                                        data-id="0692e8b" data-element_type="container">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-44f0f70 konten-gambar dce_masking-none wdp-sticky-section-no elementor-widget elementor-widget-image"
                                                data-id="44f0f70" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img loading="lazy" decoding="async" width="1400"
                                                        height="2100"
                                                        src="{{ asset('assets/images/ferry/home.jpg') }}"
                                                        class="attachment-full size-full wp-image-478532"
                                                        alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-93bb6b2 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                        data-id="93bb6b2" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">The Wedding of
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-ec7cf6f wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                        data-id="ec7cf6f" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Ferry Adel
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-40c46bf wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                        data-id="40c46bf" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">19.10.2025</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-ae08e90 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                        data-id="ae08e90" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">To: KIKI ADELYA
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3a1df1f wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                                        data-id="3a1df1f" data-element_type="widget"
                                        data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-fb5878e e-con-full e-flex e-con e-child"
                                        data-id="fb5878e" data-element_type="container">
                                        <div class="elementor-element elementor-element-8eace24 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                            data-id="8eace24" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Thank You
                                                    for Your Attendance and Support</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-47882aa elementor-widget__width-initial wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
                                            data-id="47882aa" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                It is a pleasure and honor for us, if you are willing to attend and give
                                                us your blessing. </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-d98eb5b elementor-align-center wdp-sticky-section-no elementor-widget elementor-widget-button"
                                        data-id="d98eb5b" data-element_type="widget" id="downloadBtn"
                                        data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-size-sm" role="button">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 133.8 159">
                                                                <g id="Layer_2" data-name="Layer 2">
                                                                    <g id="Layer_1-2" data-name="Layer 1">
                                                                        <g>
                                                                            <path
                                                                                d="M73.1,0V110.8q16.5-16.3,32.6-32.6l8.9,8.9L66.9,134.8,19.2,87l8.6-8.6,32.8,32.9V0Z">
                                                                            </path>
                                                                            <path d="M133.8,159H0V148.6H133.8Z"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg> </span>
                                                        <span class="elementor-button-text">download</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-07e9493 wdp-sticky-section-no elementor-widget elementor-widget-html"
                                        data-id="07e9493" data-element_type="widget"
                                        data-widget_type="html.default">
                                        <div class="elementor-widget-container">
                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

                                            <script>
                                                document.getElementById("downloadBtn").addEventListener("click", function() {
                                                    const section = document.querySelector(".selebaran"); // Ganti dari .qrdownload ke .selebaran
                                                    const downloadBtn = document.getElementById("downloadBtn");

                                                    // Sembunyikan tombol download sementara
                                                    downloadBtn.style.display = "none";

                                                    // Tangani gambar dengan class "imaged"
                                                    const images = section.querySelectorAll("img.imaged");
                                                    const promises = [];

                                                    images.forEach(img => {
                                                        if (!img.complete) {
                                                            // Paksa reload gambar jika belum ter-load
                                                            const imgLoadPromise = new Promise((resolve) => {
                                                                img.onload = resolve;
                                                                img.onerror = resolve;
                                                                img.src = img.src; // Refresh gambar
                                                            });
                                                            promises.push(imgLoadPromise);
                                                        }

                                                        // Menambahkan style object-fit: cover untuk setiap gambar
                                                        img.style.objectFit = "cover";
                                                    });

                                                    // Tangani teks dengan "&amp;" menjadi "&"
                                                    const texts = section.querySelectorAll("*");
                                                    texts.forEach(el => {
                                                        if (el.childNodes.length) {
                                                            el.childNodes.forEach(node => {
                                                                if (node.nodeType === Node.TEXT_NODE) {
                                                                    node.nodeValue = node.nodeValue.replace(/&amp;/g, "&");
                                                                }
                                                            });
                                                        }
                                                    });

                                                    // Tunggu semua gambar selesai di-load sebelum mengambil screenshot
                                                    Promise.all(promises).then(() => {
                                                        html2canvas(section, {
                                                            scale: 3
                                                        }).then(canvas => {
                                                            const link = document.createElement('a');
                                                            link.href = canvas.toDataURL();
                                                            link.download = 'Ferry Adel.png';
                                                            link.click();

                                                            // Tampilkan kembali tombol download setelah screenshot diambil
                                                            downloadBtn.style.display = "block";
                                                        });
                                                    });
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-9bbbca5 e-con-full preloader-page e-flex e-con e-parent"
            data-id="9bbbca5" data-element_type="container" id="preloader"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-element elementor-element-99c9e54 e-flex e-con-boxed e-con e-child"
                data-id="99c9e54" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-cfb5a39 elementor-widget__width-initial animatetext-trigger-animation wdp-sticky-section-no elementor-widget elementor-widget-dyncontel-animateText"
                        data-id="cfb5a39" data-element_type="widget"
                        data-settings="{&quot;words&quot;:[{&quot;text_word&quot;:&quot;The Wedding of&quot;,&quot;_id&quot;:&quot;4c0c03a&quot;,&quot;__dynamic__&quot;:{&quot;text_word&quot;:&quot;[elementor-tag id=\&quot;608614e\&quot; name=\&quot;acf-text\&quot; settings=\&quot;%7B%22key%22%3A%22field_663a62341cd34%3Athe_wedding_of_%22%7D\&quot;]&quot;},&quot;color_item&quot;:&quot;&quot;,&quot;typography_item_typography&quot;:&quot;&quot;,&quot;typography_item_font_family&quot;:null,&quot;typography_item_font_size&quot;:null,&quot;typography_item_font_size_tablet&quot;:null,&quot;typography_item_font_size_mobile&quot;:null,&quot;typography_item_font_weight&quot;:null,&quot;typography_item_text_transform&quot;:null,&quot;typography_item_font_style&quot;:null,&quot;typography_item_text_decoration&quot;:null,&quot;typography_item_line_height&quot;:null,&quot;typography_item_line_height_tablet&quot;:null,&quot;typography_item_line_height_mobile&quot;:null,&quot;typography_item_letter_spacing&quot;:null,&quot;typography_item_letter_spacing_tablet&quot;:null,&quot;typography_item_letter_spacing_mobile&quot;:null,&quot;typography_item_word_spacing&quot;:null,&quot;typography_item_word_spacing_tablet&quot;:null,&quot;typography_item_word_spacing_mobile&quot;:null}],&quot;animatetext_animationstyle_in&quot;:&quot;from_right&quot;,&quot;amount_speed_in&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:13,&quot;sizes&quot;:[]},&quot;animFrom_easing_in&quot;:&quot;easeIn&quot;,&quot;delay_animation_out&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:300000,&quot;sizes&quot;:[]},&quot;animatetext_splittype&quot;:&quot;chars&quot;,&quot;animatetext_trigger&quot;:&quot;animation&quot;,&quot;animatetext_repeat&quot;:-1,&quot;animatetext_splitorigin_in&quot;:&quot;null&quot;,&quot;speed_animation_in&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.7,&quot;sizes&quot;:[]},&quot;delay_animation_in&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;animFrom_easing_ease_in&quot;:&quot;Power3&quot;,&quot;animatetext_animationstyle_out&quot;:&quot;fading&quot;,&quot;animatetext_splitorigin_out&quot;:&quot;null&quot;,&quot;speed_animation_out&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.7,&quot;sizes&quot;:[]},&quot;amount_speed_out&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;animFrom_easing_out&quot;:&quot;easeInOut&quot;,&quot;animFrom_easing_ease_out&quot;:&quot;Power3&quot;}"
                        data-widget_type="dyncontel-animateText.default">
                        <div class="elementor-widget-container">
                            <div class="dce-animatetext dce-animatetext-from_right"></div>
                            <div style="display:none;" class="testi-nascosti">
                                <div class="dce-animatetext-item dce-animatetext-item-0 dce-animatetext-from_right">
                                    The Wedding of</div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-41b1f02 e-con-full preload-img animated-fast e-flex elementor-invisible e-con e-child"
                        data-id="41b1f02" data-element_type="container"
                        data-settings="{&quot;background_background&quot;: &quot;slideshow&quot;, &quot;background_slideshow_slide_duration&quot;: 30, &quot;background_slideshow_transition_duration&quot;: 50, &quot;animation&quot;: &quot;zoomIn&quot;, &quot;background_slideshow_gallery&quot;: [ { &quot;ID&quot;: 1, &quot;id&quot;: 1, &quot;title&quot;: &quot;cloud_img_1&quot;, &quot;filename&quot;: &quot;cloud_img_1.jpg&quot;, &quot;filesize&quot;: 123456, &quot;url&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146652\/1_s4onn0.jpg&quot;, &quot;link&quot;: &quot;#&quot;, &quot;alt&quot;: &quot;&quot;, &quot;author&quot;: &quot;1472&quot;, &quot;description&quot;: &quot;&quot;, &quot;caption&quot;: &quot;&quot;, &quot;name&quot;: &quot;cloud_img_1&quot;, &quot;status&quot;: &quot;inherit&quot;, &quot;uploaded_to&quot;: 0, &quot;date&quot;: &quot;2025-06-14 03:13:03&quot;, &quot;modified&quot;: &quot;2025-06-14 03:13:21&quot;, &quot;menu_order&quot;: 0, &quot;mime_type&quot;: &quot;image\/jpeg&quot;, &quot;type&quot;: &quot;image&quot;, &quot;subtype&quot;: &quot;jpeg&quot;, &quot;icon&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146652\/1_s4onn0.jpg&quot;, &quot;width&quot;: 1400, &quot;height&quot;: 2100, &quot;sizes&quot;: { &quot;thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146652\/1_s4onn0.jpg&quot;, &quot;thumbnail-width&quot;: 64, &quot;thumbnail-height&quot;: 96, &quot;medium&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146652\/1_s4onn0.jpg&quot;, &quot;medium-width&quot;: 1400, &quot;medium-height&quot;: 2100, &quot;medium_large&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146652\/1_s4onn0.jpg&quot;, &quot;medium_large-width&quot;: 768, &quot;medium_large-height&quot;: 1152, &quot;large&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146652\/1_s4onn0.jpg&quot;, &quot;large-width&quot;: 1400, &quot;large-height&quot;: 2100, &quot;woocommerce_thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146652\/1_s4onn0.jpg&quot;, &quot;woocommerce_thumbnail-width&quot;: 467, &quot;woocommerce_thumbnail-height&quot;: 700, &quot;woocommerce_single&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146652\/1_s4onn0.jpg&quot;, &quot;woocommerce_single-width&quot;: 300, &quot;woocommerce_single-height&quot;: 450, &quot;woocommerce_gallery_thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146652\/1_s4onn0.jpg&quot;, &quot;woocommerce_gallery_thumbnail-width&quot;: 67, &quot;woocommerce_gallery_thumbnail-height&quot;: 100 } }, { &quot;ID&quot;: 2, &quot;id&quot;: 2, &quot;title&quot;: &quot;cloud_img_2&quot;, &quot;filename&quot;: &quot;cloud_img_2.jpg&quot;, &quot;filesize&quot;: 123456, &quot;url&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146649\/2_nmihge.jpg&quot;, &quot;link&quot;: &quot;#&quot;, &quot;alt&quot;: &quot;&quot;, &quot;author&quot;: &quot;1472&quot;, &quot;description&quot;: &quot;&quot;, &quot;caption&quot;: &quot;&quot;, &quot;name&quot;: &quot;cloud_img_2&quot;, &quot;status&quot;: &quot;inherit&quot;, &quot;uploaded_to&quot;: 0, &quot;date&quot;: &quot;2025-06-14 03:13:03&quot;, &quot;modified&quot;: &quot;2025-06-14 03:13:21&quot;, &quot;menu_order&quot;: 0, &quot;mime_type&quot;: &quot;image\/jpeg&quot;, &quot;type&quot;: &quot;image&quot;, &quot;subtype&quot;: &quot;jpeg&quot;, &quot;icon&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146649\/2_nmihge.jpg&quot;, &quot;width&quot;: 1400, &quot;height&quot;: 2100, &quot;sizes&quot;: { &quot;thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146649\/2_nmihge.jpg&quot;, &quot;thumbnail-width&quot;: 64, &quot;thumbnail-height&quot;: 96, &quot;medium&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146649\/2_nmihge.jpg&quot;, &quot;medium-width&quot;: 1400, &quot;medium-height&quot;: 2100, &quot;medium_large&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146649\/2_nmihge.jpg&quot;, &quot;medium_large-width&quot;: 768, &quot;medium_large-height&quot;: 1152, &quot;large&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146649\/2_nmihge.jpg&quot;, &quot;large-width&quot;: 1400, &quot;large-height&quot;: 2100, &quot;woocommerce_thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146649\/2_nmihge.jpg&quot;, &quot;woocommerce_thumbnail-width&quot;: 467, &quot;woocommerce_thumbnail-height&quot;: 700, &quot;woocommerce_single&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146649\/2_nmihge.jpg&quot;, &quot;woocommerce_single-width&quot;: 300, &quot;woocommerce_single-height&quot;: 450, &quot;woocommerce_gallery_thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146649\/2_nmihge.jpg&quot;, &quot;woocommerce_gallery_thumbnail-width&quot;: 67, &quot;woocommerce_gallery_thumbnail-height&quot;: 100 } }, { &quot;ID&quot;: 3, &quot;id&quot;: 3, &quot;title&quot;: &quot;cloud_img_3&quot;, &quot;filename&quot;: &quot;cloud_img_3.jpg&quot;, &quot;filesize&quot;: 123456, &quot;url&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146655\/3_solfzo.jpg&quot;, &quot;link&quot;: &quot;#&quot;, &quot;alt&quot;: &quot;&quot;, &quot;author&quot;: &quot;1472&quot;, &quot;description&quot;: &quot;&quot;, &quot;caption&quot;: &quot;&quot;, &quot;name&quot;: &quot;cloud_img_3&quot;, &quot;status&quot;: &quot;inherit&quot;, &quot;uploaded_to&quot;: 0, &quot;date&quot;: &quot;2025-06-14 03:13:03&quot;, &quot;modified&quot;: &quot;2025-06-14 03:13:21&quot;, &quot;menu_order&quot;: 0, &quot;mime_type&quot;: &quot;image\/jpeg&quot;, &quot;type&quot;: &quot;image&quot;, &quot;subtype&quot;: &quot;jpeg&quot;, &quot;icon&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146655\/3_solfzo.jpg&quot;, &quot;width&quot;: 1400, &quot;height&quot;: 2100, &quot;sizes&quot;: { &quot;thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146655\/3_solfzo.jpg&quot;, &quot;thumbnail-width&quot;: 64, &quot;thumbnail-height&quot;: 96, &quot;medium&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146655\/3_solfzo.jpg&quot;, &quot;medium-width&quot;: 1400, &quot;medium-height&quot;: 2100, &quot;medium_large&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146655\/3_solfzo.jpg&quot;, &quot;medium_large-width&quot;: 768, &quot;medium_large-height&quot;: 1152, &quot;large&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146655\/3_solfzo.jpg&quot;, &quot;large-width&quot;: 1400, &quot;large-height&quot;: 2100, &quot;woocommerce_thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146655\/3_solfzo.jpg&quot;, &quot;woocommerce_thumbnail-width&quot;: 467, &quot;woocommerce_thumbnail-height&quot;: 700, &quot;woocommerce_single&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146655\/3_solfzo.jpg&quot;, &quot;woocommerce_single-width&quot;: 300, &quot;woocommerce_single-height&quot;: 450, &quot;woocommerce_gallery_thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146655\/3_solfzo.jpg&quot;, &quot;woocommerce_gallery_thumbnail-width&quot;: 67, &quot;woocommerce_gallery_thumbnail-height&quot;: 100 } }, { &quot;ID&quot;: 4, &quot;id&quot;: 4, &quot;title&quot;: &quot;cloud_img_4&quot;, &quot;filename&quot;: &quot;cloud_img_4.jpg&quot;, &quot;filesize&quot;: 123456, &quot;url&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/4_cmi14x.jpg&quot;, &quot;link&quot;: &quot;#&quot;, &quot;alt&quot;: &quot;&quot;, &quot;author&quot;: &quot;1472&quot;, &quot;description&quot;: &quot;&quot;, &quot;caption&quot;: &quot;&quot;, &quot;name&quot;: &quot;cloud_img_4&quot;, &quot;status&quot;: &quot;inherit&quot;, &quot;uploaded_to&quot;: 0, &quot;date&quot;: &quot;2025-06-14 03:13:03&quot;, &quot;modified&quot;: &quot;2025-06-14 03:13:21&quot;, &quot;menu_order&quot;: 0, &quot;mime_type&quot;: &quot;image\/jpeg&quot;, &quot;type&quot;: &quot;image&quot;, &quot;subtype&quot;: &quot;jpeg&quot;, &quot;icon&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/4_cmi14x.jpg&quot;, &quot;width&quot;: 1400, &quot;height&quot;: 2100, &quot;sizes&quot;: { &quot;thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/4_cmi14x.jpg&quot;, &quot;thumbnail-width&quot;: 64, &quot;thumbnail-height&quot;: 96, &quot;medium&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/4_cmi14x.jpg&quot;, &quot;medium-width&quot;: 1400, &quot;medium-height&quot;: 2100, &quot;medium_large&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/4_cmi14x.jpg&quot;, &quot;medium_large-width&quot;: 768, &quot;medium_large-height&quot;: 1152, &quot;large&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/4_cmi14x.jpg&quot;, &quot;large-width&quot;: 1400, &quot;large-height&quot;: 2100, &quot;woocommerce_thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/4_cmi14x.jpg&quot;, &quot;woocommerce_thumbnail-width&quot;: 467, &quot;woocommerce_thumbnail-height&quot;: 700, &quot;woocommerce_single&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/4_cmi14x.jpg&quot;, &quot;woocommerce_single-width&quot;: 300, &quot;woocommerce_single-height&quot;: 450, &quot;woocommerce_gallery_thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/4_cmi14x.jpg&quot;, &quot;woocommerce_gallery_thumbnail-width&quot;: 67, &quot;woocommerce_gallery_thumbnail-height&quot;: 100 } }, { &quot;ID&quot;: 5, &quot;id&quot;: 5, &quot;title&quot;: &quot;cloud_img_5&quot;, &quot;filename&quot;: &quot;cloud_img_5.jpg&quot;, &quot;filesize&quot;: 123456, &quot;url&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/5_ecu55l.jpg&quot;, &quot;link&quot;: &quot;#&quot;, &quot;alt&quot;: &quot;&quot;, &quot;author&quot;: &quot;1472&quot;, &quot;description&quot;: &quot;&quot;, &quot;caption&quot;: &quot;&quot;, &quot;name&quot;: &quot;cloud_img_5&quot;, &quot;status&quot;: &quot;inherit&quot;, &quot;uploaded_to&quot;: 0, &quot;date&quot;: &quot;2025-06-14 03:13:03&quot;, &quot;modified&quot;: &quot;2025-06-14 03:13:21&quot;, &quot;menu_order&quot;: 0, &quot;mime_type&quot;: &quot;image\/jpeg&quot;, &quot;type&quot;: &quot;image&quot;, &quot;subtype&quot;: &quot;jpeg&quot;, &quot;icon&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/5_ecu55l.jpg&quot;, &quot;width&quot;: 1400, &quot;height&quot;: 2100, &quot;sizes&quot;: { &quot;thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/5_ecu55l.jpg&quot;, &quot;thumbnail-width&quot;: 64, &quot;thumbnail-height&quot;: 96, &quot;medium&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/5_ecu55l.jpg&quot;, &quot;medium-width&quot;: 1400, &quot;medium-height&quot;: 2100, &quot;medium_large&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/5_ecu55l.jpg&quot;, &quot;medium_large-width&quot;: 768, &quot;medium_large-height&quot;: 1152, &quot;large&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/5_ecu55l.jpg&quot;, &quot;large-width&quot;: 1400, &quot;large-height&quot;: 2100, &quot;woocommerce_thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/5_ecu55l.jpg&quot;, &quot;woocommerce_thumbnail-width&quot;: 467, &quot;woocommerce_thumbnail-height&quot;: 700, &quot;woocommerce_single&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/5_ecu55l.jpg&quot;, &quot;woocommerce_single-width&quot;: 300, &quot;woocommerce_single-height&quot;: 450, &quot;woocommerce_gallery_thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/5_ecu55l.jpg&quot;, &quot;woocommerce_gallery_thumbnail-width&quot;: 67, &quot;woocommerce_gallery_thumbnail-height&quot;: 100 } }, { &quot;ID&quot;: 6, &quot;id&quot;: 6, &quot;title&quot;: &quot;cloud_img_6&quot;, &quot;filename&quot;: &quot;cloud_img_6.jpg&quot;, &quot;filesize&quot;: 123456, &quot;url&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146652\/1_s4onn0.jpg&quot;, &quot;link&quot;: &quot;#&quot;, &quot;alt&quot;: &quot;&quot;, &quot;author&quot;: &quot;1472&quot;, &quot;description&quot;: &quot;&quot;, &quot;caption&quot;: &quot;&quot;, &quot;name&quot;: &quot;cloud_img_6&quot;, &quot;status&quot;: &quot;inherit&quot;, &quot;uploaded_to&quot;: 0, &quot;date&quot;: &quot;2025-06-14 03:13:03&quot;, &quot;modified&quot;: &quot;2025-06-14 03:13:21&quot;, &quot;menu_order&quot;: 0, &quot;mime_type&quot;: &quot;image\/jpeg&quot;, &quot;type&quot;: &quot;image&quot;, &quot;subtype&quot;: &quot;jpeg&quot;, &quot;icon&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146652\/1_s4onn0.jpg&quot;, &quot;width&quot;: 1400, &quot;height&quot;: 2100, &quot;sizes&quot;: { &quot;thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146652\/1_s4onn0.jpg&quot;, &quot;thumbnail-width&quot;: 64, &quot;thumbnail-height&quot;: 96, &quot;medium&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146652\/1_s4onn0.jpg&quot;, &quot;medium-width&quot;: 1400, &quot;medium-height&quot;: 2100, &quot;medium_large&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146652\/1_s4onn0.jpg&quot;, &quot;medium_large-width&quot;: 768, &quot;medium_large-height&quot;: 1152, &quot;large&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146652\/1_s4onn0.jpg&quot;, &quot;large-width&quot;: 1400, &quot;large-height&quot;: 2100, &quot;woocommerce_thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146652\/1_s4onn0.jpg&quot;, &quot;woocommerce_thumbnail-width&quot;: 467, &quot;woocommerce_thumbnail-height&quot;: 700, &quot;woocommerce_single&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146652\/1_s4onn0.jpg&quot;, &quot;woocommerce_single-width&quot;: 300, &quot;woocommerce_single-height&quot;: 450, &quot;woocommerce_gallery_thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146652\/1_s4onn0.jpg&quot;, &quot;woocommerce_gallery_thumbnail-width&quot;: 67, &quot;woocommerce_gallery_thumbnail-height&quot;: 100 } }, { &quot;ID&quot;: 7, &quot;id&quot;: 7, &quot;title&quot;: &quot;cloud_img_7&quot;, &quot;filename&quot;: &quot;cloud_img_7.jpg&quot;, &quot;filesize&quot;: 123456, &quot;url&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146649\/2_nmihge.jpg&quot;, &quot;link&quot;: &quot;#&quot;, &quot;alt&quot;: &quot;&quot;, &quot;author&quot;: &quot;1472&quot;, &quot;description&quot;: &quot;&quot;, &quot;caption&quot;: &quot;&quot;, &quot;name&quot;: &quot;cloud_img_7&quot;, &quot;status&quot;: &quot;inherit&quot;, &quot;uploaded_to&quot;: 0, &quot;date&quot;: &quot;2025-06-14 03:13:03&quot;, &quot;modified&quot;: &quot;2025-06-14 03:13:21&quot;, &quot;menu_order&quot;: 0, &quot;mime_type&quot;: &quot;image\/jpeg&quot;, &quot;type&quot;: &quot;image&quot;, &quot;subtype&quot;: &quot;jpeg&quot;, &quot;icon&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146649\/2_nmihge.jpg&quot;, &quot;width&quot;: 1400, &quot;height&quot;: 2100, &quot;sizes&quot;: { &quot;thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146649\/2_nmihge.jpg&quot;, &quot;thumbnail-width&quot;: 64, &quot;thumbnail-height&quot;: 96, &quot;medium&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146649\/2_nmihge.jpg&quot;, &quot;medium-width&quot;: 1400, &quot;medium-height&quot;: 2100, &quot;medium_large&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146649\/2_nmihge.jpg&quot;, &quot;medium_large-width&quot;: 768, &quot;medium_large-height&quot;: 1152, &quot;large&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146649\/2_nmihge.jpg&quot;, &quot;large-width&quot;: 1400, &quot;large-height&quot;: 2100, &quot;woocommerce_thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146649\/2_nmihge.jpg&quot;, &quot;woocommerce_thumbnail-width&quot;: 467, &quot;woocommerce_thumbnail-height&quot;: 700, &quot;woocommerce_single&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146649\/2_nmihge.jpg&quot;, &quot;woocommerce_single-width&quot;: 300, &quot;woocommerce_single-height&quot;: 450, &quot;woocommerce_gallery_thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146649\/2_nmihge.jpg&quot;, &quot;woocommerce_gallery_thumbnail-width&quot;: 67, &quot;woocommerce_gallery_thumbnail-height&quot;: 100 } }, { &quot;ID&quot;: 8, &quot;id&quot;: 8, &quot;title&quot;: &quot;cloud_img_8&quot;, &quot;filename&quot;: &quot;cloud_img_8.jpg&quot;, &quot;filesize&quot;: 123456, &quot;url&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146655\/3_solfzo.jpg&quot;, &quot;link&quot;: &quot;#&quot;, &quot;alt&quot;: &quot;&quot;, &quot;author&quot;: &quot;1472&quot;, &quot;description&quot;: &quot;&quot;, &quot;caption&quot;: &quot;&quot;, &quot;name&quot;: &quot;cloud_img_8&quot;, &quot;status&quot;: &quot;inherit&quot;, &quot;uploaded_to&quot;: 0, &quot;date&quot;: &quot;2025-06-14 03:13:03&quot;, &quot;modified&quot;: &quot;2025-06-14 03:13:21&quot;, &quot;menu_order&quot;: 0, &quot;mime_type&quot;: &quot;image\/jpeg&quot;, &quot;type&quot;: &quot;image&quot;, &quot;subtype&quot;: &quot;jpeg&quot;, &quot;icon&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146655\/3_solfzo.jpg&quot;, &quot;width&quot;: 1400, &quot;height&quot;: 2100, &quot;sizes&quot;: { &quot;thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146655\/3_solfzo.jpg&quot;, &quot;thumbnail-width&quot;: 64, &quot;thumbnail-height&quot;: 96, &quot;medium&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146655\/3_solfzo.jpg&quot;, &quot;medium-width&quot;: 1400, &quot;medium-height&quot;: 2100, &quot;medium_large&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146655\/3_solfzo.jpg&quot;, &quot;medium_large-width&quot;: 768, &quot;medium_large-height&quot;: 1152, &quot;large&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146655\/3_solfzo.jpg&quot;, &quot;large-width&quot;: 1400, &quot;large-height&quot;: 2100, &quot;woocommerce_thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146655\/3_solfzo.jpg&quot;, &quot;woocommerce_thumbnail-width&quot;: 467, &quot;woocommerce_thumbnail-height&quot;: 700, &quot;woocommerce_single&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146655\/3_solfzo.jpg&quot;, &quot;woocommerce_single-width&quot;: 300, &quot;woocommerce_single-height&quot;: 450, &quot;woocommerce_gallery_thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146655\/3_solfzo.jpg&quot;, &quot;woocommerce_gallery_thumbnail-width&quot;: 67, &quot;woocommerce_gallery_thumbnail-height&quot;: 100 } }, { &quot;ID&quot;: 9, &quot;id&quot;: 9, &quot;title&quot;: &quot;cloud_img_9&quot;, &quot;filename&quot;: &quot;cloud_img_9.jpg&quot;, &quot;filesize&quot;: 123456, &quot;url&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/4_cmi14x.jpg&quot;, &quot;link&quot;: &quot;#&quot;, &quot;alt&quot;: &quot;&quot;, &quot;author&quot;: &quot;1472&quot;, &quot;description&quot;: &quot;&quot;, &quot;caption&quot;: &quot;&quot;, &quot;name&quot;: &quot;cloud_img_9&quot;, &quot;status&quot;: &quot;inherit&quot;, &quot;uploaded_to&quot;: 0, &quot;date&quot;: &quot;2025-06-14 03:13:03&quot;, &quot;modified&quot;: &quot;2025-06-14 03:13:21&quot;, &quot;menu_order&quot;: 0, &quot;mime_type&quot;: &quot;image\/jpeg&quot;, &quot;type&quot;: &quot;image&quot;, &quot;subtype&quot;: &quot;jpeg&quot;, &quot;icon&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/4_cmi14x.jpg&quot;, &quot;width&quot;: 1400, &quot;height&quot;: 2100, &quot;sizes&quot;: { &quot;thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/4_cmi14x.jpg&quot;, &quot;thumbnail-width&quot;: 64, &quot;thumbnail-height&quot;: 96, &quot;medium&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/4_cmi14x.jpg&quot;, &quot;medium-width&quot;: 1400, &quot;medium-height&quot;: 2100, &quot;medium_large&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/4_cmi14x.jpg&quot;, &quot;medium_large-width&quot;: 768, &quot;medium_large-height&quot;: 1152, &quot;large&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/4_cmi14x.jpg&quot;, &quot;large-width&quot;: 1400, &quot;large-height&quot;: 2100, &quot;woocommerce_thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/4_cmi14x.jpg&quot;, &quot;woocommerce_thumbnail-width&quot;: 467, &quot;woocommerce_thumbnail-height&quot;: 700, &quot;woocommerce_single&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/4_cmi14x.jpg&quot;, &quot;woocommerce_single-width&quot;: 300, &quot;woocommerce_single-height&quot;: 450, &quot;woocommerce_gallery_thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/4_cmi14x.jpg&quot;, &quot;woocommerce_gallery_thumbnail-width&quot;: 67, &quot;woocommerce_gallery_thumbnail-height&quot;: 100 } }, { &quot;ID&quot;: 10, &quot;id&quot;: 10, &quot;title&quot;: &quot;cloud_img_10&quot;, &quot;filename&quot;: &quot;cloud_img_10.jpg&quot;, &quot;filesize&quot;: 123456, &quot;url&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/5_ecu55l.jpg&quot;, &quot;link&quot;: &quot;#&quot;, &quot;alt&quot;: &quot;&quot;, &quot;author&quot;: &quot;1472&quot;, &quot;description&quot;: &quot;&quot;, &quot;caption&quot;: &quot;&quot;, &quot;name&quot;: &quot;cloud_img_10&quot;, &quot;status&quot;: &quot;inherit&quot;, &quot;uploaded_to&quot;: 0, &quot;date&quot;: &quot;2025-06-14 03:13:03&quot;, &quot;modified&quot;: &quot;2025-06-14 03:13:21&quot;, &quot;menu_order&quot;: 0, &quot;mime_type&quot;: &quot;image\/jpeg&quot;, &quot;type&quot;: &quot;image&quot;, &quot;subtype&quot;: &quot;jpeg&quot;, &quot;icon&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/5_ecu55l.jpg&quot;, &quot;width&quot;: 1400, &quot;height&quot;: 2100, &quot;sizes&quot;: { &quot;thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/5_ecu55l.jpg&quot;, &quot;thumbnail-width&quot;: 64, &quot;thumbnail-height&quot;: 96, &quot;medium&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/5_ecu55l.jpg&quot;, &quot;medium-width&quot;: 1400, &quot;medium-height&quot;: 2100, &quot;medium_large&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/5_ecu55l.jpg&quot;, &quot;medium_large-width&quot;: 768, &quot;medium_large-height&quot;: 1152, &quot;large&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/5_ecu55l.jpg&quot;, &quot;large-width&quot;: 1400, &quot;large-height&quot;: 2100, &quot;woocommerce_thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/5_ecu55l.jpg&quot;, &quot;woocommerce_thumbnail-width&quot;: 467, &quot;woocommerce_thumbnail-height&quot;: 700, &quot;woocommerce_single&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/5_ecu55l.jpg&quot;, &quot;woocommerce_single-width&quot;: 300, &quot;woocommerce_single-height&quot;: 450, &quot;woocommerce_gallery_thumbnail&quot;: &quot;https:\/\/res.cloudinary.com\/da4qv2gpx\/image\/upload\/v1757146646\/5_ecu55l.jpg&quot;, &quot;woocommerce_gallery_thumbnail-width&quot;: 67, &quot;woocommerce_gallery_thumbnail-height&quot;: 100 } } ], &quot;background_slideshow_loop&quot;: &quot;yes&quot;, &quot;background_slideshow_slide_transition&quot;: &quot;fade&quot;}">
                    </div>
                    <div class="elementor-element elementor-element-22ead35 rmv_star elementor-widget__width-initial animatetext-trigger-animation wdp-sticky-section-no elementor-widget elementor-widget-dyncontel-animateText"
                        data-id="22ead35" data-element_type="widget"
                        data-settings="{&quot;words&quot;:[{&quot;text_word&quot;:&quot;Ferry Adel&quot;,&quot;_id&quot;:&quot;4c0c03a&quot;,&quot;__dynamic__&quot;:{&quot;text_word&quot;:&quot;[elementor-tag id=\&quot;dc662d1\&quot; name=\&quot;acf-text\&quot; settings=\&quot;%7B%22key%22%3A%22field_663a62491cd35%3Anama_panggilan%22%7D\&quot;]&quot;},&quot;color_item&quot;:&quot;&quot;,&quot;typography_item_typography&quot;:&quot;&quot;,&quot;typography_item_font_family&quot;:null,&quot;typography_item_font_size&quot;:null,&quot;typography_item_font_size_tablet&quot;:null,&quot;typography_item_font_size_mobile&quot;:null,&quot;typography_item_font_weight&quot;:null,&quot;typography_item_text_transform&quot;:null,&quot;typography_item_font_style&quot;:null,&quot;typography_item_text_decoration&quot;:null,&quot;typography_item_line_height&quot;:null,&quot;typography_item_line_height_tablet&quot;:null,&quot;typography_item_line_height_mobile&quot;:null,&quot;typography_item_letter_spacing&quot;:null,&quot;typography_item_letter_spacing_tablet&quot;:null,&quot;typography_item_letter_spacing_mobile&quot;:null,&quot;typography_item_word_spacing&quot;:null,&quot;typography_item_word_spacing_tablet&quot;:null,&quot;typography_item_word_spacing_mobile&quot;:null}],&quot;animatetext_animationstyle_in&quot;:&quot;from_left&quot;,&quot;amount_speed_in&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-13,&quot;sizes&quot;:[]},&quot;animFrom_easing_in&quot;:&quot;easeIn&quot;,&quot;delay_animation_out&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:300000,&quot;sizes&quot;:[]},&quot;animatetext_splittype&quot;:&quot;chars&quot;,&quot;animatetext_trigger&quot;:&quot;animation&quot;,&quot;animatetext_repeat&quot;:-1,&quot;animatetext_splitorigin_in&quot;:&quot;null&quot;,&quot;speed_animation_in&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.7,&quot;sizes&quot;:[]},&quot;delay_animation_in&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;animFrom_easing_ease_in&quot;:&quot;Power3&quot;,&quot;animatetext_animationstyle_out&quot;:&quot;fading&quot;,&quot;animatetext_splitorigin_out&quot;:&quot;null&quot;,&quot;speed_animation_out&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.7,&quot;sizes&quot;:[]},&quot;amount_speed_out&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;animFrom_easing_out&quot;:&quot;easeInOut&quot;,&quot;animFrom_easing_ease_out&quot;:&quot;Power3&quot;}"
                        data-widget_type="dyncontel-animateText.default">
                        <div class="elementor-widget-container">
                            <div class="dce-animatetext dce-animatetext-from_left"></div>
                            <div style="display:none;" class="testi-nascosti">
                                <div class="dce-animatetext-item dce-animatetext-item-0 dce-animatetext-from_left">
                                    Ferry Adel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-5052266 elementor-widget__width-inherit elementor-widget-mobile__width-inherit elementor-absolute wdp-sticky-section-no elementor-widget elementor-widget-html"
                data-id="5052266" data-element_type="widget"
                data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="html.default">
                <div class="elementor-widget-container">

                    <div class="loading-text">Loading... <span id="progress-percentage">0</span>%</div>

                    <style>
                        .loading-text {
                            margin-top: 10px !important;
                            font-family: lausanne300 !important;
                            font-size: 14px;
                            text-transform: uppercase;
                            color: #C2C2C2 !important;
                            width: 100% !important;
                            text-align: left !important;
                            padding-left: 3% !important;
                        }

                        /* Untuk layar mobile */
                        @media (max-width: 768px) {
                            .loading-text {
                                font-size: 12px !important;
                                letter-spacing: 1px;
                                text-align: center !important;
                                padding-left: 0 !important;
                            }
                        }
                    </style>
                </div>
            </div>
            <div class="elementor-element elementor-element-7dc9a61 wdp-sticky-section-no elementor-widget elementor-widget-html"
                data-id="7dc9a61" data-element_type="widget" data-widget_type="html.default">
                <div class="elementor-widget-container">
                    <style>
                        .preloader-page {
                            position: fixed !important;
                            top: 0 !important;
                            left: 0 !important;
                            width: 100% !important;
                            height: 100% !important;
                            display: flex !important;

                            z-index: 9999999 !important;
                            transition: opacity 1s ease !important;
                        }

                        .elementor-editor-active .preloader-page {
                            position: relative !important;
                        }



                        .preloader-page.hide {
                            opacity: 0 !important;
                        }
                    </style>



                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            const progressPercentage = document.getElementById("progress-percentage");
                            const preloader = document.getElementById("preloader");


                            let width = 0;
                            const interval = setInterval(function() {
                                if (width >= 100) {
                                    clearInterval(interval);

                                    setTimeout(function() {
                                        preloader.classList.add("hide");
                                        setTimeout(function() {
                                            if (preloader && preloader.parentNode) {
                                                preloader.parentNode.removeChild(preloader);
                                            }
                                        }, 1000);
                                    }, 500);
                                } else {
                                    width++;
                                    progressPercentage.textContent = width;
                                }
                            }, 40);
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div id="acf-hidden-wp-editor" style="display: none;">
        <div id="wp-acf_content-wrap" class="wp-core-ui wp-editor-wrap tmce-active">
            <link rel='stylesheet' id='editor-buttons-css'
                href='https://groovepublic.com/wp-includes/css/editor.min.css?ver=6.7.2' media='all' />
            <div id="wp-acf_content-editor-tools" class="wp-editor-tools hide-if-no-js">
                <div class="wp-editor-tabs"><button type="button" id="acf_content-tmce" aria-pressed="true"
                        class="wp-switch-editor switch-tmce" data-wp-editor-id="acf_content">Visual</button>
                    <button type="button" id="acf_content-html" class="wp-switch-editor switch-html"
                        data-wp-editor-id="acf_content">Text</button>
                </div>
            </div>
            <div id="wp-acf_content-editor-container" class="wp-editor-container">
                <div id="qt_acf_content_toolbar" class="quicktags-toolbar hide-if-no-js"></div>
                <textarea class="wp-editor-area" rows="20" autocomplete="off" cols="40" name="acf_content"
                    id="acf_content"></textarea>
            </div>
        </div>

    </div>
    <script>
        const wdpAudio = document.body.contains(document.getElementById('song')) ? document.getElementById('song') : false;
        const wdpVideo = document.body.contains(document.getElementById('video')) ? document.getElementById('video') :
            false;

        const playAudio = () => {
            if (wdpAudio) {
                wdpAudio.play();
            }
        }

        const pauseAudio = () => {
            if (wdpAudio) {
                wdpAudio.pause();
            }
        }

        const pauseAudioOnVideoPlay = () => {
            if (wdpVideo) {
                wdpVideo.addEventListener('play', () => {
                    pauseAudio();
                });
            }
        }

        const resumeAudioOnVideoPause = () => {
            if (wdpVideo) {
                wdpVideo.addEventListener('pause', () => {
                    playAudio();
                });
            }
        }

        document.addEventListener("visibilitychange", event => {
            if (document.visibilityState === "visible") {
                playAudio();
                resumeAudioOnVideoPause();
            } else {
                pauseAudio();
                pauseAudioOnVideoPlay();
            }
        })


        //text error name rsvp
        jQuery(document).ready(function($) {
            $('.wdp-error-info-name').text('maksimal 25 karakter hindari menggunakan tanda titik');
        });


        //animasi setelah cover
        document.querySelector('.wdp-button-wrapper button').addEventListener('click', function() {
            document.querySelector('.firstColumn').style.display = 'block';
        });
    </script>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            // Fungsi untuk membuat HTML komentar
            function buatHtmlKomentar(komentar) {
                var komentarHtml =
                    '<div class="komentar-item" id="komentar-' + komentar.id + '">' +
                    '<strong>' + komentar.author + '</strong>' +
                    '<p>' + komentar.content + '</p>' +
                    '<small>' + komentar.date + '</small>';

                if (komentar.can_delete) {
                    komentarHtml +=
                        '<button class="hapus-komentar" data-komentar-id="' + komentar.id + '">Hapus</button>';
                }

                komentarHtml += '</div>';

                return komentarHtml;
            }

            // Fungsi untuk me-refresh komentar
            function refreshKomentar(postID) {
                var data = {
                    action: 'refresh_komentar_post',
                    post_id: postID
                };

                $.post('https://groovepublic.com/wp-admin/admin-ajax.php', data, function(response) {
                    if (response.success) {
                        // Hapus konten lama
                        $('#komentar-container').empty();

                        // Tambahkan komentar baru
                        if (response.data.length > 0) {
                            response.data.forEach(function(komentar) {
                                $('#komentar-container').append(buatHtmlKomentar(komentar));
                            });
                        } else {
                            $('#komentar-container').html(
                                '<p style="color: white;">Your wishes will be shown here.</p>');
                        }
                    }
                });
            }
        });
    </script>
    <script type="text/javascript">
        /* Security measures */
        (function() {
            // Device detection with character substitution
            var _d = navigator.userAgent;
            var _m = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i;
            var _i = !_m.test(_d);

            // Run only on desktop
            if (_i) {
                // Anti-right click
                document['add' + 'Event' + 'Listener']('con' + 'text' + 'menu', function(_e) {
                    _e['prevent' + 'Default']();
                    return false;
                });

                // Anti keyboard shortcuts - obfuscated key handlers
                document['add' + 'Event' + 'Listener']('key' + 'down', function(_e) {
                    var _k = _e['key' + 'Code'];
                    var _c = _e['ctrl' + 'Key'];
                    var _s = _e['shift' + 'Key'];
                    var _a = _e['alt' + 'Key'];
                    var _m = _e['meta' + 'Key'];

                    // Split conditionals to make it harder to read
                    var _block = false;

                    // Windows: Ctrl+U (view source)
                    if (_c && _k === 85) _block = true;

                    // Mac: Cmd+U (view source)
                    if (_m && _k === 85) _block = true;

                    // Mac: Cmd+Option+U (view source)
                    if (_m && _a && _k === 85) _block = true;

                    // Windows: Ctrl+Shift+I (inspect)
                    if (_c && _s && _k === 73) _block = true;

                    // Mac: Cmd+Option+I (inspect)
                    if (_m && _a && _k === 73) _block = true;

                    // Windows: F12 (dev tools)
                    if (_k === 123) _block = true;

                    // Windows: Ctrl+Shift+C (inspect element)
                    if (_c && _s && _k === 67) _block = true;

                    // Mac: Cmd+Option+C (inspect element)
                    if (_m && _a && _k === 67) _block = true;

                    // Windows: Ctrl+Shift+J (console)
                    if (_c && _s && _k === 74) _block = true;

                    // Mac: Cmd+Option+J (console)
                    if (_m && _a && _k === 74) _block = true;

                    // Apply prevention if needed
                    if (_block) {
                        _e['prevent' + 'Default']();
                        return false;
                    }
                });
            }
        })();
    </script>
    <script>
        (function($) {
            var k = $('.namatamu').html();
            k = k.replace(/&amp;/g, '&');
            $('.namatamu').html(k);
            console.log("Script dijalankan di footer.");
        })(jQuery);

        // Langkah 1: Ambil elemen berdasarkan ID
        var field = document.getElementById("form-field-name");

        // Langkah 2: Ganti "&amp" dengan "&"
        if (field) {
            field.value = field.value.replace(/&amp;/g, '&');
        }
    </script>
    <div data-elementor-type="popup" data-elementor-id="430708"
        class="elementor elementor-430708 elementor-location-popup"
        data-elementor-settings="{&quot;exit_animation&quot;:&quot;fadeInDown&quot;,&quot;entrance_animation_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.7,&quot;sizes&quot;:[]},&quot;prevent_scroll&quot;:&quot;yes&quot;,&quot;a11y_navigation&quot;:&quot;yes&quot;,&quot;timing&quot;:[]}"
        data-elementor-post-type="elementor_library">
        <div data-dce-background-color="#F0F0F0"
            class="elementor-element elementor-element-1a6d9a1 animated-fast e-flex e-con-boxed elementor-invisible e-con e-parent"
            data-id="1a6d9a1" data-element_type="container"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInDown&quot;}">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-fa8fe5d e-con-full e-flex e-con e-child"
                    data-id="fa8fe5d" data-element_type="container">
                    <div class="elementor-element elementor-element-523d403 e-con-full e-flex e-con e-child"
                        data-id="523d403" data-element_type="container">
                        <div data-dce-background-color="#FAFAFA"
                            class="elementor-element elementor-element-34447a2 e-con-full e-flex e-con e-child"
                            data-id="34447a2" data-element_type="container"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-element elementor-element-6dbc2b7 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                data-id="6dbc2b7" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Confirm</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-a8eed2a elementor-button-align-stretch wdp-sticky-section-no elementor-widget elementor-widget-form"
                                data-id="a8eed2a" data-element_type="widget"
                                data-settings="{&quot;button_width&quot;:&quot;30&quot;,&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;dce_confirm_dialog_enabled&quot;:&quot;no&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;,&quot;label_icon_size&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;field_icon_size&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                data-widget_type="form.default">
                                <div class="elementor-widget-container">
                                    <form class="elementor-form" method="post" id="weddingGift"
                                        name="weddinggift">
                                        <input type="hidden" name="referer_title"
                                            value="The Wedding of Ferry Adel" />

                                        <div class="elementor-form-fields-wrapper elementor-labels-above">
                                            <div
                                                class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100 elementor-field-required">
                                                <label for="form-field-name" class="elementor-field-label">
                                                    Full Name </label>
                                                <input size="1" type="text" name="confirm_guest_name"
                                                    id="form-field-name"
                                                    class="elementor-field elementor-size-sm  elementor-field-textual"
                                                    required="required" aria-required="true">
                                            </div>
                                            <div
                                                class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-bank_tujuan elementor-col-100 elementor-field-required">
                                                <label for="form-field-bank_tujuan" class="elementor-field-label">
                                                    Recipient Bank </label>
                                                <div class="elementor-field elementor-select-wrapper remove-before ">
                                                    <div class="select-caret-down-wrapper">
                                                        <i aria-hidden="true" class="eicon-caret-down"></i>
                                                    </div>
                                                    <select name="form_fields[bank_tujuan]"
                                                        id="form-field-bank_tujuan"
                                                        class="elementor-field-textual elementor-size-sm"
                                                        required="required" aria-required="true">
                                                        <option value="Kiki Adelya">Kiki Adelya
                                                            BCA</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-field-type-number elementor-field-group elementor-column elementor-field-group-Amount elementor-col-100 elementor-field-required">
                                                <label for="form-field-Amount" class="elementor-field-label">
                                                    Amount </label>
                                                <input type="number" name="confirm_amount" id="form-field-Amount"
                                                    class="elementor-field elementor-size-sm  elementor-field-textual"
                                                    required="required" aria-required="true" min=""
                                                    max="">
                                            </div>
                                            <div
                                                class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-note elementor-col-100">
                                                <label for="form-field-note" class="elementor-field-label">
                                                    Note (optional) </label>
                                                <textarea class="elementor-field-textual elementor-field  elementor-size-sm" name="confirm_note"
                                                    id="form-field-note" rows="3"></textarea>
                                            </div>
                                            <div
                                                class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-30 e-form__buttons">
                                                <button class="elementor-button elementor-size-sm"
                                                    data-url="{{ route('ferry-adel.gifts.store') }}" type="button"
                                                    id="confirm-gifts">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">Send</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('ferry.templates.partials.script')
</body>

</html>
