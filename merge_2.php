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
                    if($merge['title'] == 'Lapis · Li · Abyss'){
                        $nintendo_jp['title'] = $data_home_jp[$i][$j]['title'];
                        $nintendo_jp['iurl'] = 'https://img-eshop.cdn.nintendo.net/i/'.$data_home_jp[$i][$j]['iurl'].'.jpg?w=284';
                        array_push($merge, $nintendo_jp);
                        $save_1 = "1";
                        echo '客製化'.$merge[2]['title'].'完成'.'<br>';
                        break;
                    }

                }
                if($data_home_jp[$i][$j]['title'] == 'ノラと皇女と野良猫ハート2'){
                    if($merge['title'] == 'Nora and Princess and Stray Cat Heart 2'){
                        $nintendo_jp['title'] = $data_home_jp[$i][$j]['title'];
                        $nintendo_jp['iurl'] = 'https://img-eshop.cdn.nintendo.net/i/'.$data_home_jp[$i][$j]['iurl'].'.jpg?w=284';
                        array_push($merge, $nintendo_jp);
                        $save_1 = "1";
                        echo '客製化'.$merge[2]['title'].'完成'.'<br>';
                        break;
                    }

                }
                if($data_home_jp[$i][$j]['title'] == 'ノラと皇女と野良猫ハート HD'){
                    if($merge['title'] == 'Nora and the Princess and the Stray Cat Heart HD'){
                        $nintendo_jp['title'] = $data_home_jp[$i][$j]['title'];
                        $nintendo_jp['iurl'] = 'https://img-eshop.cdn.nintendo.net/i/'.$data_home_jp[$i][$j]['iurl'].'.jpg?w=284';
                        array_push($merge, $nintendo_jp);
                        $save_1 = "1";
                        echo '客製化'.$merge[2]['title'].'完成'.'<br>';
                        break;
                    }

                }
                if($data_home_jp[$i][$j]['title'] == 'NORN9 LOFN for Nintendo Switch '){
                    if($merge['title'] == 'Nora and the Princess and the Stray Cat Heart HD'){
                        $nintendo_jp['title'] = $data_home_jp[$i][$j]['title'];
                        $nintendo_jp['iurl'] = 'https://img-eshop.cdn.nintendo.net/i/'.$data_home_jp[$i][$j]['iurl'].'.jpg?w=284';
                        array_push($merge, $nintendo_jp);
                        $save_1 = "1";
                        echo '客製化'.$merge[2]['title'].'完成'.'<br>';
                        break;
                    }

                }
                if($data_home_jp[$i][$j]['title'] == 'A系ヲタク彼女'){
                    if($merge['title'] == 'A series wotaku'){
                        $nintendo_jp['title'] = $data_home_jp[$i][$j]['title'];
                        $nintendo_jp['iurl'] = 'https://img-eshop.cdn.nintendo.net/i/'.$data_home_jp[$i][$j]['iurl'].'.jpg?w=284';
                        array_push($merge, $nintendo_jp);
                        $save_1 = "1";
                        echo '客製化'.$merge[2]['title'].'完成'.'<br>';
                        break;
                    }

                }
                if($data_home_jp[$i][$j]['title'] == '無双OROCHI２ Ultimate'){
                    if($merge['title'] == 'Musou Orochi 2 Ultimate'){
                        $nintendo_jp['title'] = $data_home_jp[$i][$j]['title'];
                        $nintendo_jp['iurl'] = 'https://img-eshop.cdn.nintendo.net/i/'.$data_home_jp[$i][$j]['iurl'].'.jpg?w=284';
                        array_push($merge, $nintendo_jp);
                        $save_1 = "1";
                        echo '客製化'.$merge[2]['title'].'完成'.'<br>';
                        break;
                    }

                }
                if($data_home_jp[$i][$j]['title'] == 'BLAZBLUE CROSS TAG BATTLE 特別体験版'){
                    if($merge['title'] == 'BLAZBLUE CROSS TAG BATTLE special trial version'){
                        $nintendo_jp['title'] = $data_home_jp[$i][$j]['title'];
                        $nintendo_jp['iurl'] = 'https://img-eshop.cdn.nintendo.net/i/'.$data_home_jp[$i][$j]['iurl'].'.jpg?w=284';
                        array_push($merge, $nintendo_jp);
                        $save_1 = "1";
                        echo '客製化'.$merge[2]['title'].'完成'.'<br>';
                        break;
                    }

                }
                if($data_home_jp[$i][$j]['title'] == '刑事J.B.ハロルドの事件簿　マンハッタン・レクイエム'){
                    if($merge['title'] == 'Keiji J.B. Harold no Jikenbo: Manhattan Requiem'){
                        $nintendo_jp['title'] = $data_home_jp[$i][$j]['title'];
                        $nintendo_jp['iurl'] = 'https://img-eshop.cdn.nintendo.net/i/'.$data_home_jp[$i][$j]['iurl'].'.jpg?w=284';
                        array_push($merge, $nintendo_jp);
                        $save_1 = "1";
                        echo '客製化'.$merge[2]['title'].'完成'.'<br>';
                        break;
                    }

                }
                if($data_home_jp[$i][$j]['title'] == '刑事J.B.ハロルドの事件簿　マーダー・クラブ'){
                    if($merge['title'] == 'Keiji J.B. Harold no Jikenbo: Satsujin Club'){
                        $nintendo_jp['title'] = $data_home_jp[$i][$j]['title'];
                        $nintendo_jp['iurl'] = 'https://img-eshop.cdn.nintendo.net/i/'.$data_home_jp[$i][$j]['iurl'].'.jpg?w=284';
                        array_push($merge, $nintendo_jp);
                        $save_1 = "1";
                        echo '客製化'.$merge[2]['title'].'完成'.'<br>';
                        break;
                    }

                }
                if($data_home_jp[$i][$j]['title'] == 'LITTLE FRIENDS -DOGS & CATS-（リトルフレンズ　ドッグス＆キャッツ）'){
                    if($merge['title'] == 'LITTLE FRIENDS - DOGS & CATS - (Little Friends Dogs & Cats)'){
                        $nintendo_jp['title'] = $data_home_jp[$i][$j]['title'];
                        $nintendo_jp['iurl'] = 'https://img-eshop.cdn.nintendo.net/i/'.$data_home_jp[$i][$j]['iurl'].'.jpg?w=284';
                        array_push($merge, $nintendo_jp);
                        $save_1 = "1";
                        echo '客製化'.$merge[2]['title'].'完成'.'<br>';
                        break;
                    }

                }
                if($data_home_jp[$i][$j]['title'] == '超・逃走中＆超・戦闘中　ダブルパック'){
                    if($merge['title'] == 'Ultra-Fleeing & Super Battle Double Pack'){
                        $nintendo_jp['title'] = $data_home_jp[$i][$j]['title'];
                        $nintendo_jp['iurl'] = 'https://img-eshop.cdn.nintendo.net/i/'.$data_home_jp[$i][$j]['iurl'].'.jpg?w=284';
                        array_push($merge, $nintendo_jp);
                        $save_1 = "1";
                        echo '客製化'.$merge[2]['title'].'完成'.'<br>';
                        break;
                    }

                }
                if($data_home_jp[$i][$j]['title'] == 'リアルタイムバトル将棋'){
                    if($merge['title'] == 'Real Time Battle Shogi'){
                        $nintendo_jp['title'] = $data_home_jp[$i][$j]['title'];
                        $nintendo_jp['iurl'] = 'https://img-eshop.cdn.nintendo.net/i/'.$data_home_jp[$i][$j]['iurl'].'.jpg?w=284';
                        array_push($merge, $nintendo_jp);
                        $save_1 = "1";
                        echo '客製化'.$merge[2]['title'].'完成'.'<br>';
                        break;
                    }

                }
                if($data_home_jp[$i][$j]['title'] == '√Letter ルートレター Last Answer'){
                    if($merge['title'] == '√ Letter Route letter Last Answer'){
                        $nintendo_jp['title'] = $data_home_jp[$i][$j]['title'];
                        $nintendo_jp['iurl'] = 'https://img-eshop.cdn.nintendo.net/i/'.$data_home_jp[$i][$j]['iurl'].'.jpg?w=284';
                        array_push($merge, $nintendo_jp);
                        $save_1 = "1";
                        echo '客製化'.$merge[2]['title'].'完成'.'<br>';
                        break;
                    }

                }
                if($data_home_jp[$i][$j]['title'] == 'ドタバタ調理アクション IT系ラーメン どらす'){
                    if($merge['title'] == 'Do not talk cooking action IT system ramen'){
                        $nintendo_jp['title'] = $data_home_jp[$i][$j]['title'];
                        $nintendo_jp['iurl'] = 'https://img-eshop.cdn.nintendo.net/i/'.$data_home_jp[$i][$j]['iurl'].'.jpg?w=284';
                        array_push($merge, $nintendo_jp);
                        $save_1 = "1";
                        echo '客製化'.$merge[2]['title'].'完成'.'<br>';
                        break;
                    }

                }
                if($data_home_jp[$i][$j]['title'] == 'ドラゴンクエストライバルズ'){
                    if($merge['title'] == 'Dragon Quest Rivals'){
                        $nintendo_jp['title'] = $data_home_jp[$i][$j]['title'];
                        $nintendo_jp['iurl'] = 'https://img-eshop.cdn.nintendo.net/i/'.$data_home_jp[$i][$j]['iurl'].'.jpg?w=284';
                        array_push($merge, $nintendo_jp);
                        $save_1 = "1";
                        echo '客製化'.$merge[2]['title'].'完成'.'<br>';
                        break;
                    }

                }
                if($data_home_jp[$i][$j]['title'] == 'RPGツクールMVプレイヤー'){
                    if($merge['title'] == 'RPG Maker MV Player'){
                        $nintendo_jp['title'] = $data_home_jp[$i][$j]['title'];
                        $nintendo_jp['iurl'] = 'https://img-eshop.cdn.nintendo.net/i/'.$data_home_jp[$i][$j]['iurl'].'.jpg?w=284';
                        array_push($merge, $nintendo_jp);
                        $save_1 = "1";
                        echo '客製化'.$merge[2]['title'].'完成'.'<br>';
                        break;
                    }

                }
                if($data_home_jp[$i][$j]['title'] == 'レコチョク'){
                    if($merge['title'] == 'Recochoku'){
                        $nintendo_jp['title'] = $data_home_jp[$i][$j]['title'];
                        $nintendo_jp['iurl'] = 'https://img-eshop.cdn.nintendo.net/i/'.$data_home_jp[$i][$j]['iurl'].'.jpg?w=284';
                        array_push($merge, $nintendo_jp);
                        $save_1 = "1";
                        echo '客製化'.$merge[2]['title'].'完成'.'<br>';
                        break;
                    }

                }
                if($data_home_jp[$i][$j]['title'] == 'プラチナ・トレイン～日本縦断てつどうの旅～'){
                    if($merge['title'] == 'Platinum Train: Nihon Juudan Tetsudou no Tabi'){
                        $nintendo_jp['title'] = $data_home_jp[$i][$j]['title'];
                        $nintendo_jp['iurl'] = 'https://img-eshop.cdn.nintendo.net/i/'.$data_home_jp[$i][$j]['iurl'].'.jpg?w=284';
                        array_push($merge, $nintendo_jp);
                        $save_1 = "1";
                        echo '客製化'.$merge[2]['title'].'完成'.'<br>';
                        break;
                    }

                }
                if($data_home_jp[$i][$j]['title'] == 'カラオケJOYSOUND for Nintendo Switch'){
                    if($merge['title'] == 'Karaoke JOYSOUND for Nintendo Switch'){
                        $nintendo_jp['title'] = $data_home_jp[$i][$j]['title'];
                        $nintendo_jp['iurl'] = 'https://img-eshop.cdn.nintendo.net/i/'.$data_home_jp[$i][$j]['iurl'].'.jpg?w=284';
                        array_push($merge, $nintendo_jp);
                        $save_1 = "1";
                        echo '客製化'.$merge[2]['title'].'完成'.'<br>';
                        break;
                    }

                }
                if($data_home_jp[$i][$j]['title'] == 'ネットキャッチャー　ネッチ'){
                    if($merge['title'] == 'Net Catcher Neck'){
                        $nintendo_jp['title'] = $data_home_jp[$i][$j]['title'];
                        $nintendo_jp['iurl'] = 'https://img-eshop.cdn.nintendo.net/i/'.$data_home_jp[$i][$j]['iurl'].'.jpg?w=284';
                        array_push($merge, $nintendo_jp);
                        $save_1 = "1";
                        echo '客製化'.$merge[2]['title'].'完成'.'<br>';
                        break;
                    }

                }
                if($data_home_jp[$i][$j]['title'] == 'niconico'){
                    if($merge['title'] == 'niconico'){
                        $nintendo_jp['title'] = $data_home_jp[$i][$j]['title'];
                        $nintendo_jp['iurl'] = 'https://img-eshop.cdn.nintendo.net/i/'.$data_home_jp[$i][$j]['iurl'].'.jpg?w=284';
                        array_push($merge, $nintendo_jp);
                        $save_1 = "1";
                        echo '客製化'.$merge[2]['title'].'完成'.'<br>';
                        break;
                    }

                }
                if($data_home_jp[$i][$j]['title'] == 'ファンタシースターオンライン2 クラウド'){
                    if($merge['title'] == 'Phantasy Star Online 2 Cloud'){
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

