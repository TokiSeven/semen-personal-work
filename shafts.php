<?php include('template-top.php'); ?>

<?php
$data = [
    [
        'img' => 'http://www.ipm-kirov.ru/admin/uploads/5333760075.jpg',
        'title' => "Прямой вал",
        'subItems' => [
            [
                'title' => 'Ступенчатый',
                'link' => '/stepped-shaft.php',
                'image' => 'http://www.tracepartsonline.net/PartsDefs/Production/ATLANTA/32-19042006-050698/pictures/32-19042006-050698L.gif'
            ], [
                'title' => 'Постоянного диаметра',
                'link' => '#',
                'image' => 'http://www.w3schools.com/w3css/img_lights.jpg'
            ], [
                'title' => 'С Фланцами',
                'link' => '#',
                'image' => '#'
            ], [
                'title' => 'Вал-шестерня',
                'link' => '#',
                'image' => '#'
            ],
        ],
    ], [
        'img' => 'http://enciklopediya-tehniki.ru/images/idoblog/upload/62/kolenval.jpg',
        'title' => "Коленчатый вал",
        'link' => '#',
    ], [
        'img' => 'http://www.faznik.ru/upload/goods/sources/c18134cf27db1d822fa3787d57f1abb9.jpg',
        'title' => "Гибкий вал",
        'link' => '#',
    ],
];
?>

<div class="row">
    <?php foreach ($data as $v) : ?>
        <div class="col col-md-4 mb-3">
            <div style="height:18 rem" class="card" >
                <img style="height: 100%" class="card-img-top" src="<?= $v['img'] ?>" alt="Card image cap">
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
                            <button class="btn btn-primary" data-toggle="modal" data-target="#details">Изображение</button>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php foreach ($data as $v) : ?>
<?php if (isset($v['subItems'])) : ?>
<?php foreach ($v['subItems'] as $item) : ?>
<div class="modal fade" id="details" tabindex="-1" role="dialog" aria-labelledby="detailsLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img style="height: 100%" class="card-img-top img-fluid" src="<?= $item['image'] ?>" alt="Card image cap">   
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
<?php endif; ?>
<?php endforeach; ?>

<?php include('template-bottom.php'); ?>