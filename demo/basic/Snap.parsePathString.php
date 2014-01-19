<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.parsePathString()';
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
        	<h2>Snap.parsePathString(pathString)</h2>
        	<p>实用方法，解析路径字符串为路径区段数组。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>pathString</code> 字符串或数组。路径字符串或区段数组(后面一种情况直接返回)。</li>
            </ul>
            <h3>返回值</h3>
            <p>数组。区段数组。</p>
            <h3>使用</h3>
            <pre>var arr1 = Snap.<mark>parsePathString</mark>("M10 10L90 90");
var arr2 = Snap.<mark>parsePathString</mark>([["M",10,10], ["L",90,90]]);
console.log(arr1);
console.log(arr2);</pre>
            <h3>控制台输出</h3>
            <p><img src="../../static/img/demo-snap-svg-38.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var arr1 = Snap.parsePathString("M10 10L90 90");
var arr2 = Snap.parsePathString([["M",10,10], ["L",90,90]]);
if (window.console) {
    console.log(arr1);
    console.log(arr2);
}
</script>
</body>
</html>