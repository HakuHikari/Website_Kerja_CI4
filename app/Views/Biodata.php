<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biodata</title>
  <link rel="stylesheet" href="<?= base_url('css/biodata.css') ?>">
  <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
  <link rel="icon" href="<?= base_url('genshin.ico') ?>" type="image/x-icon">
  <link rel="shortcut icon" href="<?= base_url('genshin.ico') ?>" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Caudex&family=Montserrat:wght@500&family=Overpass:wght@700&family=Source+Sans+3:wght@200&display=swap"
    rel="stylesheet">
</head>
<style>
  body {
    background: linear-gradient(to top, #dfe9f3 0%, white 100%);
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
  }
</style>

<body>

  <!-- Ini profile -->
  <div class="container-float">
    <div class="row">
      <div class="col-md-3">
        <div class="card profile-card">
          <img src="images/aditya-o.png" class="card-img-top" alt="Foto Profil">
          <div class="card-body">
            <p class="card-text name">Aditya Dwi Cahyo</p>
            <p class="card-text pronoun">Haku Hikari . He/Him</p>
            <p class="card-text role">Hanya Programmer Biasa</p>
            <ul class="list-group">
              <ul class="list-group">
                <li class="list-group-item">Programmer
                  <span class="icon">&#x1F4BB;</span> <!-- Unicode character for programmer -->
                  <i class="fab fa-html5" title="HTML"></i> <!-- Font Awesome HTML5 icon -->
                  <i class="fab fa-css3-alt" title="CSS"></i> <!-- Font Awesome CSS3 icon -->
                  <i class="fab fa-java" title="Java"></i> <!-- Font Awesome Java icon -->
                </li>
                <li class="list-group-item">Video Editor
                  <span class="icon">&#x1F3A5;</span>
                  <img src="https://freelogopng.com/images/all_img/1664217048logo-kinemaster-png.png" alt="Kinemaster" title="Kinemaster" class="editor-logo">
                  <img src="https://freelogopng.com/images/all_img/1682566430filmora-icon-png.png" alt="Filmora" title="Filmora" class="editor-logo">
                </li>
                <li class="list-group-item">Designer
                  <span class="icon">&#x1F58C;</span>
                  <img src="https://freelogopng.com/images/all_img/1656733807canva-icon-png.png" alt="Canva" title="Canva" class="editor-logo">
                </li>
              </ul>
          </div>
        </div>

      </div>

      <!-- Ini Tentang Saya -->
      <div class="col-md-8">
        <div class="card about-card">
          <div class="card-header">
            <h4>Tentang Saya</h4>
          </div>
          <div class="card-body">
            <p>Perkenalkan, saya Aditya Dwi Cahyo, mahasiswa program D4 Manajemen Informatika di Politeknik Negeri
              Sriwijaya.
              Saya memiliki minat yang besar dalam dunia komputer dan teknologi. Dengan semangat belajar yang tinggi,
              saya aktif terlibat dalam proyek dan kegiatan praktis, menggabungkan pengetahuan teoritis
              dengan keterampilan praktis yang diperlukan di dunia nyata. Keahlian saya meliputi pemrograman (Java,
              Css,Javascript, HTML),
              administrasi sistem, dan analisis data.
              Saya percaya diri bahwa dedikasi dan prestasi akademis saya dapat memberikan kontribusi positif di dunia
              industri teknologi.</p>
          </div>
        </div>

        <!-- Ini slide Social Media-->
        <div class="card media-card">
          <div class="card-body">
            <div id="socialMediaCarousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images/ig.png" class="d-block w-100" alt="Social Media 1">
                </div>
                <div class="carousel-item">
                  <img src="images/fb.png" class="d-block w-100" alt="Social Media 2">
                </div>
                <div class="carousel-item">
                  <img src="images/github.png" class="d-block w-100" alt="Social Media 3">
                </div>
              </div>
              <a class="carousel-control-prev" href="#socialMediaCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#socialMediaCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <div class="text-center mt-4">
                <h4 class="follow-text">"Follow Me On"</h4>
                <div>
                  <a href="https://www.instagram.com/aditya_dwi_cahya/" target="_blank" class="mr-3">
                    <i class="fab fa-instagram fa-3x"></i>
                  </a>
                  <a href="https://www.facebook.com/adityadwi.cahya.12" target="_blank" class="mr-3">
                    <i class="fab fa-facebook fa-3x"></i>
                  </a>
                  <a href="https://github.com/HakuHikari" target="_blank">
                    <i class="fab fa-github fa-3x"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  </div>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>