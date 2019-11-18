<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * VerifyUser message
 */
class VerifyUser extends \ProtobufMessage
{
    /* Field index constants */
    const VALUE = 1;
    const VERIFYUSERTICKET = 2;
    const ANTISPAMTICKET = 3;
    const FRIENDFLAG = 4;
    const CHATROOMUSERNAME = 5;
    const SOURCEUSERNAME = 6;
    const SOURCENICKNAME = 7;
    const SCANQRCODEFROMSCENE = 8;
    const REPORTINFO = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::VALUE => array(
            'name' => 'value',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VERIFYUSERTICKET => array(
            'name' => 'verifyUserTicket',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ANTISPAMTICKET => array(
            'name' => 'antispamTicket',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FRIENDFLAG => array(
            'default' => 0,
            'name' => 'friendFlag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CHATROOMUSERNAME => array(
            'name' => 'chatRoomUserName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SOURCEUSERNAME => array(
            'name' => 'sourceUserName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SOURCENICKNAME => array(
            'name' => 'sourceNickName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SCANQRCODEFROMSCENE => array(
            'default' => 0,
            'name' => 'scanQrcodeFromScene',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REPORTINFO => array(
            'name' => 'reportInfo',
            'required' => false,
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
        $this->values[self::VALUE] = null;
        $this->values[self::VERIFYUSERTICKET] = null;
        $this->values[self::ANTISPAMTICKET] = null;
        $this->values[self::FRIENDFLAG] = self::$fields[self::FRIENDFLAG]['default'];
        $this->values[self::CHATROOMUSERNAME] = null;
        $this->values[self::SOURCEUSERNAME] = null;
        $this->values[self::SOURCENICKNAME] = null;
        $this->values[self::SCANQRCODEFROMSCENE] = self::$fields[self::SCANQRCODEFROMSCENE]['default'];
        $this->values[self::REPORTINFO] = null;
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
     * Sets value of 'value' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setValue($value)
    {
        return $this->set(self::VALUE, $value);
    }

    /**
     * Returns value of 'value' property
     *
     * @return string
     */
    public function getValue()
    {
        $value = $this->get(self::VALUE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'value' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValue()
    {
        return $this->get(self::VALUE) !== null;
    }

    /**
     * Sets value of 'verifyUserTicket' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVerifyUserTicket($value)
    {
        return $this->set(self::VERIFYUSERTICKET, $value);
    }

    /**
     * Returns value of 'verifyUserTicket' property
     *
     * @return string
     */
    public function getVerifyUserTicket()
    {
        $value = $this->get(self::VERIFYUSERTICKET);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'verifyUserTicket' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVerifyUserTicket()
    {
        return $this->get(self::VERIFYUSERTICKET) !== null;
    }

    /**
     * Sets value of 'antispamTicket' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAntispamTicket($value)
    {
        return $this->set(self::ANTISPAMTICKET, $value);
    }

    /**
     * Returns value of 'antispamTicket' property
     *
     * @return string
     */
    public function getAntispamTicket()
    {
        $value = $this->get(self::ANTISPAMTICKET);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'antispamTicket' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAntispamTicket()
    {
        return $this->get(self::ANTISPAMTICKET) !== null;
    }

    /**
     * Sets value of 'friendFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFriendFlag($value)
    {
        return $this->set(self::FRIENDFLAG, $value);
    }

    /**
     * Returns value of 'friendFlag' property
     *
     * @return integer
     */
    public function getFriendFlag()
    {
        $value = $this->get(self::FRIENDFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'friendFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendFlag()
    {
        return $this->get(self::FRIENDFLAG) !== null;
    }

    /**
     * Sets value of 'chatRoomUserName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setChatRoomUserName($value)
    {
        return $this->set(self::CHATROOMUSERNAME, $value);
    }

    /**
     * Returns value of 'chatRoomUserName' property
     *
     * @return string
     */
    public function getChatRoomUserName()
    {
        $value = $this->get(self::CHATROOMUSERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'chatRoomUserName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatRoomUserName()
    {
        return $this->get(self::CHATROOMUSERNAME) !== null;
    }

    /**
     * Sets value of 'sourceUserName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSourceUserName($value)
    {
        return $this->set(self::SOURCEUSERNAME, $value);
    }

    /**
     * Returns value of 'sourceUserName' property
     *
     * @return string
     */
    public function getSourceUserName()
    {
        $value = $this->get(self::SOURCEUSERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'sourceUserName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSourceUserName()
    {
        return $this->get(self::SOURCEUSERNAME) !== null;
    }

    /**
     * Sets value of 'sourceNickName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSourceNickName($value)
    {
        return $this->set(self::SOURCENICKNAME, $value);
    }

    /**
     * Returns value of 'sourceNickName' property
     *
     * @return string
     */
    public function getSourceNickName()
    {
        $value = $this->get(self::SOURCENICKNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'sourceNickName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSourceNickName()
    {
        return $this->get(self::SOURCENICKNAME) !== null;
    }

    /**
     * Sets value of 'scanQrcodeFromScene' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setScanQrcodeFromScene($value)
    {
        return $this->set(self::SCANQRCODEFROMSCENE, $value);
    }

    /**
     * Returns value of 'scanQrcodeFromScene' property
     *
     * @return integer
     */
    public function getScanQrcodeFromScene()
    {
        $value = $this->get(self::SCANQRCODEFROMSCENE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'scanQrcodeFromScene' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasScanQrcodeFromScene()
    {
        return $this->get(self::SCANQRCODEFROMSCENE) !== null;
    }

    /**
     * Sets value of 'reportInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setReportInfo($value)
    {
        return $this->set(self::REPORTINFO, $value);
    }

    /**
     * Returns value of 'reportInfo' property
     *
     * @return string
     */
    public function getReportInfo()
    {
        $value = $this->get(self::REPORTINFO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'reportInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReportInfo()
    {
        return $this->get(self::REPORTINFO) !== null;
    }
}
}