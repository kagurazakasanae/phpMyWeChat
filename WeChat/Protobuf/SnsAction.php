<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsAction message
 */
class SnsAction extends \ProtobufMessage
{
    /* Field index constants */
    const FROM = 1;
    const TO = 2;
    const FROMNICKNAME = 3;
    const TONICKNAME = 4;
    const TYPE = 5;
    const SOURCE = 6;
    const CREATETIME = 7;
    const CONTENT = 8;
    const REPLYCOMMENTID = 9;
    const COMMENTID = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FROM => array(
            'name' => 'from',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TO => array(
            'name' => 'to',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FROMNICKNAME => array(
            'name' => 'fromnickname',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TONICKNAME => array(
            'name' => 'tonickname',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'name' => 'source',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CREATETIME => array(
            'name' => 'createtime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONTENT => array(
            'name' => 'content',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REPLYCOMMENTID => array(
            'name' => 'replyCommentId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COMMENTID => array(
            'name' => 'commentId',
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
        $this->values[self::FROM] = null;
        $this->values[self::TO] = null;
        $this->values[self::FROMNICKNAME] = null;
        $this->values[self::TONICKNAME] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::SOURCE] = null;
        $this->values[self::CREATETIME] = null;
        $this->values[self::CONTENT] = null;
        $this->values[self::REPLYCOMMENTID] = null;
        $this->values[self::COMMENTID] = null;
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
     * Sets value of 'from' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFrom($value)
    {
        return $this->set(self::FROM, $value);
    }

    /**
     * Returns value of 'from' property
     *
     * @return string
     */
    public function getFrom()
    {
        $value = $this->get(self::FROM);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'from' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFrom()
    {
        return $this->get(self::FROM) !== null;
    }

    /**
     * Sets value of 'to' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTo($value)
    {
        return $this->set(self::TO, $value);
    }

    /**
     * Returns value of 'to' property
     *
     * @return string
     */
    public function getTo()
    {
        $value = $this->get(self::TO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'to' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTo()
    {
        return $this->get(self::TO) !== null;
    }

    /**
     * Sets value of 'fromnickname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFromnickname($value)
    {
        return $this->set(self::FROMNICKNAME, $value);
    }

    /**
     * Returns value of 'fromnickname' property
     *
     * @return string
     */
    public function getFromnickname()
    {
        $value = $this->get(self::FROMNICKNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'fromnickname' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFromnickname()
    {
        return $this->get(self::FROMNICKNAME) !== null;
    }

    /**
     * Sets value of 'tonickname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTonickname($value)
    {
        return $this->set(self::TONICKNAME, $value);
    }

    /**
     * Returns value of 'tonickname' property
     *
     * @return string
     */
    public function getTonickname()
    {
        $value = $this->get(self::TONICKNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'tonickname' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTonickname()
    {
        return $this->get(self::TONICKNAME) !== null;
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
     * Sets value of 'createtime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCreatetime($value)
    {
        return $this->set(self::CREATETIME, $value);
    }

    /**
     * Returns value of 'createtime' property
     *
     * @return integer
     */
    public function getCreatetime()
    {
        $value = $this->get(self::CREATETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'createtime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCreatetime()
    {
        return $this->get(self::CREATETIME) !== null;
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
}
}