<!doctype html>
<html>
<head>
<?php 
	$key = 'Element.use()';
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
        	<h2>Element.use()</h2>
        	<p>创建一个<code>&lt;use&gt;</code>元素连接到当前元素。</p>
            <h3>返回值</h3>
            <p>对象。元素</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var c = svg.paper.el("circle", {
    cx: 50,
    cy: 50,
    r: 40	
});

c.<mark>use()</mark>;</pre>			
            <h3>效果</h3>
            <p id="snapShow">
            	<svg id="svg" width="100" height="100"></svg>
            </p>
            <h3>生成HTML</h3>
            <p><img src="../../static/img/demo-snap-svg-30.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var c = svg.paper.el("circle", {
    cx: 50,
    cy: 50,
    r: 40	
});
c.use();
</script>
</body>
</html>