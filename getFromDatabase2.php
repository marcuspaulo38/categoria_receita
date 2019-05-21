<?php
 header("Access-Control-Allow-Origin: *");

// definições de host, database, usuário e senha
$host = "mysql942.umbler.com:41890";
$db   = "tanque";
$user = "tanque";
$pass = "tanque2019";


// conecta ao banco de dados
$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR); 
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db, $con);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT * FROM categoria order by nome");
// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);


    // se o número de resultados for maior que zero, mostra os dados
    if($total > 0) {
        // inicia o loop que vai mostrar todos os dados
        do {

            //$vetor[] = $linha['nome'];
            $vetor[] = array_map('utf8_encode', $linha); 
     
        // finaliza o loop que vai mostrar os dados
        }
        while($linha = mysql_fetch_assoc($dados));
        
    }
    //echo json_encode($vetor); 
    die(json_encode($vetor));
  

mysql_free_result($dados);


?>
