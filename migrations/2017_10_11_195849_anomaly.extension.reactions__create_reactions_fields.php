<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionReactionsCreateReactionsFields
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyExtensionReactionsCreateReactionsFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'type'       => 'anomaly.field_type.text',
        'subject'    => 'anomaly.field_type.polymorphic',
        'ip_address' => 'anomaly.field_type.text',
        'user'       => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'mode'    => 'lookup',
                'related' => 'Anomaly\UsersModule\User\UserModel',
            ],
        ],
    ];

}
