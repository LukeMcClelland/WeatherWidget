<!DOCTYPE html>
<html lang = "en">

<head>
<meta charset="utf-8"/>
<title>Weather</title>
<link rel="stylesheet" type="text/css" href="weather.css"> 
</head>

<body class = "weather">
<div class = "weather"></div> 
<script src = "https://classes.engineering.wustl.edu/cse330/content/weather_json.php">
//Code from https://stackoverflow.com/questions/48386202/using-callback-to-print-json-data
function fetchWeather(){
   getData();
   function getData(data){
   $.ajax({
      url: "https://classes.engineering.wustl.edu/cse330/content/weather_json.php",
      type: "GET",
      dataType = "json",
      success: displayData,
   });
   }
   function displayData(){
      requestJson (showData);
      function showData (jsonData){
         $(".output").append(jsonData);
   }
}
}
</script>
bruh hellloooooo
<div class= "weather" id="weatherWidget">
	<div class="weather-loc"></div>
	<div class="weather-humidity"></div>
	<div class="weather-temp"></div>
	<img class="weather-tomorrow" />
	<img class="weather-dayaftertomorrow" />
</div>
</body>

</html>