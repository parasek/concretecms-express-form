<?php

namespace TournamentRegistrationForm\Attribute\Context;

use Concrete\Core\Attribute\Context\FrontendFormContext as BaseFrontendFormContext;
use Concrete\Core\Filesystem\TemplateLocator;

class TournamentRegistrationFormContext extends BaseFrontendFormContext
{
    /**
     * This is used for overriding attributes (text, textarea, number, date_time etc.)
     * stored in concrete/attributes.
     *
     * Example:
     * Copy file
     * from: concrete/attributes/text/form.php
     * to: packages/tournament_registration_form/attributes/text/tournament_registration_form.php
     *
     * I have added "data-express-field-handle" for text attribute
     */
    public function __construct()
    {
        parent::__construct();
        $this->preferTemplateIfAvailable(
            'tournament_registration_form', // This name of php file in: packages/package_folder/attributes/chosen_attribute/tournament_registration_form.php
            'tournament_registration_form' // This is package handle
        );
    }

    /**
     * This is used for overriding the HTML surrounding an attribute
     *
     * Example:
     * Copy file
     * from: concrete/elements/form/bootstrap5.php
     * to: packages/tournament_registration_form/elements/form/tournament_registration_form.php
     *
     * @param TemplateLocator $locator
     * @return TemplateLocator
     */
    public function setLocation(TemplateLocator $locator): TemplateLocator
    {
        $locator->setTemplate(
            [
                'tournament_registration_form', // This name of php file in: packages/package_folder/elements/form
                'tournament_registration_form', // This is package handle
            ]
        );

        return $locator;
    }
}
