<?php

namespace UsePack\IikoCloud\Entity\Responses;

class BaseResponse
{
    /**
     * Generates a class object from the response.
     */
    public function __construct(?array $properties = null)
    {
        if (!is_null($properties)) {
            foreach ($properties as $key => $value) {
                $this->{$key} = $value;
            }
        }
    }

    public static function create(array $properties): static
    {
        return new static($properties);
    }

    /**
     * @return static[]
     */
    public static function collection(array $items): array
    {
        return array_map(fn ($item) => static::create($item), $items);
    }
}
