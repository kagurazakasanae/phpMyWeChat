<?php
/**
 * Auto generated from x.proto at 2019-11-12 23:15:11
 */

namespace {
/**
 * ModDisturbSetting message
 */
class ModDisturbSetting extends \ProtobufMessage
{
    /* Field index constants */
    const DISTURBSETTING = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DISTURBSETTING => array(
            'name' => 'DisturbSetting',
            'required' => true,
            'type' => '\DisturbSetting'
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
        $this->values[self::DISTURBSETTING] = null;
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
     * Sets value of 'DisturbSetting' property
     *
     * @param \DisturbSetting $value Property value
     *
     * @return null
     */
    public function setDisturbSetting(\DisturbSetting $value=null)
    {
        return $this->set(self::DISTURBSETTING, $value);
    }

    /**
     * Returns value of 'DisturbSetting' property
     *
     * @return \DisturbSetting
     */
    public function getDisturbSetting()
    {
        return $this->get(self::DISTURBSETTING);
    }

    /**
     * Returns true if 'DisturbSetting' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDisturbSetting()
    {
        return $this->get(self::DISTURBSETTING) !== null;
    }
}
}