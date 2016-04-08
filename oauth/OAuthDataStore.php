<?php

    /**
     * Class OAuthDataStore
     */
    class OAuthDataStore {
        /**
         * @param $consumer_key
         */
        function lookup_consumer($consumer_key) {
            // implement me
        }

        /**
         * @param $consumer
         * @param $token_type
         * @param $token
         */
        function lookup_token($consumer, $token_type, $token) {
            // implement me
        }

        /**
         * @param $consumer
         * @param $token
         * @param $nonce
         * @param $timestamp
         */
        function lookup_nonce($consumer, $token, $nonce, $timestamp) {
            // implement me
        }

        /**
         * @param $consumer
         * @param null $callback
         */
        function new_request_token($consumer, $callback = null) {
            // return a new token attached to this consumer
        }

        /**
         * @param $token
         * @param $consumer
         * @param null $verifier
         */
        function new_access_token($token, $consumer, $verifier = null) {
            // return a new access token attached to this consumer
            // for the user associated with this token if the request token
            // is authorized
            // should also invalidate the request token
        }

    }