<?php
use \Hcode\Page;


$app->get('/', function() {
        
    $page = new page();
    $page->setTpl("index");

});

?>