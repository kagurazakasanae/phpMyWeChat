<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * MenuItem message
 */
class MenuItem extends \ProtobufMessage
{
    /* Field index constants */
    const TYPE = 1;
    const WORDING = 2;
    const URL = 3;
    const WAAPPUSERNAME = 4;
    const WAAPPPATH = 5;
    const SUBWORDING = 6;
    const ISSHOWRED = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TYPE => array(
            'name' => 'type',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WORDING => array(
            'name' => 'wording',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::URL => array(
            'name' => 'url',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::WAAPPUSERNAME => array(
            'name' => 'waappUsername',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::WAAPPPATH => array(
            'name' => 'waappPath',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SUBWORDING => array(
            'name' => 'subwording',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ISSHOWRED => array(
            'name' => 'isShowRed',
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
        $this->values[self::TYPE] = null;
        $this->values[self::WORDING] = null;
        $this->values[self::URL] = null;
        $this->values[self::WAAPPUSERNAME] = null;
        $this->values[self::WAAPPPATH] = null;
        $this->values[self::SUBWORDING] = null;
        $this->values[self::ISSHOWRED] = null;
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
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }

    /**
     * Sets value of 'wording' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWording($value)
    {
        return $this->set(self::WORDING, $value);
    }

    /**
     * Returns value of 'wording' property
     *
     * @return string
     */
    public function getWording()
    {
        $value = $this->get(self::WORDING);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'wording' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWording()
    {
        return $this->get(self::WORDING) !== null;
    }

    /**
     * Sets value of 'url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUrl($value)
    {
        return $this->set(self::URL, $value);
    }

    /**
     * Returns value of 'url' property
     *
     * @return string
     */
    public function getUrl()
    {
        $value = $this->get(self::URL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'url' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUrl()
    {
        return $this->get(self::URL) !== null;
    }

    /**
     * Sets value of 'waappUsername' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWaappUsername($value)
    {
        return $this->set(self::WAAPPUSERNAME, $value);
    }

    /**
     * Returns value of 'waappUsername' property
     *
     * @return string
     */
    public function getWaappUsername()
    {
        $value = $this->get(self::WAAPPUSERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'waappUsername' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWaappUsername()
    {
        return $this->get(self::WAAPPUSERNAME) !== null;
    }

    /**
     * Sets value of 'waappPath' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWaappPath($value)
    {
        return $this->set(self::WAAPPPATH, $value);
    }

    /**
     * Returns value of 'waappPath' property
     *
     * @return string
     */
    public function getWaappPath()
    {
        $value = $this->get(self::WAAPPPATH);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'waappPath' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWaappPath()
    {
        return $this->get(self::WAAPPPATH) !== null;
    }

    /**
     * Sets value of 'subwording' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSubwording($value)
    {
        return $this->set(self::SUBWORDING, $value);
    }

    /**
     * Returns value of 'subwording' property
     *
     * @return string
     */
    public function getSubwording()
    {
        $value = $this->get(self::SUBWORDING);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'subwording' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSubwording()
    {
        return $this->get(self::SUBWORDING) !== null;
    }

    /**
     * Sets value of 'isShowRed' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIsShowRed($value)
    {
        return $this->set(self::ISSHOWRED, $value);
    }

    /**
     * Returns value of 'isShowRed' property
     *
     * @return integer
     */
    public function getIsShowRed()
    {
        $value = $this->get(self::ISSHOWRED);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'isShowRed' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIsShowRed()
    {
        return $this->get(self::ISSHOWRED) !== null;
    }
}
}