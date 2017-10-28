<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionEmojiCreateReactionsStream
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyExtensionEmojiCreateReactionsStream extends Migration
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
        'emoji'      => [
            'required' => true,
        ],
        'subject'    => [
            'required' => true,
        ],
        'ip_address' => [
            'required' => true,
        ],
    ];

}
