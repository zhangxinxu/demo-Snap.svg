<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.plugin()';
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
        	<h2>Snap.plugin(f)</h2>
        	<p>插件方法。其函数参数可以使用下面4个参数。</p>
            <pre>Snap.<mark>plugin</mark>(function (Snap, Element, Paper, global) {
    Snap.newmethod = function () {};
    Element.prototype.newmethod = function () {};
    Paper.prototype.newmethod = function () {};
});</pre>
            <h3>参数</h3>
            <ul>
            	<li><code>f</code> 函数。插件的主体。</li>
            </ul>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
</body>
</html>