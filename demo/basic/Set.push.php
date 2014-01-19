<!doctype html>
<html>
<head>
<?php 
	$key = 'Set.push()';
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
        	<h2>Set.push()</h2>
        	<p>最后添加一个元素并返回之。</p>
            <h3>返回值</h3>
            <p>元素。添加的元素。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="200" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var c1 = svg.paper.circle(50,50,40);
var c2 = svg.paper.circle(150,50,40);
<span class="comment">// 获得set集合</span>
var set = svg.selectAll("circle");
<span class="comment">// 移除所有元素</span>
set.clear();
<span class="comment">// 添加第2个圈圈元素</span>
var pushed = set.<mark>push</mark>(c2);
<span class="comment">// set变成红苹果</span>
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
// 移除所有元素
set.clear();
// 添加第2个圈圈元素
var pushed = set.push(c2);
// set变成红苹果
set.attr({
    fill: "#f00"	 
});
</script>
</body>
</html>