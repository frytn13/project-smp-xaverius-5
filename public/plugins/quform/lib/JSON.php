<?php

class Services_JSON
{
    const SERVICES_JSON_LOOSE_TYPE = 16;
    const SERVICES_JSON_SUPPRESS_ERRORS = 32;

    protected $use;
    protected $_mb_strlen;
    protected $_mb_substr;
    protected $_mb_convert_encoding;

    public function __construct($use = 0)
    {
        $this->use = $use;
        $this->_mb_strlen = function_exists('mb_strlen');
        $this->_mb_substr = function_exists('mb_substr');
        $this->_mb_convert_encoding = function_exists('mb_convert_encoding');
    }

    function utf162utf8($utf16)
    {
        if ($this->_mb_convert_encoding) {
            return mb_convert_encoding($utf16, 'UTF-8', 'UTF-16');
        }

        $bytes = (ord($utf16[0]) << 8) | ord($utf16[1]);

        switch (true) {
            case ((0x7F & $bytes) == $bytes):
                return chr(0x7F & $bytes);

            case (0x07FF & $bytes) == $bytes:
                return chr(0xC0 | (($bytes >> 6) & 0x1F))
                     . chr(0x80 | ($bytes & 0x3F));

            case (0xFFFF & $bytes) == $bytes:
                return chr(0xE0 | (($bytes >> 12) & 0x0F))
                     . chr(0x80 | (($bytes >> 6) & 0x3F))
                     . chr(0x80 | ($bytes & 0x3F));
        }

        return '';
    }

    function utf82utf16($utf8)
    {
        if ($this->_mb_convert_encoding) {
            return mb_convert_encoding($utf8, 'UTF-16', 'UTF-8');
        }

        switch (strlen($utf8)) {
            case 1:
                return chr(0) . $utf8;

            case 2:
                return chr((ord($utf8[0]) & 0x3) << 6 | (ord($utf8[1]) & 0x3F))
                     . chr((ord($utf8[0]) >> 2) & 0xF);

            case 3:
                return chr((ord($utf8[1]) & 0x3) << 6 | (ord($utf8[2]) & 0x3F))
                     . chr(((ord($utf8[0]) & 0xF) << 4)
                     | ((ord($utf8[1]) >> 2) & 0xF));
        }

        return '';
    }

    public function encode($data)
    {
        return json_encode($data);
    }

    public function decode($data)
    {
        return json_decode($data, ($this->use & self::SERVICES_JSON_LOOSE_TYPE));
    }
}
