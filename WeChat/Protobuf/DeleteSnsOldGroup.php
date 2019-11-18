<?php
/**
 * Auto generated from x.proto at 2019-11-12 23:32:18
 */

namespace {
/**
 * DeleteSnsOldGroup message
 */
class DeleteSnsOldGroup extends \ProtobufMessage
{
    /* Field index constants */
    const GROUPCOUNT = 1;
    const GROUPIDS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GROUPCOUNT => array(
            'name' => 'GroupCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GROUPIDS => array(
            'name' => 'GroupIds',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
            'packed' => true
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
        $this->values[self::GROUPCOUNT] = null;
        $this->values[self::GROUPIDS] = array();
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
     * Sets value of 'GroupCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGroupCount($value)
    {
        return $this->set(self::GROUPCOUNT, $value);
    }

    /**
     * Returns value of 'GroupCount' property
     *
     * @return integer
     */
    public function getGroupCount()
    {
        $value = $this->get(self::GROUPCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'GroupCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGroupCount()
    {
        return $this->get(self::GROUPCOUNT) !== null;
    }

    /**
     * Appends value to 'GroupIds' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendGroupIds($value)
    {
        return $this->append(self::GROUPIDS, $value);
    }

    /**
     * Clears 'GroupIds' list
     *
     * @return null
     */
    public function clearGroupIds()
    {
        return $this->clear(self::GROUPIDS);
    }

    /**
     * Returns 'GroupIds' list
     *
     * @return integer[]
     */
    public function getGroupIds()
    {
        return $this->get(self::GROUPIDS);
    }

    /**
     * Returns true if 'GroupIds' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGroupIds()
    {
        return count($this->get(self::GROUPIDS)) !== 0;
    }

    /**
     * Returns 'GroupIds' iterator
     *
     * @return \ArrayIterator
     */
    public function getGroupIdsIterator()
    {
        return new \ArrayIterator($this->get(self::GROUPIDS));
    }

    /**
     * Returns element from 'GroupIds' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getGroupIdsAt($offset)
    {
        return $this->get(self::GROUPIDS, $offset);
    }

    /**
     * Returns count of 'GroupIds' list
     *
     * @return int
     */
    public function getGroupIdsCount()
    {
        return $this->count(self::GROUPIDS);
    }
}
}