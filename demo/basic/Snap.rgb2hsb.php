<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.rgb2hsb()';
	include('../_include/header.php'); 
?>
<style>
.dr-json { list-style-type: none; padding-left: 1em; }
.dr-json-key { display: inline-block; width: 55px; margin-right: 10px; }
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
        	<h2>Snap.rgb2hsb(r, g, b)</h2>
        	<p>转换RGB为HSB对象。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>r</code> 数值。红色。0~255</li>
                <li><code>g</code> 数值。绿色。0~255</li>
                <li><code>b</code> 数值。蓝色。0~255</li>
            </ul>
            <h3>返回值</h3>
            <p>对象。如下格式的HSB对象：</p>
            <ol class="dr-json"><li>{<ol class="dr-json"><li><span class="dr-json-key"><code>h</code></span>数值。色调。
</li><li><span class="dr-json-key"><code>s</code></span>数值。饱和度。
</li><li><span class="dr-json-key"><code>b</code></span>数值。亮度值。
</li></ol></li><li>}</li></ol>
			<h3>测试</h3>
            <pre>console.log(Snap.<mark>rgb2hsb</mark>(255,0,0)); </pre>
			<h3>控制台输出</h3>
            <p><img src="../../static/img/demo-snap-svg-44.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
window.console &&
console.log(Snap.rgb2hsb(255,0,0)); 
</script>
</body>
</html>