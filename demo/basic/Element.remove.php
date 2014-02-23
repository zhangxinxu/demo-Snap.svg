<!doctype html>
<html>
<head>
<?php 
	$key = 'Element.remove()';
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
        	<h2>Element.remove(handler)</h2>
        	<p>从DOM中移除该元素。</p>
            <h3>返回值</h3>
            <p>元素。被分离的元素。</p>
            <h3>测试代码</h3>
            <pre>&lt;svg id="svg" width="200" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var c1 = svg.paper.circle(50, 50, 40).attr({
    fill: "#f00"        <span class="comment">// 红色</span>
});
var c2 = svg.paper.circle(150, 50, 40).attr({
    fill: "#00f"        <span class="comment">// 蓝色</span>
});

document.getElementById("button").onclick = function() {
    <span class="comment">// 移除红色</span>
    c1.<mark>remove</mark>();
};</pre>
            <h3>效果</h3>
            <p>
            	<svg id="svg" width="200" height="100"></svg>              
            </p>
            <p>
            	<input id="button" type="button" class="zxx_api_button" value="点击移除红色圈圈">
            </p>
            <h3>移除圈圈后的HTML</h3>
            <p><img src="../../static/img/demo-snap-svg-27.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var c1 = svg.paper.circle(50, 50, 40).attr({
    fill: "#f00"        // 红色
});
var c2 = svg.paper.circle(150, 50, 40).attr({
    fill: "#00f"        // 蓝色
});

document.getElementById("button").onclick = function() {
	c1.remove();
};
</script>
</body>
</html>