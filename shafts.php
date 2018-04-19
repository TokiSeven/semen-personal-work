<?php include('template-top.php'); ?>

<?php
$data = [
    [
        'img' => 'https://data.whicdn.com/images/309182776/superthumb.jpg',
        'title' => "Прямой вал",
        'subItems' => [
            [
                'title' => 'Постоянного диаметра',
                'link' => '#',
            ], [
                'title' => 'Ступенчатый',
                'link' => '/stepped-shaft.php',
            ], [
                'title' => 'С Фланцами',
                'link' => '#',
            ], [
                'title' => 'Вал-шестерня',
                'link' => '#',
            ],
        ],
    ], [
        'img' => 'https://data.whicdn.com/images/309182776/superthumb.jpg',
        'title' => "Коленчатый вал",
        'link' => '#',
    ], [
        'img' => 'https://data.whicdn.com/images/309182776/superthumb.jpg',
        'title' => "Гибкий вал",
        'link' => '#',
    ],
];
?>

<div class="row">
    <?php foreach ($data as $v) : ?>
        <div class="col col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?= $v['img'] ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $v['title'] ?></h5>
                    <?php if (isset($v['link'])) : ?>
                        <center>
                            <a href="<?= $v['link'] ?>" class="btn btn-secondary">Перейти</a>
                        </center>
                    <?php endif; ?>
                </div>
                <?php if (isset($v['subItems'])) : ?>
                    <ul class="list-group list-group-flush">
                        <?php foreach ($v['subItems'] as $item) : ?>
                            <a href="<?= $item['link'] ?>" class="list-group-item list-group-item-action">
                                <?= $item['title'] ?>
                            </a>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php include('template-bottom.php'); ?>