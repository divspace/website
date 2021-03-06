<?php namespace App\Http\Composers\Layouts;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class MasterComposer
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function compose(View $view)
    {
        $path = $this->request->path();

        $view->pageTitle = 'Divspace';

        $view->navbarLinks = [
            [
                'title'   => 'Home',
                'url'     => route('home.index'),
                'active'  => ($path === '/') ? ' active' : '',
                'current' => ($path === '/') ? ' <span class="sr-only">(Current)</span>' : ''
            ],
            [
                'title'   => 'R&eacute;sum&eacute;',
                'url'     => route('resume.index'),
                'active'  => ($path === 'resume') ? ' active' : '',
                'current' => ($path === 'resume') ? ' <span class="sr-only">(Current)</span>' : ''
            ]
        ];

        $view->socialLinks = [
            [
                'show'  => true,
                'title' => 'Facebook',
                'icon'  => 'facebook',
                'url'   => 'https://www.facebook.com/divspace'
            ],
            [
                'show'  => true,
                'title' => 'Twitter',
                'icon'  => 'twitter',
                'url'   => 'https://twitter.com/divspace',
            ],
            [
                'show'  => true,
                'title' => 'LinkedIn',
                'icon'  => 'linkedin',
                'url'   => 'https://www.linkedin.com/in/divspace'
            ],
            [
                'show'  => true,
                'title' => 'Bitbucket',
                'icon'  => 'bitbucket',
                'url'   => 'https://bitbucket.org/divspace'
            ],
            [
                'show'  => true,
                'title' => 'GitHub',
                'icon'  => 'github',
                'url'   => 'https://github.com/divspace'
            ],
            [
                'show'  => true,
                'title' => 'Stack Overflow',
                'icon'  => 'stack-overflow',
                'url'   => 'https://stackoverflow.com/users/5361065'
            ]
        ];
    }
}
