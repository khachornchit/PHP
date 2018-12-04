<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181204093629 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE actor (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, last_update DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE address (id INT AUTO_INCREMENT NOT NULL, city_id_id INT DEFAULT NULL, address VARCHAR(255) NOT NULL, address2 VARCHAR(255) DEFAULT NULL, district VARCHAR(20) NOT NULL, last_update DATETIME NOT NULL, location LONGBLOB NOT NULL, phone VARCHAR(20) NOT NULL, postal_code VARCHAR(10) DEFAULT NULL, INDEX IDX_D4E6F813CCE3900 (city_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(25) NOT NULL, last_update DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE city (id INT AUTO_INCREMENT NOT NULL, country_id_id INT NOT NULL, city VARCHAR(50) NOT NULL, last_update DATETIME NOT NULL, INDEX IDX_2D5B0234D8A48BBD (country_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE country (id INT AUTO_INCREMENT NOT NULL, country VARCHAR(50) NOT NULL, last_update DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE customer (id INT AUTO_INCREMENT NOT NULL, address_id_id INT DEFAULT NULL, store_id_id INT DEFAULT NULL, active SMALLINT NOT NULL, create_date DATETIME NOT NULL, email VARCHAR(50) DEFAULT NULL, first_name VARCHAR(45) NOT NULL, last_name VARCHAR(45) NOT NULL, last_update DATETIME NOT NULL, UNIQUE INDEX UNIQ_81398E0948E1E977 (address_id_id), INDEX IDX_81398E0937AC84E (store_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE film (id INT AUTO_INCREMENT NOT NULL, original_language_id_id INT DEFAULT NULL, category_id_id INT DEFAULT NULL, description LONGTEXT NOT NULL, last_update DATETIME NOT NULL, length INT DEFAULT NULL, rating VARCHAR(10) DEFAULT NULL, release_year INT DEFAULT NULL, rental_rate INT NOT NULL, rental_duration INT NOT NULL, replacement_cost DOUBLE PRECISION NOT NULL, special_features VARCHAR(50) DEFAULT NULL, title VARCHAR(255) NOT NULL, INDEX IDX_8244BE22FB07B7BA (original_language_id_id), INDEX IDX_8244BE229777D11E (category_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE film_actor (film_id INT NOT NULL, actor_id INT NOT NULL, INDEX IDX_DD19A8A9567F5183 (film_id), INDEX IDX_DD19A8A910DAF24A (actor_id), PRIMARY KEY(film_id, actor_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE film_text (id INT AUTO_INCREMENT NOT NULL, film_id_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, UNIQUE INDEX UNIQ_5E244DC4E6286007 (film_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inventory (id INT AUTO_INCREMENT NOT NULL, film_id_id INT NOT NULL, store_id_id INT DEFAULT NULL, last_update DATETIME NOT NULL, INDEX IDX_B12D4A36E6286007 (film_id_id), INDEX IDX_B12D4A3637AC84E (store_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE language (id INT AUTO_INCREMENT NOT NULL, film_id INT DEFAULT NULL, name VARCHAR(20) NOT NULL, last_update DATETIME NOT NULL, INDEX IDX_D4DB71B5567F5183 (film_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE payment (id INT AUTO_INCREMENT NOT NULL, customer_id_id INT DEFAULT NULL, rental_id_id INT DEFAULT NULL, amount DOUBLE PRECISION NOT NULL, last_update DATETIME NOT NULL, payment_date DATETIME NOT NULL, INDEX IDX_6D28840DB171EB6C (customer_id_id), INDEX IDX_6D28840DE4AF10B8 (rental_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rental (id INT AUTO_INCREMENT NOT NULL, customer_id_id INT DEFAULT NULL, inventory_id_id INT DEFAULT NULL, last_update DATETIME NOT NULL, rental_date DATETIME NOT NULL, return_date DATETIME DEFAULT NULL, INDEX IDX_1619C27DB171EB6C (customer_id_id), INDEX IDX_1619C27DA3D83557 (inventory_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE staff (id INT AUTO_INCREMENT NOT NULL, address_id_id INT DEFAULT NULL, rental_id INT DEFAULT NULL, payment_id INT DEFAULT NULL, active SMALLINT NOT NULL, email VARCHAR(50) DEFAULT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, last_update DATETIME NOT NULL, password VARCHAR(20) DEFAULT NULL, picture LONGBLOB DEFAULT NULL, username VARCHAR(16) NOT NULL, INDEX IDX_426EF39248E1E977 (address_id_id), INDEX IDX_426EF392A7CF2329 (rental_id), INDEX IDX_426EF3924C3A3BB (payment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE store (id INT AUTO_INCREMENT NOT NULL, address_id_id INT DEFAULT NULL, manager_staff_id_id INT DEFAULT NULL, last_update DATETIME NOT NULL, UNIQUE INDEX UNIQ_FF57587748E1E977 (address_id_id), UNIQUE INDEX UNIQ_FF5758777FE2E20 (manager_staff_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE address ADD CONSTRAINT FK_D4E6F813CCE3900 FOREIGN KEY (city_id_id) REFERENCES city (id)');
        $this->addSql('ALTER TABLE city ADD CONSTRAINT FK_2D5B0234D8A48BBD FOREIGN KEY (country_id_id) REFERENCES country (id)');
        $this->addSql('ALTER TABLE customer ADD CONSTRAINT FK_81398E0948E1E977 FOREIGN KEY (address_id_id) REFERENCES address (id)');
        $this->addSql('ALTER TABLE customer ADD CONSTRAINT FK_81398E0937AC84E FOREIGN KEY (store_id_id) REFERENCES store (id)');
        $this->addSql('ALTER TABLE film ADD CONSTRAINT FK_8244BE22FB07B7BA FOREIGN KEY (original_language_id_id) REFERENCES language (id)');
        $this->addSql('ALTER TABLE film ADD CONSTRAINT FK_8244BE229777D11E FOREIGN KEY (category_id_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE film_actor ADD CONSTRAINT FK_DD19A8A9567F5183 FOREIGN KEY (film_id) REFERENCES film (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE film_actor ADD CONSTRAINT FK_DD19A8A910DAF24A FOREIGN KEY (actor_id) REFERENCES actor (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE film_text ADD CONSTRAINT FK_5E244DC4E6286007 FOREIGN KEY (film_id_id) REFERENCES film (id)');
        $this->addSql('ALTER TABLE inventory ADD CONSTRAINT FK_B12D4A36E6286007 FOREIGN KEY (film_id_id) REFERENCES film (id)');
        $this->addSql('ALTER TABLE inventory ADD CONSTRAINT FK_B12D4A3637AC84E FOREIGN KEY (store_id_id) REFERENCES store (id)');
        $this->addSql('ALTER TABLE language ADD CONSTRAINT FK_D4DB71B5567F5183 FOREIGN KEY (film_id) REFERENCES film (id)');
        $this->addSql('ALTER TABLE payment ADD CONSTRAINT FK_6D28840DB171EB6C FOREIGN KEY (customer_id_id) REFERENCES customer (id)');
        $this->addSql('ALTER TABLE payment ADD CONSTRAINT FK_6D28840DE4AF10B8 FOREIGN KEY (rental_id_id) REFERENCES rental (id)');
        $this->addSql('ALTER TABLE rental ADD CONSTRAINT FK_1619C27DB171EB6C FOREIGN KEY (customer_id_id) REFERENCES customer (id)');
        $this->addSql('ALTER TABLE rental ADD CONSTRAINT FK_1619C27DA3D83557 FOREIGN KEY (inventory_id_id) REFERENCES inventory (id)');
        $this->addSql('ALTER TABLE staff ADD CONSTRAINT FK_426EF39248E1E977 FOREIGN KEY (address_id_id) REFERENCES address (id)');
        $this->addSql('ALTER TABLE staff ADD CONSTRAINT FK_426EF392A7CF2329 FOREIGN KEY (rental_id) REFERENCES rental (id)');
        $this->addSql('ALTER TABLE staff ADD CONSTRAINT FK_426EF3924C3A3BB FOREIGN KEY (payment_id) REFERENCES payment (id)');
        $this->addSql('ALTER TABLE store ADD CONSTRAINT FK_FF57587748E1E977 FOREIGN KEY (address_id_id) REFERENCES address (id)');
        $this->addSql('ALTER TABLE store ADD CONSTRAINT FK_FF5758777FE2E20 FOREIGN KEY (manager_staff_id_id) REFERENCES staff (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE film_actor DROP FOREIGN KEY FK_DD19A8A910DAF24A');
        $this->addSql('ALTER TABLE customer DROP FOREIGN KEY FK_81398E0948E1E977');
        $this->addSql('ALTER TABLE staff DROP FOREIGN KEY FK_426EF39248E1E977');
        $this->addSql('ALTER TABLE store DROP FOREIGN KEY FK_FF57587748E1E977');
        $this->addSql('ALTER TABLE film DROP FOREIGN KEY FK_8244BE229777D11E');
        $this->addSql('ALTER TABLE address DROP FOREIGN KEY FK_D4E6F813CCE3900');
        $this->addSql('ALTER TABLE city DROP FOREIGN KEY FK_2D5B0234D8A48BBD');
        $this->addSql('ALTER TABLE payment DROP FOREIGN KEY FK_6D28840DB171EB6C');
        $this->addSql('ALTER TABLE rental DROP FOREIGN KEY FK_1619C27DB171EB6C');
        $this->addSql('ALTER TABLE film_actor DROP FOREIGN KEY FK_DD19A8A9567F5183');
        $this->addSql('ALTER TABLE film_text DROP FOREIGN KEY FK_5E244DC4E6286007');
        $this->addSql('ALTER TABLE inventory DROP FOREIGN KEY FK_B12D4A36E6286007');
        $this->addSql('ALTER TABLE language DROP FOREIGN KEY FK_D4DB71B5567F5183');
        $this->addSql('ALTER TABLE rental DROP FOREIGN KEY FK_1619C27DA3D83557');
        $this->addSql('ALTER TABLE film DROP FOREIGN KEY FK_8244BE22FB07B7BA');
        $this->addSql('ALTER TABLE staff DROP FOREIGN KEY FK_426EF3924C3A3BB');
        $this->addSql('ALTER TABLE payment DROP FOREIGN KEY FK_6D28840DE4AF10B8');
        $this->addSql('ALTER TABLE staff DROP FOREIGN KEY FK_426EF392A7CF2329');
        $this->addSql('ALTER TABLE store DROP FOREIGN KEY FK_FF5758777FE2E20');
        $this->addSql('ALTER TABLE customer DROP FOREIGN KEY FK_81398E0937AC84E');
        $this->addSql('ALTER TABLE inventory DROP FOREIGN KEY FK_B12D4A3637AC84E');
        $this->addSql('DROP TABLE actor');
        $this->addSql('DROP TABLE address');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE city');
        $this->addSql('DROP TABLE country');
        $this->addSql('DROP TABLE customer');
        $this->addSql('DROP TABLE film');
        $this->addSql('DROP TABLE film_actor');
        $this->addSql('DROP TABLE film_text');
        $this->addSql('DROP TABLE inventory');
        $this->addSql('DROP TABLE language');
        $this->addSql('DROP TABLE payment');
        $this->addSql('DROP TABLE rental');
        $this->addSql('DROP TABLE staff');
        $this->addSql('DROP TABLE store');
        $this->addSql('DROP TABLE user');
    }
}
