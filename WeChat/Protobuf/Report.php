<?php
/**
 * Auto generated from x.proto at 2019-11-12 23:06:28
 */

namespace {
/**
 * Report message
 */
class Report extends \ProtobufMessage
{
    /* Field index constants */
    const LOG = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LOG => array(
            'default' => '',
            'name' => 'Log',
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
        $this->values[self::LOG] = self::$fields[self::LOG]['default'];
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
     * Sets value of 'Log' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLog($value)
    {
        return $this->set(self::LOG, $value);
    }

    /**
     * Returns value of 'Log' property
     *
     * @return string
     */
    public function getLog()
    {
        $value = $this->get(self::LOG);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Log' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLog()
    {
        return $this->get(self::LOG) !== null;
    }
}
}