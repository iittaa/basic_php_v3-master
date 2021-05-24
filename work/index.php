<?php

$n = mt_rand(1, 3);

if($n === 1){
  $message = "1です";
}else if($n === 2){
  $message = "2です";
}else{
  $message = "3です";
}

function h($str){
  return htmlspecialchars($str, ENT_QUOTES, "UTF-8");
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>太郎のポートフォリオサイト</title>
  <link rel="icon" href="favicon.ico">
  <meta name="description" content="太郎のポートフォリオサイトです。">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
    <div class="container">
      <div class="icon">
        <img src="img/taro.png" width="120" height="120" alt="太郎のアイコンです">
      </div>
      <div class="info">
        <h1>山田太郎</h1>
        <p><?= h($message); ?></p>
        <ul>
          <li>
            <a href="https://dotinstall.com" target="_blank">
              <img src="img/blog.png" width="20" height="20" alt="ブログサイトへのリンク画像です">
            </a>
          </li>
          <li>
            <a href="https://dotinstall.com" target="_blank">
              <img src="img/photos.png" width="20" height="20" alt="写真サイトへのリンク画像です">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </header>

  <section class="works">
    <h1>WORKS</h1>
    <section>
      <img src="img/work1.png" width="400" height="260" alt="勇者ゲームの紹介画像">
      <h1>勇者ゲーム</h1>
      <p>楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。</p>
      <a href="hero.php">もっと見る</a>
    </section>
  
    <section>
      <img src="img/work2.png" width="400" height="260" alt="宝探しゲームの紹介画像">
      <h1>宝探しゲーム</h1>
      <p>楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。</p>
      <a href="tresure.php">もっと見る</a>
    </section>
  
    <section>
      <img src="img/work3.png" width="400" height="260" alt="神経衰弱の紹介画像">
      <h1>神経衰弱</h1>
      <p>楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。</p>
      <a href="memory.php">もっと見る</a>
    </section>

  </section>

  <footer>
    <p>(c) dotinstall.com</p>
  </footer>
</body>
</html>
  