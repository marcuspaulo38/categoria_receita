<?php
header("Access-Control-Allow-Origin: *");

$host = "mysql942.umbler.com:41890";
$db   = "tanque";
$user = "tanque";
$pass = "tanque2019";

$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db($db, $con);
$query = sprintf("SELECT * FROM receita");
$dados = mysql_query($query, $con) or die(mysql_error());
$linha = mysql_fetch_assoc($dados);
$total = mysql_num_rows($dados);

    if($total > 0) {
        do {
           $vetor[] = array_map('utf8_encode', $linha); 
        }
        while($linha = mysql_fetch_assoc($dados)); 
    }
    die(json_encode($vetor));

mysql_free_result($dados);

?>
