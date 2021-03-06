<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Vehiculo extends \App\Entity\Vehiculo implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Vehiculo' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Vehiculo' . "\0" . 'modelo', '' . "\0" . 'App\\Entity\\Vehiculo' . "\0" . 'marca', '' . "\0" . 'App\\Entity\\Vehiculo' . "\0" . 'fechaModificacion', '' . "\0" . 'App\\Entity\\Vehiculo' . "\0" . 'propietario', '' . "\0" . 'App\\Entity\\Vehiculo' . "\0" . 'eliminado', '' . "\0" . 'App\\Entity\\Vehiculo' . "\0" . 'venta', '' . "\0" . 'App\\Entity\\Vehiculo' . "\0" . 'descripcion', '' . "\0" . 'App\\Entity\\Vehiculo' . "\0" . 'precio', '' . "\0" . 'App\\Entity\\Vehiculo' . "\0" . 'messages', '' . "\0" . 'App\\Entity\\Vehiculo' . "\0" . 'images'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Vehiculo' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Vehiculo' . "\0" . 'modelo', '' . "\0" . 'App\\Entity\\Vehiculo' . "\0" . 'marca', '' . "\0" . 'App\\Entity\\Vehiculo' . "\0" . 'fechaModificacion', '' . "\0" . 'App\\Entity\\Vehiculo' . "\0" . 'propietario', '' . "\0" . 'App\\Entity\\Vehiculo' . "\0" . 'eliminado', '' . "\0" . 'App\\Entity\\Vehiculo' . "\0" . 'venta', '' . "\0" . 'App\\Entity\\Vehiculo' . "\0" . 'descripcion', '' . "\0" . 'App\\Entity\\Vehiculo' . "\0" . 'precio', '' . "\0" . 'App\\Entity\\Vehiculo' . "\0" . 'messages', '' . "\0" . 'App\\Entity\\Vehiculo' . "\0" . 'images'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Vehiculo $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getModelo(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModelo', []);

        return parent::getModelo();
    }

    /**
     * {@inheritDoc}
     */
    public function setModelo(string $modelo): \App\Entity\Vehiculo
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModelo', [$modelo]);

        return parent::setModelo($modelo);
    }

    /**
     * {@inheritDoc}
     */
    public function getMarca(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarca', []);

        return parent::getMarca();
    }

    /**
     * {@inheritDoc}
     */
    public function setMarca(string $marca): \App\Entity\Vehiculo
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMarca', [$marca]);

        return parent::setMarca($marca);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaModificacion(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaModificacion', []);

        return parent::getFechaModificacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaModificacion(\DateTimeInterface $fechaModificacion): \App\Entity\Vehiculo
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaModificacion', [$fechaModificacion]);

        return parent::setFechaModificacion($fechaModificacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getPropietario(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPropietario', []);

        return parent::getPropietario();
    }

    /**
     * {@inheritDoc}
     */
    public function setPropietario(?\App\Entity\User $propietario): \App\Entity\Vehiculo
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPropietario', [$propietario]);

        return parent::setPropietario($propietario);
    }

    /**
     * {@inheritDoc}
     */
    public function getEliminado(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEliminado', []);

        return parent::getEliminado();
    }

    /**
     * {@inheritDoc}
     */
    public function setEliminado(bool $eliminado): \App\Entity\Vehiculo
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEliminado', [$eliminado]);

        return parent::setEliminado($eliminado);
    }

    /**
     * {@inheritDoc}
     */
    public function getVenta(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVenta', []);

        return parent::getVenta();
    }

    /**
     * {@inheritDoc}
     */
    public function setVenta(bool $venta): \App\Entity\Vehiculo
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVenta', [$venta]);

        return parent::setVenta($venta);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', []);

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripcion(string $descripcion): \App\Entity\Vehiculo
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', [$descripcion]);

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrecio(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrecio', []);

        return parent::getPrecio();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrecio(int $precio): \App\Entity\Vehiculo
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrecio', [$precio]);

        return parent::setPrecio($precio);
    }

    /**
     * {@inheritDoc}
     */
    public function getMessages(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMessages', []);

        return parent::getMessages();
    }

    /**
     * {@inheritDoc}
     */
    public function addMessage(\App\Entity\Message $message): \App\Entity\Vehiculo
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMessage', [$message]);

        return parent::addMessage($message);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMessage(\App\Entity\Message $message): \App\Entity\Vehiculo
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMessage', [$message]);

        return parent::removeMessage($message);
    }

    /**
     * {@inheritDoc}
     */
    public function getImages(): ?array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImages', []);

        return parent::getImages();
    }

    /**
     * {@inheritDoc}
     */
    public function setImages(array $images): \App\Entity\Vehiculo
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImages', [$images]);

        return parent::setImages($images);
    }

}
