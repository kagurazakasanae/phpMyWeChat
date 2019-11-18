<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * ModChatRoomMember message
 */
class ModChatRoomMember extends \ProtobufMessage
{
    /* Field index constants */
    const USERNAME = 1;
    const NICKNAME = 2;
    const PYINITIAL = 3;
    const QUANPIN = 4;
    const SEX = 5;
    const IMGBUF = 6;
    const IMGFLAG = 7;
    const REMARK = 8;
    const REMARKPYINITIAL = 9;
    const REMARKQUANPIN = 10;
    const CONTACTTYPE = 11;
    const PROVINCE = 12;
    const CITY = 13;
    const SIGNATURE = 14;
    const PERSONALCARD = 15;
    const VERIFYFLAG = 16;
    const VERIFYINFO = 17;
    const WEIBO = 18;
    const VERIFYCONTENT = 19;
    const WEIBONICKNAME = 20;
    const WEIBOFLAG = 21;
    const ALBUMSTYLE = 22;
    const ALBUMFLAG = 23;
    const ALBUMBGIMGID = 24;
    const ALIAS = 25;
    const SNSUSERINFO = 26;
    const COUNTRY = 27;
    const BIGHEADIMGURL = 28;
    const SMALLHEADIMGURL = 29;
    const MYBRANDLIST = 30;
    const CUSTOMIZEDINFO = 31;

    /* @var array Field descriptors */
    protected static $fields = array(
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
            'name' => 'pyInitial',
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
        self::IMGFLAG => array(
            'name' => 'imgFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REMARK => array(
            'name' => 'remark',
            'required' => true,
            'type' => '\SKBuiltinString'
        ),
        self::REMARKPYINITIAL => array(
            'name' => 'remarkPYInitial',
            'required' => true,
            'type' => '\SKBuiltinString'
        ),
        self::REMARKQUANPIN => array(
            'name' => 'remarkQuanPin',
            'required' => true,
            'type' => '\SKBuiltinString'
        ),
        self::CONTACTTYPE => array(
            'name' => 'contactType',
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
        self::ALIAS => array(
            'name' => 'alias',
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
        self::BIGHEADIMGURL => array(
            'name' => 'bigHeadImgUrl',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SMALLHEADIMGURL => array(
            'name' => 'smallheadImgUrl',
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
        $this->values[self::USERNAME] = null;
        $this->values[self::NICKNAME] = null;
        $this->values[self::PYINITIAL] = null;
        $this->values[self::QUANPIN] = null;
        $this->values[self::SEX] = null;
        $this->values[self::IMGBUF] = null;
        $this->values[self::IMGFLAG] = null;
        $this->values[self::REMARK] = null;
        $this->values[self::REMARKPYINITIAL] = null;
        $this->values[self::REMARKQUANPIN] = null;
        $this->values[self::CONTACTTYPE] = null;
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
        $this->values[self::ALIAS] = null;
        $this->values[self::SNSUSERINFO] = null;
        $this->values[self::COUNTRY] = null;
        $this->values[self::BIGHEADIMGURL] = null;
        $this->values[self::SMALLHEADIMGURL] = null;
        $this->values[self::MYBRANDLIST] = null;
        $this->values[self::CUSTOMIZEDINFO] = null;
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
     * Sets value of 'pyInitial' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setPyInitial(\SKBuiltinString $value=null)
    {
        return $this->set(self::PYINITIAL, $value);
    }

    /**
     * Returns value of 'pyInitial' property
     *
     * @return \SKBuiltinString
     */
    public function getPyInitial()
    {
        return $this->get(self::PYINITIAL);
    }

    /**
     * Returns true if 'pyInitial' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPyInitial()
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
     * Sets value of 'imgFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setImgFlag($value)
    {
        return $this->set(self::IMGFLAG, $value);
    }

    /**
     * Returns value of 'imgFlag' property
     *
     * @return integer
     */
    public function getImgFlag()
    {
        $value = $this->get(self::IMGFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'imgFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasImgFlag()
    {
        return $this->get(self::IMGFLAG) !== null;
    }

    /**
     * Sets value of 'remark' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setRemark(\SKBuiltinString $value=null)
    {
        return $this->set(self::REMARK, $value);
    }

    /**
     * Returns value of 'remark' property
     *
     * @return \SKBuiltinString
     */
    public function getRemark()
    {
        return $this->get(self::REMARK);
    }

    /**
     * Returns true if 'remark' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRemark()
    {
        return $this->get(self::REMARK) !== null;
    }

    /**
     * Sets value of 'remarkPYInitial' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setRemarkPYInitial(\SKBuiltinString $value=null)
    {
        return $this->set(self::REMARKPYINITIAL, $value);
    }

    /**
     * Returns value of 'remarkPYInitial' property
     *
     * @return \SKBuiltinString
     */
    public function getRemarkPYInitial()
    {
        return $this->get(self::REMARKPYINITIAL);
    }

    /**
     * Returns true if 'remarkPYInitial' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRemarkPYInitial()
    {
        return $this->get(self::REMARKPYINITIAL) !== null;
    }

    /**
     * Sets value of 'remarkQuanPin' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setRemarkQuanPin(\SKBuiltinString $value=null)
    {
        return $this->set(self::REMARKQUANPIN, $value);
    }

    /**
     * Returns value of 'remarkQuanPin' property
     *
     * @return \SKBuiltinString
     */
    public function getRemarkQuanPin()
    {
        return $this->get(self::REMARKQUANPIN);
    }

    /**
     * Returns true if 'remarkQuanPin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRemarkQuanPin()
    {
        return $this->get(self::REMARKQUANPIN) !== null;
    }

    /**
     * Sets value of 'contactType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setContactType($value)
    {
        return $this->set(self::CONTACTTYPE, $value);
    }

    /**
     * Returns value of 'contactType' property
     *
     * @return integer
     */
    public function getContactType()
    {
        $value = $this->get(self::CONTACTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'contactType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContactType()
    {
        return $this->get(self::CONTACTTYPE) !== null;
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
     * Sets value of 'smallheadImgUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSmallheadImgUrl($value)
    {
        return $this->set(self::SMALLHEADIMGURL, $value);
    }

    /**
     * Returns value of 'smallheadImgUrl' property
     *
     * @return string
     */
    public function getSmallheadImgUrl()
    {
        $value = $this->get(self::SMALLHEADIMGURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'smallheadImgUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSmallheadImgUrl()
    {
        return $this->get(self::SMALLHEADIMGURL) !== null;
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
}
}