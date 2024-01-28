<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="website sistem pakar">
    <meta name="author" content="mr k">
    <link rel="icon" href="image/icon.png">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="script.js" defer></script>
    

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
</head>
<body>
<?php include ('navbar.php'); ?>
	
    <main role="main">
        <!-- Carousel -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="image/bg-1.gif" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Sistem Pakar Akademik</h1>
                <p>Implementasi Sistem Pakar sebagai Alat Pendukung Keputusan dalam Proses Pemilihan Jurusan Akademik: Memahami Preferensi Individu dan Peluang Karir</p>
                <p><button type="button" class="btn btn-lg btn-info" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
              </div>
            </div>
          </div>

       <!-- Carousel -->

      <!---------------- MODAL ----------------->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Identitas User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="simpan-session.php" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nama :</label>
                  <input type="text" name="nama" class="form-control" id="input-ame" placeholder="isikan nama anda" required autofocus >
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Umur :</label>
                  <input type="number" name="umur" class="form-control col-sm-8" placeholder="isikan umur anda" required >
                </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-info">Lanjut ></button>
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>

      </main>

      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="wrapper">
      <ul class="carousel">
        <li class="card">
          <div class="img"><img src="https://cdn.discordapp.com/attachments/759451365285167137/1201068009205280778/WhatsApp_Image_2024-01-28_at_14.24.29_d17e178c.jpg" alt="img" draggable="false"></div>
          <h2>Ahmad Faisal</h2>
          <span>105841100121</span>
        </li>
        <li class="card">
          <div class="img"><img src="https://cdn.discordapp.com/attachments/759451365285167137/1201071175154020382/IMG20191116180137.jpg" alt="img" draggable="false"></div>
          <h2>Muhammad Dasril Asdar</h2>
          <span>105841100321</span>
        </li>
        <li class="card">
          <div class="img"><img src="https://cdn.discordapp.com/attachments/759451365285167137/1201070410171687004/WhatsApp_Image_2024-01-25_at_00.41.56_c285e599.jpg" alt="img" draggable="false"></div>
          <h2>Andika Saputra</h2>
          <span>105841100521</span>
        </li>
        <li class="card">
          <div class="img"><img src="https://cdn.discordapp.com/attachments/759451365285167137/1201070207997849650/WhatsApp_Image_2024-01-25_at_07.17.22_0b05b266.jpg" alt="img" draggable="false"></div>
          <h2>Khoirul Umam</h2>
          <span>105841100221</span>
        </li>
      </ul>
    </div>


    
</body>

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
  
</html>