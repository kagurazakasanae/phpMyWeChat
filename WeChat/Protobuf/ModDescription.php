<?php
/**
 * Auto generated from x.proto at 2019-11-12 23:30:16
 */

namespace {
/**
 * ModDescription message
 */
class ModDescription extends \ProtobufMessage
{
    /* Field index constants */
    const CONTACTUSERNAME = 1;
    const DESC = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONTACTUSERNAME => array(
            'default' => '',
            'name' => 'ContactUsername',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DESC => array(
            'default' => '',
            'name' => 'Desc',
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
        $this->values[self::CONTACTUSERNAME] = self::$fields[self::CONTACTUSERNAME]['default'];
        $this->values[self::DESC] = self::$fields[self::DESC]['default'];
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
     * Sets value of 'ContactUsername' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContactUsername($value)
    {
        return $this->set(self::CONTACTUSERNAME, $value);
    }

    /**
     * Returns value of 'ContactUsername' property
     *
     * @return string
     */
    public function getContactUsername()
    {
        $value = $this->get(self::CONTACTUSERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'ContactUsername' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContactUsername()
    {
        return $this->get(self::CONTACTUSERNAME) !== null;
    }

    /**
     * Sets value of 'Desc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDesc($value)
    {
        return $this->set(self::DESC, $value);
    }

    /**
     * Returns value of 'Desc' property
     *
     * @return string
     */
    public function getDesc()
    {
        $value = $this->get(self::DESC);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Desc' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDesc()
    {
        return $this->get(self::DESC) !== null;
    }
}
}