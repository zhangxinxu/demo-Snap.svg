<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.path.intersection()';
	include('../_include/header.php'); 
?>
<style>
.dr-json { list-style-type: none; padding-left: 2em; }
.dr-json-key { display: inline-block; width: 80px; margin-right: 10px; }
.dr-json li { margin-top: 5px; }
</style>
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
        	<h2>Snap.path.intersection(path1, path2)</h2>
        	<p>实用方法。查找两条路径的相交。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>path1</code> 字符串。路径字符串。</li>
                <li><code>path2</code> 字符串。路径字符串。</li>
            </ul>
            <h3>返回值</h3>
            <p>数组。相交点。</p>
            <ol class="dr-json">
              <li>[</li>            
              <li>    {<ol class="dr-json">
              <li>
                  <span class="dr-json-key">x:</span>数值。点的<code>x</code>坐标。
              </li>
              <li>
                  <span class="dr-json-key">y:</span>数值。点的<code>y</code>坐标。
              </li>  
              <li>
                  <span class="dr-json-key">t1:</span>数值。<code>path1</code>路径的片断<code>t</code>值(也就是位置0~1)。
              </li>           
              <li>
                  <span class="dr-json-key">t2:</span>数值。<code>path2</code>路径的片断<code>t</code>值。
              </li>          
              <li>
                  <span class="dr-json-key">segment1:</span>数值。<code>path1</code>路径片断的顺序号。
              </li>       
              <li>
                  <span class="dr-json-key">segment2:</span>数值。<code>path2</code>路径片断的顺序号。
              </li>           
              <li>
                  <span class="dr-json-key">bez1:</span>数组。<code>path1</code>路径片断的贝塞尔曲线的<code>8</code>坐标表示。
              </li>
              <li>
                  <span class="dr-json-key">bez2:</span>数组。<code>path2</code>路径片断的贝塞尔曲线的<code>8</code>坐标表示。
              </li>    
              </ol></li><li>    }</li>         
              <li>]</li>          
          </ol>
            <h3>测试</h3>
            <p>两条直线相交：</p>
            <pre>var path1 = "M10,10L90,90";
var path2 = "M10,50,L90,50";
var inters = Snap.<mark>path.intersection</mark>(path1, path2);
console.log(inters[0]);</pre>
            <h3>控制台输出</h3>
            <p><img src="../../static/img/demo-snap-svg-43.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var path1 = "M10,10L90,90";
var path2 = "M10,50,L90,50";
var inters = Snap.path.intersection(path1, path2);
window.console && 
console.log(inters[0]);
</script>
</body>
</html>