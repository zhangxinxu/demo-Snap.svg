<div class="zxx_footer">
	<div class="zxx_constr">
    	<p class="zxx_copyright">
            Copyright &copy; <a href="http://www.zhangxinxu.com/">张鑫旭-鑫空间-鑫生活</a>
            |
            <a href="http://www.zhangxinxu.com/wordpress/?p=3910">该篇相关文章</a>
            |
            <a href="https://github.com/zhangxinxu/demo-Snap.svg">GitHub地址</a>
        </p>
    </div>
</div>
<script>
// 侧边栏导航的选中态实现
(function() {
	// 元素
	var eleSlide = document.getElementById("zxxSlide"), eleSlideA = eleSlide && eleSlide.getElementsByTagName("a"), lenSlideA = 0;
	
	// 变量
	var key = "<?php echo $key; ?>", eleSlideOn = null;
	
	// 方法
	var funSlideScroll = function() {
		if (eleSlideOn) {
			eleSlide.scrollTop = eleSlideOn.offsetTop - eleSlide.clientHeight / 2.36;
		}
	}, funKeyEsc = function(event) {
		if (event && event.keyCode == 27) {
			document.body.className = "";
			localStorage.bodyClassName = "";
			setTimeout(funSlideScroll, 350);
		}
	};
	
	// 遍历
	if (eleSlideA && (lenSlideA = eleSlideA.length)) {
		for (var index = 0; index < lenSlideA; index++) {
			var text = eleSlideA[index].innerText || eleSlideA[index].textContent;
			if (key && text === key) {
				eleSlideA[index].className += ' zxx_slide_on';
				// 确定滚动的位置，居中偏上
				eleSlideOn = eleSlideA[index];	
				funSlideScroll();			
				break;
			}			
		}
	}
	
	// 事件
	var eleHideButton = document.getElementById("hideHeadFoot");
	
	if (eleHideButton) {
		eleHideButton.onclick = function() {
			localStorage.bodyClassName = document.body.className = "zxx_only_body";
			setTimeout(funSlideScroll, 350);
		};

		// ESC退出
		if (document.addEventListener) {
		 	document.addEventListener("keyup", funKeyEsc);
		} else {
			document.attachEvent("onkeyup", function(event) {
				event = event || window.event;
				funKeyEsc(event);
			});
		}
		window.onresize = funSlideScroll;
	}	
})();
</script>
<script src="../../static/snap.svg-min.js"></script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11205167-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
