<?php require("./logic.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>はてぶ新聞</title>
<meta name="description" content="はてなブックマークの人気エントリーを新聞のように読むことができます。" />
<meta name="keywords" content="はてな,はてなブックマーク,はてブ,はてぶ,新聞,ニュース" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<link rel="shortcut icon" href="./image/favicon.ico">
<link rel="stylesheet" type="text/css" href="./css/h2v.css">
<link rel="stylesheet" type="text/css" href="./css/style.css">
<link rel="apple-touch-icon-precomposed" href="./image/apple-touch-icon.gif" />
<?php if($device==='sp'){ ?><link rel="stylesheet" type="text/css" href="./css/style_sp.css"><?php } ?>
<?php if($device==='tb'){ ?><link rel="stylesheet" type="text/css" href="./css/style_tb.css"><?php } ?>
<?php require("./script.php"); ?>
<?php require("./js/addthis.js"); ?>
</head>

<body onLoad="location.href='#top';">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- top bar -->
<div class="<?php if($device==='sp'){ ?>sp-<?php } ?>top-bar">
<nav id="nav-button">
<a id="link-top" class="current" href="#top" onclick="current('top');rotate('top');">トップ</a>
<?php foreach ($list as $key => $val) { ?>
<a id="link-<?php echo $val; ?>" href="#<?php echo $val; ?>" onclick="current('<?php echo $val; ?>');rotate('<?php echo $val; ?>');"><?php echo $name[$key]; ?></a>
<?php } ?>
</nav>
</div>
<!-- /top bar -->

<?php if($device==='sp'){ ?>
<!-- sp bottom bar -->
<div class="sp-bottom-bar">
<input type="hidden" id="vertical" value="1">
<table>
<tr>
<td><a href="javascript:void(0);" onclick="rotate('button');return false;"><img src="./image/lotate.gif"></a></td>
<td><a href="http://b.hatena.ne.jp/entry/http://tiger4th.com/hatebu/" class="hatena-bookmark-button" data-hatena-bookmark-title="hatebu" data-hatena-bookmark-layout="standard" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only.gif" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script></td>
<td>&nbsp;</td>
<td><a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-lang="ja">ツイート</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></td>
<td><div class="fb-like" data-href="http://tiger4th.com/hatebu/" data-send="false" data-layout="button_count" data-width="120" data-show-faces="false"></div></td>
</tr>
</table>
</div>
<!-- /sp bottom bar -->
<?php } ?>

<!-- top -->
<div id="top" class="panel">
<?php $page="top"; ?>
<?php require("./paper.php"); ?>
</div>
<!-- /top -->

<!-- page -->
<?php foreach ($list as $key => $val) { ?>
<div id="<?php echo $val; ?>" class="panel">
<?php $page=$val; ?>
<?php require("./paper.php"); ?>
</div>
<?php } ?>
<!-- /page -->

<?php if($device!=='sp'){ ?>
<!-- bottom bar -->
<div class="bottom-bar">
<input type="hidden" id="vertical" value="1">
<table>
<tr>
<td><a href="javascript:void(0);" onclick="rotate('button');return false;"><img src="./image/lotate.gif"></a></td>
<td><a href="http://b.hatena.ne.jp/entry/http://tiger4th.com/hatebu/" class="hatena-bookmark-button" data-hatena-bookmark-title="hatebu" data-hatena-bookmark-layout="standard" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only.gif" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script></td>
<td>&nbsp;</td>
<td><a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-lang="ja">ツイート</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></td>
<td><div class="fb-like" data-href="http://tiger4th.com/hatebu/" data-send="false" data-layout="button_count" data-width="120" data-show-faces="false"></div></td>
<td><!-- AddThis Button BEGIN -->
<a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=ra-4e3ab77310f2fc55"><img src="http://s7.addthis.com/static/btn/v2/lg-share-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0"/></a>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e3ab77310f2fc55"></script>
<!-- AddThis Button END --></td>
</tr>
</table>
</div>
<!-- /bottom bar -->
<?php } ?>

</body>
</html>