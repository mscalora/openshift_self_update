<!DOCTYPE html>
<html>
	<head>
		<title>Self Updating Application</title>
	</head>
	<body>
		<h2>This is a self updating openshift application</h2>

<?php
	$config = "${_ENV['OPENSHIFT_DATA_DIR']}.self_update_config";
	$cdata = is_file($config) ? file_get_contents($config) : "";
	$cdata .= file_get_contents("../.openshift/cron/minutely/self_update");
	preg_match('/^\s*REMOTE_REPO=(.+?)\s*$/m',$cdata,$r);
	$repo = trim($r[1]);
	if ($repo) {
		echo "<p>This app currently configured to update from: <b>";
		echo htmlentities($repo);
		echo "</b></p>";
	}	
?>

		<p><a href='https://github.com/mscalora/openshift_self_update'>https://github.com/mscalora/openshift_self_update</a></p>
		<div style="position:fixed;bottom:4px;left:4px;color:blue;">4</div>
	</body>
</html>