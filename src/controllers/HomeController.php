<?php

namespace Dorguzen\Controllers;

use Dorguzen\Core\DGZ_View;
use Dorguzen\Core\DGZ_Controller;
use Dorguzen\Core\DGZ_Validate;
use Dorguzen\Core\DGZ_Messenger;
use Dorguzen\Modules\Testimonials\Services\TestimonialsService;
use Dorguzen\Services\FeedbackService;
use Dorguzen\Services\CodingLessonsService;

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

    public function codingLessons(): void
    {
        $view = DGZ_View::getView('codingLessons', $this, 'html');
        $this->setLayoutDirectory($this->config->getConfig()['layoutDirectory']);
        $this->setLayoutView($this->config->getConfig()['defaultLayout']);
        $this->setPageTitle('Coding Lessons');
        $view->show();
    }

    public function codingLessonsInquiry(): void
    {
        header('Content-Type: application/json');

        $val     = new DGZ_Validate();
        $name    = $val->fix_string($_POST['name']    ?? '');
        $email   =                  $_POST['email']   ?? '';
        $phone   = $val->fix_string($_POST['phone']   ?? '');
        $message = $val->fix_string($_POST['message'] ?? '');

        $service = container(FeedbackService::class);
        $error   = $service->validateContactInput($name, $email, $message);

        if ($error !== '') {
            echo json_encode(['success' => false, 'message' => strip_tags($error)]);
            exit;
        }

        $service->saveContactMessage([
            'name'    => $name,
            'email'   => $email,
            'phone'   => $phone,
            'message' => '[Coding Lessons Enquiry] ' . $message,
        ]);

        $messenger = new DGZ_Messenger();
        $messenger->sendContactFormMsgToAdmin($name, $email, $phone, '[Coding Lessons Enquiry] ' . $message);

        echo json_encode(['success' => true, 'message' => 'Your enquiry has been received. We\'ll be in touch very soon!']);
        exit;
    }

    public function codingLessonsBook(): void
    {
        header('Content-Type: application/json');

        $val       = new DGZ_Validate();
        $name      = $val->fix_string($_POST['name']       ?? '');
        $email     =                  $_POST['email']      ?? '';
        $phone     = $val->fix_string($_POST['phone']      ?? '');
        $ageGroup  = $_POST['age_group']  ?? '';
        $startDate = $_POST['start_date'] ?? '';
        $language  = $_POST['language']   ?? 'HTML/CSS/JS';
        $frequency = $_POST['frequency']  ?? '';

        if ($name === '' || $email === '' || $ageGroup === '' || $startDate === '' || $frequency === '') {
            echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
            exit;
        }

        $emailVal   = new DGZ_Validate();
        $emailError = $emailVal->validate_email($email);
        if ($emailError !== '') {
            echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
            exit;
        }

        $service = container(CodingLessonsService::class);
        $service->saveStudent([
            'name'       => $name,
            'email'      => $email,
            'phone'      => $phone,
            'age_group'  => $ageGroup,
            'start_date' => $startDate,
            'language'   => $language,
            'frequency'  => $frequency,
        ]);

        echo json_encode(['success' => true, 'message' => 'Your session request has been received! We\'ll be in touch shortly to confirm your start date and first session details.']);
        exit;
    }

    public function services(): void
    {
        $view = DGZ_View::getView('services', $this, 'html');
        $this->setLayoutDirectory($this->config->getConfig()['layoutDirectory']);
        $this->setLayoutView($this->config->getConfig()['defaultLayout']);
        $this->setPageTitle('Services');
        $view->show();
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
