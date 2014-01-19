<!doctype html>
<html>
<head>
<?php 
	$key = 'Element.pattern()';
	include('../_include/header.php'); 
?>
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
        	<h2>lement.pattern(x, y, width, height)</h2>
        	<p>利用当前元素创建一个<code>&lt;pattern&gt;</code>元素。为了创建这个图案，你需要指定图案矩阵。</p>
            <p><code>&lt;pattern&gt;</code>容易让人困惑，但同时也很强大。在SVG中，<code>&lt;pattern&gt;</code>被用来填充图形，填充的图案可以来自SVG图片，或者位图图片。</p>
            <p>SVG图案填充很像我们在photoshop中使用的图案填充，如"tiles"(拼贴)等。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>x</code> 字符串或数值。</li>
                <li><code>y</code> 字符串或数值。 </li>
                <li><code>width</code> 字符串或数值。</li>
                <li><code>height</code> 字符串或数值。</li>
            </ul>
            <p><code>&lt;pattern&gt;</code>元素可以通过<code>fill</code>属性使用。</p>
            <h3>返回值</h3>
            <p>元素。返回<code>&lt;pattern&gt;</code>元素。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="250" height="250">&lt;/svg>
            
&lt;input id="button" type="button" value="点击改变圈圈的顺序"></pre>
            <pre>var svg = Snap("#svg");
var p = svg.paper.path("M10-5-10,15M15,0,0,15M0-5-20,15").attr({
    fill: "none",
    stroke: "#beceeb",
    strokeWidth: 5
}).pattern(0, 0, 10, 10),
c = svg.paper.circle(120, 120, 100);
c.attr({
    <span class="comment">// 斜纹图案填充</span>
    fill: p
});</pre>
            <h3>效果</h3>
            <p>
            	<svg id="svg" width="250" height="250"></svg>                
            </p>
            <h3>生成HTML</h3>
            <p><img src="../../static/img/demo-snap-svg-25.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var p = svg.paper.path("M10-5-10,15M15,0,0,15M0-5-20,15").attr({
    fill: "none",
    stroke: "#beceeb",
    strokeWidth: 5
}).pattern(0, 0, 10, 10),
c = svg.paper.circle(120, 120, 100);
c.attr({
    fill: p
});
</script>
</body>
</html>