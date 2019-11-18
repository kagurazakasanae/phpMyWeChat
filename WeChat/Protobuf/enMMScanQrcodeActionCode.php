<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * enMMScanQrcodeActionCode enum
 */
final class enMMScanQrcodeActionCode
{
    const MMSCAN_QRCODE_A8KEY = 0;
    const MMSCAN_QRCODE_TEXT = 1;
    const MMSCAN_QRCODE_WEBVIEW = 2;
    const MMSCAN_QRCODE_APP = 3;
    const MMSCAN_QRCODE_PROFILE = 4;
    const MMSCAN_QRCODE_PLUGIN = 5;
    const MMSCAN_QRCODE_SPECIAL_WEBVIEW = 6;
    const MMSCAN_QRCODE_WEBVIEW_NO_NOTICE = 7;
    const MMSCAN_QRCODE_VCARD = 8;
    const MMSCAN_QRCODE_JUMP = 9;
    const MMSCAN_QRCODE_MMPAY = 10;
    const MMSCAN_QRCODE_MMPAY_NATIVE = 11;
    const MMSCAN_QRCODE_EMOTICON = 20;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'MMSCAN_QRCODE_A8KEY' => self::MMSCAN_QRCODE_A8KEY,
            'MMSCAN_QRCODE_TEXT' => self::MMSCAN_QRCODE_TEXT,
            'MMSCAN_QRCODE_WEBVIEW' => self::MMSCAN_QRCODE_WEBVIEW,
            'MMSCAN_QRCODE_APP' => self::MMSCAN_QRCODE_APP,
            'MMSCAN_QRCODE_PROFILE' => self::MMSCAN_QRCODE_PROFILE,
            'MMSCAN_QRCODE_PLUGIN' => self::MMSCAN_QRCODE_PLUGIN,
            'MMSCAN_QRCODE_SPECIAL_WEBVIEW' => self::MMSCAN_QRCODE_SPECIAL_WEBVIEW,
            'MMSCAN_QRCODE_WEBVIEW_NO_NOTICE' => self::MMSCAN_QRCODE_WEBVIEW_NO_NOTICE,
            'MMSCAN_QRCODE_VCARD' => self::MMSCAN_QRCODE_VCARD,
            'MMSCAN_QRCODE_JUMP' => self::MMSCAN_QRCODE_JUMP,
            'MMSCAN_QRCODE_MMPAY' => self::MMSCAN_QRCODE_MMPAY,
            'MMSCAN_QRCODE_MMPAY_NATIVE' => self::MMSCAN_QRCODE_MMPAY_NATIVE,
            'MMSCAN_QRCODE_EMOTICON' => self::MMSCAN_QRCODE_EMOTICON,
        );
    }
}
}