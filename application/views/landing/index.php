<div class="container-fluid" style="background-color:#1e272e; color:#fff; height:250px;">
    <div class="">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-5">
                            <img src="<?= PATHIMG ?>slide_1.svg" class="" style="height: 100%;" alt="">
                        </div>
                        <div class="col-7">
                            <div class="my-auto">
                                <h3>SIMPAN ARSIP</h3>
                                <p>Pemerintah Desa Condongcatur</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-5">
                            <img src="<?= PATHIMG ?>slide_1.svg" class="" style="height: 100%;" alt="">
                        </div>
                        <div class="col-7">
                            <div class="my-auto">
                                <h3>CARI ARSIP</h3>
                                <p>Pemerintah Desa Condongcatur</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-5">
                            <img src="<?= PATHIMG ?>slide_1.svg" class="" style="height: 100%;" alt="">
                        </div>
                        <div class="col-7">
                            <div class="my-auto">
                                <h3>BUAT ARSIP</h3>
                                <p>Pemerintah Desa Condongcatur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
</div>

<nav class="navbar navbar" data-spy="affix" data-offset-top="197" style="height: 150px; background: linear-gradient(to bottom, #1e272e 50%, white 50%);">
    <ul class="nav navbar-nav">
        <li class="active"><a href="#">
                <div class="container">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <a href="<?= base_url('Login') ?>" class="intro-banner-vdo-play-btn pinkBg">
                                    <i class="glyphicon glyphicon-play whiteText" data-toggle="tooltip" data-placement="top" title="Login Ke Akun Anda" aria-hidden="true">
                                        <i class="fas fa-sign-in-alt" style="color: white"></i>
                                    </i>
                                    <span class="ripple pinkBg"></span>
                                    <span class="ripple pinkBg"></span>
                                    <span class="ripple pinkBg"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </a></li>
    </ul>
</nav>

