<!doctype html>
<html>
<head>
<?php 
	$key = 'mina()';
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
        	<h2>mina(a, A, b, B, get, set, [easing])</h2>
        	<p>动画通常用到的一些数字。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>a</code> 数值。起始<cite>奴隶</cite>值。</li>
                <li><code>A</code> 数值。结束<cite>奴隶</cite>值。</li>
                <li><code>b</code> 数值。起始<cite>主人</cite>值（通常指开始时间）。</li>
                <li><code>B</code> 数值。结束<cite>主人</cite>值（通常指结束时间）。</li>
                <li><code>get</code> 函数。<cite>主人</cite>值的<code>getter</code>(见<a href="mina.time.php">mina.time</a>).</li>
                <li><code>set</code> 函数。<cite>奴隶</cite>值的<code>setter</code>.</li>
                <li><code>easing</code> 函数。缓动函数，默认为<a href="mina.linear.php">mina.linear</a></li>
            </ul>
            <h3>返回值</h3>
            <p>对象。动画描述符。</p>
            <ol class="dr-json">                                      
              <li>{<ol class="dr-json">  
              <li>
                  <span class="dr-json-key">id</span>字符串。动画的<code>id</code>.
              </li>  
              <li>
                  <span class="dr-json-key">start</span>数值。开始的<em>slave</em>值。
              </li>  
              <li>
                  <span class="dr-json-key">end</span>数值。结束的<em>slave</em>值。
              </li>  
              <li>
                  <span class="dr-json-key">b</span>数值。开始的<em>master</em>值。
              </li>  
              <li>
                  <span class="dr-json-key">s</span>数值。动画的状态<code>(0..1)</code>.
              </li>  
              <li>
                  <span class="dr-json-key">dur</span>数值。动画持续的时间。
              </li>  
              <li>
                  <span class="dr-json-key">spd</span>数值。动画的速度。
              </li>  
              <li>
                  <span class="dr-json-key">get</span>函数。<em>master</em>值的<code>getter</code>(见<a href="mina.time.php">mina.time</a>).
              </li>  
              <li>
                  <span class="dr-json-key">set</span>函数。<em>slave</em>值的<code>setter</code>.
              </li>  
              <li>
                  <span class="dr-json-key">easing</span>函数。缓动函数，默认为<a href="mina.linear.php">mina.linear</a>
              </li>  
              <li>
                  <span class="dr-json-key">status</span>函数。<code>getter/setter</code>的状态。
              </li>  
              <li>
                  <span class="dr-json-key">speed</span>函数。<code>getter/setter</code>的速度。
              </li>  
              <li>
                  <span class="dr-json-key">duration</span>函数。<code>getter/setter</code>的持续时间。
              </li>  
              <li>
                  <span class="dr-json-key">stop</span>函数。动画的<code>stopper</code>.
              </li>  
              </ol></li><li>}</li>            
            </ol>
            <h3>实例</h3>
            <p>
            	<svg id="svg" width="200" height="100"></svg>                
            </p>
            <p><input id="button" type="button" class="zxx_api_button" value="点击运动"></p>
            <h3>相关代码</h3>
            <pre>&lt;svg id="svg" width="200" height="100">&lt;/svg>
            
&lt;input id="button" type="button" class="zxx_api_button" value="点击运行"></pre>
            <pre>var c = Snap("#svg").paper.circle(50,50,40).attr({ fill: "red" });

document.getElementById("button").onclick = function() {
    var now = mina.time();
    var ani = <mark>mina</mark>(50, 150, now, now + 1000, mina.time, function(val) {
        c.attr({
            cx: val   
        });
    }, mina.easeout);

    console.dir(ani);
};</pre>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>
var c = Snap("#svg").paper.circle(50,50,40).attr({ fill: "red" });

document.getElementById("button").onclick = function() {
	var now = mina.time();
	var ani = mina(50, 150, now, now + 1000, mina.time, function(val) {
		c.attr({
			cx: val   
		});										
	}, mina.easeout);
	
	window.console &&
	console.dir(ani);
};
</script>
</body>
</html>