<?php
session_start();
require 'vendor/autoload.php';
require 'helpers.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();