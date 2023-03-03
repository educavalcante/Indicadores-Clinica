<html>
<head>
<script type="text/javascript">
  var u = new SpeechSynthesisUtterance();
  u.text = 'Arnaldo Neto fala em portugues';
  u.lang = 'en-US';
  u.rate = 1.2;
  u.onend = function(event) { alert('Finished in ' + event.elapsedTime + ' seconds.'); }
  speechSynthesis.speak(u);
</script>

<select id="select"></select>
<button onclick="start()">Click to Speak</button>
</body>