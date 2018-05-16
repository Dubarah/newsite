<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2017, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2017, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['form_validation_required']		= '{field} مطلوب.';
$lang['form_validation_isset']			= '{field} يجب أن يحتوي على قيمة.';
$lang['form_validation_valid_email']		= 'يجب أن تدخل إيميل.';
$lang['form_validation_valid_emails']		= '{field} field must contain all valid email addresses.';
$lang['form_validation_valid_url']		= 'The {field} field must contain a valid URL.';
$lang['form_validation_valid_ip']		= 'The {field} field must contain a valid IP.';
$lang['form_validation_min_length']		= '{field} يجب أن لا يقل طوله عن {param} محارف.';
$lang['form_validation_max_length']		= '{field} يجب أن لا يزيد طوله عن {param} محارف.';
$lang['form_validation_exact_length']		= '{field} يجب أن يكون طوله {param} محارف بالضبط.';
$lang['form_validation_alpha']			= '{field} يجب أن يحتوي على محارف فقط.';
$lang['form_validation_alpha_numeric']		= '{field} يجب أن يحتوي على محارف وأرقام فقط.';
$lang['form_validation_alpha_numeric_spaces']	= '{field} يجب أن يحتوي على محارف وأرقام وفراغات فقط.';
$lang['form_validation_alpha_dash']		= '{field} يجب أن يحتوي على محارف وأرقام و "-" و "_" فقط.';
$lang['form_validation_numeric']		= '{field} يجب أن يحتوي على أرقام فقط.';
$lang['form_validation_is_numeric']		= '{field} يجب أن يحتوي على أرقام فقط.';
$lang['form_validation_integer']		= '{field} يجب ان يحتوي على أعداد صحيحة فقط.';
$lang['form_validation_regex_match']	= '{field} ليس بالصيغة الصحيحة.';
$lang['form_validation_matches']		= '{field} يجب أن يتطابق مع {param}.';
$lang['form_validation_differs']		= 'The {field} field must differ from the {param} field.';
$lang['form_validation_is_unique'] 		= '{field} موجود مسبقا.';
$lang['form_validation_is_natural']		= '{field} field must only contain digits.';
$lang['form_validation_is_natural_no_zero']	= 'The {field} field must only contain digits and must be greater than zero.';
$lang['form_validation_decimal']		= 'The {field} field must contain a decimal number.';
$lang['form_validation_less_than']		= 'The {field} field must contain a number less than {param}.';
$lang['form_validation_less_than_equal_to']	= 'The {field} field must contain a number less than or equal to {param}.';
$lang['form_validation_greater_than']		= 'The {field} field must contain a number greater than {param}.';
$lang['form_validation_greater_than_equal_to']	= 'The {field} field must contain a number greater than or equal to {param}.';
$lang['form_validation_error_message_not_set']	= 'Unable to access an error message corresponding to your field name {field}.';
$lang['form_validation_in_list']		= 'The {field} field must be one of: {param}.';
