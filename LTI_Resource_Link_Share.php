<?php
    /**
     * Class to represent a tool consumer resource link share
     *
     * @author  Stephen P Vickers <stephen@spvsoftwareproducts.com>
     * @version 2.3.04
     * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3
     */
    class LTI_Resource_Link_Share {

        /**
         * Consumer key value.
         */
        public $consumer_key = NULL;
        /**
         * Resource link ID value.
         */
        public $resource_link_id = NULL;
        /**
         * Title of sharing context.
         */
        public $title = NULL;
        /**
         * True if sharing request is to be automatically approved on first use.
         */
        public $approved = NULL;

        /**
         * Class constructor.
         */
        public function __construct() {
            $this->context_id = &$this->resource_link_id;
        }

    }