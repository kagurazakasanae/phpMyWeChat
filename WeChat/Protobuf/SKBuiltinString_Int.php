<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SKBuiltinString_Int message
 */
class SKBuiltinString_Int extends \ProtobufMessage
{
    /* Field index constants */
    const INT = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INT => array(
            'name' => 'int',
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
        $this->values[self::INT] = null;
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
     * Sets value of 'int' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setInt($value)
    {
        return $this->set(self::INT, $value);
    }

    /**
     * Returns value of 'int' property
     *
     * @return integer
     */
    public function getInt()
    {
        $value = $this->get(self::INT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'int' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasInt()
    {
        return $this->get(self::INT) !== null;
    }
}
}