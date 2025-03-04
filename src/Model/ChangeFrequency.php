<?php

declare(strict_types=1);

namespace SitemapPlugin\Model;

final class ChangeFrequency
{
    private function __construct(private readonly string $changeFrequency)
    {
    }

    public function __toString(): string
    {
        return $this->changeFrequency;
    }

    public static function always(): self
    {
        return new self('always');
    }

    public static function hourly(): self
    {
        return new self('hourly');
    }

    public static function daily(): self
    {
        return new self('daily');
    }

    public static function weekly(): self
    {
        return new self('weekly');
    }

    public static function monthly(): self
    {
        return new self('monthly');
    }

    public static function yearly(): self
    {
        return new self('yearly');
    }

    public static function never(): self
    {
        return new self('never');
    }
}
