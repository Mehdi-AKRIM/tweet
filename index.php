<?php
/*---------------------------------------------------------------*/
/*
    Titre : Connexion à l'API de Twitter

    URL   : https://phpsources.net/code_s.php?id=1116
    Date édition     : 30 Sept 2019
    Date mise à jour : 06 Oct 2019
    Rapport de la maj:
    - fonctionnement du code vérifié
*/
/*---------------------------------------------------------------*/

require "vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
define("CONSUMER_KEY","0Gni4jZC00VPGV1jsiguORG7W");    // Key
define("CONSUMER_SECRET","Vbmga4IVvUvmwWzyMtaagoJpc5lpAaB8jiA8R8WBtx1DuHN3OT"); // key secret
$access_token = "1090629507374039041-HjDfHpKYlN3TiXVLe9gAX1kTLAILXt";           // token
$access_token_secret = "7j1sMQek1K6LkmnDYCipL57kBVQRAoywZFxh4ZHo8ffA3";    // toekn secret

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token,
    $access_token_secret);

$TwitterAppName = ""; // Twitter App Name
$NombreDeTweets = 100;  // Le nombre de tweets a remonter

// on va lire quelques tweets
$tweets = $connection->get('search/tweets', ['q'=> '#Balancetontiktokeur OR #tiktok','lang' =>'fr', 'count' => $NombreDeTweets]);

file_put_contents('tweets.json', json_encode($tweets));

?>