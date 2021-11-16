<html>
    <head>
        <title>Database Siswa - Search</title>
        <style>
            body {background-color: aquamarine;}
        </style>
    </head>
    <body>
<?php
    //$value = isset($_POST['value']) ? $_POST['value'] : '';
    $Column= isset ($_POST['Column']) ? $_POST['Column'] : '';
    $Find= isset ($_POST['Find']) ? $_POST['Find']: ''; 
    $link = mysqli_connect ("localhost","root","","db_siswa");
    $Hasil=mysqli_query($link,"SELECT * FROM buku WHERE $Column like '%$Find%'");
    $jumlah=mysqli_num_rows ($Hasil);
    echo "<br>";
    echo "Found: $jumlah";
    echo "<br>";
    while ($baris=mysqli_fetch_array($Hasil))
    {
        echo "NIS : " . $baris[1] . "<br>";
        echo "Nama Siswa : " . $baris[2] . "<br>";
        echo "Jenis Kelamin : " . $baris[3] . "<br>";
        echo "Alamat : " . $baris[4] . "<br>";
        echo "Jurusan : " . $baris[5] . "<br>";
    }
?>
</body>
</html>
