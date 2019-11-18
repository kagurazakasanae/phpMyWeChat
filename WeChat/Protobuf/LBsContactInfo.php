<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * LBsContactInfo message
 */
class LBsContactInfo extends \ProtobufMessage
{
    /* Field index constants */
    const USERNAME = 1;
    const NICKNAME = 2;
    const PROVINCE = 3;
    const CITY = 4;
    const SIGNATURE = 5;
    const DISTANCE = 6;
    const SEX = 7;
    const IMGSTATUS = 8;
    const VERIFYFLAG = 9;
    const VERIFYINFO = 10;
    const VERIFYCONTENT = 11;
    const ALIAS = 12;
    const WEIBO = 13;
    const WEIBONICKNAME = 14;
    const WEIBOFLAG = 15;
    const HEADIMGVERSION = 16;
    const SNSUSERINFO = 20;
    const COUNTRY = 21;
    const BIGHEADIMGURL = 22;
    const SMALLHEADIMGURL = 23;
    const MYBRANDLIST = 24;
    const CUSTOMIZEDINFO = 25;
    const ANTISPAMTOCKLET = 26;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::USERNAME => array(
            'name' => 'userName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NICKNAME => array(
            'name' => 'nickName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        self::DISTANCE => array(
            'name' => 'distance',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SEX => array(
            'name' => 'sex',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::IMGSTATUS => array(
            'name' => 'imgStatus',
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
        self::VERIFYCONTENT => array(
            'name' => 'verifyContent',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ALIAS => array(
            'name' => 'alias',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::WEIBO => array(
            'name' => 'weibo',
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
        self::HEADIMGVERSION => array(
            'name' => 'headImgVersion',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
            'name' => 'smallHeadImgUrl',
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
        self::ANTISPAMTOCKLET => array(
            'name' => 'antispamTocklet',
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
        $this->values[self::USERNAME] = null;
        $this->values[self::NICKNAME] = null;
        $this->values[self::PROVINCE] = null;
        $this->values[self::CITY] = null;
        $this->values[self::SIGNATURE] = null;
        $this->values[self::DISTANCE] = null;
        $this->values[self::SEX] = null;
        $this->values[self::IMGSTATUS] = null;
        $this->values[self::VERIFYFLAG] = null;
        $this->values[self::VERIFYINFO] = null;
        $this->values[self::VERIFYCONTENT] = null;
        $this->values[self::ALIAS] = null;
        $this->values[self::WEIBO] = null;
        $this->values[self::WEIBONICKNAME] = null;
        $this->values[self::WEIBOFLAG] = null;
        $this->values[self::HEADIMGVERSION] = null;
        $this->values[self::SNSUSERINFO] = null;
        $this->values[self::COUNTRY] = null;
        $this->values[self::BIGHEADIMGURL] = null;
        $this->values[self::SMALLHEADIMGURL] = null;
        $this->values[self::MYBRANDLIST] = null;
        $this->values[self::CUSTOMIZEDINFO] = null;
        $this->values[self::ANTISPAMTOCKLET] = null;
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
     * @param string $value Property value
     *
     * @return null
     */
    public function setUserName($value)
    {
        return $this->set(self::USERNAME, $value);
    }

    /**
     * Returns value of 'userName' property
     *
     * @return string
     */
    public function getUserName()
    {
        $value = $this->get(self::USERNAME);
        return $value === null ? (string)$value : $value;
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
     * @param string $value Property value
     *
     * @return null
     */
    public function setNickName($value)
    {
        return $this->set(self::NICKNAME, $value);
    }

    /**
     * Returns value of 'nickName' property
     *
     * @return string
     */
    public function getNickName()
    {
        $value = $this->get(self::NICKNAME);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'distance' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDistance($value)
    {
        return $this->set(self::DISTANCE, $value);
    }

    /**
     * Returns value of 'distance' property
     *
     * @return string
     */
    public function getDistance()
    {
        $value = $this->get(self::DISTANCE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'distance' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDistance()
    {
        return $this->get(self::DISTANCE) !== null;
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
     * Sets value of 'imgStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setImgStatus($value)
    {
        return $this->set(self::IMGSTATUS, $value);
    }

    /**
     * Returns value of 'imgStatus' property
     *
     * @return integer
     */
    public function getImgStatus()
    {
        $value = $this->get(self::IMGSTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'imgStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasImgStatus()
    {
        return $this->get(self::IMGSTATUS) !== null;
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
     * Sets value of 'headImgVersion' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHeadImgVersion($value)
    {
        return $this->set(self::HEADIMGVERSION, $value);
    }

    /**
     * Returns value of 'headImgVersion' property
     *
     * @return integer
     */
    public function getHeadImgVersion()
    {
        $value = $this->get(self::HEADIMGVERSION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'headImgVersion' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHeadImgVersion()
    {
        return $this->get(self::HEADIMGVERSION) !== null;
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
     * Sets value of 'antispamTocklet' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAntispamTocklet($value)
    {
        return $this->set(self::ANTISPAMTOCKLET, $value);
    }

    /**
     * Returns value of 'antispamTocklet' property
     *
     * @return string
     */
    public function getAntispamTocklet()
    {
        $value = $this->get(self::ANTISPAMTOCKLET);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'antispamTocklet' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAntispamTocklet()
    {
        return $this->get(self::ANTISPAMTOCKLET) !== null;
    }
}
}