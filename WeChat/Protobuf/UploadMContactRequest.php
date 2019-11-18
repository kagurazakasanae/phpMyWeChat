<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * UploadMContactRequest message
 */
class UploadMContactRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const USERNAME = 2;
    const OPCODE = 3;
    const MOBILE = 4;
    const MOBILELISTSIZE = 5;
    const MOBILELIST = 6;
    const EMAILLISTSIZE = 7;
    const EMAILLIST = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::USERNAME => array(
            'name' => 'userName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OPCODE => array(
            'name' => 'opcode',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MOBILE => array(
            'name' => 'mobile',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MOBILELISTSIZE => array(
            'name' => 'mobileListSize',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MOBILELIST => array(
            'name' => 'mobileList',
            'repeated' => true,
            'type' => '\Mobile'
        ),
        self::EMAILLISTSIZE => array(
            'name' => 'emailListSize',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EMAILLIST => array(
            'name' => 'emailList',
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
        $this->values[self::USERNAME] = null;
        $this->values[self::OPCODE] = null;
        $this->values[self::MOBILE] = null;
        $this->values[self::MOBILELISTSIZE] = null;
        $this->values[self::MOBILELIST] = array();
        $this->values[self::EMAILLISTSIZE] = null;
        $this->values[self::EMAILLIST] = array();
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
     * Sets value of 'userName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUserName($value)
    {
        return $this->set(self::USERNAME, $value);
    }

    /**
     * Returns value of 'userName' property
     *
     * @return string
     */
    public function getUserName()
    {
        $value = $this->get(self::USERNAME);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'opcode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOpcode($value)
    {
        return $this->set(self::OPCODE, $value);
    }

    /**
     * Returns value of 'opcode' property
     *
     * @return integer
     */
    public function getOpcode()
    {
        $value = $this->get(self::OPCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'opcode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOpcode()
    {
        return $this->get(self::OPCODE) !== null;
    }

    /**
     * Sets value of 'mobile' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMobile($value)
    {
        return $this->set(self::MOBILE, $value);
    }

    /**
     * Returns value of 'mobile' property
     *
     * @return string
     */
    public function getMobile()
    {
        $value = $this->get(self::MOBILE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'mobile' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMobile()
    {
        return $this->get(self::MOBILE) !== null;
    }

    /**
     * Sets value of 'mobileListSize' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMobileListSize($value)
    {
        return $this->set(self::MOBILELISTSIZE, $value);
    }

    /**
     * Returns value of 'mobileListSize' property
     *
     * @return integer
     */
    public function getMobileListSize()
    {
        $value = $this->get(self::MOBILELISTSIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'mobileListSize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMobileListSize()
    {
        return $this->get(self::MOBILELISTSIZE) !== null;
    }

    /**
     * Appends value to 'mobileList' list
     *
     * @param \Mobile $value Value to append
     *
     * @return null
     */
    public function appendMobileList(\Mobile $value)
    {
        return $this->append(self::MOBILELIST, $value);
    }

    /**
     * Clears 'mobileList' list
     *
     * @return null
     */
    public function clearMobileList()
    {
        return $this->clear(self::MOBILELIST);
    }

    /**
     * Returns 'mobileList' list
     *
     * @return \Mobile[]
     */
    public function getMobileList()
    {
        return $this->get(self::MOBILELIST);
    }

    /**
     * Returns true if 'mobileList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMobileList()
    {
        return count($this->get(self::MOBILELIST)) !== 0;
    }

    /**
     * Returns 'mobileList' iterator
     *
     * @return \ArrayIterator
     */
    public function getMobileListIterator()
    {
        return new \ArrayIterator($this->get(self::MOBILELIST));
    }

    /**
     * Returns element from 'mobileList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Mobile
     */
    public function getMobileListAt($offset)
    {
        return $this->get(self::MOBILELIST, $offset);
    }

    /**
     * Returns count of 'mobileList' list
     *
     * @return int
     */
    public function getMobileListCount()
    {
        return $this->count(self::MOBILELIST);
    }

    /**
     * Sets value of 'emailListSize' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEmailListSize($value)
    {
        return $this->set(self::EMAILLISTSIZE, $value);
    }

    /**
     * Returns value of 'emailListSize' property
     *
     * @return integer
     */
    public function getEmailListSize()
    {
        $value = $this->get(self::EMAILLISTSIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'emailListSize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEmailListSize()
    {
        return $this->get(self::EMAILLISTSIZE) !== null;
    }

    /**
     * Appends value to 'emailList' list
     *
     * @param \MEmail $value Value to append
     *
     * @return null
     */
    public function appendEmailList(\MEmail $value)
    {
        return $this->append(self::EMAILLIST, $value);
    }

    /**
     * Clears 'emailList' list
     *
     * @return null
     */
    public function clearEmailList()
    {
        return $this->clear(self::EMAILLIST);
    }

    /**
     * Returns 'emailList' list
     *
     * @return \MEmail[]
     */
    public function getEmailList()
    {
        return $this->get(self::EMAILLIST);
    }

    /**
     * Returns true if 'emailList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEmailList()
    {
        return count($this->get(self::EMAILLIST)) !== 0;
    }

    /**
     * Returns 'emailList' iterator
     *
     * @return \ArrayIterator
     */
    public function getEmailListIterator()
    {
        return new \ArrayIterator($this->get(self::EMAILLIST));
    }

    /**
     * Returns element from 'emailList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \MEmail
     */
    public function getEmailListAt($offset)
    {
        return $this->get(self::EMAILLIST, $offset);
    }

    /**
     * Returns count of 'emailList' list
     *
     * @return int
     */
    public function getEmailListCount()
    {
        return $this->count(self::EMAILLIST);
    }
}
}