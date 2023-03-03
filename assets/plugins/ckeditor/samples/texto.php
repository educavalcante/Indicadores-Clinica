<?php
$fatura = new PDO("firebird:dbname=localhost:faturasf;charset=UTF-8", "SYSDBA", "ajuda");
$sql = "SELECT LAUDO FROM cpslaudo2 where codigocps2 = 33528";
foreach ($fatura->query($sql) as $row) {
}

?>
<html>
<head>
	<meta charset="utf-8">
	<title>CKEditor Sample</title>
	<script src="../ckeditor.js"></script>
	<script src="js/sample.js"></script>
	<link rel="stylesheet" href="css/samples.css">
	<link rel="stylesheet" href="toolbarconfigurator/lib/codemirror/neo.css">
</head>
<body>



<main>
				<div id="editor" height=600 width=200>
					<? print $row['LAUDO']; ?>
				</div>

</main>

<script>
	initSample();
</script>

</body>
</html>
