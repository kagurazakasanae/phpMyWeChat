<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsGroup message
 */
class SnsGroup extends \ProtobufMessage
{
    /* Field index constants */
    const GROUPID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GROUPID => array(
            'name' => 'GroupId',
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
        $this->values[self::GROUPID] = null;
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
     * Sets value of 'GroupId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGroupId($value)
    {
        return $this->set(self::GROUPID, $value);
    }

    /**
     * Returns value of 'GroupId' property
     *
     * @return integer
     */
    public function getGroupId()
    {
        $value = $this->get(self::GROUPID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'GroupId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGroupId()
    {
        return $this->get(self::GROUPID) !== null;
    }
}
}