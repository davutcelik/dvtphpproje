<html>
<body>
<style>
div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 300px;
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 300px;
    height: 200px;
}

div.desc {
    padding: 5px;
    text-align: center;
}
</style>
<?php

$dizindekidosyalar = scandir("images/");
	$ekle = array_slice($dizindekidosyalar,2);
	shuffle($ekle);
	for($i=0;$i<count($ekle);$i++){		
		echo '<div class="img">';
		echo '<a target="_blank" href="images'.$ekle[$i].'">';
		echo '<img src="images/'.$ekle[$i].'" alt="'.$ekle[$i].'" width="300" height="200">';
		echo '</a>';
		echo '</div>';
		}
?>
</body>
</html>