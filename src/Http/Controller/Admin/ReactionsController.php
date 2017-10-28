<?php namespace Anomaly\ReactionsExtension\Http\Controller\Admin;

use Anomaly\ReactionsExtension\Reaction\Form\ReactionFormBuilder;
use Anomaly\ReactionsExtension\Reaction\Table\ReactionTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class ReactionsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param ReactionTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(ReactionTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param ReactionFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(ReactionFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param ReactionFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(ReactionFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
