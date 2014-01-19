<!doctype html>
<html>
<head>
<?php 
	$key = 'Paper.g()';
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
        	<h2>Paper.g([varargs])</h2>
        	<p>创建元素组。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>varargs</code> 要组队的小伙伴们。</li>
            </ul>
            <h3>返回值</h3>
            <p>对象。<code>g</code>元素。</p>
            <h3>使用</h3>
            <p>圈圈和方块搞在一起。</p>
            <pre>&lt;svg id="svg" width="300" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var c1 = svg.paper.circle(50, 50, 40), c2 = svg.paper.rect(150, 10, 120, 80);
var g = svg.<mark>paper.g</mark>(c2, c1); <span class="comment">// 注意这里元素的顺序是不一样的</span></pre>
			<p>或者</p>
            <pre>var svg = Snap("#svg");
var c1 = svg.paper.circle(50, 50, 40), c2 = svg.paper.rect(150, 10, 120, 80);
var g = svg.<mark>paper.g</mark>();
g.add(c2, c1);</pre>
            <h3>效果</h3>
            <p id="snapShow">
            	<svg id="svg" width="300" height="100"></svg>
            </p>
            <h3>生成HTML</h3>
            <p><img src="../../static/img/demo-snap-svg-4.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var c1 = svg.paper.circle(50, 50, 40), c2 = svg.paper.rect(150, 10, 120, 80);
var g = svg.paper.g(c2, c1);
</script>
</body>
</html>