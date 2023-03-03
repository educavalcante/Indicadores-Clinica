<?php
    include 'sgbd/fatura.php';


$sql = "SELECT * FROM pacsfiles('".$_GET['patid']."')" ;
?>

<!DOCTYPE html>
<html>
<title>Visualizador PACS Jpg</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<style>
.mySlides {display:none;}
</style>
<body>

<h2 class="w3-center">Visualizador PACS Jpg</h2>

<div class="w3-content w3-display-container">
<?
foreach ($fatura->query($sql) as $row) {
  ?>
  <img class="mySlides" src="http://192.168.43.110:8080/wado?requestType=WADO&studyUID=<? print $row['STUDYUID'] ?>&seriesUID=<? print $row['SERIESUID'] ?>&objectUID=<? print $row['OBJECTUID'] ?>&columns=128" style="width:50%">
<? } ?>

<!--  <img class="mySlides" src="img_lights.jpg" style="width:100%">
<img class="mySlides" src="http://192.168.43.110:8080/wado?requestType=WADO&studyUID=1.2.392.200036.9116.2.6.1.16.1613471601.1611023751.338069&seriesUID=1.2.392.200036.9116.2.6.1.16.1613471601.1611024268.51475&objectUID=1.2.392.200036.9116.2.6.1.16.1613471601.1611024276.74850&columns=128" style="width:50%">

<img class="mySlides" src="img_mountains.jpg" style="width:100%">
  <img class="mySlides" src="img_forest.jpg" style="width:100%">
  <img class="mySlides" src="img_mountains.jpg" style="width:100%">
-->
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>