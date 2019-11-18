<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * VoiceFormat enum
 */
final class VoiceFormat
{
    const MM_VOICE_FORMAT_AMR = 0;
    const MM_VOICE_FORMAT_UNKNOWN = -1;
    const MM_VOICE_FORMAT_SPEEX = 1;
    const MM_VOICE_FORMAT_MP3 = 2;
    const MM_VOICE_FORMAT_WAVE = 3;
    const MM_VOICE_FORMAT_SILK = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'MM_VOICE_FORMAT_AMR' => self::MM_VOICE_FORMAT_AMR,
            'MM_VOICE_FORMAT_UNKNOWN' => self::MM_VOICE_FORMAT_UNKNOWN,
            'MM_VOICE_FORMAT_SPEEX' => self::MM_VOICE_FORMAT_SPEEX,
            'MM_VOICE_FORMAT_MP3' => self::MM_VOICE_FORMAT_MP3,
            'MM_VOICE_FORMAT_WAVE' => self::MM_VOICE_FORMAT_WAVE,
            'MM_VOICE_FORMAT_SILK' => self::MM_VOICE_FORMAT_SILK,
        );
    }
}
}