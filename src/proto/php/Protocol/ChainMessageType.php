<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: overlay.proto

namespace Protocol;

/**
 *message interfaces for java
 *
 * Protobuf enum <code>Protocol\ChainMessageType</code>
 */
class ChainMessageType
{
    /**
     * Generated from protobuf enum <code>CHAIN_TYPE_NONE = 0;</code>
     */
    const CHAIN_TYPE_NONE = 0;
    /**
     * response with CHAIN_STATUS = 2;
     *
     * Generated from protobuf enum <code>CHAIN_HELLO = 10;</code>
     */
    const CHAIN_HELLO = 10;
    /**
     * Generated from protobuf enum <code>CHAIN_TX_STATUS = 11;</code>
     */
    const CHAIN_TX_STATUS = 11;
    /**
     * Generated from protobuf enum <code>CHAIN_PEER_ONLINE = 12;</code>
     */
    const CHAIN_PEER_ONLINE = 12;
    /**
     * Generated from protobuf enum <code>CHAIN_PEER_OFFLINE = 13;</code>
     */
    const CHAIN_PEER_OFFLINE = 13;
    /**
     * Generated from protobuf enum <code>CHAIN_PEER_MESSAGE = 14;</code>
     */
    const CHAIN_PEER_MESSAGE = 14;
    /**
     * Generated from protobuf enum <code>CHAIN_SUBMITTRANSACTION = 15;</code>
     */
    const CHAIN_SUBMITTRANSACTION = 15;
    /**
     *rexx notify the client ledger(protocol::LedgerHeader) when closed
     *
     * Generated from protobuf enum <code>CHAIN_LEDGER_HEADER = 16;</code>
     */
    const CHAIN_LEDGER_HEADER = 16;
    /**
     *response with CHAIN_RESPONSE
     *
     * Generated from protobuf enum <code>CHAIN_SUBSCRIBE_TX = 17;</code>
     */
    const CHAIN_SUBSCRIBE_TX = 17;
    /**
     * Generated from protobuf enum <code>CHAIN_TX_ENV_STORE = 18;</code>
     */
    const CHAIN_TX_ENV_STORE = 18;
}
