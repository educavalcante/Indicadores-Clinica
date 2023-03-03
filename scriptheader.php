
    <meta charset="utf-8"><!-- meta --> 
    <meta http-equiv="CONTENT-LANGUAGE" content="Portuguese" /><!-- Linguagem --> 
    <meta name="copyright" content="CPC Brasil Sistemas" /><!-- Direitos --> 
    <meta name="title" content="CPC Brasil Sistemas" /><!-- titulo --> 
    <meta name="author" content="CPC Brasil Sistemas" /><!-- autor --> 
    <meta name="description" content="CPC Brasil Sistemas" /><!-- descricao--> 
    <meta name="keywords" content="CPC Brasil Sistemas" /><!-- palavra-chave --> 
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="assets/css/cpc.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/icons-1.8.1\font\bootstrap-icons.css">
    
    
    <link rel="stylesheet" href="assets//jquery.mobile/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="assets/DataTables/dataTables.min.css">
    
    <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
    <title>SAPI - CPC Brasil Sistemas</title>
    <script>


        const pageAccessedByReload = (
        (window.performance.navigation && window.performance.navigation.type === 1) ||
            window.performance
            .getEntriesByType('navigation')
            .map((nav) => nav.type)
            .includes('reload')
        );
        if (pageAccessedByReload) alert("Pagina atualizada manualmente. Tela inicial será carregada");

    </script>
    <!-- Modal -->
    <div id="myModal" class="modal">
        <div id="result" class="modal-content"></div>
    </div>

