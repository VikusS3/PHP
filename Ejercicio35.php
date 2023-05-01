<?php

$url="https://api.dailymotion.com/videos?channel=sport&limit=10";

$opciones=array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false));

$respuesta=file_get_contents($url,false,stream_context_create($opciones));


$objRespuesta=json_decode($respuesta);

//print_r($objRespuesta);

foreach($objRespuesta->list as $video){
    //print_r($video->title."<br>");
    //print_r($video->channel."<br>");
}
?>

<ul>
    <?php foreach($objRespuesta->list as $video ){?>
        <li> <?php echo ($video->title."<br>"); ?> | <?php ($video->channel."<br>"); ?> </li>
    <?php }?>

</ul>