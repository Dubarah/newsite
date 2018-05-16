<?php
if(! function_exists('__')) {
    /**
     * Print the $value in the <pre> tag; useful for debugging
     * @param $value
     */
    function __($value) {
        echo "<pre>";
        if(gettype($value) == "string") {
            echo $value;
        }
        else {
            var_dump($value);
        }
        echo "<pre>";
    }
}

if(! function_exists('have_access')) {
    function have_access($sub_object_id, $no_redirect = FALSE) {
        $CI = & get_instance();
        return $CI->auth->have_access($sub_object_id, $no_redirect);
    }
}

if(! function_exists('need_login')) {
    function need_login() {
        $CI = & get_instance();
        $CI->auth->need_login();
    }
}

if(! function_exists('need_pay_login')) {
    function need_pay_login() {
        $CI = & get_instance();
        $CI->auth->need_pay_login();
    }
}

if(! function_exists('need_unlock')) {
    function need_unlock() {
        $CI = & get_instance();
        $CI->auth->need_unlock();
    }
}

if(! function_exists('translate')) {
    function translate($key) {
        $CI = & get_instance();
        $CI->auth->translate($key);
    }
}

if(! function_exists('trans')) {
    function trans($key) {
        $CI = & get_instance();
        return $CI->auth->trans($key);
    }
}

if(! function_exists('LANG')) {
    function LANG() {
        $CI = & get_instance();
        return $CI->auth->lang();
    }
}

// added by #PE$$
if(! function_exists('recommend_ach')) {
    function recommend_ach($limit, $ex_user) {
        $CI = & get_instance();
        return $CI->auth->recommend_ach($limit, $ex_user);
    }
}

if(! function_exists('have_hero')){
    function have_hero($user_id){
        $CI = & get_instance();
        return $CI->auth->have_hero();
    }
}

if(! function_exists('get_statics')) {
    function get_statics() {
        $CI = & get_instance();
        return $CI->auth->get_statics();
    }
}

if(! function_exists('get_ajax_request')) {
    function get_ajax_request() {
        $CI = & get_instance();
        return $CI->auth->get_ajax_request();
    }
}

if(! function_exists('social')) {
    function social() {
        $CI = & get_instance();
        return $CI->auth->social();
    }
}

if(! function_exists('check_lang')) {
    function check_lang() {
        $CI = & get_instance();
        return $CI->auth->check_lang();
    }
}

if(! function_exists('user_id')){
    function user_id() {
        $CI = & get_instance();
        return $CI->auth->user_id();
    }
}

if(! function_exists('is_logged')){
    function is_logged() {
        $CI = & get_instance();
        return $CI->auth->is_logged();
    }
}


