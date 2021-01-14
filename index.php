<?php

$products = [
    'Products' => [
        'IT' => [
            'MackBook',
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
        <li><?=$key;?>:<?=$value;?></li>
    <ul>
        <?php foreach ($value as $item => $next):?>
        <li><?=$item;?><?=$next;?></li>
        <ul>
            <?php foreach ($next as $nextItem => $nextValue):?>
                <li><?=$nextItem;?><?=$nextValue;?></li>
            <?php endforeach;?>
        </ul>
        <?php endforeach;?>
    </ul>
        <?php endforeach;?>
</ul>
