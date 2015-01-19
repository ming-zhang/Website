<!doctype html>
<!-- 12212014 -->
<?php
$lang = $_GET['lang'];
if (!is_null($lang)) { setcookie('lang', $lang, time() + (86400 * 30), "/"); }
if (is_null($lang)) { 
	if (isset($_COOKIE['lang'])) {
		$lang = $_COOKIE['lang'];
	} else {
	$lang = 'en';
	}
}
include dirname(__FILE__).'/lang/'.$lang.'.php';
echo '<html lang="'.$lang.'">'
?>

<head>
	<title>Ming Zhang</title>
	<?php include 'head.min.php' ?>
	<link rel="stylesheet" href="/css/style.min.css" type="text/css">
	<link rel="stylesheet" href="/css/fonts.min.css" type="text/css">
	<link rel="stylesheet" href="/css/jquery.vegas.min.css" type="text/css">
	<link href="//www.youziku.com/webfont/CSS/33575638c2e2a4381902b181037d7527" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="/js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="/js/jquery.vegas.min.js"></script>
<?php include_once("analyticstracking.php") ?>
</head>

<body>
<!-- Google Tag Manager -->
<!--
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-W6R899"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W6R899');</script>
-->
<!-- End Google Tag Manager -->

<div class="content">
	<div class="logo"><h1><a href="#" title="Ming Zhang">Ming Zhang</a></h1></div>

<!--- Roling --->
	<p class="rolling">
	<!-- en -->
		<span id="la">Hello. My name is <strong>Ming Zhang</strong>.</span>
	<!-- ch-zh -->
		<span id="sc">&#20320;&#22909;&#12290;&#25105;&#21483;<strong>&#31456;&#40483;</strong>&#12290;</span>
	<!-- de -->
		<span id="la">Hallo. Mein Name ist <strong>Ming Zhang</strong>.</span>
	<!-- fr -->
		<span id="la">Bonjour. Je m'appelle <strong>Ming Zhang</strong>.</span>
	<!-- jp -->
		<span id="jp">&#12371;&#12435;&#12395;&#12385;&#12399;&#12290;&#12431;&#12383;&#12375;&#12399;<strong>&#31456;&#40180;</strong>&#12391;&#12377;&#12290;</span>
	<!-- la -->
		<span id="la">salv&#275;. n&#333;men mihi <strong>Ming Zhang</strong> est.</span>
	<!-- es -->
		<span id="la">Hola. Me llamo <strong>Ming Zhang</strong>.</span>
	<!-- ru -->
		<span id="la">Здравствуйте. Меня зовут <strong>Мин Чжан</strong>.</span>
	<!-- el -->
		<span id="la">Γεια. Λέγομαι <strong>Μινγκ Ζανγκ</strong>.</span>
	</p>

	<?php echo '<p class="description" id="'.$font.'" dir="'.$dir.'">'.$index['description']; ?></p>

	<ul>
		<li class="aboutme"><?php echo '<a href="/" title="'.$index['about_me'].'">'; ?></a></li>
		<li class="resume"><?php echo '<a href="/archive/Ming%20Zhang_CV.pdf" title="'.$index['resume'].'">'; ?></a></li>
		<li class="email"><?php echo '<a href="mailto:&#109;&#105;&#110;&#103;&#64;&#109;&#105;&#110;&#103;&#122;&#104;&#97;&#110;&#103;&#46;&#99;&#111;&#109;" title="'.$index['email'].'">'; ?></a></li>
	</ul>
</div>
<div class="lang">
	<ul>
		<li class="zh-lang"><a href="?lang=zh" title="中文"></a></li>
		<li class="en-lang"><a href="?lang=en" title="English"></a></li>
		<li class="de-lang"><a href="?lang=de" title="Deutsch"></a></li>
	</ul>
</div>
<script src="/js/main.min.js"></script>
</body>
</html>