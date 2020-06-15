<?php

ini_set("display_errors", 1);

require_once('MysqliDb.php');

//$db = new MysqliDb('127.0.0.1','scott','1234qwer','app_switch');
$db = new MysqliDb('34.74.142.240', 'scott', '1234qwer', 'app_switch');
//echo '成功';
//var_dump($db);

$dir = '/Users/ftn_scott/Documents/GitHub/qn5566.github.io/data/hitogame_2.txt';
$dir_merge = '/Users/ftn_scott/Documents/GitHub/qn5566.github.io/data/mergegb_data_4.txt';
$data_1 = file_get_contents($dir_merge);
if (!$data_1) {
    echo '錯誤';
    echo '$dir_merge:' . var_dump($data_1, true);
    DIE;
}
$dir_merge = json_decode($data_1, true);


$data_hito = getHito($db);

$data = Array();
if ($data_1) {
    echo '$data_money 總共資料:' . count($dir_merge) . '<br>'. "\n";
    foreach ($data_hito as $hito_d) {


        foreach ($dir_merge as $merge) {
//        echo '$merge[max_price]:' . $merge['max_price'] . '<br>';
//        echo '$merge[min_price]:' . $merge['min_price'] . '<br>';
//5d7be79c7d2c153084438d10

//        foreach($data_hito as $hito_d){
            if ($merge['id'] == $hito_d['game']) {
                echo '遊戲:' . $merge['id'] . '加入<br>' . "\n";

                if ($merge['id'] == '5d7be79c7d2c153084438d10') {
                    echo '遊戲:' . $merge['id'] . '跳出<br>' . "\n";
                    continue;
                }

                array_push($data, $merge);
                break;
            }

        }

    }


    echo '總共取得有:' . count($data) . "筆資料<br>" . "\n";
    if (count($data) > 100) {
        file_put_contents($dir, json_encode($data));
        echo '-----------------------ok--------------------------' . "\n";
    }


} else {

    echo '無資料';
}


/**
 * 人氣二十強
 * @param $db
 * @param $_data
 * @return string
 */
function getHito($db)
{
    $db->orderBy('hito', 'DESC');
    $hito = $db->get('app_hito', 203);
    if ($hito) {
        return $hito;
    }
}

?>