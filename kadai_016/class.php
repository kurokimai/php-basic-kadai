<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP_kadai_016</title>
</head>
<body>
<p>
         <?php
         // クラスを定義する
         class Food {
             // プロパティを定義する                        
             private $name;
             private $price;
 
            // メソッドを定義する
          public function show_price() {
            return $this->price;
        }

             // コンストラクタを定義する
             public function __construct(string $name, int $price) {
                 $this->name = $name;
                 $this->price = $price;
             }
         }

         //インスタンス化する
         $food = new Food('potato', 250);

         // インスタンス$foodの各プロパティの値を出力する
         print_r($food);
        ?>
        </p>

        <p>
          <?php
         class Animal {
          // プロパティを定義する                        
          private $name;
          private $height;
          private $weight;

          // メソッドを定義する
          public function show_height() {
            return $this->height;
        }

          // コンストラクタを定義する
          public function __construct(string $name, int $height, string $weight) {
              $this->name = $name;
              $this->height = $height;
              $this->weight = $weight;
         }
        }
 
         // インスタンス化する
         $animal = new Animal('dog', 60, 5000);
 
         // インスタンス$userの各プロパティの値を出力する
         print_r($animal);
         echo '<br>';

         //取得した値を出力する
      // Foodクラスのインスタンスから価格を取得する
        echo $food->show_price().'<br>';

      // Animalクラスのインスタンスから高さを取得する
        echo $animal->show_height().'<br>';
      ?>
      </p>
</body>
</html>