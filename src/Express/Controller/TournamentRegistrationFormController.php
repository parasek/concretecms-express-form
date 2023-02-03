<?php

namespace TournamentRegistrationForm\Express\Controller;

use Concrete\Core\Express\Controller\StandardController;
use Concrete\Core\Express\Form\Context\FrontendFormContext as CoreFrontendFormContext;
use Concrete\Core\Form\Context\Registry\ContextRegistry;
use TournamentRegistrationForm\Express\Form\Context\TournamentRegistrationFormContext;

class TournamentRegistrationFormController extends StandardController
{
    /**
     * This is used for overriding different view files
     */
    public function getContextRegistry(): ContextRegistry
    {
        return new ContextRegistry([
            CoreFrontendFormContext::class => new TournamentRegistrationFormContext()
        ]);
    }
}
