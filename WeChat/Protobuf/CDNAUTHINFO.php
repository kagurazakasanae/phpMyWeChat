<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * CDNAUTHINFO message
 */
class CDNAUTHINFO extends \ProtobufMessage
{
    /* Field index constants */
    const AESKEY = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::AESKEY => array(
            'name' => 'aesKey',
            'required' => true,
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
        $this->values[self::AESKEY] = null;
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
     * Sets value of 'aesKey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAesKey($value)
    {
        return $this->set(self::AESKEY, $value);
    }

    /**
     * Returns value of 'aesKey' property
     *
     * @return string
     */
    public function getAesKey()
    {
        $value = $this->get(self::AESKEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'aesKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAesKey()
    {
        return $this->get(self::AESKEY) !== null;
    }
}
}