<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>POSTのサンプル</title>
  </head>
  <body>
    <?php
      //commentがPOSTされているなら
      if((isset($_POST["comment"])) && (isset($_POST["name"]))){
        //エスケープしてから表示
        $comment = htmlspecialchars($_POST["comment"]);
        $name = htmlspecialchars($_POST["name"]);
        print("あなたのコメントは「 ${comment} 」です。");
        print("あなたの名前は「 ${name} 」です。");
      } else {
    ?>
        <p>入力してください。</p>
        <form method="POST" action="index.php">
          <p>コメント<br>
            <textarea name="comment" rows="8" cols="80"></textarea>
          </p>
          <p>氏名<br>
            <input name="name" />
          </p>
          <input type="submit" value="送信" />
        </form>
    <?php
      }
    ?>
  </body>
</html>
