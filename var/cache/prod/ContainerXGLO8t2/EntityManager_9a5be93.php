<?php

namespace ContainerXGLO8t2;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder375c4 = null;
    private $initializer98d05 = null;
    private static $publicPropertiesea53e = [
        
    ];
    public function getConnection()
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'getConnection', array(), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'getMetadataFactory', array(), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'getExpressionBuilder', array(), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'beginTransaction', array(), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'getCache', array(), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->getCache();
    }
    public function transactional($func)
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'transactional', array('func' => $func), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'wrapInTransaction', array('func' => $func), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'commit', array(), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->commit();
    }
    public function rollback()
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'rollback', array(), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'getClassMetadata', array('className' => $className), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'createQuery', array('dql' => $dql), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'createNamedQuery', array('name' => $name), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'createQueryBuilder', array(), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'flush', array('entity' => $entity), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'clear', array('entityName' => $entityName), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->clear($entityName);
    }
    public function close()
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'close', array(), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->close();
    }
    public function persist($entity)
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'persist', array('entity' => $entity), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'remove', array('entity' => $entity), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'refresh', array('entity' => $entity), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'detach', array('entity' => $entity), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'merge', array('entity' => $entity), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'getRepository', array('entityName' => $entityName), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'contains', array('entity' => $entity), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'getEventManager', array(), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'getConfiguration', array(), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'isOpen', array(), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'getUnitOfWork', array(), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'getProxyFactory', array(), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'initializeObject', array('obj' => $obj), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'getFilters', array(), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'isFiltersStateClean', array(), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, 'hasFilters', array(), $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        return $this->valueHolder375c4->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer98d05 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;
        if (! $this->valueHolder375c4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder375c4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder375c4->__construct($conn, $config);
    }
    public function & __get($name)
    {
        $this->initializer98d05 && ($this->initializer98d05->__invoke($valueHolder375c4, $this, '__get', ['name' => $name], $this->initializer98d05) || 1) && $this->valueHolder375c4 = $valueHolder375c4;
        if (isset(self::$publicPropertiesea53e[$name])) {
            return $this->valueHolder375c4->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
