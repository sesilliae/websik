<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT 94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>

</head>

<body>
  <!--Jumbotron-->
  <div class="jumbotron">
    <div class="container">
    <h1 class="display-10" href="index.php">Sistem Informasi Kelautan</h1>
    <p class="lead">Kampus Serang, Universitas Pendidikan Indonesia</p> 
    </div>
  </div>

  <!--Menu Navbar-->
  <nav  class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
        aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Profil
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="sejarah.php">Sejarah</a></li>
                  <li><a class="dropdown-item" href="visimisi.php">Visi Misi</a></li>
                  <li><a class="dropdown-item" href="strukturorganisasi.php">Struktur Organisasi</a></li>
                  <li><a class="dropdown-item" href="dosen.php">Dosen</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Akademik
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="kurikulum.php">Kurikulum</a></li>
                  <li><a class="dropdown-item" href="laboratorium.php">Laboratorium</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="akreditasi.php">Akreditasi</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Download
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="https://drive.google.com/file/d/1QzVIjXXNbZxCYD2rnOdaMWR_7k83amyw/view">SK Syarat Peringkat Akreditasi</a></li>
                  <li><a class="dropdown-item" href="https://drive.google.com/file/d/1CijlD1g5NZH2Jkwvf90TXoUYX3rdcYp9/view">Struktur Kurikulum</a></li>
                  <li><a class="dropdown-item" href="https://drive.google.com/drive/folders/12tzM1qZQ9NG99olZvmA_syL-TH44oXh2">Rencana Pembelajaran Semester (RPS)</a></li>
                  <li><a class="dropdown-item" href="https://drive.google.com/drive/folders/1ZlC8ZQWGvVBEEoRyfmFhJ83XofXxtgrY">Nilai Perkuliahan</a></li>
                </ul>
              </li>
              <li class="nav-item">
               <a class="nav-link" href="FAQ.php">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.himataska.web.id/">HIMATASKA</a>
              </li>            </ul>
          </div>
        </div>
      </nav>

      <!--Carousel-->
      <section>
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="sikbenner.jpg" class="d-block w-100" style="opacity: 1; display: block;" alt="Selamat Datang">
                <div class="carousel-caption d-none d-md-block">
                 <h2 style="text-align: center; ">Selamat Datang</h2>
                  <p style="text-align: center; "><b> Tahun 2019 UPI Kampus Serang membuka Program Studi Baru yaitu S1 Sistem Informasi Kelautan (SIK). Lulusan prodi S1 SIK memiliki kompetensi untuk mempersiapkan sumberdaya manusia sektor kemaritiman pada era revolusi…</b></p>
                  <a class="btn btn-primary center" href="selamatdatang.php" role="button" >Read More</a>
                </div>
              </div>
            </div>
          </div>

          <br><br>

        <!--Tulisan-->
        <section>
        <div class="container" id="update">
          <div class="row ">
              <div class="col-md-4 mb-3">
                  <h2>Berita Terbaru</h2>
                    <p class="card-text">Program Studi Sistem Informasi Kelautan (SIK) dan Himpunan Mahasiswa Sistem Informasi Kelautan (HIMATASKA) setiap bulannya melaksanakan MATAKA. Pelaksanaan MATAKA ini bertujuan agar terbentuknya suasana akademik di Program Studi Sistem Informasi Kelautan.

                      Pada bulan Oktober, MATAKA akan dilaksanakan pada tanggal 28 Oktober 2021. Adapun tema kegiatan yang diusung adalah Aktualisasi Diri Mahasiswa...</p>
                    <a href="mataka.php">Selengkapnya</a>
                  </div>
              <div class="col-md-4 mb-3">
                  <h2>Dosen</h2>
                    <p class="card-text">Dosen Program Studi Sistem Informasi Kelautan (SIK) Universitas Pendidikan Indonesia (UPI) terdiri dari dosen-dosen muda yang professional di bidang Ilmu Kelautan, Perikanan, Sistem Informasi Geografis, Pengindraan Jauh, Oseanografi, Konservasi, Sistem Informasi, Biologi Laut, Ekologi Laut, Sosial Ekonomi, Biosistematika, Mitigasi Bencana dan bidang lainnya. Dosen Program Studi SIK merupakan lulusan dari ...</p>
                    <a href="dosen.php">Selengkapnya</a>
                  </div>
              <div class="col-md-4 mb-3">
                  <h2>Himataska</h2>
                    <p class="card-text">Himataska adalah himpunan mahasiswa program studi Sistem Informasi Kelautan Universitas Pendidikan Indonesia. Himataska ada sejak 2020 dan berada dibawah naungan program studi Sistem Informasi Kelautan. Himataska memiliki beberapa program kerja, yaitu: Pengabdian Masyarakat, PSDM, EKOBIS, ADKSEMA, dan HUMED. Memiliki pengurus yang berjumlah 33 mahasiswa. Himataska diketuai oleh Abdul Malik...  </p>
                    <a href="https://www.himataska.web.id/">Selengkapnya</a>
                </div>  
            </div>
          </div>
        </section>

        <br><br>

        <!--Media Youtube dan Text-->
        <section>   
        <div class="container">
          <div class="row">
              <div class="col"><iframe width="500" height="315" src="https://www.youtube.com/embed/uSpL9GR0QaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col bg-fff text-dark text-left"><h3>Tentang Kami</h3>
          <p>Program Studi Sistem Informasi Sistem Kelautan merupakan bagian dari Ilmu Kelautan yang fokus pada analisis data kelautan baik numerik maupun spasial untuk kemudian diintegrasikan berbasis sistem informasi yang dikembangkan sebagai dasar pengambilan keputusan. Bidang kajian dari prodi SIK terdiri dari Ilmu Kelautan, Ilmu Perikanan, Sistem Informasi, Sistem Informasi Geografis, serta Penginderaan Jauh Keluatan dan Ilmu Kelautan. Pembelajaran di SIK selain dilaksanakan di ruang kelas juga dilaksanakan di laboratorium, e-learning, field study ke pesisir dan laut. Pembelajaran di SIK dilaksanakan oleh dosen SIK dan dosen dari Kampus UPI Serang serta para praktisi dan profesional di bidangnya.</p>
          </div>
         </div>
       </div>
       </section>

       <br><br>


        <!--PMB-->
        <section>
          <div class="container pt-5">
              <div class="row align-items-md-stretch">
                  <div id="hapus1" class="col-md-6">
                      <div class="h-100 p-5 bg-light border rounded-3">
                          <h2>Penerimaan Mahasisiswa Baru </h2>
                          <p>Universitas Pendidikan Indonesia (UPI) sebagai salah satu Perguruan Tinggi Negeri Berbadan Hukum (PTN-BH) di Indonesia merupakan universitas dengan jati diri kependidikan. UPI menerapkan sistem multi kampus dengan UPI Bandung 
                            atau Bumi Siliwangi sebagai Kampus Pusat, sedangkan Kampus Daerah tersebar di Provinsi Jawa Barat meliputi Cibiru, Tasikmalaya, Purwakarta, Sumedang, dan Provinsi Banten di Kota Serang. Sebagai PTN maka penerimaan mahasiswa baru 
                            setiap tahunnya melalui jalur Seleksi Nasional Masuk Perguruan Tinggi Negeri (SNMPTN), Seleksi Bersama Masuk Perguruan Tinggi Negeri (SBMPTN), Seleksi Mandiri, dan Prestasi Istimewa.
                          </p>
                          <a class="btn btn-primary center" href="https://pmb.upi.edu/" role="button" >Daftar UPI</a>
                      </div>
                  </div>
                  <div id="hapus2" class="col-md-6">
                      <div class="h-100 p-5 text-white bg-dark rounded-3">
                          <h2>Tentang UPI</h2>
                          <p>Dulunya merupakan perguruan tinggi guru, Universitas Pendidikan Indonesia (UPI) merupakan universitas komprehensif yang saat ini menawarkan beragam bidang seperti ilmu pendidikan, disiplin berbasis pendidikan, agama, humaniora, dan ilmu sosial, baik ilmu murni maupun ilmu terapan. Dengan mandatnya yang lebih luas, UPI juga menumbuhkan di civitas akademika nilai pemupukan silang disiplin ilmu murni dan terapan.
                          </p>
                          <a class="btn btn-primary center" href="https://www.upi.edu/tentang" role="button" >Tentang UPI</a>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <br><br>

      <!--Peta dan Form-->
      <section id="contact" class="contact section-bg">
        <div class="container">
          <hr>
          </div class="container">
          <div class="peta">
            <center>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63470.682921475265!2d106.228281442205!3d-6.141759507240276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418b0dbb534a61%3A0x301e8f1fc28b8d0!2sSerang%2C%20Serang%20City%2C%20Banten!5e0!3m2!1sen!2sid!4v1633768896597!5m2!1sen!2sid" width="500" height="300" style="border:0; position: absolute;" allowfullscreen="" loading="lazy"></iframe>
            </center>
          <div class="row mt-5 justify-content-center" width= "20%" height="20%" >
            <div class="col-lg-9" > Tanyakan Sesuatu  <br> 
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div>
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <textarea class="form-control" name="pesan" id="Pesan" placeholder="Pesan" required></textarea>
                  </div>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <a class="btn btn-primary" href="#" role="button">Kirim</a>
              </form>
            </div>
          </div>
        </div>
      </section>

      <br><br>

      <!--Footer-->
      <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
              <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <span class="text-muted">© 2021, Sesillia (2004606)</span>
          </div>
        </footer>
      </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
