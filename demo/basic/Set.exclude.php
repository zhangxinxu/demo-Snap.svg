<!doctype html>
<html>
<head>
<?php 
	$key = 'Set.exclude()';
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
        	<h2>Set.exclude(element)</h2>
        	<p>移除<code>set</code>中给定的元素。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>element</code> 对象。要移除的元素。</li>
            </ul>
            <h3>返回值</h3>
            <p>布尔值。如果对象存在并且移除成功，则返回<code>true</code>.</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="200" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var c1 = svg.paper.circle(50,50,40);
var c2 = svg.paper.circle(150,50,40);
<span class="comment">// 获得set集合</span>
var set = svg.selectAll("circle");
<span class="comment">// 此时set也就是c1和c2的集合
// 移除c1</span>
set.<mark>exclude</mark>(c1);
<span class="comment">// 剩下的填充色暗红，也就是c2, 也就是第2个圆</span>
set.attr({
    fill: "#cd0000"	 
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
// 移除c1
set.exclude(c1);
// 剩下的填充色暗红
set.attr({
	fill: "#cd0000"	 
});
</script>
</body>
</html>