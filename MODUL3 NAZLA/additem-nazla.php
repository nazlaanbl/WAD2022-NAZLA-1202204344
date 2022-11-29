
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home-nazla.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="mycar-nazla.php">My Car</a>
                </li>
                
            </ul>
            </div>
        </div>
    </nav>


    <div class="container my-3">

        <h2 class="fw-bold">Tambah mobil</h2>
        <p>Tambah mobil ke showroom</p>

        <div class="row">
            <form action="insertnazla.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fw-bold">Nama mobil</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold">Nama pemilik</label>
                    <input type="text" name="pemilik" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold">Merk</label>
                    <input type="text" name="merk" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" id="exampleInputPassword1"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold">Foto</label>
                    <input type="file" name="foto" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold">Status</label>
                    <div class="form-check">
                        <input value="lunas" class="form-check-input" type="radio"  name="status" id="flexRadioDefault1">
                        <label  class="form-check-label" for="flexRadioDefault1">
                            Lunas
                        </label>
                    </div>
                    <div class="form-check">
                        <input value="belum lunas" class="form-check-input" type="radio" name="status" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Belum lunas
                        </label>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary px-4" href="mycar-nazla.php">Submit</button>
            </form>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>