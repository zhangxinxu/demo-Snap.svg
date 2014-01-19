<!doctype html>
<html>
<head>
<?php 
    $key = 'Snap.fragment()';
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
            <h2>Snap.fragment(varargs)</h2>
            <p>根据给定的元素列表或字符串创建DOM片段。</p>
            <h3>参数</h3>
            <ul>
                <li><code>varargs</code> SVG字符串。</li>
            </ul>
            <h3>返回值</h3>
            <p>片段。返回片段。</p>
            <h3>使用</h3>
            <pre>&lt;svg id="svg" width="200" height="100">&lt;/svg></pre>
            <pre>var svg = Snap("#svg");
var c = Snap.<mark>fragment</mark>('&lt;circle cx="50" cy="50" r="40">&lt;/circle>&lt;circle cx="150" cy="50" r="40">&lt;/circle&gt;');
svg.append(c);</pre>
            <h3>效果</h3>
            <p>
                <svg id="svg" width="200" height="100"></svg>                
            </p>
        </div>
    </div>
</div>

<?php 
    include('../_include/footer.php'); 
?>
<script>
var svg = Snap("#svg");
var c = Snap.fragment('<circle cx="50" cy="50" r="40"></circle><circle cx="150" cy="50" r="40"></circle>');
svg.append(c);
</script>
</body>
</html>