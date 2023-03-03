<html>
    <head>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
	<style type="text/css" class="init">
	
	</style>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
	<!--<script type="text/javascript" language="javascript" src="../resources/demo.js"></script>-->
	<script type="text/javascript" class="init">
	

    $(document).ready(function() {
    $('#example').DataTable( {
        "paging":   true,
        "ordering": true,
        "info":     true,
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "teste.php",
            "type": "POST"
        },
        "columns": [
            { "data": "INDICE" },
            { "data": "ESTADO" },
            { "data": "NOME" },
            { "data": "CPF" },
            { "data": "UF" },
            { "data": "ESTADO" }
        ]
    } );
} );
	</script>    
</head>
<body>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>TIPOCONSELHO</th>
                <th>ESTADO</th>
                <th>NOME</th>
                <th>CPF</th>
                <th>UF</th>
                <th>ESTADO</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
            <th>TIPOCONSELHO</th>
                <th>ESTADO</th>
                <th>NOME</th>
                <th>CPF</th>
                <th>UF</th>
                <th>ESTADO</th>
            </tr>
        </tfoot>
    </table>    
</body>
</html>