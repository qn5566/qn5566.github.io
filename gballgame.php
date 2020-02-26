<?php
/**
 * Created by PhpStorm.
 * User: hey_j
 * Date: 2019/2/27
 * Time: 上午9:55
 */
ini_set("display_errors", 1);
ini_set('memory_limit', '-1');
$dir = '/Users/Ted/Documents/GitHub/qn5566.github.io/data/gballgame.txt';
$url = 'http://ws.gamebox.cool/graphql';

$data_1 = GetData(1, $url);

$gbGame = $data_1['data']['searchGames'];
//總數
$total = $data_1['data']['searchGames']['listInfo']['total'];
$tot_page = ceil($total / 10);

echo '目前遊戲總共:' . $total . "<br>" . "\n";
echo '且總共有:' . $tot_page . "頁<br>" . "\n";

//die;
$data_gb = array();

echo '第1' . "頁完成<br>" . "\n";
for ($i = 2; $i <= $tot_page; $i++) {

    $data_1 = GetData($i, $url);


    foreach($data_1['data']['searchGames']['games'] as $data_T){

        if ($data_T['id']=='5c7a45380d876d4d8528806e') {

            $data_T['imgUrl'] = 'https://img.ruten.com.tw/s1/a/44/3d/21847035569213_701.jpg';
            echo '修正 id'.$data_T['id']. "<br>\n";
            echo '修正 enTitle'.$data_T['enTitle']. "<br>\n";
        }

        if ($data_T['id']=='5c7a45380d876d4d85288020') {

            $data_T['imgUrl'] = 'https://www.nintendo.com/content/dam/noa/en_US/games/switch/d/dragon-ball-z-super-butoden-switch/Switch_DRAGONBALLZ-SuperButoden_box_eShop.png/_jcr_content/renditions/cq5dam.thumbnail.319.319.png';
            echo '修正 id'.$data_T['id']. "<br>\n";
            echo '修正 enTitle'.$data_T['enTitle']. "<br>\n";
        }

        if ($data_T['id']=='5c7a45370d876d4d8528680e') {

            $data_T['imgUrl'] = 'https://www.nintendo.com/content/dam/noa/en_US/games/switch/a/americas-greatest-game-shows-wheel-of-fortune-and-jeopardy-switch/Switch_AmericasGreatest-WheelJeopardy_box.png/_jcr_content/renditions/cq5dam.thumbnail.319.319.png';
            $data_T['minPriceCountryCode'] = 'US';
            echo '修正 id'.$data_T['id']. "<br>\n";
            echo '修正 enTitle'.$data_T['enTitle']. "<br>\n";
        }

        if ($data_T['id']=='5c7a45390d876d4d8528c1a2') {

            $data_T['imgUrl'] = 'https://www.nintendo.com/content/dam/noa/en_US/games/switch/s/steven-universe-save-the-light-and-ok-k-o-lets-play-heroes-combo-switch/Switch_StevenUniverseOKKOCombo_box.png/_jcr_content/renditions/cq5dam.thumbnail.319.319.png';
            $data_T['minPriceCountryCode'] = 'US';
            echo '修正 id'.$data_T['id']. "<br>\n";
            echo '修正 enTitle'.$data_T['enTitle']. "<br>\n";
        }

        if ($data_T['id']=='5c7a453a0d876d4d85291ae8') {

            $data_T['imgUrl'] = 'https://www.nintendo.com/content/dam/noa/en_US/games/switch/m/minecraft-switch/Switch_Minecraft_box.png/_jcr_content/renditions/cq5dam.thumbnail.319.319.png';
            $data_T['minPriceCountryCode'] = 'US';
//            $data_T['twTitle'] = 'Minecraft: Story Mode - 試玩版';
            echo '修正 id'.$data_T['id']. "<br>\n";
            echo '修正 enTitle'.$data_T['enTitle']. "<br>\n";
        }

        if ($data_T['id']=='5c7a453b0d876d4d85293b82') {

            $data_T['imgUrl'] = 'https://images.eshop-prices.com/resize?f=webp&h=480&url=https%3A%2F%2Fcdn01.nintendo-europe.com%2Fmedia%2Fimages%2F08_content_images%2Fgames_6%2Fnintendo_switch_7%2Fnswitch_starlinkbattleforatlas%2FCI_NSwitch_StarlinkBattleForAtlas_Deluxe_image950w.jpg&w=480';
            $data_T['minPriceCountryCode'] = 'US';
            $data_T['twTitle'] = '銀河聯軍：阿特拉斯之戰 - 試玩版';
            echo '修正 id'.$data_T['id']. "<br>\n";
            echo '修正 enTitle'.$data_T['enTitle']. "<br>\n";
        }


        if ($data_T['id']=='5c7a453c0d876d4d8529614a') {

//            $data_T['imgUrl'] = 'https://images.eshop-prices.com/resize?f=webp&h=480&url=https%3A%2F%2Fcdn01.nintendo-europe.com%2Fmedia%2Fimages%2F08_content_images%2Fgames_6%2Fnintendo_switch_7%2Fnswitch_starlinkbattleforatlas%2FCI_NSwitch_StarlinkBattleForAtlas_Deluxe_image950w.jpg&w=480';
//            $data_T['minPriceCountryCode'] = 'US';
            $data_T['twTitle'] = '傳說對決 Switch版';
            echo '修正 id'.$data_T['id']. "<br>\n";
            echo '修正 enTitle'.$data_T['enTitle']. "<br>\n";
        }

        if ($data_T['id']=='5c7a453c0d876d4d85299564') {

            $data_T['imgUrl'] = 'https://gamepedia.cursecdn.com/minecraft_zh_gamepedia/thumb/7/76/MCSMS2AppIcon.png/300px-MCSMS2AppIcon.png?version=9f93df3689ad43eb46b6ee439a00ddf1%201.5x,%20https://gamepedia.cursecdn.com/minecraft_zh_gamepedia/thumb/7/76/MCSMS2AppIcon.png/400px-MCSMS2AppIcon.png?version=9f93df3689ad43eb46b6ee439a00ddf1%202x';
//            $data_T['minPriceCountryCode'] = 'US';
//            $data_T['twTitle'] = '傳說對決 Switch版';
            echo '修正 id'.$data_T['id']. "<br>\n";
            echo '修正 enTitle'.$data_T['enTitle']. "<br>\n";
        }

        if ($data_T['id']=='5c7a453d0d876d4d852999a8') {

            $data_T['minTWPrice'] = '2688';
//            $data_T['minPriceCountryCode'] = 'US';
//            $data_T['twTitle'] = '傳說對決 Switch版';
            echo '修正 id'.$data_T['id']. "<br>\n";
            echo '修正 enTitle'.$data_T['enTitle']. "<br>\n";
        }


        if ($data_T['id']=='5c7a453a0d876d4d85290b10') {

            $data_T['imgUrl'] = 'https:\/\/www.nintendo.com\/content\/dam\/noa\/en_US\/games\/switch\/h\/hulu-switch\/Switch_Hulu_box_eShopv2.png\/_jcr_content\/renditions\/cq5dam.thumbnail.319.319.png';
//            $data_T['minPriceCountryCode'] = 'US';
//            $data_T['twTitle'] = '傳說對決 Switch版';
            echo '修正 id'.$data_T['id']. "<br>\n";
            echo '修正 enTitle'.$data_T['enTitle']. "<br>\n";
        }

        array_push($gbGame['games'], $data_T);
    }





//    $gbGame['games'] = $gbGame['games'].','.$data_1['data']['searchGames']['games'];
//    array_push($gbGame['games'], $data_1['data']['searchGames']['games']);
//    array_merge($gbGame['games'], $data_1['data']['searchGames']['games']);
//    $gbGame['games'] + $data_1['data']['searchGames']['games'];

    echo '第' . $i . "頁完成<br>" . "\n";
//    sleep(2);
}

