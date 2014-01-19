<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.animate()';
	include('../_include/header.php'); 
?>
<style>
.dr-json { padding: 0 0 0 10px; list-style: none; background-color: #fbfbfb; }
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
        	<h2>Snap.animate(from, to, setter, duration, [easing], [callback])</h2>
        	<p>通过一个很有爱的函数把动画从一个数字运行到另外一个。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>from</code> 数值或数组。动画起始数值或数值数组。</li>
                <li><code>to</code> 数值或数组。动画结束数值或数值数组。</li>
                <li><code>setter</code> 函数。接受一个数值参数的贴心函数。</li>
                <li><code>duration</code> 数值。动画持续时间，单位是毫秒。</li>
                <li><code>easing</code> 函数。来自<code>mina</code>或自定义的缓动函数。</li>
                <li><code>callback</code> 函数。动画结束时候执行的回调函数。</li>
            </ul>
            <h3>返回值</h3>
            <p>对象。<code>mina</code>格式的动画对象。</p>
            <ol class="dr-json"><li>{<ol class="dr-json"><li><span class="dr-json-key"><code>id</code></span>字符串。动画的<code>id</code>, 你可以认为其只读。
</li><li><span class="dr-json-key"><code>duration</code></span>函数。获得或设置动画的持续时间。
</li><li><span class="dr-json-key"><code>easing</code></span>函数。缓动函数。
</li><li><span class="dr-json-key"><code>speed</code></span>函数。获得或设置动画的速度。
</li><li><span class="dr-json-key"><code>status</code></span>函数。获得或设置动画的状态。
</li><li><span class="dr-json-key"><code>stop</code></span>函数。停止动画。
</li></ol></li><li>}</li></ol>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="100" height="100">&lt;/svg>
            
&lt;input id="button" type="button" class="zxx_api_button" value="点击水平位移"></pre>
            <pre>var rect = Snap("#svg").paper.rect(0, 20, 60, 40);

document.getElementById("button").onclick = function() {        
    Snap.<mark>animate</mark>(0, 20, function (val) {
        rect.attr({
            x: val
        });
    }, 1000);
    <span class="comment">// 以上代码，类似于下面的效果
    // rect.animate({x: 20}, 1000);
    // 显然，上面的更强大，更灵活；下面的则是简单易懂</span>
};</pre>
            <h3>效果</h3>
            <p>
            	<svg id="svg" width="100" height="100"></svg>                
            </p>
            <p><input id="button" type="button" class="zxx_api_button" value="点击水平位移"></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var rect = Snap("#svg").paper.rect(0, 20, 60, 40);

document.getElementById("button").onclick = function() {
	
Snap.animate(0, 20, function (val) {
    rect.attr({
        x: val
    });
}, 1000);
// 以上代码，类似于下面的效果
// rect.animate({x: 20}, 1000);
// 显然，上面的更强大，更灵活；下面的则是简单易懂
};
</script>
</body>
</html>