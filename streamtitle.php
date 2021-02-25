<?php

$stream = "http://localhost:8000/listen.ogg";
$data = getStreamTitle($stream);
$_content['cuerpo'] = $data;
echo $data;

function getStreamTitle($steam_url)
    {
        $result = false;
        $icy_metaint = -1;
        $needle = 'StreamTitle=';
        $ua = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.110 Safari/537.36';
        $opts = array(
            'http' => array(
                'method' => 'GET',
                'header' => 'Icy-MetaData: 1',
                'user_agent' => $ua
            )
        );
        $default = stream_context_set_default($opts);
        $stream = fopen($steam_url, 'r');
        $buffer = stream_get_contents($stream, 300, $icy_metaint);
        $titulo = preg_match("/.*=(.*)server=/", $buffer, $matches);
        $result = $matches[1];
        if($stream) fclose($stream);
        return $result;
    }


?>
