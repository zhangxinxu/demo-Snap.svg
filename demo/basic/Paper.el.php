<!doctype html>
<html>
<head>
<?php 
	$key = 'Paper.el()';
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
        	<h2>Paper.el(name, attr)</h2>
        	<del><p>纸上谈兵。此兵有名无姓。<span class="supplement">//zxx: 不要问我，我也不知道啥意思 <img src="http://mat1.gtimg.com/www/mb/images/face/5.gif" align="absmiddle"></span></p></del>
            <p>创建图形，可以用来代替Pager.circle,Pager.rect之类的图形，属性名参考原生<span class="supplement">// fakefish: 好像就是这样的</span></p>
            <h3>参数</h3>
            <ul>
            	<li><code>name</code> 字符串。标签名。</li>
                <li><code>attr</code> 对象。表属性。</li>
            </ul>
            <h3>使用</h3>
            <pre>&lt;svg id="svg">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
svg.<mark>paper.el</mark>("circle", {
    cx: 50,
    cy: 50,
    r: 40	
}); <span class="comment">// 等同于svg.circle(50, 50, 40);</span></pre>
			<h3>返回值</h3>
            <p>对象。</p>
            <h3>效果</h3>
            <p id="snapShow">
            	<svg id="svg" width="100" height="100"></svg>
            </p>
            <h3>生成HTML</h3>
            <p><img src="../../static/img/demo-snap-svg-1.png"><tip data-content="截图"></tip></p>

            <h3>使用2</h3>
            <pre>&lt;svg id="svg">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
svg.<mark>paper.el</mark>("rect", {
    x: 10,
    y: 20,
    width: 120,
    height: 90,
    rx: 10,
    ry: 10   
}); <span class="comment">// 等同于svg.rect(10, 20, 120, 90, 10, 10);</span></pre>
            <h3>返回值</h3>
            <p>对象。</p>
            <h3>效果</h3>
            <p id="snapShow">
                <svg id="svg2" width="150" height="120"></svg>
            </p>
            <h3>生成HTML</h3>
            <p><img src="../../static/img/demo-snap-svg-10.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
svg.paper.el("circle", {
	cx: 50,
	cy: 50,
	r: 40	
});

var svg2 = Snap("#svg2");
svg2.paper.el('rect', {
    x: 10,
    y: 20,
    width: 120,
    height: 90,
    rx: 10,
    ry: 10
});
</script>
</body>
</html>