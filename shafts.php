<?php include('template-top.php'); ?>

<?php
$data = [
    [
        'img' => 'http://www.ipm-kirov.ru/admin/uploads/5333760075.jpg',
        'title' => "Прямой вал",
        'subItems' => [
            [   
                'img' => 'https://ae01.alicdn.com/kf/HTB1qWYab8smBKNjSZFsq6yXSVXal/1pc-370-6V-Motor-for-DIY-Car-D-shape-DC-Motor-Great-Power-4mm-Shaft-Diameter.jpg_220x220.jpg',
                'title' => 'Постоянного диаметра',
                'link' => '#',
            ], [
                'img' => '#',
                'title' => 'Ступенчатый',
                'link' => '/stepped-shaft.php',
            ], [
                'img' => '#',
                'title' => 'С Фланцами',
                'link' => '#',
            ], [
                'img' => '#',
                'title' => 'Вал-шестерня',
                'link' => '#',
            ],
        ],
    ], [
        'img' => 'https://avatars.mds.yandex.net/get-marketpic/363663/market_gIn3Z0Mc_99W19AmRMdsjw/orig',
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
            <div class="card" >
                <img style="width: 100%" class="card-img-top" src="<?= $v['img'] ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $v['title'] ?></h5>
                </div>
                <?php if (isset($v['subItems'])) : ?>
                    <div class="btn-group" role="group">
                        <button style="width: 100%" id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Виды</button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <?php foreach ($v['subItems'] as $item) : ?>
                                <form style="padding-bottom: 5px; padding-left: 5px" class="form-inline">
                                    <div style="padding-right: 5px" class="form-group">
                                        <a href="<?= $item['link'] ?>">
                                            <button type="button" class="btn btn-light"><?= $item['title'] ?></button>
                                        </a>
                                    </div>
                                    <div style="padding-right: 5px">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#123">фото</button>
                                    </div>
                                </form>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>


<?php foreach ($data as $v) : ?>
    <?php if (isset($v['subItems'])) : ?>
        <?php foreach ($v['subItems'] as $item) : ?>
            <div class="modal fade" id="123" tabindex="-1" role="dialog" aria-labelledby="123Label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="123Label">фото</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img style="width: 100%" class="card-img-top" src="<?= $item['img'] ?>" alt="Card image cap">   
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



