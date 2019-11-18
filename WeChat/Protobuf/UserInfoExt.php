<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * UserInfoExt message
 */
class UserInfoExt extends \ProtobufMessage
{
    /* Field index constants */
    const SNSUSERINFO = 1;
    const MYBRANDLIST = 2;
    const MSGPUSHSOUND = 3;
    const VOIPPUSHSOUND = 4;
    const BIGCHATROOMSIZE = 5;
    const BIGCHATROOMQUOTA = 6;
    const BIGCHATROOMINVITE = 7;
    const SAFEMOBILE = 8;
    const BIGHEADIMGURL = 9;
    const SMALLHEADIMGURL = 10;
    const MAINACCTTYPE = 11;
    const EXTXML = 12;
    const SAFEDEVICELIST = 13;
    const SAFEDEVICE = 14;
    const GRAYSCALEFLAG = 15;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SNSUSERINFO => array(
            'name' => 'snsUserInfo',
            'required' => true,
            'type' => '\SnsUserInfo'
        ),
        self::MYBRANDLIST => array(
            'name' => 'myBrandList',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MSGPUSHSOUND => array(
            'name' => 'msgPushSound',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VOIPPUSHSOUND => array(
            'name' => 'voipPushSound',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BIGCHATROOMSIZE => array(
            'name' => 'bigChatRoomSize',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BIGCHATROOMQUOTA => array(
            'name' => 'bigChatRoomQuota',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BIGCHATROOMINVITE => array(
            'name' => 'bigChatRoomInvite',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SAFEMOBILE => array(
            'name' => 'safeMobile',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BIGHEADIMGURL => array(
            'name' => 'bigHeadImgUrl',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SMALLHEADIMGURL => array(
            'name' => 'smallHeadImgUrl',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MAINACCTTYPE => array(
            'name' => 'mainAcctType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EXTXML => array(
            'name' => 'extXml',
            'required' => true,
            'type' => '\SKBuiltinString'
        ),
        self::SAFEDEVICELIST => array(
            'name' => 'safeDeviceList',
            'required' => true,
            'type' => '\SafeDeviceList'
        ),
        self::SAFEDEVICE => array(
            'name' => 'safeDevice',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GRAYSCALEFLAG => array(
            'name' => 'grayscaleFlag',
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
        $this->values[self::SNSUSERINFO] = null;
        $this->values[self::MYBRANDLIST] = null;
        $this->values[self::MSGPUSHSOUND] = null;
        $this->values[self::VOIPPUSHSOUND] = null;
        $this->values[self::BIGCHATROOMSIZE] = null;
        $this->values[self::BIGCHATROOMQUOTA] = null;
        $this->values[self::BIGCHATROOMINVITE] = null;
        $this->values[self::SAFEMOBILE] = null;
        $this->values[self::BIGHEADIMGURL] = null;
        $this->values[self::SMALLHEADIMGURL] = null;
        $this->values[self::MAINACCTTYPE] = null;
        $this->values[self::EXTXML] = null;
        $this->values[self::SAFEDEVICELIST] = null;
        $this->values[self::SAFEDEVICE] = null;
        $this->values[self::GRAYSCALEFLAG] = null;
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
     * Sets value of 'snsUserInfo' property
     *
     * @param \SnsUserInfo $value Property value
     *
     * @return null
     */
    public function setSnsUserInfo(\SnsUserInfo $value=null)
    {
        return $this->set(self::SNSUSERINFO, $value);
    }

    /**
     * Returns value of 'snsUserInfo' property
     *
     * @return \SnsUserInfo
     */
    public function getSnsUserInfo()
    {
        return $this->get(self::SNSUSERINFO);
    }

    /**
     * Returns true if 'snsUserInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSnsUserInfo()
    {
        return $this->get(self::SNSUSERINFO) !== null;
    }

    /**
     * Sets value of 'myBrandList' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMyBrandList($value)
    {
        return $this->set(self::MYBRANDLIST, $value);
    }

    /**
     * Returns value of 'myBrandList' property
     *
     * @return string
     */
    public function getMyBrandList()
    {
        $value = $this->get(self::MYBRANDLIST);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'myBrandList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMyBrandList()
    {
        return $this->get(self::MYBRANDLIST) !== null;
    }

    /**
     * Sets value of 'msgPushSound' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMsgPushSound($value)
    {
        return $this->set(self::MSGPUSHSOUND, $value);
    }

    /**
     * Returns value of 'msgPushSound' property
     *
     * @return string
     */
    public function getMsgPushSound()
    {
        $value = $this->get(self::MSGPUSHSOUND);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'msgPushSound' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgPushSound()
    {
        return $this->get(self::MSGPUSHSOUND) !== null;
    }

    /**
     * Sets value of 'voipPushSound' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVoipPushSound($value)
    {
        return $this->set(self::VOIPPUSHSOUND, $value);
    }

    /**
     * Returns value of 'voipPushSound' property
     *
     * @return string
     */
    public function getVoipPushSound()
    {
        $value = $this->get(self::VOIPPUSHSOUND);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'voipPushSound' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVoipPushSound()
    {
        return $this->get(self::VOIPPUSHSOUND) !== null;
    }

    /**
     * Sets value of 'bigChatRoomSize' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBigChatRoomSize($value)
    {
        return $this->set(self::BIGCHATROOMSIZE, $value);
    }

    /**
     * Returns value of 'bigChatRoomSize' property
     *
     * @return integer
     */
    public function getBigChatRoomSize()
    {
        $value = $this->get(self::BIGCHATROOMSIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bigChatRoomSize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBigChatRoomSize()
    {
        return $this->get(self::BIGCHATROOMSIZE) !== null;
    }

    /**
     * Sets value of 'bigChatRoomQuota' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBigChatRoomQuota($value)
    {
        return $this->set(self::BIGCHATROOMQUOTA, $value);
    }

    /**
     * Returns value of 'bigChatRoomQuota' property
     *
     * @return integer
     */
    public function getBigChatRoomQuota()
    {
        $value = $this->get(self::BIGCHATROOMQUOTA);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bigChatRoomQuota' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBigChatRoomQuota()
    {
        return $this->get(self::BIGCHATROOMQUOTA) !== null;
    }

    /**
     * Sets value of 'bigChatRoomInvite' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBigChatRoomInvite($value)
    {
        return $this->set(self::BIGCHATROOMINVITE, $value);
    }

    /**
     * Returns value of 'bigChatRoomInvite' property
     *
     * @return integer
     */
    public function getBigChatRoomInvite()
    {
        $value = $this->get(self::BIGCHATROOMINVITE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bigChatRoomInvite' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBigChatRoomInvite()
    {
        return $this->get(self::BIGCHATROOMINVITE) !== null;
    }

    /**
     * Sets value of 'safeMobile' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSafeMobile($value)
    {
        return $this->set(self::SAFEMOBILE, $value);
    }

    /**
     * Returns value of 'safeMobile' property
     *
     * @return string
     */
    public function getSafeMobile()
    {
        $value = $this->get(self::SAFEMOBILE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'safeMobile' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSafeMobile()
    {
        return $this->get(self::SAFEMOBILE) !== null;
    }

    /**
     * Sets value of 'bigHeadImgUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBigHeadImgUrl($value)
    {
        return $this->set(self::BIGHEADIMGURL, $value);
    }

    /**
     * Returns value of 'bigHeadImgUrl' property
     *
     * @return string
     */
    public function getBigHeadImgUrl()
    {
        $value = $this->get(self::BIGHEADIMGURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'bigHeadImgUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBigHeadImgUrl()
    {
        return $this->get(self::BIGHEADIMGURL) !== null;
    }

    /**
     * Sets value of 'smallHeadImgUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSmallHeadImgUrl($value)
    {
        return $this->set(self::SMALLHEADIMGURL, $value);
    }

    /**
     * Returns value of 'smallHeadImgUrl' property
     *
     * @return string
     */
    public function getSmallHeadImgUrl()
    {
        $value = $this->get(self::SMALLHEADIMGURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'smallHeadImgUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSmallHeadImgUrl()
    {
        return $this->get(self::SMALLHEADIMGURL) !== null;
    }

    /**
     * Sets value of 'mainAcctType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMainAcctType($value)
    {
        return $this->set(self::MAINACCTTYPE, $value);
    }

    /**
     * Returns value of 'mainAcctType' property
     *
     * @return integer
     */
    public function getMainAcctType()
    {
        $value = $this->get(self::MAINACCTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'mainAcctType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMainAcctType()
    {
        return $this->get(self::MAINACCTTYPE) !== null;
    }

    /**
     * Sets value of 'extXml' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setExtXml(\SKBuiltinString $value=null)
    {
        return $this->set(self::EXTXML, $value);
    }

    /**
     * Returns value of 'extXml' property
     *
     * @return \SKBuiltinString
     */
    public function getExtXml()
    {
        return $this->get(self::EXTXML);
    }

    /**
     * Returns true if 'extXml' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExtXml()
    {
        return $this->get(self::EXTXML) !== null;
    }

    /**
     * Sets value of 'safeDeviceList' property
     *
     * @param \SafeDeviceList $value Property value
     *
     * @return null
     */
    public function setSafeDeviceList(\SafeDeviceList $value=null)
    {
        return $this->set(self::SAFEDEVICELIST, $value);
    }

    /**
     * Returns value of 'safeDeviceList' property
     *
     * @return \SafeDeviceList
     */
    public function getSafeDeviceList()
    {
        return $this->get(self::SAFEDEVICELIST);
    }

    /**
     * Returns true if 'safeDeviceList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSafeDeviceList()
    {
        return $this->get(self::SAFEDEVICELIST) !== null;
    }

    /**
     * Sets value of 'safeDevice' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSafeDevice($value)
    {
        return $this->set(self::SAFEDEVICE, $value);
    }

    /**
     * Returns value of 'safeDevice' property
     *
     * @return integer
     */
    public function getSafeDevice()
    {
        $value = $this->get(self::SAFEDEVICE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'safeDevice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSafeDevice()
    {
        return $this->get(self::SAFEDEVICE) !== null;
    }

    /**
     * Sets value of 'grayscaleFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGrayscaleFlag($value)
    {
        return $this->set(self::GRAYSCALEFLAG, $value);
    }

    /**
     * Returns value of 'grayscaleFlag' property
     *
     * @return integer
     */
    public function getGrayscaleFlag()
    {
        $value = $this->get(self::GRAYSCALEFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'grayscaleFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGrayscaleFlag()
    {
        return $this->get(self::GRAYSCALEFLAG) !== null;
    }
}
}