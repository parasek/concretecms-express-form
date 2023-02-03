<?php

namespace TournamentRegistrationForm\Express\Form\Context;

use Concrete\Core\Express\Form\Context\FrontendFormContext as CoreFrontendFormContext;
use Concrete\Core\Filesystem\TemplateLocator;

class TournamentRegistrationFormContext extends CoreFrontendFormContext
{
    /**
     * This is used for overriding custom Express control types (text label, association, form)
     *
     * @param TemplateLocator $locator
     * @return TemplateLocator
     */
    public function setLocation(TemplateLocator $locator): TemplateLocator
    {
        $locator = parent::setLocation($locator);

        /**
         * This is used for overriding anything from "concrete/elements/express/form/form" folder
         * like: Express Associations selectors, inner part of form (<fieldset> tags etc.)
         *
         * Example:
         * Copy file
         * from: public/concrete/elements/express/form/form/association/select.php
         * to: packages/tournament_registration_form/elements/express/form/tournament_registration_form/association/select.php
         *
         * I have added:
         * data-express-field-handle="<?= h($targetHandle); ?>" to <select> field
         * for easier javascript selections, like:
         * $([data-express-field-handle="tournament"]);
         * or
         * document.querySelector('[data-express-field-handle="tournament"]');
         */
        $locator->prependLocation([
            DIRNAME_ELEMENTS .
            DIRECTORY_SEPARATOR .
            DIRNAME_EXPRESS .
            DIRECTORY_SEPARATOR .
            DIRNAME_EXPRESS_FORM_CONTROLS .
            DIRECTORY_SEPARATOR .
            'tournament_registration_form', // This made-up folder name that is also used in different places for consistency
            'tournament_registration_form' // This is package handle
        ]);

        /**
         * This is used for overriding anything from "concrete/elements/express/form/view" folder.
         * These are not used widely, I think.
         * For example text.php is used when displaying "Core Property: Text" from Express Form in Dashboard.
         *
         * Example:
         * Copy file
         * from: concrete/elements/express/form/view/text.php
         * to: packages/tournament_registration_form/elements/express/form/view/tournament_registration_form/text.php
         */
        $locator->prependLocation([
            DIRNAME_ELEMENTS .
            DIRECTORY_SEPARATOR .
            DIRNAME_EXPRESS .
            DIRECTORY_SEPARATOR .
            DIRNAME_EXPRESS_FORM_CONTROLS .
            DIRECTORY_SEPARATOR .
            DIRNAME_EXPRESS_VIEW_CONTROLS .
            DIRECTORY_SEPARATOR .
            'tournament_registration_form', // This made-up folder name that is also used in different places for consistency
            'tournament_registration_form' // This is package handle
        ]);

        return $locator;
    }

    /**
     * This is used for overriding attributes (text, textarea, number, date_time etc.)
     *
     * @see \TournamentRegistrationForm\Attribute\Context\TournamentRegistrationFormContext
     */
    public function getAttributeContext(): \TournamentRegistrationForm\Attribute\Context\TournamentRegistrationFormContext
    {
        return new \TournamentRegistrationForm\Attribute\Context\TournamentRegistrationFormContext();
    }
}
