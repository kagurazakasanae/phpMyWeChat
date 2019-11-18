<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsTimeLineResponse message
 */
class SnsTimeLineResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const FRISTPAGEMD5 = 2;
    const OBJECTCOUNT = 3;
    const OBJECTLIST = 4;
    const NEWREQUESTTIME = 5;
    const OBJECTCOUNTFORSAMEMD5 = 6;
    const CONTROLFLAG = 7;
    const SERVERCONFIG = 8;
    const ADVERTISECOUNT = 9;
    const ADVERTISELIST = 10;
    const SESSION = 11;
    const RECCOUNT = 12;
    const RECLIST = 13;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::FRISTPAGEMD5 => array(
            'name' => 'fristPageMd5',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OBJECTCOUNT => array(
            'name' => 'objectCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OBJECTLIST => array(
            'name' => 'objectList',
            'repeated' => true,
            'type' => '\SnsObject'
        ),
        self::NEWREQUESTTIME => array(
            'name' => 'newRequestTime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OBJECTCOUNTFORSAMEMD5 => array(
            'name' => 'objectCountForSameMd5',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONTROLFLAG => array(
            'name' => 'controlFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SERVERCONFIG => array(
            'name' => 'serverConfig',
            'required' => true,
            'type' => '\SnsServerConfig'
        ),
        self::ADVERTISECOUNT => array(
            'name' => 'advertiseCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ADVERTISELIST => array(
            'name' => 'advertiseList',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SESSION => array(
            'name' => 'session',
            'required' => true,
            'type' => '\SKBuiltinString_'
        ),
        self::RECCOUNT => array(
            'name' => 'recCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RECLIST => array(
            'name' => 'recList',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::FRISTPAGEMD5] = null;
        $this->values[self::OBJECTCOUNT] = null;
        $this->values[self::OBJECTLIST] = array();
        $this->values[self::NEWREQUESTTIME] = null;
        $this->values[self::OBJECTCOUNTFORSAMEMD5] = null;
        $this->values[self::CONTROLFLAG] = null;
        $this->values[self::SERVERCONFIG] = null;
        $this->values[self::ADVERTISECOUNT] = null;
        $this->values[self::ADVERTISELIST] = null;
        $this->values[self::SESSION] = null;
        $this->values[self::RECCOUNT] = null;
        $this->values[self::RECLIST] = null;
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
     * Sets value of 'fristPageMd5' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFristPageMd5($value)
    {
        return $this->set(self::FRISTPAGEMD5, $value);
    }

    /**
     * Returns value of 'fristPageMd5' property
     *
     * @return string
     */
    public function getFristPageMd5()
    {
        $value = $this->get(self::FRISTPAGEMD5);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'fristPageMd5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFristPageMd5()
    {
        return $this->get(self::FRISTPAGEMD5) !== null;
    }

    /**
     * Sets value of 'objectCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setObjectCount($value)
    {
        return $this->set(self::OBJECTCOUNT, $value);
    }

    /**
     * Returns value of 'objectCount' property
     *
     * @return integer
     */
    public function getObjectCount()
    {
        $value = $this->get(self::OBJECTCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'objectCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasObjectCount()
    {
        return $this->get(self::OBJECTCOUNT) !== null;
    }

    /**
     * Appends value to 'objectList' list
     *
     * @param \SnsObject $value Value to append
     *
     * @return null
     */
    public function appendObjectList(\SnsObject $value)
    {
        return $this->append(self::OBJECTLIST, $value);
    }

    /**
     * Clears 'objectList' list
     *
     * @return null
     */
    public function clearObjectList()
    {
        return $this->clear(self::OBJECTLIST);
    }

    /**
     * Returns 'objectList' list
     *
     * @return \SnsObject[]
     */
    public function getObjectList()
    {
        return $this->get(self::OBJECTLIST);
    }

    /**
     * Returns true if 'objectList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasObjectList()
    {
        return count($this->get(self::OBJECTLIST)) !== 0;
    }

    /**
     * Returns 'objectList' iterator
     *
     * @return \ArrayIterator
     */
    public function getObjectListIterator()
    {
        return new \ArrayIterator($this->get(self::OBJECTLIST));
    }

    /**
     * Returns element from 'objectList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SnsObject
     */
    public function getObjectListAt($offset)
    {
        return $this->get(self::OBJECTLIST, $offset);
    }

    /**
     * Returns count of 'objectList' list
     *
     * @return int
     */
    public function getObjectListCount()
    {
        return $this->count(self::OBJECTLIST);
    }

    /**
     * Sets value of 'newRequestTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNewRequestTime($value)
    {
        return $this->set(self::NEWREQUESTTIME, $value);
    }

    /**
     * Returns value of 'newRequestTime' property
     *
     * @return integer
     */
    public function getNewRequestTime()
    {
        $value = $this->get(self::NEWREQUESTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'newRequestTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewRequestTime()
    {
        return $this->get(self::NEWREQUESTTIME) !== null;
    }

    /**
     * Sets value of 'objectCountForSameMd5' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setObjectCountForSameMd5($value)
    {
        return $this->set(self::OBJECTCOUNTFORSAMEMD5, $value);
    }

    /**
     * Returns value of 'objectCountForSameMd5' property
     *
     * @return integer
     */
    public function getObjectCountForSameMd5()
    {
        $value = $this->get(self::OBJECTCOUNTFORSAMEMD5);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'objectCountForSameMd5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasObjectCountForSameMd5()
    {
        return $this->get(self::OBJECTCOUNTFORSAMEMD5) !== null;
    }

    /**
     * Sets value of 'controlFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setControlFlag($value)
    {
        return $this->set(self::CONTROLFLAG, $value);
    }

    /**
     * Returns value of 'controlFlag' property
     *
     * @return integer
     */
    public function getControlFlag()
    {
        $value = $this->get(self::CONTROLFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'controlFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasControlFlag()
    {
        return $this->get(self::CONTROLFLAG) !== null;
    }

    /**
     * Sets value of 'serverConfig' property
     *
     * @param \SnsServerConfig $value Property value
     *
     * @return null
     */
    public function setServerConfig(\SnsServerConfig $value=null)
    {
        return $this->set(self::SERVERCONFIG, $value);
    }

    /**
     * Returns value of 'serverConfig' property
     *
     * @return \SnsServerConfig
     */
    public function getServerConfig()
    {
        return $this->get(self::SERVERCONFIG);
    }

    /**
     * Returns true if 'serverConfig' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasServerConfig()
    {
        return $this->get(self::SERVERCONFIG) !== null;
    }

    /**
     * Sets value of 'advertiseCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAdvertiseCount($value)
    {
        return $this->set(self::ADVERTISECOUNT, $value);
    }

    /**
     * Returns value of 'advertiseCount' property
     *
     * @return integer
     */
    public function getAdvertiseCount()
    {
        $value = $this->get(self::ADVERTISECOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'advertiseCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAdvertiseCount()
    {
        return $this->get(self::ADVERTISECOUNT) !== null;
    }

    /**
     * Sets value of 'advertiseList' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAdvertiseList($value)
    {
        return $this->set(self::ADVERTISELIST, $value);
    }

    /**
     * Returns value of 'advertiseList' property
     *
     * @return string
     */
    public function getAdvertiseList()
    {
        $value = $this->get(self::ADVERTISELIST);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'advertiseList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAdvertiseList()
    {
        return $this->get(self::ADVERTISELIST) !== null;
    }

    /**
     * Sets value of 'session' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setSession(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::SESSION, $value);
    }

    /**
     * Returns value of 'session' property
     *
     * @return \SKBuiltinString_
     */
    public function getSession()
    {
        return $this->get(self::SESSION);
    }

    /**
     * Returns true if 'session' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSession()
    {
        return $this->get(self::SESSION) !== null;
    }

    /**
     * Sets value of 'recCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRecCount($value)
    {
        return $this->set(self::RECCOUNT, $value);
    }

    /**
     * Returns value of 'recCount' property
     *
     * @return integer
     */
    public function getRecCount()
    {
        $value = $this->get(self::RECCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'recCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRecCount()
    {
        return $this->get(self::RECCOUNT) !== null;
    }

    /**
     * Sets value of 'recList' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRecList($value)
    {
        return $this->set(self::RECLIST, $value);
    }

    /**
     * Returns value of 'recList' property
     *
     * @return string
     */
    public function getRecList()
    {
        $value = $this->get(self::RECLIST);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'recList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRecList()
    {
        return $this->get(self::RECLIST) !== null;
    }
}
}