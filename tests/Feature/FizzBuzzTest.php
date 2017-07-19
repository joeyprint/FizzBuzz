<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    public function test_case1() {
        $FizzBuzz = new FizzBuzz();
        $this->assertEquals($FizzBuzz->input(1),"Fizz");
    }

    public function test_case2() {
        $FizzBuzz = new FizzBuzz();
        $this->assertEquals($FizzBuzz->input(2),"Buzz");
    }

    public function test_case3() {
        $FizzBuzz = new FizzBuzz();
        $this->assertEquals($FizzBuzz->input(99),"Fizz");
    }

    public function test_case4() {
        $FizzBuzz = new FizzBuzz();
        $this->assertEquals($FizzBuzz->input(101),"Fizz");
    }

    public function test_case5() {
        $FizzBuzz = new FizzBuzz();
        $this->assertEquals($FizzBuzz->input("First"),"Fizz");
    }
}
