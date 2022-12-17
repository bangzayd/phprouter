<?php

require_once (__DIR__.'/router.php');
/* require_once("{$_SERVER['DOCUMENT_ROOT']}/phprouter/router.php"); */
/*  nama folder */

get('/', '/views/index.php');
get('/items', '/views/items.php');
get('/items/$id', '/views/get-item.php');
/* http:/localhost/items/1 */
get('/users/$age/$name', '/users.php');
/* http:/localhost/users/28/Ade */
get('/posts', '/views/test.php');
/* http:/localhost/posts?name=ade */

/* MYSQLI */
get('/phprouter', 'phprouter/mysqli/home.php');
get('/phprouter/crud', 'phprouter/mysqli/home.php');
get('/phprouter/tambah', 'phprouter/mysqli/tambah.php');
post('/phprouter/tambah-proses', 'phprouter/mysqli/tambah-proses.php');
get('/phprouter/edit/$id', 'phprouter/mysqli/edit.php');
post('/phprouter/edit-proses', 'phprouter/mysqli/edit-proses.php');
get('/phprouter/hapus/$id', 'phprouter/mysqli/hapus.php');

post('/users', '/bridges/create-user.php');
delete('/users/$id', '/bridges/delete-user.php');

any('/404','/phprouter/views/404.php');