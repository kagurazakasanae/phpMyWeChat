<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GetOpenIMResourceRequest message
 */
class GetOpenIMResourceRequest extends \ProtobufMessage
{
    /* Field index constants */
    const LANGUAGE = 1;
    const APPID = 2;
    const WORDINGID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LANGUAGE => array(
            'name' => 'Language',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::APPID => array(
            'name' => 'Appid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::WORDINGID => array(
            'default' => 0,
            'name' => 'Wordingid',
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
        $this->values[self::LANGUAGE] = null;
        $this->values[self::APPID] = null;
        $this->values[self::WORDINGID] = self::$fields[self::WORDINGID]['default'];
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
     * Sets value of 'Language' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLanguage($value)
    {
        return $this->set(self::LANGUAGE, $value);
    }

    /**
     * Returns value of 'Language' property
     *
     * @return string
     */
    public function getLanguage()
    {
        $value = $this->get(self::LANGUAGE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Language' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLanguage()
    {
        return $this->get(self::LANGUAGE) !== null;
    }

    /**
     * Sets value of 'Appid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAppid($value)
    {
        return $this->set(self::APPID, $value);
    }

    /**
     * Returns value of 'Appid' property
     *
     * @return string
     */
    public function getAppid()
    {
        $value = $this->get(self::APPID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Appid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAppid()
    {
        return $this->get(self::APPID) !== null;
    }

    /**
     * Sets value of 'Wordingid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWordingid($value)
    {
        return $this->set(self::WORDINGID, $value);
    }

    /**
     * Returns value of 'Wordingid' property
     *
     * @return integer
     */
    public function getWordingid()
    {
        $value = $this->get(self::WORDINGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Wordingid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWordingid()
    {
        return $this->get(self::WORDINGID) !== null;
    }
}
}