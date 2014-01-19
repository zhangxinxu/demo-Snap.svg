<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.ajax()';
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
        	<h2>Snap.ajax(…)</h2>
        	<p>简单的Ajax方法。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>url</code> 字符串。URL</li>
                <li><code>postData</code> 对象或字符串。要post的数据。</li>
                <li><code>callback</code> 函数。回调函数。</li>
                <li><code>scope</code> 对象。回调函数的作用域。</li>
            </ul>
            <p>或者</p>
            <ul>
            	<li><code>url</code> 字符串。URL</li>
                <li><code>callback</code> 函数。回调函数。</li>
                <li><code>scope</code> 对象。回调函数的作用域。</li>
            </ul>
            <h3>返回值</h3>
            <p><code>XMLHttpRequest</code>。返回XMLHttpRequest对象。</p>
            <h3>测试代码</h3>
            <pre>&lt;svg id="svg" width="100" height="100">&lt;/svg>
            
&lt;input id="button" type="button" class="zxx_api_button" value="ajax获取填充色"></pre>
			<pre>var svg = Snap("#svg");
var c = svg.paper.circle(50,50,40);

document.getElementById("button").onclick = function() {
    Snap.<mark>ajax</mark>("../_ajax/ajax.php", function(response) {
        c.attr({
            fill: response.responseText   
        });										
    });
};</pre>
            <pre>&lt;?php
    echo '#' . rand(0, 9). rand(0, 9). rand(0, 9);
?&gt;</pre>
            <h3>效果</h3>
            <p>
            	<svg id="svg" width="100" height="100"></svg>                
            </p>
            <p><input id="button" type="button" class="zxx_api_button" value="ajax获取填充色"></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var c = svg.paper.circle(50,50,40);

document.getElementById("button").onclick = function() {
	Snap.ajax("../_ajax/ajax.php", function(response) {
		c.attr({
			fill: response.responseText   
		});										
	});
};
</script>
</body>
</html>