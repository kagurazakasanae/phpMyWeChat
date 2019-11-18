<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * BatchGetFavItemResponse message
 */
class BatchGetFavItemResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const COUNT = 2;
    const OBJECTLIST = 3;

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
        self::OBJECTLIST => array(
            'name' => 'objectList',
            'repeated' => true,
            'type' => '\FavObject'
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
        $this->values[self::OBJECTLIST] = array();
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
     * Appends value to 'objectList' list
     *
     * @param \FavObject $value Value to append
     *
     * @return null
     */
    public function appendObjectList(\FavObject $value)
    {
        return $this->append(self::OBJECTLIST, $value);
    }

    /**
     * Clears 'objectList' list
     *
     * @return null
     */
    public function clearObjectList()
    {
        return $this->clear(self::OBJECTLIST);
    }

    /**
     * Returns 'objectList' list
     *
     * @return \FavObject[]
     */
    public function getObjectList()
    {
        return $this->get(self::OBJECTLIST);
    }

    /**
     * Returns true if 'objectList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasObjectList()
    {
        return count($this->get(self::OBJECTLIST)) !== 0;
    }

    /**
     * Returns 'objectList' iterator
     *
     * @return \ArrayIterator
     */
    public function getObjectListIterator()
    {
        return new \ArrayIterator($this->get(self::OBJECTLIST));
    }

    /**
     * Returns element from 'objectList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \FavObject
     */
    public function getObjectListAt($offset)
    {
        return $this->get(self::OBJECTLIST, $offset);
    }

    /**
     * Returns count of 'objectList' list
     *
     * @return int
     */
    public function getObjectListCount()
    {
        return $this->count(self::OBJECTLIST);
    }
}
}