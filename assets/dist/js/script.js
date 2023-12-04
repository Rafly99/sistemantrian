  // setTimeout("location.reload(true);", 5000);
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
            
            // Tambahkan logika untuk menampilkan nomor antrian setelahnya
            var nextNoAntrian = parseInt(noAntrian.substr(1)) + 1;
            var newNoAntrianFull = 'A0' + nextNoAntrian;
            $('#nomor-setelahnya').text(newNoAntrianFull); // Tampilkan nomor antrian setelahnya di h2
            console.log(newNoAntrianFull);

      } else {
        $('#nomor-antrian').text('0'); // Bersihkan tampilan h2 jika tombol mic tidak aktif
        $('#nomor-setelahnya').text('0');
      }
    });

    // Inisialisasi tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Fungsi untuk memainkan suara pemanggilan
    function playCallingSound() {
      var audio = document.getElementById('calling-sound');
      audio.pause();
      audio.currentTime=0;
      audio.play();

      //set delay
      durasi_audio = audio.duration * 770;

      responsiveVoice.speak("Nomor Antrian, " + currentNoAntrian + "menuju, loket,1", "Indonesian Male", {
            rate: 0.9,
            pitch: 1,
            volume: 1
        });
    }
  });
