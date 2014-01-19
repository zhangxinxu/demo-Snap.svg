<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.path.getTotalLength()';
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
        	<h2>Snap.path.getTotalLength(path)</h2>
            <p>以像素为单位，返回路径的长度（仅适用于<code>path</code>元素）。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>path</code> 字符串。SVG路径字符串。</li>
            </ul>
            <h3>返回值</h3>
            <p>数值。长度值。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="100" height="100">&lt;/svg></pre>
            <pre>console.log(Snap.<mark>path.getTotalLength</mark>("M10 10L90 90"));
<span class="comment">// 结果是：
// 113.1370849609375</span></pre>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
window.console && 
console.log(Snap.path.getTotalLength("M10 10L90 90"));
</script>
</body>
</html>