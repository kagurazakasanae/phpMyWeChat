<?php
/**
 * Auto generated from x.proto at 2019-11-12 23:24:19
 */

namespace {
/**
 * ModChatRoomMemberDisplayName message
 */
class ModChatRoomMemberDisplayName extends \ProtobufMessage
{
    /* Field index constants */
    const CHATROOMNAME = 1;
    const USERNAME = 2;
    const DISPLAYNAME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CHATROOMNAME => array(
            'default' => '',
            'name' => 'ChatRoomName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::USERNAME => array(
            'default' => '',
            'name' => 'UserName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DISPLAYNAME => array(
            'default' => '',
            'name' => 'DisplayName',
            'required' => false,
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
        $this->values[self::CHATROOMNAME] = self::$fields[self::CHATROOMNAME]['default'];
        $this->values[self::USERNAME] = self::$fields[self::USERNAME]['default'];
        $this->values[self::DISPLAYNAME] = self::$fields[self::DISPLAYNAME]['default'];
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
     * Sets value of 'ChatRoomName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setChatRoomName($value)
    {
        return $this->set(self::CHATROOMNAME, $value);
    }

    /**
     * Returns value of 'ChatRoomName' property
     *
     * @return string
     */
    public function getChatRoomName()
    {
        $value = $this->get(self::CHATROOMNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'ChatRoomName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatRoomName()
    {
        return $this->get(self::CHATROOMNAME) !== null;
    }

    /**
     * Sets value of 'UserName' property
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
     * Returns value of 'UserName' property
     *
     * @return string
     */
    public function getUserName()
    {
        $value = $this->get(self::USERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'UserName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUserName()
    {
        return $this->get(self::USERNAME) !== null;
    }

    /**
     * Sets value of 'DisplayName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDisplayName($value)
    {
        return $this->set(self::DISPLAYNAME, $value);
    }

    /**
     * Returns value of 'DisplayName' property
     *
     * @return string
     */
    public function getDisplayName()
    {
        $value = $this->get(self::DISPLAYNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'DisplayName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDisplayName()
    {
        return $this->get(self::DISPLAYNAME) !== null;
    }
}
}