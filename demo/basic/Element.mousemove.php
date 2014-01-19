<!doctype html>
<html>
<head>
<?php 
	$key = 'Element.mousemove()';
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
        	<h2>Element.mousedown(handler)</h2>
        	<p>给元素添加鼠标按下事件。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>handler</code> 函数。事件句柄。</li>
            </ul>
            <h3>返回值</h3>
            <p>对象。元素。</p>
            <h3>使用</h3>
            <p>鼠标按下面的红色圈圈，1秒动画至蓝色</p>
            <pre>&lt;svg id="svg" width="100" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg"), index = 100;
var c = svg.paper.circle(50, 50, 40).<mark>mousemove</mark>(function() {
    index++;
    if (index > 999) index = 100;
    this.attr({
        fill: "#" + index    // 变色
    });    
});</pre>
            <h3>效果</h3>
            <p>鼠标在下面的圈圈上移动，颜色不停变化</p>
            <p>
            	<svg id="svg" width="100" height="100"></svg>                
            </p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg"), index = 100;
var c = svg.paper.circle(50, 50, 40).mousemove(function() {
	index++;
	if (index > 999) index = 100;
    this.attr({
        fill: "#" + index    // 变色
    });	
});
</script>
</body>
</html>