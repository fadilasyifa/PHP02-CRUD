
<?php
    include './koneksi.php';
    //$value = isset($_POST['value']) ? $_POST['value'] : '';
    $nis = isset ($_POST["nis"]) ? $_POST['nis'] : '';
    $nama_siswa = isset ($_POST["nama_siswa"]) ? $_POST ['nama_siswa']: '';
    $jenis_kelamin = isset ($_POST["jenis_kelamin"]) ? $_POST ['jenis_kelamin']: ''; 
    $alamat = isset ($_POST ["alamat"]) ? $_POST['alamat']: '';
    $id_jurusan = isset ($_POST["id_jurusan"]) ? $_POST[id_jurusan]:'';


    $sql = "UPDATE buku SET nis='$nis', nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin' , alamat='$alamat' , id_jurusan='$id_jurusan' WHERE nis='$nis'";
    if($conn->query($sql) === TRUE){
        echo "Successfully updated data! <br>";
        echo "<a href='tampildata.php'><button>Back</button></a><br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>