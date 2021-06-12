<?php

namespace App\GraphQL\Types;

use App\Models\Task;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class TaskType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Task',
        'description' => 'A Task Type',
        'model' => Task::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The Task Id'
            ],
            'title' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The Task title'
            ],
            'description' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The Task description'
            ],
            'statusCode' => [
                'type' => Type::nonNull(Type::string()),
            ],
            'project' => [
                'type' => Type::nonNull(GraphQL::type('project')),
            ],
            'user' => [
                'type' => Type::nonNull(GraphQL::type('user')),
            ],
        ];
    }

    protected function resolveStatusCodeField($root, $args) {
        return $root->status_code;
    }
}
