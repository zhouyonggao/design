<?php
namespace app\service\prototype;

abstract class Book {

    protected $name;

    // 需要注意深复制和浅复制的区别, 利用_clone 或 序列化可实现深复制
    abstract protected function __clone();

    abstract protected function setName(string $name);

    abstract protected function getName();

}


class BookA extends Book {

    public $name;

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function setName(string $name)
    {
        // TODO: Implement setName() method.
    }

    public function getName()
    {
        // TODO: Implement getName() method.
    }

}

class client {

    public function test()
    {
        $book_prototype = new BookA();

        $book_b = clone $book_prototype;
        $book_b->setName('BookB');
        $book_b->getName();
    }

}