<?php  //error_reporting(E_ALL|E_NOTICE);   ?>

<!DOCTYPE html>

  <head>
    <meta charset="UTF-8" />
  </head>

  <body>

    <ul>
    <?php

		$url = 'http://www.theguardian.com/world/2014/may/10/michelle-obama-nigeria-schoolgirls-kidnapping-boko-haram';
		$format = 'json';

		include "./alchemy/AlchemyAPI_CURL.php";
		include "./alchemy/AlchemyAPIParams.php";


		$alchemyObj = new AlchemyAPI();
		$alchemyObj->loadAPIKey("api_key.txt");

		echo '<h1>Entities</h1>';
        	$entities = $alchemyObj->URLGetRankedNamedEntities($url, $format);
          	print_r( $entities );

		echo '<h1>Keywords</h1>';
        	$keywords = $alchemyObj->URLGetRankedKeywords($url, $format);
          	print_r( $keywords );

    ?>
	</ul>
	  
	</body>
</html>