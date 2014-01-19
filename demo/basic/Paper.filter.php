<!doctype html>
<html>
<head>
<?php 
	$key = 'Paper.filter()';
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
        	<h2>Paper.filter(filstr)</h2>
        	<p>创建一个<code>&lt;filter&gt;</code>元素。也就是滤镜元素啦~~</p>
            <h3>参数</h3>
            <ul>
            	<li><code>filstr</code> 滤镜相关的SVG字符串片段。</li>
            </ul>
            <h3>返回值</h3>
            <p>对象。包含<code>id</code>, 元素等一些信息。</p>
            <p>注意：要在页面嵌入滤镜的话推荐嵌在空SVG元素中。</p>
            <h3>使用</h3>
            <p>2像素圈圈高斯模糊。</p>
            <pre>&lt;svg id="svg" width="100" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var f = svg.<mark>paper.filter</mark>('&lt;feGaussianBlur stdDeviation="2"/&gt;');
var c = svg.circle(50, 50, 40).attr({
	filter: f
});</pre>
            <h3>效果</h3>
            <p id="snapShow">
            	<svg id="svg" width="100" height="100"></svg>
            </p>
            <h3>生成HTML</h3>
            <p><img src="../../static/img/demo-snap-svg-3.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var f = svg.paper.filter('<feGaussianBlur stdDeviation="2"/>');
var c = svg.paper.circle(50, 50, 40).attr({
	filter: f
});
</script>
</body>
</html>