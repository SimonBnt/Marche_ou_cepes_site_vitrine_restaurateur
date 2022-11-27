<?php

require_once "./inc/configDb.php";

function isDisheValid($dishe = array()) {
    if($dishe && count($dishe) 
        && array_key_exists('title', $dishe) 
            && array_key_exists('description', $dishe) 
                && array_key_exists('category', $dishe)
                    && !empty($dishe['title']) 
                        && !empty($dishe['description']) 
                            && !empty($dishe['category']))
    return true;
}


function addDisheToDb($title, $description, $category){

	global $pdo;
		
	$dishe = array(
		'title' => htmlspecialchars($title),
		'description' => htmlspecialchars($description),
		'category' => htmlspecialchars($category),
	);

	try {
		$sql = "INSERT INTO dishes (title, description, category) VALUES (:title, :description, :category);";
		$stmt = $pdo->prepare($sql);
		$stmt->bindParam('title', $dishe['title']);
		$stmt->bindParam('description', $dishe['description']);
		$stmt->bindParam('category', $dishe['category']);
		$stmt->execute();
		return $pdo->lastInsertId();

	} catch (PDOException $error) {
		return [$error->getCode()];
	}
}