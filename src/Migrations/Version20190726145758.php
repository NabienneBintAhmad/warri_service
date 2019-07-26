<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190726145758 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D12FC0CB0F');
        $this->addSql('DROP INDEX IDX_723705D12FC0CB0F ON transaction');
        $this->addSql('ALTER TABLE transaction ADD mat_entreprise_id INT NOT NULL, ADD compte_prestataire_id INT NOT NULL, ADD transaction_type VARCHAR(255) NOT NULL, ADD date_transaction DATETIME NOT NULL, DROP transaction_id, DROP depot, DROP retrait, DROP date_depot, DROP date_retrait');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D169F8307B FOREIGN KEY (mat_entreprise_id) REFERENCES entreprise_prestataire (id)');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D17E5464C4 FOREIGN KEY (compte_prestataire_id) REFERENCES compte_prestataire (id)');
        $this->addSql('CREATE INDEX IDX_723705D169F8307B ON transaction (mat_entreprise_id)');
        $this->addSql('CREATE INDEX IDX_723705D17E5464C4 ON transaction (compte_prestataire_id)');
        $this->addSql('ALTER TABLE user_prestataire DROP FOREIGN KEY FK_C9B9AD1539F847FA');
        $this->addSql('DROP INDEX IDX_C9B9AD1539F847FA ON user_prestataire');
        $this->addSql('ALTER TABLE user_prestataire ADD mat_entreprise_id INT NOT NULL, ADD tel INT NOT NULL, DROP mat_prestataire_id, DROP telephone');
        $this->addSql('ALTER TABLE user_prestataire ADD CONSTRAINT FK_C9B9AD1569F8307B FOREIGN KEY (mat_entreprise_id) REFERENCES entreprise_prestataire (id)');
        $this->addSql('CREATE INDEX IDX_C9B9AD1569F8307B ON user_prestataire (mat_entreprise_id)');
        $this->addSql('ALTER TABLE compte_prestataire CHANGE solde somme INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE compte_prestataire CHANGE somme solde INT NOT NULL');
        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D169F8307B');
        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D17E5464C4');
        $this->addSql('DROP INDEX IDX_723705D169F8307B ON transaction');
        $this->addSql('DROP INDEX IDX_723705D17E5464C4 ON transaction');
        $this->addSql('ALTER TABLE transaction ADD transaction_id INT NOT NULL, ADD depot INT NOT NULL, ADD retrait INT NOT NULL, ADD date_retrait DATETIME NOT NULL, DROP mat_entreprise_id, DROP compte_prestataire_id, DROP transaction_type, CHANGE date_transaction date_depot DATETIME NOT NULL');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D12FC0CB0F FOREIGN KEY (transaction_id) REFERENCES compte_prestataire (id)');
        $this->addSql('CREATE INDEX IDX_723705D12FC0CB0F ON transaction (transaction_id)');
        $this->addSql('ALTER TABLE user_prestataire DROP FOREIGN KEY FK_C9B9AD1569F8307B');
        $this->addSql('DROP INDEX IDX_C9B9AD1569F8307B ON user_prestataire');
        $this->addSql('ALTER TABLE user_prestataire ADD mat_prestataire_id INT NOT NULL, ADD telephone INT NOT NULL, DROP mat_entreprise_id, DROP tel');
        $this->addSql('ALTER TABLE user_prestataire ADD CONSTRAINT FK_C9B9AD1539F847FA FOREIGN KEY (mat_prestataire_id) REFERENCES entreprise_prestataire (id)');
        $this->addSql('CREATE INDEX IDX_C9B9AD1539F847FA ON user_prestataire (mat_prestataire_id)');
    }
}
