<!doctype html>
<html>
<head>
<?php 
	$key = 'Element.asPX()';
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
        	<h2>Element.asPX(attr, [value])</h2>
        	<p>以<code>px</code>值(非<code>%</code>, <code>em</code>等)返回元素给定的属性。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>attr</code> 字符串。属性名称。</li>
                <li><code>value</code> 字符串。属性值。</li>
            </ul>
            <h3>返回值</h3>
            <p>元素。返回选择查询的结果。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="100" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var c = svg.paper.circle(50, 50, 40);
console.log(c.<mark>asPX</mark>("cx"));    <span class="comment">// 50</span></pre>
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
var c = svg.paper.circle(50, 50, 40);
window.console && console.log(c.asPX("cx"));    // 50
</script>
</body>
</html>