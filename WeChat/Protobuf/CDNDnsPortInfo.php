<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * CDNDnsPortInfo message
 */
class CDNDnsPortInfo extends \ProtobufMessage
{
    /* Field index constants */
    const PORTCOUNT = 1;
    const PORTLIST = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PORTCOUNT => array(
            'name' => 'portCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PORTLIST => array(
            'name' => 'portList',
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
        $this->values[self::PORTCOUNT] = null;
        $this->values[self::PORTLIST] = array();
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
     * Sets value of 'portCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPortCount($value)
    {
        return $this->set(self::PORTCOUNT, $value);
    }

    /**
     * Returns value of 'portCount' property
     *
     * @return integer
     */
    public function getPortCount()
    {
        $value = $this->get(self::PORTCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'portCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPortCount()
    {
        return $this->get(self::PORTCOUNT) !== null;
    }

    /**
     * Appends value to 'portList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendPortList($value)
    {
        return $this->append(self::PORTLIST, $value);
    }

    /**
     * Clears 'portList' list
     *
     * @return null
     */
    public function clearPortList()
    {
        return $this->clear(self::PORTLIST);
    }

    /**
     * Returns 'portList' list
     *
     * @return integer[]
     */
    public function getPortList()
    {
        return $this->get(self::PORTLIST);
    }

    /**
     * Returns true if 'portList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPortList()
    {
        return count($this->get(self::PORTLIST)) !== 0;
    }

    /**
     * Returns 'portList' iterator
     *
     * @return \ArrayIterator
     */
    public function getPortListIterator()
    {
        return new \ArrayIterator($this->get(self::PORTLIST));
    }

    /**
     * Returns element from 'portList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getPortListAt($offset)
    {
        return $this->get(self::PORTLIST, $offset);
    }

    /**
     * Returns count of 'portList' list
     *
     * @return int
     */
    public function getPortListCount()
    {
        return $this->count(self::PORTLIST);
    }
}
}