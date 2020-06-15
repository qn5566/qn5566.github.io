<?php
/**
 * Created by PhpStorm.
 * User: hey_j
 * Date: 2019/3/6
 * Time: 上午11:05
 */
//ini_set("display_errors", 1);
ini_set('memory_limit', '-1');
$dir = '/Users/ftn_scott/Documents/GitHub/qn5566.github.io/data/special_gb_2.txt';
//$dir_merge = '/Users/hey_j/Documents/GitHub/qn5566.github.io/data/merge_data.txt';
$dir_merge = '/Users/ftn_scott/Documents/GitHub/qn5566.github.io/data/mergegb_data_4.txt';

$data_1 = file_get_contents($dir_merge);
if(!$data_1){
    echo '錯誤';
    echo '$dir_merge:'.var_dump($data_1,true);
    DIE;
}
$dir_merge = json_decode($data_1, true);


$data = Array();
$data_low = Array();
$data_dis = Array();

if($data_1){
    echo '$data_money 總共資料:'.count($dir_merge).'<br>';


    foreach($dir_merge as $merge){

        if($merge['isHistoryLowest' ]&& $merge['minTWPrice']!='' && $merge['isDiscount']){
//            echo '增加遊戲'.$merge['id'].'---歷史特價---'.'<br>';
            array_push($data_low, $merge);

        }

        if($merge['isDiscount'] && !$merge['isHistoryLowest'] && $merge['minTWPrice']!=''){
//            echo '增加遊戲'.$merge['id'].' 沒有歷史特價 '.'<br>';
            array_push($data_dis, $merge);
        }
    }

    array_push($data, ...$data_low);
    array_push($data, ...$data_dis);
//    array_push($data_low, $data_dis);

//    $j=0;
//    $flag = true;
//    $temp=0;
//
//    while ( $flag )
//    {
//        $flag = false;
//        for( $j=0;  $j < count($data)-1; $j++)
//        {
//            if ( $data[$j]["minTWPrice"] > $data[$j+1]["minTWPrice"] )
//            {
//                $temp = $data[$j];
//                //swap the two between each other
//                $data[$j] = $data[$j+1];
//                $data[$j+1]=$temp;
//                $flag = true; //show that a swap occurred
//            }
//        }
//    }


    file_put_contents($dir, json_encode($data));
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