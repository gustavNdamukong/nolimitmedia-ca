<?php

namespace Dorguzen\Controllers;

use Dorguzen\Core\DGZ_View;
use Dorguzen\Core\DGZ_Controller;
use Dorguzen\Modules\Testimonials\Services\TestimonialsService;

class HomeController extends DGZ_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getDefaultAction(): string
    {
        return 'defaultAction';
    }

    public function about(): void
    {
        $view = DGZ_View::getView('about', $this, 'html');
        $this->setLayoutDirectory($this->config->getConfig()['layoutDirectory']);
        $this->setLayoutView($this->config->getConfig()['defaultLayout']);
        $this->setPageTitle('About Us');
        $view->show();
    }

    public function defaultAction(): void
    {
        $viewModel = [];
        $modules   = $this->config->getConfig()['modules'] ?? [];

        if (($modules['testimonials'] ?? 'off') === 'on') {
            $service = container(TestimonialsService::class);
            $viewModel['testimonials'] = $service->homePagePayload(3)['testimonials'];
        }

        $view = DGZ_View::getView('home', $this, 'html');
        $this->setLayoutDirectory($this->config->getConfig()['layoutDirectory']);
        $this->setLayoutView($this->config->getConfig()['defaultLayout']);
        $this->setPageTitle('Home');
        $this->setImageSlider(true);
        $view->show($viewModel);
    }
}
