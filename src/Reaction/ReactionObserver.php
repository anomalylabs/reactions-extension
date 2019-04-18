<?php namespace Anomaly\ReactionsExtension\Reaction;

use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Anomaly\Streams\Platform\Entry\EntryObserver;

/**
 * Class ReactionObserver
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class ReactionObserver extends EntryObserver
{

    /**
     * Fired just before creating an entry.
     *
     * @param EntryInterface $entry
     */
    public function creating(EntryInterface $entry)
    {
        $entry->setAttribute('ip_address', request()->ip());

        parent::creating($entry);
    }


}
