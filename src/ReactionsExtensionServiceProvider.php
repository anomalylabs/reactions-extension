<?php namespace Anomaly\ReactionsExtension;

use Anomaly\ReactionsExtension\Reaction\Contract\ReactionRepositoryInterface;
use Anomaly\ReactionsExtension\Reaction\ReactionModel;
use Anomaly\ReactionsExtension\Reaction\ReactionRepository;
use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\Model\EloquentModel;
use Anomaly\Streams\Platform\Model\Reactions\ReactionsReactionsEntryModel;

/**
 * Class ReactionsExtensionServiceProvider
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class ReactionsExtensionServiceProvider extends AddonServiceProvider
{

    /**
     * The addon plugins.
     *
     * @var array
     */
    protected $plugins = [
        ReactionsExtensionPlugin::class,
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        ReactionsReactionsEntryModel::class => ReactionModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        ReactionRepositoryInterface::class => ReactionRepository::class,
    ];

    /**
     * Register the addon.
     *
     * @param EloquentModel $model
     */
    public function register(EloquentModel $model)
    {
        $model->bind(
            'reactions',
            function ($type = null) {
                /* @var EloquentModel $this */
                $query = $this->morphMany(ReactionModel::class, 'subject', 'subject_type');

                if ($type && is_string($type)) {
                    $query->where('type', $type);
                }

                if ($type && is_array($type)) {
                    $query->whereIn('type', $type);
                }

                return $query;
            }
        );

        $model->bind(
            'get_reactions',
            function () {
                /* @var EloquentModel $this */
                return $this->reactions->getResults();
            }
        );
    }

}
