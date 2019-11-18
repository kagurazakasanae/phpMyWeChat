<?php
/**
 * Auto generated from x.proto at 2019-11-13 06:13:58
 */

namespace {
/**
 * SKBuiltinString_t message
 */
class SKBuiltinString_t extends \ProtobufMessage
{
    /* Field index constants */
    const STRING = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STRING => array(
            'default' => '',
            'name' => 'String',
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
        $this->values[self::STRING] = self::$fields[self::STRING]['default'];
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
     * Sets value of 'String' property
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
     * Returns value of 'String' property
     *
     * @return string
     */
    public function getString()
    {
        $value = $this->get(self::STRING);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'String' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasString()
    {
        return $this->get(self::STRING) !== null;
    }
}
}