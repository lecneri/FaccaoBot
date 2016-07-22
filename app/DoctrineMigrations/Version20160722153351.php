<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Type;
/**
 * Cria tabela de guerra e jogador e participa (jogador participa guerra n*m)
 */
class Version20160722153351 extends AbstractMigration
{
   /**
    * @param Schema $schema
    */
   public function up(Schema $schema)
   {
      $tbl_guerra = $schema->createTable("guerra");
      $id = $tbl_guerra->addColumn("id", Type::BIGINT)
         ->setUnsigned(true)
         ->setNotnull(true)
         ->setAutoincrement(true);
      $tbl_guerra->setPrimaryKey(array("id"), "PK_GUERRA");
      $tbl_guerra->addColumn("date", Type::DATE)
         ->setNotnull(true);
      $tbl_guerra->addColumn("status", Type::SMALLINT)
         ->setNotnull(true)
         ->setDefault(0);

      $tbl_jogador = $schema->createTable("jogador");
      $id = $tbl_jogador->addColumn("id", Type::BIGINT)
         ->setUnsigned(true)
         ->setNotnull(true)
         ->setAutoincrement(true);
      $tbl_jogador->setPrimaryKey(array("id"), "PK_JOGADOR");
      $tbl_jogador->addColumn("nick_in_game", Type::STRING)
         ->setNotnull(true);
      $tbl_jogador->addColumn("telegram_uid", TYPE::STRING)
         ->setNotnull(true);
      $tbl_jogador->addUniqueIndex(array("nick_in_game"), "uk_jogador_nick_in_game");
      $tbl_jogador->addUniqueIndex(array("telegram_uid"), "uk_jogador_telegram_uid");
      $tbl_jogador->addColumn("ativo", Type::SMALLINT)
         ->setNotnull(true)
         ->setDefault(1);

      $tbl_participa = $schema->createTable("participa");
      $guerra_id  = $tbl_participa->addColumn("guerra_id", Type::BIGINT)
         ->setUnsigned(true)
         ->setNotnull(true);
      $jogador_id = $tbl_participa->addColumn("jogador_id", Type::BIGINT)
         ->setUnsigned(true)
         ->setNotnull(true);
      $tbl_participa->setPrimaryKey(array("guerra_id", "jogador_id"), "PK_PARTICIPA");
      $tbl_participa->addForeignKeyConstraint($tbl_guerra, array("guerra_id"),
         array("id"), array(), "fk_participa_has_guerra");
         $tbl_participa->addForeignKeyConstraint($tbl_jogador, array("jogador_id"),
            array("id"), array(), "fk_participa_has_jogador");
   }

   /**
    * @param Schema $schema
    */
   public function down(Schema $schema)
   {
      $schema->dropTable("participa");
      $schema->dropTable("jogador");
      $schema->dropTable("guerra");
   }
}
