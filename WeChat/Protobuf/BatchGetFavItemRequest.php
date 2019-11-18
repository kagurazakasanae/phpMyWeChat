<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * BatchGetFavItemRequest message
 */
class BatchGetFavItemRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const COUNT = 2;
    const FAVIDLIST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baserequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::COUNT => array(
            'name' => 'count',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FAVIDLIST => array(
            'name' => 'favIdList',
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
        $this->values[self::BASEREQUEST] = null;
        $this->values[self::COUNT] = null;
        $this->values[self::FAVIDLIST] = array();
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
     * @param \BaseRequest $value Property value
     *
     * @return null
     */
    public function setBaserequest(\BaseRequest $value=null)
    {
        return $this->set(self::BASEREQUEST, $value);
    }

    /**
     * Returns value of 'baserequest' property
     *
     * @return \BaseRequest
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
     * Appends value to 'favIdList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendFavIdList($value)
    {
        return $this->append(self::FAVIDLIST, $value);
    }

    /**
     * Clears 'favIdList' list
     *
     * @return null
     */
    public function clearFavIdList()
    {
        return $this->clear(self::FAVIDLIST);
    }

    /**
     * Returns 'favIdList' list
     *
     * @return integer[]
     */
    public function getFavIdList()
    {
        return $this->get(self::FAVIDLIST);
    }

    /**
     * Returns true if 'favIdList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFavIdList()
    {
        return count($this->get(self::FAVIDLIST)) !== 0;
    }

    /**
     * Returns 'favIdList' iterator
     *
     * @return \ArrayIterator
     */
    public function getFavIdListIterator()
    {
        return new \ArrayIterator($this->get(self::FAVIDLIST));
    }

    /**
     * Returns element from 'favIdList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getFavIdListAt($offset)
    {
        return $this->get(self::FAVIDLIST, $offset);
    }

    /**
     * Returns count of 'favIdList' list
     *
     * @return int
     */
    public function getFavIdListCount()
    {
        return $this->count(self::FAVIDLIST);
    }
}
}