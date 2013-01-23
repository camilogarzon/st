CREATE TABLE fir_categoria (
  cat_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  cat_nombre VARCHAR(50) NULL,
  PRIMARY KEY(cat_id)
);

CREATE TABLE fir_empresa (
  emp_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  emp_nit VARCHAR(30) NULL,
  emp_razonsocial VARCHAR(50) NULL,
  emp_ciudad VARCHAR(50) NULL,
  emp_direccion VARCHAR(100) NULL,
  emp_telefono VARCHAR(20) NULL,
  emp_celular VARCHAR(20) NULL,
  emp_contacto VARCHAR(300) NULL,
  emp_correo VARCHAR(200) NULL,
  emp_descripcion VARCHAR(500) NULL,
  emp_logo VARCHAR(200) NULL,
  PRIMARY KEY(emp_id)
);

CREATE TABLE fir_evaluacion (
  eva_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  fir_usuario_usr_id INTEGER UNSIGNED NULL,
  fir_sede_sde_id INTEGER UNSIGNED NULL,
  fir_producto_pro_id INTEGER UNSIGNED NULL,
  fir_formulario_frm_id INTEGER UNSIGNED NULL,
  fir_respuesta_rsp_id INTEGER UNSIGNED NULL,
  fir_preguntas_prg_id INTEGER UNSIGNED NULL,
  eva_fecha_hora DATETIME NULL,
  PRIMARY KEY(eva_id),
  INDEX fir_evaluacion_FKIndex1(fir_preguntas_prg_id),
  INDEX fir_evaluacion_FKIndex2(fir_respuesta_rsp_id),
  INDEX fir_evaluacion_FKIndex3(fir_formulario_frm_id),
  INDEX fir_evaluacion_FKIndex4(fir_producto_pro_id),
  INDEX fir_evaluacion_FKIndex5(fir_sede_sde_id),
  INDEX fir_evaluacion_FKIndex6(fir_usuario_usr_id)
);

CREATE TABLE fir_formulario (
  frm_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  fir_categoria_cat_id INTEGER UNSIGNED NULL,
  frm_nombre VARCHAR(50) NULL,
  frm_fecha_hora DATETIME NULL,
  PRIMARY KEY(frm_id),
  INDEX fir_formulario_FKIndex1(fir_categoria_cat_id)
);

CREATE TABLE fir_preguntas (
  prg_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  fir_formulario_frm_id INTEGER UNSIGNED NOT NULL,
  prg_pregunta VARCHAR(300) NULL,
  PRIMARY KEY(prg_id),
  INDEX fir_preguntas_FKIndex1(fir_formulario_frm_id)
);

CREATE TABLE fir_producto (
  pro_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  fir_sede_sde_id INTEGER UNSIGNED NULL,
  fir_categoria_cat_id INTEGER UNSIGNED NULL,
  pro_nombre VARCHAR(200) NULL,
  PRIMARY KEY(pro_id),
  INDEX fir_producto_FKIndex1(fir_categoria_cat_id),
  INDEX fir_producto_FKIndex2(fir_sede_sde_id)
);

CREATE TABLE fir_respuesta (
  rsp_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  fir_preguntas_prg_id INTEGER UNSIGNED NOT NULL,
  rsp_respuesta VARCHAR(100) NULL,
  PRIMARY KEY(rsp_id),
  INDEX fir_respuesta_FKIndex1(fir_preguntas_prg_id)
);

CREATE TABLE fir_rol (
  rol_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  rol_nombre VARCHAR(50) NULL,
  PRIMARY KEY(rol_id)
);

CREATE TABLE fir_sede (
  sde_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  fir_empresa_emp_id INTEGER UNSIGNED NOT NULL,
  sde_nombre VARCHAR(50) NULL,
  sde_direccion VARCHAR(100) NULL,
  sde_telefono VARCHAR(20) NULL,
  sde_celular VARCHAR(20) NULL,
  sde_contacto VARCHAR(300) NULL,
  sde_correo VARCHAR(200) NULL,
  PRIMARY KEY(sde_id),
  INDEX fir_sede_FKIndex1(fir_empresa_emp_id)
);

CREATE TABLE fir_usuario (
  usr_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  fir_empresa_emp_id INTEGER UNSIGNED NULL,
  fir_sede_sde_id INTEGER UNSIGNED NULL,
  usr_nombre VARCHAR(100) NULL,
  usr_apellido VARCHAR(100) NULL,
  usr_cargo VARCHAR(20) NULL,
  usr_correo VARCHAR(200) NULL,
  usr_celular VARCHAR(20) NULL,
  usr_foto VARCHAR(200) NULL,
  usr_nick VARCHAR(20) NULL,
  usr_hashpass VARCHAR(50) NULL,
  PRIMARY KEY(usr_id),
  INDEX fir_usuario_FKIndex1(fir_sede_sde_id),
  INDEX fir_usuario_FKIndex2(fir_empresa_emp_id)
);

CREATE TABLE fir_usuario_has_fir_rol (
  fir_usuario_usr_id INTEGER UNSIGNED NOT NULL,
  fir_rol_rol_id INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(fir_usuario_usr_id, fir_rol_rol_id),
  INDEX fir_usuario_has_fir_rol_FKIndex1(fir_usuario_usr_id),
  INDEX fir_usuario_has_fir_rol_FKIndex2(fir_rol_rol_id)
);

