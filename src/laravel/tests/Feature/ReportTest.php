<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReportTest extends TestCase
{
    // /**
    //  * A basic feature test example.
    //  *
    //  * @return void
    //  */
    // public function testExample()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    /**
     * @test
     */
    public function api_customersにGETメソッドでアクセスできる()
    {
        $response = $this->get('/api/customers');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_customersにPOSTメソッドでアクセスできる()
    {
        $response = $this->post('/api/customers');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_customer_customer_idにGETメソッドでアクセスできる()
    {
        $response = $this->get('/api/customers/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_customer_customer_idにPUTメソッドでアクセスできる()
    {
        $response = $this->put('/api/customers/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_customer_customer_idにDELETEメソッドでアクセスできる()
    {
        $response = $this->delete('/api/customers/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_reportsにGETメソッドでアクセスできる()
    {
        $response = $this->get('/api/reports');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_reportsにPOSTメソッドでアクセスできる()
    {
        $response = $this->post('/api/reports');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_reports_report_idにGETメソッドでアクセスできる()
    {
        $response = $this->get('/api/reports/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_reports_report_idにPUTメソッドでアクセスできる()
    {
        $response = $this->put('/api/reports/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_reports_report_idにDELETEメソッドでアクセスできる()
    {
        $response = $this->delete('/api/reports/1');
        $response->assertStatus(200);
    }








}
