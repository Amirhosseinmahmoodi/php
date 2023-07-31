<?php
//AmirHosseinMahmoodi
$conn = new mysqli('localhost','','','');
if($conn -> connect_error){
  $error = array(
    "check" => "ERROR-CONNECT"
    );
    echo json_encode($error);
}
?>
