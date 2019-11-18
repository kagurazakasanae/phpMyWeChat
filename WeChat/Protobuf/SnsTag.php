<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsTag message
 */
class SnsTag extends \ProtobufMessage
{
    /* Field index constants */
    const TAGID = 1;
    const TAGNAME = 2;
    const COUNT = 3;
    const LIST = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TAGID => array(
            'name' => 'tagId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TAGNAME => array(
            'name' => 'tagName',
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
            'type' => '\SKBuiltinString'
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
        $this->values[self::TAGID] = null;
        $this->values[self::TAGNAME] = null;
        $this->values[self::COUNT] = null;
        $this->values[self::LIST] = array();
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
     * Sets value of 'tagId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTagId($value)
    {
        return $this->set(self::TAGID, $value);
    }

    /**
     * Returns value of 'tagId' property
     *
     * @return integer
     */
    public function getTagId()
    {
        $value = $this->get(self::TAGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'tagId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTagId()
    {
        return $this->get(self::TAGID) !== null;
    }

    /**
     * Sets value of 'tagName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTagName($value)
    {
        return $this->set(self::TAGNAME, $value);
    }

    /**
     * Returns value of 'tagName' property
     *
     * @return string
     */
    public function getTagName()
    {
        $value = $this->get(self::TAGNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'tagName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTagName()
    {
        return $this->get(self::TAGNAME) !== null;
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
     * @param \SKBuiltinString $value Value to append
     *
     * @return null
     */
    public function appendList(\SKBuiltinString $value)
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
     * @return \SKBuiltinString[]
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
     * @return \SKBuiltinString
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
}
}