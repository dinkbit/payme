<?php

return [
    'total'   => 14900,
    'payload' => [
        'device_id'      => 'test',
        'application'    => 'PayMe_cart',
        'description'    => 'Awesome Store',
        'return_url'     => 'http://example.com/return',
        'notify_url'     => 'http://example.com/notify',
        'cancel_url'     => 'http://example.com/cancel',
        'enabled_brands' => [],
        'reference'      => 'order_'.time().rand(10000, 99999),
        'currency'       => 'MXN',
        'name'           => 'François Hollande',
        'first_name'     => 'François',
        'last_name'      => 'Hollande',
        'email'          => 'customer@example.com',
        'phone'          => '+5215511223344',
        'line_items'     => [
            [
                'name'        => 'Box of Cohiba S1s',
                'description' => 'Imported From Mex.',
                'unit_price'  => 5000,
                'quantity'    => 1,
                'sku'         => 'cohb_s1',
            ],
            [
                'name'        => 'Basic Toothpicks',
                'description' => 'Wooden',
                'unit_price'  => 500,
                'quantity'    => 10,
                'sku'         => 'tooth_r3',
            ],
        ],
        'discount'         => 100,
        'discount_code'    => null,
        'discount_concept' => null,
        'discount_type'    => 'coupon', // coupon, shipping
        'billing_address'  => [
            'address1' => 'Rio Missisipi #123',
            'address2' => 'Paris',
            'city'     => 'Guerrero',
            'country'  => 'MX',
            'state'    => 'DF',
            'zip'      => '01085',
        ],
        'shipping_address' => [
            'address1' => '33 Main Street',
            'address2' => 'Apartment 3',
            'city'     => 'Wanaque',
            'country'  => 'US',
            'state'    => 'NJ',
            'zip'      => '07465',
            'price'    => 5000,
            'carrier'  => 'payme',
            'service'  => 'pending',
        ],
    ],
];
