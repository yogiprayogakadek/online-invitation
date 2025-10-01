<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        // Matikan semua console bawaan
        console.log = function() {};
        console.error = function() {};
        console.warn = function() {};
        console.info = function() {};
        console.debug = function() {};
    </script>

    <style type="text/css">
        .wdp-comment-text img {

            max-width: 100% !important;

        }
    </style>

    <style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>

    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/groovepublic.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.7.2"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
    </script>
    <link rel='stylesheet' id='dce-animations-css'
        href='https://groovepublic.com/wp-content/plugins/dynamic-content-for-elementor/assets/css/animations.css?ver=3.0.8'
        media='all' />
    <link rel="stylesheet" id="cf-frontend-style-inline-css" href="{{ asset('assets/css/ferry/font.css') }}">

    <style id='wp-emoji-styles-inline-css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='rank-math-toc-block-style-inline-css'>
        .wp-block-rank-math-toc-block nav ol {
            counter-reset: item
        }

        .wp-block-rank-math-toc-block nav ol li {
            display: block
        }

        .wp-block-rank-math-toc-block nav ol li:before {
            content: counters(item, ".") ". ";
            counter-increment: item
        }
    </style>
    <link rel="stylesheet" href="{{ asset('assets/css/ferry/global-styles-inline-css.css') }}"
        id="global-styles-inline-css">
    <link rel='stylesheet' id='pafe-extension-style-css' href='{{ asset('assets/css/ferry/extension_7.min.css') }}'
        media='all' />
    <link rel='stylesheet' id='pafe-extension-style-free-css' href='{{ asset('assets/css/ferry/extension_2.min.css') }}'
        media='all' />
    <link rel='stylesheet' id='slicewp-style-css' href='{{ asset('assets/css/ferry/style-front-end_1.css') }}'
        media='all' />
    <link rel='stylesheet' id='wdp_style-css' href='{{ asset('assets/css/ferry/wdp_style_2.css') }}' media='screen' />
    <style id='wdp_style-inline-css'>
        .wdp-wrapper {

            font-size: 14px
        }



        .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment .wdp-comment-avatar img {

            max-width: 28px;

            max-height: 28px;

        }

        .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment .wdp-comment-content {

            margin-left: 38px;

        }

        .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment ul .wdp-comment-avatar img {

            max-width: 24px;

            max-height: 24px;

        }

        .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment ul ul .wdp-comment-avatar img {

            max-width: 21px;

            max-height: 21px;

        }
    </style>
    <link rel='stylesheet' id='woocommerce-layout-css'
        href='https://groovepublic.com/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=9.5.2'
        media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href='https://groovepublic.com/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=9.5.2'
        media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'
        href='https://groovepublic.com/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=9.5.2'
        media='all' />
    <style id='woocommerce-inline-inline-css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='wt-smart-coupon-for-woo-css'
        href='https://groovepublic.com/wp-content/plugins/wt-smart-coupons-for-woocommerce/public/css/wt-smart-coupon-public.css?ver=2.1.1'
        media='all' />
    <link rel='stylesheet' id='wdp-centered-css-css'
        href='https://groovepublic.com/wp-content/plugins/weddingpress/assets/css/wdp-centered-timeline.min.css?ver=6.7.2'
        media='all' />
    <link rel='stylesheet' id='wdp-horizontal-css-css'
        href='https://groovepublic.com/wp-content/plugins/weddingpress/assets/css/wdp-horizontal-styles.min.css?ver=6.7.2'
        media='all' />
    <link rel='stylesheet' id='wdp-fontello-css-css'
        href='https://groovepublic.com/wp-content/plugins/weddingpress/assets/css/wdp-fontello.css?ver=6.7.2'
        media='all' />
    <link rel='stylesheet' id='exad-main-style-css'
        href='https://groovepublic.com/wp-content/plugins/weddingpress/assets/css/exad-styles.min.css?ver=6.7.2'
        media='all' />
    <link rel='stylesheet' id='inter-font-css'
        href='https://fonts.googleapis.com/css2?family=Inter%3Awght%40400%3B500%3B600%3B700&#038;display=swap&#038;ver=6.7.2'
        media='all' />
    <style id='inter-font-inline-css'>
        .link-tracking-dashboard {
            font-family: 'Inter', sans-serif;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .dashboard-header {
            margin-bottom: 30px;
        }

        .table-container-link {
            max-height: 500px;
            overflow-y: auto;
            scrollbar-width: thin;
        }

        table.links-table thead {
            position: sticky;
            top: 0;
            background-color: #adadad;
        }

        .dashboard-title {
            font-size: 24px;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 20px;
        }

        .stats-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .stat-label {
            font-size: 14px;
            color: #6b7280;
            margin-bottom: 8px;
        }

        .stat-value {
            font-size: 24px;
            font-weight: 600;
            color: #111827;
        }

        .action-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .action-buttons {
            display: flex;
            align-items: center;
        }

        .search-box {
            flex-grow: 1;
            max-width: 300px;
            background-color: #fff0;
        }

        .search-input {
            width: 100%;
            padding: 10px 16px;
            border-radius: 6px;
            font-size: 14px;
            outline: none;
        }

        input.search-input {
            color: #4b5563;
            background: #e8e8e800 !important;
            border: 1px solid #66666687 !important;
        }

        .search-input:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 2px rgba(37, 99, 235, 0.1);
        }

        .links-table {
            width: 100%;
            background: white;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .links-table th {
            background: #f9fafb;
            padding: 12px 16px;
            text-align: left;
            font-size: 12px;
            font-weight: 600;
            color: #4b5563;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border-bottom: 1px solid #e5e7eb;
        }

        .links-table td {
            padding: 12px 16px;
            font-size: 14px;
            color: #1f2937;
            border-bottom: 1px solid #e5e7eb;
        }

        .links-table tr:hover {
            background: #f9fafb;
        }

        .pagination {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .pagination-info {
            font-size: 14px;
            color: #6b7280;
        }

        .pagination-links {
            display: flex;
            gap: 4px;
        }

        .pagination-links a,
        .pagination-links span {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 32px;
            height: 32px;
            padding: 0 6px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 14px;
            color: #4b5563;
            text-decoration: none;
        }

        .pagination-links span.current {
            background: #2563eb;
            border-color: #2563eb;
            color: white;
        }

        .pagination-links a:hover {
            background: #f9fafb;
        }

        .button {
            display: inline-block;
            padding: 8px 16px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
        }

        .button:hover {
            background: #1d4ed8;
            color: white;
            text-decoration: none;
        }

        .button.danger {
            background: #ef4444;
        }

        .button.danger:hover {
            background: #dc2626;
        }

        .button.cleanup-duplicates {
            background: #ff9800;
        }

        .button.cleanup-duplicates:hover {
            background: #f57c00;
        }

        #link-tracker-loading {
            display: none;
            text-align: center;
            padding: 20px;
        }

        .delete-link {
            color: red;
        }

        .refresh-data,
        .clear-all-data,
        .cleanup-duplicates {
            cursor: pointer;
            text-decoration: none !important;
            color: #fff;
        }

        .delete-link:hover,
        .refresh-data:hover,
        .clear-all-data:hover,
        .cleanup-duplicates:hover {
            text-decoration: none;
        }

        .ajax-message {
            padding: 10px;
            margin: 10px 0;
            border-radius: 6px;
            display: none;
        }

        .ajax-message.success {
            background-color: #dcfce7;
            color: #166534;
        }

        .ajax-message.error {
            background-color: #fee2e2;
            color: #991b1b;
        }

        @media (max-width: 768px) {
            .action-bar {
                flex-direction: column;
                align-items: stretch;
            }

            .search-box {
                max-width: 100%;
            }
        }
    </style>
    <link rel='stylesheet' id='hello-elementor-css'
        href='https://groovepublic.com/wp-content/themes/hello-elementor/assets/css/reset.css?ver=3.4.4'
        media='all' />
    <link rel='stylesheet' id='hello-elementor-theme-style-css'
        href='https://groovepublic.com/wp-content/themes/hello-elementor/assets/css/theme.css?ver=3.4.4'
        media='all' />
    <link rel='stylesheet' id='hello-elementor-header-footer-css'
        href='https://groovepublic.com/wp-content/themes/hello-elementor/assets/css/header-footer.css?ver=3.4.4'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href='{{ asset('assets/css/ferry/elementor-icons_5.min.css') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='https://groovepublic.com/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.23.3'
        media='all' />
    <style id='elementor-frontend-inline-css'>
        .elementor-478304 .elementor-element.elementor-element-2b95209c:not(.elementor-motion-effects-element-type-background),
        .elementor-478304 .elementor-element.elementor-element-2b95209c>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background: url("{{ asset('assets/images/ferry/home_bg.jpg') }}") 50% 50%;
            background-size: cover;
        }

        .elementor-478304 .elementor-element.elementor-element-31e5c03c:not(.elementor-motion-effects-element-type-background),
        .elementor-478304 .elementor-element.elementor-element-31e5c03c>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-image: url("{{ asset('assets/images/ferry/home_bg.jpg') }}");
        }

        .elementor-478304 .elementor-element.elementor-element-44a7ee4a:not(.elementor-motion-effects-element-type-background),
        .elementor-478304 .elementor-element.elementor-element-44a7ee4a>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-image: url("{{ asset('assets/images/ferry/calendar.jpg') }}");
        }

        .elementor-478304 .elementor-element.elementor-element-489528a:not(.elementor-motion-effects-element-type-background),
        .elementor-478304 .elementor-element.elementor-element-489528a>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #726c55;
        }

        .elementor-478304 .elementor-element.elementor-element-17b2df9f:not(.elementor-motion-effects-element-type-background),
        .elementor-478304 .elementor-element.elementor-element-17b2df9f>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #757575;
        }

        .elementor-478304 .elementor-element.elementor-element-2d4f42df:not(.elementor-motion-effects-element-type-background),
        .elementor-478304 .elementor-element.elementor-element-2d4f42df>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #8b8c8b;
        }

        .elementor-478304 .elementor-element.elementor-element-6388658e:not(.elementor-motion-effects-element-type-background),
        .elementor-478304 .elementor-element.elementor-element-6388658e>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #59462E;
        }

        .elementor-478304 .elementor-element.elementor-element-11e42565:not(.elementor-motion-effects-element-type-background),
        .elementor-478304 .elementor-element.elementor-element-11e42565>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #7e817e;
        }
    </style>
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
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLora%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CDM+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.7.2'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href='{{ asset('assets/css/ferry/fontawesome.min.css') }}' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css' href='{{ asset('assets/css/ferry/solid.min.css') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css' href='{{ asset('assets/css/ferry/brands.min.css') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-regular-css'
        href='{{ asset('assets/css/ferry/regular_5.min.css') }}' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script id="jquery-core-js-extra">
        var link_tracking_ajax = {
            "ajax_url": "https:\/\/groovepublic.com\/wp-admin\/admin-ajax.php",
            "nonce": "a408ae8f0b"
        };
    </script>
    <script src="https://groovepublic.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
    <script src="https://groovepublic.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js">
    </script>
    <script
        src="https://groovepublic.com/wp-content/plugins/piotnet-addons-for-elementor-pro/assets/js/minify/extension.min.js?ver=7.1.35"
        id="pafe-extension-js"></script>
    <script
        src="https://groovepublic.com/wp-content/plugins/piotnet-addons-for-elementor/assets/js/minify/extension.min.js?ver=2.4.29"
        id="pafe-extension-free-js"></script>
    <script
        src="https://groovepublic.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.9.5.2"
        id="jquery-blockui-js" defer data-wp-strategy="defer"></script>
    <script id="wc-add-to-cart-js-extra">
        var wc_add_to_cart_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/groovepublic.com\/history-order\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
    </script>
    <script src="https://groovepublic.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=9.5.2"
        id="wc-add-to-cart-js" defer data-wp-strategy="defer"></script>
    <script
        src="https://groovepublic.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.9.5.2"
        id="js-cookie-js" defer data-wp-strategy="defer"></script>
    <script id="woocommerce-js-extra">
        var woocommerce_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
        };
    </script>
    <script src="https://groovepublic.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=9.5.2"
        id="woocommerce-js" defer data-wp-strategy="defer"></script>
    <script id="wt-smart-coupon-for-woo-js-extra">
        var WTSmartCouponOBJ = {
            "ajaxurl": "https:\/\/groovepublic.com\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "https:\/\/groovepublic.com\/?wc-ajax=",
            "nonces": {
                "public": "54de051600",
                "apply_coupon": "d0ec9727d5"
            },
            "labels": {
                "please_wait": "Please wait...",
                "choose_variation": "Please choose a variation",
                "error": "Error !!!"
            },
            "shipping_method": [],
            "payment_method": "",
            "is_cart": ""
        };
    </script>
    <script
        src="https://groovepublic.com/wp-content/plugins/wt-smart-coupons-for-woocommerce/public/js/wt-smart-coupon-public.js?ver=2.1.1"
        id="wt-smart-coupon-for-woo-js"></script>
    <script id="slicewp-script-tracking-js-before">
        var slicewp_ajaxurl = "https:\/\/groovepublic.com\/wp-admin\/admin-ajax.php";
        var slicewp = {
            "ajaxurl": "https:\/\/groovepublic.com\/wp-admin\/admin-ajax.php",
            "cookie_duration": 30,
            "affiliate_credit": "first",
            "affiliate_keyword": "invitation",
            "predefined_date_ranges": {
                "past_7_days": "Past 7 days",
                "past_30_days": "Past 30 days",
                "week_to_date": "Week to date",
                "month_to_date": "Month to date",
                "year_to_date": "Year to date",
                "last_week": "Last week",
                "last_month": "Last month",
                "last_year": "Last year"
            },
            "settings": {
                "active_currency": "IDR",
                "currency_symbol_position": "before",
                "currency_thousands_separator": ".",
                "currency_decimal_separator": ","
            }
        };
    </script>
    <script src="https://groovepublic.com/wp-content/plugins/slicewp/assets/js/script-trk.js?ver=1.1.16"
        id="slicewp-script-tracking-js"></script>
    <script src="https://groovepublic.com/wp-content/plugins/elementor-pro/assets/js/page-transitions.min.js?ver=3.23.2"
        id="page-transitions-js"></script>
    <script
        src="https://groovepublic.com/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.23.3"
        id="font-awesome-4-shim-js"></script>
    <link rel="https://api.w.org/" href="https://groovepublic.com/wp-json/" />
    <link rel="alternate" title="JSON" type="application/json"
        href="https://groovepublic.com/wp-json/wp/v2/posts/478304" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://groovepublic.com/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.7.2" />
    <meta name="generator" content="WooCommerce 9.5.2" />
    <link rel='shortlink' href='https://groovepublic.com/?p=478304' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="https://groovepublic.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fgroovepublic.com%2Fcahayatrisna%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="https://groovepublic.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fgroovepublic.com%2Fcahayatrisna%2F&#038;format=xml" />
    <style>
        .wdp_note_button {
            display: none !important;
        }
    </style>
    <meta name="facebook-domain-verification" content="sb1sd9cmt71rl5pl5989ag6jhbxw10" />
    <meta name="google-site-verification" content="O3UYxwmuWeOrcK2Ad3Pa_i283rWzAd5x9K5J8viLFTY" />
    <meta name="google" content="notranslate">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <meta name="color-scheme" content="light dark">

    <style>
        /* Hide default WooCommerce buttons */
        .product_type_variable.add_to_cart_button:not(.overlay-btn),
        .product_type_simple.add_to_cart_button:not(.overlay-btn),
        .added_to_cart.wc-forward {
            display: none !important;
        }

        .product-image-overlay-container {
            position: relative;
            display: block;
        }

        .product-image-clickable {
            cursor: pointer;
            z-index: 2;
            position: relative;
        }

        /* Override WooCommerce default behavior to prevent link navigation */
        .woocommerce ul.products li.product a img {
            pointer-events: none;
        }

        /* Override standard product link behavior */
        .woocommerce-LoopProduct-link {
            pointer-events: none;
        }

        .variation-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.7);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 100;
        }

        /* Tombol close untuk overlay */
        .variation-overlay-close {
            position: absolute;
            top: 10px;
            right: 10px;
            color: white;
            font-size: 24px;
            cursor: pointer;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 50%;
        }

        /* Desktop behavior - use hover */
        @media (min-width: 769px) {
            .product-image-overlay-container:hover .variation-overlay {
                opacity: 1;
                visibility: visible;
            }

            .variation-overlay-close {
                display: none;
                /* Hide close button on desktop */
            }
        }

        /* Tampilkan overlay saat aktif (untuk mobile) */
        .variation-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .variation-buttons {
            display: flex;
            flex-direction: column;
            gap: 8px;
            padding: 15px;
            width: 80%;
            max-width: 200px;
        }

        .variation-buttons .overlay-btn {
            display: inline-block !important;
            padding: 8px 15px;
            color: #fff !important;
            text-align: center;
            text-decoration: none;
            transition: all 0.3s ease;
            border-bottom: 1px solid #ffffff24;
            margin: 0;
            font-size: 14px;
            line-height: 1.4;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .variation-buttons .overlay-btn:hover {
            background: #ffffff24;
            transform: translateY(-1px);
        }

        .variation-buttons .preview-btn {
            background: #b2b2b261;
            color: white;
        }

        .variation-buttons .detail-btn {
            background: #bdbdbd61;
            color: white;
        }

        .variation-buttons .preview-btn:hover,
        .variation-buttons .detail-btn:hover {
            background: #202020;
        }

        .variation-buttons .added {
            background: #4CAF50;
            color: white;
        }

        .variation-buttons .added:after {
            font-family: WooCommerce;
            content: "\e017";
            margin-left: .53em;
        }

        .variation-buttons .loading {
            opacity: 0.5;
            pointer-events: none;
        }

        @media (max-width: 768px) {
            .variation-buttons {
                width: 90%;
                padding: 10px;
            }

            .variation-buttons .overlay-btn {
                padding: 6px 12px;
                font-size: 13px;
            }
        }
    </style>

    <script type="text/javascript">
        jQuery(function($) {
            // Deteksi apakah device adalah mobile
            var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator
                .userAgent) || (window.innerWidth <= 768);

            // Hapus semua event click pada gambar produk
            $('.products .product a').unbind('click');

            // Tampilkan overlay saat gambar diklik (khusus mobile)
            $('body').on('click', '.product-image-clickable', function(e) {
                if (isMobile) {
                    e.preventDefault();
                    e.stopPropagation();
                    e.stopImmediatePropagation();

                    // Tutup semua overlay produk lainnya
                    $('.variation-overlay.active').removeClass('active');

                    // Tampilkan overlay
                    $(this).closest('.product-image-overlay-container').find('.variation-overlay').addClass(
                        'active');
                    return false;
                }
            });

            // Mencegah navigasi dari klik pada tag img langsung
            $('body').on('click', '.products img, .product img', function(e) {
                e.preventDefault();
                e.stopPropagation();
                e.stopImmediatePropagation();

                if (isMobile) {
                    // Tutup semua overlay produk lainnya
                    $('.variation-overlay.active').removeClass('active');

                    // Tampilkan overlay jika ada di dalam container yang tepat
                    if ($(this).closest('.product-image-clickable').length) {
                        $(this).closest('.product-image-overlay-container').find('.variation-overlay')
                            .addClass('active');
                    }
                }
                return false;
            });

            // Mencegah link default pada gambar produk secara global
            $('body').on('click', '.product a:has(img)', function(e) {
                if ($(e.target).is('img') || $(this).has('img').length) {
                    e.preventDefault();
                    e.stopPropagation();
                    e.stopImmediatePropagation();
                    return false;
                }
            });

            // Tutup overlay saat tombol close diklik
            $('body').on('click', '.variation-overlay-close', function(e) {
                e.preventDefault();
                e.stopPropagation();

                $(this).closest('.variation-overlay').removeClass('active');
            });

            // Tutup overlay saat mengklik di luar area tombol
            $('body').on('click', '.variation-overlay', function(e) {
                if ($(e.target).closest('.variation-buttons').length === 0 && $(e.target).closest(
                        '.variation-overlay-close').length === 0) {
                    $(this).removeClass('active');
                }
            });

            // Tutup overlay saat diklik di luar produk (hanya mobile)
            $('body').on('click', function(e) {
                if (isMobile && !$(e.target).closest('.product-image-overlay-container').length) {
                    $('.variation-overlay.active').removeClass('active');
                }
            });

            // Hentikan propagasi klik untuk tombol-tombol di dalam overlay
            $('body').on('click', '.variation-buttons', function(e) {
                e.stopPropagation();
            });

            // Tutup overlay saat tombol close diklik
            $('body').on('click', '.variation-overlay-close', function(e) {
                e.preventDefault();
                e.stopPropagation();

                $(this).closest('.variation-overlay').removeClass('active');
            });

            // Tutup overlay saat mengklik di luar area tombol
            $('body').on('click', '.variation-overlay', function(e) {
                if ($(e.target).closest('.variation-buttons').length === 0 && $(e.target).closest(
                        '.variation-overlay-close').length === 0) {
                    $(this).removeClass('active');
                }
            });

            // Hentikan propagasi klik untuk tombol-tombol di dalam overlay
            $('body').on('click', '.variation-buttons', function(e) {
                e.stopPropagation();
            });

            // Handler untuk variable product
            $('body').on('click', '.variation_button', function(e) {
                e.preventDefault();

                var $button = $(this);
                var data = {
                    action: 'woocommerce_add_to_cart_variable_rc',
                    product_id: $button.data('product_id'),
                    variation_id: $button.data('variation_id'),
                    variation: JSON.parse($button.attr('data-variation')),
                    quantity: $button.data('quantity')
                };

                $(document.body).trigger('adding_to_cart', [$button, data]);

                $.ajax({
                    type: 'POST',
                    url: wc_add_to_cart_params.ajax_url,
                    data: data,
                    beforeSend: function() {
                        $button.removeClass('added').addClass('loading');
                    },
                    complete: function() {
                        $button.removeClass('loading');
                    },
                    success: function(response) {
                        if (response.error & response.product_url) {
                            window.location = response.product_url;
                            return;
                        }

                        $(document.body).trigger('added_to_cart', [response.fragments, response
                            .cart_hash, $button
                        ]);
                        $button.addClass('added');

                        // Tutup overlay setelah menambahkan ke keranjang
                        setTimeout(function() {
                            $button.closest('.variation-overlay').removeClass('active');
                        }, 1000);
                    },
                    dataType: 'json'
                });
            });

            // Handler untuk simple product
            $('body').on('click', '.simple_add_to_cart', function(e) {
                e.preventDefault();

                var $button = $(this);
                var data = {
                    action: 'woocommerce_add_to_cart_simple_rc',
                    product_id: $button.data('product_id'),
                    quantity: $button.data('quantity')
                };

                $(document.body).trigger('adding_to_cart', [$button, data]);

                $.ajax({
                    type: 'POST',
                    url: wc_add_to_cart_params.ajax_url,
                    data: data,
                    beforeSend: function() {
                        $button.removeClass('added').addClass('loading');
                    },
                    complete: function() {
                        $button.removeClass('loading');
                    },
                    success: function(response) {
                        if (response.error & response.product_url) {
                            window.location = response.product_url;
                            return;
                        }

                        $(document.body).trigger('added_to_cart', [response.fragments, response
                            .cart_hash, $button
                        ]);
                        $button.addClass('added');

                        // Tutup overlay setelah menambahkan ke keranjang
                        setTimeout(function() {
                            $button.closest('.variation-overlay').removeClass('active');
                        }, 1000);
                    },
                    dataType: 'json'
                });
            });
        });
    </script>
    <script type="text/javascript">
        var ajaxurl = "https://groovepublic.com/wp-admin/admin-ajax.php";
        var scannerNonce = "1798b3c0d1";
    </script>
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator"
        content="Elementor 3.23.3; settings: css_print_method-external, google_font-enabled, font_display-auto">
    <script type="text/javascript">
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
    </script>
    <!-- WooCommerce Facebook Integration Begin -->
    <script type="text/javascript">
        fbq('init', '743204613787069', {}, {
            "agent": "woocommerce-9.5.2-3.2.4"
        });

        fbq('track', 'PageView', {
            "source": "woocommerce",
            "version": "9.5.2",
            "pluginVersion": "3.2.4"
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Insert placeholder for events injected when a product is added to the cart through AJAX.
            document.body.insertAdjacentHTML('beforeend',
                '<div class=\"wc-facebook-pixel-event-placeholder\"></div>');
        }, false);
    </script>
    <!-- WooCommerce Facebook Integration End -->

    <style class="wpcode-css-snippet">
        .acf-image-uploader.show-preview.has-value {
            width: 190px;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Select necessary DOM elements
            const audioElement = document.getElementById('song');
            const unmuteIcon = document.getElementById('unmute-sound');
            const muteIcon = document.getElementById('mute-sound');

            // Function to handle play/pause
            function toggleAudio() {
                if (audioElement.paused) {
                    // If audio is paused, play it
                    audioElement.play();

                    // Show mute icon (pause icon), hide unmute icon (play icon)
                    unmuteIcon.style.display = 'none';
                    muteIcon.style.display = 'block';
                } else {
                    // If audio is playing, pause it
                    audioElement.pause();

                    // Show unmute icon (play icon), hide mute icon (pause icon)
                    unmuteIcon.style.display = 'block';
                    muteIcon.style.display = 'none';
                }
            }

            // Add click event listeners to both icons
            unmuteIcon.addEventListener('click', toggleAudio);
            muteIcon.addEventListener('click', toggleAudio);

            // Ensure correct icon display when audio starts programmatically
            audioElement.addEventListener('play', () => {
                unmuteIcon.style.display = 'none';
                muteIcon.style.display = 'block';
            });

            // Ensure correct icon display when audio is paused
            audioElement.addEventListener('pause', () => {
                unmuteIcon.style.display = 'block';
                muteIcon.style.display = 'none';
            });
        });
    </script>
    <script>
        jQuery(document).ready(function($) {
            $('.single_add_to_cart_button').on('click', function(e) {
                var $thisbutton = $(this),
                    $form = $thisbutton.closest('form.cart'),
                    productID = $form.find('input[name=product_id]').val() || $thisbutton.val(),
                    quantity = $form.find('input[name=quantity]').val();

                var data = {
                    action: 'woocommerce_add_to_cart',
                    product_id: productID,
                    quantity: quantity
                };

                $(document.body).trigger('adding_to_cart', [$thisbutton, data]);

                $.ajax({
                    type: 'post',
                    url: wc_add_to_cart_params.ajax_url,
                    data: data,
                    beforeSend: function(response) {
                        $thisbutton.removeClass('added').addClass('loading');
                    },
                    complete: function(response) {
                        $thisbutton.addClass('added').removeClass('loading');
                    },
                    success: function(response) {
                        if (response.error & response.product_url) {
                            window.location = response.product_url;
                            return;
                        }

                        $(document.body).trigger('added_to_cart', [response.fragments, response
                            .cart_hash, $thisbutton
                        ]);
                    },
                });

                return false;
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const widgets = document.querySelectorAll(
                '[style*="font-size"]'); // Seleksi elemen dengan inline style font-size

            widgets.forEach((widget) => {
                const fontSizeStyle = widget.style.fontSize; // Ambil nilai font-size
                const fontSizeValue = parseFloat(fontSizeStyle); // Ambil angka dari font-size
                const fontUnit = fontSizeStyle.replace(fontSizeValue, '').trim(); // Ambil unit (px/rem/em)

                if (fontUnit === 'px' || fontUnit === 'rem' || fontUnit === 'em') {
                    widget.style.fontSize = `clamp(${fontSizeValue / 2}${fontUnit}, ${fontSizeValue}px, ${
                fontSizeValue * 1.5
            }${fontUnit})`; // Terapkan clamp
                }
            });
        });
        console.log('Processing Element:', widget, widget.style.fontSize);
        const widgets = document.querySelectorAll('.elementor-widget-heading [style*="font-size"]');
        console.log('Found Elements:', widgets);
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@900&display=swap');
    </style>
    <style class='wp-fonts-local'>
        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 300 900;
            font-display: fallback;
            src: url('https://groovepublic.com/wp-content/plugins/woocommerce/assets/fonts/Inter-VariableFont_slnt,wght.woff2') format('woff2');
            font-stretch: normal;
        }

        @font-face {
            font-family: Cardo;
            font-style: normal;
            font-weight: 400;
            font-display: fallback;
            src: url('https://groovepublic.com/wp-content/plugins/woocommerce/assets/fonts/cardo_normal_400.woff2') format('woff2');
        }
    </style>
    <link rel="icon" href="https://groovepublic.com/wp-content/uploads/2024/06/arrow-groove-p-.png"
        sizes="32x32" />
    <link rel="icon" href="https://groovepublic.com/wp-content/uploads/2024/06/arrow-groove-p-.png"
        sizes="192x192" />
    <link rel="apple-touch-icon" href="https://groovepublic.com/wp-content/uploads/2024/06/arrow-groove-p-.png" />
    <meta name="msapplication-TileImage"
        content="https://groovepublic.com/wp-content/uploads/2024/06/arrow-groove-p-.png" />
    <style>
        .pswp.pafe-lightbox-modal {
            display: none;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('assets/css/ferry/slideshow.css') }}">

    <style id="wp-custom-css">
        html {
            scroll-behavior: smooth;
        }


        ::-webkit-scrollbar {
            width: 2px;
            height: 2px;
        }

        ::-webkit-scrollbar-track {
            background: #1e1e1e;
            /* warna track */
        }

        ::-webkit-scrollbar-thumb {
            background: #555;
            /* warna thumb */
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #777;
            /* warna thumb pas hover */
        }

        /*judul foto hilang*/
        .elementor-slideshow__title {
            visibility: hidden;
        }

        /*icon share foto hilang*/
        i.eicon-share-arrow {
            visibility: hidden;
        }

        i.eicon-zoom-in-bold {
            visibility: hidden;
        }

        .elementor-lightbox .elementor-swiper-button-next i,
        .elementor-lightbox .elementor-swiper-button-prev i {
            padding: 10px;
            background-color: transparent;
        }

        .user-guestbook img {
            visibility: hidden;
        }

        /*icon centang guest book*/
        /*icon centang*/
        i.fas.fa-check-circle {
            visibility: hidden;
        }

        /*background comment guest book*/
        .guestbook {
            background-color: #fff0;
        }


        /*slide to top */
        .removeModals {
            transform: translateY(-200%);
            transition: 1s ease-in-out;
        }


        /*SELANJUTNYA COMMENT KIT*/
        .wdp-wrapper .wdp-holder {
            display: block !important;
        }

        /*TAMPILAN COMMENTKIT DI ELEMENTOR*/
        .wdp-wrapper .wdp-wrap-comments {
            display: block !important;
        }
    </style>
</head>
