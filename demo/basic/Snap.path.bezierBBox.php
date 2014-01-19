<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.path.bezierBBox()';
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
        	<h2>Snap.path.bezierBBox(…)</h2>
        	<p>实用方法返回一个给定的三次贝塞尔曲线的边界框</p>
            <h3>参数</h3>
            <ul>
            	<li><code>p1x</code> 数值。曲线第<code>1</code>个点的<code>x</code>位置。</li>
                <li><code>p1y</code> 数值。曲线第<code>1</code>个点的<code>y</code>位置。</li>
                <li><code>c1x</code> 数值。曲线第<code>1</code>个锚的<code>x</code>位置。</li>
                <li><code>c1y</code> 数值。曲线第<code>1</code>个锚的<code>y</code>位置。</li>
                <li><code>c2x</code> 数值。曲线第<code>2</code>个锚的<code>x</code>位置。</li>
                <li><code>c2y</code> 数值。曲线第<code>2</code>个锚的<code>y</code>位置。</li>
                <li><code>p2x</code> 数值。曲线第<code>2</code>个点的<code>x</code>位置。</li>
                <li><code>p2y</code> 数值。曲线第<code>2</code>个点的<code>y</code>位置。</li>
            </ul>
            <p>或者</p>
            <ul>
            	<li><code>bez</code> 数组。包含<code>6</code>个点的贝塞尔曲线数组。</li>
            </ul>
            <h3>返回值</h3>
            <p>对象。边界框。</p>
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
            <pre>var bound1 = Snap.path.<mark>bezierBBox</mark>(20,80, 40,40, 60,40, 80,80);
var bound2 = Snap.path.<mark>bezierBBox</mark>([20,80, 40,40, 60,40, 80,80]);
console.dir(bound1);
console.dir(bound2);</pre>
            <h3>控制台输出</h3>
            <p><img src="../../static/img/demo-snap-svg-40.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var bound1 = Snap.path.bezierBBox(20,80, 40,40, 60,40, 80,80);
var bound2 = Snap.path.bezierBBox([20,80, 40,40, 60,40, 80,80]);
if (window.console) {
	console.dir(bound1);
	console.dir(bound2);
}
</script>
</body>
</html>