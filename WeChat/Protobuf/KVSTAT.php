<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * KVSTAT message
 */
class KVSTAT extends \ProtobufMessage
{
    /* Field index constants */
    const VALUE = 1;
    const KID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::VALUE => array(
            'name' => 'value',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::KID => array(
            'name' => 'kid',
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
        $this->values[self::VALUE] = null;
        $this->values[self::KID] = null;
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
     * Sets value of 'value' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setValue($value)
    {
        return $this->set(self::VALUE, $value);
    }

    /**
     * Returns value of 'value' property
     *
     * @return string
     */
    public function getValue()
    {
        $value = $this->get(self::VALUE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'value' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValue()
    {
        return $this->get(self::VALUE) !== null;
    }

    /**
     * Sets value of 'kid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setKid($value)
    {
        return $this->set(self::KID, $value);
    }

    /**
     * Returns value of 'kid' property
     *
     * @return string
     */
    public function getKid()
    {
        $value = $this->get(self::KID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'kid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKid()
    {
        return $this->get(self::KID) !== null;
    }
}
}