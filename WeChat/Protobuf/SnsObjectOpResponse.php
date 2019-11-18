<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsObjectOpResponse message
 */
class SnsObjectOpResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const OPCOUNT = 2;
    const OPRETLIST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::OPCOUNT => array(
            'name' => 'opCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OPRETLIST => array(
            'name' => 'opRetList',
            'repeated' => true,
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
        $this->values[self::OPCOUNT] = null;
        $this->values[self::OPRETLIST] = array();
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
     * Sets value of 'opCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOpCount($value)
    {
        return $this->set(self::OPCOUNT, $value);
    }

    /**
     * Returns value of 'opCount' property
     *
     * @return integer
     */
    public function getOpCount()
    {
        $value = $this->get(self::OPCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'opCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOpCount()
    {
        return $this->get(self::OPCOUNT) !== null;
    }

    /**
     * Appends value to 'opRetList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendOpRetList($value)
    {
        return $this->append(self::OPRETLIST, $value);
    }

    /**
     * Clears 'opRetList' list
     *
     * @return null
     */
    public function clearOpRetList()
    {
        return $this->clear(self::OPRETLIST);
    }

    /**
     * Returns 'opRetList' list
     *
     * @return integer[]
     */
    public function getOpRetList()
    {
        return $this->get(self::OPRETLIST);
    }

    /**
     * Returns true if 'opRetList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOpRetList()
    {
        return count($this->get(self::OPRETLIST)) !== 0;
    }

    /**
     * Returns 'opRetList' iterator
     *
     * @return \ArrayIterator
     */
    public function getOpRetListIterator()
    {
        return new \ArrayIterator($this->get(self::OPRETLIST));
    }

    /**
     * Returns element from 'opRetList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getOpRetListAt($offset)
    {
        return $this->get(self::OPRETLIST, $offset);
    }

    /**
     * Returns count of 'opRetList' list
     *
     * @return int
     */
    public function getOpRetListCount()
    {
        return $this->count(self::OPRETLIST);
    }
}
}