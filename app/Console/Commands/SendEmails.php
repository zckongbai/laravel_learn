<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send 
                            {user* : The ID of user} 
                            {--Q|queue : Whether the job should be queued}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '给用户发送邮件';

    /**
     * 邮件服务的 drip 属性。
     *
     * @var DripEmailer
     */
    protected $drip;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this->ask('your name:');
        $password = $this->secret('you password');
        if ($this->confirm('Are you sure?')) {
            echo "ok";
        }
        print_r($this->arguments());
        // $this->drip->send(User::find($this->argument('user')));
    }
}
