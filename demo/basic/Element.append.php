<!doctype html>
<html>
<head>
<?php 
	$key = 'Element.append()';
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
        	<h2>Element.append(el)</h2>
        	<p>当前元素内部后置给定元素。也就是<code>el</code>要塞到<code>Element</code>的里面，同时是最后面。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>el</code> 类型可以是<code>Element</code>或者<code>Set</code>. 表示要附加的元素。</li>
            </ul>
            <h3>返回值</h3>
            <p>元素。返回父元素。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg1" width="100" height="100">&lt;/svg>
&lt;svg id="svg2" width="100" height="100">&lt;/svg>
            
&lt;input id="button" type="button" value="蓝圈圈跑到红圈圈家里蹭饭"></pre>
            <pre>var svg1 = Snap("#svg1"), svg2 = Snap("#svg2");
var c1 = svg1.paper.circle(50, 50, 40).attr({
    fill: "#f00"	<span class="comment">// 红色</span>
});
var c2 = svg2.paper.circle(50, 50, 30).attr({
    fill: "#00f"	<span class="comment">// 蓝色</span>
});

<span class="comment">// 事件</span>
document.querySelector("#button").addEventListener("click", function() {
    svg1.<mark>append</mark>(c2);
    this.value = "蹭饭成功";
});</pre>
            <h3>效果</h3>
            <p>
            	<svg id="svg1" width="100" height="100"></svg>   
                <svg id="svg2" width="100" height="100"></svg>              
            </p>
            <p><input id="button" type="button" class="zxx_api_button" value="蓝圈圈跑到红圈圈家里蹭饭"></p>
            <h3>HTML变化</h3>
            <p><strong>蹭饭前：</strong></p>
            <p><img src="../../static/img/demo-snap-svg-15.png"><tip data-content="截图"></tip></p>
            <p><strong>蹭饭后：</strong></p>
            <p><img src="../../static/img/demo-snap-svg-16.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg1 = Snap("#svg1"), svg2 = Snap("#svg2");
var c1 = svg1.paper.circle(50, 50, 40).attr({
    fill: "#f00"	// 红色
});
var c2 = svg2.paper.circle(50, 50, 30).attr({
    fill: "#00f"	// 蓝色
});

// 事件
if (document.addEventListener) {
	document.querySelector("#button").addEventListener("click", function() {
		svg1.append(c2);
		this.value = "蹭饭成功";
	});
}
</script>
</body>
</html>