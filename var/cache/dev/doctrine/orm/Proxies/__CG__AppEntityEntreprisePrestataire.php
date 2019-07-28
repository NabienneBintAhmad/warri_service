<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class EntreprisePrestataire extends \App\Entity\EntreprisePrestataire implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\EntreprisePrestataire' . "\0" . 'id', '' . "\0" . 'App\\Entity\\EntreprisePrestataire' . "\0" . 'Denomination', '' . "\0" . 'App\\Entity\\EntreprisePrestataire' . "\0" . 'Matricule', '' . "\0" . 'App\\Entity\\EntreprisePrestataire' . "\0" . 'Email', '' . "\0" . 'App\\Entity\\EntreprisePrestataire' . "\0" . 'Contacte', '' . "\0" . 'App\\Entity\\EntreprisePrestataire' . "\0" . 'Adress'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\EntreprisePrestataire' . "\0" . 'id', '' . "\0" . 'App\\Entity\\EntreprisePrestataire' . "\0" . 'Denomination', '' . "\0" . 'App\\Entity\\EntreprisePrestataire' . "\0" . 'Matricule', '' . "\0" . 'App\\Entity\\EntreprisePrestataire' . "\0" . 'Email', '' . "\0" . 'App\\Entity\\EntreprisePrestataire' . "\0" . 'Contacte', '' . "\0" . 'App\\Entity\\EntreprisePrestataire' . "\0" . 'Adress'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (EntreprisePrestataire $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
    public function getDenomination(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDenomination', []);

        return parent::getDenomination();
    }

    /**
     * {@inheritDoc}
     */
    public function setDenomination(string $Denomination): \App\Entity\EntreprisePrestataire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDenomination', [$Denomination]);

        return parent::setDenomination($Denomination);
    }

    /**
     * {@inheritDoc}
     */
    public function getMatricule(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatricule', []);

        return parent::getMatricule();
    }

    /**
     * {@inheritDoc}
     */
    public function setMatricule(string $Matricule): \App\Entity\EntreprisePrestataire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMatricule', [$Matricule]);

        return parent::setMatricule($Matricule);
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
    public function setEmail(string $Email): \App\Entity\EntreprisePrestataire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$Email]);

        return parent::setEmail($Email);
    }

    /**
     * {@inheritDoc}
     */
    public function getContacte(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContacte', []);

        return parent::getContacte();
    }

    /**
     * {@inheritDoc}
     */
    public function setContacte(int $Contacte): \App\Entity\EntreprisePrestataire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContacte', [$Contacte]);

        return parent::setContacte($Contacte);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdress(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdress', []);

        return parent::getAdress();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdress(string $Adress): \App\Entity\EntreprisePrestataire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdress', [$Adress]);

        return parent::setAdress($Adress);
    }

}
