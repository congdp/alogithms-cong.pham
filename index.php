<?php
$listProduct = array(
    0 => array(
        'name' => 'CPU',
        'price' => 750,
        'quality' => 10,
        'categoryId' => 1,
    ),
    1 => array(
        'name' => 'RAM',
        'price' => 50,
        'quality' => 2,
        'categoryId' => 2,
    ),
    2 => array(
        'name' => 'HDD',
        'price' => 70,
        'quality' => 1,
        'categoryId' => 2,
    ),
    3 => array(
        'name' => 'Main',
        'price' => 400,
        'quality' => 3,
        'categoryId' => 1,
    ),
    4 => array(
        'name' => 'Keyboard',
        'price' => 30,
        'quality' => 8,
        'categoryId' => 4,
    ),
    5 => array(
        'name' => 'Mouse',
        'price' => 25,
        'quality' => 50,
        'categoryId' => 4,
    ),

);

function findProduct($listProduct, $nameProduct)
{
    foreach ($listProduct as $item) {
        if ($item['name'] == $nameProduct) {
            return $item;
        }
    }
    return null;
}

function findProductByCategory($listProduct, $category)
{
    $listProductbyCatId = array();
    foreach ($listProduct as $item) {
        if ($item['categoryId'] == $category) {
            array_push($listProductbyCatId, $item);
        }
    }
    return $listProductbyCatId;
}
function findProductByPrice($listProduct, $price)
{
    $listProductbyPrice = array();
    foreach ($listProduct as $item) {
        if ($item['categoryId'] <= $price) {
            array_push($listProductbyPrice, $item);
        }
    }
    return $listProductbyPrice;
}

function sortByPrice($listProduct)
{
    for ($i = 0; $i < count($listProduct) - 1; $i++) {
        for ($j = $i + 1; $j < count($listProduct); $j++) {
            if ($listProduct[$i]['price'] > $listProduct[$j]['price']) {
                $tmp = $listProduct[$j];
                $listProduct[$j] = $listProduct[$i];
                $listProduct[$i] = $tmp;

            }
        }
    }
    $listSortByPrice = array();
    for ($i = 0; $i < count($listProduct); $i++) {
        // print_r($listProduct[$i]);
        array_push($listSortByPrice, $listProduct[$i]);

    }
    return $listSortByPrice;

}

// $item = findProduct($listProduct, 'RAM');
// $item = findProductByCategory($listProduct, 1);
// $item = findProductByPrice($listProduct, 3000);
$item = sortByPrice($listProduct);

echo "<pre>";
print_r($item);