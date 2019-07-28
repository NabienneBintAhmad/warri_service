<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190727191506 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE transaction (id INT AUTO_INCREMENT NOT NULL, compte VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, date DATE NOT NULL, montant INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_prestataire (id INT AUTO_INCREMENT NOT NULL, matricule_id INT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, telephone INT NOT NULL, email VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, INDEX IDX_C9B9AD159AAADC05 (matricule_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_systemes (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telephone INT NOT NULL, adresse VARCHAR(255) NOT NULL, cni VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entreprise_prestataire (id INT AUTO_INCREMENT NOT NULL, denomination VARCHAR(255) NOT NULL, matricule VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, contacte INT NOT NULL, adress VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compte_prestataire (id INT AUTO_INCREMENT NOT NULL, matricule_id INT NOT NULL, solde INT NOT NULL, UNIQUE INDEX UNIQ_4CB3EED49AAADC05 (matricule_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_prestataire ADD CONSTRAINT FK_C9B9AD159AAADC05 FOREIGN KEY (matricule_id) REFERENCES entreprise_prestataire (id)');
        $this->addSql('ALTER TABLE compte_prestataire ADD CONSTRAINT FK_4CB3EED49AAADC05 FOREIGN KEY (matricule_id) REFERENCES entreprise_prestataire (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user_prestataire DROP FOREIGN KEY FK_C9B9AD159AAADC05');
        $this->addSql('ALTER TABLE compte_prestataire DROP FOREIGN KEY FK_4CB3EED49AAADC05');
        $this->addSql('DROP TABLE transaction');
        $this->addSql('DROP TABLE user_prestataire');
        $this->addSql('DROP TABLE user_systemes');
        $this->addSql('DROP TABLE entreprise_prestataire');
        $this->addSql('DROP TABLE compte_prestataire');
    }
}
