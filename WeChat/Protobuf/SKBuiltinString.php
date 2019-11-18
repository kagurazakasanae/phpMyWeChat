<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SKBuiltinString message
 */
class SKBuiltinString extends \ProtobufMessage
{
    /* Field index constants */
    const STRING = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STRING => array(
            'name' => 'string',
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
        $this->values[self::STRING] = null;
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
     * Sets value of 'string' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setString($value)
    {
        return $this->set(self::STRING, $value);
    }

    /**
     * Returns value of 'string' property
     *
     * @return string
     */
    public function getString()
    {
        $value = $this->get(self::STRING);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'string' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasString()
    {
        return $this->get(self::STRING) !== null;
    }
}
}