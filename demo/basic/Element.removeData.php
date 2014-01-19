<!doctype html>
<html>
<head>
<?php 
	$key = 'Element.removeData()';
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
        	<h2>Element.removeData([key])</h2>
        	<p>移除元素上存储的对应关键字数据。如果关键字未提供，则移除元素上存储的所有数据。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>key</code> 字符串。关键字。</li>
            </ul>
            <h3>返回值</h3>
            <p>对象。元素。</p>
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