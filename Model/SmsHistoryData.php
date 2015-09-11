<?php

namespace a3mg\RussianPostBundle\Model;

/**
 * Class representing SmsHistoryData
 */
class SmsHistoryData
{

    /**
     * @property \a3mg\RussianPostBundle\Model\SmsHistoryRecordType[] $historyRecord
     */
    private $historyRecord = null;

    /**
     * Adds as historyRecord
     *
     * @return self
     * @param \a3mg\RussianPostBundle\Model\SmsHistoryRecordType $historyRecord
     */
    public function addToHistoryRecord(\a3mg\RussianPostBundle\Model\SmsHistoryRecordType $historyRecord)
    {
        $this->historyRecord[] = $historyRecord;
        return $this;
    }

    /**
     * isset historyRecord
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHistoryRecord($index)
    {
        return isset($this->historyRecord[$index]);
    }

    /**
     * unset historyRecord
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHistoryRecord($index)
    {
        unset($this->historyRecord[$index]);
    }

    /**
     * Gets as historyRecord
     *
     * @return \a3mg\RussianPostBundle\Model\SmsHistoryRecordType[]
     */
    public function getHistoryRecord()
    {
        return $this->historyRecord;
    }

    /**
     * Sets a new historyRecord
     *
     * @param \a3mg\RussianPostBundle\Model\SmsHistoryRecordType[] $historyRecord
     * @return self
     */
    public function setHistoryRecord(array $historyRecord)
    {
        $this->historyRecord = $historyRecord;
        return $this;
    }


}

