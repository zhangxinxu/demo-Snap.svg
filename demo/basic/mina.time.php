<!doctype html>
<html>
<head>
<?php 
	$key = 'mina.time()';
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
        	<h2>mina.time()</h2>
        	<p>返回当前时间，等同于：</p>
            <pre>function () {
    return (new Date).getTime();
}</pre>
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