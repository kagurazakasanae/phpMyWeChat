<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * ExtDeviceLoginConfirmExpiredRet message
 */
class ExtDeviceLoginConfirmExpiredRet extends \ProtobufMessage
{
    /* Field index constants */
    const BUTTONSTR = 3;
    const CONTENTSTR = 2;
    const ICONTYPE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BUTTONSTR => array(
            'name' => 'buttonStr',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CONTENTSTR => array(
            'name' => 'contentStr',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ICONTYPE => array(
            'name' => 'iconType',
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
        $this->values[self::BUTTONSTR] = null;
        $this->values[self::CONTENTSTR] = null;
        $this->values[self::ICONTYPE] = null;
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
     * Sets value of 'buttonStr' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setButtonStr($value)
    {
        return $this->set(self::BUTTONSTR, $value);
    }

    /**
     * Returns value of 'buttonStr' property
     *
     * @return string
     */
    public function getButtonStr()
    {
        $value = $this->get(self::BUTTONSTR);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'buttonStr' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasButtonStr()
    {
        return $this->get(self::BUTTONSTR) !== null;
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
     * Sets value of 'iconType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIconType($value)
    {
        return $this->set(self::ICONTYPE, $value);
    }

    /**
     * Returns value of 'iconType' property
     *
     * @return integer
     */
    public function getIconType()
    {
        $value = $this->get(self::ICONTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'iconType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIconType()
    {
        return $this->get(self::ICONTYPE) !== null;
    }
}
}