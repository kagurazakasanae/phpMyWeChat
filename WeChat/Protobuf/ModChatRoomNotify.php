<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * ModChatRoomNotify message
 */
class ModChatRoomNotify extends \ProtobufMessage
{
    /* Field index constants */
    const CHATROOMNAME = 1;
    const STATUS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CHATROOMNAME => array(
            'name' => 'chatRoomName',
            'required' => true,
            'type' => '\SKBuiltinString'
        ),
        self::STATUS => array(
            'name' => 'status',
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
        $this->values[self::CHATROOMNAME] = null;
        $this->values[self::STATUS] = null;
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
     * Sets value of 'chatRoomName' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setChatRoomName(\SKBuiltinString $value=null)
    {
        return $this->set(self::CHATROOMNAME, $value);
    }

    /**
     * Returns value of 'chatRoomName' property
     *
     * @return \SKBuiltinString
     */
    public function getChatRoomName()
    {
        return $this->get(self::CHATROOMNAME);
    }

    /**
     * Returns true if 'chatRoomName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatRoomName()
    {
        return $this->get(self::CHATROOMNAME) !== null;
    }

    /**
     * Sets value of 'status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStatus($value)
    {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return integer
     */
    public function getStatus()
    {
        $value = $this->get(self::STATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'status' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStatus()
    {
        return $this->get(self::STATUS) !== null;
    }
}
}