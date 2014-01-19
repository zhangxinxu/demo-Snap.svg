<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap()'; // Element.add()
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
        	<h2>Snap(…)</h2>
        	<p>绘制一个面或者包裹一个已经存在的SVG元素。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>width</code> 数值或字符串。面的宽度。</li>
                <li><code>height</code> 数值或字符串。面的高度。</li>
            </ul>
            <p>或者</p>
            <ul>
            	<li><code>DOM</code> SVG元素。被包裹的用来使用Snap构造的元素。</li>
            </ul>
            <p>或者</p>
            <ul>
            	<li><code>query</code> 字符串。CSS查询选择器。</li>
            </ul>
            <h3>返回值</h3>
            <p>对象。元素。</p>
            <h3>使用</h3>
            <pre>var svg = <mark>Snap</mark>(100, 100);
svg.paper.circle(50,50,40);
document.getElementById("append").appendChild(svg.node);</pre>
            <h3>效果</h3>
            <p id="append"></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap(100, 100);
svg.paper.circle(50,50,40);
document.getElementById("append").appendChild(svg.node);
</script>
</body>
</html>