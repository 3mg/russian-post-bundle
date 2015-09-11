<?php

namespace a3mg\RussianPostBundle\Model;

/**
 * Class representing SmsHistoryRecordType
 *
 *
 * XSD Type: SmsHistoryRecord
 */
class SmsHistoryRecordType
{

    /**
     * @property integer $id
     */
    private $id = null;

    /**
     * @property string $number
     */
    private $number = null;

    /**
     * @property integer $notificationTypeID
     */
    private $notificationTypeID = null;

    /**
     * @property string $notificationTypeName
     */
    private $notificationTypeName = null;

    /**
     * @property integer $notificationStatusID
     */
    private $notificationStatusID = null;

    /**
     * @property string $notificationStatusName
     */
    private $notificationStatusName = null;

    /**
     * @property \DateTime $notificationStatusDate
     */
    private $notificationStatusDate = null;

    /**
     * @property integer $sendedID
     */
    private $sendedID = null;

    /**
     * @property string $sourceOperation
     */
    private $sourceOperation = null;

    /**
     * Gets as id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param integer $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as notificationTypeID
     *
     * @return integer
     */
    public function getNotificationTypeID()
    {
        return $this->notificationTypeID;
    }

    /**
     * Sets a new notificationTypeID
     *
     * @param integer $notificationTypeID
     * @return self
     */
    public function setNotificationTypeID($notificationTypeID)
    {
        $this->notificationTypeID = $notificationTypeID;
        return $this;
    }

    /**
     * Gets as notificationTypeName
     *
     * @return string
     */
    public function getNotificationTypeName()
    {
        return $this->notificationTypeName;
    }

    /**
     * Sets a new notificationTypeName
     *
     * @param string $notificationTypeName
     * @return self
     */
    public function setNotificationTypeName($notificationTypeName)
    {
        $this->notificationTypeName = $notificationTypeName;
        return $this;
    }

    /**
     * Gets as notificationStatusID
     *
     * @return integer
     */
    public function getNotificationStatusID()
    {
        return $this->notificationStatusID;
    }

    /**
     * Sets a new notificationStatusID
     *
     * @param integer $notificationStatusID
     * @return self
     */
    public function setNotificationStatusID($notificationStatusID)
    {
        $this->notificationStatusID = $notificationStatusID;
        return $this;
    }

    /**
     * Gets as notificationStatusName
     *
     * @return string
     */
    public function getNotificationStatusName()
    {
        return $this->notificationStatusName;
    }

    /**
     * Sets a new notificationStatusName
     *
     * @param string $notificationStatusName
     * @return self
     */
    public function setNotificationStatusName($notificationStatusName)
    {
        $this->notificationStatusName = $notificationStatusName;
        return $this;
    }

    /**
     * Gets as notificationStatusDate
     *
     * @return \DateTime
     */
    public function getNotificationStatusDate()
    {
        return $this->notificationStatusDate;
    }

    /**
     * Sets a new notificationStatusDate
     *
     * @param \DateTime $notificationStatusDate
     * @return self
     */
    public function setNotificationStatusDate(\DateTime $notificationStatusDate)
    {
        $this->notificationStatusDate = $notificationStatusDate;
        return $this;
    }

    /**
     * Gets as sendedID
     *
     * @return integer
     */
    public function getSendedID()
    {
        return $this->sendedID;
    }

    /**
     * Sets a new sendedID
     *
     * @param integer $sendedID
     * @return self
     */
    public function setSendedID($sendedID)
    {
        $this->sendedID = $sendedID;
        return $this;
    }

    /**
     * Gets as sourceOperation
     *
     * @return string
     */
    public function getSourceOperation()
    {
        return $this->sourceOperation;
    }

    /**
     * Sets a new sourceOperation
     *
     * @param string $sourceOperation
     * @return self
     */
    public function setSourceOperation($sourceOperation)
    {
        $this->sourceOperation = $sourceOperation;
        return $this;
    }


}

