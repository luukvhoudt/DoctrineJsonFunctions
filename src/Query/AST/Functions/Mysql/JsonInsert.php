<?php

namespace Syslogic\DoctrineJsonFunctions\Query\AST\Functions\Mysql;

/**
 * "JSON_INSERT" "(" StringPrimary "," StringPrimary "," NewValue { "," StringPrimary "," NewValue }* ")"
 */
class JsonInsert extends MysqlJsonFunctionNode
{
	const FUNCTION_NAME = 'JSON_INSERT';

    /** @var string[] */
    protected $requiredArgumentTypes = [self::STRING_ARG, self::STRING_ARG, self::VALUE_ARG];

    /** @var string[] */
    protected $optionalArgumentTypes = [self::STRING_ARG, self::VALUE_ARG];

    /** @var bool */
    protected $allowOptionalArgumentRepeat = true;
}
