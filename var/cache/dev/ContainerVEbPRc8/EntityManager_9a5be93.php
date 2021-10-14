<?php

namespace ContainerVEbPRc8;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9a1ca = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2196c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties62798 = [
        
    ];

    public function getConnection()
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'getConnection', array(), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'getMetadataFactory', array(), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'getExpressionBuilder', array(), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'beginTransaction', array(), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'getCache', array(), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'transactional', array('func' => $func), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'commit', array(), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->commit();
    }

    public function rollback()
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'rollback', array(), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'getClassMetadata', array('className' => $className), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'createQuery', array('dql' => $dql), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'createNamedQuery', array('name' => $name), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'createQueryBuilder', array(), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'flush', array('entity' => $entity), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'clear', array('entityName' => $entityName), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->clear($entityName);
    }

    public function close()
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'close', array(), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->close();
    }

    public function persist($entity)
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'persist', array('entity' => $entity), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'remove', array('entity' => $entity), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'refresh', array('entity' => $entity), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'detach', array('entity' => $entity), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'merge', array('entity' => $entity), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'contains', array('entity' => $entity), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'getEventManager', array(), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'getConfiguration', array(), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'isOpen', array(), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'getUnitOfWork', array(), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'getProxyFactory', array(), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'initializeObject', array('obj' => $obj), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'getFilters', array(), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'isFiltersStateClean', array(), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'hasFilters', array(), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return $this->valueHolder9a1ca->hasFilters();
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

        $instance->initializer2196c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9a1ca) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9a1ca = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9a1ca->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, '__get', ['name' => $name], $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        if (isset(self::$publicProperties62798[$name])) {
            return $this->valueHolder9a1ca->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a1ca;

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

        $targetObject = $this->valueHolder9a1ca;
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
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a1ca;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9a1ca;
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
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, '__isset', array('name' => $name), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a1ca;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9a1ca;
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
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, '__unset', array('name' => $name), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a1ca;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9a1ca;
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
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, '__clone', array(), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        $this->valueHolder9a1ca = clone $this->valueHolder9a1ca;
    }

    public function __sleep()
    {
        $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, '__sleep', array(), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;

        return array('valueHolder9a1ca');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2196c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2196c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2196c && ($this->initializer2196c->__invoke($valueHolder9a1ca, $this, 'initializeProxy', array(), $this->initializer2196c) || 1) && $this->valueHolder9a1ca = $valueHolder9a1ca;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9a1ca;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9a1ca;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
