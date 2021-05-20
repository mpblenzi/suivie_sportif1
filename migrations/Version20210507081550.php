<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210507081550 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activite (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, utilisateur_id INTEGER NOT NULL, type_activite_id INTEGER NOT NULL, duree_a INTEGER NOT NULL, date_a DATE NOT NULL)');
        $this->addSql('CREATE TABLE calories_journalieres (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_utilisateur INTEGER NOT NULL, jour DATE NOT NULL, nb_calories INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE infos (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, utilisateur_id INTEGER NOT NULL, date_i DATE NOT NULL, taille_i INTEGER NOT NULL, poids_i DOUBLE PRECISION NOT NULL, nbre_pas_i INTEGER NOT NULL, calories_i INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE type_activite (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom_ta VARCHAR(255) NOT NULL, nbre_cal_heure_ta INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE utilisateur (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, login_u VARCHAR(255) NOT NULL, roles INTEGER NOT NULL, password VARCHAR(255) NOT NULL, nom_u VARCHAR(255) NOT NULL, anniversaire_u DATE NOT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE activite');
        $this->addSql('DROP TABLE calories_journalieres');
        $this->addSql('DROP TABLE infos');
        $this->addSql('DROP TABLE type_activite');
        $this->addSql('DROP TABLE utilisateur');
    }
}
