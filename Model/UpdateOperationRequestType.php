<?php

namespace a3mg\RussianPostBundle\Model;

/**
 * Class representing UpdateOperationRequestType
 *
 *
 * XSD Type: UpdateOperationRequest
 */
class UpdateOperationRequestType
{

    /**
     * @property string $requestType
     */
    private $requestType = null;

    /**
     * @property \a3mg\RussianPostBundle\Model\OperationHistoryRecordType
     * $sourceOperation
     */
    private $sourceOperation = null;

    /**
     * @property \a3mg\RussianPostBundle\Model\OperationHistoryRecordType
     * $targetOperation
     */
    private $targetOperation = null;

    /**
     * @property string $reasonDescription
     */
    private $reasonDescription = null;

    /**
     * @property integer $initiatorDepartment
     */
    private $initiatorDepartment = null;

    /**
     * @property string $executorIP
     */
    private $executorIP = null;

    /**
     * Gets as requestType
     *
     * @return string
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * Sets a new requestType
     *
     * @param string $requestType
     * @return self
     */
    public function setRequestType($requestType)
    {
        $this->requestType = $requestType;
        return $this;
    }

    /**
     * Gets as sourceOperation
     *
     * @return \a3mg\RussianPostBundle\Model\OperationHistoryRecordType
     */
    public function getSourceOperation()
    {
        return $this->sourceOperation;
    }

    /**
     * Sets a new sourceOperation
     *
     * @param \a3mg\RussianPostBundle\Model\OperationHistoryRecordType $sourceOperation
     * @return self
     */
    public function setSourceOperation(\a3mg\RussianPostBundle\Model\OperationHistoryRecordType $sourceOperation)
    {
        $this->sourceOperation = $sourceOperation;
        return $this;
    }

    /**
     * Gets as targetOperation
     *
     * @return \a3mg\RussianPostBundle\Model\OperationHistoryRecordType
     */
    public function getTargetOperation()
    {
        return $this->targetOperation;
    }

    /**
     * Sets a new targetOperation
     *
     * @param \a3mg\RussianPostBundle\Model\OperationHistoryRecordType $targetOperation
     * @return self
     */
    public function setTargetOperation(\a3mg\RussianPostBundle\Model\OperationHistoryRecordType $targetOperation)
    {
        $this->targetOperation = $targetOperation;
        return $this;
    }

    /**
     * Gets as reasonDescription
     *
     * @return string
     */
    public function getReasonDescription()
    {
        return $this->reasonDescription;
    }

    /**
     * Sets a new reasonDescription
     *
     * @param string $reasonDescription
     * @return self
     */
    public function setReasonDescription($reasonDescription)
    {
        $this->reasonDescription = $reasonDescription;
        return $this;
    }

    /**
     * Gets as initiatorDepartment
     *
     * @return integer
     */
    public function getInitiatorDepartment()
    {
        return $this->initiatorDepartment;
    }

    /**
     * Sets a new initiatorDepartment
     *
     * @param integer $initiatorDepartment
     * @return self
     */
    public function setInitiatorDepartment($initiatorDepartment)
    {
        $this->initiatorDepartment = $initiatorDepartment;
        return $this;
    }

    /**
     * Gets as executorIP
     *
     * @return string
     */
    public function getExecutorIP()
    {
        return $this->executorIP;
    }

    /**
     * Sets a new executorIP
     *
     * @param string $executorIP
     * @return self
     */
    public function setExecutorIP($executorIP)
    {
        $this->executorIP = $executorIP;
        return $this;
    }


}

