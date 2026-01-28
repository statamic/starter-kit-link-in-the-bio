<?php

namespace App\Widgets;

use Statamic\Facades\Entry;
use Statamic\Widgets\Widget;

class GettingStartedWithLinkInTheBio extends Widget
{
    /**
     * The HTML that should be shown in the widget.
     *
     * @return string|\Illuminate\View\View
     */
    public function html()
    {
        $links = Entry::query()->where('collection', 'links')->count();

        return view('widgets.getting-started', compact('links'));
    }
}
