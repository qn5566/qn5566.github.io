<?php
/**
 * Created by PhpStorm.
 * User: hey_j
 * Date: 2019/2/27
 * Time: 上午9:55
 */
//ini_set("display_errors", 1);
ini_set('memory_limit', '-1');
//ini_set("precision", 14);
$dir = '/Users/ftn_scott/Documents/GitHub/qn5566.github.io/data/nintendo_us_new.txt';
$url = 'http://eshop-checker.xyz/games.json';
$result = array();
$contents = _curl_new($url);
$data = json_decode($contents, true);
//總數
//var_dump($contents);
//echo 'rrr'.$data;

$total = count($data['list']);
//第一次
$result['total']     = $total;
$result['update_on'] = $data['update_on'];
echo '目前遊戲總共:' . $total . "<br>" . "\n";

$data_home = $data['list'];
$nintendo_en = array();
for ($j = 0; $j < $total; $j++) {

    $nintendo_en[$j]['title'] = $data_home[$j]['title'];
    $nintendo_en[$j]['url'] = $data_home[$j]['url'];
    $nintendo_en[$j]['onsale'] = $data_home[$j]['onsale'];
    foreach($data_home[$j]['price'] as $key => $value ){

//        echo $key .':'.round($value,2)."\n";
//        $temp = round($value,2);
        $temp = sprintf("%01.2f",$value);
        $nintendo_en[$j]['price'][$key] = $temp;


//        $nintendo_en[$j]['price'][$key] = round($value,2);
    }


    if ($data_home[$j]['release']['us']) {
        $nintendo_en[$j]['release']['us'] = '美國' . $data_home[$j]['release']['us'];
//        echo '有us發售'."<br>"."\n";
    }
    if ($data_home[$j]['release']['eu']) {
        $nintendo_en[$j]['release']['eu'] = '歐洲' . $data_home[$j]['release']['eu'];
//        echo '有eu發售'."<br>"."\n";
    }
    if ($data_home[$j]['release']['jp']) {
        $nintendo_en[$j]['release']['jp'] = '日本' . $data_home[$j]['release']['jp'];
//        echo '有jp發售'."<br>"."\n";
    }

    if ($data_home[$j]['images']['cover']) {
        $nintendo_en[$j]['images']['cover'] = $data_home[$j]['images']['cover'];
//        echo '有cover圖片'."<br>"."\n";
    }
    if ($data_home[$j]['images']['square']) {
        $nintendo_en[$j]['images']['square'] = $data_home[$j]['images']['square'];
//        echo '有square圖片'."<br>"."\n";
    }
    if ($data_home[$j]['images']['wide']) {
        $nintendo_en[$j]['images']['wide'] = $data_home[$j]['images']['wide'];
//        echo '有wide圖片'."<br>"."\n";
    }


//    echo '遊戲:'.$nintendo_en[$j]['title']."<br>"."\n";
//    echo '發售:'.$nintendo_en[$j]['release']."<br>"."\n";
//    echo '圖片:'.$nintendo_en[$j]['images']."<br>"."\n";
}
array_push($result, $nintendo_en);

//file_put_contents($dir, json_encode($result));
if ($total > 10) {
    file_put_contents($dir, json_encode($result));
}
echo '-----------------------ok--------------------------';

/**
 * Scott
 * 抓取 curl
 */
function _curl($_url)
{
    $ch = curl_init();
    // $this_header = array("content-type: application/x-www-form-urlencoded; charset=UTF-8");
    curl_setopt($ch, CURLOPT_URL, $_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // 302 redirect
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $contents = curl_exec($ch);
    $contents = mb_convert_encoding($contents, 'GB2312', 'GBK, UTF-8, ASCII , U+00E9');
    curl_close($ch);
    return $contents;
}


/**
 * Scott
 * 比較單純 20190220
 * @param $url
 * @return mixed|string
 */
function _curl_new($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, sdch'); //加入gzip解析
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; )');
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $contents = curl_exec($ch);
    $contents = mb_convert_encoding($contents, 'UTF-8', 'UTF-8, ASCII');
    curl_close($ch);
    return trim($contents);
}


?>