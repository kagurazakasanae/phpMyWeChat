<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * Synckey_ message
 */
class Synckey_ extends \ProtobufMessage
{
    /* Field index constants */
    const TYPE = 1;
    const SYNCKEY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TYPE => array(
            'name' => 'type',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SYNCKEY => array(
            'name' => 'synckey',
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
        $this->values[self::TYPE] = null;
        $this->values[self::SYNCKEY] = null;
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
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }

    /**
     * Sets value of 'synckey' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSynckey($value)
    {
        return $this->set(self::SYNCKEY, $value);
    }

    /**
     * Returns value of 'synckey' property
     *
     * @return integer
     */
    public function getSynckey()
    {
        $value = $this->get(self::SYNCKEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'synckey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSynckey()
    {
        return $this->get(self::SYNCKEY) !== null;
    }
}
}