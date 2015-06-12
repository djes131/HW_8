<?php
function createMenu($arrayMenu) {
	if (!is_array($arrayMenu) || !count($arrayMenu)) {
		return;
	}
	echo '<ul>';
	foreach ($arrayMenu as $key => $value) {
		echo '<li>'."<a href='category.php?id={$key}'>";
		echo $value;
		echo '</a></li>';
	}
	echo '</ul>';
}


function getAllCategories() {
	$link = mysqli_connect("localhost","root","","users") or die("Error " . mysqli_error($link)); 
	$result = array();
	
	$query = "SELECT id, name FROM categorias" 
		or die("Error in the consult.." 
			. mysqli_error($link)); 
	$queryResult = $link->query($query); 

	while($row = mysqli_fetch_array($queryResult)) { 
	  $result[$row['id']] = $row["name"]; 
	} 

	return $result;
}
