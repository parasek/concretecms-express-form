<?php

namespace Concrete\Package\TournamentRegistrationForm;

use Concrete\Core\Package\Package;
use TournamentRegistrationForm\Express\Controller\TournamentRegistrationFormController;

class Controller extends Package
{
    protected $pkgHandle = 'tournament_registration_form';
    protected $appVersionRequired = '9.1.1';
    protected $pkgVersion = '1.0.0';

    protected $pkgAutoloaderRegistries = [
        'src' => 'TournamentRegistrationForm',
    ];

    public function on_start()
    {
        // First argument is Express object handle
        $this->app->make('Concrete\Core\Express\Controller\Manager')
            ->extend('tournament_registration', function () {
                return new TournamentRegistrationFormController($this->app);
            });
    }

    public function getPackageName()
    {
        return t('Tournament Registration Form');
    }

    public function getPackageDescription()
    {
        return t('Custom changes made to Tournament Registration Form.');
    }
}
