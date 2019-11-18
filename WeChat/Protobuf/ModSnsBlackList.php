<?php
/**
 * Auto generated from x.proto at 2019-11-12 23:27:41
 */

namespace {
/**
 * ModSnsBlackList message
 */
class ModSnsBlackList extends \ProtobufMessage
{
    /* Field index constants */
    const CONTACTUSERNAME = 1;
    const MODTYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONTACTUSERNAME => array(
            'default' => '',
            'name' => 'ContactUsername',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MODTYPE => array(
            'name' => 'ModType',
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
        $this->values[self::CONTACTUSERNAME] = self::$fields[self::CONTACTUSERNAME]['default'];
        $this->values[self::MODTYPE] = null;
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
     * Sets value of 'ModType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setModType($value)
    {
        return $this->set(self::MODTYPE, $value);
    }

    /**
     * Returns value of 'ModType' property
     *
     * @return integer
     */
    public function getModType()
    {
        $value = $this->get(self::MODTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ModType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasModType()
    {
        return $this->get(self::MODTYPE) !== null;
    }
}
}