<?php

require "vendor/autoload.php";

use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;

$data = json_decode(file_get_contents("php://input"));

$text = $data->text;

$client = new Client("AIzaSyAYagEngadYb5hv0PYgtiTSjsUkReu0mm0");

$respose = $client->geminiPro()->generateContent(
    new TextPart($text),
);

echo $respose->text();
