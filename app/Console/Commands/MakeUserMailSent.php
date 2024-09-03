<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class MakeUserMailSent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:make-user-mail-sent {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Valorizza il campo mail_sent';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = User::where('email', $this->argument('email'))->first();
        if (!$user) {
            $this->error('Utente non trovato');
            return;
        }
        $user->mail_sent = true;
        $user->save();
        $this->info($user->name . ', la tua e-mail è stata inviata!');
    }
}
