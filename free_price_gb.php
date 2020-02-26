<?php
/**
 * Created by PhpStorm.
 * User: hey_j
 * Date: 2019/3/6
 * Time: 上午11:05
 */
//ini_set("display_errors", 1);
ini_set('memory_limit', '-1');
$dir = '/Users/Ted/Documents/GitHub/qn5566.github.io/data/free_price_gb.txt';
//$dir_merge = '/Users/hey_j/Documents/GitHub/qn5566.github.io/data/merge_data.txt';
$dir_merge = '/Users/Ted/Documents/GitHub/qn5566.github.io/data/mergegb_data_3.txt';

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


            if ($merge['id']=='5c7a45380d876d4d8528806e') {

//                $data_T['imgUrl'] = 'https://img.ruten.com.tw/s1/a/44/3d/21847035569213_701.jpg';
                echo '修正 id'.$merge['id']. "<br>\n";
                echo '修正 enTitle'.$merge['enTitle']. "<br>\n";
                echo '沒有免費 刪除'. "<br>\n";
                continue;

            }

            if ($merge['id']=='5c7a453a0d876d4d85291ae8') {

//                $data_T['imgUrl'] = 'https://img.ruten.com.tw/s1/a/44/3d/21847035569213_701.jpg';
                echo '修正 id'.$merge['id']. "<br>\n";
                echo '修正 enTitle'.$merge['enTitle']. "<br>\n";
                echo '沒有免費 刪除'. "<br>\n";
                continue;

            }

            if ($merge['id']=='5c7a453c0d876d4d85299564') {

//                $data_T['imgUrl'] = 'https://img.ruten.com.tw/s1/a/44/3d/21847035569213_701.jpg';
                echo '修正 id'.$merge['id']. "<br>\n";
                echo '修正 enTitle'.$merge['enTitle']. "<br>\n";
                echo '沒有免費 刪除'. "<br>\n";
                continue;

            }



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