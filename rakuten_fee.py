import math

# 機能：今月の楽天モバイル料金を算出する
# 関数名：楽天料金
# 引数： データ、回線
# 戻り値：料金説明文
def rakuten_fee(data, line):
  RAKUTEN_PLAN = [0, 980, 1980, 2980]
  if data <= 1:
    if line == 1:
      fee = RAKUTEN_PLAN[0]
    else:
      fee = RAKUTEN_PLAN[1]
  elif data <= 3:
    fee = RAKUTEN_PLAN[1]
  elif data <= 20:
    fee = RAKUTEN_PLAN[2]
  elif 20 < data:
    fee = RAKUTEN_PLAN[3]
  message = ''.join([str(x) for x in ['今月の料金は', fee, '円/月(税込', math.floor(fee * 1.1), '円)です。']])
  return message


print(rakuten_fee(2, 1))