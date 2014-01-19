<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.snapTo()';
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
        	<h2>Snap.snapTo(values, value, [tolerance])</h2>
        	<p>给定值为给定格栅。可以理解为</p>
            <h3>参数</h3>
            <ul>
            	<li><code>values</code> 数组或数值。给定的数组值，或者每步骤变化值。</li>
                <li><code>value</code> 数值。要调整的值。</li>
                <li><code>tolerance</code> 数值。触发snap的距离目标值的最大值。。</li>
            </ul>
            <h3>返回值</h3>
            <p>数值。调整后的值。</p>
            <h3>使用</h3>
            <pre>var adjust1 = Snap.<mark>snapTo</mark>([10,20,30,40], 25);    <span class="comment">// 30</span>
var adjust2 = Snap.<mark>snapTo</mark>(12, 25);    <span class="comment">// 24</span></pre>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var adjust1 = Snap.snapTo([10,20,30,40], 25);    // 30
var adjust2 = Snap.snapTo(12, 25);    // 24
</script>
</body>
</html>