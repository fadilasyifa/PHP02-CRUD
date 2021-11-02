<HTML>
    <head>
    <title>Database Siswa - Delete</title>
    <style>
            body {background-color: aquamarine;}
        </style>
    </head>

<h1>Delete Data Siswa</h1>

<?php
    include './koneksi.php';
    $id_siswa = $_GET["id_siswa"];
    //$value = isset($_POST['value']) ? $_POST['value'] : '';
    //$id_siswa = isset($_GET['id_siswa']) ? $_POST['id_siswa'] : ''; (YANG BENER YANG MANA HUA)
    // $id_siswa = isset($_POST['id_siswa']) ? $_POST['id_siswa'] : '';

    $sql = "DELETE FROM bukuu WHERE id_siswa='$id_siswa'";

    if($conn->query($sql) === TRUE){
        echo "Data successfully erased! <br>";
        echo "<a href='tampildata.php'><button>Back</button></a><br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>
</HTML>