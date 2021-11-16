<?php
    include './koneksi.php';
    $id_siswa = $_GET["id_siswa"];
    //$value = isset($_POST['value']) ? $_POST['value'] : '';
    // $id_siswa = isset($_POST["id_siswa"]) ? $_POST['id_siswa'] : '';
    $sql = "SELECT * FROM buku WHERE id_siswa=".$id_siswa;
    $result = $conn->query($sql) or die($conn->error);

    $result = $result->fetch_assoc();
?>

<center>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>Database Siswa - Update</title>
<h1>Update Data Siswa</h1>


    <input type="hidden" name="id_siswa" value="<?php echo $result['id_siswa']?>">
    <table>
        <tr>
            <td>NIS Siswa</td>
            <td>:</td>
            <td><input type="text" name="nis" value="<?php echo $result['nis']?>"></td>
        </tr>
        <tr>
            <td>Nama Siswa</td>
            <td>:</td>
            <td><input type="text" name="nama_siswa" value="<?php echo $result['nama_siswa']?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" name="jenis_kelamin" value="<?php echo $result['jenis_kelamin']?>"></td>
        </tr>
        <tr>
            <td>Alamat</td> 
            <td>:</td>
            <td><textarea type="text" name="alamat"><?php echo $result['alamat']?></textarea></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><input type="text" name="id_jurusan" value="<?php echo $result['id_jurusan']?>"></td>
        </tr>
    </table>
    <input type="submit" class="btn btn-outline-primary mt-3" name="simpan" value="Update Data">
</form>
</center>

