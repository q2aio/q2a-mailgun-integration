<?php

if (!defined('QA_VERSION')) {
	header('Location: ../../');
	exit;
}

// import Email.php file
require_once QA_INCLUDE_DIR.'app/emails.php';

/*
// Register file to override the functions
// present in the file
*/
qa_register_plugin_overrides('emails.php');
