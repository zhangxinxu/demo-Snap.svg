<!doctype html>
<html>
<head>
<?php 
	$key = 'Paper.image()';
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
        	<h2>Paper.image(src, x, y, width, height)</h2>
        	<p>脸上贴图片。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>src</code> 图片的URI。</li>
                <li><code>x</code> <code>x</code>偏移位置。</li>
                <li><code>y</code> <code>y</code>偏移位置。</li>
                <li><code>width</code> 图片的宽度。</li>
                <li><code>height</code> 图片的高度。</li>
            </ul>
            <h3>返回值</h3>
            <p>对象。<code>image</code>元素。</p>
            <h3>使用</h3>
            <p>张含韵降临。</p>
            <pre>&lt;svg id="svg" width="300" height="210">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var c = svg.<mark>paper.image</mark>("mm.jpg", 10, 10, 256, 191);</pre>
            <h3>效果</h3>
            <p id="snapShow">
            	<svg id="svg" width="300" height="210"></svg>
            </p>
            <h3>生成HTML</h3>
            <p><img src="../../static/img/demo-snap-svg-6.png"><tip data-content="截图"></tip></p>
            <h3>注意</h3>
            <p>
                用例中的写法会缩放图片
                <br>
                使用<pre>paper.image("mm.jpg");</pre>会在原点直接画出原始大小的图片
                <br>
                使用<pre>paper.image("mm.jpg",100,200);</pre>会在指定位置画出原始大小的图片
            </p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var c = svg.paper.image("../../static/img/mm.jpg", 10, 10, 256, 191);
</script>
</body>
</html>