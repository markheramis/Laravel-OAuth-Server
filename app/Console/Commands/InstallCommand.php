<?php

namespace App\Console\Commands;

use Laravel\Passport\Console\InstallCommand as PassportInstallCommand;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'passport:install')]
class InstallCommand extends PassportInstallCommand
{
    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->call('passport:keys', ['--force' => $this->option('force'), '--length' => $this->option('length')]);

        if ($this->option('uuids')) {
            $this->configureUuids();
        }

        if ($this->confirm('Would you like to run all pending database migrations?', true)) {
            $this->call('migrate');

            if ($this->confirm('Would you like to create the "personal access" and "password grant" clients?', true)) {
                $provider = in_array('users', array_keys(config('auth.providers'))) ? 'users' : null;

                $this->call('passport:client', ['--personal' => true, '--name' => config('app.name') . ' Personal Access Client']);
                $this->call('passport:client', ['--password' => true, '--name' => config('app.name') . ' Password Grant Client', '--provider' => $provider]);
            }
        }
    }
}
