<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Produit extends \App\Entity\Produit implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'prix', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'photo', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'disponible', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'dateLancement', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'typeProduit', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'paniers', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'ligneCommandes', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'stock'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'prix', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'photo', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'disponible', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'dateLancement', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'typeProduit', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'paniers', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'ligneCommandes', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'stock'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Produit $proxy) {
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
    public function getNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(string $nom): \App\Entity\Produit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', []);

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix(string $prix): \App\Entity\Produit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', [$prix]);

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoto(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoto', []);

        return parent::getPhoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoto(string $photo): \App\Entity\Produit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoto', [$photo]);

        return parent::setPhoto($photo);
    }

    /**
     * {@inheritDoc}
     */
    public function getDisponible(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisponible', []);

        return parent::getDisponible();
    }

    /**
     * {@inheritDoc}
     */
    public function setDisponible(bool $disponible): \App\Entity\Produit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisponible', [$disponible]);

        return parent::setDisponible($disponible);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateLancement(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateLancement', []);

        return parent::getDateLancement();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateLancement(\DateTimeInterface $dateLancement): \App\Entity\Produit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateLancement', [$dateLancement]);

        return parent::setDateLancement($dateLancement);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeProduit(): ?\App\Entity\TypeProduit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeProduit', []);

        return parent::getTypeProduit();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeProduit(?\App\Entity\TypeProduit $typeProduit): \App\Entity\Produit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeProduit', [$typeProduit]);

        return parent::setTypeProduit($typeProduit);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaniers(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaniers', []);

        return parent::getPaniers();
    }

    /**
     * {@inheritDoc}
     */
    public function addPanier(\App\Entity\Panier $panier): \App\Entity\Produit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPanier', [$panier]);

        return parent::addPanier($panier);
    }

    /**
     * {@inheritDoc}
     */
    public function removePanier(\App\Entity\Panier $panier): \App\Entity\Produit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePanier', [$panier]);

        return parent::removePanier($panier);
    }

    /**
     * {@inheritDoc}
     */
    public function getLigneCommandes(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLigneCommandes', []);

        return parent::getLigneCommandes();
    }

    /**
     * {@inheritDoc}
     */
    public function addLigneCommande(\App\Entity\LigneCommande $ligneCommande): \App\Entity\Produit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLigneCommande', [$ligneCommande]);

        return parent::addLigneCommande($ligneCommande);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLigneCommande(\App\Entity\LigneCommande $ligneCommande): \App\Entity\Produit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLigneCommande', [$ligneCommande]);

        return parent::removeLigneCommande($ligneCommande);
    }

    /**
     * {@inheritDoc}
     */
    public function getStock(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStock', []);

        return parent::getStock();
    }

    /**
     * {@inheritDoc}
     */
    public function setStock(int $stock): \App\Entity\Produit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStock', [$stock]);

        return parent::setStock($stock);
    }

}
