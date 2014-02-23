<!doctype html>
<html>
<head>
<?php 
	$key = 'Element.attr()';
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
        	<h2>Element.attr(...)</h2>
        	<p>获得或设置元素给定的属性值。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>params</code> 对象。希望设置的包含属性以及属性值的键值对。</li>
            </ul>
            <p>或者</p>
            <ul>
            	<li><code>params</code> 字符串。属性名。</li>
            </ul>
            <h3>返回值</h3>
            <p>如果<code>params</code>是键值对对象，返回的是当前元素；如果<code>params</code>是属性名，则返回对应的属性值。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="100" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var c = svg.paper.circle(50, 50, 40).attr({
    fill: "#fc0",
    stroke: "#000",
    strokeWidth: 2,     <span class="comment">// 驼峰命名...</span>
    "fill-opacity": 0.5 <span class="comment">// 或者短横符连接名称</span>
});
console.log(c.<mark>attr</mark>("fill")); <span class="comment">// #ffcc00</span></pre>
            <h3>效果</h3>
            <p>
            	<svg id="svg" width="100" height="100"></svg>                
            </p>
            <h3>生成HTML</h3>
            <p><img src="../../static/img/demo-snap-svg-17.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var c = svg.paper.circle(50, 50, 40).attr({
	fill: "#fc0",
    stroke: "#000",
    strokeWidth: 2,     // 驼峰命名...
    "fill-opacity": 0.5 // 或者短横符连接名称
});
console.log(c.attr("fill")); // #ffcc00
</script>
</body>
</html>