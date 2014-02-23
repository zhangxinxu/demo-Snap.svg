<!doctype html>
<html>
<head>
<?php 
	$key = 'Element.toDefs()';
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
        	<h2>Element.toDefs()</h2>
        	<p>把元素移动到<code>&lt;defs&gt;</code>区域。</p>
            <h3>返回值</h3>
            <p>元素。克隆的元素。</p>
            <h3>测试代码</h3>
            <pre>&lt;svg id="svg" width="100" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
svg.paper.circle(50, 50, 40).<mark>toDefs</mark>();</pre>
            <h3>效果</h3>
            <p>
            	<svg id="svg" width="100" height="100"></svg>                
            </p>
            <h3>生成HTML</h3>
            <p><img src="../../static/img/demo-snap-svg-28.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
svg.paper.circle(50, 50, 40).toDefs();
</script>
</body>
</html>