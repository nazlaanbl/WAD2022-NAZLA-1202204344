<?php
    include_once 'koneksinazla.php';

    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $pemilik = $_POST['pemilik'];
        $merk = $_POST['merk'];
        $tanggal = $_POST['tanggal'];
        $deskripsi = $_POST['deskripsi'];
        $status = $_POST['status'];

        $foto = $_FILES['foto']['name'];

        $extension = pathinfo($foto, PATHINFO_EXTENSION); 

        $allowed_extension = array('.jpg', '.png');

        $imgnewfile=md5($foto).time().$extension; 

        if(!in_array($extension, $allowed_extension)){ 
            echo "<script>alert('invalid format file')</script>";
        } else {

            move_uploaded_file($_FILES['foto']['tmp_name'], "" .$imgnewfile);

            $sqlquery = "INSERT INTO showroom(nama_mobil, pemilik_mobil, merk_mobil, tanggal, deskripsi, foto_mobil, status_pembayaran)
            VALUE ('$nama', '$pemilik', '$merk', '$tanggal', '$deskripsi', '$foto', '$status')";
            
            $query = mysqli_query($koneksinazla, $sqlquery);

            if ($query) {
                echo "<script>alert('Data telah ditambahkan')</script>";
                echo "<meta http-equiv='refresh' content='1 url=mycar.php'>";

            } else {
                echo "<script>alert('Data gagal ditambahkan')</script>";
                header('Location: additem-nazla.php?status=gagal');
            }
        }
    } else {
        die("ngawur");
    }

    include 'koneksinazla.php';
    
        $nama = $_POST['nama'];
        $pemilik = $_POST['pemilik'];
        $merk = $_POST['merk'];
        $tanggal = $_POST['tanggal'];
        $deskripsi = $_POST['deskripsi'];
        $status = $_POST['status'];
    
        $foto = $_FILES['foto']['name'];
    
    if($foto != "") {
      $ekstensi_diperbolehkan = array('png','jpg');
      $x = explode('.', $foto); 
      $ekstensi = strtolower(end($x));
      $file_tmp = $_FILES['foto']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $nama_gambar_baru = $angka_acak.'-'.$foto; 
            if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                    move_uploaded_file($file_tmp, 'pic/mobil1.jpg'.$nama_gambar_baru);
                      $query = "INSERT INTO showroom_nazla_table(nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran)
                      VALUE ('$nama', '$pemilik', '$merk', '$tanggal', '$deskripsi', '$foto', '$status')";
                      $result = mysqli_query($koneksinazla, $query);
                      if(!$result){
                          die ("Query gagal dijalankan: ".mysqli_errno($koneksinazla).
                               " - ".mysqli_error($koneksinazla));
                      } else {
                        echo "<script>alert('Data berhasil ditambah.');window.location='../mycar-nazla.php';</script>";
                      }
    
                } else {     
                    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../add.php';</script>";
                }
    } else {
       $query = $query = "INSERT INTO showroom(nama_mobil, pemilik_mobil, merk_mobil, tanggal, deskripsi, foto_mobil, status_pembayaran)
       VALUE ('$nama', '$pemilik', '$merk', '$tanggal', '$deskripsi', null, '$status')";
                      $result = mysqli_query($koneksinazla, $query);
                      if(!$result){
                          die ("Query gagal dijalankan: ".mysqli_errno($koneksinazla).
                               " - ".mysqli_error($koneksinazla));
                      } else {
                        echo "<script>alert('Data berhasil ditambah.');window.location='mycar-nazla.php';</script>";
                      }
    }
?>