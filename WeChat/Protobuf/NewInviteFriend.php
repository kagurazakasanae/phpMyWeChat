<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * NewInviteFriend message
 */
class NewInviteFriend extends \ProtobufMessage
{
    /* Field index constants */
    const UIN = 1;
    const NICKNAME = 2;
    const EMAIL = 3;
    const REMARK = 4;
    const USERNAME = 5;
    const FRIENDTYPE = 6;
    const GROUPID = 7;
    const IMGIDX = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::UIN => array(
            'name' => 'uin',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NICKNAME => array(
            'name' => 'nickName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EMAIL => array(
            'name' => 'email',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REMARK => array(
            'name' => 'remark',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::USERNAME => array(
            'name' => 'userName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FRIENDTYPE => array(
            'name' => 'friendType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GROUPID => array(
            'name' => 'groupId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::IMGIDX => array(
            'name' => 'imgIdx',
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
        $this->values[self::UIN] = null;
        $this->values[self::NICKNAME] = null;
        $this->values[self::EMAIL] = null;
        $this->values[self::REMARK] = null;
        $this->values[self::USERNAME] = null;
        $this->values[self::FRIENDTYPE] = null;
        $this->values[self::GROUPID] = null;
        $this->values[self::IMGIDX] = null;
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
     * Sets value of 'uin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUin($value)
    {
        return $this->set(self::UIN, $value);
    }

    /**
     * Returns value of 'uin' property
     *
     * @return integer
     */
    public function getUin()
    {
        $value = $this->get(self::UIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'uin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUin()
    {
        return $this->get(self::UIN) !== null;
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
     * Sets value of 'email' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEmail($value)
    {
        return $this->set(self::EMAIL, $value);
    }

    /**
     * Returns value of 'email' property
     *
     * @return string
     */
    public function getEmail()
    {
        $value = $this->get(self::EMAIL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'email' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEmail()
    {
        return $this->get(self::EMAIL) !== null;
    }

    /**
     * Sets value of 'remark' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRemark($value)
    {
        return $this->set(self::REMARK, $value);
    }

    /**
     * Returns value of 'remark' property
     *
     * @return string
     */
    public function getRemark()
    {
        $value = $this->get(self::REMARK);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'friendType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFriendType($value)
    {
        return $this->set(self::FRIENDTYPE, $value);
    }

    /**
     * Returns value of 'friendType' property
     *
     * @return integer
     */
    public function getFriendType()
    {
        $value = $this->get(self::FRIENDTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'friendType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendType()
    {
        return $this->get(self::FRIENDTYPE) !== null;
    }

    /**
     * Sets value of 'groupId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGroupId($value)
    {
        return $this->set(self::GROUPID, $value);
    }

    /**
     * Returns value of 'groupId' property
     *
     * @return integer
     */
    public function getGroupId()
    {
        $value = $this->get(self::GROUPID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'groupId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGroupId()
    {
        return $this->get(self::GROUPID) !== null;
    }

    /**
     * Sets value of 'imgIdx' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setImgIdx($value)
    {
        return $this->set(self::IMGIDX, $value);
    }

    /**
     * Returns value of 'imgIdx' property
     *
     * @return string
     */
    public function getImgIdx()
    {
        $value = $this->get(self::IMGIDX);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'imgIdx' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasImgIdx()
    {
        return $this->get(self::IMGIDX) !== null;
    }
}
}