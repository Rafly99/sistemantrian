<div class="content-header">

    <div class="col-sm">
        <h1 class="m-0">Data Karyawan</h1>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
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
                            <table class="table m-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Nama</th>
                                        <th>Kontak</th>
                                        <th>Password</th>
                                        <th>Avatar</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($karyawan as $karyawan) { ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $karyawan->username; ?></td>
                                            <td><?php echo $karyawan->name; ?></td>
                                            <td><?php echo $karyawan->email; ?></td>
                                            <td hidden><?php echo $karyawan->password ?></td>
                                            <td><?php echo $karyawan->avatar; ?></td>
                                            
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer clearfix">
                        <a href="" class="btn btn-sm btn-info float-left">Tambah Karyawan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>