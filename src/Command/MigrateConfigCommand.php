<?php
declare(strict_types=1);

namespace AcMailer\Tooling\Command;

use Symfony\Component\Console\Command\Command;

class MigrateConfigCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('acmailer:migrate-config')
            ->setDescription(
                'Migrates configuration from the structure used in AcMailer v5/v6 to the structure used in v7'
            );
    }
}
