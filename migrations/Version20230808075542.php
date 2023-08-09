<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230808075542 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comments (id_commentaire INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(50) DEFAULT NULL, grade INTEGER DEFAULT NULL, message CLOB DEFAULT NULL, accepted BOOLEAN DEFAULT False)');
        $this->addSql('CREATE TABLE configurations (id_configuration INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name CLOB DEFAULT NULL, value CLOB DEFAULT NULL)');
        $this->addSql('CREATE TABLE employees (id_employee INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(250) DEFAULT NULL, firstname VARCHAR(250) DEFAULT NULL, login VARCHAR(255) DEFAULT NULL, password CHAR(60) DEFAULT NULL, role_admin BOOLEAN DEFAULT NULL)');
        $this->addSql('CREATE TABLE messages (id_message INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(50) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, phone_number VARCHAR(15) DEFAULT NULL, subject VARCHAR(255) DEFAULT NULL, message CLOB DEFAULT NULL, id_occasion INTEGER DEFAULT NULL)');
        $this->addSql('CREATE TABLE openings_hours (id_opening_hours INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, day VARCHAR(8) DEFAULT NULL, hours VARCHAR(50) DEFAULT NULL)');
        $this->addSql('CREATE TABLE services (id_service INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, text VARCHAR(50) DEFAULT NULL)');
        $this->addSql('CREATE TABLE used_cars (id_occasion INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, model VARCHAR(250) DEFAULT NULL, price NUMERIC(6, 2) DEFAULT NULL, kilometres INTEGER DEFAULT NULL, year INTEGER DEFAULT NULL, picture_link VARCHAR(250) DEFAULT NULL)');
        $this->addSql('DROP TABLE user');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, email VARCHAR(180) NOT NULL COLLATE "BINARY", roles CLOB NOT NULL COLLATE "BINARY" --(DC2Type:json)
        , password VARCHAR(255) NOT NULL COLLATE "BINARY", name VARCHAR(255) NOT NULL COLLATE "BINARY", firstname VARCHAR(255) NOT NULL COLLATE "BINARY")');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
        $this->addSql('DROP TABLE comments');
        $this->addSql('DROP TABLE configurations');
        $this->addSql('DROP TABLE employees');
        $this->addSql('DROP TABLE messages');
        $this->addSql('DROP TABLE openings_hours');
        $this->addSql('DROP TABLE services');
        $this->addSql('DROP TABLE used_cars');
    }
}