if ($gbGame['games'] > 10) {
    file_put_contents($dir, json_encode($gbGame));
}
echo '-----------------------ok--------------------------';

/**
 * @param $post
 * @param $url
 * @return mixed
 */
function GetData($_pagenum, $url)
{
    $title = '$title';
    $isOnsale = '$isOnsale';
    $isAvaliable = '$isAvaliable';
    $isSupportTwLang = '$isSupportTwLang';
    $playerNum = '$playerNum';
    $limit = '$limit';
    $page = '$page';
    $post['operationName'] = 'searchGames';
    $post['variables'] = array(
        "title" => null,
        "isOnsale" => null,
        "isAvaliable" => null,
        "isSupportTwLang" => null,
        "playerNum" => null,
        "limt" => 10,
        "page" => $_pagenum);
    $post['query'] = "query searchGames($title: String, $isOnsale: Boolean, $isAvaliable: Boolean, $isSupportTwLang: Boolean, $playerNum: Int, $limit: Int, $page: Int) {\n  searchGames(title: $title, isOnsale: $isOnsale, isAvaliable: $isAvaliable, isSupportTwLang: $isSupportTwLang, playerNum: $playerNum, limit: $limit, page: $page) {\n    games {\n      id\n      enTitle\n      twTitle\n      jpTitle\n      imgUrl\n      minUSDPrice\n      minTWPrice\n      minPriceCountryCode\n      isDiscount\n      discountUntil\n      discountInfo {\n        countryCode\n        originUSDPrice\n        originTWDPrice\n        discountUSDPrice\n        discountTWDPrice\n        __typename\n      }\n      isVotingName\n      nameSuggestNum\n      votersNum\n      isHistoryLowest\n      isAllChinese\n      rateScore\n      rateNum\n      chineseSupport\n      __typename\n    }\n    listInfo {\n      page\n      dataNumOfPage\n      total\n    }\n }\n}\n";

    $postdata = json_encode($post);
    $contents_1 = _curl_new($url, $postdata);
    $data_1 = json_decode($contents_1, true);
    return $data_1;
}


/**
 * Scott
 * 比較單純 20190220
 * @param $url
 * @return mixed|string
 */
function _curl_new($url, $post)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, sdch'); //加入gzip解析
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Content-Length: ' . strlen($post)));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1); // 啟用POST
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; )');
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $contents = curl_exec($ch);
    $contents = mb_convert_encoding($contents, 'UTF-8', 'GBK, UTF-8, ASCII');
    curl_close($ch);
    return $contents;
}


?>