<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191027162958 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE season (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE season_user (season_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_BDA4AD74EC001D1 (season_id), INDEX IDX_BDA4AD7A76ED395 (user_id), PRIMARY KEY(season_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE game (id INT AUTO_INCREMENT NOT NULL, game_winner_id INT DEFAULT NULL, regular_season_id INT DEFAULT NULL, playoff_season_id INT DEFAULT NULL, type INT NOT NULL, mode INT NOT NULL, sets_to_win INT NOT NULL, legs_to_set INT NOT NULL, INDEX IDX_232B318C8F5A15BA (game_winner_id), INDEX IDX_232B318CECAA0803 (regular_season_id), INDEX IDX_232B318C3A9FE1CD (playoff_season_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE game_user (game_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_6686BA65E48FD905 (game_id), INDEX IDX_6686BA65A76ED395 (user_id), PRIMARY KEY(game_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE leg (id INT AUTO_INCREMENT NOT NULL, game_set_id INT NOT NULL, leg_winner_id INT DEFAULT NULL, INDEX IDX_75D0804F6DCEA0D0 (game_set_id), INDEX IDX_75D0804FA1C9A057 (leg_winner_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `set` (id INT AUTO_INCREMENT NOT NULL, game_id INT NOT NULL, set_winner_id INT DEFAULT NULL, INDEX IDX_E61425DCE48FD905 (game_id), INDEX IDX_E61425DC5AA7172 (set_winner_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statistic (id INT AUTO_INCREMENT NOT NULL, player_id INT NOT NULL, dart_count INT DEFAULT NULL, checkout_chances INT DEFAULT NULL, stat_s1 INT DEFAULT NULL, stat_d1 INT DEFAULT NULL, stat_t1 INT DEFAULT NULL, stat_s2 INT DEFAULT NULL, stat_d2 INT DEFAULT NULL, stat_t2 INT DEFAULT NULL, stat_s3 INT DEFAULT NULL, stat_d3 INT DEFAULT NULL, stat_t3 INT DEFAULT NULL, stat_s4 INT DEFAULT NULL, stat_d4 INT DEFAULT NULL, stat_t4 INT DEFAULT NULL, stat_s5 INT DEFAULT NULL, stat_d5 INT DEFAULT NULL, stat_t5 INT DEFAULT NULL, stat_s6 INT DEFAULT NULL, stat_d6 INT DEFAULT NULL, stat_t6 INT DEFAULT NULL, stat_s7 INT DEFAULT NULL, stat_d7 INT DEFAULT NULL, stat_t7 INT DEFAULT NULL, stat_s8 INT DEFAULT NULL, stat_d8 INT DEFAULT NULL, stat_t8 INT DEFAULT NULL, stat_s9 INT DEFAULT NULL, stat_d9 INT DEFAULT NULL, stat_t9 INT DEFAULT NULL, stat_s10 INT DEFAULT NULL, stat_d10 INT DEFAULT NULL, stat_t10 INT DEFAULT NULL, stat_s11 INT DEFAULT NULL, stat_d11 INT DEFAULT NULL, stat_t11 INT DEFAULT NULL, stat_s12 INT DEFAULT NULL, stat_d12 INT DEFAULT NULL, stat_t12 INT DEFAULT NULL, stat_s13 INT DEFAULT NULL, stat_d13 INT DEFAULT NULL, stat_t13 INT DEFAULT NULL, stat_s14 INT DEFAULT NULL, stat_d14 INT DEFAULT NULL, stat_t14 INT DEFAULT NULL, stat_s15 INT DEFAULT NULL, stat_d15 INT DEFAULT NULL, stat_t15 INT DEFAULT NULL, stat_s16 INT DEFAULT NULL, stat_d16 INT DEFAULT NULL, stat_t16 INT DEFAULT NULL, stat_s17 INT DEFAULT NULL, stat_d17 INT DEFAULT NULL, stat_t17 INT DEFAULT NULL, stat_s18 INT DEFAULT NULL, stat_d18 INT DEFAULT NULL, stat_t18 INT DEFAULT NULL, stat_s19 INT DEFAULT NULL, stat_d19 INT DEFAULT NULL, stat_t19 INT DEFAULT NULL, stat_s20 INT DEFAULT NULL, stat_d20 INT DEFAULT NULL, stat_t20 INT DEFAULT NULL, stat_s25 INT DEFAULT NULL, stat_d25 INT DEFAULT NULL, INDEX IDX_649B469C99E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE season_user ADD CONSTRAINT FK_BDA4AD74EC001D1 FOREIGN KEY (season_id) REFERENCES season (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE season_user ADD CONSTRAINT FK_BDA4AD7A76ED395 FOREIGN KEY (user_id) REFERENCES fos_user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE game ADD CONSTRAINT FK_232B318C8F5A15BA FOREIGN KEY (game_winner_id) REFERENCES fos_user (id)');
        $this->addSql('ALTER TABLE game ADD CONSTRAINT FK_232B318CECAA0803 FOREIGN KEY (regular_season_id) REFERENCES season (id)');
        $this->addSql('ALTER TABLE game ADD CONSTRAINT FK_232B318C3A9FE1CD FOREIGN KEY (playoff_season_id) REFERENCES season (id)');
        $this->addSql('ALTER TABLE game_user ADD CONSTRAINT FK_6686BA65E48FD905 FOREIGN KEY (game_id) REFERENCES game (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE game_user ADD CONSTRAINT FK_6686BA65A76ED395 FOREIGN KEY (user_id) REFERENCES fos_user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE leg ADD CONSTRAINT FK_75D0804F6DCEA0D0 FOREIGN KEY (game_set_id) REFERENCES `set` (id)');
        $this->addSql('ALTER TABLE leg ADD CONSTRAINT FK_75D0804FA1C9A057 FOREIGN KEY (leg_winner_id) REFERENCES fos_user (id)');
        $this->addSql('ALTER TABLE `set` ADD CONSTRAINT FK_E61425DCE48FD905 FOREIGN KEY (game_id) REFERENCES game (id)');
        $this->addSql('ALTER TABLE `set` ADD CONSTRAINT FK_E61425DC5AA7172 FOREIGN KEY (set_winner_id) REFERENCES fos_user (id)');
        $this->addSql('ALTER TABLE statistic ADD CONSTRAINT FK_649B469C99E6F5DF FOREIGN KEY (player_id) REFERENCES fos_user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE season_user DROP FOREIGN KEY FK_BDA4AD74EC001D1');
        $this->addSql('ALTER TABLE game DROP FOREIGN KEY FK_232B318CECAA0803');
        $this->addSql('ALTER TABLE game DROP FOREIGN KEY FK_232B318C3A9FE1CD');
        $this->addSql('ALTER TABLE game_user DROP FOREIGN KEY FK_6686BA65E48FD905');
        $this->addSql('ALTER TABLE `set` DROP FOREIGN KEY FK_E61425DCE48FD905');
        $this->addSql('ALTER TABLE leg DROP FOREIGN KEY FK_75D0804F6DCEA0D0');
        $this->addSql('DROP TABLE season');
        $this->addSql('DROP TABLE season_user');
        $this->addSql('DROP TABLE game');
        $this->addSql('DROP TABLE game_user');
        $this->addSql('DROP TABLE leg');
        $this->addSql('DROP TABLE `set`');
        $this->addSql('DROP TABLE statistic');
    }
}
