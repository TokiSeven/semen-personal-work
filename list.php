<?php include('template-top.php'); ?>

<?php
$data = [
    [
        'img' => 'http://vikon-spb.ru/img/20262010-03-1092703424.jpg',
        'text' => "Деталь, ограниченная поверхностным вращением",
        'link' => '/shafts.php',
    ], [
        'img' => 'https://www.4x4ru.ru/upload/iblock/391/391db3673b6bfe397b324384b72ce13d.jpg',
        'text' => "Пружина",
        'link' => '#',
    ], [
        'img' => 'https://www.airring.com.tw/Templates/pic/IMG-oem-aluminum-foundry-G05.jpg',
        'text' => "Объемная деталь (литейная)",
        'link' => '#',
    ], [
        'img' => "https://www.zamacarb.com/assets/images/slider_photos/carb16.jpg",
        'text' => "Деталь сложной формы с криволинейной поверхностью",
        'link' => '#',
    ], [
        'img' => 'http://winnie-the-pooh.ru/wp-content/uploads/2016/02/gear_rack_logo.jpg',
        'text' => "Зубчатые колеса и рейки",
        'link' => '#',
    ], [
        'img' => 'https://images.amain.com/images/large/psm/psm01694.jpg',
        'text' => "Деталь, ограниченная плоскостями",
        'link' => '#',
    ], [
        'img' => '//im0-tub-ru.yandex.net/i?id=f6ff3a981a4d5f276483f9216a8a8bc8&n=13',
        'text' => "Деталь со сложным плоским контуром",
        'link' => '#',
    ],
];
?>

<div class="row">
    <?php foreach ($data as $v) : ?>
        <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card">
                <img class="card-img-top img-fluid" src="<?= $v['img'] ?>" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text"><?= $v['text'] ?></p>
                    <center>
                        <a href="<?= $v['link'] ?>" class="btn btn-secondary">Перейти</a>
                    </center>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php include('template-bottom.php'); ?>