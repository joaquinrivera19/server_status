<?php

function ping($host,$port=80,$timeout=6)
{
        $fsock = fsockopen($host, $port, $errno, $errstr, $timeout);
        if ( ! $fsock )
        {
                return FALSE;
        }
        else
        {
                return TRUE;
        }
}


$host1 = '172.30.43.899';
$up1 = ping($host1);

$host2 = '172.30.43.49';
$up2 = ping($host2);

$host3 = 'iplan1.agd.com.ar';
$up3 = ping($host3);


if($up1) {
        //header('Location: http://'.$host);
        $resultado = $host1;
        echo $host1;
}else {
        if($up2) {
                $resultado = $host2;
                echo $host2;
        }else {
                if($up3){
                        $resultado = $host3;
                        echo $host3;
                }else {
                        $resultado = 'ninguna conexion funciona';
                        echo 'ninguna conexion funciona';
                }
        }
}


$file = fopen("/home/apps/server/resultado.txt", "w");
fwrite($file, $resultado);
fclose($file);


?>