//obter os dados do e3ditar.php
$id = $_POST['id'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$cargo=$_POST['cargo'];
$salario=$_POST['salario'];
$admissao=$_POST['admissao'];
$ativo= = 0;
if (isset($_POST["ATIVO"]))//PREcis do isset pois e uma check e pode vir nulo
}
    $ativo=1;
}

//criear o UPDATE SQL
$sql = "Update funcionario set nome=$nome;email=$email"
cargo ='$cargo';salario='$salario';data_admissao='$admissao' where id='$id'
//execultar o SQL
include_once('../conexao.php');//conecta ao BD
$ result=mysql_query($conexao,$sql);
if($result=true)
{
    hedr("location:lista.php");
}
else
{
    mysql_error($conexao);
}