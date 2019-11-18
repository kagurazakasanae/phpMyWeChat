<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * LongLinkCmdId enum
 */
final class LongLinkCmdId
{
    const SEND_NOOP_CMDID = 6;
    const SEND_MSGIMG_CMDID = 9;
    const SEND_DOWNLOADVOICE = 20;
    const RECV_PUSH_CMDID = 24;
    const SEND_GETPROFILE = 118;
    const SEND_NEWSYNC_CMDID = 121;
    const PUSH_DATA_CMDID = 122;
    const LONGLINK_IDENTIFY_REQ = 205;
    const SEND_GETLOGINQRCODE = 232;
    const SEND_CHECKLOGINQRCODE_CMDID = 233;
    const NEWSENDMSG = 237;
    const SIGNALKEEP_CMDID = 243;
    const SEND_MANUALAUTH_CMDID = 253;
    const RECV_NOOP_CMDID = 1000000006;
    const RECV_MSGIMG_CMDID = 1000000009;
    const RECV_DOWNLOADVOICE = 1000000020;
    const RECV_GETPROFILE = 1000000118;
    const RECV_NEWSYNC_CMDID = 1000000121;
    const SEND_SYNC_SUCCESS = 1000000190;
    const LONGLINK_IDENTIFY_RESP = 1000000205;
    const RECV_GETLOGINQRCODE = 1000000232;
    const RECV_CHECKLOGINQRCODE_CMDID = 1000000233;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'SEND_NOOP_CMDID' => self::SEND_NOOP_CMDID,
            'SEND_MSGIMG_CMDID' => self::SEND_MSGIMG_CMDID,
            'SEND_DOWNLOADVOICE' => self::SEND_DOWNLOADVOICE,
            'RECV_PUSH_CMDID' => self::RECV_PUSH_CMDID,
            'SEND_GETPROFILE' => self::SEND_GETPROFILE,
            'SEND_NEWSYNC_CMDID' => self::SEND_NEWSYNC_CMDID,
            'PUSH_DATA_CMDID' => self::PUSH_DATA_CMDID,
            'LONGLINK_IDENTIFY_REQ' => self::LONGLINK_IDENTIFY_REQ,
            'SEND_GETLOGINQRCODE' => self::SEND_GETLOGINQRCODE,
            'SEND_CHECKLOGINQRCODE_CMDID' => self::SEND_CHECKLOGINQRCODE_CMDID,
            'NEWSENDMSG' => self::NEWSENDMSG,
            'SIGNALKEEP_CMDID' => self::SIGNALKEEP_CMDID,
            'SEND_MANUALAUTH_CMDID' => self::SEND_MANUALAUTH_CMDID,
            'RECV_NOOP_CMDID' => self::RECV_NOOP_CMDID,
            'RECV_MSGIMG_CMDID' => self::RECV_MSGIMG_CMDID,
            'RECV_DOWNLOADVOICE' => self::RECV_DOWNLOADVOICE,
            'RECV_GETPROFILE' => self::RECV_GETPROFILE,
            'RECV_NEWSYNC_CMDID' => self::RECV_NEWSYNC_CMDID,
            'SEND_SYNC_SUCCESS' => self::SEND_SYNC_SUCCESS,
            'LONGLINK_IDENTIFY_RESP' => self::LONGLINK_IDENTIFY_RESP,
            'RECV_GETLOGINQRCODE' => self::RECV_GETLOGINQRCODE,
            'RECV_CHECKLOGINQRCODE_CMDID' => self::RECV_CHECKLOGINQRCODE_CMDID,
        );
    }
}
}