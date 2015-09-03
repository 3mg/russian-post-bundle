<?php

namespace a3mg\RussianPostBundle\Model;

/**
 * Class representing UserParametersType
 *
 *
 * XSD Type: UserParameters
 */
class UserParametersType
{

    /**
     * @property \a3mg\RussianPostBundle\Model\Rtm02ParameterType $sendCtg
     */
    private $sendCtg = null;

    /**
     * @property string $sndr
     */
    private $sndr = null;

    /**
     * @property string $rcpn
     */
    private $rcpn = null;

    /**
     * Gets as sendCtg
     *
     * @return \a3mg\RussianPostBundle\Model\Rtm02ParameterType
     */
    public function getSendCtg()
    {
        return $this->sendCtg;
    }

    /**
     * Sets a new sendCtg
     *
     * @param \a3mg\RussianPostBundle\Model\Rtm02ParameterType $sendCtg
     * @return self
     */
    public function setSendCtg(\a3mg\RussianPostBundle\Model\Rtm02ParameterType $sendCtg)
    {
        $this->sendCtg = $sendCtg;
        return $this;
    }

    /**
     * Gets as sndr
     *
     * @return string
     */
    public function getSndr()
    {
        return $this->sndr;
    }

    /**
     * Sets a new sndr
     *
     * @param string $sndr
     * @return self
     */
    public function setSndr($sndr)
    {
        $this->sndr = $sndr;
        return $this;
    }

    /**
     * Gets as rcpn
     *
     * @return string
     */
    public function getRcpn()
    {
        return $this->rcpn;
    }

    /**
     * Sets a new rcpn
     *
     * @param string $rcpn
     * @return self
     */
    public function setRcpn($rcpn)
    {
        $this->rcpn = $rcpn;
        return $this;
    }


}

