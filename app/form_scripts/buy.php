<?php

function buy(array $productData = [])
{
    $db = DB::connect();
    try {
        $db->beginTransaction();

        $product = db_find('products', $productData['product_id']);
        $quantity = calculateQuantity($product, $productData['quantity']);
        $isAdditions = !empty($productData['additions']) && !empty($productData['additions_qnty']);

        if (updateProductQuantity($productData['product_id'], $quantity) && $isAdditions) {
            updateAdditions($productData);
        }
    
        $db->commit();

        alert(
            'success',
            'Bon appetit'
        );

    } catch (PDOException $exception) {
        $db->rollBack();
        alert(
            'danger',
            $exception->getMessage()
        );
    } finally {
        redirect_home();
    }
}

function calculateQuantity(array $product, $requestQnty): int
{
    $prodQnty = (int)$product['quantity'];

    if($prodQnty < $requestQnty) {

    }
    return (int)$product['quantity'] - $requestQnty;
}

function updateProductQuantity(int $id, int $quantity): bool
{
    $db = DB::connect();
    $query = "UPDATE products SET quantity = :quantity WHERE id = :id";
    $query = $db->prepare($query);
    $query->bindParam('quantity', $quantity, PDO::PARAM_INT);
    $query->bindParam('id', $id, PDO::PARAM_INT);


    return $query->execute();
}
    
function updateAdditions(array $productData)
{
    $additions = array_combine($productData['additions'], $productData['additions_qnty']);
    foreach ($additions as $id => $qnty) {
        $product = db_find('products', $id);
            $quantity = calculateQuantity($product, $qnty);
            updateProductQuantity($productData['product_id'], $quantity);
        }
}