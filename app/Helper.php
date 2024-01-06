<?php

if (! function_exists('formatMoney')) {
    function formatMoney($money): string
    {
        return number_format($money, 0, '', ',');
    }
}
