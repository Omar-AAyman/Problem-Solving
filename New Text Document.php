<?php
// $categories = [
//     'Id' => 1,
//     'name' => 'mobiles',
//     'subCategories' => [
//         'samsung' => [
//             (object)[
//                 'id' => 50,
//                 'name' => 'NOTE 10',
//                 'prices' => [5000, 6000],
//                 'madeIn' => ['china', 'germany'],
//                 'colors' => ['primary' => 'black', 'secondaryColors' => ['red', 'blue']],
//             ], (object)[
//                 'id' => 60,
//                 'name' => 'S20',
//                 'prices' => [7000, 8000],
//                 'madeIn' => ['china', 'germany'],
//                 'colors' => ['primary' => 'white', 'secondaryColors' => ['brown', 'orange']],
//             ]
//         ],
//         'apple' => [
//             (object)[
//                 'id' => 70,
//                 'name' => 'Iphone X',
//                 'prices' => 20000,
//                 'madeIn' => (object)['counrty' => 'china'],
//                 'colors' => ['red', 'green', 'black'],
//             ], (object)[
//                 'id' => 80,
//                 'name' => 'Iphone 12',
//                 'prices' => 60000,
//                 'madeIn' => (object)['counrty' => 'china'],
//                 'colors' => [
//                     (object)['primary' => 'black'],
//                     (object)[
//                         'secondaryColors' =>
//                         [
//                             'red',
//                             'blue'
//                         ]
//                     ]
//                 ],
//             ]
//         ],
//         'oppo' => [
//             (object)[
//                 'id' => 90,
//                 'name' => 'Oppo F1',
//                 'prices' => [],
//                 'madeIn' => [],
//                 'colors' => [],
//             ], (object)[
//                 'id' => 100,
//                 'name' => 'Oppo F2',
//                 'prices' => [],
//                 'madeIn' => [],
//                 'colors' => [],
//             ]
//         ]
//     ]
// ];
// # iphone 12 colors red , blue

// echo $categories['subCategories']['apple'][1]->name .
//     $categories['subCategories']['apple'][1]->colors[1]->secondaryColors[0] . ',' .
//     $categories['subCategories']['apple'][1]->colors[1]->secondaryColors[1];
// // echo $categories['subCategories']['apple'][1]->name . ' colors ' .
// //     $categories['subCategories']['apple'][1]->colors[1]->secondaryColors[0] . ',' .
// //     $categories['subCategories']['apple'][1]->colors[1]->secondaryColors[1];

// $arr = [2, 4, 7, 9, 1];
// $number = 0;
// for ($i = 0; $i < count($arr); $i++) {
//     $number = 0;
//     for ($n = 0; $n < count($arr); $n++) {

//         $number = $number + $arr[$n];
//     }
//     $arr2[$i] = $number - $arr[$i];
//     // print_r($arr2) ;
//     // $


// }
// echo max($arr2)."<br>". min($arr2);
// // echo $number;

$candels = [5, 5, 5,5, 5,5];
$result = 0;
// echo max($candels);
for ($i = 0; $i < count($candels); $i++) {

    if ($candels[$i] == max($candels)) {
        $result += 1;
    }
}
echo $result;
