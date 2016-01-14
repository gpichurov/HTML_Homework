<?php
$response = [
    'people' => [
        [
            'name' => 'Georgi',
            'picture' => 'images/img01.jpg',
            'job' => 'programmer',
            'birthDate' => '10.10.2000',
            'gender' => 'male'
        ],
        [
            'name' => 'Ivan',
            'picture' => 'images/img02.jpg',
            'job' => 'programmer',
            'birthDate' => '11.10.2000',
            'gender' => 'male'
        ],
        [
            'name' => 'Dimitar',
            'picture' => 'images/img03.jpg',
            'job' => 'programmer',
            'birthDate' => '12.10.2000',
            'gender' => 'male'
        ],
        [
            'name' => 'Nikolay',
            'picture' => 'images/img04.jpg',
            'job' => 'programmer',
            'birthDate' => '13.10.2000',
            'gender' => 'male'
        ],
        [
            'name' => 'Petar',
            'picture' => 'images/img05.jpg',
            'job' => 'programmer',
            'birthDate' => '14.10.2000',
            'gender' => 'male'
        ],
        [
            'name' => 'Maria',
            'picture' => 'images/img06.jpg',
            'job' => 'programmer',
            'birthDate' => '15.10.2000',
            'gender' => 'female'
        ],
        [
            'name' => 'Elena',
            'picture' => 'images/img07.jpg',
            'job' => 'programmer',
            'birthDate' => '16.10.2000',
            'gender' => 'female'
        ],
        [
            'name' => 'Daniela',
            'picture' => 'images/img08.jpg',
            'job' => 'programmer',
            'birthDate' => '17.10.2000',
            'gender' => 'female'
        ],
        [
            'name' => 'Petia',
            'picture' => 'images/img09.jpg',
            'job' => 'programmer',
            'birthDate' => '18.10.2000',
            'gender' => 'female'
        ],
        [
            'name' => 'Desislava',
            'picture' => 'images/img10.jpg',
            'job' => 'programmer',
            'birthDate' => '19.10.2000',
            'gender' => 'female'
        ]
    ]
];

echo json_encode($response);