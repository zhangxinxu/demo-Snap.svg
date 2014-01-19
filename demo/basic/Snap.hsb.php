<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.hsb()';
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
        	<h2>Snap.hsb(h, s, b)</h2>
        	<p>转换HSB颜色为16进制颜色表示。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>h</code> 数值。色调。0~1</li>
                <li><code>s</code> 数值。饱和度。0~1</li>
                <li><code>b</code> 数值。亮度值。0~1</li>
            </ul>
            <h3>返回值</h3>
            <p>字符串。十六进制表示的颜色字符串。</p>
            <h3>使用</h3>
            <pre>console.log(Snap.<mark>hsb</mark>(.5, .4, .5));    <span class="comment">// #4d8080</span></pre>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
window.console &&
console.log(Snap.hsb(.5, .4, .5));    // #4d8080  
</script>
</body>
</html>