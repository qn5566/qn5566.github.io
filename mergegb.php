<?php
/**
 * Created by PhpStorm.
 * User: hey_j
 * Date: 2019/2/23
 * Time: 下午2:24
 */
//ini_set("display_errors", 1);
ini_set('memory_limit', '-1');
$dir = '/Users/ftn_scott/Documents/GitHub/qn5566.github.io/data/mergegb_data.txt';
$dir_money = '/Users/ftn_scott/Documents/GitHub/qn5566.github.io/data/gballgame.txt';
$dir_wiki = '/Users/ftn_scott/Documents/GitHub/qn5566.github.io/data/wiki_data.txt';
$dir_home = '/Users/ftn_scott/Documents/GitHub/qn5566.github.io/data/nintendo_home.txt';
//$dir_home_jp = '/Users/ftn_scott/Documents/GitHub/qn5566.github.io/data/nintendo_home_jp.txt';

$data_1 = file_get_contents($dir_money);
$data_2 = file_get_contents($dir_wiki);
$data_3 = file_get_contents($dir_home);
//$data_4 = file_get_contents($dir_home_jp);
if(!$data_1 || !$data_2){
    echo '錯誤';
    echo '$dir_money:'.var_dump($data_1,true);
    echo '$dir_wiki:'.var_dump($data_2,true);
    echo '$data_home:'.var_dump($data_3,true);
//    echo '$data_home_jp:'.var_dump($data_4,true);
    DIE;
}
$data_money = json_decode($data_1, true);
$data_wiki = json_decode($data_2, true);
$data_home = json_decode($data_3, true);
//$data_home_jp = json_decode($data_4, true);

$ex_name = Array("Pokemon: Let's Go, Pikachu!","Pokemon: Let's Go, Eevee!");

