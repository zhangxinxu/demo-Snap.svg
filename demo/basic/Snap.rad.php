<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.rad()';
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
        	<h2>Snap.rad(deg)</h2>
        	<p>转换角度为弧度。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>deg</code> 数值。角度。</li>
            </ul>
            <h3>返回值</h3>
            <p>数值。弧度。</p>
            <h3>使用</h3>
            <pre>Snap.<mark>rad</mark>(45);    <span class="comment">// 0.7853981633974483</span></pre>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
</body>
</html>