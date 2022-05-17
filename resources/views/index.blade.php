<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UBG</title>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- navbar -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Data-Data</h1>
    <div class="container ">
    <a href="/tambahbayu" class="btn btn-outline-success" >Tambah +</a>
        <div class="row">
        @if ($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
            {{$message}}
            @endif
          </div>
    <table class="table table-bordered">
  <thead class="table-light">
    <tr>
      <th scope="col"class="text-center">NO</th>
      <th scope="col"class="text-center">NAMA</th>
      <th scope="col"class="text-center">NIM</th>
      <th scope="col"class="text-center">JURUSAN</th>
      <th scope="col"class="text-center">SEMESTER</th>
      <th scope="col"class="text-center">AKSI</th>
    </tr>
  </thead>
  <tbody>
  @php
       $no= 1;
    @endphp
  @foreach ($data as $row)
    <tr>
      <th scope="row"class="text-center">{{ $no++ }}</th>
      <td>{{ $row->nama }}</td>
      <td>{{ $row->nim }}</td>
      <td>{{ $row->jurusan }}</td>
      <td class="text-center">{{ $row->semester }}</td>
      <td>
           
      <a href="#" class="btn btn-outline-danger delete" data-id="{{ $row->id }}"
      data-nama="{{ $row->nama }}">Delete</a> 
          <a href="/tampildata/{{ $row->id}}" class="btn btn-outline-warning">Edit </a> 
      </td>
    </tr>
    @endforeach
    
    </tr>
  </tbody>
</table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>

  <!-- alert notifikasi -->
  <script>
    
     $('.delete').click(function () {
      var bayuid = $(this).attr('data-id');
      var nama = $(this).attr('data-nama');

      const swalWithBootstrapButtons = Swal.mixin({
         customClass: {
           confirmButton: 'btn btn-success',
           cancelButton: 'btn btn-danger'},
           buttonsStyling: false
          })
          swalWithBootstrapButtons.fire({
             title: 'Apakah anda Yakin?',
             icon: 'warning',
             showCancelButton: true,
             confirmButtonText: 'Ya Hapus!',
             cancelButtonText: 'Tidak!',
             reverseButtons: true
            }).then((result) => {
              if (result.isConfirmed) {
               window.location = "/delete/" + bayuid + ""
                swalWithBootstrapButtons.fire('Deleted!','Your file has been deleted.','success')
              } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel) {
                  swalWithBootstrapButtons.fire(
                  'Dibatalkan',
                  'Data anda Aman:)',
                  'error')
                }
               })
              });
   </script>
  <!-- end allert notifikasi -->
</html>