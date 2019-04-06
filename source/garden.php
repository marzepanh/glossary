<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 20.10.2018
 * Time: 17:08
 */

abstract class Tree implements TreeInterface
{
    protected $name;
    public function Rasti()
    {
    }

    public function GetName()
    {
        return $this->name;
    }
}

class AppleTree extends Tree
{
public function __construct()
{
    $this->name = 'яблоня';
}

    public function GetFruit()
    {
    }
}

class PineTree extends Tree
{
    public function GetNothing()
    {
    }
}

class Garden implements  GardenInterface
{
    public function GetList()
    {
        return $this->trees;
    }

    public function add( TreeInterface $tree) {
        $this->trees []= $tree;
    }

    protected $trees =[];



}

class Gardener implements GardenerInterface {

    public function Plant(GardenInterface $park, TreeInterface $tree) {

    }
}





interface TreeInterface {
    public function Rasti();
    public function GetName();
}

interface GardenInterface {
    public function GetList();
    public function add( TreeInterface $woods);


}

interface GardenerInterface {
    public function Plant(GardenInterface $park, TreeInterface $tree);
}