<div class="container-fluid">
    <section>
        <div class="container">
            <!--Main layout-->
            <section class="mt-5 wow fadeIn">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-6 mb-4">
                        <img src="<?= PATHIMG ?>city1.svg" class="img-fluid z-depth-1-half" style="width: 100%;" alt="">
                    </div>
                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <!-- Main heading -->
                        <h3 class="h3 mb-3">SEJARAH SINGKAT DAN PERJALANAN DESA CONDONGCATUR</h3>
                        <p>Pemerintah Desa Condongcatur berdiri pada tanggal 26 Desember 1946 berdasarkan Maklumat Pemerintah Daerah Istimewa Yogyakarta Nomor 5 Tahun 1948.</p>
                        <p>Sebelum tahun 1946 Wilayah Desa Condongcatur terbagi menjadi 4 (empat) Kalurahan, yang terdiri dari :</p>

                        <hr>

                        <p>1. Kalurahan Manukan
                            Lurah Desanya di Jabat oleh : Jayeng Sumanto
                            Beliau wafat dan di makamkan di Pemakaman Umum Padukuhan Manukan.</p>
                        <p>2. Kalurahan Gorongan
                            Lurah Desanya dijabat oleh : R.Ng.(Raden Ngabehi) Hadi Prasodjo
                            Beliau wafat dan dimakamkan di Pemakaman Umum Padukuhan Ngropoh.</p>
                        <p>3. Kalurahan Gejayan
                            Lurah Desanya dijabat oleh: Sastro Diharjo
                            Beliau wafat dan dimakamkan di Pemakaman Umum Padukuhan Gejayan.</p>
                        <p>4. Kalurahan Kentungan
                            Lurah Desanya dijabat oleh : Kromoredjo
                            Beliau wafat dan dimakamkan di Pemakaman Umum Komplek Kolombo Padukuhan Joho.</p>

                    </div>
                </div>
            </section>

            <hr class="my-5">
            <section>
                <h3 class="h3 text-center mb-5">TENTANG WEBSITE PENYIMPANAN ARSIP</h3>
                <div class="row wow fadeIn">
                    <div class="col-lg-6 col-md-12 px-4">
                        <div class="row">
                            <div class="col-1 mr-3">
                                <i class="fas fa-file fa-2x indigo-text"></i>
                            </div>
                            <div class="col-10">
                                <h5 class="feature-title">Simpan Arsip</h5>
                                <p class="grey-text">Sinpan Arsip softcopy di website ini.</p>
                            </div>
                        </div>
                        <!--/First row-->

                        <div style="height:30px"></div>

                        <!--Second row-->
                        <div class="row">
                            <div class="col-1 mr-3">
                                <i class="fas fa-folder-open fa-2x blue-text"></i>
                            </div>
                            <div class="col-10">
                                <h5 class="feature-title">Telururi Arsip</h5>
                                <p class="grey-text">Cari arsip yang telah di simpan di website ini.</p>
                            </div>
                        </div>
                        <!--/Second row-->

                        <div style="height:30px"></div>

                        <!--Third row-->
                        <div class="row">
                            <div class="col-1 mr-3">
                                <i class="fas fa-plus-square fa-2x cyan-text"></i>
                            </div>
                            <div class="col-10">
                                <h5 class="feature-title">Buat Surat</h5>
                                <p class="grey-text">Buat surat dengan template yang telah di sediakan.</p>
                            </div>
                        </div>
                        <!--/Third row-->

                    </div>
                    <div class="col-lg-6 col-md-12">
                        <img src="<?= PATHIMG ?>files1.svg" class="img-fluid z-depth-1-half" style="width: 100%;" alt="">
                    </div>
                </div>
            </section>

            <hr class="my-5">

            <section>
                <div class="jumbotron jumbotron-fluid bg-dark">

                    <div class="container text-white">

                        <h3 class="display-5">GAMBARAN UMUM PEMERINTAH DESA CONDONGCATUR</h3>
                        <p class="lead">Secara Geografis, letak Pemerintah Desa Condongcatur sangat STRATEGIS dilalui Jalan Arteri (Ring Road Utara) yang sekaligus merupakan prasarana transportasi dan perhubungan untuk mendukung peningkatan perekonomian di Desa Condongcatur pada khususnya dan Kabupaten Sleman pada Umumnya.</p>
                        <hr class="my-4">
                        <p><strong>1. Luas Wilayah</strong><br>
                            &ensp;Luas wilayah Desa Condongcatur adalah 950.000 Ha</p>
                        <p><strong>2. Batas Wilayah</strong>
                            <br>&ensp; ▪Sebelah Utara : Desa Minomartani Kec. Ngaglik
                            <br>&ensp; ▪Sebelah Timur : Desa Maguwoharho Kec. Depok
                            <br>&ensp; ▪Sebelah Selatan : Desa Catur Tunggal Kec. Depok
                            <br>&ensp; ▪Sebelah Barat : Desa Sinduadi Kec. Mlati</p>
                        <p><strong>3. Keadaan Wilayah</strong><br>
                            &ensp;Desa Condongcatur merupakan salah satu dari 3 (tiga) Desa yang ada di Kecamatan Depok terdiri dari 18 Padukuhan (64 RW dan 211 RT)</p>
                        <p><strong>4. Keadaan Geografis</strong><br>
                            &ensp;a. Keadaan Alam <br>

                            &ensp;Ketinggian dari permukaan laut : kurang lebih 250 m
                            <br>&ensp;Curah Hujan rata-rata tiap tahun : 2.500 – 3.000 mm
                            <br>&ensp;Topografi : Dataran Rendah
                            <br>&ensp;Suhu udara rata-rata : 26 – 32 derajat celsius</p>

                        <p>&ensp;b. Orbitase (jarak dari Pusat Pemerintahan Desa)

                            <br>&ensp; ▪Jarak dari Pemerintahan Kecamatan : 0,5 KM
                            <br>&ensp; ▪Jarak dari Ibu Kota Kabupaten : 8 KM
                            <br>&ensp; ▪Jarak dari Pemerintahan Daerah DIY : 6 KM
                            <br>&ensp; ▪Jarak dari Ibu Kota Negara : 602 KM</p>
                    </div>
                </div>
            </section>
        </div>
</div>