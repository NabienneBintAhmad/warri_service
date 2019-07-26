<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190725192034 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user_prestataire (id INT AUTO_INCREMENT NOT NULL, matricule_entreprise_id INT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, tel INT NOT NULL, email VARCHAR(255) NOT NULL, adress VARCHAR(255) NOT NULL, INDEX IDX_C9B9AD1599DFBC8B (matricule_entreprise_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entreprise_prestataire (id INT AUTO_INCREMENT NOT NULL, matricule VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, contact INT NOT NULL, adress VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_prestataire ADD CONSTRAINT FK_C9B9AD1599DFBC8B FOREIGN KEY (matricule_entreprise_id) REFERENCES entreprise_prestataire (id)');
        $this->addSql('ALTER TABLE compte_prestataire DROP FOREIGN KEY FK_4CB3EED469F8307B');
        $this->addSql('DROP INDEX UNIQ_4CB3EED469F8307B ON compte_prestataire');
        $this->addSql('ALTER TABLE compte_prestataire ADD matricule_id INT NOT NULL, ADD somme INT NOT NULL, DROP mat_entreprise_id, DROP solde');
        $this->addSql('ALTER TABLE compte_prestataire ADD CONSTRAINT FK_4CB3EED49AAADC05 FOREIGN KEY (matricule_id) REFERENCES entreprise_prestataire (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4CB3EED49AAADC05 ON compte_prestataire (matricule_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user_prestataire DROP FOREIGN KEY FK_C9B9AD1599DFBC8B');
        $this->addSql('ALTER TABLE compte_prestataire DROP FOREIGN KEY FK_4CB3EED49AAADC05');
        $this->addSql('DROP TABLE user_prestataire');
        $this->addSql('DROP TABLE entreprise_prestataire');
        $this->addSql('DROP INDEX UNIQ_4CB3EED49AAADC05 ON compte_prestataire');
        $this->addSql('ALTER TABLE compte_prestataire ADD mat_entreprise_id INT NOT NULL, ADD solde INT NOT NULL, DROP matricule_id, DROP somme');
        $this->addSql('ALTER TABLE compte_prestataire ADD CONSTRAINT FK_4CB3EED469F8307B FOREIGN KEY (mat_entreprise_id) REFERENCES entreprise_prestataire (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4CB3EED469F8307B ON compte_prestataire (mat_entreprise_id)');
    }
}
