<?php
/*
8.3 Deleting Cookies
Problem
You want to delete a cookie so a browser doesn’t send it back to the server. For example,
you’re using cookies to track whether a user is logged in to your website, and a user logs
out.
*/
setcookie('flavor','',1);

?>