<!doctype html>
<html>
<head>
<?php 
	$key = 'Element.getPointAtLength()';
	include('../_include/header.php'); 
?>
<style>
.dr-json { padding-top: 1em; padding-bottom: 1em; list-style: none; background-color: #fbfbfb; }
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
        	<h2>Element.getPointAtLength(length)</h2>
        	<p>返回给定路径上给定长度的点坐标（仅适用于<code>path</code>元素）。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>length</code> 数值。长度。单位为像素，起始于路径的开头，但不包括non-rendering的跳跃。</li>
            </ul>
            <h3>返回值</h3>
            <p>对象。表示点。</p>
            <ol class="dr-json"><li>{<ol class="dr-json"><li><span class="dr-json-key"><code>x:</code></span>数值。<code>x</code>坐标。
</li><li><span class="dr-json-key"><code>y:</code></span>数值。<code>y</code>坐标。
</li><li><span class="dr-json-key"><code>alpha:</code></span>数值。衍生角？ <span class="supplement">可能是切线角的意思。为什么名称叫alpha呢？好奇怪~~</span>
</li></ol></li><li>}</li></ol>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="100" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var c = svg.paper.path("M10 10L90 90").attr({
    stroke: "#000",
    strokeWidth: 5	
});
console.dir(c.<mark>getPointAtLength</mark>(20));    <span class="comment">// 结果见最下面的截图</span></pre>
            <h3>效果</h3>
            <p>点击下面的圈圈显示存储的内容：</p>
            <p>
            	<svg id="svg" width="100" height="100"></svg>                
            </p>
            <h3>生成HTML</h3>
            <p><img src="../../static/img/demo-snap-svg-21.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var c = svg.paper.path("M10 10L90 90").attr({
    stroke: "#000",
    strokeWidth: 5	
});
window.console && console.dir(c.getPointAtLength(20));
</script>
</body>
</html>