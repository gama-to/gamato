<?php require_once("res/x5engine.php"); ?>
<!DOCTYPE html><!-- HTML5 -->
<html lang="gr" dir="ltr">
	<head>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="generator" content="Incomedia WebSite X5 Evolution 9.1.12.1975 - www.websitex5.com" />
		<link rel="stylesheet" type="text/css" href="style/reset.css" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/menu.css" media="screen" />
		<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="style/ie.css" media="screen" /><![endif]-->
		<script type="text/javascript" src="res/swfobject.js"></script>
		<script type="text/javascript" src="res/jquery.js?1975"></script>
		<script type="text/javascript" src="res/x5engine.js?1975"></script>
		<script type="text/javascript" src="res/x5cartengine.js?1975"></script>
		<script type="text/javascript" src="res/l10n.js?1975_637229768774928945"></script>
		<script type="text/javascript" src="res/x5settings.js?1975_637229768774928945"></script>
		
		
		<title>Search - axilleas</title>
		<!-- CSS -->
		<script type="text/javascript">x5engine.imQueue.push_init('x5engine.imSearch.Load()')</script>
	</head>
	<body>
		<div id="imPage">
			<div id="imHeader">
				<h1 class="imHidden">axilleas</h1>
				
			</div>
			<a class="imHidden" href="#imGoToCont" title="Μετάβαση στο κύριο μενού">Μετάβαση στο περιεχόμενο</a>
			<a id="imGoToMenu"></a><p class="imHidden">Κύριο Μενού</p>
			<div id="imMnMn" class="auto">
				<ul class="auto">
					<li id="imMnMnNode0">
						<a href="index.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Είσοδος</span>
							</span>
						</a>
					</li>
				</ul><script type="text/javascript">x5engine.imQueue.push_init("x5engine.utils.imPreloadImages(['menu/index_h.png','res/imLoad.gif','res/imClose.png'])",false);</script>
				
			</div>
			<div id="imContentGraphics"></div>
			<div id="imContent">
				<a id="imGoToCont"></a>
				<?php
$search = new imSearch();
$search->search(@$_GET['search'], @$_GET['page']);
?>
				<div class="imClear"></div>
			</div>
		</div>
		<div id="imFooterBg">
			<div id="imFooter">
				
			</div>
		</div>
		<span class="imHidden"><a href="#imGoToCont" title="Ξαναδιαβάστε αυτή τη σελίδα">Επιστροφή στο περιεχόμενο</a> | <a href="#imGoToMenu" title="Ξαναδιαβάστε αυτό τον δικτυακό τόπο">Επιστροφή στο κύριο μενού</a></span>
		
	</body>
</html>
