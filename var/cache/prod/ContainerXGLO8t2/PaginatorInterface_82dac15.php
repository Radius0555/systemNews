<?php

namespace ContainerXGLO8t2;

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    private $valueHolder375c4 = null;
    private $initializer98d05 = null;
    private static $publicPropertiesea53e = [
        
    ];
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        if ($this->valueHolder375c4 === $returnValue = $this->valueHolder375c4->paginate($target, $page, $limit, $options)) {
            return $this;
        }
        return $returnValue;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializer98d05 = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder375c4) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder375c4 = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, '__get', ['name' => $name], $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        if (isset(self::$publicPropertiesea53e[$name])) {
            return $this->valueHolder375c4->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder375c4;
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
        $targetObject = $this->valueHolder375c4;
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
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder375c4;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder375c4;
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
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, '__isset', array('name' => $name), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder375c4;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder375c4;
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
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, '__unset', array('name' => $name), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder375c4;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder375c4;
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
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, '__clone', array(), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        $this->valueHolder375c4 = clone $this->valueHolder375c4;
    }
    public function __sleep()
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, '__sleep', array(), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return array('valueHolder375c4');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer98d05 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer98d05;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'initializeProxy', array(), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder375c4;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder375c4;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
