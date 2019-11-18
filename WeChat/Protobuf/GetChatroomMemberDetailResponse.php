<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GetChatroomMemberDetailResponse message
 */
class GetChatroomMemberDetailResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const CHATROOMUSERNAME = 2;
    const CLIENTVERSION = 3;
    const NEWCHATROOMDATA = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::CHATROOMUSERNAME => array(
            'name' => 'chatroomUserName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CLIENTVERSION => array(
            'name' => 'clientVersion',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEWCHATROOMDATA => array(
            'name' => 'newChatroomData',
            'required' => true,
            'type' => '\ChatRoomMemberData'
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
        $this->values[self::BASERESPONSE] = null;
        $this->values[self::CHATROOMUSERNAME] = null;
        $this->values[self::CLIENTVERSION] = null;
        $this->values[self::NEWCHATROOMDATA] = null;
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
     * Sets value of 'baseResponse' property
     *
     * @param \BaseResponse $value Property value
     *
     * @return null
     */
    public function setBaseResponse(\BaseResponse $value=null)
    {
        return $this->set(self::BASERESPONSE, $value);
    }

    /**
     * Returns value of 'baseResponse' property
     *
     * @return \BaseResponse
     */
    public function getBaseResponse()
    {
        return $this->get(self::BASERESPONSE);
    }

    /**
     * Returns true if 'baseResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseResponse()
    {
        return $this->get(self::BASERESPONSE) !== null;
    }

    /**
     * Sets value of 'chatroomUserName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setChatroomUserName($value)
    {
        return $this->set(self::CHATROOMUSERNAME, $value);
    }

    /**
     * Returns value of 'chatroomUserName' property
     *
     * @return string
     */
    public function getChatroomUserName()
    {
        $value = $this->get(self::CHATROOMUSERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'chatroomUserName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatroomUserName()
    {
        return $this->get(self::CHATROOMUSERNAME) !== null;
    }

    /**
     * Sets value of 'clientVersion' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setClientVersion($value)
    {
        return $this->set(self::CLIENTVERSION, $value);
    }

    /**
     * Returns value of 'clientVersion' property
     *
     * @return integer
     */
    public function getClientVersion()
    {
        $value = $this->get(self::CLIENTVERSION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'clientVersion' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientVersion()
    {
        return $this->get(self::CLIENTVERSION) !== null;
    }

    /**
     * Sets value of 'newChatroomData' property
     *
     * @param \ChatRoomMemberData $value Property value
     *
     * @return null
     */
    public function setNewChatroomData(\ChatRoomMemberData $value=null)
    {
        return $this->set(self::NEWCHATROOMDATA, $value);
    }

    /**
     * Returns value of 'newChatroomData' property
     *
     * @return \ChatRoomMemberData
     */
    public function getNewChatroomData()
    {
        return $this->get(self::NEWCHATROOMDATA);
    }

    /**
     * Returns true if 'newChatroomData' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewChatroomData()
    {
        return $this->get(self::NEWCHATROOMDATA) !== null;
    }
}
}