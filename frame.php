<html>
<head>
<title>Fast Multiple Website Opener</title>
<base target="multisiteframe">
<style>
body {margin:0; font-family: "Helvetica", Arial, san-serif; font-size:12px;}
#siteslist {float:left; width:20%; height:100%; overflow: scroll;}
#siteslist #list {margin:20px;}
.line {color:#ccc; margin-right:20px;width:20px; display: inline-block; height:20px;}
#multisitepanel {width:80%; float:right;}
#multisitepanel iframe {border:0;}
#credits {position:absolute; bottom:0; left:0;}
a {color: #000;}
a:hover {color: #ff004e;}
a:active {color: #ff6388;}
a:visited {color: #666;} 
</style>
</head>

<body>
<div id="siteslist">
<div id="list">
<?php
$handle = @fopen("list.txt", "r"); $i=0;
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {$i++;
	$buffer = str_replace("\n", "", $buffer);
        echo "<div class=\"line\">".$i."</div> <a href=\"".$buffer."\">".$buffer."</a><br />";
    }
    if (!feof($handle)) {
        echo "Sorry, there was an error loading the list.";
    }
    fclose($handle);
}
?>
<div id="credits">
<a href="http://yan411.com/downloads/fast-multiple-website-opener/" title="Fast Multiple Website Opener" target="_blank">Fast Multiple Website Opener</a> PHP script by <a href="http://yan411.com" target="_blank" title="Yan 411">Yan Huang</a>.
</div>
</div>
</div>

<div id="multisitepanel">
<iframe style="width:100%; height: 100%;" name="multisiteframe" ></iframe>
</div>
</body>

</html>