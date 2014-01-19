<!doctype html>
<html>
<head>
<?php 
	$key = 'Matrix.add()';
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
        	<h2>Matrix.add(…)</h2>
        	<p>给现有矩阵再添加一个矩阵。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>a</code> 数值。</li>
                <li><code>b</code> 数值。</li>
                <li><code>c</code> 数值。</li>
                <li><code>d</code> 数值。</li>
                <li><code>e</code> 数值。</li>
                <li><code>f</code> 数值。</li>
            </ul>
            <p>以上<code>a~f</code>的矩阵参数含义可参见<a href="http://www.zhangxinxu.com/wordpress/?p=2427">理解CSS3 transform中的Matrix(矩阵)</a>一文中的说明。</p>
            <p>或者</p>
            <ul>
            	<li><code>matrix</code> 对象。矩阵对象。</li>
            </ul>
            <h3>返回值</h3>
            <p>对象。元素。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="120" height="120">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
<span class="comment">// 画个圈圈</span>
var c = svg.paper.circle(50, 50, 40);
<span class="comment">// 当前矩阵</span>
var m1 = new Snap.Matrix(1,0,0,1,20,20);
<span class="comment">// 圈圈应用矩阵变换 - 位移(20, 20)</span>
c.transform(m1.toTransformString());

<span class="comment">// 事件</span>
if (document.addEventListener) {
    document.querySelector("#button").addEventListener("click", function() {
        <span class="comment">// 矩阵组合</span>
        m1.<mark>add</mark>(1,0,0,1,-20,-20);
        <span class="comment">// 圈圈再次应用矩阵变换 - 位移(-20, -20)</span>
        c.transform(m1.toTransformString());
    });
}</pre>
            <h3>效果</h3>
            <p>
            	<svg id="svg" width="120" height="120"></svg>                
            </p>
            <p><input type="button" id="button" class="zxx_api_button" value="点击执行add()"></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var c = svg.paper.circle(50, 50, 40);
var m1 = new Snap.Matrix(1,0,0,1,20,20);
c.transform(m1.toTransformString());

// 事件
if (document.addEventListener) {
	document.querySelector("#button").addEventListener("click", function() {
	    m1.add(1,0,0,1,-20,-20);
		c.transform(m1.toTransformString());
	});
}
</script>
</body>
</html>