<?php

namespace Banners\Packages\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Packages
 *
 * @ORM\Table(name="banners_packages", indexes={@ORM\Index(name="zone_id_index", columns={"zone_id"}), @ORM\Index(name="option_id_index", columns={"option_id"}), @ORM\Index(name="created_by_index", columns={"created_by"}), @ORM\Index(name="modified_by_index", columns={"modified_by"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Packages extends \Kazist\Table\BaseTable
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
     * @var integer
     *
     * @ORM\Column(name="zone_id", type="integer", length=11, nullable=true)
     */
    protected $zone_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="option_id", type="integer", length=11, nullable=true)
     */
    protected $option_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="point_charged", type="integer", length=11, nullable=true)
     */
    protected $point_charged;

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
     * @return Packages
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
     * Set zone_id
     *
     * @param integer $zoneId
     * @return Packages
     */
    public function setZoneId($zoneId)
    {
        $this->zone_id = $zoneId;

        return $this;
    }

    /**
     * Get zone_id
     *
     * @return integer 
     */
    public function getZoneId()
    {
        return $this->zone_id;
    }

    /**
     * Set option_id
     *
     * @param integer $optionId
     * @return Packages
     */
    public function setOptionId($optionId)
    {
        $this->option_id = $optionId;

        return $this;
    }

    /**
     * Get option_id
     *
     * @return integer 
     */
    public function getOptionId()
    {
        return $this->option_id;
    }

    /**
     * Set point_charged
     *
     * @param integer $pointCharged
     * @return Packages
     */
    public function setPointCharged($pointCharged)
    {
        $this->point_charged = $pointCharged;

        return $this;
    }

    /**
     * Get point_charged
     *
     * @return integer 
     */
    public function getPointCharged()
    {
        return $this->point_charged;
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
