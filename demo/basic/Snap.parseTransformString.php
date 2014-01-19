<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.parseTransformString()';
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
        	<h2>Snap.parseTransformString(TString)</h2>
        	<p>实用方法，解析给定的变换字符串为变换数组。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>TString</code> 字符串或数组。变换字符串或变换数组(后面一种情况直接返回)。</li>
            </ul>
            <h3>返回值</h3>
            <p>数组。变换数组。</p>
            <h3>使用</h3>
            <pre>var arr = Snap.<mark>parseTransformString</mark>("t20,20s2,1,0,0");
console.log(arr);</pre>
            <h3>控制台输出</h3>
            <p><img src="../../static/img/demo-snap-svg-39.png"></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var arr = Snap.parseTransformString("t20,20s2,1,0,0");
window.console &&
console.log(arr);
</script>
</body>
</html>