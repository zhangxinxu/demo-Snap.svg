<!doctype html>
<html>
<head>
<?php 
	$key = 'Element.getBBox()';
	include('../_include/header.php'); 
?>
<style>
.dr-json { padding-top: 1em; padding-bottom: 1em; list-style: none; background-color: #fbfbfb; }
.dr-json li { margin-top: 6px; margin-bottom: 6px; }
.dr-json-key { display: inline-block; width: 70px; margin-right: 16px; }
</style>
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
        	<h2>Element.getBBox()</h2>
        	<p>返回给定元素的边界框描述。</p>
            <h3>返回值</h3>
            <p>对象。返回元素的边界框描述：</p>
            <ol class="dr-json"><li>{<ol class="dr-json"><li><span class="dr-json-key"><code>cx:</code></span>数值。中心点<code>x</code>位置。
</li><li><span class="dr-json-key"><code>cy:</code></span>数值。中心点<code>y</code>位置。
</li><li><span class="dr-json-key"><code>h:</code></span>数值。高度。
</li><li><span class="dr-json-key"><code>height:</code></span>数值。高度。
</li><li><span class="dr-json-key"><code>path:</code></span>字符串。盒子的路径命令。
</li><li><span class="dr-json-key"><code>r0:</code></span>数值。完全封闭盒子圆半径。
</li><li><span class="dr-json-key"><code>r1:</code></span>数值。能闭合的最小圆半径。
</li><li><span class="dr-json-key"><code>r2:</code></span>数值。能闭合的最大圆半径。
</li><li><span class="dr-json-key"><code>vb:</code></span>字符串。<span>作为视窗盒子的命令。</span>
</li><li><span class="dr-json-key"><code>w:</code></span>数值。宽度。
</li><li><span class="dr-json-key"><code>width:</code></span>数值。宽度。
</li><li><span class="dr-json-key"><code>x2:</code></span>数值。右侧的<code>x</code>位置值。
</li><li><span class="dr-json-key"><code>x:</code></span>数值。左侧的<code>x</code>位置值。
</li><li><span class="dr-json-key"><code>y2:</code></span>数值。底边缘的<code>y</code>位置值。
</li><li><span class="dr-json-key"><code>y:</code></span>数值。上边缘的<code>y</code>位置值。
</li></ol></li><li>}</li></ol>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="100" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var c = svg.paper.rect(50, 30, 120, 80, 15);
console.dir(c.<mark>getBBox</mark>());    <span class="comment">// 结果见后面的截图</span></pre>
            <h3>效果</h3>
            <p>下面这个圆角矩形的边界框描述是？</p>
            <p>
            	<svg id="svg" width="200" height="120"></svg>                
            </p>
            <h3>输出的值</h3>
            <p><img src="../../static/img/demo-snap-svg-20.png"><tip data-content="截图"></tip></p>
            <p>数值大的惊人，我表示看不懂，这个回头弄明白了再过来补充说明下。</p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var c = svg.paper.rect(50, 20, 120, 80, 15);
window.console && console.dir(c.getBBox());
</script>
</body>
</html>