<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.path.isPointInsideBBox()';
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
        	<h2>Snap.path.isPointInsideBBox(bbox, x, y)</h2>
        	<p>实用方法。给定的点是否在盒子的内部。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>bbox</code> 字符串。边界盒子。</li>
                <li><code>x</code> 数值。点的<code>x</code>坐标。</li>
                <li><code>y</code> 数值。点的<code>y</code>坐标。</li>
            </ul>
            <h3>返回值</h3>
            <p>布尔值。如果点在盒子中，则返回<code>true</code>.</p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
</body>
</html>