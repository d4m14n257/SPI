<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210425005747 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE Almacen (id_almacen CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', ubicacion_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', usuario_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', tipo VARCHAR(255) NOT NULL, INDEX IDX_1A0FEBCC57E759E8 (ubicacion_id), INDEX IDX_1A0FEBCCDB38439E (usuario_id), PRIMARY KEY(id_almacen)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Bodega (id_almacen CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', telefono VARCHAR(10) DEFAULT NULL, PRIMARY KEY(id_almacen)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Compra (id_compra CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', usuario_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', almacen_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', proveedor_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', tipo_pago VARCHAR(63) NOT NULL, num_factura VARCHAR(31) NOT NULL, num_requisicion VARCHAR(31) NOT NULL, tipo_compra VARCHAR(63) NOT NULL, imagen_ce LONGBLOB NOT NULL, INDEX IDX_996D34C9DB38439E (usuario_id), INDEX IDX_996D34C99C9C9E68 (almacen_id), INDEX IDX_996D34C9CB305D73 (proveedor_id), PRIMARY KEY(id_compra)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE MovimientoAlmacen (id_movimiento CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', almacen_destino_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', almacen_origen_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', usuario_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', fecha DATE NOT NULL, INDEX IDX_6FF55AD8C48E45E (almacen_destino_id), INDEX IDX_6FF55AD30032D1F (almacen_origen_id), INDEX IDX_6FF55ADDB38439E (usuario_id), PRIMARY KEY(id_movimiento)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Obra (id_almacen CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', fecha_entrega DATE NOT NULL, fecha_inicio DATE NOT NULL, dependencia_contratos LONGTEXT DEFAULT NULL, dependencia_ejecutora LONGTEXT DEFAULT NULL, contrato_proyecto LONGTEXT DEFAULT NULL, PRIMARY KEY(id_almacen)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Producto (id_producto CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', tipo_producto VARCHAR(63) NOT NULL, nombre VARCHAR(255) NOT NULL, folio VARCHAR(15) NOT NULL, unidad VARCHAR(255) DEFAULT NULL, descripcion_insumo LONGTEXT DEFAULT NULL, marca VARCHAR(255) DEFAULT NULL, modelo VARCHAR(255) DEFAULT NULL, numero_serie VARCHAR(31) DEFAULT NULL, numero_motor_maquinaria VARCHAR(31) DEFAULT NULL, oculto TINYINT(1) NOT NULL, PRIMARY KEY(id_producto)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ProductoComprado (id CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', compra_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', producto_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', cantidad INT NOT NULL, precio DOUBLE PRECISION NOT NULL, fecha DATE NOT NULL, INDEX IDX_54771072F2E704D7 (compra_id), INDEX IDX_547710727645698E (producto_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ProductoExistencia (id CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', almacen_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', producto_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', cantidad INT NOT NULL, INDEX IDX_FA8EDBFD9C9C9E68 (almacen_id), INDEX IDX_FA8EDBFD7645698E (producto_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ProductoMovimiento (id CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', movimiento_almacen_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', producto_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', cantidad INT NOT NULL, INDEX IDX_61E9BFAD24F8B546 (movimiento_almacen_id), INDEX IDX_61E9BFAD7645698E (producto_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Proveedor (id_proveedor CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', nombre VARCHAR(255) NOT NULL, rfc VARCHAR(13) NOT NULL, telefono VARCHAR(10) DEFAULT NULL, oculto TINYINT(1) NOT NULL, PRIMARY KEY(id_proveedor)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Ubicacion (id_ubicacion CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', calle VARCHAR(255) NOT NULL, numero INT NOT NULL, colonia VARCHAR(127) NOT NULL, cp VARCHAR(5) NOT NULL, municipio VARCHAR(127) NOT NULL, localidad VARCHAR(127) NOT NULL, PRIMARY KEY(id_ubicacion)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Usuario (id_usuario CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', nombre VARCHAR(255) NOT NULL, apellidos VARCHAR(255) NOT NULL, telefono VARCHAR(10) DEFAULT NULL, ine VARCHAR(18) DEFAULT NULL, password VARCHAR(255) NOT NULL, rol VARCHAR(20) NOT NULL, PRIMARY KEY(id_usuario)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE Almacen ADD CONSTRAINT FK_1A0FEBCC57E759E8 FOREIGN KEY (ubicacion_id) REFERENCES Ubicacion (id_ubicacion)');
        $this->addSql('ALTER TABLE Almacen ADD CONSTRAINT FK_1A0FEBCCDB38439E FOREIGN KEY (usuario_id) REFERENCES Usuario (id_usuario)');
        $this->addSql('ALTER TABLE Bodega ADD CONSTRAINT FK_2612F69B2F7B20 FOREIGN KEY (id_almacen) REFERENCES Almacen (id_almacen) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE Compra ADD CONSTRAINT FK_996D34C9DB38439E FOREIGN KEY (usuario_id) REFERENCES Usuario (id_usuario)');
        $this->addSql('ALTER TABLE Compra ADD CONSTRAINT FK_996D34C99C9C9E68 FOREIGN KEY (almacen_id) REFERENCES Almacen (id_almacen)');
        $this->addSql('ALTER TABLE Compra ADD CONSTRAINT FK_996D34C9CB305D73 FOREIGN KEY (proveedor_id) REFERENCES Proveedor (id_proveedor)');
        $this->addSql('ALTER TABLE MovimientoAlmacen ADD CONSTRAINT FK_6FF55AD8C48E45E FOREIGN KEY (almacen_destino_id) REFERENCES Almacen (id_almacen)');
        $this->addSql('ALTER TABLE MovimientoAlmacen ADD CONSTRAINT FK_6FF55AD30032D1F FOREIGN KEY (almacen_origen_id) REFERENCES Almacen (id_almacen)');
        $this->addSql('ALTER TABLE MovimientoAlmacen ADD CONSTRAINT FK_6FF55ADDB38439E FOREIGN KEY (usuario_id) REFERENCES Usuario (id_usuario)');
        $this->addSql('ALTER TABLE Obra ADD CONSTRAINT FK_8EDCC283B2F7B20 FOREIGN KEY (id_almacen) REFERENCES Almacen (id_almacen) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ProductoComprado ADD CONSTRAINT FK_54771072F2E704D7 FOREIGN KEY (compra_id) REFERENCES Compra (id_compra)');
        $this->addSql('ALTER TABLE ProductoComprado ADD CONSTRAINT FK_547710727645698E FOREIGN KEY (producto_id) REFERENCES Producto (id_producto)');
        $this->addSql('ALTER TABLE ProductoExistencia ADD CONSTRAINT FK_FA8EDBFD9C9C9E68 FOREIGN KEY (almacen_id) REFERENCES Almacen (id_almacen)');
        $this->addSql('ALTER TABLE ProductoExistencia ADD CONSTRAINT FK_FA8EDBFD7645698E FOREIGN KEY (producto_id) REFERENCES Producto (id_producto)');
        $this->addSql('ALTER TABLE ProductoMovimiento ADD CONSTRAINT FK_61E9BFAD24F8B546 FOREIGN KEY (movimiento_almacen_id) REFERENCES MovimientoAlmacen (id_movimiento)');
        $this->addSql('ALTER TABLE ProductoMovimiento ADD CONSTRAINT FK_61E9BFAD7645698E FOREIGN KEY (producto_id) REFERENCES Producto (id_producto)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE Bodega DROP FOREIGN KEY FK_2612F69B2F7B20');
        $this->addSql('ALTER TABLE Compra DROP FOREIGN KEY FK_996D34C99C9C9E68');
        $this->addSql('ALTER TABLE MovimientoAlmacen DROP FOREIGN KEY FK_6FF55AD8C48E45E');
        $this->addSql('ALTER TABLE MovimientoAlmacen DROP FOREIGN KEY FK_6FF55AD30032D1F');
        $this->addSql('ALTER TABLE Obra DROP FOREIGN KEY FK_8EDCC283B2F7B20');
        $this->addSql('ALTER TABLE ProductoExistencia DROP FOREIGN KEY FK_FA8EDBFD9C9C9E68');
        $this->addSql('ALTER TABLE ProductoComprado DROP FOREIGN KEY FK_54771072F2E704D7');
        $this->addSql('ALTER TABLE ProductoMovimiento DROP FOREIGN KEY FK_61E9BFAD24F8B546');
        $this->addSql('ALTER TABLE ProductoComprado DROP FOREIGN KEY FK_547710727645698E');
        $this->addSql('ALTER TABLE ProductoExistencia DROP FOREIGN KEY FK_FA8EDBFD7645698E');
        $this->addSql('ALTER TABLE ProductoMovimiento DROP FOREIGN KEY FK_61E9BFAD7645698E');
        $this->addSql('ALTER TABLE Compra DROP FOREIGN KEY FK_996D34C9CB305D73');
        $this->addSql('ALTER TABLE Almacen DROP FOREIGN KEY FK_1A0FEBCC57E759E8');
        $this->addSql('ALTER TABLE Almacen DROP FOREIGN KEY FK_1A0FEBCCDB38439E');
        $this->addSql('ALTER TABLE Compra DROP FOREIGN KEY FK_996D34C9DB38439E');
        $this->addSql('ALTER TABLE MovimientoAlmacen DROP FOREIGN KEY FK_6FF55ADDB38439E');
        $this->addSql('DROP TABLE Almacen');
        $this->addSql('DROP TABLE Bodega');
        $this->addSql('DROP TABLE Compra');
        $this->addSql('DROP TABLE MovimientoAlmacen');
        $this->addSql('DROP TABLE Obra');
        $this->addSql('DROP TABLE Producto');
        $this->addSql('DROP TABLE ProductoComprado');
        $this->addSql('DROP TABLE ProductoExistencia');
        $this->addSql('DROP TABLE ProductoMovimiento');
        $this->addSql('DROP TABLE Proveedor');
        $this->addSql('DROP TABLE Ubicacion');
        $this->addSql('DROP TABLE Usuario');
    }
}
