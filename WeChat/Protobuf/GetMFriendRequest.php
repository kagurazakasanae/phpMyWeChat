<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GetMFriendRequest message
 */
class GetMFriendRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const OPTYPE = 2;
    const MD5 = 3;
    const UPDATEMOBILELISTSIZE = 4;
    const UPDATEMOBILELIST = 5;
    const UPDATEEMAILLISTSIZE = 6;
    const UPDATEEMAILLIST = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::OPTYPE => array(
            'name' => 'opType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MD5 => array(
            'name' => 'mD5',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::UPDATEMOBILELISTSIZE => array(
            'name' => 'updateMobileListSize',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UPDATEMOBILELIST => array(
            'name' => 'updateMobileList',
            'repeated' => true,
            'type' => '\Mobile'
        ),
        self::UPDATEEMAILLISTSIZE => array(
            'name' => 'updateEmailListSize',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UPDATEEMAILLIST => array(
            'name' => 'updateEmailList',
            'repeated' => true,
            'type' => '\MEmail'
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
        $this->values[self::OPTYPE] = null;
        $this->values[self::MD5] = null;
        $this->values[self::UPDATEMOBILELISTSIZE] = null;
        $this->values[self::UPDATEMOBILELIST] = array();
        $this->values[self::UPDATEEMAILLISTSIZE] = null;
        $this->values[self::UPDATEEMAILLIST] = array();
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
     * Sets value of 'opType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOpType($value)
    {
        return $this->set(self::OPTYPE, $value);
    }

    /**
     * Returns value of 'opType' property
     *
     * @return integer
     */
    public function getOpType()
    {
        $value = $this->get(self::OPTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'opType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOpType()
    {
        return $this->get(self::OPTYPE) !== null;
    }

    /**
     * Sets value of 'mD5' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMD5($value)
    {
        return $this->set(self::MD5, $value);
    }

    /**
     * Returns value of 'mD5' property
     *
     * @return string
     */
    public function getMD5()
    {
        $value = $this->get(self::MD5);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'mD5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMD5()
    {
        return $this->get(self::MD5) !== null;
    }

    /**
     * Sets value of 'updateMobileListSize' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUpdateMobileListSize($value)
    {
        return $this->set(self::UPDATEMOBILELISTSIZE, $value);
    }

    /**
     * Returns value of 'updateMobileListSize' property
     *
     * @return integer
     */
    public function getUpdateMobileListSize()
    {
        $value = $this->get(self::UPDATEMOBILELISTSIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'updateMobileListSize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUpdateMobileListSize()
    {
        return $this->get(self::UPDATEMOBILELISTSIZE) !== null;
    }

    /**
     * Appends value to 'updateMobileList' list
     *
     * @param \Mobile $value Value to append
     *
     * @return null
     */
    public function appendUpdateMobileList(\Mobile $value)
    {
        return $this->append(self::UPDATEMOBILELIST, $value);
    }

    /**
     * Clears 'updateMobileList' list
     *
     * @return null
     */
    public function clearUpdateMobileList()
    {
        return $this->clear(self::UPDATEMOBILELIST);
    }

    /**
     * Returns 'updateMobileList' list
     *
     * @return \Mobile[]
     */
    public function getUpdateMobileList()
    {
        return $this->get(self::UPDATEMOBILELIST);
    }

    /**
     * Returns true if 'updateMobileList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUpdateMobileList()
    {
        return count($this->get(self::UPDATEMOBILELIST)) !== 0;
    }

    /**
     * Returns 'updateMobileList' iterator
     *
     * @return \ArrayIterator
     */
    public function getUpdateMobileListIterator()
    {
        return new \ArrayIterator($this->get(self::UPDATEMOBILELIST));
    }

    /**
     * Returns element from 'updateMobileList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Mobile
     */
    public function getUpdateMobileListAt($offset)
    {
        return $this->get(self::UPDATEMOBILELIST, $offset);
    }

    /**
     * Returns count of 'updateMobileList' list
     *
     * @return int
     */
    public function getUpdateMobileListCount()
    {
        return $this->count(self::UPDATEMOBILELIST);
    }

    /**
     * Sets value of 'updateEmailListSize' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUpdateEmailListSize($value)
    {
        return $this->set(self::UPDATEEMAILLISTSIZE, $value);
    }

    /**
     * Returns value of 'updateEmailListSize' property
     *
     * @return integer
     */
    public function getUpdateEmailListSize()
    {
        $value = $this->get(self::UPDATEEMAILLISTSIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'updateEmailListSize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUpdateEmailListSize()
    {
        return $this->get(self::UPDATEEMAILLISTSIZE) !== null;
    }

    /**
     * Appends value to 'updateEmailList' list
     *
     * @param \MEmail $value Value to append
     *
     * @return null
     */
    public function appendUpdateEmailList(\MEmail $value)
    {
        return $this->append(self::UPDATEEMAILLIST, $value);
    }

    /**
     * Clears 'updateEmailList' list
     *
     * @return null
     */
    public function clearUpdateEmailList()
    {
        return $this->clear(self::UPDATEEMAILLIST);
    }

    /**
     * Returns 'updateEmailList' list
     *
     * @return \MEmail[]
     */
    public function getUpdateEmailList()
    {
        return $this->get(self::UPDATEEMAILLIST);
    }

    /**
     * Returns true if 'updateEmailList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUpdateEmailList()
    {
        return count($this->get(self::UPDATEEMAILLIST)) !== 0;
    }

    /**
     * Returns 'updateEmailList' iterator
     *
     * @return \ArrayIterator
     */
    public function getUpdateEmailListIterator()
    {
        return new \ArrayIterator($this->get(self::UPDATEEMAILLIST));
    }

    /**
     * Returns element from 'updateEmailList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \MEmail
     */
    public function getUpdateEmailListAt($offset)
    {
        return $this->get(self::UPDATEEMAILLIST, $offset);
    }

    /**
     * Returns count of 'updateEmailList' list
     *
     * @return int
     */
    public function getUpdateEmailListCount()
    {
        return $this->count(self::UPDATEEMAILLIST);
    }
}
}