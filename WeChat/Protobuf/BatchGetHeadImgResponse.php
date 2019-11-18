<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * BatchGetHeadImgResponse message
 */
class BatchGetHeadImgResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const COUNT = 2;
    const IMGPAIRLIST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::COUNT => array(
            'name' => 'count',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::IMGPAIRLIST => array(
            'name' => 'imgPairList',
            'repeated' => true,
            'type' => '\ImgPair'
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
        $this->values[self::COUNT] = null;
        $this->values[self::IMGPAIRLIST] = array();
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
     * Sets value of 'count' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCount($value)
    {
        return $this->set(self::COUNT, $value);
    }

    /**
     * Returns value of 'count' property
     *
     * @return integer
     */
    public function getCount()
    {
        $value = $this->get(self::COUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'count' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCount()
    {
        return $this->get(self::COUNT) !== null;
    }

    /**
     * Appends value to 'imgPairList' list
     *
     * @param \ImgPair $value Value to append
     *
     * @return null
     */
    public function appendImgPairList(\ImgPair $value)
    {
        return $this->append(self::IMGPAIRLIST, $value);
    }

    /**
     * Clears 'imgPairList' list
     *
     * @return null
     */
    public function clearImgPairList()
    {
        return $this->clear(self::IMGPAIRLIST);
    }

    /**
     * Returns 'imgPairList' list
     *
     * @return \ImgPair[]
     */
    public function getImgPairList()
    {
        return $this->get(self::IMGPAIRLIST);
    }

    /**
     * Returns true if 'imgPairList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasImgPairList()
    {
        return count($this->get(self::IMGPAIRLIST)) !== 0;
    }

    /**
     * Returns 'imgPairList' iterator
     *
     * @return \ArrayIterator
     */
    public function getImgPairListIterator()
    {
        return new \ArrayIterator($this->get(self::IMGPAIRLIST));
    }

    /**
     * Returns element from 'imgPairList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \ImgPair
     */
    public function getImgPairListAt($offset)
    {
        return $this->get(self::IMGPAIRLIST, $offset);
    }

    /**
     * Returns count of 'imgPairList' list
     *
     * @return int
     */
    public function getImgPairListCount()
    {
        return $this->count(self::IMGPAIRLIST);
    }
}
}