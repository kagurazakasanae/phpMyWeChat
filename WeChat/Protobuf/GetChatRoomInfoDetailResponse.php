<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GetChatRoomInfoDetailResponse message
 */
class GetChatRoomInfoDetailResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const ANNOUNCEMENT = 2;
    const CHATROOMINFOVERSION = 3;
    const ANNOUNCEMENTEDITOR = 4;
    const ANNOUNCEMENTPUBLISHTIME = 5;
    const CHATROOMSTATUS = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::ANNOUNCEMENT => array(
            'name' => 'announcement',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CHATROOMINFOVERSION => array(
            'name' => 'chatRoomInfoVersion',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ANNOUNCEMENTEDITOR => array(
            'name' => 'announcementEditor',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ANNOUNCEMENTPUBLISHTIME => array(
            'name' => 'announcementPublishTime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CHATROOMSTATUS => array(
            'name' => 'chatRoomStatus',
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
        $this->values[self::BASERESPONSE] = null;
        $this->values[self::ANNOUNCEMENT] = null;
        $this->values[self::CHATROOMINFOVERSION] = null;
        $this->values[self::ANNOUNCEMENTEDITOR] = null;
        $this->values[self::ANNOUNCEMENTPUBLISHTIME] = null;
        $this->values[self::CHATROOMSTATUS] = null;
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
     * Sets value of 'chatRoomInfoVersion' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChatRoomInfoVersion($value)
    {
        return $this->set(self::CHATROOMINFOVERSION, $value);
    }

    /**
     * Returns value of 'chatRoomInfoVersion' property
     *
     * @return integer
     */
    public function getChatRoomInfoVersion()
    {
        $value = $this->get(self::CHATROOMINFOVERSION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'chatRoomInfoVersion' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatRoomInfoVersion()
    {
        return $this->get(self::CHATROOMINFOVERSION) !== null;
    }

    /**
     * Sets value of 'announcementEditor' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAnnouncementEditor($value)
    {
        return $this->set(self::ANNOUNCEMENTEDITOR, $value);
    }

    /**
     * Returns value of 'announcementEditor' property
     *
     * @return string
     */
    public function getAnnouncementEditor()
    {
        $value = $this->get(self::ANNOUNCEMENTEDITOR);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'announcementEditor' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAnnouncementEditor()
    {
        return $this->get(self::ANNOUNCEMENTEDITOR) !== null;
    }

    /**
     * Sets value of 'announcementPublishTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAnnouncementPublishTime($value)
    {
        return $this->set(self::ANNOUNCEMENTPUBLISHTIME, $value);
    }

    /**
     * Returns value of 'announcementPublishTime' property
     *
     * @return integer
     */
    public function getAnnouncementPublishTime()
    {
        $value = $this->get(self::ANNOUNCEMENTPUBLISHTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'announcementPublishTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAnnouncementPublishTime()
    {
        return $this->get(self::ANNOUNCEMENTPUBLISHTIME) !== null;
    }

    /**
     * Sets value of 'chatRoomStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChatRoomStatus($value)
    {
        return $this->set(self::CHATROOMSTATUS, $value);
    }

    /**
     * Returns value of 'chatRoomStatus' property
     *
     * @return integer
     */
    public function getChatRoomStatus()
    {
        $value = $this->get(self::CHATROOMSTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'chatRoomStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatRoomStatus()
    {
        return $this->get(self::CHATROOMSTATUS) !== null;
    }
}
}