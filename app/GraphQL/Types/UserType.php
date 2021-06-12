<?php

namespace App\GraphQL\Types;

use App\Models\User;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class UserType extends GraphQLType
{
    protected $attributes = [
        'name' => 'User',
        'description' => 'A User Type',
        'model' => User::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The User Id'
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The User name'
            ],
            'email' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The User email'
            ],
        ];
    }
}
