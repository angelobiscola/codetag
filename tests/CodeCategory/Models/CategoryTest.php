<?php namespace Code\CodeTag\Tests\Models;

use Code\CodeTag\Models\Eloquent\Tag;
use Code\CodeTag\Tests\AbstractTestCase;

class CategoryTest extends AbstractTestCase
{

    public function setUp()
    {
        parent::setUp();
        $this->migrate();
    }

    public function test_check_persisted()
    {
        Tag::create(['name' => 'Tag Test']);
        $tag  = Tag::all()->first();
        $this->assertEquals('Tag Test',$tag->name);
    }
}