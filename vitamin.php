<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <img src="images/daik.png" alt="大根くん" id="daik">
    <div class="wrapper">
      <div  class="result_img">
        <img src="images/result.png" alt="完成">
      </div>
      <div class="result">
        <h3 class="h3">材料</h3>
    <?php
    $count = 0;
    while (1) {
				$con = mysqli_connect("localhost", "root", "") or die("接続失敗");
				mysqli_set_charset($con, "utf8");
				mysqli_select_db($con, "HEW");
        $rand = rand(1,10);
				$sql = "SELECT * FROM Nutrition WHERE id = {$rand}";
				$result = mysqli_query($con, $sql);
				while ($row = mysqli_fetch_array($result)) {
				 $num = $row["Vitamin"];
         print $row["v_f"]."<br>";
				}
        $count += (int)$num;
        // print $count."<br>";
				mysqli_close($con);
        if($count>9){
          break;
        }
    }
     ?>
   </div>
   <div class="top_s">
     <a href="index.html" class="top"><p>トップページへ</p></a>
   </div>
   </div>
  </body>
</html>
