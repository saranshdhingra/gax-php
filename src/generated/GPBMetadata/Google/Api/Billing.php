<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/billing.proto

namespace GPBMetadata\Google\Api;

class Billing
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Metric::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0abb020a18676f6f676c652f6170692f62696c6c696e672e70726f746f12" .
            "0a676f6f676c652e6170691a17676f6f676c652f6170692f6d6574726963" .
            "2e70726f746f22480a0742696c6c696e67120f0a076d6574726963731801" .
            "20032809122c0a0572756c657318052003280b321d2e676f6f676c652e61" .
            "70692e42696c6c696e6753746174757352756c65223f0a1142696c6c696e" .
            "6753746174757352756c6512100a0873656c6563746f7218012001280912" .
            "180a10616c6c6f7765645f737461747573657318022003280942670a0e63" .
            "6f6d2e676f6f676c652e617069420c42696c6c696e6750726f746f50015a" .
            "45676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f" .
            "6f676c65617069732f6170692f73657276696365636f6e6669673b736572" .
            "76696365636f6e666967620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
