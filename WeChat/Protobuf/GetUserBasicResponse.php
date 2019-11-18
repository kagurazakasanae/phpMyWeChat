<?php
/**
 * Auto generated from x.proto at 2019-11-12 22:34:25
 */

namespace {
/**
 * GetUserBasicResponse message
 */
class GetUserBasicResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const CURRENTSYNCKEY = 2;
    const MAXSYNCKEY = 3;
    const CONTINUEFLAG = 4;
    const SELECTBITMAP = 5;
    const CMDCOUNT = 6;
    const CMDITEM = 7;
    const RATIO = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::CURRENTSYNCKEY => array(
            'name' => 'CurrentSynckey',
            'required' => true,
            'type' => '\SKBuiltinString_S'
        ),
        self::MAXSYNCKEY => array(
            'name' => 'MaxSynckey',
            'required' => true,
            'type' => '\SKBuiltinString_S'
        ),
        self::CONTINUEFLAG => array(
            'name' => 'ContinueFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SELECTBITMAP => array(
            'name' => 'SelectBitmap',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CMDCOUNT => array(
            'name' => 'CmdCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CMDITEM => array(
            'name' => 'CmdItem',
            'repeated' => true,
            'type' => '\CmdItem'
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
        $this->values[self::CURRENTSYNCKEY] = null;
        $this->values[self::MAXSYNCKEY] = null;
        $this->values[self::CONTINUEFLAG] = null;
        $this->values[self::SELECTBITMAP] = null;
        $this->values[self::CMDCOUNT] = null;
        $this->values[self::CMDITEM] = array();
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
     * Sets value of 'CurrentSynckey' property
     *
     * @param \SKBuiltinString_S $value Property value
     *
     * @return null
     */
    public function setCurrentSynckey(\SKBuiltinString_S $value=null)
    {
        return $this->set(self::CURRENTSYNCKEY, $value);
    }

    /**
     * Returns value of 'CurrentSynckey' property
     *
     * @return \SKBuiltinString_S
     */
    public function getCurrentSynckey()
    {
        return $this->get(self::CURRENTSYNCKEY);
    }

    /**
     * Returns true if 'CurrentSynckey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCurrentSynckey()
    {
        return $this->get(self::CURRENTSYNCKEY) !== null;
    }

    /**
     * Sets value of 'MaxSynckey' property
     *
     * @param \SKBuiltinString_S $value Property value
     *
     * @return null
     */
    public function setMaxSynckey(\SKBuiltinString_S $value=null)
    {
        return $this->set(self::MAXSYNCKEY, $value);
    }

    /**
     * Returns value of 'MaxSynckey' property
     *
     * @return \SKBuiltinString_S
     */
    public function getMaxSynckey()
    {
        return $this->get(self::MAXSYNCKEY);
    }

    /**
     * Returns true if 'MaxSynckey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMaxSynckey()
    {
        return $this->get(self::MAXSYNCKEY) !== null;
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
     * Sets value of 'SelectBitmap' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSelectBitmap($value)
    {
        return $this->set(self::SELECTBITMAP, $value);
    }

    /**
     * Returns value of 'SelectBitmap' property
     *
     * @return integer
     */
    public function getSelectBitmap()
    {
        $value = $this->get(self::SELECTBITMAP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'SelectBitmap' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSelectBitmap()
    {
        return $this->get(self::SELECTBITMAP) !== null;
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
     * Appends value to 'CmdItem' list
     *
     * @param \CmdItem $value Value to append
     *
     * @return null
     */
    public function appendCmdItem(\CmdItem $value)
    {
        return $this->append(self::CMDITEM, $value);
    }

    /**
     * Clears 'CmdItem' list
     *
     * @return null
     */
    public function clearCmdItem()
    {
        return $this->clear(self::CMDITEM);
    }

    /**
     * Returns 'CmdItem' list
     *
     * @return \CmdItem[]
     */
    public function getCmdItem()
    {
        return $this->get(self::CMDITEM);
    }

    /**
     * Returns true if 'CmdItem' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCmdItem()
    {
        return count($this->get(self::CMDITEM)) !== 0;
    }

    /**
     * Returns 'CmdItem' iterator
     *
     * @return \ArrayIterator
     */
    public function getCmdItemIterator()
    {
        return new \ArrayIterator($this->get(self::CMDITEM));
    }

    /**
     * Returns element from 'CmdItem' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \CmdItem
     */
    public function getCmdItemAt($offset)
    {
        return $this->get(self::CMDITEM, $offset);
    }

    /**
     * Returns count of 'CmdItem' list
     *
     * @return int
     */
    public function getCmdItemCount()
    {
        return $this->count(self::CMDITEM);
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