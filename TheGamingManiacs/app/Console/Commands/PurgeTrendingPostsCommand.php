<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Category;
class PurgeTrendingPostsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:purge-trending-posts-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $category = Category::where('slug', 'trending')->first();
    
        if ($category) {
            $posts = $category->posts()->orderBy('created_at', 'asc')->get();
    
            if ($posts->count() > 4) {
                $postsToDelete = $posts->slice(0, $posts->count() - 4);
    
                foreach ($postsToDelete as $post) {
                    $category->posts()->detach($post);
                }
            }
        }
    }
}
