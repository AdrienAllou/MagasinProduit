<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201122155240 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commantaire (id INT AUTO_INCREMENT NOT NULL, auteur_id INT DEFAULT NULL, produit_id INT DEFAULT NULL, message LONGTEXT NOT NULL, date_ecrit DATE NOT NULL, INDEX IDX_93BF4CAF60BB6FE6 (auteur_id), INDEX IDX_93BF4CAFF347EFB (produit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commantaire ADD CONSTRAINT FK_93BF4CAF60BB6FE6 FOREIGN KEY (auteur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commantaire ADD CONSTRAINT FK_93BF4CAFF347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE user ADD adresse VARCHAR(255) NOT NULL, ADD email VARCHAR(255) NOT NULL, ADD ville VARCHAR(255) NOT NULL, ADD code_postal NUMERIC(5, 0) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE commantaire');
        $this->addSql('ALTER TABLE user DROP adresse, DROP email, DROP ville, DROP code_postal');
    }
}
