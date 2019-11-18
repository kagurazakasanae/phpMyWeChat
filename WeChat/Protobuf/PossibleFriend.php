<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * PossibleFriend message
 */
class PossibleFriend extends \ProtobufMessage
{
    /* Field index constants */
    const USERNAME = 1;
    const NICKNAME = 2;
    const PYINITIAL = 3;
    const QUANPIN = 4;
    const SEX = 5;
    const IMGFLAG = 6;
    const CONTACTTYPE = 7;
    const DOMAINLIST = 8;
    const SOURCE = 9;
    const FRIENDSCENE = 10;
    const MOBILE = 11;

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
        self::PYINITIAL => array(
            'name' => 'pYInitial',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::QUANPIN => array(
            'name' => 'quanPin',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SEX => array(
            'name' => 'sex',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::IMGFLAG => array(
            'name' => 'imgFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONTACTTYPE => array(
            'name' => 'contactType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DOMAINLIST => array(
            'name' => 'domainList',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SOURCE => array(
            'name' => 'source',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FRIENDSCENE => array(
            'name' => 'friendScene',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MOBILE => array(
            'name' => 'mobile',
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
        $this->values[self::PYINITIAL] = null;
        $this->values[self::QUANPIN] = null;
        $this->values[self::SEX] = null;
        $this->values[self::IMGFLAG] = null;
        $this->values[self::CONTACTTYPE] = null;
        $this->values[self::DOMAINLIST] = null;
        $this->values[self::SOURCE] = null;
        $this->values[self::FRIENDSCENE] = null;
        $this->values[self::MOBILE] = null;
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
     * Sets value of 'pYInitial' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPYInitial($value)
    {
        return $this->set(self::PYINITIAL, $value);
    }

    /**
     * Returns value of 'pYInitial' property
     *
     * @return string
     */
    public function getPYInitial()
    {
        $value = $this->get(self::PYINITIAL);
        return $value === null ? (string)$value : $value;
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
     * @param string $value Property value
     *
     * @return null
     */
    public function setQuanPin($value)
    {
        return $this->set(self::QUANPIN, $value);
    }

    /**
     * Returns value of 'quanPin' property
     *
     * @return string
     */
    public function getQuanPin()
    {
        $value = $this->get(self::QUANPIN);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'domainList' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDomainList($value)
    {
        return $this->set(self::DOMAINLIST, $value);
    }

    /**
     * Returns value of 'domainList' property
     *
     * @return string
     */
    public function getDomainList()
    {
        $value = $this->get(self::DOMAINLIST);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'domainList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDomainList()
    {
        return $this->get(self::DOMAINLIST) !== null;
    }

    /**
     * Sets value of 'source' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSource($value)
    {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return string
     */
    public function getSource()
    {
        $value = $this->get(self::SOURCE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSource()
    {
        return $this->get(self::SOURCE) !== null;
    }

    /**
     * Sets value of 'friendScene' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFriendScene($value)
    {
        return $this->set(self::FRIENDSCENE, $value);
    }

    /**
     * Returns value of 'friendScene' property
     *
     * @return integer
     */
    public function getFriendScene()
    {
        $value = $this->get(self::FRIENDSCENE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'friendScene' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendScene()
    {
        return $this->get(self::FRIENDSCENE) !== null;
    }

    /**
     * Sets value of 'mobile' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMobile($value)
    {
        return $this->set(self::MOBILE, $value);
    }

    /**
     * Returns value of 'mobile' property
     *
     * @return string
     */
    public function getMobile()
    {
        $value = $this->get(self::MOBILE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'mobile' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMobile()
    {
        return $this->get(self::MOBILE) !== null;
    }
}
}