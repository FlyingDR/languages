<?php

namespace Rinvex\Language\Tests\Unit;

use Rinvex\Language\Language;
use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase
{
    /** @test */
    public function it_returns_language_data_through_helper()
    {
        $amharic = [
            'name' => 'Amharic',
            'native' => 'አማርኛ',
            'iso_639_1' => 'am',
            'iso_639_2' => 'amh',
            'iso_639_3' => 'amh',
            'script' => [
                'name' => 'Ethiopic (Ge_ez)',
                'iso_15924' => 'Ethi',
                'iso_numeric' => '430',
                'direction' => 'ltr',
            ],
            'family' => [
                'name' => 'Afro-Asiatic',
                'iso_639_5' => 'afa',
                'hierarchy' => 'afa',
            ],
            'cultures' => [
                'am-ET' => [
                    'name' => 'Amharic (Ethiopia)',
                    'native' => 'አማርኛ (ኢትዮጵያ)',
                ],
            ],
            'scope' => 'individual',
            'type' => 'living',
        ];

        $this->assertEquals($amharic, language('am', false));
        $this->assertEquals(new Language($amharic), language('am'));
    }

    public function assertIsArray($actual, $message = '') {
        $this->assertInternalType('array', $actual, $message);
    }

    /** @test */
    public function it_returns_languages_array_through_helper()
    {
        $this->assertEquals(183, count(languages()));
        $this->assertIsArray(languages()['en']);
        $this->assertEquals('English', languages()['en']['name']);
    }

    /** @test */
    public function it_returns_language_scripts_array_through_helper()
    {
        $this->assertEquals(29, count(language_scripts()));
        $this->assertIsArray(language_scripts());
        $this->assertArrayHasKey('Arab', language_scripts());
    }

    /** @test */
    public function it_returns_language_families_array_through_helper()
    {
        $this->assertEquals(27, count(language_families()));
        $this->assertIsArray(language_families());
        $this->assertArrayHasKey('afa', language_families());
    }
}
