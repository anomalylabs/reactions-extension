<?php namespace Anomaly\ReactionsExtension\Reaction\Form;

use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Anomaly\Streams\Platform\Ui\Form\FormCriteria;

/**
 * Class ReactionFormCriteria
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class ReactionFormCriteria extends FormCriteria
{

    /**
     * The reaction form builder.
     *
     * @var ReactionFormBuilder
     */
    protected $builder;

    /**
     * Set the subject.
     *
     * @param EntryInterface $entry
     */
    public function setSubject(EntryInterface $entry)
    {
        $this->builder->setSubjectId($this->parameters['subject_id'] = $entry->getId());
        $this->builder->setSubjectType($this->parameters['subject_type'] = get_class($entry));

        return $this;
    }
}
