<?php

use devramdanewis\Http\Route;
use devramdanewis\Http\Request;
use devramdanewis\Http\Response;

require_once __DIR__. '/../vendor/autoload.php ';
require_once __DIR__ . '/../routes/web.php';


$route = new Route(new Request , new Response);

echo  "<pre>";
var_dump($route->request->path());
echo  "</pre>";