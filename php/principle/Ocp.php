<?php
namespace app\service\principle;

interface  Fruit {
    public function getName(): string;
    public function getPrice(): float;
}

class Apple implements Fruit {

    protected $name;

    protected $price;

    public function getName(): string
    {
       return  $this->name;
    }

    public function getPrice(): float
    {
       return $this->price;
    }

}

//class AppleDiscount extends Apple {
//
//    protected $discount;
//
//    public function __construct(float $discount = 0.1)
//    {
//         $this->discount = $discount;
//    }
//
//    public function getOriginPrice(): float
//    {
//        return  $this->price;
//    }
//
//    public function getPrice(): float
//    {
//        return $this->getOriginPrice() * $this->discount;
//    }
//
//}

class AppleDiscount extends Apple {

    protected $discount;

    public function __construct(float $discount = 0.1)
    {
        $this->discount = $discount;
    }

    public function getDiscountPrice(): float
    {
        return $this->getPrice() * $this->discount;
    }

}




