<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsPostOperationFields message
 */
class SnsPostOperationFields extends \ProtobufMessage
{
    /* Field index constants */
    const SHAREURLORIGINAL = 1;
    const SHAREURLOPEN = 2;
    const JSAPPID = 3;
    const CONTACTTAGCOUNT = 4;
    const TEMPUSERCOUNT = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SHAREURLORIGINAL => array(
            'name' => 'shareUrlOriginal',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SHAREURLOPEN => array(
            'name' => 'shareUrlOpen',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::JSAPPID => array(
            'name' => 'jsAppid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CONTACTTAGCOUNT => array(
            'name' => 'contactTagCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TEMPUSERCOUNT => array(
            'name' => 'tempUserCount',
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
        $this->values[self::SHAREURLORIGINAL] = null;
        $this->values[self::SHAREURLOPEN] = null;
        $this->values[self::JSAPPID] = null;
        $this->values[self::CONTACTTAGCOUNT] = null;
        $this->values[self::TEMPUSERCOUNT] = null;
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
     * Sets value of 'shareUrlOriginal' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setShareUrlOriginal($value)
    {
        return $this->set(self::SHAREURLORIGINAL, $value);
    }

    /**
     * Returns value of 'shareUrlOriginal' property
     *
     * @return string
     */
    public function getShareUrlOriginal()
    {
        $value = $this->get(self::SHAREURLORIGINAL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'shareUrlOriginal' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasShareUrlOriginal()
    {
        return $this->get(self::SHAREURLORIGINAL) !== null;
    }

    /**
     * Sets value of 'shareUrlOpen' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setShareUrlOpen($value)
    {
        return $this->set(self::SHAREURLOPEN, $value);
    }

    /**
     * Returns value of 'shareUrlOpen' property
     *
     * @return string
     */
    public function getShareUrlOpen()
    {
        $value = $this->get(self::SHAREURLOPEN);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'shareUrlOpen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasShareUrlOpen()
    {
        return $this->get(self::SHAREURLOPEN) !== null;
    }

    /**
     * Sets value of 'jsAppid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setJsAppid($value)
    {
        return $this->set(self::JSAPPID, $value);
    }

    /**
     * Returns value of 'jsAppid' property
     *
     * @return string
     */
    public function getJsAppid()
    {
        $value = $this->get(self::JSAPPID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'jsAppid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasJsAppid()
    {
        return $this->get(self::JSAPPID) !== null;
    }

    /**
     * Sets value of 'contactTagCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setContactTagCount($value)
    {
        return $this->set(self::CONTACTTAGCOUNT, $value);
    }

    /**
     * Returns value of 'contactTagCount' property
     *
     * @return integer
     */
    public function getContactTagCount()
    {
        $value = $this->get(self::CONTACTTAGCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'contactTagCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContactTagCount()
    {
        return $this->get(self::CONTACTTAGCOUNT) !== null;
    }

    /**
     * Sets value of 'tempUserCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTempUserCount($value)
    {
        return $this->set(self::TEMPUSERCOUNT, $value);
    }

    /**
     * Returns value of 'tempUserCount' property
     *
     * @return integer
     */
    public function getTempUserCount()
    {
        $value = $this->get(self::TEMPUSERCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'tempUserCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTempUserCount()
    {
        return $this->get(self::TEMPUSERCOUNT) !== null;
    }
}
}