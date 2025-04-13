<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250411193217 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE enseigne (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, numero_telephone VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, photo VARCHAR(255) DEFAULT NULL, description LONGTEXT NOT NULL, note_seuil DOUBLE PRECISION NOT NULL, points_cle JSON DEFAULT NULL, gps_location VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE enseigne_categorie (enseigne_id INT NOT NULL, categorie_id INT NOT NULL, INDEX IDX_877C03BD6C2A0A71 (enseigne_id), INDEX IDX_877C03BDBCF5E72D (categorie_id), PRIMARY KEY(enseigne_id, categorie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE enseigne_user_favoris (enseigne_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_B492FB356C2A0A71 (enseigne_id), INDEX IDX_B492FB35A76ED395 (user_id), PRIMARY KEY(enseigne_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE horaire (id INT AUTO_INCREMENT NOT NULL, enseigne_id INT NOT NULL, jour VARCHAR(255) NOT NULL, heure_ouverture TIME NOT NULL, heure_fermeture TIME NOT NULL, INDEX IDX_BBC83DB66C2A0A71 (enseigne_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE notation (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, enseigne_id INT NOT NULL, note DOUBLE PRECISION NOT NULL, commentaire LONGTEXT DEFAULT NULL, date_creation DATETIME NOT NULL, INDEX IDX_268BC95A76ED395 (user_id), INDEX IDX_268BC956C2A0A71 (enseigne_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, avatar VARCHAR(255) DEFAULT NULL, oauth_id VARCHAR(255) DEFAULT NULL, oauth_provider VARCHAR(50) DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, ville VARCHAR(255) DEFAULT NULL, code_postal VARCHAR(5) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE enseigne_categorie ADD CONSTRAINT FK_877C03BD6C2A0A71 FOREIGN KEY (enseigne_id) REFERENCES enseigne (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE enseigne_categorie ADD CONSTRAINT FK_877C03BDBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE enseigne_user_favoris ADD CONSTRAINT FK_B492FB356C2A0A71 FOREIGN KEY (enseigne_id) REFERENCES enseigne (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE enseigne_user_favoris ADD CONSTRAINT FK_B492FB35A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE horaire ADD CONSTRAINT FK_BBC83DB66C2A0A71 FOREIGN KEY (enseigne_id) REFERENCES enseigne (id)');
        $this->addSql('ALTER TABLE notation ADD CONSTRAINT FK_268BC95A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE notation ADD CONSTRAINT FK_268BC956C2A0A71 FOREIGN KEY (enseigne_id) REFERENCES enseigne (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE enseigne_categorie DROP FOREIGN KEY FK_877C03BD6C2A0A71');
        $this->addSql('ALTER TABLE enseigne_categorie DROP FOREIGN KEY FK_877C03BDBCF5E72D');
        $this->addSql('ALTER TABLE enseigne_user_favoris DROP FOREIGN KEY FK_B492FB356C2A0A71');
        $this->addSql('ALTER TABLE enseigne_user_favoris DROP FOREIGN KEY FK_B492FB35A76ED395');
        $this->addSql('ALTER TABLE horaire DROP FOREIGN KEY FK_BBC83DB66C2A0A71');
        $this->addSql('ALTER TABLE notation DROP FOREIGN KEY FK_268BC95A76ED395');
        $this->addSql('ALTER TABLE notation DROP FOREIGN KEY FK_268BC956C2A0A71');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE enseigne');
        $this->addSql('DROP TABLE enseigne_categorie');
        $this->addSql('DROP TABLE enseigne_user_favoris');
        $this->addSql('DROP TABLE horaire');
        $this->addSql('DROP TABLE notation');
        $this->addSql('DROP TABLE `user`');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
