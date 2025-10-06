<?php declare(strict_types=1);

namespace PrinsFrank\PdfSamples;

class Page {
    /** @param list<string> $imagePaths */
    public function __construct(
        public readonly string $content,
        public readonly array $imagePaths,
    ) {
    }
}
