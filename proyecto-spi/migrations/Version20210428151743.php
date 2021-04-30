<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210428151743 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE almacen DROP FOREIGN KEY FK_1A0FEBCCDB38439E');
        $this->addSql('ALTER TABLE almacen ADD nombre VARCHAR(255) NOT NULL, ADD descripcion LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE almacen ADD CONSTRAINT FK_1A0FEBCCDB38439E FOREIGN KEY (usuario_id) REFERENCES Usuario (id_usuario) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE compra DROP FOREIGN KEY FK_996D34C9CB305D73');
        $this->addSql('ALTER TABLE compra DROP FOREIGN KEY FK_996D34C9DB38439E');
        $this->addSql('ALTER TABLE compra ADD CONSTRAINT FK_996D34C9CB305D73 FOREIGN KEY (proveedor_id) REFERENCES Proveedor (id_proveedor) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE compra ADD CONSTRAINT FK_996D34C9DB38439E FOREIGN KEY (usuario_id) REFERENCES Usuario (id_usuario) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE movimientoalmacen DROP FOREIGN KEY FK_6FF55ADDB38439E');
        $this->addSql('ALTER TABLE movimientoalmacen ADD CONSTRAINT FK_6FF55ADDB38439E FOREIGN KEY (usuario_id) REFERENCES Usuario (id_usuario) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE productocomprado DROP FOREIGN KEY FK_547710727645698E');
        $this->addSql('ALTER TABLE productocomprado ADD CONSTRAINT FK_547710727645698E FOREIGN KEY (producto_id) REFERENCES Producto (id_producto) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE productoexistencia DROP FOREIGN KEY FK_FA8EDBFD7645698E');
        $this->addSql('ALTER TABLE productoexistencia ADD CONSTRAINT FK_FA8EDBFD7645698E FOREIGN KEY (producto_id) REFERENCES Producto (id_producto) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE productomovimiento DROP FOREIGN KEY FK_61E9BFAD7645698E');
        $this->addSql('ALTER TABLE productomovimiento ADD CONSTRAINT FK_61E9BFAD7645698E FOREIGN KEY (producto_id) REFERENCES Producto (id_producto) ON DELETE SET NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE Almacen DROP FOREIGN KEY FK_1A0FEBCCDB38439E');
        $this->addSql('ALTER TABLE Almacen DROP nombre, DROP descripcion');
        $this->addSql('ALTER TABLE Almacen ADD CONSTRAINT FK_1A0FEBCCDB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id_usuario) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE Compra DROP FOREIGN KEY FK_996D34C9DB38439E');
        $this->addSql('ALTER TABLE Compra DROP FOREIGN KEY FK_996D34C9CB305D73');
        $this->addSql('ALTER TABLE Compra ADD CONSTRAINT FK_996D34C9DB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id_usuario) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE Compra ADD CONSTRAINT FK_996D34C9CB305D73 FOREIGN KEY (proveedor_id) REFERENCES proveedor (id_proveedor) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE MovimientoAlmacen DROP FOREIGN KEY FK_6FF55ADDB38439E');
        $this->addSql('ALTER TABLE MovimientoAlmacen ADD CONSTRAINT FK_6FF55ADDB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id_usuario) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE ProductoComprado DROP FOREIGN KEY FK_547710727645698E');
        $this->addSql('ALTER TABLE ProductoComprado ADD CONSTRAINT FK_547710727645698E FOREIGN KEY (producto_id) REFERENCES producto (id_producto) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE ProductoExistencia DROP FOREIGN KEY FK_FA8EDBFD7645698E');
        $this->addSql('ALTER TABLE ProductoExistencia ADD CONSTRAINT FK_FA8EDBFD7645698E FOREIGN KEY (producto_id) REFERENCES producto (id_producto) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE ProductoMovimiento DROP FOREIGN KEY FK_61E9BFAD7645698E');
        $this->addSql('ALTER TABLE ProductoMovimiento ADD CONSTRAINT FK_61E9BFAD7645698E FOREIGN KEY (producto_id) REFERENCES producto (id_producto) ON DELETE SET NULL');
    }
}
