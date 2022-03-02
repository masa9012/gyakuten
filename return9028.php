<?php
// // function return_args(){
// //   $args = array(10,20,30,40,50);
// //   return $args;
// // }

// // print "返り値を変数に買うのうして配列変数を展開".PHP_EOL;
// // $numbers = return_args();
// // foreach($numbers as $unchi){
// //   print $unchi . PHP_EOL;
// // }

// // // print "list関数を利用して複数の返り値をそれぞれ変数に格納する" .PHP_EOL;
// // // list($unchi1, $unchi2, $unchi3) = return_args();
// // // print $unchi1 . PHP_EOL;
// // // print $unchi2 . PHP_EOL;
// // // print $unchi3 . PHP_EOL;


 
// // function GetPI($diameter){
 
// //   //円周の長さを求める
// // $en = $diameter * $diameter * 3.14;
 
// //   //計算結果をreturnで返す
// //   return $en;
// // }
 
// // //直径を指定
// // $value = 10;
 
// // //引数に直径の値を指定して結果を取得する
// // $unchi = GetPI($value);
 
// // echo '円周の長さ :'.$unchi . PHP_EOL;

 
// // // class Slime{
// // //     public $type;
// // //     public $suffix = '';
    
// // //     public $hp = 10;
// // //     public $power = 3;
    
// // //     function __construct($suffix , $type){
// // //         $this->suffix = $suffix;
// // //         $this->type = $type;
// // //     }
    
// // //     function name(){
// // //         return $this->type . $this->suffix;
// // //     }
    
// // //     function attack($syuzinko){
// // //         print $this->name() . 'が' . $syuzinko . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた' . PHP_EOL;
// // //     }
// // // }

// // // $slime_Z = new slime('A' , 'スライム');

// // // $slime_Z->attack('主人公');



// // // function fruits($vallue){
// // //     print 'これは' . $vallue . 'です。' . PHP_EOL;
// // // }

// // // fruits('apple');

// // // $kudamono = 'いちご';

// // // fruits($kudamono);


// // function Baby($osyaburi){
// //     $milk =  $osyaburi;
// //     return $milk;
// // }

// // $osime = 100000;

// // $unchi = Baby($osime);

// // print $unchi . PHP_EOL;

// function basketball($syuto){
//     $total = $syuto * 2;
//     return $total;
// }

// $twoP = 100;

// $Goal = basketball($twoP);

// // print $Goal . '点' . PHP_EOL;


 
// // // // function foo()
// // // // {
// // // //   $hoge = 1;
// // // //   echo $hoge . PHP_EOL;
// // // // }
 
// // // // foo();

// function calculation2($int){
//   return $int += $int;
// }

// $ex = 10;
// echo $ex . PHP_EOL;

// $onakasuita =calculation2($ex);

// print "犬伏は".$onakasuita .PHP_EOL;

// echo $ex . PHP_EOL;


// // // // $sports = ["サッカー", "フットサル", "null", "野球", "バスケ", "null", "バレー"];

// // // // $sports = array_diff($sports,array("null","野球"));

// // // // print_r($sports);

// // // // echo PHP_EOL;

// // // // function get_test(){
// // // //   $test = 'これはテストです' . PHP_EOL;
// // // //   return $test;
// // // // }
// // // // echo get_test();

// // // // function dog($jaki){
// // // //     $esamoney = $jaki * 150;
// // // //     return $esamoney;
// // // // }
// // // // $oneday = 3;
// // // // $esa = dog($oneday);
// // // // print '1日あたりの餌の個数は' . $esa . '個' .PHP_EOL;

// function hello(){
//   $aisatu = "こんにちは";
//   print $aisatu . PHP_EOL;
// }

// //出力１つ目
// hello() . PHP_EOL;

// // // // $japanese = hello();
// // // // //出力2つ目
// // // // print $japanese;

// // // function staticFunc(){
// // //     static $num = 0;
// // //     $num++;
// // //     print $num . PHP_EOL;
// // // }

// // // // staticを使うことで１づつ値が増えていく

// // // //関数実行
// // // staticFunc();
// // // staticFunc();
// // // staticFunc();

// // // function abcdFunct(){
// // //     $num = 0;
// // //     $num++;
// // //     print $num . PHP_EOL;
// // // }

// // // // staticを使わない場合

// // // //関数実行
// // // abcdFunct();
// // // abcdFunct();
// // // abcdFunct();

// // // $foods = ["はまち" , "マグロ" , "うに" , "たまご"  , "うに" , "かに" , "うに"];
// // // foreach($foods as $Fish){
// // //     if(preg_match("/うに/" , $Fish)){
// // //         print("美味しくない" . PHP_EOL);
// // //     }else{
// // //         print("美味しい" .PHP_EOL);
// // //     }
// // // }

// // // $user[level] = ‘beginner’;
// // // print_r($user);

// // // $array1 = array('color'=>'red', 10=>1, 0=>3);
// // // $array1[] = 100;
// // // $array2 = array('a', 'b', 'color'=>'green', 5);
// // // $array = $array1 + $array2;

// // // print_r($array1);
// // // print_r($array2);
// // // print_r($array);



// // // $name[0] = '山田';
// // // $name[1] = '高橋';

// // // print $name[0];



// // // 変数の初期化
// // $array = null;
// // $slice_array = null;

// // // 配列を用意
// // $array = array( 'Shibaken', 'Pomeranian', 'Golden retriever', 'Greyhound', 'Siberian husky');

// // // 配列の先頭から要素を取得
// // $slice_array = array_splice($array, 1, 2, null);



// // // 削除された部分を出力
// // // var_dump($slice_array);

// // // $x=1;
// // // $y=&$x;//$xのアドレスを$yにコピー
// // // $x=10;//$xの値を変更
// // // print$y;

// // // $rank = "甲";

// // // switch ($rank) {
// // //   case "甲":
// // //     print "大変いいです";
// // //     break;
  
// // //   case "乙":
// // //     print "良いです";
// // //     break;
    
// // //   case "丙":
// // //     print "もう少しがんばりましょう";
// // //     break;
  
// // //   default: //何も合致しなかった場合必要
// // //     print "????";
// // //     break;

// // // $i = 10;
// // // while ($i < 50){
// // //   print $i . "番目のループです" . PHP_EOL;
// // //   $i ++;
// // // }

// // // $i = 5;
// // // do {
// // //   print $i . "番目のループです。" .PHP_EOL;
// // //   $i ++;
// // // }while($i < 10);

// // // // for($i = 3; $i <= 100; $i++){
// // //   print $i . "番目のループです" . PHP_EOL;
// // // }

// function addTen($value)
// {
//   return $value + 10;
// }

// //呼び出し元
// $answer = addTen(5);
// print $answer .PHP_EOL ;

// function calculation(){
//     $num1 = 10;
//     $num2 = 20;
//     $unchi = $num1 + $num2;
//     print $unchi;
// }


// calculation();

class Dog {
  // プロパティ定義
  private $name;
  
  // インスタンス化するときに引数を受け取るようにしている
  public function __construct($name) {
    $this->name = $name;
  }
  
  public function getName() {
    return $this->name;
  }
}

class Dachshund extends Dog {
  
  private $sound = "Bow!";
  
  
}

?>

