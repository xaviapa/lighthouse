<?php

namespace Nuwave\Lighthouse\Support\Contracts;

use GraphQL\Language\AST\FieldDefinitionNode;
use Nuwave\Lighthouse\Schema\AST\DocumentAST;
use GraphQL\Language\AST\ObjectTypeDefinitionNode;

interface FieldManipulator extends Directive
{
    /**
     * @param  FieldDefinitionNode  $fieldDefinition
     * @param  ObjectTypeDefinitionNode  $parentType
     * @param  \Nuwave\Lighthouse\Schema\AST\DocumentAST  $current
     *
     * @return \Nuwave\Lighthouse\Schema\AST\DocumentAST
     */
    public function manipulateSchema(
        FieldDefinitionNode $fieldDefinition,
        ObjectTypeDefinitionNode $parentType,
        DocumentAST $current
    );
}
