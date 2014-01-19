<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.path.toAbsolute()';
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
        	<h2>Snap.path.toAbsolute(path)</h2>
        	<p>转换路径坐标为绝对值。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>path</code> 字符串。路径字符串。</li>
            </ul>
            <h3>返回值</h3>
            <p><del>字符串。路径字符串。</del></p>
            <p>以上为官方说明。可能是更新缓慢原因。实际自己测试，返回值是路径数组。</p>
            <h3>使用</h3>
            <pre>var path = "M10,10L90,90";
var absolute = Snap.<mark>path.toAbsolute</mark>(path);
console.log(absolute);    <span class="comment">// [Array[3], Array[3], toString: function]</span>
console.log(absolute.toString());    <span class="comment">// "M10,10L90,90"</span></pre>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var path = "M10,10L90,90";
var absolute = Snap.path.toAbsolute(path);
window.console && 
console.log(absolute);
</script>
</body>
</html>