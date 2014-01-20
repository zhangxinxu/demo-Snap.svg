<!doctype html>
<html>
<head>
<?php 
	$key = 'Paper.rect()';
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
        	<h2>Paper.rect(x, y, width, height, [rx], [ry])</h2>
        	<p>画矩形</p>
            <h3>参数</h3>
            <ul>
            	<li><code>x</code> 左上角<code>x</code>坐标位置。</li>
                <li><code>y</code> 左上角<code>y</code>坐标位置。</li>
                <li><code>width</code> 宽度。</li>
                <li><code>height</code> 高度。</li>
                <li><code>rx</code> 水平方向的圆角大小，默认是<code>0</code>.</li>
                <li><code>ry</code> 垂直方向的圆角大小，默认是<code>rx</code>或<code>0</code>.</li>
            </ul>
            <h3>返回值</h3>
            <p>对象。<code>rect</code>元素。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="150" height="120">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
<span class="comment">// 圆角矩形，左上角坐标(10, 20), 宽120高90, 圆角大小10</span>
var c = svg.<mark>paper.rect</mark>(10, 20, 120, 90, 10);</pre>
            <h3>效果</h3>
            <p id="snapShow">
            	<svg id="svg" width="150" height="120"></svg>
            </p>
            <h3>生成HTML</h3>
            <p><img src="../../static/img/demo-snap-svg-10.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
// 圆角矩形，左上角坐标(10, 20), 宽120高90, 圆角大小10
var c = svg.paper.rect(10, 20, 120, 90, 10);
</script>
</body>
</html>