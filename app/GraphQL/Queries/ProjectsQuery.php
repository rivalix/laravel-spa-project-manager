<?php


namespace App\GraphQL\Queries;
use App\Models\Project;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\Facades\GraphQL;

class ProjectsQuery extends Query
{
    protected $attributes = [
        'name' => 'The Project Query',
        'description' => 'Retrieves projects'
    ];

    public function args(): array
    {
        return [
            'projectId' => [
                'type' => Type::int()
            ]
        ];
    }

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('project'));
    }

    public function resolve($root, $args)
    {
        if(isset($args['projectId'])) {
            return Project::where('id', $args['projectId'])->get();
        }
        return Project::all();
    }
}
