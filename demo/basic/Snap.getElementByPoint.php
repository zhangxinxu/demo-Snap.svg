<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.getElementByPoint()';
	include('../_include/header.php'); 
?>
<style>
.dot { position: absolute; width: 4px; height: 4px; background-color: #000; border-radius: 4px; z-index: 10; left: -5px; top: -5px; }
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
    <div id="detail" class="zxx_api_detail">
    	<div class="zxx_api_content">
        	<h2>Snap.getElementByPoint(x, y)</h2>
        	<p>返回给定点最上面一个元素。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>x</code> 数值。点的<code>x</code>位置。</li>
                <li><code>y</code> 数值。点的<code>y</code>位置。</li>
            </ul>
            <h3>返回值</h3>
            <p>对象。Snap元素对象。</p>            
            <h3>效果</h3>
            <p>如果默认进来，页面高度不足，两个圆圈在滚动区域之外，则看不到效果。</p>
            <p>
            	<svg id="svg" width="150" height="100"></svg>                
            </p>
            <h3>相关代码</h3>
            <pre>&lt;svg id="svg" width="150" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var c1 = svg.paper.circle(50,50,40).attr({
    fill: "red"									
}), c2 = svg.paper.circle(100,50,40).attr({
    fill: "green"									
});

var rect = svg.node.getBoundingClientRect(), detail = document.getElementById("detail");
var y_svg = rect.top + detail.scrollTop + 50,
    x_svg = rect.left + detail.scrollLeft + 75;

var c_in = Snap.<mark>getElementByPoint</mark>(x_svg, y_svg);

<span class="comment">// 在相对SVG (75,50)这一点的最上面元素蓝色边框</span>
c_in.attr({
    stroke: "blue",
    strokeWidth: 5
});</pre>
        </div>
    </div>
</div>

<div id="dot" class="dot"></div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var c1 = svg.paper.circle(50,50,40).attr({
	fill: "red"									
}), c2 = svg.paper.circle(100,50,40).attr({
	fill: "green"									
});

var rect = svg.node.getBoundingClientRect(); 
var detail = document.getElementById("detail"), dot = document.getElementById("dot");
var y_svg = rect.top + detail.scrollTop + 50,
    x_svg = rect.left + detail.scrollLeft + 75;

var c_in = Snap.getElementByPoint(x_svg, y_svg);

//dot.style.left = x_svg + "px";
//dot.style.top = y_svg + "px";

// 在相对SVG (75,50)这一点的最上面元素蓝色边框
c_in.attr({
	stroke: "blue",
	strokeWidth: 5
});
</script>
</body>
</html>