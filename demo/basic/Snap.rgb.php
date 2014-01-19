<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.rgb()';
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
        	<h2>Snap.rgb(r, g, b)</h2>
        	<p>转换RGB颜色为<code>16</code>进制颜色。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>r</code> 数值。红色。0~255</li>
                <li><code>g</code> 数值。绿色。0~255</li>
                <li><code>b</code> 数值。蓝色。0~255</li>
            </ul>
            <h3>返回值</h3>
            <p>字符串。<code>16</code>进制颜色字符串。</p>
            <h3>示意</h3>
            <pre>console.log(Snap.<mark>rgb</mark>(255,0,0));    <span class="comment">// #ff0000</span></pre>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
window.console &&
console.log(Snap.rgb(255,0,0));    // #ff0000 
</script>
</body>
</html>