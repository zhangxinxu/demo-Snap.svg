<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.path.getBBox()';
	include('../_include/header.php'); 
?>
<style>
.dr-json { list-style-type: none; padding-left: 2em; }
.dr-json-key { display: inline-block; width: 80px; margin-right: 10px; }
.dr-json li { margin-top: 5px; }
</style>
</head>

<body>
<?php 
	include('../_include/nav.php'); 
?>

<div id="zxxBody" class="zxx_body">
	<div id="zxxSlide" class="zxx_side">
    	<?php include('../_include/slide.php'); ?>
    </div>
    <div class="zxx_api_detail">
    	<div class="zxx_api_content">
        	<h1 class="zxx_api_h1"><sub>Snap.svg demo之</sub><?php echo $key; ?></h1>
        	<h2>Snap.path.getBBox(path)</h2>
        	<p>返回给定路径边界盒子的实用方法。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>path</code> 字符串。路径字符串。</li>
            </ul>
            <h3>返回值</h3>
            <p>对象。边界盒子。</p>
            <ol class="dr-json">
              <li>{<ol class="dr-json">
              <li>
                  <span class="dr-json-key"><code>x</code>:</span>数值。盒子左上点的<code>x</code>坐标。
              </li>
              <li>
                  <span class="dr-json-key"><code>y</code>:</span>数值。盒子左上点的<code>y</code>坐标。
              </li>
              <li>
                  <span class="dr-json-key"><code>x2</code>:</span>数值。盒子右下点的<code>x</code>坐标。
              </li>
              <li>
                  <span class="dr-json-key"><code>y2</code>:</span>数值。盒子右下点的<code>y</code>坐标。
              </li>
              <li>
                  <span class="dr-json-key"><code>width</code>:</span>数值。盒子的宽度。
              </li>    
              <li>
                  <span class="dr-json-key"><code>height</code>:</span>数值。盒子的高度。
              </li> 
              </ol></li><li>}</li> 
          	</ol>
            <h3>测试代码</h3>
            <pre>var bound = Snap.<mark>path.getBBox</mark>("M10,10L90,90");
console.dir(bound);</pre>
            <h3>控制台输出</h3>
            <p><img src="../../static/img/demo-snap-svg-42.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var bound = Snap.path.getBBox("M10,10L90,90");
window.console && 
console.dir(bound);
</script>
</body>
</html>