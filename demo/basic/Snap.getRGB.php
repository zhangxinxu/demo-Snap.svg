<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.getRGB()';
	include('../_include/header.php'); 
?>
<style>
.dr-json { list-style-type: none; padding-left: 1em; }
.dr-json-key { display: inline-block; width: 55px; margin-right: 10px; }
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
        	<h2>Snap.getRGB(color)</h2>
        	<p>解析颜色字符串为RGB对象。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>color</code> 字符串。下面任意一种类型的字符串：</li>
                <ul>
                    <li>颜色关键字。(<code>red</code>, <code>green</code>, <code>cornflowerblue</code>, 等) 关于CSS中147个颜色关键字可以<a href="http://www.zhangxinxu.com/wordpress/?p=1064">点击这里</a>参考。</li>
                    <li>#••• — 短缩写的HTML颜色: (<code>#000</code>, <code>#fc0</code>, 等)</li>
                    <li>#•••••• — 全长度HTML颜色: (<code>#000000</code>, <code>#bd2300</code>)</li>
                    <li>rgb(•••, •••, •••) — 红绿蓝通道值: (<code>rgb(200,&nbsp;100,&nbsp;0)</code>)</li>
                    <li>rgba(•••, •••, •••, •••) — 还有透明度</li>
                    <li>rgb(•••%, •••%, •••%) — 与上面一样，不过是百分比形式: (<code>rgb(100%,&nbsp;175%,&nbsp;0%)</code>)</li>
                    <li>rgba(•••%, •••%, •••%, •••%) — 还有透明度</li>
                    <li>hsb(•••, •••, •••) — 色调，饱和度和亮度值: (<code>hsb(0.5,&nbsp;0.25,&nbsp;1)</code>)</li>
                    <li>hsba(•••, •••, •••, •••) — 还有透明度</li>
                    <li>hsb(•••%, •••%, •••%) — 与上面一样，不过是百分比形式</li>
                    <li>hsba(•••%, •••%, •••%, •••%) — 还有透明度</li>
                    <li>hsl(•••, •••, •••) — 色调，饱和度和亮度值: (<code>hsb(0.5,&nbsp;0.25,&nbsp;0.5)</code>)</li>
                    <li>hsla(•••, •••, •••, •••) — 还有透明度</li>
                    <li>hsl(•••%, •••%, •••%) — 与上面一样，不过是百分比形式</li>
                    <li>hsla(•••%, •••%, •••%, •••%) — 还有透明度</li>
                </ul>    
            </ul>                    
            <h3>返回值</h3>
            <p>对象。格式类似下面：</p>
            <ol class="dr-json"><li>{<ol class="dr-json"><li><span class="dr-json-key"><code>r</code></span>数值。红色。
</li><li><span class="dr-json-key"><code>g</code></span>数值。绿色。
</li><li><span class="dr-json-key"><code>b</code></span>数值。蓝色。
</li><li><span class="dr-json-key"><code>hex</code></span>字符串。十六进制格式颜色值，HTML/CSS使用的格式: <code>#••••••</code>.
</li><li><span class="dr-json-key"><code>error</code></span>布尔值。字符串是否可以解析。
</li></ol></li><li>}</li></ol>
            <h3>使用</h3>
            <pre>console.dir(Snap.getRGB("indianred"));</pre>
            <h3>控制台输出</h3>
            <p><img src="../../static/img/demo-snap-svg-36.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
if (window.console) {
	console.dir(Snap.getRGB("indianred"));
}
</script>
</body>
</html>