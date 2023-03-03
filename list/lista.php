<?
    include "../sgbd/fatura.php";
    if ($_GET['tipo'] == 'convenio') $sql = "select convenio CAMPO1, a_nome CAMPO2 from convenio order by a_nome";
    else if ($_GET['tipo'] == 'plano') $sql = "select codigo CAMPO1, descricao CAMPO2 from convplano where convenio = 1 order by descricao";
    else if ($_GET['tipo'] == 'medico') $sql = "select a_medicos CAMPO1, a_nome CAMPO2 from medicos order by a_nome";
    print "{";
        $qtde = 0;
    foreach ($fatura->query($sql) as $rowlist) {
        $qtde++;
        if ($qtde > 1)
        print ",";
        print '"'.$rowlist['CAMPO1'].'" : "'.$rowlist['CAMPO2'].'"';
    } 

    print "}";
?>