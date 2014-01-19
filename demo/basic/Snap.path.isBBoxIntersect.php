<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.path.isBBoxIntersect()';
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
        	<h2>Snap.path.isBBoxIntersect(bbox1, bbox2)</h2>
        	<p>两个盒子是否相交。如果相交则返回<code>true</code>.</p>
            <h3>参数</h3>
            <ul>
            	<li><code>bbox1</code> 字符串。第<code>1</code>个盒子。</li>
                <li><code>bbox2</code> 字符串。第<code>2</code>个盒子。</li>
            </ul>
            <h3>返回值</h3>
            <p>布尔值。相交则返回<code>true</code>.</p>
            <h3>使用</h3>
            <pre>var svg = Snap("#svg");
var c1 = svg.paper.circle(50,50,40).attr({
    fill: "red"									
}), c2 = svg.paper.circle(100,50,40).attr({
    fill: "green"								
});
var b1 = c1.getBBox(), b2 = c2.getBBox();
var isInter = Snap.path.<mark>isBBoxIntersect</mark>(b1, b2);

console.log(isInter);    <span class="comment">// true</span></pre>
            <h3>效果</h3>
            <p>
            	<svg id="svg" width="150" height="100"></svg>                
            </p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var c1 = svg.paper.circle(50,50,40).attr({
	fill: "red"									
}), c2 = svg.paper.circle(100,50,40).attr({
	fill: "green"								
});
var b1 = c1.getBBox(), b2 = c2.getBBox();
var isInter = Snap.path.isBBoxIntersect(b1, b2);

window.console && 
console.log(isInter);
</script>
</body>
</html>