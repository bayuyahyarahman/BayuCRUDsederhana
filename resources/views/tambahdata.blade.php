
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UTS BAYU</title>

    <!-- navbar -->
    <div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-secondary p-4">
    <h5 class="text-white h4">Collapsed content</h5>
  </div>
</div>
<nav class="navbar navbar-dark bg-primary">
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
    <h1 class="text-center">Tambah Data </h1>
    <div class="container">
        
        <div class="row justify-content-center">
          
            <div class="col-6 ">
            <div class="card">
                <div class="card-body">
                <form action="/insertdata" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" name="nama"class="form-control"  placeholder="masukkan nama anda"
                        
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                         @error('nama')
                         <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                     </div>

                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nim</label>
                        <input type="number" name="nim"class="form-control"  placeholder="masukkan nim anda" 
                        
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                         @error('nim')
                         <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                     </div>
                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                        <input type="text" name="jurusan"class="form-control"  placeholder="masukkan jurusan anda"
                        
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                         @error('jurusan')
                         <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                     </div>
                        

                     <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label">Semester</label>
                        <input type="text" name="semester" class="form-control"  placeholder="semester berapa anda"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                     </div>
                      @error('semester')
                       <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                      <button type="submit" class="btn btn-outline-success" >Submit</button>
                      <a class="btn btn-outline-warning"
                          href="{{ url('bayu') }}">
                           <i class=""></i> Back</a>
                </div>
                        </form>          
                        
            </div>
            </div>
        
        </div>
    </div>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>