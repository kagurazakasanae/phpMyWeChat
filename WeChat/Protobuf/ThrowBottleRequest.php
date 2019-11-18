<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * ThrowBottleRequest message
 */
class ThrowBottleRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const MSGTYPE = 2;
    const BOTTLETYPE = 3;
    const CONTENT = 4;
    const STARTPOS = 5;
    const TOTALLEN = 6;
    const CLIENTID = 7;
    const VOICELENGTH = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::MSGTYPE => array(
            'name' => 'msgtype',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BOTTLETYPE => array(
            'name' => 'bottletype',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONTENT => array(
            'name' => 'content',
            'required' => true,
            'type' => '\SKBuiltinString_'
        ),
        self::STARTPOS => array(
            'name' => 'startPos',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOTALLEN => array(
            'name' => 'totalLen',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CLIENTID => array(
            'name' => 'clientID',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VOICELENGTH => array(
            'name' => 'voiceLength',
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
        $this->values[self::BASEREQUEST] = null;
        $this->values[self::MSGTYPE] = null;
        $this->values[self::BOTTLETYPE] = null;
        $this->values[self::CONTENT] = null;
        $this->values[self::STARTPOS] = null;
        $this->values[self::TOTALLEN] = null;
        $this->values[self::CLIENTID] = null;
        $this->values[self::VOICELENGTH] = null;
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
     * Sets value of 'msgtype' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMsgtype($value)
    {
        return $this->set(self::MSGTYPE, $value);
    }

    /**
     * Returns value of 'msgtype' property
     *
     * @return integer
     */
    public function getMsgtype()
    {
        $value = $this->get(self::MSGTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'msgtype' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgtype()
    {
        return $this->get(self::MSGTYPE) !== null;
    }

    /**
     * Sets value of 'bottletype' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBottletype($value)
    {
        return $this->set(self::BOTTLETYPE, $value);
    }

    /**
     * Returns value of 'bottletype' property
     *
     * @return integer
     */
    public function getBottletype()
    {
        $value = $this->get(self::BOTTLETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bottletype' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBottletype()
    {
        return $this->get(self::BOTTLETYPE) !== null;
    }

    /**
     * Sets value of 'content' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setContent(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'content' property
     *
     * @return \SKBuiltinString_
     */
    public function getContent()
    {
        return $this->get(self::CONTENT);
    }

    /**
     * Returns true if 'content' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContent()
    {
        return $this->get(self::CONTENT) !== null;
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
     * Sets value of 'clientID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setClientID($value)
    {
        return $this->set(self::CLIENTID, $value);
    }

    /**
     * Returns value of 'clientID' property
     *
     * @return string
     */
    public function getClientID()
    {
        $value = $this->get(self::CLIENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'clientID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientID()
    {
        return $this->get(self::CLIENTID) !== null;
    }

    /**
     * Sets value of 'voiceLength' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVoiceLength($value)
    {
        return $this->set(self::VOICELENGTH, $value);
    }

    /**
     * Returns value of 'voiceLength' property
     *
     * @return integer
     */
    public function getVoiceLength()
    {
        $value = $this->get(self::VOICELENGTH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'voiceLength' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVoiceLength()
    {
        return $this->get(self::VOICELENGTH) !== null;
    }
}
}