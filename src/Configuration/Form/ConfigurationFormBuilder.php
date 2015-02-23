<?php namespace Anomaly\ConfigurationsModule\Configuration\Form;

use Anomaly\Streams\Platform\Ui\Form\Form;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class ConfigurationFormBuilder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\ConfigurationsModule\Configuration\Form
 */
class ConfigurationFormBuilder extends FormBuilder
{

    /**
     * The form actions handler.
     *
     * @var string
     */
    protected $actions = [
        'save'
    ];

    /**
     * The form buttons handler.
     *
     * @var string
     */
    protected $buttons = [
        'cancel'
    ];

    /**
     * The form fields handler.
     *
     * @var string
     */
    protected $fields = 'Anomaly\ConfigurationsModule\Configuration\Form\ConfigurationFormFields@handle';

    /**
     * Create a new ConfigurationFormBuilder instance.
     *
     * @param Form $form
     */
    public function __construct(Form $form)
    {
        /**
         * Set these explicitly so extending forms won't
         * break automation with normal defaulting patterns.
         */
        $form->setOption('data', 'Anomaly\ConfigurationsModule\Configuration\Form\ConfigurationFormData@handle');
        $form->setOption('repository', 'Anomaly\ConfigurationsModule\Configuration\Form\ConfigurationFormRepository');
        $form->setOption('wrapper_view', 'anomaly.module.configurations::admin/configurations/form/wrapper');

        parent::__construct($form);
    }
}