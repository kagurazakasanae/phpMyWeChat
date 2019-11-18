<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsWeAppInfo message
 */
class SnsWeAppInfo extends \ProtobufMessage
{
    /* Field index constants */
    const MAPPOIID = 1;
    const APPID = 2;
    const USERNAME = 3;
    const REDIRECTURL = 4;
    const SHOWTYPE = 5;
    const SCORE = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MAPPOIID => array(
            'name' => 'mapPoiId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::APPID => array(
            'name' => 'appId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::USERNAME => array(
            'name' => 'userName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REDIRECTURL => array(
            'name' => 'redirectUrl',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SHOWTYPE => array(
            'name' => 'showType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SCORE => array(
            'name' => 'score',
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
        $this->values[self::MAPPOIID] = null;
        $this->values[self::APPID] = null;
        $this->values[self::USERNAME] = null;
        $this->values[self::REDIRECTURL] = null;
        $this->values[self::SHOWTYPE] = null;
        $this->values[self::SCORE] = null;
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
     * Sets value of 'mapPoiId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMapPoiId($value)
    {
        return $this->set(self::MAPPOIID, $value);
    }

    /**
     * Returns value of 'mapPoiId' property
     *
     * @return string
     */
    public function getMapPoiId()
    {
        $value = $this->get(self::MAPPOIID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'mapPoiId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMapPoiId()
    {
        return $this->get(self::MAPPOIID) !== null;
    }

    /**
     * Sets value of 'appId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAppId($value)
    {
        return $this->set(self::APPID, $value);
    }

    /**
     * Returns value of 'appId' property
     *
     * @return integer
     */
    public function getAppId()
    {
        $value = $this->get(self::APPID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'appId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAppId()
    {
        return $this->get(self::APPID) !== null;
    }

    /**
     * Sets value of 'userName' property
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
     * Returns value of 'userName' property
     *
     * @return string
     */
    public function getUserName()
    {
        $value = $this->get(self::USERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'userName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUserName()
    {
        return $this->get(self::USERNAME) !== null;
    }

    /**
     * Sets value of 'redirectUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRedirectUrl($value)
    {
        return $this->set(self::REDIRECTURL, $value);
    }

    /**
     * Returns value of 'redirectUrl' property
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        $value = $this->get(self::REDIRECTURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'redirectUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRedirectUrl()
    {
        return $this->get(self::REDIRECTURL) !== null;
    }

    /**
     * Sets value of 'showType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setShowType($value)
    {
        return $this->set(self::SHOWTYPE, $value);
    }

    /**
     * Returns value of 'showType' property
     *
     * @return integer
     */
    public function getShowType()
    {
        $value = $this->get(self::SHOWTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'showType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasShowType()
    {
        return $this->get(self::SHOWTYPE) !== null;
    }

    /**
     * Sets value of 'score' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setScore($value)
    {
        return $this->set(self::SCORE, $value);
    }

    /**
     * Returns value of 'score' property
     *
     * @return integer
     */
    public function getScore()
    {
        $value = $this->get(self::SCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'score' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasScore()
    {
        return $this->get(self::SCORE) !== null;
    }
}
}