<?php
/**
 * Auto generated from x.proto at 2019-11-12 23:15:11
 */

namespace {
/**
 * DisturbTimeSpan message
 */
class DisturbTimeSpan extends \ProtobufMessage
{
    /* Field index constants */
    const BEGINTIME = 1;
    const ENDTIME = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BEGINTIME => array(
            'name' => 'BeginTime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ENDTIME => array(
            'name' => 'EndTime',
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
        $this->values[self::BEGINTIME] = null;
        $this->values[self::ENDTIME] = null;
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
     * Sets value of 'BeginTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBeginTime($value)
    {
        return $this->set(self::BEGINTIME, $value);
    }

    /**
     * Returns value of 'BeginTime' property
     *
     * @return integer
     */
    public function getBeginTime()
    {
        $value = $this->get(self::BEGINTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'BeginTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBeginTime()
    {
        return $this->get(self::BEGINTIME) !== null;
    }

    /**
     * Sets value of 'EndTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEndTime($value)
    {
        return $this->set(self::ENDTIME, $value);
    }

    /**
     * Returns value of 'EndTime' property
     *
     * @return integer
     */
    public function getEndTime()
    {
        $value = $this->get(self::ENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'EndTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEndTime()
    {
        return $this->get(self::ENDTIME) !== null;
    }
}
}