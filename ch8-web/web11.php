<?php
/*
8.11 Redirecting to a Different Location
Problem
You want to automatically send a user to a new URL. For example, after successfully
saving form data, you want to redirect a user to a page that confirms that the data has
been saved.
*/
header('Location: http://www.google.com');
exit();
