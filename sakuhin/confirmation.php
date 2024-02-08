<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="keywords" content="SEO,WEBDESIGNT株式会社,ウェブデザインT株式会社,横浜">
<meta name="description" content="WEB制作に関するご相談は何でも承ります。当社は制作だけでなく、SEO対策やECサイトのマーケティングなど様々な業績がございます。特に元楽天やアマゾンのマネージャーも在籍しており、取引数は8000社以上の実績がございます。">
<meta name="viewport" content="width=device-width">
<meta name="robots" content="noindex">
<title>お問い合わせ | 株式会社WEBDESIGNT</title>
<link rel="stylesheet" media="all" href="css/reset.css">
<link rel="stylesheet" media="all" href="css/style.css">
<link rel="icon" href="images/favicon.png" id="favicon">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png" sizes="180x180"><link rel="icon" type="image/png" href="images/android-touch-icon.png" sizes="192x192">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="js/script.js"></script>
</head>

<body id="sub">

<nav id="mainnav">
	<p id="menuWrap"><a id="menu"><span id="menuBtn"></span></a></p>
	<div class="panel">
		<ul>
			<li><a href="index.html">TOP</a></li>
			<li><a href="company.html">会社概要</a></li>
			<li><a href="design.html">デザイン制作</a></li>
			<li><a href="seo.html">SEO対策</a></li>
			<li><a href="market.html">マーケティング</a></li>
			<li><a href="form.html">お問い合わせ</a></li>
		</ul>
	</div>
</nav>

<header id="header">
	<h1><a href="index.html"><img src="images/logo.png" alt="WebDesignT" class="logo2"></a></h1>
	<img src="images/sub-header5.jpg" alt="お問い合わせ" class="haikei pc_only">
	<img src="images/sub-header5s.jpg" alt="お問い合わせ" class="sp_only">
</header>



<!-- フォーム -->
<section id="market" class="fadeUp">
	<header>
		<h2>お問い合わせ</h2>
	</header>
	<div class="otoiawase">
		<form id="form" class="form" action="end.php" method="post">
      <p>
        <label for="question1">お名前<span class="required">※必須</span></label><br>
        <?php echo $_POST["question1"]; ?>
      </p>
      <p>
        <label for="question2">メールアドレス<span class="required">※必須</span></label><br>
        <?php echo $_POST["question2"]; ?>
      </p>
      <p><label class="check_p">サービスについて<span class="required">※必須</span></label>
<?php
if (isset($_POST['present']) && is_array($_POST['present'])) {
    $food = implode("、", $_POST["present"]);
  echo $food;
}
?>

      </p>
      <p>
        <label for="question3">メッセージ</label><br>
        <?php echo $_POST["question3"]; ?>
      </p>
      <p>
        プライバシーポリシーに同意する<br>
        <?php echo $_POST["privacy"]; ?>
      </p>
      <p class="form-button">
          <input type="submit" name="send" value="送　信">
      </p>
      <div class="form-button2">
      <button type="button" onclick="history.back()">入力画面へ戻るボタン</button>
      </div>
    </form>	
	</div>

</section>
<!-- // フォーム -->


<!-- トップへ戻る -->
<button id="js-pagetop" class="pagetop"><span class="pagetop__arrow"></span></button>

<!-- フッター -->
<footer id="footer">
	<ul>
		<li><a href="index.html"><span>TOP</span></a></li>
		<li><a href="company.html"><span>会社概要</span></a></li>
		<li><a href="design.html"><span>デザイン制作</span></a></li>
		<li><a href="seo.html"><span>SEO対策</span></a></li>
		<li><a href="market.html"><span>マーケティング</span></a></li>
		<li><a href="form.html"><span>お問い合わせ</span></a></li>
	</ul>
	<p>Copyright(c) 2023 webdesignT Inc. All Rights Reserved.</p>
</footer>

</body>
</html>