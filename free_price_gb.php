<?php
/**
 * Created by PhpStorm.
 * User: hey_j
 * Date: 2019/3/6
 * Time: 上午11:05
 */
//ini_set("display_errors", 1);
ini_set('memory_limit', '-1');
$dir = '/Users/ftn_scott/Documents/GitHub/qn5566.github.io/data/free_price_gb.txt';
//$dir_merge = '/Users/hey_j/Documents/GitHub/qn5566.github.io/data/merge_data.txt';
$dir_merge = '/Users/ftn_scott/Documents/GitHub/qn5566.github.io/data/mergegb_data_3.txt';

$data_1 = file_get_contents($dir_merge);
if(!$data_1){
    echo '錯誤';
    echo '$dir_merge:'.var_dump($data_1,true);
    DIE;
}
$dir_merge = json_decode($data_1, true);


$data = Array();
if($data_1){
    echo '$data_money 總共資料:'.count($dir_merge).'<br>';

    foreach($dir_merge as $merge){
//        echo '$merge[max_price]:' . $merge['max_price'] . '<br>';
//        echo '$merge[min_price]:' . $merge['min_price'] . '<br>';

        if(is_null($merge['minTWPrice'])){

            array_push($data, $merge);
//            break;

        }
    }







    file_put_contents($dir, json_encode($data));
//    echo json_encode($data);
    echo '總共取得有:'.count($data)."筆資料<br>";
    echo '-----------------------ok--------------------------';
}else{

    echo '無資料';
}


function method1($a,$b)
{
    return ($a[2]["sizes"]["weight"] <= $b[2]["sizes"]["weight"]) ? -1 : 1;
}
usort($array, "method1");




?>