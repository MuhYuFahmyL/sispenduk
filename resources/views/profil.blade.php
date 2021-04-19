@extends('layout.landing')


@section('nav')

    <li class="nav-item">
        <a class="nav-link" href="{{ route('landing') }}">Beranda</a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('profil') }}">Profil</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('informasi') }}">Informasi</a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn btn-core" href="{{ route('login') }}">masuk</a>
    </li>

@endsection
@section('content')
    <!-- Header -->
    <section class="header">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-12 text-center">
                    <h1><span>PROFIL</span></h1>
                    <p>Temukan informasi mengenai Profil Tanjung Baru.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Header -->

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow-sm">
                        <div class="card-body">

                            <!-- <img src="../assets/img/daerah.png" alt="" class="img-fluid mb-4" width="100%"> -->

                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button"
                                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Profil Instansi
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <strong>Nama Instansi:</strong> <br> Kantor Kelurahan Tanjung Baru <br><br>
                                            <strong>Alamat:</strong> <br> Dusun 3, Jl. Bakaran Batu No.1, Tj. Baru, Tj.
                                            Morawa, Kabupaten Deli Serdang, Sumatera Utara 20551
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                Visi & Misi
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <strong>VISI:</strong> <br> Tanjung Baru Yang Maju dan Sejahtera Dengan
                                            Masyarakatnya yang Religius dan Rukun dalam Kebhinekaan <br><br>
                                            <strong>MISI:</strong> <br>
                                            <ul>
                                                <li>
                                                    Meningkatkan sumber daya manusia yang berkualitas
                                                    dan berdaya saing yang mampu memanfaatkan ilmu
                                                    pengetahuan dan teknologi.
                                                </li>
                                                <li>
                                                    Meningkatkan Kesejahteraan dan Kemandirian dalam
                                                    memantapkan struktur ekonomi yang kokoh
                                                    berlandaskan keunggulan kompetitif.
                                                </li>
                                                <li>
                                                    Meningkatkan sarana dan prasarana sebagai pendukung
                                                    pertumbuhan ekonomi yang berorientasi kepada
                                                    kebijakan tata ruang serta berwawasan lingkungan.
                                                </li>
                                                <li>
                                                    Meningkatkan tatanan kehidupan masyarakat yang
                                                    religius, berbudaya dan berakhlakul karimah,
                                                    berlandaskan keimanan kepada Tuhan Yang Maha Esa 32
                                                    serta dapat memelihara kerukunan, ketenteraman dan
                                                    ketertiban.
                                                </li>
                                                <li>
                                                    Meningkatkan profesionalisme aparatur pemerintah
                                                    untuk mewujudkan tata pemerintahan yang baik dan
                                                    bersih (good & clean governance) berwibawa dan
                                                    bertanggung jawab.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                Struktur Organisasi
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <strong>1) Lurah</strong> <br> Lurah memiliki tugas membantu camat dalam:<br>
                                            <ul>
                                                <li>
                                                    Melaksanakan kegiatan Pemerintahan Kelurahan
                                                </li>
                                                <li>
                                                    Melakukan Pemberdayaan Masyarakat
                                                </li>
                                                <li>
                                                    Melaksanakan Pelayanan Masyarakat
                                                </li>
                                                <li>
                                                    Memelihara Ketentraman dan Ketertiban Umum
                                                </li>
                                                <li>
                                                    Memelihara sarana dan prasarana serta fasilitas Pelayanan Umum
                                                </li>
                                                <li>
                                                    Melaksanakan tugas lain yang diberikan oleh Camat
                                                </li>
                                                <li>
                                                    Melaksanakan tugas lain sesuai dengan Peraturan Perundang-undangan
                                                </li>
                                            </ul>
                                            Untuk melaksanakan tugasnya, kelurahan memiliki fungsi:
                                            <ul>
                                                <li>
                                                    Pelaksanaan kegiatan Pemerintahan Kelurahan
                                                </li>
                                                <li>
                                                    Pelaksanaan Pemberdayaan Masyarakat
                                                </li>
                                                <li>
                                                    Pelaksanaan Pelayanan Masyarakat
                                                </li>
                                                <li>
                                                    Pemeliharaan Ketentraman dan Ketertiban Umum
                                                </li>
                                                <li>
                                                    Pemeliharaan sarana dan prasarana serta fasilitas Pelayanan Umum
                                                </li>
                                                <li>
                                                    Pelaksanaan tugas lain yang diberikan oleh Camat
                                                </li>
                                                <li>
                                                    Pelaksanaan tugas lain sesuai dengan Peraturan Perundang-undangan
                                                </li>
                                            </ul>

                                            <strong>2) Sekretariat</strong> <br> Melaksanakan tugas dalam kesekretariatan
                                            meliputi:<br>
                                            <ul>
                                                <li>
                                                    Penyusunan rencana dan program kelurahan
                                                </li>
                                                <li>
                                                    Pelaksanaan urusan umum (rumah tangga,perlengkapan, kearsipan, tata
                                                    persuratan, humas dan protokol, administrasi perjalanan dinas)
                                                </li>
                                                <li>
                                                    Penyusunanlaporan kinerja tahunan (LKT)
                                                </li>
                                                <li>
                                                    Menyiapkan laporanpenyelenggaraan pemerintahan daerah (LPPD) dan laporan
                                                    keterangan pertanggungjawaban (LKPJ)
                                                </li>
                                                <li>
                                                    Tindaklanjut hasil pemeriksaan
                                                </li>
                                                <li>
                                                    Pengelolaan administrasi kepegawaian
                                                </li>
                                                <li>
                                                    Membantu pengelolaan administrasikeuangan dan barang milik daerah
                                                </li>
                                                <li>
                                                    Fasilitasi urusan hukum, organisasi dan ketatalaksanaan
                                                </li>
                                                <li>
                                                    pelayanan administrasi lainnya kepada seluruh perangkat/aparatur
                                                    Kelurahan
                                                </li>
                                                <li>
                                                    pelaksanaan tugas lain yangdiberikan oleh Lurah sesuai tugas dan
                                                    fungsinya
                                                </li>
                                            </ul>

                                            <strong>3) Seksi Pemerintahan, Ketentraman, Ketertiban</strong> <br>Memiliki
                                            tugas di bidang pemerintahan, ketentraman dan ketertiban meliputi:
                                            <br>
                                            <ul>
                                                <li>
                                                    Penyelenggaraan administrasi pemerintahan
                                                </li>
                                                <li>
                                                    Pelayanan data kependudukan
                                                </li>
                                                <li>
                                                    Registrasi pertanahan
                                                </li>
                                                <li>
                                                    pelayanan Kartu Keluarga, Kartu Tanda Penduduk dan Nomor Induk
                                                    Kependudukan
                                                </li>
                                                <li>
                                                    koordinasi Bidang Kesatuan Bangsa dan Politik, pembinaan
                                                </li>
                                                <li>
                                                    pengawasan RukunTetangga (RT) dan Rukun Warga (RW)
                                                </li>
                                                <li>
                                                    Evaluasi penyelenggaraan pemerintahan Kelurahan
                                                </li>
                                                <li>
                                                    Koordinasi denganaparat penegak hukum, Satuan Polisi PamongPraja, Satuan
                                                    LINMAS dan unit kerja terkait, serta pemuka agama dalam bidang
                                                    ketenteraman dan ketertiban umum masyarakat
                                                </li>
                                                <li>
                                                    koordinasi penerapandan penegakan peraturan perundang-undangan bersama
                                                    instansi/institusi terkait di Kelurahan
                                                </li>
                                            </ul>

                                            <strong>4) Seksi Ekonomi dan Pembangunan</strong> <br>Mempunyai tugas di bidang
                                            Ekonomi dan Pembangunan, meliputi:
                                            <br>
                                            <ul>
                                                <li>
                                                    Mempunyai tugas di bidang Ekonomi dan Pembangunan, meliputi
                                                </li>
                                                <li>
                                                    Pemberian surat pengantar/keterangan terhadap Usaha
                                                    Menengah Kecil dan Mikro (UMKM) meliputi bidang 35
                                                    jasa, industri, koperasi, pertanian, pariwisata dan
                                                    kebudayaan
                                                </li>
                                                <li>
                                                    Pemberian surat pengantar/keterangan terhadap pendirian
                                                    bangunan untuk diteruskan kepadainstansi teknis
                                                </li>
                                                <li>
                                                    Koordinasi dan fasilitasi terhadap pelayanan pendataan pajak/retribusi
                                                    daerah tertentu di wilayah Kelurahan
                                                </li>
                                                <li>
                                                    Fasilitasi pendataan Pajak Bumi danBangunan di Kelurahan
                                                </li>
                                                <li>
                                                    Melakukan koordinasi dengan Satuan Unit Kerja dan/atau
                                                    instansi vertikal
                                                </li>
                                                <li>
                                                    mendorong partisipasi masyarakat untuk ikut serta dalam
                                                    perencanaan pembangunan tingkat RT/RW maupun
                                                    Kelurahan
                                                </li>
                                                <li>
                                                    koordinasi dan fasilitasi pengawasan terhadap penertiban
                                                    jenis usaha dan pendirian bangunan diKelurahan
                                                </li>
                                            </ul>

                                            <strong>5) Seksi Pemberdayaa Masyarakat dan Kesejahteraan Sosial</strong>
                                            <br>Memiliki tugas di bidang pemberdayaan masyarakat dan
                                            kesejahteraan social meliputi:
                                            <br>
                                            <ul>
                                                <li>
                                                    pembinaan, pengawasan dan evaluasi terhadap Satuan Unit
                                                    Kerja maupun swasta dalam kegiatan pemberdayaan
                                                    masyarakat meliputi fasilitasi penyelenggaraan pendidikan
                                                    dasar, pendidikan formal dan informal, porseni,
                                                    kepramukaan, UKS, program wajib belajar, koordinasi dan
                                                    fasilitasi terhadap pengembangan generasi muda, olahraga
                                                    prestasi dan tradisional, kebudayaan, peranan wanita dan
                                                    pengarusutamaan gender (PUG), kesehatan, keluarga
                                                    berencana, pembinaan kerukunan antar umat beragama dan
                                                    lembaga adat
                                                </li>
                                                <li>
                                                    fasilitasi dan pemberian keterangan terhadap organisasi
                                                    kemasyarakatan dan organisasi kepemudaan, pelayanan 36
                                                    dan pembinaan,kepada masyarakat meliputi pendataan
                                                    penduduk miskin, bantuan masyarakat, penanggulangan
                                                    penyalahgunaan obat terlarang narkotika, psikotropika, zat
                                                    adiktif (NAFZA) dan bahan berbahaya lainnya
                                                </li>
                                                <li>
                                                    pencegahan dan penanggulangan bencana alam dan
                                                    pengungsi serta penanggulangan masalah sosial
                                                    diKelurahan
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
