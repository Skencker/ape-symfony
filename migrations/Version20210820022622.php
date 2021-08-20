<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210820022622 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE parents_delegues (id INT AUTO_INCREMENT NOT NULL, fonction_id INT NOT NULL, classe_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, firstname VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, INDEX IDX_694E76C357889920 (fonction_id), INDEX IDX_694E76C38F5EA509 (classe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE parents_delegues ADD CONSTRAINT FK_694E76C357889920 FOREIGN KEY (fonction_id) REFERENCES fonction_parents_delegues (id)');
        $this->addSql('ALTER TABLE parents_delegues ADD CONSTRAINT FK_694E76C38F5EA509 FOREIGN KEY (classe_id) REFERENCES classes (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE parents_delegues');
    }
}
