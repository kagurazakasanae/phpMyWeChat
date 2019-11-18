<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * DelMsg message
 */
class DelMsg extends \ProtobufMessage
{
    /* Field index constants */
    const USERNAME = 1;
    const COUNT = 2;
    const MSGIDLIST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::USERNAME => array(
            'name' => 'userName',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::COUNT => array(
            'default' => 0,
            'name' => 'count',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MSGIDLIST => array(
            'name' => 'msgIdList',
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
        $this->values[self::USERNAME] = null;
        $this->values[self::COUNT] = self::$fields[self::COUNT]['default'];
        $this->values[self::MSGIDLIST] = array();
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
     * Sets value of 'userName' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setUserName(\SKBuiltinString $value=null)
    {
        return $this->set(self::USERNAME, $value);
    }

    /**
     * Returns value of 'userName' property
     *
     * @return \SKBuiltinString
     */
    public function getUserName()
    {
        return $this->get(self::USERNAME);
    }

    /**
     * Returns true if 'userName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUserName()
    {
        return $this->get(self::USERNAME) !== null;
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
     * Appends value to 'msgIdList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendMsgIdList($value)
    {
        return $this->append(self::MSGIDLIST, $value);
    }

    /**
     * Clears 'msgIdList' list
     *
     * @return null
     */
    public function clearMsgIdList()
    {
        return $this->clear(self::MSGIDLIST);
    }

    /**
     * Returns 'msgIdList' list
     *
     * @return integer[]
     */
    public function getMsgIdList()
    {
        return $this->get(self::MSGIDLIST);
    }

    /**
     * Returns true if 'msgIdList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgIdList()
    {
        return count($this->get(self::MSGIDLIST)) !== 0;
    }

    /**
     * Returns 'msgIdList' iterator
     *
     * @return \ArrayIterator
     */
    public function getMsgIdListIterator()
    {
        return new \ArrayIterator($this->get(self::MSGIDLIST));
    }

    /**
     * Returns element from 'msgIdList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getMsgIdListAt($offset)
    {
        return $this->get(self::MSGIDLIST, $offset);
    }

    /**
     * Returns count of 'msgIdList' list
     *
     * @return int
     */
    public function getMsgIdListCount()
    {
        return $this->count(self::MSGIDLIST);
    }
}
}