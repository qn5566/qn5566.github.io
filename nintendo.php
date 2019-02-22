<?php

	//白名單設定
	// $data_array = array("lifunny.me","test.scott01.com","qn5566.github.io","test.nintendo.com");


	// if(isset($_GET['ask_type']) && !empty($_GET['ask_type'])){
	// 	    // $ask_type = $_GET['ask_type'];
		    // $ask_type = $_GET['ask_type'];

		    

		    // for($i=0;$i<count($data_array);$i++){
		    //     if($ask_type == $data_array[$i]){
		    //         $action = "poxy.php";
		    //     }

		    //     // array_push($debug, array($i,$data_array[$i]));
		    // }
		    // if(is_null($action)){
		    //     header("location:http://lifunny.me/");
		    //     return;
		    // }

    

		//開始判別
		$dir = './data/shop_data.txt';
	 // 	$data = file_get_contents($dir);
	 //    if($data){

		// 	echo $data;
	 //    	return;
	 //    }


 		$ch=curl_init();
        curl_setopt( $ch, CURLOPT_URL , 'https://eshop-prices.com/prices?currency=USD'); 
        curl_setopt( $ch , CURLOPT_HEADER, 0);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER , 1);
        curl_setopt( $ch, CURLOPT_USERAGENT , 'Mozilla/5.0 (Windows; U; Windows NT 5.1; )');
        $contents=curl_exec($ch );
        $contents = mb_convert_encoding($contents, 'utf-8', 'GBK, UTF-8, ASCII');

        // echo $contents;
		// file_put_contents('./data/raw.txt', $contents);

		$first_pattern = '/<table data-search-table=true>[\w\s\d\W]*<\/table>/';
        preg_match_all($first_pattern,$contents,$first_content);




		$dom = new domDocument;
        $dom->loadHTML($first_content[0][0]);
        $dom->preserveWhiteSpace = false;
        if (!empty($dom)) {
            $tags = $dom->getElementsByTagName('thead');
            $tags2 = $dom->getElementsByTagName('tr');
        } else {
            // return self::failed(32, '取内容异常：'. '$contents:'.$first_content[0]);
        }
		
		// echo $first_content[0][0];

		$title = Array();
		$data = Array();
        for ($i=0; $i<$tags2->length;$i++) {
            $check = $tags2->item($i);
            if (!empty($check)) {
				
				// echo '第'.$i.'次'."<br>";
                
                $tds_1 = $tags2->item($i)->getElementsByTagName('th');
				$tds_2 = $tags2->item($i)->getElementsByTagName('td');

				// var_dump( $tds_2);
				if($i < 1){
				for ($j=0; $j <$tds_1->length; $j++) {
					
					array_push($title, $tds_1->item($j)->nodeValue);
					// echo 'title:'.$title[$j]."<br>";
					// echo '價錢:'.$cost_total[$j]."\n";
					}
				}

				$cost = Array();
				$cost_total = Array();
				for ($j=0; $j <$tds_2->length; $j++) {

					array_push($cost, str_replace("$","", ($tds_2->item($j)->nodeValue)));
					array_push($cost_total, str_replace("N/A","0", $cost[$j]));

				}

				// echo '遊戲名稱:'.$tds_1->item(0)->nodeValue .', 最貴:'.$title[array_search((max($cost_total)),$cost_total) + 1 ] .' '.MAX($cost_total). ',  最便宜:'.$title[array_search((min(array_filter($cost_total))),$cost_total) + 1 ] .' '.min(array_filter($cost_total)).'相差: $'.(MAX($cost_total)-min(array_filter($cost_total)))."<br>";


				$data_t['title'] = trim($tds_1->item(0)->nodeValue);
				$data_t['max_loc'] = trim($title[array_search((max($cost_total)),$cost_total) + 1 ]);
				$data_t['max_price'] = trim(MAX($cost_total));
				$data_t['min_loc'] = trim($title[array_search((min(array_filter($cost_total))),$cost_total) + 1 ]);
				$data_t['min_price'] = trim(min(array_filter($cost_total)));
				$data_t['differ'] = trim(MAX($cost_total)-min(array_filter($cost_total)));

				array_push($data,$data_t);
            }

        }

		file_put_contents($dir, json_encode($data));
        echo json_encode($data);

		// }else{
		    // echo var_dump($debug,true);
		//         header("location:http://lifunny.me/");
		//         die;
		// }

		


?>
