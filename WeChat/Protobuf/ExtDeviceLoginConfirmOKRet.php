<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * ExtDeviceLoginConfirmOKRet message
 */
class ExtDeviceLoginConfirmOKRet extends \ProtobufMessage
{
    /* Field index constants */
    const ICOTYPE = 1;
    const CONTENTSTR = 2;
    const BUTTONOKSTR = 3;
    const BUTTONCANCELSTR = 4;
    const REQSESSIONLIMIT = 5;
    const CONFIRMTIMEOUT = 6;
    const LOGINEDDEVTIP = 7;
    const TITLESTR = 8;
    const WARNINGSTR = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ICOTYPE => array(
            'default' => 0,
            'name' => 'icoType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONTENTSTR => array(
            'name' => 'contentStr',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BUTTONOKSTR => array(
            'name' => 'buttonOkstr',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BUTTONCANCELSTR => array(
            'name' => 'buttonCancelStr',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REQSESSIONLIMIT => array(
            'default' => 0,
            'name' => 'reqSessionLimit',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONFIRMTIMEOUT => array(
            'default' => 0,
            'name' => 'confirmTimeOut',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOGINEDDEVTIP => array(
            'name' => 'loginedDevTip',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TITLESTR => array(
            'name' => 'titleStr',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::WARNINGSTR => array(
            'name' => 'warningStr',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::ICOTYPE] = self::$fields[self::ICOTYPE]['default'];
        $this->values[self::CONTENTSTR] = null;
        $this->values[self::BUTTONOKSTR] = null;
        $this->values[self::BUTTONCANCELSTR] = null;
        $this->values[self::REQSESSIONLIMIT] = self::$fields[self::REQSESSIONLIMIT]['default'];
        $this->values[self::CONFIRMTIMEOUT] = self::$fields[self::CONFIRMTIMEOUT]['default'];
        $this->values[self::LOGINEDDEVTIP] = null;
        $this->values[self::TITLESTR] = null;
        $this->values[self::WARNINGSTR] = null;
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
     * Sets value of 'icoType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIcoType($value)
    {
        return $this->set(self::ICOTYPE, $value);
    }

    /**
     * Returns value of 'icoType' property
     *
     * @return integer
     */
    public function getIcoType()
    {
        $value = $this->get(self::ICOTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'icoType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIcoType()
    {
        return $this->get(self::ICOTYPE) !== null;
    }

    /**
     * Sets value of 'contentStr' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContentStr($value)
    {
        return $this->set(self::CONTENTSTR, $value);
    }

    /**
     * Returns value of 'contentStr' property
     *
     * @return string
     */
    public function getContentStr()
    {
        $value = $this->get(self::CONTENTSTR);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'contentStr' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContentStr()
    {
        return $this->get(self::CONTENTSTR) !== null;
    }

    /**
     * Sets value of 'buttonOkstr' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setButtonOkstr($value)
    {
        return $this->set(self::BUTTONOKSTR, $value);
    }

    /**
     * Returns value of 'buttonOkstr' property
     *
     * @return string
     */
    public function getButtonOkstr()
    {
        $value = $this->get(self::BUTTONOKSTR);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'buttonOkstr' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasButtonOkstr()
    {
        return $this->get(self::BUTTONOKSTR) !== null;
    }

    /**
     * Sets value of 'buttonCancelStr' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setButtonCancelStr($value)
    {
        return $this->set(self::BUTTONCANCELSTR, $value);
    }

    /**
     * Returns value of 'buttonCancelStr' property
     *
     * @return string
     */
    public function getButtonCancelStr()
    {
        $value = $this->get(self::BUTTONCANCELSTR);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'buttonCancelStr' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasButtonCancelStr()
    {
        return $this->get(self::BUTTONCANCELSTR) !== null;
    }

    /**
     * Sets value of 'reqSessionLimit' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReqSessionLimit($value)
    {
        return $this->set(self::REQSESSIONLIMIT, $value);
    }

    /**
     * Returns value of 'reqSessionLimit' property
     *
     * @return integer
     */
    public function getReqSessionLimit()
    {
        $value = $this->get(self::REQSESSIONLIMIT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'reqSessionLimit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReqSessionLimit()
    {
        return $this->get(self::REQSESSIONLIMIT) !== null;
    }

    /**
     * Sets value of 'confirmTimeOut' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setConfirmTimeOut($value)
    {
        return $this->set(self::CONFIRMTIMEOUT, $value);
    }

    /**
     * Returns value of 'confirmTimeOut' property
     *
     * @return integer
     */
    public function getConfirmTimeOut()
    {
        $value = $this->get(self::CONFIRMTIMEOUT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'confirmTimeOut' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConfirmTimeOut()
    {
        return $this->get(self::CONFIRMTIMEOUT) !== null;
    }

    /**
     * Sets value of 'loginedDevTip' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLoginedDevTip($value)
    {
        return $this->set(self::LOGINEDDEVTIP, $value);
    }

    /**
     * Returns value of 'loginedDevTip' property
     *
     * @return string
     */
    public function getLoginedDevTip()
    {
        $value = $this->get(self::LOGINEDDEVTIP);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'loginedDevTip' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoginedDevTip()
    {
        return $this->get(self::LOGINEDDEVTIP) !== null;
    }

    /**
     * Sets value of 'titleStr' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTitleStr($value)
    {
        return $this->set(self::TITLESTR, $value);
    }

    /**
     * Returns value of 'titleStr' property
     *
     * @return string
     */
    public function getTitleStr()
    {
        $value = $this->get(self::TITLESTR);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'titleStr' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTitleStr()
    {
        return $this->get(self::TITLESTR) !== null;
    }

    /**
     * Sets value of 'warningStr' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWarningStr($value)
    {
        return $this->set(self::WARNINGSTR, $value);
    }

    /**
     * Returns value of 'warningStr' property
     *
     * @return string
     */
    public function getWarningStr()
    {
        $value = $this->get(self::WARNINGSTR);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'warningStr' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWarningStr()
    {
        return $this->get(self::WARNINGSTR) !== null;
    }
}
}