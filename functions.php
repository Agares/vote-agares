<?php

define('VOTE_FILE', __DIR__.'/data/votes');
define('VOTE_YES', 'yes');
define('VOTE_NO', 'no');

function write_vote(string $vote): void {
	if(!file_exists(VOTE_FILE)) {
		touch(VOTE_FILE);
	}

	file_put_contents(VOTE_FILE, $vote.PHP_EOL, FILE_APPEND);
}

function get_aggregate_votes(): array {
	$votes = explode(PHP_EOL, file_get_contents(VOTE_FILE));

	$yes = $no = 0;
	foreach($votes as $vote) {
		if ($vote === VOTE_YES) {
			$yes++;
		} elseif($vote === VOTE_NO) {
			$no++;
		}
	}

	if($yes + $no === 0) {
		return [
			'yes' => 0,
			'no' => 0
		];
	}

	return [
		'yes' => $yes / ($yes + $no),
		'no' => $no / ($yes + $no)
	];
}

function format_percent(float $value): string {
	$formatter = new \NumberFormatter('pl-PL', \NumberFormatter::PERCENT);
	return $formatter->format($value);
}