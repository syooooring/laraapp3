<?php
namespace App\Http\Composers;

use Illuminate\View\View;

class HelloComposer
{

    public function composer(View $view)
    {
        $view->with('view_message', 'this view is "'
              . $view->getName() . '"!!');
    }
}