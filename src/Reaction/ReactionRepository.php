<?php namespace Anomaly\ReactionsExtension\Reaction;

use Anomaly\ReactionsExtension\Reaction\Contract\ReactionRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class ReactionRepository extends EntryRepository implements ReactionRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var ReactionModel
     */
    protected $model;

    /**
     * Create a new ReactionRepository instance.
     *
     * @param ReactionModel $model
     */
    public function __construct(ReactionModel $model)
    {
        $this->model = $model;
    }
}
