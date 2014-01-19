<!doctype html>
<html>
<head>
<?php 
	$key = ''; // Element.add()
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
        	<h2>Snap</h2>
        	<p>画个SVG.</p>
            <h3>参数</h3>
            <ul>
            	<li><code>x</code> 表示</li>
            </ul>
            <h3>返回值</h3>
            <p>元素。返回父元素。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="100" height="100">&lt;/svg>
            
&lt;input id="button" type="button" class="zxx_api_button" value="按钮"></pre>
            <pre><span class="comment">// some js</span></pre>
            <h3>效果</h3>
            <p>
            	<svg id="svg" width="100" height="100"></svg>                
            </p>
            <p><input id="button" type="button" class="zxx_api_button" value="按钮"></p>
            <h3>生成HTML</h3>
            <p><img src="../../static/img/demo-snap-svg-0.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var c = svg.paper.circle(50,50,40);
</script>
</body>
</html>