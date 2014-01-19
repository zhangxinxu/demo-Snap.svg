<!doctype html>
<html>
<head>
<?php 
	$key = 'mina.backout()';
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
        	<h2>mina.backout(n)</h2>
        	<p>Backout缓动。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>n</code> 数值。输入<code>0~1</code>.</li>
            </ul>
            <h3>返回值</h3>
            <p>输出。输出<code>0~1</code>.</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="200" height="100">&lt;/svg>
            
&lt;input id="button" type="button" class="zxx_api_button" value="点击运动"></pre>
            <pre>var c = Snap("#svg").paper.circle(50,50,40).attr({ fill: "red" });

document.getElementById("button").onclick = function() {
    c.animate({
        cx: c.attr("cx") == 50? 150 : 50
    }, 1000, <mark>mina.backout</mark>);
};</pre>
            <h3>效果</h3>
            <p>
            	<svg id="svg" width="200" height="100"></svg>                
            </p>
            <p><input id="button" type="button" class="zxx_api_button" value="点击运动"></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var c = Snap("#svg").paper.circle(50,50,40).attr({ fill: "red" });

document.getElementById("button").onclick = function() {
	c.animate({
		cx: c.attr("cx") == 50? 150 : 50
	}, 1000, mina.backout);
};
</script>
</body>
</html>