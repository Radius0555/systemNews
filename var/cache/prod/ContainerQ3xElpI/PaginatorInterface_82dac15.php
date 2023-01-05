<?php

namespace ContainerQ3xElpI;

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    private $valueHolderf0652 = null;
    private $initializer4ceb4 = null;
    private static $publicProperties57eb6 = [
        
    ];
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        if ($this->valueHolderf0652 === $returnValue = $this->valueHolderf0652->paginate($target, $page, $limit, $options)) {
            return $this;
        }
        return $returnValue;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializer4ceb4 = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolderf0652) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderf0652 = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, '__get', ['name' => $name], $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        if (isset(self::$publicProperties57eb6[$name])) {
            return $this->valueHolderf0652->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0652;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf0652;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0652;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf0652;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, '__isset', array('name' => $name), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0652;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderf0652;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, '__unset', array('name' => $name), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0652;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderf0652;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, '__clone', array(), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        $this->valueHolderf0652 = clone $this->valueHolderf0652;
    }
    public function __sleep()
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, '__sleep', array(), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return array('valueHolderf0652');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4ceb4 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4ceb4;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'initializeProxy', array(), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf0652;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf0652;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
