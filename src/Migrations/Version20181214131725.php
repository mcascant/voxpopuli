<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181214131725 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TABLE comments (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(255) NOT NULL, body CLOB NOT NULL, user_id INTEGER NOT NULL)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__post AS SELECT id, title, text, pub_date, user_id FROM post');
        $this->addSql('DROP TABLE post');
        $this->addSql('CREATE TABLE post (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(255) NOT NULL COLLATE BINARY, text CLOB NOT NULL COLLATE BINARY, user_id INTEGER NOT NULL, pub_date INTEGER NOT NULL, minimum_votes INTEGER DEFAULT NULL, tag_list VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO post (id, title, text, pub_date, user_id) SELECT id, title, text, pub_date, user_id FROM __temp__post');
        $this->addSql('DROP TABLE __temp__post');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP TABLE comments');
        $this->addSql('CREATE TEMPORARY TABLE __temp__post AS SELECT id, title, text, pub_date, user_id FROM post');
        $this->addSql('DROP TABLE post');
        $this->addSql('CREATE TABLE post (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(255) NOT NULL, text CLOB NOT NULL, user_id INTEGER NOT NULL, pub_date DATETIME NOT NULL)');
        $this->addSql('INSERT INTO post (id, title, text, pub_date, user_id) SELECT id, title, text, pub_date, user_id FROM __temp__post');
        $this->addSql('DROP TABLE __temp__post');
    }
}
