<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * AddFavItemResponse message
 */
class AddFavItemResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const FAVID = 2;
    const UPDATESEQ = 3;
    const USEDSIZE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baserequest',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::FAVID => array(
            'name' => 'favId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UPDATESEQ => array(
            'name' => 'updateSeq',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::USEDSIZE => array(
            'name' => 'usedSize',
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
        $this->values[self::FAVID] = null;
        $this->values[self::UPDATESEQ] = null;
        $this->values[self::USEDSIZE] = null;
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
     * Sets value of 'baserequest' property
     *
     * @param \BaseResponse $value Property value
     *
     * @return null
     */
    public function setBaserequest(\BaseResponse $value=null)
    {
        return $this->set(self::BASEREQUEST, $value);
    }

    /**
     * Returns value of 'baserequest' property
     *
     * @return \BaseResponse
     */
    public function getBaserequest()
    {
        return $this->get(self::BASEREQUEST);
    }

    /**
     * Returns true if 'baserequest' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaserequest()
    {
        return $this->get(self::BASEREQUEST) !== null;
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

    /**
     * Sets value of 'usedSize' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUsedSize($value)
    {
        return $this->set(self::USEDSIZE, $value);
    }

    /**
     * Returns value of 'usedSize' property
     *
     * @return integer
     */
    public function getUsedSize()
    {
        $value = $this->get(self::USEDSIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'usedSize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUsedSize()
    {
        return $this->get(self::USEDSIZE) !== null;
    }
}
}