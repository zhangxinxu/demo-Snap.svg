<!doctype html>
<html>
<head>
<?php 
	$key = 'Paper.polyline()';
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
        	<h2>Paper.polyline(…)</h2>
        	<p>画折线。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>points</code> 数组。点坐标数组</li>
            </ul>
            <p>或者</p>
            <ul>
            	<li><code>varargs</code> 表示点的可变参数</li>
            </ul>
            <h3>返回值</h3>
            <p>对象。<code>polyline</code>元素。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="300" height="150">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var p1 = svg.<mark>paper.polyline</mark>([10, 10, 100, 100]).attr({
    stroke: "#000",
    strokeWidth: 5	
});
var p2 = svg.<mark>paper.polyline</mark>(110, 10, 200, 100).attr({
    stroke: "#000",
    strokeWidth: 5	
});</pre>
            <h3>效果</h3>
            <p id="snapShow">
            	<svg id="svg" width="300" height="150"></svg>
            </p>
            <h3>生成HTML</h3>
            <p><img src="../../static/img/demo-snap-svg-9.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var p1 = svg.paper.polyline([10, 10, 100, 100]).attr({
    stroke: "#000",
    strokeWidth: 5	
});
var p2 = svg.paper.polyline(110, 10, 200, 100).attr({
    stroke: "#000",
    strokeWidth: 5	
});
</script>
</body>
</html>