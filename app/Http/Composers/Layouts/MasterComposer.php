<?php namespace App\Http\Composers\Layouts;

use Illuminate\Contracts\View\View;

class MasterComposer {

    public function compose(View $view) {
        $view->socialLinks = [
            [
                'title' => 'Twitter',
                'icon'  => 'twitter',
                'url'   => 'https://twitter.com/divspace'
            ],
            [
                'title' => 'LinkedIn',
                'icon'  => 'linkedin',
                'url'   => 'https://www.linkedin.com/in/kjanderson83'
            ],
            [
                'title' => 'GitHub',
                'icon'  => 'github',
                'url'   => 'https://github.com/divspace'
            ],
            [
                'title' => 'Stack Overflow',
                'icon'  => 'stack-overflow',
                'url'   => 'http://stackoverflow.com/users/5361065/kyle-anderson'
            ]
        ];
    }

}
