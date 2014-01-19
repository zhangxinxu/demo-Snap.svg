<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.path.isPointInside()';
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
        	<h2>Snap.path.isPointInside(path, x, y)</h2>
        	<p>实用方法。给定的点是否在闭合路径的内部。</p>
            <p>注意：<code>fill</code>模式不影响这个方法的结果。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>path</code> 字符串。路径字符串。</li>
                <li><code>x</code> 数值。点的<code>x</code>.</li>
                <li><code>y</code> 数值。点的<code>y</code>.</li>
            </ul>
            <h3>返回值</h3>
            <p>布尔值。如果点在路径中，则返回<code>true</code>.</p>
            <h3>使用</h3>
            <pre>var path = "m32,118c0,0 21,-100 78,-94c57,6 -78,94 -78,94z";
var is50x50 = Snap.<mark>path.isPointInside</mark>(path, 50, 50),
    is80x80 = Snap.<mark>path.isPointInside</mark>(path, 80, 80);

console.log([is50x50, is80x80].join());   <span class="comment">// false, true</span></pre>
            <h3>效果</h3>
            <p>
            	<svg width="150" height="150">
                	<path d="m32,118c0,0 21,-100 78,-94c57,6 -78,94 -78,94z" stroke-width="5" stroke="#000000" fill="none"/>
                </svg>                
            </p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var path = "m32,118c0,0 21,-100 78,-94c57,6 -78,94 -78,94z";
var is50x50 = Snap.path.isPointInside(path, 50, 50),
    is80x80 = Snap.path.isPointInside(path, 80, 80);
window.console && 
console.log([is50x50, is80x80].join());
</script>
</body>
</html>