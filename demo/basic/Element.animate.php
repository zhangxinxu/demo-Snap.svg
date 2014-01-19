<!doctype html>
<html>
<head>
<?php 
	$key = 'Element.animate()';
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
        	<h2>Element.animate(attrs, duration, [easing], [callback])</h2>
        	<p>让给定的元素属性动画执行。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>attrs</code> 对象。描述属性的键值对。</li>
                <li><code>duration</code> 数值。动画持续的时间，单位是毫秒。</li>
                <li><code>easing</code> 函数。自定义的或者<code>mina</code>提供的缓动函数。</li>
                <li><code>callback</code> 函数。动画结束时候的回调。</li>
            </ul>
            <h3>返回值</h3>
            <p>元素。返回当前元素。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="100" height="100">&lt;/svg>
            
&lt;input id="button" type="button" value="点击颜色变变变"></pre>
            <pre>var svg = Snap("#svg");
var c = svg.paper.circle(50, 50, 40).attr({
    fill: "#f00"	<span class="comment">// 红色</span>
});

<span class="comment">// 事件</span>
document.querySelector("#button").addEventListener("click", function() {
    var button = this;
    c.<mark>animate</mark>({
        fill: "#00f"	<span class="comment">// 蓝色</span>
    }, 1500, mina.bounce, function() {
        button.value = "变成蓝色妖姬了~";
    });	
});</pre>
            <h3>效果</h3>
            <p>
            	<svg id="svg" width="100" height="100"></svg>                
            </p>
            <p><input id="button" type="button" class="zxx_api_button" value="点击颜色变变变"></p>
            <h3>HTML变化</h3>
            <p>颜色变化过程中的某个时刻的截图：</p>
            <p><img src="../../static/img/demo-snap-svg-14.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var c = svg.paper.circle(50, 50, 40).attr({
    fill: "#f00"	// 红色
});

// 事件
if (document.addEventListener) {
	document.querySelector("#button").addEventListener("click", function() {
		var button = this;
		c.animate({
			fill: "#00f"	// 蓝色
		}, 1500, mina.bounce, function() {
			button.value = "变成蓝色妖姬了~";
		});	
	});
}
</script>
</body>
</html>