<!doctype html>
<html>
<head>
<?php 
	$key = 'Element.getTotalLength()';
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
        	<h2>Element.getTotalLength()</h2>
            <p>以像素为单位，返回路径的长度（仅适用于<code>path</code>元素）。</p>
            <h3>返回值</h3>
            <p>数值。长度值。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="100" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var c = svg.paper.path("M10 10L90 90").attr({
    stroke: "#000",
    strokeWidth: 5	
});
console.log(c.<mark>getTotalLength</mark>());
<span class="comment">// 结果是：
// 113.1370849609375</span></pre>
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
window.console && console.log(c.getTotalLength());
// 结果是：
// 113.1370849609375
</script>
</body>
</html>