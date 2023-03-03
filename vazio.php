
            <!-- =============================================== -->
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
<?php

$dbh = new PDO("firebird:dbname=localhost:fatura", "SYSDBA", "ajuda");

$sql = 'SELECT codigo, a_nome, email FROM usuarios';


foreach ($dbh->query($sql) as $row) {
    print $row['A_NOME'] . "\t";
    print $row['CODIGO'] . "\t";
    print $row['EMAIL'] . "\n";
}
?>
            </div> <!-- /.content-wrapper -->
