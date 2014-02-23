<!doctype html>
<html>
<head>
<?php 
	$key = 'Element.transform()';
	include('../_include/header.php'); 
?>
<style>
.dr-json { padding-top: 1em; padding-bottom: 1em; list-style: none; background-color: #fbfbfb; }
.dr-json li { margin-top: 6px; margin-bottom: 6px; }
.dr-json-key { display: inline-block; width: 100px; margin-right: 16px; }
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
        	<h2>Element.transform(tstr)</h2>
        	<p>获取或设置元素的转变。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>tstr</code> 字符串。Snap或SVG格式中的<code>transform</code>字符串。</li>
            </ul>
            <h3>返回值</h3>
            <p>元素。当前元素。</p>
            <p>或者</p>
            <p>对象。转换描述符：</p>
            <ol class="dr-json"><li>{<ol class="dr-json"><li><span class="dr-json-key"><code>string</code></span>字符串。转换字符串。
</li><li><span class="dr-json-key"><code>globalMatrix</code></span>矩阵。应用在该元素或父级元素上所有转换矩阵。
</li><li><span class="dr-json-key"><code>localMatrix</code></span>矩阵。仅用在该元素上的转换矩阵。
</li><li><span class="dr-json-key"><code>diffMatrix</code></span>矩阵。全局矩阵和本地矩阵之间的差异矩阵。</span>
</li><li><span class="dr-json-key"><code>global</code></span><span class="dr-type">字符串。全局转换字符串。</span>
</li><li><span class="dr-json-key"><code>local</code></span><span class="dr-type">字符串。当前转换字符串。</span>
</li><li><span class="dr-json-key"><code>toString</code></span><span class="dr-type">字符串。返回<code>string</code>属性。</span>
</li></ol></li><li>}</li></ol>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="100" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var c = svg.paper.circle(50, 50, 40);
console.dir(c.<mark>transform</mark>());</pre>
            <h3>效果</h3>
            <p>
            	<svg id="svg" width="100" height="100"></svg>                
            </p>
            <h3>输出内容</h3>
            <p><img src="../../static/img/demo-snap-svg-29.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var c = svg.paper.circle(50, 50, 40);
window.console && 
console.dir(c.transform());
</script>
</body>
</html>