<!DOCTYPE html>
<html>
<head>
  <title>Memutar Musik</title>
  <style>
    /* Menyembunyikan elemen audio */
    audio {
      display: none;
    }
  </style>
</head>
<body>
  <a href="#" id="playLink">Klik untuk memainkan musik</a>

  <audio id="myAudio" controls>
    <source src="../assets/images/sahara.mp3" type="audio/mp3">
    Your browser does not support the audio element.
  </audio>

  <script>
    var audio = document.getElementById("myAudio");
    var playLink = document.getElementById("playLink");

    playLink.addEventListener("click", function() {
      audio.play();
    });
  </script>
</body>
</html>
