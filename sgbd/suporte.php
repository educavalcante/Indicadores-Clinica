<?php
//$fatura = new PDO("firebird:dbname=177.21.19.159/1085:faturasf;charset=UTF-8", "SYSDBA", "ajuda");
$suporte = new PDO("firebird:dbname=localhost:suporte;charset=UTF-8", "SYSDBA", "ajuda");
if ((isset($_POST['tipo'])) || (isset($_GET['delid'])))
{
    $dmllog = "select * from logvariavel('CPC Web','1.0.0.0',".$_SESSION['ID_CPC']."); ";
    foreach ($fatura->query($dmllog) as $rowlog) {}
}
?>