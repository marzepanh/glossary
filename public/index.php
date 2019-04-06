<?php

$page = $_GET['page'] ?? 'main';
 if  (empty($_COOKIE['lang']) && $page != 'LangChoice'  ) {

     header('Location: /index.php?page=LangChoice');
     exit;
 }


     require '../vendor/autoload.php';
     session_start();
     $templates = new League\Plates\Engine(__DIR__ . '/../templates');

     $pdo = require 'db.php';
     //var_dump($pdo);
     //var_dump($_COOKIE['lang']);




     if ($page == 'main') {
         include "../source/controller/main.php";


     } else
         if ($page == 'contact') {
             echo 'Обратная связь';
         } else if ($page == 'description') {
             echo 'Это описание страницы';
         } else if ($page == 'register') {
             include 'user/register.php';

         } else if ($page == 'log-in') {
             include 'user/log-in.php';

         } else if ($page == 'topic') {
             include '../source/controller/topic.php';

         } else if ($page == 'LangChoice') {
             include 'LangChoice.php';
         } else {
             echo 'Такой страницы не существует';

         }

