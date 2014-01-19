<!doctype html>
<html>
<head>
<?php 
	$key = 'Element.after()';
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
        	<h2>Element.after(el)</h2>
        	<p>给定元素插入到当前元素的后面。也就是<code>el</code>到<code>Element</code>的后面。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>el</code> 元素。要插入的元素。</li>
            </ul>
            <h3>返回值</h3>
            <p>元素。返回父元素。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="200" height="100">&lt;/svg>
            
&lt;input id="button" type="button" value="点击改变圈圈的顺序"></pre>
            <pre>var svg = Snap("#svg");
var c1 = svg.paper.circle(50, 50, 40).attr({
    fill: "#f00"	<span class="comment">// 红色</span>
});
var c2 = svg.paper.circle(100, 50, 40).attr({
    fill: "#00f"	<span class="comment">// 蓝色</span>
});

<span class="comment">// 事件</span>
document.querySelector("#button").addEventListener("click", function() {
    c2.<mark>after</mark>(c1);	
});</pre>
            <h3>效果</h3>
            <p>
            	<svg id="svg" width="200" height="100"></svg>                
            </p>
            <p><input id="button" type="button" class="zxx_api_button" value="点击改变圈圈的顺序"></p>
            <h3>HTML变化</h3>
            <p><strong>默认：</strong></p>
            <p><img src="../../static/img/demo-snap-svg-12.png"><tip data-content="截图"></tip></p>
            <p><strong>点击按钮后：</strong></p>
            <p><img src="../../static/img/demo-snap-svg-13.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var c1 = svg.paper.circle(50, 50, 40).attr({
	fill: "#f00"	// 红色
});
var c2 = svg.paper.circle(100, 50, 40).attr({
	fill: "#00f"	// 蓝色
});

// 事件
if (document.addEventListener) {
	document.querySelector("#button").addEventListener("click", function() {
		c2.after(c1);	
	});
}
</script>
</body>
</html>