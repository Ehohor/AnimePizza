<?php
$additions = db_select(
    from:"products",
    columns: "id, title, price, quantity",
    conditions: "is_option is TRUE AND quantity > 0",
    order: "price"
);
?>
<div class="modal fade" id="buy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form id="buy-form" action="/" method="POST">
        <input type="hidden" value="buy" name="type"/>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Make order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="row product-block">
                <div class="col-4 product-name"><b></b></div>
                <div class="col-4 product-price"></div>
                <div class="col-4 product-total"></div>
            </div>
            <!-- <form action="<?= APP_DIR . '/script.php' ?>" method="POST"> -->
                <div class="row">
                    <div class="col-12">
                        <label for="">Quantity</label>
                        <input type="hidden" name="product_id" class="product" />
                        <input type="number" name="quantity" class="quantity-field form-control" min="1" value="1" />
                        <hr>
                        <h3>Additions:</h3>
                        <?php foreach ($additions as $addition): ?>
                            <div class="form-check form-switch">
                                <input class="form-check-input additions-check" 
                                        type="checkbox" 
                                        role="switch" 
                                        name="additions[]"
                                        id="addition-<?= $addition['id'] ?>"
                                        value="<?= $addition['id'] ?>"
                                        >
                                <label class="form-check-label"
                                        for="addition-<?= $addition['id'] ?>"
                                        ><?= $addition['title'] ?>
                                         - <b class="price"><?= $addition['price'] ?></b><b>$</b>
                                         - <b class="additions-total"></b>
                                        </label>
                                        
                                        <input type="number" 
                                        class="form-control additions-qnty"
                                        min="0" 
                                        max="<?= $addition['quantity'] ?>" 
                                        name="additions_qnty[]"
                                        disabled
                                        />
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-12 text-right">
                        total: <b class="final-price"></b>
                    </div>
                </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Order</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>