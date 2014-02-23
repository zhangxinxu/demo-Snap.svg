<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.filter.brightness()';
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
        	<h2>Snap.filter.brightness(amount)</h2>
        	<p>返回亮度滤镜的SVG标记字符串。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>amount</code> 数值。范围<code>0~?</code>, 表示滤镜数量。这里可以理解为亮度。<code>0</code>表示全黑，<code>1</code>表示没有变化，真实亮度，数值越往上越来亮。</li>
            </ul>
            <h3>返回值</h3>
            <p>字符串。表示滤镜。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="300" height="210">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
<span class="comment">// 显示图片</span>
var image = svg.paper.image("mm.jpg", 10, 10, 256, 191);
<span class="comment">// 亮度滤镜, 50%亮度</span>
var f = svg.paper.filter(Snap.filter.<mark>brightness</mark>(0.5));
<span class="comment">// 应用在图片上</span>
image.attr({
    filter: f	
});</pre>
            <h3>效果</h3>
            <p>
            	<svg id="svg" width="300" height="210"></svg>                
            </p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
// 显示图片
var image = svg.paper.image("../../static/img/mm.jpg", 10, 10, 256, 191);
// 亮度滤镜, 50%亮度
var f = svg.paper.filter(Snap.filter.brightness(0.5));
// 应用在图片上
image.attr({
    filter: f	
});
</script>
</body>
</html>