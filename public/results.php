<?php
	require_once __DIR__.'/../functions.php';

	['yes' => $yes, 'no' => $no] = get_aggregate_votes();

	$yes_css = $yes * 100;
	$no_css = $no * 100;
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css" />
	<title>głossuejcie wszyscy na mję</title>
</head>
<body>
<div class="content">
	<h1>agares?</h1>
	<div class="results">
		<div class="results__bar">
			<div class="results__bar__fill" style="width: <?=$yes_css?>%"></div>
		</div>
		<span><?=format_percent($yes)?> Tak</span>
		<div class="results__bar">
			<div class="results__bar__fill" style="width: <?=$no_css?>%"></div>
		</div>
		<span><?=format_percent($no)?> Spejirdalaj!</span>
	</div>
</div>
</body>
</html>