<!doctype html>
<html>
<head>
<?php 
	$key = 'Matrix.translate()';
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
        	<h2>Matrix.translate(x, y)</h2>
        	<p>偏移矩阵。</p>
            <h3>参数</h3>
            <ul>
                <li><code>x</code> 数值。表示<code>x</code>方向偏移距离。</li>
                <li><code>y</code> 数值。表示<code>y</code>方向偏移距离。</li>
            </ul>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="100" height="100">&lt;/svg>

&lt;input id="button" type="button" class="zxx_api_button" value="点击右下偏移10像素"></pre>
            <pre>var svg = Snap("#svg");
var c = svg.paper.rect(20, 20, 60, 60, 10).attr({
    fill: "#f00"    <span class="comment">// 红色</span>
});

document.getElementById("button").onclick = function() {
    var m = new Snap.Matrix();
    m.<mark>translate</mark>(10, 10);
    <span class="comment">// 旋转</span>
    c.transform(m);
};</pre>
            <h3>效果</h3>
            <p>
            	<svg id="svg" width="100" height="100"></svg>                
            </p>
            <p><input id="button" type="button" class="zxx_api_button" value="点击右下偏移10像素"></p>
            <h3>首次旋转后HTML</h3>
            <p><img src="../../static/img/demo-snap-svg-34.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var c = svg.paper.rect(20, 20, 60, 60, 10).attr({
    fill: "#f00"    // 红色
});

document.getElementById("button").onclick = function() {
    var m = new Snap.Matrix();
    m.translate(10, 10);
    // 旋转
    c.transform(m);
};
</script>
</body>
</html>