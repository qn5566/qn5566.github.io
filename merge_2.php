<?php
/**
 * Created by PhpStorm.
 * User: hey_j
 * Date: 2019/2/23
 * Time: 下午2:24
 */
//ini_set("display_errors", 1);
ini_set('memory_limit', '-1');
$dir = '/Users/ftn_scott/Documents/GitHub/qn5566.github.io/data/merge_data_2.txt';
$dir_merge = '/Users/ftn_scott/Documents/GitHub/qn5566.github.io/data/merge_data.txt';
$dir_home_jp = '/Users/ftn_scott/Documents/GitHub/qn5566.github.io/data/nintendo_home_jp.txt';

$data_1 = file_get_contents($dir_merge);
$data_2 = file_get_contents($dir_home_jp);
if(!$data_1 || !$data_2){
    echo '錯誤';
    echo '$dir_merge:'.var_dump($data_1,true);
    echo '$dir_home_jp:'.var_dump($data_2,true);
    DIE;
}
$data_merge = json_decode($data_1, true);
$data_home_jp = json_decode($data_2, true);


$data = Array();
if($data_1 && $data_2){
    echo '$dir_merge 總共資料:'.count($dir_merge).'<br>';
    echo '$dir_home_jp 總共資料:'.count($dir_home_jp).'<br>';



    foreach($data_merge as $merge){

        $save_1 = "0";
        for($i = 0; $i < count($data_home_jp);$i++) {

            for($j=0;$j < count($data_home_jp[$i]);$j++){

//                echo '日文遊戲:'.$data_home_jp[$i][$j]['title'].'<br>';
                if($data_home_jp[$i][$j]['title'] == '不如帰 大乱'){
//                    echo '$merge[\'title\']:'.$merge['title'].'<br>';
//                    echo '$money[1][game]:'.$money['1']['game'].'<br>';
//                    echo '$merge[\'1\'][\'game_en\']:'.$merge['1']['game_en'].'<br>';
                    if($merge['title'] == 'Absurdity turbulence'){
                        $nintendo_jp['title'] = $data_home_jp[$i][$j]['title'];
                        $nintendo_jp['iurl'] = 'https://img-eshop.cdn.nintendo.net/i/'.$data_home_jp[$i][$j]['iurl'].'.jpg?w=284';
                        array_push($merge, $nintendo_jp);
                        $save_1 = "1";
                        echo '客製化'.$merge[2]['title'].'完成'.'<br>';
                        break;
                    }

                }


                if($data_home_jp[$i][$j]['title'] == 'ラピス・リ・アビス'){
//                    echo '$merge[\'title\']:'.$merge['title'].'<br>';
//                    echo '$money[1][game]:'.$money['1']['game'].'<br>';
//                    echo '$merge[\'1\'][\'game_en\']:'.$merge['1']['game_en'].'<br>';
                    if($merge['title'] == 'Lapis · Li · Abyss'){
                        $nintendo_jp['title'] = $data_home_jp[$i][$j]['title'];
                        $nintendo_jp['iurl'] = 'https://img-eshop.cdn.nintendo.net/i/'.$data_home_jp[$i][$j]['iurl'].'.jpg?w=284';
                        array_push($merge, $nintendo_jp);
                        $save_1 = "1";
                        echo '客製化'.$merge[2]['title'].'完成'.'<br>';
                        break;
                    }

                }

                if((count(explode(strtoupper($merge['1']['game_en']), strtoupper($data_home_jp[$i][$j]['title']))) > 1)){


//                    echo '$money[1]game]:'.$money['1']['game'].'<br>';
//                    echo 'game $data_home_jp:'.$data_home_jp[$i][$j]['title'].' conut'.count(explode(strtoupper($money['title']), strtoupper($data_home_jp[$i][$j]['title']))).'<br>';

                    $nintendo_jp['title'] = $data_home_jp[$i][$j]['title'];
                    $nintendo_jp['iurl'] = 'https://img-eshop.cdn.nintendo.net/i/'.$data_home_jp[$i][$j]['iurl'].'.jpg?w=284';
                    array_push($merge, $nintendo_jp);
                    $save_1 = "1";
                    break;
                }else{

                    if($i == (count($data_home_jp)-2) && $j == (count($data_home_jp[$i])-1)){
                        array_push($merge,  initNintendo_jp());
                        break;
                    }
                }

            }

            if($save_1 == "1"){
                break;
            }

        }
//        echo '$money[2][\'title\']:'.$merge[2]['title'].'<br>';
//        echo '$data 數量:'.count($data).'<br>';
            array_push($data, $merge);


    }
echo '-----------------------ok--------------------------';

//    var_dump($data,true);
//    $json = json_encode($data);
//
//    if ($json)
//        echo $json;
//    else
//        echo json_last_error_msg();

    file_put_contents($dir, json_encode($data));
//    echo json_encode($data, JSON_UNESCAPED_UNICODE);
}else{

    echo '無資料';
}

function initNintendo_en(){
    $nintendo_en['release_date'] = '';
    $nintendo_en['front_box_art'] = '';

    return $nintendo_en;
}


function initNintendo_jp(){
    $nintendo_jp['title'] = '';
    $nintendo_jp['iurl'] = '';

    return $nintendo_jp;
}


function initWiKi(){
    $wiki['game'] = '';
    $wiki['game_type'] = '';
    $wiki['game_dev'] = '';
    $wiki['game_tw'] = '';
    $wiki['game_en'] = '';
    $wiki['game_cover'] = '';
    $wiki['game_d1'] = '';
    $wiki['game_d2'] = '';

    return $wiki;
}
?>

