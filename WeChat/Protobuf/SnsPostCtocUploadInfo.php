<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsPostCtocUploadInfo message
 */
class SnsPostCtocUploadInfo extends \ProtobufMessage
{
    /* Field index constants */
    const FLAG = 1;
    const PHOTOCOUNT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FLAG => array(
            'name' => 'flag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PHOTOCOUNT => array(
            'name' => 'photoCount',
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
        $this->values[self::FLAG] = null;
        $this->values[self::PHOTOCOUNT] = null;
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
     * Sets value of 'flag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFlag($value)
    {
        return $this->set(self::FLAG, $value);
    }

    /**
     * Returns value of 'flag' property
     *
     * @return integer
     */
    public function getFlag()
    {
        $value = $this->get(self::FLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'flag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFlag()
    {
        return $this->get(self::FLAG) !== null;
    }

    /**
     * Sets value of 'photoCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPhotoCount($value)
    {
        return $this->set(self::PHOTOCOUNT, $value);
    }

    /**
     * Returns value of 'photoCount' property
     *
     * @return integer
     */
    public function getPhotoCount()
    {
        $value = $this->get(self::PHOTOCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'photoCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPhotoCount()
    {
        return $this->get(self::PHOTOCOUNT) !== null;
    }
}
}