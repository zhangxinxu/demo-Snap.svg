<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.filter.shadow()';
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
        	<h2>Snap.filter.shadow(dx, dy, [blur], [color])</h2>
        	<p>返回阴影滤镜的SVG标记字符串。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>dx</code> 数值。水平偏移投影大小，单位像素。</li>
                <li><code>dy</code> 数值。垂直偏移投影大小，单位像素。</li>
                <li><code>blur</code> 数值。模糊数量。默认大小为<code>4</code>像素。</li>
                <li><code>color</code> 字符串。投影的颜色值。默认颜色为黑色。</li>
            </ul>
            <p>如果<code>dy</code>缺省，则使用<code>dx</code>大小；如<code>dx</code>缺省，则<code>dx</code>使用默认数值<code>2</code>.</p>
            <h3>返回值</h3>
            <p>字符串。表示滤镜。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="100" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var f = svg.paper.filter(Snap.filter.<mark>shadow</mark>(0, 2, 3)),
c = svg.paper.circle(50, 50, 40).attr({
    fill: "red",
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
var f = svg.paper.filter(Snap.filter.shadow(0, 2, 3)),
c = svg.paper.circle(50, 50, 40).attr({
	fill: "red",
    filter: f
});
</script>
</body>
</html>