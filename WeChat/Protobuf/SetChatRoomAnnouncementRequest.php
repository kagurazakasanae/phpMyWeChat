<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SetChatRoomAnnouncementRequest message
 */
class SetChatRoomAnnouncementRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const CHATROOMNAME = 2;
    const ANNOUNCEMENT = 3;
    const SETANNOUNCEMENTFLAG = 4;

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
        self::ANNOUNCEMENT => array(
            'name' => 'announcement',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SETANNOUNCEMENTFLAG => array(
            'name' => 'setAnnouncementFlag',
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
        $this->values[self::BASEREQUEST] = null;
        $this->values[self::CHATROOMNAME] = null;
        $this->values[self::ANNOUNCEMENT] = null;
        $this->values[self::SETANNOUNCEMENTFLAG] = null;
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

    /**
     * Sets value of 'announcement' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAnnouncement($value)
    {
        return $this->set(self::ANNOUNCEMENT, $value);
    }

    /**
     * Returns value of 'announcement' property
     *
     * @return string
     */
    public function getAnnouncement()
    {
        $value = $this->get(self::ANNOUNCEMENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'announcement' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAnnouncement()
    {
        return $this->get(self::ANNOUNCEMENT) !== null;
    }

    /**
     * Sets value of 'setAnnouncementFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSetAnnouncementFlag($value)
    {
        return $this->set(self::SETANNOUNCEMENTFLAG, $value);
    }

    /**
     * Returns value of 'setAnnouncementFlag' property
     *
     * @return integer
     */
    public function getSetAnnouncementFlag()
    {
        $value = $this->get(self::SETANNOUNCEMENTFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'setAnnouncementFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSetAnnouncementFlag()
    {
        return $this->get(self::SETANNOUNCEMENTFLAG) !== null;
    }
}
}