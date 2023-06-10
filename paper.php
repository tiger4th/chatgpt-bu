<div id="paper" class="shadow">
  <div id="header">
    <p class="x-small">
      令和<?php echo date("Y") - 2018; ?>年（<?php echo date("Y年"); ?>）<?php echo date("n月j日"); ?>　<?php echo $day[date("w")]; ?>曜日
      　　　　　　　　　チ　　ャ　　ッ　　ト　　Ｇ　　Ｐ　　Ｔ　　部　　新　　聞
    </p>
  </div>

  <div id="box">
    <div id="right">
      <h1><img src="./image/logo.jpg" alt="チャットGPT部新聞" width="160" height="411"></h1>
      <div class="date">
        <?php if (isset($date)): ?><a href="<?php echo $wiki; ?>" target="_blank"><?php endif; ?>
        <p>令和<?php echo date("Y") - 2018; ?>年（<?php echo date("Y年"); ?>）</p>
        <p class="bold"><span class="xx-large"><?php echo date("n"); ?></span><span class="large">月</span> <span class="xx-large"><?php echo date("j"); ?></span><span class="large">日</span></p>
        <p class="large bold"><?php echo $day[date("w")]; ?>曜日</p>
        <p><?php if (isset($date)): ?><?php echo $date; ?><?php endif; ?></p>
        <?php if (isset($date)): ?></a><?php endif; ?>
      </div>
      <iframe src="https://www.sunny-spot.net/get_fcst/parts_fcst.php?ID=4410&CL=BLACK" width="160" height="370" hspace="0" vspace="0" marginheight="0" marginwidth="0" frameborder="0" scrolling=no></iframe>

      <br><br>
      <div>
        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-url="https://tiger4th.com/chatgpt-bu/" data-lang="ja" data-show-count="false">Tweet</a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <br><br>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v17.0" nonce="4VUSVEWq"></script>
        <div class="fb-like" data-href="https://tiger4th.com/chatgpt-bu/" data-width="" data-layout="button_count" data-action="" data-size="" data-share="false"></div>
        <br><br>
        <a href="https://b.hatena.ne.jp/entry/s/tiger4th.com/chatgpt-bu/" class="hatena-bookmark-button" data-hatena-bookmark-layout="basic-label-counter" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加">
          <img src="https://b.st-hatena.com/images/v4/public/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" />
        </a>
        <script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
        <br><br>
        <input type="hidden" id="vertical" value="1">
        <a href="javascript:void(0);" onclick="rotate(); return false;"><img src="./image/lotate.gif"></a>
      </div>
    </div>

    <div id="left">
      <div id="rotate_99">
        <?php $i = 0; ?>
        <?php foreach ($text["all"] as $value) { ?>
          <p class='article'>
            <b class="large"><a href="<?php echo $value["link"]; ?>" target="_blank"><?php echo $value["title"]; ?></a></b><br />
            <?php echo $value["description"]; ?> <span class="x-small"><?php echo $value["date"]; ?></span>
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
