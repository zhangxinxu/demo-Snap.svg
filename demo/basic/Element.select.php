<!doctype html>
<html>
<head>
<?php 
	$key = 'Element.select()';
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
        	<h2>Element.select(query)</h2>
        	<p>采集匹配CSS选择器的内嵌元素。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>query</code> 字符串。CSS选择器。</li>
            </ul>
            <h3>返回值</h3>
            <p>元素。选择的元素。</p>
            <h3>使用</h3>
            <p>选择<code>&lt;circle&gt;</code>元素（只是第1个）并让其脸红。</p>
            <pre>&lt;svg id="svg" width="200" height="100">
    &lt;circle cx="50" cy="50" r="40">&lt;/circle>
    &lt;circle cx="150" cy="50" r="40">&lt;/circle>        
&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
svg.<mark>select</mark>("circle").attr({
    fill: "#f00"					  
});</pre>
            <h3>效果</h3>
            <p>
            	<svg id="svg" width="200" height="100">
                	<circle cx="50" cy="50" r="40"></circle>
                    <circle cx="150" cy="50" r="40"></circle>
                </svg>                
            </p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
svg.select("circle").attr({
	fill: "#f00"					  
});
</script>
</body>
</html>