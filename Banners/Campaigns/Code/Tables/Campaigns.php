<?php

namespace Banners\Banners\Campaigns\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Campaigns
 *
 * @ORM\Table(name="banners_banners_campaigns", indexes={@ORM\Index(name="banner_id_index", columns={"banner_id"}), @ORM\Index(name="campaign_id_index", columns={"campaign_id"}), @ORM\Index(name="created_by_index", columns={"created_by"}), @ORM\Index(name="modified_by_index", columns={"modified_by"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Campaigns extends \Kazist\Table\BaseTable {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="banner_id", type="integer", length=11, nullable=false)
     */
    protected $banner_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="campaign_id", type="integer", length=11, nullable=false)
     */
    protected $campaign_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="integer", length=11, nullable=false)
     */
    protected $created_by;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false)
     */
    protected $date_created;

    /**
     * @var integer
     *
     * @ORM\Column(name="modified_by", type="integer", length=11, nullable=false)
     */
    protected $modified_by;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=false)
     */
    protected $date_modified;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set banner_id
     *
     * @param integer $bannerId
     * @return Campaigns
     */
    public function setBannerId($bannerId) {
        $this->banner_id = $bannerId;

        return $this;
    }

    /**
     * Get banner_id
     *
     * @return integer 
     */
    public function getBannerId() {
        return $this->banner_id;
    }

    /**
     * Set campaign_id
     *
     * @param integer $campaignId
     * @return Campaigns
     */
    public function setCampaignId($campaignId) {
        $this->campaign_id = $campaignId;

        return $this;
    }

    /**
     * Get campaign_id
     *
     * @return integer 
     */
    public function getCampaignId() {
        return $this->campaign_id;
    }

    /**
     * Get created_by
     *
     * @return integer 
     */
    public function getCreatedBy() {
        return $this->created_by;
    }

    /**
     * Get date_created
     *
     * @return \DateTime 
     */
    public function getDateCreated() {
        return $this->date_created;
    }

    /**
     * Get modified_by
     *
     * @return integer 
     */
    public function getModifiedBy() {
        return $this->modified_by;
    }

    /**
     * Get date_modified
     *
     * @return \DateTime 
     */
    public function getDateModified() {
        return $this->date_modified;
    }

}
