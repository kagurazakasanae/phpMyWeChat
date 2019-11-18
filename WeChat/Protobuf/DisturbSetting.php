<?php
/**
 * Auto generated from x.proto at 2019-11-12 23:15:11
 */

namespace {
/**
 * DisturbSetting message
 */
class DisturbSetting extends \ProtobufMessage
{
    /* Field index constants */
    const NIGHTSETTING = 1;
    const NIGHTTIME = 2;
    const ALLDAYSETTING = 3;
    const ALLDAYTIME = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NIGHTSETTING => array(
            'name' => 'NightSetting',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NIGHTTIME => array(
            'name' => 'NightTime',
            'required' => true,
            'type' => '\DisturbTimeSpan'
        ),
        self::ALLDAYSETTING => array(
            'name' => 'AllDaySetting',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ALLDAYTIME => array(
            'name' => 'AllDayTime',
            'required' => true,
            'type' => '\DisturbTimeSpan'
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
        $this->values[self::NIGHTSETTING] = null;
        $this->values[self::NIGHTTIME] = null;
        $this->values[self::ALLDAYSETTING] = null;
        $this->values[self::ALLDAYTIME] = null;
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
     * Sets value of 'NightSetting' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNightSetting($value)
    {
        return $this->set(self::NIGHTSETTING, $value);
    }

    /**
     * Returns value of 'NightSetting' property
     *
     * @return integer
     */
    public function getNightSetting()
    {
        $value = $this->get(self::NIGHTSETTING);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'NightSetting' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNightSetting()
    {
        return $this->get(self::NIGHTSETTING) !== null;
    }

    /**
     * Sets value of 'NightTime' property
     *
     * @param \DisturbTimeSpan $value Property value
     *
     * @return null
     */
    public function setNightTime(\DisturbTimeSpan $value=null)
    {
        return $this->set(self::NIGHTTIME, $value);
    }

    /**
     * Returns value of 'NightTime' property
     *
     * @return \DisturbTimeSpan
     */
    public function getNightTime()
    {
        return $this->get(self::NIGHTTIME);
    }

    /**
     * Returns true if 'NightTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNightTime()
    {
        return $this->get(self::NIGHTTIME) !== null;
    }

    /**
     * Sets value of 'AllDaySetting' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAllDaySetting($value)
    {
        return $this->set(self::ALLDAYSETTING, $value);
    }

    /**
     * Returns value of 'AllDaySetting' property
     *
     * @return integer
     */
    public function getAllDaySetting()
    {
        $value = $this->get(self::ALLDAYSETTING);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'AllDaySetting' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAllDaySetting()
    {
        return $this->get(self::ALLDAYSETTING) !== null;
    }

    /**
     * Sets value of 'AllDayTime' property
     *
     * @param \DisturbTimeSpan $value Property value
     *
     * @return null
     */
    public function setAllDayTime(\DisturbTimeSpan $value=null)
    {
        return $this->set(self::ALLDAYTIME, $value);
    }

    /**
     * Returns value of 'AllDayTime' property
     *
     * @return \DisturbTimeSpan
     */
    public function getAllDayTime()
    {
        return $this->get(self::ALLDAYTIME);
    }

    /**
     * Returns true if 'AllDayTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAllDayTime()
    {
        return $this->get(self::ALLDAYTIME) !== null;
    }
}
}