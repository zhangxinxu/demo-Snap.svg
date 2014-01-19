<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.parse()';
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
        	<h2>Snap.parse(svg)</h2>
        	<p>解析SVG片段字符串为SVG片段。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>svg</code> 字符串。SVG字符串。</li>
            </ul>
            <h3>返回值</h3>
            <p>片段。元素片段。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="100" height="100">&lt;/svg></pre>
            <pre>var fragment = Snap.<mark>parse</mark>('&lt;circle cx="50" cy="50" r="40">&lt;/circle>');
Snap("#svg").add(fragment);</pre>
            <h3>效果</h3>
            <p>
            	<svg id="svg" width="100" height="100"></svg>                
            </p>
            <h3>生成HTML</h3>
            <p><img src="../../static/img/demo-snap-svg-1.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var fragment = Snap.parse('<circle cx="50" cy="50" r="40"></circle>');
Snap("#svg").add(fragment);
</script>
</body>
</html>