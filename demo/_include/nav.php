<?php
	$arrClass = array('', '');
	$url = $_SERVER['PHP_SELF'];
	if (preg_match('/basic/', $url)) {
		$arrClass[0] = ' zxx_nav_on';
	} else if (preg_match('/complex/', $url)) {
		$arrClass[1] = ' zxx_nav_on';
	}
	
?>
<script>
window.localStorage = window.localStorage || {};
document.body.className = localStorage.bodyClassName || "";
</script>
<div class="zxx_header">
    <div class="zxx_constr">
        <a href="http://www.zhangxinxu.com/" class="zxx_logo">
            <img class="l" src="../../static/index_logo.gif" alt="张鑫旭-鑫空间-鑫生活" />
        </a>
        <span class="zxx_author_time">特别感谢媳妇对我工作的大力支持！<br>——by <span role="author">zhangxinxu</span> <span role="timer">2014-01-07 17:52</span></span>
    </div>
</div>

<div class="zxx_nav">
	<div class="zxx_constr">
    	<ul class="zxx_nav_ul">
        	<li class="zxx_nav_li"><a href="../basic/Element.add.php" class="zxx_nav_a<?php echo $arrClass[0]; ?>">基本使用</a></li>
            <li class="zxx_nav_li"><a href="../complex/" class="zxx_nav_a<?php echo $arrClass[1]; ?>">综合示例</a></li>
            <li class="zxx_nav_sp">
            	<a href="javascript:" id="hideHeadFoot" class="zxx_gbtn" title="如果您的浏览器高度不够，可以点击这个按钮增强体验">隐藏头部和尾部</a>&nbsp;
        		<a href="https://github.com/zhangxinxu/demo-Snap.svg" class="zxx_rbtn" title="visit GitHub">Fork Me</a>
           	</li>
        </ul>
    </div>
</div>