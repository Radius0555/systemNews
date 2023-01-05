<?php

// This file has been auto-generated by the Symfony Cache Component.

return [[

'App__Entity__Category__CLASSMETADATA__' => 0,
'App__Entity__Comment__CLASSMETADATA__' => 1,
'App__Entity__Article__CLASSMETADATA__' => 2,
'App__Entity__User__CLASSMETADATA__' => 3,

], [

0 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Category',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Category',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\CategoryRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'name' => [
                            'fieldName' => 'name',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'name',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'name' => 'name',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'name' => 'name',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'category',
                    ],
                ],
                'associationMappings' => [
                    [
                        'articles' => [
                            'fieldName' => 'articles',
                            'mappedBy' => 'category',
                            'targetEntity' => 'App\\Entity\\Article',
                            'cascade' => [],
                            'orphanRemoval' => false,
                            'fetch' => 2,
                            'type' => 4,
                            'inversedBy' => null,
                            'isOwningSide' => false,
                            'sourceEntity' => 'App\\Entity\\Category',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
1 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Comment',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Comment',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\CommentRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'author' => [
                            'fieldName' => 'author',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'author',
                        ],
                        'content' => [
                            'fieldName' => 'content',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'content',
                        ],
                        'date' => [
                            'fieldName' => 'date',
                            'type' => 'datetime',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'date',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'author' => 'author',
                        'content' => 'content',
                        'date' => 'date',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'author' => 'author',
                        'content' => 'content',
                        'date' => 'date',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'comment',
                    ],
                ],
                'associationMappings' => [
                    [
                        'article' => [
                            'fieldName' => 'article',
                            'joinColumns' => [
                                [
                                    'name' => 'article_id',
                                    'referencedColumnName' => 'id',
                                ],
                            ],
                            'cascade' => [],
                            'inversedBy' => 'comments',
                            'targetEntity' => 'App\\Entity\\Article',
                            'fetch' => 2,
                            'type' => 2,
                            'mappedBy' => null,
                            'isOwningSide' => true,
                            'sourceEntity' => 'App\\Entity\\Comment',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                            'sourceToTargetKeyColumns' => [
                                'article_id' => 'id',
                            ],
                            'joinColumnFieldNames' => [
                                'article_id' => 'article_id',
                            ],
                            'targetToSourceKeyColumns' => [
                                'id' => 'article_id',
                            ],
                            'orphanRemoval' => false,
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
2 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Article',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Article',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\ArticleRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'title' => [
                            'fieldName' => 'title',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'title',
                        ],
                        'date' => [
                            'fieldName' => 'date',
                            'type' => 'datetime',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'date',
                        ],
                        'content' => [
                            'fieldName' => 'content',
                            'type' => 'text',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'content',
                        ],
                        'contentBig' => [
                            'fieldName' => 'contentBig',
                            'type' => 'text',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'content_big',
                        ],
                        'image' => [
                            'fieldName' => 'image',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'image',
                        ],
                        'importance' => [
                            'fieldName' => 'importance',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'importance',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'title' => 'title',
                        'date' => 'date',
                        'content' => 'content',
                        'content_big' => 'contentBig',
                        'image' => 'image',
                        'importance' => 'importance',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'title' => 'title',
                        'date' => 'date',
                        'content' => 'content',
                        'contentBig' => 'content_big',
                        'image' => 'image',
                        'importance' => 'importance',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'article',
                    ],
                ],
                'associationMappings' => [
                    [
                        'category' => [
                            'fieldName' => 'category',
                            'joinColumns' => [
                                [
                                    'name' => 'category_id',
                                    'referencedColumnName' => 'id',
                                ],
                            ],
                            'cascade' => [],
                            'inversedBy' => 'articles',
                            'targetEntity' => 'App\\Entity\\Category',
                            'fetch' => 2,
                            'type' => 2,
                            'mappedBy' => null,
                            'isOwningSide' => true,
                            'sourceEntity' => 'App\\Entity\\Article',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                            'sourceToTargetKeyColumns' => [
                                'category_id' => 'id',
                            ],
                            'joinColumnFieldNames' => [
                                'category_id' => 'category_id',
                            ],
                            'targetToSourceKeyColumns' => [
                                'id' => 'category_id',
                            ],
                            'orphanRemoval' => false,
                        ],
                        'comments' => [
                            'fieldName' => 'comments',
                            'mappedBy' => 'article',
                            'targetEntity' => 'App\\Entity\\Comment',
                            'cascade' => [],
                            'orphanRemoval' => false,
                            'fetch' => 2,
                            'type' => 4,
                            'inversedBy' => null,
                            'isOwningSide' => false,
                            'sourceEntity' => 'App\\Entity\\Article',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
3 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\User',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\User',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\UserRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'username' => [
                            'fieldName' => 'username',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 180,
                            'unique' => true,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'username',
                        ],
                        'roles' => [
                            'fieldName' => 'roles',
                            'type' => 'json',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'roles',
                        ],
                        'password' => [
                            'fieldName' => 'password',
                            'type' => 'string',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'password',
                        ],
                        'email' => [
                            'fieldName' => 'email',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'email',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'username' => 'username',
                        'roles' => 'roles',
                        'password' => 'password',
                        'email' => 'email',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'username' => 'username',
                        'roles' => 'roles',
                        'password' => 'password',
                        'email' => 'email',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'user',
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},

]];
