<?php

declare(strict_types=1);

namespace Framework\Rules;

use Framework\Contracts\RuleInterface;

class InRule implements RuleInterface
{
  public function validate(array $data, string $field, array $params): bool
  {
    return in_array($data[$field], $params);
  }

  public function getMessage(array $data, string $field, array $params): string
  {
    return "Invalid selection";
  }
}
