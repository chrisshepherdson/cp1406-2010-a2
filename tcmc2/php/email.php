<?php

$retrevial = mail( 'jake_dixon@live.com.au', 'test', 'message', 'jake.dixon@my.jcu.edu.au');
if ($retrevial == true) {

echo(SQLite3::escapeString ("h'i"));
}
?>