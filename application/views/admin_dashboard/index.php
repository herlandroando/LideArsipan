<?php
defined('BASEPATH') or exit('No direct script access allowed');
$shadowdefault = '0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)';
?>
<div class='platform-warning d-lg-none my-5'>
    <div class="container bg-danger text-center py-5 text-white">
        <i class="fas fa-exclamation-triangle fa-6x mb-3 "></i>
        <h4>Platform yang anda gunakan bukan platform PC</h4>
    </div>
</div>
<div class='content-wrapper d-none d-lg-block'>
    <?=!empty($_SESSION['message']) ? $_SESSION['message'] : ""?>
    <!--START Data Dashboard-->
    <div class="container rounded mt-5">
        <div class="row bg-light rounded p-3">
            <div class="col-4">
                <div class="row m-1 bg-freshturquoise rounded" style='box-shadow:<?= $shadowdefault ?>;'>
                    <div class="col-8 my-3">
                        <h6 class='text-white text-center'> Total arsip yang disimpan </h6>
                        <h3 class='text-white text-center'> <?= $this->security->xss_clean($countsurat) ?> </h3>
                        <div class="text-white text-center"><a href="<?= base_url('arsip') ?>" class="text-white"><i class="fas fa-chevron-circle-right fa-sm"></i> Data Arsip</a></div>
                    </div>
                    <div class="col-4 d-flex justify-content-center ">
                        <i class="fas fa-mail-bulk fa-4x text-white align-self-center"></i>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row m-1 bg-londonsquare rounded" style='box-shadow:<?= $shadowdefault ?>;'>
                    <div class="col-8 my-3">
                        <h6 class='text-white text-center'> User Yang Terdaftar </h6>
                        <h3 class='text-white text-center'> <?= $this->security->xss_clean($countlogin) ?> </h3>
                        <div class="text-white text-center"><a href="<?= base_url('admin/admdatauser') ?>" class="text-white"><i class="fas fa-chevron-circle-right fa-sm"></i> Data User</a></div>
                    </div>
                    <div class="col-4 d-flex justify-content-center">
                        <i class="fas fa-user fa-4x text-white align-self-center "></i>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row m-1 bg-narenjiorange rounded" style='box-shadow:<?= $shadowdefault ?>;'>
                    <div class="col-8 my-3">
                        <h6 class='text-white text-center'> Total File Arsip </h6>
                        <h3 class='text-white text-center'> <?= $this->security->xss_clean($countfile) ?> </h3>
                        <div class="text-white text-center"><a href="<?= base_url('admin/filemanager') ?>" class="text-white"><i class="fas fa-chevron-circle-right fa-sm"></i> Data Penyimpanan</a></div>
                    </div>
                    <div class="col-4 d-flex justify-content-center ">
                        <i class="fas fa-database fa-4x text-white align-self-center"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END Data Dashboard-->

    <div class="container my-5 p-3 bg-light rounded">
        <div>
            <div class="row">
                <?php if (!empty($countsurat)) { ?>
                    <div id="chart1" class='col-6' style="height:50vh;"></div>
                    <div id="chart2" class='col-6' style="height:50vh;"></div>
                <?php } else { ?>
                    <h4 class="text-center">Chart tidak muncul. Data arsip belum di isi. </h4>
                <?php } ?>
            </div>
        </div>
    </div>
</div>