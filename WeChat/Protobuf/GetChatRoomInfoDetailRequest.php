<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GetChatRoomInfoDetailRequest message
 */
class GetChatRoomInfoDetailRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const CHATROOMNAME = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::CHATROOMNAME => array(
            'name' => 'chatRoomName',
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
        $this->values[self::BASEREQUEST] = null;
        $this->values[self::CHATROOMNAME] = null;
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
     * Sets value of 'baseRequest' property
     *
     * @param \BaseRequest $value Property value
     *
     * @return null
     */
    public function setBaseRequest(\BaseRequest $value=null)
    {
        return $this->set(self::BASEREQUEST, $value);
    }

    /**
     * Returns value of 'baseRequest' property
     *
     * @return \BaseRequest
     */
    public function getBaseRequest()
    {
        return $this->get(self::BASEREQUEST);
    }

    /**
     * Returns true if 'baseRequest' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseRequest()
    {
        return $this->get(self::BASEREQUEST) !== null;
    }

    /**
     * Sets value of 'chatRoomName' property
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
     * Returns value of 'chatRoomName' property
     *
     * @return string
     */
    public function getChatRoomName()
    {
        $value = $this->get(self::CHATROOMNAME);
        return $value === null ? (string)$value : $value;
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
}
}