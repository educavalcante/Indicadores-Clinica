<html>
<head>
<script>
var synth = window.speechSynthesis;
var text = "Any text that should be spoken";
var ttsObject = new SpeechSynthesisUtterance(text);

ttsObject.ON-END = function(event) {
	console.log('Utterance has finished being spoken after ' + event.elapsedTime + ' milliseconds.');
}

ttsObject.ON-START = function(event) {
	console.log('We have started uttering this speech: ', event);
}

synth.speak(ttsObject);// Device will start to speak "Any text that should be spoken"
</script>
</head>
<body>
Any text that should be spoken
</body>