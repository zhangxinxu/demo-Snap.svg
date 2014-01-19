<!doctype html>
<html>
<head>
<?php 
	$key = 'Paper.circle()';
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
            <h2>Paper.circle(cx, cy, r)</h2>
        	<p>画个圈圈诅咒你。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>cx</code> 表示中心点的<code>x</code>坐标。</li>
                <li><code>cy</code> 表示中心点的<code>y</code>坐标。</li>
                <li><code>r</code> 表示圆的半径大小。</li>
            </ul>
            <h3>返回值</h3>
            <p>据说是个对象。</p>
            <p><img src="../../static/img/demo-snap-svg-0.png"><tip data-content="截图"></tip></p>
            <p>其中的属性<code>node</code>对应值貌似就是这个圈圈元素。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="100" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
svg.<mark>paper.circle</mark>(50, 50, 40);</pre>
            <h3>效果</h3>
            <p id="snapShow">
            	<svg id="svg" width="100" height="100"></svg>
            </p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var c = svg.paper.circle(50, 50, 40);
</script>
</body>
</html>