$data = Array();
if($data_1 && $data_2 && $data_3){
    echo '$data_money 總共資料:'.count($data_money['games']).'<br>';
    echo '$data_wiki 總共資料:'.count($data_wiki).'<br>';
//    echo '$data_home 總共資料:'.count($data_home).'<br>';
    echo '$data_home 總共資料:'.$data_home['total'].'<br>';
//    echo '$data_home_jp 總共資料:'.count($data_home_jp).'<br>';


//    var_dump($data_home,true);

    foreach($data_money['games'] as $money){
//        $save = '';
//        echo '$money[enTitle]:' . strtoupper($money['enTitle']) . '<br>';
//        echo '$data_wiki[title]:' . strtoupper($data_wiki[$i]['game_en']) . '<br>';
//        echo '$data_wiki[title]:' . strtoupper($data_wiki[$i]['game']) . '<br>';


        $save_1 = "0";
//        $save_2 = "0";

        for($i = 0; $i < count($data_home);$i++) {

            for($j=0;$j < count($data_home[$i]);$j++){

                if(in_array('Yōdanji',array($money['enTitle'],$money['enTitle'],$money['enTitle']))){
//                    echo '客製化:'.$money['enTitle'].'加入空值'.'<br>'.$data_home[$i][$j]['title'].'<br>';
                    if($data_home[$i][$j]['title'] == 'Y&#333;danji'){
                        $nintendo_en['release_date'] = $data_home[$i][$j]['release_date'];
                        $nintendo_en['front_box_art'] = $data_home[$i][$j]['front_box_art'];
                        $nintendo_en['video_link'] = $data_home[$i][$j]['video_link'];
                        array_push($money, $nintendo_en);
                        echo '客製化'.$money['enTitle'].'完成'.'<br>';
                        $save_1 = "1";
                        break;
                    }
                }
                if($money['enTitle'] == 'Starlink: Battle for Atlas - Deluxe edition'){
//                    echo '客製化:'.$money['enTitle'].'加入空值'.'<br>'.$data_home[$i][$j]['title'].'<br>';
                    if($data_home[$i][$j]['title'] == 'Starlink: Battle for Atlas Deluxe Edition'){
                        $nintendo_en['release_date'] = $data_home[$i][$j]['release_date'];
                        $nintendo_en['front_box_art'] = $data_home[$i][$j]['front_box_art'];
                        $nintendo_en['video_link'] = $data_home[$i][$j]['video_link'];
                        array_push($money, $nintendo_en);
                        echo '客製化'.$money['enTitle'].'完成'.'<br>';
                        $save_1 = "1";
                        break;
                    }
                }
                if($money['enTitle'] == 'GUILTY GEAR XX ACCENT CORE PLUS R'){
//                    echo '客製化:'.$money['enTitle'].'加入空值'.'<br>'.$data_home[$i][$j]['title'].'<br>';
                    if($data_home[$i][$j]['title'] == 'GUILTY GEAR XX ACCENT CORE PLUS R'){
                        $nintendo_en['release_date'] = '2019年5月16日';
                        $nintendo_en['front_box_art'] = 'https://www.gamereactor.cn/media/17/guiltygear20_2441713_650x.jpg';
                        $nintendo_en['video_link'] = '';
                        array_push($money, $nintendo_en);
                        echo '客製化'.$money['enTitle'].'完成'.'<br>';
                        $save_1 = "1";
                        break;
                    }
                }
                if($money['enTitle'] == 'GUILTY GEAR'){
//                    echo '客製化:'.$money['enTitle'].'加入空值'.'<br>'.$data_home[$i][$j]['title'].'<br>';
                    if($data_home[$i][$j]['title'] == 'GUILTY GEAR'){
                        $nintendo_en['release_date'] = '2019年5月16日';
                        $nintendo_en['front_box_art'] = 'https://assets.nuuvem.com/image/upload/t_screenshot_full/v1/products/584aa79a7b323f7275001425/screenshots/f2xn6l3alszymjzy7qbg.jpg';
                        $nintendo_en['video_link'] = '';
                        array_push($money, $nintendo_en);
                        echo '客製化'.$money['enTitle'].'完成'.'<br>';
                        $save_1 = "1";
                        break;
                    }
                }
//                if($money['enTitle'] == 'DC Universe\u2122 Online'){
////                    echo '客製化:'.$money['enTitle'].'加入空值'.'<br>'.$data_home[$i][$j]['title'].'<br>';
//                    if($data_home[$i][$j]['title'] == 'DC Universe\u2122 Online'){
//                        $nintendo_en['release_date'] = '2019年8月6日';
//                        $nintendo_en['front_box_art'] = 'https://www.nintendo.com/content/dam/noa/en_US/games/switch/d/dc-universe-online-switch/Switch_DCUniverseOnline_box_eShop.png/_jcr_content/renditions/cq5dam.thumbnail.319.319.png';
//                        $nintendo_en['video_link'] = 'BvanBlaTE6m16nTRlXFc01oG7kkU9izS';
//                        array_push($money, $nintendo_en);
//                        echo '客製化'.$money['enTitle'].'完成'.'<br>';
//                        $save_1 = "1";
//                        break;
//                    }
//                }
//                if($money['enTitle'] == 'Super Mario Maker 2'){
//                    echo '客製化:'.$money['enTitle'].'加入空值'.'<br>'.$data_home[$i][$j]['title'].'<br>';
//                    if($data_home[$i][$j]['title'] == 'GUILTY GEAR'){
//                        $nintendo_en['release_date'] = '2019年5月16日';
//                        $nintendo_en['front_box_art'] = 'https://assets.nuuvem.com/image/upload/t_screenshot_full/v1/products/584aa79a7b323f7275001425/screenshots/f2xn6l3alszymjzy7qbg.jpg';
//                        $nintendo_en['video_link'] = '';
//                        array_push($money, $nintendo_en);
//                        echo '客製化'.$money['enTitle'].'完成'.'<br>';
//                        $save_1 = "1";
//                        break;
//                    }
//                }

//                if($money['enTitle'] == 'DAEMON X MACHINA: Prototype Missions'){
////                    echo '客製化:'.$money['enTitle'].'加入空值'.'<br>'.$data_home[$i][$j]['title'].'<br>';
//                    if($data_home[$i][$j]['title'] == 'DAEMON X MACHINA'){
//                        $nintendo_en['release_date'] = 'March 28, 2019';
//                        $nintendo_en['front_box_art'] = 'https://images.eshop-prices.com/resize?f=jpeg&h=240&url=https%3A%2F%2Fmedia.nintendo.com%2Fnintendo%2Fbin%2F5F-FZuWzpHhHSsOwR2mVgFaGD0RlmT_d%2FPjnC3W-IxgvB0h2xYliiBmSH3ZL2L9Bk.png&w=240';
//                        $nintendo_en['video_link'] = $data_home[$i][$j]['video_link'];
//                        array_push($money, $nintendo_en);
//                        echo '客製化'.$money['enTitle'].'完成'.'<br>';
//                        $save_1 = "1";
//                        break;
//                    }
//                }
//                if($money['enTitle'] == 'Growtopia'){
////                    echo '客製化:'.$money['enTitle'].'加入空值'.'<br>'.$data_home[$i][$j]['title'].'<br>';
////                    if($data_home[$i][$j]['title'] == 'DAEMON X MACHINA'){
//                        $nintendo_en['release_date'] = $data_home[$i][$j]['release_date'];
//                        $nintendo_en['front_box_art'] = $data_home[$i][$j]['front_box_art'];
//                        $nintendo_en['video_link'] = $data_home[$i][$j]['video_link'];
//                        array_push($money, $nintendo_en);
//                        echo '客製化'.$money['enTitle'].'完成'.'<br>';
//                        $save_1 = "1";
//                        break;
////                    }
//                }



                if ($money['enTitle'] == $data_home[$i][$j]['title']) {

//                    echo '$money[enTitle]:'.$money['enTitle'].'<br>';
//                    echo 'game $data_home:'.$data_home[$i][$j]['title'].' conut'.count(explode(strtoupper($money['enTitle']), strtoupper($data_home[$i][$j]['title']))).'<br>';
                    $nintendo_en['release_date'] = $data_home[$i][$j]['release_date'];
                    $nintendo_en['front_box_art'] = $data_home[$i][$j]['front_box_art'];
                    $nintendo_en['video_link'] = $data_home[$i][$j]['video_link'];
                    array_push($money, $nintendo_en);
//                    array_push($money, $data_home[$i][$j]);
                    $save_1 = "1";
                    break;
                }
                else{
//                    if($money['enTitle'] == 'Snipperclips Plus - Cut it out, together!'){
//                        echo '$i:'.$i."<br>";
//                        echo 'count($data_home):'.count($data_home) ."<br>";
//                        echo '$j:'.$j."<br>";
//                        echo 'count($data_home[$i]):'.count($data_home[$i]) ."<br>";
//                        echo '$data_home[$i][$j][\'title\']:'.$data_home[$i][$j]['title']."<br>";
//                    }

                    if($i == (count($data_home)-2) && $j == (count($data_home[$i])-1)){
                        array_push($money,  initNintendo_en());
//                        echo '加入空值';
//                        var_dump(initNintendo_en(),true)."<br>";
                    }
                }

            }

            if($save_1 == "1"){
                break;
            }

        }


        for($i = 0; $i < count($data_wiki);$i++) {

//            echo '$money[enTitle]:' . strtoupper($money['enTitle']) . '<br>';
//            echo '$data_wiki[game_en]:' . strtoupper($data_wiki[$i]['game_en']) . '<br>';
//            echo '$data_wiki[game]:' . strtoupper($data_wiki[$i]['game']) . '<br>';
            if($money['enTitle'] == 'Abyss'){
//            echo '客製化:'.$money['enTitle'].'加入空值'.'<br>'.$data_wiki[$i]['game'].'<br>';
                if($data_wiki[$i]['game'] == 'Abyss'){
                    array_push($money, $data_wiki[$i]);
                    echo '客製化'.$money['enTitle'].'完成'.'<br>';
                    break;
                }
                else{
                    array_push($money, initWiKi());

                    echo '客製化:'.$money['enTitle'].'加入空值'.'<br>';
                    break;
                }
            }

            if($money['enTitle'] == 'Super Mario Maker 2'){
//            echo '客製化:'.$money['enTitle'].'加入空值'.'<br>'.$data_wiki[$i]['game'].'<br>';
                if($data_wiki[$i]['game'] == '超級瑪利歐創作家2スーパーマリオメーカー2Super Mario Maker 2(瑪利歐製造2)'){
                    array_push($money, $data_wiki[$i]);
                    echo '客製化'.$money['enTitle'].'完成'.'<br>';
                    break;
                }

            }

            if ((count(explode(strtoupper($money['enTitle']), strtoupper($data_wiki[$i]['game_en']))) > 1) ||
                (count(explode(strtoupper($money['enTitle']), strtoupper($data_wiki[$i]['game']))) > 1) ||
                in_array(trim($money['enTitle']),$ex_name)) {
//                echo 'game_en:' . $data_wiki[$i]['game_en'] . ' conut' . count(explode(strtoupper($money['enTitle']), strtoupper($data_wiki[$i]['game_en']))) . '<br>';
//                echo 'game $data_wiki:' . $data_wiki[$i]['game'] . ' conut' . count(explode(strtoupper($money['enTitle']), strtoupper($data_wiki[$i]['game']))) . '<br>';

                array_push($money, $data_wiki[$i]);
                break;
            }
            else{
                if($i == (count($data_wiki)-1)){
                    array_push($money, initWiKi());

//                    echo '加入空值'.initWiKi();
                    break;
                }


            }


        }


//        for($i = 0; $i < count($data_home_jp);$i++) {
//
//            for($j=0;$j < count($data_home_jp[$i]);$j++){
//
//                if ((count(explode(strtoupper($money['enTitle']), strtoupper($data_home_jp[$i][$j]['title']))) > 1) ||
//                    (count(explode(strtoupper($money['1']['game']), strtoupper($data_home_jp[$i][$j]['title']))) > 1) ||
//                    (count(explode(strtoupper($money['1']['game_en']), strtoupper($data_home_jp[$i][$j]['title']))) > 1)) {
//
////                    echo '$money[1]game]:'.$money['1']['game'].'<br>';
////                    echo 'game $data_home_jp:'.$data_home_jp[$i][$j]['title'].' conut'.count(explode(strtoupper($money['enTitle']), strtoupper($data_home_jp[$i][$j]['title']))).'<br>';
//
//                    $nintendo_jp['title'] = $data_home_jp[$i][$j]['title'];
//                    $nintendo_jp['iurl'] = $data_home_jp[$i][$j]['iurl'];
//                    array_push($money, $nintendo_jp);
//
//                    break;
//                }else{
//
//                    if($i == (count($data_home_jp)-1) && $j == (count($data_home_jp[$i])-1)){
//                        array_push($money,  initNintendo_jp());
//                        break;
//                    }
//                }
//
//            }
//
//        }
//        echo '$money[2][\'title\']:'.$money[2]['title'].'<br>';
//        echo '$data 數量:'.count($data).'<br>';
            array_push($data, $money);


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
    $nintendo_en['video_link'] = '';

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

