<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.filter.blur()';
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
        	<h2>Snap.filter.blur(x, [y])</h2>
        	<p>返回模糊滤镜的SVG标记字符串。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>x</code> 数值。表示水平模糊的大小。</li>
                <li><code>y</code> 数值。表示垂直模糊的大小。</li>
            </ul>
            <p>如果<code>y</code>缺省，则<code>y</code>与<code>x</code>值相等。如果<code>x</code>缺省，使用默认值<code>2</code>.</p>
            <h3>返回值</h3>
            <p>字符串。表示滤镜。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="100" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var f = svg.paper.filter(Snap.filter.<mark>blur</mark>()<span style="color:green;">/* 使用默认的2像素模糊 */</span>),
c = svg.paper.circle(50, 50, 40).attr({
    filter: f
});</pre>
            <h3>效果</h3>
            <p>
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
var f = svg.paper.filter(Snap.filter.blur()/* 使用默认的2像素模糊 */),
c = svg.paper.circle(50, 50, 40).attr({
    filter: f
});
</script>
</body>
</html>