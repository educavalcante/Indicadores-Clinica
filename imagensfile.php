<?php
    include 'sgbd/imagens.php';


$sql = "SELECT imagem, extensao FROM imagens where numero =0".$_GET['id'] ;



    foreach ($imagens->query($sql) as $row) {}
    $arquivo = $row['EXTENSAO'];

      switch(strtolower($arquivo)){
      // verifica a extensão do arquivo para pegar o tipo
         case "pdf": $tipo="application/pdf"; break;
         case "exe": $tipo="application/octet-stream"; break;
         case "zip": $tipo="application/zip"; break;
         case "doc": $tipo="application/msword"; break;
         case "xls": $tipo="application/vnd.ms-excel"; break;
         case "ppt": $tipo="application/vnd.ms-powerpoint"; break;
         case "gif": $tipo="image/gif"; break;
         case "png": $tipo="image/png"; break;
         case "jpg": $tipo="image/jpg"; break;
         case "mp3": $tipo="audio/mpeg"; break;
         case "php": // deixar vazio por seurança
         case "htm": // deixar vazio por seurança
         case "html": // deixar vazio por seurança
      }
      header("Content-Type: ".$tipo);
      //header('Content-type: application/pdf');
      print $row['IMAGEM'];
      // informa o tipo do arquivo ao navegador
      ///header("Content-Length: ".filesize($arquivo));
      // informa o tamanho do arquivo ao navegador
      ///header("Content-Disposition: attachment; filename=".date("Ymdhns").basename($arquivo));
      // informa ao navegador que é tipo anexo e faz abrir a janela de download,
      //tambem informa o nome do arquivo
      ///readfile($arquivo); // lê o arquivo
      exit; // aborta pós-ações
   
?>



?>