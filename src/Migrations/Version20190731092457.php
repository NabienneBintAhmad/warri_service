<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190731092457 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE superadmin (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone INT NOT NULL, cni BIGINT NOT NULL, statut VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_systemes ADD super_admin_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user_systemes ADD CONSTRAINT FK_C215E1A4BBF91D3B FOREIGN KEY (super_admin_id) REFERENCES superadmin (id)');
        $this->addSql('CREATE INDEX IDX_C215E1A4BBF91D3B ON user_systemes (super_admin_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user_systemes DROP FOREIGN KEY FK_C215E1A4BBF91D3B');
        $this->addSql('DROP TABLE superadmin');
        $this->addSql('DROP INDEX IDX_C215E1A4BBF91D3B ON user_systemes');
        $this->addSql('ALTER TABLE user_systemes DROP super_admin_id');
    }
}
