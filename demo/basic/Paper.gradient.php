<!doctype html>
<html>
<head>
<?php 
	$key = 'Paper.gradient()';
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
        	<h2>Paper.gradient(gradient)</h2>
        	<p>创建一个渐变元素。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>gradient</code> 字符串。渐变描述符。</li>
            </ul>
            <p><strong>渐变描述符</strong></p>
            <p>渐变描述符遵循特定的表达式格式：<code>&lt;type&gt;(coords)&lt;colors&gt;</code>.</p>
            <p>其中<code>&lt;type&gt;</code>可以是线性的(linear)或者是径向的(radial)。大写字母<code>L</code>或<code>R</code>表示从SVG表明偏移的绝对坐标。小写字母<code>l</code>或<code>r</code>表示应用渐变的这个元素计算的相对坐标（可以理解为百分比位置）。线性渐变的向量指定通过<code>x1,y1,x2,y2</code>, 径向渐变通过<code>cx,cy,r</code>以及（可选的）远离圆心的焦点<code>fx,fy</code>. <code>&lt;colors&gt;</code>值的指定通过一系列短横符链接的CSS颜色值。每个颜色可以跟随一个使用冒号分隔的自定义偏移值。</p>
            <h3>返回值</h3>
            <p>对象。<code>gradient</code>元素。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="300" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");</pre>
            <p>1. 线性渐变，相对，左上角到右下角，从黑色到红色再白色。</p>            
            <pre>var g1 = svg.<mark>paper.gradient</mark>("l(0, 0, 1, 1)#000-#f00-#fff");
svg.paper.circle(50, 50, 40).attr({
    fill: g1
});</pre>
			<p>2. 线性渐变，绝对，从<code>(0,0)</code>到<code>100, 100</code>, 从黑色到<code>25%</code>位置红色再到白色。</p>       
			<pre>var g2 = svg.<mark>paper.gradient</mark>("L(0, 0, 100, 100)#000-#f00:25-#fff");
svg.paper.circle(50, 50, 40).attr({
    fill: g2
});</pre>
			<p>2. 径向渐变，相对，从元素中心开始，半径为宽度的一本, 从黑色到白色。</p>   
			<pre>var g3 = svg.<mark>paper.gradient</mark>("r(0.5, 0.5, 0.5)#000-#fff");
svg.paper.circle(50, 50, 40).attr({
    fill: g3
});</pre>
            <h3>效果</h3>
            <p id="snapShow">
            	<svg id="svg" width="300" height="100"></svg>
            </p>
            <h3>生成HTML</h3>
            <p><img src="../../static/img/demo-snap-svg-5.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var g1 = svg.paper.gradient("l(0, 0, 1, 1)#000-#f00-#fff");
var g2 = svg.paper.gradient("L(0, 0, 100, 100)#000-#f00:25-#fff");
var g3 = svg.paper.gradient("r(0.5, 0.5, 0.5)#000-#fff");
svg.paper.circle(50, 50, 40).attr({
	fill: g1
});
svg.paper.circle(150, 50, 40).attr({
	fill: g2
});
svg.paper.circle(250, 50, 40).attr({
	fill: g3
});
</script>
</body>
</html>