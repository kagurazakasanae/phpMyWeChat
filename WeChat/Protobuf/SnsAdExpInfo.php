<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsAdExpInfo message
 */
class SnsAdExpInfo extends \ProtobufMessage
{
    /* Field index constants */
    const HATEFEEDID = 1;
    const HATETIMESTAMP = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HATEFEEDID => array(
            'name' => 'hateFeedid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HATETIMESTAMP => array(
            'name' => 'hateTimestamp',
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
        $this->values[self::HATEFEEDID] = null;
        $this->values[self::HATETIMESTAMP] = null;
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
     * Sets value of 'hateFeedid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHateFeedid($value)
    {
        return $this->set(self::HATEFEEDID, $value);
    }

    /**
     * Returns value of 'hateFeedid' property
     *
     * @return integer
     */
    public function getHateFeedid()
    {
        $value = $this->get(self::HATEFEEDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'hateFeedid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHateFeedid()
    {
        return $this->get(self::HATEFEEDID) !== null;
    }

    /**
     * Sets value of 'hateTimestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHateTimestamp($value)
    {
        return $this->set(self::HATETIMESTAMP, $value);
    }

    /**
     * Returns value of 'hateTimestamp' property
     *
     * @return integer
     */
    public function getHateTimestamp()
    {
        $value = $this->get(self::HATETIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'hateTimestamp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHateTimestamp()
    {
        return $this->get(self::HATETIMESTAMP) !== null;
    }
}
}