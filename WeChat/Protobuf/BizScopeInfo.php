<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * BizScopeInfo message
 */
class BizScopeInfo extends \ProtobufMessage
{
    /* Field index constants */
    const SCOPE = 1;
    const SCOPESTATUS = 2;
    const SCOPEDESC = 3;
    const APICOUNT = 4;
    const APILIST = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SCOPE => array(
            'name' => 'scope',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SCOPESTATUS => array(
            'default' => 0,
            'name' => 'scopeStatus',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SCOPEDESC => array(
            'name' => 'scopeDesc',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::APICOUNT => array(
            'default' => 0,
            'name' => 'apiCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::APILIST => array(
            'name' => 'apiList',
            'repeated' => true,
            'type' => '\BizApiInfo'
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
        $this->values[self::SCOPE] = null;
        $this->values[self::SCOPESTATUS] = self::$fields[self::SCOPESTATUS]['default'];
        $this->values[self::SCOPEDESC] = null;
        $this->values[self::APICOUNT] = self::$fields[self::APICOUNT]['default'];
        $this->values[self::APILIST] = array();
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
     * Sets value of 'scope' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setScope($value)
    {
        return $this->set(self::SCOPE, $value);
    }

    /**
     * Returns value of 'scope' property
     *
     * @return string
     */
    public function getScope()
    {
        $value = $this->get(self::SCOPE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'scope' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasScope()
    {
        return $this->get(self::SCOPE) !== null;
    }

    /**
     * Sets value of 'scopeStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setScopeStatus($value)
    {
        return $this->set(self::SCOPESTATUS, $value);
    }

    /**
     * Returns value of 'scopeStatus' property
     *
     * @return integer
     */
    public function getScopeStatus()
    {
        $value = $this->get(self::SCOPESTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'scopeStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasScopeStatus()
    {
        return $this->get(self::SCOPESTATUS) !== null;
    }

    /**
     * Sets value of 'scopeDesc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setScopeDesc($value)
    {
        return $this->set(self::SCOPEDESC, $value);
    }

    /**
     * Returns value of 'scopeDesc' property
     *
     * @return string
     */
    public function getScopeDesc()
    {
        $value = $this->get(self::SCOPEDESC);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'scopeDesc' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasScopeDesc()
    {
        return $this->get(self::SCOPEDESC) !== null;
    }

    /**
     * Sets value of 'apiCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setApiCount($value)
    {
        return $this->set(self::APICOUNT, $value);
    }

    /**
     * Returns value of 'apiCount' property
     *
     * @return integer
     */
    public function getApiCount()
    {
        $value = $this->get(self::APICOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'apiCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasApiCount()
    {
        return $this->get(self::APICOUNT) !== null;
    }

    /**
     * Appends value to 'apiList' list
     *
     * @param \BizApiInfo $value Value to append
     *
     * @return null
     */
    public function appendApiList(\BizApiInfo $value)
    {
        return $this->append(self::APILIST, $value);
    }

    /**
     * Clears 'apiList' list
     *
     * @return null
     */
    public function clearApiList()
    {
        return $this->clear(self::APILIST);
    }

    /**
     * Returns 'apiList' list
     *
     * @return \BizApiInfo[]
     */
    public function getApiList()
    {
        return $this->get(self::APILIST);
    }

    /**
     * Returns true if 'apiList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasApiList()
    {
        return count($this->get(self::APILIST)) !== 0;
    }

    /**
     * Returns 'apiList' iterator
     *
     * @return \ArrayIterator
     */
    public function getApiListIterator()
    {
        return new \ArrayIterator($this->get(self::APILIST));
    }

    /**
     * Returns element from 'apiList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \BizApiInfo
     */
    public function getApiListAt($offset)
    {
        return $this->get(self::APILIST, $offset);
    }

    /**
     * Returns count of 'apiList' list
     *
     * @return int
     */
    public function getApiListCount()
    {
        return $this->count(self::APILIST);
    }
}
}