<!doctype html>
<html>
<head>
<?php 
	$key = 'Matrix.scale()';
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
        	<h2>Matrix.scale(x, [y], [cx], [cy])</h2>
        	<p>缩放矩阵。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>x</code> 数值。水平方向缩放的比例。<code>1</code>表示不缩放。</li>
                <li><code>y</code> 数值。垂直方向缩放的比例。<code>1</code>表示不缩放。</li>
                <li><code>cx</code> 数值。表示缩放中心点的<code>x</code>位置。</li>
                <li><code>cy</code> 数值。表示缩放中心点的<code>y</code>位置。</li>
            </ul>
            <p><code>cx</code>, <code>cy</code>是默认是元素的中心点。</p>
            <h3>返回值</h3>
            <p>元素。返回父元素。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="100" height="100">&lt;/svg>

&lt;input id="button" type="button" class="zxx_api_button" value="点击缩放0.8~1.2倍"></pre>
            <pre>var svg = Snap("#svg");
var c = svg.paper.rect(20, 20, 60, 60, 10).attr({
    fill: "#f00"    <span class="comment">// 红色</span>
});

document.getElementById("button").onclick = function() {
    var m = new Snap.Matrix();
    var scale = Math.round((0.8 + 0.4 * Math.random()) * 100) / 100;
    m.<mark>scale</mark>(scale, scale);
    <span class="comment">// 缩放</span>
    c.transform(m);
};</pre>
            <h3>效果</h3>
            <p>
            	<svg id="svg" width="100" height="100"></svg>                
            </p>
            <p><input id="button" type="button" class="zxx_api_button" value="点击缩放0.8~1.2倍"></p>
            <h3>首次旋转后HTML</h3>
            <p><img src="../../static/img/demo-snap-svg-32.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var c = svg.paper.rect(20, 20, 60, 60, 10).attr({
	fill: "#f00"	// 红色
});

document.getElementById("button").onclick = function() {
	var m = new Snap.Matrix();
	var scale = Math.round((0.8 + 0.4 * Math.random()) * 100) / 100;
	m.scale(scale, scale);
	// 缩放
	c.transform(m);
};
</script>
</body>
</html>