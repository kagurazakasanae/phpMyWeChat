<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsServerConfig message
 */
class SnsServerConfig extends \ProtobufMessage
{
    /* Field index constants */
    const POSTMENTIONLIMIT = 1;
    const COPYANDPASTEWORDLIMIT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::POSTMENTIONLIMIT => array(
            'name' => 'postMentionLimit',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COPYANDPASTEWORDLIMIT => array(
            'name' => 'copyAndPasteWordLimit',
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
        $this->values[self::POSTMENTIONLIMIT] = null;
        $this->values[self::COPYANDPASTEWORDLIMIT] = null;
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
     * Sets value of 'postMentionLimit' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPostMentionLimit($value)
    {
        return $this->set(self::POSTMENTIONLIMIT, $value);
    }

    /**
     * Returns value of 'postMentionLimit' property
     *
     * @return integer
     */
    public function getPostMentionLimit()
    {
        $value = $this->get(self::POSTMENTIONLIMIT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'postMentionLimit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPostMentionLimit()
    {
        return $this->get(self::POSTMENTIONLIMIT) !== null;
    }

    /**
     * Sets value of 'copyAndPasteWordLimit' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCopyAndPasteWordLimit($value)
    {
        return $this->set(self::COPYANDPASTEWORDLIMIT, $value);
    }

    /**
     * Returns value of 'copyAndPasteWordLimit' property
     *
     * @return integer
     */
    public function getCopyAndPasteWordLimit()
    {
        $value = $this->get(self::COPYANDPASTEWORDLIMIT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'copyAndPasteWordLimit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCopyAndPasteWordLimit()
    {
        return $this->get(self::COPYANDPASTEWORDLIMIT) !== null;
    }
}
}