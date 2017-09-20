<?php
			$mysqli = false;
			function connectDB() {
				global $mysqli;
				$mysqli = new mysqli("localhost", "domsipby", "Nai2haph", "domsipby_domsip");

if ($mysqli->connect_errno) {
    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
    exit();
}
				$mysqli->query("SET NAMES 'utf8'");
			}


			function getAllArticles() {
				global $mysqli;
				connectDB();
				$result_set = $mysqli->query("SELECT * FROM `projects` ORDER BY id DESC LIMIT 0,27");
				closeDB();
				return resultSetToArray($result_set);
			}

			function getArticle($id) {
				global $mysqli;
				connectDB();
				$result_set = $mysqli->query("SELECT * FROM `projects` WHERE `id` = '$id'");
				closeDB();
				return $result_set->fetch_assoc();
			}

			function resultSetToArray($result_set) {
				$array = array();
				while (($row = $result_set->fetch_assoc()) != false)
					$array[] = $row;
				return $array;
			}

			function closeDB() {
				global $mysqli;
				$mysqli->close();
			}
?>
