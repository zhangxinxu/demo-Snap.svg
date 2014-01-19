<!doctype html>
<html>
<head>
<?php 
	$key = 'Element.inAnim()';
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
        	<h2>Element.inAnim()</h2>
            <p>返回可能操纵当前元素的一组动画。</p>
            <h3>返回值</h3>
            <p>对象。格式为：</p>
            <ol class="dr-json"><li>{<ol class="dr-json"><li><span class="dr-json-key"><code>anim</code></span>对象。动画对象。
</li><li><span class="dr-json-key"><code>curStatus</code></span>数值。0..1 — 动画的状态: 0 — 开始，1 — 结束。
</li><li><span class="dr-json-key"><code>status</code></span>函数。获取或设置动画的状态。</span>
</li><li><span class="dr-json-key"><code>stop</code></span>函数。停止动画。
</li></ol></li><li>}</li></ol>
            <h3>测试代码</h3>            
            <pre>&lt;svg id="svg" width="200" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var c = svg.paper.circle(50, 50, 40).click(function() {
    this.animate({
        fill: "#" + (Math.random() + "").slice(-3)    <span class="comment">// 随机</span>
    }, 1000);
	
    setTimeout(function() {
        console.dir(c.<mark>inAnim()</mark>);
    }, 500);
});</pre>
            <h3>效果</h3>
            <p>点击下面的圈圈，1秒动画至随机色。500毫秒时候返回<code>inAnim()</code>值。结果见最后的截图。</p>
            <p>
            	<svg id="svg" width="200" height="100"></svg>                
            </p>
            <h3>控制台输出</h3>
            <p><img src="../../static/img/demo-snap-svg-22.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var c = svg.paper.circle(50, 50, 40).click(function() {
    this.animate({
        fill: "#" + (Math.random() + "").slice(-3)    // 随机
    }, 1000);
	
	setTimeout(function() {
		window.console &&
		console.dir(c.inAnim());
	}, 500);
});
</script>
</body>
</html>