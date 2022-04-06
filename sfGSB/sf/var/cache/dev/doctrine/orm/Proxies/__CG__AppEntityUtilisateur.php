<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Utilisateur extends \App\Entity\Utilisateur implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'cp', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'dateembauche', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'laCategorie', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'lesUtiliSecondaires'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'cp', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'dateembauche', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'laCategorie', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'lesUtiliSecondaires'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Utilisateur $proxy) {
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
    public function getId(): ?string
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(?string $nom): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom(?string $prenom): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setId(?string $id): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse(?string $adresse): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getCp(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCp', []);

        return parent::getCp();
    }

    /**
     * {@inheritDoc}
     */
    public function setCp(?string $cp): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCp', [$cp]);

        return parent::setCp($cp);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', []);

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille(?string $ville): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', [$ville]);

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateembauche(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateembauche', []);

        return parent::getDateembauche();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateembauche(?\DateTimeInterface $dateembauche): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateembauche', [$dateembauche]);

        return parent::setDateembauche($dateembauche);
    }

    /**
     * {@inheritDoc}
     */
    public function getLaCategorie(): ?\App\Entity\categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLaCategorie', []);

        return parent::getLaCategorie();
    }

    /**
     * {@inheritDoc}
     */
    public function setLaCategorie(?\App\Entity\categorie $laCategorie): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLaCategorie', [$laCategorie]);

        return parent::setLaCategorie($laCategorie);
    }

    /**
     * {@inheritDoc}
     */
    public function getLesUtiliSecondaires(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLesUtiliSecondaires', []);

        return parent::getLesUtiliSecondaires();
    }

    /**
     * {@inheritDoc}
     */
    public function addLesUtiliSecondaire(\App\Entity\UtilisateurSecondaire $lesUtiliSecondaire): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLesUtiliSecondaire', [$lesUtiliSecondaire]);

        return parent::addLesUtiliSecondaire($lesUtiliSecondaire);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLesUtiliSecondaire(\App\Entity\UtilisateurSecondaire $lesUtiliSecondaire): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLesUtiliSecondaire', [$lesUtiliSecondaire]);

        return parent::removeLesUtiliSecondaire($lesUtiliSecondaire);
    }

}