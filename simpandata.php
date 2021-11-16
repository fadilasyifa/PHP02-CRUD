<head>
        <style>
            body {background-color: aquamarine;}
        </style>
    </head>

    <body>
        <h1>Simpan Data</h1>

<?php
    include './koneksi.php';
    //$value = isset($_POST['value']) ? $_POST['value'] : '';
    $nis = isset ($_POST['nis']) ? $_POST['nis'] : '';
    $nama_siswa = isset ($_POST['nama_siswa']) ? $_POST['nama_siswa'] : '';
    $jenis_kelamin = isset ($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
    $alamat = isset ($_POST['alamat']) ? $_POST['alamat']: '';
    $id_jurusan = isset ($_POST['id_jurusan']) ? $_POST['id_jurusan']: '';


    $sql = "INSERT INTO buku (nis, nama_siswa , jenis_kelamin , alamat , id_jurusan) VALUES ( '$nis', '$nama_siswa', '$jenis_kelamin' , '$alamat' , '$id_jurusan')";
    if($conn->query($sql) === TRUE){
        echo "simpan berhasil <br>";
        echo "<a href= 'masukandata.php'>Kembali</a><br>";
    }else{
        echo "Error:" . $sql . "<br>". $conn->error;
    }

    $conn->close();
    ?>
</body>
</html>