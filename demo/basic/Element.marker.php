<!doctype html>
<html>
<head>
<?php 
	$key = 'Element.marker()';
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
        	<h2>Element.marker(x, y, width, height, refX, refY)</h2>
        	<p>利用当前元素创建一个<code>&lt;marker&gt;</code>元素。为了创建这个标记，你需要指定边界矩阵以及参考点。</p>
            <p>SVG <code>&lt;marker&gt;</code>元素被用来表示线或路径的开始、中间以及结束。例如，你可以使用一个圆或正方形标记作为路径的开始，然后一个三角标记作为路径的结束。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>x</code> 数值。创建的标记元素的<code>x</code>位置。</li>
                <li><code>y</code> 数值。创建的标记元素的<code>y</code>位置。</li>
                <li><code>width</code> 数值。创建的标记元素的高度。</li>
                <li><code>height</code> 数值。创建的标记元素的宽度。</li>
                <li><code>refX</code> 数值。参考点的<code>x</code>位置。也就是<code>&lt;marker&gt;</code>内部的坐标。以后会作为路径的起止点等。</li>
                <li><code>refY</code> 数值。参考点的<code>y</code>位置。</li>
            </ul>
            <p><code>&lt;marker&gt;</code>元素需要配合<code>marker-start</code>, <code>marker-end</code>, <code>marker-mid</code>, 以及<code>marker</code>属性使用。<code>marker</code>属性可以替换路径上的所有点，<code>marker-mid</code>可以替换处起止点以外的所有点。</p>
            <h3>返回值</h3>
            <p>元素。返回<code>&lt;marker&gt;</code>元素。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="200" height="100">&lt;/svg>
            
&lt;input id="button" type="button" value="点击改变圈圈的顺序"></pre>
            <pre>var svg = Snap("#svg");
<span class="comment">// 圈圈</span>
var c1 = svg.paper.circle(5, 5, 3);
<span class="comment">// 三角</span>
var p1 = svg.paper.path("M2,2 L2,11 L10,6 L2,2").attr({
    fill: "#000"      
});

<span class="comment">// 变身标记</span>
var m1 = c1.<mark>marker</mark>(0, 0, 8, 8, 5, 5), m2 = p1.<mark>marker</mark>(0, 0, 13, 13, 2, 6);

<span class="comment">// 添加一个路径</span>
var p2 = svg.paper.path("M10,10 L150,10 L150,90").attr({
    <span class="comment">// 描边</span>
    stroke: "#00f",
    strokeWidth: 1,
    fill: "none",
    <span class="comment">// 起始标记</span>
    markerStart: m1,
    <span class="comment">// 结束标记</span>
    "marker-end": m2
});</pre>
            <h3>效果</h3>
            <p>
            	<svg id="svg" width="200" height="100"></svg>                
            </p>
            <h3>生成HTML</h3>
            <p><img src="../../static/img/demo-snap-svg-23.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
// 圈圈
var c1 = svg.paper.circle(5, 5, 3);
// 三角
var p1 = svg.paper.path("M2,2 L2,11 L10,6 L2,2").attr({
	fill: "#000"												 
});

// 变身标记
var m1 = c1.marker(0, 0, 8, 8, 5, 5), m2 = p1.marker(0, 0, 13, 13, 2, 6);

// 添加一个路径
var p2 = svg.paper.path("M10,10 L150,10 L150,90").attr({
	// 描边
	stroke: "#00f",
	strokeWidth: 1,
	fill: "none",
	// 起始标记
	markerStart: m1,
	// 结束标记
	"marker-end": m2
});
</script>
</body>
</html>