<?php


$one = '#' . str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT) .
    str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT) .
    str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);

$two = '#' . str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT) .
    str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT) .
    str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);

$three = '#' . str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT) .
    str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT) .
    str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);

$response = [
    'colors' => [
    $one,
    $two,
    $three
]];
echo json_encode($response);