<?php

namespace a3mg\RussianPostBundle\Model;

/**
 * Class representing AuthorizationHeader
 */
class AuthorizationHeader
{

    /**
     * @property boolean $mustUnderstand
     */
    private $mustUnderstand = null;

    /**
     * @property string $login
     */
    private $login = null;

    /**
     * @property string $password
     */
    private $password = null;

    /**
     * Gets as mustUnderstand
     *
     * @return boolean
     */
    public function getMustUnderstand()
    {
        return $this->mustUnderstand;
    }

    /**
     * Sets a new mustUnderstand
     *
     * @param boolean $mustUnderstand
     * @return self
     */
    public function setMustUnderstand($mustUnderstand)
    {
        $this->mustUnderstand = $mustUnderstand;
        return $this;
    }

    /**
     * Gets as login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Sets a new login
     *
     * @param string $login
     * @return self
     */
    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    }

    /**
     * Gets as password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets a new password
     *
     * @param string $password
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }


}

