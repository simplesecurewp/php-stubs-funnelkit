<?php

namespace {
    /**
     * # WooCommerce Plugin Framework API Base Class
     *
     * This class provides a standardized framework for constructing an API wrapper
     * to external services. It is designed to be extremely flexible.
     *
     * @version 2.2.0
     */
    class WFOCU_SV_API_Base
    {
        public $parameters;
        /** @var string request method, defaults to POST */
        protected $request_method = 'POST';
        /** @var string URI used for the request */
        protected $request_uri;
        /** @var array request headers */
        protected $request_headers = array();
        /** @var string request user-agent */
        protected $request_user_agent;
        /** @var string request HTTP version, defaults to 1.0 */
        protected $request_http_version = '1.0';
        /** @var string request duration */
        protected $request_duration;
        /** @var object request */
        protected $request;
        /** @var string response code */
        protected $response_code;
        /** @var string response message */
        protected $response_message;
        /** @var array response headers */
        protected $response_headers;
        /** @var string raw response body */
        protected $raw_response_body;
        /** @var string response handler class name */
        protected $response_handler;
        /** @var object response */
        protected $response;
        /**
         * Add multiple parameters
         *
         * @param array $params
         *
         * @since 2.0
         */
        public function add_parameters(array $params)
        {
        }
        /**
         * Add a parameter
         *
         * @param string $key
         * @param string|int $value
         *
         * @since 2.0
         */
        public function add_parameter($key, $value)
        {
        }
        public function clean_params()
        {
        }
        public function get_parameters()
        {
        }
        /**
         * Perform the request and return the parsed response
         *
         * @param object $request class instance which implements \SV_WC_API_Request
         *
         * @return object class instance which implements \SV_WC_API_Response
         * @throws Exception
         * @since 2.2.0
         *
         */
        protected function perform_request($request)
        {
        }
        /**
         * Reset the API response members to their
         *
         * @since 1.0.0
         */
        protected function reset_response()
        {
        }
        /**
         * Simple wrapper for wp_remote_request() so child classes can override this
         * and provide their own transport mechanism if needed, e.g. a custom
         * cURL implementation
         *
         * @param string $request_uri
         * @param string $request_args
         *
         * @return array|WP_Error
         * @since 2.2.0
         *
         */
        protected function do_remote_request($request_uri, $request_args)
        {
        }
        /**
         * Get the request URI
         *
         * @return string
         * @since 2.2.0
         */
        protected function get_request_uri()
        {
        }
        /**
         * Returns the most recent request object
         *
         * @return object the most recent request object
         * @see \SV_WC_API_Request
         * @since 2.2.0
         */
        public function get_request()
        {
        }
        /**
         * Get the ID for the API, used primarily to namespace the action name
         * for broadcasting requests
         *
         * @return string
         * @since 2.2.0
         */
        protected function get_api_id()
        {
        }
        /**
         * Get the request arguments in the format required by wp_remote_request()
         *
         * @return mixed|void
         * @since 2.2.0
         */
        protected function get_request_args()
        {
        }
        /**
         * Get the request method, POST by default
         *
         * @return string
         * @since 2.2.0
         */
        protected function get_request_method()
        {
        }
        /** Request Getters *******************************************************/
        /**
         * Get the request HTTP version, 1.1 by default
         *
         * @return string
         * @since 2.2.0
         */
        protected function get_request_http_version()
        {
        }
        /**
         * Get the request user agent, defaults to:
         *
         * Dasherized-Plugin-Name/Plugin-Version (WooCommerce/WC-Version; WordPress/WP-Version)
         *
         * @return string
         * @since 2.2.0
         */
        protected function get_request_user_agent()
        {
        }
        /**
         * Get the request headers
         *
         * @return array
         * @since 2.2.0
         */
        protected function get_request_headers()
        {
        }
        /**
         * Handle and parse the response
         *
         * @param array|WP_Error $response response data
         *
         * @return object request class instance that implements SV_WC_API_Request
         * @throws Exception network issues, timeouts, API errors, etc
         * @since 2.2.0
         *
         */
        protected function handle_response($response)
        {
        }
        /**
         * Allow child classes to validate a response prior to instantiating the
         * response object. Useful for checking response codes or messages, e.g.
         * throw an exception if the response code is not 200.
         *
         * A child class implementing this method should simply return true if the response
         * processing should continue, or throw a \SV_WC_API_Exception with a
         * relevant error message & code to stop processing.
         *
         * Note: Child classes *must* sanitize the raw response body before throwing
         * an exception, as it will be included in the broadcast_request() method
         * which is typically used to log requests.
         *
         * @since 2.2.0
         */
        protected function do_pre_parse_response_validation()
        {
        }
        /**
         * Return the parsed response object for the request
         *
         * @param string $raw_response_body
         *
         * @return object response class instance which implements SV_WC_API_Request
         * @since 2.2.0
         *
         */
        protected function get_parsed_response($raw_response_body)
        {
        }
        /**
         * Allow child classes to validate a response after it has been parsed
         * and instantiated. This is useful for check error codes or messages that
         * exist in the parsed response.
         *
         * A child class implementing this method should simply return true if the response
         * processing should continue, or throw an Exception with a
         * relevant error message & code to stop processing.
         *
         * Note: Response body sanitization is handled automatically
         *
         * @since 2.2.0
         */
        protected function do_post_parse_response_validation()
        {
        }
        /**
         * Alert other actors that a request has been performed. This is primarily used
         * for request logging.
         *
         * @since 2.2.0
         */
        protected function broadcast_request()
        {
        }
        /** Response Getters ******************************************************/
        /**
         * Get sanitized request headers suitable for logging, stripped of any
         * confidential information
         *
         * The `Authorization` header is sanitized automatically.
         *
         * Child classes that implement any custom authorization headers should
         * override this method to perform sanitization.
         *
         * @return array
         * @since 2.2.0
         */
        protected function get_sanitized_request_headers()
        {
        }
        /**
         * Get the request duration in seconds, rounded to the 5th decimal place
         *
         * @return string
         * @since 2.2.0
         */
        protected function get_request_duration()
        {
        }
        /**
         * Get the response code
         *
         * @return string
         * @since 2.2.0
         */
        protected function get_response_code()
        {
        }
        /**
         * Get the response message
         *
         * @return string
         * @since 2.2.0
         */
        protected function get_response_message()
        {
        }
        /**
         * Get the response headers
         *
         * @return array
         * @since 2.2.0
         */
        protected function get_response_headers()
        {
        }
        /**
         * Get the sanitized response body, provided by the response class
         * to_string_safe() method
         *
         * @return string|null
         * @since 2.2.0
         */
        protected function get_sanitized_response_body()
        {
        }
        /** Misc Getters ******************************************************/
        /**
         * Returns the most recent response object
         *
         * @return object the most recent response object
         * @see \SV_WC_API_Response
         * @since 2.2.0
         */
        public function get_response()
        {
        }
        /**
         * Get the raw response body, prior to any parsing or sanitization
         *
         * @return string
         * @since 2.2.0
         */
        protected function get_raw_response_body()
        {
        }
        /**
         * Get the response handler class name
         *
         * @return string
         * @since 2.2.0
         */
        protected function get_response_handler()
        {
        }
        /** Setters ***************************************************************/
        /**
         * Set the response handler class name. This class will be instantiated
         * to parse the response for the request.
         *
         * Note the class should implement SV_WC_API
         *
         * @param string $handler handle class name
         *
         * @return array
         * @since 2.2.0
         *
         */
        protected function set_response_handler($handler)
        {
        }
        /**
         * Set a header request
         *
         * @param string $name header name
         * @param string $value header value
         *
         * @return string
         * @since 2.2.0
         *
         */
        protected function set_request_header($name, $value)
        {
        }
        /**
         * Set HTTP basic auth for the request
         *
         * Since 2.2.0
         *
         * @param string $username
         * @param string $password
         */
        protected function set_http_basic_auth($username, $password)
        {
        }
        /**
         * Set the Content-Type request header
         *
         * @param string $content_type
         *
         * @since 2.2.0
         *
         */
        protected function set_request_content_type_header($content_type)
        {
        }
        /**
         * Set the Accept request header
         *
         * @param string $type the request accept type
         *
         * @since 2.2.0
         *
         */
        protected function set_request_accept_header($type)
        {
        }
    }
    /**
     * Abstract Class for all the Gateway Support Class
     * Class WFOCU_Gateway
     */
    abstract class WFOCU_Gateway extends \WFOCU_SV_API_Base
    {
        public $amount = 0;
        public $token = \null;
        public $refund_supported = \false;
        protected $key = '';
        public function __construct()
        {
        }
        /**
         * @return WC_Payment_Gateway
         */
        public function get_wc_gateway()
        {
        }
        public function get_amount()
        {
        }
        public function set_amount($amount)
        {
        }
        public function get_key()
        {
        }
        /**
         * This function checks for the need to do the tokenization.
         * We have to fetch the funnel to decide whether to tokenize the user or not.
         * @return int|false funnel ID on success false otherwise
         *
         */
        public function should_tokenize()
        {
        }
        /**
         * Try and get the payment token saved by the gateway
         *
         * @param WC_Order $order
         *
         * @return true on success false otherwise
         */
        public function has_token($order)
        {
        }
        /**
         * Try and get the payment token saved by the gateway
         *
         * @param WC_Order $order
         *
         * @return true on success false otherwise
         */
        public function get_token($order)
        {
        }
        /**
         * Charge the upsell and capture payments
         *
         * @param WC_Order $order
         *
         * @return true on success false otherwise
         */
        public function process_charge($order)
        {
        }
        public function handle_result($result, $message = '')
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return bool
         */
        public function is_enabled($order = \false)
        {
        }
        public function get_order_number($order)
        {
        }
        /**
         * Tell the system to run without a token or not
         * @return bool
         */
        public function is_run_without_token()
        {
        }
        /**
         * Allow gateways to declare whether they support offer refund
         *
         * @param WC_Order $order
         *
         * @return bool
         */
        public function is_refund_supported($order = \false)
        {
        }
        /**
         * Processing refund request
         *
         * @param $order
         *
         * @return bool
         */
        public function process_refund_offer($order)
        {
        }
        /**
         * Providing refund button html for amdin order edit page
         *
         * @param $funnel_id
         * @param $offer_id
         * @param $total_charge
         * @param $transaction_id
         * @param $refunded
         *
         * @return string
         */
        public function get_refund_button_html($funnel_id, $offer_id, $total_charge, $transaction_id, $refunded, $event_id)
        {
        }
        /**
         * Adding common order in a standard format for offer refunds
         *
         * @param $order
         * @param $amnt
         * @param $refund_id
         * @param $offer_id
         * @param $refund_reason
         */
        public function wfocu_add_order_note($order, $amnt, $refund_id, $offer_id, $refund_reason)
        {
        }
        /**
         *  Creating transaction test/URL
         *
         * @param $transaction_id
         * @param $order_id
         *
         * @return string
         */
        public function get_transaction_link($transaction_id, $order_id)
        {
        }
        public function handle_client_error()
        {
        }
        public function get_client_error()
        {
        }
        /**
         * Handle API Error during the client integration
         *
         * @param $order_note string Order note to add
         * @param $log string
         * @param $order WC_Order
         */
        public function handle_api_error($order_note, $log, $order, $create_failed_order = \false)
        {
        }
    }
    /**
     * WFOCU_Gateway_Integration_Authorize_Net_CIM class.
     *
     * @extends WFOCU_Gateway
     */
    class WFOCU_Gateway_Integration_Authorize_Net_CIM extends \WFOCU_Gateway
    {
        protected static $ins = \null;
        public $token = \false;
        public $customer_id = \false;
        public $unset_opaque_value = \false;
        public $order = \false;
        protected $key = 'authorize_net_cim_credit_card';
        const MB_ENCODING = 'UTF-8';
        public $is_error_token = \false;
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function maybe_force_tokenization($is_tokenize)
        {
        }
        public function is_accept_js_on()
        {
        }
        public function process_payment($result, $order_id)
        {
        }
        public function get_order($order)
        {
        }
        /**
         * Try and get the payment token saved by the gateway
         *
         * @param WC_Order $order
         *
         * @return true on success false otherwise
         */
        public function has_token($order)
        {
        }
        /**
         * Try and get the payment token saved by the gateway
         *
         * @param WC_Order $order
         *
         * @return true on success false otherwise
         */
        public function get_token($order)
        {
        }
        public function maybe_create_token($order)
        {
        }
        public function process_charge($order)
        {
        }
        protected function create_transaction_request($type)
        {
        }
        /**
         * Adds tax information to the request.
         *
         * @return array
         * @since 2.0.0
         */
        protected function get_taxes()
        {
        }
        /**
         * Adds shipping information to the request.
         *
         * @return array
         * @since 2.0.0
         */
        protected function get_shipping()
        {
        }
        /**
         * Adds order line items to the request.
         *
         * @return array
         * @since 2.0.0
         */
        protected function get_line_items()
        {
        }
        /**
         * Try and get the payment token saved by the gateway
         *
         * @param WC_Order $order
         *
         * @return true on success false otherwise
         */
        public function get_customer_id($order)
        {
        }
        /**
         * Get extra options for the CIM transaction.
         *
         * Extra options are fields that auth.net accepts but aren't part of the CIM API
         *
         * @return string
         * @since 2.0.0
         */
        protected function get_extra_options()
        {
        }
        public function get_request_attributes($request)
        {
        }
        protected function get_request_body($request)
        {
        }
        public function get_shipping_addr($order)
        {
        }
        /**
         * @param WC_Order $order
         */
        public function maybe_add_shipping_address_id_order_for_guests($order)
        {
        }
        /**
         * Handling refund offer
         *
         * @param $order
         *
         * @return bool
         */
        public function process_refund_offer($order)
        {
        }
        /**
         *
         * @param $order
         * @param $amnt
         * @param $refund_id
         * @param $offer_id
         * @param $refund_reason
         */
        public function wfocu_add_order_note($order, $amnt, $refund_id, $offer_id, $refund_reason)
        {
        }
        /**
         * Modifying refund request data Auth Offer post modified request data
         *
         * @param $request_data
         * @param $order
         * @param $gateway
         */
        public function wfocu_modify_refund_request_data($request_data, $order, $gateway)
        {
        }
        /**
         * Gets the current WordPress site name.
         *
         * This is helpful for retrieving the actual site name instead of the
         * network name on multisite installations.
         *
         *
         * @return string
         */
        public function get_site_name()
        {
        }
        /**
         * Format a number with 2 decimal points, using a period for the decimal
         * separator and no thousands separator.
         *
         * Commonly used for payment gateways which require amounts in this format.
         *
         *
         * @param float $number
         *
         * @return string
         */
        public function number_format($number)
        {
        }
        /**
         * Return a string with insane UTF-8 characters removed, like invisible
         * characters, unused code points, and other weirdness. It should
         * accept the common types of characters defined in Unicode.
         *
         * The following are allowed characters:
         *
         * p{L} - any kind of letter from any language
         * p{Mn} - a character intended to be combined with another character without taking up extra space (e.g. accents, umlauts, etc.)
         * p{Mc} - a character intended to be combined with another character that takes up extra space (vowel signs in many Eastern languages)
         * p{Nd} - a digit zero through nine in any script except ideographic scripts
         * p{Zs} - a whitespace character that is invisible, but does take up space
         * p{P} - any kind of punctuation character
         * p{Sm} - any mathematical symbol
         * p{Sc} - any currency sign
         *
         * pattern definitions from http://www.regular-expressions.info/unicode.html
         *
         * @param string $string
         *
         * @return string
         * @since 4.0.0
         *
         */
        public function str_to_sane_utf8($string)
        {
        }
        /**
         * Truncates a given $string after a given $length if string is longer than
         * $length. The last characters will be replaced with the $omission string
         * for a total length not exceeding $length
         *
         * @param string $string text to truncate
         * @param int $length total desired length of string, including omission
         * @param string $omission omission text, defaults to '...'
         *
         * @return string
         * @since 2.2.0
         *
         */
        public function str_truncate($string, $length, $omission = '...')
        {
        }
        /**
         * Helper method to check if the multibyte extension is loaded, which
         * indicates it's safe to use the mb_*() string methods
         *
         * @return bool
         * @since 2.2.0
         */
        protected function multibyte_loaded()
        {
        }
        /**
         * Returns a string with all non-ASCII characters removed. This is useful
         * for any string functions that expect only ASCII chars and can't
         * safely handle UTF-8. Note this only allows ASCII chars in the range
         * 33-126 (newlines/carriage returns are stripped)
         *
         * @param string $string string to make ASCII
         *
         * @return string
         * @since 2.2.0
         *
         */
        public function str_to_ascii($string)
        {
        }
        /**
         * Override this method to handle scenarios of large order number
         *
         * @param WC_Order $order
         *
         * @return int|mixed|string|void
         */
        public function get_order_number($order)
        {
        }
        public function check_if_we_have_tokenized($current_last_four, $get_saved_payment_methods)
        {
        }
        public function _create_token($order)
        {
        }
        public function validate_and_process_customer_id($customer_profile_id, $order, $create_token = \false)
        {
        }
    }
    /**
     * WFOCU_Gateway_Integration_COD class.
     *
     * @extends WFOCU_Gateway
     */
    class WFOCU_Gateway_Integration_COD extends \WFOCU_Gateway
    {
        protected static $ins = \null;
        public $key = 'cod';
        public $token = \false;
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function maybe_setup_upsell_for_cod($order_status, $order)
        {
        }
        /**
         * Try and get the payment token saved by the gateway
         *
         * @param WC_Order $order
         *
         * @return true on success false otherwise
         */
        public function has_token($order)
        {
        }
        public function process_charge($order)
        {
        }
    }
    /**
     *  We have managed to integrate paypal standard with WFOCU.
     * The trick is to fire Paypal Express che  ckout calls and modify the paypal arguments in such a way that further payment processing will be managed by Paypal Express checkout and not standard.
     * We have also integrated SV_API_Base class to fire remote requests
     */
    class WFOCU_Gateway_Integration_PayPal_Standard extends \WFOCU_Gateway
    {
        protected $key = 'paypal';
        protected static $ins = \null;
        /** the production endpoint */
        const PRODUCTION_ENDPOINT = 'https://api-3t.paypal.com/nvp';
        /** the sandbox endpoint */
        const SANDBOX_ENDPOINT = 'https://api-3t.sandbox.paypal.com/nvp';
        /** @var array the request parameters */
        public $parameters = array();
        public $response_params = array();
        /**
         * List of locales supported by PayPal.
         *
         * @var array
         */
        protected $_supported_locales = array('da_DK', 'de_DE', 'en_AU', 'en_GB', 'en_US', 'es_ES', 'fr_CA', 'fr_FR', 'he_IL', 'id_ID', 'it_IT', 'ja_JP', 'nl_NL', 'no_NO', 'pl_PL', 'pt_BR', 'pt_PT', 'ru_RU', 'sv_SE', 'th_TH', 'tr_TR', 'zh_CN', 'zh_HK', 'zh_TW');
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function maybe_check_ref_transaction()
        {
        }
        /**
         * Modify paypal arguments & pass express checkout arguments
         *
         * @param array $args
         * @param WC_Order $order
         *
         * @return array
         */
        public function modify_paypal_args($args, $order)
        {
        }
        /**
         * Get the wc-api URL to redirect to
         *
         * @param string $action checkout action, either `set_express_checkout or `get_express_checkout_details`
         *
         * @return string URL
         * @since 2.0
         */
        public function get_callback_url($action)
        {
        }
        public function has_api_credentials_set()
        {
        }
        /**
         * Sets the prams for setExpressCheckout call and executes it
         *
         * @param array $args
         * @param bool $is_upsell
         *
         * @return object
         * @throws Exception
         */
        public function set_express_checkout($args, $is_upsell = \false)
        {
        }
        /**
         * Get Details about the passed express checkout token
         *
         * @param $token
         *
         * @return object
         * @throws Exception
         */
        public function get_express_checkout_details($token)
        {
        }
        /**
         * Sets up arguments and performs DoExpressCheckout call
         *
         * @param $token
         * @param $order
         * @param $args
         *
         * @return object
         * @throws Exception
         */
        public function do_express_checkout($token, $order, $args)
        {
        }
        /**
         * Sets up arguments and performs DoReferenceTransaction call
         *
         * @param $billing_agreement_id
         * @param $order
         * @param $args
         *
         * @return object
         * @throws Exception
         */
        public function do_reference_transaction($billing_agreement_id, $order, $args)
        {
        }
        /**
         * Sets up GetExpressCheckoutDetails API call arguments
         *
         * @param string $token
         *
         * @see WFOCU_Gateway_Integration_PayPal_Standard::get_express_checkout_details()
         *
         */
        public function get_express_checkout_args($token)
        {
        }
        /**
         * Sets up DoExpressCheckoutPayment API Call arguments
         *
         * @param string $token Unique token of the payment initiated
         * @param WC_Order $order
         * @param array $args
         */
        public function set_do_express_checkout_args($token, $order, $args)
        {
        }
        /**
         * Sets up API credentials to the class that we need later during the API call
         *
         * @param $gateway_id
         * @param $api_environment
         * @param $api_username
         * @param $api_password
         * @param $api_signature
         */
        public function set_api_credentials($gateway_id, $api_environment, $api_username, $api_password, $api_signature)
        {
        }
        /**
         * @hooked over `wc_api_wfocu_paypal`
         * Its a redirect from paypal and contains success
         *
         */
        public function maybe_create_billing()
        {
        }
        /**
         * Handles Payment Gateway API error
         *
         * @param $order
         * @param $e
         */
        protected function handle_api_failures($order, $e = '')
        {
        }
        /**
         * Return the parsed response object for the request
         *
         * @param string $raw_response_body
         *
         * @return object
         * @since 2.2.0
         *
         */
        protected function get_parsed_response($raw_response_body)
        {
        }
        /**
         * Returns the string representation of this request
         *
         * @return string the request query string
         * @see SV_WC_Payment_Gateway_API_Request::to_string()
         * @since 2.0
         */
        public function to_string()
        {
        }
        /**
         * Try and get the payment token saved by the gateway
         *
         * @param WC_Order $order
         *
         * @return true on success false otherwise
         */
        public function has_token($order)
        {
        }
        public function get_token($order)
        {
        }
        public function process_charge($order)
        {
        }
        /**
         * Construct an PayPal Express request object
         *
         * @param string $api_username the API username
         * @param string $api_password the API password
         * @param string $api_signature the API signature
         * @param string $api_version the API version
         *
         * @since 2.0
         */
        public function populate_credentials($api_username, $api_password, $api_signature, $api_version)
        {
        }
        /**
         * Sets up the express checkout transaction
         *
         * @link https://developer.paypal.com/docs/classic/express-checkout/integration-guide/ECGettingStarted/#id084RN060BPF
         * @link https://developer.paypal.com/webapps/developer/docs/classic/api/merchant/SetExpressCheckout_API_Operation_NVP/
         *
         * @param array $args {
         *
         * @type string 'currency'              (Optional) A 3-character currency code (default is store's currency).
         * @type string 'billing_type'          (Optional) Type of billing agreement for reference transactions. You must have permission from PayPal to use this field. This field must be set to one of the following values: MerchantInitiatedBilling - PayPal creates a billing agreement for each transaction associated with buyer. You must specify version 54.0 or higher to use this option; MerchantInitiatedBillingSingleAgreement - PayPal creates a single billing agreement for all transactions associated with buyer. Use this value unless you need per-transaction billing agreements. You must specify version 58.0 or higher to use this option.
         * @type string 'billing_description'   (Optional) Description of goods or services associated with the billing agreement. This field is required for each recurring payment billing agreement if using MerchantInitiatedBilling as the billing type, that means you can use a different agreement for each subscription/order. PayPal recommends that the description contain a brief summary of the billing agreement terms and conditions (but this only makes sense when the billing type is MerchantInitiatedBilling, otherwise the terms will be incorrectly displayed for all agreements). For example, buyer is billed at "9.99 per month for 2 years".
         * @type string 'maximum_amount'        (Optional) The expected maximum total amount of the complete order and future payments, including shipping cost and tax charges. If you pass the expected average transaction amount (default 25.00). PayPal uses this value to validate the buyer's funding source.
         * @type string 'no_shipping'           (Optional) Determines where or not PayPal displays shipping address fields on the PayPal pages. For digital goods, this field is required, and you must set it to 1. It is one of the following values: 0 – PayPal displays the shipping address on the PayPal pages; 1 – PayPal does not display shipping address fields whatsoever (default); 2 – If you do not pass the shipping address, PayPal obtains it from the buyer's account profile.
         * @type string 'page_style'            (Optional) Name of the Custom Payment Page Style for payment pages associated with this button or link. It corresponds to the HTML variable page_style for customizing payment pages. It is the same name as the Page Style Name you chose to add or edit the page style in your PayPal Account profile.
         * @type string 'brand_name'            (Optional) A label that overrides the business name in the PayPal account on the PayPal hosted checkout pages. Default: store name.
         * @type string 'landing_page'          (Optional) Type of PayPal page to display. It is one of the following values: 'login' – PayPal account login (default); 'Billing' – Non-PayPal account.
         * @type string 'payment_action'        (Optional) How you want to obtain payment. If the transaction does not include a one-time purchase, this field is ignored. Default 'Sale' – This is a final sale for which you are requesting payment (default). Alternative: 'Authorization' – This payment is a basic authorization subject to settlement with PayPal Authorization and Capture. You cannot set this field to Sale in SetExpressCheckout request and then change the value to Authorization or Order in the DoExpressCheckoutPayment request. If you set the field to Authorization or Order in SetExpressCheckout, you may set the field to Sale.
         * @type string 'return_url'            (Required) URL to which the buyer's browser is returned after choosing to pay with PayPal.
         * @type string 'cancel_url'            (Required) URL to which the buyer is returned if the buyer does not approve the use of PayPal to pay you.
         * @type string 'custom'                (Optional) A free-form field for up to 256 single-byte alphanumeric characters
         * }
         * @since 2.0
         */
        public function set_express_checkout_args($args, $is_upsell = \false)
        {
        }
        /**
         * Create a billing agreement, required when a subscription sign-up has no initial payment
         *
         * @link https://developer.paypal.com/docs/classic/express-checkout/integration-guide/ECReferenceTxns/#id094TB0Y0J5Z__id094TB4003HS
         * @link https://developer.paypal.com/docs/classic/api/merchant/CreateBillingAgreement_API_Operation_NVP/
         *
         * @param string $token token from SetExpressCheckout response
         *
         * @since 2.0
         */
        public function create_billing_agreement($token)
        {
        }
        /**
         * Charge a payment against a reference token
         *
         * @link https://developer.paypal.com/docs/classic/express-checkout/integration-guide/ECReferenceTxns/#id094UM0DA0HS
         * @link https://developer.paypal.com/docs/classic/api/merchant/DoReferenceTransaction_API_Operation_NVP/
         *
         * @param string $reference_id the ID of a reference object, e.g. billing agreement ID.
         * @param WC_Order $order order object
         * @param array $args {
         *
         * @type string 'payment_type'         (Optional) Specifies type of PayPal payment you require for the billing agreement. It is one of the following values. 'Any' or 'InstantOnly'. Echeck is not supported for DoReferenceTransaction requests.
         * @type string 'payment_action'       How you want to obtain payment. It is one of the following values: 'Authorization' - this payment is a basic authorization subject to settlement with PayPal Authorization and Capture; or 'Sale' - This is a final sale for which you are requesting payment.
         * @type string 'return_fraud_filters' (Optional) Flag to indicate whether you want the results returned by Fraud Management Filters. By default, you do not receive this information.
         * }
         * @since 2.0
         */
        public function do_reference_transaction_args($reference_id, $order, $args = array())
        {
        }
        /**
         * Set up the payment details for a DoExpressCheckoutPayment or DoReferenceTransaction request
         *
         * @param WC_Order $order order object
         * @param string $type the type of transaction for the payment
         * @param bool $use_deprecated_params whether to use deprecated PayPal NVP parameters (required for DoReferenceTransaction API calls)
         *
         * @since 2.0.9
         *
         */
        protected function add_payment_details_parameters(\WC_Order $order, $type, $use_deprecated_params = \false, $is_offer_charge = \false)
        {
        }
        /** Helper Methods ******************************************************/
        /**
         * Add a parameter
         *
         * @param string $key
         * @param string|int $value
         *
         * @since 2.0
         */
        public function add_parameter($key, $value)
        {
        }
        /**
         * Add multiple parameters
         *
         * @param array $params
         *
         * @since 2.0
         */
        public function add_parameters(array $params)
        {
        }
        public function clean_params()
        {
        }
        /**
         * Returns the string representation of this request with any and all
         * sensitive elements masked or removed
         *
         * @return string the pretty-printed request array string representation, safe for logging
         * @see SV_WC_Payment_Gateway_API_Request::to_string_safe()
         * @since 2.0
         */
        public function to_string_safe()
        {
        }
        /**
         * Returns the request parameters after validation & filtering
         *
         * @return array request parameters
         * @throws \Exception invalid amount
         * @since 2.0
         */
        public function get_parameters()
        {
        }
        /**
         * Checks if currency in setting supports 0 decimal places.
         *
         * @return bool Returns true if currency supports 0 decimal places
         * @since 1.2.0
         *
         */
        public function is_currency_supports_zero_decimal()
        {
        }
        /**
         * Get number of digits after the decimal point.
         *
         * @return int Number of digits after the decimal point. Either 2 or 0
         * @since 1.2.0
         *
         */
        public function get_number_of_decimal_digits()
        {
        }
        public function get_value_from_response($response, $key)
        {
        }
        public function get_order_from_response($response)
        {
        }
        public function get_session_from_response($response)
        {
        }
        public function has_api_error($response)
        {
        }
        public function get_api_error($response)
        {
        }
        public function get_transaction_id($response)
        {
        }
        public function is_reference_trans_enabled()
        {
        }
        /************************************** PAYPAL IN_OFFER TRANSACTION STARTS *********************/
        /**
         * Tell the system to run without a token or not
         * @return bool
         */
        public function is_run_without_token()
        {
        }
        public function maybe_render_in_offer_transaction_scripts()
        {
        }
        public function create_express_checkout_token()
        {
        }
        public function allow_paypal_express_check_action($actions)
        {
        }
        /**
         * Get PayPal redirect URL.
         *
         * @param string $token Token
         * @param bool $commit If set to true, 'useraction' parameter will be set
         *                       to 'commit' which makes PayPal sets the button text
         *                       to **Pay Now** ont the PayPal _Review your information_
         *                       page.
         * @param bool $ppc Whether to use PayPal credit.
         *
         * @return string PayPal redirect URL
         */
        public function get_paypal_redirect_url($token, $commit = \false, $ppc = \false)
        {
        }
        public function handle_api_calls()
        {
        }
        public function maybe_add_id_attribute_to_support_inline_paypal($attributes, $iteration = 1)
        {
        }
        /**
         * Get payer ID from API.
         */
        public function get_payer_id()
        {
        }
        public function get_pal_details()
        {
        }
        /**
         * Get locale for PayPal.
         *
         * @return string
         */
        public function get_paypal_locale()
        {
        }
        /********************** PAYPAL IN-OFFER PURCHASE ********************************/
        /**
         * We have to handle PDT as the return url when funnel runs is not checkout/order-received but offer url
         * Hence we need to trigger paypal PDT Handler class so that it could process further.
         */
        public function maybe_handle_pdt()
        {
        }
        /**
         * Conditionally triggers to handle PayPal PDT handler callback conditions
         *
         * @param $status
         *
         * @return array
         * @see WC_Order::needs_payment()
         * @see WC_Gateway_Paypal_PDT_Handler::check_response()
         */
        public function maybe_mark_order_status($status)
        {
        }
        /**
         * @param WC_Order $order
         */
        function maybe_add_shipping_address_params($order, $prefix = 'PAYMENTREQUEST_0_SHIPTO')
        {
        }
        /**
         * Handling refund offer request
         *
         * @param $order
         *
         * @return bool
         */
        public function process_refund_offer($order)
        {
        }
        /**
         * @hooked over woocommerce_paypal_refund_request
         *
         * Changing transaction id in offer refund function to set it of offer transaciton in stead of parent order
         */
        public function maybe_refund_after_ipn($order_id)
        {
        }
        public function wfocu_woocommerce_paypal_refund_request_data($request, $order)
        {
        }
        /**
         *  Creating transaction URL
         *
         * @param $transaction_id
         * @param $order_id
         *
         * @return string
         */
        public function get_transaction_link($transaction_id, $order_id)
        {
        }
        public function maybe_save_pending_emails_meta_to_prevent_mails($order)
        {
        }
        /**
         * Maybe block IPN operations while we are in a running funnel
         * before blocking we must need to verify few things, these are
         * 1. Current IPN request is for the txn_type cart that represents primary checkout
         * 2. IPN comes with completed payment, any other status doesn't need to be care
         * 3. If gateway is enabled
         * 4. If order is same as upstroke funnel order status wc-wfocu-pri-order
         *
         * @param WC_Order $order
         * @param array $posted
         */
        public function handle_ipn($order, $posted)
        {
        }
        public function handle_return_api()
        {
        }
    }
    /**
     * WFOCU_Gateway_Integration_WFOCU_Test class.
     *
     * @extends WFOCU_Gateway
     */
    class WFOCU_Gateway_Integration_WFOCU_Test extends \WFOCU_Gateway
    {
        protected static $ins = \null;
        public $key = 'wfocu_test';
        public $token = \false;
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        /**
         * Try and get the payment token saved by the gateway
         *
         * @param WC_Order $order
         *
         * @return true on success false otherwise
         */
        public function has_token($order)
        {
        }
        /**
         * If this gateway is used in the payment for the primary order that means we can run our funnels and we do not need to check for further enable.
         * @return true
         */
        public function is_enabled($order = \false)
        {
        }
        public function process_charge($order)
        {
        }
        /**
         * Handling refund offer request
         *
         * @param $order
         *
         * @return bool|string
         */
        public function process_refund_offer($order)
        {
        }
    }
    /**
     * WFOCU_Gateway_Integration_Braintree_PayPal class.
     *
     * @extends WFOCU_Gateway
     */
    class WFOCU_Gateway_Integration_Braintree_PayPal extends \WFOCU_Gateway
    {
        protected static $ins = \null;
        public $token = \false;
        public $cc_call_response = \false;
        public $maybe_collect_response = \false;
        public $unset_opaque_value = \false;
        protected $key = 'braintree_paypal';
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function maybe_force_tokenization($is_tokenize)
        {
        }
        /**
         * On the initial order success hook we need to store the response as the class property
         *
         * @param $message
         * @param $order
         * @param $response
         *
         */
        public function maybe_collect_response_paypal($order, $response)
        {
        }
        public function maybe_create_token($order)
        {
        }
        public function process_charge($order)
        {
        }
        /**
         * Determines if the gateway is configured with Braintree Auth or standard
         * API keys.
         *
         * @return bool
         * @since 2.0.0
         *
         */
        protected function is_braintree_auth()
        {
        }
        protected function set_charge_params($order)
        {
        }
        /**
         * Adds pre-orders data to the order object.  Filtered onto SV_WC_Payment_Gateway::get_order()
         *
         * @param WC_Order $order the order
         *
         * @return WC_Order the orders
         * @since 4.1.0
         * @see SV_WC_Payment_Gateway::get_order()
         *
         */
        public function get_order($order)
        {
        }
        /**
         * Try and get the payment token saved by the gateway
         *
         * @param WC_Order $order
         *
         * @return true on success false otherwise
         */
        public function has_token($order)
        {
        }
        protected function get_shipping_address($order)
        {
        }
        protected function set_billing($order)
        {
        }
        protected function set_payment_method($order)
        {
        }
        protected function get_charge_params()
        {
        }
        protected function handle_response($response)
        {
        }
        protected function get_api_message($e)
        {
        }
        public function get_transaction_id($response)
        {
        }
        public function save_transaction_id($order, $transaction_id)
        {
        }
        /**
         * Handling refund offer
         *
         * @param $order
         *
         * @return bool
         */
        public function process_refund_offer($order)
        {
        }
        /**
         *
         * @param $order
         * @param $amnt
         * @param $refund_id
         * @param $offer_id
         * @param $refund_reason
         */
        public function wfocu_add_order_note($order, $amnt, $refund_id, $offer_id, $refund_reason)
        {
        }
        /**
         *  Creating transaction URL
         *
         * @param $transaction_id
         * @param $order_id
         *
         * @return string
         */
        public function get_transaction_link($transaction_id, $order_id)
        {
        }
        public function maybe_modify_paypal_markup($config)
        {
        }
    }
    /**
     * WC_Gateway_Stripe_Addons class.
     *
     * @extends WFOCU_Gateway
     */
    class WFOCU_Gateway_Integration_Stripe extends \WFOCU_Gateway
    {
        protected static $ins = \null;
        public $key = 'stripe';
        public $token = \false;
        public $has_intent_secret = \false;
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function maybe_hide_save_payment($is_show)
        {
        }
        public function should_tokenize_stripe($save_token)
        {
        }
        /**
         * Try and get the payment token saved by the gateway
         *
         * @param WC_Order $order
         *
         * @return true on success false otherwise
         */
        public function has_token($order)
        {
        }
        public function maybe_render_in_offer_transaction_scripts()
        {
        }
        public function allow_check_action($actions)
        {
        }
        public function verify_intent($intent_id)
        {
        }
        public function process_client_payment()
        {
        }
        /**
         * This function is placed here as a fallback function when JS client side integration fails mysteriosly
         * It creates intent and then try to confirm that intent, if successfull then mark success, otherwise failure
         *
         * @param WC_Order $order
         *
         * @return true
         * @throws WFOCU_Payment_Gateway_Exception
         */
        public function process_charge($order)
        {
        }
        public function update_stripe_fees($order, $balance_transaction_id)
        {
        }
        protected function create_intent($order, $prepared_source)
        {
        }
        protected function confirm_intent($intent, $order, $prepared_source)
        {
        }
        /**
         * Generate the request for the payment.
         *
         * @param WC_Order $order
         * @param object $source
         *
         * @return array()
         */
        protected function generate_payment_request($order, $source)
        {
        }
        public function maybe_modify_3ds_prams($threds_data, $order)
        {
        }
        /**
         * Get the wc-api URL to redirect to
         *
         * @param string $action checkout action, either `set_express_checkout or `get_express_checkout_details`
         *
         * @return string URL
         * @since 2.0
         */
        public function get_callback_url($action)
        {
        }
        /**
         * Maybe Handle PayPal Redirection for 3DS Checkout
         * Let our hooks modify the order received url and redirect user to offer page.
         *
         * @param $response
         * @param WC_Order $order
         */
        public function maybe_handle_redirection_stripe($response, $order)
        {
        }
        public function maybe_log_process_redirect()
        {
        }
        /**
         * @param WC_Order $order
         * @param Integer $transaction
         */
        public function add_stripe_payouts_to_new_order($order, $transaction)
        {
        }
        /**
         * Handling refund offer request from admin
         *
         * @throws WC_Stripe_Exception
         */
        public function process_refund_offer($order)
        {
        }
        /**
         * Adding custom note if offer amount is not caputered yet
         *
         * @param $order
         * @param $amnt
         * @param $refund_id
         * @param $offer_id
         * @param $refund_reason
         */
        public function wfocu_add_order_note($order, $amnt, $refund_id, $offer_id, $refund_reason)
        {
        }
        /**
         *  Creating transaction test/URL
         *
         * @param $transaction_id
         * @param $order_id
         *
         * @return string
         */
        public function get_transaction_link($transaction_id, $order_id)
        {
        }
        public function maybe_flag_has_intent_secret($result, $order_id)
        {
        }
        public function modify_successful_payment_result_for_upstroke($result, $order_id)
        {
        }
        /**
         * Get payment source from an order. This could be used in the future for
         * a subscription as an example, therefore using the current user ID would
         * not work - the customer won't be logged in :)
         *
         * Not using 2.6 tokens for this part since we need a customer AND a card
         * token, and not just one.
         *
         * @param object $order
         *
         * @return object
         * @since 3.1.0
         * @version 4.0.0
         */
        public function prepare_order_source($order = \null)
        {
        }
    }
    /**
     * WFOCU_Gateway_Integration_WFOCU_Test class.
     *
     * @extends WFOCU_Gateway
     */
    class WFOCU_Gateway_Integration_Bacs extends \WFOCU_Gateway
    {
        protected static $ins = \null;
        public $key = 'bacs';
        public $token = \false;
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        /**
         * Try and get the payment token saved by the gateway
         *
         * @param WC_Order $order
         *
         * @return true on success false otherwise
         */
        public function has_token($order)
        {
        }
        public function process_charge($order)
        {
        }
    }
    /**
     * WFOCU_Gateway_Integration_Cheque class.
     *
     * @extends WFOCU_Gateway
     */
    class WFOCU_Gateway_Integration_Cheque extends \WFOCU_Gateway
    {
        protected static $ins = \null;
        public $key = 'cheque';
        public $token = \false;
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        /**
         * Try and get the payment token saved by the gateway
         *
         * @param WC_Order $order
         *
         * @return true on success false otherwise
         */
        public function has_token($order)
        {
        }
        public function process_charge($order)
        {
        }
    }
    /**
     * Class WFOCU_Gateway_Integration_Square_Credit_Card
     */
    class WFOCU_Gateway_Integration_Square_Credit_Card extends \WFOCU_Gateway
    {
        protected static $ins = \null;
        public $key = 'square_credit_card';
        public $token = \false;
        public $apiConfig;
        public $access_token = '';
        public $location_id = '';
        public $apiClient = '';
        /**
         * WFOCU_Square_Gateway_Credit_Cards constructor.
         */
        public function __construct()
        {
        }
        /**
         * @return WFOCU_Gateway_Integration_Square_Credit_Card|null
         */
        public static function get_instance()
        {
        }
        /**
         * Try and get the payment token saved by the gateway
         *
         * @param WC_Order $order
         *
         * @return bool|true
         */
        public function has_token($order)
        {
        }
        /**
         * Charging the card for which token is saved.
         *
         * @param WC_Order $order
         *
         * @return true
         */
        public function process_charge($order)
        {
        }
        /**
         * @param WC_Order $order
         * @param $get_offer_id
         *
         * @return array
         */
        public function generate_square_charge($order, $get_offer_id)
        {
        }
        /**
         * Gets the order object with offer payment information added.
         *
         * @param $order
         * @param $get_offer_id
         * @param $get_package
         *
         * @return bool
         */
        public function get_order($order, $get_offer_id, $get_package)
        {
        }
        /**
         * Sets the data for creating a square order.
         *
         * @param WC_Order $order
         * @param $get_offer_id
         * @param $get_package
         *
         * @return array|SquareModel\CreateOrderRequest
         */
        public function wfocu_create_square_order_data(\WC_Order $order, $get_offer_id, $get_package)
        {
        }
        /**
         * Gets Square line item objects for an offer package items.
         *
         * @param WC_Order $order
         * @param $get_offer_id
         * @param $get_package
         *
         * @return SquareModel\OrderLineItem[]
         */
        public function get_product_line_items(\WC_Order $order, $get_offer_id, $get_package)
        {
        }
        /**
         * Gets Square line item objects for an order's fee items.
         *
         * @param WC_Order $order
         * @param $get_offer_id
         * @param $get_package
         *
         * @return array
         */
        public function get_fee_line_items(\WC_Order $order, $get_offer_id, $get_package)
        {
        }
        /**
         * Gets Square line item objects for an order's shipping items.
         *
         * @param WC_Order $order
         * @param $get_offer_id
         * @param $get_package
         *
         * @return array
         */
        public function get_shipping_line_items(\WC_Order $order, $get_offer_id, $get_package)
        {
        }
        /**
         * Gets the tax line items for an order.
         *
         * @param WC_Order $order
         * @param $get_offer_id
         * @param $get_package
         *
         * @return array
         */
        public function get_order_taxes(\WC_Order $order, $get_offer_id, $get_package)
        {
        }
        /**
         * Applies taxes on each Square line item.
         *
         * @param SquareModel\OrderLineItemTax[] $taxes
         * @param $get_offer_id
         * @param SquareModel\OrderLineItem[] $line_items
         */
        public function apply_taxes($taxes, $get_offer_id, $line_items)
        {
        }
        /**
         * @param $order
         * @param $offer_id
         * @param $offer_package
         *
         * @return ChargeRequest
         */
        public function wfocu_get_square_charge_request($order, $offer_id, $offer_package)
        {
        }
        public function wfocu_square_enable_force_tokenization($forced)
        {
        }
        public function add_square_token($process_payment, $order_id, $gateway)
        {
        }
        /**
         * @param $order
         * @param WC_Payment_Gateway $gateway
         *
         * @return mixed
         */
        public function square_get_order($order, $gateway)
        {
        }
        /**
         * Adding this gateway as Subscriptions upsell supported gateway
         *
         * @param $gateways
         *
         * @return array
         */
        public function enable_subscription_upsell_support($gateways)
        {
        }
        /**
         * Adding keys to copy to renewal orders
         *
         * @param $meta_keys
         * @param WC_Order $order
         *
         * @return mixed
         */
        public function set_square_payment_token_keys_to_copy($meta_keys, $order = \null)
        {
        }
        /**
         * @param WC_Subscription $subscription
         * @param $key
         * @param WC_Order $order
         */
        public function save_square_payment_token_to_subscription($subscription, $key, $order)
        {
        }
        /**
         * @param WC_Subscription $subscription
         */
        public function wfcou_square_update_token_in_user_meta($subscription)
        {
        }
        public function set_square_gateway_config()
        {
        }
    }
    /**
     * READ THIS
     * For the Paypal Express Checkout we just need to manually store the BILLINGAGREEMENTID in the order meta
     * Refer to this artical for API calls https://www.paypal.com/us/selfhelp/article/how-do-i-use-express-checkout-with-reference-transactions-ts1502/3?channel=MTS
     * Probably we can contact the team and ask for the support
     */
    class WFOCU_Gateway_Integration_Paypal_Express_Checkout extends \WFOCU_Gateway
    {
        protected static $ins = \null;
        protected $key = 'ppec_paypal';
        public $parameters;
        /**
         * List of locales supported by PayPal.
         *
         * @var array
         */
        protected $_supported_locales = array('da_DK', 'de_DE', 'en_AU', 'en_GB', 'en_US', 'es_ES', 'fr_CA', 'fr_FR', 'he_IL', 'id_ID', 'it_IT', 'ja_JP', 'nl_NL', 'no_NO', 'pl_PL', 'pt_BR', 'pt_PT', 'ru_RU', 'sv_SE', 'th_TH', 'tr_TR', 'zh_CN', 'zh_HK', 'zh_TW');
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function maybe_modify_paypal_arguments($array)
        {
        }
        public function is_reference_trans_enabled()
        {
        }
        /**
         * Get billing agreement description to be passed to PayPal.
         *
         * @return string Billing agreement description
         * @since 1.2.0
         *
         */
        protected function _get_billing_agreement_description()
        {
        }
        public function remove_previous_line_items($array)
        {
        }
        /**
         * Try and get the payment token saved by the gateway
         *
         * @param WC_Order $order
         *
         * @return true on success false otherwise
         */
        public function has_token($order)
        {
        }
        public function process_charge($order)
        {
        }
        public function get_token($order)
        {
        }
        /************************************** PAYPAL IN_OFFER TRANSACTION STARTS *********************/
        /** Helper Methods ******************************************************/
        /**
         * Returns the string representation of this request with any and all
         * sensitive elements masked or removed
         *
         * @return string the pretty-printed request array string representation, safe for logging
         * @see SV_WC_Payment_Gateway_API_Request::to_string_safe()
         * @since 2.0
         */
        public function to_string_safe()
        {
        }
        /**
         * Returns the request parameters after validation & filtering
         *
         * @return array request parameters
         * @throws \Exception invalid amount
         * @since 2.0
         */
        public function get_parameters()
        {
        }
        public function get_order_from_response($response)
        {
        }
        public function get_session_from_response($response)
        {
        }
        public function is_run_without_token()
        {
        }
        public function maybe_render_in_offer_transaction_scripts()
        {
        }
        /**
         * Get payer ID from API.
         */
        public function get_payer_id()
        {
        }
        /**
         * Get locale for PayPal.
         *
         * @return string
         */
        public function get_paypal_locale()
        {
        }
        public function create_express_checkout_token()
        {
        }
        /**
         * Sets the prams for setExpressCheckout call and executes it
         *
         * @param array $args
         *
         * @return object
         * @throws Exception
         */
        public function set_express_checkout($args)
        {
        }
        /**
         * Sets up API credentials to the class that we need later during the API call
         *
         * @param $gateway_id
         * @param $api_environment
         * @param $api_username
         * @param $api_password
         * @param $api_signature
         */
        public function set_api_credentials($gateway_id, $api_environment = '', $api_username, $api_password, $api_signature)
        {
        }
        /**
         * Sets up the express checkout transaction
         *
         * @link https://developer.paypal.com/docs/classic/express-checkout/integration-guide/ECGettingStarted/#id084RN060BPF
         * @link https://developer.paypal.com/webapps/developer/docs/classic/api/merchant/SetExpressCheckout_API_Operation_NVP/
         *
         * @param array $args {
         *
         * @type string 'currency'              (Optional) A 3-character currency code (default is store's currency).
         * @type string 'billing_type'          (Optional) Type of billing agreement for reference transactions. You must have permission from PayPal to use this field. This field must be set to one of the following values: MerchantInitiatedBilling - PayPal creates a billing agreement for each transaction associated with buyer. You must specify version 54.0 or higher to use this option; MerchantInitiatedBillingSingleAgreement - PayPal creates a single billing agreement for all transactions associated with buyer. Use this value unless you need per-transaction billing agreements. You must specify version 58.0 or higher to use this option.
         * @type string 'billing_description'   (Optional) Description of goods or services associated with the billing agreement. This field is required for each recurring payment billing agreement if using MerchantInitiatedBilling as the billing type, that means you can use a different agreement for each subscription/order. PayPal recommends that the description contain a brief summary of the billing agreement terms and conditions (but this only makes sense when the billing type is MerchantInitiatedBilling, otherwise the terms will be incorrectly displayed for all agreements). For example, buyer is billed at "9.99 per month for 2 years".
         * @type string 'maximum_amount'        (Optional) The expected maximum total amount of the complete order and future payments, including shipping cost and tax charges. If you pass the expected average transaction amount (default 25.00). PayPal uses this value to validate the buyer's funding source.
         * @type string 'no_shipping'           (Optional) Determines where or not PayPal displays shipping address fields on the PayPal pages. For digital goods, this field is required, and you must set it to 1. It is one of the following values: 0 – PayPal displays the shipping address on the PayPal pages; 1 – PayPal does not display shipping address fields whatsoever (default); 2 – If you do not pass the shipping address, PayPal obtains it from the buyer's account profile.
         * @type string 'page_style'            (Optional) Name of the Custom Payment Page Style for payment pages associated with this button or link. It corresponds to the HTML variable page_style for customizing payment pages. It is the same name as the Page Style Name you chose to add or edit the page style in your PayPal Account profile.
         * @type string 'brand_name'            (Optional) A label that overrides the business name in the PayPal account on the PayPal hosted checkout pages. Default: store name.
         * @type string 'landing_page'          (Optional) Type of PayPal page to display. It is one of the following values: 'login' – PayPal account login (default); 'Billing' – Non-PayPal account.
         * @type string 'payment_action'        (Optional) How you want to obtain payment. If the transaction does not include a one-time purchase, this field is ignored. Default 'Sale' – This is a final sale for which you are requesting payment (default). Alternative: 'Authorization' – This payment is a basic authorization subject to settlement with PayPal Authorization and Capture. You cannot set this field to Sale in SetExpressCheckout request and then change the value to Authorization or Order in the DoExpressCheckoutPayment request. If you set the field to Authorization or Order in SetExpressCheckout, you may set the field to Sale.
         * @type string 'return_url'            (Required) URL to which the buyer's browser is returned after choosing to pay with PayPal.
         * @type string 'cancel_url'            (Required) URL to which the buyer is returned if the buyer does not approve the use of PayPal to pay you.
         * @type string 'custom'                (Optional) A free-form field for up to 256 single-byte alphanumeric characters
         * }
         * @since 2.0
         */
        public function set_express_checkout_args($args)
        {
        }
        /**
         * Set the method for the request, currently using:
         *
         * + `SetExpressCheckout` - setup transaction
         * + `GetExpressCheckout` - gets buyers info from PayPal
         * + `DoExpressCheckoutPayment` - completes the transaction
         * + `DoCapture` - captures a previously authorized transaction
         *
         * @param string $method
         *
         * @since 2.0
         */
        public function set_method($method)
        {
        }
        /**
         * Add a parameter
         *
         * @param string $key
         * @param string|int $value
         *
         * @since 2.0
         */
        public function add_parameter($key, $value)
        {
        }
        /**
         * Add multiple parameters
         *
         * @param array $params
         *
         * @since 2.0
         */
        public function add_parameters(array $params)
        {
        }
        /**
         * Set up the payment details for a DoExpressCheckoutPayment or DoReferenceTransaction request
         *
         * @param WC_Order $order order object
         * @param string $type the type of transaction for the payment
         * @param bool $use_deprecated_params whether to use deprecated PayPal NVP parameters (required for DoReferenceTransaction API calls)
         *
         * @since 2.0.9
         *
         */
        protected function add_payment_details_parameters(\WC_Order $order, $type, $use_deprecated_params = \false)
        {
        }
        public function clean_params()
        {
        }
        /**
         * Construct an PayPal Express request object
         *
         * @param string $api_username the API username
         * @param string $api_password the API password
         * @param string $api_signature the API signature
         * @param string $api_version the API version
         *
         * @since 2.0
         */
        public function populate_credentials($api_username, $api_password, $api_signature, $api_version)
        {
        }
        /**
         * Returns the string representation of this request
         *
         * @return string the request query string
         * @see SV_WC_Payment_Gateway_API_Request::to_string()
         * @since 2.0
         */
        public function to_string()
        {
        }
        /**
         * Get the wc-api URL to redirect to
         *
         * @param string $action checkout action, either `set_express_checkout or `get_express_checkout_details`
         *
         * @return string URL
         * @since 2.0
         */
        public function get_callback_url($action)
        {
        }
        public function allow_paypal_express_check_action($actions)
        {
        }
        public function handle_api_calls()
        {
        }
        /**
         * Get Details about the passed express checkout token
         *
         * @param $token
         *
         * @return object
         * @throws Exception
         */
        public function get_express_checkout_details($token)
        {
        }
        /**
         * Sets up GetExpressCheckoutDetails API call arguments
         *
         * @param string $token
         *
         * @see WFOCU_Gateway_Integration_PayPal_Standard::get_express_checkout_details()
         *
         */
        public function get_express_checkout_args($token)
        {
        }
        public function has_api_error($response)
        {
        }
        public function get_value_from_response($response, $key)
        {
        }
        public function get_transaction_id($response)
        {
        }
        public function maybe_add_id_attribute_to_support_inline_paypal($attributes, $iteration = 1)
        {
        }
        /**
         * Handling refund offer exceptions
         *
         * @param $order
         *
         * @return bool
         */
        public function process_refund_offer($order)
        {
        }
        /********************** PAYPAL IN-OFFER PURCHASE ********************************/
        /**
         * @hooked over woocommerce_paypal_refund_request
         *
         * Changing transaction id in offer refund function to set it of offer transaciton in stead of parent order
         */
        public function wfocu_woocommerce_paypal_refund_request_data($request, $order, $amount)
        {
        }
        /**
         *  Creating transaction URL
         *
         * @param $transaction_id
         * @param $order_id
         *
         * @return string
         */
        public function get_transaction_link($transaction_id, $order_id)
        {
        }
        /**
         * Return the parsed response object for the request
         *
         * @param string $raw_response_body
         *
         * @return object
         * @since 2.2.0
         *
         */
        protected function get_parsed_response($raw_response_body)
        {
        }
        /**
         * @param WC_Order $order
         */
        function maybe_add_shipping_address_params($order, $prefix = 'PAYMENTREQUEST_0_SHIPTO')
        {
        }
        /**
         *
         * @param $url
         * @param WC_Order $order
         *
         * @return mixed
         */
        function maybe_init_funnel_and_redirect_to_offer($url, $order)
        {
        }
        /**
         *
         * @param WC_Order $order
         */
        public function set_primary_status($order)
        {
        }
        public function get_api_error($response)
        {
        }
        /**
         * Maybe block IPN operations while we are in a running funnel
         * before blocking we must need to verify few things, these are
         * 1. Current IPN request is for the txn_type cart that represents primary checkout
         * 2. IPN comes with completed payment, any other status doesn't need to be care
         * 3. If gateway is enabled
         * 4. If order contains funnel_id as meta to ensure that upstroke funnel ran/running on this order
         *
         * @param WC_Order $order
         * @param array $posted
         */
        public function handle_ipn($order, $posted)
        {
        }
    }
    /**
     * WFOCU_Gateway_Integration_Braintree_CC class.
     *
     * @extends WFOCU_Gateway
     */
    class WFOCU_Gateway_Integration_Braintree_CC extends \WFOCU_Gateway
    {
        protected static $ins = \null;
        public $token = \false;
        public $cc_call_response = \false;
        public $maybe_collect_response = \false;
        public $unset_opaque_value = \false;
        protected $key = 'braintree_credit_card';
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function maybe_force_tokenization($is_tokenize)
        {
        }
        /**
         * On the initial order success hook we need to store the response as the class property
         *
         * @param $message
         * @param $order
         * @param $response
         *
         */
        public function maybe_collect_response($message, $order, $response)
        {
        }
        public function maybe_create_token($order)
        {
        }
        public function process_charge($order)
        {
        }
        /**
         * Determines if the gateway is configured with Braintree Auth or standard
         * API keys.
         *
         * @return bool
         * @since 2.0.0
         *
         */
        protected function is_braintree_auth()
        {
        }
        protected function set_charge_params($order)
        {
        }
        public function get_token($order)
        {
        }
        /**
         * Try and get the payment token saved by the gateway
         *
         * @param WC_Order $order
         *
         * @return true on success false otherwise
         */
        public function has_token($order)
        {
        }
        protected function get_shipping_address($order)
        {
        }
        protected function set_billing($order)
        {
        }
        protected function set_payment_method($order, $package)
        {
        }
        protected function get_charge_params()
        {
        }
        public function transaction_approved($response)
        {
        }
        /**
         * Get the success status info for the given parameter, either code or message
         *
         * @param string $type status info type, either `code` or `message`
         *
         * @return string
         * @since 3.0.0
         */
        public function get_failure_message($response)
        {
        }
        /**
         * Get the success status info for the given parameter, either code or message
         *
         * @param string $type status info type, either `code` or `message`
         *
         * @return string
         * @since 3.0.0
         */
        public function get_failure_code($response)
        {
        }
        protected function get_api_message($e)
        {
        }
        public function get_transaction_id($response)
        {
        }
        public function save_transaction_id($order, $transaction_id)
        {
        }
        /**
         * Handling refund offer
         *
         * @param $order
         *
         * @return bool
         */
        public function process_refund_offer($order)
        {
        }
        /**
         *
         * @param $order
         * @param $amnt
         * @param $refund_id
         * @param $offer_id
         * @param $refund_reason
         */
        public function wfocu_add_order_note($order, $amnt, $refund_id, $offer_id, $refund_reason)
        {
        }
        /**
         *  Creating transaction URL
         *
         * @param $transaction_id
         * @param $order_id
         *
         * @return string
         */
        public function get_transaction_link($transaction_id, $order_id)
        {
        }
        /**
         * For the JavaScript API to process clean we need to first fetch the new nonce from the API by passing the token we have
         * Now we going to fire API calls and if succeded we localie the nonce to use further on JavaScript
         *
         * @param array $localized_data
         *
         * @return array modified localized array
         */
        public function get_nonce_from_token($localized_data)
        {
        }
        /**
         * Adds pre-orders data to the order object.  Filtered onto SV_WC_Payment_Gateway::get_order()
         *
         * @param WC_Order $order the order
         *
         * @return WC_Order the orders
         * @since 4.1.0
         * @see SV_WC_Payment_Gateway::get_order()
         *
         */
        public function get_order($order)
        {
        }
        /**
         * Render client side script for better payment flows
         */
        public function maybe_render_in_offer_transaction_scripts()
        {
        }
        /**
         * Adds nonce from the post and save it in the package
         *
         * @param array $package
         *
         * @return array
         */
        public function maybe_add_3ds_nonce_in_package($package)
        {
        }
        public function handle_client_error()
        {
        }
    }
    /**
     * WC Dependency Checker
     * Checks if WooCommerce is enabled
     */
    class WFOCU_WC_Dependencies
    {
        public static function init()
        {
        }
        public static function woocommerce_active_check()
        {
        }
    }
    /**
     * Handles the operations and usage of gateways in the one click upsell
     * Class WFOCU_Gateways
     */
    class WFOCU_Gateways
    {
        /**
         * @var WFOCU_Gateways[]
         */
        public $integrations = array();
        public $gateway_dir_path = '/gateways/';
        public $class_prefix = 'WFOCU_Gateway_Integration_';
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function maybe_handle_paypal_api_call()
        {
        }
        /**
         * @param string $wc_payment_gateway gateway key in woocommerce
         *
         * @return bool|WFOCU_Gateway
         */
        public function get_integration($wc_payment_gateway)
        {
        }
        public function get_supported_gateways()
        {
        }
        /**
         * @param $class_name
         *
         * @return Mixed|WFOCU_Gateway
         */
        public function get_integration_object($class_name)
        {
        }
        public function maybe_handle_paypal_ppec_api_call()
        {
        }
        public function maybe_handle_paypal_return_api_call()
        {
        }
        /**
         * Auto-loading the payment classes as they called.
         *
         * @param $class_name
         */
        public function integration_autoload($class_name)
        {
        }
        /**
         * @param $available_gateways
         *
         * @return mixed
         */
        public function load_gateway_integrations()
        {
        }
        public function maybe_add_test_payment_gateway($gateways)
        {
        }
        /**
         * @hooked over 'wfocu_common_default_options'
         * Handles few edge cases when we need to unset gateway in case user has it all unchecked/unavailable
         *
         * @param $options Options from Default values
         * @param $options_raw Options from Database
         *
         * @return mixed
         */
        public function maybe_unset_default_values($options, $options_raw)
        {
        }
        public function add_default_gateways_enable($defaults)
        {
        }
        /**
         * Get the Gateway list with nice names
         * @return array
         */
        public function get_gateways_list()
        {
        }
        public function create_express_checkout_token()
        {
        }
        public function create_express_checkout_token_ppec()
        {
        }
        public function handle_stripe_payments()
        {
        }
        public function filter_values_gateways($settings)
        {
        }
        /**
         * Save important data from the IPN to the order.
         *
         * @param array $posted Posted data.
         * @param WC_Order $order Order object.
         */
        public function save_paypal_meta_data($posted, $order)
        {
        }
        /**
         * There was a valid response.
         *
         * @param array $posted Post data after wp_unslash.
         */
        public function handle_paypal_ipn_and_record_response($posted)
        {
        }
        /**
         * @param $status
         * @param WC_Order $order
         */
        public function replace_recorded_status_with_ipn_response($status, $order)
        {
        }
        public function modify_paypal_ipn_hold_status($order)
        {
        }
    }
    /**
     * @author XLPlugins
     */
    class WFOCU_Rules
    {
        public $is_executing_rule = \false;
        public $environments = array();
        public $excluded_rules = array();
        public $excluded_rules_categories = array();
        public $processed = array();
        public $record = array();
        public $skipped = array();
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        /**
         * Match the rules groups based on the environment its called on
         * Iterate over the setof rules set against each offer and validates for the rules set
         * Now this function also powered in a way that it can hold some rule for the next environment to run on
         *
         * @param $content_id Id of the funnel
         * @param string $environment environment this function called on
         *
         * @return bool|mixed|void
         */
        public function match_groups($content_id, $environment = 'cart')
        {
        }
        public function set_environment_var($key = 'order', $value = '')
        {
        }
        protected function _validate_rule_block($groups_category, $type, $environment)
        {
        }
        /**
         * Creates an instance of a rule object
         *
         * @param type $rule_type The slug of the rule type to load.
         *
         * @return wfocu_Rule_Base or superclass of wfocu_Rule_Base
         * @global array $woocommerce_wfocu_rule_rules
         *
         */
        public function woocommerce_wfocu_rule_get_rule_object($rule_type)
        {
        }
        /**
         * Validates and group whole block
         *
         * @param $groups
         * @param $environment
         *
         * @return bool
         */
        protected function _validate($groups, $environment)
        {
        }
        public function find_match()
        {
        }
        public function get_processed_rules()
        {
        }
        public function sustain_results()
        {
        }
        public function load_rules_classes()
        {
        }
        public function default_rule_types($types)
        {
        }
        public function rule_types_product($types)
        {
        }
        public function reset_skipped($result)
        {
        }
        public function get_environment_var($key = 'order')
        {
        }
        public function render_rules()
        {
        }
        public function rule_views_path()
        {
        }
        public function add_rule_tab($menu)
        {
        }
        protected function _push_to_skipped($rule)
        {
        }
    }
    class WFOCU_Template_Importer
    {
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function maybe_import_data($template_group, $template, $offer, $offer_settings)
        {
        }
    }
    /**
     * Create,show,delete,edit and manages the process related to offers in the plugin.
     * Class WFOCU_Offers
     */
    class WFOCU_Orders
    {
        public $initial_order_status = 'pending';
        public $gatways_do_not_support_payment_complete = array('bacs', 'cheque', 'cod');
        public $order_table_rendered = \false;
        public $is_shortcode_output = \false;
        public $item_shipping_batch = 0;
        public $temp;
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        /**
         * Handle a custom 'customvar' query var to get orders with the 'customvar' meta.
         *
         * @param array $query - Args for WP_Query.
         * @param array $query_vars - Query vars from WC_Order_Query.
         *
         * @return array modified $query
         */
        public function handle_custom_query_var($query, $query_vars)
        {
        }
        /**
         * @hooked into `woocommerce_register_shop_order_post_statuses`
         *
         * @param $status
         *
         * @return mixed
         */
        public function register_order_status($status)
        {
        }
        /**
         * @hooked into `wc_order_statuses`
         *
         * @param $status
         *
         * @return mixed
         */
        public function order_statuses($status)
        {
        }
        /**
         * @hooked into `wfocu_front_init_funnel_hooks`
         * Register filter to modify payment_complete_order_status to our custom status
         * WC_Order @param $order
         */
        public function register_order_status_to_primary_order($order)
        {
        }
        /**
         * @hooked into `woocommerce_payment_complete_order_status`
         *
         * @param string $status
         * @param string $id
         * @param WC_Order $order
         *
         * @return string
         */
        public function maybe_set_completed_order_status($status, $id, $order)
        {
        }
        /**
         * @hooked into `wfocu_funnel_ended_event`
         *
         * @param $funnel_id
         * @param $funnel_key
         * @param int $order_id
         *
         * @see WFOCU_Orders::normalize_order_statuses()
         *
         */
        public function maybe_normalize_order_statuses($funnel_id, $order_id)
        {
        }
        /**
         * @hooked into cron action `wfocu_schedule_normalize_order_statuses`
         * Checks for the order status and if the order status is `wc-wfocu-pri-order`
         * Switch the status to the valid one
         *
         * @param int $order_id order id in the process
         * @param string $order_status order status to move order to
         * @param string $initial_status order status as bridge status to move order to initial_status and then successful one
         *
         * @see WFOCU_Orders::maybe_normalize_order_statuses()
         *
         */
        public function normalize_order_statuses($order_id, $order_status, $initial_status = 'pending')
        {
        }
        public function maybe_handle_cron_normalize_stasuses()
        {
        }
        public function maybe_execute_thankyou_hook()
        {
        }
        /**
         * Adding product to the order
         *
         * @param $package
         * @param WC_Order $order
         */
        public function add_products_to_order($package, $order)
        {
        }
        /**
         *
         * @param $get_package
         * @param WC_Order $order
         */
        public function set_total($get_package, $order)
        {
        }
        /**
         *
         * @param $get_package
         * @param WC_Order $order
         */
        public function maybe_handle_shipping($get_package, $order)
        {
        }
        /**
         *
         * @param array $package
         * @param WC_Order $parent
         * @param WC_Order $new
         */
        public function maybe_handle_shipping_new_order($package, $parent, $new)
        {
        }
        /**
         * @param array $args
         * @param WC_Order $order_to_inherit
         *
         * @return WC_Order
         */
        public function create_new_order($args = array(), $order_to_inherit)
        {
        }
        public function get_default_order_args()
        {
        }
        /**
         * @param array $args
         * @param $order_to_inherit
         *
         * @return bool|WC_Order|WP_Error
         */
        public function create_failed_order($args = array(), $order_to_inherit)
        {
        }
        /**
         * Controller of WC_Order::payment_complete() & reduction of stock for non completed gateways
         * We need to restrict payment_complete function to run for the not supported gateways
         *
         * @param $transaction_id
         * @param WC_Order $order
         */
        public function payment_complete($transaction_id, $order)
        {
        }
        public function process_cancellation()
        {
        }
        /**
         * Controller of stock reduction after an order
         *
         * @param WC_Order $order
         */
        public function reduce_stock($order, $items = array())
        {
        }
        public function maybe_show_related_orders($template_name, $template_path, $located, $args)
        {
        }
        /**
         * @hooked over `woocommerce_payment_complete_order_status_wfocu-pri-order`
         * Record attempt for payment complete in the meta
         *
         * @param $order_id
         */
        public function maybe_record_payment_complete_during_funnel_run($order_id)
        {
        }
        /**
         * @hooked over `wfocu_after_normalize_order_status`
         * Perform action to let other plugin know that payment is completed for the given order
         *
         * @param $order
         */
        public function maybe_run_payment_complete_actions($order)
        {
        }
        public function maybe_show_order_details($atts)
        {
        }
        /**
         * While we are transitioning order stasuses in case batching then there would be no case we want to increase stock
         * Unhooking woocommerce functions wc_maybe_increase_stock_levels() so escape any chances to increase stock in case of pending status.
         */
        public function maybe_detach_increase_stock()
        {
        }
        public function mark_order_as_thankyou_visited($order_id)
        {
        }
        public function maybe_set_funnel_running_status($order)
        {
        }
        public function maybe_add_shipping_item_id_as_meta($event)
        {
        }
        public function maybe_add_ashipping_item_taxes($item)
        {
        }
    }
    /**
     * Class contains all the methods & processes that belongs to the funnels/funnel
     * All the operations for the Funnels should be written here
     * Class WFOCU_Funnels
     */
    class WFOCU_Funnels
    {
        /**
         * WFOCU_Funnels constructor.
         */
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function validate()
        {
        }
        /**
         * This method fires WP query and tries to get all the activated funnels
         * After fetching funnel from the db/cache , performs `product` rule operations
         *
         * @param bool $force decides whether to take saved cache into account or not
         *
         * @return array|bool|mixed returns a bunch of funnels that will further take part in deciding the ultimate funnel
         */
        public function setup_funnels($force = \false)
        {
        }
        public function get_funnel_offers_admin($funnel_id = 0)
        {
        }
        public function get_funnel_steps($funnel_id)
        {
        }
        public function get_offers($funnel_id = 0)
        {
        }
        public function get_funnel_upsell_downsell($funnel_id)
        {
        }
        public function get_funnel_products($funnel_id)
        {
        }
        public function update_funnel_products($funnel_id, $data)
        {
        }
        public function save_funnel_options($funnel_id, $data)
        {
        }
        public function get_funnel_default_settings()
        {
        }
        public function save_funnel_priority($funnel_id, $priority = '0')
        {
        }
        public function exclude_static_rules()
        {
        }
        public function clear_exclusions()
        {
        }
        /**
         * hooked over `before_delete_post`
         * Checks if we have funnel to delete, then delete all the offers and associated options as well
         *
         * @param $post_id current post id
         */
        public function delete_funnel_permanently($post_id)
        {
        }
        public function show_prices_including_tax($data = array(), $key = '')
        {
        }
        public function get_funnel_option($key = '')
        {
        }
        public function maybe_set_funnel_on_customizer()
        {
        }
        public function setup_funnel_options($funnel_id = '')
        {
        }
        public function get_funnel_id()
        {
        }
        public function set_funnel_id($funnel_id)
        {
        }
        public function maybe_set_funnel_from_offer($id)
        {
        }
        /**
         * Generate default posts on license activation once from the wizard
         */
        public function create_default_funnels()
        {
        }
        public function generate_preset_funnel_data($data = [])
        {
        }
        public function clear_cache($offer_id_new)
        {
        }
        public function get_default_funnel_schema()
        {
        }
        public function wp_parse_args($args, $defaults = '')
        {
        }
        public function prepare_upsell_downsells($steps)
        {
        }
        /**
         * Finding the next upsell in the funnel for the respective index.
         * We iterate over all the steps and try to find the next possible enables upsell offer.
         *
         * @param $steps
         * @param $key
         *
         * @return int
         */
        public function get_next_upsell($steps, $key)
        {
        }
        public function get_next_downsell($steps, $key)
        {
        }
    }
    class WFOCU_Shipping
    {
        public $calculate_shipping = \false;
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        /**
         * @param stdClass $product_details
         * @param stdClass $output
         * @param stdClass $offer_data
         * @param bool $is_front
         *
         * @return mixed
         */
        public function maybe_calculate_shipping($product_details, $output, $offer_data, $is_front)
        {
        }
        public function get_flat_shipping_rates($price)
        {
        }
        public function is_free_shipping($method)
        {
        }
        public function maybe_get_shipping_id()
        {
        }
        public function get_shipping_cost_from_package($package, $incl_tax = \false)
        {
        }
    }
    /**
     * Class WFOCU_Payment_Gateway_Exception handles exceptions thrown by the gateway integration class
     */
    class WFOCU_Payment_Gateway_Exception extends \Exception
    {
        /**
         * WFOCU_Payment_Gateway_Exception constructor.
         * Initiates the Exception
         *
         * @param $error_message message to be thrown
         * @param $error_code Error code associated with the exception
         * @param string $gateway gateway ID inside the exception thrown
         */
        public function __construct($error_message, $error_code, $gateway = '')
        {
        }
    }
    /**
     * WFOCU Test Gateway.
     *
     * Provides a Test gateway to test woofunnel's funnels.
     *
     * @class        WC_Gateway_WFOCU_Test
     * @extends        WC_Payment_Gateway
     */
    class WC_Gateway_WFOCU_Test extends \WC_Payment_Gateway
    {
        /**
         * Constructor for the gateway.
         */
        public function __construct()
        {
        }
        /**
         * Setup general properties for the gateway.
         */
        protected function setup_properties()
        {
        }
        /**
         * Initialise Gateway Settings Form Fields.
         */
        public function init_form_fields()
        {
        }
        /**
         * Init settings for gateways.
         */
        public function init_settings()
        {
        }
        /**
         * Check If The Gateway Is Available For Use.
         *
         * @return bool
         */
        public function is_available()
        {
        }
        /**
         * Process the payment and return the result.
         *
         * @param int $order_id
         *
         * @return array
         */
        public function process_payment($order_id)
        {
        }
        public function process_renewal_payment($subscription, $order)
        {
        }
        public function process_refund($order_id, $amount = \null, $reason = '')
        {
        }
    }
    class WFOCU_Customizer
    {
        public $orders;
        public $offer_id = 0;
        protected $offer_data = 0;
        public function __construct()
        {
        }
        public function maybe_load_customizer()
        {
        }
        public function customize_hooks()
        {
        }
        public static function get_type()
        {
        }
        public static function get_instance()
        {
        }
        /**
         * Locate Template using offer meta data also setup data
         *
         * @param $offer_data
         *
         * @return mixed|null
         */
        public function load_template($offer_data)
        {
        }
        /**
         * Remove any unwanted default controls.
         *
         * @param WP_Customize_Manager $wp_customize
         *
         * @return bool
         */
        public function remove_sections($wp_customize)
        {
        }
        /**
         * Depreciated - Storefront calling settings direct
         * Removes the core 'Widgets' or 'Menus' panel from the Customizer.
         *
         * @param array $components Core Customizer components list.
         *
         * @return array (Maybe) modified components list.
         */
        public function remove_extra_panels($components)
        {
        }
        /**
         * Depreciated - Storefront calling settings direct
         * Remove any unwanted default panels.
         *
         * @param object $wp_customize
         *
         * @return bool
         */
        public function remove_panels($wp_customize)
        {
        }
        public function control_filter($active, $control)
        {
        }
        public function maybe_remove_script_customizer()
        {
        }
        public function enqueue_scripts()
        {
        }
        public function customizer_js()
        {
        }
        public function add_sections($wp_customize)
        {
        }
        public function add_sections1($wp_customize)
        {
        }
        public function save($value, $WP_Customize_Setting)
        {
        }
        public function setup_preview()
        {
        }
        public function offer_confirmation_html()
        {
        }
        public function add_offer_confirmation_setting($customizer_data)
        {
        }
        /**
         * @return null
         */
        public function get_template_instance()
        {
        }
        public function maybe_update_customize_save()
        {
        }
        public function mark_changsets_as_dismissed($post_id, $post)
        {
        }
        public function dequeue_unnecessary_customizer_scripts()
        {
        }
        public function customizer_product_check()
        {
        }
        public function setup_offer_for_wfocukirki()
        {
        }
        public function wfocu_wfocukirki_configuration($path)
        {
        }
        public function wfocu_wfocukirki_fields()
        {
        }
        public function maybe_add_customizer_multiple_templates($customizer_templates)
        {
        }
    }
    class WFOCU_WFOCUKirki
    {
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
    }
    /**
     * Class WFOCU_AJAX_Controller
     * Handles All the request came from front end or the backend
     */
    class WFOCU_AJAX_Controller
    {
        const CHARGE_ACTION = 'wfocu_front_charge';
        const SHIPPING_CALCULATION_ACTION = 'wfocu_front_calculate_shipping';
        public static function init()
        {
        }
        public static function handle_admin_ajax()
        {
        }
        public static function handle_offer_skipped()
        {
        }
        public static function offer_expired()
        {
        }
        public static function handle_charge()
        {
        }
        /**
         * perform checks to validate if all the hashes that came in the charge call belongs to the current running offer and funnel
         *
         * @param $posted_data
         *
         * @return bool
         */
        public static function validate_charge_request($posted_data)
        {
        }
        public static function add_funnel()
        {
        }
        public static function add_offer()
        {
        }
        public static function save_funnel_offer_settings()
        {
        }
        public static function save_funnel_steps()
        {
        }
        public static function save_funnel_offer_products()
        {
        }
        public static function product_search($term = \false)
        {
        }
        public static function add_product()
        {
        }
        public static function remove_product()
        {
        }
        public static function update_offer()
        {
        }
        public static function update_funnel()
        {
        }
        public static function removed_offer_from_funnel()
        {
        }
        public static function update_rules()
        {
        }
        /**
         * @hooked over `wp_ajax_wfocu_calculate_shipping`
         * When user accepts upsell and clicks on "add to my order" button, we check & calculate shipping for the current bucket
         */
        public static function calculate_shipping()
        {
        }
        /**
         * Register product and offer views
         */
        public static function register_views()
        {
        }
        public static function page_search()
        {
        }
        public static function get_custom_page()
        {
        }
        public static function update_template()
        {
        }
        public static function maybe_activate_plugin($builder)
        {
        }
        public static function save_funnel_settings()
        {
        }
        public static function save_global_settings()
        {
        }
        public static function preview_details()
        {
        }
        public static function duplicate_funnel()
        {
        }
        /**
         * @param $funnel_id
         * @param $resp
         *
         * @return mixed
         */
        public static function duplicating_funnel($funnel_id, $resp)
        {
        }
        /**
         * @param $funnel_id
         * @param $new_funnel_id
         * @param $resp
         *
         * @return mixed
         */
        public static function duplicate_offers($funnel_id, $new_funnel_id, $resp)
        {
        }
        //Duplicating a funnel ajax function
        public static function toggle_funnel_state()
        {
        }
        /**
         * Maybe hide php errors from coming to the page in woocommerce ajax on live environments
         */
        public static function maybe_set_error_reporting_false()
        {
        }
        public static function is_wfocu_front_ajax()
        {
        }
        /**
         * Maybe log php errors that coming from the page to let the log system know about the JS error triggered on page.
         */
        public static function catch_error()
        {
        }
        public static function save_template()
        {
        }
        public static function output_template_save_html($template_slug, $template_name)
        {
        }
        public static function apply_template()
        {
        }
        public static function delete_template()
        {
        }
        /**
         * Handling refund offer request
         *
         * @throws Exception
         */
        public static function refund_offer()
        {
        }
        public static function clear_template()
        {
        }
        /**
         * Ajax handling to activate next move plugin
         */
        public static function wfocu_activate_next_move()
        {
        }
        /**
         * Ajax action to activate plugin
         */
        public static function activate_plugins()
        {
        }
        /**
         * Duplicate WPML funnel
         */
        public static function make_wpml_duplicate()
        {
        }
        public static function get_wpml_edit_url()
        {
        }
    }
    /**
     * This class take care of ecommerce tracking setup
     * It renders necessary javascript code to fire events as well as creates dynamic data for the tracking
     * @author woofunnels.
     */
    class WFOCU_Schedules
    {
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function maybe_setup_cron_schedules($schedules_original)
        {
        }
        public function get_cron_schedules()
        {
        }
        public function maybe_schedule_recurring_events()
        {
        }
        public function get_frequency_for_schedules()
        {
        }
    }
    class WFOCU_Mails
    {
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        /**
         * Adding our custom Email to the WooCommerce Email Framework
         * @hooked into `woocommerce_email_classes`
         *
         * @param WC_Email[] $email_classes
         *
         * @return mixed
         */
        public function add_email_class($email_classes)
        {
        }
        /**
         * Setting up dynamic events to fire emails at our event in WooCommerce way
         * @hooked into `woocommerce_email_actions`
         *
         * @param array $email_actions
         *
         * @return mixed
         */
        public function add_email_actions($email_actions)
        {
        }
        /**
         * @hooked into `wfocu_front_init_funnel_hooks`
         * Triggers WooCommerce's Customer Processing notification
         *
         * @param WC_Order $order
         */
        public function setup_primary_order_mail($order)
        {
        }
        /**
         * @hooked `wfocu_before_normalize_order_status_to_successful`
         * Removing actions for the woocommerce mailing that will ensure no duplicate processing mail will sent to user/admin
         *
         * @param $from
         * @param $to
         */
        public function maybe_hold_mails_after_processing($from, $to)
        {
        }
        public function maybe_send_pending_emails_on_funnel_end($funnel_id, $order_id, $order_email)
        {
        }
        public function maybe_send_pending_emails($order, $order_behaviour, $cancel_original, $send_processing_mail_on_no_batch, $send_processing_mail_on_no_batch_cancel)
        {
        }
        /**
         * @param WC_Order $order
         */
        public function prevent_sending_mails_on_bacs_n_cheque($order)
        {
        }
        public function maybe_send_pending_email_for_bacs_for_cheque($funnel_or_order_id, $order_id = '')
        {
        }
        public function maybe_handle_cron_pending_mails_for_cb()
        {
        }
        public function maybe_send_pending_email_for_bacs_for_cheque_scheduled($order_id)
        {
        }
        public function maybe_handle_cron_pending_mails()
        {
        }
        public function maybe_prevent_mails_on_new_order($order_id, $order = \false)
        {
        }
        public function initialize_payment_gateway_before_normalize()
        {
        }
        public function maybe_restrict_emails_on_cancel_refund_expired($order)
        {
        }
    }
    /**
     * Class to Handle API calls using wc-api
     * Class WFOCU_Templates_Retriever
     */
    class WFOCU_WC_API_Handler
    {
        /**
         * WFOCU_Templates_Retriever constructor.
         */
        public function __construct()
        {
        }
        /**
         * @return WFOCU_WC_API_Handler|null
         */
        public static function get_instance()
        {
        }
        public function handle_call()
        {
        }
        public function get_api_actions()
        {
        }
        public function api_health_check()
        {
        }
        public function maybe_normalize_orders()
        {
        }
        /**
         * @hooked over `woocommerce_api_wfocu_actions`
         * Check if we have requested for recording offer expiration and/or redirection to the next offer
         */
        public function offer_expiry()
        {
        }
        /**
         * @hooked over `woocommerce_api_wfocu_actions`
         * handle end funnel through api request
         */
        public function end_funnel()
        {
        }
        /**
         * Providing next offer URL when with expired action to redirection in wc-api
         *
         * @param string $action
         * @param array $args
         *
         * @return string
         */
        public function get_api_url($action = '', $args = array())
        {
        }
    }
    /**
     * Create,show,delete,edit and manages the process related to offers in the plugin.
     * Class WFOCU_Offers
     */
    class WFOCU_Offers
    {
        const INVALIDATION_PRODUCT_IN_ORDER = 1;
        const INVALIDATION_NOT_PURCHASABLE = 2;
        const INVALIDATION_PAST_PURCHASED = 3;
        public $is_custom_page = \false;
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function validate($post)
        {
        }
        public function get_offers($funnel_id)
        {
        }
        /**
         * Return the first offer in the list
         * @return int|null|string
         */
        public function get_the_first_offer()
        {
        }
        public function get_the_offer($type = 'yes', $offer = \null, $get_offers)
        {
        }
        public function get_meta_key_for_offer_type($type = 'yes')
        {
        }
        public function get_the_next_offer($type = 'yes')
        {
        }
        public function get_offer_index($offer_id, $funnel_id = 0)
        {
        }
        public function get_offer_id_by_index($index, $funnel_id = 0)
        {
        }
        public function get_offer_attributes($offer_id, $get = 'type')
        {
        }
        public function get_offer_meta($offer_id)
        {
        }
        public function prepare_shipping_package($offer_meta, $posted_data = array())
        {
        }
        /**
         * @param $product
         * @param $options
         * @param bool $incl_tax
         * @param $offer_settings
         *
         * @return float
         */
        public function get_product_price($product, $options, $incl_tax = \false, $offer_settings = array())
        {
        }
        public function parse_posted_data()
        {
        }
        public function get_offer_from_post($post)
        {
        }
        /**
         * Here we find out whether to show tax info during side cart totals.
         * The decision for it came from the settings for the woocommerce.
         * So if woocommerce says "show cart items including prices" that means no separate row needs to be make on cart table
         * @return bool
         */
        public function show_tax_info_in_confirmation()
        {
        }
        public function offer_product_setup_stock_data($product_details, $output, $offer_data, $is_front)
        {
        }
        public function product_compatible_for_stock_check()
        {
        }
        /**
         * This method is to validate the product in the current offer against purchasable and stock standards
         * Based on these results we hide/show Or redirect the user
         *
         * @param $offer_build
         *
         * @return bool
         */
        public function validate_product_offers($offer_build)
        {
        }
        public function append_offer_unique_class($classes)
        {
        }
        public function get_the_link($offer)
        {
        }
        public function get_offer($offer_id, $build = \false)
        {
        }
        public function build_offer_product($offer_data, $offer_id = 0, $is_front = \false)
        {
        }
        public function get_default_offer_setting()
        {
        }
        /**
         * @param $product
         * @param $options
         * @param bool $incl_tax
         * @param $offer_data
         *
         * @return string
         */
        public function get_product_price_display($product, $options, $incl_tax = \false, $offer_data)
        {
        }
        public function show_price_including_tax()
        {
        }
        public function get_offer_last_edit($offer_id)
        {
        }
        public function filter_product_object_for_db($product)
        {
        }
        public function filter_step_object_for_db($step)
        {
        }
        public function filter_fields_object_for_db($fields)
        {
        }
        public function get_parent_funnel($offer_id)
        {
        }
        public function get_invalidation_reason_string($identifier)
        {
        }
        public function invalidation_reasons()
        {
        }
        public function get_default_offer_schema()
        {
        }
        public function get_default_product_key($post)
        {
        }
        public function get_default_product()
        {
        }
        public function get_offer_state($steps, $offer_id)
        {
        }
        public function get_product_key_by_index($index, $products)
        {
        }
    }
    /**
     * Class to retrieve templates json file
     * Class WFOCU_Templates_Retriever
     */
    class WFOCU_Templates_Retriever
    {
        /** @var array $supported page builders */
        protected $supported_builders = array();
        /**
         * WFOCU_Templates_Retriever constructor.
         */
        public function __construct()
        {
        }
        /**
         * @return WFOCU_Templates_Retriever|null
         */
        public static function get_instance()
        {
        }
        /**
         * Creating and retrieving  templates json
         */
        public function wfocu_process_builder_templates()
        {
        }
        /**
         * Retrieving main json file for all template details
         *
         * @param $template
         *
         * @return array|mixed|object|null
         */
        public function get_detailed_template($group)
        {
        }
        /**
         * Retrieving single template json
         *
         * @param $get_template
         * @param $group
         *
         * @return array|bool|string|WP_Error
         */
        public function get_single_template_json($get_template, $group)
        {
        }
    }
    class WFOCU_Template_Group
    {
        public $current_template;
        public $allow_empty_template = \false;
        public $prefix = '';
        public function __construct()
        {
        }
        public function process_url()
        {
        }
        /**
         * Get all the templates and registers them to the loader
         */
        public function load_templates()
        {
        }
        public function get_remote_templates()
        {
        }
        public function get_slug()
        {
        }
        public function local_templates()
        {
        }
        /**
         * Sets up template instance and associate data to it.
         * @return mixed
         */
        public function set_up_template()
        {
        }
        /**
         * Decides WordPress Template during front end calls.
         *
         * @param string $template
         *
         * @return string
         */
        public function maybe_get_template($template = '')
        {
        }
        public function body_class($classes)
        {
        }
        public function update_template($template, $offer, $meta)
        {
        }
        public function maybe_import()
        {
        }
        /**
         * Collect all the templates and return their names as list to the caller
         * @return array
         */
        public function get_templates()
        {
        }
        /**
         * Get empty template configuration
         * @return array
         */
        public function get_empty_template()
        {
        }
        /**
         * register empty template if supported by the template group
         *
         * @param $template_path the template class file path needs to be provided by the template group to handle rendering functions
         */
        public function maybe_register_empty($template_path)
        {
        }
        /**
         * Check if the current template is empty template or not
         *
         * @param $template template name to check
         *
         * @return bool true if its a empty template, false otherwise
         */
        public function if_current_template_is_empty($template)
        {
        }
        public function maybe_cleanup_template_cache($offer_id_new)
        {
        }
        public function clear_cache($offer_id_new)
        {
        }
        public function maybe_cleanup_template_cache_on_update($data, $offer_id)
        {
        }
        public function get_template_thumbnail_name($name)
        {
        }
        public function get_template_path()
        {
        }
    }
    /**
     * Class WFOCU_Session_Handler
     * Works as a Backbone for the Running data during the lifecycle of the user
     * Stores a unique key in the cookie, and then use transients to save data for the same unique key called transient key
     * So in this way that key supposed to be unique for each user session.
     *
     * @uses WooFunnels_Transient
     * @package UpStroke
     * @author UpStroke
     */
    class WFOCU_Session_Handler
    {
        /**
         * @var null $transient_key
         */
        public $transient_key = \null;
        public $transient_object = \null;
        /**
         * Constructor for the session class.
         */
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function set_up_orders($order_id)
        {
        }
        public function load_funnel_from_session()
        {
        }
        public function get_transient_key()
        {
        }
        public function set_transient_key()
        {
        }
        public function get_all()
        {
        }
        /**
         * Set a session variable.
         *
         * @param string $key Key to set.
         * @param mixed $value Value to set.
         * @param mixed $group Value to set.
         */
        public function set($key, $value, $group = \null)
        {
        }
        /**
         * Get a session variable.
         *
         * @param string $key Key to get.
         * @param mixed $default used if the session variable isn't set.
         *
         * @return array|string value of session variable
         */
        public function get($key, $default = \false, $group = \null)
        {
        }
        /**
         * Destroy all session data.
         */
        public function destroy_session()
        {
        }
        public function save($group = \null)
        {
        }
        public function maybe_load_from_transient()
        {
        }
        public function load_transient_from_cookie()
        {
        }
        public function generate_transient_key()
        {
        }
        public function maybe_pass_no_cache_header()
        {
        }
        /**
         * @param $value
         *
         * @return mixed
         */
        public function set_nocache_constants()
        {
        }
        function maybe_define_constant($name, $value)
        {
        }
        public function no_index_offers()
        {
        }
        /**
         * detect whether we have a valid session running
         * @return bool
         * @since 2.0
         */
        public function has_valid_session()
        {
        }
    }
    /**
     * Class WFOCU_Data
     * @package UpStroke
     * @author WooFunnels
     */
    class WFOCU_Data extends \WFOCU_Session_Handler
    {
        protected $cache = array();
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        /**
         * This method try to sets up the funnel by firing methods for rule matching and behaves as controller function between database and logical operation
         * Function differs its behavior based on the env provided, as cart is the one with standard matching, whereas order is placed for some special rules to take care of.
         *
         * @param bool $skip_rules
         * @param string $env
         */
        public function setup_funnel($skip_rules = \false, $env = 'cart')
        {
        }
        public function get_funnel_id()
        {
        }
        public function setup_posted($array)
        {
        }
        public function get_posted($key, $default = '')
        {
        }
        public function get_page_link()
        {
        }
        /**
         * @param int $id
         *
         * @return bool|WC_Order
         */
        public function get_order($id = 0)
        {
        }
        public function load_order($order_id = 0)
        {
        }
        public function set_page($id = \null)
        {
        }
        public function get_layout()
        {
        }
        public function set_layout($layout)
        {
        }
        public function get_layout_info()
        {
        }
        public function set_layout_info($data)
        {
        }
        public function update_options($data)
        {
        }
        public function setup_options()
        {
        }
        public function get_options_defaults($existing)
        {
        }
        public function get_option($key = '')
        {
        }
        public function setup_options_offer_settings()
        {
        }
        public function get_funnel_key()
        {
        }
        public function is_funnel_exists()
        {
        }
        /**
         * @return WC_order|array|string
         */
        public function get_current_order()
        {
        }
        /**
         * @return WC_order|array|string
         */
        public function get_current_offer()
        {
        }
        public function get_options_defaults_offer_confirmation()
        {
        }
        public function sanitize_scripts($options)
        {
        }
        public function get_tax_name()
        {
        }
        /**
         * @return WC_order|boolean
         */
        public function get_parent_order()
        {
        }
    }
    /**
     * Customizer Controls Base.
     *
     * Extend this in other controls.
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.12
     */
    /**
     * A base for controls.
     */
    class WFOCUKirki_Control_Base extends \WP_Customize_Control
    {
        /**
         * Used to automatically generate all CSS output.
         *
         * @access public
         * @var array
         */
        public $output = array();
        /**
         * Data type
         *
         * @access public
         * @var string
         */
        public $option_type = 'theme_mod';
        /**
         * Option name (if using options).
         *
         * @access public
         * @var string
         */
        public $option_name = \false;
        /**
         * The wfocukirki_config we're using for this control
         *
         * @access public
         * @var string
         */
        public $wfocukirki_config = 'global';
        /**
         * Whitelisting the "required" argument.
         *
         * @since 3.0.17
         * @access public
         * @var array
         */
        public $required = array();
        /**
         * Whitelisting the "preset" argument.
         *
         * @since 3.0.26
         * @access public
         * @var array
         */
        public $preset = array();
        /**
         * Whitelisting the "css_vars" argument.
         *
         * @since 3.0.28
         * @access public
         * @var string
         */
        public $css_vars = '';
        /**
         * Extra script dependencies.
         *
         * @since 3.1.0
         * @return array
         */
        public function wfocukirki_script_dependencies()
        {
        }
        /**
         * Enqueue control related scripts/styles.
         *
         * @access public
         */
        public function enqueue()
        {
        }
        /**
         * Refresh the parameters passed to the JavaScript via JSON.
         *
         * @see WP_Customize_Control::to_json()
         */
        public function to_json()
        {
        }
        /**
         * Render the control's content.
         *
         * Allows the content to be overridden without having to rewrite the wrapper in `$this::render()`.
         *
         * Supports basic input types `text`, `checkbox`, `textarea`, `radio`, `select` and `dropdown-pages`.
         * Additional input types such as `email`, `url`, `number`, `hidden` and `date` are supported implicitly.
         *
         * Control content can alternately be rendered in JS. See WP_Customize_Control::print_template().
         *
         * @since 3.4.0
         */
        protected function render_content()
        {
        }
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
        /**
         * Returns an array of translation strings.
         *
         * @access protected
         * @since 3.0.0
         * @return array
         */
        protected function l10n()
        {
        }
    }
    /**
     * Type radio-image-full
     * Class WFOCU_Radio_Image_Full
     */
    class WFOCU_Radio_Image_Full extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'radio-image-full';
        /**
         * Refresh the parameters passed to the JavaScript via JSON.
         *
         * @see WP_Customize_Control::to_json()
         */
        public function to_json()
        {
        }
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Type radio-icon
     * Class WFOCU_Radio_Icon
     */
    class WFOCU_Radio_Icon extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'radio-icon';
        /**
         * Refresh the parameters passed to the JavaScript via JSON.
         *
         * @see WP_Customize_Control::to_json()
         */
        public function to_json()
        {
        }
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    class WFOCU_Radio_Image_Text extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'radio-image-text';
        /**
         * Refresh the parameters passed to the JavaScript via JSON.
         *
         * @see WP_Customize_Control::to_json()
         */
        public function to_json()
        {
        }
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    class WFOCU_Responsive_Font_Text extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocu-responsive-font';
        /**
         * The control type.
         *
         * @access public
         * @var array
         */
        public $units = array();
        /**
         * Enqueue control related scripts/styles.
         *
         * @access public
         */
        public function enqueue()
        {
        }
        /**
         * Refresh the parameters passed to the JavaScript via JSON.
         *
         * @see WP_Customize_Control::to_json()
         */
        public function to_json()
        {
        }
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Class contains the basic functions responsible for front end views.
     * Class WFOCU_View
     */
    class WFOCU_Template_loader
    {
        public $current_template = \null;
        public $customizer_key_prefix = '';
        public $offer_id = \null;
        public $is_single = \false;
        public $product_data = \null;
        public $offer_data = \null;
        public $invalidation_reason = \null;
        public $multiple_p = \false;
        /**
         * @var WFOCU_Template_Group
         */
        public $current_template_group;
        protected $customize_manager_ins = \null;
        protected $template_groups = [];
        protected $templates = array();
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        /**
         * @param $slug
         * @param $data
         * @param string $depriciated
         */
        public function register_template($slug, $data, $depriciated = '')
        {
        }
        /**
         * @hooked over `template_include`
         * This method checks for the current running funnels and controller to setup data & offer validation
         * It also loads and echo/prints current template if the offer demands to.
         *
         * @param $template string current template in WordPress ecosystem
         *
         * @return mixed
         */
        public function maybe_load($template)
        {
        }
        public function add_upstroke_page_templates()
        {
        }
        public function may_be_change_template($template)
        {
        }
        public function get_template_url($main_template)
        {
        }
        public function wfocu_add_unique_class($classes)
        {
        }
        public function get_module_path()
        {
        }
        public function get_post_type_slug()
        {
        }
        public function load_footer()
        {
        }
        public function get_template_part($slug, $args = '')
        {
        }
        public function load_header()
        {
        }
        /**
         * @param string $is_single
         *
         * @return array
         */
        public function get_templates()
        {
        }
        public function get_buy_button_url($product_hash, $product_data)
        {
        }
        public function get_skip_button_url($product_hash, $product_data)
        {
        }
        public function body_classes()
        {
        }
        public function typography_custom_css()
        {
        }
        public function add_common_scripts()
        {
        }
        public function add_fonts()
        {
        }
        public function maybe_add_variations($product, $output, $offer_data, $is_front, $hash)
        {
        }
        /**
         * @param WP_Customize_Manager $customize_manager
         */
        public function maybe_add_customize_preview_init($customize_manager)
        {
        }
        public function load_customizer_styles()
        {
        }
        public function load_customizer_footer_before_scripts()
        {
        }
        public function customizer_product_check()
        {
        }
        /**
         * Finds out if its safe to initiate data setup for the current request.
         * Checks for the environmental conditions and provide results.
         * @return bool true on success| false otherwise
         * @see WFOCU_Template_loader::maybe_setup_offer()
         */
        public function is_valid_state_for_data_setup()
        {
        }
        public function is_customizer_preview()
        {
        }
        public function print_internal_css()
        {
        }
        /**
         * @hooked over `woocommerce_available_variation`
         * Adds a variation object in the variation array on the upsell pages
         *
         * @param $variation_array
         * @param $variation_object
         * @param $variation
         *
         * @return mixed
         */
        public function add_variation_object_in_custom_variation_key($variation_array, $variation_object, $variation)
        {
        }
        /**
         * @hooked over `footer_after_print_scripts`
         * @hooked over `wp_footer` conditionaly
         * We need to take care of the notices in our template so that it wont be visible to the user as well as it will not get forward by the WC for another page
         * We are printing notices in the html in non display mode
         */
        public function maybe_print_notices_in_hidden()
        {
        }
        public function empty_shortcodes()
        {
        }
        public function add_attributes_to_buy_button()
        {
        }
        public function add_attributes_to_confirmation_button()
        {
        }
        public function maybe_autoswitch_templates($offer_data, $offer_id, $funnel_id)
        {
        }
        /**
         * Checks if current template set matches the product count
         *
         * @param $count
         * @param $current_template
         *
         * @return bool
         */
        public function template_needs_switching($count, $current_template)
        {
        }
        public function get_default_single_template()
        {
        }
        public function get_default_multiple_template()
        {
        }
        /**
         * Offer templates rendered successfully, let the system log it in the file
         */
        public function maybe_log_rendering_complete()
        {
        }
        public function get_offer_id()
        {
        }
        public function set_offer_id($id)
        {
        }
        public function get_template($slug)
        {
        }
        public function register_group($group, $slug)
        {
        }
        /**
         * @hooked over WP:9
         * Control setup of respective offer during wp hook to control asset loading as well as proper offer data setup
         */
        public function initiate_offer_template_setup()
        {
        }
        /**
         * By default when funnel runs after order, all the setup required methods hits accordingly
         * When accessing the page directly Or in admin interface during customizing pages using any builder or native editors, we could setup data using this method
         *
         * @param mixed $offer_id Offer ID to set data against
         * @param bool $is_preview should we setup data as preview setup or as live running funnel?
         *
         * @since 2.0
         */
        public function setup_complete_offer_setup_manual($offer_id = \false, $is_preview = \true, $load_assets = \false)
        {
        }
        public function get_template_ins()
        {
        }
        /**
         * @hooked over `init`:15
         * This method try and sets up the data for all the existing pages.
         * customizer-admin | customizer-preview | front-end-funnel | front-end-ajax-request-during-funnel
         * For the given environments we have our offer ID setup at this point. So its safe and necessary to set the data.
         * This method does:
         * 1. Fetches and sets up the offer data based on the offer id provided
         * 2. Finds & loads the appropriate template.
         * 3. loads offer data to the template instance
         * 4. Build offer data for the current offer
         */
        public function maybe_setup_offer()
        {
        }
        /**
         * @param $offer_data
         *
         * @return WFOCU_Template_Group|null
         */
        public function maybe_select_template_to_load($offer_data)
        {
        }
        public function get_default_template($offer_data)
        {
        }
        /**
         * @param string $template
         *
         * @return string
         */
        public function get_template_group_by_template($template)
        {
        }
        /**
         * @return WFOCU_Template_Group[]
         */
        public function get_all_groups()
        {
        }
        public function get_default_group()
        {
        }
        /**
         * @param $group_slug
         *
         * @return WFOCU_Template_Group|null
         */
        public function get_group($group_slug)
        {
        }
        /**
         * Sets up the current offer data related data objects
         * These objects will be later gets accessed using data class
         *
         */
        public function set_data_object()
        {
        }
        public function is_multiple_customizer_template()
        {
        }
        public function maybe_render_variation_forms()
        {
        }
        /**
         * Get Plugins list by page builder.
         *
         * @return array Required Plugins list.
         * @since 1.1.4
         *
         */
        public function get_plugins_groupby_page_builders()
        {
        }
        /**
         * Get plugin status
         *
         * @param string $plugin_init_file plugin init file.
         *
         * @return mixed
         * @since 1.0.0
         *
         */
        public function get_plugin_status($plugin_init_file)
        {
        }
        public function localize_page_builder_texts()
        {
        }
        public function get_dependent_plugins_for_page_builder($page_builder_slug = '', $default = 'elementor')
        {
        }
        public function maybe_render_css_for_offer_conf()
        {
        }
    }
    /**
     * FrontEnd flow controller class
     * WFOCU_Public class
     */
    class WFOCU_Public
    {
        public $is_preview = \false;
        public $initiate_funnel = \false;
        public $new_order = \null;
        public $failed_order = \null;
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        /**
         * @hooked into `woocommerce_update_order_review_fragments`
         * At this place we have the posted data that we will going to contain in our data object so it could be further used by the matching groups
         *
         * @param $fragments
         *
         * @return mixed
         */
        public function maybe_decide_funnel_on_fragments($fragments = array())
        {
        }
        /**
         * @hooked into `woocommerce_removed_coupon` || `woocommerce_applied_coupon`
         */
        public function maybe_decide_funnel()
        {
        }
        /**
         * @hooked over `woocommerce_checkout_order_processed`
         * Set up necessary environment and proceed with the rule check to find out best funnel for the order.
         *
         * @param $order_id
         */
        public function maybe_decide_funnel_on_order($order_id_or_order, $posted_data = array())
        {
        }
        /**
         * @hooked into `woocommerce_get_checkout_order_received_url` conditionally
         * Responsible to change order received url in case we have funnel to initiate
         *
         * @param $url Existing order-received url
         * @param WC_Order $order Order Getting processed
         *
         * @return string Modified order-received url on success
         * @see WFOCU_Public::maybe_setup_upsell()
         *
         */
        public function maybe_redirect_to_upsell($url, $order)
        {
        }
        public function get_the_upsell_url($offer)
        {
        }
        /**
         * Getting order received URL which is not affected by any offers
         * @return string
         */
        public function get_clean_order_received_url($end_funnel = \true, $append_failure_params = \false)
        {
        }
        /**
         * @hooked over `woocommerce_checkout_order_processed`
         * In this case we check if the order payment method is bacs||cheque, then we need to setup funnel in order to run further
         * As there in these payment methods we do not have 'woocommerce_pre_payment_complete' hook to initiate the funnels.
         *
         * @param $order_id
         * @param $posted_data
         */
        public function maybe_setup_upsell_on_cod_or_bacs($order_id, $posted_data = array())
        {
        }
        /**
         * @hooked into `woocommerce_pre_payment_complete`
         * In this method we validates if we have any funnel to initiate and checking for the gateway support and tokenization
         * If we have any funnel and checks are validated then registering required filters to continue with the funnel.
         *
         * @param $order_id
         *
         * @return null
         */
        public function maybe_setup_upsell($order_id = '')
        {
        }
        /**
         * Checking if parent order contains subscriptions
         *
         * @param $wc_order
         */
        public function is_parent_contains_subscriptions($wc_order, $order_type = array('parent', 'resubscribe', 'switch'))
        {
        }
        public function schedule_pending_emails_event($order)
        {
        }
        /**
         * @hooked into `wfocu_front_init_funnel_hooks`
         * Handles setting up the single schedule event to normalize the order status after the duration provided.
         *
         * @param WC_Order $order
         */
        public function save_schedule_meta($new_status, $old_status, $order)
        {
        }
        /**
         * @hooked over `wfocu_front_primary_order_status_change`
         * This method is to store order Statuses in the transition in the cookie to manage order Statuses further
         *
         * @param string $new_status
         * @param string $old_status
         * @param WC_Order $order
         */
        public function sustain_order_status($new_status, $old_status, $order)
        {
        }
        public function modify_order_received_url()
        {
        }
        public function maybe_destroy_session()
        {
        }
        public function if_is_offer()
        {
        }
        /**
         * Handle validation failure when request for offer page came in.
         *
         * @see WFOCU_Public::if_is_offer()
         */
        public function handle_failed_validation_for_the_offer()
        {
        }
        /**
         * prevent checks to validate page.
         * @return bool
         */
        public function can_show_upsell()
        {
        }
        public function charge_upsell()
        {
        }
        public function set_parent_order($order_id)
        {
        }
        /**
         * @return bool|WC_Order|WC_Refund
         */
        public function get_parent_order()
        {
        }
        /**
         * A controller method to handle successful upsell request
         * It handles the order processing behavior,
         * Create new Orders, Cancel the Old ones and batch if required.
         * Handles stock management
         * Handles marking order as completed payment
         *
         */
        public function handle_success_upsell()
        {
        }
        public function handle_failed_upsell()
        {
        }
        public function print_session_data_js()
        {
        }
        public function maybe_set_offer()
        {
        }
        public function is_front()
        {
        }
        public function maybe_save_event_offer_accepted($get_current_offer, $get_package, $get_parent_order, $new_order, $get_transaction_id, $items_added = [])
        {
        }
        /**
         *
         * @param WC_Order $order
         */
        public function update_primary_order_meta($order)
        {
        }
        public function maybe_initiate_hooks_for_assets_load()
        {
        }
        public function load_header_script_for_custom_page()
        {
        }
        public function maybe_enqueue_assets()
        {
        }
        public function if_is_preview()
        {
        }
        /**
         * Getting if parent order contains free shipping
         */
        public function is_free_shipping_in_parent()
        {
        }
        public function load_footer_script_for_custom_page()
        {
        }
        public function load_confirmation_page_ui()
        {
        }
        public function remove_localstorage()
        {
        }
        /**
         * @hooked over `wfocu_front_create_new_order_on_success`
         * Performs New Order creation on success of upsell offer
         *
         * @param string $get_transaction_id
         * @param $get_funnel_id
         * @param $get_offer_id
         * @param bool $should_complete whether to mark the order complete or not
         *
         * @throws WC_Data_Exception
         */
        public function handle_new_order_creation_on_success($get_transaction_id = '', $get_funnel_id, $get_offer_id, $should_complete = \true)
        {
        }
        /**
         * @hooked `wfocu_front_create_new_order_on_success`
         * Lets keep track of new orders in the current order in the system, it will be used to show relevant order data on thankyou page
         */
        public function maybe_save_new_order_id_in_parent()
        {
        }
        /**
         * @hooked over `wfocu_front_batch_items_on_success`
         * Controller function to perform order batching process on successfull upsell
         *
         * @param string $get_transaction_id
         * @param $get_funnel_id
         * @param $get_offer_id
         */
        public function handle_batching_on_success($get_transaction_id = '', $get_funnel_id, $get_offer_id)
        {
        }
        /**
         * @hooked over `wfocu_front_create_new_order_on_failure`
         * Perform New Order creation on the failure of upsell offer charge request
         *
         * @param $get_funnel_id ID of the funnel running
         * @param $get_offer_id Id of the offer that has failed
         */
        public function handle_new_order_creation_on_failure($get_funnel_id)
        {
        }
        /**
         * @hooked over `woocommerce_get_checkout_order_received_url`
         * Sets Our session ID in the checkout url to detect with session user is in & which data belongs to the session.
         *
         * @param string $url Order Received URL
         * @param WC_Order $order Order
         *
         * @return string
         */
        public function maybe_add_wfocu_session_param($url)
        {
        }
        public function maybe_log_thankyou_visited($order_id)
        {
        }
        public function maybe_setup_funnel_options()
        {
        }
        public function maybe_alter_funnel_order_behaviour($value, $key)
        {
        }
        public function maybe_alter_funnel_order_behaviour_is_cancel($value, $key)
        {
        }
        public function maybe_remove_all_taxes_from_offers_when_excempt()
        {
        }
    }
    class WFOCU_WooFunnels_Support
    {
        public static $_instance = \null;
        public $full_name = 'Upstroke: WooCommerce One Click Upsell';
        public $is_license_needed = \true;
        public $license_instance;
        public $slug = 'woofunnels-upstroke-one-click-upsell';
        public $encoded_basename = '';
        /**
         * WFOCU_WooFunnels_Support constructor.
         */
        public function __construct()
        {
        }
        /**
         * @return null|WFOCU_WooFunnels_Support
         */
        public static function get_instance()
        {
        }
        public function woofunnels_page()
        {
        }
        public function is_license_present()
        {
        }
        /**
         * License management helper function to create a slug that is friendly with edd
         *
         * @param type $name
         *
         * @return type
         */
        public function slugify_module_name($name)
        {
        }
        public function add_license_support($plugins)
        {
        }
        public function woofunnels_slugify_module_name($name)
        {
        }
        public function init_licensing()
        {
        }
        public function process_licensing_form($posted_data)
        {
        }
        /**
         * Validate is it is for email product deactivation
         *
         * @param type $posted_data
         */
        public function maybe_process_deactivation($posted_data)
        {
        }
        public function maybe_handle_license_activation_wizard()
        {
        }
        /**
         * Append WooFunnels data to tracking data
         *
         * @param $tracking_data
         *
         * @return mixed
         */
        public function add_data_to_tracking($tracking_data)
        {
        }
        /**
         * Adding WooCommerce sub-menu for global options
         */
        public function add_menus()
        {
        }
    }
    /**
     * Abstract Class for all the Template Loading
     * Class WFOCU_Template_Common
     */
    class WFOCU_Template_Common
    {
        public $img_public_path = '';
        public $variation_field = \false;
        public $data = \null;
        public $products_data = array();
        public $img_path = '';
        public $no_img_path = '';
        protected $section_fields = array();
        protected $offer_data = \null;
        protected $offer_products_meta = \null;
        protected $change_set = array();
        protected $sections = array('wfocu_section');
        protected $template_dir = __DIR__;
        protected $template_slug = 'sp-classic';
        protected $offer_id = 0;
        public $selected_font_family = '';
        public $web_google_fonts = ['default' => 'Default', 'Open Sans' => 'Open Sans'];
        public function __construct()
        {
        }
        public function get_offer_id()
        {
        }
        public function set_offer_id($offer_id = \false)
        {
        }
        public function get_offer_data()
        {
        }
        public function set_offer_data($offer = \false)
        {
        }
        public function load_hooks()
        {
        }
        public function set_data($data)
        {
        }
        public function get_slug()
        {
        }
        public function __call($method, $args)
        {
        }
    }
    /**
     * Abstract Class for all the Template Loading
     * Class WFOCU_Customizer_Common
     */
    class WFOCU_Customizer_Common extends \WFOCU_Template_Common
    {
        public $data = \null;
        public $internal_css = array();
        public $customizer_data = array();
        public $fields = array();
        public $products_data = array();
        public $countdown_timer = '';
        public function __construct()
        {
        }
        public function get_view()
        {
        }
        public function get_template_url()
        {
        }
        public function get_slug()
        {
        }
        public function get_fields()
        {
        }
        public function control_filter($control)
        {
        }
        public function get_section($wp_customize = \false)
        {
        }
        public function build_product_data($offer_data = \false)
        {
        }
        public function set_changeset($changeset = array())
        {
        }
        public function get_changeset($key)
        {
        }
        public function render_callback($data)
        {
        }
        public function assign_key_to_array($array, $key)
        {
        }
        public function load_hooks()
        {
        }
    }
    /**
     * This class take care of ecommerce tracking setup
     * It renders necessary javascript code to fire events as well as creates dynamic data for the tracking
     * @author woofunnels.
     */
    class WFOCU_Ecomm_Tracking
    {
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        /**
         * render script to load facebook pixel core js
         */
        public function render_fb()
        {
        }
        /**
         * render script to print general data.
         */
        public function render_general_data()
        {
        }
        /**
         * render script to load facebook pixel core js
         */
        public function render_pint()
        {
        }
        public function is_tracking_on()
        {
        }
        public function is_fb_pixel()
        {
        }
        /**
         * Decide whether script should render or not
         * Bases on condition given and based on the action we are in there exists some boolean checks
         *
         * @param bool $allow_thank_you whether consider thank you page
         * @param bool $without_offer render without an valid offer (valid funnel)
         *
         * @return bool
         */
        public function should_render($allow_thank_you = \true, $without_offer = \true)
        {
        }
        public function get_advanced_pixel_data()
        {
        }
        public function is_fb_advanced_tracking_on()
        {
        }
        /**
         * maybe render script to fire fb pixel view event
         */
        public function render_fb_view()
        {
        }
        public function do_track_fb_view()
        {
        }
        /**
         * Maybe print facebook pixel javascript
         * @see WFOCU_Ecomm_Tracking::render_fb();
         */
        public function maybe_print_fb_script()
        {
        }
        /**
         * Maybe print facebook pixel javascript
         * @see WFOCU_Ecomm_Tracking::render_pint();
         */
        public function maybe_print_pint_script()
        {
        }
        public function do_track_fb_synced_purchase()
        {
        }
        public function do_track_fb_purchase_event()
        {
        }
        public function do_track_fb_general_event()
        {
        }
        /**
         * render google analytics core script to load framework
         */
        public function render_ga()
        {
        }
        public function ga_code()
        {
        }
        /**
         * Maybe print google analytics javascript
         * @see WFOCU_Ecomm_Tracking::render_ga();
         */
        public function maybe_print_ga_script()
        {
        }
        public function do_track_ga_purchase()
        {
        }
        public function do_track_pint()
        {
        }
        public function do_track_ga_view()
        {
        }
        /**
         * render google analytics core script to load framework
         */
        public function render_gad()
        {
        }
        public function gad_code()
        {
        }
        public function pint_code()
        {
        }
        public function gad_purchase_label()
        {
        }
        /**
         * Maybe print google analytics javascript
         * @see WFOCU_Ecomm_Tracking::render_ga();
         */
        public function maybe_print_gad_script($k, $gad_code, $gad_label)
        {
        }
        public function do_track_gad_purchase()
        {
        }
        /**
         * @hooked over `woocommerce_checkout_order_processed`
         * Just after funnel initiated we try and setup cookie data for the parent order
         * That will be further used by WFOCU_Ecomm_Tracking::render_ga() && WFOCU_Ecomm_Tracking::render_ga()
         *
         * @param WC_Order $order
         */
        public function maybe_save_order_data($order_id, $posted_data = array(), $order = \null)
        {
        }
        public function do_treat_variable_as_simple()
        {
        }
        public function get_woo_product_content_id($product_id)
        {
        }
        public function gad_product_id($product_id)
        {
        }
        /**
         * Get the value of purchase event for the different cases of calculations.
         *
         * @param WC_Order/offer_Data $data
         * @param string $type type for which this function getting called, order|offer
         *
         * @return string the modified order value
         */
        public function get_total_order_value($data, $type = 'order', $party = 'fb')
        {
        }
        public function is_disable_shipping($party = 'fb')
        {
        }
        public function is_disable_taxes($party = 'fb')
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return array
         */
        public function purchase_custom_aud_params($order)
        {
        }
        /**
         * @hooked over `wfocu_offer_accepted_and_processed`
         * Sets up a cookie data for tracking based on the offer/upsell accepted by the customer
         *
         * @param int $get_current_offer Current offer
         * @param array $get_package current package
         */
        public function maybe_save_data_offer_accepted($get_current_offer, $get_package, $get_parent_order, $new_order)
        {
        }
        public function render_global_external_scripts()
        {
        }
        public function render_global_external_scripts_head()
        {
        }
        /**
         * Render Offer View script
         */
        public function render_offer_view_script()
        {
        }
        /**
         * Render successful offer script
         */
        public function render_offer_success_script()
        {
        }
        /**
         * Render funnel end script
         */
        public function render_funnel_end()
        {
        }
        public function maybe_remove_track_data()
        {
        }
        public function render_js_to_track_referer()
        {
        }
        /**
         * Add Generic event params to the data in events
         * @return array
         */
        public function get_generic_event_params()
        {
        }
        /**
         * @param string $taxonomy Taxonomy name
         * @param int $post_id (optional) Post ID. Current will be used of not set
         *
         * @return string|array List of object terms
         */
        public function get_object_terms($taxonomy, $post_id = \null, $implode = \true)
        {
        }
        public function get_localstorage_hash($key)
        {
        }
        /**
         * We track in localstorage if we pushed ecommerce event for certain data or not
         * Unfortunetly we cannot remove the storge on thank you as user still can press the back button and events will fire again
         * So the next most logical way to remove the storage is during the next updated checkout action.
         */
        public function maybe_clear_local_storage_for_tracking_log()
        {
        }
        /**
         * @hooked over `woocommerce_checkout_order_processed`
         * Just after funnel initiated we try and setup cookie data for the parent order
         * That will be further used by WFOCU_Ecomm_Tracking::render_general
         *
         * @param WC_Order $order
         */
        public function maybe_save_order_data_general($order_id, $posted_data = array(), $order = \null)
        {
        }
        /**
         * @hooked over `wfocu_offer_accepted_and_processed`
         * Sets up a cookie data for tracking based on the offer/upsell accepted by the customer
         *
         * @param int $get_current_offer Current offer
         * @param array $get_package current package
         */
        public function maybe_save_data_offer_accepted_general($get_current_offer, $get_package, $get_parent_order, $new_order)
        {
        }
    }
    class WFOCU_Shortcodes
    {
        public function __construct()
        {
        }
        public function get_shortcodes()
        {
        }
        public static function get_instance()
        {
        }
        public function wfocu_yes_link_output($atts, $html = '')
        {
        }
        public function generate_demo_yes_link($atts, $html, $attributes = '')
        {
        }
        public function generate_demo_no_link($atts, $html, $attributes = '')
        {
        }
        public function wfocu_no_link_output($atts, $html = '')
        {
        }
        public function wfocu_variation_selector_form_output($atts)
        {
        }
        public function wfocu_qty_selector_output($atts)
        {
        }
        public function wfocu_product_image_slider_output($atts)
        {
        }
        public function wfocu_product_title_output($atts)
        {
        }
        public function wfocu_product_short_description_output($atts)
        {
        }
    }
    class WFOCU_Assets_Loader
    {
        public $environment = 'customizer-preview';
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function localize_script($handle, $object, $data)
        {
        }
        public function setup_assets($environment)
        {
        }
        public function get_scripts()
        {
        }
        public function add_scripts($handle, $src, $version = \null, $is_footer = \false)
        {
        }
        public function get_styles()
        {
        }
        public function add_styles($handle, $src, $version = \null, $is_footer = \false)
        {
        }
        public function print_scripts($is_head = \false)
        {
        }
        public function print_styles($is_head = \false)
        {
        }
        public function maybe_register_assets_on_load()
        {
        }
        public function maybe_register_assets($handles = [], $environment = '', $force_environment = \false)
        {
        }
        public function maybe_register_styles($handles = [], $environment = '', $force_environment = \false)
        {
        }
        public function maybe_register_scripts($handles = [], $environment = '', $force_environment = \false)
        {
        }
        public function wfocu_add_upsell_frontend_styles()
        {
        }
        public function wfocu_remove_conflicted_themes_styles()
        {
        }
    }
    class WFOCU_Template_Group_Custom extends \WFOCU_Template_Group
    {
        public $allow_empty_template = \true;
        public function get_nice_name()
        {
        }
        public function get_templates()
        {
        }
        public function get_slug()
        {
        }
        public function get_edit_link()
        {
        }
        public function get_preview_link()
        {
        }
        public function load_templates()
        {
        }
        public function handle_remote_import($data)
        {
        }
    }
    /**
     * Class WFOCU_Logger
     * @package UpStroke
     * @author WooFunnels
     */
    class WFOCU_Logger
    {
        public $wc_logger = \null;
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function load_wc_logger()
        {
        }
        public function log($message, $level = 'info')
        {
        }
        public function get_postfix()
        {
        }
    }
    class WFOCU_Offer_Process
    {
        public $total = 0;
        public $items = 0;
        public $items_data = 0;
        public $shipping = 0;
        public $taxes_total = 0;
        public $posted_data;
        public $posted_data_raw;
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function execute($offer_meta)
        {
        }
        public function prepare_upsell_package($offer_meta)
        {
        }
        public function set_upsell_package($data)
        {
        }
        public function package_needs_shipping()
        {
        }
        public function parse_posted_data($posted_data = '')
        {
        }
        public function _handle_upsell_charge($response)
        {
        }
    }
    /**
     * Class WFOCU_Common
     * Handles Common Functions For Admin as well as front end interface
     */
    class WFOCU_Common
    {
        public static $customizer_key_prefix = '';
        public static $customizer_key_data = '';
        public static $funnel_id = 0;
        public static $tabs_product_obj = \null;
        public static $start_time = 0;
        protected static $customizer_fields = array();
        protected static $customizer_fields_default = array();
        public static function init()
        {
        }
        /**
         * Searching coupons when typing in rule settings
         */
        public static function wfocu_rule_json_search_coupons()
        {
        }
        public static function wfocu_xl_init()
        {
        }
        public static function get_wc_settings_tab_slug()
        {
        }
        public static function get_boxed_template()
        {
        }
        public static function get_canvas_template()
        {
        }
        public static function register_post_type()
        {
        }
        public static function get_funnel_post_type_slug()
        {
        }
        public static function get_offer_post_type_slug()
        {
        }
        public static function get_timezone_difference()
        {
        }
        /**
         * Function to get timezone string by checking WordPress timezone settings
         * @return mixed|string|void
         */
        public static function wc_timezone_string()
        {
        }
        /**
         * Function to get timezone string based on specified offset
         *
         * @param $offset
         *
         * @return string
         * @see WFOCU_Common::wc_timezone_string()
         *
         */
        public static function get_timezone_by_offset($offset)
        {
        }
        public static function ajax_render_rule_choice($options)
        {
        }
        public static function woocommerce_wfocu_rule_get_rule_object($rule_type)
        {
        }
        public static function woocommerce_wfocu_rule_get_input_object($input_type)
        {
        }
        public static function render_rule_choice_template($options)
        {
        }
        public static function is_load_admin_assets($screen_type = 'single')
        {
        }
        public static function array_flatten($array)
        {
        }
        public static function pr($arr)
        {
        }
        public static function get_product_id_hash($funnel_id, $offer_id, $product_id)
        {
        }
        public static function get_formatted_product_name($product)
        {
        }
        public static function get_variation_attribute($variation)
        {
        }
        public static function search_products($term, $include_variations = \false)
        {
        }
        public static function update_offer($offer_id, $data, $funnel_id = 0)
        {
        }
        public static function get_offer($offer_id)
        {
        }
        public static function update_funnel_offers($funnel_id, $data)
        {
        }
        public static function update_funnel_steps($funnel_id, $data)
        {
        }
        public static function update_funnel_upsell_downsell($funnel_id, $data)
        {
        }
        public static function get_funnels()
        {
        }
        public static function update_funnel_rules($funnel_id, $data)
        {
        }
        public static function get_funnel_rules($funnel_id, $rule_type = 'basic')
        {
        }
        /**
         * Slug-ify the class name and remove underscores and convert it to filename
         * Helper function for the auto-loading
         *
         * @param $class_name
         *
         *
         * @return mixed|string
         * @see WFOCU_Gateways::integration_autoload();
         *
         */
        public static function slugify_classname($class_name)
        {
        }
        /**
         * Recursive Un-serialization based on   WP's is_serialized();
         *
         * @param $val
         *
         * @return mixed|string
         * @see is_serialized()
         */
        public static function unserialize_recursive($val)
        {
        }
        public static function maybe_parse_product_tags($content = '', $key = '', $obj = '')
        {
        }
        public static function maybe_parse_merge_tags($content = '', $obj = \false, $line_break = \true)
        {
        }
        public static function get_option($field)
        {
        }
        public static function maybe_convert_html_tag($val)
        {
        }
        public static function get_variable_league_product_types()
        {
        }
        /**
         * Get image source by image id or source
         *
         * @param type $value
         * @param type $mode
         *
         * @return type
         */
        public static function get_image_source($value, $mode = 'full')
        {
        }
        public static function set_customizer_fields_default_vals($data)
        {
        }
        public static function get_post_table_data()
        {
        }
        public static function posts_per_page()
        {
        }
        public static function string2hex($string)
        {
        }
        /**
         * Get video ID against a video URL
         *
         * @param $url URL
         * @param string $type service type
         *
         * @return string
         */
        public static function get_video_id($url, $type = 'youtube')
        {
        }
        public static function get_order_status_settings()
        {
        }
        public static function maybe_filter_boolean_strings($options)
        {
        }
        public static function get_next_funnel_priority()
        {
        }
        public static function update_max_priority($current)
        {
        }
        public static function register_post_status()
        {
        }
        public static function tooltip($tip, $allow_html = \false)
        {
        }
        public static function is_add_on_exist($add_on = 'MultiProduct')
        {
        }
        public static function update_funnel_time($funnel_id)
        {
        }
        public static function get_date_format()
        {
        }
        public static function get_sidebar_menu()
        {
        }
        public static function between($needle, $that, $inthat)
        {
        }
        public static function before($needle, $inthat)
        {
        }
        public static function after($needle, $inthat)
        {
        }
        public static function get_offer_base_url()
        {
        }
        public static function activation()
        {
        }
        public static function modify_product_obj_for_tabs($template_name = '')
        {
        }
        public static function handle_single_quote_variation($content)
        {
        }
        public static function handle_single_quote_variation_reverse($content)
        {
        }
        public static function clean_ascii_characters($content)
        {
        }
        public static function allow_iframe_tag_in_post($allowed, $context)
        {
        }
        /**
         * Returns a string with all non-ASCII characters removed. This is useful for any string functions that expect only
         * ASCII chars and can't safely handle UTF-8
         *
         * Based on the SV_WC_Helper::str_to_ascii() method developed by the masterful SkyVerge team
         *
         * Note: We must do a strict false check on the iconv() output due to a bug in PHP/glibc {@link https://bugs.php.net/bug.php?id=63450}
         *
         * @param string $string string to make ASCII
         *
         * @return string|null ASCII string or null if error occurred
         */
        public static function str_to_ascii($string)
        {
        }
        public static function remove_orphaned_transients()
        {
        }
        public static function time_exceeded()
        {
        }
        public static function memory_exceeded()
        {
        }
        public static function get_memory_limit()
        {
        }
        /**
         * Converts a shorthand byte value to an integer byte value.
         *
         * Wrapper for wp_convert_hr_to_bytes(), moved to load.php in WordPress 4.6 from media.php
         *
         * @link https://secure.php.net/manual/en/function.ini-get.php
         * @link https://secure.php.net/manual/en/faq.using.php#faq.using.shorthandbytes
         *
         * @param string $value A (PHP ini) byte value, either shorthand or ordinary.
         *
         * @return int An integer byte value.
         */
        public static function convert_hr_to_bytes($value)
        {
        }
        public static function setup_schedule_to_remove_orphaned_transients()
        {
        }
        public static function apply_discount($price, $options, $product = '')
        {
        }
        public static function plugin_active_check($basename)
        {
        }
        public static function set_active_plugins()
        {
        }
        public static function convert_memory($size)
        {
        }
        public static function get_amount_for_comparisons($total)
        {
        }
        public static function array_swap(&$array, $swap_a, $swap_b)
        {
        }
        public static function get_discount_setting($get_type = 'percentage')
        {
        }
        /**
         * Modify permalink
         *
         * @param string $post_link post link.
         * @param array $post post data.
         * @param string $leavename leave name.
         *
         * @return string
         */
        public static function post_type_permalinks($post_link, $post, $leavename)
        {
        }
        public static function wfocu_get_date_format()
        {
        }
        public static function wfocu_get_time_format()
        {
        }
        public static function get_supported_permalink_strcutures_to_normalize()
        {
        }
        /**
         * Have WordPress match postname to any of our public post types.
         * All of our public post types can have /post-name/ as the slug, so they need to be unique across all posts.
         * By default, WordPress only accounts for posts and pages where the slug is /post-name/.
         *
         * @param WP_Query $query query statement.
         */
        public static function add_cpt_post_names_to_main_query($query)
        {
        }
        public static function maybe_elementor_template($page_id, $new_page_id)
        {
        }
        /**
         * @return string
         */
        public static function get_wfocu_container_attrs()
        {
        }
    }
    /**
     * Class WFOCU_Template_Custom
     * This class used as wrapper class for the custom templates during the rendering of the template
     * In woofunnels template design structure every template inherits WFOCU_Template_Common so we need custom templates to follow the same structure
     *  */
    class WFOCU_Template_Custom extends \WFOCU_Template_Common
    {
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
    }
    class WFOCU_Template_Group_Customizer extends \WFOCU_Template_Group
    {
        public function get_templates()
        {
        }
        public function is_visible()
        {
        }
        public function get_nice_name()
        {
        }
        public function local_templates()
        {
        }
        public function get_edit_link()
        {
        }
        public function get_preview_link()
        {
        }
        public function set_up_template()
        {
        }
        /**
         * This method is responsible for serving template path from where the content should be controlled
         * since its a customizer template group each template has different path.
         * So we need to check in local templates and registered templates ( for multiple product cases) to server respective template.php
         *
         * @param string $template
         * @param array $offer_data
         *
         * @return false|mixed
         */
        public function get_template_path($template = '', $offer_data = array())
        {
        }
        public function maybe_get_template($template = '')
        {
        }
        public function handle_remote_import($data)
        {
        }
        public function update_template($template, $offer, $offer_settings)
        {
        }
    }
    class WFOCU_Template_Sp_Vsl extends \WFOCU_Customizer_Common
    {
        public $template_slug = 'sp-vsl';
        protected $section_fields = array();
        protected $offer_data = \null;
        protected $offer_products_meta = \null;
        protected $change_set = array();
        protected $sections = array('wfocu_section');
        protected $template_dir = __DIR__;
        protected $offer_id = 0;
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function add_styles($styles)
        {
        }
        public function get_sections()
        {
        }
        public function get_offer_id()
        {
        }
        public function set_offer_id($offer_id = \false)
        {
        }
        public function get_offer_data()
        {
        }
        public function set_offer_data($offer = \false)
        {
        }
        public function add_body_classes($classes)
        {
        }
        public function template_specific_css()
        {
        }
        public function get_customizer_data()
        {
        }
        public function get_group()
        {
        }
    }
    class WFOCU_Template_Sp_Classic extends \WFOCU_Customizer_Common
    {
        public $template_slug = 'sp-classic';
        protected $section_fields = array();
        protected $offer_data = \null;
        protected $offer_products_meta = \null;
        protected $change_set = array();
        protected $sections = array('wfocu_section');
        protected $template_dir = __DIR__;
        protected $offer_id = 0;
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function add_styles($styles)
        {
        }
        public function get_sections()
        {
        }
        public function get_offer_id()
        {
        }
        public function set_offer_id($offer_id = \false)
        {
        }
        public function get_offer_data()
        {
        }
        public function set_offer_data($offer = \false)
        {
        }
        public function add_body_classes($classes)
        {
        }
        public function template_specific_css()
        {
        }
        public function get_customizer_data()
        {
        }
        public function get_group()
        {
        }
    }
    //Exit if accessed directly
    /**
     * Class WFOCU_Importer
     * Handles All the methods about page builder activities
     */
    class WFOCU_Importer
    {
        public $is_imported = \false;
        public function __construct()
        {
        }
        /**
         * @return WFOCU_Importer|null
         */
        public static function get_instance()
        {
        }
        /**
         * Import our exported file
         *
         * @since 1.1.4
         */
        function maybe_import()
        {
        }
        public function import_from_json_data($funnels)
        {
        }
        public function import_customizer_data($offer_id, $customizer_content)
        {
        }
        public function import_image($url)
        {
        }
        public function maybe_deep_object($array)
        {
        }
    }
    //Exit if accessed directly
    /**
     * Class WFOCU_Exporter
     * Handles All the methods about page builder activities
     */
    class WFOCU_Exporter
    {
        public function __construct()
        {
        }
        /**
         * @return WFOCU_Exporter|null
         */
        public static function get_instance()
        {
        }
        public function maybe_export()
        {
        }
        public function maybe_export_single()
        {
        }
        public function export_a_funnel($funnel_id)
        {
        }
        protected function get_image_url($attachment_id)
        {
        }
    }
    class BWF_Admin_Settings
    {
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function maybe_register_admin_menu()
        {
        }
        public function _callback()
        {
        }
        public function maybe_open_correct_settings()
        {
        }
        public function render_tab_html($current)
        {
        }
    }
    /**
     * Creates and validates field parameters.
     *
     * @package     WFOCUKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       1.0
     */
    /**
     * Please do not use this class directly.
     * You should instead extend it per-field-type.
     */
    class WFOCUKirki_Field
    {
        /**
         * An array of the field arguments.
         *
         * @access protected
         * @var array
         */
        protected $args = array();
        /**
         * The ID of the wfocukirki_config we're using.
         *
         * @see WFOCUKirki_Config
         * @access protected
         * @var string
         */
        protected $wfocukirki_config = 'global';
        /**
         * Thje capability required so that users can edit this field.
         *
         * @access protected
         * @var string
         */
        protected $capability = 'edit_theme_options';
        /**
         * If we're using options instead of theme_mods
         * and we want them serialized, this is the option that
         * will saved in the db.
         *
         * @access protected
         * @var string
         */
        protected $option_name = '';
        /**
         * Custom input attributes (defined as an array).
         *
         * @access protected
         * @var array
         */
        protected $input_attrs = array();
        /**
         * Preset choices.
         *
         * @access protected
         * @var array
         */
        protected $preset = array();
        /**
         * CSS Variables.
         *
         * @access protected
         * @var array
         */
        protected $css_vars = array();
        /**
         * Use "theme_mod" or "option".
         *
         * @access protected
         * @var string
         */
        protected $option_type = 'theme_mod';
        /**
         * The name of this setting (id for the db).
         *
         * @access protected
         * @var string|array
         */
        protected $settings = '';
        /**
         * Set to true if you want to disable all CSS output for this field.
         *
         * @access protected
         * @var bool
         */
        protected $disable_output = \false;
        /**
         * The field type.
         *
         * @access protected
         * @var string
         */
        protected $type = 'wfocukirki-generic';
        /**
         * Some fields require options to be set.
         * We're whitelisting the property here
         * and suggest you validate this in a child class.
         *
         * @access protected
         * @var array
         */
        protected $choices = array();
        /**
         * Assign this field to a section.
         * Fields not assigned to a section will not be displayed in the customizer.
         *
         * @access protected
         * @var string
         */
        protected $section = '';
        /**
         * The default value for this field.
         *
         * @access protected
         * @var string|array|bool
         */
        protected $default = '';
        /**
         * Priority determines the position of a control inside a section.
         * Lower priority numbers move the control to the top.
         *
         * @access protected
         * @var int
         */
        protected $priority = 10;
        /**
         * Unique ID for this field.
         * This is auto-calculated from the $settings argument.
         *
         * @access protected
         * @var string
         */
        protected $id = '';
        /**
         * Use if you want to automatically generate CSS from this field's value.
         *
         * @see https://kirki.org/docs/arguments/output
         * @access protected
         * @var array
         */
        protected $output = array();
        /**
         * Use to automatically generate postMessage scripts.
         * Not necessary to use if you use 'transport' => 'auto'
         * and have already set an array for the 'output' argument.
         *
         * @see https://kirki.org/docs/arguments/js_vars
         * @access protected
         * @var array
         */
        protected $js_vars = array();
        /**
         * If you want to use a CSS compiler, then use this to set the variable names.
         *
         * @see https://kirki.org/docs/arguments/variables
         * @access protected
         * @var array
         */
        protected $variables = array();
        /**
         * Text that will be used in a tooltip to provide extra info for this field.
         *
         * @access protected
         * @var string
         */
        protected $tooltip = '';
        /**
         * A custom callback to determine if the field should be visible or not.
         *
         * @access protected
         * @var string|array
         */
        protected $active_callback = '__return_true';
        /**
         * A custom sanitize callback that will be used to properly save the values.
         *
         * @access protected
         * @var string|array
         */
        protected $sanitize_callback = '';
        /**
         * Use 'refresh', 'postMessage' or 'auto'.
         * 'auto' will automatically geberate any 'js_vars' from the 'output' argument.
         *
         * @access protected
         * @var string
         */
        protected $transport = 'refresh';
        /**
         * Define dependencies to show/hide this field based on the values of other fields.
         *
         * @access protected
         * @var array
         */
        protected $required = array();
        /**
         * Partial Refreshes array.
         *
         * @access protected
         * @var array
         */
        protected $partial_refresh = array();
        /**
         * The class constructor.
         * Parses and sanitizes all field arguments.
         * Then it adds the field to WFOCUKirki::$fields.
         *
         * @access public
         * @param string $config_id    The ID of the config we want to use.
         *                             Defaults to "global".
         *                             Configs are handled by the WFOCUKirki_Config class.
         * @param array  $args         The arguments of the field.
         */
        public function __construct($config_id = 'global', $args = array())
        {
        }
        /**
         * Processes the field arguments
         *
         * @access protected
         */
        protected function set_field()
        {
        }
        /**
         * Escape $wfocukirki_config.
         *
         * @access protected
         */
        protected function set_wfocukirki_config()
        {
        }
        /**
         * Escape $option_name.
         *
         * @access protected
         */
        protected function set_option_name()
        {
        }
        /**
         * Escape the $section.
         *
         * @access protected
         */
        protected function set_section()
        {
        }
        /**
         * Escape the $section.
         *
         * @access protected
         */
        protected function set_input_attrs()
        {
        }
        /**
         * Checks the capability chosen is valid.
         * If not, then falls back to 'edit_theme_options'
         *
         * @access protected
         */
        protected function set_capability()
        {
        }
        /**
         * Make sure we're using the correct option_type
         *
         * @access protected
         */
        protected function set_option_type()
        {
        }
        /**
         * Modifications for partial refreshes.
         *
         * @access protected
         */
        protected function set_partial_refresh()
        {
        }
        /**
         * Sets the settings.
         * If we're using serialized options it makes sure that settings are properly formatted.
         * We'll also be escaping all setting names here for consistency.
         *
         * @access protected
         */
        protected function set_settings()
        {
        }
        /**
         * Sets the active_callback
         * If we're using the $required argument,
         * Then this is where the switch is made to our evaluation method.
         *
         * @access protected
         */
        protected function set_active_callback()
        {
        }
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
        /**
         * Sets the $id.
         * Setting the ID should happen after the 'settings' sanitization.
         * This way we can also properly handle cases where the option_type is set to 'option'
         * and we're using an array instead of individual options.
         *
         * @access protected
         */
        protected function set_id()
        {
        }
        /**
         * Sets the $choices.
         *
         * @access protected
         */
        protected function set_choices()
        {
        }
        /**
         * Escapes the $disable_output.
         *
         * @access protected
         */
        protected function set_disable_output()
        {
        }
        /**
         * Sets the $sanitize_callback
         *
         * @access protected
         */
        protected function set_output()
        {
        }
        /**
         * Sets the $js_vars
         *
         * @access protected
         */
        protected function set_js_vars()
        {
        }
        /**
         * Sets the $variables
         *
         * @access protected
         */
        protected function set_variables()
        {
        }
        /**
         * Sets the $transport
         *
         * @access protected
         */
        protected function set_transport()
        {
        }
        /**
         * Sets the $required
         *
         * @access protected
         */
        protected function set_required()
        {
        }
        /**
         * Sets the $priority
         *
         * @access protected
         */
        protected function set_priority()
        {
        }
        /**
         * Sets the $css_vars
         *
         * @access protected
         */
        protected function set_css_vars()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_WFOCUKirki_Generic extends \WFOCUKirki_Field
    {
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
        /**
         * Sets the $choices
         *
         * @access protected
         */
        protected function set_choices()
        {
        }
        /**
         * Sets the $sanitize_callback
         *
         * @access protected
         */
        protected function set_sanitize_callback()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.3.2
     */
    /**
     * This is simply an alias for the WFOCUKirki_Field_WFOCUKirki_Generic class.
     */
    class WFOCUKirki_Field_Generic extends \WFOCUKirki_Field_WFOCUKirki_Generic
    {
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Select extends \WFOCUKirki_Field
    {
        /**
         * Use only on select controls.
         * Defines if this is a multi-select or not.
         * If value is > 1, then the maximum number of selectable options
         * is the number defined here.
         *
         * @access protected
         * @var integer
         */
        protected $multiple = 1;
        /**
         * Placeholder text.
         *
         * @access protected
         * @since 3.0.21
         * @var string|false
         */
        protected $placeholder = \false;
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
        /**
         * Sets the $multiple
         *
         * @access protected
         */
        protected function set_multiple()
        {
        }
        /**
         * The placeholder text.
         *
         * @access protected
         * @since 3.0.21
         */
        protected function set_placeholder()
        {
        }
        /**
         * Sets the $sanitize_callback
         *
         * @access protected
         */
        protected function set_sanitize_callback()
        {
        }
        /**
         * Sanitizes select control values.
         *
         * @since 2.2.8
         * @access public
         * @param array $value The value.
         * @return string|array
         */
        public function sanitize($value)
        {
        }
        /**
         * Sets the default value.
         *
         * @access protected
         * @since 3.0.0
         */
        protected function set_default()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Preset extends \WFOCUKirki_Field_Select
    {
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
        /**
         * Set the preset.
         *
         * @access protected
         * @since 3.0.28
         */
        protected function set_preset()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * This is nothing more than an alias for the WFOCUKirki_Field_Select class.
     * In older versions of WFOCUKirki there was a separate 'select2' field.
     * This exists here just for compatibility purposes.
     */
    class WFOCUKirki_Field_Select2_Multiple extends \WFOCUKirki_Field_Select
    {
        /**
         * Sets the $multiple
         *
         * @access protected
         */
        protected function set_multiple()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_URL extends \WFOCUKirki_Field_WFOCUKirki_Generic
    {
        /**
         * Sets the $choices
         *
         * @access protected
         */
        protected function set_choices()
        {
        }
        /**
         * Sets the $sanitize_callback
         *
         * @access protected
         */
        protected function set_sanitize_callback()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Dashicons extends \WFOCUKirki_Field
    {
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
        /**
         * Sets the $sanitize_callback
         *
         * @access protected
         */
        protected function set_sanitize_callback()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Radio extends \WFOCUKirki_Field
    {
        /**
         * Whitelisting for backwards-compatibility.
         *
         * @access protected
         * @var string
         */
        protected $mode = '';
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
        /**
         * Sets the $sanitize_callback
         *
         * @access protected
         */
        protected function set_sanitize_callback()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * This is nothing more than an alias for the WFOCUKirki_Field_Select class.
     * In older versions of WFOCUKirki there was a separate 'select2' field.
     * This exists here just for compatibility purposes.
     */
    class WFOCUKirki_Field_Select2 extends \WFOCUKirki_Field_Select
    {
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.3.2
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Sortable extends \WFOCUKirki_Field
    {
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
        /**
         * Sets the $sanitize_callback.
         *
         * @access protected
         */
        protected function set_sanitize_callback()
        {
        }
        /**
         * Sanitizes sortable values.
         *
         * @access public
         * @param array $value The checkbox value.
         * @return array
         */
        public function sanitize($value = array())
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Image extends \WFOCUKirki_Field
    {
        /**
         * Custom labels.
         * This only exists here for backwards-compatibility purposes.
         *
         * @access public
         * @since 3.0.23
         * @var string
         */
        public $button_labels = array();
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
        protected function set_button_labels()
        {
        }
        /**
         * Set the choices.
         * Adds a pseudo-element "controls" that helps with the JS API.
         *
         * @access protected
         */
        protected function set_choices()
        {
        }
        /**
         * Sets the $sanitize_callback
         *
         * @access protected
         */
        protected function set_sanitize_callback()
        {
        }
        /**
         * The sanitize method that will be used as a falback
         *
         * @param string|array $value The control's value.
         */
        public function sanitize($value)
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Color extends \WFOCUKirki_Field
    {
        /**
         * Backwards compatibility.
         *
         * @access protected
         * @var bool
         */
        protected $alpha = \false;
        /**
         * Mode (hue)
         *
         * @access protected
         * @var string
         */
        protected $mode = 'full';
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
        /**
         * Sets the $choices
         *
         * @access protected
         */
        protected function set_choices()
        {
        }
        /**
         * Sets the $sanitize_callback
         *
         * @access protected
         */
        protected function set_sanitize_callback()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Color_Alpha extends \WFOCUKirki_Field_Color
    {
        /**
         * Sets the $choices
         *
         * @access protected
         */
        protected function set_choices()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Upload extends \WFOCUKirki_Field
    {
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
        /**
         * Sets the $sanitize_callback
         *
         * @access protected
         */
        protected function set_sanitize_callback()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Link extends \WFOCUKirki_Field_URL
    {
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Custom extends \WFOCUKirki_Field
    {
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
        /**
         * Sets the $sanitize_callback
         *
         * @access protected
         */
        protected function set_sanitize_callback()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Textarea extends \WFOCUKirki_Field_WFOCUKirki_Generic
    {
        /**
         * Sets the $choices
         *
         * @access protected
         */
        protected function set_choices()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Multicolor extends \WFOCUKirki_Field
    {
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
        /**
         * Sets the $choices
         *
         * @access protected
         */
        protected function set_choices()
        {
        }
        /**
         * Sets the $sanitize_callback
         *
         * @access protected
         */
        protected function set_sanitize_callback()
        {
        }
        /**
         * The method that will be used as a `sanitize_callback`.
         *
         * @param array $value The value to be sanitized.
         * @return array The value.
         */
        public function sanitize($value)
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Radio_Image extends \WFOCUKirki_Field_Radio
    {
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Palette extends \WFOCUKirki_Field_Radio
    {
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Radio_Buttonset extends \WFOCUKirki_Field_Radio
    {
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Number extends \WFOCUKirki_Field
    {
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
        /**
         * Sets the $sanitize_callback
         *
         * @access protected
         */
        protected function set_sanitize_callback()
        {
        }
        /**
         * Sets the $choices
         *
         * @access protected
         */
        protected function set_choices()
        {
        }
        /**
         * Sanitizes numeric values.
         *
         * @access public
         * @param integer|string $value The checkbox value.
         * @return bool
         */
        public function sanitize($value = 0)
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Slider extends \WFOCUKirki_Field_Number
    {
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Prior to version 0.8 there was a separate 'group-title' field.
     * This exists here just for backwards-compatibility purposes.
     */
    class WFOCUKirki_Field_Group_Title extends \WFOCUKirki_Field_Custom
    {
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Dimensions extends \WFOCUKirki_Field
    {
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
        /**
         * Sets the $sanitize_callback.
         *
         * @access protected
         */
        protected function set_sanitize_callback()
        {
        }
        /**
         * Sanitizes the value.
         *
         * @access public
         * @param array $value The value.
         * @return array
         */
        public function sanitize($value)
        {
        }
        /**
         * Set the choices.
         * Adds a pseudo-element "controls" that helps with the JS API.
         *
         * @access protected
         */
        protected function set_choices()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Spacing extends \WFOCUKirki_Field_Dimensions
    {
        /**
         * Set the choices.
         * Adds a pseudo-element "controls" that helps with the JS API.
         *
         * @access protected
         */
        protected function set_choices()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.3.2
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Color_Palette extends \WFOCUKirki_Field
    {
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Repeater extends \WFOCUKirki_Field
    {
        /**
         * Used only on repeaters.
         * Contains an array of the fields.
         *
         * @access protected
         * @var array
         */
        protected $fields = array();
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
        /**
         * Sets the $transport
         *
         * @access protected
         */
        protected function set_transport()
        {
        }
        /**
         * Sets the $sanitize_callback
         *
         * @access protected
         */
        protected function set_sanitize_callback()
        {
        }
        /**
         * The sanitize method that will be used as a falback
         *
         * @param string|array $value The control's value.
         */
        public function sanitize($value)
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Checkbox extends \WFOCUKirki_Field
    {
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
        /**
         * Sets the $sanitize_callback.
         *
         * @access protected
         */
        protected function set_sanitize_callback()
        {
        }
        /**
         * Sanitizes checkbox values.
         *
         * @access public
         * @param boolean|integer|string|null $value The checkbox value.
         * @return bool
         */
        public function sanitize($value = \null)
        {
        }
        /**
         * Sets the default value.
         *
         * @access protected
         */
        protected function set_default()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Switch extends \WFOCUKirki_Field_Checkbox
    {
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
        /**
         * Sets the control choices.
         *
         * @access protected
         */
        protected function set_choices()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.3.2
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Dimension extends \WFOCUKirki_Field
    {
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
        /**
         * Sanitizes the value.
         *
         * @access public
         * @param string $value The value.
         * @return string
         */
        public function sanitize($value)
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Toggle extends \WFOCUKirki_Field_Checkbox
    {
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.0
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Background extends \WFOCUKirki_Field
    {
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
        /**
         * Sets the $sanitize_callback
         *
         * @access protected
         */
        protected function set_sanitize_callback()
        {
        }
        /**
         * Sanitizes typography controls
         *
         * @since 2.2.0
         * @param array $value The value.
         * @return array
         */
        public function sanitize($value)
        {
        }
        /**
         * Sets the $js_vars
         *
         * @access protected
         */
        protected function set_js_vars()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Text extends \WFOCUKirki_Field_WFOCUKirki_Generic
    {
        /**
         * Sets the $choices
         *
         * @access protected
         */
        protected function set_choices()
        {
        }
        /**
         * Sets the $sanitize_callback
         *
         * @access protected
         */
        protected function set_sanitize_callback()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Typography extends \WFOCUKirki_Field
    {
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
        /**
         * The class constructor.
         * Parses and sanitizes all field arguments.
         * Then it adds the field to WFOCUKirki::$fields.
         *
         * @access public
         * @param string $config_id    The ID of the config we want to use.
         *                             Defaults to "global".
         *                             Configs are handled by the WFOCUKirki_Config class.
         * @param array  $args         The arguments of the field.
         */
        public function __construct($config_id = 'global', $args = array())
        {
        }
        /**
         * Sets the default value.
         *
         * @access protected
         */
        protected function set_default()
        {
        }
        /**
         * Sets the $sanitize_callback
         *
         * @access protected
         */
        protected function set_sanitize_callback()
        {
        }
        /**
         * Sets the $js_vars
         *
         * @access protected
         */
        protected function set_js_vars()
        {
        }
        /**
         * Sanitizes typography controls
         *
         * @static
         * @since 2.2.0
         * @param array $value The value.
         * @return array
         */
        public static function sanitize($value)
        {
        }
        /**
         * Sets the $choices
         *
         * @access protected
         * @since 3.0.0
         */
        protected function set_choices()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Multicheck extends \WFOCUKirki_Field
    {
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
        /**
         * Sets the $sanitize_callback
         *
         * @access protected
         */
        protected function set_sanitize_callback()
        {
        }
        /**
         * The sanitize method that will be used as a falback
         *
         * @param string|array $value The control's value.
         */
        public function sanitize($value)
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Code extends \WFOCUKirki_Field
    {
        /**
         * The code_type (MIME type).
         *
         * @access public
         * @since 3.0.21
         * @var string
         */
        public $code_type = 'text/css';
        /**
         * Code editor settings.
         *
         * @see wp_enqueue_code_editor()
         * @since 3.0.21
         * @access public
         * @var array|false
         */
        public $editor_settings = array();
        /**
         * Custom input attributes (defined as an array).
         *
         * @access public
         * @since 3.0.21
         * @var array
         */
        public $input_attrs = array('aria-describedby' => 'wfocukirki-code editor-keyboard-trap-help-1 editor-keyboard-trap-help-2 editor-keyboard-trap-help-3 editor-keyboard-trap-help-4');
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
        /**
         * Sets the $choices
         *
         * @access protected
         */
        protected function set_choices()
        {
        }
        /**
         * Sets the $sanitize_callback
         *
         * @access protected
         */
        protected function set_sanitize_callback()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Date extends \WFOCUKirki_Field
    {
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
        /**
         * Sets the $sanitize_callback
         *
         * @access protected
         */
        protected function set_sanitize_callback()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_Editor extends \WFOCUKirki_Field
    {
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
        /**
         * Sets the $sanitize_callback
         *
         * @access protected
         */
        protected function set_sanitize_callback()
        {
        }
    }
    /**
     * Override field methods
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.0
     */
    /**
     * Field overrides.
     */
    class WFOCUKirki_Field_FontAwesome extends \WFOCUKirki_Field
    {
        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {
        }
        /**
         * Sets the $sanitize_callback
         *
         * @access protected
         */
        protected function set_sanitize_callback()
        {
        }
    }
    /**
     * The color calculations class.
     */
    class ariColor
    {
        /**
         * An array of our instances.
         *
         * @static
         * @access public
         * @since 1.0.0
         * @var array
         */
        public static $instances = array();
        /**
         * The color initially set.
         *
         * @access public
         * @since 1.0.0
         * @var mixed
         */
        public $color;
        /**
         * A fallback color in case of failure.
         *
         * @access public
         * @since 1.0.0
         * @var mixed
         */
        public $fallback = '#ffffff';
        /**
         * Fallback object from the fallback color.
         *
         * @access public
         * @since 1.0.0
         * @var object
         */
        public $fallback_obj;
        /**
         * The mode we're using for this color.
         *
         * @access public
         * @since 1.0.0
         * @var string
         */
        public $mode = 'hex';
        /**
         * An array containing all word-colors (white/blue/red etc)
         * and their corresponding HEX codes.
         *
         * @access public
         * @since 1.0.0
         * @var array
         */
        public $word_colors = array();
        /**
         * The hex code of the color.
         *
         * @access public
         * @since 1.0.0
         * @var string
         */
        public $hex;
        /**
         * Red value.
         *
         * @access public
         * @since 1.0.0
         * @var int
         */
        public $red = 0;
        /**
         * Green value.
         *
         * @access public
         * @since 1.0.0
         * @var int
         */
        public $green = 0;
        /**
         * Blue value.
         *
         * @access public
         * @since 1.0.0
         * @var int
         */
        public $blue = 0;
        /**
         * Alpha value (min:0, max: 1)
         *
         * @access public
         * @since 1.0.0
         * @var float
         */
        public $alpha = 1;
        /**
         * Hue value.
         *
         * @access public
         * @since 1.0.0
         * @var float
         */
        public $hue;
        /**
         * Saturation value.
         *
         * @access public
         * @since 1.0.0
         * @var float
         */
        public $saturation;
        /**
         * Lightness value.
         *
         * @access public
         * @since 1.0.0
         * @var float
         */
        public $lightness;
        /**
         * Chroma value.
         *
         * @access public
         * @since 1.0.0
         * @var float
         */
        public $chroma;
        /**
         * An array containing brightnesses.
         *
         * @access public
         * @since 1.0.0
         * @var array
         */
        public $brightness = array();
        /**
         * Luminance value.
         *
         * @access public
         * @since 1.0.0
         * @var float
         */
        public $luminance;
        /**
         * The class constructor.
         *
         * @access protected
         * @since 1.0.0
         * @param string|array $color The color.
         * @param string       $mode  The color mode. Leave empty to auto-detect.
         */
        protected function __construct($color = '', $mode = 'auto')
        {
        }
        /**
         * Gets an instance for this color.
         * We use a separate instance per color
         * because there's no need to create a completely new instance each time we call this class.
         * Instead using instances helps us improve performance & footprint.
         *
         * @static
         * @access public
         * @since 1.0.0
         * @param string|array $color The color.
         * @param string       $mode  Mode to be used.
         * @return ariColor    (object)
         */
        public static function newColor($color, $mode = 'auto')
        {
        }
        /**
         * Alias of the newColor method.
         *
         * @static
         * @access public
         * @since 1.1
         * @param string|array $color The color.
         * @param string       $mode  Mode to be used.
         * @return ariColor    (object)
         */
        public static function new_color($color, $mode = 'auto')
        {
        }
        /**
         * Allows us to get a new instance by modifying a property of the existing one.
         *
         * @access public
         * @since 1.0.0
         * @param string           $property   Can be one of the following:
         *                             red,
         *                             green,
         *                             blue,
         *                             alpha,
         *                             hue,
         *                             saturation,
         *                             lightness,
         *                             brightness.
         * @param int|float|string $value      The new value.
         * @return ariColor|null
         */
        public function getNew($property = '', $value = '')
        {
        }
        /**
         * Allias for the getNew method.
         *
         * @access public
         * @since 1.1.0
         * @param string           $property   Can be one of the following:
         *                             red,
         *                             green,
         *                             blue,
         *                             alpha,
         *                             hue,
         *                             saturation,
         *                             lightness,
         *                             brightness.
         * @param int|float|string $value      The new value.
         * @return ariColor|null
         */
        public function get_new($property = '', $value = '')
        {
        }
        /**
         * Figure out what mode we're using.
         *
         * @access public
         * @since 1.0.0
         * @param string|array $color The color we're querying.
         * @return string
         */
        public function get_mode($color)
        {
        }
        /**
         * Starts with a HEX color and calculates all other properties.
         *
         * @access protected
         * @since 1.0.0
         * @return null
         */
        protected function from_hex()
        {
        }
        /**
         * Starts with an RGB color and calculates all other properties.
         *
         * @access protected
         * @since 1.0.0
         * @return null
         */
        protected function from_rgb()
        {
        }
        /**
         * Starts with an RGBA color and calculates all other properties.
         *
         * @access protected
         * @since 1.0.0
         * @return null
         */
        protected function from_rgba()
        {
        }
        /**
         * Starts with an HSL color and calculates all other properties.
         *
         * @access protected
         * @since 1.0.0
         * @return null
         */
        protected function from_hsl()
        {
        }
        /**
         * Starts with an HSLA color and calculates all other properties.
         *
         * @access protected
         * @since 1.0.0
         * @return null
         */
        protected function from_hsla()
        {
        }
        /**
         * Generates the HEX value of a color given values for $red, $green, $blue.
         *
         * @access protected
         * @since 1.0.0
         * @param int|string $red   The red value of this color.
         * @param int|string $green The green value of this color.
         * @param int|string $blue  The blue value of this color.
         * @return string
         */
        protected function rgb_to_hex($red, $green, $blue)
        {
        }
        /**
         * Convert a decimal value to hex and make sure it's 2 characters.
         *
         * @access protected
         * @since 1.0.0
         * @param int|string $value The value to convert.
         * @return string
         */
        protected function dexhex_double_digit($value)
        {
        }
        /**
         * Calculates the red, green, blue values of an HSL color.
         *
         * @access protected
         * @since 1.0.0
         * @see https://gist.github.com/brandonheyer/5254516
         */
        protected function from_hsl_array()
        {
        }
        /**
         * Returns a CSS-formatted value for colors.
         *
         * @access public
         * @since 1.0.0
         * @param string $mode The mode we're using.
         * @return string
         */
        public function toCSS($mode = 'hex')
        {
        }
        /**
         * Alias for the toCSS method.
         *
         * @access public
         * @since 1.1
         * @param string $mode The mode we're using.
         * @return string
         */
        public function to_css($mode = 'hex')
        {
        }
        /**
         * Sets the HSL values of a color based on the values of red, green, blue.
         *
         * @access public
         * @since 1.0.0
         */
        protected function set_hsl()
        {
        }
        /**
         * Sets the brightness of a color based on the values of red, green, blue.
         *
         * @access protected
         * @since 1.0.0
         */
        protected function set_brightness()
        {
        }
        /**
         * Sets the luminance of a color (range:0-255) based on the values of red, green, blue.
         *
         * @access protected
         * @since 1.0.0
         */
        protected function set_luminance()
        {
        }
        /**
         * Gets an array of all the wordcolors.
         *
         * @access protected
         * @since 1.0.0
         * @return array
         */
        protected function get_word_colors()
        {
        }
        /**
         * Use fallback object.
         *
         * @access protected
         * @since 1.2.0
         */
        protected function from_fallback()
        {
        }
        /**
         * Handle non-existing public methods.
         *
         * @access public
         * @since 1.1.0
         * @param string $name      The method name.
         * @param mixed  $arguments The method arguments.
         * @return mixed
         */
        public function __call($name, $arguments)
        {
        }
        /**
         * Handle non-existing public static methods.
         *
         * @static
         * @access public
         * @since 1.1.0
         * @param string $name      The method name.
         * @param mixed  $arguments The method arguments.
         * @return mixed
         */
        public static function __callStatic($name, $arguments)
        {
        }
    }
    /**
     * Helper class for color manipulation.
     */
    final class WFOCUKirki_Color extends \ariColor
    {
        /**
         * A proxy for the sanitize_color method.
         *
         * @param string|array $color The color.
         * @param bool         $hash  Whether we want to include a hash (#) at the beginning or not.
         * @return string             The sanitized hex color.
         */
        public static function sanitize_hex($color = '#FFFFFF', $hash = \true)
        {
        }
        /**
         * A proxy the sanitize_color method.
         *
         * @static
         * @access public
         * @param string $color The color.
         * @return string
         */
        public static function sanitize_rgba($color)
        {
        }
        /**
         * Sanitize colors.
         * Determine if the current value is a hex or an rgba color and call the appropriate method.
         *
         * @static
         * @access public
         * @since 0.8.5
         * @param string|array $color The color.
         * @param string       $mode  The mode to be used.
         * @return string
         */
        public static function sanitize_color($color = '', $mode = 'auto')
        {
        }
        /**
         * Gets the rgb value of a color.
         *
         * @static
         * @access public
         * @param string  $color   The color.
         * @param boolean $implode Whether we want to implode the values or not.
         * @return array|string
         */
        public static function get_rgb($color, $implode = \false)
        {
        }
        /**
         * A proxy for the sanitize_color method.
         *
         * @static
         * @access public
         * @param string|array $color The color to convert.
         * @return string The hex value of the color.
         */
        public static function rgba2hex($color)
        {
        }
        /**
         * Get the alpha channel from an rgba color.
         *
         * @static
         * @access public
         * @param string $color The rgba color formatted like rgba(r,g,b,a).
         * @return int|float    The alpha value of the color.
         */
        public static function get_alpha_from_rgba($color)
        {
        }
        /**
         * Gets the rgba value of the $color.
         *
         * @static
         * @access public
         * @param string    $color The hex value of a color.
         * @param int|float $alpha Opacity level (0-1).
         * @return string
         */
        public static function get_rgba($color = '#fff', $alpha = 1)
        {
        }
        /**
         * Strips the alpha value from an RGBA color string.
         *
         * @static
         * @access public
         * @param string $color The RGBA color string.
         * @return string       The corresponding RGB string.
         */
        public static function rgba_to_rgb($color)
        {
        }
        /**
         * Gets the brightness of the $hex color.
         *
         * @static
         * @access public
         * @param string $hex The hex value of a color.
         * @return int        Value between 0 and 255.
         */
        public static function get_brightness($hex)
        {
        }
        /**
         * Adjusts brightness of the $hex color.
         *
         * @static
         * @access public
         * @param   string  $hex    The hex value of a color.
         * @param   integer $steps  Should be between -255 and 255. Negative = darker, positive = lighter.
         * @return  string          Returns hex color.
         */
        public static function adjust_brightness($hex, $steps)
        {
        }
        /**
         * Mixes 2 hex colors.
         * The "percentage" variable is the percent of the first color.
         * to be used it the mix. default is 50 (equal mix).
         *
         * @static
         * @access public
         * @param string|false $hex1       Color.
         * @param string|false $hex2       Color.
         * @param int          $percentage A value between 0 and 100.
         * @return string                  Returns hex color.
         */
        public static function mix_colors($hex1, $hex2, $percentage)
        {
        }
        /**
         * Convert hex color to hsv.
         *
         * @static
         * @access public
         * @param string $hex The hex value of color 1.
         * @return array Returns array( 'h', 's', 'v' ).
         */
        public static function hex_to_hsv($hex)
        {
        }
        /**
         * Convert hex color to hsv.
         *
         * @static
         * @access public
         * @param string $color The rgb color to convert array( 'r', 'g', 'b' ).
         * @return array Returns array( 'h', 's', 'v' ).
         */
        public static function rgb_to_hsv($color = array())
        {
        }
        /**
         * This is a very simple algorithm that works by summing up the differences between the three color components red, green and blue.
         * A value higher than 500 is recommended for good readability.
         *
         * @static
         * @access public
         * @param string $color_1 The 1st color.
         * @param string $color_2 The 2nd color.
         * @return string
         */
        public static function color_difference($color_1 = '#ffffff', $color_2 = '#000000')
        {
        }
        /**
         * This function tries to compare the brightness of the colors.
         * A return value of more than 125 is recommended.
         * Combining it with the color_difference function above might make sense.
         *
         * @static
         * @access public
         * @param string $color_1 The 1st color.
         * @param string $color_2 The 2nd color.
         * @return string
         */
        public static function brightness_difference($color_1 = '#ffffff', $color_2 = '#000000')
        {
        }
        /**
         * Uses the luminosity to calculate the difference between the given colors.
         * The returned value should be bigger than 5 for best readability.
         *
         * @static
         * @access public
         * @param string $color_1 The 1st color.
         * @param string $color_2 The 2nd color.
         * @return string
         */
        public static function lumosity_difference($color_1 = '#ffffff', $color_2 = '#000000')
        {
        }
    }
    /**
     * Adds a color & color-alpha control
     *
     * @see https://github.com/23r9i0/wp-color-picker-alpha
     */
    class WFOCUKirki_Control_Color extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-color';
        /**
         * Colorpicker palette
         *
         * @access public
         * @var bool
         */
        public $palette = \true;
        /**
         * Mode.
         *
         * @since 3.0.12
         * @var string
         */
        public $mode = 'full';
        /**
         * Refresh the parameters passed to the JavaScript via JSON.
         *
         * @access public
         */
        public function to_json()
        {
        }
    }
    /**
     * Radio Image control (modified radio).
     */
    class WFOCUKirki_Control_Radio_Image extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-radio-image';
        /**
         * Refresh the parameters passed to the JavaScript via JSON.
         *
         * @see WP_Customize_Control::to_json()
         */
        public function to_json()
        {
        }
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * The "custom" control allows you to add any raw HTML.
     */
    class WFOCUKirki_Control_Custom extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-custom';
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Multicolor control.
     */
    class WFOCUKirki_Control_Multicolor extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-multicolor';
        /**
         * Enable/Disable Alpha channel on color pickers
         *
         * @access public
         * @var boolean
         */
        public $alpha = \true;
        /**
         * Refresh the parameters passed to the JavaScript via JSON.
         *
         * @access public
         */
        public function to_json()
        {
        }
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Customizer Control: image.
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.23
     */
    /**
     * Adds the image control.
     */
    class WFOCUKirki_Control_Upload extends \WP_Customize_Upload_Control
    {
        /**
         * Whitelisting the "required" argument.
         *
         * @since 3.0.17
         * @access public
         * @var array
         */
        public $required = array();
        /**
         * Refresh the parameters passed to the JavaScript via JSON.
         *
         * @since 3.0.23
         *
         * @uses WP_Customize_Media_Control::to_json()
         */
        public function to_json()
        {
        }
    }
    /**
     * Select control.
     */
    class WFOCUKirki_Control_Select extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-select';
        /**
         * Placeholder text.
         *
         * @access public
         * @since 3.0.21
         * @var string|false
         */
        public $placeholder = \false;
        /**
         * Maximum number of options the user will be able to select.
         * Set to 1 for single-select.
         *
         * @access public
         * @var int
         */
        public $multiple = 1;
        /**
         * Refresh the parameters passed to the JavaScript via JSON.
         *
         * @see WP_Customize_Control::to_json()
         */
        public function to_json()
        {
        }
    }
    /**
     * Slider control (range).
     */
    class WFOCUKirki_Control_Slider extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-slider';
        /**
         * Refresh the parameters passed to the JavaScript via JSON.
         *
         * @see WP_Customize_Control::to_json()
         */
        public function to_json()
        {
        }
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Radio control
     */
    class WFOCUKirki_Control_Radio extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-radio';
    }
    /**
     * Customizer Control: cropped-image.
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.23
     */
    /**
     * Adds the image control.
     */
    class WFOCUKirki_Control_Cropped_Image extends \WP_Customize_Cropped_Image_Control
    {
        /**
         * Whitelisting the "required" argument.
         *
         * @since 3.0.17
         * @access public
         * @var array
         */
        public $required = array();
        /**
         * Refresh the parameters passed to the JavaScript via JSON.
         *
         * @since 3.0.23
         *
         * @uses WP_Customize_Media_Control::to_json()
         */
        public function to_json()
        {
        }
    }
    /**
     * Create a simple number control
     */
    class WFOCUKirki_Control_Number extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-number';
    }
    /**
     * Repeater Settings.
     */
    class WFOCUKirki_Settings_Repeater_Setting extends \WP_Customize_Setting
    {
        /**
         * Constructor.
         *
         * Any supplied $args override class property defaults.
         *
         * @access public
         * @param WP_Customize_Manager $manager The WordPress WP_Customize_Manager object.
         * @param string               $id       A specific ID of the setting. Can be a theme mod or option name.
         * @param array                $args     Setting arguments.
         */
        public function __construct($manager, $id, $args = array())
        {
        }
        /**
         * Fetch the value of the setting.
         *
         * @access public
         * @return mixed The value.
         */
        public function value()
        {
        }
        /**
         * Convert the JSON encoded setting coming from Customizer to an Array.
         *
         * @access public
         * @param string $value URL Encoded JSON Value.
         * @return array
         */
        public function sanitize_repeater_setting($value)
        {
        }
    }
    /**
     * Customizer Control: background.
     *
     * Creates a new custom control.
     * Custom controls contains all background-related options.
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       1.0
     */
    /**
     * Adds multiple input fiels that combined make up the background control.
     */
    class WFOCUKirki_Control_Background extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-background';
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Repeater control
     */
    class WFOCUKirki_Control_Repeater extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'repeater';
        /**
         * The fields that each container row will contain.
         *
         * @access public
         * @var array
         */
        public $fields = array();
        /**
         * Will store a filtered version of value for advenced fields (like images).
         *
         * @access protected
         * @var array
         */
        protected $filtered_value = array();
        /**
         * The row label
         *
         * @access public
         * @var array
         */
        public $row_label = array();
        /**
         * The button label
         *
         * @access public
         * @var string
         */
        public $button_label = '';
        /**
         * Constructor.
         * Supplied `$args` override class property defaults.
         * If `$args['settings']` is not defined, use the $id as the setting ID.
         *
         * @param WP_Customize_Manager $manager Customizer bootstrap instance.
         * @param string               $id      Control ID.
         * @param array                $args    {@see WP_Customize_Control::__construct}.
         */
        public function __construct($manager, $id, $args = array())
        {
        }
        /**
         * Refresh the parameters passed to the JavaScript via JSON.
         *
         * @access public
         */
        public function to_json()
        {
        }
        /**
         * Render the control's content.
         * Allows the content to be overriden without having to rewrite the wrapper in $this->render().
         *
         * @access protected
         */
        protected function render_content()
        {
        }
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         * Class variables for this control class are available in the `data` JS object.
         *
         * @access public
         */
        public function repeater_js_template()
        {
        }
        /**
         * Validate row-labels.
         *
         * @access protected
         * @since 3.0.0
         * @param array $args {@see WP_Customize_Control::__construct}.
         */
        protected function row_label($args)
        {
        }
    }
    /**
     * A text control with validation for CSS units.
     */
    class WFOCUKirki_Control_Dimension extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-dimension';
        /**
         * Enqueue control related scripts/styles.
         *
         * @access public
         */
        public function enqueue()
        {
        }
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Customizer Control: checkbox.
     *
     * Creates a new custom control.
     * Custom controls contains all background-related options.
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.26
     */
    /**
     * Adds a checkbox control.
     *
     * @since 3.0.26
     */
    class WFOCUKirki_Control_Checkbox extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-checkbox';
        /**
         * Render the control's content.
         * Verbatim copy from WP_Customize_Control->render_content.
         *
         * @since 3.0.26
         */
        protected function render_content()
        {
        }
    }
    /**
     * Radio Buttonset control (modified radio)
     */
    class WFOCUKirki_Control_Radio_Buttonset extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-radio-buttonset';
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Typography control.
     */
    class WFOCUKirki_Control_Typography extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-typography';
        /**
         * Refresh the parameters passed to the JavaScript via JSON.
         *
         * @see WP_Customize_Control::to_json()
         */
        public function to_json()
        {
        }
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
        /**
         * Formats variants.
         *
         * @access protected
         * @since 3.0.0
         * @param array $variants The variants.
         * @return array
         */
        protected function format_variants_array($variants)
        {
        }
    }
    /**
     * Sortable control (uses checkboxes).
     */
    class WFOCUKirki_Control_Sortable extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-sortable';
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Toggle control (modified checkbox).
     */
    class WFOCUKirki_Control_Toggle extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-toggle';
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Customizer Control: image.
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.0
     */
    /**
     * Adds the image control.
     */
    class WFOCUKirki_Control_Image extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-image';
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * A generic and pretty abstract control.
     * Allows for great manipulation using the field's "choices" argumnent.
     */
    class WFOCUKirki_Control_Generic extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-generic';
    }
    /**
     * Dimensions control.
     * multiple fields with CSS units validation.
     */
    class WFOCUKirki_Control_Dimensions extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-dimensions';
        /**
         * Refresh the parameters passed to the JavaScript via JSON.
         *
         * @see WP_Customize_Control::to_json()
         */
        public function to_json()
        {
        }
        /**
         * Enqueue control related scripts/styles.
         *
         * @access public
         */
        public function enqueue()
        {
        }
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
        /**
         * Returns an array of translation strings.
         *
         * @access protected
         * @since 3.0.0
         * @return array
         */
        protected function l10n()
        {
        }
    }
    /**
     * Adds a multicheck control.
     */
    class WFOCUKirki_Control_MultiCheck extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-multicheck';
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Adds a color-palette control.
     * This is essentially a radio control, styled as a palette.
     */
    class WFOCUKirki_Control_Color_Palette extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-color-palette';
        /**
         * Refresh the parameters passed to the JavaScript via JSON.
         *
         * @access public
         */
        public function to_json()
        {
        }
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Switch control (modified checkbox).
     */
    class WFOCUKirki_Control_Switch extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-switch';
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Palette control (modified radio).
     */
    class WFOCUKirki_Control_Palette extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-palette';
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * A simple date control, using jQuery UI.
     */
    class WFOCUKirki_Control_Date extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-date';
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Select control.
     */
    class WFOCUKirki_Control_FontAwesome extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-fontawesome';
        /**
         * Enqueue control related scripts/styles.
         *
         * @access public
         */
        public function enqueue()
        {
        }
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Dashicons control (modified radio).
     */
    class WFOCUKirki_Control_Dashicons extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-dashicons';
        /**
         * Refresh the parameters passed to the JavaScript via JSON.
         *
         * @access public
         */
        public function to_json()
        {
        }
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * A TinyMCE control.
     */
    class WFOCUKirki_Control_Editor extends \WFOCUKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-editor';
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * The actual editor is added from the WFOCUKirki_Field_Editor class.
         * All this template contains is a button that triggers the global editor on/off
         * and a hidden textarea element that is used to mirror save the options.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Adds a warning message instead of the control.
     */
    class WFOCUKirki_Control_Code extends \WFOCUKirki_Control_Base
    {
        /**
         * The message.
         *
         * @since 3.0.21
         */
        protected function content_template()
        {
        }
    }
    /**
     * Customizer Controls Init.
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.17
     */
    /**
     * Controls.
     */
    class WFOCUKirki_Controls
    {
        /**
         * Constructor.
         *
         * @access public
         * @since 3.0.17
         */
        public function __construct()
        {
        }
        /**
         * Adds underscore.js templates to the footer.
         *
         * @access public
         * @since 3.0.17
         */
        public function underscore_templates()
        {
        }
    }
    // Removed in https://github.com/aristath/kirki/pull/1682/files
    class WFOCUKirki_Active_Callback
    {
        public static function evaluate()
        {
        }
        public static function compare($value1, $value2, $operator)
        {
        }
    }
    /**
     * A simple wrapper class for static methods.
     */
    class WFOCUKirki_Sanitize_Values
    {
        /**
         * Checkbox sanitization callback.
         *
         * Sanitization callback for 'checkbox' type controls.
         * This callback sanitizes `$value` as a boolean value, either TRUE or FALSE.
         *
         * Deprecated. Use WFOCUKirki_Field_Checkbox::sanitize() instead.
         *
         * @static
         * @access public
         * @see WFOCUKirki_Field_Checkbox::sanitize()
         * @param bool|string $value Whether the checkbox is checked.
         * @return bool Whether the checkbox is checked.
         */
        public static function checkbox($value)
        {
        }
        /**
         * Sanitize number options.
         *
         * @static
         * @access public
         * @since 0.5
         * @param int|float|double|string $value The value to be sanitized.
         * @return integer|double|string
         */
        public static function number($value)
        {
        }
        /**
         * Drop-down Pages sanitization callback.
         *
         * - Sanitization: dropdown-pages
         * - Control: dropdown-pages
         *
         * Sanitization callback for 'dropdown-pages' type controls. This callback sanitizes `$page_id`
         * as an absolute integer, and then validates that $input is the ID of a published page.
         *
         * @see absint() https://developer.wordpress.org/reference/functions/absint/
         * @see get_post_status() https://developer.wordpress.org/reference/functions/get_post_status/
         *
         * @param int                  $page_id    Page ID.
         * @param WP_Customize_Setting $setting Setting instance.
         * @return int|string Page ID if the page is published; otherwise, the setting default.
         */
        public static function dropdown_pages($page_id, $setting)
        {
        }
        /**
         * Sanitizes css dimensions.
         *
         * @static
         * @access public
         * @since 2.2.0
         * @param string $value The value to be sanitized.
         * @return string
         */
        public static function css_dimension($value)
        {
        }
        /**
         * Filters numeric values.
         *
         * @static
         * @access public
         * @param string $value The value to be sanitized.
         * @return int|float
         */
        public static function filter_number($value)
        {
        }
        /**
         * Sanitize RGBA colors
         *
         * @static
         * @since 0.8.5
         * @param string $value The value to be sanitized.
         * @return string
         */
        public static function rgba($value)
        {
        }
        /**
         * Sanitize colors.
         *
         * @static
         * @since 0.8.5
         * @param string $value The value to be sanitized.
         * @return string
         */
        public static function color($value)
        {
        }
        /**
         * DOES NOT SANITIZE ANYTHING.
         *
         * @static
         * @since 0.5
         * @param int|string|array $value The value to be sanitized.
         * @return int|string|array
         */
        public static function unfiltered($value)
        {
        }
    }
    /**
     * Singleton class
     */
    final class WFOCUKirki_Toolkit
    {
        /**
         * Access the single instance of this class.
         *
         * @static
         * @access public
         * @return object WFOCUKirki_Toolkit.
         */
        public static function get_instance()
        {
        }
    }
    /**
     * Initializes WFOCUKirki
     *
     * @package     WFOCUKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       1.0
     */
    /**
     * Initialize WFOCUKirki
     */
    class WFOCUKirki_Init
    {
        /**
         * The class constructor.
         */
        public function __construct()
        {
        }
        /**
         * Properly set the WFOCUKirki URL for assets.
         *
         * @static
         * @access public
         */
        public static function set_url()
        {
        }
        /**
         * Add the default WFOCUKirki control types.
         *
         * @access public
         * @since 3.0.0
         * @param array $control_types The control types array.
         * @return array
         */
        public function default_control_types($control_types = array())
        {
        }
        /**
         * Helper function that adds the fields, sections and panels to the customizer.
         */
        public function add_to_customizer()
        {
        }
        /**
         * Register control types
         */
        public function register_control_types()
        {
        }
        /**
         * Register our panels to the WordPress Customizer.
         *
         * @access public
         */
        public function add_panels()
        {
        }
        /**
         * Register our sections to the WordPress Customizer.
         *
         * @var object The WordPress Customizer object
         */
        public function add_sections()
        {
        }
        /**
         * Create the settings and controls from the $fields array and register them.
         *
         * @var object The WordPress Customizer object.
         */
        public function add_fields()
        {
        }
        /**
         * Alias for the is_plugin static method in the WFOCUKirki_Util class.
         * This is here for backwards-compatibility purposes.
         *
         * @static
         * @access public
         * @since 3.0.0
         * @return bool
         */
        public static function is_plugin()
        {
        }
        /**
         * Alias for the get_variables static method in the WFOCUKirki_Util class.
         * This is here for backwards-compatibility purposes.
         *
         * @static
         * @access public
         * @since 2.0.0
         * @return array Formatted as array( 'variable-name' => value ).
         */
        public static function get_variables()
        {
        }
        /**
         * Remove panels.
         *
         * @since 3.0.17
         * @param object $wp_customize The customizer object.
         * @return void
         */
        public function remove_panels($wp_customize)
        {
        }
        /**
         * Remove sections.
         *
         * @since 3.0.17
         * @param object $wp_customize The customizer object.
         * @return void
         */
        public function remove_sections($wp_customize)
        {
        }
        /**
         * Remove controls.
         *
         * @since 3.0.17
         * @param object $wp_customize The customizer object.
         * @return void
         */
        public function remove_controls($wp_customize)
        {
        }
    }
    /**
     * This class acts as an interface.
     * Developers may use this object to add configurations, fields, panels and sections.
     * You can also access all available configurations, fields, panels and sections
     * by accessing the object's static properties.
     */
    class WFOCUKirki extends \WFOCUKirki_Init
    {
        /**
         * Absolute path to the WFOCUKirki folder.
         *
         * @static
         * @access public
         * @var string
         */
        public static $path;
        /**
         * URL to the WFOCUKirki folder.
         *
         * @static
         * @access public
         * @var string
         */
        public static $url;
        /**
         * An array containing all configurations.
         *
         * @static
         * @access public
         * @var array
         */
        public static $config = array();
        /**
         * An array containing all fields.
         *
         * @static
         * @access public
         * @var array
         */
        public static $fields = array();
        /**
         * An array containing all panels.
         *
         * @static
         * @access public
         * @var array
         */
        public static $panels = array();
        /**
         * An array containing all sections.
         *
         * @static
         * @access public
         * @var array
         */
        public static $sections = array();
        /**
         * An array containing all panels to be removed.
         *
         * @static
         * @access public
         * @since 3.0.17
         * @var array
         */
        public static $panels_to_remove = array();
        /**
         * An array containing all sections to be removed.
         *
         * @static
         * @access public
         * @since 3.0.17
         * @var array
         */
        public static $sections_to_remove = array();
        /**
         * An array containing all controls to be removed.
         *
         * @static
         * @access public
         * @since 3.0.17
         * @var array
         */
        public static $controls_to_remove = array();
        /**
         * Modules object.
         *
         * @access public
         * @since 3.0.0
         * @var object
         */
        public $modules;
        /**
         * Get the value of an option from the db.
         *
         * @static
         * @access public
         * @param string $config_id The ID of the configuration corresponding to this field.
         * @param string $field_id  The field_id (defined as 'settings' in the field arguments).
         * @return mixed The saved value of the field.
         */
        public static function get_option($config_id = '', $field_id = '')
        {
        }
        /**
         * Sets the configuration options.
         *
         * @static
         * @access public
         * @param string $config_id The configuration ID.
         * @param array  $args      The configuration options.
         */
        public static function add_config($config_id, $args = array())
        {
        }
        /**
         * Create a new panel.
         *
         * @static
         * @access public
         * @param string $id   The ID for this panel.
         * @param array  $args The panel arguments.
         */
        public static function add_panel($id = '', $args = array())
        {
        }
        /**
         * Remove a panel.
         *
         * @static
         * @access public
         * @since 3.0.17
         * @param string $id   The ID for this panel.
         */
        public static function remove_panel($id = '')
        {
        }
        /**
         * Create a new section.
         *
         * @static
         * @access public
         * @param string $id   The ID for this section.
         * @param array  $args The section arguments.
         */
        public static function add_section($id, $args)
        {
        }
        /**
         * Remove a section.
         *
         * @static
         * @access public
         * @since 3.0.17
         * @param string $id   The ID for this panel.
         */
        public static function remove_section($id = '')
        {
        }
        /**
         * Create a new field.
         *
         * @static
         * @access public
         * @param string $config_id The configuration ID for this field.
         * @param array  $args      The field arguments.
         */
        public static function add_field($config_id, $args)
        {
        }
        /**
         * Remove a control.
         *
         * @static
         * @access public
         * @since 3.0.17
         * @param string $id The field ID.
         */
        public static function remove_control($id)
        {
        }
        /**
         * Gets a parameter for a config-id.
         *
         * @static
         * @access public
         * @since 3.0.10
         * @param string $id    The config-ID.
         * @param string $param The parameter we want.
         * @return string
         */
        public static function get_config_param($id, $param)
        {
        }
    }
    /**
     * Processes configurations.
     *
     * @package     WFOCUKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     */
    /**
     * The WFOCUKirki_Config object
     */
    final class WFOCUKirki_Config
    {
        /**
         * The configuration ID.
         *
         * @access public
         * @var string
         */
        public $id = 'global';
        /**
         * Use this method to get an instance of your config.
         * Each config has its own instance of this object.
         *
         * @static
         * @access public
         * @param string $id     Config ID.
         * @param array  $args   {
         * Optional. Arguments to override config defaults.
         *
         *    @type string      $capability       @see https://codex.wordpress.org/Roles_and_Capabilities
         *    @type string      $option_type      theme_mod or option.
         *    @type string      $option_name      If we want to used serialized options,
         *                                        this is where we'll be adding the option name.
         *                                        All fields using this config will be items in that array.
         *    @type array       $compiler         Not yet fully implemented
         *    @type bool        $disable_output   If set to true, no CSS will be generated
         *                                        from fields using this configuration.
         * }
         *
         * @return WFOCUKirki_Config
         */
        public static function get_instance($id = 'global', $args = array())
        {
        }
        /**
         * Get the IDs of all current configs.
         *
         * @static
         * @access public
         * @since 3.0.22
         * @return array
         */
        public static function get_config_ids()
        {
        }
        /**
         * Returns the $config_final property
         *
         * @access public
         * @return array
         */
        public function get_config()
        {
        }
    }
    /**
     * Handles sections created via the WFOCUKirki API.
     *
     * @package     WFOCUKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       1.0
     */
    /**
     * Each section is a separate instrance of the WFOCUKirki_Section object.
     */
    class WFOCUKirki_Section
    {
        /**
         * The object constructor.
         *
         * @access public
         * @param array $args The section parameters.
         */
        public function __construct($args)
        {
        }
        /**
         * Adds the section using the WordPress Customizer API.
         *
         * @access public
         * @param array $args The section parameters.
         */
        public function add_section($args)
        {
        }
    }
    /**
     * WordPress Customize Setting classes
     *
     * @package WFOCUKirki
     * @subpackage Modules
     * @since 3.0.0
     */
    /**
     * Handles saving and sanitizing of user-meta.
     *
     * @since 3.0.0
     * @see WP_Customize_Setting
     */
    class WFOCUKirki_Setting_User_Meta extends \WP_Customize_Setting
    {
        /**
         * Type of customize settings.
         *
         * @access public
         * @since 3.0.0
         * @var string
         */
        public $type = 'user_meta';
        /**
         * Get the root value for a setting, especially for multidimensional ones.
         *
         * @access protected
         * @since 3.0.0
         * @param mixed $default Value to return if root does not exist.
         * @return mixed
         */
        protected function get_root_value($default = \null)
        {
        }
        /**
         * Set the root value for a setting, especially for multidimensional ones.
         *
         * @access protected
         * @since 3.0.0
         * @param mixed $value Value to set as root of multidimensional setting.
         * @return bool Whether the multidimensional root was updated successfully.
         */
        protected function set_root_value($value)
        {
        }
        /**
         * Save the value of the setting, using the related API.
         *
         * @access protected
         * @since 3.0.0
         * @param mixed $value The value to update.
         * @return bool The result of saving the value.
         */
        protected function update($value)
        {
        }
        /**
         * Fetch the value of the setting.
         *
         * @access protected
         * @since 3.0.0
         * @return mixed The value.
         */
        public function value()
        {
        }
    }
    /**
     * Controls handler
     *
     * @package     WFOCUKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     */
    /**
     * Our main WFOCUKirki_Control object
     */
    class WFOCUKirki_Control
    {
        /**
         * The $wp_customize WordPress global.
         *
         * @access protected
         * @var WP_Customize_Manager
         */
        protected $wp_customize;
        /**
         * An array of all available control types.
         *
         * @access protected
         * @var array
         */
        protected static $control_types = array();
        /**
         * The class constructor.
         * Creates the actual controls in the customizer.
         *
         * @access public
         * @param array $args The field definition as sanitized in WFOCUKirki_Field.
         */
        public function __construct($args)
        {
        }
        /**
         * Adds the control.
         *
         * @access protected
         * @param array $args The field definition as sanitized in WFOCUKirki_Field.
         */
        protected final function add_control($args)
        {
        }
    }
    /**
     * Handles modules loading.
     *
     * @package     WFOCUKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.0
     */
    /**
     * The WFOCUKirki_Modules class.
     */
    class WFOCUKirki_Modules
    {
        /**
         * Constructor.
         *
         * @access public
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Add a module.
         *
         * @static
         * @access public
         * @param string $module The classname of the module to add.
         * @since 3.0.0
         */
        public static function add_module($module)
        {
        }
        /**
         * Remove a module.
         *
         * @static
         * @access public
         * @param string $module The classname of the module to add.
         * @since 3.0.0
         */
        public static function remove_module($module)
        {
        }
        /**
         * Get the modules array.
         *
         * @static
         * @access public
         * @since 3.0.0
         * @return array
         */
        public static function get_modules()
        {
        }
        /**
         * Get the array of active modules (objects).
         *
         * @static
         * @access public
         * @since 3.0.0
         * @return array
         */
        public static function get_active_modules()
        {
        }
    }
    /**
     * Hekoers to get the values of a field.
     * WARNING: PLEASE DO NOT USE THESE.
     * we only have these for backwards-compatibility purposes.
     * please use get_option() & get_theme_mod() instead.
     *
     * @package     WFOCUKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       1.0
     */
    /**
     * Wrapper class for static methods.
     */
    class WFOCUKirki_Values
    {
        /**
         * Constructor.
         *
         * @access public
         * @since 3.0.10
         */
        public function __construct()
        {
        }
        /**
         * Tweaks for typography fields.
         *
         * @access public
         * @since 3.0.10
         * @param string|array $value    The value.
         * @param string       $field_id The field-ID.
         * @return array
         */
        public function typography_field_tweaks($value, $field_id)
        {
        }
        /**
         * Get the value of a field.
         *
         * @static
         * @access public
         * @param string $config_id The configuration ID. @see WFOCUKirki_Config.
         * @param string $field_id  The field ID.
         * @return string|array
         */
        public static function get_value($config_id = '', $field_id = '')
        {
        }
        /**
         * Gets the value or fallsback to default.
         *
         * @static
         * @access public
         * @param array $field The field aruments.
         * @return string|array
         */
        public static function get_sanitized_field_value($field)
        {
        }
    }
    /**
     * Handles panels added via the WFOCUKirki API.
     *
     * @package     WFOCUKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       1.0
     */
    /**
     * Each panel is a separate instance of the WFOCUKirki_Panel object.
     */
    class WFOCUKirki_Panel
    {
        /**
         * The class constructor.
         *
         * @access public
         * @param array $args The panel arguments.
         */
        public function __construct($args)
        {
        }
        /**
         * Add the panel using the Customizer API.
         *
         * @param array $args The panel arguments.
         */
        public function add_panel($args)
        {
        }
    }
    /**
     * A simple object containing static methods.
     */
    class WFOCUKirki_Helper
    {
        /**
         * Recursive replace in arrays.
         *
         * @static
         * @access public
         * @param array $array The first array.
         * @param array $array1 The second array.
         * @return mixed
         */
        public static function array_replace_recursive($array, $array1)
        {
        }
        /**
         * Helper method to be used from the array_replace_recursive method.
         *
         * @static
         * @access public
         * @param array $array The first array.
         * @param array $array1 The second array.
         * @return array
         */
        public static function recurse($array, $array1)
        {
        }
        /**
         * Initialize the WP_Filesystem
         *
         * @static
         * @access public
         * @return object WP_Filesystem
         */
        public static function init_filesystem()
        {
        }
        /**
         * Returns the attachment object
         *
         * @static
         * @access public
         * @see https://pippinsplugins.com/retrieve-attachment-id-from-image-url/
         * @param string $url URL to the image.
         * @return int|string Numeric ID of the attachement.
         */
        public static function get_image_id($url)
        {
        }
        /**
         * Returns an array of the attachment's properties.
         *
         * @param string $url URL to the image.
         * @return array
         */
        public static function get_image_from_url($url)
        {
        }
        /**
         * Get an array of posts.
         *
         * @static
         * @access public
         * @param array $args Define arguments for the get_posts function.
         * @return array
         */
        public static function get_posts($args)
        {
        }
        /**
         * Get an array of publicly-querable taxonomies.
         *
         * @static
         * @access public
         * @return array
         */
        public static function get_taxonomies()
        {
        }
        /**
         * Get an array of publicly-querable post-types.
         *
         * @static
         * @access public
         * @return array
         */
        public static function get_post_types()
        {
        }
        /**
         * Get an array of terms from a taxonomy
         *
         * @static
         * @access public
         * @param string|array $taxonomies See https://developer.wordpress.org/reference/functions/get_terms/ for details.
         * @return array
         */
        public static function get_terms($taxonomies)
        {
        }
        /**
         * Gets an array of material-design colors.
         *
         * @static
         * @access public
         * @param string $context Allows us to get subsets of the palette.
         * @return array
         */
        public static function get_material_design_colors($context = 'primary')
        {
        }
        /**
         * Get an array of all available dashicons.
         *
         * @static
         * @access public
         * @return array
         */
        public static function get_dashicons()
        {
        }
        /**
         * Compares the 2 values given the condition
         *
         * @param mixed  $value1   The 1st value in the comparison.
         * @param mixed  $value2   The 2nd value in the comparison.
         * @param string $operator The operator we'll use for the comparison.
         * @return boolean whether The comparison has succeded (true) or failed (false).
         */
        public static function compare_values($value1, $value2, $operator)
        {
        }
    }
    /**
     * Handles sections created via the WFOCUKirki API.
     *
     * @package     WFOCUKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       1.0
     */
    /**
     * Each setting is a separate instance
     */
    class WFOCUKirki_Settings
    {
        /**
         * TYhe global $wp_customize object.
         *
         * @access protected
         * @var WP_Customize_Manager
         */
        protected $wp_customize;
        /**
         * The setting-stypes we're using.
         *
         * @access protected
         * @var array
         */
        protected $setting_types = array();
        /**
         * Creates a new WFOCUKirki_Settings object.
         * Class constructor.
         *
         * @access public
         * @param array $args The field definition as sanitized in WFOCUKirki_Field.
         */
        public function __construct($args = array())
        {
        }
    }
    /**
     * WordPress Customize Setting classes
     *
     * @package WFOCUKirki
     * @subpackage Modules
     * @since 3.0.0
     */
    /**
     * Handles saving and sanitizing of user-meta.
     *
     * @since 3.0.0
     * @see WP_Customize_Setting
     */
    class WFOCUKirki_Setting_Site_Option extends \WP_Customize_Setting
    {
        /**
         * Type of customize settings.
         *
         * @access public
         * @since 3.0.0
         * @var string
         */
        public $type = 'site_option';
        /**
         * Get the root value for a setting, especially for multidimensional ones.
         *
         * @access protected
         * @since 3.0.0
         * @param mixed $default Value to return if root does not exist.
         * @return mixed
         */
        protected function get_root_value($default = \null)
        {
        }
        /**
         * Set the root value for a setting, especially for multidimensional ones.
         *
         * @access protected
         * @since 3.0.0
         * @param mixed $value Value to set as root of multidimensional setting.
         * @return bool Whether the multidimensional root was updated successfully.
         */
        protected function set_root_value($value)
        {
        }
        /**
         * Save the value of the setting, using the related API.
         *
         * @access protected
         * @since 3.0.0
         * @param mixed $value The value to update.
         * @return bool The result of saving the value.
         */
        protected function update($value)
        {
        }
        /**
         * Fetch the value of the setting.
         *
         * @access protected
         * @since 3.0.0
         * @return mixed The value.
         */
        public function value()
        {
        }
    }
    /**
     * Additional tweaks for sections.
     *
     * @package     WFOCUKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.17
     */
    /**
     * Additional tweaks for sections.
     */
    class WFOCUKirki_Sections
    {
        /**
         * The object constructor.
         *
         * @access public
         * @since 3.0.17
         */
        public function __construct()
        {
        }
        /**
         * Generate CSS for the outer sections.
         * These are by default hidden, we need to expose them.
         *
         * @since 3.0.17
         * @return void
         */
        public function outer_sections_css()
        {
        }
    }
    /**
     * A utility class for WFOCUKirki.
     *
     * @package     WFOCUKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.9
     */
    /**
     * Utility class.
     */
    class WFOCUKirki_Util
    {
        /**
         * Constructor.
         *
         * @since 3.0.9
         * @access public
         */
        public function __construct()
        {
        }
        /**
         * Determine if WFOCUKirki is installed as a plugin.
         *
         * @static
         * @access public
         * @since 3.0.0
         * @return bool
         */
        public static function is_plugin()
        {
        }
        /**
         * Build the variables.
         *
         * @static
         * @access public
         * @since 3.0.9
         * @return array Formatted as array( 'variable-name' => value ).
         */
        public static function get_variables()
        {
        }
        /**
         * HTTP Request injection.
         *
         * @access public
         * @since 3.0.0
         * @param array  $request The request params.
         * @param string $url     The request URL.
         * @return array
         */
        public function http_request($request = array(), $url = '')
        {
        }
        /**
         * Returns the $wp_version.
         *
         * @static
         * @access public
         * @since 3.0.12
         * @param string  $context      Use 'minor' or 'major'.
         * @param boolean $only_numeric Set to true if you want to skip the alpha/beta etc parts.
         * @return int|float|string     Returns integer when getting the 'major' version.
         *                              Returns float when getting the 'minor' version with $only_numeric set to true.
         *                              Returns string when getting the 'minor' version with $only_numeric set to false.
         */
        public static function get_wp_version($context = 'minor', $only_numeric = \true)
        {
        }
    }
    /**
     * Internationalization helper.
     *
     * @package     WFOCUKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       1.0
     */
    /**
     * Handles translations
     */
    class WFOCUKirki_L10n
    {
        /**
         * The class constructor.
         * Adds actions & filters to handle the rest of the methods.
         *
         * @access public
         */
        public function __construct()
        {
        }
        /**
         * Load the plugin textdomain
         *
         * @access public
         */
        public function load_textdomain()
        {
        }
        /**
         * Gets the path to a translation file.
         *
         * @access protected
         * @return string Absolute path to the translation file.
         */
        protected function get_path()
        {
        }
        /**
         * Returns an array of paths where translation files may be located.
         *
         * @access protected
         * @return array
         */
        protected function get_paths()
        {
        }
        /**
         * Allows overriding the "wfocukirki" textdomain from a theme.
         *
         * @since 3.0.12
         * @access public
         * @param bool   $override Whether to override the .mo file loading. Default false.
         * @param string $domain   Text domain. Unique identifier for retrieving translated strings.
         * @param string $mofile   Path to the MO file.
         * @return bool
         */
        public function override_load_textdomain($override, $domain, $mofile)
        {
        }
    }
    /**
     * The WFOCUKirki autoloader.
     * Handles locating and loading other class-files.
     *
     * @package     WFOCUKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       1.0
     */
    /**
     * Autoloader class.
     *
     * @since 3.0.10
     */
    class WFOCUKirki_Autoload
    {
        /**
         * Class constructor.
         *
         * @access public
         * @since 3.0.10
         */
        public function __construct()
        {
        }
        /**
         * The WFOCUKirki class autoloader.
         * Finds the path to a class that we're requiring and includes the file.
         *
         * @access protected
         * @since 3.0.10
         *
         * @param string $class_name The name of the class we're trying to load.
         */
        protected function autoload($class_name)
        {
        }
        /**
         * Get an array of possible paths for the file.
         *
         * @access protected
         * @since 3.0.10
         *
         * @param string $class_name The name of the class we're trying to load.
         *
         * @return array
         */
        protected function get_paths($class_name)
        {
        }
    }
    /**
     * Handles sections created via the WFOCUKirki API.
     *
     * @package     WFOCUKirki
     * @category    Modules
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.0
     */
    /**
     * Handle selective refreshes introduced in WordPress 4.5.
     */
    class WFOCUKirki_Modules_Selective_Refresh
    {
        /**
         * Adds any necessary actions & filters.
         *
         * @access protected
         */
        protected function __construct()
        {
        }
        /**
         * Gets an instance of this object.
         * Prevents duplicate instances which avoid artefacts and improves performance.
         *
         * @static
         * @access public
         * @since 3.0.0
         * @return object
         */
        public static function get_instance()
        {
        }
        /**
         * Parses all fields and searches for the "partial_refresh" argument inside them.
         * If that argument is found, then it starts parsing the array of arguments.
         * Registers a selective_refresh in the customizer for each one of them.
         *
         * @param object $wp_customize WP_Customize_Manager.
         */
        public function register_partials($wp_customize)
        {
        }
    }
    /**
     * Adds script for tooltips.
     */
    class WFOCUKirki_Modules_Tooltips
    {
        /**
         * The class constructor
         *
         * @access protected
         * @since 3.0.0
         */
        protected function __construct()
        {
        }
        /**
         * Gets an instance of this object.
         * Prevents duplicate instances which avoid artefacts and improves performance.
         *
         * @static
         * @access public
         * @since 3.0.0
         * @return object
         */
        public static function get_instance()
        {
        }
        /**
         * Allows us to add a tooltip to any control.
         *
         * @access public
         * @since 4.2.0
         * @param string $field_id The field-ID.
         * @param string $tooltip  The tooltip content.
         */
        public function add_tooltip($field_id, $tooltip)
        {
        }
        /**
         * Enqueue scripts.
         *
         * @access public
         * @since 3.0.0
         */
        public function customize_controls_print_footer_scripts()
        {
        }
    }
    /**
     * Adds styles to the customizer.
     */
    class WFOCUKirki_Modules_Customizer_Styling
    {
        /**
         * Constructor.
         *
         * @access protected
         */
        protected function __construct()
        {
        }
        /**
         * Gets an instance of this object.
         * Prevents duplicate instances which avoid artefacts and improves performance.
         *
         * @static
         * @access public
         * @since 3.0.0
         * @return object
         */
        public static function get_instance()
        {
        }
        /**
         * Add custom CSS rules to the head, applying our custom styles.
         *
         * @access public
         */
        public function custom_css()
        {
        }
    }
    /**
     * Adds styles to the customizer.
     */
    class WFOCUKirki_Modules_PostMessage
    {
        /**
         * The script.
         *
         * @access protected
         * @since 3.0.0
         * @var string
         */
        protected $script = '';
        /**
         * Constructor.
         *
         * @access protected
         * @since 3.0.0
         */
        protected function __construct()
        {
        }
        /**
         * Gets an instance of this object.
         * Prevents duplicate instances which avoid artefacts and improves performance.
         *
         * @static
         * @access public
         * @since 3.0.0
         * @return object
         */
        public static function get_instance()
        {
        }
        /**
         * Enqueues the postMessage script
         * and adds variables to it using the wp_localize_script function.
         * The rest is handled via JS.
         */
        public function postmessage()
        {
        }
        /**
         * Generates script for a single field.
         *
         * @access protected
         * @since 3.0.0
         * @param array $args The arguments.
         */
        protected function script($args)
        {
        }
        /**
         * Generates script for a single js_var when using "html" as function.
         *
         * @access protected
         * @since 3.0.0
         * @param array $args  The arguments for this js_var.
         */
        protected function script_html_var($args)
        {
        }
        /**
         * Generates script for a single js_var.
         *
         * @access protected
         * @since 3.0.0
         * @param array $args  The arguments for this js_var.
         */
        protected function script_var($args)
        {
        }
        /**
         * Processes script generation for fields that save an array.
         *
         * @access protected
         * @since 3.0.0
         * @param array $args  The arguments for this js_var.
         */
        protected function script_var_array($args)
        {
        }
        /**
         * Processes script generation for typography fields.
         *
         * @access protected
         * @since 3.0.0
         * @param array $args  The arguments for this js_var.
         * @param array $field The field arguments.
         */
        protected function script_var_typography($args, $field)
        {
        }
        /**
         * Processes script generation for typography fields.
         *
         * @access protected
         * @since 3.0.0
         * @param array $args  The arguments for this js_var.
         */
        protected function script_var_image($args)
        {
        }
        /**
         * Get the callback function/method we're going to use for this field.
         *
         * @access private
         * @since 3.0.0
         * @param array $args The field args.
         * @return string|array A callable function or method.
         */
        protected function get_callback($args)
        {
        }
    }
    /**
     * Customize_Queried_Post_Info class.
     *
     * @package CustomizeQueriedPostInfo
     */
    /**
     * Class Customize_Queried_Post_Info.
     */
    class WFOCUKirki_Modules_Post_Meta
    {
        /**
         * Gets an instance of this object.
         * Prevents duplicate instances which avoid artefacts and improves performance.
         *
         * @static
         * @access public
         * @since 3.0.0
         * @return object
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor.
         *
         * @access protected
         * @since 3.1.0
         */
        protected function __construct()
        {
        }
        /**
         * Enqueue Customizer control scripts.
         *
         * @access public
         * @since 3.1.0
         */
        public function enqueue_control_scripts()
        {
        }
        /**
         * Initialize Customizer preview.
         *
         * @access public
         * @since 3.1.0
         */
        public function customize_preview_init()
        {
        }
        /**
         * Enqueue script for Customizer preview.
         *
         * @access public
         * @since 3.1.0
         */
        public function enqueue_preview_scripts()
        {
        }
    }
    /**
     * Adds scripts for icons in sections & panels.
     */
    class WFOCUKirki_Modules_Icons
    {
        /**
         * The class constructor.
         *
         * @access protected
         */
        protected function __construct()
        {
        }
        /**
         * Gets an instance of this object.
         * Prevents duplicate instances which avoid artefacts and improves performance.
         *
         * @static
         * @access public
         * @since 3.0.0
         * @return object
         */
        public static function get_instance()
        {
        }
        /**
         * Adds icon for a section/panel.
         *
         * @access public
         * @since 3.0.0
         * @param string $id      The panel or section ID.
         * @param string $icon    The icon to add.
         * @param string $context Lowercase 'section' or 'panel'.
         */
        public function add_icon($id, $icon, $context = 'section')
        {
        }
        /**
         * Format the script in a way that will be compatible with WordPress.
         */
        public function customize_controls_enqueue_scripts()
        {
        }
    }
    /**
     * The default section.
     *
     * @package     WFOCUKirki
     * @subpackage  Custom Sections Module
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.0
     */
    /**
     * Default Section.
     */
    class WFOCUKirki_Sections_Default_Section extends \WP_Customize_Section
    {
        /**
         * The section type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-default';
    }
    /**
     * Nested section.
     *
     * @package     WFOCUKirki
     * @subpackage  Custom Sections Module
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.0
     */
    /**
     * Nested section.
     */
    class WFOCUKirki_Sections_Nested_Section extends \WP_Customize_Section
    {
        /**
         * The parent section.
         *
         * @access public
         * @since 3.0.0
         * @var string
         */
        public $section;
        /**
         * The section type.
         *
         * @access public
         * @since 3.0.0
         * @var string
         */
        public $type = 'wfocukirki-nested';
        /**
         * Gather the parameters passed to client JavaScript via JSON.
         *
         * @access public
         * @since 3.0.0
         * @return array The array to be exported to the client as JSON.
         */
        public function json()
        {
        }
    }
    /**
     * An expanded section.
     *
     * @package     WFOCUKirki
     * @subpackage  Custom Sections Module
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.0
     */
    /**
     * Expanded Section.
     */
    class WFOCUKirki_Sections_Expanded_Section extends \WP_Customize_Section
    {
        /**
         * The section type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfocukirki-expanded';
    }
    /**
     * Adds styles to the customizer.
     */
    class WFOCUKirki_Modules_Custom_Sections
    {
        /**
         * Constructor.
         *
         * @access protected
         * @since 3.0.0
         */
        protected function __construct()
        {
        }
        /**
         * Gets an instance of this object.
         * Prevents duplicate instances which avoid artefacts and improves performance.
         *
         * @static
         * @access public
         * @since 3.0.0
         * @return object
         */
        public static function get_instance()
        {
        }
        /**
         * Add the custom section types.
         *
         * @access public
         * @since 3.0.0
         * @param array $section_types The registered section-types.
         * @return array
         */
        public function set_section_types($section_types)
        {
        }
        /**
         * Add the custom panel types.
         *
         * @access public
         * @since 3.0.0
         * @param array $panel_types The registered section-types.
         * @return array
         */
        public function set_panel_types($panel_types)
        {
        }
        /**
         * Include the custom-section classes.
         *
         * @access public
         * @since 3.0.0
         */
        public function include_sections_and_panels()
        {
        }
        /**
         * Enqueues any necessary scripts and styles.
         *
         * @access public
         * @since 3.0.0
         */
        public function enqueue_scrips()
        {
        }
    }
    /**
     * Nested section.
     *
     * @package     WFOCUKirki
     * @subpackage  Custom Sections Module
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.0
     */
    /**
     * Nested panel.
     */
    class WFOCUKirki_Panels_Nested_Panel extends \WP_Customize_Panel
    {
        /**
         * The parent panel.
         *
         * @access public
         * @since 3.0.0
         * @var string
         */
        public $panel;
        /**
         * Type of this panel.
         *
         * @access public
         * @since 3.0.0
         * @var string
         */
        public $type = 'wfocukirki-nested';
        /**
         * Gather the parameters passed to client JavaScript via JSON.
         *
         * @access public
         * @since 3.0.0
         * @return array The array to be exported to the client as JSON.
         */
        public function json()
        {
        }
    }
    /**
     * Handles the CSS-variables of fields.
     *
     * @package     WFOCUKirki
     * @category    Modules
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.28
     */
    /**
     * The WFOCUKirki_Modules_CSS_Vars object.
     *
     * @since 3.0.28
     */
    class WFOCUKirki_Modules_CSS_Vars
    {
        /**
         * Constructor
         *
         * @access protected
         * @since 3.0.28
         */
        protected function __construct()
        {
        }
        /**
         * Gets an instance of this object.
         * Prevents duplicate instances which avoid artefacts and improves performance.
         *
         * @static
         * @access public
         * @since 3.0.28
         * @return object
         */
        public static function get_instance()
        {
        }
        /**
         * Add styles in <head>.
         *
         * @access public
         * @since 3.0.28
         * @return void
         */
        public function the_style()
        {
        }
        /**
         * Enqueues the script that handles postMessage
         * and adds variables to it using the wp_localize_script function.
         * The rest is handled via JS.
         *
         * @access public
         * @since 3.0.28
         * @return void
         */
        public function postmessage()
        {
        }
    }
    /**
     * Handles CSS output.
     */
    final class WFOCUKirki_Modules_CSS_Generator
    {
        /**
         * The instance of this class (singleton pattern).
         *
         * @static
         * @access public
         * @var null|object
         */
        public static $instance = \null;
        /**
         * Settings.
         *
         * @static
         * @access public
         * @var null|string|array
         */
        public static $settings = \null;
        /**
         * Output.
         *
         * @static
         * @access public
         * @var array
         */
        public static $output = array();
        /**
         * Callback.
         *
         * @static
         * @access public
         * @var null|string|array
         */
        public static $callback = \null;
        /**
         * Option Name.
         *
         * @static
         * @access public
         * @var null|string
         */
        public static $option_name = \null;
        /**
         * Field Type.
         *
         * @static
         * @access public
         * @var string
         */
        public static $field_type = \null;
        /**
         * Google Fonts
         *
         * @static
         * @access public
         * @var array
         */
        public static $google_fonts = \null;
        /**
         * Standard Fonts
         *
         * @static
         * @access public
         * @var array
         */
        public static $backup_fonts = \null;
        /**
         * CSS
         *
         * @static
         * @access public
         * @var string
         */
        public static $css;
        /**
         * Value
         *
         * @static
         * @access public
         * @var mixed
         */
        public static $value = \null;
        /**
         * Get a single instance of this class
         *
         * @return object
         */
        public static function get_instance()
        {
        }
        /**
         * Get the CSS for a field.
         *
         * @static
         * @access public
         * @param array $field The field.
         * @return array
         */
        public static function css($field)
        {
        }
        /**
         * Gets the array of generated styles and creates the minimized, inline CSS.
         *
         * @static
         * @access public
         * @param array $css The CSS definitions array.
         * @return string    The generated CSS.
         */
        public static function styles_parse($css = array())
        {
        }
        /**
         * Add prefixes if necessary.
         *
         * @param  array $css The CSS definitions array.
         * @return array
         */
        public static function add_prefixes($css)
        {
        }
    }
    /**
     * Handles CSS output for fields.
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.0
     */
    /**
     * Handles field CSS output.
     */
    class WFOCUKirki_Output
    {
        /**
         * The WFOCUKirki configuration used in the field.
         *
         * @access protected
         * @var string
         */
        protected $config_id = 'global';
        /**
         * The field's `output` argument.
         *
         * @access protected
         * @var array
         */
        protected $output = array();
        /**
         * An array of the generated styles.
         *
         * @access protected
         * @var array
         */
        protected $styles = array();
        /**
         * The field.
         *
         * @access protected
         * @var array
         */
        protected $field = array();
        /**
         * The value.
         *
         * @access protected
         * @var string|array
         */
        protected $value;
        /**
         * The class constructor.
         *
         * @access public
         * @param string       $config_id The config ID.
         * @param array        $output    The output argument.
         * @param string|array $value     The value.
         * @param array        $field     The field.
         */
        public function __construct($config_id, $output, $value, $field)
        {
        }
        /**
         * If we have a sanitize_callback defined, apply it to the value.
         *
         * @param array        $output The output args.
         * @param string|array $value  The value.
         *
         * @return string|array
         */
        protected function apply_sanitize_callback($output, $value)
        {
        }
        /**
         * If we have a value_pattern defined, apply it to the value.
         *
         * @param array        $output The output args.
         * @param string|array $value  The value.
         * @return string|array
         */
        protected function apply_value_pattern($output, $value)
        {
        }
        /**
         * If we have a value_pattern defined, apply it to the value.
         *
         * @param array        $output The output args.
         * @param string|array $value  The value.
         * @return string|array
         */
        protected function apply_pattern_replace($output, $value)
        {
        }
        /**
         * Parses the output arguments.
         * Calls the process_output method for each of them.
         *
         * @access protected
         */
        protected function parse_output()
        {
        }
        /**
         * Parses an output and creates the styles array for it.
         *
         * @access protected
         * @param array        $output The field output.
         * @param string|array $value  The value.
         *
         * @return null
         */
        protected function process_output($output, $value)
        {
        }
        /**
         * Some CSS properties are unique.
         * We need to tweak the value to make everything works as expected.
         *
         * @access protected
         * @param string       $property The CSS property.
         * @param string|array $value    The value.
         *
         * @return array
         */
        protected function process_property_value($property, $value)
        {
        }
        /**
         * Returns the value.
         *
         * @access protected
         * @param string|array $value The value.
         * @param array        $output The field "output".
         * @return string|array
         */
        protected function process_value($value, $output)
        {
        }
        /**
         * Exploses the private $styles property to the world
         *
         * @access protected
         * @return array
         */
        public function get_styles()
        {
        }
    }
    /**
     * Handles CSS output for typography fields.
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.0
     */
    /**
     * Output overrides.
     */
    class WFOCUKirki_Output_Field_Typography extends \WFOCUKirki_Output
    {
        /**
         * Processes a single item from the `output` array.
         *
         * @access protected
         * @param array $output The `output` item.
         * @param array $value  The field's value.
         */
        protected function process_output($output, $value)
        {
        }
    }
    /**
     * Handles CSS output for dimensions fields.
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.0
     */
    /**
     * Output overrides.
     */
    class WFOCUKirki_Output_Field_Dimensions extends \WFOCUKirki_Output
    {
        /**
         * Processes a single item from the `output` array.
         *
         * @access protected
         * @param array $output The `output` item.
         * @param array $value  The field's value.
         */
        protected function process_output($output, $value)
        {
        }
    }
    /**
     * Handles CSS output for multicolor fields.
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.0
     */
    /**
     * Output overrides.
     */
    class WFOCUKirki_Output_Field_Multicolor extends \WFOCUKirki_Output
    {
        /**
         * Processes a single item from the `output` array.
         *
         * @access protected
         * @param array $output The `output` item.
         * @param array $value  The field's value.
         */
        protected function process_output($output, $value)
        {
        }
    }
    /**
     * Handles CSS output for image fields.
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.10
     */
    /**
     * Output overrides.
     */
    class WFOCUKirki_Output_Field_Image extends \WFOCUKirki_Output
    {
        /**
         * Processes a single item from the `output` array.
         *
         * @access protected
         * @param array $output The `output` item.
         * @param array $value  The field's value.
         */
        protected function process_output($output, $value)
        {
        }
    }
    /**
     * Handles CSS output for background fields.
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.0
     */
    /**
     * Output overrides.
     */
    class WFOCUKirki_Output_Field_Background extends \WFOCUKirki_Output
    {
        /**
         * Processes a single item from the `output` array.
         *
         * @access protected
         * @param array $output The `output` item.
         * @param array $value  The field's value.
         */
        protected function process_output($output, $value)
        {
        }
    }
    /**
     * Writes compiled CSS to a file.
     *
     * @package     WFOCUKirki
     * @subpackage  CSS Module
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.0
     */
    /**
     * Handles writing CSS to a file.
     */
    class WFOCUKirki_CSS_To_File
    {
        /**
         * Fallback to inline CSS?
         *
         * @access protected
         * @since 3.0.0
         * @var bool
         */
        protected $fallback = \false;
        /**
         * Constructor.
         *
         * @access public
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Gets the path of the CSS file and folder in the filesystem.
         *
         * @access protected
         * @since 3.0.0
         * @param string $context Can be "file" or "folder". If empty, returns both as array.
         * @return string|array
         */
        protected function get_path($context = '')
        {
        }
        /**
         * Gets the URL of the CSS file in the filesystem.
         *
         * @access public
         * @since 3.0.0
         * @return string
         */
        public function get_url()
        {
        }
        /**
         * Gets the timestamp of the file.
         * This will be used as "version" for cache-busting purposes.
         *
         * @access public
         * @since 3.0.0
         * @return integer|false
         */
        public function get_timestamp()
        {
        }
        /**
         * Writes the file to disk.
         *
         * @access public
         * @since 3.0.0
         * @return bool
         */
        public function write_file()
        {
        }
        /**
         * Gets the WP_Filesystem object.
         *
         * @access protected
         * @since 3.0.0
         * @return object
         */
        protected function get_filesystem()
        {
        }
    }
    /**
     * Handles the CSS Output of fields.
     *
     * @package     WFOCUKirki
     * @category    Modules
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.0
     */
    /**
     * The WFOCUKirki_Modules_CSS object.
     */
    class WFOCUKirki_Modules_CSS
    {
        /**
         * Whether we've already processed this or not.
         *
         * @access public
         * @var bool
         */
        public $processed = \false;
        /**
         * The CSS array
         *
         * @access public
         * @var array
         */
        public static $css_array = array();
        /**
         * Set to true if you want to use the AJAX method.
         *
         * @access public
         * @var bool
         */
        public static $ajax = \false;
        /**
         * The WFOCUKirki_CSS_To_File object.
         *
         * @access protected
         * @since 3.0.0
         * @var object
         */
        protected $css_to_file;
        /**
         * Should we enqueue font-awesome?
         *
         * @static
         * @access protected
         * @since 3.0.26
         * @var bool
         */
        protected static $enqueue_fa = \false;
        /**
         * Constructor
         *
         * @access protected
         */
        protected function __construct()
        {
        }
        /**
         * Gets an instance of this object.
         * Prevents duplicate instances which avoid artefacts and improves performance.
         *
         * @static
         * @access public
         * @since 3.0.0
         * @return object
         */
        public static function get_instance()
        {
        }
        /**
         * Init.
         *
         * @access public
         */
        public function init()
        {
        }
        /**
         * Enqueues compiled CSS file.
         *
         * @access public
         * @since 3.0.0
         */
        public function enqueue_compiled_file()
        {
        }
        /**
         * Adds inline styles.
         *
         * @access public
         */
        public function inline_dynamic_css()
        {
        }
        /**
         * Get the dynamic-css.php file
         *
         * @access public
         */
        public function ajax_dynamic_css()
        {
        }
        /**
         * Enqueues the ajax stylesheet.
         *
         * @access public
         */
        public function frontend_styles()
        {
        }
        /**
         * Loop through all fields and create an array of style definitions.
         *
         * @static
         * @access public
         * @param string $config_id The configuration ID.
         */
        public static function loop_controls($config_id)
        {
        }
        /**
         * Runs when we're adding a font-awesome field to allow enqueueing the
         * fontawesome script on the frontend.
         *
         * @static
         * @since 3.0.26
         * @access public
         * @return void
         */
        public static function add_fontawesome_script()
        {
        }
    }
    /**
     * Handles CSS properties.
     * Extend this class in order to handle exceptions.
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.0
     */
    /**
     * Output for CSS properties.
     */
    class WFOCUKirki_Output_Property
    {
        /**
         * The property we're modifying.
         *
         * @access protected
         * @var string
         */
        protected $property;
        /**
         * The value
         *
         * @access protected
         * @var string|array
         */
        protected $value;
        /**
         * Constructor.
         *
         * @access public
         * @param string $property The CSS property we're modifying.
         * @param mixed  $value    The value.
         */
        public function __construct($property, $value)
        {
        }
        /**
         * Modifies the value.
         *
         * @access protected
         */
        protected function process_value()
        {
        }
        /**
         * Gets the value.
         *
         * @access protected
         */
        public function get_value()
        {
        }
    }
    /**
     * Handles CSS output for font-family.
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.0
     */
    /**
     * Output overrides.
     */
    class WFOCUKirki_Output_Property_Font_Family extends \WFOCUKirki_Output_Property
    {
        /**
         * Modifies the value.
         *
         * @access protected
         */
        protected function process_value()
        {
        }
    }
    /**
     * Handles CSS output for background-position.
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.0
     */
    /**
     * Output overrides.
     */
    class WFOCUKirki_Output_Property_Background_Position extends \WFOCUKirki_Output_Property
    {
        /**
         * Modifies the value.
         *
         * @access protected
         */
        protected function process_value()
        {
        }
    }
    /**
     * Handles CSS output for background-image.
     *
     * @package     WFOCUKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.0
     */
    /**
     * Output overrides.
     */
    class WFOCUKirki_Output_Property_Background_Image extends \WFOCUKirki_Output_Property
    {
        /**
         * Modifies the value.
         *
         * @access protected
         */
        protected function process_value()
        {
        }
    }
    /**
     * A simple object containing properties for fonts.
     *
     * @package     WFOCUKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       1.0
     */
    /**
     * The WFOCUKirki_Fonts object.
     */
    final class WFOCUKirki_Fonts
    {
        /**
         * The mode we'll be using to add google fonts.
         * This is a todo item, not yet functional.
         *
         * @static
         * @todo
         * @access public
         * @var string
         */
        public static $mode = 'link';
        /**
         * An array of our google fonts.
         *
         * @static
         * @access public
         * @var null|object
         */
        public static $google_fonts = \null;
        /**
         * Get the one, true instance of this class.
         * Prevents performance issues since this is only loaded once.
         *
         * @return object WFOCUKirki_Fonts
         */
        public static function get_instance()
        {
        }
        /**
         * Compile font options from different sources.
         *
         * @return array    All available fonts.
         */
        public static function get_all_fonts()
        {
        }
        /**
         * Return an array of standard websafe fonts.
         *
         * @return array    Standard websafe fonts.
         */
        public static function get_standard_fonts()
        {
        }
        /**
         * Return an array of backup fonts based on the font-category
         *
         * @return array
         */
        public static function get_backup_fonts()
        {
        }
        /**
         * Return an array of all available Google Fonts.
         *
         * @return array    All Google Fonts.
         */
        public static function get_google_fonts()
        {
        }
        /**
         * Returns an array of all available subsets.
         *
         * @static
         * @access public
         * @return array
         */
        public static function get_google_font_subsets()
        {
        }
        /**
         * Dummy function to avoid issues with backwards-compatibility.
         * This is not functional, but it will prevent PHP Fatal errors.
         *
         * @static
         * @access public
         */
        public static function get_google_font_uri()
        {
        }
        /**
         * Returns an array of all available variants.
         *
         * @static
         * @access public
         * @return array
         */
        public static function get_all_variants()
        {
        }
        /**
         * Determine if a font-name is a valid google font or not.
         *
         * @static
         * @access public
         * @param string $fontname The name of the font we want to check.
         * @return bool
         */
        public static function is_google_font($fontname)
        {
        }
        /**
         * Gets available options for a font.
         *
         * @static
         * @access public
         * @return array
         */
        public static function get_font_choices()
        {
        }
    }
    /**
     * Adds the Webfont Loader to load fonts asyncronously.
     *
     * @package     WFOCUKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0
     */
    /**
     * Manages the way Google Fonts are enqueued.
     */
    final class WFOCUKirki_Modules_Webfonts_Async
    {
        /**
         * Constructor.
         *
         * @access public
         * @since 3.0
         * @param string $config_id   The config-ID.
         * @param object $webfonts    The WFOCUKirki_Modules_Webfonts object.
         * @param object $googlefonts The WFOCUKirki_Fonts_Google object.
         * @param array  $args        Extra args we want to pass.
         */
        public function __construct($config_id, $webfonts, $googlefonts, $args = array())
        {
        }
        /**
         * Add preconnect for Google Fonts.
         *
         * @access public
         * @param array  $urls           URLs to print for resource hints.
         * @param string $relation_type  The relation type the URLs are printed.
         * @return array $urls           URLs to print for resource hints.
         */
        public function resource_hints($urls, $relation_type)
        {
        }
        /**
         * Webfont Loader for Google Fonts.
         *
         * @access public
         * @since 3.0.0
         */
        public function webfont_loader()
        {
        }
        /**
         * Webfont Loader script for Google Fonts.
         *
         * @access public
         * @since 3.0.0
         */
        public function webfont_loader_script()
        {
        }
    }
    /**
     * Adds script for tooltips.
     */
    class WFOCUKirki_Modules_Webfonts
    {
        /**
         * The WFOCUKirki_Fonts_Google object.
         *
         * @access protected
         * @since 3.0.0
         * @var object
         */
        protected $fonts_google;
        /**
         * The class constructor
         *
         * @access protected
         * @since 3.0.0
         */
        protected function __construct()
        {
        }
        /**
         * Run on after_setup_theme.
         *
         * @access public
         * @since 3.0.0
         */
        public function run()
        {
        }
        /**
         * Gets an instance of this object.
         * Prevents duplicate instances which avoid artefacts and improves performance.
         *
         * @static
         * @access public
         * @since 3.0.0
         * @return object
         */
        public static function get_instance()
        {
        }
        /**
         * Init other objects depending on the method we'll be using.
         *
         * @access protected
         * @since 3.0.0
         */
        protected function init()
        {
        }
        /**
         * Get the method we're going to use.
         *
         * @access public
         * @since 3.0.0
         * @return string
         */
        public function get_method()
        {
        }
        /**
         * Goes through all our fields and then populates the $this->fonts property.
         *
         * @access public
         * @param string $config_id The config-ID.
         */
        public function loop_fields($config_id)
        {
        }
    }
    /**
     * The WFOCUKirki_Fonts object.
     *
     * @since 3.0.28
     */
    final class WFOCUKirki_Fonts_Google_Local
    {
        /**
         * Create an instance of this object for a specific font-family.
         *
         * @static
         * @access public
         * @since 3.0.28
         * @param string $family The font-family name.
         * @return WFOCUKirki_Fonts_Google_Local
         */
        public static function init($family)
        {
        }
        /**
         * Gets the @font-face CSS.
         *
         * @access public
         * @since 3.0.28
         * @param array $variants The variants we want to get.
         * @return string
         */
        public function get_css($variants = array())
        {
        }
        /**
         * Get the @font-face CSS for a specific variant.
         *
         * @access public
         * @since 3.0.28
         * @param string $variant The variant.
         * @return string
         */
        public function get_variant_fontface_css($variant)
        {
        }
        /**
         * Gets the local URL for a variant.
         *
         * @access public
         * @since 3.0.28
         * @param string $variant The variant.
         * @return string         The URL.
         */
        public function get_variant_local_url($variant)
        {
        }
        /**
         * Get the name of the font-family.
         * This is used by @font-face in case the user already has the font downloaded locally.
         *
         * @access public
         * @since 3.0.28
         * @param string $variant The variant.
         * @param bool   $compact Whether we want the compact formatting or not.
         * @return string
         */
        public function get_local_font_name($variant, $compact = \false)
        {
        }
        /**
         * Get an array of font-files.
         * Only contains the filenames.
         *
         * @access public
         * @since 3.0.28
         * @return array
         */
        public function get_font_files()
        {
        }
        /**
         * Get an array of local file URLs.
         *
         * @access public
         * @since 3.0.28
         * @return array
         */
        public function get_font_files_urls_local()
        {
        }
        /**
         * Get an array of local file paths.
         *
         * @access public
         * @since 3.0.28
         * @return array
         */
        public function get_font_files_paths()
        {
        }
        /**
         * Get a font-family from the array of google-fonts.
         *
         * @access public
         * @since 3.0.28
         * @return array
         */
        public function get_font_family()
        {
        }
        /**
         * Gets the root fonts folder path.
         * Other paths are built based on this.
         *
         * @since 1.5
         * @access public
         * @return string
         */
        public function get_root_path()
        {
        }
        /**
         * Gets the root folder url.
         * Other urls are built based on this.
         *
         * @since 1.5
         * @access public
         * @return string
         */
        public function get_root_url()
        {
        }
        /**
         * Download font-family files.
         *
         * @access public
         * @since 3.0.28
         * @param array $variants An array of variants to download. Leave empty to download all.
         * @return void
         */
        public function download_font_family($variants = array())
        {
        }
        /**
         * Gets the remote URL contents.
         *
         * @access private
         * @since 3.0.28
         * @param string $url The URL we want to get.
         * @return string     The contents of the remote URL.
         */
        public function get_remote_url_contents($url)
        {
        }
    }
    /**
     * Handles adding to the footer the @font-face CSS for locally-hosted google-fonts.
     * Solves privacy concerns with Google's CDN and their sometimes less-than-transparent policies.
     *
     * @package     WFOCUKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.28
     */
    /**
     * Manages the way Google Fonts are enqueued.
     */
    final class WFOCUKirki_Modules_Webfonts_Local
    {
        /**
         * Constructor.
         *
         * @access public
         * @since 3..28
         * @param object $webfonts    The WFOCUKirki_Modules_Webfonts object.
         * @param object $googlefonts The WFOCUKirki_Fonts_Google object.
         */
        public function __construct($webfonts, $googlefonts)
        {
        }
        /**
         * Webfont Loader for Google Fonts.
         *
         * @access public
         * @since 3.0.28
         */
        public function add_styles()
        {
        }
    }
    /**
     * Processes typography-related fields
     * and generates the google-font link.
     *
     * @package     WFOCUKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       1.0
     */
    /**
     * Manages the way Google Fonts are enqueued.
     */
    final class WFOCUKirki_Fonts_Google
    {
        /**
         * DUMMY. DOESN'T DO ANYTHING, SIMPLY BACKWARDS-COMPATIBILITY.
         *
         * @static
         * @access public
         * @var bool
         */
        public static $force_load_all_subsets = \false;
        /**
         * If set to true, forces loading ALL variants.
         *
         * @static
         * @access public
         * @var bool
         */
        public static $force_load_all_variants = \false;
        /**
         * The array of fonts
         *
         * @access public
         * @var array
         */
        public $fonts = array();
        /**
         * Get the one, true instance of this class.
         * Prevents performance issues since this is only loaded once.
         *
         * @return object WFOCUKirki_Fonts_Google
         */
        public static function get_instance()
        {
        }
        /**
         * Processes the arguments of a field
         * determines if it's a typography field
         * and if it is, then takes appropriate actions.
         *
         * @param array $args The field arguments.
         */
        public function generate_google_font($args)
        {
        }
        /**
         * Determines the vbalidity of the selected font as well as its properties.
         * This is vital to make sure that the google-font script that we'll generate later
         * does not contain any invalid options.
         */
        public function process_fonts()
        {
        }
        /**
         * Gets the googlefonts JSON file.
         *
         * @since 3.0.17
         * @return void
         */
        public function get_googlefonts_json()
        {
        }
        /**
         * Get the standard fonts JSON.
         *
         * @since 3.0.17
         * @return void
         */
        public function get_standardfonts_json()
        {
        }
        /**
         * Gets $this->hosted_fonts.
         *
         * @access public
         * @since 3.0.32
         * @return array
         */
        public function get_hosted_fonts()
        {
        }
    }
    /**
     * Adds styles to the customizer.
     */
    class WFOCUKirki_Modules_Preset
    {
        /**
         * Constructor.
         *
         * @access protected
         * @since 3.0.26
         */
        protected function __construct()
        {
        }
        /**
         * Gets an instance of this object.
         * Prevents duplicate instances which avoid artefacts and improves performance.
         *
         * @static
         * @access public
         * @since 3.0.26
         * @return object
         */
        public static function get_instance()
        {
        }
        /**
         * Enqueue scripts.
         *
         * @access public
         * @since 3.0.26
         */
        public function customize_controls_print_footer_scripts()
        {
        }
    }
    /**
     * Adds styles to the customizer.
     */
    class WFOCUKirki_Modules_Customizer_Branding
    {
        /**
         * Constructor.
         *
         * @access protected
         * @since 3.0.0
         */
        protected function __construct()
        {
        }
        /**
         * Gets an instance of this object.
         * Prevents duplicate instances which avoid artefacts and improves performance.
         *
         * @static
         * @access public
         * @since 3.0.0
         * @return object
         */
        public static function get_instance()
        {
        }
        /**
         * Enqueues the script responsible for branding the customizer
         * and also adds variables to it using the wp_localize_script function.
         * The actual branding is handled via JS.
         *
         * @access public
         * @since 3.0.0
         */
        public function customize_controls_print_scripts()
        {
        }
    }
    /**
     * Adds styles to the customizer.
     */
    class WFOCUKirki_Modules_Field_Dependencies
    {
        /**
         * Constructor.
         *
         * @access protected
         * @since 3.0.0
         */
        protected function __construct()
        {
        }
        /**
         * Gets an instance of this object.
         * Prevents duplicate instances which avoid artefacts and improves performance.
         *
         * @static
         * @access public
         * @since 3.0.0
         * @return object
         */
        public static function get_instance()
        {
        }
        /**
         * Enqueues the field-dependencies script
         * and adds variables to it using the wp_localize_script function.
         * The rest is handled via JS.
         *
         * @access public
         * @return void
         */
        public function field_dependencies()
        {
        }
    }
    /**
     * Adds script for tooltips.
     */
    class WFOCUKirki_Modules_Webfont_Loader
    {
        /**
         * Only load the webfont script if this is true.
         *
         * @static
         * @access public
         * @since 3.0.26
         * @var bool
         */
        public static $load = \false;
        /**
         * The class constructor
         *
         * @access protected
         * @since 3.0.26
         */
        protected function __construct()
        {
        }
        /**
         * Gets an instance of this object.
         * Prevents duplicate instances which avoid artefacts and improves performance.
         *
         * @static
         * @access public
         * @since 3.0.26
         * @return object
         */
        public static function get_instance()
        {
        }
        /**
         * Enqueue scripts.
         *
         * @access public
         * @since 3.0.26
         * @return void
         */
        public function enqueue_scripts()
        {
        }
    }
    /**
     * Adds a custom loading icon when the previewer refreshes.
     *
     * @package     WFOCUKirki
     * @subpackage  Modules
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.0
     */
    /**
     * Modifies the loading overlay.
     */
    class WFOCUKirki_Modules_Loading
    {
        /**
         * Constructor.
         *
         * @access protected
         */
        protected function __construct()
        {
        }
        /**
         * Gets an instance of this object.
         * Prevents duplicate instances which avoid artefacts and improves performance.
         *
         * @static
         * @access public
         * @since 3.0.0
         * @return object
         */
        public static function get_instance()
        {
        }
        /**
         * Runs on init.
         *
         * @access public
         * @since 3.0.0
         */
        public function init()
        {
        }
        /**
         * Adds a custom "loading" div $ its styles when changes are made to the customizer.
         *
         * @access public
         */
        public function add_loader_to_footer()
        {
        }
        /**
         * Adds the loader CSS to our `<head>`.
         *
         * @access public
         */
        public function add_loader_styles_to_header()
        {
        }
        /**
         * Removes the default loader styles from WP Core.
         *
         * @access public
         */
        public function remove_default_loading_styles()
        {
        }
    }
    class WFOCU_Post_Table extends \WP_List_Table
    {
        public $per_page = 4;
        public $data;
        public $meta_data;
        public $date_format;
        public $sitepress_column = \null;
        /**
         * Constructor.
         * @since  1.0.0
         */
        public function __construct($args = array())
        {
        }
        /**
         * Text to display if no items are present.
         * @return  void
         * @since  1.0.0
         */
        public function no_items()
        {
        }
        /**
         * The content of each column.
         *
         * @param array $item The current item in the list.
         * @param string $column_name The key of the current column.
         *
         * @return string              Output for the current column.
         * @since  1.0.0
         */
        public function column_default($item, $column_name)
        {
        }
        public function get_item_data($item_id)
        {
        }
        public function column_cb($item)
        {
        }
        public function column_name($item)
        {
        }
        public function column_steps($item)
        {
        }
        public function column_preview($item)
        {
        }
        public function column_icl_translations($item)
        {
        }
        public function column_last_update($item)
        {
        }
        public function column_description($item)
        {
        }
        public function column_priority($item)
        {
        }
        public function column_quick_links($item)
        {
        }
        /**
         * Retrieve an array of possible bulk actions.
         * @return array
         * @since  1.0.0
         */
        public function get_bulk_actions()
        {
        }
        /**
         * Prepare an array of items to be listed.
         * @return array Prepared items.
         * @since  1.0.0
         */
        public function prepare_items()
        {
        }
        protected function get_sortable_columns()
        {
        }
        /**
         * Retrieve an array of columns for the list table.
         * @return array Key => Value pairs.
         * @since  1.0.0
         */
        public function get_columns()
        {
        }
        public function get_table_classes()
        {
        }
        public function single_row($item)
        {
        }
        /**
         * Displays the search box.
         *
         * @param string $text The 'submit' button label.
         * @param string $input_id ID attribute value for the search input field.
         *
         * @since 3.1.0
         *
         */
        public function search_box($text = '', $input_id = 'wfocu')
        {
        }
        public static function render_trigger_nav()
        {
        }
        public function order_preview_template()
        {
        }
        /**
         * Generate the table navigation above or below the table
         *
         * @param string $which
         *
         * @since 3.1.0
         *
         */
        protected function display_tablenav($which)
        {
        }
    }
    class WFOCU_Upstroke_Timeline
    {
        public static $instance;
        /**
         * Generating instance
         *
         * @return WFOCU_Upstroke_Timeline
         */
        public static function instance()
        {
        }
        /**
         * Metabox callback function
         * Adding upstroke metabox to show upstroke activity timeline in sidebar of order edit page
         */
        public function wfocu_register_upstroke_reports_meta_boxes()
        {
        }
        /**
         * Displaying funnels reports on order edit page
         */
        public function wfocu_upstroke_reports_metabox_callback()
        {
        }
        /**
         * Generate timeline
         *
         * @param $template String to be parsed based on action type id
         * @param $upstroke array to use in parsing
         *
         * @return parsed string for translations
         */
        public function wfocu_timeline_template_parse($template, $upstroke)
        {
        }
    }
    class BWF_Admin_Breadcrumbs
    {
        /**
         * @var array nodes use to contain all the nodes
         */
        public static $nodes = [];
        /**
         * @var array ref used to contain refs to pass to the urls
         */
        public static $ref = [];
        /**
         * Insert a single node into the property
         *
         * @param $config [] of the node getting registered
         */
        public static function register_node($config)
        {
        }
        /**
         * Insert a referral property so that we can populate the referral accross all urls.
         *
         * @param $key
         * @param $val
         */
        public static function register_ref($key, $val)
        {
        }
        /**
         * Render HTML for all the registerd nodes
         */
        public static function render()
        {
        }
        /**
         * Add the registered referral to the url passed
         * ref should contain the query param as key and value as value
         *
         * @param $url URL to add refs to
         *
         * @return string modified url
         */
        public static function maybe_add_refs($url)
        {
        }
    }
    /**
     * A text control with validation for CSS units.
     */
    class WFOCU_Control_Responsive extends \WP_Customize_Control
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'ast-responsive';
        /**
         * The control type.
         *
         * @access public
         * @var array
         */
        public $units = array();
        /**
         * Enqueue control related scripts/styles.
         *
         * @access public
         */
        public function enqueue()
        {
        }
        /**
         * Refresh the parameters passed to the JavaScript via JSON.
         *
         * @see WP_Customize_Control::to_json()
         */
        public function to_json()
        {
        }
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
        /**
         * Render the control's content.
         *
         * @see WP_Customize_Control::render_content()
         */
        protected function render_content()
        {
        }
    }
    /**
     * WFOCU_Background_Updater Class.
     * Based on WC_Background_Updater concept
     */
    class WFOCU_Background_Updater extends \WC_Background_Process
    {
        /**
         * Initiate new background process.
         */
        public function __construct()
        {
        }
        /**
         * Handle cron healthcheck
         *
         * Restart the background process if not already running
         * and data exists in the queue.
         */
        public function handle_cron_healthcheck()
        {
        }
        /**
         * Schedule fallback event.
         */
        protected function schedule_event()
        {
        }
        /**
         * Is the updater running?
         *
         * @return boolean
         */
        public function is_updating()
        {
        }
        /**
         * Task
         *
         * Override this method to perform any actions required on each
         * queue item. Return the modified item for further processing
         * in the next pass through. Or, return false to remove the
         * item from the queue.
         *
         * @param string $callback Update callback function.
         *
         * @return string|bool
         */
        protected function task($callback)
        {
        }
        /**
         * Complete
         *
         * Override if applicable, but ensure that the below actions are
         * performed, or, call parent::complete().
         */
        protected function complete()
        {
        }
    }
    class WFOCU_Admin
    {
        public $admin_path;
        public $admin_url;
        public $section_page = '';
        public $should_show_shortcodes = \null;
        public $updater = \null;
        public $thank_you_page_posts = \null;
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function get_admin_url()
        {
        }
        public function admin_enqueue_assets()
        {
        }
        public function admin_customizer_enqueue_assets()
        {
        }
        public function upstroke_page()
        {
        }
        public function js_variables()
        {
        }
        public function is_upstroke_page($section = '')
        {
        }
        public function admin_footer_text($footer_text)
        {
        }
        public function update_footer($footer_text)
        {
        }
        public function maybe_reset_transients($post_id, $post = \null)
        {
        }
        public function maybe_set_funnel_id()
        {
        }
        /**
         * @hooked over `delete_post`
         *
         * @param $post_id
         */
        public function clear_transients_on_delete($post_id)
        {
        }
        /**
         * @hooked over `delete_post`
         * Delete the funnel record if any from the database on permanent deletion of order.
         *
         * @param mixed $post_id
         */
        public function clear_session_record_on_shop_order_delete($post_id)
        {
        }
        public function maybe_activate_post()
        {
        }
        public function maybe_deactivate_post()
        {
        }
        public function maybe_print_mergetag_helpbox()
        {
        }
        /**
         * Hooked over 'plugin_action_links_{PLUGIN_BASENAME}' WordPress hook to add deactivate popup support
         *
         * @param array $links array of existing links
         *
         * @return array modified array
         */
        public function plugin_actions($links)
        {
        }
        public function maybe_handle_http_referer()
        {
        }
        public function tooltip($text)
        {
        }
        public function hide_test_gateway_from_admin_list()
        {
        }
        public function maybe_show_wizard()
        {
        }
        /**
         * Remove all the notices in our dashboard pages as they might break the design.
         */
        public function maybe_remove_all_notices_on_page()
        {
        }
        public function check_db_version()
        {
        }
        function show_upsell_total_in_order_listings($total, $order)
        {
        }
        /**
         * @hooked `shutdown`
         * As we moved to DB version 1.0 with the new table structure.
         * We need to ensure the data for the upsell gross amount get stored in the order meta.
         *
         */
        public function maybe_update_upsell_gross_total_to_order_meta()
        {
        }
        public function toolbar_link_to_xlplugins($wp_admin_bar)
        {
        }
        public function set_wc_payment_gateway_column($header)
        {
        }
        public function wc_payment_gateway_column_content($gateway)
        {
        }
        /**
         * Initiate WFOCU_Background_Updater class
         * @see maybe_update_database_update()
         */
        public function init_background_updater()
        {
        }
        /**
         * @hooked over `admin_head`
         * This method takes care of database updating process.
         * Checks whether there is a need to update the database
         * Iterates over define callbacks and passes it to background updater class
         */
        public function maybe_update_database_update()
        {
        }
        public function maybe_update_upstroke_version_in_option()
        {
        }
        /**
         * Defines scripts needed for "no conflict mode".
         *
         * @since  Unknown
         * @access public
         * @global $wp_scripts
         *
         * @uses WFOCU_Admin::no_conflict_mode()
         */
        public function no_conflict_mode_script()
        {
        }
        /**
         * Defines styles needed for "no conflict mode"
         *
         * @since  Unknown
         * @access public
         * @global $wp_styles
         *
         * @uses   WFOCU_Admin::no_conflict_mode()
         */
        public function no_conflict_mode_style()
        {
        }
        /**
         * Runs "no conflict mode".
         *
         * @param WP_Scripts $wp_objects WP_Scripts object.
         * @param array $wp_required_objects Scripts required by WordPress Core.
         * @param array $wfocu_required_objects Scripts required by WooFunnels Forms.
         * @param string $type Determines if scripts or styles are being run through the function.
         *
         * @since   Unknown
         * @access  private
         *
         * @used-by WFOCU_Admin::no_conflict_mode_style()
         * @used-by WFOCU_Admin::no_conflict_mode_style()
         *
         */
        public function no_conflict_mode(&$wp_objects, $wp_required_objects, $wfocu_required_objects, $type = 'scripts')
        {
        }
        /**
         * Adds script dependencies needed.
         *
         * @param array $registered Registered scripts.
         * @param array $scripts Required scripts.
         *
         * @return array $scripts Scripts including dependencies.
         * @since   Unknown
         *
         * @used-by WFOCU_Admin::no_conflict_mode()
         *
         */
        public function add_script_dependencies($registered, $scripts)
        {
        }
        public function get_selected_nav_class($nav)
        {
        }
        public function get_selected_nav_class_global($nav)
        {
        }
        public function get_selected_nav_class_tools($nav)
        {
        }
        /**
         * Check if its our builder page and registered required nodes to prepare a breadcrumb
         */
        public function maybe_register_breadcrumbs()
        {
        }
        public function get_shortcodes_list()
        {
        }
        /**
         * Adding metabox on editor page for 'Back to funnel' link.
         */
        public function add_meta_boxes_for_back_button()
        {
        }
        public function render_funnel_link_meta_box()
        {
        }
        public function add_back_button()
        {
        }
        public function render_back_to_funnel_script_for_block_editor()
        {
        }
        public function maybe_add_timeline_files()
        {
        }
        public function register_admin_menu()
        {
        }
        /**
         * @param $existing_args
         * Exclude upsells create by funnel builder or AB testing
         * @return mixed
         */
        public function exclude_from_query($existing_args)
        {
        }
    }
    /**
     * Class WFOCU_Wizard
     * Class controls rendering and behaviour of wizard for the UpStroke
     */
    class WFOCU_Wizard
    {
        public static $is_wizard_done;
        public static $step;
        public static $suffix;
        public static $steps;
        public static $license_state = \null;
        public static $key = '';
        public static $licence_key;
        public static function init()
        {
        }
        public static function steps()
        {
        }
        public static function render_page()
        {
        }
        /**
         * Show the setup wizard
         */
        public static function setup_wizard()
        {
        }
        /**
         * Setup Wizard Header
         */
        public static function setup_wizard_header()
        {
        }
        /**
         * Output the steps
         */
        public static function setup_wizard_steps()
        {
        }
        /**
         * Setup Wizard Footer
         */
        public static function setup_wizard_footer()
        {
        }
        public static function wfocu_setup_introduction()
        {
        }
        public static function wfocu_setup_ready()
        {
        }
        public static function wfocu_setup_activate()
        {
        }
        public static function get_next_step_link()
        {
        }
        public static function setup_css()
        {
        }
        /**
         * Output the content for the current step
         */
        public static function setup_wizard_content()
        {
        }
        public static function set_license_state($state = \false)
        {
        }
        public static function set_license_key($key = \false)
        {
        }
    }
    class WFOCU_Admin_Refund
    {
        /**
         * @var $ins
         */
        public static $ins;
        public $view_transaction_url;
        public $get_integration;
        public $order_id;
        public $transaction_id;
        public $localized_data;
        public function __construct()
        {
        }
        /**
         * @return WFOCU_Admin_Refund
         */
        public static function get_instance()
        {
        }
        public function get_total_shipping_and_tax($event)
        {
        }
        /**
         * Metabox callback function
         * Adding metabox to show refund table below order items table on order edit page
         */
        public function wfocu_register_admin_offer_refund_meta_boxes()
        {
        }
        /**
         * Displaying offer refund table on order edit page below item list
         */
        public function wfocu_offer_refund_metabox_callback($post)
        {
        }
        /**
         * @return array
         */
        public function wfocu_move_offer_refund_metabox()
        {
        }
        /**
         * Returns the merchant account transaction URL for the given transaction id
         * Some gateway don't provide transaction URL in that case a simple text
         *
         * @param $transaction_id
         *
         * @return string transaction URL/text
         * @see WC_Payment_Gateway::get_transaction_url()
         *
         */
        public function get_transaction_link($transaction_id)
        {
        }
        /**
         * Get Refund button HTML from gateway integration
         *
         * @param $funnel_id
         * @param $offer_id
         * @param $total_charge
         * @param $transaction_id
         * @param $refunded
         *
         * @return mixed
         */
        public function get_refund_button_html($funnel_id, $offer_id, $total_charge, $transaction_id, $refunded, $event_id)
        {
        }
        /**
         *
         */
        public function wfocu_should_show_refund_metabox($wc_get_order)
        {
        }
        public function add_refund_js()
        {
        }
        public function set_localized_data($key, $value)
        {
        }
        public function print_metabox_css()
        {
        }
    }
    class WFOCU_Admin_Notices
    {
        public $admin_path;
        public $admin_url;
        public $should_show_shortcodes = \null;
        public function __construct()
        {
        }
        public function maybe_show_notice_for_no_gateways()
        {
        }
        public function maybe_show_notice_for_paypal_missing_creds()
        {
        }
        public function maybe_show_notice_on_memory_usage_and_php_version()
        {
        }
        public function paypal_creds_missing_notice()
        {
        }
        public function no_gateway_notice()
        {
        }
        public static function get_instance()
        {
        }
        public function get_system_memory()
        {
        }
        public function maybe_show_notice_on_pixel_your_site_pro()
        {
        }
        public function pys_notice()
        {
        }
        public function maybe_show_notice_on_wc_membership_below_1_9()
        {
        }
        public function wc_memberships_notice()
        {
        }
        public function maybe_show_notice_on_google_enhanced_pixel_plugin()
        {
        }
        public function enhanced_ga_notice()
        {
        }
        public function maybe_show_notice_on_fb_wooocommerce_plugin()
        {
        }
        /**
         * @todo replace the link with the valid fbwoo link for buildwoofunnels
         */
        public function fbwooo_notice()
        {
        }
        public function maybe_dismiss_notice()
        {
        }
    }
    class WFOCU_Static_Merge_Tags
    {
        public static $threshold_to_date = 30;
        protected static $_data_shortcode = array();
        /**
         * Maybe try and parse content to found the wfocu merge tags
         * And converts them to the standard wp shortcode way
         * So that it can be used as do_shortcode in future
         * @param string $content
         * @return mixed|string
         */
        public static function maybe_parse_merge_tags($content = '')
        {
        }
        public static function get_all_tags()
        {
        }
        protected static function shop_title()
        {
        }
        protected static function home_url()
        {
        }
        protected static function shop_url()
        {
        }
        protected static function shop_admin_email()
        {
        }
    }
    class WFOCU_Syntax_Merge_Tags
    {
        public static $threshold_to_date = 30;
        protected static $_data_shortcode = array();
        /**
         * Maybe try and parse content to found the wfocu merge tags
         * And converts them to the standard wp shortcode way
         * So that it can be used as do_shortcode in future
         *
         * @param string $content
         *
         * @return mixed|string
         */
        public static function maybe_parse_merge_tags($content = '', $helper_data = \false)
        {
        }
        public static function get_all_tags()
        {
        }
        public static function init()
        {
        }
        public static function highlight($attr)
        {
        }
    }
    class WFOCU_Dynamic_Merge_Tags
    {
        public static $threshold_to_date = 30;
        protected static $_data_shortcode = array();
        public static function init()
        {
        }
        /**
         * Maybe try and parse content to found the wfocu merge tags
         * And converts them to the standard wp shortcode way
         * So that it can be used as do_shortcode in future
         *
         * @param string $content
         *
         * @return mixed|string
         */
        public static function maybe_parse_merge_tags($content = '')
        {
        }
        public static function get_all_tags()
        {
        }
        public static function get_all_other_tags()
        {
        }
        public static function customer_email()
        {
        }
        public static function customer_user_id()
        {
        }
        public static function customer_first_name_cap()
        {
        }
        public static function customer_last_name_cap()
        {
        }
        public static function customer_full_name()
        {
        }
        public static function customer_first_name()
        {
        }
        public static function customer_last_name()
        {
        }
        public static function customer_full_name_cap()
        {
        }
        public static function order_no()
        {
        }
        public static function order_status()
        {
        }
        public static function order_date()
        {
        }
        public static function order_total()
        {
        }
        public static function order_itemscount()
        {
        }
        public static function order_payment_method()
        {
        }
        public static function order_shipping_method()
        {
        }
        public static function order_billing_country()
        {
        }
        public static function order_shipping_country()
        {
        }
        public static function order_billing_address()
        {
        }
        public static function order_shipping_address()
        {
        }
        public static function order_customer_note()
        {
        }
        public static function customer_provided_note()
        {
        }
        public static function order_ip()
        {
        }
        public static function customer_phone()
        {
        }
        public static function subscription_id()
        {
        }
        public static function subscription_status()
        {
        }
        public static function subscription_start_date()
        {
        }
        public static function subscription_next_payment_date()
        {
        }
        public static function subscription_end_date()
        {
        }
        public static function subscription_last_payment_date()
        {
        }
        public static function process_order_data($attr)
        {
        }
        public static function get_fallback($key)
        {
        }
    }
    class WFOCU_ShortCode_Merge_Tags
    {
        public static $threshold_to_date = 30;
        protected static $_data_shortcode = array();
        /**
         * Maybe try and parse content to found the wfocu merge tags
         * And converts them to the standard wp shortcode way
         * So that it can be used as do_shortcode in future
         *
         * @param string $content
         *
         * @return mixed|string
         */
        public static function maybe_parse_merge_tags($content = '', $helper_data = \false)
        {
        }
        public static function get_all_tags()
        {
        }
        public static function init()
        {
        }
        public static function process_date($shortcode_attrs)
        {
        }
        protected static function is_not_excluded_date($date, $exclusions)
        {
        }
        protected static function is_not_excluded_day($date, $exclusions)
        {
        }
        public static function process_day($shortcode_attrs)
        {
        }
        public static function process_today($shortcode_attrs)
        {
        }
        public static function process_time($shortcode_attrs)
        {
        }
        /**
         * Countdown timer merge tag
         *
         * @param $shortcode_attrs
         *
         * @return string
         */
        public static function countdown_timer($shortcode_attrs)
        {
        }
        public static function wfocu_order_meta($shortcode_attrs)
        {
        }
        public static function product_price($attr, $raw = \false)
        {
        }
        public static function product_price_regular($attr, $raw = \false)
        {
        }
        public static function product_price_full($attr)
        {
        }
        public static function product_price_regular_raw($attr)
        {
        }
        public static function product_price_raw($attr)
        {
        }
        public static function product_save_value($attr)
        {
        }
        public static function product_save_percentage($attr)
        {
        }
        public static function product_save_combined($attr)
        {
        }
        public static function get_possible_key($key)
        {
        }
        public static function product_single_unit_price($attr)
        {
        }
    }
    /**
     * Base class for database interactions via custom table.
     *
     */
    abstract class WFOCU_DB_Base
    {
        /**
         * Primary fields
         *
         * @since 1.3.5
         *
         * @var array
         */
        protected $primary_fields = array();
        /**
         * Meta fields
         *
         * @since 1.3.5
         *
         * @var array
         */
        protected $meta_fields = array();
        /**
         * Meta keys
         *
         * @since 1.3.5
         *
         * @var array
         */
        protected $meta_keys = array();
        /**
         * Name of primary index
         *
         * @since 1.3.5
         *
         * @var string
         */
        protected $index;
        /**
         * Name of table
         *
         * NOTE: Don't call this, ever. Use $this->get_table_name() so prefix and possible suffix are extended.
         *
         * @since 1.3.5
         *
         * @var string
         */
        protected $table_name;
        /**
         * The start date of the report.
         *
         * @var int timestamp
         */
        public $start_date;
        /**
         * The end date of the report.
         *
         * @var int timestamp
         */
        public $end_date;
        /**
         * Flag to designate that there is a meta table
         *
         * @since 1.5.0
         *
         * @var bool
         */
        protected $has_meta = \true;
        /**
         * Constructor -- protected to force singleton upon subclasses.
         */
        protected function __construct()
        {
        }
        /**
         * Get name of table with prefix
         *
         * @param bool|false $meta Whether primary or meta table name is desired. Default is false, which returns primary table
         *
         * @return string
         * @since 1.3.5
         *
         */
        public function get_table_name($meta = \false)
        {
        }
        /**
         * Get names of fields for this collection
         *
         * @return array
         * @since 1.3.5
         *
         */
        public function get_fields()
        {
        }
        /**
         * Create a new entry with meta (if supported)
         *
         * @param array $data Data to save
         *
         * @return bool|int|null
         * @since 1.3.5
         *
         */
        public function create(array $data)
        {
        }
        /**
         *  Save a row
         *
         * @param array $data Row data to save
         * @param bool|false $meta
         *
         * @return bool|int|null
         * @since 1.3.5
         *
         */
        protected function save(array $data, $meta = \false)
        {
        }
        /**
         * Delete an entry from DB
         *
         * @param int $id ID of entry
         *
         * @return bool
         * @since 1.3.5
         *
         */
        public function delete($id)
        {
        }
        public function query_results($args = array())
        {
        }
        /**
         * Get meta rows from DB
         *
         * @param int|array $id ID of entry, or an array of IDs.
         * @param string|bool $key Optional. If false, the default all the metas are returned.  Use name of key to get one specific key.
         *
         * @return array|null|object
         * @since 1.3.5
         *
         */
        public function get_meta($id, $key = \false)
        {
        }
        /**
         * @param array $results
         * @param $key
         *
         * @return array|null
         */
        protected function reduce_meta(array $results, $key)
        {
        }
        /**
         * Check if a field is valid
         *
         * @param string $field Name of field to check
         * @param string $type Type of field. Options: primary|meta|meta_key
         *
         * @return bool
         * @since 1.3.5
         *
         */
        protected function valid_field($field, $type = 'primary')
        {
        }
        /**
         * Prepare an array for use with IN() or NOT IN()
         *
         * Creates comma separated string with numeric values of the all keys.
         *
         * @param array $array
         *
         * @return string
         * @since 1.3.5
         *
         */
        protected function escape_array(array $array)
        {
        }
        /**
         * Add meta value to record by key
         *
         * @param array $meta Meta data
         * @param array $data Record
         *
         * @return mixed
         * @since 1.3.5
         *
         */
        protected function add_meta_to_record(array $meta, array $data)
        {
        }
        /**
         * @return int|null
         */
        public function highest_id()
        {
        }
        /**
         * Query by meta key
         *
         * @param string $key Meta key to query by
         * @param string $value Meta value to query for
         *
         * @return array|null
         * @since 1.4.5
         *
         */
        protected function query_meta($key, $value)
        {
        }
        public function add_meta($id, $key, $value)
        {
        }
    }
    /**
     * Track events
     *
     */
    class WFOCU_DB_Session extends \WFOCU_DB_Base
    {
        /**
         * Primary fields
         *
         * @since 1.3.5
         *
         * @var array
         */
        public $_session_key = 0;
        protected $primary_fields = array('order_id' => array('%s', 'strip_tags'), 'email' => array('%s', 'strip_tags'), 'total' => array('%s', 'strip_tags'), 'gateway' => array('%s', 'strip_tags'), 'cid' => array('%d', 'strip_tags'), 'fid' => array('%d', 'strip_tags'), 'timestamp' => array('%s', 'strip_tags'));
        /**
         * Name of table
         *
         * @since 1.3.5
         *
         * @var string
         */
        protected $table_name = 'wfocu_session';
        /**
         * Setup the actions to track upon
         *
         * @since 1.3.5
         */
        protected function __construct()
        {
        }
        /**
         * Get class instance
         *
         * @return \WFOCU_DB_Track
         * @since 1.3.5
         *
         */
        public static function get_instance()
        {
        }
        public function funnel_start($funnel_id, $order_id, $email, $gateway = '', $contact_id = 0)
        {
        }
        public function get_session_id()
        {
        }
        public function set_session_id($id)
        {
        }
        /**
         * Delete an entry from DB
         *
         * @param int $id ID of entry
         *
         * @return bool
         * @since 1.3.5
         *
         */
        public function delete($id)
        {
        }
        /**
         * Getting session id by order id
         *
         * @param $order_id
         *
         * @return array
         */
        public function get_session_id_by_order_id($order_id)
        {
        }
    }
    /**
     * Class WFOCU_DB_Tables
     */
    class WFOCU_DB_Tables
    {
        /**
         * WPDB instance
         *
         * @since 1.5.1
         *
         * @var wpdb
         */
        protected $wpdb;
        /**
         * Charector collation
         *
         * @since 1.5.1
         *
         * @var string
         */
        protected $charset_collate;
        /**
         * Max index length
         *
         * @since 1.5.1
         *
         * @var int
         */
        protected $max_index_length = 191;
        /**
         * List of missing tables
         *
         * @since 1.5.4
         *
         * @var array
         */
        protected $missing_tables;
        /**
         * WFOCU_DB_Tables constructor.
         *
         * @param wpdb $wpdb
         *
         * @since 1.5.1
         *
         */
        public function __construct(\wpdb $wpdb)
        {
        }
        /**
         * Add CF tables if they are missing
         *
         * @since 1.5.1
         */
        public function add_if_needed()
        {
        }
        /**
         * Get list of missing tables
         *
         * @return array
         * @since 1.5.4
         *
         */
        public function get_missing_tables()
        {
        }
        /**
         * Find any missing tables
         *
         * @return array
         */
        protected function find_missing_tables()
        {
        }
        /**
         * Get the list of tables, with wpdb prefix
         *
         * @return array
         * @since 1.5.1
         *
         */
        protected function get_tables_list()
        {
        }
        /**
         * Add wfocu_events table
         *
         * Warning: does not check if it exists first, which could cause SQL errors.
         *
         * @since 1.5.1
         */
        public function session()
        {
        }
        /**
         * Add wfocu_events table
         *
         * Warning: does not check if it exists first, which could cause SQL errors.
         *
         * @since 1.5.1
         */
        public function event()
        {
        }
        /**
         * Add wfocu_events table
         *
         * Warning: does not check if it exists first, which could cause SQL errors.
         *
         * @since 1.5.1
         */
        public function events()
        {
        }
        /**
         * Add wfocu_form_entry_meta table
         *
         * Warning: does not check if it exists first, which could cause SQL errors.
         *
         * @since 1.5.1
         */
        public function events_meta()
        {
        }
        /**
         * Add wfocu_form_entry_meta table
         *
         * Warning: does not check if it exists first, which could cause SQL errors.
         *
         * @since 1.5.1
         */
        public function event_meta()
        {
        }
    }
    class WFOCU_DB_Track extends \WFOCU_DB_Base
    {
        const FUNNEL_INIT_ACTION_ID = 1;
        const FUNNEL_ENDED_ACTION_ID = 8;
        const OFFER_VIEWED_ACTION_ID = 2;
        const OFFER_ACCEPTED_ACTION_ID = 4;
        const OFFER_REJECTED_ACTION_ID = 6;
        const OFFER_EXPIRED_ACTION_ID = 7;
        const OFFER_PAYMENT_FAILED_ACTION_ID = 9;
        const OFFER_SKIPPED_ACTION_ID = 10;
        const OFFER_REFUNDED_ACTION_ID = 12;
        const PRODUCT_VIEWED_ACTION_ID = 3;
        const PRODUCT_ACCEPTED_ACTION_ID = 5;
        /**
         * Primary fields
         *
         * @since 1.3.5
         *
         * @var array
         */
        protected $primary_fields = array('sess_id' => array('%s', 'strip_tags'), 'object_type' => array('%s', 'strip_tags'), 'object_id' => array('%s', 'strip_tags'), 'action_type_id' => array('%s', 'strip_tags'), 'value' => array('%s', 'strip_tags'), 'timestamp' => array('%s', 'strip_tags'));
        /**
         * Meta fields
         *
         * @since 1.3.5
         *
         * @var array
         */
        protected $meta_fields = array('event_id' => array('%d', 'absint'), 'meta_key' => array(
            //phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_key
            '%s',
            'strip_tags',
        ), 'meta_value' => array(
            //phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_value
            '%s',
            'strip_tags',
        ));
        /**
         * Meta keys
         *
         * @since 1.3.5
         *
         * @var array
         */
        protected $meta_keys = array('_funnel_id' => array('%s', 'strip_tags'), '_offer_type' => array('%s', 'strip_tags'), '_offer_id' => array('%s', 'strip_tags'), '_qty' => array('%s', 'esc_url_raw'), '_new_order' => array('%s', 'esc_url_raw'), '_transaction_id' => array('%s', 'esc_url_raw'), '_invalidation_reason' => array('%d', 'esc_url_raw'), '_items_added' => array('%s', 'strip_tags'), '_total_shipping' => array('%s', 'strip_tags'), '_shipping_batch_id' => array('%s', 'strip_tags'));
        /**
         * Name of primary index
         *
         * @since 1.3.5
         *
         * @var string
         */
        protected $index = 'event_id';
        /**
         * Name of table
         *
         * @since 1.3.5
         *
         * @var string
         */
        protected $table_name = 'wfocu_event';
        /**
         * Time to record against events
         */
        protected $time_to_record;
        /**
         * Setup the actions to track upon
         *
         * @since 1.3.5
         */
        protected function __construct()
        {
        }
        /**
         * Get class instance
         *
         * @return \WFOCU_DB_Track
         * @since 1.3.5
         *
         */
        public static function get_instance()
        {
        }
        public function funnel_start($funnel_id, $order_id, $email)
        {
        }
        public function offer_viewed($offer_id, $order_id, $funnel_id, $get_type_of_offer, $get_type_index_of_offer, $email)
        {
        }
        public function offer_skipped($offer_id, $order_id, $funnel_id, $get_type_of_offer, $get_type_index_of_offer, $email, $invalidation_reason)
        {
        }
        public function create_session_id($order_id, $email)
        {
        }
        public function offer_payment_failed($args)
        {
        }
        public function product_viewed($args = array())
        {
        }
        public function offer_rejected($args = array())
        {
        }
        public function add_to_order_meta($args)
        {
        }
        public function offer_accepted($args = array())
        {
        }
        public function product_accepted($args = array())
        {
        }
        public function offer_expired($args = array())
        {
        }
        public function funnel_ended($funnel_id, $order_id, $email)
        {
        }
        public function offer_refunded($order_id, $funnel_id, $offer_id, $refund_txn_id, $txn_id, $amount)
        {
        }
        /**
         * Get tracking data by event name
         *
         * @param string $event Event name
         * @param bool $return_forms Optional. If true, the default, form IDs are returned. If false, event meta data is returned.
         *
         * @return array|null
         * @since 1.4.5
         *
         */
        public function by_event($event, $return_forms = \true)
        {
        }
        /**
         * Get form IDs or an array of event IDs
         *
         * @param array $event_ids Event IDs to find form IDs for
         *
         * @return array|null
         * @since 1.4.5
         *
         */
        protected function form_ids_for_events($event_ids)
        {
        }
        public function get_action_config()
        {
        }
        public function get_action_type($object_base, $action_slug)
        {
        }
        public function action_nice_name($action_id)
        {
        }
        public function _upsell_type()
        {
        }
        public function get_upsell_type_nice_name($action_id = 1)
        {
        }
        public function get_upsell_type_index($type = 'upsell')
        {
        }
        public function delete($sess_id)
        {
        }
    }
    /**
     * Class WFOCU_Remote_Template_Importer
     * @package WFOCU
     * @author XlPlugins
     */
    class WFOCU_Remote_Template_Importer
    {
        public static function get_instance()
        {
        }
        public static function get_error_message($code)
        {
        }
        /**
         * Import template remotely.
         * @return mixed
         */
        public function get_remote_template($template_id, $builder)
        {
        }
        public function get_domain()
        {
        }
        /**
         * Get license key.
         * @return mixed
         */
        public function get_license_key()
        {
        }
        public function get_software_title()
        {
        }
        public function get_template_api_url()
        {
        }
    }
    /**
     * Elementor template library local source.
     *
     * Elementor template library local source handler class is responsible for
     * handling local Elementor templates saved by the user locally on his site.
     *
     * @since 1.0.0
     */
    class WFOCU_Importer_Elementor extends \Elementor\TemplateLibrary\Source_Local
    {
        /**
         *  Import single template
         *
         * @param int $post_id post ID.
         */
        public function single_template_import($post_id, $content = '', $offer_settings = array())
        {
        }
        /**
         * @param $offer_id
         * @param $el_data
         *
         * @return mixed
         */
        public function wfocu_replace_position_to_selected_products($product_keys, $el_data)
        {
        }
    }
    /**
     * Class Elementor_WFOCU_Accept_Link_Widget
     */
    class Elementor_WFOCU_Accept_Link_Widget extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         */
        public function get_title()
        {
        }
        /**
         * @return string
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * Retrieve the list of categories the oEmbed widget belongs to.
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @access protected
         */
        protected function _register_controls()
        {
        }
        /**
         * Render widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render link text.
         *
         * @access protected
         */
        protected function render_text()
        {
        }
    }
    /**
     * Class WFOCU_Product_Short_Description_Widget
     */
    class WFOCU_Product_Short_Description_Widget extends \Elementor\Widget_Base
    {
        public function get_name()
        {
        }
        public function get_title()
        {
        }
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * Retrieve the list of categories the widget belongs to.
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        public function get_keywords()
        {
        }
        protected function _register_controls()
        {
        }
        /**
         * Render output
         */
        public function render()
        {
        }
    }
    /**
     * Class Elementor_WFOCU_Reject_Button_Widget
     */
    class Elementor_WFOCU_Reject_Button_Widget extends \Elementor\Widget_Button
    {
        /**
         * Get widget name.
         *
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @access protected
         */
        protected function _register_controls()
        {
        }
        /**
         * Render widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render button widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @access protected
         */
        protected function _content_template()
        {
        }
        /**
         * Render button widget text.
         *
         * @access protected
         */
        protected function render_text()
        {
        }
    }
    /**
     * Class Elementor_WFOCU_Price_Widget
     */
    class Elementor_WFOCU_Price_Widget extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * Retrieve the list of categories the upstroke widget belongs to.
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @access protected
         */
        protected function _register_controls()
        {
        }
        /**
         * Render widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Class Elementor_WFOCU_Reject_Link_Widget
     */
    class Elementor_WFOCU_Reject_Link_Widget extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         */
        public function get_title()
        {
        }
        /**
         *
         * @return string
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * Retrieve the list of categories the widget belongs to.
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @access protected
         */
        protected function _register_controls()
        {
        }
        /**
         * Render widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @access protected
         */
        protected function render()
        {
        }
        /**
         *
         * Render link text.
         *
         * @access protected
         */
        protected function render_text()
        {
        }
    }
    /**
     * Class Elementor_WFOCU_Accept_Button_Widget
     */
    class Elementor_WFOCU_Accept_Button_Widget extends \Elementor\Widget_Button
    {
        /**
         * Get widget name.
         *
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register widget controls.
         *
         * Add different input fields to allow the user to change and customize the widget settings.
         *
         * @access protected
         */
        protected function _register_controls()
        {
        }
        /**
         * Render widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render button widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @access protected
         */
        protected function _content_template()
        {
        }
        /**
         * Render button text.
         *
         * Render button widget text.
         *
         * @access protected
         */
        protected function render_text()
        {
        }
    }
    /**
     * Class Elementor_WFOCU_Qty_Selector_Widget
     */
    class Elementor_WFOCU_Qty_Selector_Widget extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * Retrieve the list of categories the widget belongs to.
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @access protected
         */
        protected function _register_controls()
        {
        }
        /**
         * Render widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Class Elementor_WFOCU_Variation_Selector_Widget
     */
    class Elementor_WFOCU_Variation_Selector_Widget extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * Retrieve the list of categories the widget belongs to.
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @access protected
         */
        protected function _register_controls()
        {
        }
        /**
         * Render widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Class Elementor_WFOCU_Product_Title_Widget
     */
    class Elementor_WFOCU_Product_Title_Widget extends \Elementor\Widget_Heading
    {
        /**
         * Get widget name.
         *
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * Retrieve the list of categories the widget belongs to.
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @access protected
         */
        protected function _register_controls()
        {
        }
        /**
         * Render widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @access protected
         */
        protected function render()
        {
        }
        protected function _content_template()
        {
        }
    }
    /**
     * Class WFOCU_Product_Images_Widget
     */
    class WFOCU_Product_Images_Widget extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         * @return string
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         * @return string|void
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         * @return string
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * Retrieve the list of categories the widget belongs to.
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        public function get_script_depends()
        {
        }
        public function get_keywords()
        {
        }
        /**
         * Register widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @access protected
         */
        protected function _register_controls()
        {
        }
        /**
         * Used to determine whether the reload preview is required.
         */
        public function is_reload_preview_required()
        {
        }
        public function render()
        {
        }
    }
}
namespace ElementorPro\Modules\ThemeBuilder\Conditions {
    class WooFunnels_Offers extends \ElementorPro\Modules\ThemeBuilder\Conditions\Post
    {
        public function get_label()
        {
        }
        public function register_sub_conditions()
        {
        }
    }
}
namespace {
    /**
     * Class WFOCU_Template_Elementor
     * This class used as wrapper class for the elementor JSON templates during the rendering of the template
     * In woofunnels template design structure every template inherits WFOCU_Template_Common so we need elementor templates to follow the same structure
     *  */
    class WFOCU_Template_Elementor extends \WFOCU_Template_Common
    {
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
    }
    /**
     * Class WFOCU_Elementor_Tag_Countdown
     */
    class WFOCU_Elementor_Tag_Countdown extends \Elementor\Core\DynamicTags\Tag
    {
        public function get_name()
        {
        }
        public function get_title()
        {
        }
        public function get_group()
        {
        }
        public function get_categories()
        {
        }
        public function render()
        {
        }
    }
    class WFOCU_Elementor_Tag_Title extends \Elementor\Core\DynamicTags\Tag
    {
        /**
         * Get Name
         *
         * Returns the Name of the tag
         *
         * @return string
         * @since 2.0.0
         * @access public
         *
         */
        public function get_name()
        {
        }
        /**
         * Get Title
         *
         * Returns the title of the Tag
         *
         * @return string
         * @since 2.0.0
         * @access public
         *
         */
        public function get_title()
        {
        }
        /**
         * Get Group
         *
         * Returns the Group of the tag
         *
         * @return string
         * @since 2.0.0
         * @access public
         *
         */
        public function get_group()
        {
        }
        /**
         * Get Categories
         *
         * Returns an array of tag categories
         *
         * @return array
         * @since 2.0.0
         * @access public
         *
         */
        public function get_categories()
        {
        }
        /**
         * Register Controls
         *
         * Registers the Dynamic tag controls
         *
         * @return void
         * @since 2.0.0
         * @access protected
         *
         */
        protected function _register_controls()
        {
        }
        /**
         * Render
         *
         * Prints out the value of the Dynamic tag
         *
         * @return void
         * @since 2.0.0
         * @access public
         *
         */
        public function render()
        {
        }
    }
    class WFOCU_Elementor_Tag_Price extends \Elementor\Core\DynamicTags\Tag
    {
        /**
         * Get Name
         *
         * Returns the Name of the tag
         *
         * @return string
         * @since 2.0.0
         * @access public
         *
         */
        public function get_name()
        {
        }
        /**
         * Get Title
         *
         * Returns the title of the Tag
         *
         * @return string
         * @since 2.0.0
         * @access public
         *
         */
        public function get_title()
        {
        }
        /**
         * Get Group
         *
         * Returns the Group of the tag
         *
         * @return string
         * @since 2.0.0
         * @access public
         *
         */
        public function get_group()
        {
        }
        /**
         * Get Categories
         *
         * Returns an array of tag categories
         *
         * @return array
         * @since 2.0.0
         * @access public
         *
         */
        public function get_categories()
        {
        }
        /**
         * Register Controls
         *
         * Registers the Dynamic tag controls
         *
         * @return void
         * @since 2.0.0
         * @access protected
         *
         */
        protected function _register_controls()
        {
        }
        /**
         * Render
         *
         * Prints out the value of the Dynamic tag
         *
         * @return void
         * @since 2.0.0
         * @access public
         *
         */
        public function render()
        {
        }
    }
    class WFOCU_Template_Group_Elementor extends \WFOCU_Template_Group
    {
        public $allow_empty_template = \true;
        public $prefix = 'el';
        public function get_nice_name()
        {
        }
        public function get_slug()
        {
        }
        public function load_templates()
        {
        }
        public function local_templates()
        {
        }
        public function get_edit_link()
        {
        }
        public function get_preview_link()
        {
        }
        public function update_template($template, $offer, $offer_settings)
        {
        }
        public function clear_cache($offer_id_new)
        {
        }
        public function handle_remote_import($data)
        {
        }
        public function handle_remote_import_error($data)
        {
        }
        public function get_template_path()
        {
        }
    }
    /**
     * Image Importer
     */
    class WFOCU_Image_Importer
    {
        /**
         * Constructor
         *
         */
        public function __construct()
        {
        }
        /**
         * Initiator
         *
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Process Image Download
         *
         * @param array $attachments Attachment array.
         *
         * @return array              Attachment array.
         */
        public function process($attachments)
        {
        }
        /**
         * Import Image
         *
         * @param array $attachment Attachment array.
         *
         * @return array              Attachment array.
         * @since 1.1.1
         */
        public function import($attachment)
        {
        }
    }
    class WFOCU_Compatibility_With_FBA
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function prevent_fba_fulfilment()
        {
        }
        public function prevent_fba_fulfilment_multiple($order_id)
        {
        }
        public function maybe_execute_fulfilment($order_id)
        {
        }
    }
    class WFOCU_WFFN_Compatibility
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function add_upsell_step()
        {
        }
    }
    class WFOCU_Compatibility_With_Theme_Nitro
    {
        public function __construct()
        {
        }
        public function remove_panels($theme_options)
        {
        }
        public function is_enable()
        {
        }
    }
    /**
     * WooCommerce Compatibility Utility Class
     *
     * The unfortunate purpose of this class is to provide a single point of
     * compatibility functions for dealing with supporting multiple versions
     * of WooCommerce.
     *
     * The recommended procedure is to rename this file/class, replacing "my plugin"
     * with the particular plugin name, so as to avoid clashes between plugins.
     * Over time we expect to remove methods from this class, using the current
     * ones directly, as support for older versions of WooCommerce is dropped.
     *
     * Current Compatibility: 2.0.x - 2.1
     *
     * @version 1.0
     */
    class WFOCU_WC_Compatibility
    {
        /**
         * Compatibility function for outputting a woocommerce attribute label
         *
         * @param string $label the label to display
         *
         * @return string the label to display
         * @since 1.0
         *
         */
        public static function wc_attribute_label($label)
        {
        }
        public static function wc_attribute_taxonomy_name($name)
        {
        }
        public static function wc_get_attribute_taxonomies()
        {
        }
        public static function wc_placeholder_img_src()
        {
        }
        /**
         * @param WC_Product $product
         *
         * @return string
         */
        public static function woocommerce_get_formatted_product_name($product)
        {
        }
        /**
         * @param $order
         * @param $item
         *
         * @return WC_Product
         */
        public static function get_product_from_item($order, $item)
        {
        }
        public static function get_short_description($product)
        {
        }
        public static function get_productname_from_item($order, $item)
        {
        }
        public static function get_qty_from_item($order, $item)
        {
        }
        public static function get_display_item_meta($order, $item)
        {
        }
        public static function get_display_item_downloads($order, $item)
        {
        }
        public static function get_purchase_note($product)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed|string
         */
        public static function get_order_currency($order)
        {
        }
        public static function get_payment_gateway_from_order($order)
        {
        }
        public static function get_item_subtotal($order, $item)
        {
        }
        public static function get_shipping_country_from_order($order)
        {
        }
        public static function get_billing_country_from_order($order)
        {
        }
        public static function get_order_id($order)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_order_billing_1($order)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_order_data($order, $key)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_billing_first_name($order)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_billing_last_name($order)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_order_status($order)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_order_billing_2($order)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_order_shipping_1($order)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_order_shipping_total($order)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_order_shipping_2($order)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_order_date($order)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_payment_method($order)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_customer_ip_address($order)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_customer_note($order)
        {
        }
        /**
         * @param $date
         * @param string $format
         *
         * @return string
         */
        public static function get_formatted_date($date, $format = '')
        {
        }
        /**
         * Compatibility function to add and store a notice
         *
         * @param string $message The text to display in the notice.
         * @param string $notice_type The singular name of the notice type - either error, success or notice. [optional]
         *
         * @since 1.0
         *
         */
        public static function wc_add_notice($message, $notice_type = 'success')
        {
        }
        /**
         * Prints messages and errors which are stored in the session, then clears them.
         *
         * @since 1.0
         */
        public static function wc_print_notices()
        {
        }
        /**
         * Compatibility function to queue some JavaScript code to be output in the footer.
         *
         * @param string $code javascript
         *
         * @since 1.0
         *
         */
        public static function wc_enqueue_js($code)
        {
        }
        /**
         * Sets WooCommerce messages
         *
         * @since 1.0
         */
        public static function set_messages()
        {
        }
        /**
         * Returns a new instance of the woocommerce logger
         *
         * @return WC_Logger logger
         * @since 1.0
         */
        public static function new_wc_logger()
        {
        }
        /**
         * Format decimal numbers ready for DB storage
         *
         * Sanitize, remove locale formatting, and optionally round + trim off zeros
         *
         * @param float|string $number Expects either a float or a string with a decimal separator only (no thousands)
         * @param mixed $dp number of decimal points to use, blank to use woocommerce_price_num_decimals, or false to avoid all rounding.
         * @param boolean $trim_zeros from end of string
         *
         * @return string
         * @since 1.0
         *
         */
        public static function wc_format_decimal($number, $dp = \false, $trim_zeros = \false)
        {
        }
        /**
         * Get the count of notices added, either for all notices (default) or for one particular notice type specified
         * by $notice_type.
         *
         * @param string $notice_type The name of the notice type - either error, success or notice. [optional]
         *
         * @return int the notice count
         * @since 1.0
         *
         */
        public static function wc_notice_count($notice_type = '')
        {
        }
        /**
         * Compatibility function to use the new WC_Admin_Meta_Boxes class for the save_errors() function
         *
         * @return old save_errors function or new class
         * @since 1.0-1
         */
        public static function save_errors()
        {
        }
        /**
         * Compatibility function to get the version of the currently installed WooCommerce
         *
         * @return string woocommerce version number or null
         * @since 1.0
         */
        public static function get_wc_version()
        {
        }
        /**
         * Returns the WooCommerce instance
         *
         * @return WooCommerce woocommerce instance
         * @since 1.0
         */
        public static function WC()
        {
        }
        /**
         * Returns true if the WooCommerce plugin is loaded
         *
         * @return boolean true if WooCommerce is loaded
         * @since 1.0
         */
        public static function is_wc_loaded()
        {
        }
        /**
         * Returns true if the installed version of WooCommerce is 2.1 or greater
         *
         * @return boolean true if the installed version of WooCommerce is 2.1 or greater
         * @since 1.0
         */
        public static function is_wc_version_gte_2_1()
        {
        }
        /**
         * Returns true if the installed version of WooCommerce is 2.6 or greater
         *
         * @return boolean true if the installed version of WooCommerce is 2.1 or greater
         * @since 1.0
         */
        public static function is_wc_version_gte_2_6()
        {
        }
        /**
         * Returns true if the installed version of WooCommerce is 2.6 or greater
         *
         * @return boolean true if the installed version of WooCommerce is 2.1 or greater
         * @since 1.0
         */
        public static function is_wc_version_gte_3_0()
        {
        }
        /**
         * @param WC_Order_Item_Shipping $method
         *
         * @return string
         */
        public static function get_method_id($method)
        {
        }
        /**
         * @param WC_Order_Item_Shipping $method
         *
         * @return string
         */
        public static function get_instance_id($method)
        {
        }
        /**
         * Returns true if the installed version of WooCommerce is greater than $version
         *
         * @param string $version the version to compare
         *
         * @return boolean true if the installed version of WooCommerce is > $version
         * @since 1.0
         *
         */
        public static function is_wc_version_gt($version)
        {
        }
        public static function display_prices_including_tax()
        {
        }
    }
    class WFOCU_Compatibility_With_WPML_MultiCurrency
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        /**
         *
         * Modifies the amount for the fixed discount given by the admin in the currency selected.
         *
         * @param integer|float $price
         *
         * @return float
         */
        public function alter_fixed_amount($price, $currency = \null)
        {
        }
        function get_fixed_currency_price_reverse($price, $from = \null, $base = \null)
        {
        }
        public function modify_link($link)
        {
        }
    }
    class WFOCU_Compatibility_With_WPSEO
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function modify($should_render, $allow_thank_you, $without_offer, $current_action)
        {
        }
    }
    class WFOCU_Compatibility_With_Product_Bundles
    {
        public $accepted_ids = [];
        public function __construct()
        {
        }
        /**
         * @hooked over `wfocu_add_products_to_the_order`
         *
         * @param array $products products in the package
         * @param WC_Order $order current order
         *
         * @return mixed
         */
        public function maybe_add_bundle_to_the_cart($products, $order)
        {
        }
        public function is_enable()
        {
        }
        /**
         * @hooked over `woocommerce_bundled_add_to_order`
         * lets collect ids that are added during the upsell so that we can further reduce stock on that basis
         *
         * @param $bundled_order_item_id
         */
        public function record_bundled_ids_during_upsell($bundled_order_item_id)
        {
        }
        /**
         * @hooked over `wfocu_after_reduce_stock_on_batching`
         * Lets reduce the bundled item stock in case of batching, order item ids are collected by WFOCU_Compatibility_With_Product_Bundles::record_bundled_ids_during_upsell()
         *
         * @param $products
         * @param WC_Order $order
         */
        public function maybe_reduce_stock_for_bundled_upsells($products, $order)
        {
        }
        /**
         * @hooked into wfocu_offer_product_types
         * Allow subscription product in the offers
         *
         * @param array $product_types
         *
         * @return mixed
         */
        public function allow_bundle_products_in_offer($product_types)
        {
        }
        /**
         * @hooked into wfocu_offer_product_types
         * Allow subscription product in the offers
         *
         * @param array $product_types
         *
         * @return mixed
         */
        public function allow_bundle_products_in_stock($product_types)
        {
        }
        /**
         * @param $regular_price
         * @param WC_Product $product
         * @param $options
         */
        public function pass_bundle_product_regular_price($regular_price, $product, $options)
        {
        }
        /**
         * @param $regular_price
         * @param WC_Product $product
         * @param $options
         */
        public function pass_bundle_product_sale_price($sale_price, $product, $options)
        {
        }
        public function setup_bundle_discount_prices($product_details, $output, $offer_data, $is_front, $hash_key)
        {
        }
        public function recreate_upsell_package_for_bundled_products($package)
        {
        }
    }
    class WFOCU_Affiliate_WP_Compatibility
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function wfocu_add_affiliate_on_order($offer_id, $package, $order, $new_order, $transaction_id)
        {
        }
        /**
         * @param WC_Order $order
         * @param Integer $affiliate_id
         *
         * @return mixed|void
         */
        public function get_amount($order, $affiliate_id)
        {
        }
    }
    /**
     * Class WFOCU_Compatibility_With_Divi
     */
    class WFOCU_Compatibility_With_Divi
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function should_prevent_jq_on_editor($bool)
        {
        }
        /**
         * @param $attrs
         *
         * @return mixed
         */
        public function add_id_for_wfocu_container($attrs)
        {
        }
    }
    class WFOCU_Compatibility_With_WCVA
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function maybe_unhook()
        {
        }
    }
    /**
     * Class WFOCU_Compatibility_With_UX_Builder
     */
    class WFOCU_Compatibility_With_UX_Builder
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
    }
    class WFOCU_Compatibility_With_WooMultiCurrency
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        /**
         *
         * @param $url
         * @param WC_Order $order
         *
         * @return string
         */
        public function maybe_add_currency_converter_url($url, $order)
        {
        }
        /**
         *
         * Modifies the amount for the fixed discount given by the admin in the currency selected.
         *
         * @param integer|float $price
         *
         * @return float
         */
        public function alter_fixed_amount($price, $currency = \null)
        {
        }
        function get_fixed_currency_price_reverse($price, $from = \null, $base = \null)
        {
        }
    }
    class WFOCU_Plugins_Compatibility
    {
        public function __construct()
        {
        }
        public function register_fake_kirki()
        {
        }
        public function remove_actions_filters()
        {
        }
        public function override_theme_customizer_functionality()
        {
        }
        public function override_theme_customizer_js_code()
        {
        }
    }
    class WFOCU_Compatibility_With_Optimol
    {
        public $accepted_ids = [];
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function remove_img_tag_replace_func()
        {
        }
    }
    class WFOCU_Indeed_Affiliate_WP_Compatibility
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function wfocu_add_affiliate_on_order($offer_id, $package, $order, $new_order, $transaction_id)
        {
        }
    }
    class WFOCU_Compatibility_With_WC_Memberships
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        /**
         * @param $get_offer_id
         * @param $get_package
         * @param $get_parent_order
         * @param $new_order
         * @param $get_transaction_id
         *
         * @throws WC_Data_Exception
         */
        public function maybe_create_new_membership($get_offer_id, $get_package, $get_parent_order, $new_order, $get_transaction_id)
        {
        }
        /**
         * Iterate over the offer products & check if the offer contains any subscription products
         *
         * @param $offer_build_products
         *
         * @return boolean
         */
        public function offer_contains_membership_product($offer_build_product)
        {
        }
        public function create_new_customer($email)
        {
        }
    }
    class WFOCU_LearnDash_Compatibility
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function add_course_in_product_type_support($types)
        {
        }
    }
    /**
     * Initialize Kirki
     */
    class Kirki_Init
    {
    }
    class Kirki_Scripts_Registry
    {
    }
    class WFOCU_Ultimate_Membership_PRO_Compatibility
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function maybe_unhook_and_rehook()
        {
        }
    }
    class WFOCU_Compatibility_With_Weglot
    {
        public $glot_class_object;
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        function weglot_comptibility_function($urlRedirect)
        {
        }
    }
    /**
     * Providing compatibility with cost of goods plugin
     *
     * Class WFOCU_Compatibility_With_WC_COG
     */
    class WFOCU_Compatibility_With_WC_COG
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function wfocu_maybe_update_cost_of_goods($offer_id, $package, $order, $new_order, $transaction_id)
        {
        }
    }
    /**
     * Class WFOCU_Compatibility_With_Beaver
     */
    class WFOCU_Compatibility_With_Beaver
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function should_prevent_jq_on_editor($bool)
        {
        }
        public function is_pro_active()
        {
        }
    }
    /**
     * Class WFOCU_Plugin_Compatibilities
     * Loads all the compatibilities files we have to provide compatibility with each plugin
     */
    class WFOCU_Plugin_Compatibilities
    {
        public static $plugin_compatibilities = array();
        public static function load_all_compatibilities()
        {
        }
        public static function register($object, $slug)
        {
        }
        public static function get_compatibility_class($slug)
        {
        }
        public static function get_fixed_currency_price($price, $currency = \null)
        {
        }
        public static function get_fixed_currency_price_reverse($price, $from = \null, $to = \null)
        {
        }
    }
    class WFOCU_Compatibility_With_Subscriptions
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        /**
         * @hooked over `wfocu_front_payment_gateway_integration_enabled`
         * Check if order contains any subscription & if have subscription then discard integration & allow WooSubscription to take over tokenization
         * It is such an important hook to prevent any such error during the checkout, as woocommerce subscriptions does almost the same work in tokenizing the user as we do.
         * It is required to hold back our functionality to prevent such cases.
         *
         * @param $is_enable
         * @param WC_order $order
         *
         * @return false when having subscription in the cart
         * @see wcs_order_contains_subscription()
         *
         */
        public function maybe_disable_integration_when_subscription_in_cart($is_enable, $order)
        {
        }
    }
    class WFOCU_Compatibility_With_WOOCS
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        /**
         *
         * Modifies the amount for the fixed discount given by the admin in the currency selected.
         *
         * @param integer|float $price
         *
         * @return float
         */
        public function alter_fixed_amount($price, $currency = \null)
        {
        }
        function fixed_amount_reversed($price, $from = \null, $base = \null)
        {
        }
    }
    class WFOCU_Compatibility_With_GeneratePress
    {
        public function __construct()
        {
        }
        /**
         * @param $wp_customize WP_Customize_Manager
         */
        public function wfocu_temp_remove_controls($wp_customize)
        {
        }
        public function is_enable()
        {
        }
    }
    class WFOCU_Compatibility_With_WC_Germanized
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function maybe_reorder_email_hooks($order)
        {
        }
        /**
         * @param WC_Order $order
         * @param $order_status
         *
         */
        public function maybe_send_email_after_nomralize($order, $order_status)
        {
        }
        public function maybe_send_pending_email_for_bacs_for_cheque($funnel_or_order_id, $order_id = '')
        {
        }
        public function maybe_send_pending_emails_new_order($new_order)
        {
        }
    }
    /**
     * Class WFOCU_Compatibility_With_Thrive
     */
    class WFOCU_Compatibility_With_Thrive
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function should_prevent_jq_on_editor($bool)
        {
        }
        public function prevent_changing_template()
        {
        }
    }
    /**
     * Class WFOCU_Compatibility_With_Elementor
     */
    class WFOCU_Compatibility_With_Elementor
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        //initialing widget settings
        public function wfocu_widget_init()
        {
        }
        public function register_tags()
        {
        }
        /**
         * Adding a new widget category 'WooFunnels'
         */
        public function add_wfocu_elementor_category()
        {
        }
        public function maybe_setup_upstroke_fonts()
        {
        }
        public function enqueue_font_css()
        {
        }
        /**
         * @throws Exception
         */
        public function register_widgets()
        {
        }
        /**
         * Include widget Files
         */
        public function includes()
        {
        }
        public function print_inline_script()
        {
        }
        public function setup_footer_script()
        {
        }
        public function print_inline_script_frontend()
        {
        }
        public function get_merge_tags_supported_widgets()
        {
        }
        public function maybe_print_shortcodes_helpbox()
        {
        }
        public function maybe_register_widget_message()
        {
        }
        public function maybe_setup_customizer_data_on_offers()
        {
        }
        public function register_conditions($conditions_manager)
        {
        }
        public function maybe_add_slider_css_in_preview()
        {
        }
        /**
         * @return bool
         */
        public function is_elementor_offer_page()
        {
        }
        /**
         * @return false|int
         */
        public function get_elementor_offer_page_id()
        {
        }
    }
    class WFFN_Step_WC_Upsells extends \WFFN_Step
    {
        public $slug = 'wc_upsells';
        public $list_priority = 30;
        /**
         * WFFN_Step_WC_Upsells constructor.
         */
        public function __construct()
        {
        }
        /**
         * @return WFFN_Step_WC_Upsells|null
         */
        public static function get_instance()
        {
        }
        /**
         * @param $steps
         *
         * @return array
         */
        public function get_step_data()
        {
        }
        /**
         * Return title of upstroke step
         */
        public function get_title()
        {
        }
        /**
         * @param $type
         *
         * @return array
         */
        public function get_step_designs($term)
        {
        }
        public function exclude_ab_variant_from_query($existing_args)
        {
        }
        public function search_any_post_status($existing_args)
        {
        }
        /**
         * @param $funnel_id
         * @param $type
         * @param $posted_data
         *
         * @return stdClass
         */
        public function add_step($funnel_id, $posted_data)
        {
        }
        /**
         * @param $funnel_id
         * @param $upsell_step_id
         * @param $type
         * @param $posted_data
         *
         * @return stdClass
         */
        public function duplicate_step($funnel_id, $upsell_step_id, $posted_data)
        {
        }
        /**
         * @param $step_id
         *
         * @return mixed
         */
        public function get_entity_edit_link($step_id)
        {
        }
        /**
         * @param $step_id
         *
         * @return mixed
         */
        public function get_entity_view_link($step_id)
        {
        }
        public function get_entity_tags($step_id, $funnel_id)
        {
        }
        /**
         * @return array|void
         */
        public function get_supports()
        {
        }
        /**
         * @param $funnels
         *
         * @return array
         */
        public function maybe_filter_upsells($funnels)
        {
        }
        /**
         * @param $current_step
         *
         * @return bool
         */
        public function validate_environment($current_step)
        {
        }
        /**
         * @param $current_step
         * @param $funnel
         *
         * @return array
         */
        public function maybe_get_upsells($current_step, $funnel)
        {
        }
        /**
         * @param $type
         * @param $step_id
         * @param $new_status
         *
         * @return bool
         */
        public function switch_status($step_id, $new_status)
        {
        }
        public function _get_export_metadata($step)
        {
        }
        public function _process_import($funnel_id, $step_data)
        {
        }
        public function has_import_scheduled($id)
        {
        }
        public function do_import($id)
        {
        }
        public function update_template_data($id)
        {
        }
        public static function funnel_id_recorded($args)
        {
        }
        /**
         * @param $get_ref
         *
         * @return mixed
         */
        public function maybe_funnel_breadcrumb($get_ref)
        {
        }
        public function override_pixel_key($key)
        {
        }
        /**
         * @param $key
         *
         * @return mixed
         */
        public function override_ga_key($key)
        {
        }
        /**
         * @param $key
         *
         * @return mixed
         */
        public function override_gad_key($key)
        {
        }
        /**
         * @param $key
         *
         * @return mixed
         */
        public function override_pint_key($key)
        {
        }
        /**
         * @param $key
         *
         * @return mixed
         */
        public function override_conversion_key($key)
        {
        }
    }
    class WFOCU_Compatibility_With_XLWCTY
    {
        const LITE_MIN_VAR = '2.9.5';
        const PRO_MIN_VAR = '1.11.0';
        public $order_id_in_process = \null;
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        /**
         * @param WC_Order $order_object Current order opening in thank you page.
         */
        function wfocu_maybe_show_additional_order($order_object)
        {
        }
        /**
         * Updating thank you page id in funnel meta
         *
         * @param $post_id
         * @param null $post
         */
        public function maybe_update_next_move_thankyou_page($post_id, $post = \null)
        {
        }
        public function capture_order_id_for_which_nextmove_validating_rules($bool, $content_id, $order_id)
        {
        }
        /**
         * Capturing order id for nextmove lite validation rules
         */
        public function capture_order_id_nextmove_lite_validating_rules($contents, $order_id, $xlwcty_data, $skip_rules)
        {
        }
        public function maybe_validate_rule_in_case_of_new_and_cancel($result, $rule_data)
        {
        }
    }
    class WFOCU_Compatibility_With_Aelia_CS
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        /**
         *
         * Modifies the amount for the fixed discount given by the admin in the currency selected.
         *
         * @param integer|float $price
         *
         * @return float
         */
        public function alter_fixed_amount($price, $currency = \null)
        {
        }
        /**
         * Basic integration with WooCommerce Currency Switcher, developed by Aelia
         * (http://aelia.co). This method can be used by any 3rd party plugin to
         * return prices converted to the active currency.
         *
         * Need a consultation? Find us on Codeable: https://aelia.co/hire_us
         *
         * @param double price The source price.
         * @param string to_currency The target currency. If empty, the active currency
         * will be taken.
         * @param string from_currency The source currency. If empty, WooCommerce base
         * currency will be taken.
         *
         * @return double The price converted from source to destination currency.
         * @author Aelia <support@aelia.co>
         * @link https://aelia.co
         */
        public function get_price_in_currency($price, $to_currency = \null, $from_currency = \null)
        {
        }
        function get_fixed_currency_price_reverse($price, $from = \null, $base = \null)
        {
        }
    }
    /**
     * Customer Updated Order Email.
     *
     * An email sent to the customer when an order is updated by the upsell offer acceptance.
     *
     * @class       WFOCU_WC_Email_Updated_Order
     * @version     1.0.0
     * @author      WooFunnels
     * @extends     WC_Email
     */
    class WFOCU_WC_Email_Updated_Order extends \WC_Email
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get email subject.
         *
         * @return string
         * @since  3.1.0
         */
        public function get_default_subject()
        {
        }
        /**
         * Get email heading.
         *
         * @return string
         * @since  3.1.0
         */
        public function get_default_heading()
        {
        }
        public function fire_order_updated_mail($get_offer_id, $get_package, $get_parent_order, $new_order, $get_transaction_id)
        {
        }
        /**
         * Trigger the sending of this email.
         *
         * @param int $order_id The order ID.
         * @param WC_Order $order Order object.
         */
        public function trigger($order_id, $order = \false)
        {
        }
        /**
         * Get content html.
         *
         * @access public
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * Get content plain.
         *
         * @access public
         * @return string
         */
        public function get_content_plain()
        {
        }
    }
    /**
     * New Order Email.
     *
     * An email sent to the admin when a new order is received/paid for.
     *
     * @class       WFOCU_WC_Email_Updated_Order_Admin
     * @version     2.0.0
     * @package     WooCommerce/Classes/Emails
     * @extends     WC_Email
     */
    class WFOCU_WC_Email_Updated_Order_Admin extends \WC_Email
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get email subject.
         *
         * @return string
         * @since  3.1.0
         */
        public function get_default_subject()
        {
        }
        /**
         * Get email heading.
         *
         * @return string
         * @since  3.1.0
         */
        public function get_default_heading()
        {
        }
        public function fire_order_updated_mail($get_offer_id, $get_package, $get_parent_order, $new_order, $get_transaction_id)
        {
        }
        /**
         * Trigger the sending of this email.
         *
         * @param int $order_id The order ID.
         * @param WC_Order|false $order Order object.
         */
        public function trigger($order_id, $order = \false)
        {
        }
        /**
         * Get content html.
         *
         * @access public
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * Get content plain.
         *
         * @access public
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Initialise settings form fields.
         */
        public function init_form_fields()
        {
        }
    }
    class WFOCU_Core
    {
        /**
         * @var WFOCU_Core
         */
        public static $_instance = \null;
        /**
         * @var WFOCU_Admin
         */
        public $admin;
        /**
         * @var WFOCU_Public
         */
        public $public;
        /**
         * @var WFOCU_Gateways
         */
        public $gateways;
        /**
         * @var WFOCU_Orders
         */
        public $orders;
        /**
         * @var WFOCU_Session_Handler
         */
        public $session;
        /**
         * @var WFOCU_Data
         */
        public $data;
        /**
         * @var WFOCU_Offers
         */
        public $offers;
        /**
         * @var WFOCU_Funnels
         */
        public $funnels;
        /**
         * @var WFOCU_Template_loader
         */
        public $template_loader;
        /**
         * @var WFOCU_Customizer
         */
        public $customizer;
        /**
         * @var WFOCU_Shipping
         */
        public $shipping;
        /**
         * @var WFOCU_Offer_Process
         */
        public $process_offer;
        /**
         * @var WFOCU_Mails
         */
        public $mails;
        /**
         * @var WFOCU_DB_Track
         */
        public $track;
        /**
         * @var WFOCU_Rules
         */
        public $rules;
        /**
         * @var WFOCU_Shortcodes
         */
        public $shortcodes;
        /**
         * @var WFOCU_Assets_Loader
         */
        public $assets;
        /**
         * @var WFOCU_Logger
         */
        public $log;
        /**
         * @var WFOCU_WooFunnels_Support
         */
        public $support;
        /**
         * @var WFOCU_DB_Session
         */
        public $session_db;
        /**
         * @var WFOCU_Templates_Retriever
         */
        public $template_retriever;
        /**
         * @var WFOCU_Template_Importer
         */
        public $importer;
        /**
         * @var WFOCU_Importer
         */
        public $import;
        /**
         * @var WFOCU_WC_API_Handler
         */
        public $wc_api;
        /**
         * @var WFOCU_Exporter
         */
        public $export;
        public function __construct()
        {
        }
        /**
         * Defining constants
         */
        public function define_plugin_properties()
        {
        }
        public function load_wp_dependent_properties()
        {
        }
        public function load_dependencies_support()
        {
        }
        public function do_dependency_check()
        {
        }
        public function load_commons()
        {
        }
        public function load_hooks()
        {
        }
        public function load_classes()
        {
        }
        public function load_public()
        {
        }
        public function load_admin()
        {
        }
        public static function get_instance()
        {
        }
        public function load_woofunnels_core_classes()
        {
        }
        public function localization()
        {
        }
        /**
         * Added redirection on plugin activation
         *
         * @param $plugin
         */
        public function redirect_on_activation($plugin)
        {
        }
        public function register_classes()
        {
        }
        public static function get_registered_class()
        {
        }
        public static function register($short_name, $class, $overrides = \null)
        {
        }
        public function wc_version_check_notice()
        {
        }
        public function wc_not_installed_notice()
        {
        }
        public function php_version_dependency_fail()
        {
        }
        public function maybe_flush_permalink($plugin)
        {
        }
    }
    /**
     * Helper class to render input field types.
     */
    class wfocu_Input_Builder
    {
        /**
         * Gets the input object and renders the field.
         *
         * @param array $field_args Arguments to render the field with.
         * @param mixed $value The value, if any, to apply to the field.
         */
        public static function create_input_field($field_args, $value = \null)
        {
        }
        /**
         * Helper function to get field defaults.
         *
         * @param array $field_args Arguments to merge with the defaults.
         *
         * @return array The merged arguments
         */
        public static function get_input_field_defaults($field_args)
        {
        }
    }
    /**
     * Base class for a Conditional_Content rule.
     */
    class WFOCU_Rule_Base
    {
        public $supports = array();
        public function __construct($name)
        {
        }
        /**
         * Get's the list of possibile values for the rule.
         *
         * Override to return the correct list of possibile values for your rule object.
         * @return array
         */
        public function get_possible_rule_values()
        {
        }
        /**
         * Gets the list of possibile rule operators available for this rule object.
         *
         * Override to return your own list of operators.
         *
         * @return array
         */
        public function get_possible_rule_operators()
        {
        }
        /*
         * Gets the input object type slug for this rule object. 
         * 
         * @return string
         */
        public function get_condition_input_type()
        {
        }
        /**
         * Checks if the conditions defined for this rule object have been met.
         *
         * @return boolean
         */
        public function is_match($rule_data, $env = 'cart')
        {
        }
        /**
         * Helper function to wrap the return value from is_match and apply filters or other modifications in sub classes.
         *
         * @param boolean $result The result that should be returned.
         * @param array $rule_data The array config object for the current rule.
         *
         * @return boolean
         */
        public function return_is_match($result, $rule_data)
        {
        }
        public function supports($env)
        {
        }
    }
    class WFOCU_Rule_Users_Role extends \WFOCU_Rule_Base
    {
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_possible_rule_values()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
        public function sort_attribute_taxonomies($taxa, $taxb)
        {
        }
    }
    class WFOCU_Rule_Users_User extends \WFOCU_Rule_Base
    {
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_possible_rule_values()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    class WFOCU_Rule_Funnel_Skip extends \WFOCU_Rule_Base
    {
        public $supports = array('order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_possible_rule_values()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'order')
        {
        }
    }
    class WFOCU_Rule_Is_First_Order extends \WFOCU_Rule_Base
    {
        public $supports = array('order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_possible_rule_values()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    class WFOCU_Rule_Customer_User extends \WFOCU_Rule_Base
    {
        public $supports = array('order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_possible_rule_values()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    class WFOCU_Rule_Customer_Role extends \WFOCU_Rule_Base
    {
        public $supports = array('order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_possible_rule_values()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    class WFOCU_Rule_Is_Guest extends \WFOCU_Rule_Base
    {
        public $supports = array('order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_possible_rule_values()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    class WFOCU_Rule_Day extends \WFOCU_Rule_Base
    {
        public $supports = array('cart', 'order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_possible_rule_values()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    class WFOCU_Rule_Date extends \WFOCU_Rule_Base
    {
        public $supports = array('cart', 'order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    class WFOCU_Rule_Time extends \WFOCU_Rule_Base
    {
        public $supports = array('cart', 'order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    class WFOCU_Rule_Order_Total extends \WFOCU_Rule_Base
    {
        public $supports = array('cart', 'order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    class WFOCU_Rule_Order_Item_Count extends \WFOCU_Rule_Base
    {
        public $supports = array('cart', 'order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    class WFOCU_Rule_Order_Item extends \WFOCU_Rule_Base
    {
        public $supports = array('cart', 'order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    class WFOCU_Rule_Order_Category extends \WFOCU_Rule_Base
    {
        public $supports = array('cart', 'order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_possible_rule_values()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    class WFOCU_Rule_Order_Term extends \WFOCU_Rule_Base
    {
        public $supports = array('cart', 'order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_possible_rule_values()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    class WFOCU_Rule_Order_Item_Type extends \WFOCU_Rule_Base
    {
        public $supports = array('cart', 'order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_possible_rule_values()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    class WFOCU_Rule_Order_Coupons extends \WFOCU_Rule_Base
    {
        public $supports = array('cart', 'order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_possible_rule_values()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    class WFOCU_Rule_Order_Coupon_Exist extends \WFOCU_Rule_Base
    {
        public $supports = array('cart', 'order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_possible_rule_values()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    class WFOCU_Rule_Order_Coupon_Text_Match extends \WFOCU_Rule_Base
    {
        public $supports = array('cart', 'order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_possible_rule_values()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    class WFOCU_Rule_Order_Custom_Meta extends \WFOCU_Rule_Base
    {
        public $supports = array('order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_possible_rule_values()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    class WFOCU_Rule_Order_Payment_Gateway extends \WFOCU_Rule_Base
    {
        public $supports = array('order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_possible_rule_values()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    class WFOCU_Rule_Order_Shipping_Country extends \WFOCU_Rule_Base
    {
        public $supports = array('cart', 'order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_possible_rule_values()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    class WFOCU_Rule_Order_Shipping_Method extends \WFOCU_Rule_Base
    {
        public $supports = array('cart', 'order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_possible_rule_values()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    class WFOCU_Rule_Order_Billing_Country extends \WFOCU_Rule_Base
    {
        public $supports = array('cart', 'order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_possible_rule_values()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    /** WOOCOMMERCE SUBSCRIPTION PLUGIN RULE ENDS */
    class WFOCU_Rule_Order_Billing_State extends \WFOCU_Rule_Base
    {
        public $supports = array('cart', 'order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_possible_rule_values()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    /**
     * Created by PhpStorm.
     * User: sandeep
     * Date: 18/9/18
     * Time: 10:43 AM
     */
    class WFOCU_Rule_WFACP_Page extends \WFOCU_Rule_Base
    {
        public $supports = array('cart');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_possible_rule_values()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    class WFOCU_Rule_General_Always extends \WFOCU_Rule_Base
    {
        public $supports = array('cart', 'order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_possible_rule_values()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    class WFOCU_Rule_General_Always_2 extends \WFOCU_Rule_Base
    {
        public $supports = array('cart', 'order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_possible_rule_values()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    class WFOCU_Rule_Customer_Purchased_Products extends \WFOCU_Rule_Base
    {
        public $supports = array('cart', 'order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    class WFOCU_Rule_Customer_Purchased_Cat extends \WFOCU_Rule_Base
    {
        public $supports = array('cart', 'order');
        public function __construct()
        {
        }
        public function get_possible_rule_operators()
        {
        }
        public function get_condition_input_type()
        {
        }
        public function get_possible_rule_values()
        {
        }
        public function is_match($rule_data, $env = 'cart')
        {
        }
    }
    class wfocu_Input_Html_Always
    {
        public function __construct()
        {
        }
        public function render($field, $value = \null)
        {
        }
    }
    class wfocu_Input_Html_Rule_Is_Downgrade
    {
        public function __construct()
        {
        }
        public function render($field, $value = \null)
        {
        }
    }
    class wfocu_Input_User_Select
    {
        public function __construct()
        {
        }
        public function render($field, $value = \null)
        {
        }
    }
    class wfocu_Input_Product_Select
    {
        public function __construct()
        {
        }
        public function render($field, $value = \null)
        {
        }
    }
    class wfocu_Input_Html_Rule_Is_Renewal
    {
        public function __construct()
        {
        }
        public function render($field, $value = \null)
        {
        }
    }
    class wfocu_Input_Coupon_Select
    {
        public function __construct()
        {
        }
        public function render($field, $value = \null)
        {
        }
    }
    class wfocu_Input_Html_Rule_Is_First_Order
    {
        public function __construct()
        {
        }
        public function render($field, $value = \null)
        {
        }
    }
    class wfocu_Input_Text
    {
        public function __construct()
        {
        }
        public function render($field, $value = \null)
        {
        }
    }
    class wfocu_Input_Time extends \wfocu_Input_Text
    {
        public function __construct()
        {
        }
        public function render($field, $value = \null)
        {
        }
    }
    class wfocu_Input_Cart_Product_Select
    {
        public function __construct()
        {
        }
        public function render($field, $value = \null)
        {
        }
    }
    class wfocu_Input_Funnel_Products
    {
        public function __construct()
        {
        }
        public function render($field, $value = \null)
        {
        }
    }
    class wfocu_Input_Page_Select extends \wfocu_Input_Text
    {
        public function __construct()
        {
        }
        public function render($field, $value = \null)
        {
        }
    }
    class wfocu_Input_Select
    {
        public function __construct()
        {
        }
        public function render($field, $value = \null)
        {
        }
    }
    class wfocu_Input_Order_State_Select
    {
        public function __construct()
        {
        }
        public function render($field, $value = \null)
        {
        }
    }
    class wfocu_Input_Funnel_OneTime
    {
        public function __construct()
        {
        }
        public function render($field, $value = \null)
        {
        }
    }
    class wfocu_Input_Html_Rule_Is_Upgrade
    {
        public function __construct()
        {
        }
        public function render($field, $value = \null)
        {
        }
    }
    class wfocu_Input_Custom_Meta
    {
        public function __construct()
        {
        }
        public function render($field, $value = \null)
        {
        }
    }
    class wfocu_Input_Coupon_Text_Match
    {
        public function __construct()
        {
        }
        public function render($field, $value = \null)
        {
        }
    }
    class wfocu_Input_Html_Rule_Is_Guest
    {
        public function __construct()
        {
        }
        public function render($field, $value = \null)
        {
        }
    }
    class wfocu_Input_Coupon_Exist
    {
        public function __construct()
        {
        }
        public function render($field, $value = \null)
        {
        }
    }
    class wfocu_Input_Date extends \wfocu_Input_Text
    {
        public function __construct()
        {
        }
        public function render($field, $value = \null)
        {
        }
    }
    class wfocu_Input_Geo_Postal_Code_Entry
    {
        public function __construct()
        {
        }
        public function render($field, $value = \null)
        {
        }
    }
    class wfocu_Input_Chosen_Select
    {
        public function __construct()
        {
        }
        public function render($field, $value = \null)
        {
        }
    }
    class wfocu_Input_Cart_Category_Select
    {
        public function __construct()
        {
        }
        public function render($field, $value = \null)
        {
        }
    }
    class wfocu_Input_Customer_Rule_Unavailable
    {
        public function __construct()
        {
        }
        public function render($field, $value = \null)
        {
        }
    }
    class wfocu_Input_Term_Select extends \wfocu_Input_Text
    {
        public function __construct()
        {
        }
        public function render($field, $value = \null)
        {
        }
    }
    /**
     * Commands for the Custom Action Scheduler
     */
    class BWF_AS_CLI extends \WP_CLI_Command
    {
        /**
         * Run the Autonami tasks
         *
         * ## OPTIONS
         *
         * [--size=<size>]
         * : The maximum number of tasks to run. Defaults to 50.
         *
         * @param array $args Positional arguments.
         * @param array $assoc_args Keyed arguments.
         *
         * @throws ExitException When an error occurs.
         */
        public function run($args, $assoc_args)
        {
        }
        protected function print_custom_error($type)
        {
        }
        /**
         * Print WP CLI message about how many tasks are about to be processed.
         *
         * @param int $total
         */
        protected function print_total_tasks($total)
        {
        }
        /**
         * Convert an exception into a WP CLI error.
         *
         * @param Exception $e The error object.
         *
         * @throws ExitException
         */
        protected function print_error(\Exception $e)
        {
        }
        /**
         * Print a success message with the number of completed tasks.
         *
         * @param int $tasks_completed
         */
        protected function print_success($tasks_completed)
        {
        }
    }
    class BWF_AS_Action_Store extends \ActionScheduler_Store
    {
        public $bwf_action_data = [];
        public $action_table = '';
        public $claim_table = '';
        public $p_key = '';
        public function init()
        {
        }
        public function save_action(\ActionScheduler_Action $action, \DateTime $date = \null)
        {
        }
        public function fetch_action($action_id)
        {
        }
        protected function get_null_action()
        {
        }
        public function log($msg)
        {
        }
        protected function get_action_data($action_id)
        {
        }
        /**
         * Helper method to schedule recurring action before execution itself.
         * This make sure recurring action should be scheduled.
         *
         * @param $action_id
         */
        protected function schedule_recurring_action($action_id)
        {
        }
        /**
         * Helper method that checks if an action is recurring.
         *
         * @param $data
         *
         * @return bool
         */
        protected function action_is_recurring($data)
        {
        }
        /**
         * Initiate action class object with needful data
         *
         * @param $data
         *
         * @return ActionScheduler_Action|ActionScheduler_FinishedAction
         */
        protected function make_action_from_db_record($data)
        {
        }
        /**
         * Helper method: If pending action then bool true otherwise false
         *
         * @param $status
         *
         * @return bool
         */
        protected function verify_status($status)
        {
        }
        /**
         * @param string $hook
         * @param array $params
         *
         * @return string
         */
        public function find_action($hook, $params = [])
        {
        }
        /**
         * @param array $query
         * @param string $query_type
         *
         * @return array|string ids array or count
         */
        public function query_actions($query = [], $query_type = 'select')
        {
        }
        /**
         * Returns the SQL statement to query (or count) actions.
         *
         * @param array $query Filtering options
         * @param string $select_or_count Whether the SQL should select and return the IDs or just the row count
         *
         * @return string SQL statement. The returned SQL is already properly escaped.
         * 'status'           => ActionScheduler_Store::STATUS_PENDING,
         * 'modified'         => $cutoff,
         * 'modified_compare' => '<=',
         * 'claimed'          => true,
         * 'per_page'         => $this->get_batch_size(),
         */
        protected function get_query_actions_sql(array $query, $select_or_count = 'select')
        {
        }
        protected function get_as_defined_status_val($status)
        {
        }
        /**
         * Get a count of all actions in the store, grouped by status; used in native actions listing. Not used in our scope.
         */
        public function action_counts()
        {
        }
        /**
         * @param string $action_id
         *
         * @return void
         * @throws InvalidArgumentException
         */
        public function cancel_action($action_id)
        {
        }
        /**
         * @param string $action_id
         */
        public function delete_action($action_id)
        {
        }
        /**
         * don't know where using
         *
         * @param string $action_id
         *
         * @return DateTime The local date the action is scheduled to run, or the date that it ran.
         * @throws InvalidArgumentException
         */
        public function get_date($action_id)
        {
        }
        /**
         * @param string $action_id
         *
         * @return DateTime The GMT date the action is scheduled to run, or the date that it ran.
         * @throws InvalidArgumentException
         */
        protected function get_date_gmt($action_id)
        {
        }
        /**
         * @param int $max_actions
         * @param DateTime $before_date Jobs must be schedule before this date. Defaults to now.
         *
         * @return ActionScheduler_ActionClaim
         */
        public function stake_claim($max_actions = 10, \DateTime $before_date = \null, $hooks = array(), $group = '')
        {
        }
        /**
         * Generate claim id of current date time
         *
         * @return int
         */
        protected function generate_claim_id()
        {
        }
        /**
         * Claim actions which are executable based on given inputs
         *
         * @param string $claim_id
         * @param int $limit
         * @param DateTime $before_date Should use UTC timezone.
         *
         * @return int The number of actions that were claimed
         * @throws RuntimeException
         *
         */
        protected function claim_actions($claim_id, $limit, \DateTime $before_date = \null, $hooks = array(), $group = '')
        {
        }
        /**
         * Get Actions against a claim_id
         *
         * @param string $claim_id
         *
         * @return $array
         */
        public function find_actions_by_claim_id($claim_id)
        {
        }
        /**
         * Return unique claim id counts
         *
         * @return int
         */
        public function get_claim_count()
        {
        }
        /**
         * Return an action's claim ID, as stored in the claim_id column
         *
         * @param string $action_id
         *
         * @return mixed
         */
        public function get_claim_id($action_id)
        {
        }
        /**
         * Releasing the claim
         *
         * @param ActionScheduler_ActionClaim $claim
         */
        public function release_claim(\ActionScheduler_ActionClaim $claim)
        {
        }
        /**
         * Unclaim pending actions that have not been run within a given time limit.
         * Default 300
         * Called inside reset_timeouts method
         *
         * @param string $action_id
         *
         * @return void
         */
        public function unclaim_action($action_id)
        {
        }
        /**
         * @param string $action_id
         * @param null $e
         */
        public function mark_failure($action_id, $e = \null)
        {
        }
        /**
         * Helper method
         * Log failure action data in bwf logs
         *
         * @param $action_id
         */
        protected function log_failure_data($action_id)
        {
        }
        /**
         * @param string $action_id
         *
         * @return void
         */
        public function log_execution($action_id)
        {
        }
        /**
         * @param string $action_id
         */
        public function mark_complete($action_id)
        {
        }
        public function get_status($action_id)
        {
        }
        public function overriding_bwf_logging($value, $filename)
        {
        }
        /**
         * Cancel pending actions by hook.
         *
         * @param string $hook
         *
         * @since 3.0.0 Action Scheduler and 1.9.15 Core
         */
        public function cancel_actions_by_hook($hook)
        {
        }
        /**
         * Cancel pending actions by group.
         *
         * @param string $group
         *
         * @since 3.0.0 Action Scheduler and 1.9.15 Core
         */
        public function cancel_actions_by_group($group)
        {
        }
    }
    /**
     * Not saving any log as no do_action left in action data store
     *
     * Class BWFAN_AS_CT_Log_Store
     */
    class BWF_AS_Log_Store extends \ActionScheduler_Logger
    {
        public function log($action_id, $message, \DateTime $date = \null)
        {
        }
        public function get_entry($entry_id)
        {
        }
        public function get_logs($action_id)
        {
        }
        public function init()
        {
        }
        public function clear_deleted_action_logs($action_id)
        {
        }
    }
    class BWF_AS
    {
        public function __construct()
        {
        }
        public static function instance()
        {
        }
        /**
         * Change the data store
         */
        public function change_data_store()
        {
        }
        /**
         * Override the action store with our own
         *
         * @param string $class
         *
         * @return string
         */
        public function set_store_class($class)
        {
        }
        /**
         * Override the logger with our own
         *
         * @param string $class
         *
         * @return string
         */
        public function set_logger_class($class)
        {
        }
    }
    class BWF_AS_Actions_Crud
    {
        public static $primary_key = 'id';
        /**
         * Return single action data
         *
         * @param $action_id
         * @param string $return_vars
         *
         * @return stdClass
         */
        public static function get_single_action($action_id, $return_vars = '*')
        {
        }
        public static function _table()
        {
        }
        public static function is_json($string)
        {
        }
        public static function get_executable_actions($status, $group)
        {
        }
        /**
         * Find actions based on column inputs
         *
         * @param $args
         *
         * @return array|bool
         */
        public static function find_actions($args)
        {
        }
        public static function get_action_status($action_id)
        {
        }
        public static function insert($data)
        {
        }
        public static function delete($value)
        {
        }
        public static function delete_actions($action_ids)
        {
        }
        public static function query($query)
        {
        }
        public static function insert_id()
        {
        }
        public static function get_results($query)
        {
        }
    }
    /**
     * @todo things to do
     * AS data store cli
     */
    final class WooFunnels_AS_DS
    {
        public static $unique = '';
        public $dir = __DIR__;
        /**
         * WooFunnels_Actions constructor.
         */
        public function __construct()
        {
        }
        /**
         * @return WooFunnels_AS_DS instance
         */
        public static function get_instance()
        {
        }
        /**
         * Load files
         */
        public function load_files()
        {
        }
        /**
         * Load CLI file
         */
        public function load_cli()
        {
        }
        /**
         * Load Hooks after Action Scheduler is loaded
         */
        public function bwf_after_action_scheduler_load()
        {
        }
        /**
         * Create DB tables
         * Actions and Action_Claim
         */
        public function create_db_tables()
        {
        }
        public function maybe_set_bwf_ct_worker()
        {
        }
        public function add_cron_schedule($schedules)
        {
        }
        /**
         * 1 min worker callback
         */
        public function run_as_ct_worker()
        {
        }
        /**
         * Register WooFunnels Core WP endpoints
         */
        public function register_endpoints()
        {
        }
        /**
         * action_scheduler_pre_init action hook
         */
        public function as_pre_init_cb()
        {
        }
        /**
         * action_scheduler_pre_init action hook for autonami cli
         */
        public function as_pre_init_cli_cb()
        {
        }
        /**
         * Callback function for running WooFunnels actions
         *
         * @param WP_REST_Request $request
         */
        public function rest_worker_callback(\WP_REST_Request $request)
        {
        }
        /**
         * Helper method to run action scheduler
         */
        public function worker_as_run()
        {
        }
        public function modify_as_filters()
        {
        }
        public function fallback_execution_on_heartbeat()
        {
        }
        public function heartbeat_callback()
        {
        }
    }
    class WooFunnels_Dashboard
    {
        public static $currentPage;
        public static $parent;
        public static $selected = '';
        public static $pagefullurl = '';
        public static $is_dashboard_page = \false;
        public static $loader_url = '';
        public static $is_core_menu = \false;
        public static $classes = [];
        protected static $expectedurl;
        protected static $expectedslug;
        /**
         * Function Loads the html and required javascript to render on dashboard page
         */
        public static function load_page()
        {
        }
        /**
         * Register dashboard function just initializes the execution by firing some hooks that helps getting and rendering data
         */
        public static function register_dashboard()
        {
        }
        /**
         * Hooked over 'admin_enqueue_scripts' under the register function, cannot run on every admin page
         * Enqueues `updates` handle script,  core script that is responsible for plugin updates
         */
        public static function woofunnels_dashboard_scripts()
        {
        }
        /**
         * Init function hooked on `admin_init`
         * Set the required variables and register some important hooks
         */
        public static function init()
        {
        }
        /**
         * Getting and parsing all our licensing products and checking if there update is available
         */
        public static function add_notice_unlicensed_product()
        {
        }
        public static function localization()
        {
        }
        /**
         * Message displayed if license not activated. <br/>
         *
         * @param array $plugin_data
         * @param object $r
         *
         * @return void
         */
        public static function need_license_message($plugin_data, $r)
        {
        }
        /**
         * Model function to fire over licensing page. <br/>
         * Hooked over 'woofunnels_tabs_modal_licenses'. <br/>
         * @return mixed false on failure and data on success
         */
        public static function woofunnels_licenses_data()
        {
        }
        /**
         * Model function to fire over licensing page. <br/>
         * Hooked over 'woofunnels_tabs_modal_licenses'. <br/>
         * @return mixed false on failure and data on success
         */
        public static function woofunnels_tools_data()
        {
        }
        /**
         * Model function to fire over support page. <br/>
         * Hooked over 'woofunnels_tabs_modal_support'. <br/>
         * @return mixed false on failure and data on success
         */
        public static function woofunnels_support_data($data)
        {
        }
        /**
         * Model function to fire over support page. <br/>
         * Hooked over 'woofunnels_tabs_modal_logs'. <br/>
         * @return mixed false on failure and data on success
         */
        public static function woofunnels_logs_data($data)
        {
        }
        public static function show_right_area()
        {
        }
        public static function add_logs_tabs($tabs)
        {
        }
        public static function autoloader($class_name)
        {
        }
        /**
         * Slug-ify the class name and remove underscores and convert it to filename
         * Helper function for the auto-loading
         *
         * @param $class_name
         *
         *
         * @return mixed|string
         * @see WooFunnels_Dashboard::autoloader();
         *
         */
        public static function slugify_classname($class_name)
        {
        }
        public static function load_core_classes()
        {
        }
        public static function apply_scroll_fix_css()
        {
        }
        public static function wfocu_add_template_indexing_tools()
        {
        }
        public static function index_templates()
        {
        }
        public static function get_template_api_url()
        {
        }
        public static function get_remote_templates()
        {
        }
        public static function get_all_templates($force = \false)
        {
        }
        public static function fetch_template_json()
        {
        }
    }
    /**
     * OptIn manager class is to handle all scenarios occurs for opting the user
     * @author: WooFunnels
     * @since 0.0.1
     * @package WooFunnels
     *
     */
    class WooFunnels_OptIn_Manager
    {
        public static $optIn_state;
        public static $should_show_optin = \true;
        /**
         * Initialization to execute several hooks
         */
        public static function init()
        {
        }
        /**
         * Set function to allow
         */
        public static function Allow_optin()
        {
        }
        /**
         * Collect some data and let the hook left for our other plugins to add some more info that can be tracked down
         * <br/>
         * @return array data to track
         */
        public static function collect_data()
        {
        }
        /**
         * Set function to block
         */
        public static function block_optin()
        {
        }
        public static function maybe_clear_optin()
        {
        }
        /**
         * Reset optin
         */
        public static function reset_optin()
        {
        }
        public static function update_optIn_referer($referer)
        {
        }
        /**
         * Checking the opt-in state and if we have scope for notification then push it
         */
        public static function maybe_push_optin_notice()
        {
        }
        /**
         * Get current optin status from database
         *
         * @return mixed|void
         */
        public static function get_optIn_state()
        {
        }
        /**
         * Callback function to run on schedule hook
         */
        public static function maybe_track_usage()
        {
        }
        /**
         * Initiate schedules in order to start tracking data regularly
         */
        public static function initiate_schedules()
        {
        }
        public static function woofunnelso_optin_call()
        {
        }
        /**
         * Callback function to run on schedule hook
         */
        public static function optin_track_usage()
        {
        }
        public static function maybe_default_optin()
        {
        }
        public static function register_weekly_schedule($schedules)
        {
        }
        public static function is_optin_allowed()
        {
        }
    }
    /**
     * Class WooFunnels_Updater_Licenses_Table
     * @package WooFunnels
     */
    class WooFunnels_Updater_Licenses_Table extends \WP_List_Table
    {
        public $per_page = 100;
        public $data;
        /**
         * Constructor.
         * @since  1.0.0
         */
        public function __construct($args = array())
        {
        }
        // End __construct()
        /**
         * Text to display if no items are present.
         * @return  void
         * @since  1.0.0
         */
        public function no_items()
        {
        }
        // End no_items(0)
        /**
         * The content of each column.
         *
         * @param array $item The current item in the list.
         * @param string $column_name The key of the current column.
         *
         * @return string              Output for the current column.
         * @since  1.0.0
         */
        public function column_default($item, $column_name)
        {
        }
        // End column_default()
        /**
         * Content for the "product_name" column.
         *
         * @param array $item The current item.
         *
         * @return string       The content of this column.
         * @since  1.0.0
         */
        public function column_plugin($item)
        {
        }
        // End get_sortable_columns()
        /**
         * Content for the "product_version" column.
         *
         * @param array $item The current item.
         *
         * @return string       The content of this column.
         * @since  1.0.0
         */
        public function column_product_version($item)
        {
        }
        // End get_columns()
        /**
         * Content for the "status" column.
         *
         * @param array $item The current item.
         *
         * @return string       The content of this column.
         * @since  1.0.0
         */
        public function column_product_status($item)
        {
        }
        public function is_license_expire($item)
        {
        }
        public function column_product_expiry($item)
        {
        }
        /**
         * Retrieve an array of possible bulk actions.
         * @return array
         * @since  1.0.0
         */
        public function get_bulk_actions()
        {
        }
        /**
         * Prepare an array of items to be listed.
         * @since  1.0.0
         */
        public function prepare_items()
        {
        }
        public function get_columns()
        {
        }
        // End get_bulk_actions()
        public function get_sortable_columns()
        {
        }
    }
    /**
     * WooFunnels_License Class
     */
    class WooFunnels_API
    {
        /////
        public static $woofunnels_api_url = 'https://off//account.buildwoofunnels.com/api';
        public static $is_ssl = \false;
        /**
         * Get all the plugins that can be pushed from the API
         * @return Mixed False on failure and array on success
         */
        public static function get_woofunnels_list()
        {
        }
        /**
         * Post tracking data to the Server
         *
         * @param $data
         *
         * @return array|void|WP_Error
         */
        public static function post_tracking_data($data)
        {
        }
        /**
         * @param $data
         *
         * @return array|bool|mixed|object|void|WP_Error|null
         */
        public static function post_support_request($data)
        {
        }
        /**
         * Filter function to modify args
         *
         * @param $args
         *
         * @return mixed|void
         */
        public static function get_api_args($args)
        {
        }
        /**
         * Filter function for request args
         *
         * @param $args
         *
         * @return mixed|void
         */
        public static function get_request_args($args)
        {
        }
        /**
         * All the data about the deactivation popups
         *
         * @param $deactivations
         * @param $licenses
         *
         * @return array|WP_Error
         */
        public static function post_deactivation_data($deactivations, $licenses)
        {
        }
        /**
         * Get for API url
         *
         * @param string $link
         *
         * @return string
         */
        public static function get_api_url($link)
        {
        }
        public static function get_woofunnels_status()
        {
        }
        /**
         * @param $data
         *
         * @return array|void|WP_Error
         */
        public static function post_optin_data($data)
        {
        }
    }
    /**
     * Basic process class that detect request and pass to respective class
     *
     * @author woofunnels
     * @package WooFunnels
     */
    class WooFunnels_Process
    {
        public $in_update_messages = array();
        /**
         * Initiate hooks
         */
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function parse_request_and_process()
        {
        }
        public function maybe_show_advanced_update_notification()
        {
        }
        public function register_in_update_plugin_message()
        {
        }
        /**
         * Show plugin changes on the plugins screen. Code adapted from W3 Total Cache.
         *
         * @param array $args Unused parameter.
         * @param stdClass $response Plugin update response.
         */
        public function in_plugin_update_message($args, $response)
        {
        }
        /**
         * Get the upgrade notice from WordPress.org.
         *
         * @param string $version WooCommerce new version.
         *
         * @return string
         */
        protected function get_upgrade_notice($version, $path, $current_version)
        {
        }
        public function maybe_add_license_check_schedule()
        {
        }
        public function fire_thankyou_ajax($order_id)
        {
        }
        public function handle_thankyou_ajax()
        {
        }
        /**
         * @hooked over 'admin_init'
         * Mark the customizer data to not autoload on WP load as its only needed on specific pages.
         */
        public function maybe_set_options_auto_loading_false()
        {
        }
        /**
         * @hooked over admin_head::-1
         * Handles menu order for woofunnels submenu as it gets registered by the different plugin on different priorities
         */
        public function maybe_correct_submenu_order()
        {
        }
        public function is_our_submenu($plugin_page, $get_all_submenu)
        {
        }
        public function get_parent_position($menus)
        {
        }
        public function get_current_order($get_all_submenu)
        {
        }
        public function get_top_slug($submenu)
        {
        }
        public function correct_sub_menu_order()
        {
        }
    }
    class WooFunnels_Transient
    {
        protected static $instance;
        /**
         * WooFunnels_Transient constructor.
         */
        public function __construct()
        {
        }
        /**
         * Creates an instance of the class
         * @return WooFunnels_Transient
         */
        public static function get_instance()
        {
        }
        /**
         * Set the transient contents by key and group within page scope
         *
         * @param $key
         * @param $value
         * @param int $expiration | default 1 hour
         * @param string $plugin_short_name
         */
        public function set_transient($key, $value, $expiration = 3600, $plugin_short_name = 'bwf')
        {
        }
        /**
         * Get the transient contents by the transient key or group.
         *
         * @param $key
         * @param string $plugin_short_name
         *
         * @return bool|mixed
         */
        public function get_transient($key, $plugin_short_name = 'bwf')
        {
        }
        public function get_value($transient_key, $data, $db_call = \false)
        {
        }
        /**
         * Delete the transient by key
         *
         * @param $key
         * @param string $plugin_short_name
         */
        public function delete_transient($key, $plugin_short_name = 'bwf')
        {
        }
        /**
         * Delete all the transients
         *
         * @param string $plugin_short_name
         */
        public function delete_all_transients($plugin_short_name = '')
        {
        }
        /**
         * Delete all woofunnels plugins transients
         */
        public function delete_force_transients()
        {
        }
        /**
         * Can modify the file writing via filter hook
         *
         * @return bool
         */
        protected function is_file_saving_enabled()
        {
        }
    }
    class WooFunnels_License_check
    {
        public function __construct($hash_key = '', $data = array())
        {
        }
        public function set_hash($hash)
        {
        }
        public function setup_data($data)
        {
        }
        public function get_domain()
        {
        }
        public function pass_instance()
        {
        }
        public function get_hash()
        {
        }
        public static function get_plugins()
        {
        }
        /**
         * Find activated plugin license data using Encode basename of plugin
         *
         * @param $basename
         *
         * @return [] |null
         */
        public static function find_licence_data_using_basename($basename)
        {
        }
        public function start_updater()
        {
        }
        public function get_data()
        {
        }
        /**
         * preform here license check for all installed plugin
         */
        public function woofunnels_license_check()
        {
        }
        public function license_status()
        {
        }
        public function activate_license()
        {
        }
        public function http()
        {
        }
        public static function update_plugins($data)
        {
        }
        public function deactivate_license()
        {
        }
        public function handle_license_check_response($output)
        {
        }
        public function update_data($output_data_extra)
        {
        }
        public function check_plugin_info()
        {
        }
        public function check_update($_transient_data)
        {
        }
        public function get_cached_version_info($cache_key = '')
        {
        }
        public function check_update_info()
        {
        }
        public function set_version_info_cache($value = '', $cache_key = '')
        {
        }
        /**
         * Updates information on the "View version x.x details" page with custom data.
         *
         *
         * @param mixed $_data
         * @param string $_action
         * @param object $_args
         *
         * @return object $_data
         */
        public function plugins_api_filter($_data, $_action = '', $_args = \null)
        {
        }
        /**
         * Disable SSL verification in order to prevent download update failures
         *
         * @param array $args
         * @param string $url
         *
         * @return $array
         */
        public function http_request_args($args, $url)
        {
        }
    }
    class BWF_Admin_General_Settings
    {
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function maybe_flush_rewrite_rules()
        {
        }
        public function __callback()
        {
        }
        public function default_general_settings()
        {
        }
        public function get_option($key = 'all')
        {
        }
        public function setup_options()
        {
        }
        public function maybe_add_js($plugin_url = '', $plugin_ver = '')
        {
        }
        public function update_general_settings()
        {
        }
        public function get_settings_link()
        {
        }
        public function hide_from_menu()
        {
        }
        /**
         * Filter options before passing it to the javascript
         *
         * @param $config array configuration array
         *
         * @return array
         */
        public function filter_admin_options($config)
        {
        }
        public function maybe_change_title($title)
        {
        }
    }
    class WooFunnels_File_Api extends \WP_Filesystem_Direct
    {
        public function __construct($component)
        {
        }
        public function set_component($component)
        {
        }
        public function get_component_dir()
        {
        }
        public function touch($file, $time = 0, $atime = 0)
        {
        }
        public function file_path($file)
        {
        }
        public function folder_path($folder_name)
        {
        }
        public function is_readable($file)
        {
        }
        public function is_writable($file)
        {
        }
        public function put_contents($file, $contents, $mode = \false)
        {
        }
        public function delete_file($file, $recursive = \false, $type = 'f')
        {
        }
        public function delete_all($folder_name, $recursive = \false)
        {
        }
        /**
         * Gets details for files in a directory or a specific file.
         *
         * @since 2.5.0
         *
         * @param string $path           Path to directory or file.
         * @param bool   $include_hidden Optional. Whether to include details of hidden ("." prefixed) files.
         *                               Default true.
         * @param bool   $recursive      Optional. Whether to recursively include file details in nested directories.
         *                               Default false.
         * @return array|false {
         *     Array of files. False if unable to list directory contents.
         *
         *     @type string $name        Name of the file or directory.
         *     @type string $perms       *nix representation of permissions.
         *     @type int    $permsn      Octal representation of permissions.
         *     @type string $owner       Owner name or ID.
         *     @type int    $size        Size of file in bytes.
         *     @type int    $lastmodunix Last modified unix timestamp.
         *     @type mixed  $lastmod     Last modified month (3 letter) and day (without leading 0).
         *     @type int    $time        Last modified time.
         *     @type string $type        Type of resource. 'f' for file, 'd' for directory.
         *     @type mixed  $files       If a directory and $recursive is true, contains another array of files.
         * }
         */
        public function dirlist($path, $include_hidden = \true, $recursive = \false)
        {
        }
        public function delete_folder($folder_path, $recursive = \false)
        {
        }
        public function exists($file)
        {
        }
        public function get_contents($file)
        {
        }
        public function makedirs()
        {
        }
    }
    /**
     * Contains the logic for deactivation popups
     * @since 1.0.0
     * @author woofunnels
     * @package WooFunnels
     */
    class WooFunnels_Deactivate
    {
        public static $deactivation_str;
        /**
         * Initialization of hooks where we prepare the functionality to ask use for survey
         */
        public static function init()
        {
        }
        /**
         * Localizes all the string used
         */
        public static function load_all_str()
        {
        }
        /**
         * Checking current page and pushing html, js and css for this task
         * @global string $pagenow current admin page
         * @global array $VARS global vars to pass to view file
         */
        public static function maybe_load_deactivate_options()
        {
        }
        /**
         * deactivation reasons in array format
         * @return array reasons array
         * @since 1.0.0
         */
        public static function deactivate_options()
        {
        }
        /**
         * get exact str against the slug
         *
         * @param $slug
         *
         * @return mixed
         */
        public static function load_str($slug)
        {
        }
        /**
         * Called after the user has submitted his reason for deactivating the plugin.
         *
         * @since  1.1.2
         */
        public static function _submit_uninstall_reason_action()
        {
        }
    }
    /**
     * Basic class that do operations and get data from wp core
     * @since 1.0.0
     * @package WooFunnels
     * @author woofunnels
     */
    class WooFunnels_Addons
    {
        public static $installed_addons = array();
        public static $update_available = array();
        public static function init()
        {
        }
        /**
         * Adding WooFunnels Header to tell WordPress to read one extra params while reading plugin's header info. <br/>
         * Hooked over `extra_plugin_headers`
         *
         * @param array $headers already registered arrays
         *
         * @return type
         * @since 1.0.0
         *
         */
        public static function extra_woocommerce_headers($headers)
        {
        }
        /**
         * Getting all installed plugin that has woofunnels header within
         * @return array Addons
         */
        public static function get_installed_plugins()
        {
        }
        /**
         * Play it safe and require WP's plugin.php before calling the get_plugins() function.
         *
         * @return array An array of installed plugins.
         */
        public static function get_plugins($clear_cache = \false)
        {
        }
        /**
         * Checking Plugin header and Trying to find out the one with the header `WooFunnels`
         *
         * @param Array $plugins array of available plugins
         *
         * @return mixed
         */
        public static function plugins_have_woofunnels_plugin_header($plugins)
        {
        }
    }
    /**
     * @author woofunnels
     * @package WooFunnels
     */
    class WooFunnels_Support
    {
        protected static $instance;
        public $validation = \true;
        public $is_submitted;
        /**
         *
         * WooFunnels_Support constructor.
         */
        public function __construct()
        {
        }
        /**
         * Creates and instance of the class
         * @return WooFunnels_Support
         */
        public static function get_instance()
        {
        }
        /**
         * Processing support request
         *
         * @param $posted_data
         *
         * @uses WooFunnels_API used to fire api request to generate request
         * @uses WooFunnels_admin_notifications pushing success and failure notifications
         * @since 1.0.4
         */
        public function woofunnels_maybe_push_support_request($posted_data)
        {
        }
        public function fetch_tools_data()
        {
        }
        public function js_script()
        {
        }
    }
    class WooFunnels_Cache
    {
        protected static $instance;
        protected $woofunnels_core_cache = array();
        /**
         * WooFunnels_Cache constructor.
         */
        public function __construct()
        {
        }
        /**
         * Creates an instance of the class
         * @return WooFunnels_Cache
         */
        public static function get_instance()
        {
        }
        /**
         * Set the cache contents by key and group within page scope
         *
         * @param $key
         * @param $data
         * @param string $group
         */
        public function set_cache($key, $data, $group = '0')
        {
        }
        /**
         * Get the cache contents by the cache key or group.
         *
         * @param $key
         * @param string $group
         *
         * @return bool|mixed
         */
        public function get_cache($key, $group = '0')
        {
        }
        /**
         * Reset the cache by group or complete reset by force param
         *
         * @param string $group
         * @param bool $force
         */
        function reset_cache($group = '0', $force = \false)
        {
        }
    }
    /**
     * Plugin licenses data class / we do not handle license activation and deactivation at this class
     *
     * @author woofunnels
     * @package WooFunnels
     */
    class WooFunnels_Licenses
    {
        protected static $instance;
        public $plugins_list;
        public function __construct()
        {
        }
        /**
         * Pass to submission
         */
        public function maybe_submit()
        {
        }
        /**
         * Pass to deactivate hook
         */
        public function maybe_deactivate()
        {
        }
        /**
         * Creates and instance of the class
         * @return WooFunnels_licenses
         */
        public static function get_instance()
        {
        }
        public function maybe_show_invalid_license_error()
        {
        }
        public function get_data()
        {
        }
        public function get_plugins_list()
        {
        }
        public function is_expired($license_data)
        {
        }
        public function is_disabled($license_data)
        {
        }
        public function show_invalid_license_notice($plugins)
        {
        }
        public function get_secret_license_key($key)
        {
        }
    }
    class WooFunnels_License_Controller
    {
        /**
         * @var WooFunnels_License_check[]
         */
        public static $plugins = [];
        /**
         * @var WP_Http
         */
        public static $http;
        public static function register_plugin($hash, $object)
        {
        }
        public static function get_all_plugins()
        {
        }
        /**
         * Run a batch request to check license status of all the plugin
         * Then trigger handle license check response of child class so that they can process their data.
         */
        public static function license_check()
        {
        }
        public static function http()
        {
        }
        public static function get_software_endpoint($request = '')
        {
        }
        public static function get_plugin_update_check($hash)
        {
        }
        public static function license_update_check()
        {
        }
        public static function get_update_endpoint($request = '')
        {
        }
        public static function get_plugins()
        {
        }
        public static function update_plugins($data)
        {
        }
        public static function get_basename_by_key($hash)
        {
        }
    }
    /**
     * Class that is responsible for pushing , removing and sometimes handling the way notifications comes from the core.
     * @since 1.0.0
     * @package WooFunnels
     * @author woofunnels
     */
    class WooFunnels_Admin_Notifications
    {
        public static $all_notifications;
        /**
         * Add notification
         * <br/> This function will add the notification
         *
         * @param array $args configuration for notification
         *
         * <br/>
         *
         * @since 1.0.0
         */
        public static function add_notification($args)
        {
        }
        /**
         * Hide notices to show under dashboard
         * <br/> Its a handler function to any request come to hide the notice
         * <br/> save the slug in Database so that it wont come again
         */
        public static function hide_notices()
        {
        }
        /**
         * Remove a notice from being displayed
         *
         * @param string $name
         */
        public static function remove_notice($name)
        {
        }
        /**
         * Render all the notifications after filtering
         * @since 1.0.0
         */
        public static function render()
        {
        }
        /**
         * Filter function that will filter pushed notification against the removed ones
         */
        public static function filter_before_render()
        {
        }
        /**
         * Get all removed notifications from database
         * So that we can filter the push notification with the removed ones
         * @return array
         */
        public static function get_all_removed()
        {
        }
        /**
         * Check whether has notification pushed?
         * @since 1.0.0
         */
        public static function has_notification($slug)
        {
        }
    }
    abstract class WFCO_Model
    {
        static $primary_key = 'id';
        static $count = 20;
        static function get($value)
        {
        }
        static function insert($data)
        {
        }
        static function update($data, $where)
        {
        }
        static function delete($value)
        {
        }
        static function insert_id()
        {
        }
        static function now()
        {
        }
        static function time_to_date($time)
        {
        }
        static function date_to_time($date)
        {
        }
        static function num_rows()
        {
        }
        static function count_rows($dependency = \null)
        {
        }
        static function get_specific_rows($where_key, $where_value)
        {
        }
        static function get_results($query)
        {
        }
        static function delete_multiple($query)
        {
        }
        static function update_multiple($query)
        {
        }
    }
    class WooFunnels_Notifications
    {
        /** Notification listed array */
        protected $notifications_list = [];
        public function __construct()
        {
        }
        /**
         * Instance of class
         * @return WooFunnels_Notifications|null
         */
        public static function get_instance()
        {
        }
        /**
         * This will return all the notifications or the notifications based on the group id.
         *
         * @param string $notification_group Optional
         *
         * @return array
         */
        public function get_all_notifications($notification_group = '')
        {
        }
        /**
         * This is used to register a notification
         *
         * @param array $notification_value
         * @param string $group
         *
         * @return array
         */
        public function register_notification($notification_value = [], $group = '')
        {
        }
        /**
         * This is used to deregister a notification based on notification key and group
         *
         * @param string $notification_key
         * @param string $notification_group
         *
         * @return array
         */
        public function deregister_notification($notification_key = '', $notification_group = '')
        {
        }
        /**
         * Display internal CSS
         */
        public function notification_inline_style()
        {
        }
        /**
         * Display internal scripts
         */
        public function notification_inline_script()
        {
        }
        /**
         * Dismiss the notification
         */
        public function wf_dismiss_link()
        {
        }
        /**
         * This will return the notification based on notification key and the group id
         *
         * @param string $notification_key
         * @param string $notification_group
         *
         * @return array
         */
        public function get_notification($notification_key = '', $notification_group = '')
        {
        }
        /**
         * Return the updated dismiss notification keys
         *
         * @param $group
         *
         * @return array|mixed|void
         */
        public function get_dismiss_notification_key($group)
        {
        }
        /**
         * Display the notifications HTML
         *
         * @param $notifications_list
         */
        public function get_notification_html($notifications_list)
        {
        }
    }
    /*if ( ! class_exists( 'WFCO_Model' ) ) {
    	require_once __DIR__ . '/class-wfco-model.php';
    }*/
    class WFCO_Model_Report_views extends \WFCO_Model
    {
        static $primary_key = 'ID';
        public static function count_rows($dependency = \null)
        {
        }
        /**
         * @param string $date Date(Y-m-d)
         * @param string $object_id post_id or unique_id
         * @param int $type 1=abandoned,2=upstroke,3=aero,4=bump
         */
        public static function update_data($date = '', $object_id = '', $type = 1)
        {
        }
        public static function get_data($date = '', $object_id = '', $type = 1, $interval = \false)
        {
        }
    }
    class BWF_Logger
    {
        public $wc_logger = \null;
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function log($message, $file_name = '', $folder_prefix = 'buildwoofunnels')
        {
        }
        public function is_writable($plugin_short_name, $transient_key)
        {
        }
        public function get_log_options()
        {
        }
    }
    /**
     * Abstract WP_Async_Request class.
     */
    abstract class WP_Async_Request
    {
        /**
         * Prefix
         *
         * (default value: 'wp')
         *
         * @var string
         * @access protected
         */
        protected $prefix = 'wp';
        /**
         * Action
         *
         * (default value: 'async_request')
         *
         * @var string
         * @access protected
         */
        protected $action = 'async_request';
        /**
         * Identifier
         *
         * @var mixed
         * @access protected
         */
        protected $identifier;
        /**
         * Data
         *
         * (default value: array())
         *
         * @var array
         * @access protected
         */
        protected $data = array();
        /**
         * Initiate new async request
         */
        public function __construct()
        {
        }
        /**
         * Set data used during the request
         *
         * @param array $data Data.
         *
         * @return $this
         */
        public function data($data)
        {
        }
        /**
         * Dispatch the async request
         *
         * @return array|WP_Error
         */
        public function dispatch()
        {
        }
        /**
         * Get query args
         *
         * @return array
         */
        protected function get_query_args()
        {
        }
        /**
         * Get query URL
         *
         * @return string
         */
        protected function get_query_url()
        {
        }
        /**
         * Get post args
         *
         * @return array
         */
        protected function get_post_args()
        {
        }
        /**
         * Maybe handle
         *
         * Check for correct nonce and pass to handler.
         */
        public function maybe_handle()
        {
        }
        /**
         * Handle
         *
         * Override this method to perform any actions required
         * during the async request.
         */
        protected abstract function handle();
    }
    /**
     * Abstract WP_Background_Process class.
     */
    abstract class WP_Background_Process extends \WP_Async_Request
    {
        /**
         * Action
         *
         * (default value: 'background_process')
         *
         * @var string
         * @access protected
         */
        protected $action = 'background_process';
        /**
         * Start time of current process.
         *
         * (default value: 0)
         *
         * @var int
         * @access protected
         */
        protected $start_time = 0;
        /**
         * Cron_hook_identifier
         *
         * @var mixed
         * @access protected
         */
        protected $cron_hook_identifier;
        /**
         * Cron_interval_identifier
         *
         * @var mixed
         * @access protected
         */
        protected $cron_interval_identifier;
        /**
         * Initiate new background process
         */
        public function __construct()
        {
        }
        /**
         * Dispatch
         *
         * @access public
         * @return void
         */
        public function dispatch()
        {
        }
        /**
         * Push to queue
         *
         * @param mixed $data Data.
         *
         * @return $this
         */
        public function push_to_queue($data)
        {
        }
        /**
         * Save queue
         *
         * @return $this
         */
        public function save()
        {
        }
        /**
         * Update queue
         *
         * @param string $key Key.
         * @param array  $data Data.
         *
         * @return $this
         */
        public function update($key, $data)
        {
        }
        /**
         * Delete queue
         *
         * @param string $key Key.
         *
         * @return $this
         */
        public function delete($key)
        {
        }
        /**
         * Generate key
         *
         * Generates a unique key based on microtime. Queue items are
         * given a unique key so that they can be merged upon save.
         *
         * @param int $length Length.
         *
         * @return string
         */
        protected function generate_key($length = 64)
        {
        }
        /**
         * Maybe process queue
         *
         * Checks whether data exists within the queue and that
         * the process is not already running.
         */
        public function maybe_handle()
        {
        }
        /**
         * Is queue empty
         *
         * @return bool
         */
        protected function is_queue_empty()
        {
        }
        /**
         * Is process running
         *
         * Check whether the current process is already running
         * in a background process.
         */
        protected function is_process_running()
        {
        }
        /**
         * Lock process
         *
         * Lock the process so that multiple instances can't run simultaneously.
         * Override if applicable, but the duration should be greater than that
         * defined in the time_exceeded() method.
         */
        protected function lock_process()
        {
        }
        /**
         * Unlock process
         *
         * Unlock the process so that other instances can spawn.
         *
         * @return $this
         */
        protected function unlock_process()
        {
        }
        /**
         * Get batch
         *
         * @return stdClass Return the first batch from the queue
         */
        protected function get_batch()
        {
        }
        /**
         * Handle
         *
         * Pass each queue item to the task handler, while remaining
         * within server memory and time limit constraints.
         */
        protected function handle()
        {
        }
        /**
         * Memory exceeded
         *
         * Ensures the batch process never exceeds 90%
         * of the maximum WordPress memory.
         *
         * @return bool
         */
        protected function memory_exceeded()
        {
        }
        /**
         * Get memory limit
         *
         * @return int
         */
        protected function get_memory_limit()
        {
        }
        /**
         * Time exceeded.
         *
         * Ensures the batch never exceeds a sensible time limit.
         * A timeout limit of 30s is common on shared hosting.
         *
         * @return bool
         */
        protected function time_exceeded()
        {
        }
        /**
         * Complete.
         *
         * Override if applicable, but ensure that the below actions are
         * performed, or, call parent::complete().
         */
        protected function complete()
        {
        }
        /**
         * Schedule cron healthcheck
         *
         * @access public
         * @param mixed $schedules Schedules.
         * @return mixed
         */
        public function schedule_cron_healthcheck($schedules)
        {
        }
        /**
         * Handle cron healthcheck
         *
         * Restart the background process if not already running
         * and data exists in the queue.
         */
        public function handle_cron_healthcheck()
        {
        }
        /**
         * Schedule event
         */
        protected function schedule_event()
        {
        }
        /**
         * Clear scheduled event
         */
        protected function clear_scheduled_event()
        {
        }
        /**
         * Cancel Process
         *
         * Stop processing queue items, clear cronjob and delete batch.
         *
         */
        public function cancel_process()
        {
        }
        /**
         * Task
         *
         * Override this method to perform any actions required on each
         * queue item. Return the modified item for further processing
         * in the next pass through. Or, return false to remove the
         * item from the queue.
         *
         * @param mixed $item Queue item to iterate over.
         *
         * @return mixed
         */
        protected abstract function task($item);
    }
    /**
     * WooFunnels_Background_Updater Class.
     * Based on WC_Background_Updater concept
     */
    class WooFunnels_Contacts_Background_Updater extends \WP_Background_Process
    {
        const MAX_SAME_OFFSET_THRESHOLD = 5;
        /**
         * Initiate new background process.
         *
         * WooFunnels_Background_Updater constructor.
         */
        public function __construct()
        {
        }
        /**
         * Is queue empty.
         *
         * @return bool
         */
        protected function is_queue_empty()
        {
        }
        /**
         * Get batch.
         *
         * @return stdClass Return the first batch from the queue.
         */
        protected function get_batch()
        {
        }
        /**
         * See if the batch limit has been exceeded.
         *
         * @return bool
         */
        protected function batch_limit_exceeded()
        {
        }
        /**
         * Handle.
         *
         * Pass each queue item to the task handler, while remaining
         * within server memory and time limit constraints.
         */
        protected function handle()
        {
        }
        /**
         * Get memory limit.
         *
         * @return int
         */
        protected function get_memory_limit()
        {
        }
        /**
         * Schedule cron healthcheck.
         *
         * @param array $schedules Schedules.
         *
         * @return array
         */
        public function schedule_cron_healthcheck($schedules)
        {
        }
        /**
         * Delete all batches.
         *
         * @return WC_Background_Process
         */
        public function delete_all_batches()
        {
        }
        /**
         * Handle cron healthcheck
         *
         * Restart the background process if not already running
         * and data exists in the queue.
         */
        public function handle_cron_healthcheck()
        {
        }
        /**
         * Overriding parent protected function publically to use outside this class
         * @return bool
         */
        public function is_process_running()
        {
        }
        public function get_last_offsets()
        {
        }
        /**
         * Kill process.
         *
         * Stop processing queue items, clear cronjob and delete all batches.
         */
        public function kill_process()
        {
        }
        /**
         * Manage last 5 offsets
         */
        public function manage_last_offsets()
        {
        }
        public function update_last_offsets($offsets)
        {
        }
        /**
         * Is the updater running?
         *
         * @return boolean
         */
        public function is_updating()
        {
        }
        public function kill_process_safe()
        {
        }
        public function maybe_re_dispatch_background_process()
        {
        }
        /**
         * Schedule fallback event.
         */
        protected function schedule_event()
        {
        }
        /**
         * Memory exceeded
         *
         * Ensures the batch process never exceeds 90%
         * of the maximum WordPress memory.
         *
         * @return bool
         */
        protected function memory_exceeded()
        {
        }
        /**
         * Task
         *
         * Override this method to perform any actions required on each
         * queue item. Return the modified item for further processing
         * in the next pass through. Or, return false to remove the
         * item from the queue.
         *
         * @param string $callback Update callback function.
         *
         * @return string|bool
         * @SuppressWarnings(PHPMD.DevelopmentCodeFragment)
         * @SuppressWarnings(PHPMD.ElseExpression)
         */
        protected function task($callback)
        {
        }
        /**
         * Complete
         *
         * Override if applicable, but ensure that the below actions are
         * performed, or, call parent::complete().
         */
        protected function complete()
        {
        }
    }
    /**
     * Class WooFunnels_Customer
     */
    class WooFunnels_Customer
    {
        /**
         * public db_operations $db_operations
         */
        public $db_operations;
        /**
         * public id $id
         */
        public $id;
        /**
         * public cid $cid
         */
        public $cid;
        /**
         * public contact $contact
         */
        public $contact;
        /**
         * @var $db_customer
         */
        public $db_customer;
        /**
         * Get the customer details for the contact object passed if this contact id exits otherwise create a new customer
         * WooFunnels_Customer constructor.
         *
         * @param $cid
         *
         */
        public function __construct($contact)
        {
        }
        /**
         * Get customer by cid
         *
         * @param $wpid
         *
         * @return mixed
         */
        public function get_customer_by_cid($cid)
        {
        }
        /**
         * Get customer created date
         */
        public function get_creation_date()
        {
        }
        /**
         * Set customer last order date
         *
         * @param $date
         */
        public function set_l_order_date($date)
        {
        }
        /**
         * Set customer last order date
         *
         * @param $date
         */
        public function set_f_order_date($date)
        {
        }
        /**
         * Get customer last order date
         */
        public function get_l_order_date()
        {
        }
        /**
         * Get customer last order date
         */
        public function get_f_order_date()
        {
        }
        /**
         * Set total order count
         *
         * @param $count
         */
        public function set_total_order_count($count)
        {
        }
        /**
         * Get total order count
         */
        public function get_total_order_count()
        {
        }
        /**
         * Set total order value
         *
         * @param $value
         */
        public function set_total_order_value($value)
        {
        }
        /**
         * Get total order value
         */
        public function get_total_order_value()
        {
        }
        /**
         * Set purchased products
         *
         * @param $products
         */
        public function set_purchased_products($products)
        {
        }
        /**
         * Get purchased products
         *
         */
        public function get_purchased_products()
        {
        }
        /**
         * Set purchased product categories
         *
         * @param $cats
         */
        public function set_purchased_products_cats($cats)
        {
        }
        /**
         * Get purchased product categories
         *
         */
        public function get_purchased_products_cats()
        {
        }
        /**
         * Set purchased product tags
         *
         * @param $tags
         */
        public function set_purchased_products_tags($tags)
        {
        }
        /**
         * Get purchased product tags
         *
         */
        public function get_purchased_products_tags()
        {
        }
        /**
         * Set used coupons
         *
         * @param $state
         */
        public function set_used_coupons($coupons)
        {
        }
        /**
         * Get customer used coupons
         */
        public function get_used_coupons()
        {
        }
        /**
         * Set customer created date
         *
         * @param $date
         */
        public function set_creation_date($date)
        {
        }
        /**
         * Updating customer table with set data
         * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
         */
        public function save()
        {
        }
        /**
         * Get customer id
         */
        public function get_id()
        {
        }
        /**
         * Set customer last order date
         *
         * @param $date
         */
        public function set_id($id)
        {
        }
        /**
         * Get customer cid
         */
        public function get_cid()
        {
        }
        /**
         * Set customer last order date
         *
         * @param $date
         */
        public function set_cid($cid)
        {
        }
        /**
         * Get customer by id
         *
         * @param $customer_id
         *
         * @return mixed
         */
        public function get_customer_by_customer_id($customer_id)
        {
        }
    }
    /**
     * Class BWF_Contacts
     *
     */
    class BWF_Contacts
    {
        /**
         * public db_operations $db_operations
         */
        public $db_operations;
        public $child_entities;
        public $contact_objs = array();
        /**
         * Get the contact details for the email passed if this uid exits other create a new contact with this email
         *
         * @param  $email
         */
        public function __construct()
        {
        }
        /**
         * @return mixed|void
         */
        public static function get_registerd_child_entities()
        {
        }
        /**
         * @return BWF_Contacts
         */
        public static function get_instance()
        {
        }
        /**
         * Get contacts based on different criteria
         */
        public function get_contacts($args = array())
        {
        }
        /**
         * get contact by given field
         */
        public function get_contact_by($field, $value)
        {
        }
        /**
         * Getting date range
         *
         * @param $range
         *
         */
        public function get_date_range($range)
        {
        }
        /**
         * @param WooFunnels_Contact $object
         */
        public function destroy_object($object)
        {
        }
    }
    /**
     * WooFunnels_Background_Updater Class.
     * Based on WC_Background_Updater concept
     */
    class WooFunnels_Background_Updater extends \WP_Background_Process
    {
        const MAX_SAME_OFFSET_THRESHOLD = 5;
        /**
         * Initiate new background process.
         *
         * WooFunnels_Background_Updater constructor.
         */
        public function __construct()
        {
        }
        /**
         * Is queue empty.
         *
         * @return bool
         */
        protected function is_queue_empty()
        {
        }
        /**
         * Get batch.
         *
         * @return stdClass Return the first batch from the queue.
         */
        protected function get_batch()
        {
        }
        /**
         * See if the batch limit has been exceeded.
         *
         * @return bool
         */
        protected function batch_limit_exceeded()
        {
        }
        /**
         * Handle.
         *
         * Pass each queue item to the task handler, while remaining
         * within server memory and time limit constraints.
         */
        protected function handle()
        {
        }
        /**
         * Get memory limit.
         *
         * @return int
         */
        protected function get_memory_limit()
        {
        }
        /**
         * Schedule cron healthcheck.
         *
         * @param array $schedules Schedules.
         *
         * @return array
         */
        public function schedule_cron_healthcheck($schedules)
        {
        }
        /**
         * Delete all batches.
         *
         * @return WC_Background_Process
         */
        public function delete_all_batches()
        {
        }
        /**
         * Handle cron healthcheck
         *
         * Restart the background process if not already running
         * and data exists in the queue.
         */
        public function handle_cron_healthcheck()
        {
        }
        /**
         * Overriding parent protected function publically to use outside this class
         * @return bool
         */
        public function is_process_running()
        {
        }
        public function get_last_offsets()
        {
        }
        /**
         * Kill process.
         *
         * Stop processing queue items, clear cronjob and delete all batches.
         */
        public function kill_process()
        {
        }
        /**
         * Manage last 5 offsets
         */
        public function manage_last_offsets()
        {
        }
        public function update_last_offsets($offsets)
        {
        }
        /**
         * Is the updater running?
         *
         * @return boolean
         */
        public function is_updating()
        {
        }
        public function kill_process_safe()
        {
        }
        public function maybe_re_dispatch_background_process()
        {
        }
        /**
         * Schedule fallback event.
         */
        protected function schedule_event()
        {
        }
        /**
         * Memory exceeded
         *
         * Ensures the batch process never exceeds 90%
         * of the maximum WordPress memory.
         *
         * @return bool
         */
        protected function memory_exceeded()
        {
        }
        /**
         * Task
         *
         * Override this method to perform any actions required on each
         * queue item. Return the modified item for further processing
         * in the next pass through. Or, return false to remove the
         * item from the queue.
         *
         * @param string $callback Update callback function.
         *
         * @return string|bool
         * @SuppressWarnings(PHPMD.DevelopmentCodeFragment)
         * @SuppressWarnings(PHPMD.ElseExpression)
         */
        protected function task($callback)
        {
        }
        /**
         * Complete
         *
         * Override if applicable, but ensure that the below actions are
         * performed, or, call parent::complete().
         */
        protected function complete()
        {
        }
    }
    /**
     * Class WooFunnels_DB_Updater
     *
     */
    class WooFunnels_DB_Updater
    {
        /**
         * @var $ins
         */
        public static $ins;
        /**
         * @var WooFunnels_Background_Updater $updater
         */
        public $updater;
        /**
         * @var WooFunnels_Contacts_Background_Updater $contacts_updater
         */
        public $contacts_updater;
        /**
         * @var WooFunnels_Background_Updater $updater
         */
        public $order_id_in_process;
        /**
         * @var null Used when order indexing is running
         */
        public static $indexing = \null;
        /**
         * WooFunnels_DB_Updater constructor.
         */
        public function __construct()
        {
        }
        /**
         * @return WooFunnels_DB_Updater
         */
        public static function get_instance()
        {
        }
        /**
         * Creating/updating contacts and  customers on offer accepted
         * @SuppressWarnings(PHPMD.DevelopmentCodeFragment)
         */
        public static function capture_offer_accepted_event($request)
        {
        }
        /** Creating/updating contacts and  customers on order status change */
        public static function capture_order_status_change_event($request)
        {
        }
        /**
         * @param $request
         */
        public static function capture_wp_user_login_event($request)
        {
        }
        public function needs_upgrade()
        {
        }
        public function woofunnels_handle_db_upgrade_actions()
        {
        }
        public function set_upgrade_state($stage)
        {
        }
        public function get_upgrade_state()
        {
        }
        /**
         * Contact processing notice to notify admin about the state
         */
        public function woofunnels_show_contact_processing_notice()
        {
        }
        // Register offer accepted and processed
        /**
         * Initiate WooFunnels_Background_Updater class
         * @see woofunnels_maybe_update_customer_database()
         */
        public function woofunnels_init_background_updater()
        {
        }
        /**
         * Initiate WooFunnels_Background_Updater class
         * @see woofunnels_maybe_update_customer_database()
         */
        public function woofunnels_init_background_contacts_updater()
        {
        }
        /**
         * @hooked over `woocommerce_checkout_order_processed`
         * Creating BWF contact if not exist on WC new order
         * sync call
         *
         * @param $order_id
         * @param $posted_data
         * @param $order WC_Order
         */
        public function woofunnels_wc_order_create_contact($order_id, $posted_data, $order)
        {
        }
        /**
         * Creating or updating contact and customer on order status changed to paid statuses
         *
         * @param $order_id
         * @param $from
         * @param $to
         */
        public function woofunnels_status_change_create_update_contact_customer($order_id, $from, $to)
        {
        }
        public function rest_init_register_async_request()
        {
        }
        /**
         * Updating contact and customer on accepting offer
         *
         * @param $get_offer_id
         * @param $get_package
         * @param $get_parent_order
         * @param $new_order
         */
        public function woofunnels_offer_accept_create_update_customer($get_offer_id, $get_package, $get_parent_order, $new_order)
        {
        }
        public static function capture_wc_thank_you_event($request)
        {
        }
        /**
         * Updating refunded amount in order meta
         *
         * @param $refund_id
         * @param $args
         */
        public function bwf_update_refunded_amount($refund_id, $args)
        {
        }
        public function maybe_change_state_on_success()
        {
        }
        /**
         * Updated changes in customer and removing 'changes' meta key on thank you
         * Async call
         *
         * @hooked woocommerce_thankyou
         *
         * @param $order_id
         */
        public function bwf_contact_changes_to_customer($order_id)
        {
        }
        /**
         * Updated changes in customer and removing 'changes' meta key on order edit
         *
         * @param $order_id
         * @param $post
         *
         * @hooked edit_post
         */
        public function bwf_edit_order_changes_to_customer($post)
        {
        }
        /**
         * Adding allow button for db upgrade inside tools
         * @SuppressWarnings(PHPMD.ElseExpression)
         */
        public function bwf_add_indexing_consent_button()
        {
        }
        /**
         * @param $user_id
         * @param $old_user_data
         *
         * @hooked on profile_update
         */
        public function bwf_update_contact_on_user_update($user_id)
        {
        }
        /**
         * Indexing orders and create/update contacts and customers on user login
         *
         * @param $user_login
         * @param $user
         *
         * @hooked on wp_login
         */
        public function bwf_index_orders_on_login($user_login, $user)
        {
        }
        /**
         *
         */
        public function maybe_clean_indexing()
        {
        }
        /**
         * Restart indexing when it is stop due to any reason like cron disabled, server stopped etc
         */
        public function bwf_maybe_restart_indexing()
        {
        }
        /**
         * @hooked over `admin_head`
         * This method takes care of database updating process.
         * Checks whether there is a need to update the database
         * Iterates over define callbacks and passes it to background updater class
         * Update bwf_customer and bwf_customer_meta tables with new token from different tables
         */
        public function woofunnels_maybe_update_customer_database()
        {
        }
        public function bwf_start_indexing()
        {
        }
        public function capture_fatal_error()
        {
        }
        public function capture_fatal_error_contacts()
        {
        }
        public function set_order_id_in_process($order_id)
        {
        }
        public function get_order_id_process()
        {
        }
        public function maybe_re_dispatch_background_process()
        {
        }
        public function maybe_dispatch_contact_table_indexing()
        {
        }
        /**
         * @hooked over `admin_head`
         * This method takes care of database updating process.
         * Checks whether there is a need to update the database
         * Iterates over define callbacks and passes it to background updater class
         */
        public function maybe_update_database_update_contacts()
        {
        }
        public function maybe_flag_old_contacts_indexing()
        {
        }
    }
    /**
     * Class WooFunnels_DB_Operations
     */
    class WooFunnels_DB_Operations
    {
        /**
         * @var $ins
         */
        public static $ins;
        /**
         * @var wp_db
         */
        public $wp_db;
        /**
         * @var $contact_tbl
         */
        public $contact_tbl;
        /**
         * @var $customer_tbl
         */
        public $customer_tbl;
        /**
         * WooFunnels_DB_Operations constructor.
         */
        public function __construct()
        {
        }
        /**
         * @return WooFunnels_DB_Operations
         */
        public static function get_instance()
        {
        }
        /**
         * Inserting a new row in bwf_contact table
         *
         * @param $customer
         *
         * @return int
         * @SuppressWarnings(PHPMD.DevelopmentCodeFragment)
         */
        public function insert_contact($contact)
        {
        }
        /**
         * Updating a contact
         *
         * @param $contact
         *
         * @return array|object|null
         * @SuppressWarnings(PHPMD.DevelopmentCodeFragment)
         */
        public function update_contact($contact)
        {
        }
        /**
         * Getting contacts
         *
         * @return array|object|null
         */
        public function get_all_contacts()
        {
        }
        /**
         * Getting contacts
         *
         * @return array|object|null
         */
        public function get_all_contacts_count()
        {
        }
        /**
         * Getting contacts based on given criteria
         *
         * @param $args
         *
         * @return array|object|null
         */
        public function get_contacts($args)
        {
        }
        /**
         * Get contact for given uid id if it exists
         */
        public function get_contact($uid)
        {
        }
        /**
         * Get contact for given wpid id if it exists
         */
        public function get_contact_by_wpid($wp_id)
        {
        }
        /**
         * Get contact for given email id if it exists
         */
        public function get_contact_by_email($email)
        {
        }
        /**
         * Get contact for given contact id if it exists
         */
        public function get_contact_by_contact_id($contact_id)
        {
        }
        /**
         * Get all contact meta key value for a given contact id
         *
         * @param $contact_id
         *
         * @return array|object|null
         */
        public function get_contact_metadata($contact_id)
        {
        }
        /**
         * @param $contact_id
         * @param $contact_meta
         */
        public function save_contact_meta($contact_id, $contact_meta)
        {
        }
        /**
         * @param $contact_id
         * @param $meta_key
         */
        public function meta_id_exists($contact_id, $meta_key)
        {
        }
        /**
         * @param $contact_id
         * @param $meta_key
         * @param $meta_value
         *
         * @return int
         */
        public function update_contact_meta($contact_id, $meta_key, $meta_value)
        {
        }
        /**
         * Get contact meta for a given contact id and meta key
         *
         * @param $contact_id
         *
         * @return string|null
         */
        public function get_contact_meta_value($contact_id, $meta_key)
        {
        }
        /**
         * Inserting a new row in bwf_customer table
         *
         * @param $customer
         *
         * @return int
         * @SuppressWarnings(PHPMD.DevelopmentCodeFragment)
         */
        public function insert_customer($customer)
        {
        }
        /**
         * Updating a customer
         *
         * @param $customer
         *
         * @return array|object|null
         * @SuppressWarnings(PHPMD.DevelopmentCodeFragment)
         */
        public function update_customer($customer)
        {
        }
        /**
         * Getting customers
         *
         * @return array|object|null
         */
        public function get_all_customers()
        {
        }
        /**
         * Getting customers based on given criteria
         *
         * @param $args
         *
         * @return array|object|null
         */
        public function get_customers($args)
        {
        }
        /**
         * Get customer for given uid id if it exists
         */
        public function get_customer($uid)
        {
        }
        /**
         * Get customer for given cid id if it exists
         */
        public function get_customer_by_cid($cid)
        {
        }
        /**
         * Get customer for given customer id if it exists
         */
        public function get_customer_by_customer_id($customer_id)
        {
        }
        /**
         * Deleting a meta key from contact meta table
         *
         * @param $cid
         * @param $meta_key
         */
        public function delete_contact_meta($cid, $meta_key)
        {
        }
    }
    /**
     * Class BWF_Customers
     */
    class BWF_Customers
    {
        /**
         * public db_operations $db_operations
         */
        public $db_operations;
        /**
         * Get the customer details for the email passed if this email exits other create a new customer with this email
         * BWF_Customers constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get customers based on different criteria
         *
         * @param array $args
         *
         * @return array|object|null
         */
        public function get_customers($args = array())
        {
        }
        /**
         * Get customer by given field
         *
         * @param $field
         * @param $value
         *
         * @return WooFunnels_Customer
         */
        public function get_customer_by($field, $value)
        {
        }
        /**
         * Getting date range
         *
         * @param $range
         *
         * @return array
         */
        public function get_date_range($range)
        {
        }
    }
    /**
     * Class WooFunnels_DB_Tables
     */
    class WooFunnels_DB_Tables
    {
        /**
         * WPDB instance
         *
         * @since 2.0
         *
         * @var $wp_db
         */
        protected $wp_db;
        /**
         * Charector collation
         *
         * @since 2.0
         *
         * @var string
         */
        protected $charset_collate;
        /**
         * Max index length
         *
         * @since 2.0
         *
         * @var int
         */
        protected $max_index_length = 191;
        /**
         * List of missing tables
         *
         * @since 2.0
         *
         * @var array
         */
        protected $missing_tables;
        /**
         * WooFunnels_DB_Tables constructor.
         */
        public function __construct()
        {
        }
        /**
         * @return WooFunnels_DB_Tables|null
         */
        public static function get_instance()
        {
        }
        /**
         * Add CF tables if they are missing
         *
         * @since 2.0
         */
        public function add_if_needed()
        {
        }
        /**
         * Find any missing Caldera Forms tables
         *
         * @return array
         */
        protected function find_missing_tables()
        {
        }
        /**
         * Get the list of woofunnels tables, with wp_db prefix
         *
         * @return array
         * @since 2.0
         *
         */
        protected function get_tables_list()
        {
        }
        /**
         * Get list of missing tables
         *
         * @return array
         * @since 2.0
         *
         */
        public function get_missing_tables()
        {
        }
        /**
         * Add bwf_contact table
         *
         *  Warning: check if it exists first, which could cause SQL errors.
         */
        public function contact()
        {
        }
        /**
         * Add bwf_contact_meta table
         *
         * Warning: check if it exists first, which could cause SQL errors.
         *
         * @since 2.0
         */
        public function contact_meta()
        {
        }
        /**
         * Add bwf_wc_customers table
         *
         *  Warning: check if it exists first, which could cause SQL errors.
         */
        public function wc_customers()
        {
        }
        /**
         * Add bwf_wfco_report_views table
         *
         *  Warning: check if it exists first, which could cause SQL errors.
         */
        public function wfco_report_views()
        {
        }
    }
    /**
     * Class WooFunnels_Contact
     *
     *
     */
    class WooFunnels_Contact
    {
        /**
         * public db_operations $db_operations
         */
        public $db_operations;
        /**
         * public id $id
         */
        public $id;
        /**
         * public ud $uid
         */
        public $uid;
        /**
         * public email $email
         */
        public $email;
        /**
         * public wp_id $wp_id
         */
        public $wp_id;
        /**
         * public meta $meta
         */
        public $meta;
        /**
         * public customer $customer
         */
        public $children;
        /**
         * @var mixed $db_contact
         */
        public $db_contact;
        /**
         * Get the contact details for the email passed if this email exits other create a new contact with this email
         *
         * @param  $wp_id
         * @param  $email
         * @SuppressWarnings(PHPMD.CyclomaticComplexity)
         *
         */
        public function __construct($wp_id, $email)
        {
        }
        /**
         * Get contact by wp_id
         *
         * @param $wp_id
         *
         * @return mixed
         */
        public function get_contact_by_wpid($wp_id)
        {
        }
        /**
         * Get contact by email
         *
         * @param $email
         *
         * @return mixed
         */
        public function get_contact_by_email($email)
        {
        }
        /**
         * Get contact uid
         */
        public function get_uid()
        {
        }
        /**
         * Set contact uid
         *
         * @param $uid
         */
        public function set_uid($uid)
        {
        }
        /**
         * Implementing magic function for calling other contact's actor(like customer) functions
         *
         * @param $name
         * @param $args
         * @SuppressWarnings(PHPMD.CyclomaticComplexity)
         *
         * @return mixed
         */
        public function __call($name, $args)
        {
        }
        /**
         * Get marketing status
         */
        public function get_marketing_status()
        {
        }
        /**
         * Get marketing status
         */
        public function get_status()
        {
        }
        /**
         * Get meta value for a given meta key from current contact object
         *
         * @param string $meta_key meta key to get value against
         * @param bool $is_primary_column_check whether to check primary properties or not
         *
         * @return mixed|string
         */
        public function get_meta($meta_key, $is_primary_column_check = \true)
        {
        }
        /**
         * @param $meta_key
         * @param $meta_value
         */
        public function set_meta($meta_key, $meta_value)
        {
        }
        public function get_primary_properties()
        {
        }
        /**
         * Set contact fname
         *
         * @param $email
         */
        public function set_f_name($fname)
        {
        }
        /**
         * Get contact fname
         */
        public function get_f_name()
        {
        }
        /**
         * Set contact lname
         *
         * @param $email
         */
        public function set_l_name($lname)
        {
        }
        /**
         * Get contact lname
         */
        public function get_l_name()
        {
        }
        /**
         * Set contact created date
         *
         * @param $date
         */
        public function set_last_modified($date)
        {
        }
        /**
         * Get contact fname
         */
        public function get_last_modified()
        {
        }
        /**
         * Set contact created date
         *
         * @param $date
         */
        public function set_creation_date($date)
        {
        }
        /**
         * Get contact created date
         */
        public function get_creation_date()
        {
        }
        public function set_type($type)
        {
        }
        /**
         * Get type the contact belongs to
         * @return string
         */
        public function get_type()
        {
        }
        public function set_source($source)
        {
        }
        /**
         * Get source the contact generated from
         * @return string
         */
        public function get_source()
        {
        }
        public function set_points($points)
        {
        }
        /**
         * Get points the contact have
         * @return string
         */
        public function get_points()
        {
        }
        /**
         * Saves the data in the properties.
         * This method is responsible for any db operation inside the contact table and sibling tables
         * Updating contact table with set data
         *
         * @param bool $force used to detect if properties to be saved inside changes meta of directly to respective tables.
         * @SuppressWarnings(PHPMD.CyclomaticComplexity)
         * @SuppressWarnings(PHPMD.DevelopmentCodeFragment)
         *
         */
        public function save()
        {
        }
        /**
         * Get contact id
         * @SuppressWarnings(PHPMD.ShortVariable)
         */
        public function get_id()
        {
        }
        /**
         * Set contact id
         *
         * @param $id
         */
        public function set_id($id)
        {
        }
        /**
         * Get contact wp_id
         */
        public function get_wpid()
        {
        }
        /**
         * Set contact wpid
         *
         * @param $wp_id
         */
        public function set_wpid($wp_id)
        {
        }
        /**
         * Get contact email
         */
        public function get_email()
        {
        }
        /**
         * Set contact email
         *
         * @param $email
         */
        public function set_email($email)
        {
        }
        /**
         * Get meta value for a given meta key from DB
         */
        public function get_contact_meta($meta_key)
        {
        }
        /**
         * Set meta value for a given meta key
         *
         * @param $meta_key
         * @param $meta_value
         *
         * @return mixed
         */
        public function update_meta($meta_key, $meta_value)
        {
        }
        /**
         * Updating contact meta table with set data
         */
        public function save_meta()
        {
        }
        /**
         * Set marketing status
         *
         * @param $status
         */
        public function set_marketing_status($status)
        {
        }
        /**
         * Set marketing status
         *
         * @param $status
         */
        public function set_status($status)
        {
        }
        /**
         * Set contact country
         *
         * @param $country
         */
        public function set_country($country)
        {
        }
        /**
         * Get contact country
         */
        public function get_country()
        {
        }
        public function set_timezone($timezone)
        {
        }
        /**
         * Get contact timezone
         *
         * @return string
         */
        public function get_timezone()
        {
        }
        public function set_contact_no($contact_no)
        {
        }
        public function get_contact_no()
        {
        }
        /**
         * Set contact state
         *
         * @param $state
         */
        public function set_state($state)
        {
        }
        /**
         * Get contact state
         */
        public function get_state()
        {
        }
        /**
         * Get contact by id
         *
         * @param $contact_id
         *
         * @return mixed
         */
        public function get_contact_by_contact_id($contact_id)
        {
        }
        /**
         * Deleting a meta key from contact meta table
         *
         * @param $meta_key
         */
        public function delete_meta($meta_key)
        {
        }
    }
    class BWF_Compatibility_With_Aelia_CS
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        /**
         *
         * Modifies the amount for the fixed discount given by the admin in the currency selected.
         *
         * @param integer|float $price
         *
         * @return float
         */
        public function alter_fixed_amount($price, $currency = \null)
        {
        }
        /**
         * Basic integration with WooCommerce Currency Switcher, developed by Aelia
         * (http://aelia.co). This method can be used by any 3rd party plugin to
         * return prices converted to the active currency.
         *
         * Need a consultation? Find us on Codeable: https://aelia.co/hire_us
         *
         * @param double price The source price.
         * @param string to_currency The target currency. If empty, the active currency
         * will be taken.
         * @param string from_currency The source currency. If empty, WooCommerce base
         * currency will be taken.
         *
         * @return double The price converted from source to destination currency.
         * @author Aelia <support@aelia.co>
         * @link https://aelia.co
         */
        public function get_price_in_currency($price, $to_currency = \null, $from_currency = \null)
        {
        }
        function get_fixed_currency_price_reverse($price, $from = \null, $base = \null)
        {
        }
    }
    /**
     * Class BWF_Plugin_Compatibilities
     * Loads all the compatibilities files we have to provide compatibility with each plugin
     */
    class BWF_Plugin_Compatibilities
    {
        public static $plugin_compatibilities = array();
        public static function load_all_compatibilities()
        {
        }
        public static function register($object, $slug)
        {
        }
        public static function get_compatibility_class($slug)
        {
        }
        public static function get_fixed_currency_price($price, $currency = \null)
        {
        }
        public static function get_fixed_currency_price_reverse($price, $from = \null, $to = \null)
        {
        }
    }
    /**
     * WooCommerce Compatibility Utility Class
     *
     * The unfortunate purpose of this class is to provide a single point of
     * compatibility functions for dealing with supporting multiple versions
     * of WooCommerce.
     *
     * The recommended procedure is to rename this file/class, replacing "my plugin"
     * with the particular plugin name, so as to avoid clashes between plugins.
     * Over time we expect to remove methods from this class, using the current
     * ones directly, as support for older versions of WooCommerce is dropped.
     *
     * Current Compatibility: 2.0.x - 2.1
     *
     * @version 1.0
     */
    class BWF_WC_Compatibility
    {
        /**
         * Compatibility function for outputting a woocommerce attribute label
         *
         * @param string $label the label to display
         *
         * @return string the label to display
         * @since 1.0
         *
         */
        public static function wc_attribute_label($label)
        {
        }
        public static function wc_attribute_taxonomy_name($name)
        {
        }
        public static function wc_get_attribute_taxonomies()
        {
        }
        public static function wc_placeholder_img_src()
        {
        }
        /**
         * @param WC_Product $product
         *
         * @return string
         */
        public static function woocommerce_get_formatted_product_name($product)
        {
        }
        /**
         * @param $order
         * @param $item
         *
         * @return WC_Product
         */
        public static function get_product_from_item($order, $item)
        {
        }
        public static function get_short_description($product)
        {
        }
        public static function get_productname_from_item($order, $item)
        {
        }
        public static function get_qty_from_item($order, $item)
        {
        }
        public static function get_display_item_meta($order, $item)
        {
        }
        public static function get_display_item_downloads($order, $item)
        {
        }
        public static function get_purchase_note($product)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed|string
         */
        public static function get_order_currency($order)
        {
        }
        public static function get_payment_gateway_from_order($order)
        {
        }
        public static function get_item_subtotal($order, $item)
        {
        }
        public static function get_shipping_country_from_order($order)
        {
        }
        public static function get_billing_country_from_order($order)
        {
        }
        public static function get_order_id($order)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_order_billing_1($order)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_order_data($order, $key)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_billing_first_name($order)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_billing_last_name($order)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_order_status($order)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_order_billing_2($order)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_order_shipping_1($order)
        {
        }
        /**
         * Returns true if the installed version of WooCommerce is 2.6 or greater
         *
         * @since 1.0
         * @return boolean true if the installed version of WooCommerce is 2.1 or greater
         */
        public static function is_wc_version_gte_3_7()
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_used_coupons($order)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_order_shipping_total($order)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_order_shipping_2($order)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_order_date($order)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_payment_method($order)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_customer_ip_address($order)
        {
        }
        /**
         * @param WC_Order $order
         *
         * @return mixed
         */
        public static function get_customer_note($order)
        {
        }
        /**
         * @param $date
         * @param string $format
         *
         * @return string
         */
        public static function get_formatted_date($date, $format = '')
        {
        }
        /**
         * Compatibility function to add and store a notice
         *
         * @param string $message The text to display in the notice.
         * @param string $notice_type The singular name of the notice type - either error, success or notice. [optional]
         *
         * @since 1.0
         *
         */
        public static function wc_add_notice($message, $notice_type = 'success')
        {
        }
        /**
         * Prints messages and errors which are stored in the session, then clears them.
         *
         * @since 1.0
         */
        public static function wc_print_notices()
        {
        }
        /**
         * Compatibility function to queue some JavaScript code to be output in the footer.
         *
         * @param string $code javascript
         *
         * @since 1.0
         *
         */
        public static function wc_enqueue_js($code)
        {
        }
        /**
         * Sets WooCommerce messages
         *
         * @since 1.0
         */
        public static function set_messages()
        {
        }
        /**
         * Returns a new instance of the woocommerce logger
         *
         * @return WC_Logger logger
         * @since 1.0
         */
        public static function new_wc_logger()
        {
        }
        /**
         * Format decimal numbers ready for DB storage
         *
         * Sanitize, remove locale formatting, and optionally round + trim off zeros
         *
         * @param float|string $number Expects either a float or a string with a decimal separator only (no thousands)
         * @param mixed $dp number of decimal points to use, blank to use woocommerce_price_num_decimals, or false to avoid all rounding.
         * @param boolean $trim_zeros from end of string
         *
         * @return string
         * @since 1.0
         *
         */
        public static function wc_format_decimal($number, $dp = \false, $trim_zeros = \false)
        {
        }
        /**
         * Get the count of notices added, either for all notices (default) or for one particular notice type specified
         * by $notice_type.
         *
         * @param string $notice_type The name of the notice type - either error, success or notice. [optional]
         *
         * @return int the notice count
         * @since 1.0
         *
         */
        public static function wc_notice_count($notice_type = '')
        {
        }
        /**
         * Compatibility function to use the new WC_Admin_Meta_Boxes class for the save_errors() function
         *
         * @return old save_errors function or new class
         * @since 1.0-1
         */
        public static function save_errors()
        {
        }
        /**
         * Compatibility function to get the version of the currently installed WooCommerce
         *
         * @return string woocommerce version number or null
         * @since 1.0
         */
        public static function get_wc_version()
        {
        }
        /**
         * Returns the WooCommerce instance
         *
         * @return WooCommerce woocommerce instance
         * @since 1.0
         */
        public static function WC()
        {
        }
        /**
         * Returns true if the WooCommerce plugin is loaded
         *
         * @return boolean true if WooCommerce is loaded
         * @since 1.0
         */
        public static function is_wc_loaded()
        {
        }
        /**
         * Returns true if the installed version of WooCommerce is 2.1 or greater
         *
         * @return boolean true if the installed version of WooCommerce is 2.1 or greater
         * @since 1.0
         */
        public static function is_wc_version_gte_2_1()
        {
        }
        /**
         * Returns true if the installed version of WooCommerce is 2.6 or greater
         *
         * @return boolean true if the installed version of WooCommerce is 2.1 or greater
         * @since 1.0
         */
        public static function is_wc_version_gte_2_6()
        {
        }
        /**
         * Returns true if the installed version of WooCommerce is 2.6 or greater
         *
         * @return boolean true if the installed version of WooCommerce is 2.1 or greater
         * @since 1.0
         */
        public static function is_wc_version_gte_3_0()
        {
        }
        /**
         * @param WC_Order_Item_Shipping $method
         *
         * @return string
         */
        public static function get_method_id($method)
        {
        }
        /**
         * @param WC_Order_Item_Shipping $method
         *
         * @return string
         */
        public static function get_instance_id($method)
        {
        }
        /**
         * Returns true if the installed version of WooCommerce is greater than $version
         *
         * @param string $version the version to compare
         *
         * @return boolean true if the installed version of WooCommerce is > $version
         * @since 1.0
         *
         */
        public static function is_wc_version_gt($version)
        {
        }
        public static function display_prices_including_tax()
        {
        }
    }
    class BWF_Compatibility_With_WPML_MultiCurrency
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        /**
         *
         * Modifies the amount for the fixed discount given by the admin in the currency selected.
         *
         * @param integer|float $price
         *
         * @return float
         */
        public function alter_fixed_amount($price, $currency = \null)
        {
        }
        function get_fixed_currency_price_reverse($price, $from = \null, $base = \null)
        {
        }
    }
    class BWF_Compatibility_With_WOOCS
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        /**
         *
         * Modifies the amount for the fixed discount given by the admin in the currency selected.
         *
         * @param integer|float $price
         *
         * @return float
         */
        public function alter_fixed_amount($price, $currency = \null)
        {
        }
        function get_fixed_currency_price_reverse($price, $from = \null, $base = \null)
        {
        }
    }
    class BWF_Compatibility_With_WooMultiCurrency
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        /**
         *
         * @param $url
         * @param WC_Order $order
         *
         * @return string
         */
        public function maybe_add_currency_converter_url($url, $order)
        {
        }
        /**
         *
         * Modifies the amount for the fixed discount given by the admin in the currency selected.
         *
         * @param integer|float $price
         *
         * @return float
         */
        public function alter_fixed_amount($price, $currency = \null)
        {
        }
        function get_fixed_currency_price_reverse($price, $from = \null, $base = \null)
        {
        }
    }
    abstract class WFCO_Call
    {
        protected $data = array();
        protected $allowed_responses = array(200, 201, 202);
        protected $connector_slug = \null;
        protected $required_fields = array();
        protected $missing_field = \false;
        public function get_slug()
        {
        }
        public function get_connector_slug()
        {
        }
        public function set_connector_slug($slug)
        {
        }
        public function get_random_api_error()
        {
        }
        public function process()
        {
        }
        /**
         * Checks the required fields for every action
         *
         * @param $data
         * @param $required_fields
         *
         * @return bool
         */
        public function check_fields($data, $required_fields)
        {
        }
        /**
         * Return the error
         *
         * @return array
         */
        public function show_fields_error()
        {
        }
        /**
         * Set the data for every action
         *
         * @param $data
         */
        public function set_data($data)
        {
        }
        /**
         * Sends a wp remote call to Third party softwares.
         *
         * @param $url
         * @param array $params
         * @param int $req_method
         *
         * @return array|mixed|object|string
         */
        public function make_wp_requests($url, $params = array(), $headers = array(), $req_method = 1)
        {
        }
        /**
         * check if a string is json or not
         *
         * @param $string
         *
         * @return bool
         */
        public function is_json($string)
        {
        }
    }
    /**
     * Class WFCO_AJAX_Controller
     * Handles All the request came from Backend
     */
    class WFCO_AJAX_Controller
    {
        public static function init()
        {
        }
        public static function handle_admin_ajax()
        {
        }
        /**
         * Update Connectors settings
         */
        public static function update_connector()
        {
        }
        /**
         * save connectors settings
         */
        public static function save_connector()
        {
        }
        /**
         * sync connectors settings
         */
        public static function sync_connector()
        {
        }
        /**
         * Delete connector
         */
        public static function delete_connector()
        {
        }
        public static function connector_install()
        {
        }
        public static function create_connector_license()
        {
        }
    }
    class WFCO_Common
    {
        public static $ins = \null;
        public static $http;
        public static $connectors_saved_data = array();
        public static $saved_data = \false;
        public static function init()
        {
        }
        public static function get_instance()
        {
        }
        /**
         * Create required tables
         */
        public static function wfco_add_tables()
        {
        }
        /**
         * Send remote call
         *
         * @param $api_url
         * @param $data
         * @param string $method_type
         *
         * @return array|mixed|null|object|string
         */
        public static function send_remote_call($api_url, $data, $method_type = 'post')
        {
        }
        public static function http()
        {
        }
        /**
         * Save connector data
         *
         * @param $data
         * @param $slug
         * @param $status
         *
         * @return int
         */
        public static function save_connector_data($data, $slug, $status)
        {
        }
        /**
         * get all connectors saved data for global access
         */
        public static function get_connectors_data()
        {
        }
        public static function get_metakey_value($all_meta, $meta_key, $primary_id = \null, $primary_key_name = \null)
        {
        }
        /**
         * update connector data
         *
         * @param array $new_data
         */
        public static function update_connector_data($new_data = array(), $connector_id = 0)
        {
        }
        public static function is_load_admin_assets($screen_type = 'all')
        {
        }
        public static function array_flatten($array)
        {
        }
        public static function pr($arr)
        {
        }
        public static function slugify_classname($class_name)
        {
        }
        /**
         * Recursive Un-serialization based on   WP's is_serialized();
         *
         * @param $val
         *
         * @return mixed|string
         * @see is_serialized()
         */
        public static function unserialize_recursive($val)
        {
        }
        public static function get_option()
        {
        }
        public static function active_class($trigger_slug)
        {
        }
        public static function get_current_trigger()
        {
        }
        public static function string2hex($string)
        {
        }
        public static function maybe_filter_boolean_strings($options)
        {
        }
        public static function is_add_on_exist($add_on = 'MultiProduct')
        {
        }
        public static function get_date_format()
        {
        }
        public static function between($needle, $that, $inthat)
        {
        }
        public static function before($needle, $inthat)
        {
        }
        public static function after($needle, $inthat)
        {
        }
        public static function clean_ascii_characters($content)
        {
        }
        /**
         * Function to get timezone string by checking WordPress timezone settings
         * @return mixed|string|void
         */
        public static function wc_timezone_string()
        {
        }
        /**
         * Function to get timezone string based on specified offset
         *
         * @param $offset
         *
         * @return string
         */
        public static function get_timezone_by_offset($offset)
        {
        }
        /**
         * Check is_connector_page
         *
         * @param string $section
         *
         * @return bool
         */
        public static function is_connector_page($section = '')
        {
        }
        /**
         * Generate random string
         *
         * @param int $length
         *
         * @return string
         */
        public static function generateRandomString($length = 5)
        {
        }
        /**
         * Get all merge tags from string
         *
         * @param $text
         *
         * @return array|null
         */
        public static function get_merge_tags_from_text($text)
        {
        }
        public static function get_single_connector_data($connector_slug, $meta_key = \null)
        {
        }
        public static function get_call_object($connector_slug, $call_slug)
        {
        }
    }
    class WFCO_Model_Connectors extends \WFCO_Model
    {
        static $primary_key = 'ID';
        public static function count_rows($dependency = \null)
        {
        }
    }
    class WFCO_Model_ConnectorMeta extends \WFCO_Model
    {
        static $primary_key = 'ID';
        public static function get_meta($id, $key)
        {
        }
        public static function get_connector_meta($id)
        {
        }
        public static function get_connectors_meta($ids = [])
        {
        }
    }
    abstract class BWF_CO
    {
        public static $GET = 1;
        public static $POST = 2;
        public static $DELETE = 3;
        public static $PUT = 4;
        public static $PATCH = 5;
        /** @var string Connector folder directory */
        public $dir = __DIR__;
        /** @var string Autonami integration class name */
        public $autonami_int_slug = '';
        /** @var null Nice name */
        public $nice_name = \null;
        /** @var bool Connector has settings */
        public $is_setting = \true;
        /** @var string Public directory URL */
        protected $connector_url = '';
        /** @var array Connector keys which are tracked during syncing and update */
        protected $keys_to_track = [];
        protected $form_req_keys = [];
        protected $sync = \false;
        protected $is_oauth = \false;
        /**
         * Loads all calls of current connector
         */
        public function load_calls()
        {
        }
        public function get_slug()
        {
        }
        /**
         * Handles the settings form submission
         *
         * @param $data
         * @param string $type
         *
         * @return $array
         */
        public function handle_settings_form($data, $type = 'save')
        {
        }
        /**
         * Validating connector form settings fields, all required fields should be present with values
         *
         * @param $data
         * @param string $type
         *
         * @return boolean
         *
         * @todo empty values need to check
         */
        protected function validate_settings_fields($data, $type = 'save')
        {
        }
        public function get_connector_messages($key = 'connector_saved')
        {
        }
        /**
         * Get data from the API call, must required function otherwise call
         *
         * @param $data
         *
         * @return array
         */
        protected function get_api_data($data)
        {
        }
        public function get_response_status($data, $key = 'status')
        {
        }
        /**
         * Track connector old and new data and return if any data change detected.
         *
         * @param $new_data
         * @param $old_data
         *
         * @return bool
         */
        protected function track_sync_changes($new_data, $old_data)
        {
        }
        public function get_image()
        {
        }
        public function has_settings()
        {
        }
        public function is_syncable()
        {
        }
        public function is_oauth()
        {
        }
        public function setting_view()
        {
        }
        public function get_settings_view()
        {
        }
    }
    class WFCO_Connector_api
    {
        public function __construct($license = '', $connector = '', $action = 'find_connector')
        {
        }
        public function set_action($action)
        {
        }
        /**
         * @param array $data Associative array
         * @param bool $reset
         */
        public function set_data($data = [], $reset = \false)
        {
        }
        public function get_license()
        {
        }
        public function get_connector()
        {
        }
        public function get_package()
        {
        }
        public function create_license()
        {
        }
        public function find_connector()
        {
        }
        public function get()
        {
        }
    }
    class WFCO_Load_Connectors
    {
        public function __construct()
        {
        }
        /**
         * Return class instance
         *
         * @return class|WFCO_Load_Connectors
         */
        public static function get_instance()
        {
        }
        /**
         * Include all the connectors files
         */
        public static function load_connectors()
        {
        }
        /**
         * Register a connector with their object
         * Assign to static property $connectors
         * Load connector respective calls
         *
         * @param $class
         */
        public static function register($class)
        {
        }
        /**
         * Register a call with their object
         * Assign to static property $registered_calls
         * Assign to static property $registered_connectors_calls
         *
         * @param WFCO_Call $call_obj
         */
        public static function register_calls(\WFCO_Call $call_obj)
        {
        }
        /**
         * Return all the connectors with their calls objects
         *
         * @return array
         */
        public static function get_all_connectors()
        {
        }
        /**
         * Returns Instance of single connector
         *
         * @param $connector
         *
         * @return BWF_CO
         */
        public static function get_connector($connector)
        {
        }
        /**
         * Returns all the active connectors i.e. plugin active
         *
         * @return array
         */
        public static function get_active_connectors()
        {
        }
        /**
         * Return a call object if call slug is passed.
         * Return all calls object if no single call slug passed.
         *
         * @param string $slug
         *
         * @return array|mixed
         */
        public function get_calls($slug = '')
        {
        }
        /**
         * Return a call object based on the given slug.
         *
         * @param string $slug call slug
         *
         * @return WFCO_Call | null
         */
        public function get_call($slug)
        {
        }
    }
    /**
     * Class WFCO_Db
     * @package Autonami
     * @author XlPlugins
     */
    class WFCO_Db
    {
        /**
         * WFCO_Db constructor.
         */
        public function __construct()
        {
        }
        /**
         * Return the object of current class
         *
         * @return null|WFCO_Db
         */
        public static function get_instance()
        {
        }
        /**
         * Include all the DB Table files
         */
        public static function load_db_classes()
        {
        }
    }
    class WFCO_Admin
    {
        public $admin_path;
        public $admin_url;
        public $section_page = '';
        public $should_show_shortcodes = \null;
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public static function get_plugins()
        {
        }
        public static function localize_data()
        {
        }
        public static function get_oauth_connector()
        {
        }
        public static function get_available_connectors($type = '')
        {
        }
        public static function get_error_message()
        {
        }
        public static function js_text()
        {
        }
        public function get_admin_url()
        {
        }
        public function include_global_assets()
        {
        }
        public function register_assets()
        {
        }
        public function is_connector_page($section = '')
        {
        }
        public function connector_page()
        {
        }
        public function admin_footer_text($footer_text)
        {
        }
        public function update_footer($footer_text)
        {
        }
        public function tooltip($text)
        {
        }
        /**
         * Remove all the notices in our dashboard pages as they might break the design.
         */
        public function maybe_remove_all_notices_on_page()
        {
        }
    }
    class WFCO_Connector_Screen
    {
        public function __construct($slug, $data)
        {
        }
        public function get_logo()
        {
        }
        public function is_active()
        {
        }
        public function is_installed()
        {
        }
        public function activation_url()
        {
        }
        public function get_path()
        {
        }
        public function get_class()
        {
        }
        public function get_source()
        {
        }
        public function get_support()
        {
        }
        public function get_slug()
        {
        }
        public function print_card()
        {
        }
        public function get_type()
        {
        }
        public function get_name()
        {
        }
        public function get_desc()
        {
        }
        public function is_activated()
        {
        }
        public function show_setting_btn()
        {
        }
        public function is_present()
        {
        }
    }
    abstract class WFCO_Connector_Screen_Factory
    {
        public static function create($slug, $data)
        {
        }
        public static function get($screen)
        {
        }
        public static function print_screens($type = '')
        {
        }
        public static function getAll($type = '')
        {
        }
    }
    class WooFunnel_Loader
    {
        public static $plugins = array();
        public static $loaded = \false;
        public static $ultimate_path = '';
        public static $version = \null;
        public static function include_core()
        {
        }
        public static function register($configuration)
        {
        }
        public static function get_the_latest()
        {
        }
    }
    class WooFunnel_WFOCU
    {
        public static $version = \WFOCU_BWF_VERSION;
        public static function register()
        {
        }
        public static function load_files()
        {
        }
    }
}
namespace {
    function wfocu_is_woocommerce_active()
    {
    }
    /** Data */
    $product_key = $data['key'];
    /** Data */
    $product_key = $data['key'];
    /** css */
    $base_color = \WFOCU_Common::get_option(\WFOCU_SLUG . '_header_progress_bar_base_color');
    /** merge tag decode */
    $percentage_text = \str_replace('{{percentage}}', '<span>' . $percent_val . '%</span>', $percentage_text);
    /** css */
    $base_color = \WFOCU_Common::get_option(\WFOCU_SLUG . '_header_progress_bar_base_color');
    /** Data */
    $product_key = $data['key'];
    /** Rating */
    $display_rating = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_display_rating');
    /** Product has variations  */
    $display_buy_block_variation = \false;
    /** Tabs */
    $display_tabs = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_display_tabs');
    /** Gallery */
    $gallery = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_images');
    /** Price */
    /** Price */
    $regular_price = \WFOCU_Common::maybe_parse_merge_tags('{{product_regular_price key="' . $product_key . '" tag="no"}}');
    /** css */
    $title_fs = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_title_fs');
    /** Rating */
    $display_rating = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_display_rating');
    /** Product has variations  */
    $display_buy_block_variation = \false;
    /** Tabs */
    $display_tabs = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_display_tabs');
    /** Gallery */
    $gallery = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_images');
    /** Price */
    $regular_price = \WFOCU_Common::maybe_parse_merge_tags('{{product_regular_price key="' . $product_key . '" tag="no"}}');
    /** css */
    $title_fs = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_title_fs');
    /** Rating */
    $display_rating = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_display_rating');
    /** Product has variations  */
    $display_buy_block_variation = \false;
    /** Tabs */
    $display_tabs = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_display_tabs');
    /** Gallery */
    $gallery = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_images');
    /** Price */
    /** Price */
    $regular_price = \WFOCU_Common::maybe_parse_merge_tags('{{product_regular_price key="' . $product_key . '" tag="no"}}');
    /** css */
    $title_fs = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_title_fs');
    /** Rating */
    $display_rating = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_display_rating');
    /** Product has variations  */
    $display_buy_block_variation = \false;
    /** Tabs */
    $display_tabs = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_display_tabs');
    /** Gallery */
    $gallery = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_images');
    /** Price */
    $regular_price = \WFOCU_Common::maybe_parse_merge_tags('{{product_regular_price key="' . $product_key . '" tag="no"}}');
    /** css */
    $title_fs = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_title_fs');
    /** Rating */
    $display_rating = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_display_rating');
    /** Product has variations  */
    $display_buy_block_variation = \false;
    /** Tabs */
    $display_tabs = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_display_tabs');
    /** Gallery */
    $gallery = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_images');
    /** Price */
    $regular_price = \WFOCU_Common::maybe_parse_merge_tags('{{product_regular_price key="' . $product_key . '" tag="no"}}');
    /** css */
    $title_fs = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_title_fs');
    /** Rating */
    $display_rating = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_display_rating');
    /** Product has variations  */
    $display_buy_block_variation = \false;
    /** Tabs */
    $display_tabs = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_display_tabs');
    /** Gallery */
    $gallery = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_images');
    /** Price */
    $regular_price = \WFOCU_Common::maybe_parse_merge_tags('{{product_regular_price key="' . $product_key . '" tag="no"}}');
    /** css */
    $title_fs = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_title_fs');
    /** Rating */
    $display_rating = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_display_rating');
    /** Product has variations  */
    $display_buy_block_variation = \false;
    /** Tabs */
    $display_tabs = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_display_tabs');
    /** Gallery */
    $gallery = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_images');
    /** Price */
    /** Price */
    $regular_price = \WFOCU_Common::maybe_parse_merge_tags('{{product_regular_price key="' . $product_key . '" tag="no"}}');
    /** css */
    $title_fs = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_title_fs');
    /** Rating */
    $display_rating = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_display_rating');
    /** Product has variations  */
    $display_buy_block_variation = \false;
    /** Tabs */
    $display_tabs = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_display_tabs');
    /** Gallery */
    $gallery = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_images');
    /** Price */
    $regular_price = \WFOCU_Common::maybe_parse_merge_tags('{{product_regular_price key="' . $product_key . '" tag="no"}}');
    /** css */
    $title_fs = \WFOCU_Common::get_option('wfocu_product_product_' . $product_key . '_title_fs');
    //phpcs:ignore VariableAnalysis.CodeAnalysis.VariableAnalysis.UndefinedVariable
    /** css */
    $logo_width = \WFOCU_Common::get_option(\WFOCU_SLUG . '_header_top_logo_width');
    /** Data */
    $product_key = $data['key'];
    /**
     * Colors
     */
    $accept_btn_text_fs = \WFOCU_Common::get_option('wfocu_buy_block_buy_block_accept_btn_text1_fs');
    /**
     * Output a list of variation attributes for use in the cart forms.
     *
     * @param array $args Arguments.
     *
     * @since 2.4.0
     */
    function wc_wfocu_dropdown_variation_attribute_options($args = array())
    {
    }
    /**
     * Fires at the end of the update message container in each
     * row of the plugins list table.
     * Allows us to add important notices about updates should they be needed.
     * Notices should be added using "== Upgrade Notice ==" in readme.txt.
     *
     * @since 2.3.8
     * @param array $plugin_data An array of plugin metadata.
     * @param array $response    An array of metadata about the available plugin update.
     */
    function wfocukirki_show_upgrade_notification($plugin_data, $response)
    {
    }
    /**
     * Get the value of a field.
     * This is a deprecated function that we used when there was no API.
     * Please use the WFOCUKirki::get_option() method instead.
     * Documentation is available for the new method on https://github.com/aristath/kirki/wiki/Getting-the-values
     *
     * @return mixed
     */
    function wfocukirki_get_option($option = '')
    {
    }
    function wfocukirki_sanitize_hex($color)
    {
    }
    function wfocukirki_get_rgb($hex, $implode = \false)
    {
    }
    function wfocukirki_get_rgba($hex = '#fff', $opacity = 100)
    {
    }
    function wfocukirki_get_brightness($hex)
    {
    }
    function WFOCUKirki()
    {
    }
    \define('WFOCU_KIRKI_PLUGIN_FILE', __FILE__);
    \define('WFOCU_KIRKI_VERSION', $version);
    /**
     * Returns an instance of the WFOCUKirki object.
     */
    function wfocukirki()
    {
    }
    function wfocu_rest_update_missing_gateways()
    {
    }
    /**
     * @hooked `shutdown`
     * As we moved to DB version 1.0 with the new table structure.
     * We need to ensure the data for the upsell gross amount get stored in the order meta.
     *
     */
    function wfocu_maybe_update_sessions_on_2_0()
    {
    }
    function wfocu_update_fullwidth_page_template()
    {
    }
    function wfocu_update_general_setting_fields()
    {
    }
    function wfocu_migrate_public_images()
    {
    }
    function wfocu_recurse_copy()
    {
    }
    /** Moving custom at second last and divi at third last place **/
    $custom_grp = $divi_grp = [];
    /**
     * Global Common function to load all the classes
     * @return WFOCU_Core
     */
    function WFOCU_Core()
    {
    }
    /**
     * Schedule single action
     *
     * @param $timestamp
     * @param $hook
     * @param array $args
     * @param string $group
     *
     * @return bool|int
     */
    function bwf_schedule_single_action($timestamp, $hook, $args = array(), $group = '')
    {
    }
    /**
     * Schedule recurring action
     *
     * @param $timestamp
     * @param int $interval_in_seconds - should be min 1 otherwise not recurring
     * @param $hook
     * @param array $args
     * @param string $group
     *
     * @return bool|int
     */
    function bwf_schedule_recurring_action($timestamp, $interval_in_seconds = 1, $hook, $args = array(), $group = '')
    {
    }
    /**
     * Unschedule actions based on given hook or args or group
     *
     * @param $hook
     * @param array $args
     * @param string $group
     *
     * @return bool
     */
    function bwf_unschedule_actions($hook, $args = array(), $group = '')
    {
    }
    /**
     * Check if action is already scheduled based on given hook or args or group
     *
     * @param $hook
     * @param array $args
     * @param string $group
     *
     * @return bool
     */
    function bwf_has_action_scheduled($hook, $args = array(), $group = '')
    {
    }
    /**
     * Get scheduled actions count based on given hook or args or group
     *
     * @param $hook
     * @param array $args
     * @param string $group
     * @param string $status
     * @param string $recurring
     *
     * @return bool|int
     */
    function bwf_scheduled_action_count($hook, $args = array(), $group = '', $status = '0', $recurring = 'all')
    {
    }
    /**
     * This class is a mail loader class for dashboard page , controls and sets up all the necessary actions
     *
     * @author woofunnels
     * @package WooFunnels
     */
    \define('BWF_VERSION', '1.9.49');
    \define('BWF_DB_VERSION', '1.0.2');
    /////
    \define('WF_API_ENDPOINT', 'https://off//account.buildwoofunnels.com/');
    function bwf_get_remote_rest_args($data = '', $method = 'POST')
    {
    }
    function bwf_clean($var)
    {
    }
    function bwf_get_states($country = '', $state = '')
    {
    }
    /**
     * Providing a new customer object
     *
     * @param $contact
     *
     * @return WooFunnels_Customer
     */
    function bwf_get_customer($contact)
    {
    }
    function bwf_create_update_customer($bwf_contact, $order, $order_id, $products, $total)
    {
    }
    function bwf_update_cats_and_tags($product_id, $cat_ids, $tag_ids)
    {
    }
    function bwf_update_customer_refunded($order_id, $refund_amount)
    {
    }
    function bwf_reduce_customer_total_on_cancel($order_id)
    {
    }
    function bwf_create_update_customer_object_login($bwf_contact, $order)
    {
    }
    function bwf_get_order_total($order)
    {
    }
    function bwf_get_order_product_ids($order)
    {
    }
    function bwf_get_order_product_terms($order)
    {
    }
    function bwf_get_array_unique_integers($array1 = [], $array2 = [])
    {
    }
    function bwf_get_contact($wp_id, $email)
    {
    }
    function bwf_create_update_contact($order_id, $products, $total, $force = \false)
    {
    }
    function bwf_update_contact_changes_to_customer($order_id)
    {
    }
    function bwf_update_contact_on_profile_update($wp_id)
    {
    }
    function bwf_update_contact_on_login($user_id)
    {
    }
    function bwf_contact_maybe_update_creation_date($bwf_contact, $order)
    {
    }
    /**
     * Called on login, & checkout order processed
     *
     * @param $bwf_contact WooFunnels_Contact
     * @param $order WC_Order
     *
     * @return mixed
     */
    function bwf_create_update_contact_object($bwf_contact, $order)
    {
    }
    /**
     * @param $order WC_Order
     *
     * @return array|mixed|string
     */
    function bwf_get_timezone_from_order($order)
    {
    }
    /**
     * @param $timezone
     *
     * @return bool
     */
    function bwf_if_valid_timezone($timezone)
    {
    }
    \define('BWF_THRESHOLD_ORDERS', 0);
    //defining it more than 0 means you want the background to run only on "n" orders
    \define('BWF_ORDERS_PER_BATCH', 20);
    /**
     *
     * @return bool|string
     */
    function bwf_create_update_contact_customer()
    {
    }
    function woofunnels_handle_indexed_orders($query, $query_vars)
    {
    }
    function woofunnels_order_query_filter($query, $query_vars)
    {
    }
    function bwf_contacts_v1_0_init_db_setup()
    {
    }
}