<?php
declare(strict_types=1);

namespace AcMailerTes\Tooling\Command;

use AcMailer\Tooling\Command\MigrateConfigCommand;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

class MigrateConfigCommandTest extends TestCase
{
    /**
     * @var MigrateConfigCommand
     */
    private $command;
    /**
     * @var CommandTester
     */
    private $commandTester;

    public function setUp()
    {
        $this->command = new MigrateConfigCommand();
        $app = new Application();
        $app->add($this->command);
        $this->commandTester = new CommandTester($this->command);
    }

    /**
     * @test
     */
    public function configIsProperlyParsed()
    {
        $this->commandTester->execute([
            '--config-file' => __DIR__ . '/../../config/old_config_sample.php',
        ]);

        $output = $this->commandTester->getDisplay();
        $this->assertContains('emails', $output);
        $this->assertContains('mail_services', $output);
        $this->assertContains('\'from\' => \'me@foo.com\'', $output);
        $this->assertContains('transport_options', $output);
        $this->assertContains('\'host\' => \'smtp.gmail.com\',', $output);
    }
}
