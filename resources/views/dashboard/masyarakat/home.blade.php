<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="row">
        <nav class="navbar navbar-expand-lg bg-light p-4">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="frontend/assets/img/logo-jalabri.svg"
                height="34" alt="logo" /></a></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                  <a class="nav-link active" aria-current="page" href="{{ route('pelapor') }}">Pengajuan</a>
                  <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </div>
              </div>
            </div>
          </nav>
    </div>
    <div class="container p-5">
        <div class="container p-5">
            <h1 class="display-3 text-center">Selamat Datang di Halaman Pengaduan Jaladri Nusantara</h1>
            <p class="lead text-center mt-3">
                Silahkan isi form berikut ini sesuai keluhan anda mengenai laut Indonesia, <br> agar kami bertindak lebih lanjut lagi mengenai laut tercinta kami.
              </p>
        </div>
        <form action="/home/store" method="POST">
          @csrf
          
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Perihal Masalah</label>
            <input type="text" name="nama" class="form-control">
          </div>
          <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Detail Kejadian</label>
          <textarea name="detail_kejadian" class="form-control" rows="3"></textarea>
          </div>
          <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Lokasi Kejadian</label>
              <textarea name="lokasi_kejadian" class="form-control" rows="3"></textarea>
              </div>

          <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Tanggal Kejadian</label>
              <input type="date" name="waktu_kejadian" class="form-control">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Bukti Foto</label>
            <input type="text" name="bukti_foto" class="form-control">
        </div>
          <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Jenis Penrusakan</label>
              <input type="text" name="jenis_pengrusakan" class="form-control">
          </div>
          <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Terlapor / Tersangka</label>
              <input type="text" name="terlapor" class="form-control">
          </div>

          <div class="d-grid gap-2">
              <input type="submit" name="submit" class="btn btn-primary" value="Kirim">
          </div>

        </form>

    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>