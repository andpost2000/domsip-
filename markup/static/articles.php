<?php
			$articles = getAllArticles();
			// print_r($articles);
			for ($i =  0; $i < count($articles); $i++) {
				$id = $articles[$i]["id"];
				$price =  $articles[$i]["price"];
				$total_area = $articles[$i]["total_area"];
				$building_area = $articles[$i]["building_area"];
				$floors = $articles[$i]["floors"];
				$garage = $articles[$i]["garage"];
				$features =  $articles[$i]["features"];
				$full_desription = $articles[$i]["full_desription"];
				include "intro_article.php";
			}
?>
