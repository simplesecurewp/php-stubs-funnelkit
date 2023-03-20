<?php

namespace {
    /**
     * WC Dependency Checker
     * Checks if WooCommerce is enabled
     */
    class WFACP_WC_Dependencies
    {
        public static function woocommerce_active_check()
        {
        }
        public static function init()
        {
        }
    }
    class WFACP_Role_Capability
    {
        /**
         * @return WFACP_Role_Capability|null
         */
        public static function get_instance()
        {
        }
        /**
         * check if user have funnel capabilities access
         * @param $cap
         * @param $access
         *
         * @return false|string
         */
        public function user_access($cap, $access)
        {
        }
    }
    abstract class WFACP_Common_Helper
    {
        protected static $wfacp_publish_posts = [];
        protected static $get_saved_pages = [];
        protected static $ip_data = [];
        protected static $cart_coupons = \null;
        public static function get_geo_ip()
        {
        }
        public static function allow_svg_mime_type($mimes)
        {
        }
        public static function set_session($key, $data)
        {
        }
        public static function get_session($key)
        {
        }
        public static function unset_session($key)
        {
        }
        public static function default_design_data()
        {
        }
        public static function pc($data)
        {
        }
        public static function is_disabled()
        {
        }
        public static function pr($arr)
        {
        }
        public static function dump($arr)
        {
        }
        public static function export($arr)
        {
        }
        /**
         * Check our customizer page is open or not
         * @return bool
         */
        public static function is_customizer()
        {
        }
        public static function get_checkout_page_version()
        {
        }
        public static function maybe_convert_html_tag($val)
        {
        }
        public static function date_i18n($timestamp = '')
        {
        }
        public static function include_notification_class($get_global_path)
        {
        }
        /**
         * Get default global setting Error Messages
         * @return array
         */
        public static function get_error_message()
        {
        }
        /**
         * Check cart all product is boolean
         * @return bool
         */
        public static function is_cart_is_virtual()
        {
        }
        public static function get_saved_pages()
        {
        }
        public static function get_class_path($class = 'WFACP_Core')
        {
        }
        public static function get_function_path($class = 'WFACP_Core()')
        {
        }
        /**
         * Detect builder page is open
         * @return bool
         */
        public static function is_builder()
        {
        }
        public static function is_theme_builder()
        {
        }
        public static function is_edit_screen_open()
        {
        }
        public static function get_date_format()
        {
        }
        public static function posts_per_page()
        {
        }
        /**
         * Checkout Placeorder button pressed and checout process started
         * @return bool
         */
        public static function is_checkout_process()
        {
        }
        public static function unset_blank_keys_old($data_array)
        {
        }
        public static function unset_blank_keys($array_for_check)
        {
        }
        public static function get_default_you_save_text()
        {
        }
        public static function get_default_additional_information_title()
        {
        }
        public static function default_shipping_placeholder_text()
        {
        }
        public static function delete_option_enable_in_product_switcher()
        {
        }
        /**
         * Disabled finale execution on our discounting
         */
        public static function disable_wcct_pricing()
        {
        }
        /**
         * Restrict discount apply on these our ajax action
         *
         * @param $actions
         *
         * @return array
         */
        public static function wcct_get_restricted_action($actions)
        {
        }
        public static function handling_post_data($post_data)
        {
        }
        public static function merge_page_product_settings($settings)
        {
        }
        public static function wcs_cart_totals_shipping_calculator_html()
        {
        }
        public static function wcs_cart_totals_shipping_html()
        {
        }
        public static function print_custom_field_at_thankyou($order)
        {
        }
        public static function print_custom_field_at_email($order)
        {
        }
        public static function check_wc_validations_billing($address_fields, $type)
        {
        }
        public static function check_wc_validations_shipping($address_fields, $type)
        {
        }
        /** Do not sustain deleted item in remove_cart_item_object
         *
         * @param $cart_item_key
         * @param $cart WC_Cart
         */
        public static function remove_item_deleted_items($cart_item_key, $cart)
        {
        }
        public static function remove_src_set($attr)
        {
        }
        /**
         * Re apply aero checkout product settings when payment failed for subscription and user click on pay now button from  order list at my-account
         *All discount and other setting automatically applied
         *
         * @param $cart_item_data
         *
         * @return mixed
         */
        public static function re_apply_aero_checkout_settings($cart_item_data)
        {
        }
        public static function get_product_image($product_obj, $size = 'woocommerce_thumbnail', $cart_item = [], $cart_item_key = '')
        {
        }
        public static function array_insert_after(array $array, $key, array $new)
        {
        }
        public static function sort_shipping($available_methods)
        {
        }
        /**
         * Short shipping method low to high Cost
         *
         * @param $p1
         * @param $p2
         */
        public static function short_shipping_method($p1, $p2)
        {
        }
        public static function assign_minimum_value_sipping_method($default, $rates, $chosen_method)
        {
        }
        /**
         * @param $cart_item
         * @param $pro WC_Product
         * @param $product_data
         * @param $cart_variation_id String
         *
         * @return array
         */
        public static final function get_cart_item_attributes($cart_item, $pro, $product_data, $cart_variation_id)
        {
        }
        /**
         * Get a shipping methods full label including price.
         *
         * @param WC_Shipping_Rate $method Shipping method rate data.
         *
         * @return string
         */
        public static function wc_cart_totals_shipping_method_cost($method)
        {
        }
        /**
         * Get a shipping methods full label including price.
         *
         * @param WC_Shipping_Rate $method Shipping method rate data.
         *
         * @return string
         */
        public static function shipping_method_label($method)
        {
        }
        public static function get_cart_count($items)
        {
        }
        public static function wc_cart_totals_shipping_html($colspan_attr_1 = '', $colspan_attr_2 = '')
        {
        }
        /**
         * Remove action for without instance method  class found and return object of class
         *
         * @param $hook
         * @param $cls string
         * @param string $function
         *
         * @return |null
         */
        public static function remove_actions($hook, $cls, $function = '')
        {
        }
        public static function add_actions($hook, $function = '', $cls = '', $priority = 10)
        {
        }
        /**
         * @param $cart_item
         * @param $cart_item_key
         * @param $pro WC_Product
         * @param $switcher_settings
         * @param $product_data
         *
         * @return mixed|void
         */
        public static function get_product_switcher_item_title($cart_item, $cart_item_key, $pro, $switcher_settings, $product_data)
        {
        }
        /**
         * @param $cart_item
         * @param $cart_item_key
         * @param $pro WC_Product
         * @param $switcher_settings
         * @param $product_data
         *
         * @return mixed|void
         */
        public static final function get_attribute_html($cart_item, $cart_item_key, $pro, $switcher_settings, $product_data)
        {
        }
        /**
         * @param $you_save_text
         * @param $price_data
         * @param $pro WC_Product
         * @param $product_data
         * @param $cart_item
         * @param $cart_item_key
         *
         * @return array
         */
        public static final function get_product_switcher_item_you_save($you_save_text, $price_data, $pro, $product_data, $cart_item, $cart_item_key)
        {
        }
        public static final function display_not_selected_attribute($product_data, $pro)
        {
        }
        public static function order_summary_html($args = [])
        {
        }
        public static function is_best_value_available()
        {
        }
        public static function is_what_included_available()
        {
        }
        /**
         * Since v2.1
         */
        public static function db_upgrade()
        {
        }
        /**
         * Create files/directories.
         */
        public static function db_dynamic_update_2_3_1($version_key)
        {
        }
        public static function recurse_copy($src, $dst)
        {
        }
        public static function migrate_customizer_urls()
        {
        }
        public static function get_builder_localization()
        {
        }
        public static function auto_responder_options()
        {
        }
        public static function smart_buttons_positions()
        {
        }
        public static function get_html_excluded_field()
        {
        }
        public static function is_mobile_device()
        {
        }
        public static function get_device_mode()
        {
        }
        public static function get_current_user_role()
        {
        }
        /**
         * Save all publish checkout pages into transient
         */
        public static function save_publish_checkout_pages_in_transient($force = \true, $count = '-1')
        {
        }
        /**
         * Return WFACP Post id if user override default checkout from global settings
         */
        public static function get_checkout_page_id()
        {
        }
        public static function is_global_checkout($id = 0)
        {
        }
        public static function make_cart_empty()
        {
        }
        /**
         * Stored Order bump Item in variable when product switcher radio options triggered
         */
        public static function order_bump_restored_start()
        {
        }
        /**
         * Restore a Order bump cart item when product switcher add a product in cart for Radio Option.
         *
         * @param string $cart_item_key Cart item key to restore to the cart.
         *
         * @return bool
         */
        public static function order_bump_restored_end()
        {
        }
        /**
         * Make Proper table layout in Mini cart  for shipping columns
         *
         * @param $spans
         *
         * @return mixed
         */
        public static function order_review_shipping_colspan($spans)
        {
        }
        public static function get_product_switcher_templates()
        {
        }
        public static function woocommerce_locate_template($template)
        {
        }
        public static function track_events_content_id_options()
        {
        }
        public static function track_events_options()
        {
        }
        public static function get_default_global_settings()
        {
        }
        /**
         * @return mixed|void
         */
        public static function all_global_settings_fields()
        {
        }
        /*************** Page layout section start ***************/
        public static function get_page_layout_multistep()
        {
        }
        /**
         * Get page layout data
         *
         * @param $page_id
         *
         * @return array|mixed
         */
        public static function get_page_layout($page_id)
        {
        }
        public static function get_single_address_fields($type = 'billing')
        {
        }
        public static function get_default_steps_fields($active_steps = \false)
        {
        }
        public static function get_advanced_fields()
        {
        }
        public static function get_product_field()
        {
        }
        /*************** Page layout section End ***************/
        /**
         * Get default global setting schema
         * @return array
         */
        /**
         * Return Shortcodes of embed form
         */
        public static function get_short_codes()
        {
        }
        public static function get_shortcode_supported_template()
        {
        }
        /**
         * Check Current Aero page is created by old version
         * @return bool
         */
        public static function page_is_old_version($version = '1.9.3')
        {
        }
        public static function last_item_delete_message($resp, $item_key = '')
        {
        }
        public static function get_address_field_order($id)
        {
        }
        public static function set_multistep_form_layout($aero_id, $force = \false)
        {
        }
        public static function get_template_container_atts($template = '')
        {
        }
        public static function do_not_show_session_expired_message($status)
        {
        }
        public static function enable_cart_deletion()
        {
        }
        public static function show_cart_empty_message()
        {
        }
        public static function cart_is_sustained()
        {
        }
        public static function delete_page_layout($post_id)
        {
        }
        public static function get_template_filter($all_pro = \false)
        {
        }
        public static function get_cart_undo_message()
        {
        }
        public static function remove_item_remove_cart_item($item_key, $cart_key = '')
        {
        }
        /**
         * get global price data after tax calculation based
         *     *
         *
         * @param $cart_item
         * @param int $qty
         *
         * @return float
         */
        public static function get_subscription_cart_item_price($cart_item, $qty = 1)
        {
        }
        static function get_price_sign_up_fee($product, $type = '')
        {
        }
        /**
         * migrate options for general settings tab
         */
        public static function wfacp_update_general_setting_fields()
        {
        }
        public static function import_checkout_settings($post_id, $file_path)
        {
        }
        public static function delete_cart_item_link($allow_delete, $cart_item_key, $cart_item)
        {
        }
        public static function is_front_page()
        {
        }
        public static function get_tax_display_mode()
        {
        }
        public static function check_builder_status($builder = '')
        {
        }
        public static final function get_list_of_attach_actions($hook)
        {
        }
        public static function maybe_insert_log($content)
        {
        }
        /**
         * Check if logs are enabled or not for the conversion API
         * @return bool
         */
        public static function is_enabled_log()
        {
        }
        public static function get_user_email()
        {
        }
        public static function the_content($post)
        {
        }
        /**
         * check old placeholder present
         *
         * @param $placeholder
         *
         * @return Array
         */
        public static function get_old_placeholders()
        {
        }
        public static function live_change_modern_label($field)
        {
        }
        public static function modern_label_migrate($id)
        {
        }
        /**
         * Update Label Meta while template import
         *
         * @param $post_id
         * @param $json_data
         *
         * @return void
         */
        public static function update_label_meta($post_id, $json_data)
        {
        }
        /**
         * Return subscription version if woocommerce payment or Main Subscription
         * @return string
         *
         */
        public static function get_subscription_version()
        {
        }
        /**
         * Get Applied coupon of cart
         * @return array|null
         */
        public static function get_coupons()
        {
        }
        public static function find_matched_item_by_product_key($product_key)
        {
        }
    }
    /**
     * Aero checkout Common Class
     *
     */
    abstract class WFACP_Common extends \WFACP_Common_Helper
    {
        public static $customizer_key_prefix = '';
        public static $customizer_key_data = [];
        public static $post_data = [];
        public static $customizer_fields_default = array();
        public static $exchange_keys = [];
        public static $single_meta_data = [];
        public static function init()
        {
        }
        public static function plugins_loaded()
        {
        }
        /**
         * Get current Page id
         * @return int
         */
        public static function set_id($wfacp_id = 0)
        {
        }
        /** Get current Page id
         * @return int
         */
        public static function get_id()
        {
        }
        /**
         * Setup checkout page when get_refreshed_fragments ajax called
         */
        public static function wc_ajax_get_refreshed_fragments()
        {
        }
        /**
         * Setup checkout page when update_order_review ajax called
         */
        public static function woocommerce_checkout_update_order_review($posted_data)
        {
        }
        /**
         * Setup checkout page when before_checkout_process hooks executed
         */
        public static function woocommerce_before_checkout_process()
        {
        }
        public static function set_data()
        {
        }
        /**
         * GEt Current open step
         * @return string
         */
        public static function get_current_step()
        {
        }
        /**
         * Get title of checkout page
         * @return string
         */
        public static function get_page_name()
        {
        }
        public static function register_post_type()
        {
        }
        /**
         * Get Post_type slug
         * @return string
         */
        public static function get_post_type_slug()
        {
        }
        public static function get_url_rewrite_slug()
        {
        }
        public static function assign_checkout_base()
        {
        }
        public static function registered_page_templates($templates)
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
        public static function array_flatten($array)
        {
        }
        public static function get_default_product_config()
        {
        }
        public static function is_load_admin_assets($screen_type = 'single')
        {
        }
        public static function get_admin_menu()
        {
        }
        public static function get_discount_type_keys()
        {
        }
        /**
         * save product against checkout page id
         *
         * @param $wfacp_id
         * @param $product
         */
        public static function update_page_product($wfacp_id, $product)
        {
        }
        /**Update product settings
         *
         * @param $wfacp_id
         * @param $settings
         */
        public static function update_page_product_setting($wfacp_id, $settings)
        {
        }
        public static function update_page_design($page_id, $data)
        {
        }
        public static function get_fieldset_data($page_id)
        {
        }
        public static function update_page_layout($page_id, $data, $update_switcher = \true)
        {
        }
        /**
         * Get Default products of checkout page
         *
         * @param $wfacp_id
         *
         * @return array|mixed
         */
        public static function update_product_switcher_setting($wfacp_id, $data)
        {
        }
        public static function update_page_custom_fields($wfacp_id, $data = [])
        {
        }
        /**
         * remove unnecessay keys from single product array
         */
        public static function remove_product_keys($product)
        {
        }
        public static function set_customizer_fields_default_vals($data)
        {
        }
        public static function get_page_custom_fields($wfacp_id)
        {
        }
        /**
         * Return Schema and model data for global setting in admin page
         *
         * @param bool $only_model
         *
         * @return array
         */
        public static function global_settings($only_model = \false)
        {
        }
        public static function base_url()
        {
        }
        public static function product_switcher_merge_tags($content, $price_data, $pro = \false, $product_data = [], $cart_item = [], $cart_item_key = '')
        {
        }
        /**
         * This function print our custom hidden field type `hidden`
         *
         * @param $field
         * @param $key
         * @param $args
         * @param $value
         *
         * @return string
         */
        public static function woocommerce_form_field_hidden($field, $key, $args, $value)
        {
        }
        /**
         * This function print our custom radion field type `wfacp_radio`
         *
         * @param $field
         * @param $key
         * @param $args
         * @param $value
         *
         * @return string
         */
        public static function woocommerce_form_field_wfacp_radio($field, $key, $args, $value)
        {
        }
        /**
         * This function print our custom start div tag field type `_wfacp_start_divider`
         * this field for separet some field from other fields
         *
         * @param $field
         * @param $key
         * @param $args
         * @param $value
         *
         * @return string
         */
        public static function woocommerce_form_field_wfacp_start_divider($field, $key, $args, $value)
        {
        }
        /**
         * This function print our custom start div tag field type `wfacp_end_start_divider`
         * this field for separet some field from other fields
         *
         * @param $field
         * @param $key
         * @param $args
         * @param $value
         *
         * @return string
         */
        public static function woocommerce_form_field_wfacp_end_start_divider($field, $key, $args, $value)
        {
        }
        /**
         * This function print our custom product switcher layout
         *
         * @param $field
         * @param $key
         * @param $args
         * @param $value
         *
         * @return string
         */
        public static function woocommerce_form_field_wfacp_product($field_html, $key, $field, $value)
        {
        }
        public static function get_product_global_quantity_bump($return = \false)
        {
        }
        public static function get_product_switcher_data($wfacp_id)
        {
        }
        /**
         * Get all product of checkout page Setting
         *
         * @param $wfacp_id
         *
         * @return array|mixed
         */
        public static function get_page_product_settings($wfacp_id)
        {
        }
        public static function get_post_meta_data($item_id, $meta_key = '', $force = \false)
        {
        }
        public static function parsed_query_results($results)
        {
        }
        /**
         * Get all product of checkout page
         *
         * @param $wfacp_id
         *
         * @return array|mixed
         */
        public static function get_page_product($wfacp_id)
        {
        }
        /**
         * Get checkout page default settings
         *
         * @param $page_id
         *
         * @return array|mixed|string
         */
        public static function get_page_settings($page_id)
        {
        }
        public static function get_checkout_fields($page_id)
        {
        }
        /**
         * Prepare fieldset using this prepration we display section wise field on frontend
         *
         * @param $data
         *
         * @return array
         */
        public static function prepare_fieldset($data)
        {
        }
        public static function get_address_fields($type = 'billing_', $unset = \false)
        {
        }
        public static function get_start_divider_field($unique_key = '')
        {
        }
        public static function get_end_divider_field($unique_key = '')
        {
        }
        public static function get_product_switcher_table($return = \false)
        {
        }
        public static function get_product_switcher_row($product_data, $item_key, $type, $switcher_settings, $return = \false)
        {
        }
        /**
         * Find cart key using product item key
         *
         * @param $product_key
         *
         * @return array|null
         */
        public static function get_cart_item_key($product_key, $from_removed_cart = \false)
        {
        }
        /**
         * Set Product price like regular, sale price on basis of discount
         *
         * @param $pro WC_Product
         * @param $product
         */
        public static function set_product_price($pro, $data)
        {
        }
        /**
         * Calculate product discount using options meta
         * [wfacp_options] => Array
         * (
         * [discount_type] => percentage
         * [discount_amount] => 5
         * [discount_price] => 0
         * [quantity] => 1
         * [id] => 121
         * [parent_product_id] => 117
         * [type] => variation
         * )
         *
         * @param $product_price
         * @param $options
         *
         * @return float;
         */
        public static function calculate_discount($options)
        {
        }
        public static function wc_get_product($product_id, $unique_key)
        {
        }
        /**
         * get global price data after tax calculation based
         *
         * @param $pro
         * @param $cart_item
         * @param int $qty
         *
         * @return array
         */
        public static function get_cart_product_price_data($pro, $cart_item, $qty = 1)
        {
        }
        /**
         * get global price data after tax calculation based
         *
         * @param $pro
         * @param $cart_item
         * @param int $qty
         *
         * @return array
         */
        public static function get_product_price_data($pro, $price_data, $qty = 1)
        {
        }
        public static function get_cart_item_from_removed_items($product_key)
        {
        }
        public static function get_product_switcher_row_description($data, $product_obj, $switcher_settings, $return = \false)
        {
        }
        public static function process_wfacp_html($field, $key, $args, $value)
        {
        }
        public static function get_order_total_fields($return = \false)
        {
        }
        /**
         * @param $product WC_Product_Variable;
         */
        public static function get_default_variation($product)
        {
        }
        /**
         * Find matching product variation
         *
         * @param WC_Product $product
         * @param array $attributes
         *
         * @return int Matching variation ID or 0.
         */
        public static function find_matching_product_variation($product, $attributes)
        {
        }
        /**
         * get first available variation
         *
         * @param $product WC_Product_Variable
         */
        public static function get_first_variation($product, $vars_id = 0)
        {
        }
        /**
         * Check stock of the product
         *
         * @param $product_obj
         * @param $new_qty
         *
         * @return bool
         */
        public static function check_manage_stock($product_obj, $new_qty = 1)
        {
        }
        /**
         * get pixel initiated pixel checkout data
         * @return array
         */
        public static function analytics_checkout_data()
        {
        }
        public static function analytics_add_to_cart_data()
        {
        }
        /**
         * @param $product_obj WC_Product
         * @param $cart_item []
         */
        public static function analytics_item($product_obj, $cart_item)
        {
        }
        public static function get_post_table_data($post_status = 'any', $post_count = 10)
        {
        }
        public static function get_variable_product_type()
        {
        }
        public static function get_variation_product_type()
        {
        }
        public static function get_subscription_product_type()
        {
        }
        /**
         * Copy data from old checkout page to new checkout page
         *
         * @param $post_id
         *
         * @return int|null|WP_Error
         */
        public static function make_duplicate($post_id)
        {
        }
        public static function get_duplicate_data($new_post_id, $post_id)
        {
        }
        public static function wc_dropdown_variation_attribute_options($args = array())
        {
        }
        public static function wfacp_order_custom_field($atts)
        {
        }
        public static function wfob_order_bump_fragments()
        {
        }
        public static function initializeTemplate($wfacp_id)
        {
        }
        /**
         * Get the product row subtotal.
         *
         * Gets the tax etc to avoid rounding issues.
         *
         * When on the checkout (review order), this will get the subtotal based on the customer's tax rate rather than the base rate.
         *
         * @param WC_Product $product Product object.
         * @param int $quantity Quantity being purchased.
         *
         * @return string formatted price
         */
        public static function get_product_subtotal($product, $cart_item, $row = \false)
        {
        }
        public static function remove_menu_support($component)
        {
        }
        public static function get_base_country($key = 'billing_country', $base = '')
        {
        }
        /**
         *
         * @param $pro WC_Subscriptions_Product
         * @param $price_data []
         */
        public static function get_subscription_price($pro, $price_data)
        {
        }
        /**
         * Display proper subscription price
         *
         * @param $_product WC_Product
         * @param $cart_item WC_Cart
         * @param $cart_item_key
         *
         * @return string
         */
        public static function display_subscription_price($_product, $cart_item, $cart_item_key)
        {
        }
        public static function get_signup_fee($price)
        {
        }
        /**
         * @param $pro WC_Product_Subscription
         * @param $product_data
         * @param $cart_item
         * @param $cart_item_key
         *
         * @return string
         */
        public static function subscription_product_string($pro, $product_data, $cart_item, $cart_item_key)
        {
        }
        /**
         * Get coupon display total.
         *
         * @param string|WC_Coupon $coupon Coupon data or code.
         */
        public static function wc_cart_totals_coupon_total($coupon)
        {
        }
        /**
         * Get a coupon label.
         *
         * @param string|WC_Coupon $coupon Coupon data or code.
         * @param bool $echo Echo or return.
         *
         * @return string
         */
        public static function wc_cart_totals_coupon_label($coupon, $echo = \false)
        {
        }
        public static function wfacp_product_switcher_product($temp_data, $product_key)
        {
        }
        public static function get_default_global_page_builder()
        {
        }
        public static function get_default_template_based_on_builder($template_type)
        {
        }
        public static function get_page_design($page_id, $is_admin = \false)
        {
        }
        public static function get_option($field, $all = \false)
        {
        }
        public static function wfacp_get_product_switcher_data($data)
        {
        }
        public static function update_page_settings($page_id, $data)
        {
        }
        public static function process_wfacp_wysiwyg($field, $key, $args, $value)
        {
        }
        public static function woocommerce_form_field_wfacp_dob($field, $key, $args, $value)
        {
        }
        public static function get_fragments_attr()
        {
        }
        public static function initiate_track_and_analytics()
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
        public static function get_supported_permalink_strcutures_to_normalize()
        {
        }
        /**
         * @hooked over bwf_general_settings_default_config
         * Adds default value for the checkout slug
         *
         * @param array $fields existing fields
         *
         * @return array return data after modification
         */
        public static function add_default_value_of_permalink_base($fields)
        {
        }
        public static final function unset_gateways($gateways)
        {
        }
        /**
         * @return array
         */
        public static final function ajax_extra_frontend_data()
        {
        }
        public static final function copy_meta($old_post_id, $new_post_id)
        {
        }
        public static function woofunnels_global_settings($menu)
        {
        }
        public static function add_global_settings_fields($fields)
        {
        }
        public static function bwf_general_settings_fields($fields)
        {
        }
        public static function wfacp_order_total($atts)
        {
        }
        /**
         *
         * @return bool
         */
        public static function is_frontend_request()
        {
        }
        // this function only run when Order created via Google Pay or Apple Pay button
        public static function update_aero_field($order_id)
        {
        }
        /**
         * Create facebook advanced matching data
         * @return mixed|null
         */
        public static function pixel_advanced_matching_data()
        {
        }
        public static function sanitize_advanced_matching_param($value, $key)
        {
        }
        public static function do_wc_ajax()
        {
        }
    }
    /**
     * Customizer Controls Base.
     *
     * Extend this in other controls.
     *
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.12
     */
    /**
     * A base for controls.
     */
    class WFACPKirki_Control_Base extends \WP_Customize_Control
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
         * The wfacpkirki_config we're using for this control
         *
         * @access public
         * @var string
         */
        public $wfacpkirki_config = 'global';
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
         * @return array
         * @since 3.1.0
         */
        public function wfacpkirki_script_dependencies()
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
         * @return array
         * @since 3.0.0
         */
        protected function l10n()
        {
        }
    }
    /**
     * Type radio-image-full
     * Class WFACP_Radio_Image_Full
     */
    class WFACP_Radio_Image_Full extends \WFACPKirki_Control_Base
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
     * Class WFACP_Radio_Icon
     */
    class WFACP_Radio_Icon extends \WFACPKirki_Control_Base
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
    class WFACP_Radio_Image_Text extends \WFACPKirki_Control_Base
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
    class WFACP_Responsive_Font_Text extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacp-responsive-font';
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
    class WFACP_Discount_At_Quick_view
    {
        public function __construct()
        {
        }
        public function prepare_data()
        {
        }
        public function wcct_trigger_get_price($get_price, $product_global)
        {
        }
    }
    /**
     * Mobile Detect Library
     * Motto: "Every business should have a mobile detection script to detect mobile readers"
     *
     * Mobile_Detect is a lightweight PHP class for detecting mobile devices (including tablets).
     * It uses the User-Agent string combined with specific HTTP headers to detect the mobile environment.
     *
     * Homepage: http://mobiledetect.net
     * GitHub: https://github.com/serbanghita/Mobile-Detect
     * README: https://github.com/serbanghita/Mobile-Detect/blob/master/README.md
     * CONTRIBUTING: https://github.com/serbanghita/Mobile-Detect/blob/master/docs/CONTRIBUTING.md
     * KNOWN LIMITATIONS: https://github.com/serbanghita/Mobile-Detect/blob/master/docs/KNOWN_LIMITATIONS.md
     * EXAMPLES: https://github.com/serbanghita/Mobile-Detect/wiki/Code-examples
     *
     * @license https://github.com/serbanghita/Mobile-Detect/blob/master/LICENSE
     * @author  Serban Ghita <serbanghita@gmail.com> (since 2012)
     * @author  Nick Ilyin <nick.ilyin@gmail.com>
     * @author: Victor Stanciu <vic.stanciu@gmail.com> (original author)
     *
     * @version 2.8.41
     *
     * Auto-generated isXXXX() magic methods.
     * php -a examples/dump_magic_methods.php
     *
     * @method bool isiPhone()
     * @method bool isBlackBerry()
     * @method bool isPixel()
     * @method bool isHTC()
     * @method bool isNexus()
     * @method bool isDell()
     * @method bool isMotorola()
     * @method bool isSamsung()
     * @method bool isLG()
     * @method bool isSony()
     * @method bool isAsus()
     * @method bool isXiaomi()
     * @method bool isNokiaLumia()
     * @method bool isMicromax()
     * @method bool isPalm()
     * @method bool isVertu()
     * @method bool isPantech()
     * @method bool isFly()
     * @method bool isWiko()
     * @method bool isiMobile()
     * @method bool isSimValley()
     * @method bool isWolfgang()
     * @method bool isAlcatel()
     * @method bool isNintendo()
     * @method bool isAmoi()
     * @method bool isINQ()
     * @method bool isOnePlus()
     * @method bool isGenericPhone()
     * @method bool isiPad()
     * @method bool isNexusTablet()
     * @method bool isGoogleTablet()
     * @method bool isSamsungTablet()
     * @method bool isKindle()
     * @method bool isSurfaceTablet()
     * @method bool isHPTablet()
     * @method bool isAsusTablet()
     * @method bool isBlackBerryTablet()
     * @method bool isHTCtablet()
     * @method bool isMotorolaTablet()
     * @method bool isNookTablet()
     * @method bool isAcerTablet()
     * @method bool isToshibaTablet()
     * @method bool isLGTablet()
     * @method bool isFujitsuTablet()
     * @method bool isPrestigioTablet()
     * @method bool isLenovoTablet()
     * @method bool isDellTablet()
     * @method bool isYarvikTablet()
     * @method bool isMedionTablet()
     * @method bool isArnovaTablet()
     * @method bool isIntensoTablet()
     * @method bool isIRUTablet()
     * @method bool isMegafonTablet()
     * @method bool isEbodaTablet()
     * @method bool isAllViewTablet()
     * @method bool isArchosTablet()
     * @method bool isAinolTablet()
     * @method bool isNokiaLumiaTablet()
     * @method bool isSonyTablet()
     * @method bool isPhilipsTablet()
     * @method bool isCubeTablet()
     * @method bool isCobyTablet()
     * @method bool isMIDTablet()
     * @method bool isMSITablet()
     * @method bool isSMiTTablet()
     * @method bool isRockChipTablet()
     * @method bool isFlyTablet()
     * @method bool isbqTablet()
     * @method bool isHuaweiTablet()
     * @method bool isNecTablet()
     * @method bool isPantechTablet()
     * @method bool isBronchoTablet()
     * @method bool isVersusTablet()
     * @method bool isZyncTablet()
     * @method bool isPositivoTablet()
     * @method bool isNabiTablet()
     * @method bool isKoboTablet()
     * @method bool isDanewTablet()
     * @method bool isTexetTablet()
     * @method bool isPlaystationTablet()
     * @method bool isTrekstorTablet()
     * @method bool isPyleAudioTablet()
     * @method bool isAdvanTablet()
     * @method bool isDanyTechTablet()
     * @method bool isGalapadTablet()
     * @method bool isMicromaxTablet()
     * @method bool isKarbonnTablet()
     * @method bool isAllFineTablet()
     * @method bool isPROSCANTablet()
     * @method bool isYONESTablet()
     * @method bool isChangJiaTablet()
     * @method bool isGUTablet()
     * @method bool isPointOfViewTablet()
     * @method bool isOvermaxTablet()
     * @method bool isHCLTablet()
     * @method bool isDPSTablet()
     * @method bool isVistureTablet()
     * @method bool isCrestaTablet()
     * @method bool isMediatekTablet()
     * @method bool isConcordeTablet()
     * @method bool isGoCleverTablet()
     * @method bool isModecomTablet()
     * @method bool isVoninoTablet()
     * @method bool isECSTablet()
     * @method bool isStorexTablet()
     * @method bool isVodafoneTablet()
     * @method bool isEssentielBTablet()
     * @method bool isRossMoorTablet()
     * @method bool isiMobileTablet()
     * @method bool isTolinoTablet()
     * @method bool isAudioSonicTablet()
     * @method bool isAMPETablet()
     * @method bool isSkkTablet()
     * @method bool isTecnoTablet()
     * @method bool isJXDTablet()
     * @method bool isiJoyTablet()
     * @method bool isFX2Tablet()
     * @method bool isXoroTablet()
     * @method bool isViewsonicTablet()
     * @method bool isVerizonTablet()
     * @method bool isOdysTablet()
     * @method bool isCaptivaTablet()
     * @method bool isIconbitTablet()
     * @method bool isTeclastTablet()
     * @method bool isOndaTablet()
     * @method bool isJaytechTablet()
     * @method bool isBlaupunktTablet()
     * @method bool isDigmaTablet()
     * @method bool isEvolioTablet()
     * @method bool isLavaTablet()
     * @method bool isAocTablet()
     * @method bool isMpmanTablet()
     * @method bool isCelkonTablet()
     * @method bool isWolderTablet()
     * @method bool isMediacomTablet()
     * @method bool isMiTablet()
     * @method bool isNibiruTablet()
     * @method bool isNexoTablet()
     * @method bool isLeaderTablet()
     * @method bool isUbislateTablet()
     * @method bool isPocketBookTablet()
     * @method bool isKocasoTablet()
     * @method bool isHisenseTablet()
     * @method bool isHudl()
     * @method bool isTelstraTablet()
     * @method bool isGenericTablet()
     * @method bool isAndroidOS()
     * @method bool isBlackBerryOS()
     * @method bool isPalmOS()
     * @method bool isSymbianOS()
     * @method bool isWindowsMobileOS()
     * @method bool isWindowsPhoneOS()
     * @method bool isiOS()
     * @method bool isiPadOS()
     * @method bool isSailfishOS()
     * @method bool isMeeGoOS()
     * @method bool isMaemoOS()
     * @method bool isJavaOS()
     * @method bool iswebOS()
     * @method bool isbadaOS()
     * @method bool isBREWOS()
     * @method bool isChrome()
     * @method bool isDolfin()
     * @method bool isOpera()
     * @method bool isSkyfire()
     * @method bool isEdge()
     * @method bool isIE()
     * @method bool isFirefox()
     * @method bool isBolt()
     * @method bool isTeaShark()
     * @method bool isBlazer()
     * @method bool isSafari()
     * @method bool isWeChat()
     * @method bool isUCBrowser()
     * @method bool isbaiduboxapp()
     * @method bool isbaidubrowser()
     * @method bool isDiigoBrowser()
     * @method bool isMercury()
     * @method bool isObigoBrowser()
     * @method bool isNetFront()
     * @method bool isGenericBrowser()
     * @method bool isPaleMoon()
     * @method bool isBot()
     * @method bool isMobileBot()
     * @method bool isDesktopMode()
     * @method bool isTV()
     * @method bool isWebKit()
     * @method bool isConsole()
     * @method bool isWatch()
     */
    class WFACP_Mobile_Detect
    {
        /**
         * Mobile detection type.
         *
         * @deprecated since version 2.6.9
         */
        const DETECTION_TYPE_MOBILE = 'mobile';
        /**
         * Extended detection type.
         *
         * @deprecated since version 2.6.9
         */
        const DETECTION_TYPE_EXTENDED = 'extended';
        /**
         * A frequently used regular expression to extract version #s.
         *
         * @deprecated since version 2.6.9
         */
        const VER = '([\\w._\\+]+)';
        /**
         * Top-level device.
         */
        const MOBILE_GRADE_A = 'A';
        /**
         * Mid-level device.
         */
        const MOBILE_GRADE_B = 'B';
        /**
         * Low-level device.
         */
        const MOBILE_GRADE_C = 'C';
        /**
         * Stores the version number of the current release.
         */
        const VERSION = '2.8.41';
        /**
         * A type for the version() method indicating a string return value.
         */
        const VERSION_TYPE_STRING = 'text';
        /**
         * A type for the version() method indicating a float return value.
         */
        const VERSION_TYPE_FLOAT = 'float';
        /**
         * A cache for resolved matches
         * @var array
         */
        protected $cache = array();
        /**
         * The User-Agent HTTP header is stored in here.
         * @var string
         */
        protected $userAgent = \null;
        /**
         * HTTP headers in the PHP-flavor. So HTTP_USER_AGENT and SERVER_SOFTWARE.
         * @var array
         */
        protected $httpHeaders = array();
        /**
         * CloudFront headers. E.g. CloudFront-Is-Desktop-Viewer, CloudFront-Is-Mobile-Viewer & CloudFront-Is-Tablet-Viewer.
         * @var array
         */
        protected $cloudfrontHeaders = array();
        /**
         * The matching Regex.
         * This is good for debug.
         * @var string
         */
        protected $matchingRegex = \null;
        /**
         * The matches extracted from the regex expression.
         * This is good for debug.
         *
         * @var string
         */
        protected $matchesArray = \null;
        /**
         * The detection type, using self::DETECTION_TYPE_MOBILE or self::DETECTION_TYPE_EXTENDED.
         *
         * @deprecated since version 2.6.9
         *
         * @var string
         */
        protected $detectionType = self::DETECTION_TYPE_MOBILE;
        /**
         * HTTP headers that trigger the 'isMobile' detection
         * to be true.
         *
         * @var array
         */
        protected static $mobileHeaders = array(
            'HTTP_ACCEPT' => array('matches' => array(
                // Opera Mini; @reference: http://dev.opera.com/articles/view/opera-binary-markup-language/
                'application/x-obml2d',
                // BlackBerry devices.
                'application/vnd.rim.html',
                'text/vnd.wap.wml',
                'application/vnd.wap.xhtml+xml',
            )),
            'HTTP_X_WAP_PROFILE' => \null,
            'HTTP_X_WAP_CLIENTID' => \null,
            'HTTP_WAP_CONNECTION' => \null,
            'HTTP_PROFILE' => \null,
            // Reported by Opera on Nokia devices (eg. C3).
            'HTTP_X_OPERAMINI_PHONE_UA' => \null,
            'HTTP_X_NOKIA_GATEWAY_ID' => \null,
            'HTTP_X_ORANGE_ID' => \null,
            'HTTP_X_VODAFONE_3GPDPCONTEXT' => \null,
            'HTTP_X_HUAWEI_USERID' => \null,
            // Reported by Windows Smartphones.
            'HTTP_UA_OS' => \null,
            // Reported by Verizon, Vodafone proxy system.
            'HTTP_X_MOBILE_GATEWAY' => \null,
            // Seen this on HTC Sensation. SensationXE_Beats_Z715e.
            'HTTP_X_ATT_DEVICEID' => \null,
            // Seen this on a HTC.
            'HTTP_UA_CPU' => array('matches' => array('ARM')),
        );
        /**
         * List of mobile devices (phones).
         *
         * @var array
         */
        protected static $phoneDevices = array(
            'iPhone' => '\\biPhone\\b|\\biPod\\b',
            // |\biTunes
            'BlackBerry' => 'BlackBerry|\\bBB10\\b|rim[0-9]+|\\b(BBA100|BBB100|BBD100|BBE100|BBF100|STH100)\\b-[0-9]+',
            'Pixel' => '; \\bPixel\\b',
            'HTC' => 'HTC|HTC.*(Sensation|Evo|Vision|Explorer|6800|8100|8900|A7272|S510e|C110e|Legend|Desire|T8282)|APX515CKT|Qtek9090|APA9292KT|HD_mini|Sensation.*Z710e|PG86100|Z715e|Desire.*(A8181|HD)|ADR6200|ADR6400L|ADR6425|001HT|Inspire 4G|Android.*\\bEVO\\b|T-Mobile G1|Z520m|Android [0-9.]+; Pixel',
            'Nexus' => 'Nexus One|Nexus S|Galaxy.*Nexus|Android.*Nexus.*Mobile|Nexus 4|Nexus 5|Nexus 5X|Nexus 6',
            // @todo: Is 'Dell Streak' a tablet or a phone? ;)
            'Dell' => 'Dell[;]? (Streak|Aero|Venue|Venue Pro|Flash|Smoke|Mini 3iX)|XCD28|XCD35|\\b001DL\\b|\\b101DL\\b|\\bGS01\\b',
            'Motorola' => 'Motorola|DROIDX|DROID BIONIC|\\bDroid\\b.*Build|Android.*Xoom|HRI39|MOT-|A1260|A1680|A555|A853|A855|A953|A955|A956|Motorola.*ELECTRIFY|Motorola.*i1|i867|i940|MB200|MB300|MB501|MB502|MB508|MB511|MB520|MB525|MB526|MB611|MB612|MB632|MB810|MB855|MB860|MB861|MB865|MB870|ME501|ME502|ME511|ME525|ME600|ME632|ME722|ME811|ME860|ME863|ME865|MT620|MT710|MT716|MT720|MT810|MT870|MT917|Motorola.*TITANIUM|WX435|WX445|XT300|XT301|XT311|XT316|XT317|XT319|XT320|XT390|XT502|XT530|XT531|XT532|XT535|XT603|XT610|XT611|XT615|XT681|XT701|XT702|XT711|XT720|XT800|XT806|XT860|XT862|XT875|XT882|XT883|XT894|XT901|XT907|XT909|XT910|XT912|XT928|XT926|XT915|XT919|XT925|XT1021|\\bMoto E\\b|XT1068|XT1092|XT1052',
            'Samsung' => '\\bSamsung\\b|SM-G950F|SM-G955F|SM-G9250|GT-19300|SGH-I337|BGT-S5230|GT-B2100|GT-B2700|GT-B2710|GT-B3210|GT-B3310|GT-B3410|GT-B3730|GT-B3740|GT-B5510|GT-B5512|GT-B5722|GT-B6520|GT-B7300|GT-B7320|GT-B7330|GT-B7350|GT-B7510|GT-B7722|GT-B7800|GT-C3010|GT-C3011|GT-C3060|GT-C3200|GT-C3212|GT-C3212I|GT-C3262|GT-C3222|GT-C3300|GT-C3300K|GT-C3303|GT-C3303K|GT-C3310|GT-C3322|GT-C3330|GT-C3350|GT-C3500|GT-C3510|GT-C3530|GT-C3630|GT-C3780|GT-C5010|GT-C5212|GT-C6620|GT-C6625|GT-C6712|GT-E1050|GT-E1070|GT-E1075|GT-E1080|GT-E1081|GT-E1085|GT-E1087|GT-E1100|GT-E1107|GT-E1110|GT-E1120|GT-E1125|GT-E1130|GT-E1160|GT-E1170|GT-E1175|GT-E1180|GT-E1182|GT-E1200|GT-E1210|GT-E1225|GT-E1230|GT-E1390|GT-E2100|GT-E2120|GT-E2121|GT-E2152|GT-E2220|GT-E2222|GT-E2230|GT-E2232|GT-E2250|GT-E2370|GT-E2550|GT-E2652|GT-E3210|GT-E3213|GT-I5500|GT-I5503|GT-I5700|GT-I5800|GT-I5801|GT-I6410|GT-I6420|GT-I7110|GT-I7410|GT-I7500|GT-I8000|GT-I8150|GT-I8160|GT-I8190|GT-I8320|GT-I8330|GT-I8350|GT-I8530|GT-I8700|GT-I8703|GT-I8910|GT-I9000|GT-I9001|GT-I9003|GT-I9010|GT-I9020|GT-I9023|GT-I9070|GT-I9082|GT-I9100|GT-I9103|GT-I9220|GT-I9250|GT-I9300|GT-I9305|GT-I9500|GT-I9505|GT-M3510|GT-M5650|GT-M7500|GT-M7600|GT-M7603|GT-M8800|GT-M8910|GT-N7000|GT-S3110|GT-S3310|GT-S3350|GT-S3353|GT-S3370|GT-S3650|GT-S3653|GT-S3770|GT-S3850|GT-S5210|GT-S5220|GT-S5229|GT-S5230|GT-S5233|GT-S5250|GT-S5253|GT-S5260|GT-S5263|GT-S5270|GT-S5300|GT-S5330|GT-S5350|GT-S5360|GT-S5363|GT-S5369|GT-S5380|GT-S5380D|GT-S5560|GT-S5570|GT-S5600|GT-S5603|GT-S5610|GT-S5620|GT-S5660|GT-S5670|GT-S5690|GT-S5750|GT-S5780|GT-S5830|GT-S5839|GT-S6102|GT-S6500|GT-S7070|GT-S7200|GT-S7220|GT-S7230|GT-S7233|GT-S7250|GT-S7500|GT-S7530|GT-S7550|GT-S7562|GT-S7710|GT-S8000|GT-S8003|GT-S8500|GT-S8530|GT-S8600|SCH-A310|SCH-A530|SCH-A570|SCH-A610|SCH-A630|SCH-A650|SCH-A790|SCH-A795|SCH-A850|SCH-A870|SCH-A890|SCH-A930|SCH-A950|SCH-A970|SCH-A990|SCH-I100|SCH-I110|SCH-I400|SCH-I405|SCH-I500|SCH-I510|SCH-I515|SCH-I600|SCH-I730|SCH-I760|SCH-I770|SCH-I830|SCH-I910|SCH-I920|SCH-I959|SCH-LC11|SCH-N150|SCH-N300|SCH-R100|SCH-R300|SCH-R351|SCH-R400|SCH-R410|SCH-T300|SCH-U310|SCH-U320|SCH-U350|SCH-U360|SCH-U365|SCH-U370|SCH-U380|SCH-U410|SCH-U430|SCH-U450|SCH-U460|SCH-U470|SCH-U490|SCH-U540|SCH-U550|SCH-U620|SCH-U640|SCH-U650|SCH-U660|SCH-U700|SCH-U740|SCH-U750|SCH-U810|SCH-U820|SCH-U900|SCH-U940|SCH-U960|SCS-26UC|SGH-A107|SGH-A117|SGH-A127|SGH-A137|SGH-A157|SGH-A167|SGH-A177|SGH-A187|SGH-A197|SGH-A227|SGH-A237|SGH-A257|SGH-A437|SGH-A517|SGH-A597|SGH-A637|SGH-A657|SGH-A667|SGH-A687|SGH-A697|SGH-A707|SGH-A717|SGH-A727|SGH-A737|SGH-A747|SGH-A767|SGH-A777|SGH-A797|SGH-A817|SGH-A827|SGH-A837|SGH-A847|SGH-A867|SGH-A877|SGH-A887|SGH-A897|SGH-A927|SGH-B100|SGH-B130|SGH-B200|SGH-B220|SGH-C100|SGH-C110|SGH-C120|SGH-C130|SGH-C140|SGH-C160|SGH-C170|SGH-C180|SGH-C200|SGH-C207|SGH-C210|SGH-C225|SGH-C230|SGH-C417|SGH-C450|SGH-D307|SGH-D347|SGH-D357|SGH-D407|SGH-D415|SGH-D780|SGH-D807|SGH-D980|SGH-E105|SGH-E200|SGH-E315|SGH-E316|SGH-E317|SGH-E335|SGH-E590|SGH-E635|SGH-E715|SGH-E890|SGH-F300|SGH-F480|SGH-I200|SGH-I300|SGH-I320|SGH-I550|SGH-I577|SGH-I600|SGH-I607|SGH-I617|SGH-I627|SGH-I637|SGH-I677|SGH-I700|SGH-I717|SGH-I727|SGH-i747M|SGH-I777|SGH-I780|SGH-I827|SGH-I847|SGH-I857|SGH-I896|SGH-I897|SGH-I900|SGH-I907|SGH-I917|SGH-I927|SGH-I937|SGH-I997|SGH-J150|SGH-J200|SGH-L170|SGH-L700|SGH-M110|SGH-M150|SGH-M200|SGH-N105|SGH-N500|SGH-N600|SGH-N620|SGH-N625|SGH-N700|SGH-N710|SGH-P107|SGH-P207|SGH-P300|SGH-P310|SGH-P520|SGH-P735|SGH-P777|SGH-Q105|SGH-R210|SGH-R220|SGH-R225|SGH-S105|SGH-S307|SGH-T109|SGH-T119|SGH-T139|SGH-T209|SGH-T219|SGH-T229|SGH-T239|SGH-T249|SGH-T259|SGH-T309|SGH-T319|SGH-T329|SGH-T339|SGH-T349|SGH-T359|SGH-T369|SGH-T379|SGH-T409|SGH-T429|SGH-T439|SGH-T459|SGH-T469|SGH-T479|SGH-T499|SGH-T509|SGH-T519|SGH-T539|SGH-T559|SGH-T589|SGH-T609|SGH-T619|SGH-T629|SGH-T639|SGH-T659|SGH-T669|SGH-T679|SGH-T709|SGH-T719|SGH-T729|SGH-T739|SGH-T746|SGH-T749|SGH-T759|SGH-T769|SGH-T809|SGH-T819|SGH-T839|SGH-T919|SGH-T929|SGH-T939|SGH-T959|SGH-T989|SGH-U100|SGH-U200|SGH-U800|SGH-V205|SGH-V206|SGH-X100|SGH-X105|SGH-X120|SGH-X140|SGH-X426|SGH-X427|SGH-X475|SGH-X495|SGH-X497|SGH-X507|SGH-X600|SGH-X610|SGH-X620|SGH-X630|SGH-X700|SGH-X820|SGH-X890|SGH-Z130|SGH-Z150|SGH-Z170|SGH-ZX10|SGH-ZX20|SHW-M110|SPH-A120|SPH-A400|SPH-A420|SPH-A460|SPH-A500|SPH-A560|SPH-A600|SPH-A620|SPH-A660|SPH-A700|SPH-A740|SPH-A760|SPH-A790|SPH-A800|SPH-A820|SPH-A840|SPH-A880|SPH-A900|SPH-A940|SPH-A960|SPH-D600|SPH-D700|SPH-D710|SPH-D720|SPH-I300|SPH-I325|SPH-I330|SPH-I350|SPH-I500|SPH-I600|SPH-I700|SPH-L700|SPH-M100|SPH-M220|SPH-M240|SPH-M300|SPH-M305|SPH-M320|SPH-M330|SPH-M350|SPH-M360|SPH-M370|SPH-M380|SPH-M510|SPH-M540|SPH-M550|SPH-M560|SPH-M570|SPH-M580|SPH-M610|SPH-M620|SPH-M630|SPH-M800|SPH-M810|SPH-M850|SPH-M900|SPH-M910|SPH-M920|SPH-M930|SPH-N100|SPH-N200|SPH-N240|SPH-N300|SPH-N400|SPH-Z400|SWC-E100|SCH-i909|GT-N7100|GT-N7105|SCH-I535|SM-N900A|SGH-I317|SGH-T999L|GT-S5360B|GT-I8262|GT-S6802|GT-S6312|GT-S6310|GT-S5312|GT-S5310|GT-I9105|GT-I8510|GT-S6790N|SM-G7105|SM-N9005|GT-S5301|GT-I9295|GT-I9195|SM-C101|GT-S7392|GT-S7560|GT-B7610|GT-I5510|GT-S7582|GT-S7530E|GT-I8750|SM-G9006V|SM-G9008V|SM-G9009D|SM-G900A|SM-G900D|SM-G900F|SM-G900H|SM-G900I|SM-G900J|SM-G900K|SM-G900L|SM-G900M|SM-G900P|SM-G900R4|SM-G900S|SM-G900T|SM-G900V|SM-G900W8|SHV-E160K|SCH-P709|SCH-P729|SM-T2558|GT-I9205|SM-G9350|SM-J120F|SM-G920F|SM-G920V|SM-G930F|SM-N910C|SM-A310F|GT-I9190|SM-J500FN|SM-G903F|SM-J330F|SM-G610F|SM-G981B|SM-G892A|SM-A530F|SM-G988N|SM-G781B|SM-A805N|SM-G965F',
            'LG' => '\\bLG\\b;|LG[- ]?(C800|C900|E400|E610|E900|E-900|F160|F180K|F180L|F180S|730|855|L160|LS740|LS840|LS970|LU6200|MS690|MS695|MS770|MS840|MS870|MS910|P500|P700|P705|VM696|AS680|AS695|AX840|C729|E970|GS505|272|C395|E739BK|E960|L55C|L75C|LS696|LS860|P769BK|P350|P500|P509|P870|UN272|US730|VS840|VS950|LN272|LN510|LS670|LS855|LW690|MN270|MN510|P509|P769|P930|UN200|UN270|UN510|UN610|US670|US740|US760|UX265|UX840|VN271|VN530|VS660|VS700|VS740|VS750|VS910|VS920|VS930|VX9200|VX11000|AX840A|LW770|P506|P925|P999|E612|D955|D802|MS323|M257)|LM-G710',
            'Sony' => 'SonyST|SonyLT|SonyEricsson|SonyEricssonLT15iv|LT18i|E10i|LT28h|LT26w|SonyEricssonMT27i|C5303|C6902|C6903|C6906|C6943|D2533|SOV34|601SO|F8332',
            'Asus' => 'Asus.*Galaxy|PadFone.*Mobile|ASUS_Z01QD|ASUS_X00TD',
            'Xiaomi' => '^(?!.*\\bx11\\b).*xiaomi.*$|POCOPHONE F1|\\bMI\\b 8|\\bMi\\b 10|Redmi Note 9S|Redmi 5A|Redmi Note 5A Prime|Redmi Note 7 Pro|N2G47H|M2001J2G|M2001J2I|M1805E10A|M2004J11G|M1902F1G|M2002J9G|M2004J19G|M2003J6A1G|M2012K11C|M2007J1SC',
            'NokiaLumia' => 'Lumia [0-9]{3,4}',
            // http://www.micromaxinfo.com/mobiles/smartphones
            // Added because the codes might conflict with Acer Tablets.
            'Micromax' => 'Micromax.*\\b(A210|A92|A88|A72|A111|A110Q|A115|A116|A110|A90S|A26|A51|A35|A54|A25|A27|A89|A68|A65|A57|A90)\\b',
            // @todo Complete the regex.
            'Palm' => 'PalmSource|Palm',
            // avantgo|blazer|elaine|hiptop|plucker|xiino ;
            'Vertu' => 'Vertu|Vertu.*Ltd|Vertu.*Ascent|Vertu.*Ayxta|Vertu.*Constellation(F|Quest)?|Vertu.*Monika|Vertu.*Signature',
            // Just for fun ;)
            // http://www.pantech.co.kr/en/prod/prodList.do?gbrand=VEGA (PANTECH)
            // Most of the VEGA devices are legacy. PANTECH seem to be newer devices based on Android.
            'Pantech' => 'PANTECH|IM-A850S|IM-A840S|IM-A830L|IM-A830K|IM-A830S|IM-A820L|IM-A810K|IM-A810S|IM-A800S|IM-T100K|IM-A725L|IM-A780L|IM-A775C|IM-A770K|IM-A760S|IM-A750K|IM-A740S|IM-A730S|IM-A720L|IM-A710K|IM-A690L|IM-A690S|IM-A650S|IM-A630K|IM-A600S|VEGA PTL21|PT003|P8010|ADR910L|P6030|P6020|P9070|P4100|P9060|P5000|CDM8992|TXT8045|ADR8995|IS11PT|P2030|P6010|P8000|PT002|IS06|CDM8999|P9050|PT001|TXT8040|P2020|P9020|P2000|P7040|P7000|C790',
            // http://www.fly-phone.com/devices/smartphones/ ; Included only smartphones.
            'Fly' => 'IQ230|IQ444|IQ450|IQ440|IQ442|IQ441|IQ245|IQ256|IQ236|IQ255|IQ235|IQ245|IQ275|IQ240|IQ285|IQ280|IQ270|IQ260|IQ250',
            // http://fr.wikomobile.com
            'Wiko' => 'KITE 4G|HIGHWAY|GETAWAY|STAIRWAY|DARKSIDE|DARKFULL|DARKNIGHT|DARKMOON|SLIDE|WAX 4G|RAINBOW|BLOOM|SUNSET|GOA(?!nna)|LENNY|BARRY|IGGY|OZZY|CINK FIVE|CINK PEAX|CINK PEAX 2|CINK SLIM|CINK SLIM 2|CINK +|CINK KING|CINK PEAX|CINK SLIM|SUBLIM',
            'iMobile' => 'i-mobile (IQ|i-STYLE|idea|ZAA|Hitz)',
            // Added simvalley mobile just for fun. They have some interesting devices.
            // http://www.simvalley.fr/telephonie---gps-_22_telephonie-mobile_telephones_.html
            'SimValley' => '\\b(SP-80|XT-930|SX-340|XT-930|SX-310|SP-360|SP60|SPT-800|SP-120|SPT-800|SP-140|SPX-5|SPX-8|SP-100|SPX-8|SPX-12)\\b',
            // Wolfgang - a brand that is sold by Aldi supermarkets.
            // http://www.wolfgangmobile.com/
            'Wolfgang' => 'AT-B24D|AT-AS50HD|AT-AS40W|AT-AS55HD|AT-AS45q2|AT-B26D|AT-AS50Q',
            'Alcatel' => 'Alcatel',
            'Nintendo' => 'Nintendo (3DS|Switch)',
            // http://en.wikipedia.org/wiki/Amoi
            'Amoi' => 'Amoi',
            // http://en.wikipedia.org/wiki/INQ
            'INQ' => 'INQ',
            'OnePlus' => 'ONEPLUS',
            // @Tapatalk is a mobile app; http://support.tapatalk.com/threads/smf-2-0-2-os-and-browser-detection-plugin-and-tapatalk.15565/#post-79039
            'GenericPhone' => 'Tapatalk|PDA;|SAGEM|\\bmmp\\b|pocket|\\bpsp\\b|symbian|Smartphone|smartfon|treo|up.browser|up.link|vodafone|\\bwap\\b|nokia|Series40|Series60|S60|SonyEricsson|N900|MAUI.*WAP.*Browser',
        );
        /**
         * List of tablet devices.
         *
         * @var array
         */
        protected static $tabletDevices = array(
            // @todo: check for mobile friendly emails topic.
            'iPad' => 'iPad|iPad.*Mobile',
            // Removed |^.*Android.*Nexus(?!(?:Mobile).)*$
            // @see #442
            // @todo Merge NexusTablet into GoogleTablet.
            'NexusTablet' => 'Android.*Nexus[\\s]+(7|9|10)',
            // https://en.wikipedia.org/wiki/Pixel_C
            'GoogleTablet' => 'Android.*Pixel C',
            'SamsungTablet' => 'SAMSUNG.*Tablet|Galaxy.*Tab|SC-01C|GT-P1000|GT-P1003|GT-P1010|GT-P3105|GT-P6210|GT-P6800|GT-P6810|GT-P7100|GT-P7300|GT-P7310|GT-P7500|GT-P7510|SCH-I800|SCH-I815|SCH-I905|SGH-I957|SGH-I987|SGH-T849|SGH-T859|SGH-T869|SPH-P100|GT-P3100|GT-P3108|GT-P3110|GT-P5100|GT-P5110|GT-P6200|GT-P7320|GT-P7511|GT-N8000|GT-P8510|SGH-I497|SPH-P500|SGH-T779|SCH-I705|SCH-I915|GT-N8013|GT-P3113|GT-P5113|GT-P8110|GT-N8010|GT-N8005|GT-N8020|GT-P1013|GT-P6201|GT-P7501|GT-N5100|GT-N5105|GT-N5110|SHV-E140K|SHV-E140L|SHV-E140S|SHV-E150S|SHV-E230K|SHV-E230L|SHV-E230S|SHW-M180K|SHW-M180L|SHW-M180S|SHW-M180W|SHW-M300W|SHW-M305W|SHW-M380K|SHW-M380S|SHW-M380W|SHW-M430W|SHW-M480K|SHW-M480S|SHW-M480W|SHW-M485W|SHW-M486W|SHW-M500W|GT-I9228|SCH-P739|SCH-I925|GT-I9200|GT-P5200|GT-P5210|GT-P5210X|SM-T311|SM-T310|SM-T310X|SM-T210|SM-T210R|SM-T211|SM-P600|SM-P601|SM-P605|SM-P900|SM-P901|SM-T217|SM-T217A|SM-T217S|SM-P6000|SM-T3100|SGH-I467|XE500|SM-T110|GT-P5220|GT-I9200X|GT-N5110X|GT-N5120|SM-P905|SM-T111|SM-T2105|SM-T315|SM-T320|SM-T320X|SM-T321|SM-T520|SM-T525|SM-T530NU|SM-T230NU|SM-T330NU|SM-T900|XE500T1C|SM-P605V|SM-P905V|SM-T337V|SM-T537V|SM-T707V|SM-T807V|SM-P600X|SM-P900X|SM-T210X|SM-T230|SM-T230X|SM-T325|GT-P7503|SM-T531|SM-T330|SM-T530|SM-T705|SM-T705C|SM-T535|SM-T331|SM-T800|SM-T700|SM-T537|SM-T807|SM-P907A|SM-T337A|SM-T537A|SM-T707A|SM-T807A|SM-T237|SM-T807P|SM-P607T|SM-T217T|SM-T337T|SM-T807T|SM-T116NQ|SM-T116BU|SM-P550|SM-T350|SM-T550|SM-T9000|SM-P9000|SM-T705Y|SM-T805|GT-P3113|SM-T710|SM-T810|SM-T815|SM-T360|SM-T533|SM-T113|SM-T335|SM-T715|SM-T560|SM-T670|SM-T677|SM-T377|SM-T567|SM-T357T|SM-T555|SM-T561|SM-T713|SM-T719|SM-T813|SM-T819|SM-T580|SM-T355Y?|SM-T280|SM-T817A|SM-T820|SM-W700|SM-P580|SM-T587|SM-P350|SM-P555M|SM-P355M|SM-T113NU|SM-T815Y|SM-T585|SM-T285|SM-T825|SM-W708|SM-T835|SM-T830|SM-T837V|SM-T720|SM-T510|SM-T387V|SM-P610|SM-T290|SM-T515|SM-T590|SM-T595|SM-T725|SM-T817P|SM-P585N0|SM-T395|SM-T295|SM-T865|SM-P610N|SM-P615|SM-T970|SM-T380|SM-T5950|SM-T905|SM-T231|SM-T500|SM-T860|SM-T536|SM-T837A|SM-X200|SM-T220|SM-T870|SM-X906C',
            // SCH-P709|SCH-P729|SM-T2558|GT-I9205 - Samsung Mega - treat them like a regular phone.
            // http://docs.aws.amazon.com/silk/latest/developerguide/user-agent.html
            'Kindle' => 'Kindle|Silk.*Accelerated|Android.*\\b(KFOT|KFTT|KFJWI|KFJWA|KFOTE|KFSOWI|KFTHWI|KFTHWA|KFAPWI|KFAPWA|WFJWAE|KFSAWA|KFSAWI|KFASWI|KFARWI|KFFOWI|KFGIWI|KFMEWI)\\b|Android.*Silk/[0-9.]+ like Chrome/[0-9.]+ (?!Mobile)',
            // Only the Surface tablets with Windows RT are considered mobile.
            // http://msdn.microsoft.com/en-us/library/ie/hh920767(v=vs.85).aspx
            'SurfaceTablet' => 'Windows NT [0-9.]+; ARM;.*(Tablet|ARMBJS)',
            // http://shopping1.hp.com/is-bin/INTERSHOP.enfinity/WFS/WW-USSMBPublicStore-Site/en_US/-/USD/ViewStandardCatalog-Browse?CatalogCategoryID=JfIQ7EN5lqMAAAEyDcJUDwMT
            'HPTablet' => 'HP Slate (7|8|10)|HP ElitePad 900|hp-tablet|EliteBook.*Touch|HP 8|Slate 21|HP SlateBook 10',
            // Watch out for PadFone, see #132.
            // http://www.asus.com/de/Tablets_Mobile/Memo_Pad_Products/
            'AsusTablet' => '^.*PadFone((?!Mobile).)*$|Transformer|TF101|TF101G|TF300T|TF300TG|TF300TL|TF700T|TF700KL|TF701T|TF810C|ME171|ME301T|ME302C|ME371MG|ME370T|ME372MG|ME172V|ME173X|ME400C|Slider SL101|\\bK00F\\b|\\bK00C\\b|\\bK00E\\b|\\bK00L\\b|TX201LA|ME176C|ME102A|\\bM80TA\\b|ME372CL|ME560CG|ME372CG|ME302KL| K01A | K010 | K011 | K017 | K01E |ME572C|ME103K|ME170C|ME171C|\\bME70C\\b|ME581C|ME581CL|ME8510C|ME181C|P01Y|PO1MA|P01Z|\\bP027\\b|\\bP024\\b|\\bP00C\\b',
            'BlackBerryTablet' => 'PlayBook|RIM Tablet',
            'HTCtablet' => 'HTC_Flyer_P512|HTC Flyer|HTC Jetstream|HTC-P715a|HTC EVO View 4G|PG41200|PG09410',
            'MotorolaTablet' => 'xoom|sholest|MZ615|MZ605|MZ505|MZ601|MZ602|MZ603|MZ604|MZ606|MZ607|MZ608|MZ609|MZ615|MZ616|MZ617',
            'NookTablet' => 'Android.*Nook|NookColor|nook browser|BNRV200|BNRV200A|BNTV250|BNTV250A|BNTV400|BNTV600|LogicPD Zoom2',
            // http://www.acer.ro/ac/ro/RO/content/drivers
            // http://www.packardbell.co.uk/pb/en/GB/content/download (Packard Bell is part of Acer)
            // http://us.acer.com/ac/en/US/content/group/tablets
            // http://www.acer.de/ac/de/DE/content/models/tablets/
            // Can conflict with Micromax and Motorola phones codes.
            'AcerTablet' => 'Android.*; \\b(A100|A101|A110|A200|A210|A211|A500|A501|A510|A511|A700|A701|W500|W500P|W501|W501P|W510|W511|W700|G100|G100W|B1-A71|B1-710|B1-711|A1-810|A1-811|A1-830)\\b|W3-810|\\bA3-A10\\b|\\bA3-A11\\b|\\bA3-A20\\b|\\bA3-A30|A3-A40',
            // http://eu.computers.toshiba-europe.com/innovation/family/Tablets/1098744/banner_id/tablet_footerlink/
            // http://us.toshiba.com/tablets/tablet-finder
            // http://www.toshiba.co.jp/regza/tablet/
            'ToshibaTablet' => 'Android.*(AT100|AT105|AT200|AT205|AT270|AT275|AT300|AT305|AT1S5|AT500|AT570|AT700|AT830)|TOSHIBA.*FOLIO',
            // http://www.nttdocomo.co.jp/english/service/developer/smart_phone/technical_info/spec/index.html
            // http://www.lg.com/us/tablets
            'LGTablet' => '\\bL-06C|LG-V909|LG-V900|LG-V700|LG-V510|LG-V500|LG-V410|LG-V400|LG-VK810\\b',
            'FujitsuTablet' => 'Android.*\\b(F-01D|F-02F|F-05E|F-10D|M532|Q572)\\b',
            // Prestigio Tablets http://www.prestigio.com/support
            'PrestigioTablet' => 'PMP3170B|PMP3270B|PMP3470B|PMP7170B|PMP3370B|PMP3570C|PMP5870C|PMP3670B|PMP5570C|PMP5770D|PMP3970B|PMP3870C|PMP5580C|PMP5880D|PMP5780D|PMP5588C|PMP7280C|PMP7280C3G|PMP7280|PMP7880D|PMP5597D|PMP5597|PMP7100D|PER3464|PER3274|PER3574|PER3884|PER5274|PER5474|PMP5097CPRO|PMP5097|PMP7380D|PMP5297C|PMP5297C_QUAD|PMP812E|PMP812E3G|PMP812F|PMP810E|PMP880TD|PMT3017|PMT3037|PMT3047|PMT3057|PMT7008|PMT5887|PMT5001|PMT5002',
            // http://support.lenovo.com/en_GB/downloads/default.page?#
            'LenovoTablet' => 'Lenovo TAB|Idea(Tab|Pad)( A1|A10| K1|)|ThinkPad([ ]+)?Tablet|YT3-850M|YT3-X90L|YT3-X90F|YT3-X90X|Lenovo.*(S2109|S2110|S5000|S6000|K3011|A3000|A3500|A1000|A2107|A2109|A1107|A5500|A7600|B6000|B8000|B8080)(-|)(FL|F|HV|H|)|TB-X103F|TB-X304X|TB-X304F|TB-X304L|TB-X505F|TB-X505L|TB-X505X|TB-X605F|TB-X605L|TB-8703F|TB-8703X|TB-8703N|TB-8704N|TB-8704F|TB-8704X|TB-8704V|TB-7304F|TB-7304I|TB-7304X|Tab2A7-10F|Tab2A7-20F|TB2-X30L|YT3-X50L|YT3-X50F|YT3-X50M|YT-X705F|YT-X703F|YT-X703L|YT-X705L|YT-X705X|TB2-X30F|TB2-X30L|TB2-X30M|A2107A-F|A2107A-H|TB3-730F|TB3-730M|TB3-730X|TB-7504F|TB-7504X|TB-X704F|TB-X104F|TB3-X70F|TB-X705F|TB-8504F|TB3-X70L|TB3-710F|TB-X704L|TB-J606F|TB-X606F|TB-X306X|YT-J706X',
            // http://www.dell.com/support/home/us/en/04/Products/tab_mob/tablets
            'DellTablet' => 'Venue 11|Venue 8|Venue 7|Dell Streak 10|Dell Streak 7',
            'XiaomiTablet' => '21051182G',
            // http://www.yarvik.com/en/matrix/tablets/
            'YarvikTablet' => 'Android.*\\b(TAB210|TAB211|TAB224|TAB250|TAB260|TAB264|TAB310|TAB360|TAB364|TAB410|TAB411|TAB420|TAB424|TAB450|TAB460|TAB461|TAB464|TAB465|TAB467|TAB468|TAB07-100|TAB07-101|TAB07-150|TAB07-151|TAB07-152|TAB07-200|TAB07-201-3G|TAB07-210|TAB07-211|TAB07-212|TAB07-214|TAB07-220|TAB07-400|TAB07-485|TAB08-150|TAB08-200|TAB08-201-3G|TAB08-201-30|TAB09-100|TAB09-211|TAB09-410|TAB10-150|TAB10-201|TAB10-211|TAB10-400|TAB10-410|TAB13-201|TAB274EUK|TAB275EUK|TAB374EUK|TAB462EUK|TAB474EUK|TAB9-200)\\b',
            'MedionTablet' => 'Android.*\\bOYO\\b|LIFE.*(P9212|P9514|P9516|S9512)|LIFETAB',
            'ArnovaTablet' => '97G4|AN10G2|AN7bG3|AN7fG3|AN8G3|AN8cG3|AN7G3|AN9G3|AN7dG3|AN7dG3ST|AN7dG3ChildPad|AN10bG3|AN10bG3DT|AN9G2',
            // http://www.intenso.de/kategorie_en.php?kategorie=33
            // @todo: http://www.nbhkdz.com/read/b8e64202f92a2df129126bff.html - investigate
            'IntensoTablet' => 'INM8002KP|INM1010FP|INM805ND|Intenso Tab|TAB1004',
            // IRU.ru Tablets http://www.iru.ru/catalog/soho/planetable/
            'IRUTablet' => 'M702pro',
            'MegafonTablet' => 'MegaFon V9|\\bZTE V9\\b|Android.*\\bMT7A\\b',
            // http://www.e-boda.ro/tablete-pc.html
            'EbodaTablet' => 'E-Boda (Supreme|Impresspeed|Izzycomm|Essential)',
            // http://www.allview.ro/produse/droseries/lista-tablete-pc/
            'AllViewTablet' => 'Allview.*(Viva|Alldro|City|Speed|All TV|Frenzy|Quasar|Shine|TX1|AX1|AX2)',
            // http://wiki.archosfans.com/index.php?title=Main_Page
            // @note Rewrite the regex format after we add more UAs.
            'ArchosTablet' => '\\b(101G9|80G9|A101IT)\\b|Qilive 97R|Archos5|\\bARCHOS (70|79|80|90|97|101|FAMILYPAD|)(b|c|)(G10| Cobalt| TITANIUM(HD|)| Xenon| Neon|XSK| 2| XS 2| PLATINUM| CARBON|GAMEPAD)\\b',
            // http://www.ainol.com/plugin.php?identifier=ainol&module=product
            'AinolTablet' => 'NOVO7|NOVO8|NOVO10|Novo7Aurora|Novo7Basic|NOVO7PALADIN|novo9-Spark',
            'NokiaLumiaTablet' => 'Lumia 2520',
            // @todo: inspect http://esupport.sony.com/US/p/select-system.pl?DIRECTOR=DRIVER
            // Readers http://www.atsuhiro-me.net/ebook/sony-reader/sony-reader-web-browser
            // http://www.sony.jp/support/tablet/
            'SonyTablet' => 'Sony.*Tablet|Xperia Tablet|Sony Tablet S|SO-03E|SGPT12|SGPT13|SGPT114|SGPT121|SGPT122|SGPT123|SGPT111|SGPT112|SGPT113|SGPT131|SGPT132|SGPT133|SGPT211|SGPT212|SGPT213|SGP311|SGP312|SGP321|EBRD1101|EBRD1102|EBRD1201|SGP351|SGP341|SGP511|SGP512|SGP521|SGP541|SGP551|SGP621|SGP641|SGP612|SOT31|SGP771|SGP611|SGP612|SGP712',
            // http://www.support.philips.com/support/catalog/worldproducts.jsp?userLanguage=en&userCountry=cn&categoryid=3G_LTE_TABLET_SU_CN_CARE&title=3G%20tablets%20/%20LTE%20range&_dyncharset=UTF-8
            'PhilipsTablet' => '\\b(PI2010|PI3000|PI3100|PI3105|PI3110|PI3205|PI3210|PI3900|PI4010|PI7000|PI7100)\\b',
            // db + http://www.cube-tablet.com/buy-products.html
            'CubeTablet' => 'Android.*(K8GT|U9GT|U10GT|U16GT|U17GT|U18GT|U19GT|U20GT|U23GT|U30GT)|CUBE U8GT',
            // http://www.cobyusa.com/?p=pcat&pcat_id=3001
            'CobyTablet' => 'MID1042|MID1045|MID1125|MID1126|MID7012|MID7014|MID7015|MID7034|MID7035|MID7036|MID7042|MID7048|MID7127|MID8042|MID8048|MID8127|MID9042|MID9740|MID9742|MID7022|MID7010',
            // http://www.match.net.cn/products.asp
            'MIDTablet' => 'M9701|M9000|M9100|M806|M1052|M806|T703|MID701|MID713|MID710|MID727|MID760|MID830|MID728|MID933|MID125|MID810|MID732|MID120|MID930|MID800|MID731|MID900|MID100|MID820|MID735|MID980|MID130|MID833|MID737|MID960|MID135|MID860|MID736|MID140|MID930|MID835|MID733|MID4X10',
            // http://www.msi.com/support
            // @todo Research the Windows Tablets.
            'MSITablet' => 'MSI \\b(Primo 73K|Primo 73L|Primo 81L|Primo 77|Primo 93|Primo 75|Primo 76|Primo 73|Primo 81|Primo 91|Primo 90|Enjoy 71|Enjoy 7|Enjoy 10)\\b',
            // @todo http://www.kyoceramobile.com/support/drivers/
            //    'KyoceraTablet' => null,
            // @todo http://intexuae.com/index.php/category/mobile-devices/tablets-products/
            //    'IntextTablet' => null,
            // http://pdadb.net/index.php?m=pdalist&list=SMiT (NoName Chinese Tablets)
            // http://www.imp3.net/14/show.php?itemid=20454
            'SMiTTablet' => 'Android.*(\\bMID\\b|MID-560|MTV-T1200|MTV-PND531|MTV-P1101|MTV-PND530)',
            // http://www.rock-chips.com/index.php?do=prod&pid=2
            'RockChipTablet' => 'Android.*(RK2818|RK2808A|RK2918|RK3066)|RK2738|RK2808A',
            // http://www.fly-phone.com/devices/tablets/ ; http://www.fly-phone.com/service/
            'FlyTablet' => 'IQ310|Fly Vision',
            // http://www.bqreaders.com/gb/tablets-prices-sale.html
            'bqTablet' => 'Android.*(bq)?.*\\b(Elcano|Curie|Edison|Maxwell|Kepler|Pascal|Tesla|Hypatia|Platon|Newton|Livingstone|Cervantes|Avant|Aquaris ([E|M]10|M8))\\b|Maxwell.*Lite|Maxwell.*Plus',
            // http://www.huaweidevice.com/worldwide/productFamily.do?method=index&directoryId=5011&treeId=3290
            // http://www.huaweidevice.com/worldwide/downloadCenter.do?method=index&directoryId=3372&treeId=0&tb=1&type=software (including legacy tablets)
            'HuaweiTablet' => 'MediaPad|MediaPad 7 Youth|IDEOS S7|S7-201c|S7-202u|S7-101|S7-103|S7-104|S7-105|S7-106|S7-201|S7-Slim|M2-A01L|BAH-L09|BAH-W09|AGS-L09|CMR-AL19|KOB2-L09|BG2-U01|BG2-W09|BG2-U03',
            // Nec or Medias Tab
            'NecTablet' => '\\bN-06D|\\bN-08D',
            // Pantech Tablets: http://www.pantechusa.com/phones/
            'PantechTablet' => 'Pantech.*P4100',
            // Broncho Tablets: http://www.broncho.cn/ (hard to find)
            'BronchoTablet' => 'Broncho.*(N701|N708|N802|a710)',
            // http://versusuk.com/support.html
            'VersusTablet' => 'TOUCHPAD.*[78910]|\\bTOUCHTAB\\b',
            // http://www.zync.in/index.php/our-products/tablet-phablets
            'ZyncTablet' => 'z1000|Z99 2G|z930|z990|z909|Z919|z900',
            // Removed "z999" because of https://github.com/serbanghita/Mobile-Detect/issues/717
            // http://www.positivoinformatica.com.br/www/pessoal/tablet-ypy/
            'PositivoTablet' => 'TB07STA|TB10STA|TB07FTA|TB10FTA',
            // https://www.nabitablet.com/
            'NabiTablet' => 'Android.*\\bNabi',
            'KoboTablet' => 'Kobo Touch|\\bK080\\b|\\bVox\\b Build|\\bArc\\b Build',
            // French Danew Tablets http://www.danew.com/produits-tablette.php
            'DanewTablet' => 'DSlide.*\\b(700|701R|702|703R|704|802|970|971|972|973|974|1010|1012)\\b',
            // Texet Tablets and Readers http://www.texet.ru/tablet/
            'TexetTablet' => 'NaviPad|TB-772A|TM-7045|TM-7055|TM-9750|TM-7016|TM-7024|TM-7026|TM-7041|TM-7043|TM-7047|TM-8041|TM-9741|TM-9747|TM-9748|TM-9751|TM-7022|TM-7021|TM-7020|TM-7011|TM-7010|TM-7023|TM-7025|TM-7037W|TM-7038W|TM-7027W|TM-9720|TM-9725|TM-9737W|TM-1020|TM-9738W|TM-9740|TM-9743W|TB-807A|TB-771A|TB-727A|TB-725A|TB-719A|TB-823A|TB-805A|TB-723A|TB-715A|TB-707A|TB-705A|TB-709A|TB-711A|TB-890HD|TB-880HD|TB-790HD|TB-780HD|TB-770HD|TB-721HD|TB-710HD|TB-434HD|TB-860HD|TB-840HD|TB-760HD|TB-750HD|TB-740HD|TB-730HD|TB-722HD|TB-720HD|TB-700HD|TB-500HD|TB-470HD|TB-431HD|TB-430HD|TB-506|TB-504|TB-446|TB-436|TB-416|TB-146SE|TB-126SE',
            // Avoid detecting 'PLAYSTATION 3' as mobile.
            'PlaystationTablet' => 'Playstation.*(Portable|Vita)',
            // http://www.trekstor.de/surftabs.html
            'TrekstorTablet' => 'ST10416-1|VT10416-1|ST70408-1|ST702xx-1|ST702xx-2|ST80208|ST97216|ST70104-2|VT10416-2|ST10216-2A|SurfTab',
            // http://www.pyleaudio.com/Products.aspx?%2fproducts%2fPersonal-Electronics%2fTablets
            'PyleAudioTablet' => '\\b(PTBL10CEU|PTBL10C|PTBL72BC|PTBL72BCEU|PTBL7CEU|PTBL7C|PTBL92BC|PTBL92BCEU|PTBL9CEU|PTBL9CUK|PTBL9C)\\b',
            // http://www.advandigital.com/index.php?link=content-product&jns=JP001
            // because of the short codenames we have to include whitespaces to reduce the possible conflicts.
            'AdvanTablet' => 'Android.* \\b(E3A|T3X|T5C|T5B|T3E|T3C|T3B|T1J|T1F|T2A|T1H|T1i|E1C|T1-E|T5-A|T4|E1-B|T2Ci|T1-B|T1-D|O1-A|E1-A|T1-A|T3A|T4i)\\b ',
            // http://www.danytech.com/category/tablet-pc
            'DanyTechTablet' => 'Genius Tab G3|Genius Tab S2|Genius Tab Q3|Genius Tab G4|Genius Tab Q4|Genius Tab G-II|Genius TAB GII|Genius TAB GIII|Genius Tab S1',
            // http://www.galapad.net/product.html ; https://github.com/serbanghita/Mobile-Detect/issues/761
            'GalapadTablet' => 'Android [0-9.]+; [a-z-]+; \\bG1\\b',
            // http://www.micromaxinfo.com/tablet/funbook
            'MicromaxTablet' => 'Funbook|Micromax.*\\b(P250|P560|P360|P362|P600|P300|P350|P500|P275)\\b',
            // http://www.karbonnmobiles.com/products_tablet.php
            'KarbonnTablet' => 'Android.*\\b(A39|A37|A34|ST8|ST10|ST7|Smart Tab3|Smart Tab2)\\b',
            // http://www.myallfine.com/Products.asp
            'AllFineTablet' => 'Fine7 Genius|Fine7 Shine|Fine7 Air|Fine8 Style|Fine9 More|Fine10 Joy|Fine11 Wide',
            // http://www.proscanvideo.com/products-search.asp?itemClass=TABLET&itemnmbr=
            'PROSCANTablet' => '\\b(PEM63|PLT1023G|PLT1041|PLT1044|PLT1044G|PLT1091|PLT4311|PLT4311PL|PLT4315|PLT7030|PLT7033|PLT7033D|PLT7035|PLT7035D|PLT7044K|PLT7045K|PLT7045KB|PLT7071KG|PLT7072|PLT7223G|PLT7225G|PLT7777G|PLT7810K|PLT7849G|PLT7851G|PLT7852G|PLT8015|PLT8031|PLT8034|PLT8036|PLT8080K|PLT8082|PLT8088|PLT8223G|PLT8234G|PLT8235G|PLT8816K|PLT9011|PLT9045K|PLT9233G|PLT9735|PLT9760G|PLT9770G)\\b',
            // http://www.yonesnav.com/products/products.php
            'YONESTablet' => 'BQ1078|BC1003|BC1077|RK9702|BC9730|BC9001|IT9001|BC7008|BC7010|BC708|BC728|BC7012|BC7030|BC7027|BC7026',
            // http://www.cjshowroom.com/eproducts.aspx?classcode=004001001
            // China manufacturer makes tablets for different small brands (eg. http://www.zeepad.net/index.html)
            'ChangJiaTablet' => 'TPC7102|TPC7103|TPC7105|TPC7106|TPC7107|TPC7201|TPC7203|TPC7205|TPC7210|TPC7708|TPC7709|TPC7712|TPC7110|TPC8101|TPC8103|TPC8105|TPC8106|TPC8203|TPC8205|TPC8503|TPC9106|TPC9701|TPC97101|TPC97103|TPC97105|TPC97106|TPC97111|TPC97113|TPC97203|TPC97603|TPC97809|TPC97205|TPC10101|TPC10103|TPC10106|TPC10111|TPC10203|TPC10205|TPC10503',
            // http://www.gloryunion.cn/products.asp
            // http://www.allwinnertech.com/en/apply/mobile.html
            // http://www.ptcl.com.pk/pd_content.php?pd_id=284 (EVOTAB)
            // @todo: Softwiner tablets?
            // aka. Cute or Cool tablets. Not sure yet, must research to avoid collisions.
            'GUTablet' => 'TX-A1301|TX-M9002|Q702|kf026',
            // A12R|D75A|D77|D79|R83|A95|A106C|R15|A75|A76|D71|D72|R71|R73|R77|D82|R85|D92|A97|D92|R91|A10F|A77F|W71F|A78F|W78F|W81F|A97F|W91F|W97F|R16G|C72|C73E|K72|K73|R96G
            // http://www.pointofview-online.com/showroom.php?shop_mode=product_listing&category_id=118
            'PointOfViewTablet' => 'TAB-P506|TAB-navi-7-3G-M|TAB-P517|TAB-P-527|TAB-P701|TAB-P703|TAB-P721|TAB-P731N|TAB-P741|TAB-P825|TAB-P905|TAB-P925|TAB-PR945|TAB-PL1015|TAB-P1025|TAB-PI1045|TAB-P1325|TAB-PROTAB[0-9]+|TAB-PROTAB25|TAB-PROTAB26|TAB-PROTAB27|TAB-PROTAB26XL|TAB-PROTAB2-IPS9|TAB-PROTAB30-IPS9|TAB-PROTAB25XXL|TAB-PROTAB26-IPS10|TAB-PROTAB30-IPS10',
            // http://www.overmax.pl/pl/katalog-produktow,p8/tablety,c14/
            // @todo: add more tests.
            'OvermaxTablet' => 'OV-(SteelCore|NewBase|Basecore|Baseone|Exellen|Quattor|EduTab|Solution|ACTION|BasicTab|TeddyTab|MagicTab|Stream|TB-08|TB-09)|Qualcore 1027',
            // http://hclmetablet.com/India/index.php
            'HCLTablet' => 'HCL.*Tablet|Connect-3G-2.0|Connect-2G-2.0|ME Tablet U1|ME Tablet U2|ME Tablet G1|ME Tablet X1|ME Tablet Y2|ME Tablet Sync',
            // http://www.edigital.hu/Tablet_es_e-book_olvaso/Tablet-c18385.html
            'DPSTablet' => 'DPS Dream 9|DPS Dual 7',
            // http://www.visture.com/index.asp
            'VistureTablet' => 'V97 HD|i75 3G|Visture V4( HD)?|Visture V5( HD)?|Visture V10',
            // http://www.mijncresta.nl/tablet
            'CrestaTablet' => 'CTP(-)?810|CTP(-)?818|CTP(-)?828|CTP(-)?838|CTP(-)?888|CTP(-)?978|CTP(-)?980|CTP(-)?987|CTP(-)?988|CTP(-)?989',
            // MediaTek - http://www.mediatek.com/_en/01_products/02_proSys.php?cata_sn=1&cata1_sn=1&cata2_sn=309
            'MediatekTablet' => '\\bMT8125|MT8389|MT8135|MT8377\\b',
            // Concorde tab
            'ConcordeTablet' => 'Concorde([ ]+)?Tab|ConCorde ReadMan',
            // GoClever Tablets - http://www.goclever.com/uk/products,c1/tablet,c5/
            'GoCleverTablet' => 'GOCLEVER TAB|A7GOCLEVER|M1042|M7841|M742|R1042BK|R1041|TAB A975|TAB A7842|TAB A741|TAB A741L|TAB M723G|TAB M721|TAB A1021|TAB I921|TAB R721|TAB I720|TAB T76|TAB R70|TAB R76.2|TAB R106|TAB R83.2|TAB M813G|TAB I721|GCTA722|TAB I70|TAB I71|TAB S73|TAB R73|TAB R74|TAB R93|TAB R75|TAB R76.1|TAB A73|TAB A93|TAB A93.2|TAB T72|TAB R83|TAB R974|TAB R973|TAB A101|TAB A103|TAB A104|TAB A104.2|R105BK|M713G|A972BK|TAB A971|TAB R974.2|TAB R104|TAB R83.3|TAB A1042',
            // Modecom Tablets - http://www.modecom.eu/tablets/portal/
            'ModecomTablet' => 'FreeTAB 9000|FreeTAB 7.4|FreeTAB 7004|FreeTAB 7800|FreeTAB 2096|FreeTAB 7.5|FreeTAB 1014|FreeTAB 1001 |FreeTAB 8001|FreeTAB 9706|FreeTAB 9702|FreeTAB 7003|FreeTAB 7002|FreeTAB 1002|FreeTAB 7801|FreeTAB 1331|FreeTAB 1004|FreeTAB 8002|FreeTAB 8014|FreeTAB 9704|FreeTAB 1003',
            // Vonino Tablets
            'VoninoTablet' => '\\b(Argus[ _]?S|Diamond[ _]?79HD|Emerald[ _]?78E|Luna[ _]?70C|Onyx[ _]?S|Onyx[ _]?Z|Orin[ _]?HD|Orin[ _]?S|Otis[ _]?S|SpeedStar[ _]?S|Magnet[ _]?M9|Primus[ _]?94[ _]?3G|Primus[ _]?94HD|Primus[ _]?QS|Android.*\\bQ8\\b|Sirius[ _]?EVO[ _]?QS|Sirius[ _]?QS|Spirit[ _]?S)\\b',
            // ECS Tablets - http://www.ecs.com.tw/ECSWebSite/Product/Product_Tablet_List.aspx?CategoryID=14&MenuID=107&childid=M_107&LanID=0
            'ECSTablet' => 'V07OT2|TM105A|S10OT1|TR10CS1',
            // Storex Tablets - http://storex.fr/espace_client/support.html
            // @note: no need to add all the tablet codes since they are guided by the first regex.
            'StorexTablet' => 'eZee[_\']?(Tab|Go)[0-9]+|TabLC7|Looney Tunes Tab',
            // Generic Vodafone tablets.
            'VodafoneTablet' => 'SmartTab([ ]+)?[0-9]+|SmartTabII10|SmartTabII7|VF-1497|VFD 1400',
            // French tablets - Essentiel B http://www.boulanger.fr/tablette_tactile_e-book/tablette_tactile_essentiel_b/cl_68908.htm?multiChoiceToDelete=brand&mc_brand=essentielb
            // Aka: http://www.essentielb.fr/
            'EssentielBTablet' => 'Smart[ \']?TAB[ ]+?[0-9]+|Family[ \']?TAB2',
            // Ross & Moor - http://ross-moor.ru/
            'RossMoorTablet' => 'RM-790|RM-997|RMD-878G|RMD-974R|RMT-705A|RMT-701|RME-601|RMT-501|RMT-711',
            // i-mobile http://product.i-mobilephone.com/Mobile_Device
            'iMobileTablet' => 'i-mobile i-note',
            // http://www.tolino.de/de/vergleichen/
            'TolinoTablet' => 'tolino tab [0-9.]+|tolino shine',
            // AudioSonic - a Kmart brand
            // http://www.kmart.com.au/webapp/wcs/stores/servlet/Search?langId=-1&storeId=10701&catalogId=10001&categoryId=193001&pageSize=72&currentPage=1&searchCategory=193001%2b4294965664&sortBy=p_MaxPrice%7c1
            'AudioSonicTablet' => '\\bC-22Q|T7-QC|T-17B|T-17P\\b',
            // AMPE Tablets - http://www.ampe.com.my/product-category/tablets/
            // @todo: add them gradually to avoid conflicts.
            'AMPETablet' => 'Android.* A78 ',
            // Skk Mobile - http://skkmobile.com.ph/product_tablets.php
            'SkkTablet' => 'Android.* (SKYPAD|PHOENIX|CYCLOPS)',
            // Tecno Mobile (only tablet) - http://www.tecno-mobile.com/index.php/product?filterby=smart&list_order=all&page=1
            'TecnoTablet' => 'TECNO P9|TECNO DP8D',
            // JXD (consoles & tablets) - http://jxd.hk/products.asp?selectclassid=009008&clsid=3
            'JXDTablet' => 'Android.* \\b(F3000|A3300|JXD5000|JXD3000|JXD2000|JXD300B|JXD300|S5800|S7800|S602b|S5110b|S7300|S5300|S602|S603|S5100|S5110|S601|S7100a|P3000F|P3000s|P101|P200s|P1000m|P200m|P9100|P1000s|S6600b|S908|P1000|P300|S18|S6600|S9100)\\b',
            // i-Joy tablets - http://www.i-joy.es/en/cat/products/tablets/
            'iJoyTablet' => 'Tablet (Spirit 7|Essentia|Galatea|Fusion|Onix 7|Landa|Titan|Scooby|Deox|Stella|Themis|Argon|Unique 7|Sygnus|Hexen|Finity 7|Cream|Cream X2|Jade|Neon 7|Neron 7|Kandy|Scape|Saphyr 7|Rebel|Biox|Rebel|Rebel 8GB|Myst|Draco 7|Myst|Tab7-004|Myst|Tadeo Jones|Tablet Boing|Arrow|Draco Dual Cam|Aurix|Mint|Amity|Revolution|Finity 9|Neon 9|T9w|Amity 4GB Dual Cam|Stone 4GB|Stone 8GB|Andromeda|Silken|X2|Andromeda II|Halley|Flame|Saphyr 9,7|Touch 8|Planet|Triton|Unique 10|Hexen 10|Memphis 4GB|Memphis 8GB|Onix 10)',
            // http://www.intracon.eu/tablet
            'FX2Tablet' => 'FX2 PAD7|FX2 PAD10',
            // http://www.xoro.de/produkte/
            // @note: Might be the same brand with 'Simply tablets'
            'XoroTablet' => 'KidsPAD 701|PAD[ ]?712|PAD[ ]?714|PAD[ ]?716|PAD[ ]?717|PAD[ ]?718|PAD[ ]?720|PAD[ ]?721|PAD[ ]?722|PAD[ ]?790|PAD[ ]?792|PAD[ ]?900|PAD[ ]?9715D|PAD[ ]?9716DR|PAD[ ]?9718DR|PAD[ ]?9719QR|PAD[ ]?9720QR|TelePAD1030|Telepad1032|TelePAD730|TelePAD731|TelePAD732|TelePAD735Q|TelePAD830|TelePAD9730|TelePAD795|MegaPAD 1331|MegaPAD 1851|MegaPAD 2151',
            // http://www1.viewsonic.com/products/computing/tablets/
            'ViewsonicTablet' => 'ViewPad 10pi|ViewPad 10e|ViewPad 10s|ViewPad E72|ViewPad7|ViewPad E100|ViewPad 7e|ViewSonic VB733|VB100a',
            // https://www.verizonwireless.com/tablets/verizon/
            'VerizonTablet' => 'QTAQZ3|QTAIR7|QTAQTZ3|QTASUN1|QTASUN2|QTAXIA1',
            // http://www.odys.de/web/internet-tablet_en.html
            'OdysTablet' => 'LOOX|XENO10|ODYS[ -](Space|EVO|Xpress|NOON)|\\bXELIO\\b|Xelio10Pro|XELIO7PHONETAB|XELIO10EXTREME|XELIOPT2|NEO_QUAD10',
            // http://www.captiva-power.de/products.html#tablets-en
            'CaptivaTablet' => 'CAPTIVA PAD',
            // IconBIT - http://www.iconbit.com/products/tablets/
            'IconbitTablet' => 'NetTAB|NT-3702|NT-3702S|NT-3702S|NT-3603P|NT-3603P|NT-0704S|NT-0704S|NT-3805C|NT-3805C|NT-0806C|NT-0806C|NT-0909T|NT-0909T|NT-0907S|NT-0907S|NT-0902S|NT-0902S',
            // http://www.teclast.com/topic.php?channelID=70&topicID=140&pid=63
            'TeclastTablet' => 'T98 4G|\\bP80\\b|\\bX90HD\\b|X98 Air|X98 Air 3G|\\bX89\\b|P80 3G|\\bX80h\\b|P98 Air|\\bX89HD\\b|P98 3G|\\bP90HD\\b|P89 3G|X98 3G|\\bP70h\\b|P79HD 3G|G18d 3G|\\bP79HD\\b|\\bP89s\\b|\\bA88\\b|\\bP10HD\\b|\\bP19HD\\b|G18 3G|\\bP78HD\\b|\\bA78\\b|\\bP75\\b|G17s 3G|G17h 3G|\\bP85t\\b|\\bP90\\b|\\bP11\\b|\\bP98t\\b|\\bP98HD\\b|\\bG18d\\b|\\bP85s\\b|\\bP11HD\\b|\\bP88s\\b|\\bA80HD\\b|\\bA80se\\b|\\bA10h\\b|\\bP89\\b|\\bP78s\\b|\\bG18\\b|\\bP85\\b|\\bA70h\\b|\\bA70\\b|\\bG17\\b|\\bP18\\b|\\bA80s\\b|\\bA11s\\b|\\bP88HD\\b|\\bA80h\\b|\\bP76s\\b|\\bP76h\\b|\\bP98\\b|\\bA10HD\\b|\\bP78\\b|\\bP88\\b|\\bA11\\b|\\bA10t\\b|\\bP76a\\b|\\bP76t\\b|\\bP76e\\b|\\bP85HD\\b|\\bP85a\\b|\\bP86\\b|\\bP75HD\\b|\\bP76v\\b|\\bA12\\b|\\bP75a\\b|\\bA15\\b|\\bP76Ti\\b|\\bP81HD\\b|\\bA10\\b|\\bT760VE\\b|\\bT720HD\\b|\\bP76\\b|\\bP73\\b|\\bP71\\b|\\bP72\\b|\\bT720SE\\b|\\bC520Ti\\b|\\bT760\\b|\\bT720VE\\b|T720-3GE|T720-WiFi',
            // Onda - http://www.onda-tablet.com/buy-android-onda.html?dir=desc&limit=all&order=price
            'OndaTablet' => '\\b(V975i|Vi30|VX530|V701|Vi60|V701s|Vi50|V801s|V719|Vx610w|VX610W|V819i|Vi10|VX580W|Vi10|V711s|V813|V811|V820w|V820|Vi20|V711|VI30W|V712|V891w|V972|V819w|V820w|Vi60|V820w|V711|V813s|V801|V819|V975s|V801|V819|V819|V818|V811|V712|V975m|V101w|V961w|V812|V818|V971|V971s|V919|V989|V116w|V102w|V973|Vi40)\\b[\\s]+|V10 \\b4G\\b',
            'JaytechTablet' => 'TPC-PA762',
            'BlaupunktTablet' => 'Endeavour 800NG|Endeavour 1010',
            // http://www.digma.ru/support/download/
            // @todo: Ebooks also (if requested)
            'DigmaTablet' => '\\b(iDx10|iDx9|iDx8|iDx7|iDxD7|iDxD8|iDsQ8|iDsQ7|iDsQ8|iDsD10|iDnD7|3TS804H|iDsQ11|iDj7|iDs10)\\b',
            // http://www.evolioshop.com/ro/tablete-pc.html
            // http://www.evolio.ro/support/downloads_static.html?cat=2
            // @todo: Research some more
            'EvolioTablet' => 'ARIA_Mini_wifi|Aria[ _]Mini|Evolio X10|Evolio X7|Evolio X8|\\bEvotab\\b|\\bNeura\\b',
            // @todo http://www.lavamobiles.com/tablets-data-cards
            'LavaTablet' => 'QPAD E704|\\bIvoryS\\b|E-TAB IVORY|\\bE-TAB\\b',
            // http://www.breezetablet.com/
            'AocTablet' => 'MW0811|MW0812|MW0922|MTK8382|MW1031|MW0831|MW0821|MW0931|MW0712',
            // http://www.mpmaneurope.com/en/products/internet-tablets-14/android-tablets-14/
            'MpmanTablet' => 'MP11 OCTA|MP10 OCTA|MPQC1114|MPQC1004|MPQC994|MPQC974|MPQC973|MPQC804|MPQC784|MPQC780|\\bMPG7\\b|MPDCG75|MPDCG71|MPDC1006|MP101DC|MPDC9000|MPDC905|MPDC706HD|MPDC706|MPDC705|MPDC110|MPDC100|MPDC99|MPDC97|MPDC88|MPDC8|MPDC77|MP709|MID701|MID711|MID170|MPDC703|MPQC1010',
            // https://www.celkonmobiles.com/?_a=categoryphones&sid=2
            'CelkonTablet' => 'CT695|CT888|CT[\\s]?910|CT7 Tab|CT9 Tab|CT3 Tab|CT2 Tab|CT1 Tab|C820|C720|\\bCT-1\\b',
            // http://www.wolderelectronics.com/productos/manuales-y-guias-rapidas/categoria-2-miTab
            'WolderTablet' => 'miTab \\b(DIAMOND|SPACE|BROOKLYN|NEO|FLY|MANHATTAN|FUNK|EVOLUTION|SKY|GOCAR|IRON|GENIUS|POP|MINT|EPSILON|BROADWAY|JUMP|HOP|LEGEND|NEW AGE|LINE|ADVANCE|FEEL|FOLLOW|LIKE|LINK|LIVE|THINK|FREEDOM|CHICAGO|CLEVELAND|BALTIMORE-GH|IOWA|BOSTON|SEATTLE|PHOENIX|DALLAS|IN 101|MasterChef)\\b',
            'MediacomTablet' => 'M-MPI10C3G|M-SP10EG|M-SP10EGP|M-SP10HXAH|M-SP7HXAH|M-SP10HXBH|M-SP8HXAH|M-SP8MXA',
            // http://www.mi.com/en
            'MiTablet' => '\\bMI PAD\\b|\\bHM NOTE 1W\\b',
            // http://www.nbru.cn/index.html
            'NibiruTablet' => 'Nibiru M1|Nibiru Jupiter One',
            // http://navroad.com/products/produkty/tablety/
            // http://navroad.com/products/produkty/tablety/
            'NexoTablet' => 'NEXO NOVA|NEXO 10|NEXO AVIO|NEXO FREE|NEXO GO|NEXO EVO|NEXO 3G|NEXO SMART|NEXO KIDDO|NEXO MOBI',
            // http://leader-online.com/new_site/product-category/tablets/
            // http://www.leader-online.net.au/List/Tablet
            'LeaderTablet' => 'TBLT10Q|TBLT10I|TBL-10WDKB|TBL-10WDKBO2013|TBL-W230V2|TBL-W450|TBL-W500|SV572|TBLT7I|TBA-AC7-8G|TBLT79|TBL-8W16|TBL-10W32|TBL-10WKB|TBL-W100',
            // http://www.datawind.com/ubislate/
            'UbislateTablet' => 'UbiSlate[\\s]?7C',
            // http://www.pocketbook-int.com/ru/support
            'PocketBookTablet' => 'Pocketbook',
            // http://www.kocaso.com/product_tablet.html
            'KocasoTablet' => '\\b(TB-1207)\\b',
            // http://global.hisense.com/product/asia/tablet/Sero7/201412/t20141215_91832.htm
            'HisenseTablet' => '\\b(F5281|E2371)\\b',
            // http://www.tesco.com/direct/hudl/
            'Hudl' => 'Hudl HT7S3|Hudl 2',
            // http://www.telstra.com.au/home-phone/thub-2/
            'TelstraTablet' => 'T-Hub2',
            'GenericTablet' => 'Android.*\\b97D\\b|Tablet(?!.*PC)|BNTV250A|MID-WCDMA|LogicPD Zoom2|\\bA7EB\\b|CatNova8|A1_07|CT704|CT1002|\\bM721\\b|rk30sdk|\\bEVOTAB\\b|M758A|ET904|ALUMIUM10|Smartfren Tab|Endeavour 1010|Tablet-PC-4|Tagi Tab|\\bM6pro\\b|CT1020W|arc 10HD|\\bTP750\\b|\\bQTAQZ3\\b|WVT101|TM1088|KT107',
        );
        /**
         * List of mobile Operating Systems.
         *
         * @var array
         */
        protected static $operatingSystems = array(
            'AndroidOS' => 'Android',
            'BlackBerryOS' => 'blackberry|\\bBB10\\b|rim tablet os',
            'PalmOS' => 'PalmOS|avantgo|blazer|elaine|hiptop|palm|plucker|xiino',
            'SymbianOS' => 'Symbian|SymbOS|Series60|Series40|SYB-[0-9]+|\\bS60\\b',
            // @reference: http://en.wikipedia.org/wiki/Windows_Mobile
            'WindowsMobileOS' => 'Windows CE.*(PPC|Smartphone|Mobile|[0-9]{3}x[0-9]{3})|Windows Mobile|Windows Phone [0-9.]+|WCE;',
            // @reference: http://en.wikipedia.org/wiki/Windows_Phone
            // http://wifeng.cn/?r=blog&a=view&id=106
            // http://nicksnettravels.builttoroam.com/post/2011/01/10/Bogus-Windows-Phone-7-User-Agent-String.aspx
            // http://msdn.microsoft.com/library/ms537503.aspx
            // https://msdn.microsoft.com/en-us/library/hh869301(v=vs.85).aspx
            'WindowsPhoneOS' => 'Windows Phone 10.0|Windows Phone 8.1|Windows Phone 8.0|Windows Phone OS|XBLWP7|ZuneWP7|Windows NT 6.[23]; ARM;',
            'iOS' => '\\biPhone.*Mobile|\\biPod|\\biPad|AppleCoreMedia',
            // https://en.wikipedia.org/wiki/IPadOS
            'iPadOS' => 'CPU OS 13',
            // @reference https://en.m.wikipedia.org/wiki/Sailfish_OS
            // https://sailfishos.org/
            'SailfishOS' => 'Sailfish',
            // http://en.wikipedia.org/wiki/MeeGo
            // @todo: research MeeGo in UAs
            'MeeGoOS' => 'MeeGo',
            // http://en.wikipedia.org/wiki/Maemo
            // @todo: research Maemo in UAs
            'MaemoOS' => 'Maemo',
            'JavaOS' => 'J2ME/|\\bMIDP\\b|\\bCLDC\\b',
            // '|Java/' produces bug #135
            'webOS' => 'webOS|hpwOS',
            'badaOS' => '\\bBada\\b',
            'BREWOS' => 'BREW',
        );
        /**
         * List of mobile User Agents.
         *
         * IMPORTANT: This is a list of only mobile browsers.
         * Mobile Detect 2.x supports only mobile browsers,
         * it was never designed to detect all browsers.
         * The change will come in 2017 in the 3.x release for PHP7.
         *
         * @var array
         */
        protected static $browsers = array(
            //'Vivaldi'         => 'Vivaldi',
            // @reference: https://developers.google.com/chrome/mobile/docs/user-agent
            'Chrome' => '\\bCrMo\\b|CriOS.*Mobile|Android.*Chrome/[.0-9]* Mobile',
            'Dolfin' => '\\bDolfin\\b',
            'Opera' => 'Opera.*Mini|Opera.*Mobi|Android.*Opera|Mobile.*OPR/[0-9.]+$|Coast/[0-9.]+',
            'Skyfire' => 'Skyfire',
            // Added "Edge on iOS" https://github.com/serbanghita/Mobile-Detect/issues/764
            'Edge' => 'EdgiOS.*Mobile|Mobile Safari/[.0-9]* Edge',
            'IE' => 'IEMobile|MSIEMobile',
            // |Trident/[.0-9]+
            'Firefox' => 'fennec|firefox.*maemo|(Mobile|Tablet).*Firefox|Firefox.*Mobile|FxiOS.*Mobile',
            'Bolt' => 'bolt',
            'TeaShark' => 'teashark',
            'Blazer' => 'Blazer',
            // @reference: http://developer.apple.com/library/safari/#documentation/AppleApplications/Reference/SafariWebContent/OptimizingforSafarioniPhone/OptimizingforSafarioniPhone.html#//apple_ref/doc/uid/TP40006517-SW3
            // Excluded "Edge on iOS" https://github.com/serbanghita/Mobile-Detect/issues/764
            'Safari' => 'Version((?!\\bEdgiOS\\b).)*Mobile.*Safari|Safari.*Mobile|MobileSafari',
            // http://en.wikipedia.org/wiki/Midori_(web_browser)
            //'Midori'          => 'midori',
            //'Tizen'           => 'Tizen',
            'WeChat' => '\\bMicroMessenger\\b',
            'UCBrowser' => 'UC.*Browser|UCWEB',
            'baiduboxapp' => 'baiduboxapp',
            'baidubrowser' => 'baidubrowser',
            // https://github.com/serbanghita/Mobile-Detect/issues/7
            'DiigoBrowser' => 'DiigoBrowser',
            // http://www.puffinbrowser.com/index.php
            // https://github.com/serbanghita/Mobile-Detect/issues/752
            // 'Puffin'            => 'Puffin',
            // http://mercury-browser.com/index.html
            'Mercury' => '\\bMercury\\b',
            // http://en.wikipedia.org/wiki/Obigo_Browser
            'ObigoBrowser' => 'Obigo',
            // http://en.wikipedia.org/wiki/NetFront
            'NetFront' => 'NF-Browser',
            // @reference: http://en.wikipedia.org/wiki/Minimo
            // http://en.wikipedia.org/wiki/Vision_Mobile_Browser
            'GenericBrowser' => 'NokiaBrowser|OviBrowser|OneBrowser|TwonkyBeamBrowser|SEMC.*Browser|FlyFlow|Minimo|NetFront|Novarra-Vision|MQQBrowser|MicroMessenger',
            // @reference: https://en.wikipedia.org/wiki/Pale_Moon_(web_browser)
            'PaleMoon' => 'Android.*PaleMoon|Mobile.*PaleMoon',
        );
        /**
         * Utilities.
         *
         * @var array
         */
        protected static $utilities = array(
            // Experimental. When a mobile device wants to switch to 'Desktop Mode'.
            // http://scottcate.com/technology/windows-phone-8-ie10-desktop-or-mobile/
            // https://github.com/serbanghita/Mobile-Detect/issues/57#issuecomment-15024011
            // https://developers.facebook.com/docs/sharing/webmasters/crawler/
            'Bot' => 'Googlebot|facebookexternalhit|Google-AMPHTML|s~amp-validator|AdsBot-Google|Google Keyword Suggestion|Facebot|YandexBot|YandexMobileBot|bingbot|ia_archiver|AhrefsBot|Ezooms|GSLFbot|WBSearchBot|Twitterbot|TweetmemeBot|Twikle|PaperLiBot|Wotbox|UnwindFetchor|Exabot|MJ12bot|YandexImages|TurnitinBot|Pingdom|contentkingapp|AspiegelBot',
            'MobileBot' => 'Googlebot-Mobile|AdsBot-Google-Mobile|YahooSeeker/M1A1-R2D2',
            'DesktopMode' => 'WPDesktop',
            'TV' => 'SonyDTV|HbbTV',
            // experimental
            'WebKit' => '(webkit)[ /]([\\w.]+)',
            // @todo: Include JXD consoles.
            'Console' => '\\b(Nintendo|Nintendo WiiU|Nintendo 3DS|Nintendo Switch|PLAYSTATION|Xbox)\\b',
            'Watch' => 'SM-V700',
        );
        /**
         * All possible HTTP headers that represent the
         * User-Agent string.
         *
         * @var array
         */
        protected static $uaHttpHeaders = array(
            // The default User-Agent string.
            'HTTP_USER_AGENT',
            // Header can occur on devices using Opera Mini.
            'HTTP_X_OPERAMINI_PHONE_UA',
            // Vodafone specific header: http://www.seoprinciple.com/mobile-web-community-still-angry-at-vodafone/24/
            'HTTP_X_DEVICE_USER_AGENT',
            'HTTP_X_ORIGINAL_USER_AGENT',
            'HTTP_X_SKYFIRE_PHONE',
            'HTTP_X_BOLT_PHONE_UA',
            'HTTP_DEVICE_STOCK_UA',
            'HTTP_X_UCBROWSER_DEVICE_UA',
        );
        /**
         * The individual segments that could exist in a User-Agent string. VER refers to the regular
         * expression defined in the constant self::VER.
         *
         * @var array
         */
        protected static $properties = array(
            // Build
            'Mobile' => 'Mobile/[VER]',
            'Build' => 'Build/[VER]',
            'Version' => 'Version/[VER]',
            'VendorID' => 'VendorID/[VER]',
            // Devices
            'iPad' => 'iPad.*CPU[a-z ]+[VER]',
            'iPhone' => 'iPhone.*CPU[a-z ]+[VER]',
            'iPod' => 'iPod.*CPU[a-z ]+[VER]',
            //'BlackBerry'    => array('BlackBerry[VER]', 'BlackBerry [VER];'),
            'Kindle' => 'Kindle/[VER]',
            // Browser
            'Chrome' => array('Chrome/[VER]', 'CriOS/[VER]', 'CrMo/[VER]'),
            'Coast' => array('Coast/[VER]'),
            'Dolfin' => 'Dolfin/[VER]',
            // @reference: https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/User-Agent/Firefox
            'Firefox' => array('Firefox/[VER]', 'FxiOS/[VER]'),
            'Fennec' => 'Fennec/[VER]',
            // http://msdn.microsoft.com/en-us/library/ms537503(v=vs.85).aspx
            // https://msdn.microsoft.com/en-us/library/ie/hh869301(v=vs.85).aspx
            'Edge' => 'Edge/[VER]',
            'IE' => array('IEMobile/[VER];', 'IEMobile [VER]', 'MSIE [VER];', 'Trident/[0-9.]+;.*rv:[VER]'),
            // http://en.wikipedia.org/wiki/NetFront
            'NetFront' => 'NetFront/[VER]',
            'NokiaBrowser' => 'NokiaBrowser/[VER]',
            'Opera' => array(' OPR/[VER]', 'Opera Mini/[VER]', 'Version/[VER]'),
            'Opera Mini' => 'Opera Mini/[VER]',
            'Opera Mobi' => 'Version/[VER]',
            'UCBrowser' => array('UCWEB[VER]', 'UC.*Browser/[VER]'),
            'MQQBrowser' => 'MQQBrowser/[VER]',
            'MicroMessenger' => 'MicroMessenger/[VER]',
            'baiduboxapp' => 'baiduboxapp/[VER]',
            'baidubrowser' => 'baidubrowser/[VER]',
            'SamsungBrowser' => 'SamsungBrowser/[VER]',
            'Iron' => 'Iron/[VER]',
            // @note: Safari 7534.48.3 is actually Version 5.1.
            // @note: On BlackBerry the Version is overwriten by the OS.
            'Safari' => array('Version/[VER]', 'Safari/[VER]'),
            'Skyfire' => 'Skyfire/[VER]',
            'Tizen' => 'Tizen/[VER]',
            'Webkit' => 'webkit[ /][VER]',
            'PaleMoon' => 'PaleMoon/[VER]',
            'SailfishBrowser' => 'SailfishBrowser/[VER]',
            // Engine
            'Gecko' => 'Gecko/[VER]',
            'Trident' => 'Trident/[VER]',
            'Presto' => 'Presto/[VER]',
            'Goanna' => 'Goanna/[VER]',
            // OS
            'iOS' => ' \\bi?OS\\b [VER][ ;]{1}',
            'Android' => 'Android [VER]',
            'Sailfish' => 'Sailfish [VER]',
            'BlackBerry' => array('BlackBerry[\\w]+/[VER]', 'BlackBerry.*Version/[VER]', 'Version/[VER]'),
            'BREW' => 'BREW [VER]',
            'Java' => 'Java/[VER]',
            // @reference: http://windowsteamblog.com/windows_phone/b/wpdev/archive/2011/08/29/introducing-the-ie9-on-windows-phone-mango-user-agent-string.aspx
            // @reference: http://en.wikipedia.org/wiki/Windows_NT#Releases
            'Windows Phone OS' => array('Windows Phone OS [VER]', 'Windows Phone [VER]'),
            'Windows Phone' => 'Windows Phone [VER]',
            'Windows CE' => 'Windows CE/[VER]',
            // http://social.msdn.microsoft.com/Forums/en-US/windowsdeveloperpreviewgeneral/thread/6be392da-4d2f-41b4-8354-8dcee20c85cd
            'Windows NT' => 'Windows NT [VER]',
            'Symbian' => array('SymbianOS/[VER]', 'Symbian/[VER]'),
            'webOS' => array('webOS/[VER]', 'hpwOS/[VER];'),
        );
        /**
         * Construct an instance of this class.
         *
         * @param array $headers Specify the headers as injection. Should be PHP _SERVER flavored.
         *                          If left empty, will use the global _SERVER['HTTP_*'] vars instead.
         * @param string $userAgent Inject the User-Agent header. If null, will use HTTP_USER_AGENT
         *                          from the $headers array instead.
         */
        public function __construct(array $headers = \null, $userAgent = \null)
        {
        }
        /**
         * Get the current script version.
         * This is useful for the demo.php file,
         * so people can check on what version they are testing
         * for mobile devices.
         *
         * @return string The version number in semantic version format.
         */
        public static function getScriptVersion()
        {
        }
        /**
         * Set the HTTP Headers. Must be PHP-flavored. This method will reset existing headers.
         *
         * @param array $httpHeaders The headers to set. If null, then using PHP's _SERVER to extract
         *                           the headers. The default null is left for backwards compatibility.
         */
        public function setHttpHeaders($httpHeaders = \null)
        {
        }
        /**
         * Retrieves the HTTP headers.
         *
         * @return array
         */
        public function getHttpHeaders()
        {
        }
        /**
         * Retrieves a particular header. If it doesn't exist, no exception/error is caused.
         * Simply null is returned.
         *
         * @param string $header The name of the header to retrieve. Can be HTTP compliant such as
         *                       "User-Agent" or "X-Device-User-Agent" or can be php-esque with the
         *                       all-caps, HTTP_ prefixed, underscore separated awesomeness.
         *
         * @return string|null The value of the header.
         */
        public function getHttpHeader($header)
        {
        }
        public function getMobileHeaders()
        {
        }
        /**
         * Get all possible HTTP headers that
         * can contain the User-Agent string.
         *
         * @return array List of HTTP headers.
         */
        public function getUaHttpHeaders()
        {
        }
        /**
         * Set CloudFront headers
         * http://docs.aws.amazon.com/AmazonCloudFront/latest/DeveloperGuide/header-caching.html#header-caching-web-device
         *
         * @param array $cfHeaders List of HTTP headers
         *
         * @return  boolean If there were CloudFront headers to be set
         */
        public function setCfHeaders($cfHeaders = \null)
        {
        }
        /**
         * Retrieves the cloudfront headers.
         *
         * @return array
         */
        public function getCfHeaders()
        {
        }
        /**
         * Set the User-Agent to be used.
         *
         * @param string $userAgent The user agent string to set.
         *
         * @return string|null
         */
        public function setUserAgent($userAgent = \null)
        {
        }
        /**
         * Retrieve the User-Agent.
         *
         * @return string|null The user agent if it's set.
         */
        public function getUserAgent()
        {
        }
        /**
         * Set the detection type. Must be one of self::DETECTION_TYPE_MOBILE or
         * self::DETECTION_TYPE_EXTENDED. Otherwise, nothing is set.
         *
         * @param string $type The type. Must be a self::DETECTION_TYPE_* constant. The default
         *                     parameter is null which will default to self::DETECTION_TYPE_MOBILE.
         *
         * @deprecated since version 2.6.9
         *
         */
        public function setDetectionType($type = \null)
        {
        }
        public function getMatchingRegex()
        {
        }
        public function getMatchesArray()
        {
        }
        /**
         * Retrieve the list of known phone devices.
         *
         * @return array List of phone devices.
         */
        public static function getPhoneDevices()
        {
        }
        /**
         * Retrieve the list of known tablet devices.
         *
         * @return array List of tablet devices.
         */
        public static function getTabletDevices()
        {
        }
        /**
         * Alias for getBrowsers() method.
         *
         * @return array List of user agents.
         */
        public static function getUserAgents()
        {
        }
        /**
         * Retrieve the list of known browsers. Specifically, the user agents.
         *
         * @return array List of browsers / user agents.
         */
        public static function getBrowsers()
        {
        }
        /**
         * Retrieve the list of known utilities.
         *
         * @return array List of utilities.
         */
        public static function getUtilities()
        {
        }
        /**
         * Method gets the mobile detection rules. This method is used for the magic methods $detect->is*().
         *
         * @return array All the rules (but not extended).
         * @deprecated since version 2.6.9
         *
         */
        public static function getMobileDetectionRules()
        {
        }
        /**
         * Method gets the mobile detection rules + utilities.
         * The reason this is separate is because utilities rules
         * don't necessary imply mobile. This method is used inside
         * the new $detect->is('stuff') method.
         *
         * @return array All the rules + extended.
         * @deprecated since version 2.6.9
         *
         */
        public function getMobileDetectionRulesExtended()
        {
        }
        /**
         * Retrieve the current set of rules.
         *
         * @return array
         * @deprecated since version 2.6.9
         *
         */
        public function getRules()
        {
        }
        /**
         * Retrieve the list of mobile operating systems.
         *
         * @return array The list of mobile operating systems.
         */
        public static function getOperatingSystems()
        {
        }
        /**
         * Check the HTTP headers for signs of mobile.
         * This is the fastest mobile check possible; it's used
         * inside isMobile() method.
         *
         * @return bool
         */
        public function checkHttpHeadersForMobile()
        {
        }
        /**
         * Magic overloading method.
         *
         * @method boolean is[...]()
         * @param string $name
         * @param array $arguments
         *
         * @return mixed
         * @throws BadMethodCallException when the method doesn't exist and doesn't start with 'is'
         */
        public function __call($name, $arguments)
        {
        }
        /**
         * Find a detection rule that matches the current User-agent.
         *
         * @param null $userAgent deprecated
         *
         * @return boolean
         */
        protected function matchDetectionRulesAgainstUA($userAgent = \null)
        {
        }
        /**
         * Search for a certain key in the rules array.
         * If the key is found then try to match the corresponding
         * regex against the User-Agent.
         *
         * @param string $key
         *
         * @return boolean
         */
        protected function matchUAAgainstKey($key)
        {
        }
        /**
         * Check if the device is mobile.
         * Returns true if any type of mobile device detected, including special ones
         *
         * @param null $userAgent deprecated
         * @param null $httpHeaders deprecated
         *
         * @return bool
         */
        public function isMobile($userAgent = \null, $httpHeaders = \null)
        {
        }
        /**
         * Check if the device is a tablet.
         * Return true if any type of tablet device is detected.
         *
         * @param string $userAgent deprecated
         * @param array $httpHeaders deprecated
         *
         * @return bool
         */
        public function isTablet($userAgent = \null, $httpHeaders = \null)
        {
        }
        /**
         * This method checks for a certain property in the
         * userAgent.
         *
         * @param string $key
         * @param string $userAgent deprecated
         * @param string $httpHeaders deprecated
         *
         * @return bool|int|null
         * @todo: The httpHeaders part is not yet used.
         *
         */
        public function is($key, $userAgent = \null, $httpHeaders = \null)
        {
        }
        /**
         * Some detection rules are relative (not standard),
         * because of the diversity of devices, vendors and
         * their conventions in representing the User-Agent or
         * the HTTP headers.
         *
         * This method will be used to check custom regexes against
         * the User-Agent string.
         *
         * @param $regex
         * @param string $userAgent
         *
         * @return bool
         *
         * @todo: search in the HTTP headers too.
         */
        public function match($regex, $userAgent = \null)
        {
        }
        /**
         * Get the properties array.
         *
         * @return array
         */
        public static function getProperties()
        {
        }
        /**
         * Prepare the version number.
         *
         * @param string $ver The string version, like "2.6.21.2152";
         *
         * @return float
         * @todo Remove the error supression from str_replace() call.
         *
         */
        public function prepareVersionNo($ver)
        {
        }
        /**
         * Check the version of the given property in the User-Agent.
         * Will return a float number. (eg. 2_0 will return 2.0, 4.3.1 will return 4.31)
         *
         * @param string $propertyName The name of the property. See self::getProperties() array
         *                             keys for all possible properties.
         * @param string $type Either self::VERSION_TYPE_STRING to get a string value or
         *                             self::VERSION_TYPE_FLOAT indicating a float value. This parameter
         *                             is optional and defaults to self::VERSION_TYPE_STRING. Passing an
         *                             invalid parameter will default to the this type as well.
         *
         * @return string|float|false The version of the property we are trying to extract.
         */
        public function version($propertyName, $type = self::VERSION_TYPE_STRING)
        {
        }
        /**
         * Retrieve the mobile grading, using self::MOBILE_GRADE_* constants.
         * @return string One of the self::MOBILE_GRADE_* constants.
         * @deprecated This is no longer being maintained, it was an experiment at the time.
         */
        public function mobileGrade()
        {
        }
        /**
         * @return WFACP_Mobile_Detect;
         */
        public static function get_instance()
        {
        }
    }
    class WFACP_Product_Switcher_Merge_Tags
    {
        public static $threshold_to_date = 30;
        protected static $pro;
        protected static $price_data;
        protected static $_data_shortcode = array();
        protected static $coupon = '';
        protected static $cart_item = [];
        protected static $product_data = [];
        protected static $cart_item_key = '';
        /**
         * Maybe try and parse content to found the wfacp merge tags
         * And converts them to the standard wp shortcode way
         * So that it can be used as do_shortcode in future
         *
         * @param string $content
         *
         * @return mixed|string
         */
        public static function maybe_parse_merge_tags($content, $price_data, $pro = \false, $product_data = [], $cart_item = [], $cart_item_key = '')
        {
        }
        public static function get_all_tags()
        {
        }
        public static function parse_coupon_merge_tag($content, $coupon)
        {
        }
    }
    class WFACP_WooFunnels_Support
    {
        public static $_instance = \null;
        /** Can't be change this further, as is used for license activation */
        public $full_name = 'FunnelKit Checkout';
        public $is_license_needed = \true;
        /**
         * @var WooFunnels_License_check
         */
        public $license_instance;
        protected $slug = 'woofunnels-aero-checkout';
        protected $encoded_basename = '';
        public function __construct()
        {
        }
        /**
         * @return null|WFACP_WooFunnels_Support
         */
        public static function get_instance()
        {
        }
        public function wfacp_options_page_right_content()
        {
        }
        /**
         * Adding WooCommerce sub-menu for global options
         */
        public function add_menus()
        {
        }
        public function woofunnels_page()
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
        public function is_license_present()
        {
        }
        public function maybe_handle_license_activation_wizard()
        {
        }
    }
    /**
     * Class WFACP_Plugin_Compatibilities
     * Loads all the compatibilities files we have to provide compatibility with each plugin
     */
    class WFACP_Plugin_Compatibilities
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
        public static function include_files($compatibilities_folder = [])
        {
        }
        public static function plugin_loaded()
        {
        }
        public static function setup_theme()
        {
        }
        public static function template_found()
        {
        }
    }
    /**
     * Abstract Class for all the Template Loading
     * Class WFACP_Template_Common
     */
    abstract class WFACP_Template_Common
    {
        protected $selected_register_template = [];
        public $default_badges = [];
        public $web_google_fonts = ['Open Sans' => 'Open Sans'];
        public $wfacp_templates_slug = ['pre_built' => ['layout_1' => 15, 'layout_2' => 15, 'layout_4' => 15, 'layout_9' => 7], 'elementor' => ['elementor_1' => 7, 'elementor_2' => 7, 'elementor_3' => 7, 'elementor_4' => 7], 'embed_form' => ['embed_forms_2' => 7]];
        public $device_type = 'not-mobile';
        public $device_mb_tab = 'only-desktop';
        public $enabled_product_switching = 'no';
        public $have_billing_address = \false;
        public $have_shipping_address = \false;
        public $have_billing_address_index = 2;
        public $have_shipping_address_index = 1;
        public $setting_new_version = \false;
        protected $available_fields = ['layout', 'header', 'product', 'guarantee', 'listing', 'testimonial', 'widget', 'customer-care', 'promises', 'footer', 'style', 'gbadge', 'product_switcher', 'html_widget_1', 'html_widget_2', 'html_widget_3'];
        protected $data = \null;
        protected $fields = [];
        protected $template_dir = __DIR__;
        protected $template_type = 'pre_built';
        protected $template_slug = 'layout_4';
        protected $template_name = 'layout_4';
        protected $steps = [];
        protected $fieldsets = [];
        protected $checkout_fields = [];
        protected $css_classes = [];
        protected $current_step = 'single_step';
        protected $current_open_step = 'single_step';
        protected $wfacp_id = 0;
        protected $url = '';
        protected $have_coupon_field = \false;
        protected $have_shipping_method = \true;
        protected $form_data = [];
        protected $mini_cart_data = [];
        protected $smart_buttons = [];
        protected $mini_cart_widget_id = 'wfacp_form_summary';
        protected $base_country = ['billing_country' => '', 'shipping_country' => ''];
        protected $place_order_btn_text = '';
        protected function __construct()
        {
        }
        public function get_template_slug()
        {
        }
        protected function address_i18_handling()
        {
        }
        protected function checkout_fragments()
        {
        }
        public function add_checkout_fragments($fragments)
        {
        }
        public function update_base_country()
        {
        }
        public final function get_base_country()
        {
        }
        public function remove_action_at_page_found()
        {
        }
        public function get_template_type()
        {
        }
        public function get_step_count()
        {
        }
        public function get_current_step()
        {
        }
        public function get_template_fields_class()
        {
        }
        public function default_css_class()
        {
        }
        public function no_follow_no_index()
        {
        }
        public function enqueue_script()
        {
        }
        public function localize_locals()
        {
        }
        protected function get_localize_data()
        {
        }
        public function get_cancel_page_link()
        {
        }
        protected function get_analytics_data()
        {
        }
        public function remove_woocommerce_js_css()
        {
        }
        public function remove_theme_css_and_scripts()
        {
        }
        public function get_theme_css_path()
        {
        }
        public function add_header_script()
        {
        }
        public function add_footer_script()
        {
        }
        public function checkout_form_login()
        {
        }
        public function checkout_form_coupon()
        {
        }
        public function wfacp_default_field($default, $index)
        {
        }
        public function remove_order_summary_table_add_extra_data($fragments)
        {
        }
        public function add_fragment_order_summary($fragments)
        {
        }
        public function add_fragment_shipping_calculator($fragments)
        {
        }
        public function add_fragment_product_switching($fragments)
        {
        }
        public function add_place_order_btn_text($fragments)
        {
        }
        public function add_fragment_order_total($fragments)
        {
        }
        public function add_mini_cart_fragments($fragments)
        {
        }
        public function add_fragment_coupon($fragments)
        {
        }
        public function change_template_location_for_cart_shipping($template, $template_name, $template_path)
        {
        }
        public function change_template_location_for_payment($template, $template_name, $template_path)
        {
        }
        /**
         * @param $fields
         *
         * @return array
         * @since 1.0
         */
        public function woocommerce_checkout_fields($fields)
        {
        }
        public function get_checkout_fields()
        {
        }
        public function set_priority_of_form_fields($template_fields, $fields)
        {
        }
        /**
         * Handle first and last name of shipping and billing field
         *
         * @param $template_fields
         *
         * @return array
         *
         * @since 1.6.0
         */
        public function handling_checkout_post_data($template_fields)
        {
        }
        public function enable_need_shipping()
        {
        }
        /**
         * Update Address Field Vice versa
         *
         * @param $posted_data
         *
         * @return mixed
         */
        public function set_checkout_posted_data($posted_data)
        {
        }
        public function set_address_data($order, $posted_data)
        {
        }
        public function process_phone_field()
        {
        }
        public function update_custom_fields($order_id, $posted_data)
        {
        }
        /**
         * Return shipping or billing
         * get which address field is hidden in form Shipping or billing
         * @return string
         */
        public function get_shipping_billing_index()
        {
        }
        /**
         * @param $template_fields
         *
         * @return mixed
         * @since 1.6.0
         */
        public function correct_country_state_locals($template_fields)
        {
        }
        public function get_google_webfonts()
        {
        }
        public function get_view($template)
        {
        }
        public function get_template_url($template = '')
        {
        }
        public function get_slug()
        {
        }
        public function get_url()
        {
        }
        public function get_wfacp_id()
        {
        }
        public function set_wfacp_id($wfacp_id = \false)
        {
        }
        public function get_fieldsets()
        {
        }
        public function get_fields()
        {
        }
        public final function set_data($data = \false)
        {
        }
        public function wfacp_get_header()
        {
        }
        public function wfacp_get_footer()
        {
        }
        public function wfacp_get_sidebar()
        {
        }
        public function wfacp_get_product()
        {
        }
        public function have_shipping_address()
        {
        }
        public function have_billing_address()
        {
        }
        public final function wfacp_get_form()
        {
        }
        public final function get_back_button($current_action, $formData = [])
        {
        }
        public final function get_next_button($current_action, $formData = [])
        {
        }
        public final function get_payment_box()
        {
        }
        /**
         * Prepopulate field data From URL
         * if data not present in URL then we check default data and populate the data
         *
         * @param $value
         * @param $key
         * @param $field
         *
         * @return mixed|string
         */
        public function pre_populate_from_get_parameter($value, $key, $field)
        {
        }
        public function remove_form_billing_and_shipping_html($template)
        {
        }
        public function replace_recurring_total_shipping($template, $template_name)
        {
        }
        public function remove_admin_bar($status)
        {
        }
        public function show_account_fields($key, $field, $dvalue)
        {
        }
        public function woocommerce_countries_shipping_countries($countries)
        {
        }
        public function woocommerce_countries_allowed_countries($countries)
        {
        }
        public function remove_add1_add2_local_field_selector($locale_fields)
        {
        }
        public function add_viewport_meta()
        {
        }
        public function reattach_necessary_hooks()
        {
        }
        public function display_hide_payment_box_heading()
        {
        }
        /**
         * @param $total
         *
         * @return false|string
         *
         * check shipping total if its less then or zero and check shipping name
         */
        public function wc_check_matched_rate($total)
        {
        }
        /**
         * @return false|string
         *
         * Return Shipping Name when Local Pickup Activate in shipping
         */
        public function check_shipping_name()
        {
        }
        public function display_undo_message()
        {
        }
        public function display_mini_cart_undo_message()
        {
        }
        public function display_order_summary_undo_message($field)
        {
        }
        public function payment_button_text()
        {
        }
        /**
         * Forcefully change order button text for authorize and paypal express gateway
         *
         * @param $gateways
         *
         * @return mixed
         */
        public function change_payment_gateway_text($gateways)
        {
        }
        /**
         * Change cancel url for dedicated only
         *
         * @param $url
         *
         * @return false|string
         */
        public function change_cancel_url($url)
        {
        }
        public function have_coupon_field()
        {
        }
        public function have_shipping_method()
        {
        }
        public function get_wc_addr2_company_value()
        {
        }
        public function check_cart_coupons($fragments)
        {
        }
        public function call_before_cart_link($breadcrumb)
        {
        }
        public function get_wfacp_version()
        {
        }
        public function add_styling_class_to_country_field($field, $key)
        {
        }
        public function wc_cart_totals_coupon_label($coupon, $echo = \true)
        {
        }
        public function get_class_from_body()
        {
        }
        public function remove_extra_payment_gateways_in_customizer($gateways)
        {
        }
        public function set_selected_template($data)
        {
        }
        public function get_selected_register_template()
        {
        }
        protected function get_field_css_ready($template_slug, $field_index)
        {
        }
        public function merge_builder_data($field, $field_index)
        {
        }
        public function get_preview_field_heading()
        {
        }
        public function get_preview_field_sub_heading()
        {
        }
        public function set_current_open_step($step = 'single_step')
        {
        }
        public function get_current_open_step()
        {
        }
        public function set_form_data($settings)
        {
        }
        public function set_mini_cart_data($settings)
        {
        }
        public function get_form_data()
        {
        }
        public function get_heading_title_class()
        {
        }
        public function get_heading_class()
        {
        }
        public function get_sub_heading_class()
        {
        }
        public function get_payment_desc()
        {
        }
        public function payment_heading()
        {
        }
        public function payment_sub_heading()
        {
        }
        public function change_single_step_label($name, $current_action)
        {
        }
        public function change_two_step_label($name, $current_action)
        {
        }
        public function change_place_order_button_text($text)
        {
        }
        public function payment_button_alignment()
        {
        }
        public function display_back_button($step, $current_step)
        {
        }
        public function close_back_button_div($step, $current_step)
        {
        }
        public function display_next_button($step, $current_step)
        {
        }
        public function change_back_step_label($text, $next_action, $current_action)
        {
        }
        public function add_class_change_place_order($btn_text)
        {
        }
        public function preview_field_generate($step, $instance)
        {
        }
        public function get_template_type_px()
        {
        }
        public function get_mobile_mini_cart_collapsible_title()
        {
        }
        public function enable_collapsed_coupon_field()
        {
        }
        public function collapse_enable_coupon_collapsible()
        {
        }
        public function enable_coupon_right_side_coupon()
        {
        }
        public function get_mobile_mini_cart_expand_title()
        {
        }
        public function get_coupon_button_text()
        {
        }
        public function get_product_switcher_mobile_style()
        {
        }
        public function get_mobile_mini_cart($input_data = [])
        {
        }
        public function get_data()
        {
        }
        public function get_smart_buttons()
        {
        }
        public final function display_smart_buttons()
        {
        }
        /**
         *backward compatibility for header footer
         */
        public function get_customizer_data()
        {
        }
        public final function get_container()
        {
        }
        public function get_theme_header()
        {
        }
        public function get_theme_footer()
        {
        }
        public function global_css()
        {
        }
        /**
         * Override this when new template using theme template or aero checkout boxed template
         * @return bool
         */
        public function use_own_template()
        {
        }
        public function remove_admin_bar_print_hook()
        {
        }
        public final function remove_unused_js()
        {
        }
        public function get_order_pay_summary($order)
        {
        }
        public function get_order_pay_summary_heading()
        {
        }
        public function add_body_class($class)
        {
        }
        public function mini_cart_heading()
        {
        }
        public function mini_cart_allow_product_image()
        {
        }
        public function mini_cart_allow_quantity_box()
        {
        }
        public function mini_cart_allow_deletion()
        {
        }
        public function mini_cart_allow_coupon()
        {
        }
        public function mini_cart_collapse_enable_coupon_collapsible()
        {
        }
        public function collapse_order_delete_item()
        {
        }
        public function collapse_order_quantity_switcher()
        {
        }
        public function display_image_in_collapsible_order_summary()
        {
        }
        public function get_mini_cart_widget($widget_id)
        {
        }
        public function get_mini_cart_fragments($fragments, $widget_id)
        {
        }
        public function get_mini_cart_coupon($widget_id)
        {
        }
        public function get_order_total_widget($widget_id)
        {
        }
        public function add_fragment_coupon_sidebar($fragments)
        {
        }
        public function display_top_notices()
        {
        }
        public function replace_merge_tag($text)
        {
        }
        public function modern_label($field)
        {
        }
        public function get_field_label_position()
        {
        }
        /**
         * Prevent Placeholder & label Mismatch issue when country changed
         * this code not impact on translation of label & placeholder
         *
         * i.e Now Label & placeholder of Postcode field In Ireland is  same`EIRCODE`
         *
         * @param $countries
         *
         * @return mixed
         */
        public function address_i18_country($countries)
        {
        }
        /**
         * WooCommerce Translate below 3 field city,postcode,State field
         *
         * @param $local
         *
         * @return array
         */
        public function address_i18_same_label_placeholder($local)
        {
        }
        public function trigger_js_event_editor()
        {
        }
        /**
         * Unset Yoast Meta Description(Meta Tag og:desc,twitter:desc) tag for our checkout.
         *
         * @param $descriptions
         *
         * @return mixed
         */
        public function unset_open_graph_description_Presenter($descriptions)
        {
        }
        /**
         * to avoid unserialize of the current class
         */
        public function __wakeup()
        {
        }
        /**
         * to avoid serialize of the current class
         */
        public function __sleep()
        {
        }
        /**
         * To avoid cloning of current template class
         */
        protected function __clone()
        {
        }
    }
    class WFACP_wfacpkirki
    {
        public function __construct()
        {
        }
        public static function get_instance()
        {
        }
    }
    //Exit if accessed directly
    class WFACP_Reporting
    {
        public static function get_instance()
        {
        }
        public function create_table()
        {
        }
        public function is_order_renewal($order)
        {
        }
        /**
         * hooked @woocommerce_order_status_changed
         *
         * @param $order_id
         * @param $from
         * @param $to
         *
         * @return false
         */
        public function insert_row_for_ipn_based_gateways($order_id, $from, $to)
        {
        }
        /**
         * hooked @woocommerce_checkout_create_order
         *
         * @param WC_Order $order
         * @param $posted_data
         */
        public function update_reporting_data_in_meta($order, $posted_data)
        {
        }
        /**
         * hooked @woocommerce_thankyou
         *
         * @param $order_id
         *
         * @return bool
         */
        public function updating_reports_from_orders($order_id)
        {
        }
        public function delete_report_for_order($post_id)
        {
        }
        public function get_session_key($aero_id)
        {
        }
        public function update_session_key($aero_id)
        {
        }
        public function check_if_autobot_cart_restored()
        {
        }
        public function wfacp_clear_view_session($order_id)
        {
        }
        public function update_order_review($postdata)
        {
        }
        public function wfacp_custom_order_status($all_status)
        {
        }
        /**
         * @param $order_id
         *
         * Full refunded process for analytics
         */
        public function fully_refunded_process($order_id)
        {
        }
        /**
         * @param $order_id
         * @param $refund_id
         * Partially refunded process for analytics
         */
        public function partially_refunded_process($order_id, $refund_id)
        {
        }
        public function get_ipn_gateways()
        {
        }
    }
    abstract class WFACP_Analytics
    {
        protected $slug = '';
        protected $checkout_data = [];
        protected $add_to_cart_data = [];
        protected $id = [];
        protected static $available_services = [];
        protected static $global_settings = [];
        protected static $page_settings = [];
        protected static $tag_manager_enqueued = [];
        protected $variable_as_simple = \false;
        protected $id_prefix = '';
        protected $id_suffix = '';
        protected $exclude_tax = \false;
        protected $content_id_type = '';
        protected function __construct()
        {
        }
        public final function prepare_data()
        {
        }
        public final function number_format($value, $format_count = 2)
        {
        }
        protected function enable_tracking()
        {
        }
        public function get_checkout_data()
        {
        }
        public function get_add_to_cart_data()
        {
        }
        public function is_fb_enable_content_on()
        {
        }
        public function get_product_content_id($product_id)
        {
        }
        public function get_cart_item_id($item)
        {
        }
        public function get_options()
        {
        }
        public function enable_custom_event()
        {
        }
        /**
         * @param $product_obj WC_Product
         * @param $cart_item
         *
         * @return array
         */
        public function get_item($product_obj, $cart_item)
        {
        }
        public function get_prepare_data()
        {
        }
        public static final function get_available_service()
        {
        }
        /**
         * @param string $taxonomy Taxonomy name
         *
         * @return array Array of object term names
         */
        public function get_object_terms($taxonomy, $post_id)
        {
        }
        function getWooCartTotal()
        {
        }
        public function get_key()
        {
        }
        public function get_conversion_api_access_token()
        {
        }
        public function get_conversion_api_test_event_code()
        {
        }
        protected static function print_google_tag_manager_js($pixel_id)
        {
        }
        public static function should_render_utm_script()
        {
        }
        /**
         * Add Generic event params to the data in events
         * @return array
         */
        public static function get_generic_event_params()
        {
        }
        /**
         * @param $product \WC_Product
         *
         * @return array
         */
        public function get_product_item($product)
        {
        }
        public function is_global_pageview_enabled()
        {
        }
        public function is_global_add_to_cart_enabled()
        {
        }
    }
    class WFACP_Analytics_GA extends \WFACP_Analytics
    {
        protected $slug = 'google_ua';
        protected function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function get_key()
        {
        }
        public function enable_custom_event()
        {
        }
        public function print_tag_js()
        {
        }
        public function get_prepare_data()
        {
        }
        public function get_item($product, $cart_item)
        {
        }
        public function get_product_item($product)
        {
        }
        public function remove_item($product_obj, $cart_item)
        {
        }
        public function get_checkout_data()
        {
        }
        public function get_items_data()
        {
        }
        public function is_global_pageview_enabled()
        {
        }
        public function is_global_add_to_cart_enabled()
        {
        }
    }
    class WFACP_Analytics_GADS extends \WFACP_Analytics_GA
    {
        protected $slug = 'google_ads';
        protected function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function get_key()
        {
        }
        public function get_prepare_data()
        {
        }
        public function get_item($product, $cart_item)
        {
        }
        public function get_product_item($product)
        {
        }
        public function remove_item($product_obj, $cart_item)
        {
        }
        public function get_items_data()
        {
        }
        public function enable_custom_event()
        {
        }
        public function is_global_pageview_enabled()
        {
        }
        public function is_global_add_to_cart_enabled()
        {
        }
    }
    class WFACP_Analytics_Pint extends \WFACP_Analytics
    {
        protected $slug = 'pint';
        protected function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function get_key()
        {
        }
        public function enable_custom_event()
        {
        }
        /**
         * @param $product_obj WC_Product
         * @param $cart_item WC_Order_Item
         *
         * @return array
         */
        public function get_item($product_obj, $cart_item)
        {
        }
        public function get_product_item($product_obj)
        {
        }
        public function remove_item($product_obj, $cart_item)
        {
        }
        public function get_checkout_data()
        {
        }
        public function get_add_to_cart_data()
        {
        }
        public function is_global_add_to_cart_enabled()
        {
        }
    }
    class WFACP_Analytics_SnapChat extends \WFACP_Analytics
    {
        protected $slug = 'snapchat';
        protected function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function get_options()
        {
        }
        public function get_key()
        {
        }
        public function get_checkout_data()
        {
        }
        /**
         * @param $product_obj WC_Product
         * @param $cart_item
         *
         * @return array
         */
        public function get_item($product_obj, $cart_item)
        {
        }
        public function get_product_item($product_obj)
        {
        }
        public function remove_item($product_obj, $cart_item)
        {
        }
        public function get_add_to_cart_data()
        {
        }
        public function is_global_pageview_enabled()
        {
        }
        public function is_global_add_to_cart_enabled()
        {
        }
    }
    class WFACP_Analytics_Pixel extends \WFACP_Analytics
    {
        protected $slug = 'pixel';
        protected function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function get_key()
        {
        }
        public function enable_custom_event()
        {
        }
        public function get_checkout_data()
        {
        }
        /**
         * @param $product_obj WC_Product
         * @param $cart_item
         *
         * @return array
         */
        public function get_item($product_obj, $cart_item)
        {
        }
        public function get_product_item($product_obj)
        {
        }
        public function remove_item($product_obj, $cart_item)
        {
        }
        public function get_add_to_cart_data()
        {
        }
        public function is_global_pageview_enabled()
        {
        }
        public function is_global_add_to_cart_enabled()
        {
        }
    }
    class WFACP_Analytics_TikTok extends \WFACP_Analytics
    {
        protected $slug = 'tiktok';
        protected function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function get_key()
        {
        }
        public function enable_custom_event()
        {
        }
        public function get_checkout_data()
        {
        }
        /**
         * @param $product_obj WC_Product
         * @param $cart_item
         *
         * @return array
         */
        public function get_item($product_obj, $cart_item)
        {
        }
        public function get_product_item($product_obj)
        {
        }
        public function remove_item($product_obj, $cart_item)
        {
        }
        public function get_add_to_cart_data()
        {
        }
        public function is_global_add_to_cart_enabled()
        {
        }
    }
    /**
     * Class contains the basic functions responsible for front end views.
     * Class WFACP_View
     */
    final class WFACP_Template_loader
    {
        public static $is_checkout = \false;
        public function setup_theme()
        {
        }
        public function get_license_key_funnel_builder_pro()
        {
        }
        /**
         * Loads all templates from DB config only where its required
         *
         * @param false $force true to force setup
         */
        public function add_default_template($force = \false)
        {
        }
        public function register_template_type($data)
        {
        }
        public function register_template($slug, $data, $type = 'pre_built')
        {
        }
        public function remove_template_type($type)
        {
        }
        public function remove_all_templates($type)
        {
        }
        public static function get_instance()
        {
        }
        public function is_wfacp_checkout_page()
        {
        }
        public function setup_preview()
        {
        }
        /**
         * Finds out if its safe to initiate data setup for the current request.
         * Checks for the environmental conditions and provide results.
         * @return bool true on success| false otherwise
         * @see WFACP_Template_loader::maybe_setup_page()
         */
        public function is_valid_state_for_data_setup()
        {
        }
        /**
         * @hooked over `init`:15
         * This method try and sets up the data for all the existing pages.
         * customizer-admin | customizer-preview | front-end-funnel | front-end-ajax-request-during-funnel
         * For the given environments we have our offer ID setup at this point. So its safe and necessary to set the data.
         * This method does:
         * 1. Fetches and sets up the offer data based on the offer id provided
         * 2. Finds the loads the appropriate template.
         * 3. loads offer data to the template instance
         * 4. Build offer data for the current offer
         */
        public function maybe_setup_page()
        {
        }
        /**
         * Locate Template using offer meta data also setup data
         *
         * @param $wfacp_id
         *
         * @return mixed|null
         */
        public function load_template($wfacp_id)
        {
        }
        public function assign_template($template)
        {
        }
        /**
         * @hooked over `template_include`
         * This method checks for the current running funnels and controller to setup data & offer validation
         * It also loads and echo/prints current template if the offer demands to.
         *
         * @param $template
         *
         * @return mixed
         */
        public function maybe_load($template)
        {
        }
        public function get_template_type()
        {
        }
        public function get_template_type_data()
        {
        }
        public function locate_template($slug, $template_type = 'pre_built', $data = \false)
        {
        }
        public function get_template_path_by_template($slug)
        {
        }
        /**
         * @param string $is_single
         *
         * @return array
         */
        public function get_templates($builder = '')
        {
        }
        public function get_single_template($template = '', $type = 'pre_built')
        {
        }
        public function get_template_ins()
        {
        }
        /**
         * to avoid unserialize of the current class
         */
        public function __wakeup()
        {
        }
        /**
         * to avoid serialize of the current class
         */
        public function __sleep()
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
         * @param string $plugin_init_file Plguin init file.
         *
         * @return mixed
         * @since 1.0.0
         *
         */
        public function get_plugin_status($plugin_init_file)
        {
        }
        /**
         * Check if Divi theme is install status.
         *
         * @return boolean
         */
        public function is_divi_theme_installed()
        {
        }
        /**
         * Check if divi theme enabled for post id.
         *
         * @param object $theme theme data.
         *
         * @return boolean
         */
        public function is_divi_theme_enabled($theme = \false)
        {
        }
        public function localize_page_builder_texts()
        {
        }
        public function get_dependent_plugins_for_page_builder($page_builder_slug = '', $default = 'elementor')
        {
        }
        /**
         * @return WP_Post;
         */
        public function get_checkout_post()
        {
        }
    }
    /**
     * Class wfacp_AJAX_Controller
     * Handles All the request came from front end or the backend
     */
    abstract class WFACP_AJAX_Controller
    {
        public static function init()
        {
        }
        public static function handle_admin_ajax()
        {
        }
        public static function ps_setting($pageiD)
        {
        }
        public static function handle_public_ajax()
        {
        }
        public static function check_actions($data)
        {
        }
        public static function merge_fragments($fragments)
        {
        }
        public static function get_available_public_endpoints()
        {
        }
        public static function get_public_endpoints()
        {
        }
        /**
         * Create new checkout page OR Update checkout page
         */
        public static function add_checkout_page()
        {
        }
        /*
         * Send Response back to checkout page builder
         * With nonce security keys
         * also delete transient of particular checkout page it page is found in request
         */
        public static function check_nonce()
        {
        }
        public static function send_resp($data = array())
        {
        }
        public static function product_search($term = \false, $return = \false)
        {
        }
        /**
         * Add product to product list of Checkout page
         */
        public static function add_product()
        {
        }
        /**
         * Remove a product from product list of checkout page
         */
        public static function remove_product()
        {
        }
        /**
         * Save product with product settings to checkout page
         * Save checkout page
         */
        public static function save_products()
        {
        }
        public static function is_wfacp_front_ajax()
        {
        }
        /**
         * Save form fields of checkout page
         */
        public static function save_layout()
        {
        }
        /**
         * Add custom field to current form
         */
        public static function add_field()
        {
        }
        /**
         * Delete custom field from form of checkout page
         */
        public static function delete_custom_field()
        {
        }
        /**
         * Update custom field of checkout form
         */
        public static function update_custom_field()
        {
        }
        /**
         * Toggle status of checkout page from Admin page and Builder page
         */
        public static function update_page_status()
        {
        }
        /**
         * Save selected design template against checkout page
         */
        public static function save_design()
        {
        }
        public static function remove_design()
        {
        }
        public static function find_and_removed_item_key($item_key)
        {
        }
        /**
         * Add product to cart from product switcher UI when checkbox is clicked
         */
        public static function addon_product($post)
        {
        }
        /**
         * Remove item from cart when client uncheck the product checkbox
         */
        public static function remove_addon_product($post)
        {
        }
        /**
         * Switch products it self other add to cart product
         */
        public static function switch_product_addon($post)
        {
        }
        /**
         * Update item from product switcher
         */
        public static function update_product_qty($post)
        {
        }
        /**
         * Save checkout page setting to checkout page
         */
        public static function save_settings()
        {
        }
        /**
         * Save aero checkout global settings
         */
        public static function save_global_settings()
        {
        }
        public static function update_global_settings_fields($options)
        {
        }
        public static function preview_details()
        {
        }
        /**
         * Generate the quick preview html
         */
        public static function wf_quick_view_ajax()
        {
        }
        public static function update_cart_item_quantity($post)
        {
        }
        public static function make_wpml_duplicate()
        {
        }
        public static function update_cart_multiple_page($post)
        {
        }
        public static function apply_coupon($bump_action_data)
        {
        }
        public static function remove_coupon($bump_action_data)
        {
        }
        public static function prep_fees()
        {
        }
        public static function remove_cart_item($post)
        {
        }
        public static function undo_cart_item($post)
        {
        }
        public static function hide_notification()
        {
        }
        public static function import_template()
        {
        }
        /**
         * Ajax action to activate plugin
         */
        public static function activate_plugin()
        {
        }
        public static function get_divi_form_data()
        {
        }
        public static function get_divi_order_summary_data()
        {
        }
        public static function analytics()
        {
        }
        /**
         *
         * add ct_inner in oxygen url
         */
        public static function update_edit_url()
        {
        }
    }
    abstract class WFACP_Optimizations
    {
        public static function init()
        {
        }
        public static function optimizations()
        {
        }
        public static function option_woocommerce_ship_to_countries($status)
        {
        }
        public static function preferred_country($countries)
        {
        }
    }
    class WFACP_Order_pay
    {
        protected $order = \null;
        protected $order_key = \null;
        protected $order_id = \null;
        protected function __construct()
        {
        }
        public static function get_instance()
        {
        }
        public function detect_order_pay()
        {
        }
        public function change_global_page_id($page_id)
        {
        }
        public function is_order_pay()
        {
        }
        public function disable_mini_cart()
        {
        }
        public function skip_add_cart()
        {
        }
        public function replace_form_template($template)
        {
        }
        public function do_not_redirect_to_embed_checkout($status, $ovveride_id, $may_be_post, $design_data)
        {
        }
        public function get_order()
        {
        }
        public function get_order_id()
        {
        }
        public function get_order_key()
        {
        }
        public function remove_some_filter()
        {
        }
    }
    /**
     * Created by PhpStorm.
     * User: sandeep
     * Date: 26/7/18
     * Time: 5:10 PM
     */
    final class WFACP_Embed_Form_loader
    {
        public static $pop_up_trigger = \false;
        public $current_page_id = 0;
        public function is_divi_builder_page()
        {
        }
        /**
         * @return WFACP_Embed_Form_loader;
         */
        public static function get_instance()
        {
        }
        public function check_shortcode_exist($post_data, $post_excerpt = '')
        {
        }
        public function shortcode_exist($content)
        {
        }
        public function detect_shortcode()
        {
        }
        public function do_not_allow_shortcode_printing($status)
        {
        }
        public function shortcode($attributes)
        {
        }
        public function create_hidden_input_for_saving_current_page_id()
        {
        }
        public function add_embed_page_id($params)
        {
        }
        public function enable_rest_jsonp($status)
        {
        }
        public function active_woo_compatibility()
        {
        }
        public function remove_select2_wc()
        {
        }
        public function skip_add_to_cart($status)
        {
        }
        public function add_body_class($classes)
        {
        }
        /**
         * @param $status Boolean
         * @param $post
         * @param $loader WFACP_Template_loader
         */
        public function detect_page_located($status, $post)
        {
        }
        public function do_not_checkout_for_global_checkout($status, $post)
        {
        }
        public function do_not_execute_shortcode($status)
        {
        }
        public function remove_wc_style_dependency($status)
        {
        }
        public function page_is_editable()
        {
        }
        /**
         * to avoid unserialize of the current class
         */
        public function __wakeup()
        {
        }
        /**
         * to avoid serialize of the current class
         */
        public function __sleep()
        {
        }
    }
    class WFACP_Post_Table extends \WP_List_Table
    {
        public $per_page = 20;
        public $data;
        public $meta_data;
        public $date_format;
        public $sitepress_column = \null;
        public $screen = \null;
        /**
         * Constructor.
         * @since  1.0.0
         */
        public function __construct($args = array())
        {
        }
        public static function render_trigger_nav()
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
        public function column_cb($item)
        {
        }
        public function column_name($item)
        {
        }
        public function column_preview($item)
        {
        }
        public function column_last_update($item)
        {
        }
        public function column_description($item)
        {
        }
        public function column_quick_links($item)
        {
        }
        public function column_icl_translations($item)
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
        /**
         * Retrieve an array of columns for the list table.
         * @return array Key => Value pairs.
         * @since  1.0.0
         */
        public function get_columns()
        {
        }
        protected function get_sortable_columns()
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
        public function search_box($text = '', $input_id = 'wfacp')
        {
        }
        public function order_preview_template()
        {
        }
        public function get_hidden_columns()
        {
        }
        public function remove_columns_from_screen_option($culumns)
        {
        }
        public function column_poly_lang($item)
        {
        }
        protected function get_flag_html($language)
        {
        }
    }
    /**
     * Class WFACP_Wizard
     * Class controls rendering and behaviour of wizard for the FunnelKit Checkout
     */
    class WFACP_Wizard
    {
        public static $is_wizard_done;
        public static $step;
        public static $suffix;
        public static $steps;
        public static $license_state = \null;
        public static $key = '';
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
        public static function wfacp_setup_introduction()
        {
        }
        public static function wfacp_setup_ready()
        {
        }
        public static function wfacp_setup_activate()
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
     * @package     WFACPKirki
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
    class WFACPKirki_Field
    {
        /**
         * An array of the field arguments.
         *
         * @access protected
         * @var array
         */
        protected $args = array();
        /**
         * The ID of the wfacpkirki_config we're using.
         *
         * @see WFACPKirki_Config
         * @access protected
         * @var string
         */
        protected $wfacpkirki_config = 'global';
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
        protected $type = 'wfacpkirki-generic';
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
         * @see https://wfacpkirki.org/docs/arguments/output
         * @access protected
         * @var array
         */
        protected $output = array();
        /**
         * Use to automatically generate postMessage scripts.
         * Not necessary to use if you use 'transport' => 'auto'
         * and have already set an array for the 'output' argument.
         *
         * @see https://wfacpkirki.org/docs/arguments/js_vars
         * @access protected
         * @var array
         */
        protected $js_vars = array();
        /**
         * If you want to use a CSS compiler, then use this to set the variable names.
         *
         * @see https://wfacpkirki.org/docs/arguments/variables
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
         * Then it adds the field to WFACPKirki::$fields.
         *
         * @access public
         * @param string $config_id    The ID of the config we want to use.
         *                             Defaults to "global".
         *                             Configs are handled by the WFACPKirki_Config class.
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
         * Escape $wfacpkirki_config.
         *
         * @access protected
         */
        protected function set_wfacpkirki_config()
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_WFACPKirki_Generic extends \WFACPKirki_Field
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.3.2
     */
    /**
     * This is simply an alias for the WFACPKirki_Field_WFACPKirki_Generic class.
     */
    class WFACPKirki_Field_Generic extends \WFACPKirki_Field_WFACPKirki_Generic
    {
    }
    /**
     * Override field methods
     *
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Select extends \WFACPKirki_Field
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Preset extends \WFACPKirki_Field_Select
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * This is nothing more than an alias for the WFACPKirki_Field_Select class.
     * In older versions of WFACPKirki there was a separate 'select2' field.
     * This exists here just for compatibility purposes.
     */
    class WFACPKirki_Field_Select2_Multiple extends \WFACPKirki_Field_Select
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_URL extends \WFACPKirki_Field_WFACPKirki_Generic
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Dashicons extends \WFACPKirki_Field
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Radio extends \WFACPKirki_Field
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * This is nothing more than an alias for the WFACPKirki_Field_Select class.
     * In older versions of WFACPKirki there was a separate 'select2' field.
     * This exists here just for compatibility purposes.
     */
    class WFACPKirki_Field_Select2 extends \WFACPKirki_Field_Select
    {
    }
    /**
     * Override field methods
     *
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.3.2
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Sortable extends \WFACPKirki_Field
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Image extends \WFACPKirki_Field
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Color extends \WFACPKirki_Field
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Color_Alpha extends \WFACPKirki_Field_Color
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Upload extends \WFACPKirki_Field
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Link extends \WFACPKirki_Field_URL
    {
    }
    /**
     * Override field methods
     *
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Custom extends \WFACPKirki_Field
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Textarea extends \WFACPKirki_Field_WFACPKirki_Generic
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Multicolor extends \WFACPKirki_Field
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Radio_Image extends \WFACPKirki_Field_Radio
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Palette extends \WFACPKirki_Field_Radio
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Radio_Buttonset extends \WFACPKirki_Field_Radio
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Number extends \WFACPKirki_Field
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Slider extends \WFACPKirki_Field_Number
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Prior to version 0.8 there was a separate 'group-title' field.
     * This exists here just for backwards-compatibility purposes.
     */
    class WFACPKirki_Field_Group_Title extends \WFACPKirki_Field_Custom
    {
    }
    /**
     * Override field methods
     *
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Dimensions extends \WFACPKirki_Field
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Spacing extends \WFACPKirki_Field_Dimensions
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.3.2
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Color_Palette extends \WFACPKirki_Field
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Repeater extends \WFACPKirki_Field
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Checkbox extends \WFACPKirki_Field
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Switch extends \WFACPKirki_Field_Checkbox
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.3.2
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Dimension extends \WFACPKirki_Field
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Toggle extends \WFACPKirki_Field_Checkbox
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.0
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Background extends \WFACPKirki_Field
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Text extends \WFACPKirki_Field_WFACPKirki_Generic
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Typography extends \WFACPKirki_Field
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
         * Then it adds the field to WFACPKirki::$fields.
         *
         * @access public
         * @param string $config_id    The ID of the config we want to use.
         *                             Defaults to "global".
         *                             Configs are handled by the WFACPKirki_Config class.
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Multicheck extends \WFACPKirki_Field
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Code extends \WFACPKirki_Field
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
        public $input_attrs = array('aria-describedby' => 'wfacpkirki-code editor-keyboard-trap-help-1 editor-keyboard-trap-help-2 editor-keyboard-trap-help-3 editor-keyboard-trap-help-4');
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Date extends \WFACPKirki_Field
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.7
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_Editor extends \WFACPKirki_Field
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.0
     */
    /**
     * Field overrides.
     */
    class WFACPKirki_Field_FontAwesome extends \WFACPKirki_Field
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
    final class WFACPKirki_Color extends \ariColor
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
    class WFACPKirki_Control_Color extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-color';
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
    class WFACPKirki_Control_Radio_Image extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-radio-image';
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
    class WFACPKirki_Control_Custom extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-custom';
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
    class WFACPKirki_Control_Multicolor extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-multicolor';
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.23
     */
    /**
     * Adds the image control.
     */
    class WFACPKirki_Control_Upload extends \WP_Customize_Upload_Control
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
    class WFACPKirki_Control_Select extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-select';
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
    class WFACPKirki_Control_Slider extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-slider';
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
    class WFACPKirki_Control_Radio extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-radio';
    }
    /**
     * Customizer Control: cropped-image.
     *
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.23
     */
    /**
     * Adds the image control.
     */
    class WFACPKirki_Control_Cropped_Image extends \WP_Customize_Cropped_Image_Control
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
    class WFACPKirki_Control_Number extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-number';
    }
    /**
     * Repeater Settings.
     */
    class WFACPKirki_Settings_Repeater_Setting extends \WP_Customize_Setting
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       1.0
     */
    /**
     * Adds multiple input fiels that combined make up the background control.
     */
    class WFACPKirki_Control_Background extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-background';
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
    class WFACPKirki_Control_Repeater extends \WFACPKirki_Control_Base
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
    class WFACPKirki_Control_Dimension extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-dimension';
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
     * @package     WFACPKirki
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
    class WFACPKirki_Control_Checkbox extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-checkbox';
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
    class WFACPKirki_Control_Radio_Buttonset extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-radio-buttonset';
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
    class WFACPKirki_Control_Typography extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-typography';
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
    class WFACPKirki_Control_Sortable extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-sortable';
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
    class WFACPKirki_Control_Toggle extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-toggle';
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.0
     */
    /**
     * Adds the image control.
     */
    class WFACPKirki_Control_Image extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-image';
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
    class WFACPKirki_Control_Generic extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-generic';
    }
    /**
     * Dimensions control.
     * multiple fields with CSS units validation.
     */
    class WFACPKirki_Control_Dimensions extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-dimensions';
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
    class WFACPKirki_Control_MultiCheck extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-multicheck';
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
    class WFACPKirki_Control_Color_Palette extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-color-palette';
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
    class WFACPKirki_Control_Switch extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-switch';
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
    class WFACPKirki_Control_Palette extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-palette';
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
    class WFACPKirki_Control_Date extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-date';
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
    class WFACPKirki_Control_FontAwesome extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-fontawesome';
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
    class WFACPKirki_Control_Dashicons extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-dashicons';
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
    class WFACPKirki_Control_Editor extends \WFACPKirki_Control_Base
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-editor';
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * The actual editor is added from the WFACPKirki_Field_Editor class.
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
    class WFACPKirki_Control_Code extends \WFACPKirki_Control_Base
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.17
     */
    /**
     * Controls.
     */
    class WFACPKirki_Controls
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
    /**
     * The WFACPKirki autoloader.
     * Handles locating and loading other class-files.
     *
     * @package     WFACPKirki
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
    class WFACPKirki_Autoload
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
         * The WFACPKirki class autoloader.
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
    // Removed in https://github.com/aristath/wfacpkirki/pull/1682/files
    class WFACPKirki_Active_Callback
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
    class WFACPKirki_Sanitize_Values
    {
        /**
         * Checkbox sanitization callback.
         *
         * Sanitization callback for 'checkbox' type controls.
         * This callback sanitizes `$value` as a boolean value, either TRUE or FALSE.
         *
         * Deprecated. Use WFACPKirki_Field_Checkbox::sanitize() instead.
         *
         * @static
         * @access public
         * @see WFACPKirki_Field_Checkbox::sanitize()
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
    final class WFACPKirki_Toolkit
    {
        /**
         * Access the single instance of this class.
         *
         * @static
         * @access public
         * @return object WFACPKirki_Toolkit.
         */
        public static function get_instance()
        {
        }
    }
    /**
     * Initializes WFACPKirki
     *
     * @package     WFACPKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       1.0
     */
    /**
     * Initialize WFACPKirki
     */
    class WFACPKirki_Init
    {
        /**
         * The class constructor.
         */
        public function __construct()
        {
        }
        /**
         * Properly set the WFACPKirki URL for assets.
         *
         * @static
         * @access public
         */
        public static function set_url()
        {
        }
        /**
         * Add the default WFACPKirki control types.
         *
         * @access public
         * @since 3.0.0
         *
         * @param array $control_types The control types array.
         *
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
         * Alias for the is_plugin static method in the WFACPKirki_Util class.
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
         * Alias for the get_variables static method in the WFACPKirki_Util class.
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
         *
         * @param object $wp_customize The customizer object.
         *
         * @return void
         */
        public function remove_panels($wp_customize)
        {
        }
        /**
         * Remove sections.
         *
         * @since 3.0.17
         *
         * @param object $wp_customize The customizer object.
         *
         * @return void
         */
        public function remove_sections($wp_customize)
        {
        }
        /**
         * Remove controls.
         *
         * @since 3.0.17
         *
         * @param object $wp_customize The customizer object.
         *
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
    class WFACPKirki extends \WFACPKirki_Init
    {
        /**
         * Absolute path to the WFACPKirki folder.
         *
         * @static
         * @access public
         * @var string
         */
        public static $path;
        /**
         * URL to the WFACPKirki folder.
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
     * @package     WFACPKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     */
    /**
     * The WFACPKirki_Config object
     */
    final class WFACPKirki_Config
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
         * @return WFACPKirki_Config
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
     * Handles sections created via the WFACPKirki API.
     *
     * @package     WFACPKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       1.0
     */
    /**
     * Each section is a separate instrance of the WFACPKirki_Section object.
     */
    class WFACPKirki_Section
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
     * @package WFACPKirki
     * @subpackage Modules
     * @since 3.0.0
     */
    /**
     * Handles saving and sanitizing of user-meta.
     *
     * @since 3.0.0
     * @see WP_Customize_Setting
     */
    class WFACPKirki_Setting_User_Meta extends \WP_Customize_Setting
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
     * @package     WFACPKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     */
    /**
     * Our main WFACPKirki_Control object
     */
    class WFACPKirki_Control
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
         * @param array $args The field definition as sanitized in WFACPKirki_Field.
         */
        public function __construct($args)
        {
        }
        /**
         * Adds the control.
         *
         * @access protected
         * @param array $args The field definition as sanitized in WFACPKirki_Field.
         */
        protected final function add_control($args)
        {
        }
    }
    /**
     * Handles modules loading.
     *
     * @package     WFACPKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.0
     */
    /**
     * The WFACPKirki_Modules class.
     */
    class WFACPKirki_Modules
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
     * @package     WFACPKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       1.0
     */
    /**
     * Wrapper class for static methods.
     */
    class WFACPKirki_Values
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
         * @param string $config_id The configuration ID. @see WFACPKirki_Config.
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
     * Handles panels added via the WFACPKirki API.
     *
     * @package     WFACPKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       1.0
     */
    /**
     * Each panel is a separate instance of the WFACPKirki_Panel object.
     */
    class WFACPKirki_Panel
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
    class WFACPKirki_Helper
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
     * Handles sections created via the WFACPKirki API.
     *
     * @package     WFACPKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       1.0
     */
    /**
     * Each setting is a separate instance
     */
    class WFACPKirki_Settings
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
         * Creates a new WFACPKirki_Settings object.
         * Class constructor.
         *
         * @access public
         *
         * @param array $args The field definition as sanitized in WFACPKirki_Field.
         */
        public function __construct($args = array())
        {
        }
    }
    /**
     * WordPress Customize Setting classes
     *
     * @package WFACPKirki
     * @subpackage Modules
     * @since 3.0.0
     */
    /**
     * Handles saving and sanitizing of user-meta.
     *
     * @since 3.0.0
     * @see WP_Customize_Setting
     */
    class WFACPKirki_Setting_Site_Option extends \WP_Customize_Setting
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
     * @package     WFACPKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.17
     */
    /**
     * Additional tweaks for sections.
     */
    class WFACPKirki_Sections
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
     * A utility class for WFACPKirki.
     *
     * @package     WFACPKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.9
     */
    /**
     * Utility class.
     */
    class WFACPKirki_Util
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
         * Determine if WFACPKirki is installed as a plugin.
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
     * @package     WFACPKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       1.0
     */
    /**
     * Handles translations
     */
    class WFACPKirki_L10n
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
         * Allows overriding the "wfacpkirki" textdomain from a theme.
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
     * Handles sections created via the WFACPKirki API.
     *
     * @package     WFACPKirki
     * @category    Modules
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.0
     */
    /**
     * Handle selective refreshes introduced in WordPress 4.5.
     */
    class WFACPKirki_Modules_Selective_Refresh
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
    class WFACPKirki_Modules_Tooltips
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
    class WFACPKirki_Modules_Customizer_Styling
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
    class WFACPKirki_Modules_PostMessage
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
    class WFACPKirki_Modules_Post_Meta
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
    class WFACPKirki_Modules_Icons
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
     * @package     WFACPKirki
     * @subpackage  Custom Sections Module
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.0
     */
    /**
     * Default Section.
     */
    class WFACPKirki_Sections_Default_Section extends \WP_Customize_Section
    {
        /**
         * The section type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-default';
    }
    /**
     * Nested section.
     *
     * @package     WFACPKirki
     * @subpackage  Custom Sections Module
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.0
     */
    /**
     * Nested section.
     */
    class WFACPKirki_Sections_Nested_Section extends \WP_Customize_Section
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
        public $type = 'wfacpkirki-nested';
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
     * @package     WFACPKirki
     * @subpackage  Custom Sections Module
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.0
     */
    /**
     * Expanded Section.
     */
    class WFACPKirki_Sections_Expanded_Section extends \WP_Customize_Section
    {
        /**
         * The section type.
         *
         * @access public
         * @var string
         */
        public $type = 'wfacpkirki-expanded';
    }
    /**
     * Adds styles to the customizer.
     */
    class WFACPKirki_Modules_Custom_Sections
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
     * @package     WFACPKirki
     * @subpackage  Custom Sections Module
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.0
     */
    /**
     * Nested panel.
     */
    class WFACPKirki_Panels_Nested_Panel extends \WP_Customize_Panel
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
        public $type = 'wfacpkirki-nested';
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
     * @package     WFACPKirki
     * @category    Modules
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.28
     */
    /**
     * The WFACPKirki_Modules_CSS_Vars object.
     *
     * @since 3.0.28
     */
    class WFACPKirki_Modules_CSS_Vars
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
    final class WFACPKirki_Modules_CSS_Generator
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.0
     */
    /**
     * Handles field CSS output.
     */
    class WFACPKirki_Output
    {
        /**
         * The WFACPKirki configuration used in the field.
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.0
     */
    /**
     * Output overrides.
     */
    class WFACPKirki_Output_Field_Typography extends \WFACPKirki_Output
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.0
     */
    /**
     * Output overrides.
     */
    class WFACPKirki_Output_Field_Dimensions extends \WFACPKirki_Output
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.0
     */
    /**
     * Output overrides.
     */
    class WFACPKirki_Output_Field_Multicolor extends \WFACPKirki_Output
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.10
     */
    /**
     * Output overrides.
     */
    class WFACPKirki_Output_Field_Image extends \WFACPKirki_Output
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.0
     */
    /**
     * Output overrides.
     */
    class WFACPKirki_Output_Field_Background extends \WFACPKirki_Output
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
     * @package     WFACPKirki
     * @subpackage  CSS Module
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.0
     */
    /**
     * Handles writing CSS to a file.
     */
    class WFACPKirki_CSS_To_File
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
     * @package     WFACPKirki
     * @category    Modules
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.0
     */
    /**
     * The WFACPKirki_Modules_CSS object.
     */
    class WFACPKirki_Modules_CSS
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
         * The WFACPKirki_CSS_To_File object.
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
         *
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.0
     */
    /**
     * Output for CSS properties.
     */
    class WFACPKirki_Output_Property
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.0
     */
    /**
     * Output overrides.
     */
    class WFACPKirki_Output_Property_Font_Family extends \WFACPKirki_Output_Property
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.0
     */
    /**
     * Output overrides.
     */
    class WFACPKirki_Output_Property_Background_Position extends \WFACPKirki_Output_Property
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
     * @package     WFACPKirki
     * @subpackage  Controls
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       2.2.0
     */
    /**
     * Output overrides.
     */
    class WFACPKirki_Output_Property_Background_Image extends \WFACPKirki_Output_Property
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
     * @package     WFACPKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       1.0
     */
    /**
     * The WFACPKirki_Fonts object.
     */
    final class WFACPKirki_Fonts
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
         * @return object WFACPKirki_Fonts
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
     * @package     WFACPKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0
     */
    /**
     * Manages the way Google Fonts are enqueued.
     */
    final class WFACPKirki_Modules_Webfonts_Async
    {
        /**
         * Constructor.
         *
         * @access public
         * @since 3.0
         * @param string $config_id   The config-ID.
         * @param object $webfonts    The WFACPKirki_Modules_Webfonts object.
         * @param object $googlefonts The WFACPKirki_Fonts_Google object.
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
    class WFACPKirki_Modules_Webfonts
    {
        /**
         * The WFACPKirki_Fonts_Google object.
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
     * The WFACPKirki_Fonts object.
     *
     * @since 3.0.28
     */
    final class WFACPKirki_Fonts_Google_Local
    {
        /**
         * Create an instance of this object for a specific font-family.
         *
         * @static
         * @access public
         * @since 3.0.28
         * @param string $family The font-family name.
         * @return WFACPKirki_Fonts_Google_Local
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
     * @package     WFACPKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.28
     */
    /**
     * Manages the way Google Fonts are enqueued.
     */
    final class WFACPKirki_Modules_Webfonts_Local
    {
        /**
         * Constructor.
         *
         * @access public
         * @since 3..28
         * @param object $webfonts    The WFACPKirki_Modules_Webfonts object.
         * @param object $googlefonts The WFACPKirki_Fonts_Google object.
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
     * @package     WFACPKirki
     * @category    Core
     * @author      Aristeides Stathopoulos
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       1.0
     */
    /**
     * Manages the way Google Fonts are enqueued.
     */
    final class WFACPKirki_Fonts_Google
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
         * @return object WFACPKirki_Fonts_Google
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
    class WFACPKirki_Modules_Preset
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
    class WFACPKirki_Modules_Customizer_Branding
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
    class WFACPKirki_Modules_Field_Dependencies
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
    class WFACPKirki_Modules_Webfont_Loader
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
     * @package     WFACPKirki
     * @subpackage  Modules
     * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
     * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
     * @since       3.0.0
     */
    /**
     * Modifies the loading overlay.
     */
    class WFACPKirki_Modules_Loading
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
    /**
     * Class WFACP_Autonami
     * Class controls rendering and display of Autonami plugin use case
     */
    class WFACP_Autonami
    {
        public static function get_instance()
        {
        }
        public function __construct()
        {
        }
        public function register_admin_menu()
        {
        }
        public function admin_page()
        {
        }
        protected function output()
        {
        }
        protected function output_button()
        {
        }
        protected function autonami_install_check()
        {
        }
    }
    class WFACP_Notification
    {
        protected $active_cache_plugins = [];
        /**
         * Array values
         *
         * 'w3-total-cache'  => [
         * 'type'    => 'wf_warning',
         * 'buttons' => [
         * 'setting' => [
         * 'name'   => 'Go To Settings',
         * 'class'  => [ 'any_class' ],
         * 'url'    => '#',
         *    'target' => '_blank',
         * ],
         * ],
         * ]
         *
         * @var array
         */
        protected $default_plugins_list = ['w3-total-cache' => ['type' => 'wf_warning', 'buttons' => ['setting' => ['name' => 'Go To Settings']]], 'wp-cache' => ['type' => 'wf_warning', 'class' => ['custom_w3_total_cache_wrap'], 'buttons' => ['setting' => ['name' => 'Go To Settings']]], 'wpFastestCache' => ['type' => 'wf_warning', 'buttons' => ['setting' => ['name' => 'Go To Settings']]], 'wp-rocket' => ['type' => 'wf_warning', 'buttons' => ['setting' => ['name' => 'Go To Settings']]], 'comet-cache' => ['type' => 'wf_warning', 'buttons' => ['setting' => ['name' => 'Go To Settings']]], 'litespeed-cache' => ['type' => 'wf_warning', 'buttons' => ['setting' => ['name' => 'Go To Settings']]], 'plugin' => ['type' => 'wf_warning', 'buttons' => ['setting' => ['name' => 'Go To Settings']]], 'cachify' => ['type' => 'wf_warning', 'buttons' => ['setting' => ['name' => 'Go To Settings']]], 'simple-cache' => ['type' => 'wf_warning', 'buttons' => ['setting' => ['name' => 'Go To Settings']]], 'wp-hummingbird' => ['type' => 'wf_warning', 'buttons' => ['setting' => ['name' => 'Go To Settings']]]];
        protected $plugins_settings_url = ['w3-total-cache' => ['name' => 'W3 Total Cache', 'page_file' => 'admin.php', 'file_name' => 'w3-total-cache/w3-total-cache.php', 'documentation_url' => 'https://funnelkit.com/docs/aerocheckout/caching/w3-total-cache/', 'page_arguments' => ['page' => 'w3tc_pgcache']], 'wp-cache' => ['name' => 'WP Super Cache', 'page_file' => 'options-general.php', 'file_name' => 'wp-super-cache/wp-cache.php', 'documentation_url' => 'https://funnelkit.com/docs/aerocheckout/caching/wp-super-cache/', 'page_arguments' => ['page' => 'wpsupercache', 'tab' => 'settings']], 'wpFastestCache' => ['name' => 'WP Fastest Cache', 'page_file' => 'admin.php', 'file_name' => 'wp-fastest-cache/wpFastestCache.php', 'documentation_url' => 'https://funnelkit.com/docs/aerocheckout/caching/wp-fastest-cache/', 'page_arguments' => ['page' => 'wpfastestcacheoptions']], 'wp-rocket' => ['name' => 'WP Rocket Cache', 'page_file' => 'options-general.php', 'file_name' => 'wp-rocket/wp-rocket.php', 'documentation_url' => 'https://funnelkit.com/docs/aerocheckout/caching/wp-rocket/', 'page_arguments' => ['page' => 'wprocket']], 'comet-cache' => ['name' => 'Comet Cache', 'page_file' => 'admin.php', 'file_name' => 'comet-cache/comet-cache.php', 'documentation_url' => 'https://funnelkit.com/docs/aerocheckout/caching/comet-cache/', 'page_arguments' => ['page' => 'comet_cache']], 'litespeed-cache' => ['name' => 'LiteSpeed Cache', 'page_file' => 'admin.php', 'file_name' => 'litespeed-cache/litespeed-cache.php', 'documentation_url' => 'https://funnelkit.com/docs/aerocheckout/caching/litespeed-cache/', 'page_arguments' => ['page' => 'lscache-settings']], 'plugin' => ['name' => 'Hyper Cache', 'page_file' => 'options-general.php', 'file_name' => 'hyper-cache/plugin.php', 'documentation_url' => 'https://funnelkit.com/docs/aerocheckout/caching/hyper-cache/', 'page_arguments' => ['page' => 'hyper-cache/options.php']], 'cachify' => ['name' => 'Cachify Cache', 'page_file' => 'options-general.php', 'file_name' => 'cachify/cachify.php', 'documentation_url' => 'https://funnelkit.com/docs/aerocheckout/caching/cachify/', 'page_arguments' => ['page' => 'cachify']], 'simple-cache' => ['name' => 'Simple Cache', 'page_file' => 'options-general.php', 'file_name' => 'simple-cache/simple-cache.php', 'documentation_url' => 'https://funnelkit.com/docs/aerocheckout/caching/simple-cache/', 'page_arguments' => ['page' => 'simple-cache']], 'wp-hummingbird' => ['name' => 'WP Hummingbird Cache', 'page_file' => 'admin.php', 'file_name' => 'hummingbird-performance/wp-hummingbird.php', 'documentation_url' => 'https://funnelkit.com/docs/aerocheckout/caching/hummingbird-page-speed-optimization/', 'page_arguments' => ['page' => 'wphb-caching', 'view' => 'page_cache']]];
        protected function __construct()
        {
        }
        public function active_plugins_list()
        {
        }
        public function get_cache_text()
        {
        }
        public function get_settings_page_url($file_url = '', $scheme = 'admin', $arguments = [])
        {
        }
        public function get_active_cache_plugins()
        {
        }
        public function get_active_plugins()
        {
        }
        public function get_default_plugins_list()
        {
        }
        public static function get_instance()
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
    class WFACP_Control_Responsive extends \WP_Customize_Control
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
    //Exit if accessed directly
    /**
     * Class WFACP_Exporter
     * Handles Exporting of Aero Checkout Pages into JSON Downloadable File
     */
    class WFACP_Exporter
    {
        public function __construct()
        {
        }
        /**
         * @return WFACP_Exporter|null
         */
        public static function get_instance()
        {
        }
        public function maybe_export()
        {
        }
        public function get_acp_array_for_json($post_id)
        {
        }
        // Replace Image IDs with their URLs
        protected function place_customizer_image_urls($data)
        {
        }
        protected function get_image_url($attachment_id)
        {
        }
        public function maybe_export_single()
        {
        }
    }
    final class WFACP_admin
    {
        public $wfacp_id = 0;
        public $current_page = 'design';
        public $current_section;
        public $default_checkout_status = \false;
        public $wfacp_pages_table = \null;
        public static function get_instance()
        {
        }
        /**
         * Check if its our builder page and registered required nodes to prepare a breadcrumb
         */
        public function maybe_register_breadcrumbs()
        {
        }
        public function include_notification()
        {
        }
        public function set_section()
        {
        }
        public function register_admin_menu()
        {
        }
        public function admin_enqueue_assets()
        {
        }
        public function get_admin_url()
        {
        }
        public function get_localize_data()
        {
        }
        public function template_edit_url()
        {
        }
        /**
         * @return array
         */
        public function global_dependency_messages()
        {
        }
        public function get_available_countries()
        {
        }
        public function admin_customizer_enqueue_assets()
        {
        }
        public function open_admin_bar()
        {
        }
        public function admin_page()
        {
        }
        public function add_css_ready_classes($address)
        {
        }
        public function delete_checkout_pages()
        {
        }
        public function duplicate_checkout_pages()
        {
        }
        /**
         * this function use for display advanced field in order backend in General Tab
         *
         * @param $order WC_Order
         */
        public function show_advanced_field_order($order)
        {
        }
        public function admin_footer()
        {
        }
        public function update_our_custom_field_data()
        {
        }
        public function maybe_remove_all_notices_on_page()
        {
        }
        public function restrict_notices_display()
        {
        }
        public function wfacp_builder_merge_field_arguments($field, $id, $type, $available_fields)
        {
        }
        public function remove_theme_css_and_scripts()
        {
        }
        public function get_theme_css_path()
        {
        }
        public function creating_aero_default_pages()
        {
        }
        public function plugin_actions($links)
        {
        }
        public function plugin_uninstall_reasons($uninstall_reasons)
        {
        }
        public function add_short_code_wrapper()
        {
        }
        public function save_meta_box_value()
        {
        }
        public function add_meta_boxes_for_make_page_as_checkout()
        {
        }
        public function add_meta_boxes_for_shortcodes()
        {
        }
        public function render_my_meta_box()
        {
        }
        public function render_shortcode_meta_box()
        {
        }
        public function append_checkout_post_list($output)
        {
        }
        public function get_address_field_html($id = '')
        {
        }
        public function arrange_billing_fields($options)
        {
        }
        public function arrange_shipping_fields($options)
        {
        }
        public function arrange_order_of_address_fields($options, $addressOrder, $id = '', $replace_label = \true)
        {
        }
        public function add_back_button()
        {
        }
        public function render_back_to_aero_script_for_block_editor()
        {
        }
        public function remove_page_attributes()
        {
        }
        public function remove_block_editor($status, $post_type)
        {
        }
        /**
         * to avoid unserialize of the current class
         */
        public function __wakeup()
        {
        }
        /**
         * to avoid serialize of the current class
         */
        public function __sleep()
        {
        }
        public function wfacp_screen_options()
        {
        }
        public function save_screen_option($status, $option, $value)
        {
        }
        public function show_post_not_exist()
        {
        }
        function get_advanced_field()
        {
        }
        function wfacp_protected_meta($protected, $meta_key, $meta_type)
        {
        }
        public function add_pages_to_front_page_options($args)
        {
        }
        /*
         *  show checkout page on customize screen in set home page list
         */
        public function add_pages_to_front_page_customize_screen($pages, $args)
        {
        }
        public function bwf_general_settings_link()
        {
        }
        public function admin_footer_text($footer_text)
        {
        }
        public function permalink_box()
        {
        }
        /**
         * @param $existing_args
         * Exclude checkouts create by funnel builder or AB testing
         *
         * @return mixed
         */
        public function exclude_from_query($existing_args)
        {
        }
        public function maybe_show_wizard()
        {
        }
    }
    /**
     * Class WFACP_Insert_Page
     * Class controls the setting of FunnelKit Checkout page
     */
    class WFACP_Insert_Page
    {
        public function __construct($wfacp_id = 0)
        {
        }
        public function setTitle($title)
        {
        }
        public function setProducts()
        {
        }
        public function setFormLayout($is_multi = \false, $steps = 3)
        {
        }
        public function is_multi_step_form_type()
        {
        }
        public function get_form_step_count()
        {
        }
        public function get_wfacp_id()
        {
        }
        public function setTemplate($selected_template, $selected_type = 'pre_built')
        {
        }
        public function setCustomizer($setCustomizer)
        {
        }
        public function setSetting()
        {
        }
        public function setPostStatus($setPostStatus)
        {
        }
        public function setPageName($page_name)
        {
        }
        public function save()
        {
        }
        public function loadFromJson($json = [])
        {
        }
    }
    //Exit if accessed directly
    /**
     * Class WFACP_Importer
     * Handles Importing of Aero Checkout Pages Export JSON file
     */
    class WFACP_Importer
    {
        public $is_imported = \false;
        public function __construct()
        {
        }
        /**
         * @return WFACP_Importer|null
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
        public function import_from_json_data($acps)
        {
        }
        // Import Images from URLs
        protected function import_customizer_image_urls($data)
        {
        }
        protected function import_image($url)
        {
        }
        public function imported_successfully()
        {
        }
    }
    final class WFACP_Core
    {
        public $is_dependency_exists = \true;
        /**
         * @var WFACP_Template_loader
         */
        public $template_loader;
        /**
         * @var WFACP_public
         */
        public $public;
        /**
         * @var WFACP_Customizer
         */
        public $customizer;
        /**
         * @var WFACP_WooFunnels_Support
         */
        public $support;
        /**
         * @var WFACP_Template_Importer
         */
        public $importer;
        /**
         * @var WFACP_Embed_Form_loader
         */
        public $embed_forms;
        /**
         * @var WFACP_Order_pay
         */
        public $pay;
        /**
         * @var WFACP_Reporting
         */
        public $reporting;
        /**
         * @var WFACP_Role_Capability
         */
        public $role;
        /**
         * @return null|WFACP_Core
         */
        public static function get_instance()
        {
        }
        public static function register($short_name, $class)
        {
        }
        public function localization()
        {
        }
        public function load_classes()
        {
        }
        public function register_classes()
        {
        }
        public static function get_registered_class()
        {
        }
        public function redirect_on_activation($plugin)
        {
        }
        public function plugin_activation_hook()
        {
        }
        public function wc_version_check_notice()
        {
        }
        public function wp_version_check_notice()
        {
        }
        public function wc_not_installed_notice()
        {
        }
        public function maybe_flush_permalink($plugin)
        {
        }
        public function load_divi_importer()
        {
        }
        /**
         * @param $path
         * Return plugin full path
         */
        public function dir($path = '')
        {
        }
        /**
         * @param $path
         * Return plugin full path
         */
        public function url($path = '')
        {
        }
        public function elementor_importer()
        {
        }
        public function init_elementor()
        {
        }
        /**
         * to avoid unserialize of the current class
         */
        public function __wakeup()
        {
        }
        /**
         * to avoid serialize of the current class
         */
        public function __sleep()
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
    class WFACP_Oxy_Importer
    {
        public $delete_page_meta = \true;
        public function __construct()
        {
        }
        public function import($aero_id, $slug, $is_multi = 'no')
        {
        }
        public function update_product_switcher_settings()
        {
        }
        public function clear_oxy_page_cache_css($post_id)
        {
        }
    }
    interface WFACP_Import_Export
    {
        public function import($aero_id, $slug);
        public function export($aero_id, $slug);
    }
    /**
     * Elementor template library local source.
     *
     * Elementor template library local source handler class is responsible for
     * handling local Elementor templates saved by the user locally on his site.
     *
     * @since 1.0.0
     */
    class WFACP_Customizer_Embed_Form_Importer implements \WFACP_Import_Export
    {
        public function __construct()
        {
        }
        public function import($aero_id, $slug, $is_multi = 'no')
        {
        }
        public function export($aero_id, $slug)
        {
        }
    }
    class WFACP_Template_Importer
    {
        public static function get_error_message($code)
        {
        }
        public static function get_instance()
        {
        }
        public static function register($builder, $importer)
        {
        }
        /**
         * @param $aero_id
         * @param $builder
         * @param $slug
         *
         * @return bool
         */
        public function import($aero_id, $builder, $slug, $is_multi = 'no')
        {
        }
        /**
         * @param $aero_id
         * @param $builder
         * @param $slug
         *
         * @return array||null
         */
        public function export($aero_id, $builder, $slug)
        {
        }
        public function get_importer($builder)
        {
        }
        public function get_domain()
        {
        }
        /**
         * Import template remotely.
         * @return mixed
         */
        public function get_remote_template($template_id, $builder)
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
        public static function update_import_page_settings($aero_id, $import_page_settings)
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
    class WFACP_Elementor_Importer extends \Elementor\TemplateLibrary\Source_Local implements \WFACP_Import_Export
    {
        public $delete_page_meta = \true;
        public function __construct()
        {
        }
        public function import($aero_id, $slug, $is_multi = 'no')
        {
        }
        public function export($aero_id, $slug)
        {
        }
        /**
         *  Import single template
         *
         * @param int $post_id post ID.
         */
        public function import_aero_template($post_id, $content)
        {
        }
        public function clear_cache()
        {
        }
        public function update_product_switcher_settings()
        {
        }
        public function generate_kit()
        {
        }
    }
    class WFACP_Image_Importer
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
    class WFACP_Divi_Importer extends \ET_Core_Portability
    {
        public $delete_page_meta = \true;
        public function __construct($context)
        {
        }
        public function import_child($aero_id, $slug, $is_multi = 'no')
        {
        }
        public function import_aero_template($content)
        {
        }
        public function import($content = 'upload')
        {
        }
        public function update_product_switcher_settings()
        {
        }
        /**
         * Serialize images in chunks.
         *
         * @param array $images
         * @param string $method Method applied on images.
         * @param string $id Unique ID to use for temporary files.
         * @param integer $chunk
         *
         * @return array
         * @since 4.0
         *
         */
        protected function chunk_images($images, $method, $id, $chunk = 0)
        {
        }
    }
    /**
     * Gutenburg template library local source.
     *
     * Gutenburg template library local source handler class is responsible for
     * handling local Gutenburg templates saved by the user locally on his site.
     *
     * @since 1.0.0
     */
    class WFACP_Gutenberg_Importer implements \WFACP_Import_Export
    {
        public $delete_page_meta = \true;
        public function __construct()
        {
        }
        public function import($aero_id, $slug, $is_multi = 'no')
        {
        }
        public function update_product_switcher_settings()
        {
        }
        public function export($aero_id, $slug)
        {
        }
        public function download_image($url)
        {
        }
        public function delete_other_builder_data($post_id)
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
    class WFACP_Customizer_Importer implements \WFACP_Import_Export
    {
        public function __construct()
        {
        }
        public function import($aero_id, $slug, $is_multi = 'no')
        {
        }
        public function export($aero_id, $slug)
        {
        }
    }
    /**
     * WooCommerce Servired/RedSys Spain Gateway  by José Conti (v.17.0.2)
     */
    class WFACP_Compatibility_With_WC_Gateway_Redsys
    {
        public function __construct()
        {
        }
        public function enable()
        {
        }
        public function action()
        {
        }
        public function add_fields()
        {
        }
        public function add_internal_css()
        {
        }
    }
    class WFACP_Compatibility_With_Angel_Eye_PPCP
    {
        public function __construct()
        {
        }
        public function add_buttons($buttons)
        {
        }
        /**
         *
         * WHen PPCP Button available then we change button position forcefully  to top of the form.
         *
         * @param $position_hook
         *
         * @return mixed|string
         */
        public function change_top_position_hook($position_hook)
        {
        }
        public function add_paypal_buttons()
        {
        }
        public function disabled_hashtag_form_multistep_checkout($status)
        {
        }
        public function remove_some_js($paths)
        {
        }
        public function print_html()
        {
        }
        // this function only run when Order created via paypal express
        public function update_aero_field($order_id, $posted_data)
        {
        }
        // this function only run when Order created via paypal express
        public function update_conversion_post_id($post_id, $posted_data)
        {
        }
        public function disable_delay_discounting($api_request)
        {
        }
    }
    class WFACP_Stripe_GPAY_AND_APAY
    {
        public function __construct()
        {
        }
        public function add_buttons($buttons)
        {
        }
        public function add_stripe_gpay_apay_buttons()
        {
        }
        public function set_local_data($data)
        {
        }
        public function update_conversion_post_id($post_id)
        {
        }
        public function force_add_woocommerce_checkout_shortcode()
        {
        }
        public function replace_empty_string($status, $tag)
        {
        }
        public function add_internal_css()
        {
        }
    }
    class WFACP_PayPal_Standard
    {
        public function __construct()
        {
        }
        public function order_processed()
        {
        }
    }
    /**
     * Plugin Name: WooCommerce Przelewy24 Payment Gateway by Przelewy24 Sp. z o.o.(v1.0.6)
     */
    class WFACP_Przelewy24_Payment_Gateway
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
    }
    class WFACP_Afterpay_process_fields
    {
        public function __construct()
        {
        }
        public function wfacp_process_fields($data)
        {
        }
    }
    /**
     * PaysonCheckout for WooCommerce BY  Krokedril
     *
     * Class WFACP_Compatibility_PaysonCheckout_For_WC
     */
    class WFACP_Compatibility_PaysonCheckout_For_WC
    {
        public function __construct()
        {
        }
        public function disable_checkout_page_if_paysonCheckout_set($status)
        {
        }
    }
    /**
     * WooCommerce PayPal Payments by WooCommerce V 1.9.3
     * Plugin URI: https://woocommerce.com/products/woocommerce-paypal-payments/
     */
    class WFACP_Woocommerce_Paypal_Payments
    {
        protected $placeorder_back_button_text = '';
        public function __construct()
        {
        }
        public function action()
        {
        }
        public function add_internal_css()
        {
        }
    }
    /**
     * WooCommerce Affirm Gateway BY WooCommerce (v.1.2.2)
     *
     * Class WFACP_Compatibility_WC_Affirm
     */
    class WFACP_Compatibility_WC_Affirm
    {
        public function __construct()
        {
        }
        public function enable()
        {
        }
        public function action()
        {
        }
        public function add_internal_css()
        {
        }
    }
    /**
     * PPEC
     * Class WFACP_Compatibility_With_Paypal_Express
     */
    class WFACP_Compatibility_With_Paypal_Express
    {
        public function __construct()
        {
        }
        public function active_progress_bar($active, $step)
        {
        }
        public function woocommerce_checkout_init()
        {
        }
        public function merge_ppec_data($value, $field_index)
        {
        }
        /**
         * @param $status  bool
         * @param $instance WFACP_public
         */
        public function check_ppec_checkout_enable()
        {
        }
        public function stop_auto_puluation_fields($status)
        {
        }
        public function skip_product_switching_section($section)
        {
        }
        public function replace_form_template($template)
        {
        }
        public function paypal_custom_style()
        {
        }
        public function copy_change_in_checkout_details()
        {
        }
        public function woocommerce_checkout_fields($field)
        {
        }
        public function attach_paypal_btn()
        {
        }
        public function paypal_internal_css($selected_template_slug)
        {
        }
        public function remove_ppec_when_smart_button_enable($gateway)
        {
        }
        public function remove_some_js($paths)
        {
        }
        public function hide_quantity_switcher($status)
        {
        }
        public function hide_delete_icon($status)
        {
        }
        public function print_html()
        {
        }
    }
    class WFACP_Compatibility_With_Angel_Eye
    {
        public function __construct()
        {
        }
        public function v2_action()
        {
        }
        /**
         * @param $status  bool
         * @param $instance WFACP_public
         */
        public function check_angel_eye_checkout_enable($status, $instance)
        {
        }
        public function replace_form_template($template)
        {
        }
        public function enable_billing_and_shipping_address()
        {
        }
        public function woocommerce_checkout_fields($field)
        {
        }
        public function add_buttons($buttons)
        {
        }
        public function add_paypal_buttons()
        {
        }
        public function change_checkout_url($url)
        {
        }
        public function add_aero_parameter_in_paypal_request($request)
        {
        }
        public function attach_aero_parameter($api_request_url, $request)
        {
        }
        public function detect_canceled_url()
        {
        }
        public function redirect_proper_url($status)
        {
        }
        public function make_session_empty()
        {
        }
        public function disabled_hashtag_form_multistep_checkout($status)
        {
        }
        public function remove_some_js($paths)
        {
        }
        public function hide_quantity_switcher($status)
        {
        }
        public function hide_delete_icon($status)
        {
        }
        public function print_html()
        {
        }
        // this function only run when Order created via paypal express
        public function update_aero_field($order_id, $posted_data)
        {
        }
        // this function only run when Order created via paypal express
        public function update_conversion_post_id($post_id, $posted_data)
        {
        }
        public function disable_delay_discounting($api_request)
        {
        }
        public function handle_general_list_express_button()
        {
        }
    }
    class WFACP_Compatibility_With_Active_AmzPay
    {
        public $is_amazon_active = \false;
        public $logout_msg = '';
        public function __construct()
        {
        }
        public function add_message()
        {
        }
        public function skip_common_loading($status)
        {
        }
        public function skip_add_to_cart($status)
        {
        }
        public function amazon_internal_css($selected_template_slug)
        {
        }
        public function actions()
        {
        }
        public function remove_some_js($paths)
        {
        }
        public function ajax_actions()
        {
        }
        public function is_active_payment()
        {
        }
        public function add_custom_class_amazon_fileds($template_fields, $fields)
        {
        }
        public function override_checkout_fields_in_amazone_sec($fields_data)
        {
        }
        public function active_progress_bar($active, $step)
        {
        }
        public function embedd_active_progress_bar($active, $step_count, $num_of_steps)
        {
        }
        public function replace_form_template($template)
        {
        }
        public function add_buttons($buttons)
        {
        }
        public function add_amazon_pay_buttons()
        {
        }
        public function hide_quantity_switcher($status)
        {
        }
        public function hide_delete_icon($status)
        {
        }
        public function remove_action()
        {
        }
    }
    /**
     *  WooCommerce QuickPay
     * By Perfect Solution
     * http://wordpress.org/plugins/woocommerce-quickpay/
     * Class WFACP_Compatibility_With_WC_QuickPay
     */
    class WFACP_Compatibility_With_WC_QuickPay
    {
        public function __construct()
        {
        }
        public function remove_hooks()
        {
        }
    }
    /**
     * Compatibility  for 'PayPal Express Checkout Payment Gateway for WooCommerce ( Basic )' plugin
     * By webtoffee
     */
    class WFACP_EH_PAYPAL_Express
    {
        public function __construct()
        {
        }
        public function update_custom_fields($order_id, $posted_data)
        {
        }
    }
    /**
     * Klarna Checkout BY Klarna Krokedril
     *
     * Class WFACP_Compatibility_Klarna_checkout
     */
    class WFACP_Compatibility_Klarna_checkout
    {
        public function __construct()
        {
        }
        public function disable_checkout_page_if_klarna_checkout_set($status)
        {
        }
        public function remove_kco_event()
        {
        }
        public function remove_klarna_checkout_redirection()
        {
        }
        public function klarna_checkout_installed()
        {
        }
    }
    class WFACP_Compatibility_With_DataTrans
    {
        public function __construct()
        {
        }
        public function skip_detection($status)
        {
        }
    }
    class WFACP_Compatibility_With_Twint
    {
        public function __construct()
        {
        }
        public function skip_checkout_page($status)
        {
        }
    }
    /*
     * PeachPay for WooCommerce | One-Click Checkout by PeachPay, Inc. v(1.54.5)
     * URL https://woocommerce.com/products/peachpay
     *
     */
    class WFACP_PeachPay_For_WC
    {
        public function __construct()
        {
        }
        public function init_class()
        {
        }
    }
    /**
     * Payoneer Checkout  by Inpsyde GmbH (v.0.2.1)
     * Plugin URI: https://inpsyde.com
     */
    class WFACP_Compatibility_With_Payoneer_Checkout_Gateway
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
        public function internal_css()
        {
        }
    }
    class WFACP_Compatibility_With_payonecw
    {
        public function __construct()
        {
        }
        public function skip_detection($status)
        {
        }
    }
    /**
     * FFl API By Optimum7
     * Plugin URI: https://wordpress.org/plugins/ffl-api/
     */
    class WFACP_Compatibility_FFI_API
    {
        public $is_field = \false;
        public function __construct()
        {
        }
        public function is_enabled()
        {
        }
        public function add_field($fields)
        {
        }
        public function display_ffl_field($field, $key, $args)
        {
        }
        public function internal_css()
        {
        }
    }
    /**
     * AffiliateWP - Checkout Referrals by Sandhills Development, LLC (v.1.0.9)
     * Plugin Path : https://affiliatewp.com/add-ons/official-free/checkout-referrals/
     */
    class WFACP_AffiliateWP_Checkout_Referrals_WC
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function action()
        {
        }
        public function add_field($fields)
        {
        }
        public function display_field($field, $key)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
        public function internal_css()
        {
        }
    }
    class WFACP_WC_Disability_Vat_Exemption
    {
        public $instance = \null;
        public function __construct()
        {
        }
        public function action()
        {
        }
        public function add_field($fields)
        {
        }
        public function display_field($field, $key, $args)
        {
        }
        public function is_enable()
        {
        }
        public function internal_css()
        {
        }
    }
    /**
     * RY WooCommerce ECPay Invoice by Yang
     * Plugin URI: https://richer.tw/ry-woocommerce-ecpay-invoice/
     */
    class WFACP_RY_WC_Ecpay
    {
        public $instance = \null;
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function add_field($fields)
        {
        }
        public function action()
        {
        }
        public function display_field($field, $key)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
        public function internal_css()
        {
        }
    }
    /**
     * YITH WooCommerce Points and Rewards Premium by YITH upto(2.0.7)
     * Plugin Path: https://yithemes.com/themes/plugins/yith-woocommerce-points-and-rewards/
     */
    class WFACP_Compatibility_With_YTH_WC_Points_Rewards
    {
        public $instance = \null;
        public function __construct()
        {
        }
        public function is_enabled()
        {
        }
        public function action()
        {
        }
        public function add_field($fields)
        {
        }
        public function process_wfacp_html($field, $key)
        {
        }
        public function wfacp_internal_css()
        {
        }
    }
    /**
     * tefacturo Comprobantes Electronicos
     * Plugin URI: https://tefacturo.pe/solucion-para-pymes/
     * Class WFACP_Compatibility_tefacturo_lt
     */
    class WFACP_Compatibility_tefacturo_lt
    {
        public function __construct()
        {
        }
        public function add_field($fields)
        {
        }
        public function internal_css()
        {
        }
    }
    /**
     * WooCommerce Transdirect Shipping By Transdirect
     * Author URI: https://www.transdirect.com.au/e-commerce/woo-commerce/
     * Version: 7.5
     */
    class WFACP_Compatibility_Transdirect_Shipping
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
        public function add_field($fields)
        {
        }
        public function call_fields_hook($field, $key, $args)
        {
        }
        public function is_enabled()
        {
        }
        public function wfacp_internal_css()
        {
        }
    }
    /**
     * WooCommerce Delivery Date & Time Pro By CodeRockz
     * Class WFACP_Compatibility_WC_Coderockz_Delivery
     */
    class WFACP_Compatibility_WC_Coderockz_Delivery
    {
        public function __construct()
        {
        }
        public function add_field($fields)
        {
        }
        public function actions()
        {
        }
        public function call_fields_hook($field, $key, $args)
        {
        }
        public function internal_css()
        {
        }
    }
    /**
     * YITH WooCommerce EU VAT & OSS Premium by YITH (2.0.1)
     */
    class WFACP_Yth_Wc_Eu_Vat
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function setup_fields_billing()
        {
        }
        public function action()
        {
        }
        public function checkout_fields($fields)
        {
        }
        public function display_field($field, $key, $args)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
        public function internal_css()
        {
        }
    }
    /**
     *
     * Plugin Name: WooCommerce NL Postcode Checker
     * Plugin URI: https://wpovernight.com/downloads/woocommerce-postcode-checker/
     */
    class WFACP_Wcnl_Postcode_Checker_Field
    {
        public function __construct()
        {
        }
        public function setup_fields_billing()
        {
        }
        public function js()
        {
        }
    }
    /**
     * EU/UK VAT for WooCommerce by WPWhale
     * Plugin URI: https://wpfactory.com/author/wpwhale/
     */
    class WFACP_Compatibility_With_EU_UK_Vat_Manager_For_WC
    {
        public function __construct()
        {
        }
        public function add_fields($field)
        {
        }
        public function action()
        {
        }
        public function is_enable()
        {
        }
        public function call_to_action($field, $key, $args)
        {
        }
        public function add_default_styling($args, $key)
        {
        }
    }
    /**
     * Order delivery date By Woocommerce Delivery
     * Plugin URI: https://welaunch.io/plugins/woocommerce-delivery/
     * Class WFACP_Compatibility_WC_Delivery
     */
    class WFACP_Compatibility_WC_Delivery
    {
        public function __construct()
        {
        }
        public function add_field($fields)
        {
        }
        public function actions()
        {
        }
        protected function get_option($option)
        {
        }
        public function call_fields_hook($field, $key, $args)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
        public function internal_css()
        {
        }
    }
    /**
     * WooCommerce to Zoom Meetings
     * https://www.northernbeacheswebsites.com.au
     * By Martin Gibson
     * Class WFACP_Compatibility_WooCommerce_Zoom_By_MB
     */
    class WFACP_Compatibility_WooCommerce_Zoom_By_MB
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
        public function add_field($fields)
        {
        }
        public function call_fields_hook($field, $key, $args)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
        public function css()
        {
        }
        public function add_fragments($fragments)
        {
        }
    }
    class WFACP_WC_Ship_To_Multiple_Address
    {
        public $instance = \null;
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function setup_shipping()
        {
        }
        public function action()
        {
        }
        public function display_field($field, $key, $args)
        {
        }
        public function internal_css()
        {
        }
    }
    /**
     * Facturare WooCommerce By George Ciobanu
     * Plugin URI: https://wordpress.org/plugins/facturare-persoana-fizica-sau-juridica/
     */
    class WFACP_Compatibility_Facturare_WC
    {
        public function __construct()
        {
        }
        public function remove_action()
        {
        }
        public function add_field($fields)
        {
        }
        public function process_wfacp_html($field, $key)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
        public function internal_css()
        {
        }
    }
    class WFACP_Compatibility_Order_Delivery_Date_Tyche_Pro
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
        public function add_js()
        {
        }
        public function add_field($fields)
        {
        }
        public function enqueue_js()
        {
        }
        public function call_birthday_addon_hook($field, $key, $args)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
        public function wfacp_internal_css()
        {
        }
    }
    /**
     * WooCommerce Quaderno by Quaderno
     * Plugin URI: https://quaderno.io/integrations/woocommerce/?utm_source=wordpress&utm_campaign=woocommerce
     */
    class WFACP_WC_Quaderno
    {
        public $instance = \null;
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function add_field($fields)
        {
        }
        public function action()
        {
        }
        public function display_field($field, $key)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
        public function internal_css()
        {
        }
    }
    /**
     * MDS Collivery By MDS Technologies
     * Plugin URI: https://collivery.net/integration/woocommerce
     */
    class WFACP_Compatibility_Colivery
    {
        public function __construct()
        {
        }
        public function assign_data()
        {
        }
        public function setup_fields_billing()
        {
        }
        public function setup_fields_shipping()
        {
        }
        public function wfacp_forms_field($field, $key)
        {
        }
        public function is_enabled()
        {
        }
        public function add_internal_css()
        {
        }
    }
    class WFACP_Compatibility_With_Woo_Delivery_Slots_Premium
    {
        public $draggable_field = \false;
        public $instance = \false;
        public function __construct()
        {
        }
        public function is_enabled()
        {
        }
        public function add_field($fields)
        {
        }
        public function action()
        {
        }
        public function active_setting($wpsf_settings)
        {
        }
        public function process_wfacp_html($field, $key)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
        public function deque_css_js($bool, $path, $url)
        {
        }
        public function internal_css()
        {
        }
    }
    /**
     * F4 Shipping Phone and E-Mail for WooCommerce | By FAKTOR VIER |
     * Class WFACP_Compatibility_With_F4_shipping_email_phone_wc
     */
    class WFACP_Compatibility_With_F4_shipping_email_phone_wc
    {
        protected static $settings = array('phone_field_enabled' => 'billing', 'email_field_enabled' => 'billing');
        public function __construct()
        {
        }
        public function actions()
        {
        }
        public function is_enabled()
        {
        }
        public function setup_fields_shipping()
        {
        }
        public function validation_fields()
        {
        }
        public function make_validation($template_fields)
        {
        }
    }
    class WFACP_Compatibility_Order_Delivery_Date_Tyche_lite
    {
        public function __construct()
        {
        }
        public function add_field($fields)
        {
        }
        public function enqueue_js()
        {
        }
        public function call_birthday_addon_hook($field, $key, $args)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
    }
    /**
     * YITH WooCommerce Delivery Date Premium by YITH (up to  2.1.29 Version)
     * Plugin URL Path: https://yithemes.com/themes/plugins/yith-woocommerce-delivery-date/
     */
    class WFACP_Yth_WC_Delivery_Date_Premium
    {
        public $instance = \null;
        public function __construct()
        {
        }
        public function add_field($fields)
        {
        }
        public function action()
        {
        }
        public function display_field($field, $key)
        {
        }
        public function is_enable()
        {
        }
        public function internal_css()
        {
        }
    }
    /**
     * WooCommerce Order Delivery by Themesquad
     * Plugin URL: https://woocommerce.com/products/woocommerce-order-delivery/
     * Class WFACP_Compatibility_WC_delivery_date
     */
    class WFACP_Compatibility_WC_delivery_date
    {
        public function __construct()
        {
        }
        public function remove_wc_delivery_date_hook()
        {
        }
        public function add_field($fields)
        {
        }
        public function call_wc_delivery_date_hook($field, $key, $args)
        {
        }
        public function is_enable()
        {
        }
        public function internal_css()
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
    }
    /**
     * WooCommerce Taxamo By WooCommerce
     * Plugin URI: https://www.woocommerce.com/
     */
    class WFACP_Compatibility_WC_Taxamo
    {
        public $instance = \null;
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function add_field($fields)
        {
        }
        public function action()
        {
        }
        public function display_field($field, $key)
        {
        }
        public function add_default_styling($args, $key)
        {
        }
        public function internal_css()
        {
        }
    }
    /**
     * Omnisend for Woocommerce by Omnisend
     * Plugin URI: https://www.omnisend.com
     */
    class WFACP_Omnisend_For_WC
    {
        public $instance = \null;
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function add_field($fields)
        {
        }
        public function display_field($field, $key)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
    }
    /**
     * WooCommerce wFirma By WP Desk
     * Plugin URI: https://www.wpdesk.pl/sklep/wfirma-woocommerce/
     * Version: 2.2.6
     */
    class WFACP_Compatibility_wfirma_wc
    {
        public function __construct()
        {
        }
        public function setup_fields_billing()
        {
        }
    }
    /**
     * Plugin Name: Timologia for WooCommerce By John Athanasiou
     * Plugin URI: https://wordpress.org/plugins/timologia-for-woocommerce/
     */
    class WFACP_Compatibility_With_WC_Timologia
    {
        public static function get_instance()
        {
        }
        public function setup_fields_billing()
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
    }
    /**
     * WooCommerce - Delivery Date for WooCommerce by Pixlogix
     * Plugin URL - https://wordpress.org/plugins/delivery-date-for-woocommerce/
     */
    class WFACP_Compatibility_Delivery_Date_For_WC
    {
        public function __construct()
        {
        }
        public function add_field($fields)
        {
        }
        public function action()
        {
        }
        public function call_fields_hook($field, $key, $args)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
        public function is_enabled()
        {
        }
        public function internal_css()
        {
        }
    }
    /**
     * The Courier Guy Shipping for WooCommerce by The Courier Guy (v.4.4.9)
     *
     */
    class The_Courier_Guy_Shipping_For_WC
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function setup_billing()
        {
        }
        public function setup_shipping()
        {
        }
        public function internal_css()
        {
        }
    }
    /**
     * this official WooCommerce MyParcel plugin by MyParcel
     * URL: https://www.myparcel.nl
     */
    class WFACP_Compatibility_With_WC_MyParcel_2_1_4
    {
        public static function get_instance()
        {
        }
        public function setup_fields_billing()
        {
        }
    }
    /**
     * Order WooCommerce Sendinblue Newsletter Subscription
     * Author: Sendinblue
     *  Author URI: https://www.sendinblue.com/?r=wporg
     * Class WFACP_Compatibility_WC_SendinBlue
     */
    class WFACP_Compatibility_WC_SendinBlue
    {
        public function __construct()
        {
        }
        public function add_field($fields)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
    }
    /**
     * WooCommerce Fakturownia By WP Desk
     * Author URI: https://www.wpdesk.pl
     * Version: 1.4.3
     */
    class WFACP_Compatibility_WC_fakturownia
    {
        public function __construct()
        {
        }
        public function setup_fields_billing()
        {
        }
        public function call_fields_hook($field, $key, $args)
        {
        }
        public function action()
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
    }
    /**
     * Compatibility Plugin:       Mailchimp for WooCommerce By Mailchimp
     * Compatibility Version:           2.5.0
     * Compatibility  URL:        https://wordpress.org/plugins/mailchimp-for-woocommerce/
     */
    class WFACP_Compatibility_Mailchimp_For_WC
    {
        public function __construct()
        {
        }
        public function is_enabled()
        {
        }
        public function add_action()
        {
        }
        public function add_field($fields)
        {
        }
        public function display_field($field, $key)
        {
        }
        public function wfacp_internal_css()
        {
        }
    }
    /**
     * German Market By MarketPress
     * Plugin URI: https://marketpress.de/shop/plugins/woocommerce-german-market/
     */
    class WFACP_Compatibility_WC_German_Market
    {
        public function __construct()
        {
        }
        public function add_field()
        {
        }
        public function re_display_payment_section()
        {
        }
        public function paypal_payments()
        {
        }
    }
    /**
     * WooCommerce - MailerLite by MailerLite by MailerLite
     * Class WFACP_Compatibility_WC_Coderockz_Delivery
     */
    class WFACP_Compatibility_WC_MailerLite
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
        public function add_field($fields)
        {
        }
        public function call_fields_hook($field, $key, $args)
        {
        }
        public function mailer_lite_html_before_placeorder_button()
        {
        }
        public function mailer_lite_html()
        {
        }
        public function internal_css()
        {
        }
    }
    /**
     * WooCommerce Italian Add-on Plus By laboratorio d'Avanguardia (Version 0.7.2.32)
     * Plugin Path: http://ldav.it/plugin/woocommerce-italian-add-on/
     */
    class WFACP_Compatibility_WC_Italian_Add_ON
    {
        public function __construct()
        {
        }
        public function checkout_fields($fields)
        {
        }
        public function action()
        {
        }
        public function wfacp_internal_css()
        {
        }
        public function setup_fields_billing()
        {
        }
        public function call_fields_hook($field, $key)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
    }
    /**
     * Tickera Bridge for WooCommerce by Tickera
     * Plugin URI: https://tickera.com/
     */
    class Tickera_Bridge_For_WC
    {
        public $instance = \null;
        public function __construct()
        {
        }
        public function add_field($fields)
        {
        }
        public function action()
        {
        }
        public function display_field($field, $key)
        {
        }
        public function is_enable()
        {
        }
        public function internal_css()
        {
        }
        public function add_js()
        {
        }
    }
    /**
     * Sg Checkout Location Picker for WooCommerce by Sevengits (v.1.0.6)
     * Plugin Path : https://sevengits.com/
     */
    class WFACP_Sg_Checkout_Location_Picker_For_WC
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function action()
        {
        }
        public function setup_fields_billing()
        {
        }
        public function setup_fields_shipping()
        {
        }
        public function display_field($field, $key, $args)
        {
        }
        public function internal_css()
        {
        }
    }
    /**
     * WCFM - WooCommerce Multivendor Marketplace by WC Lovers
     * Plugin URI: https://wclovers.com/knowledgebase_category/wcfm-marketplace/
     */
    class WFACP_Multivender_Market_Place
    {
        public function __construct()
        {
        }
        public function assign_checkout_fields($fields)
        {
        }
        public function is_enable()
        {
        }
        public function action()
        {
        }
        public function add_field($fields)
        {
        }
        public function process_html($field, $key, $arg)
        {
        }
    }
    /**
     * Plugin Name: WooCommerce PDF Invoices Italian Add-on
     * Plugin URI: https://it.wordpress.org/plugins/woocommerce-pdf-invoices-italian-add-on/
     * Version: 0.7.0.20
     * Author: laboratorio d'Avanguardia
     */
    class WFACP_Compatibility_With_WC_PDF_Italian_addon
    {
        public function __construct()
        {
        }
        public function is_enabled()
        {
        }
        public function setup_fields_billing()
        {
        }
        public function remove_action()
        {
        }
        public function enqueue_js_css()
        {
        }
        public function call_fields_hook($field, $key, $args)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
    }
    /**
     * MailPoet 3 (New) by MailPoet
     * Plugin URI: http://www.mailpoet.com
     */
    class WFACP_MailPoet
    {
        public $instance = \null;
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function add_field($fields)
        {
        }
        public function action()
        {
        }
        public function display_field($field, $key)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
    }
    /**
     * Tipping for WooCommerce by WPSlash
     * Plugin URI: https://www.wpslash.com
     * Version:           1.0.6
     */
    class WFACP_Compatibility_With_WC_Tipping
    {
        public function __construct()
        {
        }
        public function add_field($fields)
        {
        }
        public function process_wfacp_html($field, $key)
        {
        }
        public function remove_tipping_hook()
        {
        }
        public function is_enabled()
        {
        }
        public function wfacp_internal_css()
        {
        }
    }
    /**
     * Order WooCommerce UPS Shipping Plugin with Print Label
     * Author: PluginHive
     *  Author URI: https://www.sendinblue.com/?r=wporg
     * Class WFACP_Compatibility_WC_SendinBlue
     */
    class WFACP_Compatibility_UPS_Shipping_Access_Point
    {
        public function __construct()
        {
        }
        public function add_field($fields)
        {
        }
        public function call_fields_hook($field, $key, $args)
        {
        }
        public function js()
        {
        }
    }
    /**
     * https://wordpress.org/plugins/woo-postnl
     * this official woocommerce plugin for PostNl Field
     * Class WFACP_Compatibility_With_Woo_PostNl
     */
    class WFACP_Compatibility_With_Woo_PostNl
    {
        public $instance = \null;
        public function __construct()
        {
        }
        public function is_enabled()
        {
        }
        public function remove_style($path)
        {
        }
        public function setup_fields_billing()
        {
        }
        public function setup_fields_shipping()
        {
        }
        public function remove_optional_shipping_field_validation_error($data)
        {
        }
        public function actions()
        {
        }
        public function validation_fields()
        {
        }
        public function make_validation($template_fields)
        {
        }
        public function myparcel_actions()
        {
        }
        public function add_field($fields)
        {
        }
        public function display_field($field, $key)
        {
        }
        public function add_internal()
        {
        }
    }
    /**
     * WooCommerce Multiple Customer Addresses  by Lagudi Domenico
     */
    class WFACP_Compatibility_With_WC_Multiple_Customer_Addresses
    {
        public $instance = \null;
        public function __construct()
        {
        }
        public function setup_fields_billing()
        {
        }
        public function setup_fields_shipping()
        {
        }
        public function is_enabled()
        {
        }
        public function actions()
        {
        }
        public function display_field($field, $key, $args)
        {
        }
        public function add_billing_address_select_menu()
        {
        }
        public function internal_css()
        {
        }
    }
    class WFACP_Compatibility_With_Sumo_Payment_Plans
    {
        public function __construct()
        {
        }
        public function enabled()
        {
        }
        public function add_field($fields)
        {
        }
        public function add_action()
        {
        }
        public function display_field($field, $key)
        {
        }
        public function add_internal_css()
        {
        }
    }
    /**
     * FluentCRM Pro  by Fluent CRM
     * Plugin URI: https://fluentcrm.com
     */
    class WFACP_FluentPro
    {
        public $instance = \null;
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function add_field($fields)
        {
        }
        public function action()
        {
        }
        public function display_field($field, $key)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
        public function internal_css()
        {
        }
    }
    /**
     * WooCommerce Fattura24 by Fattura24.com (Version 5.0.9)
     * Plugin Path: http://www.fattura24.com
     */
    class WFACP_Compatibility_Fattura_24
    {
        public function __construct()
        {
        }
        public function setup_fields_billing()
        {
        }
        public function checkout_fields($fields)
        {
        }
        public function call_fields_hook($field, $key)
        {
        }
        public function action()
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
        public function wfacp_internal_css()
        {
        }
    }
    /**
     * Uncanny Groups for LearnDash by Uncanny Owl (upto v.4.0.5)
     * Plugin Path: https://www.uncannyowl.com
     */
    class WFACP_Uncanny_Groups_For_LearnDash
    {
        public $instance = \null;
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function add_field($fields)
        {
        }
        public function action()
        {
        }
        public function display_field($field, $key)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
        public function internal_css()
        {
        }
    }
    /**
     *
     * Plugin Name: WooCommerce NL Postcode Checker
     * Plugin URI: https://wpovernight.com/downloads/woocommerce-postcode-checker/
     */
    class WFACP_Compatibility_With_Wcnl_Postcode
    {
        public function __construct()
        {
        }
        public function remove_optional_shipping_field_validation_error($data)
        {
        }
        public function actions()
        {
        }
        public function validation_fields()
        {
        }
        public function toev_field($posted_data)
        {
        }
        public function make_validation($template_fields)
        {
        }
        public function checkout_billing_sections($sections)
        {
        }
        public function checkout_shipping_sections($sections)
        {
        }
        public function internal_css($selected_template_slug)
        {
        }
        public function add_js()
        {
        }
    }
    class WFACP_Product_Filter_By_RealMag
    {
        public function __construct()
        {
        }
        public function remove_actions()
        {
        }
    }
    /**
     * Plugin Name: Product Options for WooCommerce
     * Author: Pektsekye
     * Author URI: http://www.hottons.com
     */
    class WFACP_Compatibility_With_Simple_Product_options_For_WC
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
        public function enqueue_frontend_scripts()
        {
        }
    }
    class WFACP_Compatibility_With_WC_Gift_Certificate_pro
    {
        public function __construct()
        {
        }
        public function attach_gift_certi_inside_form()
        {
        }
        public function field_display_below_payment_sec($template_name)
        {
        }
        public function internal_css()
        {
        }
    }
    class WFACP_PYS_Compatibility
    {
        public function __construct()
        {
        }
        public function dequeue_pys_js()
        {
        }
    }
    /**
     * Class WFACP_Advanced_dynamic_Pricing
     * By AlgolPlus
     */
    class WFACP_Advanced_dynamic_Pricing
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
        public function disable_execution($status)
        {
        }
        public function woocommerce_checkout_update_order_review()
        {
        }
    }
    /**
     * Class WFACP_Compatibility_Translate_press
     * Cozmoslabs, Razvan Mocanu, Madalin Ungureanu, Cristophor Hurduban
     */
    class WFACP_Compatibility_Translate_press
    {
        public function __construct()
        {
        }
        public function remove_our_template()
        {
        }
    }
    /**
     * Compatibility added for webtoffee
     * Class WFACP_Compatibility_HF_Woocommerce_Subscription
     */
    class WFACP_Compatibility_HF_Woocommerce_Subscription
    {
        public function __construct()
        {
        }
        /**
         * @param $status boolean
         * @param $_product WC_Product
         *
         * @return boolean
         */
        public function do_not_display_price($status, $_product)
        {
        }
        /**
         * @param $_product WC_Product
         * @param $cart_item
         * @param $cart_item_key
         */
        public function display_subscription_price($_product, $cart_item, $cart_item_key)
        {
        }
    }
    class WFACP_Compatibility_With_Thrive_Leads
    {
        public function __construct()
        {
        }
        public function add_styling()
        {
        }
        public function thrive_enabled($post_id)
        {
        }
    }
    /**
     * Author Artisan Workshop  https://wc.artws.info/
     * Class WFACP_Japanized_for_Woocommerce
     *
     */
    class WFACP_Japanized_for_Woocommerce
    {
        public function __construct()
        {
        }
        public function capture_instance()
        {
        }
        public function add_fields($fields)
        {
        }
        public function call_wc4jp_hook()
        {
        }
        public function is_enable()
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
    }
    class WFACP_Compatibility_With_WooMulti
    {
        public $instance = \null;
        /**
         * @var WOOMULTI_CURRENCY_Frontend_Price
         */
        public function __construct()
        {
        }
        public function action()
        {
        }
        /**
         * @param $raw_data
         * @param $product WC_Product;
         *
         * @return mixed
         */
        public function wfacp_product_raw_data($raw_data, $product)
        {
        }
        public function remove_actions()
        {
        }
        public function wfacp_discount_amount_data($discount_amount, $discount_type)
        {
        }
        /**
         * @param $price_data
         * @param $pro WC_Product;
         *
         * @return mixed
         */
        public function wfacp_product_switcher_price_data($price_data, $pro)
        {
        }
    }
    /**
     * Woongkir
     * https://github.com/sofyansitorus/Woongkir
     * author Sofyan Sitorus
     * Class WFACP_WoongKir_Indo
     */
    class WFACP_Woongkir_Indo
    {
        public function __construct()
        {
        }
        public function assign_class($fields, $key)
        {
        }
    }
    class WFACP_Compatibility_With_WC_Gamipress_Payement_Gateway
    {
        public function __construct()
        {
        }
        public function add_js()
        {
        }
    }
    /**
     * === Chronopost and Chronofood by WooChrono ===
     * Chronopost and Chronofood for woocommerce
     */
    class WFACP_Chronopost_Food
    {
        public function __construct()
        {
        }
        public function remove_actions()
        {
        }
        public function add_actions()
        {
        }
    }
    /*
    PluginName: WPDM - Page Template by Shaon (v.1.1)
    */
    class WFACP_Compatibility_With_WPDM_Page_Template
    {
        public function __construct()
        {
        }
        public function action()
        {
        }
    }
    class WFACP_Compatibility_With_strolik_core
    {
        public function __construct()
        {
        }
        public function remove_strolik_actions()
        {
        }
    }
    /**
     *
     * Comaptibility with local pickup plus by sky verge
     * location dropdown not creating
     *
     * Class WFACP_Local_Pickup_Plus_SkyVerge
     */
    class WFACP_Local_Pickup_Plus_SkyVerge
    {
        public function __construct()
        {
        }
        public function update_item($item)
        {
        }
        // Xt Floating Plugin create issue with Local Pickup Dropdown Menu
        public function remove_xt_floating_cart_fragments()
        {
        }
        public function make_checkout($status)
        {
        }
        public function remove_review_order_summary($template, $template_name)
        {
        }
        public function restrict_our_fragments()
        {
        }
    }
    class WFACP_WC_Payments_GPAY_AND_APAY
    {
        public function __construct()
        {
        }
        public function add_buttons($buttons)
        {
        }
        public function add_wc_payment_gpay_apay_buttons()
        {
        }
        public function set_local_data($data)
        {
        }
        public function add_internal_css()
        {
        }
    }
    /**
     * YITH WooCommerce GIft Certificates Premium
     *  https://yithemes.com/themes/plugins/yith-woocommerce-gift-cards
     * Class WFACP_Compatibility_With_Yith_Gift
     */
    class WFACP_Compatibility_With_Yith_Gift
    {
        public function __construct()
        {
        }
        function yith_ywgc_rename_coupon_label($text)
        {
        }
    }
    /**
     * Plugin Name: Donation For Woocommerce
     * Version: 2.0.2
     * Author: wpexpertsio
     *
     */
    class WFACP_Compatibility_With_Donation_for_WC
    {
        public function __construct()
        {
        }
        public function wfacp_internal_css()
        {
        }
    }
    class WFACP_Compatibility_With_Google_captcha_Pro
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
        public function wac_css_func($selected_template_slug)
        {
        }
    }
    class WFACP_PPCP_WooCommerce
    {
        public function __construct()
        {
        }
        public function remove_visibility_hidden()
        {
        }
    }
    /**
     * Plugin Name:       Rank Math SEO
     * Version:           1.0.56.1
     * Plugin URI:        https://s.rankmath.com/home
     * Author:            Rank Math
     */
    class WFACP_Seo_By_Rank_Math
    {
        public function __construct()
        {
        }
        public function add_action()
        {
        }
    }
    /**
     *  WooCommerce Blocks
     * https://github.com/woocommerce/woocommerce-gutenberg-products-block
     * Class WFACP_GutenBerg_Product_Block
     */
    class WFACP_GutenBerg_Product_Block
    {
        public function __construct()
        {
        }
        public function remove_gutenberg_action()
        {
        }
    }
    class WFACP_WP_Fusion_abandoned_cart
    {
        public function __construct()
        {
        }
        public function remove_actions()
        {
        }
    }
    /**
     * WooCommerce Points and Rewards By WooCommerce
     * https://woocommerce.com/products/woocommerce-points-and-rewards/
     */
    class WFACP_Compatibility_With_WC_Points_and_Reward
    {
        public $instance = \null;
        public $message = '';
        public function __construct()
        {
        }
        public function actions()
        {
        }
        public function add_fragments($fragments)
        {
        }
        public function render_message()
        {
        }
        public function add_js()
        {
        }
    }
    class WFACP_Compatibility_With_WC_Select_City
    {
        public function __construct()
        {
        }
        public function execute_style_script()
        {
        }
    }
    /**
     * YITH Multiple Shipping Addresses for WooCommerce
     * Plugin URI: https://yithemes.com/
     */
    class WFACP_Compatibility_With_Yith_Multiple_Shipping_Address_WC
    {
        public function __construct()
        {
        }
        public function add_action()
        {
        }
        public function wfacp_internal_css()
        {
        }
    }
    class WFACP_Compatibility_With_X
    {
        public function __construct()
        {
        }
        public function remove_x_customizer_fields()
        {
        }
    }
    class WFACP_Compatibility_With_Active_InfuseWooPro
    {
        public function __construct()
        {
        }
        /**
         * @param $price
         * @param $pro WC_Product
         *
         * @return mixed
         */
        public function price_data($price, $pro)
        {
        }
        public function replace_hooks()
        {
        }
    }
    /**
     * WooCommerce InPost
     * By WP Desk
     *
     */
    class WFACP_Shipping_Packzkomaty_impost
    {
        public function __construct()
        {
        }
        public function is_enabled()
        {
        }
        public function remove_action()
        {
        }
        public function add_internal_css()
        {
        }
    }
    class WFACP_Compatibility_With_Woo_Mundipagg_Payments
    {
        public $payment_id = 'woo-mundipagg-payments';
        public function __construct()
        {
        }
        public function woo_mundipagg_add_action()
        {
        }
        public function woo_mundipagg_open_div()
        {
        }
        public function woo_mundipagg_close_div()
        {
        }
        public function wfacp_internal_css()
        {
        }
    }
    /**
     * EveryPay Payment Gateway for WooCommerce
     * https://wordpress.org/plugins/everypay-woocommerce-addon/
     *
     */
    class WFACP_EveryPay
    {
        public function __construct()
        {
        }
        public function template_found()
        {
        }
        public function set_checkout_page_id()
        {
        }
    }
    class WFACP_Compatibility_With_Sg_optimizer
    {
        public function __construct()
        {
        }
        public function remove_sg_optiomizer_hook()
        {
        }
    }
    /**
     * Woocommerce Side Cart Premium
     * http://xootix.com/side-cart-woocommerce
     * Class WFACP_Compatibility_Xoo_Wsc
     */
    class WFACP_Compatibility_Xoo_Wsc
    {
        public function __construct()
        {
        }
        public function remove_action()
        {
        }
        public function add_css()
        {
        }
    }
    /**
     * WooCommerce DHL
     * By WP Desk
     *
     */
    class WFACP_Shipping_DHL_WpDesk
    {
        public function __construct()
        {
        }
        public function remove_action()
        {
        }
    }
    class WFACP_Compatibility_With_Woo_Variation_Swatches
    {
        public function __construct()
        {
        }
        public function add_class()
        {
        }
    }
    class WFACP_Compatibility_With_Woo_Order_Signature
    {
        public function __construct()
        {
        }
        public function call_wosl_hook()
        {
        }
    }
    class WFACP_Compatibility_PP_one_page_checkout
    {
        public function __construct()
        {
        }
        public function remove_actions()
        {
        }
    }
    /**
     * ECPay Logistics for WooCommerce
     * https://www.ecpay.com.tw
     */
    class WFACP_Ecpay_Logistics_WC
    {
        public function __construct()
        {
        }
        public function setup()
        {
        }
        public function remove_action()
        {
        }
    }
    class WFACP_Compatibility_With_Ebanx
    {
        public $user_id = 0;
        public function __construct()
        {
        }
        public function sections($sections)
        {
        }
        public function css()
        {
        }
    }
    /**
     * Class WFACP_Subscription_gift
     * WooCommerce Subscriptions Gifting
     * By WooCommerce
     */
    class WFACP_Subscription_gift
    {
        public function __construct()
        {
        }
        public function print_fields()
        {
        }
        public function store_recipients_in_session($checkout_data)
        {
        }
        public function handle_js()
        {
        }
    }
    /**
     * WooCommerce Parcel Pro
     * Plugin URI: https://www.parcelpro.nl/koppelingen/woocommerce/
     * Author:    Parcel Pro
     */
    class WFACP_Compatibility_With_WC_Parcel_Pro
    {
        public function __construct()
        {
        }
        public function remove_actions()
        {
        }
    }
    /**
     * Free Gift For WooCommerce (Official WooCommerce)
     * By Developed by FantasticPlugins
     * https://woocommerce.com/products/free-gifts-for-woocommerce/
     * Class WFACP_Free_Gift_By_WooCommerce
     */
    class WFACP_Free_Gift_By_WooCommerce
    {
        public function __construct()
        {
        }
        public function remove_quantity_incrementer($status, $cart_item)
        {
        }
    }
    class WFACP_Tool_Tip
    {
        public function __construct()
        {
        }
        public function add_js()
        {
        }
    }
    /**
     * Plugin Name: Braintree For WooCommerce
     * Class WFACP_Compatibility_With_Woo_Payment_Gateway
     * https://wordpress.org/plugins/woo-payment-gateway/
     */
    class WFACP_Compatibility_With_Woo_Payment_Gateway
    {
        public function __construct()
        {
        }
        public function add_buttons($buttons)
        {
        }
        public function print_smart_buttons($payment, $slug)
        {
        }
        public function add_body_class($class)
        {
        }
        public function remove_action()
        {
        }
        public function print_order_total_fields()
        {
        }
        public function add_fragment($fragments)
        {
        }
        public function some_css()
        {
        }
    }
    /**
     * Official Klarna Payments for WooCommerce (https://wordpress.org/plugins/klarna-payments-for-woocommerce/)
     * Payment Plugins for Stripe WooCommerce (Klarna) (https://wordpress.org/plugins/woo-stripe-payment/)
     */
    class WFACP_Klarna
    {
        public function __construct()
        {
        }
        public function disable_pop_state()
        {
        }
        public function attach_hooks()
        {
        }
        public function change_checkout_url($url)
        {
        }
    }
    class WFACP_Compatibility_With_Marcadopago
    {
        public function __construct()
        {
        }
        public function remove_actions()
        {
        }
        public function add_checkout_scripts_custom()
        {
        }
        public function internal_css_js()
        {
        }
    }
    /**
     * Plugin Name: Rey Core
     * Version: 1.9.5
     * Author: ReyTheme
     */
    class WFACP_Compatibility_With_ReyCore
    {
        public function __construct()
        {
        }
        public function add_action()
        {
        }
        public function internal_css()
        {
        }
    }
    class WFACP_Checkout_WC_Objectiv
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
    }
    class WFACP_Compatibility_With_Posts_SmartShip
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
    }
    class WFACP_Compatibility_With_WooCommerce_Payments
    {
        public function __construct()
        {
        }
        public function enqueue_scripts()
        {
        }
    }
    /**
     * WooCommerce Shipping - DPD baltic
     * https://lt.wordpress.org/plugins/woo-shipping-dpd-baltic/
     * Class WFACP_Compatibility_With_Woo_DPD_Baltic
     */
    class WFACP_Compatibility_With_Woo_DPD_Baltic
    {
        public function __construct()
        {
        }
        public function get_data($data)
        {
        }
        public function unset_fragments($fragments)
        {
        }
        public function js()
        {
        }
    }
    /**
     * https://makewebbetter.com/
     * Author   MakeWebBetter
     * Class WFACP_Compatibility_Gift_Card_MakeWebBetter
     */
    class WFACP_Compatibility_Gift_Card_MakeWebBetter
    {
        public function __construct()
        {
        }
        public function action()
        {
        }
    }
    /**
     * Plugin Name: XL NMI Gateway for WooCommerce by XLPlugins
     * Plugin URI: https://funnelkit.com/woocommerce-nmi-payment-gateway/
     */
    class WFACP_XL_NMI_Gateway_For_WC
    {
        public function __construct()
        {
        }
        public function remove_nmi_front_js($path)
        {
        }
    }
    class WFACP_wcnl_parcel_conflict_resolver
    {
        public function __construct()
        {
        }
        public function remove_nl_post_hooks()
        {
        }
    }
    /**
     * By Algoritmika
     * Class WFACP_Maximum_Products_Per_User
     */
    class WFACP_Maximum_Products_Per_User
    {
        public function __construct()
        {
        }
    }
    class WFACP_Compatibility_With_SendCloud_Shipping
    {
        public function __construct()
        {
        }
        public function hook_sendcloud_shipping()
        {
        }
        public function internal_css($selected_template_slug)
        {
        }
    }
    /**
     * WooCommerce Braintree Gateway
     * @author    WooCommerce
     * http://docs.woocommerce.com/document/braintree/
     * Class WFACP_WC_Braintree_Compatibility
     */
    class WFACP_WC_Braintree_Compatibility
    {
        public function __construct()
        {
        }
        public function register_action()
        {
        }
        public function add_buttons($buttons)
        {
        }
        public function print_smart_buttons()
        {
        }
    }
    /**
     * Facturare DHL for WooCommerce by DHL
     * Plugin URI: https://wordpress.org/plugins/dhl-for-woocommerce/
     */
    class WFACP_Compatibility_With_DHL_WC
    {
        public function __construct()
        {
        }
        public function remove_dhl_actions()
        {
        }
        public function add_dhl_action()
        {
        }
        public function internal_css()
        {
        }
    }
    /**
     * WooCommerce - Social Login
     * https://wpwebelite.com/
     */
    class WFACP_Compatibility_Woo_Social_login
    {
        public function __construct()
        {
        }
        public function action()
        {
        }
        public function print_social_login()
        {
        }
    }
    /**
     * Plugin Name: TeraWallet by WCBeginner
     * Plugin URI: https://wordpress.org/plugins/woo-wallet/
     */
    class WFACP_Compatibility_With_Woo_Wallet
    {
        public function __construct()
        {
        }
        public function css_enqueue($bool, $path, $url)
        {
        }
    }
    class WFACP_Bwf_Autonami
    {
        public function __construct()
        {
        }
        public function disable_script($status)
        {
        }
    }
    class WFACP_Compatibility_With_WCCT
    {
        public function __construct()
        {
        }
        public function am_before_sticky_bar_call()
        {
        }
        public function am_after_sticky_bar_call()
        {
        }
        public function am_force_campaign_run()
        {
        }
        public function am_allow_finale_sticky_campaigns()
        {
        }
    }
    class WFACP_Compatibility_With_Woo_Order_Signature_Pro
    {
        public function __construct()
        {
        }
        public function call_wosl_hook()
        {
        }
    }
    /**
     * WooCommerce Price Based on Country (Basic)
     * Author: Oscar Gare
     * Class WFACP_Product_Price_Based_Country
     */
    class WFACP_Product_Price_Based_Country
    {
        public function __construct()
        {
        }
        public function change_price_data($raw_data, $product)
        {
        }
    }
    class WFACP_Compatibility_With_FooEvent
    {
        public function __construct()
        {
        }
        public function register_action()
        {
        }
        public function internal_css()
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
        public function register_fragment($fragments)
        {
        }
        public function get_attendee_checkout()
        {
        }
    }
    class WFACP_Compatibility_With_Square
    {
        protected $is_enabled = \false;
        public function __construct()
        {
        }
        public function is_enabled()
        {
        }
        public function unset_cart_fragment_js($status, $path)
        {
        }
        public function do_no_deque_cart_fragment($status)
        {
        }
        public function unblock_shipping_method()
        {
        }
        public static function is_enable()
        {
        }
    }
    /**
     * WooCommerce Buy One Get One Free By Oscar Gare
     * Plugin URI: https://woocommerce.com/products/buy-one-get-one-free/
     */
    class WFACP_Compatibility_With_WC_Buy_One_Get_One_Free
    {
        public function __construct()
        {
        }
        public function remove_actions()
        {
        }
    }
    class WFACP_Compatibility_With_Elementor
    {
        public function __construct()
        {
        }
        public function remove_actions()
        {
        }
        public function remove_elementor_pro()
        {
        }
    }
    class WFACP_Compatibility_With_WC_E_Aabi_Postoffice
    {
        public $object = \null;
        public function __construct()
        {
        }
        public function setup()
        {
        }
        public function remove_actions()
        {
        }
        public function internal_css()
        {
        }
    }
    class WFACP_Paytrace
    {
        public function __construct()
        {
        }
        public function action()
        {
        }
    }
    /**
     * WooCommerce Przelewy24 Payment Gateway
     * http://www.przelewy24.pl/pobierz
     * Class WFACP_Compatibility_With_P24
     */
    class WFACP_Compatibility_With_P24
    {
        protected $is_enabled = \false;
        public function __construct()
        {
        }
        public function remove_p24_hook()
        {
        }
        public static function is_enable()
        {
        }
    }
    class WFACP_NextGen_Social_Login
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
        public function add_div_wrapper()
        {
        }
        public function css()
        {
        }
    }
    class WFACP_Compatibility_With_WC_variation_btn
    {
        public function __construct()
        {
        }
        public function dequeue_js()
        {
        }
    }
    class WFACP_Compatibility_With_WC_Twilio_SMS
    {
        public $process_field = \false;
        public function __construct()
        {
        }
        public function actions()
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
    }
    /**
     * Paid Memberships Pro - WooCommerce Add On
     * Author: Paid Memberships Pro
     * https://www.paidmembershipspro.com/add-ons/pmpro-woocommerce/
     */
    class WFACP_Compatibility_PaidMembershipWCPro
    {
        public function __construct()
        {
        }
        public function before()
        {
        }
        public function after()
        {
        }
    }
    class WFACP_Compatibility_With_Magic_Order
    {
        public function __construct()
        {
        }
        public function remove_hooks()
        {
        }
    }
    class WFACP_ShipMondo_PakkeLabels_Compatibility
    {
        public function __construct()
        {
        }
        public function do_not_print_hidden_shipping($status)
        {
        }
        public function print_js()
        {
        }
    }
    class WFACP_Plugin_Compatibilities_improved_variable_product_attributes
    {
        public function __construct()
        {
        }
        public function attach_action_in_footer()
        {
        }
    }
    class WFACP_Checkout_User_Switching
    {
        public function __construct()
        {
        }
    }
    /**
     * Currency Per product by Tyche
     *
     * Class WFACP_Compatibility_WC_Cpp
     */
    class WFACP_Compatibility_WC_Cpp
    {
        public function __construct()
        {
        }
        public static function is_enable()
        {
        }
        public function attach_action()
        {
        }
        /**
         * @param $price_data
         * @param $pro WC_Product;
         *
         * @return mixed
         */
        public function wfacp_product_switcher_price_data($price_data, $pro)
        {
        }
    }
    /*
     * Mondial Relay - WordPress
     * Author Name:  Rodolphe Cazemajou-Tournié
     * https://mondialrelay-wp.com/
     */
    class WFACP_Compatibility_With_Mondialrelay_WP
    {
        public function __construct()
        {
        }
        public function action()
        {
        }
        public function remove_hooks()
        {
        }
        public function show_shipping_on_load()
        {
        }
        public function add_hidden_custom_fields()
        {
        }
        public function internal_css()
        {
        }
        public function move_link()
        {
        }
    }
    class WFACP_Compatibility_With_Address_Auto_Populate
    {
        public function __construct()
        {
        }
        public function dequeue_js()
        {
        }
    }
    /**
     * Checkout Manager for WooCommerce By QuadLayers
     * Plugin URI: https://wordpress.org/plugins/woocommerce-checkout-manager/
     */
    class WFACP_Compatibility_With_Checkout_Manager_For_WC
    {
        public function __construct()
        {
        }
        public function remove_locale()
        {
        }
        public function remove_posted_data()
        {
        }
    }
    /**
     * Points and Rewards for WooCommerce By MakeWebBetter
     * Class WFACP_Compatibility_With_Point_Rewards_For_WC
     */
    class WFACP_Compatibility_With_Point_Rewards_For_WC
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
        public function add_points_rewards()
        {
        }
        public function internal_css()
        {
        }
    }
    class wfacp_uk_address_postcode_validation_by_ideal_postcodes
    {
        public function __construct()
        {
        }
        public function internal_css()
        {
        }
        public function add_js()
        {
        }
    }
    class WFACP_Compatibility_With_IW_TCS
    {
        public function __construct()
        {
        }
        public function remove_ajax()
        {
        }
        public function update_order_review($postdata)
        {
        }
        public function actions()
        {
        }
        public function clear_session()
        {
        }
        public function fragments($fragments)
        {
        }
    }
    class WFACP_Compatibility_With_Active_OGF
    {
        public function __construct()
        {
        }
        public function remove_actions()
        {
        }
    }
    /**
     * WooCommerce Bulk Discount
     * http://wordpress.org/plugins/woocommerce-bulk-discount/
     * Class WFACP_Woo_Bulk_Discounting
     */
    class WFACP_Woo_Bulk_Discounting
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
    }
    /**
     * this plugin create a js error when we open customizer page
     * Class WFACP_Wpawll
     */
    class WFACP_Wpawll
    {
        public function __construct()
        {
        }
        public function actions()
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
    class WFACP_Redis_cache
    {
        public function __construct()
        {
        }
        public function do_not_cache_path($value, $key, $group)
        {
        }
    }
    class WFACP_Compatibility_WPML_WCML
    {
        public function __construct()
        {
        }
        public function woocommerce_calculate_totals($cart)
        {
        }
        public function change_raw_data($raw_data, $product)
        {
        }
    }
    /**
     * By WpISMyLife
     * https://wordpress.org/plugins/buy-now-woo/
     * Class WFACP_Compatibility_Buy_Now_btn
     */
    class WFACP_Compatibility_Buy_Now_btn_WpISMyLife
    {
        public function __construct()
        {
        }
        public function remove_action()
        {
        }
        public function attach_action()
        {
        }
    }
    /**
     * Yoast SEO by Team Yoast
     * Plugin Path : https://yoa.st/1uj
     */
    class WFACP_Checkout_Seo_WP
    {
        public function __construct()
        {
        }
        public function save_post()
        {
        }
        /**
         * Remove Call Wpseo Head only at global checkout page. because of this function reset the our Global Post to Native Global Post
         * @return void
         */
        public function remove_actions()
        {
        }
        public function seo_news()
        {
        }
    }
    /**
     * Compatibility for create order by order-pay in admin
     */
    class WFACP_WC_Order_Pay
    {
        public function __construct()
        {
        }
        /**
         * add aero id in order meta
         *
         * @param $order
         *
         * @return void
         */
        public function update_aero_id($order)
        {
        }
        /**
         * update checkout views reporting data
         * @return void
         */
        public function update_checkout_views()
        {
        }
        /**
         * update checkout reporting meta
         *
         * @param $result
         * @param $order_id
         *
         * @return mixed
         */
        public function update_checkout_reporting($result, $order_id)
        {
        }
        public function internal_css()
        {
        }
    }
    class WFACP_Compatibility_WC_Deposit
    {
        public function __construct()
        {
        }
        public function save_data_to_parent_order($order_id, $data)
        {
        }
        public function add_custom_order_status($status)
        {
        }
        public function maybe_update_parent_order($order)
        {
        }
    }
    /**
     * Compatibility Name: WooCommerce Checkout Add-Ons
     * Plugin URI: http://www.woocommerce.com/products/woocommerce-checkout-add-ons/
     *
     */
    class WFACP_Checkout_addons
    {
        public function __construct()
        {
        }
        public function after_template_load()
        {
        }
        public function add_js()
        {
        }
        public function actions()
        {
        }
        public function add_fields($field)
        {
        }
        public function call_checkout_add_on($field, $key, $args)
        {
        }
        public function display_add_on_value_in_checkout_order_review($safe_text, $text)
        {
        }
        public function remove_addons_field($fields)
        {
        }
        public function refresh_checkout_fields_frag($fragments)
        {
        }
        public function wfacp_internal_css($slug)
        {
        }
    }
    class WFACP_Google_Address_Complete
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        /**
         *
         */
        public function actions()
        {
        }
        public function print_billing_address()
        {
        }
        public function print_shipping_address()
        {
        }
    }
    class WFACP_Plugins_Compatibility
    {
        public function __construct()
        {
        }
        public function add_custom_css()
        {
        }
        public function our_not_checkout_pages_actions()
        {
        }
        public function flatsome_hooks()
        {
        }
        public function our_checkout_actions()
        {
        }
        public function remove_shoptimizer_checkout_custom_field()
        {
        }
        public function register_fake_kirki()
        {
        }
        public function remove_actions_filters()
        {
        }
        public function remove_flatsome_hooks()
        {
        }
        public function override_theme_customizer_functionality()
        {
        }
        public function remove_checkout_hooks()
        {
        }
    }
    /**
     * WooCommerce Extended Coupon Features PRO
     * By Soft79
     * Class WFACP_Compatibility_Extended_Coupon_Pro
     */
    class WFACP_Compatibility_Extended_Coupon_Pro
    {
        public function __construct()
        {
        }
    }
    /**
     * Happy Elementor Addons by weDevs (v.3.2.1)
     * Plugin Path : https://happyaddons.com
     */
    class WFACP_Compatibility_With_Happy_Elementor
    {
        public function __construct()
        {
        }
        public function do_not_execute()
        {
        }
    }
    /**
     * https://docs.woocommerce.com/document/chained-products/
     * Class WFACP_WooCommerce_Chained_Products
     */
    class WFACP_WooCommerce_Chained_Products
    {
        public function __construct()
        {
        }
        public function do_not_display($status, $cart_item)
        {
        }
        public function do_not_undo($status, $cart_item)
        {
        }
        public function display_item_quantity($cart_item)
        {
        }
    }
    /**
     * YITH WooCommerce Dynamic Pricing and Discounts Premium
     * https://yithemes.com/themes/plugins/yith-woocommerce-dynamic-pricing-and-discounts/
     * Class WFACP_Compatibility_With_Yith_Discount
     */
    class WFACP_Compatibility_With_Yith_Discount
    {
        public function __construct()
        {
        }
        public function get_data($data)
        {
        }
        public function unset_fragments($fragments)
        {
        }
        public function js()
        {
        }
    }
    class WFACP_Compatibility_With_Active_OxygenBuilder
    {
        public function __construct()
        {
        }
        public function wfacp_skip_add_to_cart($status)
        {
        }
        public function remove_wp_head()
        {
        }
        function oxygen_builder_shortcode($shortcode_exist)
        {
        }
        public function is_xlink_open()
        {
        }
        public function show_embed_form($status)
        {
        }
        public function is_edit_mode_open($data)
        {
        }
        public function add_html_height()
        {
        }
    }
    /**
     * Name: YITH Dynamic Pricing per Payment Method for WooCommerce Premium by YITH
     * https://yithemes.com/themes/plugins/yith-dynamic-pricing-per-payment-method-for-woocommerce/
     * Class WFACP_Compatibility_With_Yith_Discount
     */
    class YITH_WCDPPM_Dynamic_Payment_Methods
    {
        public function __construct()
        {
        }
        public function enable()
        {
        }
        public function actions()
        {
        }
        public function show_shipping_on_load()
        {
        }
        public function add_css()
        {
        }
    }
    class WFACP_Compatibility_With_Polylang
    {
        public function __construct()
        {
        }
        public function add_pll_language()
        {
        }
        public function map_language_checkout($global_checkout_page_id)
        {
        }
    }
    class WFACP_Compatibility_With_Xlwcty
    {
        public function __construct()
        {
        }
        public function change_hook_to_next_move_hook($hook)
        {
        }
    }
    class WFACP_WC_Avatax
    {
        public function __construct()
        {
        }
        public function action()
        {
        }
    }
    /* Indeed Ultimate Affiliate Pro by WPIndeed Development */
    class WFACP_Compatibility_With_Indeed_Ultimate_Affiliate_Pro
    {
        public function __construct()
        {
        }
        public function remove_script()
        {
        }
    }
    /*
     * ShortPixel Image Optimizer by ShortPixel
     *
     */
    class WFACP_Compatibility_With_ShortPixel_Image_optimizer
    {
        public function __construct()
        {
        }
        public function remove_action()
        {
        }
    }
    class WFACP_Compatibility_With_Wfob
    {
        public function __construct()
        {
        }
        public function unset_mini_cart_position($positions)
        {
        }
    }
    class WFACP_Compatibility_With_WC_Parcel
    {
        public $fragment_obj = \null;
        public function __construct()
        {
        }
        public function action()
        {
        }
        public function add_fields($fields)
        {
        }
        public function postcode_my_parcel($field, $key, $args)
        {
        }
        public function get_instance()
        {
        }
        public function remove_street_address($locale_fields)
        {
        }
        public function validation_fields()
        {
        }
        public function make_validation($template_fields)
        {
        }
        public function checkout_billing_sections($sections)
        {
        }
        public function checkout_shipping_sections($sections)
        {
        }
        public function remove_optional_shipping_field_validation_error($data)
        {
        }
        public function internal_css($selected_template_slug)
        {
        }
        public function update_address_data($keys)
        {
        }
        public function unset_shipping_address_data($keys)
        {
        }
        public function add_actions()
        {
        }
    }
    class WFACP_Compatibility_With_Zasielkovna
    {
        public $instance = \null;
        public $plugin_name = \null;
        public function __construct()
        {
        }
        public function enable()
        {
        }
        public function actions()
        {
        }
        public function add_zasielkovna_shipping_options($method, $index)
        {
        }
    }
    /**
     * https://yithemes.com/themes/plugins/yith-woocommerce-ajax-product-filter/
     * Class WFACP_Compatibility_Yith_Wc_ajax_Product_Filter_Premium
     */
    class WFACP_Compatibility_Yith_Wc_ajax_Product_Filter_Premium
    {
        public function __construct()
        {
        }
        public function remove_js($path)
        {
        }
    }
    /*
     * WooCommerce PDF Invoices & Packing Slips
     * http://www.wpovernight.com
     */
    class WFACP_Compatibility_Pdf_Invoice_Packing_slip
    {
        public function __construct()
        {
        }
        /**
         * Remove Shipping data before printing in pdf if client using billing address.
         * and not fill shipping address
         *
         *
         * @param $data []
         * @param $instance WC_order
         *
         * @return array
         */
        public function remove_shipping_data($data, $instance)
        {
        }
    }
    /*
     * WPC Product Bundles for WooCommerce (Premium) by WPClever v.6.0.6
     */
    class WFACP_Woosb
    {
        public function __construct()
        {
        }
        public function action()
        {
        }
    }
    class WFACP_Compatibility_With_WF_Cart_Hooper
    {
        public function __construct()
        {
        }
        public function action()
        {
        }
        public function save_publish_checkout_pages_in_transient($force = \true, $count = '-1')
        {
        }
    }
    /*
     * plugin Name: All in One SEO by  All in One SEO Team (4.1.6.2)
     *
     */
    class WFACP_Compatibility_With_AIOSEO
    {
        public function __construct()
        {
        }
        public function remove_actions($template)
        {
        }
    }
    /*
     * Conditional Discounts for WooCommerce by ORION (v. 4.5.0)
     */
    class WFACP_Compatibility_With_CDFWBO
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function remove_action()
        {
        }
    }
    class WFACP_Compatibility_With_DDPRO
    {
        public function __construct()
        {
        }
        public function remove_divi_content_filter($instance)
        {
        }
    }
    class WFACP_Compatibility_With_Active_WooChimp
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
        public function hooks_actions()
        {
        }
        public function ibericode()
        {
        }
        public function SSWCMC()
        {
        }
    }
    /*
     * WooCommerce PostNL
     * Author Name: PostNL
     * https://wordpress.org/plugins/woo-postnl/
     */
    class WFACP_Compatibility_With_Wc_PostNL
    {
        public $wc_postNl = \null;
        public function __construct()
        {
        }
        public function add_field($fields)
        {
        }
        public function is_enable()
        {
        }
        public function display_field($field, $key)
        {
        }
        public function action()
        {
        }
        public function internal_css()
        {
        }
        public function add_js()
        {
        }
    }
    class WFACP_Compatibility_With_Divi_BodyCommerce
    {
        public function __construct()
        {
        }
        public function action()
        {
        }
        public function add_js()
        {
        }
    }
    class WFACP_Compatibility_With_SiteOrigin
    {
        public function __construct()
        {
        }
        public function force_execute_embed_shortcode()
        {
        }
    }
    class WFACP_WooCommerce_Product_Composite
    {
        public function __construct()
        {
        }
        public function do_not_display($status, $cart_item)
        {
        }
        public function do_not_display_quantity_increment($status, $cart_item)
        {
        }
        public function do_not_undo($status, $cart_item)
        {
        }
        public function do_not_display_main_product_price($status, $cart_item)
        {
        }
        public function display_item_quantity($cart_item)
        {
        }
        public function hide_quantity()
        {
        }
    }
    /**
     * WooCommerce Coupon Messages by itthinx
     * http://xootix.com/side-cart-woocommerce
     * Class WFACP_Compatibility_WC_Coupon_Messages
     */
    class WFACP_Compatibility_WC_Coupon_Messages
    {
        public function __construct()
        {
        }
        public function action()
        {
        }
        public function add_fragment($fragments)
        {
        }
        public function change_coupon_text($coupon_message)
        {
        }
    }
    class WFACP_Compatibility_With_Active_WCJ
    {
        public function __construct()
        {
        }
        public function add_invoice_field($order_id)
        {
        }
        public function price_by_country_enabled()
        {
        }
        public function allow_zero_discounting($status)
        {
        }
        public function wfacp_product_raw_data($raw_data, $pro)
        {
        }
        public static function is_enable()
        {
        }
    }
    class WFACP_Compatibility_With_WC_Germanized
    {
        public function __construct()
        {
        }
        public function germanized_terms()
        {
        }
        public function remove_actions()
        {
        }
        public function refresh_order_submit($fragments)
        {
        }
        public function update_order_review($postdata)
        {
        }
        public function wfacp_get_fragments($wfacp_id)
        {
        }
        public function removed_Germanized_action()
        {
        }
        public function remove_css()
        {
        }
        public function internal_css($selected_template_slug)
        {
        }
        public function do_not_display_native_submit_button($status)
        {
        }
        public function remove_order_button_html_filter()
        {
        }
        public function remove_place_order_button_text()
        {
        }
        public function remove_action_for_shipping()
        {
        }
        public function setup_fields_billing()
        {
        }
        public function add_internal_css()
        {
        }
    }
    class WFACP_Compatibility_With_Ti_Wishlist
    {
        public function __construct()
        {
        }
        public function unhook_wishlist_button()
        {
        }
    }
    /*
     * WooCommerce Cart Abandonment Recovery by CartFlows Inc
     */
    class WFACP_Compatibility_With_Woo_Cart_Abandonment_Recovery
    {
        public function __construct()
        {
        }
        public function action()
        {
        }
        public function is_enable()
        {
        }
        public function add_default_styling($args, $key)
        {
        }
        public function internal_css()
        {
        }
    }
    /*
    Name: WPC Product Quantity for WooCommerce (Premium)
    URI: https://wpclever.net/
    */
    class WFACP_WPC_Quantity_Premium
    {
        public function __construct()
        {
        }
        public function get_option_min_max($MinMax)
        {
        }
        public function get_product_min_max($id, $MinMax)
        {
        }
        public function get_parent_min_max($id, $MinMax)
        {
        }
        public function cart_item_min_max_quantity($MinMax, $cart_item)
        {
        }
    }
    class WFACP_Compatibility_Yith_Subscription
    {
        public function __construct()
        {
        }
        public function remove_aero_action()
        {
        }
    }
    class WFACP_Compatibility_With_Lumise_Fancy
    {
        public function __construct()
        {
        }
        public function add_customized_image($img_src, $cart_item)
        {
        }
    }
    class WFACP_Compatibility_With_WPML
    {
        public function __construct()
        {
        }
        public function wfacp_wpml_checkout_page_id_function($override_checkout_page_id)
        {
        }
        public function duplicate_template($new_post_id, $post_id)
        {
        }
        public function add_admin_css()
        {
        }
        public function remove_action()
        {
        }
    }
    /*
     * plugin Name: Breakdance by Breakdance (1.1)
     *
     */
    class WFACP_Compatibility_With_Breakdance
    {
        public function __construct()
        {
        }
        public function action($status, $post)
        {
        }
        public function get_shortcode_content($post)
        {
        }
        public function send_builder_content($post_content)
        {
        }
    }
    /**
     * https://woocommerce.com/products/force-sells/
     * Class WFACP_Compatibility_WC_Force_Sell
     */
    class WFACP_Compatibility_WC_Force_Sells
    {
        public function __construct()
        {
        }
        public function do_not_display_order_summary($allow_delete, $cart_item_key, $cart_item)
        {
        }
        public function do_not_display($status, $cart_item)
        {
        }
        public function do_not_undo($status, $cart_item)
        {
        }
        public function display_item_quantity($cart_item)
        {
        }
        public static function is_enable()
        {
        }
    }
    class WFACP_Compatibility_With_url_coupons_Sky_Verge
    {
        public function __construct()
        {
        }
        public function skip_add_to_cart($status)
        {
        }
        public function catch_applied_coupons()
        {
        }
        public function re_apply_coupon_global()
        {
        }
        public function disable_coupon_apply($url_match)
        {
        }
        public function re_apply_coupon()
        {
        }
    }
    class WFACP_Compatibility_Pixel_COG
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        /**
         * get product cost of goods price
         * @param $price
         * @param $product
         * @param $variation_id
         * @param $quantity
         * @param $mode
         *
         * @return float|mixed
         */
        public function cog_price($price, $product, $quantity, $mode, $settings)
        {
        }
        /**
         * @param $product
         * @param $quantity
         * @param $price
         *
         * @return float
         */
        public function get_cog_product_value($product, $quantity, $price)
        {
        }
        /**
         * @param $product
         *
         * @return array
         */
        public function get_available_product_cog($product)
        {
        }
        /**
         * @param $product_id
         *
         * @return false|mixed|string
         */
        public function get_product_cost_by_cat($product_id)
        {
        }
        /**
         * @param $product_id
         *
         * @return mixed|string
         */
        public function get_product_type_by_cat($product_id)
        {
        }
        public function cog_line_subtotal($subtotal, $mode, $settings)
        {
        }
        public function get_available_product_cog_cart()
        {
        }
    }
    class WFACP_Compatibility_With_Optimize_press
    {
        public function __construct()
        {
        }
        public function do_not_execute($status)
        {
        }
    }
    /**
     * Class WFACP_WC_MemberShip   WooCommerce Memberships By SkyVerge
     * Page Redirect in ajax when coupon apply
     *
     *
     */
    class WFACP_Compatibility_WC_MemberShip
    {
        public function __construct()
        {
        }
        public function remove_redirect_action($status)
        {
        }
        public function send_null_page_id($status)
        {
        }
        public function remove_action()
        {
        }
    }
    /**
     * https://makewebbetter.com/
     * Class WFACP_Hubspot_MakeWebBetter_Compatibilities
     */
    class WFACP_Hubspot_MakeWebBetter_Compatibilities
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
        public function add_fields($field)
        {
        }
        public function process_wfacp_html($field, $key)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
    }
    class WFACP_Aweber_Compatibilities
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
        public function add_fields($field)
        {
        }
        public function process_wfacp_html($field, $key)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
    }
    class WFACP_Compatibility_With_GR_WC
    {
        public function __construct()
        {
        }
        public function gr_field_register()
        {
        }
        public function add_fields($field)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
    }
    class WFACP_Compatibility_With_WC_Drip
    {
        public function __construct()
        {
        }
        public function init_class()
        {
        }
        public function add_drip_field($field)
        {
        }
        public function is_enable($slug)
        {
        }
        public function call_wc_drip_hook($field, $key, $args)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
        public function drip_css_func($selected_template_slug)
        {
        }
    }
    class WFACP_Compatibility_With_WC_EU_Vat
    {
        public function __construct()
        {
        }
        public function init()
        {
        }
        public function internal_css($selected_template_slug)
        {
        }
        public function is_enable($slug)
        {
        }
        public function add_eu_fields($field)
        {
        }
        public function process_wfacp_html($field, $key)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
    }
    class WFACP_Compatibility_With_Metorik_Helper
    {
        /**
         * @var Metorik_Custom;
         */
        public $custom_instance = \null;
        /**
         * @var Metorik_Helper_Carts;
         */
        public $cart_instance = \null;
        public function __construct()
        {
        }
        public function remove_metorki_hook()
        {
        }
        public function wfacp_internal_css($slug)
        {
        }
    }
    class WFACP_Compatibility_With_Conversio
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
        public function add_fields($field)
        {
        }
        public function is_enable()
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
        /**
         * display conversio field if user not optin earlier
         *
         * @param $field
         * @param $key
         *
         * @return string
         */
        public function display_field_conditional($field, $key)
        {
        }
    }
    class WFACP_Compatibility_With_Active_Woo
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
        public function is_enable()
        {
        }
        public function dequeue_js()
        {
        }
        public function remove_actions()
        {
        }
    }
    /**
     * WooCommerce - Active Campaign Integration By Jason Kadlec: ActiveWoo.com
     * Plugin URI: http://activewoo.com
     */
    class WFACP_Compatibility_With_WC_Active_Campaign_Integration
    {
        public function __construct()
        {
        }
        public function add_field($field)
        {
        }
        public function add_field_hook($field, $key, $args)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
    }
    class WFACP_Compatibility_With_Constant_Contact
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
        public function add_fields($field)
        {
        }
        public function is_enable()
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
    }
    /**
     * WC-AC Hook by Matthew Treherne
     * Plugin URI: https://wordpress.org/plugins/wc-ac-hook/
     */
    class WFACP_WC_AC_Hook
    {
        public $instance = \null;
        public function __construct()
        {
        }
        public function add_field($fields)
        {
        }
        public function action()
        {
        }
        public function display_field($field, $key)
        {
        }
        public function internal_css()
        {
        }
    }
    class WFACP_Compatibility_With_Klaviyo
    {
        public function __construct()
        {
        }
        public function add_fields($fields)
        {
        }
        public function setup()
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
        /**
         * @param $checkout_data
         * @param $cart WC_Cart;
         *
         * @return mixed
         */
        public function prepare_checkout_data($checkout_data, $cart)
        {
        }
        public function js_event()
        {
        }
        public function remove_actions()
        {
        }
    }
    class WFACP_Compatibility_With_WC_EU_Vat_Official
    {
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function action()
        {
        }
        public function add_eu_fields($field)
        {
        }
        public function process_wfacp_html($field, $key)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
        public function internal_css()
        {
        }
    }
    /**
     * Mailjet for WordPress by Mailjet SAS
     * Plugin Path : https://www.mailjet.com/partners/wordpress/
     */
    class Mailjet_For_WP
    {
        public function __construct()
        {
        }
        public function add_field($fields)
        {
        }
        public function action()
        {
        }
        public function display_field($field, $key)
        {
        }
        public function is_enable()
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
    }
    /**
     * Creative Mail by Constant Contact ( version 1.3.5)
     * Plugin Path: https://wordpress.org/plugins/creative-mail-by-constant-contact/
     */
    class WFACP_Creative_Mail_Constant_Contact
    {
        public $instance = \null;
        public function __construct()
        {
        }
        public function is_enable()
        {
        }
        public function add_field($fields)
        {
        }
        public function action()
        {
        }
        public function display_field($field, $key)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
        public function internal_css()
        {
        }
    }
    /** Simple Sales Tax
     * Class WFACP_Compatibility_With_SST
     */
    class WFACP_Compatibility_With_SST
    {
        public function __construct()
        {
        }
        public function remove_sst_hook()
        {
        }
        public function add_sst_field($field)
        {
        }
        public function call_sst_hook($field, $key, $args)
        {
        }
        public function add_css()
        {
        }
    }
    class WFACP_Compatibility_With_WC_Subscribe_To_Newsletter
    {
        public function __construct()
        {
        }
        public function remove_action()
        {
        }
        public function init_class()
        {
        }
        public function add_news_field($field)
        {
        }
        public function call_wc_news_hook($field, $key, $args)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
    }
    class WFACP_Compatibility_With_AutoMateWoo
    {
        public function __construct()
        {
        }
        public function intialise_automate_woo_obj()
        {
        }
        public function init_class()
        {
        }
        public function add_field($field)
        {
        }
        public function is_enable($slug)
        {
        }
        public function call_birthday_addon_hook($field, $key, $args)
        {
        }
        public function add_default_wfacp_styling($args, $key)
        {
        }
        public function amw_css_func($selected_template_slug)
        {
        }
    }
    class WFACP_Compatibility_With_Aliea_vat
    {
        public function __construct()
        {
        }
        public function add_eu_fields($field)
        {
        }
        public function frontend()
        {
        }
        public function init()
        {
        }
        public function woocommerce_form_field($field, $key, $args, $value)
        {
        }
        public function add_dependency_messages($messages)
        {
        }
        public function check_field($args, $key)
        {
        }
        public function internal_css($selected_template_slug)
        {
        }
    }
    class WFACP_Compatibility_With_Divi_builder
    {
        public function __construct()
        {
        }
        public function remove_action()
        {
        }
        public function remove_meta($wfacp_id)
        {
        }
        public function enable_divi_builder($aero_id, $data)
        {
        }
    }
    /**
     * Generate Press GP plugin compatibility
     * Class WFACP_Compatibility_With_GP_PLUGIN
     */
    class WFACP_Compatibility_With_GP_PLUGIN
    {
        public function __construct()
        {
        }
        /**
         * @param $wp_customize WP_Customize_Manager
         */
        public function wfacp_temp_remove_controls($wp_customize)
        {
        }
    }
    class WFACP_Compatibility_With_Elementor_Pro
    {
        public function __construct()
        {
        }
        public function remove_actions($status)
        {
        }
    }
    class WFACP_Compatibility_With_Thrive_Theme_builder
    {
        public function __construct()
        {
        }
        public function notify_aero_shortcode_to_thrive($prefixes)
        {
        }
        public function maybe_remove_is_checkout()
        {
        }
        public function remove_theme_style()
        {
        }
        public function dequeue_css()
        {
        }
        public function is_shortcode_exists($status, $post)
        {
        }
        public function send_thrive_content($post_content)
        {
        }
        public function get_shortcode_content()
        {
        }
        public function footer_scripts()
        {
        }
        public function duplicate_data($new_post_id, $post_id)
        {
        }
    }
    class WFACP_CartFlows_Compatibility
    {
        public function __construct()
        {
        }
        public function check_global_setting()
        {
        }
        public function remove_template_redirect()
        {
        }
        public function remove_render_cart_flows_inline_js()
        {
        }
        public function disable_aero_checkout_on_cart_flows_template($status)
        {
        }
    }
    class WFACP_Compatibility_With_WC_ActiveCompaign
    {
        public function __construct()
        {
        }
        public function init_class()
        {
        }
        public function add_ac_field($field)
        {
        }
        public function call_wc_ac_hook($field, $key, $args)
        {
        }
        public function wac_css_func()
        {
        }
    }
    class WFACP_WooCommerce_Product_bundles
    {
        public function __construct()
        {
        }
        public function action()
        {
        }
        public function do_not_display($status, $cart_item)
        {
        }
        public function do_not_undo($status, $cart_item)
        {
        }
        public function do_not_display_main_product_price($status, $cart_item)
        {
        }
        public function display_cart_item_price($_product, $cart_item, $cart_item_key)
        {
        }
        public function display_item_quantity($cart_item)
        {
        }
        public function get_data($data)
        {
        }
        public function unset_fragments($fragments)
        {
        }
        public function js()
        {
        }
    }
    /*
     * Quantities and Units for WooCommerce by Nicholas Verwymeren
     * URL: https://wordpress.org/plugins/quantities-and-units-for-woocommerce/
     */
    class WFACP_Compatibility_With_Quantities_And_Unites
    {
        public $instance = \null;
        public function __construct()
        {
        }
        public function enable()
        {
        }
        public function action()
        {
        }
        public function cart_item_min_max_quantity($MinMax, $cart_item)
        {
        }
    }
    /**
     * WooCommerce Smart Coupons By Store Apps
     * Class WFACP_Compatibility_With_Smart_Coupons
     */
    class WFACP_Compatibility_With_Smart_Coupons
    {
        public function __construct()
        {
        }
        public function action()
        {
        }
        public function add_field($fields)
        {
        }
        public function display_field($field, $key)
        {
        }
        public function get_data($data)
        {
        }
        public function unset_fragments($fragments)
        {
        }
        public function wc_coupon_message_display()
        {
        }
        public function wc_coupon_html()
        {
        }
        public function wfacp_internal_css_script()
        {
        }
    }
    /**
     * Developed by SomewhereWarm
     * Class WFACP_WOOCOMMERCE_Gift_Card
     */
    class WFACP_WOOCOMMERCE_Gift_Card_Compatiblity
    {
        protected $gift_card_matches = [];
        protected $apply_gift_card = \false;
        public function __construct()
        {
        }
        public function attach_hooks()
        {
        }
        public function stop_normal_coupon_apply($status, $post)
        {
        }
        public function apply_gift_card()
        {
        }
        public function internal_css_js()
        {
        }
    }
    /**
     * By https://www.themehigh.com
     */
    class WFACP_Compatibility_With_CheckoutFields
    {
        public function __construct()
        {
        }
        public function remove_locale_my_parcel_nederlend()
        {
        }
        public function actions()
        {
        }
    }
    class WFACP_Compatibility_With_Wc_Custom_Thankyou
    {
        public function __construct()
        {
        }
        public function remove_order_recieved_hook($status)
        {
        }
    }
    /*
     * Bridge Core
     * https://qodeinteractive.com/
     */
    class WFACP_Compatibility_Bridge_Core
    {
        public function __construct()
        {
        }
        public function register_elementor_widget()
        {
        }
    }
    class WFACP_Brazil_Field_2
    {
        public static function get_instance()
        {
        }
        public function setup_fields_billing()
        {
        }
        public function setup_fields_shipping()
        {
        }
        public function update_address_data($keys)
        {
        }
        public function unset_shipping_address_data($keys)
        {
        }
    }
    /**.
     * Woo Credits Platinum
     * by http://woocredits.com/
     * Class WFACP_Compatibility_Woo_Credit
     */
    class WFACP_Compatibility_Woo_Credit
    {
        public function __construct()
        {
        }
        public function resolved_fatal_error()
        {
        }
    }
    class WFACP_Compatibility_With_WECFB
    {
        public $user_id = 0;
        public function __construct()
        {
        }
        function change_default_value($field_value, $key, $field)
        {
        }
        public function check_wc_validations_billing($fields)
        {
        }
        public function remove_hooks_for_brazil()
        {
        }
        public function actions()
        {
        }
        public function checkout_shipping_sections($sections)
        {
        }
        public function checkout_billing_sections($sections)
        {
        }
        public function add_js()
        {
        }
        public function add_dependency_messages($messages)
        {
        }
        public function internal_css()
        {
        }
    }
    class WFACP_Compatibility_With_WC_Billing_Field_RO
    {
        public function __construct()
        {
        }
        public function register_ro_field_style($args, $key)
        {
        }
        public function internal_css()
        {
        }
        public function add_firma_fields($field)
        {
        }
        public function process_wfacp_html($field, $key)
        {
        }
    }
    /*
     * WooCommerce Min/Max Quantities
     * Author Name: WooCommerce
     * https://woocommerce.com/products/minmax-quantities/
     */
    class WFACP_Compatibility_With_WC_Min_Max_Qty
    {
        public function __construct()
        {
        }
        public function product_item_min_max_quantity($MinMax, $product)
        {
        }
        public function cart_item_min_max_quantity($MinMax, $cart_item)
        {
        }
    }
    class WFACP_Compatibility_With_Beaver_builder
    {
        public function __construct()
        {
        }
        public function action()
        {
        }
        public function beaver_duplicate_data($new_post_id, $post_id)
        {
        }
    }
    class WFACP_Compatibility_With_Aelia_CS
    {
        public function __construct()
        {
        }
        /**
         * @hooked into `wcct_deal_amount_fixed_amount_{$type}` | `wcct_regular_price_event_value_fixed`
         * Modifies the amount for the fixed discount given by the admin in the currency selected.
         *
         * @param integer|float $price wfacp_discount_price_data
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
        public function wfacp_discount_regular_price_data($price)
        {
        }
        public function wfacp_discount_price_data($price)
        {
        }
        /**
         * @param $price_data
         * @param $pro WC_Product;
         *
         * @return mixed
         */
        public function wfacp_product_switcher_price_data($price_data, $pro)
        {
        }
        public function wfacp_discount_amount_data($discount_amount, $discount_type)
        {
        }
        public function wfacp_product_raw_data($raw_data, $product)
        {
        }
    }
    class WFACP_Compatibility_With_WC_Thanku_Customizer_page
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
    }
    class WFACP_Compatibility_With_Convert_kit_WC
    {
        public function __construct()
        {
        }
        public function init_class()
        {
        }
        public function add_ckwc_field($field)
        {
        }
        public function is_enable($slug)
        {
        }
        public function call_wc_drip_hook($field, $key, $args)
        {
        }
    }
    /**
     * https://wordpress.org/plugins/gumlet/
     * Class WFACP_Compatibility_GumLet
     */
    class WFACP_Compatibility_GumLet
    {
        public function __construct()
        {
        }
        public function remove_action()
        {
        }
    }
    class WFACP_Compatibility_With_fifu
    {
        public function __construct()
        {
        }
        /**
         * @param $product_image_url
         * @param $product WC_Product
         *
         * @return string
         */
        public function change_product_image($product_image_url, $product)
        {
        }
        public function actions()
        {
        }
    }
    class WFACP_Compatibility_With_WC_shipping_by_city
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
        public function add_hidden_field()
        {
        }
        public function do_not_print_hidden_shipping($status)
        {
        }
        public function update_shipping_city($posted_data)
        {
        }
        public function add_js()
        {
        }
    }
    /**
     * WPBisnis - WooCommerce Indo Ongkir
     *  https://www.wpbisnis.com/item/woocommerce-indo-ongkir
     * Class WFACP_Compatibility_WPbisnis_ONGKIR
     */
    class WFACP_Compatibility_WPbisnis_ONGKIR
    {
        public function __construct()
        {
        }
        public function remove_action()
        {
        }
        public function setup_field()
        {
        }
    }
    class WFACP_Theme_Understrap
    {
        public function __construct()
        {
        }
        public function remove_actions()
        {
        }
    }
    class WFACP_Compatibility_With_Astra
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
        public function remove_actions()
        {
        }
        public function remove_astra_addon()
        {
        }
        public function remove_theme_css_and_scripts()
        {
        }
        public function internal_css()
        {
        }
    }
    class WFACP_Compatibility_With_Theme_Nave
    {
        public function __construct()
        {
        }
        public function remove_styling()
        {
        }
        public function dequeue_theme_assets()
        {
        }
    }
    class WFACP_Compatibility_With_Estore
    {
        public function __construct()
        {
        }
        public function unhook_customizer_register()
        {
        }
    }
    class WFACP_Compatibility_With_Theme_Brick
    {
        public function __construct()
        {
        }
        public function is_enabled()
        {
        }
        /**
         * Do Not execute shortcode when bricks builder is open( sometime Session expired message displayed)
         *
         * @param $status
         *
         * @return false|mixed
         */
        public function do_not_execute_shortcode($status)
        {
        }
        public function is_shortcode_exists($status, $post)
        {
        }
        public function send_brick_content($post_content)
        {
        }
        public function get_shortcode_content($post)
        {
        }
        public function remove_our_shortcode($request)
        {
        }
        /**
         * Set default template when bricks theme activated
         *
         * @param $page_id
         *
         * @return void
         */
        public function update_page_template($page_id)
        {
        }
        public function internal_css()
        {
        }
    }
    class WFACP_Compatibility_With_Zerif_By_ThemeIsle
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
    }
    class WFACP_Compatibility_With_Edumy
    {
        public function __construct()
        {
        }
        public function register_elementor_widget()
        {
        }
    }
    class WFACP_Compatibility_With_Shopkeeper
    {
        public function __construct()
        {
        }
        public function remove_inline_styling()
        {
        }
    }
    class WFACP_Compatibility_With_Theme_Enfold
    {
        public function __construct()
        {
        }
        public function is_enabled()
        {
        }
        public function force_execute_embed_shortcode()
        {
        }
        public function avia_do_not_allow_shortcode($status)
        {
        }
        public function dequeue_actions()
        {
        }
        public function add_internal_css()
        {
        }
    }
    class WFACP_Compatibility_With_Active_Avada
    {
        public $js_folder_url = '';
        public function __construct()
        {
        }
        public function remove_actions()
        {
        }
        public function wp_enqueue_script()
        {
        }
        public function dequeue_scripts()
        {
        }
        public function internal_css()
        {
        }
        public function do_not_execute_shortcode($status)
        {
        }
    }
    class WFACP_Compatibility_With_Divi
    {
        public $hooks = ['et_pb_section_css_selector', 'et_pb_row_css_selector', 'et_pb_column_css_selector', 'et_pb_image_css_selector', 'et_pb_text_css_selector', 'et_pb_blurb_css_selector', 'et_pb_accordion_item_css_selector', 'wfacp_checkout_form_css_selector', 'wfacp_checkout_form_summary_css_selector', 'et_pb_menu_css_selector', 'et_pb_social_media_follow_css_selector'];
        public function __construct()
        {
        }
        public function disable_header_footer($layouts)
        {
        }
        public function remove_actions()
        {
        }
        public function maybe_disable_theme_builder()
        {
        }
        public function disable_theme_builder($layouts)
        {
        }
        public function internal_css()
        {
        }
        public function add_hook()
        {
        }
        public function add_selector($selector)
        {
        }
        public function change_template_include_hook()
        {
        }
    }
    class WFACP_Compatibility_With_Theme_Nitro
    {
        public function __construct()
        {
        }
        public function remove_panels($theme_options)
        {
        }
    }
    class WFACP_Compatibility_With_Theme_Twenty_Twenty_2
    {
        public function __construct()
        {
        }
        public function add_internal_css()
        {
        }
    }
    class WFACP_Compatibility_With_North
    {
        public function __construct()
        {
        }
        public function remove_actions()
        {
        }
    }
    class WFACP_Compatibility_With_Salient
    {
        public function __construct()
        {
        }
        public function remove_head_actions()
        {
        }
    }
    class WFACP_Compatibility_With_abolire
    {
        public function __construct()
        {
        }
        public function register_elementor_widget()
        {
        }
    }
    /**
     *
     * below code only work with gutenberg block
     * not with x pro theme editor
     * Class WFACP_Compatibility_With_ThemeCoXPro
     */
    class WFACP_Compatibility_With_ThemeCoXPro
    {
        public function __construct()
        {
        }
        public function print_css()
        {
        }
        public function remove_loader()
        {
        }
    }
    class WFACP_Compatibility_With_Shella
    {
        public function __construct()
        {
        }
        public function remove_theme_customizer()
        {
        }
    }
    class WFACP_Compatibility_With_Rehub
    {
        public function __construct()
        {
        }
        public function remove_customer_details()
        {
        }
        public function register_elementor_widget()
        {
        }
    }
    class WFACP_Compatibility_WoodMart_Theme
    {
        public function __construct()
        {
        }
        public function remove_action()
        {
        }
        public function action()
        {
        }
        public function dequeue_style()
        {
        }
        public function clear_cache()
        {
        }
        public function remove_class($body_class)
        {
        }
        public function enable()
        {
        }
        public function internal_css()
        {
        }
        public function register_elementor_widget()
        {
        }
    }
    class WFACP_Compatibility_With_Active_BuzzStore
    {
        public function __construct()
        {
        }
        public function remove_actions()
        {
        }
    }
    class WFACP_Compatibility_With_X_Store
    {
        public function __construct()
        {
        }
        public function remove_attachment_image_attributes()
        {
        }
        public function remove_actions()
        {
        }
    }
    /**
     * Elementor Sonaar Addons
     * https://sonaar.io/
     * Sonaar Music
     */
    class WFACP_Compatibility_With_Soonar_El
    {
        public function __construct()
        {
        }
        public function register_elementor_widget()
        {
        }
    }
    class WFACP_Compatibility_With_BuddyBoss
    {
        public function __construct()
        {
        }
        public function initialize_elementor_widgets($post_id)
        {
        }
        public function re_assign($template)
        {
        }
    }
    class WFACP_Compatibility_With_Biagiotti
    {
        public function __construct()
        {
        }
        public function unhook_theme_actions()
        {
        }
        public function wfacp_internal_css()
        {
        }
    }
    class WFACP_Compatibility_With_Electro
    {
        public function __construct()
        {
        }
        public function remove_electro_hooks()
        {
        }
        public function internal_css()
        {
        }
    }
    class WFACP_Compatibility_With_Active_Us_theme
    {
        public function __construct()
        {
        }
        public function remove_actions()
        {
        }
    }
    class WFACP_Compatibility_With_Konte_Theme
    {
        public function __construct()
        {
        }
        public function remove_actions()
        {
        }
        public function internal_css()
        {
        }
    }
    class WFACP_Compatibility_With_Blocksy
    {
        public function __construct()
        {
        }
        public function action()
        {
        }
        public function unset_body_class($body_class)
        {
        }
        public function remove_theme_style()
        {
        }
        public function internal_css()
        {
        }
        public function enable()
        {
        }
    }
    class WFACP_Compatibility_With_UneroTheme
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
    }
    class WFACP_Compatibility_With_Online_Shop
    {
        public function __construct()
        {
        }
        public function unhook_customizer_hooks()
        {
        }
    }
    class WFACP_Compatibility_With_storefront
    {
        public function __construct()
        {
        }
        public function remove_actions()
        {
        }
        public function action()
        {
        }
        public function theme_style()
        {
        }
        public function internal_css()
        {
        }
    }
    /*
    Theme Name: Elessi Theme
    Author: NasaTheme
    */
    class WFACP_Compatabilty_Elessi
    {
        public function __construct()
        {
        }
        public function remove_theme_hooks()
        {
        }
    }
    class WFACP_Compatibility_With_Theme_Porto
    {
        public function __construct()
        {
        }
        public function dequeue_actions()
        {
        }
        public function dequeue_style()
        {
        }
        public function remove_customizer_fields()
        {
        }
        public function internal_css()
        {
        }
    }
    class WFACP_Compatibility_With_Goya
    {
        public function __construct()
        {
        }
        public function unhook_theme_actions()
        {
        }
        public function wfacp_css_js_deque($bool, $path, $url)
        {
        }
        public function body_class($body_class)
        {
        }
        public function wfacp_internal_css()
        {
        }
    }
    class WFACP_Compatibility_With_ThemeGen
    {
        public function __construct()
        {
        }
        public function is_enabled()
        {
        }
        public function dequeue_actions()
        {
        }
        public function theme_style()
        {
        }
        public function add_internal_css()
        {
        }
    }
    class WFACP_Compatibility_With_Active_Hestia
    {
        public function __construct()
        {
        }
        public function remove_actions()
        {
        }
    }
    class WFACP_Compatibility_With_Uncode
    {
        public function __construct()
        {
        }
        public function remove_filter()
        {
        }
        public function remove_action()
        {
        }
    }
    class WFACP_Compatibility_With_Theme_Leka
    {
        public function __construct()
        {
        }
        public function unhook_func()
        {
        }
        public function unhook_dynamic_style()
        {
        }
    }
    class WFACP_Compatibility_With_Theme_Flatsome
    {
        public function __construct()
        {
        }
        public function add_terms_condition()
        {
        }
        public function remove_customizer_fields()
        {
        }
        public function add_term_conditions()
        {
        }
        public function add_internal_css()
        {
        }
    }
    /**
     * Theme: Savoy
     * Theme URI: http://themeforest.net/item/savoy-minimalist-ajax-woocommerce-theme/12537825
     * Class WFACP_Compatibility_With_Active_Savoy
     */
    class WFACP_Compatibility_With_Active_Savoy
    {
        public function __construct()
        {
        }
        public function remove_actions()
        {
        }
    }
    class WFACP_Compatibility_With_Shop_Isle_By_ThemeIsle
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
        public function internal_css()
        {
        }
    }
    class WFACP_Compatibility_With_Ocean
    {
        public function __construct()
        {
        }
        public function actions()
        {
        }
        public function remove_woo_css()
        {
        }
        public function remove_actions()
        {
        }
    }
    class WFACP_Compatibility_With_Theme_Jupiter
    {
        public function __construct()
        {
        }
        public function remove_customizer_setting()
        {
        }
    }
    class WFACP_Compatibility_With_Themify_Ultra
    {
        public function __construct()
        {
        }
        public function is_enabled()
        {
        }
        public function add_theme_path($path)
        {
        }
        public function internal_css()
        {
        }
    }
    class WFACP_Compatibility_With_Theme_Shoptimizer
    {
        public function __construct()
        {
        }
        public function unhook_func()
        {
        }
        public function remove_product_thumbnail_in_checkout()
        {
        }
        public function internal_css()
        {
        }
    }
    class WFACP_Compatibility_With_Revo
    {
        public function __construct()
        {
        }
        public function disallow_sw_theme_js_css($paths)
        {
        }
        public function allow_currency_exchange_js($status, $path, $url)
        {
        }
    }
    class WFACP_Compatibility_With_Atelier
    {
        public function __construct()
        {
        }
        public function remove_styling()
        {
        }
    }
    class WFACP_Compatibility_With_Puca
    {
        public function __construct()
        {
        }
        public function unhook_head_script()
        {
        }
    }
    class WFACP_Compatibility_With_Legenda
    {
        public function __construct()
        {
        }
        public function remove_styling()
        {
        }
    }
    class WFACP_Compatibility_With_Electro_Extension
    {
        public function __construct()
        {
        }
        public function register_elementor_widget()
        {
        }
    }
    class WFACP_Compatibility_Aero_header_footer
    {
        public function __construct()
        {
        }
        public function remove_old_header_footer_addon()
        {
        }
    }
    class WFACP_Builder_Embed_Compatibility
    {
        public function __construct()
        {
        }
        public function assign_embed_form_conditionally($template_file, $locate_template, $templates, $loader)
        {
        }
    }
}
namespace ElementorPro\Modules\ThemeBuilder\Conditions {
    class WFACP_Elementor_exit_intent extends \ElementorPro\Modules\ThemeBuilder\Conditions\Post
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
    class WFACP_Oxygen_Elementor_conflict
    {
        public function __construct()
        {
        }
        public function is_enabled()
        {
        }
        public function remove_all_filter()
        {
        }
        public function adding_our_default_template($my_template)
        {
        }
        public function delete_elementor_meta($post_id, $post)
        {
        }
        public function delete_oxygen_data($instance, $data)
        {
        }
    }
    /**
     *
     * Remove JetPack Notes JS
     * Class WFACP_Compatibility_JetPack
     */
    class WFACP_Compatibility_JetPack
    {
        public function __construct()
        {
        }
        public function remove_action()
        {
        }
    }
    class WFACP_Compatibility_Subscription
    {
        public function __construct()
        {
        }
        public function before()
        {
        }
        public function after()
        {
        }
        public function add_hidden_html($coupon)
        {
        }
        public function remove_filter()
        {
        }
        /**
         * @param $status
         * @param $product \WC_Product;
         *
         */
        public function allow_product_purchasable()
        {
        }
        public static function is_enabled()
        {
        }
        /**
         * @param $status boolean
         * @param $pro WC_Product
         *
         * @return bool
         */
        public function stop_printing_price($status, $pro)
        {
        }
        /**
         * @param $pro WC_Product
         * @param $cart_item_key String
         * @param $price_data []
         */
        public function display_price($pro, $cart_item_key, $price_data)
        {
        }
    }
    class WFACP_Compatibility_elementor
    {
        public static function get_instance()
        {
        }
        public function register_conditions($conditions_manager)
        {
        }
    }
    class WFACP_Add_Address_Field
    {
        public function __construct($id, $field, $type = 'billing')
        {
        }
        public function add_to_unset_field($unset_fields)
        {
        }
        public function add_to_default_address_fields($fields)
        {
        }
        public function add_to_address_options($options)
        {
        }
        public function display_in_order_edit_screen($fields)
        {
        }
    }
    class WFACP_handle_billing_address
    {
        public function __construct()
        {
        }
        public function attach_hooks()
        {
        }
        public function print_billing_fields()
        {
        }
    }
    class WFACP_Address_choosen_new_ui
    {
        public static function get_instance()
        {
        }
        public function change_type_of_checkbox($field, $key)
        {
        }
        public function start_div_wrapper()
        {
        }
        public function end_div_wrapper()
        {
        }
    }
    class WFACP_Insert_Field_After_Field
    {
        public function __construct($move_this_field, $after_this_field, $priority = 12)
        {
        }
        public function check_insert_after_field_exist($fields)
        {
        }
        public function replace_sections($section)
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
        protected $start_time = 0;
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
        public function bwf_data_store_set()
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
        /**
         * Override memory exceeded filter value
         *
         * @param $memory_exceeded
         *
         * @return bool
         */
        public function check_memory_exceeded($memory_exceeded)
        {
        }
        /**
         * Validate if call input time reached
         *
         * @return bool
         */
        public function validate_time_breach()
        {
        }
        /**
         * Check server memory limit.
         * Using 75% max
         *
         * @return bool
         */
        public function memory_exceeded()
        {
        }
        /**
         * Get Server memory limit value
         *
         * @return int|mixed
         */
        public function get_memory_limit()
        {
        }
        public function convert_hr_to_bytes($value)
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
        public function create_db_tables($args, $tables)
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
        /**
         * Deprecated
         * Since v1.9.82
         */
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
        public static function index_templates()
        {
        }
        public static function get_all_templates($force = \false)
        {
        }
        public static function get_remote_templates()
        {
        }
        public static function get_template_api_url()
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
        public static function is_optin_allowed()
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
    }
    class WooFunnels_Funnel_Builder_Commons
    {
        protected static $instance;
        /**
         * WooFunnels_Cache constructor.
         */
        public function __construct()
        {
        }
        /**
         * Creates an instance of the class
         * @return WooFunnels_Funnel_Builder_Commons
         */
        public static function get_instance()
        {
        }
        public function show_woofunnels_total_in_order_listings($column_name, $post_id)
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
        public static $woofunnels_api_url = 'https://track.funnelkit.com';
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
        /**
         * Set option for hide woofunnel plugin update notice
         */
        public static function hide_plugins_update_notices()
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
        public function maybe_swap_order_to_make_it_correct()
        {
        }
        /**
         * @hooked over admin_head::-1
         * Handles menu order for woofunnels submenu as it gets registered by the different plugin on different priorities
         */
        public function maybe_correct_submenu_order()
        {
        }
        public function get_top_slug($submenu)
        {
        }
        function array_swap(&$array, $swap_a, $swap_b)
        {
        }
        public function get_parent_position($menus)
        {
        }
        public function get_autonami_position($menus)
        {
        }
        public function get_current_order($get_all_submenu)
        {
        }
        public function is_our_submenu($plugin_page, $get_all_submenu)
        {
        }
        public function correct_sub_menu_order()
        {
        }
        public function correct_sub_menu_order_legacy()
        {
        }
        public function maybe_clear_plugin_update_transients()
        {
        }
        public function print_css()
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
        public function add_settings_fields_array($fields)
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
        public function maybe_add_js()
        {
        }
        public function get_localized_data()
        {
        }
        public function update_general_settings()
        {
        }
        public function update_global_settings_fields($options)
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
        public function all_fields()
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
         * @param string $path Path to directory or file.
         * @param bool $include_hidden Optional. Whether to include details of hidden ("." prefixed) files.
         *                               Default true.
         * @param bool $recursive Optional. Whether to recursively include file details in nested directories.
         *                               Default false.
         *
         * @return array|false {
         *     Array of files. False if unable to list directory contents.
         *
         * @type string $name Name of the file or directory.
         * @type string $perms *nix representation of permissions.
         * @type int $permsn Octal representation of permissions.
         * @type string $owner Owner name or ID.
         * @type int $size Size of file in bytes.
         * @type int $lastmodunix Last modified unix timestamp.
         * @type mixed $lastmod Last modified month (3 letter) and day (without leading 0).
         * @type int $time Last modified time.
         * @type string $type Type of resource. 'f' for file, 'd' for directory.
         * @type mixed $files If a directory and $recursive is true, contains another array of files.
         * }
         * @since 2.5.0
         *
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
    class BWF_Facebook_Sdk_Factory
    {
        /**
         * @param $pixel_id
         * @param $access_token
         * @param string $version
         *
         * @return boolean
         */
        public static function setup($pixel_id, $access_token, $version = 'v11.0')
        {
        }
        public static function set_test($test_code)
        {
        }
        public static function set_partner($partner_code)
        {
        }
        public static function create()
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
    class BWF_Facebook_Sdk
    {
        protected $container = array();
        protected $event_data = array();
        public function __construct($pixel_id, $access_token, $version = 'v11.0')
        {
        }
        public static function create($pixel_id, $access_token, $version = 'v11.0')
        {
        }
        public function set_event_data($event_name, $event_data)
        {
        }
        public function set_event_source_url($url = '')
        {
        }
        public function execute()
        {
        }
        public function get_event_id()
        {
        }
        public function get_time()
        {
        }
        public function get_user_data()
        {
        }
        /**
         * @param string $data hash input data using SHA256 algorithm.
         *
         * @return string
         */
        public static function hash($data)
        {
        }
        /**
         * @param string $pii PII data to check if its hashed.
         *
         * @return bool
         */
        public static function isHashed($pii)
        {
        }
        /**
         * Gets an email address, in lowercase.
         * @return string
         */
        public function getEmail()
        {
        }
        /**
         * Gets a phone number
         * @return string
         */
        public function getPhone()
        {
        }
        /**
         * Gets gender.
         * @return string
         */
        public function getGender()
        {
        }
        /**
         * Gets Date Of Birth.
         * @return string
         */
        public function getDateOfBirth()
        {
        }
        /**
         * Gets Last Name.
         * @return string
         */
        public function getLastName()
        {
        }
        /**
         * Gets First Name.
         * @return string
         */
        public function getFirstName()
        {
        }
        /**
         * Gets city.
         * @return string
         */
        public function getCity()
        {
        }
        /**
         * Gets state.
         * @return string
         */
        public function getState()
        {
        }
        /**
         * Gets zip code
         * @return string
         */
        public function getZipCode()
        {
        }
        /**
         * Gets country code.
         * @return string
         */
        public function getCountryCode()
        {
        }
        /**
         * Gets the date of birth day.
         * @return string
         */
        public function getDobd()
        {
        }
        /**
         * Gets the date of birth month.
         * @return string
         */
        public function getDobm()
        {
        }
        /**
         * Gets the date of birth year.
         * @return string
         */
        public function getDoby()
        {
        }
        /**
         * Extracts the IP Address from the PHP Request Context.
         * @return string
         */
        public function getIpAddress()
        {
        }
        /**
         * Extracts the HTTP User Agent from the PHP Request Context.
         * @return string
         */
        public function getHttpUserAgent()
        {
        }
        /**
         * Extracts the FBC cookie from the PHP Request Context.
         * @return string
         */
        public function getFbc()
        {
        }
        /**
         * Extracts the FBP cookie from the PHP Request Context.
         * @return string
         */
        public function getFbp()
        {
        }
        public function getExternalId()
        {
        }
        public function get_api_url()
        {
        }
        public function get_request_body()
        {
        }
        public function set_user_data($data = [])
        {
        }
        public function get_response_body()
        {
        }
        public function set_event_id($event_id)
        {
        }
        public function set_test_event_code($event_code)
        {
        }
        public function set_partner_agent($partner_agent)
        {
        }
        /**
         * Extracts the URI from the PHP Request Context.
         * @return string
         */
        public function getRequestUri()
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
        public function get_data($type = 'all')
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
        public function show_invalid_license_notice($plugins, $type)
        {
        }
        public function license_url($type)
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
    class BWF_Data_Tags
    {
        public function __construct()
        {
        }
        /**
         * @return BWF_Optin_Tags|null
         */
        public static function get_instance()
        {
        }
        public function get_first_name($attr)
        {
        }
        public function get_cookie($attr)
        {
        }
        public function get_url_parameter($attr)
        {
        }
    }
    class BWF_Ecomm_Tracking_Common
    {
        public $api_events = [];
        public $gtag_rendered = \false;
        public function __construct()
        {
        }
        /**
         * @return BWF_Ecomm_Tracking_Common|null
         */
        public static function get_instance()
        {
        }
        public function render()
        {
        }
        public function is_enable_tracking()
        {
        }
        /**
         * Render UTM js to fire to fire events
         */
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
         * Create DB tables
         * Actions and bwf_conversion_tracking
         */
        public function create_db_tables($args, $tables)
        {
        }
        /**
         * @param $optin_id
         * @param $posted_data
         *
         * @return void
         */
        public function update_optin_tracking_data($optin_id, $posted_data)
        {
        }
        /**
         * @param $order_id
         *
         * @return void
         */
        public function update_order_tracking_data($order_id)
        {
        }
        /**
         * create default tracking data
         */
        public function tracking_data()
        {
        }
        /**
         * Insert tracking data
         *
         * @param $args
         *
         * @return int
         */
        public function insert_tracking_data($args)
        {
        }
        /**
         * @param $timezone
         *
         * @return array|string
         */
        public function get_country_and_timezone($timezone)
        {
        }
        /**
         * get the timezone offset in minutes
         * @return float|int
         */
        public function get_timezone_offset()
        {
        }
        public function add_single_order_meta_box($post_type, $post)
        {
        }
        public function order_meta_box_data($post, $meta_data)
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
        public function log($message, $file_name = '', $folder_prefix = 'buildwoofunnels', $force = \false)
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
         * Is process running
         *
         * Check whether the current process is already running
         * in a background process.
         */
        protected function is_process_running()
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
         * Handle
         *
         * Pass each queue item to the task handler, while remaining
         * within server memory and time limit constraints.
         */
        protected function handle()
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
         * Get batch
         *
         * @return stdClass Return the first batch from the queue
         */
        protected function get_batch()
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
         * Update queue
         *
         * @param string $key Key.
         * @param array $data Data.
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
         * Dispatch
         *
         * @access public
         * @return void
         */
        public function dispatch()
        {
        }
        /**
         * Schedule event
         */
        protected function schedule_event()
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
         * Clear scheduled event
         */
        protected function clear_scheduled_event()
        {
        }
        /**
         * Schedule cron healthcheck
         *
         * @access public
         *
         * @param mixed $schedules Schedules.
         *
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
         * Cancel Process
         *
         * Stop processing queue items, clear cronjob and delete batch.
         *
         */
        public function cancel_process()
        {
        }
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
        /**
         * Is queue empty.
         *
         * @return bool
         */
        protected function is_queue_empty()
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
        public function kill_process_safe()
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
         * Manage last 5 offsets
         */
        public function manage_last_offsets()
        {
        }
        public function update_last_offsets($offsets)
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
         * Get batch.
         *
         * @return stdClass Return the first batch from the queue.
         */
        protected function get_batch()
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
         * See if the batch limit has been exceeded.
         *
         * @return bool
         */
        protected function batch_limit_exceeded()
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
         * Get memory limit.
         *
         * @return int
         */
        protected function get_memory_limit()
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
        /**
         * Is the updater running?
         *
         * @return boolean
         */
        public function is_updating()
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
    }
    class WooFunnels_Create_DB_Tables
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
        public function get_status($filter_tables = [])
        {
        }
        /**
         * @hooked over `admin_head`
         * This method create new tables in database except core table
         *
         */
        public function create()
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
         * Get customer last order date
         */
        public function get_l_order_date()
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
         * Set customer AOV
         *
         * @param $value
         */
        public function set_aov($value)
        {
        }
        /**
         * Get customer AOV
         *
         * @return int
         */
        public function get_aov()
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
        public $cached_contact_obj;
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
        /**
         * Is queue empty.
         *
         * @return bool
         */
        protected function is_queue_empty()
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
        public function kill_process_safe()
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
         * Manage last 5 offsets
         */
        public function manage_last_offsets()
        {
        }
        public function update_last_offsets($offsets)
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
         * Get batch.
         *
         * @return stdClass Return the first batch from the queue.
         */
        protected function get_batch()
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
         * See if the batch limit has been exceeded.
         *
         * @return bool
         */
        protected function batch_limit_exceeded()
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
         * Get memory limit.
         *
         * @return int
         */
        protected function get_memory_limit()
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
        /**
         * Is the updater running?
         *
         * @return boolean
         */
        public function is_updating()
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
         * @var null Used when order indexing is running
         */
        public static $indexing = \null;
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
        public $contact_wp_user_address_fields = array('address-1' => 'billing_address_1', 'address-2' => 'billing_address_2', 'city' => 'billing_city', 'state' => 'billing_state', 'postcode' => 'billing_postcode', 'country' => 'billing_country');
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
        public function bwf_update_contact_on_user_update($user_id, $old_user_data = [])
        {
        }
        /** Do async profile update call */
        public function do_profile_update_async_call($user_id, $old_user_data = \null)
        {
        }
        /** Update Address fields on WP User update */
        public function capture_profile_update_event($request)
        {
        }
        /** Get the unsaved contact with WPID and Email changes */
        public function maybe_get_contact_on_profile_update($user_id, $old_user_email = '')
        {
        }
        public function mark_updated_address_fields($meta_id, $object_id, $meta_key, $_meta_value)
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
         * Truncate the contact meta table
         * Run when BWF_DB_VERSION is 1.0.3
         */
        protected function empty_contact_meta_table()
        {
        }
        public function maybe_flag_old_contacts_indexing()
        {
        }
        public function maybe_create_db_tables()
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
         * Get contact by given phone number
         *
         * @param $phone
         *
         * @return array|object|void|null
         */
        public function get_contact_by_phone($phone)
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
         * Add bwf_contact table
         *
         *  Warning: check if it exists first, which could cause SQL errors.
         */
        public function create_db_tables($args, $tables)
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
         * @var WooFunnels_DB_Operations
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
         * @var bool $blank_values_update
         */
        public $blank_values_update = \false;
        public $is_subscribed = \false;
        /**
         * Get the contact details for the email passed if this email exits other create a new contact with this email
         *
         * @param string|int $wp_id WordPress User ID
         * @param string $email email
         * @param string $phone contact number
         * @param string|int $cid contact id,
         * @param string $uid Unique ID
         */
        public function __construct($wp_id = '', $email = '', $phone = '', $cid = '', $uid = '')
        {
        }
        public function set_blank_props()
        {
        }
        /**
         * Get contact by id i.e. cid
         *
         * @param $cid
         *
         * @return mixed
         */
        public function get_contact_by_id($cid)
        {
        }
        /**
         * Get contact cache object
         *
         * @param $type
         * @param $value
         *
         * @return false|mixed
         */
        public function get_cache_obj($type, $value)
        {
        }
        /**
         * Set contact cache object
         *
         * @param $type
         * @param $value
         * @param $output
         */
        public function set_cache_object($type, $value, $output)
        {
        }
        public function validate_and_set_obj($obj)
        {
        }
        public function set_obj_meta()
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
         * Get contact by phone
         *
         * @param $phone
         *
         * @return mixed
         */
        public function get_contact_by_phone($phone)
        {
        }
        public function get_contact_by_uid($uid)
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
         * Set contact first name
         *
         * @param $f_name
         */
        public function set_f_name($f_name)
        {
        }
        /**
         * Get contact first name
         */
        public function get_f_name()
        {
        }
        /**
         * Set contact last name
         *
         * @param $l_name
         */
        public function set_l_name($l_name)
        {
        }
        /**
         * Get contact last name
         */
        public function get_l_name()
        {
        }
        /**
         * Set contact tags
         *
         * @param string[] $tags
         */
        public function set_tags($tags)
        {
        }
        /**
         * Get contact tags
         */
        public function get_tags()
        {
        }
        /**
         * Set contact lists
         *
         * @param string[] $lists
         */
        public function set_lists($lists)
        {
        }
        /**
         * Get contact lists
         */
        public function get_lists()
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
         * Set contact wp id
         *
         * @param $wp_id
         */
        public function set_wpid($wp_id)
        {
        }
        /**
         * Purge contact sql object from cache
         */
        public function purge_contact_from_cache()
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
        public function get_contact_no()
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
        /**
         * Set contact timezone
         *
         * @param $timezone
         */
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
        /**
         * Set contact number
         *
         * @param $contact_no
         */
        public function set_contact_no($contact_no)
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
         * @return boolean true if the installed version of WooCommerce is 2.1 or greater
         * @since 1.0
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
        public static function create_db_tables($args, $tables)
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
    class WFACP_Public
    {
        public static $is_checkout = \null;
        public $page_id = 0;
        public $added_products = [];
        public $products_in_cart = [];
        public $applied_coupon_in_cart = '';
        public $product_settings = [];
        public $variable_product = \false;
        public $is_hide_qty = \false;
        public $is_checkout_override = \false;
        public $billing_details = \false;
        public $paypal_billing_address = \false;
        public $paypal_shipping_address = \false;
        public $shipping_details = \false;
        public $is_paypal_express_active_session = \false;
        public $is_amazon_express_active_session = \false;
        protected $products = [];
        protected $settings = [];
        protected $image_src = [];
        protected $already_discount_apply = [];
        protected $products_count = 0;
        protected $add_to_cart_via_url = \false;
        protected function __construct()
        {
        }
        public function add_to_cart_action($page_id)
        {
        }
        public function persistent_cart_merging()
        {
        }
        /**
         * Check valid header of the page (Text/Html)
         * We only process text/html header
         * If client enqueue script like this /wfacp_age/?script=frontend
         * then we not process this call for our checkout page
         * This issue occur with Oxygen Builder
         * @return bool
         * @since 1.6.0
         *
         */
        public function check_valid_header_of_page()
        {
        }
        public static function get_instance()
        {
        }
        public function check_advanced_setting($page_id)
        {
        }
        public function wfacp_changed_default_woocommerce_page()
        {
        }
        public function other_hooks()
        {
        }
        public function wfacp_before_add_to_cart()
        {
        }
        public function wfacp_after_add_to_cart()
        {
        }
        public function get_page_data($page_id)
        {
        }
        public function get_settings()
        {
        }
        public function get_product_list($wfacp_id = 0)
        {
        }
        public function get_product_settings()
        {
        }
        /**
         * add to cart product after checkout page is found
         * checkout page id
         *
         * @param $page_id
         */
        public function add_to_cart($page_id)
        {
        }
        /**
         * @since 1.5.2
         */
        public function merge_session_product_with_actual_product()
        {
        }
        public function apply_matched_coupons()
        {
        }
        public function default_value_via_url()
        {
        }
        public function best_value_via_url()
        {
        }
        public function split_product_individual_cart_items($cart_item_data)
        {
        }
        /**
         * @param $ins WC_Cart
         */
        public function calculate_totals($ins)
        {
        }
        public function calculate_item_discount($cart_item_data, $currency = '')
        {
        }
        /**
         * Apply discount on basis of input for product raw prices
         *
         * @param $item WC_cart;
         *
         * @return mixed
         */
        public function modify_calculate_price_per_session($item, $currency)
        {
        }
        /**
         *
         * @param $cart WC_Cart;
         */
        public function save_wfacp_session($cart)
        {
        }
        public function global_script()
        {
        }
        public function check_custom_name($cart_item)
        {
        }
        /**
         *
         * @param $item_data WC_Order_Item
         *
         * @return String
         */
        public function change_item_name($item_name, $item_data)
        {
        }
        public function change_order_item_name_edit_screen($item_id, $item)
        {
        }
        public function get_image_src($image_id, $size = 'full')
        {
        }
        /**
         * @var $cart_item WC_Order_Item
         * this function for using hiding quantity in order review
         */
        public function change_woocommerce_checkout_cart_item_quantity($text, $cart_item)
        {
        }
        public function change_woocommerce_email_quantity($quantity, $cart_item)
        {
        }
        /**
         * @param $item WC_Order_Item
         * @param $cart_item_key String
         * @param $values Object
         * @param $order WC_Order
         */
        public function save_meta_cart_data($item, $cart_item_key, $values, $order)
        {
        }
        /**
         * @param $formatted_meta Array
         * @param $instance WC_Order_Item
         */
        public function hide_out_meta_data($formatted_meta, $instance)
        {
        }
        public function hide_coupon_msg($msg)
        {
        }
        public function woocommerce_template_single_add_to_cart()
        {
        }
        public function woocommerce_variable_add_to_cart()
        {
        }
        public function woocommerce_variable_subscription_add_to_cart()
        {
        }
        public function woocommerce_simple_add_to_cart()
        {
        }
        public function woocommerce_subscription_add_to_cart()
        {
        }
        public function woocommerce_single_variation_add_to_cart_button()
        {
        }
        public function is_checkout_override()
        {
        }
        public function wp_footer()
        {
        }
        public function woocommerce_ajax_get_endpoint($url, $request)
        {
        }
        public function unset_wcct_campaign($status, $instance)
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
        public function woocommerce_template_single_excerpt()
        {
        }
        public function woocommerce_get_checkout_url($url)
        {
        }
        public function remove_shipping_method($section, $section_index, $step)
        {
        }
        public function skip_empty_section($status, $section)
        {
        }
        public function set_session_when_place_order_btn_pressed()
        {
        }
        public function reset_session_when_order_processed($data)
        {
        }
        public function set_session_when_coupon_applied()
        {
        }
        public function reset_session_when_coupon_removed()
        {
        }
        /**
         * validate cart hash of multiple checkout page when open in same browser
         * Make sure latest open checkout page is open
         */
        public function woocommerce_checkout_process()
        {
        }
        public function set_save_session($cart_content)
        {
        }
        /**
         * Remove all canonical in our page
         * Because of checkout page not for seo
         * IN firefox <link rel='next' href="URL">
         * Load our current page in network
         * and this cause to wrong behaviour of page
         */
        public function remove_canonical_link()
        {
        }
        public function reset_our_localstorage()
        {
        }
        public function woocommerce_cart_is_empty()
        {
        }
        public function add_to_cart_via_url()
        {
        }
        public function aero_add_to_checkout_parameter()
        {
        }
        public function aero_add_to_checkout_product_quantity_parameter()
        {
        }
        public function aero_default_value_parameter()
        {
        }
        public function aero_best_value_parameter()
        {
        }
        public function aero_coupons_value_parameter()
        {
        }
        public function merge_default_product($default_products, $products, $settings)
        {
        }
        /**
         * @param $data array;
         */
        public function product_available_form_purchase($data, $unique_key)
        {
        }
        public function get_product_count()
        {
        }
        public function restrict_sold_individual($status, $product_id)
        {
        }
        /**
         * @param $query WP_Query
         */
        public function load_page_to_home_page($query)
        {
        }
        public function force_purchasable_quick_view($variation_data)
        {
        }
        /**
         * hide add to cart tracking for global checkout
         *
         * @param $data
         *
         * @return array|mixed
         */
        public function update_tracking_data($data)
        {
        }
        /**
         * script render for on native checkout
         * @return void
         */
        public function enqueue_script()
        {
        }
        /**
         * localize tracking data for native checkout
         * @return array|void
         */
        public function get_analytics_data()
        {
        }
        /**
         * check is site native checkout
         * @return array|false|int|mixed|WP_Post
         */
        public function is_native_checkout()
        {
        }
        public function shimmer_css()
        {
        }
    }
    abstract class WFACP_Oxy_Template extends \WFACP_Template_Common
    {
        public $default_setting_el = [];
        public $set_bredcrumb_data = [];
        public $stepsData = [];
        protected $mini_cart_widget_id = 'order_summary';
        protected function __construct()
        {
        }
        public function form_step_count($step_count)
        {
        }
        public function change_col_span_for_order_summary($colspan_attr1)
        {
        }
        public function check_layout_9_sidebar_hide_coupon()
        {
        }
        public function element_start_before_the_form()
        {
        }
        public function element_end_after_the_form()
        {
        }
        public function reset_session()
        {
        }
        public function get_ajax_exchange_keys()
        {
        }
        public function get_localize_data()
        {
        }
        protected function get_field_css_ready($template_slug, $field_index)
        {
        }
        public function payment_heading()
        {
        }
        public function payment_sub_heading()
        {
        }
        public function get_payment_desc()
        {
        }
        public function change_single_step_label($name, $current_action)
        {
        }
        public function change_two_step_label($name, $current_action)
        {
        }
        public function change_place_order_button_text($text)
        {
        }
        public function payment_button_alignment()
        {
        }
        public function change_back_step_label($text, $next_action, $current_action)
        {
        }
        public function add_blank_back_text($label, $step, $current_step)
        {
        }
        public function add_mini_cart_fragments($fragments)
        {
        }
        /*
         * Hide product switcher if client use product switcher as widget
         */
        public function hide_product_switcher($fields, $key)
        {
        }
        /* Override the order summary section */
        public function add_fragment_order_summary($fragments)
        {
        }
        public function layout_order_summary($field, $key, $args, $value)
        {
        }
        public function get_divi_localize_data()
        {
        }
        public function remove_theme_styling($bool, $path, $url, $currentEle)
        {
        }
        public function wfacp_header_print_in_head()
        {
        }
        public function wfacp_footer_before_print_scripts()
        {
        }
        public function wfacp_footer_after_print_scripts()
        {
        }
        public function get_mobile_mini_cart_collapsible_title()
        {
        }
        public function enable_collapsed_coupon_field()
        {
        }
        public function collapse_enable_coupon_collapsible()
        {
        }
        public function collapse_order_quantity_switcher()
        {
        }
        public function collapse_order_delete_item()
        {
        }
        public function get_mobile_mini_cart_expand_title()
        {
        }
        public function use_own_template()
        {
        }
        public function breadcrumb_start()
        {
        }
        public function add_form_steps()
        {
        }
        public function get_product_switcher_mobile_style()
        {
        }
        public function add_body_class($classes)
        {
        }
        /**
         * Wrap Order preview form in Embed form div start style
         */
        public function add_checkout_preview_div_start()
        {
        }
        /**
         * Wrap Order preview form in Embed form div start style
         */
        public function add_checkout_preview_div_end()
        {
        }
        /**
         * Cart Link before the step bar
         */
        public function before_cart_link()
        {
        }
        public function before_return_to_cart_link($current_action)
        {
        }
        public function display_progress_bar()
        {
        }
        public function add_class_change_place_order($btn_html)
        {
        }
        //Mini Cart Settings
        public function mini_cart_heading()
        {
        }
        public function mini_cart_allow_product_image()
        {
        }
        public function mini_cart_allow_quantity_box()
        {
        }
        public function mini_cart_allow_deletion()
        {
        }
        public function mini_cart_allow_coupon()
        {
        }
        public function mini_cart_collapse_enable_coupon_collapsible()
        {
        }
        public function wfacp_collapsible_order_summary_content()
        {
        }
        public function display_order_summary_thumb($status)
        {
        }
        public function display_order_summary_thumb_collapsed()
        {
        }
        public function set_form_data($settings)
        {
        }
        /* Coupon Button Text */
        public function get_collapsible_coupon_button_text()
        {
        }
        public function get_form_coupon_button_text()
        {
        }
        public function get_mini_cart_coupon_button_text()
        {
        }
        /* End Coupon Button Text */
        /* Button Sub text  */
        public function display_button_icon_step_1($current)
        {
        }
        public function display_button_icon_step_2($current)
        {
        }
        public function button_icon_subheading_styling($class, $current)
        {
        }
        public function add_button_icon($i = 1)
        {
        }
        /*------------------ End  Sub Text----------------------------*/
    }
    abstract class WFACP_OXY_Field extends \OxyEl
    {
        protected $get_local_slug = '';
        protected $name = '';
        protected $media_settings = [];
        public $slug = 'wfacp_checkout_form_summary';
        protected $id = 'wfacp_order_summary_widget';
        protected $ajax_session_settings = [];
        protected $settings = [];
        protected $post_id = 0;
        protected $tabs = [];
        protected $sub_tabs = [];
        protected $html_fields = [];
        static $css_build = \false;
        protected $style_box = \null;
        public function __construct()
        {
        }
        public function generate_id_css($styles, $states, $selector, $class_obj, $defaults)
        {
        }
        public function init()
        {
        }
        /*
         * used by OxyEl class to show the element button in a specific section/subsection
         * @returns {string}
         */
        public function button_place()
        {
        }
        protected function add_tab($title = '')
        {
        }
        public function add_heading($control, $heading, $separator = '', $conditions = [])
        {
        }
        public function add_sub_heading($control, $heading, $separator = '', $conditions = [])
        {
        }
        protected function add_switcher($control, $key, $label = '', $default = 'on', $conditions = [])
        {
        }
        protected function add_icon($control, $key, $label = 'Icon', $default = '', $conditions = [], $selector = '')
        {
        }
        protected function add_select($control, $key, $label, $options, $default, $conditions = [])
        {
        }
        public function add_text($control, $key, $label, $default = '', $conditions = [], $description = '', $placeholder = '')
        {
        }
        protected function add_textArea($control, $key, $label, $default = '', $conditions = [])
        {
        }
        protected function add_typography($control, $key, $selectors = '', $label = '')
        {
        }
        protected function add_font($tab_id, $key, $selectors = '', $label = 'Color', $default = '', $conditions = [])
        {
        }
        protected function add_color($tab_id, $key, $selectors = '', $label = 'Color', $default = '#000000', $conditions = [])
        {
        }
        protected function add_background_color($tab_id, $key, $selectors = [], $default = '#000000', $label = '', $conditions = [])
        {
        }
        protected function add_border_color($tab_id, $key, $selectors = [], $default = '#000000', $label = '', $box_shadow = \false, $conditions = [])
        {
        }
        public function custom_typography($tab_id, $key, $selector, $label = '', $default = [], $tab_condition = [])
        {
        }
        /* Typography Fields  Start*/
        protected function add_font_family($tab_id, $key, $selectors = '', $label = 'Font Family', $default = 'Inherit', $conditions = [])
        {
        }
        protected function add_font_size($tab_id, $key, $selectors = '', $label = 'Color', $default = '', $conditions = [])
        {
        }
        protected function add_font_weight($tab_id, $key, $selectors = '', $label = 'Font Weight', $default = 'noormal', $conditions = [])
        {
        }
        protected function add_line_height($tab_id, $key, $selectors = '', $label = 'Line Height', $default = '1.5', $conditions = [])
        {
        }
        protected function add_letter_spacing($tab_id, $key, $selectors = '', $label = 'Letter Spacing', $default = '1', $conditions = [])
        {
        }
        protected function add_text_transform($tab_id, $key, $selectors = '', $label = 'Text Transform', $default = 'none', $conditions = [])
        {
        }
        protected function add_text_decoration($tab_id, $key, $selectors = '', $label = 'Text Decoration', $default = 'none', $conditions = [])
        {
        }
        protected function add_text_alignments($tab_id, $key, $selectors = '', $label = '', $default = 'left', $conditions = [])
        {
        }
        /* Typography Fields End*/
        protected function add_border_radius($tab_id, $key, $selector, $conditions = [], $default = [])
        {
        }
        protected function add_border_radius_preset($tab_id, $key, $selector, $label = '')
        {
        }
        protected function add_padding($tab_id, $key, $selector, $label = '')
        {
        }
        protected function add_margin($tab_id, $key, $selector, $label = '')
        {
        }
        protected function add_border($tab_id, $key, $selectors, $label = '')
        {
        }
        protected function add_only_border_radius($tab_id, $key, $selector, $name = '')
        {
        }
        protected function add_box_shadow($tab_id, $key, $selector, $label = '')
        {
        }
        protected function add_divider($control, $type)
        {
        }
        protected function range($tab_id, $key, $label = '', $selectors = '', $property = 'transition-duration', $default = [], $conditions = [])
        {
        }
        protected function add_width($tab_id, $key, $selectors = '', $label = '', $default = [], $conditions = [])
        {
        }
        protected function slider_measure_box($tab_id, $key, $selectors, $label, $default, $conditions = [], $property = "margin-bottom")
        {
        }
        protected function add_min_width($tab_id, $key, $selectors = '', $label = '', $default = [], $conditions = [])
        {
        }
        protected function add_height($tab_id, $key, $selectors = '', $label = '', $default = [], $conditions = [])
        {
        }
        public function add_wrapper($control, $conditions = [])
        {
        }
        public function close_wrapper($control, $conditions = [])
        {
        }
        protected function get_class_options()
        {
        }
        protected function get_condition_string($key, $condition)
        {
        }
        protected function get_unique_id()
        {
        }
        protected function get_name()
        {
        }
        protected function get_slug()
        {
        }
        public function slug()
        {
        }
        protected function get_id()
        {
        }
        protected function get_local_slug()
        {
        }
        public function controls()
        {
        }
        protected function setup_data($template)
        {
        }
        function defaultCSS()
        {
        }
    }
    abstract class WFACP_OXY_HTML_BLOCK extends \WFACP_OXY_Field
    {
        public function __construct()
        {
        }
        public function options()
        {
        }
        public final function render($setting, $defaults, $content)
        {
        }
        protected function preview_shortcode()
        {
        }
        protected function parse_ajax_settings($settings, $ajax_keys)
        {
        }
        protected function save_ajax_settings()
        {
        }
        protected function html($setting, $defaults, $content)
        {
        }
        protected function available_html_block()
        {
        }
        public function get_title()
        {
        }
        protected function order_summary($field_key)
        {
        }
        /**
         * @param $field STring
         * @param \Elementor\Widget_Base
         */
        protected function product_switching($field_key)
        {
        }
        /**
         * @param $field STring
         * @param $this \Elementor\Widget_Base
         */
        protected function order_total($field_key)
        {
        }
        protected function order_coupon($field_key)
        {
        }
        /**
         * @param $field STring
         * @param $this \Elementor\Widget_Base
         */
        protected function generate_html_block($field_key)
        {
        }
        protected function divider_field()
        {
        }
        public function pick_data($status, $tag, $attr)
        {
        }
        public function parse_render_settings()
        {
        }
    }
    class WFACP_OXY
    {
        public $modules_instance = [];
        public static function get_instance()
        {
        }
        public function load_oxy_importer()
        {
        }
        public static function set_locals($name, $id)
        {
        }
        public static function get_locals()
        {
        }
        public function is_oxy_page($status)
        {
        }
        public function check_current_page_is_aero_page($post)
        {
        }
        public function add_plus_sections()
        {
        }
        public function add_plus_subsections_content()
        {
        }
        /**
         * @param $loader WFACP_Template_loader
         */
        public function register_template_type($loader)
        {
        }
        public function register_templates($designs)
        {
        }
        public function load_oxy_abs_class($wfacp_id, $template = [])
        {
        }
        public function add_template_edit_link($links, $admin)
        {
        }
        public static function is_template_editor()
        {
        }
        public function init_extension()
        {
        }
        /**
         * Only run when oxygen builder importer running . Widget need to ready before builder_json_prepare
         * @return void
         */
        public function setup_oxygen_widgets()
        {
        }
        public function editor_prepare_module($post_id)
        {
        }
        public function prepare_module()
        {
        }
        public function run_widgets()
        {
        }
        public function setup_global_checkout($post_id)
        {
        }
        public function change_global_post_var_to_our_page_post($content)
        {
        }
        public function change_edit_with_oxygen_link($link, $post)
        {
        }
        public function add_admin_bar_link()
        {
        }
        /**
         * Delete oxy saved data from postmeta of aerocheckout ID
         */
        public function delete_oxy_data($post_id)
        {
        }
        public function duplicate_template($new_post_id, $post_id, $data)
        {
        }
        public function remove_oxygen_compatibility_function()
        {
        }
        public function enable_self_page_css()
        {
        }
        public function disable_universal_css($status)
        {
        }
    }
    final class WFACP_Template_Oxy extends \WFACP_Oxy_Template
    {
        public static function get_instance()
        {
        }
        public function set_selected_template($data)
        {
        }
        public function get_selected_register_template()
        {
        }
        public function css_default_classes()
        {
        }
        public function replace_native_checkout_form($template, $template_name)
        {
        }
        public function enqueue_style()
        {
        }
    }
    class WFACP_OXY_Summary extends \WFACP_OXY_HTML_BLOCK
    {
        public $slug = 'wfacp_checkout_form_summary';
        protected $id = 'wfacp_order_summary_widget';
        protected $get_local_slug = 'order_summary';
        public function __construct()
        {
        }
        function name()
        {
        }
        /**
         * @param $template WFACP_Template_Common;
         */
        public function setup_data($template)
        {
        }
        protected function mini_cart()
        {
        }
        public function generate_id_css($styles, $states, $selector, $class_obj, $defaults)
        {
        }
        public function html($setting, $defaults, $content)
        {
        }
        protected function preview_shortcode()
        {
        }
    }
    class WFACP_OXY_Form extends \WFACP_OXY_HTML_BLOCK
    {
        public $slug = 'wfacp_checkout_form';
        public $form_sub_headings = [];
        protected $get_local_slug = 'wfacp_form';
        protected $id = 'wfacp_oxy_checkout_form';
        public function __construct()
        {
        }
        public function generate_id_css($styles, $states, $selector, $class_obj, $defaults)
        {
        }
        public function name()
        {
        }
        /**
         * @param $template WFACP_Template_Common;
         */
        public function setup_data($template)
        {
        }
        protected function register_sections()
        {
        }
        public function get_sub_heading_settings()
        {
        }
        public function input_setting()
        {
        }
        protected function register_styles()
        {
        }
        public function get_progress_settings($tab_id)
        {
        }
        public function html($setting, $defaults, $content)
        {
        }
        protected function preview_shortcode()
        {
        }
        public function modern_label($field)
        {
        }
        public function migrate_label($post_id)
        {
        }
    }
    abstract class WFACP_EL_Fields extends \Elementor\Widget_Base
    {
        public function __construct($data = [], $args = \null)
        {
        }
        protected function add_tab($title = '', $tab_type = 1, $condition = [])
        {
        }
        protected function end_tab()
        {
        }
        protected function add_margin_padding_border($field_key, $selector, $full_selector = \false, $default = [])
        {
        }
        protected function add_width($field_key, $selector, $label = '', $default = [], $condition = [], $size_unit = [], $tablet_default = [], $mobile_default = [], $override_other_selector = [])
        {
        }
        protected function add_top_position($field_key, $selector, $label = '', $default = [], $condition = [], $size_unit = [], $tablet_default = [], $mobile_default = [], $override_other_selector = [])
        {
        }
        protected function add_padding($field_key, $selector, $default = [], $mobile_default = [], $condition = [], $tablet_default = [])
        {
        }
        protected function add_margin($field_key, $selector, $default = [], $mobile_default = [], $condition = [], $tablet_default = [])
        {
        }
        protected function add_border($field_key, $selector, $condition = [], $default = [], $fields_options = [])
        {
        }
        protected function add_border_radius($field_key, $selector, $condition = [], $default = [], $fields_options = [], $custom_label = '')
        {
        }
        protected function add_border_without_radius($field_key, $selector, $condition = [], $default = [], $fields_options = [])
        {
        }
        public function add_heading($heading, $separator = '', $conditions = [])
        {
        }
        public function add_typography($field_key, $selector, $fields_options = [], $conditions = [], $label = '')
        {
        }
        public function add_color($field_key, $selectors = [], $default = '', $label = '', $conditions = [])
        {
        }
        public function add_background_color($field_key, $selectors = [], $default = '#000000', $label = '', $conditions = [])
        {
        }
        public function add_controls_tabs($key, $conditions = [], $classes = '')
        {
        }
        public function add_controls_tab($key, $label)
        {
        }
        public function close_controls_tab()
        {
        }
        public function close_controls_tabs()
        {
        }
        public function add_border_color($field_key, $selectors = [], $default = '#000000', $label = '', $box_shadow = \false, $conditions = [])
        {
        }
        public function add_hover($field_key, $selectors = [], $default = '#000000', $label = '', $conditions = [])
        {
        }
        public function add_background($field_key, $selector, $default = '#000000', $label = '', $types = [], $conditions = [], $bg_type = [])
        {
        }
        public function add_number($field_key, $label, $default = 1, $conditions = [])
        {
        }
        public function add_text($field_key, $label, $default = '', $conditions = [], $classes = "", $description = '', $placeholder = '', $device_args = [])
        {
        }
        public function add_textArea($field_key, $label, $default = '', $conditions = [])
        {
        }
        public function add_choose($field_key, $label, $options = [], $default = '', $conditions = [], $description = '')
        {
        }
        public function add_switcher($field_key, $label = '', $label_on = '', $label_off = '', $default = 'no', $return_value = 'yes', $conditions = [], $tablet_default = "", $mobile_default = "", $classes = '', $device_args = [])
        {
        }
        public function add_switcher_without_responsive($field_key, $label = '', $label_on = '', $label_off = '', $default = 'no', $return_value = 'yes', $conditions = [], $tablet_default = "", $mobile_default = "", $classes = '', $device_args = [])
        {
        }
        public function add_select($field_key, $label, $options = [], $default = '', $conditions = [], $description = '', $classes = '')
        {
        }
        public function add_text_alignments($field_key, $selectors, $label = '', $options = [], $default = '', $conditions = [], $extra_css = \null)
        {
        }
        public function add_font_family($field_key, $selectors, $label = "", $default = '')
        {
        }
        protected function add_divider($separator = "")
        {
        }
        public function add_border_shadow($field_key, $selector = '', $label = '', $conditions = [])
        {
        }
        protected function add_font_size($field_key, $selector, $label = '', $default = [], $condition = [], $size_unit = [], $tablet_default = [], $mobile_default = [], $range = [])
        {
        }
    }
    abstract class WFACP_Elementor_HTML_BLOCK extends \WFACP_EL_Fields
    {
        public function __construct($data = [], $args = \null)
        {
        }
        protected final function render()
        {
        }
        protected function html()
        {
        }
        protected function available_html_block()
        {
        }
        protected function order_summary($field_key)
        {
        }
        /**
         * @param $field STring
         * @param \Elementor\Widget_Base
         */
        protected function product_switching($field_key)
        {
        }
        /**
         * @param $field STring
         * @param $this \Elementor\Widget_Base
         */
        protected function order_total($field_key)
        {
        }
        protected function coupon_field_settings($field_key)
        {
        }
        protected function coupon_field_style($field_key)
        {
        }
        protected function order_coupon($field_key)
        {
        }
        /**
         * @param $field STring
         * @param $this \Elementor\Widget_Base
         */
        protected function generate_html_block($field_key)
        {
        }
        protected function product_switching_saving_text($field_key)
        {
        }
    }
    class El_WFACP_Form_Summary extends \WFACP_Elementor_HTML_BLOCK
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
        public function get_categories()
        {
        }
        /**
         * _register_controls function DEPRECATED in 3.1.0 version of elementor 24-01-2021
         * @return void
         */
        protected function register_controls()
        {
        }
        protected function mini_cart()
        {
        }
        protected function html()
        {
        }
    }
    class El_WFACP_Form_Widget extends \WFACP_Elementor_HTML_BLOCK
    {
        public $typo_default_value = [];
        public $progress_bar = [];
        public $section_fields = [];
        public function __construct($data = [], $args = \null)
        {
        }
        public function get_name()
        {
        }
        public function get_title()
        {
        }
        public function get_icon()
        {
        }
        public function get_categories()
        {
        }
        /**
         * _register_controls function DEPRECATED in 3.1.0 version of elementor 24-01-2021
         * @return void
         */
        protected function register_controls()
        {
        }
        protected function register_sections()
        {
        }
        protected function register_styles()
        {
        }
        public function get_progress_settings()
        {
        }
        protected function get_class_options()
        {
        }
        protected function html()
        {
        }
        public function set_breadcrumb($active, $instance)
        {
        }
        /* -------------------------------End--------------------------------------- */
        /* ----------------Modern Label----------------------- */
        public function modern_label($field)
        {
        }
        public function migrate_label($el, $data)
        {
        }
        /* -------------------------------End--------------------------------------- */
    }
    class WFACP_Elementor
    {
        public static function get_instance()
        {
        }
        public static function set_locals($name, $id)
        {
        }
        public static function get_locals()
        {
        }
        public function initialize_widgets()
        {
        }
        public function add_widget_categories($elements_manager)
        {
        }
        public function is_elementor_page($status)
        {
        }
        public function check_current_page_is_aero_page($post)
        {
        }
        public function initialize_elementor_widgets($post_id)
        {
        }
        public function change_global_post_var_to_our_page_post($content)
        {
        }
        public function enqueue_scripts()
        {
        }
        /**
         * @param $loader WFACP_Template_loader
         */
        public function register_template_type($loader)
        {
        }
        public function register_templates($designs)
        {
        }
        public function load_elementor_abs_class($wfacp_id, $template = [])
        {
        }
        public function add_template_edit_link($links, $admin)
        {
        }
        public function custom_admin_style()
        {
        }
        public function register_custom_font()
        {
        }
        /**
         * Delete Elementor saved data from postmeta of aerocheckout ID
         */
        public function delete_elementor_data($post_id)
        {
        }
        public function duplicate_template($new_post_id, $post_id, $data)
        {
        }
        public function remove_photoswipe($status)
        {
        }
        public function disable_photoswipe_js()
        {
        }
    }
    final class WFACP_template_Elementor extends \WFACP_Elementor_template
    {
        public static function get_instance()
        {
        }
        public function set_selected_template($data)
        {
        }
        public function css_default_classes()
        {
        }
        public function replace_native_checkout_form($template, $template_name)
        {
        }
        public function enqueue_style()
        {
        }
    }
    abstract class WFACP_Elementor_Template extends \WFACP_Template_Common
    {
        public $default_setting_el = [];
        public $set_bredcrumb_data = [];
        public $stepsData = [];
        protected function __construct()
        {
        }
        public function display_button_icon_step_1($current)
        {
        }
        public function display_button_icon_step_2($current)
        {
        }
        public function button_icon_subheading_styling($class, $current)
        {
        }
        public function run_divi_styling()
        {
        }
        public function change_col_span_for_order_summary($colspan_attr1)
        {
        }
        public function check_layout_9_sidebar_hide_coupon()
        {
        }
        public function element_start_before_the_form()
        {
        }
        public function element_end_after_the_form()
        {
        }
        public function reset_session()
        {
        }
        public function get_ajax_exchange_keys()
        {
        }
        public function get_localize_data()
        {
        }
        protected function get_field_css_ready($template_slug, $field_index)
        {
        }
        public function payment_heading()
        {
        }
        public function payment_sub_heading()
        {
        }
        public function get_payment_desc()
        {
        }
        public function change_single_step_label($name, $current_action)
        {
        }
        public function change_two_step_label($name, $current_action)
        {
        }
        public function change_place_order_button_text($text)
        {
        }
        public function payment_button_text()
        {
        }
        public function payment_button_alignment()
        {
        }
        public function change_back_step_label($text, $next_action, $current_action)
        {
        }
        public function add_blank_back_text($label, $step, $current_step)
        {
        }
        public function add_mini_cart_fragments($fragments)
        {
        }
        /*
         * Hide product switcher if client use product switcher as widget
         */
        public function hide_product_switcher($fields, $key)
        {
        }
        public function display_order_summary_thumb($status)
        {
        }
        /* Override the order summary section */
        public function add_fragment_order_summary($fragments)
        {
        }
        public function layout_order_summary($field, $key, $args, $value)
        {
        }
        public function get_elementor_localize_data()
        {
        }
        public function set_default_setting_el()
        {
        }
        public function remove_theme_styling($bool, $path, $url, $currentEle)
        {
        }
        public function wfacp_header_print_in_head()
        {
        }
        public function wfacp_footer_before_print_scripts()
        {
        }
        public function wfacp_footer_after_print_scripts()
        {
        }
        public function get_mobile_mini_cart_collapsible_title()
        {
        }
        public function enable_collapsed_coupon_field()
        {
        }
        public function collapse_enable_coupon_collapsible()
        {
        }
        public function collapse_order_quantity_switcher()
        {
        }
        public function collapse_order_delete_item()
        {
        }
        public function get_mobile_mini_cart_expand_title()
        {
        }
        public function use_own_template()
        {
        }
        public function add_order_summary_to_sidebar()
        {
        }
        public function breadcrumb_start()
        {
        }
        public function add_form_steps()
        {
        }
        public function get_product_switcher_mobile_style()
        {
        }
        public function add_body_class($classes)
        {
        }
        /**
         * Wrap Order preview form in Embed form div start style
         */
        public function add_checkout_preview_div_start()
        {
        }
        /**
         * Wrap Order preview form in Embed form div start style
         */
        public function add_checkout_preview_div_end()
        {
        }
        /**
         * Cart Link before the step bar
         */
        public function before_cart_link()
        {
        }
        public function before_return_to_cart_link($current_action)
        {
        }
        public function display_progress_bar()
        {
        }
        public function add_class_change_place_order($btn_html)
        {
        }
        public function add_button_icon($i = 1)
        {
        }
        public function activate_theme_hook()
        {
        }
        public function get_order_pay_summary($order)
        {
        }
        public function mini_cart_heading()
        {
        }
        public function mini_cart_allow_product_image()
        {
        }
        public function mini_cart_allow_quantity_box()
        {
        }
        public function mini_cart_allow_deletion()
        {
        }
        public function mini_cart_allow_coupon()
        {
        }
        public function mini_cart_collapse_enable_coupon_collapsible()
        {
        }
        public function display_image_in_collapsible_order_summary()
        {
        }
        /* Coupon Button Text */
        public function get_collapsible_coupon_button_text()
        {
        }
        public function get_form_coupon_button_text()
        {
        }
        public function get_mini_cart_coupon_button_text()
        {
        }
        /* End Coupon Button Text */
    }
    class WFACP_Pre_Built extends \WFACP_Template_Common
    {
        protected $sidebar_layout_order = [];
        protected $mobile_layout_order = [];
        public $customizer_fields = [];
        public $customizer_fields_data = [];
        protected $layout_setting = [];
        protected $internal_css = [];
        public $customizer_css = [];
        protected $customizer_data = [];
        protected $sections = array('wfacp_section');
        protected $section_keys_data = [];
        protected $current_active_sidebar = [];
        protected $excluded_sidebar_sections = [];
        public $excluded_layout_sections_sidebar = [];
        protected $checkout_buttons = [];
        public $customizer_keys = ['style' => 'wfacp_style', 'header' => 'wfacp_header', 'footer' => 'wfacp_footer', 'gbadge' => 'wfacp_gbadge', 'product_switcher' => 'wfacp_form_product_switcher'];
        public $wfacp_html_fields = ['wfacp_html_widget_1' => 'Custom HTML Sidebar-1', 'wfacp_html_widget_2' => 'Custom HTML Sidebar-2', 'wfacp_html_widget_3' => 'Custom HTML Below Form'];
        protected function __construct()
        {
        }
        public function enqueue_script()
        {
        }
        protected function get_localize_data()
        {
        }
        public function customizer_data()
        {
        }
        public function control_filter($control)
        {
        }
        public function get_customizer_fields()
        {
        }
        public function add_style_inline()
        {
        }
        public function typography_custom_css()
        {
        }
        public function mobile_layout_order()
        {
        }
        public function get_setup_sidebar_data()
        {
        }
        public function setup_sidebar_data()
        {
        }
        public function assign_field_data()
        {
        }
        protected function get_field_css_ready($template_slug, $field_index)
        {
        }
        public function change_default_setting($panel_details, $panel_key)
        {
        }
        public function order_btn_sticky($panel_details, $panel_key)
        {
        }
        public function multi_tab_default_setting($panel_details, $panel_key)
        {
        }
        public function add_form_steps()
        {
        }
        public function get_heading_section($section_key, $selected_template_slug = '')
        {
        }
        public function get_advance_setting($section_key, $selected_template_slug = '', $is_mult_tab = \false)
        {
        }
        public function get_color_setting($section_key, $selected_template_slug = '', $is_mult_tab = \false)
        {
        }
        public function prepare_dynamic_style($data, $section_key)
        {
        }
        public function get_sub_heading_section($section_key, $selected_template_slug = '')
        {
        }
        public function get_section_keys_data($section_key)
        {
        }
        public function set_section_keys_data($section_key, $data)
        {
        }
        public function assign_colors($data_keys, $form_color_meta = [])
        {
        }
        public function wfacp_font_size($data, $metaData)
        {
        }
        public function get_customizer_data()
        {
        }
        public function get_sections()
        {
        }
        public function get_section($wp_customize = \false)
        {
        }
        public function render_callback($data)
        {
        }
        public function wfacp_header_logo($data)
        {
        }
        public function wfacp_changed_step_text($data)
        {
        }
        public function form_pop_up_content()
        {
        }
        public function get_excluded_sidebar_sections()
        {
        }
        public function active_sidebar()
        {
        }
        public function excluded_other_widget()
        {
        }
        public final function get_module($data, $return, $type, $section_key)
        {
        }
        public function add_class_change_place_order($btn_html)
        {
        }
        public function change_place_order_button_text($order_button_text)
        {
        }
        public function change_single_step_label($name, $current_action)
        {
        }
        public function change_two_step_label($name, $current_action)
        {
        }
        public function change_back_step_label($text, $next_action, $current_action)
        {
        }
        public function display_back_button($step, $current_step)
        {
        }
        public function payment_button_text()
        {
        }
        public function call_before_cart_link($breadcrumb)
        {
        }
        public function change_setting_for_default_checkout($field, $key)
        {
        }
        function add_custom_cls($body_class)
        {
        }
        public function get_form_data()
        {
        }
        public function get_heading_title_class()
        {
        }
        public function get_heading_class()
        {
        }
        public function get_sub_heading_class()
        {
        }
        public function get_payment_desc()
        {
        }
        public function payment_heading()
        {
        }
        public function payment_sub_heading()
        {
        }
        public function display_next_button($step, $current_step)
        {
        }
        public function payment_button_alignment()
        {
        }
        public function customizer_layout_order($panel_details, $section_key)
        {
        }
        public function get_mobile_mini_cart_collapsible_title()
        {
        }
        public function get_mobile_mini_cart_expand_title()
        {
        }
        public function enable_collapsed_coupon_field()
        {
        }
        public function collapse_enable_coupon_collapsible()
        {
        }
        public function enable_coupon_right_side_coupon()
        {
        }
        public function get_embed_localize_data()
        {
        }
        public function display_image_in_collapsible_order_summary()
        {
        }
        public function print_empty_style_tag()
        {
        }
        public function remove_built_in_title_tag($status)
        {
        }
        public function collapse_order_delete_item()
        {
        }
        public function collapse_order_quantity_switcher()
        {
        }
        public function add_label_position_div()
        {
        }
        public function close_label_position_div()
        {
        }
    }
    final class WFACP_template_layout1 extends \WFACP_Pre_Built
    {
        public function change_col_span_for_order_summary($colspan_attr1)
        {
        }
        public function css_default_classes()
        {
        }
        public function get_excluded_sidebar_sections()
        {
        }
        public function set_default_layout_setting()
        {
        }
        public static function get_instance()
        {
        }
        /**
         * Using protected method no one create new instance this class
         * WFACP_template_layout1 constructor.
         */
        public function layout_1_customizer_fields($panel, $key)
        {
        }
        public function change_layout_order_setting($panel_details, $section_key)
        {
        }
        public function change_default_setting_layout_1($panel_details, $panel_key)
        {
        }
        public function change_form_setting($field, $key)
        {
        }
        public function customizer_layout_order($panel_details, $section_key)
        {
        }
        public function enqueue_style()
        {
        }
    }
    final class WFACP_template_layout9 extends \WFACP_Pre_Built
    {
        public function get_default_layout9($panel_details, $panel_key)
        {
        }
        public function change_default_customizer_setting($panel_details, $panel_key)
        {
        }
        public function import_default_customizer_data($panel_details, $data, $panel_key, $selected_template_slug)
        {
        }
        public function css_default_classes()
        {
        }
        public function set_default_layout_setting()
        {
        }
        public static function get_instance()
        {
        }
        public function enable_username_field_in_checkout_page($bool_val)
        {
        }
        public function layout_9_change_customizer_style($style_panel, $panel_keys)
        {
        }
        public function add_outside_header()
        {
        }
        public function get_temaplete_header_layout()
        {
        }
        public function layout_9_customizer_fields($panel, $key)
        {
        }
        public function get_excluded_sidebar_sections()
        {
        }
        public function layout_order_summary($field, $key, $args, $value)
        {
        }
        public function check_cart_product_thumbnail_image($product_image)
        {
        }
        public function set_temaplete_header_layout($header_layout)
        {
        }
        public function layout_9_change_default_sections($data, $this_data)
        {
        }
        public function add_cols_span_in_shipping($colspan)
        {
        }
        public function change_col_span_for_order_summary($colspan_attr1)
        {
        }
        public function layout_9_change_default_setting($field, $key)
        {
        }
        public function custom_add_form_steps()
        {
        }
        public function change_header_text($data)
        {
        }
        public function customizer_layout_order($panel_details, $section_key)
        {
        }
        public function wfacp_header_logo($data)
        {
        }
        public function enqueue_style()
        {
        }
        public function add_order_summary_to_sidebar()
        {
        }
        public function add_order_summary_to_sidebar_section()
        {
        }
        public function add_fragment_order_summary($fragments)
        {
        }
        public function woocommerce_order_summary_label_change($field)
        {
        }
        public function check_setting_show_img_order_summary()
        {
        }
        public function check_layout_9_sidebar_hide_coupon()
        {
        }
        public function hide_coupon_on_mobile_mini_cart()
        {
        }
        public function hide_default_form_coupon()
        {
        }
        public function add_blank_html_for_coupon_error()
        {
        }
        public function get_order_pay_summary($order)
        {
        }
    }
    final class WFACP_template_layout4 extends \WFACP_Pre_Built
    {
        public function change_col_span_for_order_summary($colspan_attr1)
        {
        }
        public function css_default_classes()
        {
        }
        public function set_default_layout_setting()
        {
        }
        public static function get_instance()
        {
        }
        public function layout_4_customizer_fields($panel, $key)
        {
        }
        public function get_excluded_sidebar_sections()
        {
        }
        public function change_oder_on_mobile($panel_details, $section_key)
        {
        }
        public function customizer_layout_order($panel_details, $section_key)
        {
        }
        public function change_default_setting($panel_details, $panel_key)
        {
        }
        public function add_styles($styles)
        {
        }
        public function template_specific_css()
        {
        }
        public function enqueue_style()
        {
        }
    }
    final class WFACP_template_layout2 extends \WFACP_Pre_Built
    {
        public function change_col_span_for_order_summary($colspan_attr1)
        {
        }
        public function css_default_classes()
        {
        }
        public function name_change_for_customizer_field($panel, $key)
        {
        }
        public function temp_default_setting($field, $key)
        {
        }
        public function set_default_layout_setting()
        {
        }
        public static function get_instance()
        {
        }
        /**
         * Using protected method no one create new instance this class
         * WFACP_template_layout1 constructor.
         */
        public function temp_change_default_setting($panel_details, $panel_key)
        {
        }
        public function customizer_layout_order($panel_details, $section_key)
        {
        }
        public function change_default_setting($panel_details, $panel_key)
        {
        }
        public function enqueue_style()
        {
        }
        public function enqueue_script()
        {
        }
        public function wfacp_get_support()
        {
        }
        public function wfacp_get_promise()
        {
        }
    }
    final class WFACP_Template_Custom_Page extends \WFACP_Pre_Built
    {
        public $steps_inline_styles = [];
        public static function get_instance()
        {
        }
        public function enqueue_style()
        {
        }
        public function get_step_forms_data()
        {
        }
        public function steps_customizer($panel_details)
        {
        }
        public function set_default_layout_setting()
        {
        }
        public function change_default_setting_disabled_step_bar($panel_details, $panel_key)
        {
        }
        public function change_default_setting1($panel_details, $panel_key)
        {
        }
        public function import_default_customizer_data($panel_details, $data, $panel_key, $selected_template_slug)
        {
        }
        public function add_step_form_style()
        {
        }
        public function get_form_step_data()
        {
        }
        public function wfacp_get_header()
        {
        }
        public function wfacp_get_footer()
        {
        }
        public function change_cancel_url($url)
        {
        }
        public function wfacp_multi_tab_default_setting($panel_details, $panel_key)
        {
        }
        public function disable_template_loading($status)
        {
        }
        public function run_divi_customizer_css()
        {
        }
        public function no_follow_no_index()
        {
        }
        public function get_customizer_data()
        {
        }
        public function add_panal_for_mini_cart($data, $this_data)
        {
        }
        /*********************************** Mini Cart Order Summary Widget ********************************/
        public function get_localize_data()
        {
        }
        public function add_fragment_product_switching($fragments)
        {
        }
        public function get_ajax_exchange_keys()
        {
        }
        public function shortcode_mini_cart($attr)
        {
        }
        //Mini Cart Settings
        public function mini_cart_heading()
        {
        }
        public function mini_cart_allow_product_image()
        {
        }
        public function mini_cart_allow_quantity_box()
        {
        }
        public function mini_cart_allow_deletion()
        {
        }
        public function mini_cart_allow_coupon()
        {
        }
        public function mini_cart_collapse_enable_coupon_collapsible()
        {
        }
        /* Collapsible Order Summary */
        public function add_order_summary_to_sidebar()
        {
        }
        public function hide_coupon_on_mobile_mini_cart()
        {
        }
        public function add_fragment_order_summary($fragments)
        {
        }
        public function get_selected_register_template()
        {
        }
        public function add_internal_css()
        {
        }
    }
    class WFACP_Section_Mini_Cart_Summary
    {
        public static $customizer_key_prefix = 'wfacp_';
        public static $_instance = \null;
        /**
         * @var $template_common  WFACP_Template_Common
         */
        public $template_common;
        protected function __construct($template_common = \null)
        {
        }
        public static function get_instance($template_common)
        {
        }
        public function order_summary_settings()
        {
        }
    }
    class WFACP_SectionTestimonial
    {
        public static $customizer_key_prefix = 'wfacp_';
        public static $_instance = \null;
        /**
         * @param null|WFACP_Template_Common $template_common
         */
        protected function __construct($template_common = \null)
        {
        }
        public static function get_instance($template_common)
        {
        }
        public function testimonial_settings($i = 0)
        {
        }
    }
    class WFACP_SectionCustomerCare
    {
        public static $customizer_key_prefix = 'wfacp_';
        public static $_instance = \null;
        /**
         * WFACP_SectionCustomerCare constructor.
         *
         * @param WFACP_Pre_Built $template_common
         */
        protected function __construct($template_common = \null)
        {
        }
        public static function get_instance($template_common)
        {
        }
        public function customer_care_settings($i = 0)
        {
        }
    }
    class WFACP_SectionPromises
    {
        public static $customizer_key_prefix = 'wfacp_';
        public static $_instance = \null;
        /**
         * @param null|WFACP_Template_Common $template_common
         */
        protected function __construct($template_common = \null)
        {
        }
        public static function get_instance($template_common)
        {
        }
        public function promises_settings($i = 0)
        {
        }
    }
    class WFACP_SectionHtmlWidgets
    {
        public static $customizer_key_prefix = 'wfacp_';
        public static $_instance = \null;
        /**
         * WFACP_SectionHtmlWidget constructor.
         *
         * @param null|WFACP_Template_Common $template_common
         */
        protected function __construct($template_common = \null)
        {
        }
        public static function get_instance($template_common)
        {
        }
        public function html_widget_settings()
        {
        }
    }
    class WFACP_SectionListing
    {
        public static $customizer_key_prefix = 'wfacp_';
        public static $_instance = \null;
        public static $icon_listing = [];
        /**
         * @param null|WFACP_Template_Common $template_common
         */
        protected function __construct($template_common = \null)
        {
        }
        public static function get_instance($template_common)
        {
        }
        public function listing_settings($i = 0)
        {
        }
    }
    class WFACP_Section_Order_Summary
    {
        public static $customizer_key_prefix = 'wfacp_';
        public static $_instance = \null;
        /**
         * @var $template_common  WFACP_Template_Common
         */
        public $template_common;
        protected function __construct($template_common = \null)
        {
        }
        public static function get_instance($template_common)
        {
        }
        public function order_summary_settings()
        {
        }
    }
    class WFACP_SectionStyles
    {
        public static $customizer_key_prefix = 'wfacp_';
        public static $_instance = \null;
        /**
         * @param null|WFACP_Template_Common $template_common
         */
        protected function __construct($template_common = \null)
        {
        }
        public static function get_instance($template_common)
        {
        }
        public function style_settings()
        {
        }
    }
    class WFACP_SectionFooter
    {
        public static $customizer_key_prefix = 'wfacp_';
        public static $_instance = \null;
        /**
         * WFACP_SectionCustomerCare constructor.
         *
         * @param null|WFACP_Template_Common $template_common
         */
        protected function __construct($template_common = \null)
        {
        }
        public static function get_instance($template_common)
        {
        }
        public function footer_settings()
        {
        }
    }
    class WFACP_SectionForm
    {
        public static $customizer_key_prefix = 'wfacp_';
        public static $_instance = \null;
        /**
         * @var $template_common  WFACP_Template_Common
         */
        public $template_common;
        protected function __construct($template_common = \null)
        {
        }
        public static function get_instance($template_common)
        {
        }
        public function form_settings()
        {
        }
    }
    class WFACP_SectionCart
    {
        public static $customizer_key_prefix = 'wfacp_';
        public static $_instance = \null;
        /**
         * @var $template_common  WFACP_Template_Common
         */
        public $template_common;
        protected function __construct($template_common = \null)
        {
        }
        public static function get_instance($template_common)
        {
        }
        public function cart_settings()
        {
        }
    }
    class WFACP_Sectionlayout
    {
        public static $customizer_key_prefix = 'wfacp_';
        public static $_instance = \null;
        /**
         * WFACP_SectionCustomerCare constructor.
         *
         * @param null|WFACP_Template_Common $template_common
         */
        protected function __construct($template_common = \null)
        {
        }
        public static function get_instance($template_common)
        {
        }
        public function layout_settings()
        {
        }
    }
    class WFACP_SectionHeader
    {
        public static $customizer_key_prefix = 'wfacp_';
        public static $_instance = \null;
        /**
         * WFACP_SectionCustomerCare constructor.
         *
         * @param null|WFACP_Template_Common $template_common
         */
        protected function __construct($template_common = \null)
        {
        }
        public static function get_instance($template_common)
        {
        }
        public function header_settings()
        {
        }
    }
    class WFACP_SectionCustomCss
    {
        public static $customizer_key_prefix = 'wfacp_';
        public static $_instance = \null;
        /**
         * @var $template_common  WFACP_Template_Common
         */
        public $template_common;
        protected function __construct($template_common = \null)
        {
        }
        public static function get_instance($template_common)
        {
        }
        public function custom_css_settings()
        {
        }
    }
    class WFACP_SectionTwidget
    {
        public static $customizer_key_prefix = 'wfacp_';
        public static $_instance = \null;
        /**
         * @param null|WFACP_Template_Common $template_common
         */
        protected function __construct($template_common = \null)
        {
        }
        public static function get_instance($template_common)
        {
        }
        public function twidget_settings($i = 0)
        {
        }
    }
    class WFACP_Product_Switcher_Field
    {
        public static $customizer_key_prefix = 'wfacp_';
        public static $_instance = \null;
        /**
         * @var $template_common  WFACP_Template_Common
         */
        public $template_common;
        protected function __construct($template_common = \null)
        {
        }
        public static function get_instance($template_common)
        {
        }
        public function get_settings()
        {
        }
    }
    class WFACP_SectionGbadge
    {
        public static $customizer_key_prefix = 'wfacp_';
        public static $_instance = \null;
        /**
         * WFACP_SectionCustomerCare constructor.
         *
         * @param null|WFACP_Template_Common $template_common
         */
        protected function __construct($template_common = \null)
        {
        }
        public static function get_instance($template_common)
        {
        }
        public function gbadge_settings()
        {
        }
    }
    class WFACP_SectionProductDetails
    {
        public static $customizer_key_prefix = 'wfacp_';
        public static $_instance = \null;
        /**
         * @param null|WFACP_Template_Common $template_common
         */
        protected function __construct($template_common = \null)
        {
        }
        public static function get_instance($template_common)
        {
        }
        public function productDetails_settings()
        {
        }
    }
    final class WFACP_Customizer
    {
        public static $is_checkout = \false;
        public $customizer_key_prefix = '';
        public $template_assets = '';
        public function is_customizer_template($type)
        {
        }
        /**
         * @param $loader WFACP_Template_loader
         */
        public function register_template_type($loader)
        {
        }
        public function register_templates($designs)
        {
        }
        /**
         * @param $loader WFACP_Template_loader
         */
        public function register_wp_editor_template_type($loader)
        {
        }
        public function register_wp_editor_templates($designs)
        {
        }
        public function may_be_customizer_page($post)
        {
        }
        public function maybe_load_customizer()
        {
        }
        public static function get_instance()
        {
        }
        /**
         * Setup kirki data after page found
         */
        public function setup_after_page_found($page_id)
        {
        }
        /**
         * Remove any unwanted default controls.
         *
         * @param object $wp_customize
         *
         * @return bool
         */
        public function remove_sections($wp_customize)
        {
        }
        public function control_filter($active, $control)
        {
        }
        public function enqueue_scripts()
        {
        }
        public function maybe_remove_script_customizer()
        {
        }
        public function print_customizer_styles()
        {
        }
        public function add_sections($wp_customize)
        {
        }
        /**
         * @return WFACP_Template_Common
         */
        public function get_template_instance()
        {
        }
        public function add_loader_to_customizer()
        {
        }
        public function dequeue_unnecessary_customizer_scripts()
        {
        }
        public function may_setup_data($instance)
        {
        }
        public function wfacp_wfacpkirki_configuration($path)
        {
        }
        public function setup_page_for_wfacpkirki()
        {
        }
        public function wfacp_wfacpkirki_fields()
        {
        }
        public function assign_global_post_var($post_id)
        {
        }
        /**
         * to avoid unserialize of the current class
         */
        public function __wakeup()
        {
        }
        /**
         * to avoid serialize of the current class
         */
        public function __sleep()
        {
        }
    }
    /**
     * Class to create a minified css output.
     */
    class BWF_Blocks_CSS
    {
        /**
         * The css selector that you're currently adding rules to
         *
         * @access protected
         * @var string
         */
        protected $_selector = '';
        /**
         * Associative array of Google Fonts to load.
         *
         * Do not access this property directly, instead use the `get_google_fonts()` method.
         *
         * @var array
         */
        protected static $google_fonts = array();
        /**
         * Stores the final css output with all of its rules for the current selector.
         *
         * @access protected
         * @var string
         */
        protected $_selector_output = '';
        /**
         * Can store a list of additional selector states which can be added and removed.
         *
         * @access protected
         * @var array
         */
        protected $_selector_states = array();
        /**
         * Stores all of the rules that will be added to the selector
         *
         * @access protected
         * @var string
         */
        protected $_css = '';
        /**
         * Stores all of the custom css.
         *
         * @access protected
         * @var string
         */
        protected $_css_string = '';
        /**
         * The string that holds all of the css to output
         *
         * @access protected
         * @var string
         */
        protected $_output = '';
        /**
         * Stores media queries
         *
         * @var null
         */
        protected $_media_query = \null;
        /**
         * The string that holds all of the css to output inside of the media query
         *
         * @access protected
         * @var string
         */
        protected $_media_query_output = '';
        /**
         * Sets a selector to the object and changes the current selector to a new one
         *
         * @access public
         * @since  1.0
         *
         * @param  string $selector - the css identifier of the html that you wish to target.
         * @return $this
         */
        public function set_selector($selector = '')
        {
        }
        /**
         * Sets css string for final output.
         *
         * @param  string $string - the css string.
         * @return $this
         */
        public function add_css_string($string)
        {
        }
        /**
         * Wrapper for the set_selector method, changes the selector to add new rules
         *
         * @access public
         * @since  1.0
         *
         * @see    set_selector()
         * @param  string $selector the css selector.
         * @return $this
         */
        public function change_selector($selector = '')
        {
        }
        /**
         * Adds a pseudo class to the selector ex. :hover, :active, :focus
         *
         * @access public
         * @since  1.0
         *
         * @param  $state - the selector state
         * @param  reset - if true the        $_selector_states variable will be reset
         * @return $this
         */
        public function add_selector_state($state, $reset = \true)
        {
        }
        /**
         * Adds multiple pseudo classes to the selector
         *
         * @access public
         * @since  1.0
         *
         * @param  array $states - the states you would like to add
         * @return $this
         */
        public function add_selector_states($states = array())
        {
        }
        /**
         * Removes the selector's pseudo classes
         *
         * @access public
         * @since  1.0
         *
         * @return $this
         */
        public function reset_selector_states()
        {
        }
        /**
         * Adds a new rule to the css output
         *
         * @access public
         * @since  1.0
         *
         * @param  string $property - the css property.
         * @param  string $value - the value to be placed with the property.
         * @param  string $prefix - not required, but allows for the creation of a browser prefixed property.
         * @return $this
         */
        public function add_rule($property, $value, $prefix = \null)
        {
        }
        /**
         * Adds browser prefixed rules, and other special rules to the css output
         *
         * @access public
         * @since  1.0
         *
         * @param  string $property - the css property
         * @param  string $value - the value to be placed with the property
         * @return $this
         */
        public function add_special_rules($property, $value)
        {
        }
        /**
         * @param string $property
         * @param array $value
         */
        public function add_unit_value_rule($property, $value, $index_key = 'value')
        {
        }
        /**
         * Adds a css property with value to the css output
         *
         * @access public
         * @since  1.0
         *
         * @param  string $property - the css property
         * @param  string $value - the value to be placed with the property
         * @param  string optional $unit_value_pair - pass true or value_key when value contain [ 'value' => '10', unit => 'px' ] values structure
         * @return $this
         */
        public function add_property($property, $value = \null, $unit_value_pair = \false)
        {
        }
        /**
         * Adds multiple properties with their values to the css output
         *
         * @access public
         * @since  1.0
         *
         * @param  array $properties - a list of properties and values
         * @return $this
         */
        public function add_properties($properties)
        {
        }
        /**
         * Sets a media query in the class
         *
         * @since  1.1
         * @param  string $value
         * @return $this
         */
        public function start_media_query($value)
        {
        }
        /**
         * Stops using a media query.
         *
         * @see    start_media_query()
         *
         * @since  1.1
         * @return $this
         */
        public function stop_media_query()
        {
        }
        /**
         * Gets the media query if it exists in the class
         *
         * @since  1.1
         * @return string|int|null
         */
        public function get_media_query()
        {
        }
        /**
         * Checks if there is a media query present in the class
         *
         * @since  1.1
         * @return boolean
         */
        public function has_media_query()
        {
        }
        /**
         * Outputs a string if set.
         *
         * @param array  $string a string setting.
         * @param string $unit if needed add unit.
         * @return string
         */
        public function render_string($string = \null, $unit = \null)
        {
        }
        /**
         * Outputs a string if set.
         *
         * @param array  $number a string setting.
         * @param string $unit if needed add unit.
         * @return string
         */
        public function render_number($number = \null, $unit = \null)
        {
        }
        /**
         * Generates the background output.
         *
         * @param array  $background an array of background settings.
         * @param object $css an object of css output.
         */
        public function add_background_property($property, $value)
        {
        }
        /**
         * Spacing for padding and margin 
         * @param string $property css name
         * @param object $value css value [ top => '', bottom => '', left => '', right => '', unit => '' ]
         */
        public function add_sizing_property($property, $value)
        {
        }
        public function add_typograpghy_property($property, $value, $skipAttrs = [])
        {
        }
        public function add_boxshadow_property($property, $value)
        {
        }
        public function add_position_dimension_property($property, $value)
        {
        }
        public function shorthand_css($top, $right, $bottom, $left, $unit)
        {
        }
        public function add_border_property($property, $value)
        {
        }
        /**
         * Returns the google fonts array from the compiled css.
         *
         * @access public
         * @since  1.0
         *
         * @return string
         */
        public function fonts_output()
        {
        }
        /**
         * Returns the minified css in the $_output variable
         *
         * @access public
         * @since  1.0
         *
         * @return string
         */
        public function css_output()
        {
        }
        public function minify_css($style = '')
        {
        }
        public function custom_css($custom_css = '', $replace_selector = '')
        {
        }
    }
    /**
     * Class to Enqueue CSS of all the blocks.
     *
     * @category class
     */
    class WFACP_Blocks_Frontend_CSS
    {
        /**
         * Google fonts to enqueue
         *
         * @var array
         */
        public static $gfonts = array();
        /**
         * Instance Control
         */
        public static function get_instance()
        {
        }
        /**
         * Class Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Gather default google fonts.
         */
        public function gather_google_fonts($block_content, $block)
        {
        }
        /**
         * Outputs extra css for blocks.
         */
        public function frontend_inline_css()
        {
        }
        /**
         * Render Inline CSS helper function
         *
         * @param array $css the css for each rendered block.
         * @param string $style_id the unique id for the rendered style.
         * @param bool $in_content the bool for whether or not it should run in content.
         */
        public function render_inline_css($css, $style_id, $in_content = \false)
        {
        }
        /**
         * Gets the parsed blocks, need to use this becuase wordpress 5 doesn't seem to include gutenberg_parse_blocks
         *
         * @param string $content string of page/post content.
         */
        public function bwf_parse_blocks($content)
        {
        }
        /**
         * Outputs extra css for blocks.
         *
         * @param $post_object object of WP_Post.
         */
        public function frontend_build_css($post_object)
        {
        }
        public function compute_bwf_blocks($blocks)
        {
        }
        /**
         * @param mixed $attr
         * @param string $indexkey - check whether indexkey is set in $attr[] array or not
         * @param mixed $default - function return default value which you passed as a 3rd parameter eg. you need 'inherit' value when $indexkey value is true
         *
         * @return void
         */
        public function has_attr($attr, $indexkey, $screen = '', $default_val = \null, $misc_val = '')
        {
        }
        public function skip_attr($attr, $skip)
        {
        }
        public function render_checkout_form_css_head($attr, $unique_id)
        {
        }
        public function add_wrapper($string, $replace_selector)
        {
        }
        public function render_mini_cart_css_head($attr, $unique_id)
        {
        }
    }
    class BWF_Google_Fonts
    {
        public static $google_fonts = [];
        function __construct()
        {
        }
        public function gather_google_fonts($block_content, $block)
        {
        }
        public function enqueue_frontend_block_fonts()
        {
        }
        public static function is_web_font($font_name)
        {
        }
        public static function is_system_font($font_name)
        {
        }
        public function is_woofunnel_block($block_name)
        {
        }
        public static function register_font($font_name)
        {
        }
        /**
         * Based on: https://github.com/elementor/elementor/blob/bc251b81afb626c4c47029aea8a762566524a811/includes/frontend.php#L647
         */
        public static function enqueue_google_fonts($google_fonts, $handle = 'bwfblock-google-fonts')
        {
        }
    }
    abstract class WFACP_Gutenberg_Template extends \WFACP_Template_Common
    {
        public $default_setting_el = [];
        public $set_bredcrumb_data = [];
        public $stepsData = [];
        protected function __construct()
        {
        }
        /**
         * Gets the parsed blocks, need to use this becuase wordpress 5 doesn't seem to include gutenberg_parse_blocks
         *
         * @param string $content string of page/post content.
         */
        public function bwf_parse_blocks($content)
        {
        }
        public function print_mini_cart($attr)
        {
        }
        public function print_checkout_form($attr)
        {
        }
        public function form_step_count($step_count)
        {
        }
        public function change_col_span_for_order_summary($colspan_attr1)
        {
        }
        public function check_layout_9_sidebar_hide_coupon()
        {
        }
        public function element_start_before_the_form()
        {
        }
        public function element_end_after_the_form()
        {
        }
        public function reset_session()
        {
        }
        public function get_ajax_exchange_keys()
        {
        }
        public function get_localize_data()
        {
        }
        protected function get_field_css_ready($template_slug, $field_index)
        {
        }
        public function payment_heading()
        {
        }
        public function payment_sub_heading()
        {
        }
        public function get_payment_desc()
        {
        }
        public function change_single_step_label($name, $current_action)
        {
        }
        public function change_two_step_label($name, $current_action)
        {
        }
        public function change_place_order_button_text($text)
        {
        }
        public function payment_button_alignment()
        {
        }
        public function change_back_step_label($text, $next_action, $current_action)
        {
        }
        public function add_blank_back_text($label, $step, $current_step)
        {
        }
        public function add_mini_cart_fragments($fragments)
        {
        }
        /*
         * Hide product switcher if client use product switcher as widget
         */
        public function hide_product_switcher($fields, $key)
        {
        }
        /* Override the order summary section */
        public function add_fragment_order_summary($fragments)
        {
        }
        public function layout_order_summary($field, $key, $args, $value)
        {
        }
        public function get_divi_localize_data()
        {
        }
        public function remove_theme_styling($bool, $path, $url, $currentEle)
        {
        }
        public function wfacp_header_print_in_head()
        {
        }
        public function wfacp_footer_before_print_scripts()
        {
        }
        public function wfacp_footer_after_print_scripts()
        {
        }
        public function get_mobile_mini_cart_collapsible_title()
        {
        }
        public function enable_collapsed_coupon_field()
        {
        }
        public function collapse_enable_coupon_collapsible()
        {
        }
        public function collapse_order_quantity_switcher()
        {
        }
        public function collapse_order_delete_item()
        {
        }
        public function get_mobile_mini_cart_expand_title()
        {
        }
        public function use_own_template()
        {
        }
        public function breadcrumb_start()
        {
        }
        public function add_form_steps()
        {
        }
        public function get_product_switcher_mobile_style()
        {
        }
        public function add_body_class($classes)
        {
        }
        /**
         * Wrap Order preview form in Embed form div start style
         */
        public function add_checkout_preview_div_start()
        {
        }
        /**
         * Wrap Order preview form in Embed form div start style
         */
        public function add_checkout_preview_div_end()
        {
        }
        /**
         * Cart Link before the step bar
         */
        public function before_cart_link()
        {
        }
        public function before_return_to_cart_link($current_action)
        {
        }
        public function display_progress_bar()
        {
        }
        public function add_class_change_place_order($btn_html)
        {
        }
        //Mini Cart Settings
        public function mini_cart_heading()
        {
        }
        public function mini_cart_allow_product_image()
        {
        }
        public function mini_cart_allow_quantity_box()
        {
        }
        public function mini_cart_allow_deletion()
        {
        }
        public function mini_cart_allow_coupon()
        {
        }
        public function mini_cart_collapse_enable_coupon_collapsible()
        {
        }
        public function wfacp_collapsible_order_summary_content()
        {
        }
        public function display_order_summary_thumb($status)
        {
        }
        public function display_order_summary_thumb_collapsed()
        {
        }
        /* Coupon Button Text */
        public function get_collapsible_coupon_button_text()
        {
        }
        public function get_form_coupon_button_text()
        {
        }
        public function get_mini_cart_coupon_button_text()
        {
        }
        public function set_form_data($settings)
        {
        }
        public function set_mini_cart_data($settings)
        {
        }
        public function set_breadcrumb($active, $instance)
        {
        }
        public function set_active_step_on_cookie()
        {
        }
        public function has_block_visibiliy_classes($settings, $classes = [])
        {
        }
        /* End Coupon Button Text */
        /* Button Sub text  */
        public function display_button_icon_step_1($current)
        {
        }
        public function display_button_icon_step_2($current)
        {
        }
        public function button_icon_subheading_styling($class, $current)
        {
        }
        public function add_button_icon($i = 1)
        {
        }
    }
    final class WFACP_Template_Gutenberg extends \WFACP_Gutenberg_Template
    {
        public static function get_instance()
        {
        }
        public function set_selected_template($data)
        {
        }
        public function get_selected_register_template()
        {
        }
        public function css_default_classes()
        {
        }
        public function replace_native_checkout_form($template, $template_name)
        {
        }
        public function enqueue_style()
        {
        }
    }
    class WFACP_GutenBerg
    {
        public $modules_instance = [];
        public static $mini_cart_data = [];
        public static $checkout_form_data = [];
        public static $html_fields = [];
        public static $section_fields = [];
        public static function get_instance()
        {
        }
        public static function set_locals($name, $id)
        {
        }
        public static function get_locals()
        {
        }
        public function is_edit_page($status)
        {
        }
        public function get_cart_html()
        {
        }
        public function get_form_html()
        {
        }
        public function load_front_template($template_file)
        {
        }
        protected function block_registration()
        {
        }
        /**
         * @param $loader WFACP_Template_loader
         */
        public function register_template_type($loader)
        {
        }
        public function register_templates($designs)
        {
        }
        public function load_abs_class($wfacp_id, $template = [])
        {
        }
        public function add_template_edit_link($links, $admin)
        {
        }
        public function init_extension()
        {
        }
        public function register_post_meta_at_rest_level()
        {
        }
        public function prepare_module()
        {
        }
        /**
         * Add custom category
         *
         * @param array $categories category list.
         * @param WP_Post $post post object.
         */
        public function add_block_categories($categories)
        {
        }
        public function load_require_files()
        {
        }
        /**
         * Load assets for wp-admin when editor is active.
         */
        public function enqueue_block_editor_assets()
        {
        }
        public static function mini_cart_default_attrs()
        {
        }
        public function checkout_botton_icon_list()
        {
        }
        public static function form_attributes()
        {
        }
        public static function register_section_fields()
        {
        }
        public static function register_fields($temp_fields)
        {
        }
        public static function get_class_options()
        {
        }
        public static function class_section()
        {
        }
        /**
         * Enqueue Front Style.
         */
        public function enqueue_block_front_assets()
        {
        }
        public function setup_global_checkout($post_id)
        {
        }
        public function change_global_post_var_to_our_page_post($content)
        {
        }
        /**
         * Delete oxy saved data from postmeta of aerocheckout ID
         */
        public function delete_gutenberg_data($wfacp_id)
        {
        }
        public function bwf_blocks_admin_body_class($classes)
        {
        }
        public function duplicate_template($new_post_id, $post_id, $data)
        {
        }
        public function only_add_to_cart_product()
        {
        }
        public function remove_js_css_from_editor($paths)
        {
        }
        public function builder_actions($post, $json)
        {
        }
        public function modern_label($field, $key, $data)
        {
        }
        public function migrate_label($post_ID, $post, $update)
        {
        }
    }
    abstract class WFACP_Divi_Template extends \WFACP_Template_Common
    {
        public $default_setting_el = [];
        public $set_bredcrumb_data = [];
        public $stepsData = [];
        protected $mini_cart_widget_id = 'order_summary';
        protected function __construct()
        {
        }
        public function enqueue_scripts()
        {
        }
        public function form_step_count($step_count)
        {
        }
        public function run_divi_styling()
        {
        }
        public function change_col_span_for_order_summary($colspan_attr1)
        {
        }
        public function check_layout_9_sidebar_hide_coupon()
        {
        }
        public function element_start_before_the_form()
        {
        }
        public function element_end_after_the_form()
        {
        }
        public function reset_session()
        {
        }
        public function get_ajax_exchange_keys()
        {
        }
        public function get_localize_data()
        {
        }
        protected function get_field_css_ready($template_slug, $field_index)
        {
        }
        public function payment_heading()
        {
        }
        public function payment_sub_heading()
        {
        }
        public function get_payment_desc()
        {
        }
        public function change_single_step_label($name, $current_action)
        {
        }
        public function change_two_step_label($name, $current_action)
        {
        }
        public function change_place_order_button_text($text)
        {
        }
        public function payment_button_text()
        {
        }
        public function payment_button_alignment()
        {
        }
        public function change_back_step_label($text, $next_action, $current_action)
        {
        }
        public function add_blank_back_text($label, $step, $current_step)
        {
        }
        public function add_mini_cart_fragments($fragments)
        {
        }
        /*
         * Hide product switcher if client use product switcher as widget
         */
        public function hide_product_switcher($fields, $key)
        {
        }
        public function display_order_summary_thumb($status)
        {
        }
        public function display_order_summary_thumb_collapsed()
        {
        }
        /* Override the order summary section */
        public function add_fragment_order_summary($fragments)
        {
        }
        public function layout_order_summary($field, $key, $args, $value)
        {
        }
        public function get_divi_localize_data()
        {
        }
        public function remove_theme_styling($bool, $path, $url, $currentEle)
        {
        }
        public function wfacp_header_print_in_head()
        {
        }
        public function wfacp_footer_before_print_scripts()
        {
        }
        public function wfacp_footer_after_print_scripts()
        {
        }
        public function get_mobile_mini_cart_collapsible_title()
        {
        }
        public function enable_collapsed_coupon_field()
        {
        }
        public function collapse_enable_coupon_collapsible()
        {
        }
        public function collapse_order_quantity_switcher()
        {
        }
        public function collapse_order_delete_item()
        {
        }
        public function get_mobile_mini_cart_expand_title()
        {
        }
        public function use_own_template()
        {
        }
        public function breadcrumb_start()
        {
        }
        public function add_form_steps()
        {
        }
        public function get_product_switcher_mobile_style()
        {
        }
        public function add_body_class($classes)
        {
        }
        /**
         * Wrap Order preview form in Embed form div start style
         */
        public function add_checkout_preview_div_start()
        {
        }
        /**
         * Wrap Order preview form in Embed form div start style
         */
        public function add_checkout_preview_div_end()
        {
        }
        /**
         * Cart Link before the step bar
         */
        public function before_cart_link()
        {
        }
        public function before_return_to_cart_link($current_action)
        {
        }
        public function display_progress_bar()
        {
        }
        public function add_class_change_place_order($btn_html)
        {
        }
        //Mini Cart Settings
        public function mini_cart_heading()
        {
        }
        public function mini_cart_allow_product_image()
        {
        }
        public function mini_cart_allow_quantity_box()
        {
        }
        public function mini_cart_allow_deletion()
        {
        }
        public function mini_cart_allow_coupon()
        {
        }
        public function mini_cart_collapse_enable_coupon_collapsible()
        {
        }
        public function wfacp_collapsible_order_summary_content()
        {
        }
        public function display_image_in_collapsible_order_summary()
        {
        }
        public function set_form_data($settings)
        {
        }
        public function page_container_div()
        {
        }
        public function page_container_close()
        {
        }
        /* Coupon Button Text */
        public function get_collapsible_coupon_button_text()
        {
        }
        public function get_form_coupon_button_text()
        {
        }
        public function get_mini_cart_coupon_button_text()
        {
        }
        /* End Coupon Button Text */
        /* Button Sub text  */
        public function display_button_icon_step_1($current)
        {
        }
        public function display_button_icon_step_2($current)
        {
        }
        public function button_icon_subheading_styling($class, $current)
        {
        }
        public function add_button_icon($i = 1)
        {
        }
        /*------------------ End  Sub Text----------------------------*/
    }
    abstract class WFACP_Divi_Field extends \ET_Builder_Module
    {
        protected $get_local_slug = '';
        public $vb_support = 'on';
        protected $post_id = 0;
        protected $tabs = [];
        protected $sub_tabs = [];
        protected $html_fields = [];
        protected $section_fields = [];
        protected $modules_fields = [];
        protected $typography = [];
        protected $tab_array = [];
        protected $style_selector = [];
        public $global_typography = ['wfacp_font_family_typography', 'wfacp_mini_cart_font_family'];
        protected $module_credits = array('module_uri' => '', 'author' => 'FunnelKit', 'author_uri' => 'https://funnelkit.com/');
        public function __construct()
        {
        }
        public function add_heading($tab_id, $heading, $separator = '', $conditions = [], $not_condition = [])
        {
        }
        protected function add_switcher($tab_id, $key, $label = '', $default = 'off', $conditions = [])
        {
        }
        protected function add_select($tab_id, $key, $label, $options, $default, $conditions = [])
        {
        }
        public function add_text($tab_id, $key, $label, $default = '', $conditions = [], $not_condition = [])
        {
        }
        public function add_class($key, $class)
        {
        }
        protected function add_textArea($tab_id, $key, $label, $default = '', $conditions = [])
        {
        }
        protected function add_typography($tab_id, $key, $selectors = '', $label = '', $default = '#333333', $conditions = [], $font_side_default = [], $letter_spacing_default = [])
        {
        }
        protected function add_text_alignments($tab_id, $key, $selectors = '', $label = '', $default = 'left', $conditions = [])
        {
        }
        protected function add_font($tab_id, $key, $selectors = '', $label = '', $default = 'default', $conditions = [])
        {
        }
        protected function add_font_size($tab_id, $key, $selectors = '', $label = '', $default = [], $conditions = [], $font_side_default = [])
        {
        }
        protected function add_global_font_size($tab_id, $key, $selectors = '', $label = '', $default = [], $conditions = [], $font_side_default = [])
        {
        }
        protected function add_letter_spacing($tab_id, $key, $selectors = '', $label = '', $default = [], $conditions = [])
        {
        }
        protected function color_type()
        {
        }
        protected function add_color($tab_id, $key, $selectors = '', $label = 'Color', $default = '#000000', $conditions = [], $not_condition = [])
        {
        }
        public function add_background_color($tab_id, $key, $selectors = [], $default = '#000000', $label = '', $conditions = [])
        {
        }
        public function add_border_color($tab_id, $key, $selectors = [], $default = '#000000', $label = '', $box_shadow = \false, $conditions = [])
        {
        }
        protected function add_border_radius($tab_id, $key, $selector, $conditions = [], $default = [], $custom_label = '')
        {
        }
        protected function add_padding($tab_id, $key, $selector, $default = '', $label = '', $conditions = [])
        {
        }
        protected function add_margin($tab_id, $key, $selector, $default = '', $label = '', $conditions = [])
        {
        }
        protected function add_border($tab_id, $key, $selectors, $conditions = [], $default = [], $fields_options = [], $default_args = [])
        {
        }
        protected function add_border_radius_new($tab_id, $key, $selectors, $conditions = [], $default = [], $fields_options = [], $default_args = [])
        {
        }
        protected function add_box_shadow($tab_id, $key, $selectors, $default = [], $conditions = [])
        {
        }
        protected function add_line_height($tab_id, $key, $selectors = '', $label = '', $default = '1px', $conditions = [])
        {
        }
        protected function add_divider($type)
        {
        }
        protected function add_width($tab_id, $key, $selectors = '', $label = '', $default = [], $conditions = [])
        {
        }
        protected function add_min_width($tab_id, $key, $selectors = '', $label = '', $default = [], $conditions = [])
        {
        }
        protected function add_controls_tabs($tab_id, $label, $conditions = [])
        {
        }
        protected function add_controls_tab($control_tabs_id, $label, $field_keys, $id = '')
        {
        }
        protected function add_icon($tab_id, $key, $label = '', $default = '', $conditions = [])
        {
        }
        protected function set_selector($tab_id, $key, $selector, $value = '')
        {
        }
        protected function create_css_property($key, $type)
        {
        }
        protected function get_class_options()
        {
        }
        protected function show_if($key, $condition)
        {
        }
        protected function show_if_not($key, $condition)
        {
        }
        protected function add_responsive_control($key)
        {
        }
        protected function assign_tab($key, $tab_id)
        {
        }
        protected function assign_sub_tab($key, $sub_tab_id)
        {
        }
        protected function add_tab($name, $type, $id = '')
        {
        }
        protected function add_sub_tab($name, $tab_id, $id = '')
        {
        }
        protected function add_font_family($tab_id, $key, $selectors = '', $label = '', $default = 'default', $conditions = [])
        {
        }
        protected function _add_link_options_fields()
        {
        }
        public function get_fields()
        {
        }
        protected function get_unique_id()
        {
        }
        protected function get_name()
        {
        }
        protected function get_slug()
        {
        }
        protected function get_id()
        {
        }
        protected function get_local_slug()
        {
        }
        public function init()
        {
        }
        protected function setup_data($template)
        {
        }
    }
    abstract class WFACP_Divi_HTML_BLOCK extends \WFACP_Divi_Field
    {
        public function __construct()
        {
        }
        public final function render($attrs, $content = \null, $render_slug = '')
        {
        }
        protected function html($attrs, $content = \null, $render_slug = '')
        {
        }
        protected function available_html_block()
        {
        }
        public function get_title()
        {
        }
        protected function order_summary($field_key)
        {
        }
        /**
         * @param $field STring
         * @param \Elementor\Widget_Base
         */
        protected function product_switching($field_key)
        {
        }
        /**
         * @param $field STring
         * @param $this \Elementor\Widget_Base
         */
        protected function order_total($field_key)
        {
        }
        protected function order_coupon($field_key)
        {
        }
        public function localize_array()
        {
        }
        public function prepare_css($attrs, $content, $render_slug)
        {
        }
        /**
         * @param $field STring
         * @param $this \Elementor\Widget_Base
         */
        protected function generate_html_block($field_key)
        {
        }
        protected function divider_field()
        {
        }
        public function product_switching_saving_text($tab_id, $field_keys, $field_key)
        {
        }
    }
    final class WFACP_Template_Divi extends \WFACP_Divi_Template
    {
        public static function get_instance()
        {
        }
        public function set_selected_template($data)
        {
        }
        public function css_default_classes()
        {
        }
        public function replace_native_checkout_form($template, $template_name)
        {
        }
        public function enqueue_style()
        {
        }
    }
    class WFACP_DIVI
    {
        public static function get_instance()
        {
        }
        public static function set_locals($name, $id)
        {
        }
        public static function get_locals()
        {
        }
        public function is_divi_page($status)
        {
        }
        /**
         * @param $loader WFACP_Template_loader
         */
        public function register_template_type($loader)
        {
        }
        public function register_templates($designs)
        {
        }
        public function initialize_divi_widgets($post_id)
        {
        }
        public function replace_divi_our_page_content($content)
        {
        }
        public function et_builder_add_builder_content_wrapper($content)
        {
        }
        public function load_divi_abs_class($wfacp_id, $template = [])
        {
        }
        public function add_template_edit_link($links, $admin)
        {
        }
        public function init_extension()
        {
        }
        public function add_admin_bar_link()
        {
        }
        /**
         * Delete Elementor saved data from postmeta of aerocheckout ID
         */
        public function delete_divi_data($post_id)
        {
        }
        public function duplicate_template($new_post_id, $post_id, $data)
        {
        }
        public function builder_actions($post, $json)
        {
        }
        public function modern_label($field, $key, $data)
        {
        }
        public function migrate_label($post_id)
        {
        }
    }
    class WFACP_Divi_Extension extends \DiviExtension
    {
        /**
         * The gettext domain for the extension's translations.
         *
         * @since 1.0.0
         *
         * @var string
         */
        public $gettext_domain = 'woofunnels-aero-checkout';
        public static $field_color_type = 'color';
        /**
         * The extension's WP Plugin name.
         *
         * @since 1.0.0
         *
         * @var string
         */
        public $name = 'woofunnels-aero-checkout';
        public $modules_instance = [];
        /**
         * WFACP_Divi_Extension constructor.
         *
         * @param string $name
         * @param array $args
         */
        public function __construct($name = 'woofunnels-aero-checkout', $args = array())
        {
        }
        protected function _enqueue_bundles()
        {
        }
        // This function run upto divi builder 4.9.*
        public function hook_et_builder_modules_loaded()
        {
        }
        /**
         * THis function run From Divi 4.10.0
         */
        public function hook_et_builder_ready()
        {
        }
    }
    class WFACP_Divi_Summary extends \WFACP_Divi_HTML_BLOCK
    {
        public $slug = 'wfacp_checkout_form_summary';
        protected $get_local_slug = 'order_summary';
        protected $id = 'wfacp_order_summary_widget';
        public function __construct()
        {
        }
        /**
         * @param $template WFACP_Template_Common;
         */
        public function setup_data($template)
        {
        }
        protected function mini_cart()
        {
        }
        public function html($attrs, $content = \null, $render_slug = '')
        {
        }
    }
    class WFACP_Divi_Form extends \WFACP_Divi_HTML_BLOCK
    {
        public $slug = 'wfacp_checkout_form';
        public $form_sub_headings = [];
        protected $get_local_slug = 'wfacp_form';
        protected $id = 'wfacp_divi_checkout_form';
        public function __construct()
        {
        }
        /**
         * @param $template WFACP_Template_Common;
         */
        public function setup_data($template)
        {
        }
        protected function register_sections()
        {
        }
        protected function register_styles()
        {
        }
        public function get_progress_settings()
        {
        }
        public function html($attrs, $content = \null, $render_slug = '')
        {
        }
        public function get_complete_fields()
        {
        }
        /* -------------------------------End--------------------------------------- */
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
    class WooFunnel_WFACP
    {
        public static $version = \WFACP_BWF_VERSION;
        public static function register()
        {
        }
        public static function load_files()
        {
        }
    }
}
namespace {
    function wfacp_is_woocommerce_active()
    {
    }
    function wfacp_is_elementor()
    {
    }
    function wfacp_elementor_edit_mode()
    {
    }
    /**
     * Return instance of Current Template Class
     * @return WFACP_Template_Common
     */
    function wfacp_template()
    {
    }
    /**
     * @var $this WFACP_admin
     */
    $wfacp_id = \WFACP_Common::get_id();
    /**
     * @var $this WFACP_admin
     * @var $id
     */
    $data = $this->get_localize_data();
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
    function wfacpkirki_show_upgrade_notification($plugin_data, $response)
    {
    }
    /**
     * Get the value of a field.
     * This is a deprecated function that we used when there was no API.
     * Please use the WFACPKirki::get_option() method instead.
     * Documentation is available for the new method on https://github.com/aristath/wfacpkirki/wiki/Getting-the-values
     *
     * @return mixed
     */
    function wfacpkirki_get_option($option = '')
    {
    }
    function wfacpkirki_sanitize_hex($color)
    {
    }
    function wfacpkirki_get_rgb($hex, $implode = \false)
    {
    }
    function wfacpkirki_get_rgba($hex = '#fff', $opacity = 100)
    {
    }
    function wfacpkirki_get_brightness($hex)
    {
    }
    function WFACPKirki()
    {
    }
    \define('WFACP_KIRKI_PLUGIN_FILE', __FILE__);
    \define('WFACP_KIRKI_VERSION', $version);
    /**
     * Returns an instance of the WFACPKirki object.
     */
    function wfacpkirki()
    {
    }
    function attach_wfacp_footer()
    {
    }
    function attach_wfacp_footer_js()
    {
    }
    function WFACP_Core()
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
    function bwf_schedule_recurring_action($timestamp, $interval_in_seconds, $hook, $args = array(), $group = '')
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
     * Check if action is running based on given hook or args or group
     *
     * @param $hook
     * @param array $args
     * @param string $group
     *
     * @return bool
     */
    function bwf_is_action_running($hook, $args = array(), $group = '')
    {
    }
    /**
     * Delete action by action id
     *
     * @param array $action_ids
     *
     * @return bool|int
     */
    function bwf_delete_action($action_ids = [])
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
    \define('BWF_VERSION', '1.10.8');
    \define('BWF_DB_VERSION', '1.0.5');
    function bwf_get_remote_rest_args($data = '', $method = 'POST')
    {
    }
    function bwf_clean($var)
    {
    }
    function bwf_get_states($country = '', $state = '')
    {
    }
    function bwf_get_fonts_list($mode = 'standard')
    {
    }
    function bwf_string_to_bool($string)
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
    /**
     * Creating updating contact and customer table
     * On offer accepted, on order status change and on order indexing
     *
     * @param $order_id
     * @param $products
     * @param $total
     * @param false $force
     *
     * @return int|void
     */
    function bwf_create_update_contact($order_id, $products, $total, $force = \false)
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
    /** countries data
     * @return mixed|null
     */
    function bwf_get_countries_data()
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
    function bwf_contacts_v1_0_init_db_setup()
    {
    }
    /**
     * @var $order WC_Order;
     */
    $wfacp_id = $order->get_meta('_wfacp_post_id');
    /**
     * @var $pro WC_Product_Variable;
     */
    $choose_label = \sprintf("<a href='#' class='wfacp_qv-button var_product {$is_variation_error}' qv-id='%d' qv-var-id='%d'>%s</a>", $product_data['id'], $cart_variation_id, \apply_filters('wfacp_choose_option_text', \__('Choose an option', 'woocommerce')));
    /**
     * @var $instance WFACP_template_layout4
     */
    $next_action = 'single_step';
    /**
     * @var $this WFACP_Template_Common
     */
    $rbox_border_type = '';
    /**
     * @var $instance WFACP_Template_Common
     */
    $checkout = \WC()->checkout();
    /**
     * @var $instance WFACP_Template_Common
     */
    $checkout = \WC()->checkout();
    /**
     * @var $order WC_Order;
     */
    $wfacp_id = $order->get_meta('_wfacp_post_id');
    /**
     * @var $widget_id
     * elementor widget id
     */
    $colspan_attr = '';
    /**
     * @var $widget_id
     */
    $instance = \wfacp_template();
    /**
     * @var $widget_id
     */
    $instance = \wfacp_template();
    /**
     * @var $widget_id
     */
    $instance = \wfacp_template();
    /**
     * @var $product_data []
     */
    $product_data = !isset($product_data) || \is_null($product_data) ? [] : $product_data;
    /**
     * @var $this WFACP_template_layout1
     */
    $page_meta_title = \WFACP_Common::get_option('wfacp_header_section_page_meta_title');
    /**
     * @var $this WFACP_Template_Common
     */
    $headers = $this->customizer_fields_data[$this->customizer_keys['header']];
    /**
     * @var $this WFACP_Template_Common
     */
    $product = [];
    /**
     * @var $this WFACP_Pre_Built
     */
    $excluded_data = array();
    /**
     * @var $this WFACP_template_layout9
     */
    $header_layout_is = $this->get_temaplete_header_layout();
    /**
     * @var $_product WC_Product_Variation
     *
     */
    $instance = \wfacp_template();
    /**
     * @var $this WFACP_Template_Common
     */
    $rbox_border_type = '';
    /**
     * @var $this WFACP_Template_Common
     */
    $hide_list_icon = $data['benefit_content']['hide_list_icon'];
    /**
     * @var $this WFACP_Template_Common
     */
    $hide_title = '';
    /**
     * @var $this WFACP_Template_Common
     */
    $rbox_border_type = '';
    /**
     * @var $this WFACP_Template_Common
     */
    $default_structure_cls = 'wfacp-three-cols';
    /**
     * @var $_product WC_Product_Variation
     *
     */
    $instance = \wfacp_template();
    /**
     * @var $this WFACP_Template_Common
     */
    $headers = $this->customizer_fields_data[$this->customizer_keys['header']];
    /**
     * @var $this WFACP_Template_Common
     */
    $product = [];
    /**
     * @var $this WFACP_Template_Common
     */
    $promise_data = array();
    /**
     * @var $this WFACP_template_layout9
     */
    $page_meta_title = \WFACP_Common::get_option('wfacp_header_section_page_meta_title');
    /**
     * @var $this WFACP_template_layout4
     */
    $page_meta_title = \WFACP_Common::get_option('wfacp_header_section_page_meta_title');
    /**
     * @var $this WFACP_Template_Common
     */
    $rbox_border_type = '';
    /**
     * @var $this WFACP_Template_Common
     */
    $product = [];
    /**
     * @var $this WFACP_Template_Common
     */
    $promise_data = array();
    /**
     * @var $this WFACP_template_layout1
     */
    $page_meta_title = \WFACP_Common::get_option('wfacp_header_section_page_meta_title');
    /**
     * @var $this WFACP_Template_Common
     */
    //$this->pre($data);
    $rbox_border_type = '';
    /**
     * @var $this WFACP_Template_Common
     */
    $hide_list_icon = $data['benefit_content']['hide_list_icon'];
    /**
     * @var $this WFACP_Template_Common
     */
    $hide_title = '';
    /**
     * @var $this WFACP_Template_Common
     */
    $rbox_border_type = '';
    /**
     * @var $this WFACP_Template_Common
     */
    $default_structure_cls = 'wfacp-three-cols';
    /**
     * @var $this WFACP_Template_Common
     */
    $headers = $this->customizer_fields_data[$this->customizer_keys['header']];
    /**
     * @var $this WFACP_Template_Common
     */
    $product = $this->customizer_fields_data['wfacp_product'];
    /**
     * @var $this WFACP_Template_Common
     */
    $promise_data = array();
    /**
     * @var $instance WFACP_Template_Custom_Page
     */
    $instance = \wfacp_template();
    /**
     * @var $instance WFACP_template_layout1
     */
    $page_meta_title = \WFACP_Common::get_option('wfacp_header_section_page_meta_title');
    /**
     * Build list of attributes into a string and apply contextual filter on string.
     *
     * The contextual filter is of the form `bwfblocks_attr_{context}_output`.
     *
     * @since 1.2.0
     *
     * @param string $context    The context, to build filter name.
     * @param array  $attributes Optional. Extra attributes to merge with defaults.
     * @param array  $settings   Optional. Custom data to pass to filter.
     * @return string String of HTML attributes and values.
     */
    function bwfblocks_attr($context, $attributes = array(), $settings = array())
    {
    }
}