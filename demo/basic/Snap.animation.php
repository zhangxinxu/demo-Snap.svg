<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.animation()';
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
        	<h2>Snap.animation(attr, duration, [easing], [callback])</h2>
        	<p>创建一个<code>animation</code>对象。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>attr</code> 对象。最终目标的属性。</li>
                <li><code>duration</code> 数值。动画持续的时间，单位为毫秒。</li>
                <li><code>easing</code> 函数。<code>mina</code>或自定义的缓动函数。</li>
                <li><code>callback</code> 函数。动画结束的时候执行的回调函数。</li>
            </ul>
            <h3>返回值</h3>
            <p>对象。动画对象。</p>
            <h3>使用</h3>
            <p style="color:#999;">//zxx: 应用场景不明，使用不详。</p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
window.console &&
console.log(Snap.animation({ x: 30 }, 1000));
</script>
</body>
</html>