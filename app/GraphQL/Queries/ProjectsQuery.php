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

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('project'));
    }

    public function resolve($root, $args)
    {
        return Project::all();
    }
}
