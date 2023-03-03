<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">

    <title>Speech synthesiser</title>

    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body>
    <form name="fala" method="get">
    <input type="hidden" class="txt" name="texto" value="Ailton ama o ex chefe Breno">
      <input type="hidden" min="0.5" max="2" value="0.5" step="0.1" id="rate">
      <input type="hidden" min="0" max="2" value="0.6" step="0.1" id="pitch">
    <select name="selecao">

    </select>
    <div class="controls">
      <button id="play" type="submit">Play</button>
    </div>
    </form>

    <script src="script.js"></script>
<script>
alert('asfd');
speak();
</script>
  </body>
</html>