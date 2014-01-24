<?php

require_once "vendor/autoload.php";

$blog    = new My\AnnotationTest\Blog();
$handler = new \My\AnnotationTest\BlogHandler();
$handler->handle($blog);
