<?php

	if (isset($_COOKIE["xsession"]))
	{
		echo "secret is here: 12345";
	}
	else
	{
		echo "not logged in";
	}
?>
