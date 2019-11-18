<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsTagListResponse message
 */
class SnsTagListResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const OPCODE = 2;
    const TAGLISTMD5 = 3;
    const COUNT = 4;
    const LIST = 5;
    const T6 = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::OPCODE => array(
            'name' => 'opCode',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TAGLISTMD5 => array(
            'name' => 'tagListMd5',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::COUNT => array(
            'name' => 'count',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LIST => array(
            'name' => 'list',
            'repeated' => true,
            'type' => '\SnsTag'
        ),
        self::T6 => array(
            'name' => 't6',
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
        $this->values[self::OPCODE] = null;
        $this->values[self::TAGLISTMD5] = null;
        $this->values[self::COUNT] = null;
        $this->values[self::LIST] = array();
        $this->values[self::T6] = null;
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
     * Sets value of 'opCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOpCode($value)
    {
        return $this->set(self::OPCODE, $value);
    }

    /**
     * Returns value of 'opCode' property
     *
     * @return integer
     */
    public function getOpCode()
    {
        $value = $this->get(self::OPCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'opCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOpCode()
    {
        return $this->get(self::OPCODE) !== null;
    }

    /**
     * Sets value of 'tagListMd5' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTagListMd5($value)
    {
        return $this->set(self::TAGLISTMD5, $value);
    }

    /**
     * Returns value of 'tagListMd5' property
     *
     * @return string
     */
    public function getTagListMd5()
    {
        $value = $this->get(self::TAGLISTMD5);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'tagListMd5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTagListMd5()
    {
        return $this->get(self::TAGLISTMD5) !== null;
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
     * @param \SnsTag $value Value to append
     *
     * @return null
     */
    public function appendList(\SnsTag $value)
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
     * @return \SnsTag[]
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
     * @return \SnsTag
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
     * Sets value of 't6' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT6($value)
    {
        return $this->set(self::T6, $value);
    }

    /**
     * Returns value of 't6' property
     *
     * @return integer
     */
    public function getT6()
    {
        $value = $this->get(self::T6);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't6' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT6()
    {
        return $this->get(self::T6) !== null;
    }
}
}