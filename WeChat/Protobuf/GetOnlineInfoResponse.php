<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GetOnlineInfoResponse message
 */
class GetOnlineInfoResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const ONLINECOUNT = 2;
    const ONLINELIST = 3;
    const SUMMARYXML = 4;
    const FLAG = 5;
    const ICONTYPE = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::ONLINECOUNT => array(
            'name' => 'onlineCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ONLINELIST => array(
            'name' => 'onlineList',
            'repeated' => true,
            'type' => '\OnlineInfo'
        ),
        self::SUMMARYXML => array(
            'name' => 'summaryXML',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FLAG => array(
            'name' => 'flag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ICONTYPE => array(
            'name' => 'iConType',
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
        $this->values[self::ONLINECOUNT] = null;
        $this->values[self::ONLINELIST] = array();
        $this->values[self::SUMMARYXML] = null;
        $this->values[self::FLAG] = null;
        $this->values[self::ICONTYPE] = null;
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
     * Sets value of 'onlineCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOnlineCount($value)
    {
        return $this->set(self::ONLINECOUNT, $value);
    }

    /**
     * Returns value of 'onlineCount' property
     *
     * @return integer
     */
    public function getOnlineCount()
    {
        $value = $this->get(self::ONLINECOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'onlineCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOnlineCount()
    {
        return $this->get(self::ONLINECOUNT) !== null;
    }

    /**
     * Appends value to 'onlineList' list
     *
     * @param \OnlineInfo $value Value to append
     *
     * @return null
     */
    public function appendOnlineList(\OnlineInfo $value)
    {
        return $this->append(self::ONLINELIST, $value);
    }

    /**
     * Clears 'onlineList' list
     *
     * @return null
     */
    public function clearOnlineList()
    {
        return $this->clear(self::ONLINELIST);
    }

    /**
     * Returns 'onlineList' list
     *
     * @return \OnlineInfo[]
     */
    public function getOnlineList()
    {
        return $this->get(self::ONLINELIST);
    }

    /**
     * Returns true if 'onlineList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOnlineList()
    {
        return count($this->get(self::ONLINELIST)) !== 0;
    }

    /**
     * Returns 'onlineList' iterator
     *
     * @return \ArrayIterator
     */
    public function getOnlineListIterator()
    {
        return new \ArrayIterator($this->get(self::ONLINELIST));
    }

    /**
     * Returns element from 'onlineList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \OnlineInfo
     */
    public function getOnlineListAt($offset)
    {
        return $this->get(self::ONLINELIST, $offset);
    }

    /**
     * Returns count of 'onlineList' list
     *
     * @return int
     */
    public function getOnlineListCount()
    {
        return $this->count(self::ONLINELIST);
    }

    /**
     * Sets value of 'summaryXML' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSummaryXML($value)
    {
        return $this->set(self::SUMMARYXML, $value);
    }

    /**
     * Returns value of 'summaryXML' property
     *
     * @return string
     */
    public function getSummaryXML()
    {
        $value = $this->get(self::SUMMARYXML);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'summaryXML' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSummaryXML()
    {
        return $this->get(self::SUMMARYXML) !== null;
    }

    /**
     * Sets value of 'flag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFlag($value)
    {
        return $this->set(self::FLAG, $value);
    }

    /**
     * Returns value of 'flag' property
     *
     * @return integer
     */
    public function getFlag()
    {
        $value = $this->get(self::FLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'flag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFlag()
    {
        return $this->get(self::FLAG) !== null;
    }

    /**
     * Sets value of 'iConType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIConType($value)
    {
        return $this->set(self::ICONTYPE, $value);
    }

    /**
     * Returns value of 'iConType' property
     *
     * @return integer
     */
    public function getIConType()
    {
        $value = $this->get(self::ICONTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'iConType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIConType()
    {
        return $this->get(self::ICONTYPE) !== null;
    }
}
}