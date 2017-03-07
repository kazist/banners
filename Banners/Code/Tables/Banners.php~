<?php

namespace Banners\Banners\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banners
 *
 * @ORM\Table(name="banners_banners", indexes={@ORM\Index(name="package_id_index", columns={"package_id"}), @ORM\Index(name="created_by_index", columns={"created_by"}), @ORM\Index(name="modified_by_index", columns={"modified_by"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Banners extends \Kazist\Table\BaseTable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    protected $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    protected $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="image", type="integer", length=11, nullable=true)
     */
    protected $image;

    /**
     * @var string
     *
     * @ORM\Column(name="script", type="text", nullable=true)
     */
    protected $script;

    /**
     * @var string
     *
     * @ORM\Column(name="target_url", type="string", length=255, nullable=true)
     */
    protected $target_url;

    /**
     * @var string
     *
     * @ORM\Column(name="days", type="text", nullable=true)
     */
    protected $days;

    /**
     * @var string
     *
     * @ORM\Column(name="actions", type="string", length=255, nullable=true)
     */
    protected $actions;

    /**
     * @var integer
     *
     * @ORM\Column(name="points", type="integer", length=11, nullable=true)
     */
    protected $points;

    /**
     * @var integer
     *
     * @ORM\Column(name="package_id", type="integer", length=11, nullable=true)
     */
    protected $package_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="published", type="integer", length=11, nullable=true)
     */
    protected $published;

    /**
     * @var integer
     *
     * @ORM\Column(name="featured", type="integer", length=11, nullable=true)
     */
    protected $featured;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="integer", length=11, nullable=true)
     */
    protected $created_by;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=true)
     */
    protected $date_created;

    /**
     * @var integer
     *
     * @ORM\Column(name="modified_by", type="integer", length=11, nullable=true)
     */
    protected $modified_by;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=true)
     */
    protected $date_modified;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Banners
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Banners
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
     * @param integer $image
     * @return Banners
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return integer 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set script
     *
     * @param string $script
     * @return Banners
     */
    public function setScript($script)
    {
        $this->script = $script;

        return $this;
    }

    /**
     * Get script
     *
     * @return string 
     */
    public function getScript()
    {
        return $this->script;
    }

    /**
     * Set target_url
     *
     * @param string $targetUrl
     * @return Banners
     */
    public function setTargetUrl($targetUrl)
    {
        $this->target_url = $targetUrl;

        return $this;
    }

    /**
     * Get target_url
     *
     * @return string 
     */
    public function getTargetUrl()
    {
        return $this->target_url;
    }

    /**
     * Set days
     *
     * @param string $days
     * @return Banners
     */
    public function setDays($days)
    {
        $this->days = $days;

        return $this;
    }

    /**
     * Get days
     *
     * @return string 
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * Set actions
     *
     * @param string $actions
     * @return Banners
     */
    public function setActions($actions)
    {
        $this->actions = $actions;

        return $this;
    }

    /**
     * Get actions
     *
     * @return string 
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * Set points
     *
     * @param integer $points
     * @return Banners
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return integer 
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set package_id
     *
     * @param integer $packageId
     * @return Banners
     */
    public function setPackageId($packageId)
    {
        $this->package_id = $packageId;

        return $this;
    }

    /**
     * Get package_id
     *
     * @return integer 
     */
    public function getPackageId()
    {
        return $this->package_id;
    }

    /**
     * Set published
     *
     * @param integer $published
     * @return Banners
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return integer 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set featured
     *
     * @param integer $featured
     * @return Banners
     */
    public function setFeatured($featured)
    {
        $this->featured = $featured;

        return $this;
    }

    /**
     * Get featured
     *
     * @return integer 
     */
    public function getFeatured()
    {
        return $this->featured;
    }

    /**
     * Get created_by
     *
     * @return integer 
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * Get date_created
     *
     * @return \DateTime 
     */
    public function getDateCreated()
    {
        return $this->date_created;
    }

    /**
     * Get modified_by
     *
     * @return integer 
     */
    public function getModifiedBy()
    {
        return $this->modified_by;
    }

    /**
     * Get date_modified
     *
     * @return \DateTime 
     */
    public function getDateModified()
    {
        return $this->date_modified;
    }
    /**
     * @ORM\PreUpdate
     */
    public function onPreUpdate()
    {
        // Add your code here
    }
}
