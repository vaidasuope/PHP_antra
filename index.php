<?php

//asociatyvus masyvas - leidzia perduoti per elementa tu duomenu elementus
$products = [
    'Products' => [//1 for each
        'IT' => [//2 for each
            'MackBook',//3 for each
            'USB hub',
            'Keyboard'],
        'Other'=>[
            'Samsung Galaxy',
            'Apple watch'
        ]
    ],
    'Service' => [
        'IT'=> [
            'WEB development',
            'WEB design'
        ],
        'Business' => [
            'Company registration',
            'SEO optimization'
        ]
    ]
];
//isvedam pirmiausia raktus, o reiksmes paduodam kitam ciklui - pirmas is kaires foreach yra masyvas, o kitas yra raktas ir reiksme
//ucfirst - funckija diziosiom raidem isvesti
?>

<ul>
    <?php foreach ($products as $key => $value):?>
        <li><?=$key;?>:</li>
    <ul>
        <?php foreach ($value as $item => $next):?>
        <li><?=$item;?></li>
        <ul>
            <?php foreach ($next as $nextValue):?>
                <li><?=$nextValue;?></li>
            <?php endforeach;?>
        </ul>
        <?php endforeach;?>
    </ul>
        <?php endforeach;?>
</ul>
