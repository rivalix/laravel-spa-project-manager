<?php


namespace App\GraphQL\Types;

use App\Models\Project;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class ProjectType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Project',
        'description' => 'A Project Type',
        'model' => Project::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The Project Id'
            ],
            'title' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The Project title'
            ],
            'description' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The Project description'
            ],
//            'manager' => [
//                'type' => Type::nonNull(Type::int()),
//                'description' => 'The Project description'
//            ],
//            'tasks' => [
//                'type' => Type::nonNull(Type::int()),
//                'description' => 'The Project Id'
//            ],
        ];
    }

}
