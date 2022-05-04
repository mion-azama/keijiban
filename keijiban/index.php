<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <header>
        <div class="logo">
            <img src="4eachblog_logo.jpg">
        </div>

        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>

        </ul>
    </header>

    <main>
        <div class="left">

            <h1>プログラミングに役立つ掲示板</h1>
            <h2>入力フォーム</h2>
            <form method="post" action="insert.php">
                <div>
                    <label>ハンドルネーム</label>
                    <br>
                    <input type="text" class="text" size="35" name="handlename"> 
                </div>
        
                <div>
                    <label>タイトル</label>
                    <br>
                    <input type="text" class="text" size="35" name="title">
                </div>

                <div>
                    <label>コメント</label>
                    <br>
                    <textarea cols="35" rows="7" name="comments"></textarea>
                </div>
        
                <div>
                    <input type="submit" class="submit" value="投稿する">
                </div>
            </form>


            <?php

            mb_internal_encoding("utf8");
            $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
            $stmt = $pdo->query("select * from 4each_keijiban");

            while($row = $stmt->fetch()){
                echo "<div class='article1'>";
                echo "<h3>".$row['title']."</h3>";
                echo $row['comments'];
                echo "<p class='handlename'>posted by ".$row['handlename']."</p>";
                echo "</div>";
                echo "</p>";
                }
                ?>


        </div>

        <div class="right">
            <p>人気の記事</p>
            <ul>
                <li>PHPオススメ本</li>
                <li>PHP MyAdmineの使い方</li>
                <li>今人気のエディタ Top5</li>
                <li>HTMLの基礎</li>
            </ul>

            <p>オススメリンク</p>
            <ul>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketsのダウンロード</li>
            </ul>

            <p>カテゴリ</p>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>
        </div>
    </main>


    <footer>
        <p>copyrigh (c) internous | 4each blog the which
            privides A to Z about programming.
        </p>
    </footer>
</html>