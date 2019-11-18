<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * ModUserInfo message
 */
class ModUserInfo extends \ProtobufMessage
{
    /* Field index constants */
    const BITFLAG = 1;
    const USERNAME = 2;
    const NICKNAME = 3;
    const BINDUIN = 4;
    const BINDEMAIL = 5;
    const BINDMOBILE = 6;
    const STATUS = 7;
    const IMGLEN = 8;
    const IMGBUF = 9;
    const SEX = 10;
    const PROVINCE = 11;
    const CITY = 12;
    const SIGNATURE = 13;
    const PERSONALCARD = 14;
    const DISTURBSETTING = 15;
    const PLUGINFLAG = 16;
    const VERIFYFLAG = 17;
    const VERIFYINFO = 18;
    const POINT = 19;
    const EXPERIENCE = 20;
    const LEVEL = 21;
    const LEVELLOWEXP = 22;
    const LEVELHIGHEXP = 23;
    const WEIBO = 24;
    const PLUGINSWITCH = 25;
    const GMAILLIST = 26;
    const ALIAS = 27;
    const WEIBONICKNAME = 28;
    const WEIBOFLAG = 29;
    const FACEBOOKFLAG = 30;
    const FBUSERID = 31;
    const FBUSERNAME = 32;
    const ALBUMSTYLE = 33;
    const ALBUMFLAG = 34;
    const ALBUMBGIMGID = 35;
    const TXNEWSCATEGORY = 36;
    const FBTOKEN = 37;
    const COUNTRY = 38;
    const GRAYSCALEFLAG = 39;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BITFLAG => array(
            'name' => 'bitFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::USERNAME => array(
            'name' => 'userName',
            'required' => true,
            'type' => '\SKBuiltinString'
        ),
        self::NICKNAME => array(
            'name' => 'nickName',
            'required' => true,
            'type' => '\SKBuiltinString'
        ),
        self::BINDUIN => array(
            'name' => 'bindUin',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BINDEMAIL => array(
            'name' => 'bindEmail',
            'required' => true,
            'type' => '\SKBuiltinString'
        ),
        self::BINDMOBILE => array(
            'name' => 'bindMobile',
            'required' => true,
            'type' => '\SKBuiltinString'
        ),
        self::STATUS => array(
            'name' => 'status',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::IMGLEN => array(
            'name' => 'imgLen',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::IMGBUF => array(
            'name' => 'imgBuf',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SEX => array(
            'name' => 'sex',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PROVINCE => array(
            'name' => 'province',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CITY => array(
            'name' => 'city',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SIGNATURE => array(
            'name' => 'signature',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PERSONALCARD => array(
            'name' => 'personalCard',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DISTURBSETTING => array(
            'name' => 'disturbSetting',
            'required' => true,
            'type' => '\DisturbSetting'
        ),
        self::PLUGINFLAG => array(
            'name' => 'pluginFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VERIFYFLAG => array(
            'name' => 'verifyFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VERIFYINFO => array(
            'name' => 'verifyInfo',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::POINT => array(
            'name' => 'point',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EXPERIENCE => array(
            'name' => 'experience',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LEVEL => array(
            'name' => 'level',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LEVELLOWEXP => array(
            'name' => 'levelLowExp',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LEVELHIGHEXP => array(
            'name' => 'levelHighExp',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WEIBO => array(
            'name' => 'weibo',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PLUGINSWITCH => array(
            'name' => 'pluginSwitch',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GMAILLIST => array(
            'name' => 'gmailList',
            'required' => true,
            'type' => '\GmailList'
        ),
        self::ALIAS => array(
            'name' => 'alias',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::WEIBONICKNAME => array(
            'name' => 'weiboNickname',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::WEIBOFLAG => array(
            'name' => 'weiboFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FACEBOOKFLAG => array(
            'name' => 'faceBookFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FBUSERID => array(
            'name' => 'fBUserID',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FBUSERNAME => array(
            'name' => 'fBUserName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ALBUMSTYLE => array(
            'name' => 'albumStyle',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ALBUMFLAG => array(
            'name' => 'albumFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ALBUMBGIMGID => array(
            'name' => 'albumBGImgID',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TXNEWSCATEGORY => array(
            'name' => 'tXNewsCategory',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FBTOKEN => array(
            'name' => 'fBToken',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::COUNTRY => array(
            'name' => 'country',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::BITFLAG] = null;
        $this->values[self::USERNAME] = null;
        $this->values[self::NICKNAME] = null;
        $this->values[self::BINDUIN] = null;
        $this->values[self::BINDEMAIL] = null;
        $this->values[self::BINDMOBILE] = null;
        $this->values[self::STATUS] = null;
        $this->values[self::IMGLEN] = null;
        $this->values[self::IMGBUF] = null;
        $this->values[self::SEX] = null;
        $this->values[self::PROVINCE] = null;
        $this->values[self::CITY] = null;
        $this->values[self::SIGNATURE] = null;
        $this->values[self::PERSONALCARD] = null;
        $this->values[self::DISTURBSETTING] = null;
        $this->values[self::PLUGINFLAG] = null;
        $this->values[self::VERIFYFLAG] = null;
        $this->values[self::VERIFYINFO] = null;
        $this->values[self::POINT] = null;
        $this->values[self::EXPERIENCE] = null;
        $this->values[self::LEVEL] = null;
        $this->values[self::LEVELLOWEXP] = null;
        $this->values[self::LEVELHIGHEXP] = null;
        $this->values[self::WEIBO] = null;
        $this->values[self::PLUGINSWITCH] = null;
        $this->values[self::GMAILLIST] = null;
        $this->values[self::ALIAS] = null;
        $this->values[self::WEIBONICKNAME] = null;
        $this->values[self::WEIBOFLAG] = null;
        $this->values[self::FACEBOOKFLAG] = null;
        $this->values[self::FBUSERID] = null;
        $this->values[self::FBUSERNAME] = null;
        $this->values[self::ALBUMSTYLE] = null;
        $this->values[self::ALBUMFLAG] = null;
        $this->values[self::ALBUMBGIMGID] = null;
        $this->values[self::TXNEWSCATEGORY] = null;
        $this->values[self::FBTOKEN] = null;
        $this->values[self::COUNTRY] = null;
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
     * Sets value of 'bitFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBitFlag($value)
    {
        return $this->set(self::BITFLAG, $value);
    }

    /**
     * Returns value of 'bitFlag' property
     *
     * @return integer
     */
    public function getBitFlag()
    {
        $value = $this->get(self::BITFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bitFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBitFlag()
    {
        return $this->get(self::BITFLAG) !== null;
    }

    /**
     * Sets value of 'userName' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setUserName(\SKBuiltinString $value=null)
    {
        return $this->set(self::USERNAME, $value);
    }

    /**
     * Returns value of 'userName' property
     *
     * @return \SKBuiltinString
     */
    public function getUserName()
    {
        return $this->get(self::USERNAME);
    }

    /**
     * Returns true if 'userName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUserName()
    {
        return $this->get(self::USERNAME) !== null;
    }

    /**
     * Sets value of 'nickName' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setNickName(\SKBuiltinString $value=null)
    {
        return $this->set(self::NICKNAME, $value);
    }

    /**
     * Returns value of 'nickName' property
     *
     * @return \SKBuiltinString
     */
    public function getNickName()
    {
        return $this->get(self::NICKNAME);
    }

    /**
     * Returns true if 'nickName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNickName()
    {
        return $this->get(self::NICKNAME) !== null;
    }

    /**
     * Sets value of 'bindUin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBindUin($value)
    {
        return $this->set(self::BINDUIN, $value);
    }

    /**
     * Returns value of 'bindUin' property
     *
     * @return integer
     */
    public function getBindUin()
    {
        $value = $this->get(self::BINDUIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bindUin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBindUin()
    {
        return $this->get(self::BINDUIN) !== null;
    }

    /**
     * Sets value of 'bindEmail' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setBindEmail(\SKBuiltinString $value=null)
    {
        return $this->set(self::BINDEMAIL, $value);
    }

    /**
     * Returns value of 'bindEmail' property
     *
     * @return \SKBuiltinString
     */
    public function getBindEmail()
    {
        return $this->get(self::BINDEMAIL);
    }

    /**
     * Returns true if 'bindEmail' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBindEmail()
    {
        return $this->get(self::BINDEMAIL) !== null;
    }

    /**
     * Sets value of 'bindMobile' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setBindMobile(\SKBuiltinString $value=null)
    {
        return $this->set(self::BINDMOBILE, $value);
    }

    /**
     * Returns value of 'bindMobile' property
     *
     * @return \SKBuiltinString
     */
    public function getBindMobile()
    {
        return $this->get(self::BINDMOBILE);
    }

    /**
     * Returns true if 'bindMobile' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBindMobile()
    {
        return $this->get(self::BINDMOBILE) !== null;
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

    /**
     * Sets value of 'imgLen' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setImgLen($value)
    {
        return $this->set(self::IMGLEN, $value);
    }

    /**
     * Returns value of 'imgLen' property
     *
     * @return integer
     */
    public function getImgLen()
    {
        $value = $this->get(self::IMGLEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'imgLen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasImgLen()
    {
        return $this->get(self::IMGLEN) !== null;
    }

    /**
     * Sets value of 'imgBuf' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setImgBuf($value)
    {
        return $this->set(self::IMGBUF, $value);
    }

    /**
     * Returns value of 'imgBuf' property
     *
     * @return string
     */
    public function getImgBuf()
    {
        $value = $this->get(self::IMGBUF);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'imgBuf' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasImgBuf()
    {
        return $this->get(self::IMGBUF) !== null;
    }

    /**
     * Sets value of 'sex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSex($value)
    {
        return $this->set(self::SEX, $value);
    }

    /**
     * Returns value of 'sex' property
     *
     * @return integer
     */
    public function getSex()
    {
        $value = $this->get(self::SEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'sex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSex()
    {
        return $this->get(self::SEX) !== null;
    }

    /**
     * Sets value of 'province' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setProvince($value)
    {
        return $this->set(self::PROVINCE, $value);
    }

    /**
     * Returns value of 'province' property
     *
     * @return string
     */
    public function getProvince()
    {
        $value = $this->get(self::PROVINCE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'province' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasProvince()
    {
        return $this->get(self::PROVINCE) !== null;
    }

    /**
     * Sets value of 'city' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCity($value)
    {
        return $this->set(self::CITY, $value);
    }

    /**
     * Returns value of 'city' property
     *
     * @return string
     */
    public function getCity()
    {
        $value = $this->get(self::CITY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'city' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCity()
    {
        return $this->get(self::CITY) !== null;
    }

    /**
     * Sets value of 'signature' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSignature($value)
    {
        return $this->set(self::SIGNATURE, $value);
    }

    /**
     * Returns value of 'signature' property
     *
     * @return string
     */
    public function getSignature()
    {
        $value = $this->get(self::SIGNATURE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'signature' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSignature()
    {
        return $this->get(self::SIGNATURE) !== null;
    }

    /**
     * Sets value of 'personalCard' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPersonalCard($value)
    {
        return $this->set(self::PERSONALCARD, $value);
    }

    /**
     * Returns value of 'personalCard' property
     *
     * @return integer
     */
    public function getPersonalCard()
    {
        $value = $this->get(self::PERSONALCARD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'personalCard' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPersonalCard()
    {
        return $this->get(self::PERSONALCARD) !== null;
    }

    /**
     * Sets value of 'disturbSetting' property
     *
     * @param \DisturbSetting $value Property value
     *
     * @return null
     */
    public function setDisturbSetting(\DisturbSetting $value=null)
    {
        return $this->set(self::DISTURBSETTING, $value);
    }

    /**
     * Returns value of 'disturbSetting' property
     *
     * @return \DisturbSetting
     */
    public function getDisturbSetting()
    {
        return $this->get(self::DISTURBSETTING);
    }

    /**
     * Returns true if 'disturbSetting' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDisturbSetting()
    {
        return $this->get(self::DISTURBSETTING) !== null;
    }

    /**
     * Sets value of 'pluginFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPluginFlag($value)
    {
        return $this->set(self::PLUGINFLAG, $value);
    }

    /**
     * Returns value of 'pluginFlag' property
     *
     * @return integer
     */
    public function getPluginFlag()
    {
        $value = $this->get(self::PLUGINFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'pluginFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPluginFlag()
    {
        return $this->get(self::PLUGINFLAG) !== null;
    }

    /**
     * Sets value of 'verifyFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVerifyFlag($value)
    {
        return $this->set(self::VERIFYFLAG, $value);
    }

    /**
     * Returns value of 'verifyFlag' property
     *
     * @return integer
     */
    public function getVerifyFlag()
    {
        $value = $this->get(self::VERIFYFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'verifyFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVerifyFlag()
    {
        return $this->get(self::VERIFYFLAG) !== null;
    }

    /**
     * Sets value of 'verifyInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVerifyInfo($value)
    {
        return $this->set(self::VERIFYINFO, $value);
    }

    /**
     * Returns value of 'verifyInfo' property
     *
     * @return string
     */
    public function getVerifyInfo()
    {
        $value = $this->get(self::VERIFYINFO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'verifyInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVerifyInfo()
    {
        return $this->get(self::VERIFYINFO) !== null;
    }

    /**
     * Sets value of 'point' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPoint($value)
    {
        return $this->set(self::POINT, $value);
    }

    /**
     * Returns value of 'point' property
     *
     * @return integer
     */
    public function getPoint()
    {
        $value = $this->get(self::POINT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'point' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPoint()
    {
        return $this->get(self::POINT) !== null;
    }

    /**
     * Sets value of 'experience' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setExperience($value)
    {
        return $this->set(self::EXPERIENCE, $value);
    }

    /**
     * Returns value of 'experience' property
     *
     * @return integer
     */
    public function getExperience()
    {
        $value = $this->get(self::EXPERIENCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'experience' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExperience()
    {
        return $this->get(self::EXPERIENCE) !== null;
    }

    /**
     * Sets value of 'level' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLevel($value)
    {
        return $this->set(self::LEVEL, $value);
    }

    /**
     * Returns value of 'level' property
     *
     * @return integer
     */
    public function getLevel()
    {
        $value = $this->get(self::LEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'level' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLevel()
    {
        return $this->get(self::LEVEL) !== null;
    }

    /**
     * Sets value of 'levelLowExp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLevelLowExp($value)
    {
        return $this->set(self::LEVELLOWEXP, $value);
    }

    /**
     * Returns value of 'levelLowExp' property
     *
     * @return integer
     */
    public function getLevelLowExp()
    {
        $value = $this->get(self::LEVELLOWEXP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'levelLowExp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLevelLowExp()
    {
        return $this->get(self::LEVELLOWEXP) !== null;
    }

    /**
     * Sets value of 'levelHighExp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLevelHighExp($value)
    {
        return $this->set(self::LEVELHIGHEXP, $value);
    }

    /**
     * Returns value of 'levelHighExp' property
     *
     * @return integer
     */
    public function getLevelHighExp()
    {
        $value = $this->get(self::LEVELHIGHEXP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'levelHighExp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLevelHighExp()
    {
        return $this->get(self::LEVELHIGHEXP) !== null;
    }

    /**
     * Sets value of 'weibo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWeibo($value)
    {
        return $this->set(self::WEIBO, $value);
    }

    /**
     * Returns value of 'weibo' property
     *
     * @return string
     */
    public function getWeibo()
    {
        $value = $this->get(self::WEIBO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'weibo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWeibo()
    {
        return $this->get(self::WEIBO) !== null;
    }

    /**
     * Sets value of 'pluginSwitch' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPluginSwitch($value)
    {
        return $this->set(self::PLUGINSWITCH, $value);
    }

    /**
     * Returns value of 'pluginSwitch' property
     *
     * @return integer
     */
    public function getPluginSwitch()
    {
        $value = $this->get(self::PLUGINSWITCH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'pluginSwitch' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPluginSwitch()
    {
        return $this->get(self::PLUGINSWITCH) !== null;
    }

    /**
     * Sets value of 'gmailList' property
     *
     * @param \GmailList $value Property value
     *
     * @return null
     */
    public function setGmailList(\GmailList $value=null)
    {
        return $this->set(self::GMAILLIST, $value);
    }

    /**
     * Returns value of 'gmailList' property
     *
     * @return \GmailList
     */
    public function getGmailList()
    {
        return $this->get(self::GMAILLIST);
    }

    /**
     * Returns true if 'gmailList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGmailList()
    {
        return $this->get(self::GMAILLIST) !== null;
    }

    /**
     * Sets value of 'alias' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAlias($value)
    {
        return $this->set(self::ALIAS, $value);
    }

    /**
     * Returns value of 'alias' property
     *
     * @return string
     */
    public function getAlias()
    {
        $value = $this->get(self::ALIAS);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'alias' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAlias()
    {
        return $this->get(self::ALIAS) !== null;
    }

    /**
     * Sets value of 'weiboNickname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWeiboNickname($value)
    {
        return $this->set(self::WEIBONICKNAME, $value);
    }

    /**
     * Returns value of 'weiboNickname' property
     *
     * @return string
     */
    public function getWeiboNickname()
    {
        $value = $this->get(self::WEIBONICKNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'weiboNickname' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWeiboNickname()
    {
        return $this->get(self::WEIBONICKNAME) !== null;
    }

    /**
     * Sets value of 'weiboFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWeiboFlag($value)
    {
        return $this->set(self::WEIBOFLAG, $value);
    }

    /**
     * Returns value of 'weiboFlag' property
     *
     * @return integer
     */
    public function getWeiboFlag()
    {
        $value = $this->get(self::WEIBOFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'weiboFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWeiboFlag()
    {
        return $this->get(self::WEIBOFLAG) !== null;
    }

    /**
     * Sets value of 'faceBookFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFaceBookFlag($value)
    {
        return $this->set(self::FACEBOOKFLAG, $value);
    }

    /**
     * Returns value of 'faceBookFlag' property
     *
     * @return integer
     */
    public function getFaceBookFlag()
    {
        $value = $this->get(self::FACEBOOKFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'faceBookFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFaceBookFlag()
    {
        return $this->get(self::FACEBOOKFLAG) !== null;
    }

    /**
     * Sets value of 'fBUserID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFBUserID($value)
    {
        return $this->set(self::FBUSERID, $value);
    }

    /**
     * Returns value of 'fBUserID' property
     *
     * @return integer
     */
    public function getFBUserID()
    {
        $value = $this->get(self::FBUSERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'fBUserID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFBUserID()
    {
        return $this->get(self::FBUSERID) !== null;
    }

    /**
     * Sets value of 'fBUserName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFBUserName($value)
    {
        return $this->set(self::FBUSERNAME, $value);
    }

    /**
     * Returns value of 'fBUserName' property
     *
     * @return string
     */
    public function getFBUserName()
    {
        $value = $this->get(self::FBUSERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'fBUserName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFBUserName()
    {
        return $this->get(self::FBUSERNAME) !== null;
    }

    /**
     * Sets value of 'albumStyle' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAlbumStyle($value)
    {
        return $this->set(self::ALBUMSTYLE, $value);
    }

    /**
     * Returns value of 'albumStyle' property
     *
     * @return integer
     */
    public function getAlbumStyle()
    {
        $value = $this->get(self::ALBUMSTYLE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'albumStyle' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAlbumStyle()
    {
        return $this->get(self::ALBUMSTYLE) !== null;
    }

    /**
     * Sets value of 'albumFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAlbumFlag($value)
    {
        return $this->set(self::ALBUMFLAG, $value);
    }

    /**
     * Returns value of 'albumFlag' property
     *
     * @return integer
     */
    public function getAlbumFlag()
    {
        $value = $this->get(self::ALBUMFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'albumFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAlbumFlag()
    {
        return $this->get(self::ALBUMFLAG) !== null;
    }

    /**
     * Sets value of 'albumBGImgID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAlbumBGImgID($value)
    {
        return $this->set(self::ALBUMBGIMGID, $value);
    }

    /**
     * Returns value of 'albumBGImgID' property
     *
     * @return string
     */
    public function getAlbumBGImgID()
    {
        $value = $this->get(self::ALBUMBGIMGID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'albumBGImgID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAlbumBGImgID()
    {
        return $this->get(self::ALBUMBGIMGID) !== null;
    }

    /**
     * Sets value of 'tXNewsCategory' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTXNewsCategory($value)
    {
        return $this->set(self::TXNEWSCATEGORY, $value);
    }

    /**
     * Returns value of 'tXNewsCategory' property
     *
     * @return integer
     */
    public function getTXNewsCategory()
    {
        $value = $this->get(self::TXNEWSCATEGORY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'tXNewsCategory' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTXNewsCategory()
    {
        return $this->get(self::TXNEWSCATEGORY) !== null;
    }

    /**
     * Sets value of 'fBToken' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFBToken($value)
    {
        return $this->set(self::FBTOKEN, $value);
    }

    /**
     * Returns value of 'fBToken' property
     *
     * @return string
     */
    public function getFBToken()
    {
        $value = $this->get(self::FBTOKEN);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'fBToken' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFBToken()
    {
        return $this->get(self::FBTOKEN) !== null;
    }

    /**
     * Sets value of 'country' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCountry($value)
    {
        return $this->set(self::COUNTRY, $value);
    }

    /**
     * Returns value of 'country' property
     *
     * @return string
     */
    public function getCountry()
    {
        $value = $this->get(self::COUNTRY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'country' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCountry()
    {
        return $this->get(self::COUNTRY) !== null;
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