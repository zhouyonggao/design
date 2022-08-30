<?php
namespace app\service\principle;

abstract class People {

    protected $userName;

    public function setUserName(string $user_name): void {}

    public function getUserName(): string {}

}

abstract class Action {
    public function eat(): void {}
}

class PeopleAttr extends Attr {

    protected $userName;

    public function setUserName(string $user_name): void
    {
        $this->userName = $user_name;
    }

    public function getUserName(): string
    {
        return $this->userName;
    }
}

class PeopleAction extends Action {

     public function eat(): void
     {
     }

}