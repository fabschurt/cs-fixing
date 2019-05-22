<?php

namespace fabschurt\CodingStandards;

use PedroTroller\CS\Fixer\Fixers as PedroTrollerFixers;
use PhpCsFixer\Config as BaseConfig;

class Config
{
    public static function create(): BaseConfig
    {
        return BaseConfig::create()
            ->setRiskyAllowed(true)
            ->registerCustomFixers(new PedroTrollerFixers())
            ->setRules([
                '@PHP71Migration' => true,
                '@PhpCsFixer' => true,
                '@Symfony' => true,
                '@Symfony:risky' => true,
                '@DoctrineAnnotation' => true,
                'align_multiline_comment' => [
                    'comment_type' => 'all_multiline',
                ],
                'array_syntax' => [
                    'syntax' => 'short',
                ],
                'blank_line_before_statement' => [
                    'statements' => [
                        'break',
                        'case',
                        'continue',
                        'declare',
                        'default',
                        'do',
                        'for',
                        'foreach',
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
                    ],
                ],
                'combine_nested_dirname' => true,
                'linebreak_after_opening_tag' => true,
                'list_syntax' => [
                    'syntax' => 'short',
                ],
                'logical_operators' => true,
                'mb_str_functions' => true,
                'multiline_whitespace_before_semicolons' => [
                    'strategy' => 'new_line_for_chained_calls',
                ],
                'native_function_invocation' => false,
                'no_php4_constructor' => true,
                'no_superfluous_phpdoc_tags' => [
                    'allow_mixed' => true,
                ],
                'no_unreachable_default_argument_value' => true,
                'no_unset_on_property' => true,
                'ordered_class_elements' => [
                    'order' => [
                        'use_trait',
                        'constant_public',
                        'constant_protected',
                        'constant_private',
                        'property_public_static',
                        'property_protected_static',
                        'property_private_static',
                        'property_public',
                        'property_protected',
                        'property_private',
                        'method_public_static',
                        'method_protected_static',
                        'method_private_static',
                        'construct',
                        'destruct',
                        'magic',
                        'phpunit',
                        'method_public',
                        'method_protected',
                        'method_private',
                    ],
                ],
                'phpdoc_align' => false,
                'phpdoc_types_order' => [
                    'null_adjustment' => 'always_last',
                    'sort_algorithm' => 'none',
                ],
                'pow_to_exponentiation' => true,
                'random_api_migration' => true,
                'simplified_null_return' => true,
                'visibility_required' => [
                    'elements' => [
                        'property',
                        'method',
                        'const',
                    ],
                ],
                'void_return' => true,
                'yoda_style' => false,
                'PedroTroller/exceptions_punctuation' => true,
                'PedroTroller/line_break_between_method_arguments' => [
                    'max-args' => 10,
                ],
                'PedroTroller/comment_line_to_phpdoc_block' => true,
                'PedroTroller/useless_code_after_return' => true,
                'PedroTroller/phpspec' => true,
            ])
        ;
    }
}
