<!doctype html>
<html>
<head>
<?php 
	$key = 'Matrix.x()';
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
        	<h2>Matrix.x(x, y)</h2>
        	<p>返回给定点经矩阵转换后的<code>x</code>坐标。</p>
            <h3>参数</h3>
            <ul>
                <li><code>x</code> 数值。给定点的<code>x</code>坐标。</li>
                <li><code>y</code> 数值。给定点的<code>y</code>坐标。</li>
            </ul>
            <h3>返回值</h3>
            <p>数值。返回<code>x</code>。</p>
            <h3>测试代码</h3>
            <pre>var m = new Snap.Matrix(1,2,3,4,5,6);
window.console && console.log(m.<mark>x</mark>(50,50));
<span class="comment">// 结果是：
// 205</span></pre>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var m = new Snap.Matrix(1,2,3,4,5,6);
window.console && console.log(m.x(50,50));
// 结果是：
// 205
</script>
</body>
</html>