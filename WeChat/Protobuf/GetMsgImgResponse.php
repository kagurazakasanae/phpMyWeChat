<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GetMsgImgResponse message
 */
class GetMsgImgResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const MSGID = 2;
    const FROM = 3;
    const TO = 4;
    const TOTALLEN = 5;
    const STARTPOS = 6;
    const DATALEN = 7;
    const DATA = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::MSGID => array(
            'name' => 'msgId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FROM => array(
            'name' => 'from',
            'required' => true,
            'type' => '\SKBuiltinString'
        ),
        self::TO => array(
            'name' => 'to',
            'required' => true,
            'type' => '\SKBuiltinString'
        ),
        self::TOTALLEN => array(
            'name' => 'totalLen',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STARTPOS => array(
            'name' => 'startPos',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DATALEN => array(
            'name' => 'dataLen',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DATA => array(
            'name' => 'data',
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
        $this->values[self::BASERESPONSE] = null;
        $this->values[self::MSGID] = null;
        $this->values[self::FROM] = null;
        $this->values[self::TO] = null;
        $this->values[self::TOTALLEN] = null;
        $this->values[self::STARTPOS] = null;
        $this->values[self::DATALEN] = null;
        $this->values[self::DATA] = null;
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
     * Sets value of 'msgId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMsgId($value)
    {
        return $this->set(self::MSGID, $value);
    }

    /**
     * Returns value of 'msgId' property
     *
     * @return integer
     */
    public function getMsgId()
    {
        $value = $this->get(self::MSGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'msgId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgId()
    {
        return $this->get(self::MSGID) !== null;
    }

    /**
     * Sets value of 'from' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setFrom(\SKBuiltinString $value=null)
    {
        return $this->set(self::FROM, $value);
    }

    /**
     * Returns value of 'from' property
     *
     * @return \SKBuiltinString
     */
    public function getFrom()
    {
        return $this->get(self::FROM);
    }

    /**
     * Returns true if 'from' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFrom()
    {
        return $this->get(self::FROM) !== null;
    }

    /**
     * Sets value of 'to' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setTo(\SKBuiltinString $value=null)
    {
        return $this->set(self::TO, $value);
    }

    /**
     * Returns value of 'to' property
     *
     * @return \SKBuiltinString
     */
    public function getTo()
    {
        return $this->get(self::TO);
    }

    /**
     * Returns true if 'to' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTo()
    {
        return $this->get(self::TO) !== null;
    }

    /**
     * Sets value of 'totalLen' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTotalLen($value)
    {
        return $this->set(self::TOTALLEN, $value);
    }

    /**
     * Returns value of 'totalLen' property
     *
     * @return integer
     */
    public function getTotalLen()
    {
        $value = $this->get(self::TOTALLEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'totalLen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTotalLen()
    {
        return $this->get(self::TOTALLEN) !== null;
    }

    /**
     * Sets value of 'startPos' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStartPos($value)
    {
        return $this->set(self::STARTPOS, $value);
    }

    /**
     * Returns value of 'startPos' property
     *
     * @return integer
     */
    public function getStartPos()
    {
        $value = $this->get(self::STARTPOS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'startPos' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStartPos()
    {
        return $this->get(self::STARTPOS) !== null;
    }

    /**
     * Sets value of 'dataLen' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDataLen($value)
    {
        return $this->set(self::DATALEN, $value);
    }

    /**
     * Returns value of 'dataLen' property
     *
     * @return integer
     */
    public function getDataLen()
    {
        $value = $this->get(self::DATALEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'dataLen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDataLen()
    {
        return $this->get(self::DATALEN) !== null;
    }

    /**
     * Sets value of 'data' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setData(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::DATA, $value);
    }

    /**
     * Returns value of 'data' property
     *
     * @return \SKBuiltinString_
     */
    public function getData()
    {
        return $this->get(self::DATA);
    }

    /**
     * Returns true if 'data' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasData()
    {
        return $this->get(self::DATA) !== null;
    }
}
}