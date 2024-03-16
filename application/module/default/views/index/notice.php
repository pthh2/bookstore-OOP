<?php

	$message	= '';

	switch ($this->arrParam['type']){
		case 'register-success':
			$message	= 'Your account has been created successfully.';
			break;
		case 'not-permission':
			$message	= 'You do not have access to that function!';
			break;
		case 'not-url':
			$message	= 'Invalid path!';
			break;
	}
?>
<div class="notice"><?php echo $message; ?></div>