<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'vehiculos', '' . "\0" . 'App\\Entity\\User' . "\0" . 'nombre', '' . "\0" . 'App\\Entity\\User' . "\0" . 'primerApellido', '' . "\0" . 'App\\Entity\\User' . "\0" . 'segundoApellido', '' . "\0" . 'App\\Entity\\User' . "\0" . 'nick', '' . "\0" . 'App\\Entity\\User' . "\0" . 'localidad', '' . "\0" . 'App\\Entity\\User' . "\0" . 'provincia', '' . "\0" . 'App\\Entity\\User' . "\0" . 'telefonoMovil', '' . "\0" . 'App\\Entity\\User' . "\0" . 'avatar'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'vehiculos', '' . "\0" . 'App\\Entity\\User' . "\0" . 'nombre', '' . "\0" . 'App\\Entity\\User' . "\0" . 'primerApellido', '' . "\0" . 'App\\Entity\\User' . "\0" . 'segundoApellido', '' . "\0" . 'App\\Entity\\User' . "\0" . 'nick', '' . "\0" . 'App\\Entity\\User' . "\0" . 'localidad', '' . "\0" . 'App\\Entity\\User' . "\0" . 'provincia', '' . "\0" . 'App\\Entity\\User' . "\0" . 'telefonoMovil', '' . "\0" . 'App\\Entity\\User' . "\0" . 'avatar'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getVehiculos(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVehiculos', []);

        return parent::getVehiculos();
    }

    /**
     * {@inheritDoc}
     */
    public function addVehiculo(\App\Entity\Vehiculo $vehiculo): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addVehiculo', [$vehiculo]);

        return parent::addVehiculo($vehiculo);
    }

    /**
     * {@inheritDoc}
     */
    public function removeVehiculo(\App\Entity\Vehiculo $vehiculo): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeVehiculo', [$vehiculo]);

        return parent::removeVehiculo($vehiculo);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre(?string $nombre): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrimerApellido(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrimerApellido', []);

        return parent::getPrimerApellido();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrimerApellido(?string $primerApellido): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrimerApellido', [$primerApellido]);

        return parent::setPrimerApellido($primerApellido);
    }

    /**
     * {@inheritDoc}
     */
    public function getSegundoApellido(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSegundoApellido', []);

        return parent::getSegundoApellido();
    }

    /**
     * {@inheritDoc}
     */
    public function setSegundoApellido(?string $segundoApellido): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSegundoApellido', [$segundoApellido]);

        return parent::setSegundoApellido($segundoApellido);
    }

    /**
     * {@inheritDoc}
     */
    public function getNick(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNick', []);

        return parent::getNick();
    }

    /**
     * {@inheritDoc}
     */
    public function setNick(?string $nick): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNick', [$nick]);

        return parent::setNick($nick);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocalidad(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocalidad', []);

        return parent::getLocalidad();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocalidad(?string $localidad): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocalidad', [$localidad]);

        return parent::setLocalidad($localidad);
    }

    /**
     * {@inheritDoc}
     */
    public function getProvincia(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProvincia', []);

        return parent::getProvincia();
    }

    /**
     * {@inheritDoc}
     */
    public function setProvincia(?string $provincia): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProvincia', [$provincia]);

        return parent::setProvincia($provincia);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefonoMovil(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefonoMovil', []);

        return parent::getTelefonoMovil();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefonoMovil(?int $telefonoMovil): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefonoMovil', [$telefonoMovil]);

        return parent::setTelefonoMovil($telefonoMovil);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvatar(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvatar', []);

        return parent::getAvatar();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvatar(?string $avatar): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvatar', [$avatar]);

        return parent::setAvatar($avatar);
    }

}
