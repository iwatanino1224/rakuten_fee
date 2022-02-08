<?php

// 機能：今月の楽天モバイル料金を算出する
// 関数名：楽天料金
// 引数： データ、回線
// 戻り値：料金説明文
function rakuten_fee($data, $line) {
  $rakuten_plan = array(0, 980, 1980, 2980);
  if ($data <= 1) {
    if ($line == 1) {
      $fee = $rakuten_plan[0];
    } else {
      $fee = $rakuten_plan[1];
    }
  } else if ($data <= 3) {
    $fee = $rakuten_plan[1];
  } else if ($data <= 20) {
    $fee = $rakuten_plan[2];
  } else if (20 < $data) {
    $fee = $rakuten_plan[3];
  }
  $message = implode('', array('今月の料金は',$fee,'円/月(税込',floor($fee * 1.1),'円)です。'));
  return $message;
}


print(rakuten_fee(2, 1));
?>