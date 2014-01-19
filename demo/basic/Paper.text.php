<!doctype html>
<html>
<head>
<?php 
	$key = 'Paper.text()';
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
        	<h2>Paper.text(x, y, text)</h2>
        	<p>绘制一个文本字符。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>x</code> 数值。<code>x</code>坐标位置。</li>
                <li><code>y</code> 数值。<code>y</code>坐标位置。</li>
                <li><code>text</code> 字符串或数组。要绘制的文本字符或者使用分隔的<code>&lt;tspan&gt;</code>嵌套进去的数组字符串。</li>
            </ul>
            <h3>返回值</h3>
            <p>对象。<code>text</code>元素。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="200" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var t1 = svg.<mark>paper.text</mark>(50, 50, "Snap");
var t2 = svg.<mark>paper.text</mark>(150, 50, ["S","n","a","p"]);</pre>
            <h3>效果</h3>
            <p id="snapShow">
            	<svg id="svg" width="200" height="100"></svg>
            </p>
            <h3>生成HTML</h3>
            <p><img src="../../static/img/demo-snap-svg-11.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var t1 = svg.paper.text(50, 50, "Snap");
var t2 = svg.paper.text(150, 50, ["S","n","a","p"]);
</script>
</body>
</html>