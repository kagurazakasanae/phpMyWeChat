<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * UploadEmojiRequest message
 */
class UploadEmojiRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const EMOJIITEMCOUNT = 2;
    const EMOJIITEM = 3;
    const TAG4 = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::EMOJIITEMCOUNT => array(
            'name' => 'emojiItemCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EMOJIITEM => array(
            'name' => 'emojiItem',
            'required' => true,
            'type' => '\EmojiUploadInfo'
        ),
        self::TAG4 => array(
            'name' => 'tag4',
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
        $this->values[self::BASEREQUEST] = null;
        $this->values[self::EMOJIITEMCOUNT] = null;
        $this->values[self::EMOJIITEM] = null;
        $this->values[self::TAG4] = null;
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
     * Sets value of 'baseRequest' property
     *
     * @param \BaseRequest $value Property value
     *
     * @return null
     */
    public function setBaseRequest(\BaseRequest $value=null)
    {
        return $this->set(self::BASEREQUEST, $value);
    }

    /**
     * Returns value of 'baseRequest' property
     *
     * @return \BaseRequest
     */
    public function getBaseRequest()
    {
        return $this->get(self::BASEREQUEST);
    }

    /**
     * Returns true if 'baseRequest' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseRequest()
    {
        return $this->get(self::BASEREQUEST) !== null;
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
     * Sets value of 'emojiItem' property
     *
     * @param \EmojiUploadInfo $value Property value
     *
     * @return null
     */
    public function setEmojiItem(\EmojiUploadInfo $value=null)
    {
        return $this->set(self::EMOJIITEM, $value);
    }

    /**
     * Returns value of 'emojiItem' property
     *
     * @return \EmojiUploadInfo
     */
    public function getEmojiItem()
    {
        return $this->get(self::EMOJIITEM);
    }

    /**
     * Returns true if 'emojiItem' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEmojiItem()
    {
        return $this->get(self::EMOJIITEM) !== null;
    }

    /**
     * Sets value of 'tag4' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTag4($value)
    {
        return $this->set(self::TAG4, $value);
    }

    /**
     * Returns value of 'tag4' property
     *
     * @return integer
     */
    public function getTag4()
    {
        $value = $this->get(self::TAG4);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'tag4' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTag4()
    {
        return $this->get(self::TAG4) !== null;
    }
}
}