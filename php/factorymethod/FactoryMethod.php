<?php

namespace app\service;


interface Product {
    public function getName();
}

interface ProductFactory {
    public function create();
}

class ProductA implements Product
{
    public function getName()
    {
        // TODO: Implement getName() method.
    }
}

class ProductB implements Product
{
    public function getName()
    {
        // TODO: Implement getName() method.
    }
}


class ProductAFactory implements ProductFactory
{
    public function create()
    {
        return new ProductA();
    }
}

class ProductBFactory implements ProductFactory
{
    public function create()
    {
        return new ProductB();
    }
}


class Client {

    public function test()
    {
        $product_a = new ProductAFactory();
        $product_a->create()->getName();

        $product_b = new ProductBFactory();
        $product_b->create()->getName();

    }
}