<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsCommentInfo message
 */
class SnsCommentInfo extends \ProtobufMessage
{
    /* Field index constants */
    const USERNAME = 1;
    const NICKNAME = 2;
    const SOURCE = 3;
    const TYPE = 4;
    const CONTENT = 5;
    const CREATETIME = 6;
    const COMMENTID = 7;
    const REPLYCOMMENTID = 8;
    const REPLYUSERNAME = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::USERNAME => array(
            'name' => 'username',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NICKNAME => array(
            'name' => 'nickname',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SOURCE => array(
            'name' => 'source',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONTENT => array(
            'name' => 'content',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CREATETIME => array(
            'name' => 'createTime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COMMENTID => array(
            'name' => 'commentId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REPLYCOMMENTID => array(
            'name' => 'replyCommentId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REPLYUSERNAME => array(
            'name' => 'replyUsername',
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
        $this->values[self::SOURCE] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::CONTENT] = null;
        $this->values[self::CREATETIME] = null;
        $this->values[self::COMMENTID] = null;
        $this->values[self::REPLYCOMMENTID] = null;
        $this->values[self::REPLYUSERNAME] = null;
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
     * Sets value of 'username' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUsername($value)
    {
        return $this->set(self::USERNAME, $value);
    }

    /**
     * Returns value of 'username' property
     *
     * @return string
     */
    public function getUsername()
    {
        $value = $this->get(self::USERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'username' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUsername()
    {
        return $this->get(self::USERNAME) !== null;
    }

    /**
     * Sets value of 'nickname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNickname($value)
    {
        return $this->set(self::NICKNAME, $value);
    }

    /**
     * Returns value of 'nickname' property
     *
     * @return string
     */
    public function getNickname()
    {
        $value = $this->get(self::NICKNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'nickname' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNickname()
    {
        return $this->get(self::NICKNAME) !== null;
    }

    /**
     * Sets value of 'source' property
     *
     * @param integer $value Property value
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
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::SOURCE);
        return $value === null ? (integer)$value : $value;
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
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }

    /**
     * Sets value of 'content' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContent($value)
    {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'content' property
     *
     * @return string
     */
    public function getContent()
    {
        $value = $this->get(self::CONTENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'content' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContent()
    {
        return $this->get(self::CONTENT) !== null;
    }

    /**
     * Sets value of 'createTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCreateTime($value)
    {
        return $this->set(self::CREATETIME, $value);
    }

    /**
     * Returns value of 'createTime' property
     *
     * @return integer
     */
    public function getCreateTime()
    {
        $value = $this->get(self::CREATETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'createTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCreateTime()
    {
        return $this->get(self::CREATETIME) !== null;
    }

    /**
     * Sets value of 'commentId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCommentId($value)
    {
        return $this->set(self::COMMENTID, $value);
    }

    /**
     * Returns value of 'commentId' property
     *
     * @return integer
     */
    public function getCommentId()
    {
        $value = $this->get(self::COMMENTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'commentId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCommentId()
    {
        return $this->get(self::COMMENTID) !== null;
    }

    /**
     * Sets value of 'replyCommentId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReplyCommentId($value)
    {
        return $this->set(self::REPLYCOMMENTID, $value);
    }

    /**
     * Returns value of 'replyCommentId' property
     *
     * @return integer
     */
    public function getReplyCommentId()
    {
        $value = $this->get(self::REPLYCOMMENTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'replyCommentId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReplyCommentId()
    {
        return $this->get(self::REPLYCOMMENTID) !== null;
    }

    /**
     * Sets value of 'replyUsername' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setReplyUsername($value)
    {
        return $this->set(self::REPLYUSERNAME, $value);
    }

    /**
     * Returns value of 'replyUsername' property
     *
     * @return string
     */
    public function getReplyUsername()
    {
        $value = $this->get(self::REPLYUSERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'replyUsername' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReplyUsername()
    {
        return $this->get(self::REPLYUSERNAME) !== null;
    }
}
}