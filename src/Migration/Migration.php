<?php

namespace Fipps\BootstrapCustomizerBundle\Migration;

use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\CoreBundle\Migration\AbstractMigration;
use Contao\CoreBundle\Migration\MigrationResult;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Schema\Column;
use Doctrine\DBAL\Types\StringType;

class Migration extends AbstractMigration
{
    /**
     * @var Connection
     */
    private $connection;

    /**
     * @var ContaoFramework
     */
    private $framework;

    /**
     * @var array
     */
    private $convertColumns;

    /**
     * @var array
     */
    private $deleteColumns;

    public function __construct(Connection $connection, ContaoFramework $framework)
    {
        $this->connection     = $connection;
        $this->framework      = $framework;
        $this->convertColumns = [];
        $this->deleteColumns  = [];
    }

    public function shouldRun(): bool
    {
        $obsoleteColumns = ['primary', 'secondary', 'tertiary', 'info', 'success', 'warning', 'danger', 'light', 'dark', 'white','black','gray100', 'gray200', 'gray300', 'gray400', 'gray500', 'gray600', 'gray700', 'gray800', 'gray900'];

        $schemaManager = $this->connection->getSchemaManager();

        // If the database table itself does not exist we should do nothing
        if (!$schemaManager->tablesExist(['tl_bs_theme'])) {
            return false;
        }

        $columns = $schemaManager->listTableColumns('tl_bs_theme');
        $ret     = false;

        /** @var Column $schema */
        foreach ($columns as $column => $schema) {

            if ($schema->getType() instanceof StringType && $schema->getLength() > 11 && $column != 'title') {
                $this->convertColumns[] = $column;
                $ret                    = true;
            }
            if (in_array($column, $obsoleteColumns)) {
                $this->deleteColumns[] = $column;
                $ret                    = true;
            }
        }


        return $ret;
    }

    public function run(): MigrationResult
    {
        $this->framework->initialize();

        foreach ($this->convertColumns as $column) {
            $this->connection->query("ALTER TABLE tl_bs_theme CHANGE `$column` `$column` BLOB NULL;");
        }

        foreach ($this->deleteColumns as $column) {
            $this->connection->query("ALTER TABLE tl_bs_theme DROP `$column`;");
        }

        return new MigrationResult(
            true, 'tl_bs_theme converted'
        );
    }
}