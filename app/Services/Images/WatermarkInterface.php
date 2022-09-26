<?php

namespace App\Services\Images;

interface WatermarkInterface
{
    public function make(string $path): void;
}
