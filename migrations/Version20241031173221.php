<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241031173221 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("INSERT INTO category (name) VALUES ('Technology')");
        $this->addSql("INSERT INTO category (name) VALUES ('Pop Culture')");
        $this->addSql("INSERT INTO category (name) VALUES ('News & Updates')");
        $this->addSql("INSERT INTO category (name) VALUES ('Tutorials & Tips')");
    }

    public function down(Schema $schema): void
    {
        $this->addSql("DELETE FROM category WHERE name IN ('Technology', 'Pop Culture', 'News & Updates', 'Tutorials & Tips')");
    }
}
