<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.path.getPointAtLength()';
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
        	<h2>Snap.path.getPointAtLength(path, length)</h2>
        	<p>返回给定路径上给定长度的点坐标。可参考<a href="Element.getPointAtLength.php">Element.getPointAtLength</a></p>
            <h3>参数</h3>
            <ul>
            	<li><code>path</code> 字符串。SVG路径字符串。</li>
            	<li><code>length</code> 数值。长度。单位为像素，起始于路径的开头，但不包括non-rendering的跳跃。</li>
            </ul>
            <h3>返回值</h3>
            <p>对象。表示点。</p>
            <ol class="dr-json"><li>{<ol class="dr-json"><li><span class="dr-json-key"><code>x:</code></span>数值。<code>x</code>坐标。
</li><li><span class="dr-json-key"><code>y:</code></span>数值。<code>y</code>坐标。
</li><li><span class="dr-json-key"><code>alpha:</code></span>数值。该点的切线角度。</span>
</li></ol></li><li>}</li></ol>
            <h3>使用</h3>
            <pre>var p = Snap.path.<mark>getPointAtLength</mark>("M10 10L90 90", 20);
console.dir(p);</pre>
            <h3>生成HTML</h3>
            <p><img src="../../static/img/demo-snap-svg-21.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var p = Snap.path.getPointAtLength("M10 10L90 90", 20);
window.console &&
console.dir(p);
</script>
</body>
</html>