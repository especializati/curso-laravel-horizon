<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Services\Images\WatermarkInterface;
use Illuminate\Console\Command;

class WatermarkImagesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'watermark:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add Watermark Images Users';

    public function __construct(
        protected WatermarkInterface $watermark,
        protected User $model,
    ) {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $users = $this->model->getUsersCreatedToday();
        // $users = $this->model->whereDate('created_at', now())->get();
        $users = $this->model->get();

        foreach ($users as $user) {
            $this->watermark->make($user->image);
        }

        return 0;
    }
}
