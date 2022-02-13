<?php

namespace devramdanewis\Http;

class Request
{
    public function getMethode () :string
    {
    return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function  path ()
    {
        return $_SERVER["PATH_INFO"] ?? '/';
    }
}