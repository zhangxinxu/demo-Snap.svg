<!doctype html>
<html>
<head>
<?php 
	$key = 'Element.getSubpath()';
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
        	<h2>Element.getSubpath(from, to)</h2>
        	<p>返回给定元素上指定起始结束长度上的子路径（仅适用于<code>path</code>元素）。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>from</code> 数值。表长度，以像素为单位，从路径起点到该段的开始</li>
                <li><code>to</code> 数值。表长度，以像素为单位，从路径起点到该段的终点</li>
            </ul>
            <h3>返回值</h3>
            <p>字符串。定义该段路径的字符串。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="100" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var c = svg.paper.path("M10 10L90 90").attr({
    stroke: "#000",
    strokeWidth: 5	
});
console.log(c.<mark>getSubpath</mark>(20, 80));
<span class="comment">// 结果是：
// M24.139,24.139C35.874,35.874,52.807,52.807,66.565,66.565</span></pre>
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
var c = svg.paper.path("M10 10L90 90").attr({
    stroke: "#000",
    strokeWidth: 5	
});
window.console && console.log(c.getSubpath(20, 80));
// 结果是：
// M24.139,24.139C35.874,35.874,52.807,52.807,66.565,66.565
</script>
</body>
</html>