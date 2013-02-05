ALTER TABLE  `fir_categoria` CHANGE  `cat_nombre`  `cat_nombre` VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL;
ALTER TABLE `fir_categoria` ADD  `cat_alias` VARCHAR( 100 ) NULL ;
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias` ) VALUES ( 'bombas_contra_incendio',  'Bombas Contra Incendio');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias` ) VALUES ( 'extintor_portatil',  'Extintor Portátil');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias` ) VALUES ( 'hidrantes_contra_incendios',  'Hidrantes Contra Incendios');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias` ) VALUES ( 'luces_de_emergencia',  'Luces de Emergencia');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias` ) VALUES ( 'puertas_y_compuertas_cortafuego',  'Puertas y Compuertas Cortafuego');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias` ) VALUES ( 'sistema_de_abastecimiento_de_agua',  'Sistema de Abastecimiento de Agua');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias` ) VALUES ( 'sistema_de_agua_nebulizada',  'Sistema de Agua Nebulizada');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias` ) VALUES ( 'sistema_de_agua_pulverizada',  'Sistema de Agua Pulverizada');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias` ) VALUES ( 'sistema_de_control_de_humos',  'Sistema de Control de Humos');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias` ) VALUES ( 'sistema_de_deteccion_y_alarma_de_incendios',  'Sistema de Detección y Alarma de Incendios');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias` ) VALUES ( 'sistema_de_espuma',  'Sistema de Espuma');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias` ) VALUES ( 'sistema_de_extincion_de_incendios_alternativos_al_halon',  'Sistema de Extinción de Incendios Alternativos al Halón');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias` ) VALUES ( 'sistema_de_extincion_por_agente_extintor_acuoso',  'Sistema de Extinción por Agente Extintor Acuoso');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias` ) VALUES ( 'sistema_de_extincion_por_agente_halogenado',  'Sistema de Extinción por Agente Halogenado');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias` ) VALUES ( 'sistema_de_extincion_por_dioxido_de_carbono',  'Sistema de Extinción por Dióxido de Carbono');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias` ) VALUES ( 'sistema_de_rociadores_automaticos',  'Sistema de Rociadores Automáticos');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias` ) VALUES ( 'sistema_de_rociadores_de_espuma',  'Sistema de Rociadores de Espuma');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias` ) VALUES ( 'sistema_de_tuberias_y_mangueras',  'Sistema de Tuberías y Mangueras');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias` ) VALUES ( 'sistemas_fijos_de_extincion_por_polvo',  'Sistemas Fijos de Extinción por Polvo');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias` ) VALUES ( 'funcionamiento_del_ascensor_de_emergencia',  'Funcionamiento del Ascensor de Emergencia');














