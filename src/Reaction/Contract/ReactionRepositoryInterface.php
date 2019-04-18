<?php namespace Anomaly\ReactionsExtension\Reaction\Contract;

use Anomaly\Streams\Platform\Entry\Contract\EntryRepositoryInterface;
use Anomaly\Streams\Platform\Model\EloquentModel;
use Anomaly\Streams\Platform\User\Contract\UserInterface;

/**
 * Interface ReactionRepositoryInterface
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
interface ReactionRepositoryInterface extends EntryRepositoryInterface
{

    /**
     * Find a reaction.
     *
     * @param $type
     * @param EloquentModel $subject
     * @param UserInterface $user
     * @return ReactionInterface|null
     */
    public function findReaction($type, EloquentModel $subject, UserInterface $user);
}
