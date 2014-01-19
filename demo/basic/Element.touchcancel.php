<!doctype html>
<html>
<head>
<?php 
	$key = 'Element.touchcancel()';
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
        	<h2>Element.touchcancel(handler)</h2>
        	<p>给元素添加<code>touchcancel</code>事件。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>handler</code> 函数。事件句柄。</li>
            </ul>
            <h3>返回值</h3>
            <p>对象。元素。</p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var c = svg.paper.circle(50, 50, 40).attr({
    fill: "#f00"        // 红色
}).touchcancel(function() {
    this.animate({
        fill: "#00f"    // 蓝色
    }, 1000);	
});
</script>
</body>
</html>