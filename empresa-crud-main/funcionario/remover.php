<?php//obvter o ID
$id= $_GET{'id'}
//criar o DELETE SQL
$sql = "delete from fun cinarios WHERE id = $id";
//EXECUTAR
include_once("../conexao.php");//conectar ao BD
$result=mysql_query($conexao,$sql);
//REdirecionar para o listar
if ($result)
{
    header("location:listar.php")
}
else
{
    $mysqli_error($conexao);
}