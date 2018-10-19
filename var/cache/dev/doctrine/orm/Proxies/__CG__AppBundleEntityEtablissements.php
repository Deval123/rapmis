<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Etablissements extends \AppBundle\Entity\Etablissements implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Etablissements' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Etablissements' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Etablissements' . "\0" . 'sigle', '' . "\0" . 'AppBundle\\Entity\\Etablissements' . "\0" . 'dateCreation', '' . "\0" . 'AppBundle\\Entity\\Etablissements' . "\0" . 'description', '' . "\0" . 'AppBundle\\Entity\\Etablissements' . "\0" . 'city', '' . "\0" . 'AppBundle\\Entity\\Etablissements' . "\0" . 'sectioneduc', '' . "\0" . 'AppBundle\\Entity\\Etablissements' . "\0" . 'adresses', '' . "\0" . 'AppBundle\\Entity\\Etablissements' . "\0" . 'type_etablissements', '' . "\0" . 'AppBundle\\Entity\\Etablissements' . "\0" . 'filename', 'file', '' . "\0" . 'AppBundle\\Entity\\Etablissements' . "\0" . 'UpdatedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Etablissements' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Etablissements' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Etablissements' . "\0" . 'sigle', '' . "\0" . 'AppBundle\\Entity\\Etablissements' . "\0" . 'dateCreation', '' . "\0" . 'AppBundle\\Entity\\Etablissements' . "\0" . 'description', '' . "\0" . 'AppBundle\\Entity\\Etablissements' . "\0" . 'city', '' . "\0" . 'AppBundle\\Entity\\Etablissements' . "\0" . 'sectioneduc', '' . "\0" . 'AppBundle\\Entity\\Etablissements' . "\0" . 'adresses', '' . "\0" . 'AppBundle\\Entity\\Etablissements' . "\0" . 'type_etablissements', '' . "\0" . 'AppBundle\\Entity\\Etablissements' . "\0" . 'filename', 'file', '' . "\0" . 'AppBundle\\Entity\\Etablissements' . "\0" . 'UpdatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Etablissements $proxy) {
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
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($UpdatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$UpdatedAt]);

        return parent::setUpdatedAt($UpdatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFile', []);

        return parent::getFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setFile($file)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFile', [$file]);

        return parent::setFile($file);
    }

    /**
     * {@inheritDoc}
     */
    public function setFilename($filename)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFilename', [$filename]);

        return parent::setFilename($filename);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilename()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFilename', []);

        return parent::getFilename();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
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
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setSigle($sigle = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSigle', [$sigle]);

        return parent::setSigle($sigle);
    }

    /**
     * {@inheritDoc}
     */
    public function getSigle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSigle', []);

        return parent::getSigle();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreation($dateCreation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreation', [$dateCreation]);

        return parent::setDateCreation($dateCreation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreation', []);

        return parent::getDateCreation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity($city)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getSectioneduc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSectioneduc', []);

        return parent::getSectioneduc();
    }

    /**
     * {@inheritDoc}
     */
    public function setSectioneduc($sectioneduc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSectioneduc', [$sectioneduc]);

        return parent::setSectioneduc($sectioneduc);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresses()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresses', []);

        return parent::getAdresses();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresses($adresses)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresses', [$adresses]);

        return parent::setAdresses($adresses);
    }

    /**
     * {@inheritDoc}
     */
    public function getType_Etablissements()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType_Etablissements', []);

        return parent::getType_Etablissements();
    }

    /**
     * {@inheritDoc}
     */
    public function setType_Etablissements($type_etablissements)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType_Etablissements', [$type_etablissements]);

        return parent::setType_Etablissements($type_etablissements);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function addSectioneduc(\AppBundle\Entity\SectionEduc $sectioneduc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSectioneduc', [$sectioneduc]);

        return parent::addSectioneduc($sectioneduc);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSectioneduc(\AppBundle\Entity\SectionEduc $sectioneduc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSectioneduc', [$sectioneduc]);

        return parent::removeSectioneduc($sectioneduc);
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeEtablissements(\AppBundle\Entity\Type_etablissements $typeEtablissements)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeEtablissements', [$typeEtablissements]);

        return parent::setTypeEtablissements($typeEtablissements);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeEtablissements()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeEtablissements', []);

        return parent::getTypeEtablissements();
    }

}