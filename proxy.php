<?php
	if(isset($_GET["pageId"])){
		//$json = file_get_contents('http://localhost:8888/laurikatajisto/api/published_json/'.$_GET["pageId"].'.json');
		$json = file_get_contents('http://laurikatajisto.com/api/published_json/'.$_GET["pageId"].'.json');
		print($json);
	}
?>
