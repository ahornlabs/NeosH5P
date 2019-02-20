<?php
namespace Neos\Flow\Persistence\Doctrine\Migrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs! This block will be used as the migration description if getDescription() is not used.
 */
class Version20190220162850 extends AbstractMigration
{

    /**
     * @return string
     */
    public function getDescription()
    {
        return '';
    }

    /**
     * @param Schema $schema
     * @return void
     */
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on "mysql".');

        $this->addSql('ALTER TABLE sandstorm_neosh5p_domain_model_content ADD authors LONGTEXT DEFAULT NULL, ADD source LONGTEXT DEFAULT NULL, ADD yearfrom INT DEFAULT NULL, ADD yearto INT DEFAULT NULL, ADD licenseextras LONGTEXT DEFAULT NULL, ADD authorcomments LONGTEXT DEFAULT NULL, ADD changes LONGTEXT DEFAULT NULL, DROP keywords, DROP description, CHANGE contentid contentid INT AUTO_INCREMENT UNIQUE, CHANGE createdat createdat DATETIME NOT NULL, CHANGE updatedat updatedat DATETIME NOT NULL, CHANGE author licenseversion VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE sandstorm_neosh5p_domain_model_library ADD metadatasettings LONGTEXT NOT NULL, ADD addto LONGTEXT NOT NULL, CHANGE libraryid libraryid INT AUTO_INCREMENT UNIQUE, CHANGE createdat createdat DATETIME NOT NULL, CHANGE updatedat updatedat DATETIME NOT NULL');
    }

    /**
     * @param Schema $schema
     * @return void
     */
    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on "mysql".');

        $this->addSql('ALTER TABLE sandstorm_neosh5p_domain_model_content ADD keywords LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD description LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, DROP authors, DROP source, DROP yearfrom, DROP yearto, DROP licenseextras, DROP authorcomments, DROP changes, CHANGE contentid contentid INT AUTO_INCREMENT NOT NULL, CHANGE createdat createdat DATETIME NOT NULL, CHANGE updatedat updatedat DATETIME NOT NULL, CHANGE licenseversion author VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE sandstorm_neosh5p_domain_model_library DROP metadatasettings, DROP addto, CHANGE libraryid libraryid INT AUTO_INCREMENT NOT NULL, CHANGE createdat createdat DATETIME NOT NULL, CHANGE updatedat updatedat DATETIME NOT NULL');
    }
}
