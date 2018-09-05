<?php namespace Anomaly\ReactionsExtension\Http\Controller;

use Anomaly\ReactionsExtension\Reaction\Contract\ReactionInterface;
use Anomaly\ReactionsExtension\Reaction\Contract\ReactionRepositoryInterface;
use Anomaly\Streams\Platform\Http\Controller\PublicController;

/**
 * Class ReactionsController
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class ReactionsController extends PublicController
{

    /**
     * Follow a discussion.
     *
     * @param  ReactionRepositoryInterface $reactions
     * @return \Illuminate\Http\RedirectResponse
     */
    public function toggle(ReactionRepositoryInterface $reactions)
    {
        return $this->redirect->back();
    }
}
