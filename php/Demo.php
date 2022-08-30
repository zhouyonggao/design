<?php
namespace app\service;

use app\Request;

abstract class GameProp {

    protected $name;

    // 还需要其他职责的方法 根据业务自己添加 不过需要注意单一职责 如果方法过多 建议将属性 和 动作分开
    public abstract function getName():string;

    public abstract function trigger();

}

class PropA extends GameProp
{
    protected $name = 'A道具';


    protected function getName(): string
    {
        return $this->name;
    }

    public function trigger()
    {
        // 使用A道具触发的逻辑
    }
}

class PropB extends GameProp
{
    protected $name = 'B道具';


    protected function getName(): string
    {
        return $this->name;
    }

    public function trigger()
    {
        // 使用A道具触发的逻辑
    }
}

//道具工厂

class PropFactory {


    public $prop = [   //道具对应的标识
        1 => PropA::class, 2 => PropB::class
    ];

    public function __construct(array  $prop)  // 这里可以直接在调用给的时候 注入事先配置好的游戏道具  也可以直接传入从数据库查询的道具
    {
        $this->prop = $prop;
    }


    public  function createProp(int $prop_id)
    {
        return new $this->prop[$prop_id]();
    }

}

//客户端(api)调用
class client {

    public function test(Request $request)
    {
        $prop_id = $request->get('prop_id');
        $prop_conf = [
            1 => PropA::class, 2 => PropB::class
        ];
        $prop = (new PropFactory($prop_conf))->createProp($prop_id);
        /**@var GameProp $prop**/
        $prop->trigger(); //触发当前道具
        $prop->getName(); //获取道具名称

    }

}




