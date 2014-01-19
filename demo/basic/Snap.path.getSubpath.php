<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.path.getSubpath()';
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
        	<h2>Snap.path.getSubpath(path, from, to)</h2>
        	<p>返回给定路径上指定起始结束长度上的子路径。另可参见<a href="Element.getSubpath.php">Element.getSubpath</a>.</p>
            <h3>参数</h3>
            <ul>
            	<li><code>path</code> 字符串。SVG路径字符串。</li>
            	<li><code>from</code> 数值。表长度，以像素为单位，从路径起点到该段的开始</li>
                <li><code>to</code> 数值。表长度，以像素为单位，从路径起点到该段的终点</li>
            </ul>
            <h3>返回值</h3>
            <p>字符串。定义该段路径的字符串。</p>
            <h3>使用</h3>
            <pre>console.log(Snap.<mark>path.getSubpath</mark>("M10 10L90 90", 20, 80));
<span class="comment">// 结果是：
// M24.139,24.139C35.874,35.874,52.807,52.807,66.565,66.565</span></pre>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
window.console && 
console.log(Snap.path.getSubpath("M10 10L90 90", 20, 80));
</script>
</body>
</html>