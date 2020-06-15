<?php
/**
 * Created by PhpStorm.
 * User: hey_j
 * Date: 2019/2/23
 * Time: 下午2:24
 */
//ini_set("display_errors", 1);
ini_set('memory_limit', '-1');
$dir = '/Users/ftn_scott/Documents/GitHub/qn5566.github.io/data/mergegb_data_4_dlc.txt';
$dir_data = '/Users/ftn_scott/Documents/GitHub/qn5566.github.io/data/mergegb_data_3_dlc.txt';
//$dir_data = '/Users/ftn_scott/Documents/GitHub/qn5566.github.io/data/merge_data.txt';
$dir_home = '/Users/ftn_scott/Documents/GitHub/qn5566.github.io/data/gballgame_newdetail.txt';

$data_1 = file_get_contents($dir_data);
$data_2 = file_get_contents($dir_home);
if (!$data_1 || !$data_2) {
    echo '錯誤';
    echo '$dir_data:' . var_dump($data_1, true);
    echo '$dir_home:' . var_dump($data_2, true);
    DIE;
}
$data_money = json_decode($data_1, true);
$data_home = json_decode($data_2, true);


$data = Array();
if ($data_1 && $data_2) {
    echo '$data_money 總共資料:' . count($data_money) . '<br>';
    echo '$data_home 總共資料:' . $data_home['game'] . '<br>';

    $data_Game = $data_home['game'];

    $i = 0;
    foreach ($data_money as $money) {

//        if($i >10){
//            break;
//        }

        for($z=0;$z<count($data_Game);$z++){

            if($money['id'] == $data_Game[$z]['basic']['id']){
                $money['playerNumberDetail'] = $data_Game[$z]['playerNumberDetail'];
            }
        }

//        array_push($data, $money);
        $data[$i] = $money;
        $i++;

    }


    echo '總共資料:' . count($data) . '<br>';


    if(count($data) >10){
        file_put_contents($dir, json_encode($data));
        echo '-----------------------ok--------------------------';
    }


} else {

    echo '無資料';
}




?>

