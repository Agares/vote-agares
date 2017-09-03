<?php

require_once __DIR__.'/../functions.php';

if(isset($_POST['yes'])) {
	write_vote(VOTE_YES);
} elseif(isset($_POST['no'])) {
	write_vote(VOTE_NO);
}

header('Location: /results.php');