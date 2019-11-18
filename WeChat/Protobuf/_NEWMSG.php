<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * _NEWMSG message
 */
class _NEWMSG extends \ProtobufMessage
{
    /* Field index constants */
    const SERVERID = 1;
    const WXID = 2;
    const NICK = 3;
    const T4 = 4;
    const T5 = 5;
    const T6 = 6;
    const T7 = 7;
    const T8 = 8;
    const T9 = 9;
    const T13 = 13;
    const T14 = 14;
    const T15 = 15;
    const T16 = 16;
    const T17 = 17;
    const T19 = 19;
    const T20 = 20;
    const T21 = 21;
    const T22 = 22;
    const T23 = 23;
    const T25 = 25;
    const T26 = 26;
    const ALIAS = 27;
    const T29 = 29;
    const T30 = 30;
    const T31 = 31;
    const T33 = 33;
    const T34 = 34;
    const T36 = 36;
    const T38 = 38;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SERVERID => array(
            'name' => 'serverid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WXID => array(
            'name' => 'wxid',
            'required' => true,
            'type' => '\SKBuiltinString'
        ),
        self::NICK => array(
            'name' => 'nick',
            'required' => true,
            'type' => '\SKBuiltinString'
        ),
        self::T4 => array(
            'name' => 't4',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::T5 => array(
            'name' => 't5',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::T6 => array(
            'name' => 't6',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::T7 => array(
            'name' => 't7',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::T8 => array(
            'name' => 't8',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::T9 => array(
            'name' => 't9',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::T13 => array(
            'name' => 't13',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::T14 => array(
            'name' => 't14',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::T15 => array(
            'name' => 't15',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::T16 => array(
            'name' => 't16',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::T17 => array(
            'name' => 't17',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::T19 => array(
            'name' => 't19',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::T20 => array(
            'name' => 't20',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::T21 => array(
            'name' => 't21',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::T22 => array(
            'name' => 't22',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::T23 => array(
            'name' => 't23',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::T25 => array(
            'name' => 't25',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::T26 => array(
            'name' => 't26',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ALIAS => array(
            'name' => 'Alias',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::T29 => array(
            'name' => 't29',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::T30 => array(
            'name' => 't30',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::T31 => array(
            'name' => 't31',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::T33 => array(
            'name' => 't33',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::T34 => array(
            'name' => 't34',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::T36 => array(
            'name' => 't36',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::T38 => array(
            'name' => 't38',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::SERVERID] = null;
        $this->values[self::WXID] = null;
        $this->values[self::NICK] = null;
        $this->values[self::T4] = null;
        $this->values[self::T5] = null;
        $this->values[self::T6] = null;
        $this->values[self::T7] = null;
        $this->values[self::T8] = null;
        $this->values[self::T9] = null;
        $this->values[self::T13] = null;
        $this->values[self::T14] = null;
        $this->values[self::T15] = null;
        $this->values[self::T16] = null;
        $this->values[self::T17] = null;
        $this->values[self::T19] = null;
        $this->values[self::T20] = null;
        $this->values[self::T21] = null;
        $this->values[self::T22] = null;
        $this->values[self::T23] = null;
        $this->values[self::T25] = null;
        $this->values[self::T26] = null;
        $this->values[self::ALIAS] = null;
        $this->values[self::T29] = null;
        $this->values[self::T30] = null;
        $this->values[self::T31] = null;
        $this->values[self::T33] = null;
        $this->values[self::T34] = null;
        $this->values[self::T36] = null;
        $this->values[self::T38] = null;
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
     * Sets value of 'serverid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setServerid($value)
    {
        return $this->set(self::SERVERID, $value);
    }

    /**
     * Returns value of 'serverid' property
     *
     * @return integer
     */
    public function getServerid()
    {
        $value = $this->get(self::SERVERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'serverid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasServerid()
    {
        return $this->get(self::SERVERID) !== null;
    }

    /**
     * Sets value of 'wxid' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setWxid(\SKBuiltinString $value=null)
    {
        return $this->set(self::WXID, $value);
    }

    /**
     * Returns value of 'wxid' property
     *
     * @return \SKBuiltinString
     */
    public function getWxid()
    {
        return $this->get(self::WXID);
    }

    /**
     * Returns true if 'wxid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWxid()
    {
        return $this->get(self::WXID) !== null;
    }

    /**
     * Sets value of 'nick' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setNick(\SKBuiltinString $value=null)
    {
        return $this->set(self::NICK, $value);
    }

    /**
     * Returns value of 'nick' property
     *
     * @return \SKBuiltinString
     */
    public function getNick()
    {
        return $this->get(self::NICK);
    }

    /**
     * Returns true if 'nick' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNick()
    {
        return $this->get(self::NICK) !== null;
    }

    /**
     * Sets value of 't4' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT4($value)
    {
        return $this->set(self::T4, $value);
    }

    /**
     * Returns value of 't4' property
     *
     * @return integer
     */
    public function getT4()
    {
        $value = $this->get(self::T4);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't4' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT4()
    {
        return $this->get(self::T4) !== null;
    }

    /**
     * Sets value of 't5' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setT5($value)
    {
        return $this->set(self::T5, $value);
    }

    /**
     * Returns value of 't5' property
     *
     * @return string
     */
    public function getT5()
    {
        $value = $this->get(self::T5);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 't5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT5()
    {
        return $this->get(self::T5) !== null;
    }

    /**
     * Sets value of 't6' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setT6($value)
    {
        return $this->set(self::T6, $value);
    }

    /**
     * Returns value of 't6' property
     *
     * @return string
     */
    public function getT6()
    {
        $value = $this->get(self::T6);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 't6' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT6()
    {
        return $this->get(self::T6) !== null;
    }

    /**
     * Sets value of 't7' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT7($value)
    {
        return $this->set(self::T7, $value);
    }

    /**
     * Returns value of 't7' property
     *
     * @return integer
     */
    public function getT7()
    {
        $value = $this->get(self::T7);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't7' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT7()
    {
        return $this->get(self::T7) !== null;
    }

    /**
     * Sets value of 't8' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT8($value)
    {
        return $this->set(self::T8, $value);
    }

    /**
     * Returns value of 't8' property
     *
     * @return integer
     */
    public function getT8()
    {
        $value = $this->get(self::T8);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't8' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT8()
    {
        return $this->get(self::T8) !== null;
    }

    /**
     * Sets value of 't9' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT9($value)
    {
        return $this->set(self::T9, $value);
    }

    /**
     * Returns value of 't9' property
     *
     * @return integer
     */
    public function getT9()
    {
        $value = $this->get(self::T9);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't9' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT9()
    {
        return $this->get(self::T9) !== null;
    }

    /**
     * Sets value of 't13' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setT13($value)
    {
        return $this->set(self::T13, $value);
    }

    /**
     * Returns value of 't13' property
     *
     * @return string
     */
    public function getT13()
    {
        $value = $this->get(self::T13);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 't13' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT13()
    {
        return $this->get(self::T13) !== null;
    }

    /**
     * Sets value of 't14' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT14($value)
    {
        return $this->set(self::T14, $value);
    }

    /**
     * Returns value of 't14' property
     *
     * @return integer
     */
    public function getT14()
    {
        $value = $this->get(self::T14);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't14' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT14()
    {
        return $this->get(self::T14) !== null;
    }

    /**
     * Sets value of 't15' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setT15($value)
    {
        return $this->set(self::T15, $value);
    }

    /**
     * Returns value of 't15' property
     *
     * @return string
     */
    public function getT15()
    {
        $value = $this->get(self::T15);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 't15' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT15()
    {
        return $this->get(self::T15) !== null;
    }

    /**
     * Sets value of 't16' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT16($value)
    {
        return $this->set(self::T16, $value);
    }

    /**
     * Returns value of 't16' property
     *
     * @return integer
     */
    public function getT16()
    {
        $value = $this->get(self::T16);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't16' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT16()
    {
        return $this->get(self::T16) !== null;
    }

    /**
     * Sets value of 't17' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT17($value)
    {
        return $this->set(self::T17, $value);
    }

    /**
     * Returns value of 't17' property
     *
     * @return integer
     */
    public function getT17()
    {
        $value = $this->get(self::T17);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't17' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT17()
    {
        return $this->get(self::T17) !== null;
    }

    /**
     * Sets value of 't19' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT19($value)
    {
        return $this->set(self::T19, $value);
    }

    /**
     * Returns value of 't19' property
     *
     * @return integer
     */
    public function getT19()
    {
        $value = $this->get(self::T19);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't19' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT19()
    {
        return $this->get(self::T19) !== null;
    }

    /**
     * Sets value of 't20' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT20($value)
    {
        return $this->set(self::T20, $value);
    }

    /**
     * Returns value of 't20' property
     *
     * @return integer
     */
    public function getT20()
    {
        $value = $this->get(self::T20);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't20' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT20()
    {
        return $this->get(self::T20) !== null;
    }

    /**
     * Sets value of 't21' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT21($value)
    {
        return $this->set(self::T21, $value);
    }

    /**
     * Returns value of 't21' property
     *
     * @return integer
     */
    public function getT21()
    {
        $value = $this->get(self::T21);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't21' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT21()
    {
        return $this->get(self::T21) !== null;
    }

    /**
     * Sets value of 't22' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT22($value)
    {
        return $this->set(self::T22, $value);
    }

    /**
     * Returns value of 't22' property
     *
     * @return integer
     */
    public function getT22()
    {
        $value = $this->get(self::T22);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't22' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT22()
    {
        return $this->get(self::T22) !== null;
    }

    /**
     * Sets value of 't23' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT23($value)
    {
        return $this->set(self::T23, $value);
    }

    /**
     * Returns value of 't23' property
     *
     * @return integer
     */
    public function getT23()
    {
        $value = $this->get(self::T23);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't23' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT23()
    {
        return $this->get(self::T23) !== null;
    }

    /**
     * Sets value of 't25' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT25($value)
    {
        return $this->set(self::T25, $value);
    }

    /**
     * Returns value of 't25' property
     *
     * @return integer
     */
    public function getT25()
    {
        $value = $this->get(self::T25);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't25' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT25()
    {
        return $this->get(self::T25) !== null;
    }

    /**
     * Sets value of 't26' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setT26($value)
    {
        return $this->set(self::T26, $value);
    }

    /**
     * Returns value of 't26' property
     *
     * @return string
     */
    public function getT26()
    {
        $value = $this->get(self::T26);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 't26' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT26()
    {
        return $this->get(self::T26) !== null;
    }

    /**
     * Sets value of 'Alias' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAlias($value)
    {
        return $this->set(self::ALIAS, $value);
    }

    /**
     * Returns value of 'Alias' property
     *
     * @return string
     */
    public function getAlias()
    {
        $value = $this->get(self::ALIAS);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Alias' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAlias()
    {
        return $this->get(self::ALIAS) !== null;
    }

    /**
     * Sets value of 't29' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT29($value)
    {
        return $this->set(self::T29, $value);
    }

    /**
     * Returns value of 't29' property
     *
     * @return integer
     */
    public function getT29()
    {
        $value = $this->get(self::T29);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't29' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT29()
    {
        return $this->get(self::T29) !== null;
    }

    /**
     * Sets value of 't30' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT30($value)
    {
        return $this->set(self::T30, $value);
    }

    /**
     * Returns value of 't30' property
     *
     * @return integer
     */
    public function getT30()
    {
        $value = $this->get(self::T30);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't30' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT30()
    {
        return $this->get(self::T30) !== null;
    }

    /**
     * Sets value of 't31' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT31($value)
    {
        return $this->set(self::T31, $value);
    }

    /**
     * Returns value of 't31' property
     *
     * @return integer
     */
    public function getT31()
    {
        $value = $this->get(self::T31);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't31' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT31()
    {
        return $this->get(self::T31) !== null;
    }

    /**
     * Sets value of 't33' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT33($value)
    {
        return $this->set(self::T33, $value);
    }

    /**
     * Returns value of 't33' property
     *
     * @return integer
     */
    public function getT33()
    {
        $value = $this->get(self::T33);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't33' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT33()
    {
        return $this->get(self::T33) !== null;
    }

    /**
     * Sets value of 't34' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT34($value)
    {
        return $this->set(self::T34, $value);
    }

    /**
     * Returns value of 't34' property
     *
     * @return integer
     */
    public function getT34()
    {
        $value = $this->get(self::T34);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't34' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT34()
    {
        return $this->get(self::T34) !== null;
    }

    /**
     * Sets value of 't36' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT36($value)
    {
        return $this->set(self::T36, $value);
    }

    /**
     * Returns value of 't36' property
     *
     * @return integer
     */
    public function getT36()
    {
        $value = $this->get(self::T36);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't36' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT36()
    {
        return $this->get(self::T36) !== null;
    }

    /**
     * Sets value of 't38' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setT38($value)
    {
        return $this->set(self::T38, $value);
    }

    /**
     * Returns value of 't38' property
     *
     * @return string
     */
    public function getT38()
    {
        $value = $this->get(self::T38);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 't38' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT38()
    {
        return $this->get(self::T38) !== null;
    }
}
}