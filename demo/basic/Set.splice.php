<!doctype html>
<html>
<head>
<?php 
	$key = 'Set.splice()';
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
        	<h2>Set.splice(index, count, [insertion…])</h2>
        	<p>移除<code>set</code>中特定范围内的元素。非常类似JS数组的<code>splice</code>方法。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>index</code> 数值。要移除的位置。</li>
                <li><code>count</code> 数值。要移除的元素的个数。</li>
                <li><code>insertion</code> 对象。要插入的元素（替换移除的）。</li>
            </ul>
            <h3>返回值</h3>
            <p>对象。被移除的那些元素们。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="200" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var c1 = svg.paper.circle(50,50,40);
var c2 = svg.paper.circle(150,50,40);
<span class="comment">// 获得set集合</span>
var set = svg.selectAll("circle");
<span class="comment">// 此时set也就是c1和c2的集合
// 移除set中序号0开始数目为1的元素，并设置为蓝色填充</span>
set.<mark>splice</mark>(0, 1).attr({
    fill: "#00f"	 
});
<span class="comment">// 剩下的红色填充</span>
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
// 此时set也就是c1和c2的集合
// 移除set中序号0开始数目为1的元素，并设置为蓝色填充
set.splice(0, 1).attr({
    fill: "#00f"	 
});
// 剩下的红色填充
set.attr({
    fill: "#f00"	 
});
</script>
</body>
</html>