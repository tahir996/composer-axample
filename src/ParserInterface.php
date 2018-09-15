<?php
namespace tahir996\parser;
interface ParserInterface {
public function process (string $url, string $tag):array;
}