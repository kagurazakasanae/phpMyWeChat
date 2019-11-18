<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * VerifyUserRequest message
 */
class VerifyUserRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const OPCODE = 2;
    const VERIFYUSERLISTSIZE = 3;
    const VERIFYUSERLIST = 4;
    const VERIFYCONTENT = 5;
    const SCENELISTCOUNT = 6;
    const SCENELIST = 7;
    const VERIFYINFOLISTCOUNT = 8;
    const VERIFYINFOLIST = 9;
    const CLIENTCHECKDATA = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::OPCODE => array(
            'name' => 'opcode',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VERIFYUSERLISTSIZE => array(
            'name' => 'verifyUserListSize',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VERIFYUSERLIST => array(
            'name' => 'verifyUserList',
            'repeated' => true,
            'type' => '\VerifyUser'
        ),
        self::VERIFYCONTENT => array(
            'name' => 'verifyContent',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SCENELISTCOUNT => array(
            'name' => 'sceneListCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SCENELIST => array(
            'name' => 'sceneList',
            'repeated' => true,
            'type' => '\SKBuiltinString_'
        ),
        self::VERIFYINFOLISTCOUNT => array(
            'name' => 'verifyInfoListCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VERIFYINFOLIST => array(
            'name' => 'verifyInfoList',
            'repeated' => true,
            'type' => '\SKBuiltinString_'
        ),
        self::CLIENTCHECKDATA => array(
            'name' => 'clientCheckData',
            'required' => true,
            'type' => '\SKBuiltinString_'
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
        $this->values[self::OPCODE] = null;
        $this->values[self::VERIFYUSERLISTSIZE] = null;
        $this->values[self::VERIFYUSERLIST] = array();
        $this->values[self::VERIFYCONTENT] = null;
        $this->values[self::SCENELISTCOUNT] = null;
        $this->values[self::SCENELIST] = array();
        $this->values[self::VERIFYINFOLISTCOUNT] = null;
        $this->values[self::VERIFYINFOLIST] = array();
        $this->values[self::CLIENTCHECKDATA] = null;
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
     * Sets value of 'verifyUserListSize' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVerifyUserListSize($value)
    {
        return $this->set(self::VERIFYUSERLISTSIZE, $value);
    }

    /**
     * Returns value of 'verifyUserListSize' property
     *
     * @return integer
     */
    public function getVerifyUserListSize()
    {
        $value = $this->get(self::VERIFYUSERLISTSIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'verifyUserListSize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVerifyUserListSize()
    {
        return $this->get(self::VERIFYUSERLISTSIZE) !== null;
    }

    /**
     * Appends value to 'verifyUserList' list
     *
     * @param \VerifyUser $value Value to append
     *
     * @return null
     */
    public function appendVerifyUserList(\VerifyUser $value)
    {
        return $this->append(self::VERIFYUSERLIST, $value);
    }

    /**
     * Clears 'verifyUserList' list
     *
     * @return null
     */
    public function clearVerifyUserList()
    {
        return $this->clear(self::VERIFYUSERLIST);
    }

    /**
     * Returns 'verifyUserList' list
     *
     * @return \VerifyUser[]
     */
    public function getVerifyUserList()
    {
        return $this->get(self::VERIFYUSERLIST);
    }

    /**
     * Returns true if 'verifyUserList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVerifyUserList()
    {
        return count($this->get(self::VERIFYUSERLIST)) !== 0;
    }

    /**
     * Returns 'verifyUserList' iterator
     *
     * @return \ArrayIterator
     */
    public function getVerifyUserListIterator()
    {
        return new \ArrayIterator($this->get(self::VERIFYUSERLIST));
    }

    /**
     * Returns element from 'verifyUserList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \VerifyUser
     */
    public function getVerifyUserListAt($offset)
    {
        return $this->get(self::VERIFYUSERLIST, $offset);
    }

    /**
     * Returns count of 'verifyUserList' list
     *
     * @return int
     */
    public function getVerifyUserListCount()
    {
        return $this->count(self::VERIFYUSERLIST);
    }

    /**
     * Sets value of 'verifyContent' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVerifyContent($value)
    {
        return $this->set(self::VERIFYCONTENT, $value);
    }

    /**
     * Returns value of 'verifyContent' property
     *
     * @return string
     */
    public function getVerifyContent()
    {
        $value = $this->get(self::VERIFYCONTENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'verifyContent' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVerifyContent()
    {
        return $this->get(self::VERIFYCONTENT) !== null;
    }

    /**
     * Sets value of 'sceneListCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSceneListCount($value)
    {
        return $this->set(self::SCENELISTCOUNT, $value);
    }

    /**
     * Returns value of 'sceneListCount' property
     *
     * @return integer
     */
    public function getSceneListCount()
    {
        $value = $this->get(self::SCENELISTCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'sceneListCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSceneListCount()
    {
        return $this->get(self::SCENELISTCOUNT) !== null;
    }

    /**
     * Appends value to 'sceneList' list
     *
     * @param \SKBuiltinString_ $value Value to append
     *
     * @return null
     */
    public function appendSceneList(\SKBuiltinString_ $value)
    {
        return $this->append(self::SCENELIST, $value);
    }

    /**
     * Clears 'sceneList' list
     *
     * @return null
     */
    public function clearSceneList()
    {
        return $this->clear(self::SCENELIST);
    }

    /**
     * Returns 'sceneList' list
     *
     * @return \SKBuiltinString_[]
     */
    public function getSceneList()
    {
        return $this->get(self::SCENELIST);
    }

    /**
     * Returns true if 'sceneList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSceneList()
    {
        return count($this->get(self::SCENELIST)) !== 0;
    }

    /**
     * Returns 'sceneList' iterator
     *
     * @return \ArrayIterator
     */
    public function getSceneListIterator()
    {
        return new \ArrayIterator($this->get(self::SCENELIST));
    }

    /**
     * Returns element from 'sceneList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SKBuiltinString_
     */
    public function getSceneListAt($offset)
    {
        return $this->get(self::SCENELIST, $offset);
    }

    /**
     * Sets value of 'verifyInfoListCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVerifyInfoListCount($value)
    {
        return $this->set(self::VERIFYINFOLISTCOUNT, $value);
    }

    /**
     * Returns value of 'verifyInfoListCount' property
     *
     * @return integer
     */
    public function getVerifyInfoListCount()
    {
        $value = $this->get(self::VERIFYINFOLISTCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'verifyInfoListCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVerifyInfoListCount()
    {
        return $this->get(self::VERIFYINFOLISTCOUNT) !== null;
    }

    /**
     * Appends value to 'verifyInfoList' list
     *
     * @param \SKBuiltinString_ $value Value to append
     *
     * @return null
     */
    public function appendVerifyInfoList(\SKBuiltinString_ $value)
    {
        return $this->append(self::VERIFYINFOLIST, $value);
    }

    /**
     * Clears 'verifyInfoList' list
     *
     * @return null
     */
    public function clearVerifyInfoList()
    {
        return $this->clear(self::VERIFYINFOLIST);
    }

    /**
     * Returns 'verifyInfoList' list
     *
     * @return \SKBuiltinString_[]
     */
    public function getVerifyInfoList()
    {
        return $this->get(self::VERIFYINFOLIST);
    }

    /**
     * Returns true if 'verifyInfoList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVerifyInfoList()
    {
        return count($this->get(self::VERIFYINFOLIST)) !== 0;
    }

    /**
     * Returns 'verifyInfoList' iterator
     *
     * @return \ArrayIterator
     */
    public function getVerifyInfoListIterator()
    {
        return new \ArrayIterator($this->get(self::VERIFYINFOLIST));
    }

    /**
     * Returns element from 'verifyInfoList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SKBuiltinString_
     */
    public function getVerifyInfoListAt($offset)
    {
        return $this->get(self::VERIFYINFOLIST, $offset);
    }

    /**
     * Sets value of 'clientCheckData' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setClientCheckData(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::CLIENTCHECKDATA, $value);
    }

    /**
     * Returns value of 'clientCheckData' property
     *
     * @return \SKBuiltinString_
     */
    public function getClientCheckData()
    {
        return $this->get(self::CLIENTCHECKDATA);
    }

    /**
     * Returns true if 'clientCheckData' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientCheckData()
    {
        return $this->get(self::CLIENTCHECKDATA) !== null;
    }
}
}