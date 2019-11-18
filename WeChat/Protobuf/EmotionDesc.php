<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * EmotionDesc message
 */
class EmotionDesc extends \ProtobufMessage
{
    /* Field index constants */
    const MD5 = 1;
    const COUNT = 2;
    const LIST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MD5 => array(
            'name' => 'md5',
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
            'type' => '\LangDesc'
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
        $this->values[self::MD5] = null;
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
     * Sets value of 'md5' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMd5($value)
    {
        return $this->set(self::MD5, $value);
    }

    /**
     * Returns value of 'md5' property
     *
     * @return string
     */
    public function getMd5()
    {
        $value = $this->get(self::MD5);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'md5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMd5()
    {
        return $this->get(self::MD5) !== null;
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
     * @param \LangDesc $value Value to append
     *
     * @return null
     */
    public function appendList(\LangDesc $value)
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
     * @return \LangDesc[]
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
     * @return \LangDesc
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