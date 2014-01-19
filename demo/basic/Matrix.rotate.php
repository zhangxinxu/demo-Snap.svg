<!doctype html>
<html>
<head>
<?php 
	$key = 'Matrix.rotate()';
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
        	<h2>Matrix.rotate(a, x, y)</h2>
        	<p>旋转矩阵。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>a</code> 数值。表示旋转的角度。</li>
                <li><code>x</code> 数值。表示旋转中心点的<code>x</code>位置。</li>
                <li><code>y</code> 数值。表示旋转中心点的<code>y</code>位置。</li>
            </ul>
            <h3>返回值</h3>
            <p>元素。返回父元素。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="100" height="100">&lt;/svg>

&lt;input id="button" type="button" class="zxx_api_button" value="点击旋转45°"></pre>
            <pre>var svg = Snap("#svg");
var c = svg.paper.rect(20, 20, 60, 60, 10).attr({
    fill: "#f00"    <span class="comment">// 红色</span>
});

var rot = 0;
document.getElementById("button").onclick = function() {
    var m = new Snap.Matrix();
    rot+= 45;
    m.<mark>rotate</mark>(rot, 50, 50);
    <span class="comment">// 旋转</span>
    c.transform(m);
};</pre>
            <h3>效果</h3>
            <p>
            	<svg id="svg" width="100" height="100"></svg>                
            </p>
            <p><input id="button" type="button" class="zxx_api_button" value="点击旋转45°"></p>
            <h3>首次旋转后HTML</h3>
            <p><img src="../../static/img/demo-snap-svg-31.png"><tip data-content="截图"></tip></p>
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

var rot = 0;
document.getElementById("button").onclick = function() {
	var m = new Snap.Matrix();
	rot+= 45;
	m.rotate(rot, 50, 50);
	// 旋转
	c.transform(m);
};
</script>
</body>
</html>