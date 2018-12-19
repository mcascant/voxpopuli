<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181218153019 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE vote_user (vote_id INT NOT NULL, user_id CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', INDEX IDX_3AF1277872DCDAFC (vote_id), INDEX IDX_3AF12778A76ED395 (user_id), PRIMARY KEY(vote_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vote_post (vote_id INT NOT NULL, post_id INT NOT NULL, INDEX IDX_EDE89DBC72DCDAFC (vote_id), INDEX IDX_EDE89DBC4B89032C (post_id), PRIMARY KEY(vote_id, post_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE vote_user ADD CONSTRAINT FK_3AF1277872DCDAFC FOREIGN KEY (vote_id) REFERENCES vote (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vote_user ADD CONSTRAINT FK_3AF12778A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vote_post ADD CONSTRAINT FK_EDE89DBC72DCDAFC FOREIGN KEY (vote_id) REFERENCES vote (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vote_post ADD CONSTRAINT FK_EDE89DBC4B89032C FOREIGN KEY (post_id) REFERENCES post (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vote DROP FOREIGN KEY FK_5A1085644B89032C');
        $this->addSql('ALTER TABLE vote DROP FOREIGN KEY FK_5A108564A76ED395');
        $this->addSql('DROP INDEX IDX_5A1085644B89032C ON vote');
        $this->addSql('DROP INDEX IDX_5A108564A76ED395 ON vote');
        $this->addSql('ALTER TABLE vote DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE vote ADD id INT AUTO_INCREMENT NOT NULL, DROP post_id, DROP user_id');
        $this->addSql('ALTER TABLE vote ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE vote_user');
        $this->addSql('DROP TABLE vote_post');
        $this->addSql('ALTER TABLE vote MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE vote DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE vote ADD post_id INT NOT NULL, ADD user_id CHAR(36) NOT NULL COLLATE utf8mb4_unicode_ci COMMENT \'(DC2Type:guid)\', DROP id');
        $this->addSql('ALTER TABLE vote ADD CONSTRAINT FK_5A1085644B89032C FOREIGN KEY (post_id) REFERENCES post (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vote ADD CONSTRAINT FK_5A108564A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_5A1085644B89032C ON vote (post_id)');
        $this->addSql('CREATE INDEX IDX_5A108564A76ED395 ON vote (user_id)');
        $this->addSql('ALTER TABLE vote ADD PRIMARY KEY (post_id, user_id)');
    }
}
