<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * MediaInfo message
 */
class MediaInfo extends \ProtobufMessage
{
    /* Field index constants */
    const SOURCE = 1;
    const MEDIATYPE = 2;
    const VIDEOPLAYLENGTH = 3;
    const SESSIONID = 4;
    const STARTTIME = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SOURCE => array(
            'name' => 'source',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MEDIATYPE => array(
            'name' => 'mediaType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VIDEOPLAYLENGTH => array(
            'name' => 'videoPlayLength',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SESSIONID => array(
            'name' => 'sessionId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STARTTIME => array(
            'default' => 0,
            'name' => 'startTime',
            'required' => false,
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
        $this->values[self::SOURCE] = null;
        $this->values[self::MEDIATYPE] = null;
        $this->values[self::VIDEOPLAYLENGTH] = null;
        $this->values[self::SESSIONID] = null;
        $this->values[self::STARTTIME] = self::$fields[self::STARTTIME]['default'];
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
     * Sets value of 'source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSource($value)
    {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::SOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSource()
    {
        return $this->get(self::SOURCE) !== null;
    }

    /**
     * Sets value of 'mediaType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMediaType($value)
    {
        return $this->set(self::MEDIATYPE, $value);
    }

    /**
     * Returns value of 'mediaType' property
     *
     * @return integer
     */
    public function getMediaType()
    {
        $value = $this->get(self::MEDIATYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'mediaType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMediaType()
    {
        return $this->get(self::MEDIATYPE) !== null;
    }

    /**
     * Sets value of 'videoPlayLength' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVideoPlayLength($value)
    {
        return $this->set(self::VIDEOPLAYLENGTH, $value);
    }

    /**
     * Returns value of 'videoPlayLength' property
     *
     * @return integer
     */
    public function getVideoPlayLength()
    {
        $value = $this->get(self::VIDEOPLAYLENGTH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'videoPlayLength' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVideoPlayLength()
    {
        return $this->get(self::VIDEOPLAYLENGTH) !== null;
    }

    /**
     * Sets value of 'sessionId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSessionId($value)
    {
        return $this->set(self::SESSIONID, $value);
    }

    /**
     * Returns value of 'sessionId' property
     *
     * @return string
     */
    public function getSessionId()
    {
        $value = $this->get(self::SESSIONID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'sessionId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSessionId()
    {
        return $this->get(self::SESSIONID) !== null;
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
}
}