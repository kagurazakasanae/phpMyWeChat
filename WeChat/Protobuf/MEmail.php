<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * MEmail message
 */
class MEmail extends \ProtobufMessage
{
    /* Field index constants */
    const V = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::V => array(
            'name' => 'v',
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
        $this->values[self::V] = null;
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
     * Sets value of 'v' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setV($value)
    {
        return $this->set(self::V, $value);
    }

    /**
     * Returns value of 'v' property
     *
     * @return string
     */
    public function getV()
    {
        $value = $this->get(self::V);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'v' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasV()
    {
        return $this->get(self::V) !== null;
    }
}
}