<?php

$function_files = [
	'/functions/init.php',
	'/functions/rewrite.php',
	'/functions/wpcf7.php',
	'/functions/navigation.php',
	'/functions/common.php',
];

foreach ($function_files as $file) {
	if ((file_exists(__DIR__ . $file))) {
		locate_template($file, true, true);
	} else {
		trigger_error("`$file`ファイルが見つかりません", E_USER_ERROR);
	}
}