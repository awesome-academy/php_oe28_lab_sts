<?php

namespace Tests\Unit\App\Http\Models;

use App\Http\Models\Course;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Tests\TestCase;

class CourseTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    protected $course;

    public function setUp(): void
    {
        $this->course = new Course();
        parent::setUp();
    }

    public function tearDown(): void
    {
        unset($this->course);
        parent::tearDown();
    }

    public function test_fillable()
    {
        $this->assertEquals([
            'name',
            'description',
            'image',
            'creator_id',
            'time',
        ], $this->course->getFillable());
    }

    public function test_belongsTo_relation()
    {
        $relation = $this->course->creator();

        $this->assertInstanceOf(BelongsTo::class, $relation);
        $this->assertEquals('creator_id', $relation->getForeignKeyName());
        $this->assertEquals('id', $relation->getOwnerKeyName());
    }

    public function test_hasMany_relation()
    {
        $relation = $this->course->subjects();

        $this->assertInstanceOf(HasMany::class, $relation);
        $this->assertEquals('course_id', $relation->getForeignKeyName());
    }

    public function test_belongsToMany_relation()
    {
        $relation = $this->course->users();

        $this->assertInstanceOf(BelongsToMany::class, $relation);
        $this->assertEquals('course_id', $relation->getForeignPivotKeyName());
    }
}
