<?php require("./logic.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>チャットGPT部新聞</title>
  <meta name="description" content="謎のデータサイエンティスト集団 NOB DATAが、これからの時代に必須となるChatGPTを中心とした生成AI活用術を徹底解説！" />
  <meta name="keywords" content="チャットGPT部,チャットGPT,ChatGPT,AI,新聞,ニュース,NOB DATA" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <link rel="shortcut icon" href="./image/favicon.png">
  <link rel="stylesheet" type="text/css" href="./css/h2v.css">
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <?php require("./script.php"); ?>
  <?php require("./js/addthis.js"); ?>
</head>

<body onLoad="location.href='#top';">
  <div id="top" class="panel">
    <?php $page = "top"; ?>
    <?php require("./paper.php"); ?>
  </div>
</body>
</html>
