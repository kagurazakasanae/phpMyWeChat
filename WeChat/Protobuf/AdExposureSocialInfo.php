<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * AdExposureSocialInfo message
 */
class AdExposureSocialInfo extends \ProtobufMessage
{
    /* Field index constants */
    const LIKECOUNT = 1;
    const COMMENTCOUNT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LIKECOUNT => array(
            'name' => 'likeCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COMMENTCOUNT => array(
            'name' => 'commentCount',
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
        $this->values[self::LIKECOUNT] = null;
        $this->values[self::COMMENTCOUNT] = null;
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
     * Sets value of 'likeCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLikeCount($value)
    {
        return $this->set(self::LIKECOUNT, $value);
    }

    /**
     * Returns value of 'likeCount' property
     *
     * @return integer
     */
    public function getLikeCount()
    {
        $value = $this->get(self::LIKECOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'likeCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLikeCount()
    {
        return $this->get(self::LIKECOUNT) !== null;
    }

    /**
     * Sets value of 'commentCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCommentCount($value)
    {
        return $this->set(self::COMMENTCOUNT, $value);
    }

    /**
     * Returns value of 'commentCount' property
     *
     * @return integer
     */
    public function getCommentCount()
    {
        $value = $this->get(self::COMMENTCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'commentCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCommentCount()
    {
        return $this->get(self::COMMENTCOUNT) !== null;
    }
}
}