<?php

namespace Nomanur\LaravelWebrtc\Tests;

use PHPUnit\Framework\TestCase;
use Nomanur\LaravelWebrtc\JokeFactory;

class JokeFactoryTest extends TestCase{

    /**
     * @covers
     */
    public function test_it_returns_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke',
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /**
     * @covers
     */
    public function test_it_returns_a_predefined_joke()
    {
        $chuckNorrisJokes = [
            'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
            'Chuck Norris counted to infinity... Twice.',
            'If you can see Chuck Norris, he can see you. If you can\'t see Chuck Norris you may be only seconds away from death.'
        ];
    
        $jokes = new JokeFactory();

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chuckNorrisJokes);
    }

}