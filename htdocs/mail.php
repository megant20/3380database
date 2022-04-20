<?php

		$to="aristotelescajiza@gmail.com";
		$subject="Testing";
		$msg="Supp B, We killing this S";
		$from="From: aristotelescajiza@gmail.com";

		if (mail($to, $subject, $msg, $from)) {
			echo "Email Sent.";
		}
		else{
			echo "Email not Sent.";
		}

?>