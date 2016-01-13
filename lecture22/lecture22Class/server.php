<?php

$response = [
    'employees' => [
        'firstname' => 'John' ,
        'lastname' => 'Dow',
        'active' => true
    ],
    [
        'firstname' => 'Jane' ,
        'lastname' => 'Dow',
        'active' => true
    ],
    [
    'firstname' => 'June' ,
    'lastname' => 'Dow',
    'active' => false
    ]
];

$active = 'all';

if (isset($_GET['active'])){
    $active = (bool) $_GET['active'];
}

if ($active != 'all'){
    $response['employees'] = array_filter($array, function($v) use ($active){
        return $v['active'] == $active;
    });
}

echo json_encode($response);