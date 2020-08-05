 <section class="page-section" id="services">
     <div class="">

         <!-- jumbotron -->
         <div class="jumbotron jumbotron-fluid bg-dark">
         <?=!empty($_SESSION['message']) ? $_SESSION['message'] : ""?>
             <div class="jumbotron-background">
                 <img src=<?= base_url(PATHIMG . 'bg1.svg') ?> class="blur" style="width: 100%; height: 100%;" alt="Sleman">
             </div>

             <div class="container text-white">

                 <div class="row">
                     <div class="col-lg-12 text-center">
                         <h2 class="section-heading text-uppercase mt-2 mb-4">Website Arsip Pemerintah Desa Condongcatur</h2>
                     </div>
                 </div>

                 <div class="row text-center">
                     <div class="col-md-6">
                         <a href="<?= base_url('registrasi-surat') ?>" style="text-decoration: none; color: white;">
                             <div class="d-none d-lg-block">
                                 <div class="button">
                                     <div class="icons">
                                         <i class="fas fa-save icon-default"></i>
                                         <i class="fa fa-arrow-circle-down icon-hover"></i>
                                     </div>
                                 </div>
                             </div>
                             <h4 class="service-heading">Simpan Arsip</h4>
                             <p class="">Simpan arsip anda berdasarkan kode surat.</p>
                         </a>
                     </div>
                     <div class="col-md-6">
                         <a href="<?= base_url('Arsip') ?>" style="text-decoration: none; color: white;">
                             <div class="d-none d-lg-block">
                                 <div class="button">
                                     <div class="icons">
                                         <i class="fas fa-search icon-default"></i>
                                         <i class="fa fa-arrow-circle-down icon-hover"></i>
                                     </div>
                                 </div>
                             </div>
                             <h4 class="service-heading">Telusuri Arsip</h4>
                             <p class="">Telusuri arsip anda yang tersimpan di website ini.</p>
                         </a>
                     </div>
                 </div>
             </div>
             <!-- /.container -->
         </div>
         <!-- /.jumbotron -->
         <!-- counter -->
         <div class="container">
             <div class="row">
                 <br />
                 <div class="col text-center mb-3">
                     <h2>Jumlah Data Tersimpan</h2>
                 </div>
             </div>
             <div class="row text-center">
                 <div class="col">
                     <div class="counter">
                         <i class="fa fa-arrow-circle-down fa-2x"></i>
                         <h2 class="timer count-title count-number" data-to=<?=$count_sm?> data-speed="1500"></h2>
                         <p class="count-text ">Surat Masuk</p>
                     </div>
                 </div>
                 <div class="col">
                     <div class="counter">
                         <i class="fa fa-arrow-circle-up fa-2x"></i>
                         <h2 class="timer count-title count-number" data-to=<?=$count_sk?> data-speed="1500"></h2>
                         <p class="count-text ">Surat Keluar</p>
                     </div>
                 </div>
                 <div class="col">
                     <div class="counter">
                         <i class="fa fa-inbox fa-2x"></i>
                         <h2 class="timer count-title count-number" data-to=<?=$count_dp?> data-speed="1500"></h2>
                         <p class="count-text ">Disposisi</p>
                     </div>
                 </div>
                 <div class="col">
                     <div class="counter">
                         <i class="fa fa-file fa-2x"></i>
                         <h2 class="timer count-title count-number" data-to=<?=$count_all?> data-speed="1500"></h2>
                         <p class="count-text ">Arsip Saya</p>
                     </div>
                 </div>
             </div>
         </div>
         <!-- end of counter -->
         <div class="container">
             <div class="mt-3">
                 <div class="row">
                     <div class="col-xs-12 col-sm-12">
                         <nav>
                             <div class="nav nav-tabs nav-fill border border-hintofelusive bg-blackpearl rounded" id="nav-tab" role="tablist">
                                 <p class="nav-item nav-link text-white active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                     <span class="fa-stack fa-2x">
                                         <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                         <i class="fas fa-save fa-stack-1x fa-inverse"></i>
                                     </span>
                                 </p>
                                 <p class="nav-item nav-link text-white" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                                     <span class="fa-stack fa-2x">
                                         <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                         <i class="fas fa-search fa-stack-1x fa-inverse"></i>
                                     </span>
                                 </p>
                             </div>
                         </nav>
                         <div class="tab-content py-3 px-3 px-sm-1" id="nav-tabContent">
                             <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                 <!-- template tutorial -->
                                 <div class="how-section1 text-black">
                                     <div class="row">
                                         <div class="col-md-6 how-img">
                                             <img src=<?= base_url(PATHIMG . 'Menu_Surat.svg') ?> style="width: 100%;" class="img-fluid" alt="" />
                                         </div>
                                         <div class="col-md-6">
                                             <h4 class="subheading">Langkah #1</h4>
                                             <p class="text-muted">Buka menu sebelah kiri, lalu pilih fitur Registrasi Surat.</p>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6">
                                             <h4 class="subheading">Langkah #2</h4>
                                             <p class="text-muted">Pilih tipe surat yang akan di simpan, diantaranya adalah : <br>
                                                 1. Surat Masuk, merupakan surat yang masuk ke kantor. <br>
                                                 2. Surat Keluar, merupakan surat dari kantor yang di kirim keluar. <br>
                                                 3. Surat Disposisi, merupakan surat balasan / respon dari surat yang masuk.</p>
                                         </div>
                                         <div class="col-md-6 how-img">
                                             <img src=<?= base_url(PATHIMG . 'Jenis_Surat.svg') ?> style="width: 100%;" class="img-fluid" alt="" />
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6 how-img">
                                             <img src=<?= base_url(PATHIMG . 'Kode_Surat.svg') ?> style="width: 100%;" class="img-fluid" alt="" />
                                         </div>
                                         <div class="col-md-6">
                                             <h4 class="subheading">Langkah #3</h4>
                                             <p class="text-muted">Pada form kategori ketikan kode surat atau nama surat yang akan di simpan,
                                                 maka secara otomastis akan menampilkan list pilihan kode dan nama surat yang tersedia. Jika sudah
                                                 mendapatkan kode atau nama surat yang di inginkan maka klik tombol berwarna hijau (pilih) atau jika
                                                 akan mengganti kode atau nama surat klik tombol merah (ulang).</p>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6">
                                             <h4 class="subheading">Langkah #4</h4>
                                             <p class="text-muted">Masukan Nomor surat. Nomor surat adalah urutan nomor surat yang telah dikeluarkan oleh instansi atau organisasi.
                                                 Fungsi nomor dan kode surat adalah sebagai berikut : <br>
                                                 1) mengetahui banyaknya surat yang keluar. <br>
                                                 2) memudahkan pengarsipan surat. <br>
                                                 3) memudahkan mencari surat itu kembali jika dibutuhkan. <br>
                                                 4) memudahkan petugas pengarsipan.
                                             </p>
                                         </div>
                                         <div class="col-md-6 how-img">
                                             <img src=<?= base_url(PATHIMG . 'Nomor_Surat.svg') ?> style="width: 100%;" class="img-fluid" alt="" />
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6 how-img">
                                             <img src=<?= base_url(PATHIMG . 'Tanggal_Surat.svg') ?> style="width: 100%;" class="img-fluid" alt="" />
                                         </div>
                                         <div class="col-md-6">
                                             <h4 class="subheading">Langkah #5</h4>
                                             <p class="text-muted">Masukan Tanggal, Terdapat dua form yaitu tanggal penerimaan surat dan tanggal pembuatan surat.</p>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6">
                                             <h4 class="subheading">Langkah #6</h4>
                                             <p class="text-muted">Masukan asal surat tersebut. Asal surat merupakan dari mana pengirim surat itu berasal.</p>
                                         </div>
                                         <div class="col-md-6 how-img">
                                             <img src=<?= base_url(PATHIMG . 'Asal_Surat.svg') ?> style="width: 100%;" class="img-fluid" alt="" />
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6 how-img">
                                             <img src=<?= base_url(PATHIMG . 'Lokasi_Surat.svg') ?> style="width: 100%;" class="img-fluid" alt="" />
                                         </div>
                                         <div class="col-md-6">
                                             <h4 class="subheading">Langkah #7</h4>
                                             <p class="text-muted">Masukan lokasi arsip. Lokasi Arsip yang di maksud adalah lokasi penyimpanan hard copy dari surat yang akan di simpan.</p>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6">
                                             <h4 class="subheading">Langkah #8</h4>
                                             <p class="text-muted">Masukan Isi ringkas dari surat yang akan di simpan. Pilihan ini opsional boleh diisi boleh tidak.</p>
                                         </div>
                                         <div class="col-md-6 how-img">
                                             <img src=<?= base_url(PATHIMG . 'Isi_Surat.svg') ?> style="width: 100%;" class="img-fluid" alt="" />
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6 how-img">
                                             <img src=<?= base_url(PATHIMG . 'Keterangan_Surat.svg') ?> style="width: 100%;" class="img-fluid" alt="" />
                                         </div>
                                         <div class="col-md-6">
                                             <h4 class="subheading">Langkah #9</h4>
                                             <p class="text-muted">Masukan Keterangan dari surat yang akan di simpan. Pilihan ini opsional boleh diisi boleh tidak.</p>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6">
                                             <h4 class="subheading">Langkah #10</h4>
                                             <p class="text-muted">Upload file surat yang akan di simpan dengan menelusuri dari .</p>
                                         </div>
                                         <div class="col-md-6 how-img">
                                             <img src=<?= base_url(PATHIMG . 'Upload_Surat.svg') ?> style="width: 100%;" class="img-fluid" alt="" />
                                         </div>
                                     </div>
                                 </div>
                                 <!-- end of template tutorial -->
                             </div>
                             <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                 <!-- template tutorial -->
                                 <div class="how-section1 text-black">
                                     <div class="row">
                                         <div class="col-md-6 how-img">
                                             <img src=<?= base_url(PATHIMG . '1.svg') ?> style="width: 100%;" class="img-fluid" alt="" />
                                         </div>
                                         <div class="col-md-6">
                                             <h4 class="subheading">Langkah #1</h4>
                                             <p class="text-muted">Buka menu sebelah kiri, lalu pilih fitur Cari Arsip.</p>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6">
                                             <h4 class="subheading">Langkah #2</h4>
                                             <p class="text-muted">Masukan Kode Surat yang dicari lalu klik tombol cari.</p>
                                         </div>
                                         <div class="col-md-6 how-img">
                                             <img src=<?= base_url(PATHIMG . '2.svg') ?> style="width: 100%;" class="img-fluid" alt="" />
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6 how-img">
                                             <img src=<?= base_url(PATHIMG . '3.svg') ?> style="width: 100%;" class="img-fluid" alt="" />
                                         </div>
                                         <div class="col-md-6">
                                             <h4 class="subheading">Langkah #3</h4>
                                             <p class="text-muted">Anda bisa melihat file Arsip yang tersimpan di website ini dan dapat memilih jenis Surat apa yang ingin di lihat.</p>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- end of template tutorial -->
                             </div>
                         </div>

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>