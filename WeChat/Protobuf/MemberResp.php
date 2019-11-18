<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * MemberResp message
 */
class MemberResp extends \ProtobufMessage
{
    /* Field index constants */
    const MEMBER = 1;
    const MEMBERSTATUS = 2;
    const NICKNAME = 3;
    const PYINITIAL = 4;
    const QUANPIN = 5;
    const SEX = 6;
    const REMARK = 9;
    const REMARKPYINITIAL = 10;
    const REMARKQUANPIN = 11;
    const CONTACTTYPE = 12;
    const PROVINCE = 13;
    const CITY = 14;
    const SIGNATURE = 15;
    const PERSONALCARD = 16;
    const VERIFYFLAG = 17;
    const VERIFYINFO = 18;
    const COUNTRY = 19;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MEMBER => array(
            'name' => 'member',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::MEMBERSTATUS => array(
            'default' => 0,
            'name' => 'memberStatus',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NICKNAME => array(
            'name' => 'nickName',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::PYINITIAL => array(
            'name' => 'pYInitial',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::QUANPIN => array(
            'name' => 'quanPin',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::SEX => array(
            'default' => 0,
            'name' => 'sex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REMARK => array(
            'name' => 'remark',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::REMARKPYINITIAL => array(
            'name' => 'remarkPYInitial',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::REMARKQUANPIN => array(
            'name' => 'remarkQuanPin',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::CONTACTTYPE => array(
            'default' => 0,
            'name' => 'contactType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PROVINCE => array(
            'name' => 'province',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CITY => array(
            'name' => 'City',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SIGNATURE => array(
            'name' => 'signature',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PERSONALCARD => array(
            'default' => 0,
            'name' => 'personalCard',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VERIFYFLAG => array(
            'default' => 0,
            'name' => 'verifyFlag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VERIFYINFO => array(
            'name' => 'verifyInfo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::COUNTRY => array(
            'name' => 'country',
            'required' => false,
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
        $this->values[self::MEMBER] = null;
        $this->values[self::MEMBERSTATUS] = self::$fields[self::MEMBERSTATUS]['default'];
        $this->values[self::NICKNAME] = null;
        $this->values[self::PYINITIAL] = null;
        $this->values[self::QUANPIN] = null;
        $this->values[self::SEX] = self::$fields[self::SEX]['default'];
        $this->values[self::REMARK] = null;
        $this->values[self::REMARKPYINITIAL] = null;
        $this->values[self::REMARKQUANPIN] = null;
        $this->values[self::CONTACTTYPE] = self::$fields[self::CONTACTTYPE]['default'];
        $this->values[self::PROVINCE] = null;
        $this->values[self::CITY] = null;
        $this->values[self::SIGNATURE] = null;
        $this->values[self::PERSONALCARD] = self::$fields[self::PERSONALCARD]['default'];
        $this->values[self::VERIFYFLAG] = self::$fields[self::VERIFYFLAG]['default'];
        $this->values[self::VERIFYINFO] = null;
        $this->values[self::COUNTRY] = null;
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
     * Sets value of 'member' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setMember(\SKBuiltinString $value=null)
    {
        return $this->set(self::MEMBER, $value);
    }

    /**
     * Returns value of 'member' property
     *
     * @return \SKBuiltinString
     */
    public function getMember()
    {
        return $this->get(self::MEMBER);
    }

    /**
     * Returns true if 'member' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMember()
    {
        return $this->get(self::MEMBER) !== null;
    }

    /**
     * Sets value of 'memberStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMemberStatus($value)
    {
        return $this->set(self::MEMBERSTATUS, $value);
    }

    /**
     * Returns value of 'memberStatus' property
     *
     * @return integer
     */
    public function getMemberStatus()
    {
        $value = $this->get(self::MEMBERSTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'memberStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMemberStatus()
    {
        return $this->get(self::MEMBERSTATUS) !== null;
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
     * Sets value of 'City' property
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
     * Returns value of 'City' property
     *
     * @return string
     */
    public function getCity()
    {
        $value = $this->get(self::CITY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'City' property is set, false otherwise
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
}
}