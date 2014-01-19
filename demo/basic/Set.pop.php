<!doctype html>
<html>
<head>
<?php 
	$key = 'Set.pop()';
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
        	<h2>Set.pop()</h2>
        	<p>移除最后一个元素并返回之。</p>
            <h3>返回值</h3>
            <p>元素。移除的元素。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="200" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var c1 = svg.paper.circle(50,50,40);
var c2 = svg.paper.circle(150,50,40);
<span class="comment">// 获得set集合</span>
var set = svg.selectAll("circle");
<span class="comment">// 移除最后一个元素</span>
var remove = set.<mark>pop()</mark>;
<span class="comment">// 移除的元素变蓝精灵</span>
remove.attr({
    fill: "#00f"			
});
<span class="comment">// 剩下的变成红苹果</span>
set.attr({
    fill: "#f00"	 
});</pre>
            <h3>效果</h3>
            <p>
            	<svg id="svg" width="200" height="100"></svg>                
            </p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var c1 = svg.paper.circle(50,50,40);
var c2 = svg.paper.circle(150,50,40);
// 获得set集合
var set = svg.selectAll("circle");
// 移除最后一个元素
var remove = set.pop();
// 移除的元素变蓝精灵
remove.attr({
	fill: "#00f"			
});
// 剩下的变成红苹果
set.attr({
	fill: "#f00"	 
});
</script>
</body>
</html>