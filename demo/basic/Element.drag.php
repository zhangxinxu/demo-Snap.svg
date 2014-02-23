<!doctype html>
<html>
<head>
<?php 
	$key = 'Element.drag()';
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
        	<h2>Element.drag(onmove, onstart, onend, [mcontext], [scontext], [econtext])</h2>
        	<p>元素拖拽事件。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>onmove</code> 函数。移动中的事件句柄。</li>
                <li><code>onstart</code> 函数。拖拽开始时的事件句柄。</li>
                <li><code>onend</code> 函数。拖拽结束时的事件句柄。</li>
                <li><code>mcontext</code> 对象。移动事件上下文。</li>
                <li><code>scontext</code> 对象。拖拽开始事件的上下文。</li>
                <li><code>econtext</code> 对象。拖拽结束事件的上下文。</li>
            </ul>
            <p>另外，以下<code>drag</code>事件被触发：开始时的<code>drag.start.&lt;id&gt;</code>, 结束时的<code>drag.end.&lt;id&gt;</code>以及每次移动的<code>drag.move.&lt;id&gt;</code>. 当元素拖动经过另外一个元素的时候，<code>drag.over.&lt;id&gt;</code>也会触发。<span class="supplement">//zxx: 这个大家其实可以不要关心，此段直接取自代码注释。我发现这玩意没法使用。</span></p>
            <p>开始事件和句柄调用特定的上下文，或者元素自身带有如下参数的上下文：</p>
            <ul>
            	<li><code>x</code> 数值。鼠标<code>x</code>位置。</li>
                <li><code>y</code> 数值。鼠标<code>y</code>位置。</li>
                <li><code>event</code> 对象。DOM事件对象。</li>
            </ul>
            <p>移动事件和句柄调用特定的上下文，或者元素自身带有如下参数的上下文：</p>
            <ul>
            	<li><code>dx</code> 数值。距离鼠标开始点的<code>x</code>偏移。</li>
                <li><code>dx</code> 数值。距离鼠标开始点的<code>y</code>偏移。</li>
            	<li><code>x</code> 数值。鼠标<code>x</code>位置。</li>
                <li><code>y</code> 数值。鼠标<code>y</code>位置。</li>
                <li><code>event</code> 对象。DOM事件对象。</li>
            </ul>
            <p>结束事件和句柄调用特定的上下文，或者元素自身带有如下参数的上下文：</p>
            <ul>
                <li><code>event</code> 对象。DOM事件对象。</li>
            </ul>
            <p>一般而言，<code>onmove</code>等方法不需要设置。也就是直接<code>drag()</code>实现拖拽效果。因为<code>onmove</code>等方法表示自定义而不是回调。</p>
            <h3>返回值</h3>
            <p>元素。元素自身。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="100" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var c1 = svg.paper.circle(50, 50, 40).<mark>drag()</mark>;</pre>
            <h3>效果</h3>
            <p>点击下面的圈圈显示存储的内容：</p>
            <p>
            	<svg id="svg" width="100%" height="100"></svg>                
            </p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var c1 = svg.paper.circle(50, 50, 40).drag();
</script>
</body>
</html>