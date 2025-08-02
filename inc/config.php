<?php


function config($key)
{
    static $configuration = [
        'phone_number' => '(888) 676-4248',
        'email_id' => 'info@travelfaresndeals.com',
        'address' => '98 Wilshire Blvd., Suite 700, Santa Monica, CA 90401',
        'domain_name' => 'travelfaresndeals.com',
    ];

    return isset($configuration[$key]) ? $configuration[$key] : null;
}
