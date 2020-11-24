<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201124092530 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_93BF4CAF60BB6FE6');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_93BF4CAFF347EFB');
        $this->addSql('DROP INDEX idx_93bf4caf60bb6fe6 ON commentaire');
        $this->addSql('CREATE INDEX IDX_67F068BC60BB6FE6 ON commentaire (auteur_id)');
        $this->addSql('DROP INDEX idx_93bf4caff347efb ON commentaire');
        $this->addSql('CREATE INDEX IDX_67F068BCF347EFB ON commentaire (produit_id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_93BF4CAF60BB6FE6 FOREIGN KEY (auteur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_93BF4CAFF347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC60BB6FE6');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCF347EFB');
        $this->addSql('DROP INDEX idx_67f068bc60bb6fe6 ON commentaire');
        $this->addSql('CREATE INDEX IDX_93BF4CAF60BB6FE6 ON commentaire (auteur_id)');
        $this->addSql('DROP INDEX idx_67f068bcf347efb ON commentaire');
        $this->addSql('CREATE INDEX IDX_93BF4CAFF347EFB ON commentaire (produit_id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC60BB6FE6 FOREIGN KEY (auteur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCF347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
    }
}
