<? 

?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">

    <title>Speech synthesiser</title>

    <link rel="stylesheet" href="style.css">
    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<script>
function speak(){
  var synth = window.speechSynthesis;
var voices = [];
<?
 if (isset($_session['fala']) && ($_session['fala'] != "")) $textofala = $_session['fala']; else $textofala = $_GET["texto"];
 
 ?>
    if (synth.speaking) {
        console.error('speechSynthesis.speaking');
        return;
    }
    var utterThis = new SpeechSynthesisUtterance("<? print $textofala ?>");
    utterThis.onend = function (event) {
        console.log('SpeechSynthesisUtterance.onend');
    }
    utterThis.onerror = function (event) {
        console.error('SpeechSynthesisUtterance.onerror');
    }
    utterThis.voice = voices[2];
    utterThis.pitch = 0.9;
    utterThis.rate = 0.9;
    synth.speak(utterThis);
  
}
speak();
</script>
</head>
<body>

</body>
</html>