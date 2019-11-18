<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * USERINFOEXT message
 */
class UserInfoExt2 extends \ProtobufMessage
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
    const GOOGLECONTACTNAME = 16;
    const IDCARDNUM = 17;
    const REALNAME = 18;
    const REGCOUNTRY = 19;
    const BBPPID = 20;
    const BBPIN = 21;
    const BBMNICKNAME = 22;
    const LINKEDINCONTACKITEM = 23;
    const KFINFO = 24;
    const PATTERNLOCKINFO = 25;
    const SECURITYDEVICEID = 26;
    const PAYWALLETTYPE = 27;
    const WEIDIANINFO = 28;
    const WALLETREGION = 29;
    const EXTSTATUS = 30;
    const F2FPUSHSOUND = 31;
    const USERSTATUS = 32;

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
        self::GOOGLECONTACTNAME => array(
            'name' => 'googleContactName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::IDCARDNUM => array(
            'name' => 'idcardNum',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REALNAME => array(
            'name' => 'realName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REGCOUNTRY => array(
            'name' => 'regCountry',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BBPPID => array(
            'name' => 'bbppid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BBPIN => array(
            'name' => 'bbpin',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BBMNICKNAME => array(
            'name' => 'bbmnickName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LINKEDINCONTACKITEM => array(
            'name' => 'linkedinContackItem',
            'required' => true,
            'type' => '\LinkedinContactItem'
        ),
        self::KFINFO => array(
            'name' => 'kfinfo',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PATTERNLOCKINFO => array(
            'name' => 'patternLockInfo',
            'required' => true,
            'type' => '\PatternLockInfo'
        ),
        self::SECURITYDEVICEID => array(
            'name' => 'securityDeviceId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PAYWALLETTYPE => array(
            'name' => 'payWalletType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WEIDIANINFO => array(
            'name' => 'weiDianInfo',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::WALLETREGION => array(
            'name' => 'walletRegion',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EXTSTATUS => array(
            'name' => 'extStatus',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::F2FPUSHSOUND => array(
            'name' => 'f2FpushSound',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::USERSTATUS => array(
            'name' => 'userStatus',
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
        $this->values[self::GOOGLECONTACTNAME] = null;
        $this->values[self::IDCARDNUM] = null;
        $this->values[self::REALNAME] = null;
        $this->values[self::REGCOUNTRY] = null;
        $this->values[self::BBPPID] = null;
        $this->values[self::BBPIN] = null;
        $this->values[self::BBMNICKNAME] = null;
        $this->values[self::LINKEDINCONTACKITEM] = null;
        $this->values[self::KFINFO] = null;
        $this->values[self::PATTERNLOCKINFO] = null;
        $this->values[self::SECURITYDEVICEID] = null;
        $this->values[self::PAYWALLETTYPE] = null;
        $this->values[self::WEIDIANINFO] = null;
        $this->values[self::WALLETREGION] = null;
        $this->values[self::EXTSTATUS] = null;
        $this->values[self::F2FPUSHSOUND] = null;
        $this->values[self::USERSTATUS] = null;
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

    /**
     * Sets value of 'googleContactName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGoogleContactName($value)
    {
        return $this->set(self::GOOGLECONTACTNAME, $value);
    }

    /**
     * Returns value of 'googleContactName' property
     *
     * @return string
     */
    public function getGoogleContactName()
    {
        $value = $this->get(self::GOOGLECONTACTNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'googleContactName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGoogleContactName()
    {
        return $this->get(self::GOOGLECONTACTNAME) !== null;
    }

    /**
     * Sets value of 'idcardNum' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIdcardNum($value)
    {
        return $this->set(self::IDCARDNUM, $value);
    }

    /**
     * Returns value of 'idcardNum' property
     *
     * @return string
     */
    public function getIdcardNum()
    {
        $value = $this->get(self::IDCARDNUM);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'idcardNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIdcardNum()
    {
        return $this->get(self::IDCARDNUM) !== null;
    }

    /**
     * Sets value of 'realName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRealName($value)
    {
        return $this->set(self::REALNAME, $value);
    }

    /**
     * Returns value of 'realName' property
     *
     * @return string
     */
    public function getRealName()
    {
        $value = $this->get(self::REALNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'realName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRealName()
    {
        return $this->get(self::REALNAME) !== null;
    }

    /**
     * Sets value of 'regCountry' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRegCountry($value)
    {
        return $this->set(self::REGCOUNTRY, $value);
    }

    /**
     * Returns value of 'regCountry' property
     *
     * @return string
     */
    public function getRegCountry()
    {
        $value = $this->get(self::REGCOUNTRY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'regCountry' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRegCountry()
    {
        return $this->get(self::REGCOUNTRY) !== null;
    }

    /**
     * Sets value of 'bbppid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBbppid($value)
    {
        return $this->set(self::BBPPID, $value);
    }

    /**
     * Returns value of 'bbppid' property
     *
     * @return string
     */
    public function getBbppid()
    {
        $value = $this->get(self::BBPPID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'bbppid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBbppid()
    {
        return $this->get(self::BBPPID) !== null;
    }

    /**
     * Sets value of 'bbpin' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBbpin($value)
    {
        return $this->set(self::BBPIN, $value);
    }

    /**
     * Returns value of 'bbpin' property
     *
     * @return string
     */
    public function getBbpin()
    {
        $value = $this->get(self::BBPIN);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'bbpin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBbpin()
    {
        return $this->get(self::BBPIN) !== null;
    }

    /**
     * Sets value of 'bbmnickName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBbmnickName($value)
    {
        return $this->set(self::BBMNICKNAME, $value);
    }

    /**
     * Returns value of 'bbmnickName' property
     *
     * @return string
     */
    public function getBbmnickName()
    {
        $value = $this->get(self::BBMNICKNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'bbmnickName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBbmnickName()
    {
        return $this->get(self::BBMNICKNAME) !== null;
    }

    /**
     * Sets value of 'linkedinContackItem' property
     *
     * @param \LinkedinContactItem $value Property value
     *
     * @return null
     */
    public function setLinkedinContackItem(\LinkedinContactItem $value=null)
    {
        return $this->set(self::LINKEDINCONTACKITEM, $value);
    }

    /**
     * Returns value of 'linkedinContackItem' property
     *
     * @return \LinkedinContactItem
     */
    public function getLinkedinContackItem()
    {
        return $this->get(self::LINKEDINCONTACKITEM);
    }

    /**
     * Returns true if 'linkedinContackItem' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLinkedinContackItem()
    {
        return $this->get(self::LINKEDINCONTACKITEM) !== null;
    }

    /**
     * Sets value of 'kfinfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setKfinfo($value)
    {
        return $this->set(self::KFINFO, $value);
    }

    /**
     * Returns value of 'kfinfo' property
     *
     * @return string
     */
    public function getKfinfo()
    {
        $value = $this->get(self::KFINFO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'kfinfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKfinfo()
    {
        return $this->get(self::KFINFO) !== null;
    }

    /**
     * Sets value of 'patternLockInfo' property
     *
     * @param \PatternLockInfo $value Property value
     *
     * @return null
     */
    public function setPatternLockInfo(\PatternLockInfo $value=null)
    {
        return $this->set(self::PATTERNLOCKINFO, $value);
    }

    /**
     * Returns value of 'patternLockInfo' property
     *
     * @return \PatternLockInfo
     */
    public function getPatternLockInfo()
    {
        return $this->get(self::PATTERNLOCKINFO);
    }

    /**
     * Returns true if 'patternLockInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPatternLockInfo()
    {
        return $this->get(self::PATTERNLOCKINFO) !== null;
    }

    /**
     * Sets value of 'securityDeviceId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSecurityDeviceId($value)
    {
        return $this->set(self::SECURITYDEVICEID, $value);
    }

    /**
     * Returns value of 'securityDeviceId' property
     *
     * @return string
     */
    public function getSecurityDeviceId()
    {
        $value = $this->get(self::SECURITYDEVICEID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'securityDeviceId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSecurityDeviceId()
    {
        return $this->get(self::SECURITYDEVICEID) !== null;
    }

    /**
     * Sets value of 'payWalletType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPayWalletType($value)
    {
        return $this->set(self::PAYWALLETTYPE, $value);
    }

    /**
     * Returns value of 'payWalletType' property
     *
     * @return integer
     */
    public function getPayWalletType()
    {
        $value = $this->get(self::PAYWALLETTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'payWalletType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPayWalletType()
    {
        return $this->get(self::PAYWALLETTYPE) !== null;
    }

    /**
     * Sets value of 'weiDianInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWeiDianInfo($value)
    {
        return $this->set(self::WEIDIANINFO, $value);
    }

    /**
     * Returns value of 'weiDianInfo' property
     *
     * @return string
     */
    public function getWeiDianInfo()
    {
        $value = $this->get(self::WEIDIANINFO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'weiDianInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWeiDianInfo()
    {
        return $this->get(self::WEIDIANINFO) !== null;
    }

    /**
     * Sets value of 'walletRegion' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWalletRegion($value)
    {
        return $this->set(self::WALLETREGION, $value);
    }

    /**
     * Returns value of 'walletRegion' property
     *
     * @return integer
     */
    public function getWalletRegion()
    {
        $value = $this->get(self::WALLETREGION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'walletRegion' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWalletRegion()
    {
        return $this->get(self::WALLETREGION) !== null;
    }

    /**
     * Sets value of 'extStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setExtStatus($value)
    {
        return $this->set(self::EXTSTATUS, $value);
    }

    /**
     * Returns value of 'extStatus' property
     *
     * @return integer
     */
    public function getExtStatus()
    {
        $value = $this->get(self::EXTSTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'extStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExtStatus()
    {
        return $this->get(self::EXTSTATUS) !== null;
    }

    /**
     * Sets value of 'f2FpushSound' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setF2FpushSound($value)
    {
        return $this->set(self::F2FPUSHSOUND, $value);
    }

    /**
     * Returns value of 'f2FpushSound' property
     *
     * @return string
     */
    public function getF2FpushSound()
    {
        $value = $this->get(self::F2FPUSHSOUND);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'f2FpushSound' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasF2FpushSound()
    {
        return $this->get(self::F2FPUSHSOUND) !== null;
    }

    /**
     * Sets value of 'userStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUserStatus($value)
    {
        return $this->set(self::USERSTATUS, $value);
    }

    /**
     * Returns value of 'userStatus' property
     *
     * @return integer
     */
    public function getUserStatus()
    {
        $value = $this->get(self::USERSTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'userStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUserStatus()
    {
        return $this->get(self::USERSTATUS) !== null;
    }
}
}