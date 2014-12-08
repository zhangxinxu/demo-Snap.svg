<!doctype html>
<html>
<head>
<?php 
	$key = 'Paper.path()';
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
        	<h2>Paper.path([pathString])</h2>
        	<p>画路径</p>
            <h3>参数</h3>
            <ul>
            	<li><code>pathString</code> SVG格式路径字符串。</li>
            </ul>
            <p>路径字符串是包含一个字母的命令，以逗号分隔，参数为数值形式。例如：</p>
            <pre>"M10,20L30,40"</pre>
            <p>上面这个例子包含两个命令：</p>
            <ol>
            	<li><code>M</code>及其参数<code>(10, 20)</code>;</li>
                <li><code>L</code>及其参数<code>(30, 40)</code></li>
            </ol>
            <p>大写的命令字母的坐标是绝对形式；而小写的命名是相对形式，相对于最近一次声明的坐标。</p>
            <p>下面这个简短的列表为可用命令，具体内容可以参见<a href="http://www.w3.org/TR/SVG/paths.html#PathData">W3 SVG路径字符串格式</a>或<a href="https://developer.mozilla.org/en/SVG/Tutorial/Paths">MDN上关于路径字符串的文章</a>。</p>
            <p>
            	<table>
                	<thead><tr><th>命令</th><th>名称</th><th>参数</th></tr></thead>
                	<tbody>
                        <tr><td>M</td><td>moveto &emsp;移动到</td><td>(x y)+</td></tr>
                        <tr><td>Z</td><td>closepath &emsp;关闭路径</td><td>(none)</td></tr>
                        <tr><td>L</td><td>lineto &emsp;画线到</td><td>(x y)+</td></tr>
                        <tr><td>H</td><td>horizontal lineto &emsp;水平线到</td><td>x+</td></tr>
                        <tr><td>V</td><td>vertical lineto &emsp;垂直线到</td><td>y+</td></tr>
                        <tr><td>C</td><td>curveto &emsp;三次贝塞尔曲线到</td><td>(x1 y1 x2 y2 x y)+</td></tr>
                        <tr><td>S</td><td>smooth curveto &emsp;光滑三次贝塞尔曲线到</td><td>(x2 y2 x y)+</td></tr>
                        <tr><td>Q</td><td>quadratic Bézier curveto &emsp;二次贝塞尔曲线到</td><td>(x1 y1 x y)+</td></tr>
                        <tr><td>T</td><td>smooth quadratic Bézier curveto &emsp;光滑二次贝塞尔曲线到</td><td>(x y)+</td></tr>
                        <tr><td>A</td><td>elliptical arc &emsp;椭圆弧</td><td>(rx ry x-axis-rotation large-arc-flag sweep-flag x y)+</td></tr>
                        <tr><td>R</td><td><a href="http://en.wikipedia.org/wiki/Catmull–Rom_spline#Catmull.E2.80.93Rom_spline">Catmull-Rom curveto</a>* &emsp;Catmull-Rom曲线</td><td>x1 y1 (x y)+</td></tr>
                    </tbody>
                </table>
            </p>
            <p>Catmull-Rom曲线不是标准的SVG命令，这里添加是为了让生活更美好。</p>
            <p>注意：这里有个特别的案例。当一个路径仅包含3个命令：<code>M10, 10R...z</code>. 这种情况下，路径的连接会回到起始点。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="100" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var c = svg.<mark>paper.path</mark>("M10 10L90 90").attr({
    stroke: "#000",
    strokeWidth: 5	
});
<span class="comment">// 画一条对角线:
// 移动到 10,10, 画线至 90,90</span></pre>
            <h3>效果</h3>
            <p id="snapShow">
            	<svg id="svg" width="100" height="100"></svg>
            </p>
            <h3>生成HTML</h3>
            <p><img src="../../static/img/demo-snap-svg-8.png"><tip data-content="截图"></tip></p>

            <h3>使用2</h3>
            <pre>&lt;svg id="svg" width="800" height="600">&lt;/svg></pre>
            <pre>var svg2 = Snap("#svg2");
var c = svg.<mark>paper.path</mark>("M0,300 Q200,50 400,300 T800,300").attr({
    stroke: "#000",
    strokeWidth: 5,
    fill: "#fff"
});
<span class="comment">// 画一条比较复杂的曲线</span></pre>
            <h3>效果</h3>
            <p id="snapShow">
                <svg id="svg2" width="800" height="600"></svg>
            </p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var c = svg.paper.path("M10 10L90 90").attr({
    stroke: "#000",
    strokeWidth: 5	
});
// 画一条对角线:
// 移动到 10,10, 画线至 90,90

var svg = Snap("#svg2")
svg.paper.path("M0,300 Q200,50 400,300 T800,300").attr({
    stroke: "#000",
    strokeWidth: 5,
    fill: "#fff"
});
</script>
</body>
</html>