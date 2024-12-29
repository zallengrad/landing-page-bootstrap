<?php 

include '../config.php';
$data = mysqli_query($db, "SELECT * FROM kelas WHERE id = '$_GET[id]' ");
$row = mysqli_fetch_array($data);

$gambar =  $row['gambar'];
if(file_exists('upload/'.$gambar)){
    unlink('upload/'.$gambar);
}

$query = "DELETE FROM kelas WHERE id = '$_GET[id]' ";
mysqli_query($db, $query) or die ("SQL Error". mysqli_error());
header('location:dash_adm.php') 


?>
