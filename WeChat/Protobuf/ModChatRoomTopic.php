<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * ModChatRoomTopic message
 */
class ModChatRoomTopic extends \ProtobufMessage
{
    /* Field index constants */
    const CHATROOMNAME = 1;
    const CHATROOMTOPIC = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CHATROOMNAME => array(
            'name' => 'chatRoomName',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::CHATROOMTOPIC => array(
            'name' => 'chatRoomTopic',
            'required' => false,
            'type' => '\SKBuiltinString'
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
        $this->values[self::CHATROOMTOPIC] = null;
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
     * Sets value of 'chatRoomTopic' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setChatRoomTopic(\SKBuiltinString $value=null)
    {
        return $this->set(self::CHATROOMTOPIC, $value);
    }

    /**
     * Returns value of 'chatRoomTopic' property
     *
     * @return \SKBuiltinString
     */
    public function getChatRoomTopic()
    {
        return $this->get(self::CHATROOMTOPIC);
    }

    /**
     * Returns true if 'chatRoomTopic' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatRoomTopic()
    {
        return $this->get(self::CHATROOMTOPIC) !== null;
    }
}
}