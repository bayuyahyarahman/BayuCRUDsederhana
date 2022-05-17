<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UBG</title>

    <!-- navbar -->
    <div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <h5 class="text-white h4">Collapsed content</h5>
    <span class="text-muted">Toggleable via the navbar brand.</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
<!-- akhir navbar -->


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Edit Data</h1>
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-6">
            <div class="card">
                <div class="card-body">
                <form action="/updatedata/{{ $data->id }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" name="nama"class="form-control"
                         id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nama }}">
                     </div>

                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nim</label>
                        <input type="text" name="nim"class="form-control"
                         id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nim }}">
                     </div>

                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                        <input type="text" name="jurusan" class="form-control"
                         id="exampleInputEmail1" aria-describedby="emailHelp"value="{{ $data->jurusan }}">
                     </div>
                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Semester</label>
                        <input type="text" name="semester"class="form-control"
                         id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->semester }}">
                     </div>

                         <button type="submit" class="btn btn-primary">Submit</button>
                         <a class="btn btn-outline-warning"
                          href="{{ url('bayu') }}">
                           <i class=""></i> Kembali</a>
                         
                        </form>          
                </div>
            </div>
            </div>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        </div>
    </div>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
  <script>
      let timerInterval
Swal.fire({
  title: 'Tunggu!',
  html: 'memuat<b></b> data.',
  timer: 1000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
    timerInterval = setInterval(() => {
      b.textContent = Swal.getTimerLeft()
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
})
  </script>
</html>