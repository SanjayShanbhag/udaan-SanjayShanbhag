<?php
	$q = $_POST['srch1'];
	$apiquery = "https://newsapi.org/v2/top-headlines?q=".$q."&apiKey=cd1db87dec794c2288c915ba6abeee94&country=in";
    $json = @file_get_contents($apiquery,0,null,null);
    $result = json_decode($json,true);
    $result = $result['articles'];
    $count1 = count($result);
    for($i=0; $i<$count1; $i++){
    	$result1 = $result[$i];
    	$title = $result1['title'];
    	$description = $result1['description'];
    	$url = $result1['url'];
    	$image = $result1['urlToImage'];
    	echo "<h3>".$title."</h3>";
    	echo "<br>";
    	echo "<img src='".$image."' style='width: 70px; height: 70px; float: left; margin-right: 10px;'>";
    	echo "<p>".$description."</p>";
    	echo "<p style='color: #636363;'>".$url."</p>";
    	echo "<hr>";
	}
?>