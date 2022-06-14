<?php
/*
8.12 Flushing Output to the Browser
Problem
You want to force output to be sent to the browser. For example, before doing a slow
database query, you want to give the user a status update.
*/
print 'Finding identical snowflakes...';
flush();
print 'hello!';