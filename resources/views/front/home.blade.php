@extends('front.default')
@section('title', __( 'Home' ))
@section('content')

<section class="section section-l bg-white section-advice pb-0 ov-h" id="prevention">
    <div class="container">
        <div class="section-head text-center wide-lg">
            <h5 class="subtitle">Bagaimana Melindungi diri sendiri?</h5>
            <h2 class="title">Pencegahan <br class="d-sm-none"> &amp; Saran</h2>
            <p>Saat ini tidak ada vaksin untuk mencegah penyakit coronavirus 2019 (COVID-19). <strong>Cara terbaik untuk mencegah penyakit adalah dengan menghindari terkena virus ini.</strong> Tetap mengetahui informasi terbaru tentang wabah COVID-19, tersedia di situs web WHO dan melalui otoritas kesehatan masyarakat nasional dan lokal Anda.</p>
        </div>
        <div class="section-content">
            <div class="row g-gs gy-sm-m">
                <div class="col-lg-3 col-sm-6">
                    <div class="box3">
                        <div class="box3-gfx">
                            <img src="{{ asset('covid') }}/images/gfx/advice-a.png" alt="">
                        </div>
                        <div class="box3-content">
                            <h5 class="title">Sering cuci tangan</h5>
                            <p>Bersihkan tangan Anda secara teratur dan menyeluruh dengan pembersih tangan berbasis alkohol atau cuci dengan sabun dan air setidaknya selama 20 detik.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box3">
                        <div class="box3-gfx">
                            <img src="{{ asset('covid') }}/images/gfx/advice-b.png" alt="">
                        </div>
                        <div class="box3-content">
                            <h5 class="title">Jaga jarak sosial</h5>
                            <p>Pertahankan jarak setidaknya 1 meter (3 kaki) antara Anda & siapa pun yang batuk atau bersin. Jika Anda terlalu dekat, mendapatkan kesempatan untuk terinfeksi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box3">
                        <div class="box3-gfx">
                            <img src="{{ asset('covid') }}/images/gfx/advice-c.png" alt="">
                        </div>
                        <div class="box3-content">
                            <h5 class="title">Hindari menyentuh wajah</h5>
                            <p>Tangan menyentuh banyak permukaan dan dapat membawa virus. Jadi, tangan bisa menularkan virus ke mata, hidung, atau mulut Anda dan bisa membuat Anda sakit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box3">
                        <div class="box3-gfx">
                            <img src="{{ asset('covid') }}/images/gfx/advice-d.png" alt="">
                        </div>
                        <div class="box3-content">
                            <h5 class="title">Latih kebersihan pernapasan</h5>
                            <p>Pertahankan kebersihan pernapasan yang baik seperti menutup mulut & hidung dengan siku tertekuk atau tisu saat batuk atau bersin.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-l bg-white section-handwash" id="handwash">
    <div class="container mt-n4">
        <div class="section-subhead text-center">
            <h4 class="title">Ikuti langkah-langkah <br class="d-sm-none"> untuk mencuci tangan</h4> 
        </div>
        <div class="section-content">
            <div class="row g-gs justify-content-center">
                <div class="col-6 col-mb-5 col-sm-4 col-lg-2">
                    <div class="box4">
                        <div class="box4-gfx">
                            <img src="{{ asset('covid') }}/images/gfx/hand-a.png" alt="">
                        </div>
                        <div class="box4-content">
                            <h6 class="title">Sabun ditangan</h6>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-mb-5 col-sm-4 col-lg-2">
                    <div class="box4">
                        <div class="box4-gfx">
                            <img src="{{ asset('covid') }}/images/gfx/hand-b.png" alt="">
                        </div>
                        <div class="box4-content">
                            <h6 class="title">Antara talapak tangan</h6>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-mb-5 col-sm-4 col-lg-2">
                    <div class="box4">
                        <div class="box4-gfx">
                            <img src="{{ asset('covid') }}/images/gfx/hand-c.png" alt="">
                        </div>
                        <div class="box4-content">
                            <h6 class="title">Antara Jari</h6>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-mb-5 col-sm-4 col-lg-2">
                    <div class="box4">
                        <div class="box4-gfx">
                            <img src="{{ asset('covid') }}/images/gfx/hand-d.png" alt="">
                        </div>
                        <div class="box4-content">
                            <h6 class="title">Belakang Telapak Tangan</h6>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-mb-5 col-sm-4 col-lg-2">
                    <div class="box4">
                        <div class="box4-gfx">
                            <img src="{{ asset('covid') }}/images/gfx/hand-e.png" alt="">
                        </div>
                        <div class="box4-content">
                            <h6 class="title">Bersihkan dengan Air</h6>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-mb-5 col-sm-4 col-lg-2">
                    <div class="box4">
                        <div class="box4-gfx">
                            <img src="{{ asset('covid') }}/images/gfx/hand-f.png" alt="">
                        </div>
                        <div class="box4-content">
                            <h6 class="title">Fokus pada Pergelangan Tangan</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-l bg-light section-protect" id="protect">
    <div class="container">
        <div class="section-head text-center wide-lg">
            <h5 class="subtitle">LAKUKAN &amp; JANGAN</h5>
            <h2 class="title">LINDUNGI DIRIMU SENDIRI</h2>
            <p>Hal terbaik yang dapat Anda lakukan sekarang adalah merencanakan bagaimana Anda dapat menyesuaikan rutinitas harian Anda. Lakukan beberapa langkah untuk melindungi diri Anda seperti Sering-seringlah membersihkan tangan, Hindari kontak dekat, Hindari kontak dekat, Tutupi batuk dan bersin, bersihkan permukaan yang digunakan sehari-hari dll. Cara terbaik untuk mencegah penyakit adalah dengan menghindari terkena virus ini.</p>
        </div>
        <div class="section-content">
            <div class="row g-gs justify-content-center flex-lg-nowrap">
                <div class="col-md-8 col-lg-5 col-xl-6 align-self-end">
                    <div class="protect-block-gfx">
                        <img src="{{ asset('covid') }}/images/gfx/protect.png" alt="">
                    </div>
                </div>
                <div class="col-6 col-mb-5 col-sm-6 col-lg-4 col-xl-3 flex-grow-1 order-lg-first">
                    <div class="protect-item negative">
                        <div class="protect-gfx">
                            <img src="{{ asset('covid') }}/images/gfx/donts-a.png" alt="">
                        </div>
                        <div class="protect-text">
                            <h5 class="title">Hindari Kontak Dekat</h5>
                        </div>
                    </div>
                    <div class="protect-item negative">
                        <div class="protect-gfx">
                            <img src="{{ asset('covid') }}/images/gfx/donts-b.png" alt="">
                        </div>
                        <div class="protect-text">
                            <h5 class="title">Jangan Sentuh Wajah</h5>
                        </div>
                    </div>
                    <div class="protect-item negative">
                        <div class="protect-gfx">
                            <img src="{{ asset('covid') }}/images/gfx/donts-c.png" alt="">
                        </div>
                        <div class="protect-text">
                            <h5 class="title">Menjaga jarak</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-mb-5 col-sm-6 col-lg-4 col-xl-3 flex-grow-1 ">
                    <div class="protect-item positive">
                        <div class="protect-gfx">
                            <img src="{{ asset('covid') }}/images/gfx/dos-a.png" alt="">
                        </div>
                        <div class="protect-text">
                            <h5 class="title">Cuci tangan Anda</h5>
                        </div>
                    </div>
                    <div class="protect-item positive">
                        <div class="protect-gfx">
                            <img src="{{ asset('covid') }}/images/gfx/dos-b.png" alt="">
                        </div>
                        <div class="protect-text">
                            <h5 class="title">Banyak Minum Air</h5>
                        </div>
                    </div>
                    <div class="protect-item positive">
                        <div class="protect-gfx">
                            <img src="{{ asset('covid') }}/images/gfx/dos-c.png" alt="">
                        </div>
                        <div class="protect-text">
                            <h5 class="title">Memakai Masker</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection