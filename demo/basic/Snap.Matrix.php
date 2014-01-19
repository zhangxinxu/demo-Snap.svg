<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.Matrix()';
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
        	<h2>Snap.Matrix(…)</h2>
        	<p>根据给定参数返回矩阵的实例方法。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>a</code> 数值。</li>
                <li><code>b</code> 数值。</li>
                <li><code>c</code> 数值。</li>
                <li><code>d</code> 数值。</li>
                <li><code>e</code> 数值。</li>
                <li><code>f</code> 数值。</li>
            </ul>
            <p>或者</p>
            <ul>
            	<li><code>svgMatrix</code> SVGMatrix类型。</li>
            </ul>
            <h3>返回值</h3>
            <p>对象。矩阵对象。</p>
            <h3>使用</h3>
            <pre>var m = new Snap.Matrix(1,0,0,1,0,0);</pre>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>

</script>
</body>
</html>