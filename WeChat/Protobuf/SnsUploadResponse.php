<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsUploadResponse message
 */
class SnsUploadResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const STARTPOS = 2;
    const TOTALLEN = 3;
    const CLIENTID = 4;
    const BUFFERURL = 5;
    const THUMBURLCOUNT = 6;
    const THUMBURLS = 7;
    const ID = 8;
    const TYPE = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
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
            'name' => 'clientId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BUFFERURL => array(
            'name' => 'bufferUrl',
            'required' => true,
            'type' => '\SnsBufferUrl'
        ),
        self::THUMBURLCOUNT => array(
            'name' => 'thumbUrlCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::THUMBURLS => array(
            'name' => 'thumbUrls',
            'repeated' => true,
            'type' => '\SnsBufferUrl'
        ),
        self::ID => array(
            'name' => 'id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'name' => 'type',
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
        $this->values[self::STARTPOS] = null;
        $this->values[self::TOTALLEN] = null;
        $this->values[self::CLIENTID] = null;
        $this->values[self::BUFFERURL] = null;
        $this->values[self::THUMBURLCOUNT] = null;
        $this->values[self::THUMBURLS] = array();
        $this->values[self::ID] = null;
        $this->values[self::TYPE] = null;
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
     * Sets value of 'clientId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setClientId($value)
    {
        return $this->set(self::CLIENTID, $value);
    }

    /**
     * Returns value of 'clientId' property
     *
     * @return string
     */
    public function getClientId()
    {
        $value = $this->get(self::CLIENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'clientId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientId()
    {
        return $this->get(self::CLIENTID) !== null;
    }

    /**
     * Sets value of 'bufferUrl' property
     *
     * @param \SnsBufferUrl $value Property value
     *
     * @return null
     */
    public function setBufferUrl(\SnsBufferUrl $value=null)
    {
        return $this->set(self::BUFFERURL, $value);
    }

    /**
     * Returns value of 'bufferUrl' property
     *
     * @return \SnsBufferUrl
     */
    public function getBufferUrl()
    {
        return $this->get(self::BUFFERURL);
    }

    /**
     * Returns true if 'bufferUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBufferUrl()
    {
        return $this->get(self::BUFFERURL) !== null;
    }

    /**
     * Sets value of 'thumbUrlCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setThumbUrlCount($value)
    {
        return $this->set(self::THUMBURLCOUNT, $value);
    }

    /**
     * Returns value of 'thumbUrlCount' property
     *
     * @return integer
     */
    public function getThumbUrlCount()
    {
        $value = $this->get(self::THUMBURLCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'thumbUrlCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasThumbUrlCount()
    {
        return $this->get(self::THUMBURLCOUNT) !== null;
    }

    /**
     * Appends value to 'thumbUrls' list
     *
     * @param \SnsBufferUrl $value Value to append
     *
     * @return null
     */
    public function appendThumbUrls(\SnsBufferUrl $value)
    {
        return $this->append(self::THUMBURLS, $value);
    }

    /**
     * Clears 'thumbUrls' list
     *
     * @return null
     */
    public function clearThumbUrls()
    {
        return $this->clear(self::THUMBURLS);
    }

    /**
     * Returns 'thumbUrls' list
     *
     * @return \SnsBufferUrl[]
     */
    public function getThumbUrls()
    {
        return $this->get(self::THUMBURLS);
    }

    /**
     * Returns true if 'thumbUrls' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasThumbUrls()
    {
        return count($this->get(self::THUMBURLS)) !== 0;
    }

    /**
     * Returns 'thumbUrls' iterator
     *
     * @return \ArrayIterator
     */
    public function getThumbUrlsIterator()
    {
        return new \ArrayIterator($this->get(self::THUMBURLS));
    }

    /**
     * Returns element from 'thumbUrls' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SnsBufferUrl
     */
    public function getThumbUrlsAt($offset)
    {
        return $this->get(self::THUMBURLS, $offset);
    }

    /**
     * Returns count of 'thumbUrls' list
     *
     * @return int
     */
    public function getThumbUrlsCount()
    {
        return $this->count(self::THUMBURLS);
    }

    /**
     * Sets value of 'id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'id' property
     *
     * @return integer
     */
    public function getId()
    {
        $value = $this->get(self::ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasId()
    {
        return $this->get(self::ID) !== null;
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
}
}