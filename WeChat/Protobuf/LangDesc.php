<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * LangDesc message
 */
class LangDesc extends \ProtobufMessage
{
    /* Field index constants */
    const LANG = 1;
    const DESC = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LANG => array(
            'name' => 'lang',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DESC => array(
            'name' => 'desc',
            'required' => true,
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
        $this->values[self::LANG] = null;
        $this->values[self::DESC] = null;
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
     * Sets value of 'lang' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLang($value)
    {
        return $this->set(self::LANG, $value);
    }

    /**
     * Returns value of 'lang' property
     *
     * @return string
     */
    public function getLang()
    {
        $value = $this->get(self::LANG);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'lang' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLang()
    {
        return $this->get(self::LANG) !== null;
    }

    /**
     * Sets value of 'desc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDesc($value)
    {
        return $this->set(self::DESC, $value);
    }

    /**
     * Returns value of 'desc' property
     *
     * @return string
     */
    public function getDesc()
    {
        $value = $this->get(self::DESC);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'desc' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDesc()
    {
        return $this->get(self::DESC) !== null;
    }
}
}