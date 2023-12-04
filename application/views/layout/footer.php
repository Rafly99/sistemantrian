<!-- Main content -->
<section class="content">

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 1.0
  </div>
  <strong>Welcome to Neo Printing Digital</strong>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
<!-- sweet allert -->
<script src="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- ResponsiveVoice -->
<script src="https://code.responsivevoice.org/responsivevoice.js?key=aItJrEVB"></script>
<!-- DataTabel -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>

<script>
  // setTimeout("location.reload(true);", 5000);

  var lastCalledNoAntrian = parseInt(localStorage.getItem('antrianTerakhir')) || 0;
  // Fungsi untuk mengubah warna tombol mikrofon
  $(document).ready(function() {
    $(document).on('click', '.mic-button', function() {

      $(this).toggleClass('active'); // Toggle class "active"
      var noAntrian = $(this).data('noantrian'); // Ambil nilai nomor antrian dari atribut data-noantrian
      currentNoAntrian = noAntrian; // Simpan nomor antrian saat ini ke variabel global

      if ($(this).hasClass('active')) {
        playCallingSound(); // Panggil fungsi untuk memainkan suara
        console.log(noAntrian);
        $('#nomor-antrian').text(noAntrian); // Tampilkan nilai nomor antrian di h2   

        // membuat logika untuk menampilkan nomor antrian setelahnya
        var nextNoAntrian = parseInt(noAntrian.substr(1)) + 1;
        var newNoAntrianFull = 'A0' + nextNoAntrian;
        $('#nomor-setelahnya').text(newNoAntrianFull); // Tampilkan nomor antrian setelahnya di h2
        console.log(newNoAntrianFull);

        //mengambil nilai total dari controller
        var nilaiTotal = <?php echo $data_hari_ini; ?>;

        //mengambil sisa nomor antrian yang belum dipanggil
        var sisaNomorAntrian = nilaiTotal - parseInt(noAntrian.substr(1));
        $('#sisa-antrian').text(sisaNomorAntrian); // Tampilkan sisa nomor antrian di elemen HTML yang sesuai
        console.log(sisaNomorAntrian);


      } else {
        // $('#nomor-antrian').text('0'); // Bersihkan tampilan h2 jika tombol mic tidak aktif
        // $('#nomor-setelahnya').text('0');
        // $('#sisa-antrian').text('0');
        //     lastCalledNoAntrian = parseInt(noAntrian.substr(1));
      }
    });

    // Inisialisasi tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Fungsi untuk memainkan suara pemanggilan
    function playCallingSound() {
      var audio = document.getElementById('calling-sound');
      audio.pause();
      audio.currentTime = 0;
      audio.play();

      //set delay
      durasi_audio = audio.duration * 770;

      var nomorAntrianText = "Nomor Antrian, ";

      // Ubah nomor antrian menjadi string, tambahkan "0" di depan jika kurang dari 10
      if (currentNoAntrian < 10) {
        nomorAntrianText += "0" + currentNoAntrian;
      } else {
        nomorAntrianText += currentNoAntrian;
      }

      nomorAntrianText += " menuju loket 1";

      responsiveVoice.speak(nomorAntrianText, "Indonesian Male", {
        rate: 0.9,
        pitch: 1,
        volume: 1
      });
    }
  });
</script>
</body>

</html>