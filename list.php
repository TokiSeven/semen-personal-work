<?php include('template-top.php'); ?>

<?php
$data = [
    [
        'img' => 'https://data.whicdn.com/images/309182776/superthumb.jpg',
        'text' => "Деталь, ограниченная поверхностным вращением",
        'link' => '/shafts.php',
    ], [
        'img' => 'https://data.whicdn.com/images/309182776/superthumb.jpg',
        'text' => "Пружина",
        'link' => '#',
    ], [
        'img' => 'https://data.whicdn.com/images/309182776/superthumb.jpg',
        'text' => "Объемная деталь ( литейная)",
        'link' => '#',
    ], [
        'img' => 'https://data.whicdn.com/images/309182776/superthumb.jpg',
        'text' => "Деталь сложной формы с криволинейной поверхностью",
        'link' => '#',
    ], [
        'img' => 'https://data.whicdn.com/images/309182776/superthumb.jpg',
        'text' => "Зубчатые колеса и рейки",
        'link' => '#',
    ], [
        'img' => 'https://data.whicdn.com/images/309182776/superthumb.jpg',
        'text' => "Деталь, ограниченная плоскостями",
        'link' => '#',
    ], [
        'img' => 'https://data.whicdn.com/images/309182776/superthumb.jpg',
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