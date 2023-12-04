<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Costumer</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        * {
            font-family: 'poppins', sans-serif;
            margin: 0px;
            padding: 0px;
        }

        .container {
            width: 500px;
            height: 350px;
            display: flex;
            flex-direction: column;
            margin-top: 250px;

        }

        #bg {
            width: 100%;
            height: 100vh;
            position: absolute;
            object-fit: cover;
        }

        .box {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
        }

        p {
            font-size: 15px;
            font-style: italic;
            text-align: center;
        }

        .input {
            height: 45px;
            width: 100%;
            border-radius: 30px;
            box-shadow: none;
            border: 1px solid#2b3990;
            font-size: 15px;
            padding: 0 0 0 15px;
            outline: #2b3990;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .btn {
            width: 50%;
            height: 45px;
            border-radius: 30px;
            border: 1px;
            background-color: #2b3990;
            color: white;
            font-size: 15px;
            cursor: pointer;
            transition: .3s;
        }

        .btn:hover {
            border: 1px solid#2b3990;
            color: white;
            background-color: darkblue;
        }
    </style>

<body>
    <div class="box">
        <img src="<?= base_url() ?>assets/image/background.svg" alt="" id="bg">

        <div class="container">
            <form class="form" action=" <?php echo base_url('admin/print'); ?>" enctype="multipart/form-data" method="post">
                <p class="col">Silahkan Masukan Data, untuk mengambil nomor antrian</p>
                <div class="form-group">
                    <div class="col input-field">
                        <input type="text" class="input " placeholder="Masukan Nama anda" name="nama" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col input-field">
                        <input type="number" class="input" placeholder="Masukan No Telp" name="telp" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col input-field">
                        <input type="text" class="input " placeholder="Masukan Domisili" name="alamat" required>
                    </div>
                </div>
                <div class="form-group row text-center">
                    <div class="col input-field">
                        <button type="submit" class="btn">Ambil Nomor</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
    <script src="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script>
        <?php
        if ($this->session->flashdata('input') == "sukses") {
            echo 'Swal.fire("Alhamdulillah","Silahkan Ambil Nomor Antrian anda","success")';
        } elseif ($this->session->flashdata('input') == "gagal") {
            echo 'Swal.fire("No","Data Belum ada","error")';
        }
        ?>
    </script>
</body>

</html>