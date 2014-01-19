<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.path.findDotsAtSegment()';
	include('../_include/header.php'); 
?>
<style>
.dr-json { list-style-type: none; padding-left: 2em; }
.dr-json-key { display: inline-block; width: 55px; margin-right: 10px; }
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
        	<h2>Snap.path.findDotsAtSegment(p1x, p1y, c1x, c1y, c2x, c2y, p2x, p2y, t)</h2>
        	<p>实用方法返回给定曲线上特定位置的点坐标。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>p1x</code> 数值。曲线第<code>1</code>个点的<code>x</code>位置。</li>
                <li><code>p1y</code> 数值。曲线第<code>1</code>个点的<code>y</code>位置。</li>
                <li><code>c1x</code> 数值。曲线第<code>1</code>个锚的<code>x</code>位置。</li>
                <li><code>c1y</code> 数值。曲线第<code>1</code>个锚的<code>y</code>位置。</li>
                <li><code>c2x</code> 数值。曲线第<code>2</code>个锚的<code>x</code>位置。</li>
                <li><code>c2y</code> 数值。曲线第<code>2</code>个锚的<code>y</code>位置。</li>
                <li><code>p2x</code> 数值。曲线第<code>2</code>个点的<code>x</code>位置。</li>
                <li><code>p2y</code> 数值。曲线第<code>2</code>个点的<code>y</code>位置。</li>
                <li><code>pt2y</code> 数值。曲线上的位置(0~1)。</li>
            </ul>
            <h3>返回值</h3>
            <p>对象。如下格式的点信息：</p>
            <ol class="dr-json">
              <li>{<ol class="dr-json">
              <li>
                  <span class="dr-json-key"><code>x</code>:</span>数值。点的<code>x</code>坐标。
              </li>
              <li>
                  <span class="dr-json-key"><code>y</code>:</span>数值。点的<code>y</code>坐标。
              </li>
              <li>   <code>m</code>: {<ol class="dr-json">
              <li>
                  <span class="dr-json-key"><code>x</code>:</span>数值。左侧锚点的<code>x</code>坐标。
              </li>
              <li>
                  <span class="dr-json-key"><code>y</code>:</span>数值。左侧锚点的<code>y</code>坐标。
              </li>
              </ol></li><li>    },</li>
              <li>    <code>n</code>: {<ol class="dr-json">
              <li>
                  <span class="dr-json-key"><code>x</code>:</span>数值。右侧锚点的<code>x</code>坐标。
              </li>
              <li>
                  <span class="dr-json-key"><code>y</code>:</span>数值。右侧锚点的<code>y</code>坐标。
              </li>
              </ol></li><li>    },</li>
              <li>    <code>start</code>: {<ol class="dr-json">
              <li>
                  <span class="dr-json-key"><code>x</code>:</span>数值。曲线开始的<code>x</code>坐标。
              </li>
              <li>
                  <span class="dr-json-key"><code>y</code>:</span>数值。曲线开始的<code>y</code>坐标。
              </li>
              </ol></li><li>    },</li>
              <li>    <code>end</code>: {<ol class="dr-json">
              <li>
                  <span class="dr-json-key"><code>x</code>:</span>数值。曲线结束的<code>x</code>坐标。
              </li>
              <li>
                  <span class="dr-json-key"><code>y</code>:</span>数值。曲线结束的<code>y</code>坐标。
              </li>
              </ol></li><li>    },</li>
              <li>
                  <span class="dr-json-key"><code>alpha</code>:</span>数值。
                  <span class="dr-json-description">改点在曲线上的切线角度。</span>
              </li>
              </ol></li><li>}</li>
          	</ol>
            <h3>测试代码</h3>
            <pre>var dot = Snap.path.<mark>findDotsAtSegment</mark>(20,80, 40,40, 60,40, 80,80, 0.5);
console.dir(dot);</pre>
            <h3>控制台输出</h3>
            <p><img src="../../static/img/demo-snap-svg-41.png"><tip data-content="截图"></tip></p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var dot = Snap.path.findDotsAtSegment(20,80, 40,40, 60,40, 80,80, 0.5);
window.console && 
console.dir(dot);
</script>
</body>
</html>