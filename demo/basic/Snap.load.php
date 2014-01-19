<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.load()';
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
        	<h2>Snap.load(url, callback, [scope])</h2>
        	<p>加载外部的SVG文件作为文档片段（参见<a href="Snap.ajax.php">Snap.ajax</a>更高级的Ajax技巧）。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>url</code> 字符串。URL</li>
                <li><code>callback</code> 函数。回调</li>
                <li><code>scope</code> 对象。回调函数的作用域。</li>
            </ul>
            <h3>返回值</h3>
            <p>元素。返回父元素。</p>
            <h3>使用</h3>
            <pre>Snap.<mark>load</mark>("../_ajax/ajax.svg", function(svg) {
    this.appendChild(svg.node);
}, document.getElementById("append"));</pre>
            <h3>效果</h3>
            <p id="append"></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
Snap.load("../_ajax/ajax.svg", function(svg) {
	this.appendChild(svg.node);
}, document.getElementById("append"));
</script>
</body>
</html>