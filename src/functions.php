<?php

namespace VasilDakov\Speedy;

// @codeCoverageIgnoreStart
if (!\function_exists('json_validate')) {
    function json_validate(string $json, int $depth = 512, int $flags = 0): bool
    {
        if (0 !== $flags && \JSON_INVALID_UTF8_IGNORE !== $flags) {
            throw new \ValueError('json_validate(): Argument #3 ($flags) must be a
                valid flag (allowed flags: JSON_INVALID_UTF8_IGNORE)');
        }

        if ($depth <= 0) {
            throw new \ValueError('json_validate(): Argument #2 ($depth) must be greater than 0');
        }

        \json_decode($json, null, $depth, $flags);

        return \JSON_ERROR_NONE === \json_last_error();
    }
}
// @codeCoverageIgnoreEnd
