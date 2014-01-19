<!doctype html>
<html>
<head>
<?php 
	$key = 'Paper.toString()';
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
        	<h2>Paper.toString()</h2>        	
            <h3>返回值</h3>
            <p>返回元素的SVG代码，等同于HTML中的<code>outerHTML</code>方法。</p>
            <p>返回Paper的SVG代码。</p>
            <p>以上返回均是字符串。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="0" height="0">&lt;/svg></pre>
            <pre>
var svg = Snap("#svg");
console.log(svg.paper.toString());
<span class="comment">// 结果是：
// &lt;svg id="svg" width="0" height="0" xmlns="http://www.w3.org/2000/svg">&lt;desc>Created with Snap&lt;/desc>&lt;defs>&lt;/defs>&lt;/svg></span></pre>
            <svg id="svg" width="0" height="0"></svg>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
window.console && console.log(svg.paper.toString());
</script>
</body>
</html>