<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsUserPageResponse message
 */
class SnsUserPageResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const FRISTPAGEMD5 = 2;
    const OBJECTCOUNT = 3;
    const OBJECTLIST = 4;
    const OBJECTTOTALCOUNT = 5;
    const SNSUSERINFO = 6;
    const NEWREQUESTTIME = 7;
    const OBJECTCOUNTFORSAMEMD5 = 8;
    const SERVERCONFIG = 9;
    const LIMITEDID = 10;

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
        self::OBJECTTOTALCOUNT => array(
            'name' => 'objectTotalCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SNSUSERINFO => array(
            'name' => 'snsUserInfo',
            'required' => true,
            'type' => '\SnsUserInfo'
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
        self::SERVERCONFIG => array(
            'name' => 'serverConfig',
            'required' => true,
            'type' => '\SnsServerConfig'
        ),
        self::LIMITEDID => array(
            'name' => 'limitedId',
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
        $this->values[self::FRISTPAGEMD5] = null;
        $this->values[self::OBJECTCOUNT] = null;
        $this->values[self::OBJECTLIST] = array();
        $this->values[self::OBJECTTOTALCOUNT] = null;
        $this->values[self::SNSUSERINFO] = null;
        $this->values[self::NEWREQUESTTIME] = null;
        $this->values[self::OBJECTCOUNTFORSAMEMD5] = null;
        $this->values[self::SERVERCONFIG] = null;
        $this->values[self::LIMITEDID] = null;
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
     * Sets value of 'objectTotalCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setObjectTotalCount($value)
    {
        return $this->set(self::OBJECTTOTALCOUNT, $value);
    }

    /**
     * Returns value of 'objectTotalCount' property
     *
     * @return integer
     */
    public function getObjectTotalCount()
    {
        $value = $this->get(self::OBJECTTOTALCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'objectTotalCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasObjectTotalCount()
    {
        return $this->get(self::OBJECTTOTALCOUNT) !== null;
    }

    /**
     * Sets value of 'snsUserInfo' property
     *
     * @param \SnsUserInfo $value Property value
     *
     * @return null
     */
    public function setSnsUserInfo(\SnsUserInfo $value=null)
    {
        return $this->set(self::SNSUSERINFO, $value);
    }

    /**
     * Returns value of 'snsUserInfo' property
     *
     * @return \SnsUserInfo
     */
    public function getSnsUserInfo()
    {
        return $this->get(self::SNSUSERINFO);
    }

    /**
     * Returns true if 'snsUserInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSnsUserInfo()
    {
        return $this->get(self::SNSUSERINFO) !== null;
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
     * Sets value of 'limitedId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLimitedId($value)
    {
        return $this->set(self::LIMITEDID, $value);
    }

    /**
     * Returns value of 'limitedId' property
     *
     * @return integer
     */
    public function getLimitedId()
    {
        $value = $this->get(self::LIMITEDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'limitedId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLimitedId()
    {
        return $this->get(self::LIMITEDID) !== null;
    }
}
}