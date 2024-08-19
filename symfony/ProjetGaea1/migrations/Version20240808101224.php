<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240808101224 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $table = $schema->getTable('possession');
        if (!$table->hasColumn('user_id')) {
            $this->addSql('ALTER TABLE possession ADD user_id INT NOT NULL');
            $this->addSql('ALTER TABLE possession ADD CONSTRAINT FK_F9EE3F42A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
            $this->addSql('CREATE INDEX IDX_F9EE3F42A76ED395 ON possession (user_id)');
        }
    }

    public function down(Schema $schema): void
    {
        $table = $schema->getTable('possession');
        if ($table->hasColumn('user_id')) {
            $this->addSql('ALTER TABLE possession DROP FOREIGN KEY FK_F9EE3F42A76ED395');
            $this->addSql('DROP INDEX IDX_F9EE3F42A76ED395 ON possession');
            $this->addSql('ALTER TABLE possession DROP COLUMN user_id');
        }
    }
}
