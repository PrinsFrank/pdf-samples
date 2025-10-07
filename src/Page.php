<?php declare(strict_types=1);

namespace PrinsFrank\PdfSamples;

class Page {
    public function __construct(
        public readonly string $content,
    ) {
    }
}
