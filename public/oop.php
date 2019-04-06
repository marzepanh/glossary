<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 20.10.2018 * Time: 16:59
 */

echo '<pre>';

include_once "../source/garden.php";
$tree = new AppleTree();
var_dump($tree);

    $sadovnik = new Gardener();
var_dump($sadovnik);

$park = new Garden();
var_dump($park);

$sadovnik->Plant($park,$tree);

var_dump($park);

