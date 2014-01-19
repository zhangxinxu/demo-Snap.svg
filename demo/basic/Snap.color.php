<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.color()';
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
        	<h2>Snap.color(clr)</h2>
        	<p>解析颜色字符串，并返回一个颗粒分解的色彩值的对象。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>clr</code> 字符串。格式支持的一个颜色字符串。参见：<a href="Snap.getRGB.php">Snap.getRGB</a></li>
            </ul>
            <h3>返回值</h3>
            <p>对象。以下列格式组合RGB / HSB对象：</p>
            <ol class="dr-json"><li>{<ol class="dr-json"><li><span class="dr-json-key"><code>r</code></span>数值。红色。
</li><li><span class="dr-json-key"><code>g</code></span>数值。绿色。
</li><li><span class="dr-json-key"><code>b</code></span>数值。蓝色。
</li><li><span class="dr-json-key"><code>hex</code></span>字符串。十六进制格式颜色值，HTML/CSS使用的格式: <code>#••••••</code>.
</li><li><span class="dr-json-key"><code>error</code></span>布尔值。字符串是否可以解析。
</li><li><span class="dr-json-key"><code>h</code></span>数值。色调。
</li><li><span class="dr-json-key"><code>s</code></span>数值。饱和度。
</li><li><span class="dr-json-key"><code>v</code></span>数值。值（亮度）。
</li><li><span class="dr-json-key"><code>l</code></span>数值。亮度。
</li></ol></li><li>}</li></ol>
            <h3>使用</h3>
            <pre>console.dir(Snap.color("#123456"));</pre>
            <h3>控制台输出</h3>
            <p><img src="../../static/img/demo-snap-svg-35.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
window.console &&
console.dir(Snap.color("#123456"));
</script>
</body>
</html>