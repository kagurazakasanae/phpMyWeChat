<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * BatchGetHeadImgRequest message
 */
class BatchGetHeadImgRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const COUNT = 2;
    const USERNAMELIST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::COUNT => array(
            'name' => 'count',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::USERNAMELIST => array(
            'name' => 'userNameList',
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
        $this->values[self::BASEREQUEST] = null;
        $this->values[self::COUNT] = null;
        $this->values[self::USERNAMELIST] = array();
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
     * Sets value of 'baseRequest' property
     *
     * @param \BaseRequest $value Property value
     *
     * @return null
     */
    public function setBaseRequest(\BaseRequest $value=null)
    {
        return $this->set(self::BASEREQUEST, $value);
    }

    /**
     * Returns value of 'baseRequest' property
     *
     * @return \BaseRequest
     */
    public function getBaseRequest()
    {
        return $this->get(self::BASEREQUEST);
    }

    /**
     * Returns true if 'baseRequest' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseRequest()
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
     * Appends value to 'userNameList' list
     *
     * @param \SKBuiltinString $value Value to append
     *
     * @return null
     */
    public function appendUserNameList(\SKBuiltinString $value)
    {
        return $this->append(self::USERNAMELIST, $value);
    }

    /**
     * Clears 'userNameList' list
     *
     * @return null
     */
    public function clearUserNameList()
    {
        return $this->clear(self::USERNAMELIST);
    }

    /**
     * Returns 'userNameList' list
     *
     * @return \SKBuiltinString[]
     */
    public function getUserNameList()
    {
        return $this->get(self::USERNAMELIST);
    }

    /**
     * Returns true if 'userNameList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUserNameList()
    {
        return count($this->get(self::USERNAMELIST)) !== 0;
    }

    /**
     * Returns 'userNameList' iterator
     *
     * @return \ArrayIterator
     */
    public function getUserNameListIterator()
    {
        return new \ArrayIterator($this->get(self::USERNAMELIST));
    }

    /**
     * Returns element from 'userNameList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SKBuiltinString
     */
    public function getUserNameListAt($offset)
    {
        return $this->get(self::USERNAMELIST, $offset);
    }

    /**
     * Returns count of 'userNameList' list
     *
     * @return int
     */
    public function getUserNameListCount()
    {
        return $this->count(self::USERNAMELIST);
    }
}
}