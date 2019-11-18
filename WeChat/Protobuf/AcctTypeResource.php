<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * AcctTypeResource message
 */
class AcctTypeResource extends \ProtobufMessage
{
    /* Field index constants */
    const ACCTTYPEID = 1;
    const AWORDINGS = 2;
    const URLS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ACCTTYPEID => array(
            'name' => 'Accttypeid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::AWORDINGS => array(
            'name' => 'aWordings',
            'repeated' => true,
            'type' => '\SKBuiltinString'
        ),
        self::URLS => array(
            'name' => 'Urls',
            'repeated' => true,
            'type' => '\SKBuiltinString'
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
        $this->values[self::ACCTTYPEID] = null;
        $this->values[self::AWORDINGS] = array();
        $this->values[self::URLS] = array();
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
     * Sets value of 'Accttypeid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAccttypeid($value)
    {
        return $this->set(self::ACCTTYPEID, $value);
    }

    /**
     * Returns value of 'Accttypeid' property
     *
     * @return string
     */
    public function getAccttypeid()
    {
        $value = $this->get(self::ACCTTYPEID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Accttypeid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAccttypeid()
    {
        return $this->get(self::ACCTTYPEID) !== null;
    }

    /**
     * Appends value to 'aWordings' list
     *
     * @param \SKBuiltinString $value Value to append
     *
     * @return null
     */
    public function appendAWordings(\SKBuiltinString $value)
    {
        return $this->append(self::AWORDINGS, $value);
    }

    /**
     * Clears 'aWordings' list
     *
     * @return null
     */
    public function clearAWordings()
    {
        return $this->clear(self::AWORDINGS);
    }

    /**
     * Returns 'aWordings' list
     *
     * @return \SKBuiltinString[]
     */
    public function getAWordings()
    {
        return $this->get(self::AWORDINGS);
    }

    /**
     * Returns true if 'aWordings' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAWordings()
    {
        return count($this->get(self::AWORDINGS)) !== 0;
    }

    /**
     * Returns 'aWordings' iterator
     *
     * @return \ArrayIterator
     */
    public function getAWordingsIterator()
    {
        return new \ArrayIterator($this->get(self::AWORDINGS));
    }

    /**
     * Returns element from 'aWordings' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SKBuiltinString
     */
    public function getAWordingsAt($offset)
    {
        return $this->get(self::AWORDINGS, $offset);
    }

    /**
     * Returns count of 'aWordings' list
     *
     * @return int
     */
    public function getAWordingsCount()
    {
        return $this->count(self::AWORDINGS);
    }

    /**
     * Appends value to 'Urls' list
     *
     * @param \SKBuiltinString $value Value to append
     *
     * @return null
     */
    public function appendUrls(\SKBuiltinString $value)
    {
        return $this->append(self::URLS, $value);
    }

    /**
     * Clears 'Urls' list
     *
     * @return null
     */
    public function clearUrls()
    {
        return $this->clear(self::URLS);
    }

    /**
     * Returns 'Urls' list
     *
     * @return \SKBuiltinString[]
     */
    public function getUrls()
    {
        return $this->get(self::URLS);
    }

    /**
     * Returns true if 'Urls' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUrls()
    {
        return count($this->get(self::URLS)) !== 0;
    }

    /**
     * Returns 'Urls' iterator
     *
     * @return \ArrayIterator
     */
    public function getUrlsIterator()
    {
        return new \ArrayIterator($this->get(self::URLS));
    }

    /**
     * Returns element from 'Urls' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SKBuiltinString
     */
    public function getUrlsAt($offset)
    {
        return $this->get(self::URLS, $offset);
    }

    /**
     * Returns count of 'Urls' list
     *
     * @return int
     */
    public function getUrlsCount()
    {
        return $this->count(self::URLS);
    }
}
}