<?php

namespace Container1Cr2DBN;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder81ac1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbe518 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3bfac = [
        
    ];

    public function getConnection()
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'getConnection', array(), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'getMetadataFactory', array(), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'getExpressionBuilder', array(), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'beginTransaction', array(), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'getCache', array(), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'transactional', array('func' => $func), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'commit', array(), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->commit();
    }

    public function rollback()
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'rollback', array(), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'getClassMetadata', array('className' => $className), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'createQuery', array('dql' => $dql), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'createNamedQuery', array('name' => $name), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'createQueryBuilder', array(), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'flush', array('entity' => $entity), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'clear', array('entityName' => $entityName), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->clear($entityName);
    }

    public function close()
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'close', array(), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->close();
    }

    public function persist($entity)
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'persist', array('entity' => $entity), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'remove', array('entity' => $entity), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'refresh', array('entity' => $entity), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'detach', array('entity' => $entity), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'merge', array('entity' => $entity), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'contains', array('entity' => $entity), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'getEventManager', array(), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'getConfiguration', array(), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'isOpen', array(), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'getUnitOfWork', array(), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'getProxyFactory', array(), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'initializeObject', array('obj' => $obj), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'getFilters', array(), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'isFiltersStateClean', array(), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'hasFilters', array(), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return $this->valueHolder81ac1->hasFilters();
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

        $instance->initializerbe518 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder81ac1) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder81ac1 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder81ac1->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, '__get', ['name' => $name], $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        if (isset(self::$publicProperties3bfac[$name])) {
            return $this->valueHolder81ac1->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder81ac1;

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

        $targetObject = $this->valueHolder81ac1;
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
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder81ac1;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder81ac1;
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
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, '__isset', array('name' => $name), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder81ac1;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder81ac1;
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
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, '__unset', array('name' => $name), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder81ac1;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder81ac1;
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
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, '__clone', array(), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        $this->valueHolder81ac1 = clone $this->valueHolder81ac1;
    }

    public function __sleep()
    {
        $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, '__sleep', array(), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;

        return array('valueHolder81ac1');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbe518 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbe518;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbe518 && ($this->initializerbe518->__invoke($valueHolder81ac1, $this, 'initializeProxy', array(), $this->initializerbe518) || 1) && $this->valueHolder81ac1 = $valueHolder81ac1;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder81ac1;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder81ac1;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
