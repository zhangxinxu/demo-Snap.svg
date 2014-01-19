<!doctype html>
<html>
<head>
<?php 
	$key = 'Element.data()';
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
        	<h2>Element.data(key, [value])</h2>
        	<p>类似jQuery中的<code>data</code>, 数据存储与获取。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>key</code> 字符串。存储数据关键字。</li>
                <li><code>value</code> 任意类型。存储的值。</li>
            </ul>
            <h3>返回值</h3>
            <p>如果<code>value</code>指定，则返回元素自身。如果<code>value</code>未指定，则返回的是对应关键字存储的数据。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="100" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var c = svg.paper.circle(50, 50, 40).attr({
    fill: "#f00"	
}).<mark>data</mark>("author", "zhangxinxu").click(function() {
    svg.paper.text(10, 10, this.<mark>data</mark>("author"));	
});</pre>
            <h3>效果</h3>
            <p>点击下面的圈圈显示存储的内容：</p>
            <p>
            	<svg id="svg" width="100" height="100"></svg>                
            </p>
            <h3>生成HTML</h3>
            <p><img src="../../static/img/demo-snap-svg-19.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var c = svg.paper.circle(50, 50, 40).attr({
	fill: "#f00"	
}).data("author", "zhangxinxu").click(function() {
	svg.paper.text(10, 10, this.data("author"));	
});
</script>
</body>
</html>