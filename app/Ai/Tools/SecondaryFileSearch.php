<?php

namespace App\Ai\Tools;

use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Ai\Contracts\Tool;
use Laravel\Ai\Providers\Tools\FileSearch;
use Laravel\Ai\Tools\Request;
use Stringable;

class SecondaryFileSearch extends FileSearch
{

    public function name(): string
    {
        return 'secondary_file_search';
    }

    /**
     * Get the description of the tool's purpose.
     */
    public function description(): Stringable|string
    {
        return 'Search the secondary knowledge base for supplementary information.';
    }


}
