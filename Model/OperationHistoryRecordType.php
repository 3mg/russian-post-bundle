<?php

namespace a3mg\RussianPostBundle\Model;

/**
 * Class representing OperationHistoryRecordType
 *
 *
 * XSD Type: OperationHistoryRecord
 */
class OperationHistoryRecordType
{

    /**
     * @property \a3mg\RussianPostBundle\Model\AddressParametersType $addressParameters
     */
    private $addressParameters = null;

    /**
     * @property \a3mg\RussianPostBundle\Model\FinanceParametersType $financeParameters
     */
    private $financeParameters = null;

    /**
     * @property \a3mg\RussianPostBundle\Model\ItemParametersType $itemParameters
     */
    private $itemParameters = null;

    /**
     * @property \a3mg\RussianPostBundle\Model\OperationParametersType
     * $operationParameters
     */
    private $operationParameters = null;

    /**
     * @property \a3mg\RussianPostBundle\Model\UserParametersType $userParameters
     */
    private $userParameters = null;

    /**
     * Gets as addressParameters
     *
     * @return \a3mg\RussianPostBundle\Model\AddressParametersType
     */
    public function getAddressParameters()
    {
        return $this->addressParameters;
    }

    /**
     * Sets a new addressParameters
     *
     * @param \a3mg\RussianPostBundle\Model\AddressParametersType $addressParameters
     * @return self
     */
    public function setAddressParameters(\a3mg\RussianPostBundle\Model\AddressParametersType $addressParameters)
    {
        $this->addressParameters = $addressParameters;
        return $this;
    }

    /**
     * Gets as financeParameters
     *
     * @return \a3mg\RussianPostBundle\Model\FinanceParametersType
     */
    public function getFinanceParameters()
    {
        return $this->financeParameters;
    }

    /**
     * Sets a new financeParameters
     *
     * @param \a3mg\RussianPostBundle\Model\FinanceParametersType $financeParameters
     * @return self
     */
    public function setFinanceParameters(\a3mg\RussianPostBundle\Model\FinanceParametersType $financeParameters)
    {
        $this->financeParameters = $financeParameters;
        return $this;
    }

    /**
     * Gets as itemParameters
     *
     * @return \a3mg\RussianPostBundle\Model\ItemParametersType
     */
    public function getItemParameters()
    {
        return $this->itemParameters;
    }

    /**
     * Sets a new itemParameters
     *
     * @param \a3mg\RussianPostBundle\Model\ItemParametersType $itemParameters
     * @return self
     */
    public function setItemParameters(\a3mg\RussianPostBundle\Model\ItemParametersType $itemParameters)
    {
        $this->itemParameters = $itemParameters;
        return $this;
    }

    /**
     * Gets as operationParameters
     *
     * @return \a3mg\RussianPostBundle\Model\OperationParametersType
     */
    public function getOperationParameters()
    {
        return $this->operationParameters;
    }

    /**
     * Sets a new operationParameters
     *
     * @param \a3mg\RussianPostBundle\Model\OperationParametersType
     * $operationParameters
     * @return self
     */
    public function setOperationParameters(\a3mg\RussianPostBundle\Model\OperationParametersType $operationParameters)
    {
        $this->operationParameters = $operationParameters;
        return $this;
    }

    /**
     * Gets as userParameters
     *
     * @return \a3mg\RussianPostBundle\Model\UserParametersType
     */
    public function getUserParameters()
    {
        return $this->userParameters;
    }

    /**
     * Sets a new userParameters
     *
     * @param \a3mg\RussianPostBundle\Model\UserParametersType $userParameters
     * @return self
     */
    public function setUserParameters(\a3mg\RussianPostBundle\Model\UserParametersType $userParameters)
    {
        $this->userParameters = $userParameters;
        return $this;
    }


}

