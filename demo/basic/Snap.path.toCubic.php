<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.path.toCubic()';
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
        	<h2>Snap.path.toCubic(pathString)</h2>
        	<p>实用方法。转换一个路径为一个全部路径段采用三次贝塞尔曲线表示的新路径</p>
            <h3>参数</h3>
            <ul>
            	<li><code>pathString</code> 字符串或数组。路径字符串或段数组。</li>
            </ul>
            <h3>返回值</h3>
            <p>数组。路径段数组。</p>
            <h3>使用</h3>
            <pre>var pathString = "m32,118c0,0 21,-100 78,-94c57,6 -78,94 -78,94z";
var cubic = Snap.path.<mark>toCubic</mark>(pathString);
console.log(cubic.toString());
<span class="comment">// 结果是：
// M32,118C32,118,53,18,110,24C167,30,32,118,32,118C32,118,32,118,32,118</span></pre>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var pathString = "m32,118c0,0 21,-100 78,-94c57,6 -78,94 -78,94z";
var cubic = Snap.path.toCubic(pathString);
window.console && 
console.log(cubic.toString());
// 结果是：
// M32,118C32,118,53,18,110,24C167,30,32,118,32,118C32,118,32,118,32,118
</script>
</body>
</html>