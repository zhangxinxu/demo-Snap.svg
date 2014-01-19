<!doctype html>
<html>
<head>
<?php 
	$key = 'Element.innerSVG()';
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
        	<h2>Element.inAnim()</h2>
            <p>返回元素内容的SVG代码。近似于HTML中的<code>innerHTML</code>方法。</p>
            <h3>返回值</h3>
            <p>字符串。SVG字符串代码。</p>
            <h3>测试代码</h3>            
            <pre>&lt;svg id="svg" width="200" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
svg.paper.circle(50, 50, 40);
console.log(svg.<mark>innerSVG()</mark>);
<span class="comment">// 结果是：
// &lt;desc>Created with Snap&lt;/desc>&lt;defs/>&lt;circle cx="50" cy="50" r="40"/></span></pre>
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
svg.paper.circle(50, 50, 40);
window.console &&
console.log(svg.innerSVG());
// 结果是：
// <desc>Created with Snap</desc><defs/><circle cx="50" cy="50" r="40"/> 
</script>
</body>
</html>