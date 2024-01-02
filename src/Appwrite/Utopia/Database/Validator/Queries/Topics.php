<?php

namespace Appwrite\Utopia\Database\Validator\Queries;

class Topics extends Base
{
    public const ALLOWED_ATTRIBUTES = [
        'name',
        'description',
    ];

    /**
     * Expression constructor
     *
     */
    public function __construct()
    {
        parent::__construct('topics', self::ALLOWED_ATTRIBUTES);
    }
}
