<?php
    namespace EffectConnect\PHPSdk\Core\Model\Response;

    use EffectConnect\PHPSdk\Core\Helper\Payload;

    /**
     * Class LineFee
     *
     * @author  Stefan Van den Heuvel
     * @company Koek & Peer
     * @product EffectConnect
     * @package EffectConnectSDK
     */
    final class LineFee
    {
        /**
         * @var string $_type
         */
        private $_type;
        /**
         * @var float $_amount
         */
        private $_amount;

        /**
         * LineFee constructor.
         *
         * @param $payload
         */
        public function __construct($payload)
        {
            if ($payload === null)
            {
                return;
            }

            $this->_type    = Payload::extract($payload, 'type');
            $this->_amount  = Payload::extract($payload, 'amount');
        }

        /**
         * @return string
         */
        public function getType()
        {
            return $this->_type;
        }

        /**
         * @return float
         */
        public function getAmount()
        {
            return $this->_amount;
        }
    }