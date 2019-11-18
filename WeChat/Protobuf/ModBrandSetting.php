<?php
/**
 * Auto generated from x.proto at 2019-11-12 23:23:33
 */

namespace {
/**
 * ModBrandSetting message
 */
class ModBrandSetting extends \ProtobufMessage
{
    /* Field index constants */
    const BRANDFLAG = 1;
    const USERNAME = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BRANDFLAG => array(
            'name' => 'BrandFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::USERNAME => array(
            'default' => '',
            'name' => 'UserName',
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
        $this->values[self::BRANDFLAG] = null;
        $this->values[self::USERNAME] = self::$fields[self::USERNAME]['default'];
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
     * Sets value of 'BrandFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBrandFlag($value)
    {
        return $this->set(self::BRANDFLAG, $value);
    }

    /**
     * Returns value of 'BrandFlag' property
     *
     * @return integer
     */
    public function getBrandFlag()
    {
        $value = $this->get(self::BRANDFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'BrandFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBrandFlag()
    {
        return $this->get(self::BRANDFLAG) !== null;
    }

    /**
     * Sets value of 'UserName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUserName($value)
    {
        return $this->set(self::USERNAME, $value);
    }

    /**
     * Returns value of 'UserName' property
     *
     * @return string
     */
    public function getUserName()
    {
        $value = $this->get(self::USERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'UserName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUserName()
    {
        return $this->get(self::USERNAME) !== null;
    }
}
}