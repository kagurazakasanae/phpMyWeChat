<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SearchContactResponse message
 */
class SearchContactResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const USERNAME = 2;
    const NICKNAME = 3;
    const PYINITIAL = 4;
    const QUANPIN = 5;
    const SEX = 6;
    const IMGBUF = 7;
    const PROVINCE = 8;
    const CITY = 9;
    const SIGNATURE = 10;
    const PERSONALCARD = 11;
    const VERIFYFLAG = 12;
    const VERIFYINFO = 13;
    const WEIBO = 14;
    const VERIFYCONTENT = 15;
    const WEIBONICKNAME = 16;
    const WEIBOFLAG = 17;
    const ALBUMSTYLE = 18;
    const ALBUMFLAG = 19;
    const ALBUMBGIMGID = 20;
    const SNSUSERINFO = 21;
    const COUNTRY = 22;
    const MYBRANDLIST = 23;
    const CUSTOMIZEDINFO = 24;
    const CONTACTCOUNT = 25;
    const CONTACTLIST = 26;
    const BIGHEADIMGURL = 27;
    const SMALLHEADIMGURL = 28;
    const RESBUF = 29;
    const ANTISPAMTICKET = 30;
    const KFWORKERID = 31;
    const MATCHTYPE = 32;
    const POPUPINFOMSG = 33;
    const OPENIMCONTACTCOUNT = 34;
    const OPENIMCONTACTLIST = 35;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
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
        self::PYINITIAL => array(
            'name' => 'pYInitial',
            'required' => true,
            'type' => '\SKBuiltinString'
        ),
        self::QUANPIN => array(
            'name' => 'quanPin',
            'required' => true,
            'type' => '\SKBuiltinString'
        ),
        self::SEX => array(
            'name' => 'sex',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::IMGBUF => array(
            'name' => 'imgBuf',
            'required' => true,
            'type' => '\SKBuiltinString_'
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
        self::WEIBO => array(
            'name' => 'weibo',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VERIFYCONTENT => array(
            'name' => 'verifyContent',
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
            'name' => 'albumBgimgId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SNSUSERINFO => array(
            'name' => 'snsUserInfo',
            'required' => true,
            'type' => '\SnsUserInfo'
        ),
        self::COUNTRY => array(
            'name' => 'country',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MYBRANDLIST => array(
            'name' => 'myBrandList',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CUSTOMIZEDINFO => array(
            'name' => 'customizedInfo',
            'required' => true,
            'type' => '\CustomizedInfo'
        ),
        self::CONTACTCOUNT => array(
            'name' => 'contactCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONTACTLIST => array(
            'name' => 'contactlist',
            'repeated' => true,
            'type' => '\SearchContactItem'
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
        self::RESBUF => array(
            'name' => 'resBuf',
            'required' => true,
            'type' => '\SKBuiltinString_'
        ),
        self::ANTISPAMTICKET => array(
            'name' => 'antispamTicket',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::KFWORKERID => array(
            'name' => 'kfworkerId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MATCHTYPE => array(
            'name' => 'matchType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::POPUPINFOMSG => array(
            'name' => 'popupInfoMsg',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OPENIMCONTACTCOUNT => array(
            'name' => 'openImcontactCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OPENIMCONTACTLIST => array(
            'name' => 'openImcontactList',
            'repeated' => true,
            'type' => '\Openimcontact'
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
        $this->values[self::USERNAME] = null;
        $this->values[self::NICKNAME] = null;
        $this->values[self::PYINITIAL] = null;
        $this->values[self::QUANPIN] = null;
        $this->values[self::SEX] = null;
        $this->values[self::IMGBUF] = null;
        $this->values[self::PROVINCE] = null;
        $this->values[self::CITY] = null;
        $this->values[self::SIGNATURE] = null;
        $this->values[self::PERSONALCARD] = null;
        $this->values[self::VERIFYFLAG] = null;
        $this->values[self::VERIFYINFO] = null;
        $this->values[self::WEIBO] = null;
        $this->values[self::VERIFYCONTENT] = null;
        $this->values[self::WEIBONICKNAME] = null;
        $this->values[self::WEIBOFLAG] = null;
        $this->values[self::ALBUMSTYLE] = null;
        $this->values[self::ALBUMFLAG] = null;
        $this->values[self::ALBUMBGIMGID] = null;
        $this->values[self::SNSUSERINFO] = null;
        $this->values[self::COUNTRY] = null;
        $this->values[self::MYBRANDLIST] = null;
        $this->values[self::CUSTOMIZEDINFO] = null;
        $this->values[self::CONTACTCOUNT] = null;
        $this->values[self::CONTACTLIST] = array();
        $this->values[self::BIGHEADIMGURL] = null;
        $this->values[self::SMALLHEADIMGURL] = null;
        $this->values[self::RESBUF] = null;
        $this->values[self::ANTISPAMTICKET] = null;
        $this->values[self::KFWORKERID] = null;
        $this->values[self::MATCHTYPE] = null;
        $this->values[self::POPUPINFOMSG] = null;
        $this->values[self::OPENIMCONTACTCOUNT] = null;
        $this->values[self::OPENIMCONTACTLIST] = array();
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
     * Sets value of 'pYInitial' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setPYInitial(\SKBuiltinString $value=null)
    {
        return $this->set(self::PYINITIAL, $value);
    }

    /**
     * Returns value of 'pYInitial' property
     *
     * @return \SKBuiltinString
     */
    public function getPYInitial()
    {
        return $this->get(self::PYINITIAL);
    }

    /**
     * Returns true if 'pYInitial' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPYInitial()
    {
        return $this->get(self::PYINITIAL) !== null;
    }

    /**
     * Sets value of 'quanPin' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setQuanPin(\SKBuiltinString $value=null)
    {
        return $this->set(self::QUANPIN, $value);
    }

    /**
     * Returns value of 'quanPin' property
     *
     * @return \SKBuiltinString
     */
    public function getQuanPin()
    {
        return $this->get(self::QUANPIN);
    }

    /**
     * Returns true if 'quanPin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasQuanPin()
    {
        return $this->get(self::QUANPIN) !== null;
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
     * Sets value of 'imgBuf' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setImgBuf(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::IMGBUF, $value);
    }

    /**
     * Returns value of 'imgBuf' property
     *
     * @return \SKBuiltinString_
     */
    public function getImgBuf()
    {
        return $this->get(self::IMGBUF);
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
     * Sets value of 'verifyContent' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVerifyContent($value)
    {
        return $this->set(self::VERIFYCONTENT, $value);
    }

    /**
     * Returns value of 'verifyContent' property
     *
     * @return string
     */
    public function getVerifyContent()
    {
        $value = $this->get(self::VERIFYCONTENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'verifyContent' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVerifyContent()
    {
        return $this->get(self::VERIFYCONTENT) !== null;
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
     * Sets value of 'albumBgimgId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAlbumBgimgId($value)
    {
        return $this->set(self::ALBUMBGIMGID, $value);
    }

    /**
     * Returns value of 'albumBgimgId' property
     *
     * @return string
     */
    public function getAlbumBgimgId()
    {
        $value = $this->get(self::ALBUMBGIMGID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'albumBgimgId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAlbumBgimgId()
    {
        return $this->get(self::ALBUMBGIMGID) !== null;
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
     * Sets value of 'customizedInfo' property
     *
     * @param \CustomizedInfo $value Property value
     *
     * @return null
     */
    public function setCustomizedInfo(\CustomizedInfo $value=null)
    {
        return $this->set(self::CUSTOMIZEDINFO, $value);
    }

    /**
     * Returns value of 'customizedInfo' property
     *
     * @return \CustomizedInfo
     */
    public function getCustomizedInfo()
    {
        return $this->get(self::CUSTOMIZEDINFO);
    }

    /**
     * Returns true if 'customizedInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCustomizedInfo()
    {
        return $this->get(self::CUSTOMIZEDINFO) !== null;
    }

    /**
     * Sets value of 'contactCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setContactCount($value)
    {
        return $this->set(self::CONTACTCOUNT, $value);
    }

    /**
     * Returns value of 'contactCount' property
     *
     * @return integer
     */
    public function getContactCount()
    {
        $value = $this->get(self::CONTACTCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'contactCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContactCount()
    {
        return $this->get(self::CONTACTCOUNT) !== null;
    }

    /**
     * Appends value to 'contactlist' list
     *
     * @param \SearchContactItem $value Value to append
     *
     * @return null
     */
    public function appendContactlist(\SearchContactItem $value)
    {
        return $this->append(self::CONTACTLIST, $value);
    }

    /**
     * Clears 'contactlist' list
     *
     * @return null
     */
    public function clearContactlist()
    {
        return $this->clear(self::CONTACTLIST);
    }

    /**
     * Returns 'contactlist' list
     *
     * @return \SearchContactItem[]
     */
    public function getContactlist()
    {
        return $this->get(self::CONTACTLIST);
    }

    /**
     * Returns true if 'contactlist' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContactlist()
    {
        return count($this->get(self::CONTACTLIST)) !== 0;
    }

    /**
     * Returns 'contactlist' iterator
     *
     * @return \ArrayIterator
     */
    public function getContactlistIterator()
    {
        return new \ArrayIterator($this->get(self::CONTACTLIST));
    }

    /**
     * Returns element from 'contactlist' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SearchContactItem
     */
    public function getContactlistAt($offset)
    {
        return $this->get(self::CONTACTLIST, $offset);
    }

    /**
     * Returns count of 'contactlist' list
     *
     * @return int
     */
    public function getContactlistCount()
    {
        return $this->count(self::CONTACTLIST);
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
     * Sets value of 'resBuf' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setResBuf(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::RESBUF, $value);
    }

    /**
     * Returns value of 'resBuf' property
     *
     * @return \SKBuiltinString_
     */
    public function getResBuf()
    {
        return $this->get(self::RESBUF);
    }

    /**
     * Returns true if 'resBuf' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasResBuf()
    {
        return $this->get(self::RESBUF) !== null;
    }

    /**
     * Sets value of 'antispamTicket' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAntispamTicket($value)
    {
        return $this->set(self::ANTISPAMTICKET, $value);
    }

    /**
     * Returns value of 'antispamTicket' property
     *
     * @return string
     */
    public function getAntispamTicket()
    {
        $value = $this->get(self::ANTISPAMTICKET);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'antispamTicket' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAntispamTicket()
    {
        return $this->get(self::ANTISPAMTICKET) !== null;
    }

    /**
     * Sets value of 'kfworkerId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setKfworkerId($value)
    {
        return $this->set(self::KFWORKERID, $value);
    }

    /**
     * Returns value of 'kfworkerId' property
     *
     * @return string
     */
    public function getKfworkerId()
    {
        $value = $this->get(self::KFWORKERID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'kfworkerId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKfworkerId()
    {
        return $this->get(self::KFWORKERID) !== null;
    }

    /**
     * Sets value of 'matchType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMatchType($value)
    {
        return $this->set(self::MATCHTYPE, $value);
    }

    /**
     * Returns value of 'matchType' property
     *
     * @return integer
     */
    public function getMatchType()
    {
        $value = $this->get(self::MATCHTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'matchType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMatchType()
    {
        return $this->get(self::MATCHTYPE) !== null;
    }

    /**
     * Sets value of 'popupInfoMsg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPopupInfoMsg($value)
    {
        return $this->set(self::POPUPINFOMSG, $value);
    }

    /**
     * Returns value of 'popupInfoMsg' property
     *
     * @return string
     */
    public function getPopupInfoMsg()
    {
        $value = $this->get(self::POPUPINFOMSG);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'popupInfoMsg' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPopupInfoMsg()
    {
        return $this->get(self::POPUPINFOMSG) !== null;
    }

    /**
     * Sets value of 'openImcontactCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOpenImcontactCount($value)
    {
        return $this->set(self::OPENIMCONTACTCOUNT, $value);
    }

    /**
     * Returns value of 'openImcontactCount' property
     *
     * @return integer
     */
    public function getOpenImcontactCount()
    {
        $value = $this->get(self::OPENIMCONTACTCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'openImcontactCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOpenImcontactCount()
    {
        return $this->get(self::OPENIMCONTACTCOUNT) !== null;
    }

    /**
     * Appends value to 'openImcontactList' list
     *
     * @param \Openimcontact $value Value to append
     *
     * @return null
     */
    public function appendOpenImcontactList(\Openimcontact $value)
    {
        return $this->append(self::OPENIMCONTACTLIST, $value);
    }

    /**
     * Clears 'openImcontactList' list
     *
     * @return null
     */
    public function clearOpenImcontactList()
    {
        return $this->clear(self::OPENIMCONTACTLIST);
    }

    /**
     * Returns 'openImcontactList' list
     *
     * @return \Openimcontact[]
     */
    public function getOpenImcontactList()
    {
        return $this->get(self::OPENIMCONTACTLIST);
    }

    /**
     * Returns true if 'openImcontactList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOpenImcontactList()
    {
        return count($this->get(self::OPENIMCONTACTLIST)) !== 0;
    }

    /**
     * Returns 'openImcontactList' iterator
     *
     * @return \ArrayIterator
     */
    public function getOpenImcontactListIterator()
    {
        return new \ArrayIterator($this->get(self::OPENIMCONTACTLIST));
    }

    /**
     * Returns element from 'openImcontactList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Openimcontact
     */
    public function getOpenImcontactListAt($offset)
    {
        return $this->get(self::OPENIMCONTACTLIST, $offset);
    }

    /**
     * Returns count of 'openImcontactList' list
     *
     * @return int
     */
    public function getOpenImcontactListCount()
    {
        return $this->count(self::OPENIMCONTACTLIST);
    }
}
}