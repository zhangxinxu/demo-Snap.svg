<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.deg()';
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
        	<h2>Snap.deg(rad)</h2>
        	<p>转换弧度为角度。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>rad</code> 数值。弧度。</li>
            </ul>
            <h3>返回值</h3>
            <p>数值。角度值。</p>
            <h3>使用</h3>
            <pre>Snap.deg(Math.PI); // 结果是：180</pre>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
window.console && 
console.log(Snap.deg(Math.PI)); // 结果是：180
</script>
</body>
</html>