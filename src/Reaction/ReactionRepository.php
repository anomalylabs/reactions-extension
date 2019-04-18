<?php namespace Anomaly\ReactionsExtension\Reaction;

use Anomaly\ReactionsExtension\Reaction\Contract\ReactionInterface;
use Anomaly\ReactionsExtension\Reaction\Contract\ReactionRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;
use Anomaly\Streams\Platform\Model\EloquentModel;
use Anomaly\Streams\Platform\User\Contract\UserInterface;

/**
 * Class ReactionRepository
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
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

    /**
     * Find a reaction.
     *
     * @param $type
     * @param EloquentModel $subject
     * @param UserInterface $user
     * @return ReactionInterface|null
     */
    public function findReaction($type, EloquentModel $subject, UserInterface $user)
    {
        return $this->model
            ->where('type', $type)
            ->where('user_id', $user->getId())
            ->where('subject_type', get_class($subject))
            ->where('subject_id', $subject->getId())
            ->first();
    }
}
