<?php

namespace Framework\Rules;

use Framework\Contracts\RuleInterface;

class NumericRule implements RuleInterface
{
  public function validate(array $data, string $field, array $params): bool
  {
    return is_numeric($data[$field]);
  }

  public function getMessage(array $data, string $field, array $params): string
  {
    return "Only numbers allowed";
  }
}
