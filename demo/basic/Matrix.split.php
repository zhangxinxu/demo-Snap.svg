<!doctype html>
<html>
<head>
<?php 
	$key = 'Matrix.split()';
	include('../_include/header.php'); 
?>
<style>
.dr-json { padding-top: 1em; padding-bottom: 1em; padding-left: 10px; list-style: none; background-color: #fbfbfb; }
.dr-json li { margin-top: 6px; margin-bottom: 6px; }
.dr-json-key { display: inline-block; width: 70px; margin-right: 16px; }
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
        	<h2>Matrix.split()</h2>
        	<p>分割矩阵为基本变换。</p>
            <h3>返回值</h3>
            <p>对象。格式如下：</p>
            <ol class="dr-json"><li><span class="dr-json-key"><code>dx</code></span>数值。<code>x</code>方向偏移大小。
</li><li><span class="dr-json-key"><code>dy</code></span>数值。<code>y</code>方向偏移大小。
</li><li><span class="dr-json-key"><code>scalex</code></span>数值。<code>x</code>方向缩放大小。
</li><li><span class="dr-json-key"><code>scaley</code></span>数值。<code>y</code>方向缩放大小。
</li><li><span class="dr-json-key"><code>shear</code></span>数值。剪切。
</li><li><span class="dr-json-key"><code>rotate</code></span>数值。旋转的角度。
</li><li><span class="dr-json-key"><code>isSimple</code></span>布尔值。是否可以通过简单转换来表示。 
</li></ol>
			<h3>测试</h3>
            <pre>var m = new Snap.Matrix(1,2,3,4,5,6);
console.dir(m.<mark>split</mark>());</pre>
            <h3>输出结果</h3>
            <p><img src="../../static/img/demo-snap-svg-33.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var m = new Snap.Matrix(1,2,3,4,5,6);
window.console && 
console.dir(m.split());
</script>
</body>
</html>