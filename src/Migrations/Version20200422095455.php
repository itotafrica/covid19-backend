<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200422095455 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE alert CHANGE lat lat VARCHAR(255) DEFAULT NULL, CHANGE lng lng VARCHAR(255) DEFAULT NULL, CHANGE status status VARCHAR(255) DEFAULT NULL, CHANGE age age INT DEFAULT NULL, CHANGE sex sex VARCHAR(1) DEFAULT NULL, CHANGE well_known_center well_known_center TINYINT(1) DEFAULT NULL, CHANGE infected_relatives infected_relatives TINYINT(1) DEFAULT NULL, CHANGE gestures_barriers_level gestures_barriers_level INT DEFAULT NULL');
        $this->addSql('ALTER TABLE article CHANGE image image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE cases ADD region LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE doctor CHANGE profile profile VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE alert CHANGE lat lat VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE lng lng VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE status status VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE age age INT DEFAULT NULL, CHANGE sex sex VARCHAR(1) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE well_known_center well_known_center TINYINT(1) DEFAULT \'NULL\', CHANGE infected_relatives infected_relatives TINYINT(1) DEFAULT \'NULL\', CHANGE gestures_barriers_level gestures_barriers_level INT DEFAULT NULL');
        $this->addSql('ALTER TABLE article CHANGE image image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE cases DROP region');
        $this->addSql('ALTER TABLE doctor CHANGE profile profile VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
    }
}
