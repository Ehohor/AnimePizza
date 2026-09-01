<?php

$products = db_select(
    from:"products",
    columns: "id, title, price, quantity, description",
    conditions: "is_option is FALSE AND quantity > 0",
    order: "price"
);
$products = array_chunk($products, length: 3);
?>
<section id="pizza" class="section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="pizza-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10"><?= $content['pizza']['title'] ?? '' ?></h1>
                    <p><?= $content['pizza']['description'] ?? '' ?></p>
                </div>
            </div>
        </div>
        <?php foreach ($products as $row): ?>
            <div class="row">
                <?php foreach($row as $item): ?>
                    <div class="col-lg-4">
                        <div class="pizza-item"
                            data-id="<?= $item['id'] ?>"
                            data-qnty="<?= $item['quantity'] ?>"
                            data-name="<?= $item['title'] ?>"
                            data-price="<?= $item['price'] ?>"
                            data-bs-toggle="modal" 
                            data-bs-target="#buy"
                        >
                            <div class="title justify-content-between d-flex">
                                <h4><?=$item['title'] ?></h4>
                                <p class="price float-right"><?= $item['price'] ?></p>
                            </div>
                            <p><?= $item['description'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>   
    </div>
</section>