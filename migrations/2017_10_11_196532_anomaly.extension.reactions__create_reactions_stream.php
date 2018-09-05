<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionReactionsCreateReactionsStream
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyExtensionReactionsCreateReactionsStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'reactions',
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'type'       => [
            'required' => true,
        ],
        'subject'    => [
            'required' => true,
        ],
        'ip_address' => [
            'required' => true,
        ],
        'user',
    ];

}
