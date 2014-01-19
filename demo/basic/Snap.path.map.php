<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.path.map()';
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
        	<h2>Snap.path.map(path, matrix)</h2>
        	<p>把路径字符串按照矩阵转换。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>path</code> 字符串。路径字符串。</li>
                <li><code>matrix</code> 对象。矩阵。</li>
            </ul>
            <h3>返回值</h3>
            <p><del>字符串。转换后的路径字符串。</del></p>
            <p>上面是官方表述。但，经过自己的测试，发现返回的是数组。</p>
            <h3>使用</h3>
            <pre>var path = 'M10,10L90,90', matrix = new Snap.Matrix(1,0,0,1,10,10);
var pathTransform = Snap.path.map(path, matrix);
if (window.console) { 
    console.log(pathTransform);    <span class="comment">// 结果是：[Array[3], Array[7], toString: function]</span>
    console.log(pathTransform.toString());    <span class="comment">// 结果是：M20,20C20,20,100,100,100,100</span>
}</pre>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var path = 'M10,10L90,90', matrix = new Snap.Matrix(1,0,0,1,10,10);
var pathTransform = Snap.path.map(path, matrix);
if (window.console) { 
    console.log(pathTransform);    // 结果是：[Array[3], Array[7], toString: function]
    console.log(pathTransform.toString());    // 结果是：M20,20C20,20,100,100,100,100 
}
</script>
</body>
</html>