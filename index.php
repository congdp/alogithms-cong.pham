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
        'categoryId' => 3,
    ),

);
$listCategory = [
    [
        'id' => 1,
        'name' => "Computer",
    ],
    [
        'id' => 2,
        'name' => "Memorytt",
    ],
    [
        'id' => 3,
        'name' => "Carttttt",
    ],
    [
        'id' => 4,
        'name' => "Acsesoyt",
    ],
];
$menu = [
    [
        'id' => 1,
        'title' => 'Thể thao',
        'parent_id' => 0,
    ],
    [
        'id' => 2,
        'title' => 'Xã hội',
        'parent_id' => 0,
    ],
    [
        'id' => 3,
        'title' => 'Thể thao trong nước',
        'parent_id' => 1,
    ],
    [
        'id' => 4,
        'title' => 'Giao thông',
        'parent_id' => 2,
    ],
    [
        'id' => 5,
        'title' => 'Môi trường',
        'parent_id' => 2,
    ],
];

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
        array_push($listSortByPrice, $listProduct[$i]);
    }
    return $listSortByPrice;

}

function sortByName($listProduct)
{
    for ($i = 0; $i < count($listProduct); $i++) {
        $loop = $i;
        $current = $listProduct[$i];
        while ($loop > 0 && (strlen($listProduct[$loop - 1]['name']) < strlen($current['name']))) {
            $listProduct[$loop] = $listProduct[$loop - 1];
            $loop -= 1;
        }
        $listProduct[$loop] = $current;
    }
    return $listProduct;
}

// ===================== EX13-25=============================

function minByPrice($listProduct)
{
    for ($i = 0; $i < count($listProduct); $i++) {
        $currentMinPrice = 0;
        if ($listProduct[$i]['price'] < $listProduct[$currentMinPrice]['price']) {
            $currentMinPrice = $i;
        }
    }
    return $listProduct[$currentMinPrice];
}

function maxByPrice($listProduct)
{
    for ($i = 0; $i < count($listProduct); $i++) {
        $currentMaxPrice = 0;
        if ($listProduct[$i]['price'] > $listProduct[$currentMaxPrice]['price']) {
            $currentMaxPrice = $i;
        }
    }
    return $listProduct[$currentMaxPrice];
}

function getCategoryNameById($listCategory, $categoryId)
{
    foreach ($listCategory as $category) {
        if ($category['id'] == $categoryId) {
            return $category['name'];
        }
    }
}

function sortByCategoryName($listProduct, $listCategory)
{
    for ($i = 0; $i < count($listProduct); $i++) {
        $loop = $i;
        $current = $listProduct[$i];
        while ($loop > 0 && strcmp(getCategoryNameById($listCategory, $listProduct[$loop - 1]['categoryId']), getCategoryNameById($listCategory, $current['categoryId'])) > 0) {
            $listProduct[$loop] = $listProduct[$loop - 1];
            $loop -= 1;
        }
        $listProduct[$loop] = $current;
    }
    return $listProduct;
}

function mapProductByCategory($listProduct, $listCategory)
{
    foreach ($listProduct as &$item) {
        $item['categoryName'] = getCategoryNameById($listCategory, $item['categoryId']);
    }
    return $listProduct;
}

function calSalary($salary, $numYear)
{
    for ($i = 1; $i < $numYear; $i++) {
        $salary += $salary * 0.1;
    }
    return $salary;
}

function calSalaryByRecusive($salary, $numYear)
{
    if ($numYear < 1) {
        return $salary;
    } else {
        return calSalaryByRecusive($salary * 1.1, $numYear - 1);
    }
}

function calMonth($rate)
{
    $recipeRate = 1 + ($rate / 100);
    $permanentRate = $recipeRate;
    $month = 0;
    while ($recipeRate < 2) {
        $recipeRate *= $permanentRate;
        $month++;
    }
    return $month;
}

function printMenu($menu, $parentId, $level = 0)
{
    $result = [];
    foreach ($menu as $item) {
        if ($item['parent_id'] == $parentId) {
            $item['level'] = $level;
            $result[] = $item;
            unset($menu[$item['id']]);
            $child = printMenu($menu, $item['id'], $level + 1);
            $result = array_merge($result, $child);
        }
    }
    return $result;
}
// echo calMonth(2);
// $item = mapProductByCategory($listProduct, $listCategory);
// $item = sortByCategoryName($listProduct, $listCategory);
// $item = getCategoryNameById($listCategory, 2);
// $item = findProduct($listProduct, 'RAM');
// $item = findProductByCategory($listProduct, 1);
// $item = findProductByPrice($listProduct, 3000);
// $item = sortByPrice($listProduct);
// $item = sortByName($listProduct);
// $item = minByPrice($listProduct);
// $item = maxByPrice($listProduct);
$listCategory = printMenu($menu, 0);
foreach ($listCategory as $item) {
    echo str_repeat('--', $item['level']) . $item['title'] . "<br>";
}
// echo "<pre>";
// print_r($item);