<!doctype html>
<html>
<head>
<?php 
	$key = 'Element.stop()';
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
        	<h2>Element.stop()</h2>
        	<p>停止当前元素的所有动画。</p>
            <h3>返回值</h3>
            <p>元素。当前元素。</p>
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