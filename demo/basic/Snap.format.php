<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.format()';
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
        	<h2>Snap.format(token, json)</h2>
        	<p>替换<code>{&lt;name&gt;}结构类型为相应参数形式。</code></p>
            <h3>参数</h3>
            <ul>
            	<li><code>token</code> 字符串。要格式化的字符串。</li>
                <li><code>json</code> 对象。该对象属性被用来替换。</li>
            </ul>
            <h3>返回值</h3>
            <p>字符串。格式化的字符串。</p>
            <h3>使用示意</h3>
            <pre>var str = '&lt;div id="{id}">{content}&lt;/div>';
var rep = Snap.<mark>format</mark>(str, {
    id: "id_" + mina.time(),
    content: '我正在床上听歌'
});
window.console && 
console.log(rep);
<span class="comment">// 结果是：
// &lt;div id="id_1389797097377"&gt;我正在床上听歌&lt;/div&gt;</span></pre>
			<p>或者下面这个官方文档的例子：</p>
            <pre><span class="comment">// 下面这个画一个矩形形状，代码等同于"M10,20h40v50h-40z"</span>
paper.path(Snap.<mark>format</mark>("M{x},{y}h{dim.width}v{dim.height}h{dim['negative width']}z", {
x: 10,
y: 20,
dim: {
    width: 40,
    height: 50,
    "negative width": -40
}
}));</pre>
        </div>        
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var str = '<div id="{id}">{content}</div>';
var rep = Snap.format(str, {
	id: "id_" + mina.time(),
	content: '我正在床上听歌'
});
window.console && 
console.log(rep);
// 结果是：
// <div id="id_1389797097377">我正在床上听歌</div> 
</script>
</body>
</html>