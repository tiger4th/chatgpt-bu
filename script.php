<script type="text/javascript" src="./js/h2v-min.js" charset="utf-8"></script>
<script type="text/javascript">
var params = {
  'rotate_99':{
    'fontsize': '14px',
    'chars': 25,
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

function rotate(page){
if (page=="button") {
  if(document.getElementById("vertical").value==1){
    document.getElementById("vertical").value=0;
  }else{
    document.getElementById("vertical").value=1;
  }
}

if (page=="button") {
  hash = location.hash;
  hash = hash.replace("#", "");
}else{
  hash = page;
}

if(document.getElementById("vertical").value!=document.getElementById("state_"+hash).value){
  h2vconvert.switcher('rotate_'+document.getElementById("code_"+hash).value);
  document.getElementById("state_"+hash).value=document.getElementById("vertical").value;
}
}

<?php $list_j = join(",",$list); ?>
function current(val){
if (val=="top") {
  document.getElementById("link-top").className="current";
}else{
  document.getElementById("link-top").className="";
}

var list_j = "<?php echo $list_j; ?>";
var list = list_j.split(",");

for (var i in list){
  if (i == '_reduce') {break;}
  
  if (list[i]==val) {
    document.getElementById("link-"+list[i]).className="current";
  }else{
    document.getElementById("link-"+list[i]).className="";
  }
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

<style>
div#rotate_99{margin-right:1em;}
</style>