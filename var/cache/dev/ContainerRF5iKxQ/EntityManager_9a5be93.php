<?php

namespace ContainerRF5iKxQ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfc111 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfc05c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7cc58 = [
        
    ];

    public function getConnection()
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'getConnection', array(), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'getMetadataFactory', array(), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'getExpressionBuilder', array(), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'beginTransaction', array(), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'getCache', array(), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'transactional', array('func' => $func), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'commit', array(), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->commit();
    }

    public function rollback()
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'rollback', array(), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'getClassMetadata', array('className' => $className), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'createQuery', array('dql' => $dql), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'createNamedQuery', array('name' => $name), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'createQueryBuilder', array(), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'flush', array('entity' => $entity), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'clear', array('entityName' => $entityName), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->clear($entityName);
    }

    public function close()
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'close', array(), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->close();
    }

    public function persist($entity)
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'persist', array('entity' => $entity), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'remove', array('entity' => $entity), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'refresh', array('entity' => $entity), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'detach', array('entity' => $entity), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'merge', array('entity' => $entity), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'contains', array('entity' => $entity), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'getEventManager', array(), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'getConfiguration', array(), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'isOpen', array(), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'getUnitOfWork', array(), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'getProxyFactory', array(), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'initializeObject', array('obj' => $obj), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'getFilters', array(), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'isFiltersStateClean', array(), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'hasFilters', array(), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return $this->valueHolderfc111->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerfc05c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfc111) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfc111 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfc111->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, '__get', ['name' => $name], $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        if (isset(self::$publicProperties7cc58[$name])) {
            return $this->valueHolderfc111->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc111;

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

        $targetObject = $this->valueHolderfc111;
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
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc111;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfc111;
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
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, '__isset', array('name' => $name), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc111;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfc111;
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
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, '__unset', array('name' => $name), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc111;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfc111;
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
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, '__clone', array(), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        $this->valueHolderfc111 = clone $this->valueHolderfc111;
    }

    public function __sleep()
    {
        $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, '__sleep', array(), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;

        return array('valueHolderfc111');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfc05c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfc05c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfc05c && ($this->initializerfc05c->__invoke($valueHolderfc111, $this, 'initializeProxy', array(), $this->initializerfc05c) || 1) && $this->valueHolderfc111 = $valueHolderfc111;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfc111;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfc111;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
