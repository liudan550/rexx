<?php


namespace GPBMetadata;

class Merkeltrie
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0af3010a106d65726b656c747269652e70726f746f120870726f746f636f" .
            "6c22520a054368696c6412130a0b7375626c6f636174696f6e1801200128" .
            "0c120c0a046861736818022001280c12260a096368696c64747970651803" .
            "2001280e32132e70726f746f636f6c2e4348494c445459504522290a044e" .
            "6f646512210a086368696c6472656e18012003280b320f2e70726f746f63" .
            "6f6c2e4368696c642a2a0a094348494c445459504512080a044e4f4e4510" .
            "0012090a05494e4e4552100112080a044c454146100242220a20696f2e62" .
            "756d6f2e73646b2e636f72652e657874656e642e70726f746f6275666206" .
            "70726f746f33"
        ));

        static::$is_initialized = true;
    }
}
