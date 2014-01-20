<!doctype html>
<html>
<head>
<?php 
	$key = 'Paper.line()';
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
        	<h2>Paper.line(x1, y1, x2, y2)</h2>
        	<p>画直线</p>
            <h3>参数</h3>
            <ul>
            	<li><code>x1</code> 起始<code>x</code>坐标位置。</li>
                <li><code>y1</code> 起始<code>y</code>坐标位置。</li>
                <li><code>x2</code> 结束<code>x</code>坐标位置。</li>
                <li><code>y2</code> 结束<code>y</code>坐标位置。</li>
            </ul>
            <h3>返回值</h3>
            <p>对象。<code>line</code>元素。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="150" height="150">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var t1 = svg.<mark>paper.line</mark>(50, 50, 100, 100).attr({
    stroke: "#000",
    strokeWidth: 5	
});</pre>
            <h3>效果</h3>
            <p id="snapShow">
            	<svg id="svg" width="150" height="150"></svg>
            </p>
            <h3>生成HTML</h3>
            <p><img src="../../static/img/demo-snap-svg-7.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var t1 = svg.paper.line(50, 50, 100, 100).attr({
	stroke: "#000",
    strokeWidth: 5	
});
</script>
</body>
</html>