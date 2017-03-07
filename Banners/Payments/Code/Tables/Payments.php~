<?php

namespace Banners\Banners\Payments\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payments
 *
 * @ORM\Table(name="banners_banners_payments", indexes={@ORM\Index(name="banner_id_index", columns={"banner_id"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Payments extends \Kazist\Table\BaseTable
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
     * @var integer
     *
     * @ORM\Column(name="banner_id", type="integer", length=11, nullable=false)
     */
    protected $banner_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="points", type="integer", length=11, nullable=false)
     */
    protected $points;

    /**
     * @var integer
     *
     * @ORM\Column(name="payment_amount", type="integer", length=11, nullable=true)
     */
    protected $payment_amount;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_stage", type="string", length=255, nullable=true)
     */
    protected $payment_stage;

    /**
     * @var integer
     *
     * @ORM\Column(name="payment_status", type="integer", length=11, nullable=true)
     */
    protected $payment_status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="payment_expiry", type="datetime", nullable=true)
     */
    protected $payment_expiry;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="payment_date", type="datetime", nullable=true)
     */
    protected $payment_date;

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
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set banner_id
     *
     * @param integer $bannerId
     * @return Payments
     */
    public function setBannerId($bannerId)
    {
        $this->banner_id = $bannerId;

        return $this;
    }

    /**
     * Get banner_id
     *
     * @return integer 
     */
    public function getBannerId()
    {
        return $this->banner_id;
    }

    /**
     * Set points
     *
     * @param integer $points
     * @return Payments
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
     * Set payment_amount
     *
     * @param integer $paymentAmount
     * @return Payments
     */
    public function setPaymentAmount($paymentAmount)
    {
        $this->payment_amount = $paymentAmount;

        return $this;
    }

    /**
     * Get payment_amount
     *
     * @return integer 
     */
    public function getPaymentAmount()
    {
        return $this->payment_amount;
    }

    /**
     * Set payment_stage
     *
     * @param string $paymentStage
     * @return Payments
     */
    public function setPaymentStage($paymentStage)
    {
        $this->payment_stage = $paymentStage;

        return $this;
    }

    /**
     * Get payment_stage
     *
     * @return string 
     */
    public function getPaymentStage()
    {
        return $this->payment_stage;
    }

    /**
     * Set payment_status
     *
     * @param integer $paymentStatus
     * @return Payments
     */
    public function setPaymentStatus($paymentStatus)
    {
        $this->payment_status = $paymentStatus;

        return $this;
    }

    /**
     * Get payment_status
     *
     * @return integer 
     */
    public function getPaymentStatus()
    {
        return $this->payment_status;
    }

    /**
     * Set payment_expiry
     *
     * @param \DateTime $paymentExpiry
     * @return Payments
     */
    public function setPaymentExpiry($paymentExpiry)
    {
        $this->payment_expiry = $paymentExpiry;

        return $this;
    }

    /**
     * Get payment_expiry
     *
     * @return \DateTime 
     */
    public function getPaymentExpiry()
    {
        return $this->payment_expiry;
    }

    /**
     * Set payment_date
     *
     * @param \DateTime $paymentDate
     * @return Payments
     */
    public function setPaymentDate($paymentDate)
    {
        $this->payment_date = $paymentDate;

        return $this;
    }

    /**
     * Get payment_date
     *
     * @return \DateTime 
     */
    public function getPaymentDate()
    {
        return $this->payment_date;
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
