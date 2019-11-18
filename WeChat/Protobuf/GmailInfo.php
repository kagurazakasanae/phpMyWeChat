<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GmailInfo message
 */
class GmailInfo extends \ProtobufMessage
{
    /* Field index constants */
    const GMAILACCT = 1;
    const GMAILSWITCH = 2;
    const GMAILERRCODE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GMAILACCT => array(
            'name' => 'gmailAcct',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GMAILSWITCH => array(
            'name' => 'gmailSwitch',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GMAILERRCODE => array(
            'name' => 'gmailErrCode',
            'required' => true,
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
        $this->values[self::GMAILACCT] = null;
        $this->values[self::GMAILSWITCH] = null;
        $this->values[self::GMAILERRCODE] = null;
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
     * Sets value of 'gmailAcct' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGmailAcct($value)
    {
        return $this->set(self::GMAILACCT, $value);
    }

    /**
     * Returns value of 'gmailAcct' property
     *
     * @return string
     */
    public function getGmailAcct()
    {
        $value = $this->get(self::GMAILACCT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'gmailAcct' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGmailAcct()
    {
        return $this->get(self::GMAILACCT) !== null;
    }

    /**
     * Sets value of 'gmailSwitch' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGmailSwitch($value)
    {
        return $this->set(self::GMAILSWITCH, $value);
    }

    /**
     * Returns value of 'gmailSwitch' property
     *
     * @return integer
     */
    public function getGmailSwitch()
    {
        $value = $this->get(self::GMAILSWITCH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gmailSwitch' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGmailSwitch()
    {
        return $this->get(self::GMAILSWITCH) !== null;
    }

    /**
     * Sets value of 'gmailErrCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGmailErrCode($value)
    {
        return $this->set(self::GMAILERRCODE, $value);
    }

    /**
     * Returns value of 'gmailErrCode' property
     *
     * @return integer
     */
    public function getGmailErrCode()
    {
        $value = $this->get(self::GMAILERRCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gmailErrCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGmailErrCode()
    {
        return $this->get(self::GMAILERRCODE) !== null;
    }
}
}