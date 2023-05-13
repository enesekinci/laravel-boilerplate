<?php

declare(strict_types=1);


namespace App\Handlers;

class LfmConfigHandler extends \UniSharp\LaravelFilemanager\Handlers\ConfigHandler
{
    public function userField(): int|string|null
    {
        return parent::userField();
    }
}
