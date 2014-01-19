<!doctype html>
<html>
<head>
<?php 
	$key = 'mina.getById()';
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
        	<h2>mina.getById(id)</h2>
        	<p>根据动画的<code>id</code>返回这个动画对象。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>id</code> 字符串。动画的<code>id</code></li>
            </ul>
            <h3>返回值</h3>
            <p>对象。参见<a href="mina.php">mina</a>。</p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
</body>
</html>