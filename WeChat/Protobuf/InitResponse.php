<?php
/**
 * Auto generated from x.proto at 2019-11-13 06:31:09
 */

namespace {
/**
 * InitResponse message
 */
class InitResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const NEWSYNCKEY = 2;
    const CONTINUEFLAG = 3;
    const CMDCOUNT = 4;
    const CMDLIST = 5;
    const BUFFER = 6;
    const RATIO = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'BaseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::NEWSYNCKEY => array(
            'name' => 'NewSyncKey',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONTINUEFLAG => array(
            'name' => 'ContinueFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CMDCOUNT => array(
            'name' => 'CmdCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CMDLIST => array(
            'name' => 'CmdList',
            'repeated' => true,
            'type' => '\CmdItem'
        ),
        self::BUFFER => array(
            'name' => 'Buffer',
            'required' => true,
            'type' => '\SKBuiltinString_t'
        ),
        self::RATIO => array(
            'name' => 'Ratio',
            'required' => true,
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
        $this->values[self::BASERESPONSE] = null;
        $this->values[self::NEWSYNCKEY] = null;
        $this->values[self::CONTINUEFLAG] = null;
        $this->values[self::CMDCOUNT] = null;
        $this->values[self::CMDLIST] = array();
        $this->values[self::BUFFER] = null;
        $this->values[self::RATIO] = null;
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
     * Sets value of 'BaseResponse' property
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
     * Returns value of 'BaseResponse' property
     *
     * @return \BaseResponse
     */
    public function getBaseResponse()
    {
        return $this->get(self::BASERESPONSE);
    }

    /**
     * Returns true if 'BaseResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseResponse()
    {
        return $this->get(self::BASERESPONSE) !== null;
    }

    /**
     * Sets value of 'NewSyncKey' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNewSyncKey($value)
    {
        return $this->set(self::NEWSYNCKEY, $value);
    }

    /**
     * Returns value of 'NewSyncKey' property
     *
     * @return integer
     */
    public function getNewSyncKey()
    {
        $value = $this->get(self::NEWSYNCKEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'NewSyncKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewSyncKey()
    {
        return $this->get(self::NEWSYNCKEY) !== null;
    }

    /**
     * Sets value of 'ContinueFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setContinueFlag($value)
    {
        return $this->set(self::CONTINUEFLAG, $value);
    }

    /**
     * Returns value of 'ContinueFlag' property
     *
     * @return integer
     */
    public function getContinueFlag()
    {
        $value = $this->get(self::CONTINUEFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ContinueFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContinueFlag()
    {
        return $this->get(self::CONTINUEFLAG) !== null;
    }

    /**
     * Sets value of 'CmdCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCmdCount($value)
    {
        return $this->set(self::CMDCOUNT, $value);
    }

    /**
     * Returns value of 'CmdCount' property
     *
     * @return integer
     */
    public function getCmdCount()
    {
        $value = $this->get(self::CMDCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'CmdCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCmdCount()
    {
        return $this->get(self::CMDCOUNT) !== null;
    }

    /**
     * Appends value to 'CmdList' list
     *
     * @param \CmdItem $value Value to append
     *
     * @return null
     */
    public function appendCmdList(\CmdItem $value)
    {
        return $this->append(self::CMDLIST, $value);
    }

    /**
     * Clears 'CmdList' list
     *
     * @return null
     */
    public function clearCmdList()
    {
        return $this->clear(self::CMDLIST);
    }

    /**
     * Returns 'CmdList' list
     *
     * @return \CmdItem[]
     */
    public function getCmdList()
    {
        return $this->get(self::CMDLIST);
    }

    /**
     * Returns true if 'CmdList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCmdList()
    {
        return count($this->get(self::CMDLIST)) !== 0;
    }

    /**
     * Returns 'CmdList' iterator
     *
     * @return \ArrayIterator
     */
    public function getCmdListIterator()
    {
        return new \ArrayIterator($this->get(self::CMDLIST));
    }

    /**
     * Returns element from 'CmdList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \CmdItem
     */
    public function getCmdListAt($offset)
    {
        return $this->get(self::CMDLIST, $offset);
    }

    /**
     * Returns count of 'CmdList' list
     *
     * @return int
     */
    public function getCmdListCount()
    {
        return $this->count(self::CMDLIST);
    }

    /**
     * Sets value of 'Buffer' property
     *
     * @param \SKBuiltinString_t $value Property value
     *
     * @return null
     */
    public function setBuffer(\SKBuiltinString_t $value=null)
    {
        return $this->set(self::BUFFER, $value);
    }

    /**
     * Returns value of 'Buffer' property
     *
     * @return \SKBuiltinString_t
     */
    public function getBuffer()
    {
        return $this->get(self::BUFFER);
    }

    /**
     * Returns true if 'Buffer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBuffer()
    {
        return $this->get(self::BUFFER) !== null;
    }

    /**
     * Sets value of 'Ratio' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRatio($value)
    {
        return $this->set(self::RATIO, $value);
    }

    /**
     * Returns value of 'Ratio' property
     *
     * @return integer
     */
    public function getRatio()
    {
        $value = $this->get(self::RATIO);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Ratio' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRatio()
    {
        return $this->get(self::RATIO) !== null;
    }
}
}