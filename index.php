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

?>

<ul>
    <?php foreach ($products as $key => $value):?>
        <li><?=$key;?>:</li>
    <ul>
        <?php foreach ($value as $item => $next):?>
        <li><?=$item;?></li>
        <ul>
            <?php foreach ($next as $nextItem => $nextValue):?>
                <li><?=$nextValue;?></li>
            <?php endforeach;?>
        </ul>
        <?php endforeach;?>
    </ul>
        <?php endforeach;?>
</ul>
