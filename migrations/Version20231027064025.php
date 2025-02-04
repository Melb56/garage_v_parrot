<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231027064025 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis DROP created_at, CHANGE full_name full_name VARCHAR(255) NOT NULL, CHANGE subject subject VARCHAR(255) NOT NULL, CHANGE message message VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE contact CHANGE full_name full_name VARCHAR(50) DEFAULT NULL, CHANGE email email VARCHAR(180) NOT NULL, CHANGE subject subject VARCHAR(100) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE full_name full_name VARCHAR(255) DEFAULT NULL, CHANGE subject subject VARCHAR(255) DEFAULT NULL, CHANGE message message LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE contact CHANGE full_name full_name VARCHAR(255) DEFAULT NULL, CHANGE email email VARCHAR(255) NOT NULL, CHANGE subject subject VARCHAR(255) DEFAULT NULL');
    }
}
