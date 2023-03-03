<?php
    include 'sgbd/fatura.php';

$zip = new ZipArchive();
$filename = "c:/pacs/".$_GET['patid'].".zip";
set_time_limit(90000);
if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
    exit("cannot open <$filename>\n");
}

//$zip->addFromString("testfilephp.txt" . time(), "#1 This is a test string added as testfilephp.txt.\n");
//$zip->addFromString("testfilephp2.txt" . time(), "#2 This is a test string added as testfilephp2.txt.\n");
//$zip->addFile($thisdir . "/too.php","/testfromfile.php");
//$zip->addFile("C:/Antigo/dcm4chee-arc-5.23.2-firebird.zip");
//$zip->addEmptyDir("C:/xampp/htdocs/21/3C002AFD/584B2837/");
$sql = "SELECT * FROM pacsfiles('".$_GET['patid']."')" ;


$zip->addFile("C:/pacs/weasis/Autorun.inf","Autorun.inf");
$zip->addFile("C:/pacs/weasis/Licence.txt","Licence.txt");
$zip->addFile("C:/pacs/weasis/Readme.txt","Readme.txt");
$zip->addFile("C:/pacs/weasis/viewer-linux.sh","viewer-linux.sh");
$zip->addFile("C:/pacs/weasis/viewer-win32.exe","viewer-win32.exe");
$zip->addFile("C:/pacs/weasis/viewer-win32.l4j.ini","viewer-win32.l4j.ini");
$zip->addFile("C:/pacs/weasis/viewer-mac.app/Contents/Info.plist","viewer-mac.app/Contents/Info.plist");
$zip->addFile("C:/pacs/weasis/viewer-mac.app/Contents/MacOS/viewer-mac.sh","viewer-mac.app/Contents/MacOS/viewer-mac.sh");
$zip->addFile("C:/pacs/weasis/viewer-mac.app/Contents/MacOS/failure.app/Contents/Info.plist","viewer-mac.app/Contents/MacOS/failure.app/Contents/Info.plist");
$zip->addFile("C:/pacs/weasis/viewer-mac.app/Contents/MacOS/failure.app/Contents/PkgInfo","viewer-mac.app/Contents/MacOS/failure.app/Contents/PkgInfo");
$zip->addFile("C:/pacs/weasis/viewer-mac.app/Contents/MacOS/failure.app/Contents/MacOS/applet","viewer-mac.app/Contents/MacOS/failure.app/Contents/MacOS/applet");
$zip->addFile("C:/pacs/weasis/viewer-mac.app/Contents/MacOS/failure.app/Contents/Resources/applet.icns","viewer-mac.app/Contents/MacOS/failure.app/Contents/Resources/applet.icns");
$zip->addFile("C:/pacs/weasis/viewer-mac.app/Contents/MacOS/failure.app/Contents/Resources/applet.rsrc","viewer-mac.app/Contents/MacOS/failure.app/Contents/Resources/applet.rsrc");
$zip->addFile("C:/pacs/weasis/viewer-mac.app/Contents/MacOS/failure.app/Contents/Resources/description.rtfd/TXT.rtf","viewer-mac.app/Contents/MacOS/failure.app/Contents/Resources/description.rtfd/TXT.rtf");
$zip->addFile("C:/pacs/weasis/viewer-mac.app/Contents/MacOS/failure.app/Contents/Resources/Scripts/main.scpt","viewer-mac.app/Contents/MacOS/failure.app/Contents/Resources/Scripts/main.scpt");
$zip->addFile("C:/pacs/weasis/viewer-mac.app/Contents/Resources/logo-button.icns","viewer-mac.app/Contents/Resources/logo-button.icns");
$zip->addFile("C:/pacs/weasis/weasis/felix.jar","weasis/felix.jar");
$zip->addFile("C:/pacs/weasis/weasis/felix.jar.pack.gz","weasis/felix.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/substance.jar","weasis/substance.jar");
$zip->addFile("C:/pacs/weasis/weasis/substance.jar.pack.gz","weasis/substance.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/weasis-launcher.jar","weasis/weasis-launcher.jar");
$zip->addFile("C:/pacs/weasis/weasis/weasis-launcher.jar.pack.gz","weasis/weasis-launcher.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/docking-frames-1.1.2-P20c.jar.pack.gz","weasis/bundle/docking-frames-1.1.2-P20c.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/javax.json-1.0.4.jar.pack.gz","weasis/bundle/javax.json-1.0.4.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/org.apache.felix.bundlerepository-2.0.10.jar.pack.gz","weasis/bundle/org.apache.felix.bundlerepository-2.0.10.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/org.apache.felix.configadmin-1.9.6.jar.pack.gz","weasis/bundle/org.apache.felix.configadmin-1.9.6.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/org.apache.felix.gogo.command-1.0.2.jar.pack.gz","weasis/bundle/org.apache.felix.gogo.command-1.0.2.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/org.apache.felix.gogo.runtime-1.1.0.jar.pack.gz","weasis/bundle/org.apache.felix.gogo.runtime-1.1.0.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/org.apache.felix.gogo.shell-1.1.0.jar.pack.gz","weasis/bundle/org.apache.felix.gogo.shell-1.1.0.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/org.apache.felix.metatype-1.2.2.jar.pack.gz","weasis/bundle/org.apache.felix.metatype-1.2.2.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/org.apache.felix.prefs-1.1.0.jar.pack.gz","weasis/bundle/org.apache.felix.prefs-1.1.0.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/org.apache.felix.scr-2.1.8.jar.pack.gz","weasis/bundle/org.apache.felix.scr-2.1.8.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/org.apache.sling.commons.log-3.0.2-r3.jar.pack.gz","weasis/bundle/org.apache.sling.commons.log-3.0.2-r3.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/repository.xml","weasis/bundle/repository.xml");
$zip->addFile("C:/pacs/weasis/weasis/bundle/slf4j-api-1.7.25.jar.pack.gz","weasis/bundle/slf4j-api-1.7.25.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/vecmath-1.5.2.jar.pack.gz","weasis/bundle/vecmath-1.5.2.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/weasis-acquire-editor-3.0.4.jar.pack.gz","weasis/bundle/weasis-acquire-editor-3.0.4.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/weasis-acquire-explorer-3.0.4.jar.pack.gz","weasis/bundle/weasis-acquire-explorer-3.0.4.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/weasis-base-explorer-3.0.4.jar.pack.gz","weasis/bundle/weasis-base-explorer-3.0.4.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/weasis-base-ui-3.0.4.jar.pack.gz","weasis/bundle/weasis-base-ui-3.0.4.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/weasis-base-viewer2d-3.0.4.jar.pack.gz","weasis/bundle/weasis-base-viewer2d-3.0.4.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/weasis-core-api-3.0.4.jar.pack.gz","weasis/bundle/weasis-core-api-3.0.4.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/weasis-core-ui-3.0.4.jar.pack.gz","weasis/bundle/weasis-core-ui-3.0.4.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/weasis-dicom-au-3.0.4.jar.pack.gz","weasis/bundle/weasis-dicom-au-3.0.4.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/weasis-dicom-codec-3.0.4.jar.pack.gz","weasis/bundle/weasis-dicom-codec-3.0.4.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/weasis-dicom-explorer-3.0.4.jar.pack.gz","weasis/bundle/weasis-dicom-explorer-3.0.4.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/weasis-dicom-qr-3.0.4.jar.pack.gz","weasis/bundle/weasis-dicom-qr-3.0.4.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/weasis-dicom-rt-3.0.4.jar.pack.gz","weasis/bundle/weasis-dicom-rt-3.0.4.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/weasis-dicom-send-3.0.4.jar.pack.gz","weasis/bundle/weasis-dicom-send-3.0.4.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/weasis-dicom-sr-3.0.4.jar.pack.gz","weasis/bundle/weasis-dicom-sr-3.0.4.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/weasis-dicom-viewer2d-3.0.4.jar.pack.gz","weasis/bundle/weasis-dicom-viewer2d-3.0.4.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/weasis-dicom-wave-3.0.4.jar.pack.gz","weasis/bundle/weasis-dicom-wave-3.0.4.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/weasis-imageio-codec-3.0.4.jar.pack.gz","weasis/bundle/weasis-imageio-codec-3.0.4.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/weasis-opencv-core-3.0.4.jar.pack.gz","weasis/bundle/weasis-opencv-core-3.0.4.jar.pack.gz");
$zip->addFile("C:/pacs/weasis/weasis/bundle/weasis-opencv-core-linux-x86-4.0.0-dcmR3.jar","weasis/bundle/weasis-opencv-core-linux-x86-4.0.0-dcmR3.jar");
$zip->addFile("C:/pacs/weasis/weasis/bundle/weasis-opencv-core-linux-x86-64-4.0.0-dcmR3.jar","weasis/bundle/weasis-opencv-core-linux-x86-64-4.0.0-dcmR3.jar");
$zip->addFile("C:/pacs/weasis/weasis/bundle/weasis-opencv-core-macosx-x86-64-4.0.0-dcmR3.jar","weasis/bundle/weasis-opencv-core-macosx-x86-64-4.0.0-dcmR3.jar");
$zip->addFile("C:/pacs/weasis/weasis/bundle/weasis-opencv-core-windows-x86-4.0.0-dcmR3.jar","weasis/bundle/weasis-opencv-core-windows-x86-4.0.0-dcmR3.jar");
$zip->addFile("C:/pacs/weasis/weasis/bundle/weasis-opencv-core-windows-x86-64-4.0.0-dcmR3.jar","weasis/bundle/weasis-opencv-core-windows-x86-64-4.0.0-dcmR3.jar");
$zip->addFile("C:/pacs/weasis/weasis/bundle-i18n/buildNumber.properties","weasis/bundle-i18n/buildNumber.properties");
$zip->addFile("C:/pacs/weasis/weasis/bundle-i18n/Readme.txt","weasis/bundle-i18n/Readme.txt");
$zip->addFile("C:/pacs/weasis/weasis/bundle-i18n/weasis-acquire-editor-i18n-2.0.0.jar","weasis/bundle-i18n/weasis-acquire-editor-i18n-2.0.0.jar");
$zip->addFile("C:/pacs/weasis/weasis/bundle-i18n/weasis-acquire-explorer-i18n-2.0.0.jar","weasis/bundle-i18n/weasis-acquire-explorer-i18n-2.0.0.jar");
$zip->addFile("C:/pacs/weasis/weasis/bundle-i18n/weasis-base-explorer-i18n-2.0.0.jar","weasis/bundle-i18n/weasis-base-explorer-i18n-2.0.0.jar");
$zip->addFile("C:/pacs/weasis/weasis/bundle-i18n/weasis-base-ui-i18n-2.0.0.jar","weasis/bundle-i18n/weasis-base-ui-i18n-2.0.0.jar");
$zip->addFile("C:/pacs/weasis/weasis/bundle-i18n/weasis-base-viewer2d-i18n-2.0.0.jar","weasis/bundle-i18n/weasis-base-viewer2d-i18n-2.0.0.jar");
$zip->addFile("C:/pacs/weasis/weasis/bundle-i18n/weasis-core-api-i18n-2.0.0.jar","weasis/bundle-i18n/weasis-core-api-i18n-2.0.0.jar");
$zip->addFile("C:/pacs/weasis/weasis/bundle-i18n/weasis-core-ui-i18n-2.0.0.jar","weasis/bundle-i18n/weasis-core-ui-i18n-2.0.0.jar");
$zip->addFile("C:/pacs/weasis/weasis/bundle-i18n/weasis-dicom-au-i18n-2.0.0.jar","weasis/bundle-i18n/weasis-dicom-au-i18n-2.0.0.jar");
$zip->addFile("C:/pacs/weasis/weasis/bundle-i18n/weasis-dicom-codec-i18n-2.0.0.jar","weasis/bundle-i18n/weasis-dicom-codec-i18n-2.0.0.jar");
$zip->addFile("C:/pacs/weasis/weasis/bundle-i18n/weasis-dicom-explorer-i18n-2.0.0.jar","weasis/bundle-i18n/weasis-dicom-explorer-i18n-2.0.0.jar");
$zip->addFile("C:/pacs/weasis/weasis/bundle-i18n/weasis-dicom-qr-i18n-2.0.0.jar","weasis/bundle-i18n/weasis-dicom-qr-i18n-2.0.0.jar");
$zip->addFile("C:/pacs/weasis/weasis/bundle-i18n/weasis-dicom-send-i18n-2.0.0.jar","weasis/bundle-i18n/weasis-dicom-send-i18n-2.0.0.jar");
$zip->addFile("C:/pacs/weasis/weasis/bundle-i18n/weasis-dicom-sr-i18n-2.0.0.jar","weasis/bundle-i18n/weasis-dicom-sr-i18n-2.0.0.jar");
$zip->addFile("C:/pacs/weasis/weasis/bundle-i18n/weasis-dicom-viewer2d-i18n-2.0.0.jar","weasis/bundle-i18n/weasis-dicom-viewer2d-i18n-2.0.0.jar");
$zip->addFile("C:/pacs/weasis/weasis/conf/config.properties","weasis/conf/config.properties");
$zip->addFile("C:/pacs/weasis/weasis/conf/ext-config.properties","weasis/conf/ext-config.properties");
$zip->addFile("C:/pacs/weasis/weasis/conf/ext-dicomizer.properties","weasis/conf/ext-dicomizer.properties");
$zip->addFile("C:/pacs/weasis/weasis/resources/attributes-view.xml","weasis/resources/attributes-view.xml");
$zip->addFile("C:/pacs/weasis/weasis/resources/dicomCallingNodes.xml","weasis/resources/dicomCallingNodes.xml");
$zip->addFile("C:/pacs/weasis/weasis/resources/presets.xml","weasis/resources/presets.xml");
$zip->addFile("C:/pacs/weasis/weasis/resources/series-splitting-rules.xml","weasis/resources/series-splitting-rules.xml");
$zip->addFile("C:/pacs/weasis/weasis/resources/store-tcs.properties.sample","weasis/resources/store-tcs.properties.sample");
$zip->addFile("C:/pacs/weasis/weasis/resources/images/about.png","weasis/resources/images/about.png");
$zip->addFile("C:/pacs/weasis/weasis/resources/images/logo-button.png","weasis/resources/images/logo-button.png");
$zip->addFile("C:/pacs/weasis/weasis/resources/luts/Cardiac.txt","weasis/resources/luts/Cardiac.txt");
$zip->addFile("C:/pacs/weasis/weasis/resources/luts/Fire.txt","weasis/resources/luts/Fire.txt");
$zip->addFile("C:/pacs/weasis/weasis/resources/luts/Flow.txt","weasis/resources/luts/Flow.txt");
$zip->addFile("C:/pacs/weasis/weasis/resources/luts/GE Color.txt","weasis/resources/luts/GE Color.txt");
$zip->addFile("C:/pacs/weasis/weasis/resources/luts/Gray Rainbow.txt","weasis/resources/luts/Gray Rainbow.txt");
$zip->addFile("C:/pacs/weasis/weasis/resources/luts/Hot Green.txt","weasis/resources/luts/Hot Green.txt");
$zip->addFile("C:/pacs/weasis/weasis/resources/luts/Hot Iron.txt","weasis/resources/luts/Hot Iron.txt");
$zip->addFile("C:/pacs/weasis/weasis/resources/luts/Hot Metal.txt","weasis/resources/luts/Hot Metal.txt");
$zip->addFile("C:/pacs/weasis/weasis/resources/luts/Hue 1.txt","weasis/resources/luts/Hue 1.txt");
$zip->addFile("C:/pacs/weasis/weasis/resources/luts/Hue 2.txt","weasis/resources/luts/Hue 2.txt");
$zip->addFile("C:/pacs/weasis/weasis/resources/luts/Ice.txt","weasis/resources/luts/Ice.txt");
$zip->addFile("C:/pacs/weasis/weasis/resources/luts/Ired.txt","weasis/resources/luts/Ired.txt");
$zip->addFile("C:/pacs/weasis/weasis/resources/luts/NIH.txt","weasis/resources/luts/NIH.txt");
$zip->addFile("C:/pacs/weasis/weasis/resources/luts/Rainbow 1.txt","weasis/resources/luts/Rainbow 1.txt");
$zip->addFile("C:/pacs/weasis/weasis/resources/luts/Rainbow 2.txt","weasis/resources/luts/Rainbow 2.txt");
$zip->addFile("C:/pacs/weasis/weasis/resources/luts/Rainbow 3.txt","weasis/resources/luts/Rainbow 3.txt");
$zip->addFile("C:/pacs/weasis/weasis/resources/luts/Rainbow 4.txt","weasis/resources/luts/Rainbow 4.txt");
$zip->addFile("C:/pacs/weasis/weasis/resources/luts/Rainbow 5.txt","weasis/resources/luts/Rainbow 5.txt");
$zip->addFile("C:/pacs/weasis/weasis/resources/luts/Ratio.txt","weasis/resources/luts/Ratio.txt");
$zip->addFile("C:/pacs/weasis/weasis/resources/luts/Spectrum.txt","weasis/resources/luts/Spectrum.txt");
$zip->addFile("C:/pacs/weasis/weasis/resources/luts/Stern.txt","weasis/resources/luts/Stern.txt");
$zip->addFile("C:/pacs/weasis/weasis/resources/luts/Ucla.txt","weasis/resources/luts/Ucla.txt");
$zip->addFile("C:/pacs/weasis/weasis/resources/luts/VR Bones.txt","weasis/resources/luts/VR Bones.txt");
$zip->addFile("C:/pacs/weasis/weasis/resources/luts/VR Muscles-Bones.txt","weasis/resources/luts/VR Muscles-Bones.txt");
$zip->addFile("C:/pacs/weasis/weasis/resources/luts/VR Red Vessels.txt","weasis/resources/luts/VR Red Vessels.txt");

    foreach ($fatura->query($sql) as $row) {
        $zip->addFile($row['CAMINHO'],$row['CAMINHOZIP']);
    }

$zip->close();

$arquivo = $filename;
   if(isset($arquivo) && file_exists($arquivo)){
   // faz o teste se a variavel não esta vazia e se o arquivo realmente existe
      switch(strtolower(substr(strrchr(basename($arquivo),"."),1))){
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
      // informa o tipo do arquivo ao navegador
      header("Content-Length: ".filesize($arquivo));
      // informa o tamanho do arquivo ao navegador
      header("Content-Disposition: attachment; filename=".date("Ymdhns").basename($arquivo));
      // informa ao navegador que é tipo anexo e faz abrir a janela de download,
      //tambem informa o nome do arquivo
      readfile($arquivo); // lê o arquivo
      exit; // aborta pós-ações
   }
?>



?>