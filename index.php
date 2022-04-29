<?php

$names = ['Lisa', 'Mathieu', 'Laure', 'Simon'];
// echo "Bonjour $names[2]";
$names[] = 'greg';
// var_dump($names);



$ron = ['name' => 'Ron Weasley', 'knuts' => 69, 'sickles' => 2, 'galleons' => 5];
$knuts = $ron['knuts'];
$knuts += $ron['sickles'] * 29;
$knuts += $ron['galleons'] * 17 * 29;
// echo $ron['name'].' possède l\'équivalent de '.$knuts.' noises';


    $teams = [
        [
            'name' => 'Golden Guardians', 
            'members' => [
                ['firstName' => 'Kevin', 'lastName' => 'Yarnell'],
                ['firstName' => 'Can', 'lastName' => 'Çelik'],
                ['firstName' => 'Greyson', 'lastName' => 'Gilmer'],
                ['firstName' => 'Victor', 'lastName' => 'Huang'],
                ['firstName' => 'Choi', 'lastName' => 'Jae-hyun'],  
                ['firstName' => 'Yuri', 'lastName' => 'Jew'], 
            ]
        ],
        [
            'name' => 'Immortals', 
            'members' => [
                ['firstName' => 'Paul', 'lastName' => 'Boyer'],
                ['firstName' => 'Jake', 'lastName' => 'Puchero'],
                ['firstName' => 'Jérémy', 'lastName' => 'Valdenaire'],
                ['firstName' => 'Johnny', 'lastName' => 'Ru'],
                ['firstName' => 'Nickolas', 'lastName' => 'Surgent'],  
            ]
        ],
    ];
echo$teams[0]['name'];
echo '<br>';
echo $teams[1]['members'][0]['firstName'];