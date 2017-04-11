<?php

require_once('vendor/autoload.php');

use Mremi\UrlShortener\Model\Link;
use Mremi\UrlShortener\Provider\Google\GoogleProvider;

$link = new Link;
$link->setLongUrl('http://www.google.com');

$googleProvider = new GoogleProvider(
    'AIzaSyCoGG2mr0cmwKyyvOBLeUa6R06icj-EjjU',
    array('connect_timeout' => 1, 'timeout' => 1)
);

$googleProvider->shorten($link);