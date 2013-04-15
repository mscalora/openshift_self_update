<?php
	file_put_contents("${_ENV['OPENSHIFT_DATA_DIR']}.self_update_trigger", "1");
?>