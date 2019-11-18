<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * AdExposureInfo message
 */
class AdExposureInfo extends \ProtobufMessage
{
    /* Field index constants */
    const STARTPOSITIONTYPE = 1;
    const ENDPOSITIONTYPE = 2;
    const READHEIGHT = 3;
    const UNREADTOPHEIGHT = 4;
    const UNREADBOTTOMHEIGHT = 5;
    const STARTTIME = 6;
    const ENDTIME = 7;
    const HALFSTARTTIME = 8;
    const HALFENDTIME = 9;
    const ALLSTARTTIME = 10;
    const ALLENDTIME = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STARTPOSITIONTYPE => array(
            'name' => 'startPositionType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ENDPOSITIONTYPE => array(
            'name' => 'endPositionType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::READHEIGHT => array(
            'name' => 'readHeight',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::UNREADTOPHEIGHT => array(
            'name' => 'unReadTopHeight',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::UNREADBOTTOMHEIGHT => array(
            'name' => 'unReadBottomHeight',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STARTTIME => array(
            'name' => 'startTime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ENDTIME => array(
            'name' => 'endTime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HALFSTARTTIME => array(
            'name' => 'halfStartTime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HALFENDTIME => array(
            'name' => 'halfEndTime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ALLSTARTTIME => array(
            'name' => 'allStartTime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ALLENDTIME => array(
            'name' => 'allEndTime',
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
        $this->values[self::STARTPOSITIONTYPE] = null;
        $this->values[self::ENDPOSITIONTYPE] = null;
        $this->values[self::READHEIGHT] = null;
        $this->values[self::UNREADTOPHEIGHT] = null;
        $this->values[self::UNREADBOTTOMHEIGHT] = null;
        $this->values[self::STARTTIME] = null;
        $this->values[self::ENDTIME] = null;
        $this->values[self::HALFSTARTTIME] = null;
        $this->values[self::HALFENDTIME] = null;
        $this->values[self::ALLSTARTTIME] = null;
        $this->values[self::ALLENDTIME] = null;
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
     * Sets value of 'startPositionType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStartPositionType($value)
    {
        return $this->set(self::STARTPOSITIONTYPE, $value);
    }

    /**
     * Returns value of 'startPositionType' property
     *
     * @return integer
     */
    public function getStartPositionType()
    {
        $value = $this->get(self::STARTPOSITIONTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'startPositionType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStartPositionType()
    {
        return $this->get(self::STARTPOSITIONTYPE) !== null;
    }

    /**
     * Sets value of 'endPositionType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEndPositionType($value)
    {
        return $this->set(self::ENDPOSITIONTYPE, $value);
    }

    /**
     * Returns value of 'endPositionType' property
     *
     * @return integer
     */
    public function getEndPositionType()
    {
        $value = $this->get(self::ENDPOSITIONTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'endPositionType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEndPositionType()
    {
        return $this->get(self::ENDPOSITIONTYPE) !== null;
    }

    /**
     * Sets value of 'readHeight' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setReadHeight($value)
    {
        return $this->set(self::READHEIGHT, $value);
    }

    /**
     * Returns value of 'readHeight' property
     *
     * @return double
     */
    public function getReadHeight()
    {
        $value = $this->get(self::READHEIGHT);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Returns true if 'readHeight' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReadHeight()
    {
        return $this->get(self::READHEIGHT) !== null;
    }

    /**
     * Sets value of 'unReadTopHeight' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setUnReadTopHeight($value)
    {
        return $this->set(self::UNREADTOPHEIGHT, $value);
    }

    /**
     * Returns value of 'unReadTopHeight' property
     *
     * @return double
     */
    public function getUnReadTopHeight()
    {
        $value = $this->get(self::UNREADTOPHEIGHT);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Returns true if 'unReadTopHeight' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUnReadTopHeight()
    {
        return $this->get(self::UNREADTOPHEIGHT) !== null;
    }

    /**
     * Sets value of 'unReadBottomHeight' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUnReadBottomHeight($value)
    {
        return $this->set(self::UNREADBOTTOMHEIGHT, $value);
    }

    /**
     * Returns value of 'unReadBottomHeight' property
     *
     * @return integer
     */
    public function getUnReadBottomHeight()
    {
        $value = $this->get(self::UNREADBOTTOMHEIGHT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'unReadBottomHeight' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUnReadBottomHeight()
    {
        return $this->get(self::UNREADBOTTOMHEIGHT) !== null;
    }

    /**
     * Sets value of 'startTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStartTime($value)
    {
        return $this->set(self::STARTTIME, $value);
    }

    /**
     * Returns value of 'startTime' property
     *
     * @return integer
     */
    public function getStartTime()
    {
        $value = $this->get(self::STARTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'startTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStartTime()
    {
        return $this->get(self::STARTTIME) !== null;
    }

    /**
     * Sets value of 'endTime' property
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
     * Returns value of 'endTime' property
     *
     * @return integer
     */
    public function getEndTime()
    {
        $value = $this->get(self::ENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'endTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEndTime()
    {
        return $this->get(self::ENDTIME) !== null;
    }

    /**
     * Sets value of 'halfStartTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHalfStartTime($value)
    {
        return $this->set(self::HALFSTARTTIME, $value);
    }

    /**
     * Returns value of 'halfStartTime' property
     *
     * @return integer
     */
    public function getHalfStartTime()
    {
        $value = $this->get(self::HALFSTARTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'halfStartTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHalfStartTime()
    {
        return $this->get(self::HALFSTARTTIME) !== null;
    }

    /**
     * Sets value of 'halfEndTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHalfEndTime($value)
    {
        return $this->set(self::HALFENDTIME, $value);
    }

    /**
     * Returns value of 'halfEndTime' property
     *
     * @return integer
     */
    public function getHalfEndTime()
    {
        $value = $this->get(self::HALFENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'halfEndTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHalfEndTime()
    {
        return $this->get(self::HALFENDTIME) !== null;
    }

    /**
     * Sets value of 'allStartTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAllStartTime($value)
    {
        return $this->set(self::ALLSTARTTIME, $value);
    }

    /**
     * Returns value of 'allStartTime' property
     *
     * @return integer
     */
    public function getAllStartTime()
    {
        $value = $this->get(self::ALLSTARTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'allStartTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAllStartTime()
    {
        return $this->get(self::ALLSTARTTIME) !== null;
    }

    /**
     * Sets value of 'allEndTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAllEndTime($value)
    {
        return $this->set(self::ALLENDTIME, $value);
    }

    /**
     * Returns value of 'allEndTime' property
     *
     * @return integer
     */
    public function getAllEndTime()
    {
        $value = $this->get(self::ALLENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'allEndTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAllEndTime()
    {
        return $this->get(self::ALLENDTIME) !== null;
    }
}
}