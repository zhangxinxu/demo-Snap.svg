<!doctype html>
<html>
<head>
<?php 
	$key = 'Matrix.toTransformString()';
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
        	<h2>Matrix.toTransformString()</h2>
        	<p>返回给定矩阵的使用<code>transform</code>表示的字符串。</p>
            <h3>返回值</h3>
            <p>字符串。转换字符串。</p>
            <h3>测试代码</h3>
            <pre>var m1 = new Snap.Matrix(1,2,3,4,5,6), m2 = new Snap.Matrix(2,0,0,1,20,20);
console.log(m1.<mark>toTransformString()</mark>);
console.log(m2.<mark>toTransformString()</mark>);
<span class="comment">// 结果是：
// m1,2,3,4,5,6
// t20,20s2,1,0,0</span></pre>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var m1 = new Snap.Matrix(1,2,3,4,5,6), m2 = new Snap.Matrix(2,0,0,1,20,20);
if (window.console) {
	console.log(m1.toTransformString());
	console.log(m2.toTransformString());
}
// 结果是：
// m1,2,3,4,5,6
// t20,20s2,1,0,0
</script>
</body>
</html>