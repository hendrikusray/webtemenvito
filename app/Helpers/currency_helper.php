
<?php

if (!function_exists('number_to_currency')) {
    function number_to_currency(float $num, string $currency, ?string $locale = null, int $fraction = 0): string
    {
        return format_number($num, 1, $locale, [
            'type'     => NumberFormatter::CURRENCY,
            'currency' => $currency,
            'fraction' => $fraction,
        ]);
    }
}

if (!function_exists('format_number')) {
    /**
     * A general purpose, locale-aware, number_format method.
     * Used by all of the functions of the number_helper.
     */
    function format_number(float $num, int $precision = 1, ?string $locale = null, array $options = []): string
    {
        // Locale is either passed in here, negotiated with client, or grabbed from our config file.
        $locale = $locale;
        // Type can be any of the NumberFormatter options, but provide a default.
        $type = (int) ($options['type'] ?? NumberFormatter::DECIMAL);

        $formatter = new NumberFormatter($locale, $type);

        // Try to format it per the locale
        if ($type === NumberFormatter::CURRENCY) {
            $formatter->setAttribute(NumberFormatter::FRACTION_DIGITS, $options['fraction']);
            $output = $formatter->formatCurrency($num, $options['currency']);
        } else {
            // In order to specify a precision, we'll have to modify
            // the pattern used by NumberFormatter.
            $pattern = '#,##0.' . str_repeat('#', $precision);

            $formatter->setPattern($pattern);
            $output = $formatter->format($num);
        }

        // This might lead a trailing period if $precision == 0
        $output = trim($output, '. ');

        if (intl_is_failure($formatter->getErrorCode())) {
            throw new BadFunctionCallException($formatter->getErrorMessage());
        }

        // Add on any before/after text.
        if (isset($options['before']) && is_string($options['before'])) {
            $output = $options['before'] . $output;
        }

        if (isset($options['after']) && is_string($options['after'])) {
            $output .= $options['after'];
        }

        return $output;
    }
}
