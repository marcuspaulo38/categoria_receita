<?php
 header("Access-Control-Allow-Origin: *");
 header('Access-Control-Allow-Methods: GET, POST, PUT');


 $nomeReceita         = $_POST['nomeReceita'];
 $descricaoReceita    = $_POST['descricaoReceita'];
 $ingredientesReceita = $_POST['ingredientesReceita'];
 $categoriaReceita    = $_POST['categoriaReceita'];
 $imagemReceita       =  $_POST['imagemReceita'];
 
 if(empty(  $nomeReceita ) | empty(  $descricaoReceita ) | empty(  $ingredientesReceita ) | empty(  $categoriaReceita )) 
 {

    echo "Está faltando dados: Nome, Receita ou Descrição";

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
 
echo "Successo: ";
 
$sql = "INSERT INTO receita (nome, descricao, igredientes, categoria, imagem) VALUES ('".$nomeReceita."', '".$descricaoReceita."','".$ingredientesReceita."', '".$categoriaReceita."', '".$imagemReceita."')";
if (mysqli_query($conn, $sql)) {
      echo "Nova receita inserida.";
} else {
      echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
  

 }

?>
