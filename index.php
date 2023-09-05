<?php
require_once __DIR__ . '/Router.php';
require_once __DIR__ . '/templates/template.php';
$request = $_SERVER['REQUEST_URI'];



$template = new Template();
$template-> footer();
(new Router())->run($request);
$template-> header();