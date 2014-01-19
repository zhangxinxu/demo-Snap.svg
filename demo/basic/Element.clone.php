<!doctype html>
<html>
<head>
<?php 
	$key = 'Element.clone()';
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
        	<h2>Element.clone()</h2>
        	<p>创建元素的克隆并插入在元素之后。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>handler</code> 函数。事件句柄。</li>
            </ul>
            <h3>返回值</h3>
            <p>元素。克隆的元素。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="200" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var c1 = svg.paper.circle(50, 50, 40);
c1.<mark>clone()</mark>.attr({
    cx: 150	
});</pre>
            <h3>效果</h3>
            <p>
            	<svg id="svg" width="200" height="100"></svg>                
            </p>
            <h3>生成HTML</h3>
            <p><img src="../../static/img/demo-snap-svg-18.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var c1 = svg.paper.circle(50, 50, 40);
c1.clone().attr({
    cx: 150	
});
</script>
</body>
</html>