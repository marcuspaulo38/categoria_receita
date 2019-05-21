<?php
 header("Access-Control-Allow-Origin: *");
 header('Access-Control-Allow-Methods: GET, POST, PUT');

 

 $nome = $_POST['nome'];

 if(empty( $nome)) 
 {

    echo "Digite uma nome: ";

 }else{

$servername = "mysql942.umbler.com:41890";
$database = "tanque";
$username = "tanque";
$password = "tanque2019";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "INSERT INTO categoria (nome) VALUES ('".$nome."')";
if (mysqli_query($conn, $sql)) {
      echo "Nova categoria inserida com sucesso";
} else {
      echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
  

 }

?>
