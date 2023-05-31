<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Intervention\Image\Facades\Image;

class ResizeImage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'arya:resize-image';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'resize 10 image';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        for ($i = 1; $i <= 10; $i++) {
            $image = Image::make(public_path('orginal_images/i-' . $i . '.jpg' ))->fit(100,100);
            $image->save(public_path('resize_images/i-' . $i . '.jpg'));
            info('resize image number: ' . $i);
        }
    }
}
