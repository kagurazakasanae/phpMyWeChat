<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GetEmotionDescResponse message
 */
class GetEmotionDescResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const COUNT = 2;
    const LIST = 3;
    const CLICKFLAG = 4;
    const BUTTONDESC = 5;
    const DOWNLOADFLAG = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::COUNT => array(
            'name' => 'count',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LIST => array(
            'name' => 'list',
            'repeated' => true,
            'type' => '\EmotionDesc'
        ),
        self::CLICKFLAG => array(
            'name' => 'clickFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BUTTONDESC => array(
            'name' => 'buttonDesc',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOWNLOADFLAG => array(
            'name' => 'downLoadFlag',
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
        $this->values[self::BASERESPONSE] = null;
        $this->values[self::COUNT] = null;
        $this->values[self::LIST] = array();
        $this->values[self::CLICKFLAG] = null;
        $this->values[self::BUTTONDESC] = null;
        $this->values[self::DOWNLOADFLAG] = null;
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
     * Sets value of 'count' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCount($value)
    {
        return $this->set(self::COUNT, $value);
    }

    /**
     * Returns value of 'count' property
     *
     * @return integer
     */
    public function getCount()
    {
        $value = $this->get(self::COUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'count' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCount()
    {
        return $this->get(self::COUNT) !== null;
    }

    /**
     * Appends value to 'list' list
     *
     * @param \EmotionDesc $value Value to append
     *
     * @return null
     */
    public function appendList(\EmotionDesc $value)
    {
        return $this->append(self::LIST, $value);
    }

    /**
     * Clears 'list' list
     *
     * @return null
     */
    public function clearList()
    {
        return $this->clear(self::LIST);
    }

    /**
     * Returns 'list' list
     *
     * @return \EmotionDesc[]
     */
    public function getList()
    {
        return $this->get(self::LIST);
    }

    /**
     * Returns true if 'list' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasList()
    {
        return count($this->get(self::LIST)) !== 0;
    }

    /**
     * Returns 'list' iterator
     *
     * @return \ArrayIterator
     */
    public function getListIterator()
    {
        return new \ArrayIterator($this->get(self::LIST));
    }

    /**
     * Returns element from 'list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \EmotionDesc
     */
    public function getListAt($offset)
    {
        return $this->get(self::LIST, $offset);
    }

    /**
     * Returns count of 'list' list
     *
     * @return int
     */
    public function getListCount()
    {
        return $this->count(self::LIST);
    }

    /**
     * Sets value of 'clickFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setClickFlag($value)
    {
        return $this->set(self::CLICKFLAG, $value);
    }

    /**
     * Returns value of 'clickFlag' property
     *
     * @return integer
     */
    public function getClickFlag()
    {
        $value = $this->get(self::CLICKFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'clickFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClickFlag()
    {
        return $this->get(self::CLICKFLAG) !== null;
    }

    /**
     * Sets value of 'buttonDesc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setButtonDesc($value)
    {
        return $this->set(self::BUTTONDESC, $value);
    }

    /**
     * Returns value of 'buttonDesc' property
     *
     * @return string
     */
    public function getButtonDesc()
    {
        $value = $this->get(self::BUTTONDESC);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'buttonDesc' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasButtonDesc()
    {
        return $this->get(self::BUTTONDESC) !== null;
    }

    /**
     * Sets value of 'downLoadFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDownLoadFlag($value)
    {
        return $this->set(self::DOWNLOADFLAG, $value);
    }

    /**
     * Returns value of 'downLoadFlag' property
     *
     * @return integer
     */
    public function getDownLoadFlag()
    {
        $value = $this->get(self::DOWNLOADFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'downLoadFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDownLoadFlag()
    {
        return $this->get(self::DOWNLOADFLAG) !== null;
    }
}
}