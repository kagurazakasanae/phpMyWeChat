<?php
/**
 * Auto generated from x.proto at 2019-11-12 23:25:16
 */

namespace {
/**
 * ModChatRoomMemberFlag message
 */
class ModChatRoomMemberFlag extends \ProtobufMessage
{
    /* Field index constants */
    const CHATROOMNAME = 1;
    const USERNAME = 2;
    const FLAGSWITCH = 3;
    const VALUE = 4;

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
        self::FLAGSWITCH => array(
            'name' => 'FlagSwitch',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VALUE => array(
            'name' => 'Value',
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
        $this->values[self::CHATROOMNAME] = self::$fields[self::CHATROOMNAME]['default'];
        $this->values[self::USERNAME] = self::$fields[self::USERNAME]['default'];
        $this->values[self::FLAGSWITCH] = null;
        $this->values[self::VALUE] = null;
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
     * Sets value of 'FlagSwitch' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFlagSwitch($value)
    {
        return $this->set(self::FLAGSWITCH, $value);
    }

    /**
     * Returns value of 'FlagSwitch' property
     *
     * @return integer
     */
    public function getFlagSwitch()
    {
        $value = $this->get(self::FLAGSWITCH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'FlagSwitch' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFlagSwitch()
    {
        return $this->get(self::FLAGSWITCH) !== null;
    }

    /**
     * Sets value of 'Value' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setValue($value)
    {
        return $this->set(self::VALUE, $value);
    }

    /**
     * Returns value of 'Value' property
     *
     * @return integer
     */
    public function getValue()
    {
        $value = $this->get(self::VALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Value' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValue()
    {
        return $this->get(self::VALUE) !== null;
    }
}
}