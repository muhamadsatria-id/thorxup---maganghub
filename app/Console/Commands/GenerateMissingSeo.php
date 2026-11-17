<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;

class GenerateMissingSeo extends Command
{
    protected $signature = 'seo:generate';
    protected $description = 'Generate otomatis metadata SEO untuk semua data yang sudah ada';

    public function handle(): void
    {
        Post::chunk(100, function ($posts) {
            foreach ($posts as $post) {
                $post->generateAutoSeo();
            }
        });

        $this->info('Semua metadata SEO berhasil di-generate!');
    }
}