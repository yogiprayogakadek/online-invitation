<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#574D36">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta http-equiv="Content-Security-Policy" content="frame-src 'self' https://www.google.com;">

    <link rel="apple-touch-icon" href="/assets/images/icons/icon.png">
    <link rel="shortcut icon" href="/assets/images/icons/icon.png" type="image/x-icon">
    <title>Undangan Metatah | ANA & Ditha & Radea</title>
    <link rel="shortcut icon" href="{{ asset('assets/css/ana/icon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/ana/style.css') }}">

    <!-- Preload critical fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Dancing+Script:wght@400;700&family=Fira+Sans:wght@300;400;500;600;700&family=Lora:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- External CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@phosphor-icons/web@2.0.3/src/fill/style.css">


</head>

<body>
    <div class="wrapper">
        <!-- MENU NAVIGATION -->
        <nav class="menu" id="menu" role="navigation" aria-label="Menu navigasi utama">
            <div class="menu-wrapper">
                <div class="menu-container" id="menuContainer"></div>
            </div>
        </nav>

        <!-- Corner Images -->
        <img src="https://indoinvite.com/nikah/template/pandora/pandora-classic/PC-BKR.png"
            class="corner-image corner-top-left" alt="" role="presentation">
        <img src="https://indoinvite.com/nikah/template/pandora/pandora-classic/PC-BKR.png"
            class="corner-image corner-top-right" alt="" role="presentation">
        <img src="https://indoinvite.com/nikah/template/pandora/pandora-classic/PC-BKR.png"
            class="corner-image corner-bottom-left" alt="" role="presentation">
        <img src="https://indoinvite.com/nikah/template/pandora/pandora-classic/PC-BKR.png"
            class="corner-image corner-bottom-right" alt="" role="presentation">

        <!-- HOME PAGE -->
        <div id="home" class="page active">
            <div class="circle-container">
                <div class="circle-inner">
                    <img src="https://sin1.contabostorage.com/2db3bf1e16cd47a08843bb881e39cce7:indoinvite-staging/indoinvite-staging/indoinvite-staging/nikah/theme/images/1663620650.png"
                        alt="Foto Keluarga" loading="lazy">
                </div>
                <img class="circle-frame" src="https://indoinvite.com/nikah/template/pandora/pandora-classic/PC-Bor.png"
                    alt="" role="presentation">
            </div>

            <div class="names-container">
                <h1>ANA</h1>
                <div class="and-symbol">&amp;</div>
                <h1>Dita &amp; Radea</h1>
                <p class="date">27 . 08 . 2025</p>
            </div>

            <div class="invite-text">
                <p>Kepada Yth;</p>
                <p>Bapak/Ibu/Saudara/i</p>
                <p class="guest-name">Yogi Prayoga</p>
                <p class="warning-name">Mohon maaf atas kesalahan penyebutan nama ataupun gelar</p>
            </div>

            <button id="btnOpen" class="btn-open animate__animated animate__pulse" onclick="openInvitation()"
                aria-label="Buka Undangan">
                Open Invitation
            </button>
        </div>

        <!-- PROFILE PAGE -->
        <div id="profile" class="page">
            <p class="title">Undangan Metatah</p>

            <div class="name">
                <p class="animate__animated animate__fadeInDown">Ana Febriana Wijaya, S.Kom</p>
                <p class="animate__animated animate__fadeInDown">Putri pertama dari pasangan</p>
                <p class="animate__animated animate__fadeInDown">Sukarno &amp; Ni Komang Trinioni</p>
            </div>

            <span>&amp;</span>

            <div class="carousel-wrapper">
                <div class="carousel">
                    <div class="carousel-item active">
                        <p class="animate__animated animate__fadeInDown">Ni Putu Pradnyaditha Nareshvari Swarna, S.Kom
                        </p>
                        <p class="animate__animated animate__fadeInDown">Putri pertama dari pasangan</p>
                        <p class="animate__animated animate__fadeInDown">I Gede Suwarna &amp; Ni Made Oktaviani</p>
                    </div>
                    <div class="carousel-item">
                        <p class="animate__animated animate__fadeInDown">I Made Radeadhitya Laksmana Swarna</p>
                        <p class="animate__animated animate__fadeInDown">Putra kedua dari pasangan</p>
                        <p class="animate__animated animate__fadeInDown">I Gede Suwarna &amp; Ni Made Oktaviani</p>
                    </div>
                </div>
                <div class="carousel-dots" id="carouselDots" role="tablist" aria-label="Profil keluarga"></div>
            </div>
        </div>

        <!-- QUOTES PAGE -->
        <div id="quotes" class="page">
            <h2 class="animate__animated animate__fadeInDown">Rg Veda X.191.2</h2>
            <p>"Satsyameva jayate nānṛtam"</p>
            <p>Hanya kebenaran yang akan menang, bukan ketidakbenaran<br>
                Semoga Pikiran Baik Datang dari Segala Penjuru</p>
            <p>"Yajur Weda XXV.4"</p>
        </div>

        <!-- SALAM PAGE -->
        <div id="salam" class="page">
            <div class="circle-container">
                <div class="circle-inner">
                    <img src="https://sin1.contabostorage.com/2db3bf1e16cd47a08843bb881e39cce7:indoinvite-staging/indoinvite-staging/indoinvite-staging/nikah/theme/images/1663620650.png"
                        alt="Foto Keluarga" loading="lazy">
                </div>
                <img class="circle-frame"
                    src="https://indoinvite.com/nikah/template/pandora/pandora-classic/PC-Bor.png" alt=""
                    role="presentation">
            </div>
            <h2 class="animate__animated animate__fadeInDown">Om Swastyastu</h2>
            <p>
                Atas Asung Kertha Wara Nugraha Ida Sang Hyang Widhi Wasa/Tuhan Yang Maha Esa,
                kami bermaksud menyelenggarakan Upacara Mepandes putra/putri kami.
            </p>
        </div>

        <!-- RESEPSI PAGE -->
        <div id="resepsi" class="page">
            <div class="circle-container">
                <div class="circle-inner">
                    <img src="https://sin1.contabostorage.com/2db3bf1e16cd47a08843bb881e39cce7:indoinvite-staging/indoinvite-staging/indoinvite-staging/nikah/theme/images/1663620650.png"
                        alt="Foto Keluarga" loading="lazy">
                </div>
                <img class="circle-frame"
                    src="https://indoinvite.com/nikah/template/pandora/pandora-classic/PC-Bor.png" alt=""
                    role="presentation">
            </div>
            <!-- <h2 class="hari animate__animated animate__fadeInDown">SELASA</h2> -->

            <div class="resepsi-detail">
                <div class="line-decor">
                    <span class="line"></span>
                    <span class="bunga-icon">✿</span>
                    <span class="line"></span>
                </div>

                <p class="judul-resepsi">
                    <i class="icon ph-fill ph-hands-praying" aria-hidden="true"></i>
                    Ngekeb &amp; Resepsi
                    <i class="icon ph-fill ph-hands-praying" aria-hidden="true"></i>
                </p>

                <p class="waktu">Pukul 13.00 - Selesai</p>
                <p class="tanggal">26 . 08 . 2025</p>
                <p class="lokasi">Banjar Banyubiru, Jembrana</p>

                <div class="line-decor">
                    <span class="line"></span>
                    <span class="bunga-icon">✿</span>
                    <span class="line"></span>
                </div>
            </div>
        </div>

        <!-- MESANGIH PAGE -->
        <div id="mesangih" class="page">
            <div class="circle-container">
                <div class="circle-inner">
                    <img src="https://sin1.contabostorage.com/2db3bf1e16cd47a08843bb881e39cce7:indoinvite-staging/indoinvite-staging/indoinvite-staging/nikah/theme/images/1663620650.png"
                        alt="Foto Keluarga" loading="lazy">
                </div>
                <img class="circle-frame"
                    src="https://indoinvite.com/nikah/template/pandora/pandora-classic/PC-Bor.png" alt=""
                    role="presentation">
            </div>
            <!-- <h2 class="hari animate__animated animate__fadeInDown">RABU</h2> -->

            <div class="mesangih-detail">
                <div class="line-decor">
                    <span class="line"></span>
                    <span class="bunga-icon">✿</span>
                    <span class="line"></span>
                </div>

                <p class="judul-mesangih">
                    <i class="icon ph-fill ph-hands-praying" aria-hidden="true"></i>
                    Acara Mapandes
                    <i class="icon ph-fill ph-hands-praying" aria-hidden="true"></i>
                </p>

                <p class="waktu">Pukul 09.00 - Selesai</p>
                <p class="tanggal">27 . 08 . 2025</p>
                <p class="lokasi">Banjar Banyubiru, Jembrana</p>

                <div class="line-decor">
                    <span class="line"></span>
                    <span class="bunga-icon">✿</span>
                    <span class="line"></span>
                </div>
            </div>
        </div>

        <!-- MAPS PAGE -->
        <div id="maps" class="page">
            <div class="maps-container animate__animated animate__fadeIn">
                <div class="maps-frame">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3947.517031160069!2d114.59518377501098!3d-8.350689391685995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOMKwMjEnMDIuNSJTIDExNMKwMzUnNTEuOSJF!5e0!3m2!1sid!2sid!4v1750135451477!5m2!1sid!2sid"
                        allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        title="Lokasi Acara Metatah">
                    </iframe>
                </div>

                <div class="maps-info">
                    <h3>❖ Lokasi Acara ❖</h3>
                    <p>Banjar Banyubiru, Jembrana</p>
                    <a class="maps-button" target="_blank" rel="noopener noreferrer"
                        href="https://maps.app.goo.gl/sEEak5bWnaRhD9V58?g_st=iw"
                        aria-label="Buka petunjuk arah ke lokasi">
                        Petunjuk Ke Lokasi
                    </a>
                </div>
            </div>
        </div>

        <!-- RSVP PAGE -->
        <div id="rsvp" class="page">
            <h2 class="judul-section">Menghitung Hari</h2>

            <div class="countdown" role="timer" aria-live="polite">
                <div class="box">
                    <div class="angka" id="hari">00</div>
                    <div class="label">Hari</div>
                </div>
                <div class="box">
                    <div class="angka" id="jam">00</div>
                    <div class="label">Jam</div>
                </div>
                <div class="box">
                    <div class="angka" id="menit">00</div>
                    <div class="label">Menit</div>
                </div>
                <div class="box">
                    <div class="angka" id="detik">00</div>
                    <div class="label">Detik</div>
                </div>
            </div>

            <p class="deskripsi">
                Tekan tombol dibawah ini untuk<br>mengirim ucapan dan konfirmasi<br>kehadiran
            </p>

            <button class="btn-konfirmasi" onclick="openUcapanModal()"
                aria-label="Konfirmasi kehadiran dan kirim ucapan">
                Konfirmasi &amp; Kirim Ucapan
            </button>
        </div>

        <!-- GIFTS PAGE -->
        <div id="gifts" class="page">
            <h2 class="title animate__animated animate__fadeInDown">Tanda Kasih</h2>
            <p>Terima kasih telah menambah semangat kegembiraan acara kami dengan kehadiran dan hadiah indah Anda.</p>

            <button class="btn-cashless" onclick="toggleCashless()" aria-expanded="false"
                aria-controls="cashless-container">
                🎁 Cashless
            </button>

            <div id="cashless-container" class="cashless-wrapper" style="display: none;" aria-hidden="true">
                <div class="bank-card">
                    <img src="https://assets.satumomen.com/assets/logo-bca-biru-1687975058.png" alt="Logo BCA"
                        loading="lazy">
                    <div>
                        <h3>0402888251</h3>
                        <p>BCA : Ana Febriana Wijaya</p>
                        <button class="copy-btn" onclick="copyRekening('0402888251', this)"
                            aria-label="Salin nomor rekening BCA">
                            Salin Rekening
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- THANKS PAGE -->
        <div id="thanks" class="page">
            <h2 class="title animate__animated animate__fadeInDown">Matur Sukma</h2>
            <p>Terima kasih buat kamu yang sudah meluangkan waktu dan menjadi bagian pada acara kami.</p>

            <div class="social-footer">
                <div class="social-links">
                    <a href="https://instagram.com/yogiprayoga_" target="_blank" rel="noopener noreferrer"
                        class="ig-link" aria-label="Kunjungi Instagram Yogi Prayoga">
                        <i class="ph-fill ph-instagram-logo" aria-hidden="true"></i>
                        @yogiprayoga_
                    </a>
                    <a href="https://wa.me/628237188923" target="_blank" rel="noopener noreferrer" class="wa-link"
                        aria-label="Hubungi via WhatsApp">
                        <i class="ph-fill ph-whatsapp-logo" aria-hidden="true"></i>
                        0822-3718-8923
                    </a>
                </div>
                <p class="credit">© 2025 All rights reserved — by Yogi Prayoga</p>
            </div>
        </div>

        <!-- AUDIO CONTROL -->
        <button id="audioControl" onclick="toggleAudio()" aria-label="Kontrol musik latar belakang"
            title="Play/Pause musik">
            <img id="audioIcon" src="https://cdn-icons-png.flaticon.com/512/727/727269.png" alt="Audio control">
        </button>

        <audio id="bgAudio" loop preload="none">
            <source src="https://acarakami.com/wp-content/uploads/2023/04/Gamelan-Gambelan-MEPANDES-POTONG.mp3"
                type="audio/mp3">
            Your browser does not support the audio element.
        </audio>

        <!-- Modal Ucapan -->
        <div id="ucapanModal" class="modal-overlay">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Ucapan & Konfirmasi Kehadiran</h3>
                    <div class="modal-header-controls">
                        <button class="toggle-form-btn" id="toggleFormBtn" onclick="toggleUcapanForm()"
                            aria-label="Toggle form visibility" title="Sembunyikan/Tampilkan Form">
                            <i class="ph-fill ph-eye-slash"></i>
                        </button>
                        <button class="modal-close" onclick="closeUcapanModal()" aria-label="Tutup modal">×</button>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- Form Section -->
                    <div class="ucapan-form-section">
                        <form id="ucapanForm">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" id="nama" name="nama" class="form-control" required
                                    placeholder="Masukkan nama lengkap Anda">
                            </div>

                            <div class="form-group">
                                <label for="ucapan">Ucapan & Doa</label>
                                <textarea id="ucapan" name="ucapan" class="form-control textarea" required
                                    placeholder="Tuliskan ucapan dan doa terbaik Anda..."></textarea>
                            </div>

                            <div class="form-group">
                                <label>Konfirmasi Kehadiran</label>
                                <div class="radio-group">
                                    <div class="radio-item">
                                        <input type="radio" id="hadir" name="kehadiran" value="hadir"
                                            required>
                                        <label for="hadir">Hadir</label>
                                    </div>
                                    <div class="radio-item">
                                        <input type="radio" id="tidak_hadir" name="kehadiran" value="tidak_hadir"
                                            required>
                                        <label for="tidak_hadir">Tidak Hadir</label>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn-submit" id="submitBtn">
                                Kirim Ucapan
                            </button>
                        </form>
                    </div>

                    <!-- List Section -->
                    <div class="ucapan-list-section">
                        <div class="ucapan-list-header">
                            <h4>Ucapan dari Tamu</h4>
                        </div>
                        <div id="ucapanList" class="ucapan-list">
                            <div class="loading-spinner">
                                <div class="spinner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/ana/script.js') }}"></script>

    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Event",
        "name": "Upacara Metatah Ana & Dita & Radea",
        "description": "Undangan Upacara Metatah untuk Ana Febriana, Ni Putu Pradnyaditha, dan I Made Radeadhitya",
        "startDate": "2025-08-27T09:00:00+08:00",
        "endDate": "2025-08-27T17:00:00+08:00",
        "location": {
            "@type": "Place",
            "name": "Banjar Banyubiru",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Jembrana",
                "addressRegion": "Bali",
                "addressCountry": "ID"
            }
        },
        "organizer": {
            "@type": "Person",
            "name": "Yogi Prayoga"
        },
        "eventStatus": "https://schema.org/EventScheduled",
        "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode"
    }
    </script>
</body>

</html>
