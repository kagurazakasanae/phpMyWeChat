<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GetOpenIMResourceResponse message
 */
class GetOpenIMResourceResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const APPIDRESOURCE = 2;
    const ACCTTYPERESOURCE = 3;
    const WORDINGIDRESOURCE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::APPIDRESOURCE => array(
            'name' => 'appidResource',
            'required' => true,
            'type' => '\AppIdResource'
        ),
        self::ACCTTYPERESOURCE => array(
            'name' => 'acctTypeResource',
            'required' => true,
            'type' => '\AcctTypeResource'
        ),
        self::WORDINGIDRESOURCE => array(
            'name' => 'wordingIdResource',
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
        $this->values[self::APPIDRESOURCE] = null;
        $this->values[self::ACCTTYPERESOURCE] = null;
        $this->values[self::WORDINGIDRESOURCE] = null;
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
     * Sets value of 'appidResource' property
     *
     * @param \AppIdResource $value Property value
     *
     * @return null
     */
    public function setAppidResource(\AppIdResource $value=null)
    {
        return $this->set(self::APPIDRESOURCE, $value);
    }

    /**
     * Returns value of 'appidResource' property
     *
     * @return \AppIdResource
     */
    public function getAppidResource()
    {
        return $this->get(self::APPIDRESOURCE);
    }

    /**
     * Returns true if 'appidResource' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAppidResource()
    {
        return $this->get(self::APPIDRESOURCE) !== null;
    }

    /**
     * Sets value of 'acctTypeResource' property
     *
     * @param \AcctTypeResource $value Property value
     *
     * @return null
     */
    public function setAcctTypeResource(\AcctTypeResource $value=null)
    {
        return $this->set(self::ACCTTYPERESOURCE, $value);
    }

    /**
     * Returns value of 'acctTypeResource' property
     *
     * @return \AcctTypeResource
     */
    public function getAcctTypeResource()
    {
        return $this->get(self::ACCTTYPERESOURCE);
    }

    /**
     * Returns true if 'acctTypeResource' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAcctTypeResource()
    {
        return $this->get(self::ACCTTYPERESOURCE) !== null;
    }

    /**
     * Sets value of 'wordingIdResource' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWordingIdResource($value)
    {
        return $this->set(self::WORDINGIDRESOURCE, $value);
    }

    /**
     * Returns value of 'wordingIdResource' property
     *
     * @return integer
     */
    public function getWordingIdResource()
    {
        $value = $this->get(self::WORDINGIDRESOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'wordingIdResource' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWordingIdResource()
    {
        return $this->get(self::WORDINGIDRESOURCE) !== null;
    }
}
}