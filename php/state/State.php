<?php
namespace app\service\state;

abstract class State {

    protected $orderContext;

    public function setOrderContext(OrderContext $context)
    {
        $this->orderContext = $context;
    }

    abstract function handle();

}

//订单关闭
class OrderClose extends State {

    public function handle()
    {
        // 订单关闭逻辑 ...
    }

}

//订单过期
class OrderExpire extends State {

    public function handle()
    {
        // 订单过期处理...
        $this->orderContext->setOrderState(OrderClose::class);
        // 过期之后切换到订单关闭处理....
        $this->orderContext->handle();
    }

}


class OrderContext {

    private $currentState = OrderClose::class; // 默认状态

    public function handle()
    {
        // 这里可以用对象池来做内存优化....
        return (new $this->currentState())->handle();
    }


    public function setOrderState(State $state)
    {
        $this->currentState = $state;
        $this->currentState->setOrderContext($this);
    }

    public function getOrderState()
    {
        return $this->currentState;
    }

}


class Client {

    public function test()
    {
        $orderContext = new OrderContext();
        $orderContext->setOrderState(OrderExpire::class);
        $orderContext->handle();
    }

}