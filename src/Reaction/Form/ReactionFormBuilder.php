<?php namespace Anomaly\ReactionsExtension\Reaction\Form;

use Anomaly\ReactionsExtension\Reaction\Contract\ReactionInterface;
use Anomaly\Streams\Platform\Model\EloquentModel;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;
use Illuminate\Contracts\Auth\Guard;

/**
 * Class ReactionFormBuilder
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class ReactionFormBuilder extends FormBuilder
{

    /**
     * The subject commented on.
     *
     * @var null|EloquentModel
     */
    protected $subject = null;

    /**
     * The subject ID.
     *
     * @var null|int
     */
    protected $subjectId = null;

    /**
     * The subject type.
     *
     * @var null|string
     */
    protected $subjectType = null;

    /**
     * The skipped fields.
     *
     * @var array
     */
    protected $skips = [
        'ip_address',
        'user',
    ];

    /**
     * No success message by default.
     *
     * @var array
     */
    protected $options = [
        'success_message' => false,
    ];

    /**
     * The form assets.
     *
     * @var array
     */
//    protected $assets = [
//        'styles.css' => [
//            'anomaly.module.comments::css/jquery.atwho.min.css',
//        ],
//        'scripts.js' => [
//            'anomaly.module.comments::js/jquery.caret.min.js',
//            'anomaly.module.comments::js/jquery.atwho.min.js',
//            'anomaly.module.comments::js/mention.js',
//        ],
//    ];

    /**
     * Fired when ready for building.
     *
     * @throws \Exception
     */
    public function onReady()
    {
        if (!$this->getSubjectId()) {
            throw new \Exception('Subject is required for reactions.');
        }
    }

    /**
     * Fired just before saving.
     */
    public function onSaving()
    {
        $entry = $this->getFormEntry();

        $entry->setAttribute('subject_id', $this->getSubjectId());
        $entry->setAttribute('subject_type', $this->getSubjectType());
    }

    /**
     * Get the subject ID.
     *
     * @return int|null
     */
    public function getSubjectId()
    {
        return $this->subjectId ?: $this->subject->getId();
    }

    /**
     * Set the subject ID.
     *
     * @param $id
     * @return $this
     */
    public function setSubjectId($id)
    {
        $this->subjectId = $id;

        return $this;
    }

    /**
     * Get the subject type.
     *
     * @return null|string
     */
    public function getSubjectType()
    {
        return $this->subjectType ?: get_class($this->subject);
    }

    /**
     * Set the subject type.
     *
     * @param $type
     * @return $this
     */
    public function setSubjectType($type)
    {
        $this->subjectType = $type;

        return $this;
    }

    /**
     * Get the subject.
     *
     * @return EloquentModel|null
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set the subject.
     *
     * @param EloquentModel $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }
}
