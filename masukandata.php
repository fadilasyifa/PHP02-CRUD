<?php
    session_start()
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            body {background-color: aquamarine;}
        </style>
        <title>Database Siswa - Create</title>
    </head>

        <body>
        <h1>Masukan Data Siswa</h1>
        <form action="simpandata.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>NIS Siswa</td>
                    <td>:</td>
                    <td><input type="text" name="nis"></td>
                </tr>
                <tr>
                    <td>Nama Siswa</td>
                    <td>:</td>
                    <td><input type="text" name="nama_siswa"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type="text" name="jenis_kelamin"></td>
                </tr>
                <tr>
                    <td>Alamat</td> 
                    <td>:</td>
                    <td><textarea type="text" name="alamat"></textarea></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><input type="text" name="id_jurusan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    
                    <td><button>Simpan Data</button></td>
                </tr>
            </table>
        </form>

        <?php
            if(isset($_SESSION["message"])){
                echo $_SESSION["message"];
                unset($_SESSION["message"]);
            }
        ?>
    </body>
</html>