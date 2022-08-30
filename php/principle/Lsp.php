<?php
namespace app\service\principle;

interface bird {
    public function fly(): void;
}

class Mybird implements bird {
    public function fly(): void
    {
        // TODO: Implement fly() method.
    }
}

/**
 * 麻雀
 */
class Sparrow extends Mybird {
    public function fly(): void
    {
        // TODO: Implement fly() method.
    }
}

/**
 * 鸵鸟
 */
class Ostrich extends Mybird {
    public function fly(): void
    {
        // TODO: Implement fly() method.
    }
}