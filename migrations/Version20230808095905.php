<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230808095905 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, firstname VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
        $this->addSql('DROP TABLE comments');
        $this->addSql('DROP TABLE configurations');
        $this->addSql('DROP TABLE employees');
        $this->addSql('DROP TABLE messages');
        $this->addSql('DROP TABLE openings_hours');
        $this->addSql('DROP TABLE services');
        $this->addSql('DROP TABLE used_cars');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comments (id_commentaire INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(50) DEFAULT NULL COLLATE "BINARY", grade INTEGER DEFAULT NULL, message CLOB DEFAULT NULL COLLATE "BINARY", accepted BOOLEAN DEFAULT False)');
        $this->addSql('CREATE TABLE configurations (id_configuration INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name CLOB DEFAULT NULL COLLATE "BINARY", value CLOB DEFAULT NULL COLLATE "BINARY")');
        $this->addSql('CREATE TABLE employees (id_employee INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(250) DEFAULT NULL COLLATE "BINARY", firstname VARCHAR(250) DEFAULT NULL COLLATE "BINARY", login VARCHAR(255) DEFAULT NULL COLLATE "BINARY", password CHAR(60) DEFAULT NULL COLLATE "BINARY", role_admin BOOLEAN DEFAULT NULL)');
        $this->addSql('CREATE TABLE messages (id_message INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(50) DEFAULT NULL COLLATE "BINARY", email VARCHAR(255) DEFAULT NULL COLLATE "BINARY", phone_number VARCHAR(15) DEFAULT NULL COLLATE "BINARY", subject VARCHAR(255) DEFAULT NULL COLLATE "BINARY", message CLOB DEFAULT NULL COLLATE "BINARY", id_occasion INTEGER DEFAULT NULL)');
        $this->addSql('CREATE TABLE openings_hours (id_opening_hours INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, day VARCHAR(8) DEFAULT NULL COLLATE "BINARY", hours VARCHAR(50) DEFAULT NULL COLLATE "BINARY")');
        $this->addSql('CREATE TABLE services (id_service INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, text VARCHAR(50) DEFAULT NULL COLLATE "BINARY")');
        $this->addSql('CREATE TABLE used_cars (id_occasion INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, model VARCHAR(250) DEFAULT NULL COLLATE "BINARY", price NUMERIC(6, 2) DEFAULT NULL, kilometres INTEGER DEFAULT NULL, year INTEGER DEFAULT NULL, picture_link VARCHAR(250) DEFAULT NULL COLLATE "BINARY")');
        $this->addSql('DROP TABLE user');
    }
}
