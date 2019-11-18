<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * AppIdResource message
 */
class AppIdResource extends \ProtobufMessage
{
    /* Field index constants */
    const FUNCTIONFLAG = 1;
    const WORDINGS = 2;
    const URLS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FUNCTIONFLAG => array(
            'name' => 'Functionflag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WORDINGS => array(
            'name' => 'Wordings',
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
        $this->values[self::FUNCTIONFLAG] = null;
        $this->values[self::WORDINGS] = array();
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
     * Sets value of 'Functionflag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFunctionflag($value)
    {
        return $this->set(self::FUNCTIONFLAG, $value);
    }

    /**
     * Returns value of 'Functionflag' property
     *
     * @return integer
     */
    public function getFunctionflag()
    {
        $value = $this->get(self::FUNCTIONFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Functionflag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFunctionflag()
    {
        return $this->get(self::FUNCTIONFLAG) !== null;
    }

    /**
     * Appends value to 'Wordings' list
     *
     * @param \SKBuiltinString $value Value to append
     *
     * @return null
     */
    public function appendWordings(\SKBuiltinString $value)
    {
        return $this->append(self::WORDINGS, $value);
    }

    /**
     * Clears 'Wordings' list
     *
     * @return null
     */
    public function clearWordings()
    {
        return $this->clear(self::WORDINGS);
    }

    /**
     * Returns 'Wordings' list
     *
     * @return \SKBuiltinString[]
     */
    public function getWordings()
    {
        return $this->get(self::WORDINGS);
    }

    /**
     * Returns true if 'Wordings' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWordings()
    {
        return count($this->get(self::WORDINGS)) !== 0;
    }

    /**
     * Returns 'Wordings' iterator
     *
     * @return \ArrayIterator
     */
    public function getWordingsIterator()
    {
        return new \ArrayIterator($this->get(self::WORDINGS));
    }

    /**
     * Returns element from 'Wordings' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SKBuiltinString
     */
    public function getWordingsAt($offset)
    {
        return $this->get(self::WORDINGS, $offset);
    }

    /**
     * Returns count of 'Wordings' list
     *
     * @return int
     */
    public function getWordingsCount()
    {
        return $this->count(self::WORDINGS);
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