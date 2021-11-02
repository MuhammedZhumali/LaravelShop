<?php
namespace App\Http\ViewComposers;

use App\Models\MenuItems;
use Illuminate\View\View;

class NavHeaderComposer {
    public function compose(View $view) {
        return $view->with('items', MenuItems::header());
    }
}