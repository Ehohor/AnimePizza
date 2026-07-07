<?php

const DB_HOST = "db:3306";
const DB = "jopa";
const DB_CHARSET = "utf8";
const DB_USER = "root";
const DB_PASSWORD = "1111";
const DB_DSN = "mysql:host=" . DB_HOST .";dbname=". DB .";charset=" . DB_CHARSET;

define("DOMAIN", $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST']);


// $scheme = $_SERVER['REQUEST_SCHEME'] ?? 'http';
// define('DOMAIN', $scheme . '://' . $_SERVER['HTTP_HOST']);

const ASSETS_URI = DOMAIN . "/assets/";
const VIEW_DIR = ROOT_DIR . '/views';
const APP_DIR = ROOT_DIR . '/app';
const PARTS_DIR = ROOT_DIR . '/parts';
const PAGES_DIR = ROOT_DIR . '/pages';



