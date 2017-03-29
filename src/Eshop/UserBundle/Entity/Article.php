<?php

namespace Eshop\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="Eshop\UserBundle\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomArticle", type="string", length=255)
     */
    private $nomArticle;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;

    /**
     * @var float
     *
     * @ORM\Column(name="promotion", type="float", nullable=true)
     */
    private $promotion;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;
    /**
     * @ORM\OneToOne(targetEntity="Eshop\UserBundle\Entity\imageArticle", cascade={"persist"})
     */
    protected $image;
    /**
     * @ORM\ManyToOne(targetEntity="Eshop\UserBundle\Entity\SousCategorie", cascade={"persist"})
     */
    protected $sousCategorie;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomArticle
     *
     * @param string $nomArticle
     *
     * @return Article
     */
    public function setNomArticle($nomArticle)
    {
        $this->nomArticle = $nomArticle;

        return $this;
    }

    /**
     * Get nomArticle
     *
     * @return string
     */
    public function getNomArticle()
    {
        return $this->nomArticle;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Article
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Article
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set promotion
     *
     * @param float $promotion
     *
     * @return Article
     */
    public function setPromotion($promotion)
    {
        $this->promotion = $promotion;

        return $this;
    }

    /**
     * Get promotion
     *
     * @return float
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Article
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set image
     *
     * @param \Eshop\UserBundle\Entity\ImageArticle $image
     *
     * @return Article
     */
    public function setImage(\Eshop\UserBundle\Entity\imageArticle $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Eshop\UserBundle\Entity\ImageArticle
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set sousCategorie
     *
     * @param \Eshop\UserBundle\Entity\SousCategorie $sousCategorie
     *
     * @return Article
     */
    public function setSousCategorie(\Eshop\UserBundle\Entity\SousCategorie $sousCategorie = null)
    {
        $this->sousCategorie = $sousCategorie;

        return $this;
    }

    /**
     * Get sousCategorie
     *
     * @return \Eshop\UserBundle\Entity\SousCategorie
     */
    public function getSousCategorie()
    {
        return $this->sousCategorie;
    }
}
