<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * ExtDeviceLoginConfirmGetResponse message
 */
class ExtDeviceLoginConfirmGetResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const OKRET = 2;
    const ERRORRET = 3;
    const EXPIREDRET = 4;
    const DEVICENAMESTR = 5;
    const LOGINCLIENTVERSION = 6;
    const FUNCCTRL = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => false,
            'type' => '\BaseResponse'
        ),
        self::OKRET => array(
            'name' => 'okret',
            'required' => false,
            'type' => '\ExtDeviceLoginConfirmOKRet'
        ),
        self::ERRORRET => array(
            'name' => 'errorRet',
            'required' => false,
            'type' => '\ExtDeviceLoginConfirmErrorRet'
        ),
        self::EXPIREDRET => array(
            'name' => 'expiredRet',
            'required' => false,
            'type' => '\ExtDeviceLoginConfirmExpiredRet'
        ),
        self::DEVICENAMESTR => array(
            'name' => 'deviceNameStr',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LOGINCLIENTVERSION => array(
            'default' => 0,
            'name' => 'loginClientVersion',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FUNCCTRL => array(
            'default' => 0,
            'name' => 'funcCtrl',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::BASERESPONSE] = null;
        $this->values[self::OKRET] = null;
        $this->values[self::ERRORRET] = null;
        $this->values[self::EXPIREDRET] = null;
        $this->values[self::DEVICENAMESTR] = null;
        $this->values[self::LOGINCLIENTVERSION] = self::$fields[self::LOGINCLIENTVERSION]['default'];
        $this->values[self::FUNCCTRL] = self::$fields[self::FUNCCTRL]['default'];
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'baseResponse' property
     *
     * @param \BaseResponse $value Property value
     *
     * @return null
     */
    public function setBaseResponse(\BaseResponse $value=null)
    {
        return $this->set(self::BASERESPONSE, $value);
    }

    /**
     * Returns value of 'baseResponse' property
     *
     * @return \BaseResponse
     */
    public function getBaseResponse()
    {
        return $this->get(self::BASERESPONSE);
    }

    /**
     * Returns true if 'baseResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseResponse()
    {
        return $this->get(self::BASERESPONSE) !== null;
    }

    /**
     * Sets value of 'okret' property
     *
     * @param \ExtDeviceLoginConfirmOKRet $value Property value
     *
     * @return null
     */
    public function setOkret(\ExtDeviceLoginConfirmOKRet $value=null)
    {
        return $this->set(self::OKRET, $value);
    }

    /**
     * Returns value of 'okret' property
     *
     * @return \ExtDeviceLoginConfirmOKRet
     */
    public function getOkret()
    {
        return $this->get(self::OKRET);
    }

    /**
     * Returns true if 'okret' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOkret()
    {
        return $this->get(self::OKRET) !== null;
    }

    /**
     * Sets value of 'errorRet' property
     *
     * @param \ExtDeviceLoginConfirmErrorRet $value Property value
     *
     * @return null
     */
    public function setErrorRet(\ExtDeviceLoginConfirmErrorRet $value=null)
    {
        return $this->set(self::ERRORRET, $value);
    }

    /**
     * Returns value of 'errorRet' property
     *
     * @return \ExtDeviceLoginConfirmErrorRet
     */
    public function getErrorRet()
    {
        return $this->get(self::ERRORRET);
    }

    /**
     * Returns true if 'errorRet' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasErrorRet()
    {
        return $this->get(self::ERRORRET) !== null;
    }

    /**
     * Sets value of 'expiredRet' property
     *
     * @param \ExtDeviceLoginConfirmExpiredRet $value Property value
     *
     * @return null
     */
    public function setExpiredRet(\ExtDeviceLoginConfirmExpiredRet $value=null)
    {
        return $this->set(self::EXPIREDRET, $value);
    }

    /**
     * Returns value of 'expiredRet' property
     *
     * @return \ExtDeviceLoginConfirmExpiredRet
     */
    public function getExpiredRet()
    {
        return $this->get(self::EXPIREDRET);
    }

    /**
     * Returns true if 'expiredRet' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExpiredRet()
    {
        return $this->get(self::EXPIREDRET) !== null;
    }

    /**
     * Sets value of 'deviceNameStr' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceNameStr($value)
    {
        return $this->set(self::DEVICENAMESTR, $value);
    }

    /**
     * Returns value of 'deviceNameStr' property
     *
     * @return string
     */
    public function getDeviceNameStr()
    {
        $value = $this->get(self::DEVICENAMESTR);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'deviceNameStr' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeviceNameStr()
    {
        return $this->get(self::DEVICENAMESTR) !== null;
    }

    /**
     * Sets value of 'loginClientVersion' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLoginClientVersion($value)
    {
        return $this->set(self::LOGINCLIENTVERSION, $value);
    }

    /**
     * Returns value of 'loginClientVersion' property
     *
     * @return integer
     */
    public function getLoginClientVersion()
    {
        $value = $this->get(self::LOGINCLIENTVERSION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'loginClientVersion' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoginClientVersion()
    {
        return $this->get(self::LOGINCLIENTVERSION) !== null;
    }

    /**
     * Sets value of 'funcCtrl' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFuncCtrl($value)
    {
        return $this->set(self::FUNCCTRL, $value);
    }

    /**
     * Returns value of 'funcCtrl' property
     *
     * @return integer
     */
    public function getFuncCtrl()
    {
        $value = $this->get(self::FUNCCTRL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'funcCtrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFuncCtrl()
    {
        return $this->get(self::FUNCCTRL) !== null;
    }
}
}