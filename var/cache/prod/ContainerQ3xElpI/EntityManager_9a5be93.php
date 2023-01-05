<?php

namespace ContainerQ3xElpI;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderf0652 = null;
    private $initializer4ceb4 = null;
    private static $publicProperties57eb6 = [
        
    ];
    public function getConnection()
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'getConnection', array(), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'getMetadataFactory', array(), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'getExpressionBuilder', array(), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'beginTransaction', array(), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'getCache', array(), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->getCache();
    }
    public function transactional($func)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'transactional', array('func' => $func), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'commit', array(), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->commit();
    }
    public function rollback()
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'rollback', array(), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'getClassMetadata', array('className' => $className), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'createQuery', array('dql' => $dql), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'createNamedQuery', array('name' => $name), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'createQueryBuilder', array(), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'flush', array('entity' => $entity), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'clear', array('entityName' => $entityName), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->clear($entityName);
    }
    public function close()
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'close', array(), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->close();
    }
    public function persist($entity)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'persist', array('entity' => $entity), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'remove', array('entity' => $entity), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'refresh', array('entity' => $entity), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'detach', array('entity' => $entity), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'merge', array('entity' => $entity), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'contains', array('entity' => $entity), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'getEventManager', array(), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'getConfiguration', array(), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'isOpen', array(), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'getUnitOfWork', array(), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'getProxyFactory', array(), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'initializeObject', array('obj' => $obj), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'getFilters', array(), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'isFiltersStateClean', array(), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, 'hasFilters', array(), $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        return $this->valueHolderf0652->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer4ceb4 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;
        if (! $this->valueHolderf0652) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf0652 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderf0652->__construct($conn, $config);
    }
    public function & __get($name)
    {
        $this->initializer4ceb4 && ($this->initializer4ceb4->__invoke($valueHolderf0652, $this, '__get', ['name' => $name], $this->initializer4ceb4) || 1) && $this->valueHolderf0652 = $valueHolderf0652;
        if (isset(self::$publicProperties57eb6[$name])) {
            return $this->valueHolderf0652->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
