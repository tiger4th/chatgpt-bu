<script type="text/javascript" src="./js/h2v-min.js" charset="utf-8"></script>
<script type="text/javascript">
  var params = {
    'rotate_99': {
      'fontsize': '14px',
      'chars': <?php echo $chars; ?>,
      'lineInterval': 0.3,
      'pagewidth': '800px',
      'fontSet': 'mincho',
      'auto': true,
      'showcredit': false,
      'bar': false,
      'multiCols': true,
      'splash': false
    },
  }

  h2vconvert.init(params);

  function rotate() {
    if (document.getElementById("vertical").value == 1) {
      document.getElementById("vertical").value = 0;
    } else {
      document.getElementById("vertical").value = 1;
    }

    hash = location.hash;
    hash = hash.replace("#", "");
    if (document.getElementById("vertical").value != document.getElementById("state_" + hash).value) {
      h2vconvert.switcher('rotate_' + document.getElementById("code_" + hash).value);
      document.getElementById("state_" + hash).value = document.getElementById("vertical").value;
    }
  }
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8QXZ5NTVSD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8QXZ5NTVSD');
</script>
