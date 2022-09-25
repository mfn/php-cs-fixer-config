<?php

declare(strict_types=1);

namespace Mfn\PhpCsFixer;

class Config
{
    /**
     * Pass this directly to `\PhpCsFixer\Config::setRules`
     */
    public static function getRules(): array
    {
        return [
            '@PSR2' => true,
            // keep it sorted alphabetically, thank you :)
            'array_push' => true,
            'array_syntax' => [
                'syntax' => 'short',
            ],
            'backtick_to_shell_exec' => true,
            'binary_operator_spaces' => true,
            'blank_line_after_namespace' => true,
            'blank_line_after_opening_tag' => false,
            'blank_line_before_statement' => [
                'statements' => [
                    'break',
                    'case',
                    'continue',
                    'declare',
                    'default',
                    'do',
                    'exit',
                    'for',
                    'foreach',
                    'goto',
                    'if',
                    'include',
                    'include_once',
                    'require',
                    'require_once',
                    'return',
                    'switch',
                    'throw',
                    'try',
                    'while',
                    'yield',
                    'yield_from',
                ],
            ],
            'braces' => true,
            'cast_spaces' => true,
            'class_attributes_separation' => false,
            'class_definition' => true,
            'class_keyword_remove' => false,
            'clean_namespace' => true,
            'combine_consecutive_issets' => false,
            'combine_consecutive_unsets' => false,
            'combine_nested_dirname' => true,
            'comment_to_phpdoc' => false,
            'compact_nullable_typehint' => true,
            'concat_space' => [
                'spacing' => 'one',
            ],
            'constant_case' => true,
            'date_time_immutable' => false,
            'declare_equal_normalize' => [
                'space' => 'single',
            ],
            'declare_strict_types' => true,
            'dir_constant' => true,
            'elseif' => true,
            'encoding' => true,
            'ereg_to_preg' => true,
            'error_suppression' => false,
            'escape_implicit_backslashes' => true,
            'explicit_indirect_variable' => false,
            'final_internal_class' => false,
            'final_public_method_for_abstract_class' => false,
            'fopen_flag_order' => true,
            'fopen_flags' => true,
            'full_opening_tag' => true,
            'fully_qualified_strict_types' => true,
            'function_declaration' => true,
            'function_to_constant' => [
                'functions' => [
                    'get_called_class',
                    'get_class',
                    'get_class_this',
                    'php_sapi_name',
                    'phpversion',
                    'pi',
                ],
            ],
            'function_typehint_space' => true,
            'global_namespace_import' => [
                'import_classes' => true,
                'import_constants' => true,
                'import_functions' => null,
            ],
            'group_import' => false,
            'header_comment' => false,
            'heredoc_to_nowdoc' => true,
            'increment_style' => [
                'style' => 'post',
            ],
            'implode_call' => true,
            'include' => true,
            'indentation_type' => true,
            'lambda_not_used_import' => true,
            'linebreak_after_opening_tag' => false,
            'list_syntax' => [
                'syntax' => 'short',
            ],
            'logical_operators' => true,
            'lowercase_cast' => true,
            'lowercase_keywords' => true,
            'lowercase_static_reference' => true,
            'magic_constant_casing' => true,
            'magic_method_casing' => true,
            'mb_str_functions' => false,
            'method_argument_space' => true,
            'modernize_types_casting' => true,
            'multiline_comment_opening_closing' => true,
            'multiline_whitespace_before_semicolons' => true,
            'native_constant_invocation' => false,
            'native_function_casing' => true,
            // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/2.19/doc/rules/function_notation/native_function_invocation.rst
            'native_function_invocation' => [
                'include' => [
                    '@compiler_optimized',
                ],
                'strict' => true,
            ],
            'native_function_type_declaration_casing' => true,
            'new_with_braces' => true,
            'no_alias_functions' => [
                'sets' => [
                    '@all',
                ],
            ],
            'no_alias_language_construct_call' => true,
            'no_alternative_syntax' => true,
            'no_binary_string' => true,
            'no_blank_lines_after_class_opening' => true,
            'no_blank_lines_after_phpdoc' => true,
            'no_blank_lines_before_namespace' => true,
            'no_break_comment' => true,
            'no_closing_tag' => true,
            'no_empty_comment' => true,
            'no_empty_phpdoc' => true,
            'no_empty_statement' => true,
            'no_extra_blank_lines' => [
                'tokens' => [
                    'break',
                    'case',
                    'continue',
                    'curly_brace_block',
                    'default',
                    'extra',
                    'parenthesis_brace_block',
                    'return',
                    'square_brace_block',
                    'switch',
                    'throw',
                    'use',
                    'use_trait',
                ],
            ],
            'no_homoglyph_names' => true,
            'no_leading_import_slash' => true,
            'no_leading_namespace_whitespace' => true,
            'no_mixed_echo_print' => true,
            'no_multiline_whitespace_around_double_arrow' => true,
            'no_null_property_initialization' => false,
            'no_php4_constructor' => true,
            'no_short_bool_cast' => true,
            'no_singleline_whitespace_before_semicolons' => true,
            'no_spaces_after_function_name' => true,
            'no_spaces_around_offset' => true,
            'no_superfluous_elseif' => true,
            'no_superfluous_phpdoc_tags' => [
                'allow_mixed' => true,
            ],
            'no_trailing_comma_in_singleline' => true,
            'no_trailing_whitespace_in_comment' => true,
            'no_unneeded_control_parentheses' => true,
            'no_unneeded_curly_braces' => true,
            'no_unneeded_final_method' => false,
            'no_unneeded_import_alias' => true,
            'no_unreachable_default_argument_value' => false,
            'no_unset_cast' => true,
            'no_unset_on_property' => false,
            'no_unused_imports' => true,
            'no_useless_else' => true,
            'no_useless_return' => true,
            'no_useless_sprintf' => true,
            'no_whitespace_before_comma_in_array' => true,
            'no_whitespace_in_blank_line' => true,
            'non_printable_character' => false,
            'normalize_index_brace' => true,
            'not_operator_with_space' => false,
            'not_operator_with_successor_space' => false,
            'nullable_type_declaration_for_default_null_value' => false,
            'object_operator_without_whitespace' => true,
            'operator_linebreak' => [
                'only_booleans' => true,
                'position' => 'end',
            ],
            'ordered_class_elements' => false,
            'ordered_imports' => true,
            'ordered_interfaces' => false,
            'ordered_traits' => false,
            'php_unit_construct' => true,
            'php_unit_dedicate_assert' => false,
            'php_unit_dedicate_assert_internal_type' => true,
            'php_unit_expectation' => true,
            'php_unit_fqcn_annotation' => true,
            'php_unit_method_casing' => true,
            'php_unit_mock_short_will_return' => true,
            'php_unit_no_expectation_annotation' => true,
            'php_unit_test_case_static_method_calls' => [
                'call_type' => 'self',
            ],
            'php_unit_set_up_tear_down_visibility' => true,
            'phpdoc_align' => [
                'align' => 'left',
            ],
            'phpdoc_indent' => true,
            'phpdoc_line_span' => [
                'const' => 'single',
                'method' => 'multi',
                'property' => 'single',
            ],
            'phpdoc_order' => true,
            'phpdoc_scalar' => true,
            'phpdoc_separation' => false,
            'phpdoc_single_line_var_spacing' => true,
            'phpdoc_summary' => false,
            'phpdoc_to_param_type' => false,
            'phpdoc_to_return_type' => false,
            'phpdoc_trim' => true,
            'phpdoc_trim_consecutive_blank_line_separation' => true,
            'phpdoc_types' => true,
            'phpdoc_var_annotation_correct_order' => true,
            'phpdoc_var_without_name' => true,
            'pow_to_exponentiation' => true,
            'protected_to_private' => true,
            'psr_autoloading' => false,
            'random_api_migration' => true,
            'regular_callable_call' => false,
            'return_assignment' => false, // it's sometimes useful for debugging
            'return_type_declaration' => true,
            'self_accessor' => false,
            'self_static_accessor' => true,
            'semicolon_after_instruction' => true,
            'set_type_to_cast' => true,
            'short_scalar_cast' => true,
            'simplified_if_return' => false,
            'single_blank_line_before_namespace' => false,
            'single_class_element_per_statement' => true,
            'single_import_per_statement' => true,
            'single_line_after_imports' => true,
            'single_line_comment_style' => false,
            'single_line_throw' => false,
            'single_quote' => true,
            'single_space_after_construct' => true,
            'single_trait_insert_per_statement' => true,
            'space_after_semicolon' => true,
            'standardize_increment' => true,
            'standardize_not_equals' => true,
            'static_lambda' => false,
            'switch_case_semicolon_to_colon' => true,
            'switch_case_space' => true,
            'switch_continue_to_break' => true,
            'ternary_operator_spaces' => true,
            'ternary_to_elvis_operator' => false,
            'ternary_to_null_coalescing' => true,
            'trailing_comma_in_multiline' => true,
            'trim_array_spaces' => true,
            'unary_operator_spaces' => true,
            'use_arrow_functions' => false,
            'visibility_required' => [
                'elements' => [
                    'const',
                    'method',
                    'property',
                ],
            ],
            'void_return' => true,
            'whitespace_after_comma_in_array' => true,
            'yoda_style' => true,
        ];
    }
}
