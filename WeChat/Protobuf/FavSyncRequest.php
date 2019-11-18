<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * FavSyncRequest message
 */
class FavSyncRequest extends \ProtobufMessage
{
    /* Field index constants */
    const SELECTOR = 1;
    const KEYBUF = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SELECTOR => array(
            'name' => 'selector',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::KEYBUF => array(
            'name' => 'keyBuf',
            'required' => true,
            'type' => '\syncMsgKey'
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
        $this->values[self::SELECTOR] = null;
        $this->values[self::KEYBUF] = null;
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
     * Sets value of 'selector' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSelector($value)
    {
        return $this->set(self::SELECTOR, $value);
    }

    /**
     * Returns value of 'selector' property
     *
     * @return integer
     */
    public function getSelector()
    {
        $value = $this->get(self::SELECTOR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'selector' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSelector()
    {
        return $this->get(self::SELECTOR) !== null;
    }

    /**
     * Sets value of 'keyBuf' property
     *
     * @param \syncMsgKey $value Property value
     *
     * @return null
     */
    public function setKeyBuf(\syncMsgKey $value=null)
    {
        return $this->set(self::KEYBUF, $value);
    }

    /**
     * Returns value of 'keyBuf' property
     *
     * @return \syncMsgKey
     */
    public function getKeyBuf()
    {
        return $this->get(self::KEYBUF);
    }

    /**
     * Returns true if 'keyBuf' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKeyBuf()
    {
        return $this->get(self::KEYBUF) !== null;
    }
}
}