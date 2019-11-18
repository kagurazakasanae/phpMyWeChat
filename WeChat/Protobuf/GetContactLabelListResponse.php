<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GetContactLabelListResponse message
 */
class GetContactLabelListResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const LABELCOUNT = 2;
    const LABELPAIRLIST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::LABELCOUNT => array(
            'name' => 'labelCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LABELPAIRLIST => array(
            'name' => 'labelPairList',
            'repeated' => true,
            'type' => '\LabelPair'
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
        $this->values[self::LABELCOUNT] = null;
        $this->values[self::LABELPAIRLIST] = array();
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
     * Sets value of 'labelCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLabelCount($value)
    {
        return $this->set(self::LABELCOUNT, $value);
    }

    /**
     * Returns value of 'labelCount' property
     *
     * @return integer
     */
    public function getLabelCount()
    {
        $value = $this->get(self::LABELCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'labelCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLabelCount()
    {
        return $this->get(self::LABELCOUNT) !== null;
    }

    /**
     * Appends value to 'labelPairList' list
     *
     * @param \LabelPair $value Value to append
     *
     * @return null
     */
    public function appendLabelPairList(\LabelPair $value)
    {
        return $this->append(self::LABELPAIRLIST, $value);
    }

    /**
     * Clears 'labelPairList' list
     *
     * @return null
     */
    public function clearLabelPairList()
    {
        return $this->clear(self::LABELPAIRLIST);
    }

    /**
     * Returns 'labelPairList' list
     *
     * @return \LabelPair[]
     */
    public function getLabelPairList()
    {
        return $this->get(self::LABELPAIRLIST);
    }

    /**
     * Returns true if 'labelPairList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLabelPairList()
    {
        return count($this->get(self::LABELPAIRLIST)) !== 0;
    }

    /**
     * Returns 'labelPairList' iterator
     *
     * @return \ArrayIterator
     */
    public function getLabelPairListIterator()
    {
        return new \ArrayIterator($this->get(self::LABELPAIRLIST));
    }

    /**
     * Returns element from 'labelPairList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \LabelPair
     */
    public function getLabelPairListAt($offset)
    {
        return $this->get(self::LABELPAIRLIST, $offset);
    }

    /**
     * Returns count of 'labelPairList' list
     *
     * @return int
     */
    public function getLabelPairListCount()
    {
        return $this->count(self::LABELPAIRLIST);
    }
}
}