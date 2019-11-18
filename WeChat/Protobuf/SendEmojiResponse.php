<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SendEmojiResponse message
 */
class SendEmojiResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const EMOJIITEMCOUNT = 2;
    const TAG3 = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::EMOJIITEMCOUNT => array(
            'name' => 'emojiItemCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TAG3 => array(
            'name' => 'tag3',
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
        $this->values[self::BASERESPONSE] = null;
        $this->values[self::EMOJIITEMCOUNT] = null;
        $this->values[self::TAG3] = null;
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
     * Sets value of 'emojiItemCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEmojiItemCount($value)
    {
        return $this->set(self::EMOJIITEMCOUNT, $value);
    }

    /**
     * Returns value of 'emojiItemCount' property
     *
     * @return integer
     */
    public function getEmojiItemCount()
    {
        $value = $this->get(self::EMOJIITEMCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'emojiItemCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEmojiItemCount()
    {
        return $this->get(self::EMOJIITEMCOUNT) !== null;
    }

    /**
     * Sets value of 'tag3' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTag3($value)
    {
        return $this->set(self::TAG3, $value);
    }

    /**
     * Returns value of 'tag3' property
     *
     * @return string
     */
    public function getTag3()
    {
        $value = $this->get(self::TAG3);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'tag3' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTag3()
    {
        return $this->get(self::TAG3) !== null;
    }
}
}