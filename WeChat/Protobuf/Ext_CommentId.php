<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * Ext_CommentId message
 */
class Ext_CommentId extends \ProtobufMessage
{
    /* Field index constants */
    const COMMENTID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
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