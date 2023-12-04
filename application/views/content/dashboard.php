<div class="content-header">
    <div class="col-md-12">
        <div class="card p-0">
            <h5 class="text-center mt-2">Welcome Admin</h5>
        </div>
    </div>
    <div class="col-sm">
        <h1 class="m-0">Panggil</h1>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">    
                <div class="small-box bg-info">
                    <div class="inner py-4">
                        <h3 id="total"><?= $data_hari_ini; ?></h3>
                        <p>Jumlah Antrian</p>
                    </div>
                    <div class="icon">
                        <i class="bi-people"></i>
                    </div>
                    <div class="small-box-footer">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner py-4">
                        <h3 id="nomor-antrian">0</h3>
                        <p>Antrian Sekarang</p>
                    </div>
                    <div class="icon">
                        <i class="bi-person-check"></i>
                    </div>
                    <div class="small-box-footer"></div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner py-4">
                        <h3 id="nomor-setelahnya">0</h3>
                        <p>Antrian Selanjutnya</p>
                    </div>
                    <div class="icon">
                        <i class="bi-person-plus"></i>
                    </div>
                    <div class="small-box-footer"></div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner py-4">
                        <h3 id="sisa-antrian">0</h3>
                        <p>Sisa Antrian</p>
                    </div>
                    <div class="icon">
                        <i class="bi-person"></i>
                    </div>
                    <div class="small-box-footer"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Jumlah Pengunjung</h3>
                        <div class="card-tools">
                            <button class="btn btn-tool" type="button" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-tool" type="button" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table m-0 text-center">
                                <thead>
                                    <tr>
                                        <th>No Antrian</th>
                                        <th>Nama Pengunjung</th>
                                        <th>Kontak</th>
                                        <th>Alamat</th>
                                        <th>Loket</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($filter as $cs) { ?>
                                        <tr>
                                            <td><?php echo $cs->no_antrian; ?></td>
                                            <td><?php echo $cs->nama; ?></td>
                                            <td><?php echo $cs->telp; ?></td>
                                            <td><?php echo $cs->alamat; ?></td>
                                            <td><?php echo $cs->loket_id ?></td>
                                            <td class="px-0">
                                            <a href="#" class="btn btn-info btn-sm rounded-circle mic-button"
                                            data-noantrian="<?= $cs->no_antrian; ?>" data-toggle="tooltip" data-placement="top" 
                                            title="Panggil"><i class="bi-mic-fill"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer clearfix">
                        <a href="<?php echo base_url(); ?>admin/antrian" class="btn btn-sm btn-info float-left">Tambah Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>