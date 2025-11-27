<?php

namespace Tests\Feature;

use Tests\TestCase;

class PageTest extends TestCase
{
    public function test_home_page_returns_successful_response()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_about_page_returns_successful_response()
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
    }

    public function test_services_page_returns_successful_response()
    {
        $response = $this->get('/services');
        $response->assertStatus(200);
    }

    public function test_why_us_page_returns_successful_response()
    {
        $response = $this->get('/why-us');
        $response->assertStatus(200);
    }

    public function test_contact_page_returns_successful_response()
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
    }
}
