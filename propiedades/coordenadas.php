<?php

function getGps($exifCoord, $hemi) {

    $degrees = count($exifCoord) > 0 ? gps2Num($exifCoord[0]) : 0;
    $minutes = count($exifCoord) > 1 ? gps2Num($exifCoord[1]) : 0;
    $seconds = count($exifCoord) > 2 ? gps2Num($exifCoord[2]) : 0;

    $flip = ($hemi == 'W' or $hemi == 'S') ? -1 : 1;

    return $flip * ($degrees + $minutes / 60 + $seconds / 3600);

}

function gps2Num($coordPart) {

    $parts = explode('/', $coordPart);

    if (count($parts) <= 0)
        return 0;

    if (count($parts) == 1)
        return $parts[0];

    return floatval($parts[0]) / floatval($parts[1]);
}
    

function proximidad($long1, $lat1, $long2, $lat2) {
    $theta = $long1 - $long2;
    $distancia = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
    $distancia = acos($distancia);
    $distancia = rad2deg($distancia);
    $kms = $distancia * 111.18957696; //Distancia devuelta en kilometros
    return $kms;
}
    
function cercania($long1, $lat1, $long2, $lat2, $dist) {
    $bool = false;
    $distancia = proximidad($long1, $lat1, $long2, $lat2);
    if ($distancia <= $dist) {
        $bool = true;
    }
    return $bool;
}
    
function onGoogleMaps($long, $lat) {
    return new google.maps.LatLng($long, $lat);
}
?>