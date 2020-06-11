<?php

namespace Nuwave\Lighthouse\Exceptions;

use GraphQL\Error\ClientAware;
use InvalidArgumentException;

class SubscriptionException extends InvalidArgumentException implements ClientAware
{
    /**
     * Returns true when exception message is safe to be displayed to a client.
     *
     * @api
     */
    public function isClientSafe(): bool
    {
        return true;
    }

    /**
     * Returns string describing a category of the error.
     *
     * Value "graphql" is reserved for errors produced by query parsing or validation, do not use it.
     *
     * @api
     */
    public function getCategory(): string
    {
        return 'subscription';
    }
}
