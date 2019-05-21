<?php
 header("Access-Control-Allow-Origin: *");
 header('Access-Control-Allow-Methods: GET, POST, PUT');


 $nomeReceita      = $_POST['nomeReceita'];
 
 if(empty(  $nomeReceita )) 
 {

    echo "Faltando dados: ";

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
 
$sql = "INSERT INTO receita (nome) VALUES ($nomeReceita)";
if (mysqli_query($conn, $sql)) {
      echo "Nova receita inserida com sucesso";
} else {
      echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
  

 }

?>
