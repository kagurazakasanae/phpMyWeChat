<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * FriendGroup message
 */
class FriendGroup extends \ProtobufMessage
{
    /* Field index constants */
    const GROUPID = 1;
    const GROUPNAME = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GROUPID => array(
            'name' => 'groupId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GROUPNAME => array(
            'name' => 'groupName',
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
        $this->values[self::GROUPID] = null;
        $this->values[self::GROUPNAME] = null;
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
     * Sets value of 'groupId' property
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
     * Returns value of 'groupId' property
     *
     * @return integer
     */
    public function getGroupId()
    {
        $value = $this->get(self::GROUPID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'groupId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGroupId()
    {
        return $this->get(self::GROUPID) !== null;
    }

    /**
     * Sets value of 'groupName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGroupName($value)
    {
        return $this->set(self::GROUPNAME, $value);
    }

    /**
     * Returns value of 'groupName' property
     *
     * @return string
     */
    public function getGroupName()
    {
        $value = $this->get(self::GROUPNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'groupName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGroupName()
    {
        return $this->get(self::GROUPNAME) !== null;
    }
}
}