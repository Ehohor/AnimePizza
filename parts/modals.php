<?php
$additions = db_select(
    from:"products",
    columns: "id, title, price",
    conditions: "is_option is TRUE AND quantity > 0",
    order: "price"
);
?>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#buy" >Open modal for @mdo</button>
<div class="modal fade" id="buy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="/" method="POST">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="<?= APP_DIR . '/script.php' ?>" method="POST">
                <div class="row">
                    <div class="col-12">
                        <hr>
                        <h3>Additions:</h3>
                        <?php foreach ($additions as $addition): ?>
                            <div class="form-check form-switch">
                                <input class="form-check-input" 
                                        type="checkbox" 
                                        role="switch" 
                                        name="additions[]"
                                        id="addition-<?= $addition['id'] ?>"
                                        value="<?= $addition['id'] ?>"
                                        >
                                <label class="form-check-label"
                                        for="addition-<?= $addition['id'] ?>"
                                        ><?= $addition['title'] ?> - <b><?= $addition['price'] ?></b></label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Send message</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>