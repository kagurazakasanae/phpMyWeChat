<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * EmojiUploadInfo message
 */
class EmojiUploadInfo extends \ProtobufMessage
{
    /* Field index constants */
    const MD5 = 1;
    const STARTPOS = 2;
    const TOTALLEN = 3;
    const EMOJIBUFFER = 4;
    const TYPE = 5;
    const TO = 6;
    const EXTERNXML = 7;
    const REPORT = 8;
    const CLIENTMSGID = 9;
    const MSGSOURCE = 10;
    const T11 = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MD5 => array(
            'name' => 'MD5',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        self::EMOJIBUFFER => array(
            'name' => 'emojiBuffer',
            'required' => true,
            'type' => '\SKBuiltinString_'
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TO => array(
            'name' => 'to',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EXTERNXML => array(
            'name' => 'externXml',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REPORT => array(
            'name' => 'report',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CLIENTMSGID => array(
            'name' => 'clientMsgId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MSGSOURCE => array(
            'name' => 'msgSource',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::T11 => array(
            'name' => 't11',
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
        $this->values[self::MD5] = null;
        $this->values[self::STARTPOS] = null;
        $this->values[self::TOTALLEN] = null;
        $this->values[self::EMOJIBUFFER] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::TO] = null;
        $this->values[self::EXTERNXML] = null;
        $this->values[self::REPORT] = null;
        $this->values[self::CLIENTMSGID] = null;
        $this->values[self::MSGSOURCE] = null;
        $this->values[self::T11] = null;
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
     * Sets value of 'MD5' property
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
     * Returns value of 'MD5' property
     *
     * @return string
     */
    public function getMD5()
    {
        $value = $this->get(self::MD5);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'MD5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMD5()
    {
        return $this->get(self::MD5) !== null;
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
     * Sets value of 'emojiBuffer' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setEmojiBuffer(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::EMOJIBUFFER, $value);
    }

    /**
     * Returns value of 'emojiBuffer' property
     *
     * @return \SKBuiltinString_
     */
    public function getEmojiBuffer()
    {
        return $this->get(self::EMOJIBUFFER);
    }

    /**
     * Returns true if 'emojiBuffer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEmojiBuffer()
    {
        return $this->get(self::EMOJIBUFFER) !== null;
    }

    /**
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }

    /**
     * Sets value of 'to' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTo($value)
    {
        return $this->set(self::TO, $value);
    }

    /**
     * Returns value of 'to' property
     *
     * @return string
     */
    public function getTo()
    {
        $value = $this->get(self::TO);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'externXml' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setExternXml($value)
    {
        return $this->set(self::EXTERNXML, $value);
    }

    /**
     * Returns value of 'externXml' property
     *
     * @return string
     */
    public function getExternXml()
    {
        $value = $this->get(self::EXTERNXML);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'externXml' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExternXml()
    {
        return $this->get(self::EXTERNXML) !== null;
    }

    /**
     * Sets value of 'report' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setReport($value)
    {
        return $this->set(self::REPORT, $value);
    }

    /**
     * Returns value of 'report' property
     *
     * @return string
     */
    public function getReport()
    {
        $value = $this->get(self::REPORT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'report' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReport()
    {
        return $this->get(self::REPORT) !== null;
    }

    /**
     * Sets value of 'clientMsgId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setClientMsgId($value)
    {
        return $this->set(self::CLIENTMSGID, $value);
    }

    /**
     * Returns value of 'clientMsgId' property
     *
     * @return string
     */
    public function getClientMsgId()
    {
        $value = $this->get(self::CLIENTMSGID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'clientMsgId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientMsgId()
    {
        return $this->get(self::CLIENTMSGID) !== null;
    }

    /**
     * Sets value of 'msgSource' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMsgSource($value)
    {
        return $this->set(self::MSGSOURCE, $value);
    }

    /**
     * Returns value of 'msgSource' property
     *
     * @return string
     */
    public function getMsgSource()
    {
        $value = $this->get(self::MSGSOURCE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'msgSource' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgSource()
    {
        return $this->get(self::MSGSOURCE) !== null;
    }

    /**
     * Sets value of 't11' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT11($value)
    {
        return $this->set(self::T11, $value);
    }

    /**
     * Returns value of 't11' property
     *
     * @return integer
     */
    public function getT11()
    {
        $value = $this->get(self::T11);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't11' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT11()
    {
        return $this->get(self::T11) !== null;
    }
}
}