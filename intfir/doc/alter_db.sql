ALTER TABLE  `fir_categoria` CHANGE  `cat_nombre`  `cat_nombre` VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL;
ALTER TABLE `fir_categoria` ADD  `cat_alias` VARCHAR( 100 ) NULL ;
ALTER TABLE `fir_categoria` ADD  `cat_href_file` VARCHAR( 100 ) NULL;
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias`, `cat_href_file` ) VALUES ( 'bombas_contra_incendio',  'Bombas Contra Incendio', 'bomba.php');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias`, `cat_href_file` ) VALUES ( 'extintor_portatil',  'Extintor Portátil', 'extintor.php');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias`, `cat_href_file` ) VALUES ( 'hidrantes_contra_incendios',  'Hidrantes Contra Incendios', 'hidrante.php');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias`, `cat_href_file` ) VALUES ( 'luces_de_emergencia',  'Luces de Emergencia', 'luces.php');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias`, `cat_href_file` ) VALUES ( 'puertas_y_compuertas_cortafuego',  'Puertas y Compuertas Cortafuego', 'puerta.php');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias`, `cat_href_file` ) VALUES ( 'sistema_de_abastecimiento_de_agua',  'Sistema de Abastecimiento de Agua', 'abastecimiento.php');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias`, `cat_href_file` ) VALUES ( 'sistema_de_agua_nebulizada',  'Sistema de Agua Nebulizada', 'agua.php');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias`, `cat_href_file` ) VALUES ( 'sistema_de_agua_pulverizada',  'Sistema de Agua Pulverizada', 'pulverizada.php');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias`, `cat_href_file` ) VALUES ( 'sistema_de_control_de_humos',  'Sistema de Control de Humos', 'humos.php');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias`, `cat_href_file` ) VALUES ( 'sistema_de_deteccion_y_alarma_de_incendios',  'Sistema de Detección y Alarma de Incendios', 'deteccion.php');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias`, `cat_href_file` ) VALUES ( 'sistema_de_espuma',  'Sistema de Espuma', 'sistemaespuma.php');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias`, `cat_href_file` ) VALUES ( 'sistema_de_extincion_de_incendios_alternativos_al_halon',  'Sistema de Extinción de Incendios Alternativos al Halón', 'halon.php');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias`, `cat_href_file` ) VALUES ( 'sistema_de_extincion_por_agente_extintor_acuoso',  'Sistema de Extinción por Agente Extintor Acuoso', 'acuoso.php');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias`, `cat_href_file` ) VALUES ( 'sistema_de_extincion_por_agente_halogenado',  'Sistema de Extinción por Agente Halogenado', 'halogenado.php');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias`, `cat_href_file` ) VALUES ( 'sistema_de_extincion_por_dioxido_de_carbono',  'Sistema de Extinción por Dióxido de Carbono', 'carbono.php');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias`, `cat_href_file` ) VALUES ( 'sistema_de_rociadores_automaticos',  'Sistema de Rociadores Automáticos', 'rociador.php');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias`, `cat_href_file` ) VALUES ( 'sistema_de_rociadores_de_espuma',  'Sistema de Rociadores de Espuma', 'espuma.php');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias`, `cat_href_file` ) VALUES ( 'sistema_de_tuberias_y_mangueras',  'Sistema de Tuberías y Mangueras', 'tuberia.php');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias`, `cat_href_file` ) VALUES ( 'sistemas_fijos_de_extincion_por_polvo',  'Sistemas Fijos de Extinción por Polvo', 'polvo.php');
INSERT INTO `fir_categoria` ( `cat_nombre` ,`cat_alias`, `cat_href_file` ) VALUES ( 'funcionamiento_del_ascensor_de_emergencia',  'Funcionamiento del Ascensor de Emergencia', '');

ALTER TABLE  `fir_producto` ADD  `pro_marca` VARCHAR( 50 ) NULL ;
ALTER TABLE  `fir_producto` ADD  `pro_numinventario` VARCHAR( 50 ) NULL ;
ALTER TABLE  `fir_producto` ADD  `fir_empresa_emp_id` INTEGER UNSIGNED NOT NULL ;

-- cambio 2013-02-09
ALTER TABLE  `fir_evaluacion` ADD  `eva_form_name` VARCHAR( 200 ) NULL , ADD  `eva_sistema` VARCHAR( 200 ) NULL , ADD  `eva_actividad` VARCHAR( 100 ) NULL ;
ALTER TABLE  `fir_evaluacion` ADD  `eva_contenido` TEXT NULL ;
ALTER TABLE  `fir_evaluacion` ADD  `eva_notas` TEXT NULL ;
ALTER TABLE  `fir_evaluacion` ADD  `eva_fecha` DATE NULL ;
ALTER TABLE  `fir_evaluacion` ADD  `eva_pro_numinventario` VARCHAR( 50 ) NULL ;








