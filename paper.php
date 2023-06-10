<div id="paper" class="shadow">

<div id="header">
<p class="x-small">
令和<?php echo (date("Y")-2018); ?>年（<?php echo date("Y年");?>）<?php echo date("n月j日"); ?>　<?php echo $day[date("w")]; ?>曜日
　　　　　　　　　チ　　ャ　　ッ　　ト　　Ｇ　　Ｐ　　Ｔ　　部　　新　　聞
</p>
</div>

<div id="box">

<div id="right">
<h1><img src="./image/logo.jpg" alt="チャットGPT部新聞" width="160" height="411"></h1>
<br /><br />
<?php if(isset($date)){ ?><a href="<?php echo $wiki; ?>" target="_blank"><?php } ?>
<p>令和<?php echo (date("Y")-2018); ?>年（<?php echo date("Y年");?>）</p>
<p class="bold"><span class="xx-large"><?php echo date("n"); ?></span><span class="large">月</span> <span class="xx-large"><?php echo date("j"); ?></span><span class="large">日</span></p>
<p class="large bold"><?php echo $day[date("w")]; ?>曜日</p>
<p><?php if(isset($date)){ ?><?php echo $date; ?><?php } ?></p>
<?php if(isset($date)){ ?></a><?php } ?>
<br />
<br />
<iframe src="https://www.sunny-spot.net/get_fcst/parts_fcst.php?ID=4410&CL=BLACK" width="160" height="370" hspace="0" vspace="0" marginheight="0" marginwidth="0" frameborder="0" scrolling=no></iframe>
</div>

<div id="left">
<div id="rotate_99">
<?php $i = 0; ?>
<?php foreach ($text["all"] as $value) { ?>
<p class='article'>
<b class="large"><a href="<?php echo $value["link"]; ?>" target="_blank"><?php echo $value["title"]; ?></a></b>
 <a href="<?php echo "http://b.hatena.ne.jp/entry/".$value["link"]; ?>" target="_blank"><span class='num'><?php echo $value["bookmarkcount"]; ?></span></a><br />
<?php echo $value["description"]; ?>
<span class="x-small"> <?php echo $value["date"]; ?></span>
</p>
<?php } ?>
</div>
</div>

<input type="hidden" id="state_top" value="1">
<input type="hidden" id="code_top" value="99">

<div id="footer">
<p class="hidden">&copy;ChatGPT部新聞</p>
</div>
</div>

</div>
