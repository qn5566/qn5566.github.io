<?php
/**
 * Created by PhpStorm.
 * User: hey_j
 * Date: 2019/2/27
 * Time: 上午9:55
 */
ini_set("display_errors", 1);
ini_set('memory_limit', '-1');
$dir = '/Users/ftn_scott/Documents/GitHub/qn5566.github.io/data/gballgame.txt';
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

            $data_T['imgUrl'] = 'https://images.eshop-prices.com/resize?f=jpeg&h=240&url=https%3A%2F%2Fimg-eshop.cdn.nintendo.net%2Fi%2F2bd3db9042d9afd324fa2ba26d8fb1ac5a11c3a1758c7f705e8bdf789374c151.jpg';
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