<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Praktika</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

<?php
$schoolData = [
    '5a' => [
        rand(1, 50) => [
            'petras',
            'petraitis',
            'ivertinimai' => [
                'matematika' => 5,
                'informacinės technologijos' => 9,
                'anglų kalba' => 10
            ],
            date("Y-m-d")
        ],
        rand(1, 50) => [
            'jonas',
            'jonaitis',
            'ivertinimai' => [
                'matematika' => 6,
                'informacinės technologijos' => 7,
                'anglų kalba' => 8
            ],
            date("Y-m-d")
        ],
        rand(1, 50) => [
            'reda',
            'redaite',
            'ivertinimai' => [
                'matematika' => 8,
                'informacinės technologijos' => 9,
                'anglų kalba' => 8
            ],
            date("Y-m-d")
        ],
        rand(1, 50) => [
            'simas',
            'simaitis',
            'ivertinimai' => [
                'matematika' => 10,
                'informacinės technologijos' => 7,
                'anglų kalba' => 6
            ],
            date("Y-m-d")
        ],
        rand(1, 50) => [
            'simas',
            'simaitis',
            'ivertinimai' => [
                'matematika' => 8,
                'informacinės technologijos' => 9,
                'anglų kalba' => 7
            ],
            date("Y-m-d")
        ]
    ],
    '5b' => [
        rand(1, 50) => [
            'vaida',
            'vaidaite',
            'ivertinimai' => [
                'matematika' => 10,
                'informacinės technologijos' => 7,
                'anglų kalba' => 9
            ],
            date("Y-m-d")
        ],
        rand(1, 50) => [
            'ausra',
            'ausraite',
            'ivertinimai' => [
                'matematika' => 6,
                'informacinės technologijos' => 10,
                'anglų kalba' => 8
            ],
            date("Y-m-d")
        ],
        rand(1, 50) => [
            'kostas',
            'kostaitis',
            'ivertinimai' => [
                'matematika' => 8,
                'informacinės technologijos' => 10,
                'anglų kalba' => 8
            ],
            date("Y-m-d")
        ],
        rand(1, 50) => [
            'laima',
            'laimaite',
            'ivertinimai' => [
                'matematika' => 10,
                'informacinės technologijos' => 7,
                'anglų kalba' => 4
            ],
            date("Y-m-d")
        ],
        rand(1, 50) => [
            'mantas',
            'simaitis',
            'ivertinimai' => [
                'matematika' => 9,
                'informacinės technologijos' => 7,
                'anglų kalba' => 6
            ],
            date("Y-m-d")
        ],
    ]
];
?>
<div class="container text-center">
<table class="table table-bordered">
    <thead class="thead-dark">
    <th>Klasė</th>
    <th>Kodas</th>
    <th>Vardas</th>
    <th>Pavardė</th>
    <th>Kontrolinių darbų vidurkis</th>
    <th>Duomenų formavimo data</th>
    </thead>
    <tbody>
    <?php foreach ($schoolData as $class => $students): ?>
        <?php foreach ($students as $listRandom => $value): ?>

            <tr>
                <td><?= $class; ?></td>
                <td><?= $listRandom; ?></td>
                <?php foreach ($value as $names => $text): ?>
                    <?php if (is_array($text)): ?>
                        <td><?= number_format(array_sum($text) / count($text),1, ",", " "); ?></td>
                    <?php else: ?>
                        <td><?= ucfirst($text); ?></td>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
    </tbody>
</table>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

