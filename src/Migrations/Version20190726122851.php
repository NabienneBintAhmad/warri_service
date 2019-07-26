<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190726122851 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE transaction (id INT AUTO_INCREMENT NOT NULL, mat_entreprise_id INT NOT NULL, compte_prestataire_id INT NOT NULL, transaction_type VARCHAR(255) NOT NULL, date_transaction DATETIME NOT NULL, INDEX IDX_723705D169F8307B (mat_entreprise_id), INDEX IDX_723705D17E5464C4 (compte_prestataire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_prestataire (id INT AUTO_INCREMENT NOT NULL, mat_entreprise_id INT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, tel INT NOT NULL, email VARCHAR(255) NOT NULL, adress VARCHAR(255) NOT NULL, INDEX IDX_C9B9AD1569F8307B (mat_entreprise_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entreprise_prestataire (id INT AUTO_INCREMENT NOT NULL, nom_complet VARCHAR(255) NOT NULL, matricule VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, contact INT NOT NULL, adress VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compte_prestataire (id INT AUTO_INCREMENT NOT NULL, mat_entreprise_id INT NOT NULL, somme INT NOT NULL, UNIQUE INDEX UNIQ_4CB3EED469F8307B (mat_entreprise_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D169F8307B FOREIGN KEY (mat_entreprise_id) REFERENCES entreprise_prestataire (id)');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D17E5464C4 FOREIGN KEY (compte_prestataire_id) REFERENCES compte_prestataire (id)');
        $this->addSql('ALTER TABLE user_prestataire ADD CONSTRAINT FK_C9B9AD1569F8307B FOREIGN KEY (mat_entreprise_id) REFERENCES entreprise_prestataire (id)');
        $this->addSql('ALTER TABLE compte_prestataire ADD CONSTRAINT FK_4CB3EED469F8307B FOREIGN KEY (mat_entreprise_id) REFERENCES entreprise_prestataire (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D169F8307B');
        $this->addSql('ALTER TABLE user_prestataire DROP FOREIGN KEY FK_C9B9AD1569F8307B');
        $this->addSql('ALTER TABLE compte_prestataire DROP FOREIGN KEY FK_4CB3EED469F8307B');
        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D17E5464C4');
        $this->addSql('DROP TABLE transaction');
        $this->addSql('DROP TABLE user_prestataire');
        $this->addSql('DROP TABLE entreprise_prestataire');
        $this->addSql('DROP TABLE compte_prestataire');
    }
}
