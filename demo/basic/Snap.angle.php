<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.angle()';
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
        	<h2>Snap.angle(x1, y1, x2, y2, [x3], [y3])</h2>
        	<p>返回<code>2</code>个或<code>3</code>个点之间的角度。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>x1</code> 数值。第<code>1</code>个点的<code>x</code>坐标。</li>
                <li><code>y1</code> 数值。第<code>1</code>个点的<code>y</code>坐标。</li>
                <li><code>x2</code> 数值。第<code>2</code>个点的<code>x</code>坐标。</li>
                <li><code>y2</code> 数值。第<code>2</code>个点的<code>y</code>坐标。</li>
                <li><code>x3</code> 数值。第<code>3</code>个点的<code>x</code>坐标。</li>
                <li><code>y3</code> 数值。第<code>3</code>个点的<code>y</code>坐标。</li>
            </ul>
            <h3>返回值</h3>
            <p>数值。度数表示的角度值。</p>
            <h3>使用</h3>
            <pre>console.log(Snap.angle(10,10, 30,30));
<span class="comment">// 结果是：
// 225</span></pre>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
window.console && 
console.log(Snap.angle(10,10, 30,30));
// 结果是：
// 225
</script>
</body>
</html>