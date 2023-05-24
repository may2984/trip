<?php

namespace App\View\Components\Home\Footer;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class CategoryLink extends Component
{
    public function __construct(
        public int $numberOfCategoryToShow = 3,
        public string $excludeThisCategory = ''
    )
    {
        //
    }

    public function render()
    {
        $blogCategory = DB::table('blog_category')
                            ->select('name','url')
                            ->where(['status' => 1])
                            ->orderBy('position')
                            ->take( $this->numberOfCategoryToShow )
                            ->get();

        $data = [
            'blog_category' => $blogCategory,
        ];

        return view('components.home.footer.category-link', $data);
    }
}
