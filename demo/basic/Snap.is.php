<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.is()';
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
        	<h2>Snap.is(o, type)</h2>
        	<p><code>typeof</code>运算符另外一种更好的替代表现形式。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>o</code> 类型任意。可以是任意对象或基本类型。</li>
                <li><code>type</code> 字符串。类型名称，如<code>"string"</code>, <code>"function"</code>, <code>"number"</code>等。</li>
            </ul>
            <h3>返回值</h3>
            <p>布尔值。如果给定值与给定类型匹配，则返回<code>true</code>.</p>
            <h3>测试</h3>
            <pre>console.log(Snap.<mark>is</mark>(Math.random(), "number"));    <span class="comment">// true</span></pre>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
window.console &&
console.log(Snap.is(Math.random(), "number"));    // true 
</script>
</body>
</html>