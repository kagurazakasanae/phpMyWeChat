<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * FavObject message
 */
class FavObject extends \ProtobufMessage
{
    /* Field index constants */
    const FAVID = 1;
    const STATUS = 2;
    const OBJECT = 3;
    const FLAG = 4;
    const UPDATETIME = 5;
    const UPDATESEQ = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FAVID => array(
            'name' => 'favId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STATUS => array(
            'name' => 'status',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OBJECT => array(
            'name' => 'object',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FLAG => array(
            'name' => 'flag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UPDATETIME => array(
            'name' => 'updateTime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UPDATESEQ => array(
            'name' => 'updateSeq',
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
        $this->values[self::FAVID] = null;
        $this->values[self::STATUS] = null;
        $this->values[self::OBJECT] = null;
        $this->values[self::FLAG] = null;
        $this->values[self::UPDATETIME] = null;
        $this->values[self::UPDATESEQ] = null;
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
     * Sets value of 'favId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFavId($value)
    {
        return $this->set(self::FAVID, $value);
    }

    /**
     * Returns value of 'favId' property
     *
     * @return integer
     */
    public function getFavId()
    {
        $value = $this->get(self::FAVID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'favId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFavId()
    {
        return $this->get(self::FAVID) !== null;
    }

    /**
     * Sets value of 'status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStatus($value)
    {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return integer
     */
    public function getStatus()
    {
        $value = $this->get(self::STATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'status' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStatus()
    {
        return $this->get(self::STATUS) !== null;
    }

    /**
     * Sets value of 'object' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setObject($value)
    {
        return $this->set(self::OBJECT, $value);
    }

    /**
     * Returns value of 'object' property
     *
     * @return string
     */
    public function getObject()
    {
        $value = $this->get(self::OBJECT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'object' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasObject()
    {
        return $this->get(self::OBJECT) !== null;
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
     * Sets value of 'updateTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUpdateTime($value)
    {
        return $this->set(self::UPDATETIME, $value);
    }

    /**
     * Returns value of 'updateTime' property
     *
     * @return integer
     */
    public function getUpdateTime()
    {
        $value = $this->get(self::UPDATETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'updateTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUpdateTime()
    {
        return $this->get(self::UPDATETIME) !== null;
    }

    /**
     * Sets value of 'updateSeq' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUpdateSeq($value)
    {
        return $this->set(self::UPDATESEQ, $value);
    }

    /**
     * Returns value of 'updateSeq' property
     *
     * @return integer
     */
    public function getUpdateSeq()
    {
        $value = $this->get(self::UPDATESEQ);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'updateSeq' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUpdateSeq()
    {
        return $this->get(self::UPDATESEQ) !== null;
    }
}
}