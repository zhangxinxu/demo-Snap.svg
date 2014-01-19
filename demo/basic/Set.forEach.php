<!doctype html>
<html>
<head>
<?php 
	$key = 'Set.forEach()';
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
        	<h2>Set.forEach(callback, thisArg)</h2>
        	<p>为<code>set</code>中每个元素执行给定的函数。</p>
            <p>如果函数的返回值是<code>false</code>, 停止循环。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>callback</code> 函数。运行的函数。支持参数类似于JS中<code>forEach</code>遍历。默认上下文对象为全局对象。</li>
                <li><code>thisArg</code> 对象。<code>callback</code>的上下文对象。</li>
            </ul>
            <h3>返回值</h3>
            <p>对象。<code>set</code>对象。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="200" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var c1 = svg.paper.circle(50,50,40);
var c2 = svg.paper.circle(150,50,40);
<span class="comment">// 获得set集合</span>
var set = svg.selectAll("circle");
<span class="comment">// 遍历填色</span>
set.<mark>forEach</mark>(function(element, index) {
    element.attr({
        fill: ["#f00", "#00f"][index] 
    });				 
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
// 遍历填色
set.forEach(function(element, index) {
	element.attr({
		fill: ["#f00", "#00f"][index] 
	});				 
});
</script>
</body>
</html>