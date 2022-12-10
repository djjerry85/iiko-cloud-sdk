<?php

namespace UsePack\IikoCloud\Entity\Requests;

class BaseRequest implements \JsonSerializable
{
    /**
     * Generates an array of parameters for the request and deletes empty values.
     */
    public function prepareRequest(): array
    {
        $entity_vars = $this->pattern ?? \get_object_vars($this);

        $dynamic = [];

        foreach ($entity_vars as $key => $val) {
            if (\is_null($this->{$key})) {
                continue;
            }

            if (!\is_object($this->{$key}) && !is_array($this->{$key})) {
                $dynamic[$key] = $this->{$key};
            } elseif (is_array($this->{$key})) {
                foreach ($this->{$key} as $k => $v) {
                    if (is_object($v)) {
                        $array_from_object = \get_object_vars($v);

                        $array_from_object_null_filtered = \array_filter($array_from_object);
                        if (!empty($array_from_object_null_filtered)) {
                            $dynamic[$key][] = $array_from_object_null_filtered;
                        }
                    } else {
                        $dynamic[$key][] = $v;
                    }
                }
            } else {
                $a = \get_object_vars($this->{$key});
                $dynamic[$key] = \array_filter($a, function ($value) {
                    return $value !== null;
                });
            }
        }

        return $dynamic;
    }

    public function jsonSerialize(): array
    {
        return \get_object_vars($this);
    }
}
