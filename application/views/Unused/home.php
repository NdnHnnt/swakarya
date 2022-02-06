<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="icon" href="assets/images/swakarya_logo.svg">
    <title>Swakarya - Landing Page</title>
  </head>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #EEDAD1;">
    <a class="navbar-brand" href="#">
      <img src="<?php echo base_url()?>assets/images/swakarya_logo.svg" width="200" class="d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link font-weight-bold" href="#" style="text-transform: capitalize; color: #383E56;">BERANDA</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link font-weight-bold" href="#" style="text-transform: capitalize; color: #383E56;">CARA KERJA</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link font-weight-bold" href="#" style="text-transform: capitalize; color: #383E56;">ACARA TERDEKAT</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link font-weight-bold" href="#" style="text-transform: capitalize; color: #383E56; ;">GALERI</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <a class="btn my-2 my-sm-0 font-weight-bold cust-button1" href="#"> Masuk  atau  Daftar </a>
      </form>
    </div>
  </nav>
<body>
  <div class="row desktop">
    <div class="col mr-auto">
      <h1 style="color: #383E56; padding: 5%;"> Kami membantu bisnis Anda agar dapat lebih dijangkau! </h1>
    </div>
    <div class="col mr-auto">
      <h4 style="color: #383E56; padding: 5%; margin-right: 2%;"> Swadaya membantu Anda untuk menemukan rekan, ikon, pangsa, serta acara untuk perkembangan bisnis Anda. </h4>
      <a class="btn my-2 my-sm-0 font-weight-bold cust-button2" href="#"> Pelajari lebih lanjut </a>
    </div>
  </div>
  
  <div class="row mobile">
    <div class="col mr-auto">
      <h2 style="color: #383E56; padding: 5%;"> Kami membantu bisnis Anda agar dapat lebih dijangkau! </h2>
    </div>
    <div class="col mr-auto">
      <h6 style="color: #383E56; padding: 5%; margin-right: 2%;"> Swadaya membantu Anda untuk menemukan rekan, ikon, pangsa, serta acara untuk perkembangan bisnis Anda. </h6>
      <a class="btn my-2 my-sm-0 font-weight-bold cust-button2" href="#"> Pelajari lebih lanjut </a>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <img width= "100%" src="<?php echo base_url()?>assets/images/index_1.png" style="padding: 2%;">
    </div>
  </div>

  <div class="row">
    <img class="title-img" src="<?php echo base_url()?>assets/images/index_2.svg">
  </div>

  <div class="row desktop cust-text" style="padding: 2%;">
    <div class="col-sm">
        <img src="<?php echo base_url()?>assets/images/index_3.png" width="75%">
    </div>
    <div class="col-sm desktop cust-text">
      <div>
        <h1 class="font-weight-bold"> -01- </h1>
        <h3 class="font-weight-bold"> Mendaftarkan akun</h3>
        <p>Dengan mendaftarkan akun Anda, Anda dapat mengakses fitur kolaborasi di Swakarya.</p>
      </div>
      <br>
      <div>
        <h1 class="font-weight-bold"> -03- </h1>
        <h3 class="font-weight-bold"> Menelusuri Bisnis Lain</h3>
        <p>Anda dapat menelusuri bisnis kecil lain yang terdaftar di Swakarya untuk mencari mitra kerja sama atau acara.</p>
      </div>
    </div>
    <div class="col-sm">
      <div>
        <h1 class="font-weight-bold"> -02- </h1>
        <h3 class="font-weight-bold"> Melengkapi Profil Bisnis Anda</h3>
        <p>Tentunya tidak lengkap apabila Anda tidak melengkapi profil bisnis Anda untuk peluang  kerja sama yang lebih besar.</p>
      </div>
      <div>
        <h1 class="font-weight-bold"> -04- </h1>
        <h3 class="font-weight-bold"> Memulai Kerja Sama dengan Bisnis Lain!</h3>
        <p>Tidak ada salahnya menginisiasi kerja sama dengan bisnis kecil lain. Sangat disarankan pula untuk mencantumkan dokumen yang diinginkan calon mitra.</p>
      </div>
    </div>
  </div>

  <div id="accordion" class="mobile">
    <div class="card">
      <div class="card-header" id="headingOne" >
        <h5 class="mb-0">
          <button class="btn btn-link cust-col" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            -01- Mendaftarkan Akun
          </button>
        </h5>
      </div>
      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body cust-text">
          Anda dapat menelusuri bisnis kecil lain yang terdaftar di Swakarya untuk mencari mitra kerja sama atau acara. 
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed cust-col" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            -02- Melengkapi Profil Bisnis Anda
          </button>
        </h5>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="card-body cust-text">
          Tentunya tidak lengkap apabila Anda tidak melengkapi profil bisnis Anda untuk peluang  kerja sama yang lebih besar.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingThree">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed cust-col" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            -03- Menelusuri Bisnis Lain
          </button>
        </h5>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
        <div class="card-body cust-text">
          Anda dapat menelusuri bisnis kecil lain yang terdaftar di Swakarya untuk mencari mitra kerja sama atau acara.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingFour">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed cust-col" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            -04- Memulai Kerja Sama dengan<br> Bisnis Lain
          </button>
        </h5>
      </div>
      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
        <div class="card-body cust-text">
          Tidak ada salahnya menginisiasi kerja sama dengan bisnis kecil lain. Sangat disarankan pula untuk mencantumkan dokumen yang diinginkan calon mitra.
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <img class="title-img" src="<?php echo base_url()?>assets/images/index_4.svg">
  </div>

  <div class="row cust-text2" style="padding: 2%;">
    <div id="carouselExampleCaptions" class="carousel slide col-sm text-center" data-ride="carousel">
      <ol class="carousel-indicators my-4">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo base_url()?>assets/images/index_6.jpg" class="d-block img-fluid cust-img" alt="...">
          <div class="carousel-caption d-none d-md-block mb-4" style="background-color: #383E56;">
            <h5 class="font-weight-bold">'Upgrade' Bisnis UMKM Selama Pandemi</h5>
            <p>23 Januari 2022 | Daring <br> Zoom Meeting </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url()?>assets/images/index_7.jpg" class="d-block img-fluid cust-img" alt="...">
          <div class="carousel-caption d-none d-md-block mb-4" style="background-color: #383E56;">
            <h5 class="font-weight-bold">Copywriting untuk Usaha Kecil</h5>
            <p>31 Januari 2022 | Daring <br> Zoom Meeting </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src=<?php echo base_url()?>assets/images/index_8.jpg" class="d-block img-fluid cust-img" alt="...">
          <div class="carousel-caption d-none d-md-block mb-4" style="background-color: #383E56;"">
            <h5 class="font-weight-bold">Festival Makrame Sidoarjo 2022</h5>
            <p>1 Februari 2022 - 2 Februari 2022 | Langsung <br> GOR Sidoarjo </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url()?>assets/images/index_9.jpg" class="d-block img-fluid cust-img" alt="...">
          <div class="carousel-caption d-none d-md-block mb-4" style="background-color: #383E56;"">
            <h5 class="font-weight-bold">Festival Penulis Jawa Timur 2022</h5>
            <p>4 Februari 2022 - 11 Februari 2022 | Langsung <br> JX Expo Surabaya </p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="col-sm center text-center cust-text">
        <p>   Acara ini diadakan atas kerja sama antar bisnis di Swakarya dan pemerintah setempat. Acara-acara ini umumnya berupa pelatihan pemasaran ataupun festival produk lokal. </p>
        <a class="btn my-2 my-sm-0 font-weight-bold cust-button3" href="#"> Telusuri Acara Lain </a>
    </div>
  </div>

  <div class="row">
    <img class="title-img" src="<?php echo base_url()?>assets/images/index_5.svg">
  </div>

  <div class="row">
    <div id="carouselExample1" class="carousel slide col-sm desktop" data-ride="carousel" style="padding:2%">
      <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                <div class="col-md-3">
                        <img class="d-block img-fluid cust-img2" src="<?php echo base_url()?>assets/images/index_10.jpg" alt="First slide">
                </div>
                <div class="col-md-3">
                        <img class="d-block img-fluid cust-img2" src="<?php echo base_url()?>assets/images/index_11.jpg" alt="First slide">
                </div>
                <div class="col-md-3">
                        <img class="d-block img-fluid cust-img2" src="<?php echo base_url()?>assets/images/index_12.jpg" alt="First slide">
                </div>
                <div class="col-md-3">
                        <img class="d-block img-fluid cust-img2" src="<?php echo base_url()?>assets/images/index_13.jpg" alt="First slide">
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-md-3">
                        <img class="d-block img-fluid cust-img2" src="<?php echo base_url()?>assets/images/index_7.jpg" alt="First slide">
                </div>
                <div class="col-md-3">
                        <img class="d-block img-fluid cust-img2" src="<?php echo base_url()?>assets/images/index_8.jpg" alt="First slide">
                </div>
                <div class="col-md-3">
                        <img class="d-block img-fluid cust-img2" src="<?php echo base_url()?>assets/images/index_9.jpg" alt="First slide">
                </div>
                <div class="col-md-3">
                        <img class="d-block img-fluid cust-img2" src="<?php echo base_url()?>assets/images/index_10.jpg" alt="First slide">
                </div>
            </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <div id="carouselExample2" class="carousel slide mobile" data-ride="carousel" style="padding: 2%;">
    <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 cust-img3" src="<?php echo base_url()?>assets/images/index_10.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 cust-img3" src="<?php echo base_url()?>assets/images/index_11.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 cust-img3" src="<?php echo base_url()?>assets/images/index_12.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 cust-img3" src="<?php echo base_url()?>assets/images/index_13.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 cust-img3" src="<?php echo base_url()?>assets/images/index_7.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 cust-img3" src="<?php echo base_url()?>assets/images/index_11.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 cust-img3" src="<?php echo base_url()?>assets/images/index_12.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 cust-img3" src="<?php echo base_url()?>assets/images/index_13.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExample2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExample2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="row">
    <br><img class="title-img" src="<?php echo base_url()?>assets/images/index_15.svg">
  </div>

  <div>
    <div class="container center_div cust-text">
      <form class="text-center" style="text-align: center;">
        <div class="form-group row">
          <label class="col-sm-2 col-form-label font-weight-bold">Nama Bisnis<span style="color:red">*</span></label>
          <div class="col-sm-10">
            <input type="text" class="form-control mb-3" placeholder="Nama Bisnis Anda" name="username" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label font-weight-bold">Email Bisnis<span style="color:red">*</span></label>
          <div class="col-sm-10">
            <input type="email" class="form-control mb-3" placeholder="emailBisnis@example.com" name="email" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label font-weight-bold">Kata Sandi<span style="color:red">*</span></label>
          <div class="col-sm-10">
            <input type="password" class="form-control mb-3" placeholder="Password" name="password" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label font-weight-bold">Konfirmasi Kata Sandi<span style="color:red">*</span></label>
          <div class="col-sm-10">
            <input type="password" class="form-control mb-3" placeholder="Repeat Password" name="cpassword" required>
          </div>
        </div>
        <button name="submit" class="btn cust-button4">Sign Up</button> <br>
		    <a class="cust-text font-weight-bold" href="#">Already have an account? Login here</a>
      </form>
      <br>
    </div>

    <footer class="w-100 flex-shrink-0 cust-footer">
      <div class="container cust-footer">
          <br>
          <div class="row cust-footer">
              <div class="col-lg-4 col-md-6 cust-footer">
                  <h5>Kawan Imba</h5>
                  <p class="small">Sebuah kelompok mahasiswa yang ingin membantu usaha UMKM dalam mengikuti perkembangan teknologi.</p>
              </div>
              <div class="col-lg-2 col-md-6 cust-footer">
                  <h5 class="text-white mb-3">Bisnis Anda</h5>
                  <ul class="list-unstyled text-muted small">
                      <li><a class="cust-link" href="#">Profil Bisnis Anda</a></li>
                      <li><a class="cust-link" href="#">Lihat Dashboard</a></li>
                  </ul>
              </div>
              <div class="col-lg-2 col-md-6 cust-footer">
                  <h5 class="text-white mb-3">Acara</h5>
                  <ul class="list-unstyled text-muted small">
                      <li><a class="cust-link" href="#">Acara Anda</a></li>
                      <li><a class="cust-link" href="#">Cari Acara</a></li>
                  </ul>
              </div>
              <div class="col-lg-2 col-md-6 cust-footer">
                <h5 class="text-white mb-3">Ikuti Kami</h5>
                <ul class="list-unstyled text-muted small">
                    <li><a class="cust-link" href="#">Instagram</a></li>
                    <li><a class="cust-link" href="#">Twitter</a></li>
                </ul>
            </div>
          </div>
      </div>
    </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>