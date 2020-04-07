<?php

namespace Tests\Unit\App\Http\Models;
use App\Http\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    protected $user;

    public function setUp(): void
    {
        $this->user = new User();
        parent::setUp();
    }

    public function tearDown(): void
    {
        unset($this->user);
        parent::tearDown();
    }

    public function test_fillable()
    {
        $this->assertEquals([
            'username',
            'full_name',
            'email',
            'phone',
            'avatar',
            'role_id',
        ], $this->user->getFillable());
    }

    public function test_belongsToMany_relation()
    {
        $relation_courses = $this->user->courses();
        $relation_tasks = $this->user->tasks();

        $this->assertInstanceOf(BelongsToMany::class, $relation_courses);
        $this->assertEquals('user_id', $relation_courses->getForeignPivotKeyName());

        $this->assertInstanceOf(BelongsToMany::class, $relation_tasks);
        $this->assertEquals('user_id', $relation_tasks->getForeignPivotKeyName());
    }
}
