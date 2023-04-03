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
                  <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                  <a class="nav-link active" aria-current="page" href="#">Pengajuan</a>
                  <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </div>
              </div>
            </div>
          </nav>
    </div>
    <div class="container">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Status</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          @foreach ($pelapor as $p)
          <tbody class="table-group-divider">
            <tr>
              <th scope="row">{{ $p->id }}</th>
              <td>{{ $p->nama }}</td>
              <td><button type="button" class="btn btn-primary">{{ $p->status }}</button></td>
              <td></td>
            </tr>
          </tbody>
          @endforeach
        </table>
    </div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>