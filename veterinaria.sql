-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-11-2021 a las 16:16:01
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterinaria`
--

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `add_atiende`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_atiende` (IN `Avet_CMVP` VARCHAR(5) CHARSET utf8, IN `ACod_mascota` VARCHAR(3) CHARSET utf8)  NO SQL
BEGIN
	INSERT INTO atiende (vet_CMVP,Cod_mascota)
    VALUES (Avet_CMVP,ACod_mascota);
END$$

DROP PROCEDURE IF EXISTS `add_consultas`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_consultas` (IN `Ccod_consulta` VARCHAR(6) CHARSET utf8, IN `Ccod_historial` VARCHAR(4) CHARSET utf8, IN `Cmotivo_consulta` TEXT CHARSET utf8, IN `Ctratamiento` TEXT CHARSET utf8)  NO SQL
BEGIN
	INSERT INTO consultas(cod_consulta,cod_historial,motivo_consulta,tratamiento)
    VALUES (Ccod_consulta,Ccod_historial,Cmotivo_consulta,Ctratamiento);
END$$

DROP PROCEDURE IF EXISTS `add_dueno`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_dueno` (IN `DDNI` VARCHAR(8) CHARSET utf8, IN `nombreD` VARCHAR(100) CHARSET utf8, IN `correoD` VARCHAR(100) CHARSET utf8, IN `direccionD` VARCHAR(100) CHARSET utf8, IN `telefonoD` VARCHAR(100) CHARSET utf8)  NO SQL
INSERT INTO dueno (DNI,Nom_Dueno,Correo_Dueno,Direccion_Dueno,Telefono_Dueno)
    values (DDNI,nombreD,correoD,direccionD,telefonoD)$$

DROP PROCEDURE IF EXISTS `add_examenlab`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_examenlab` (IN `LcodExamenLab` VARCHAR(6) CHARSET utf8, IN `Lcod_historial` VARCHAR(4) CHARSET utf8, IN `Lcreatina` VARCHAR(20) CHARSET utf8, IN `Ltgp` VARCHAR(20) CHARSET utf8, IN `LFECHA_examLAB` DATE, IN `Lfas` VARCHAR(20) CHARSET utf8, IN `LHG` VARCHAR(20) CHARSET utf8, IN `LTGO` VARCHAR(20) CHARSET utf8)  NO SQL
BEGIN
	INSERT INTO exa_lab (codExamenLab,cod_historial,creatina,tgp,FECHA_examLAB,fas,HG,TGO)
    VALUES (LcodExamenLab,Lcod_historial,Lcreatina,Ltgp,LFECHA_examLAB,Lfas,LHG,LTGO);
    
END$$

DROP PROCEDURE IF EXISTS `add_examenog`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_examenog` (IN `Ocod_examenog` VARCHAR(6) CHARSET utf8, IN `Ocod_historial` VARCHAR(4) CHARSET utf8, IN `Oaus_cardiaca` VARCHAR(100) CHARSET utf8, IN `Oaus_pulmonar` VARCHAR(100) CHARSET utf8, IN `Olinfonodulos` VARCHAR(100) CHARSET utf8, IN `Otemperatura` VARCHAR(100) CHARSET utf8, IN `Omucosa` VARCHAR(100) CHARSET utf8, IN `Ohidratacion` VARCHAR(100) CHARSET utf8, IN `Osensorio` VARCHAR(100) CHARSET utf8)  NO SQL
BEGIN
	INSERT INTO examen_og (cod_examenog,cod_historial,aus_cardiaca,aus_pulmonar,linfonodulos,temperatura,mucosa,hidratacion,sensorio)
    VALUES (Ocod_examenog,Ocod_historial,Oaus_cardiaca,Oaus_pulmonar,Olinfonodulos,Otemperatura,Omucosa,Ohidratacion,Osensorio);
END$$

DROP PROCEDURE IF EXISTS `add_examensis`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_examensis` (IN `Scod_examenSis` VARCHAR(6) CHARSET utf8, IN `Scod_historial` VARCHAR(4) CHARSET utf8, IN `Sdescripcion_SIS` TEXT CHARSET utf8)  NO SQL
BEGIN
	INSERT INTO examen_sis (cod_examenSis,cod_historial,descripcion_SIS)
    VALUES (Scod_examenSis,Scod_historial,Sdescripcion_SIS);
END$$

DROP PROCEDURE IF EXISTS `add_historial`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_historial` (IN `hcodHIsto` VARCHAR(4) CHARSET utf8, IN `HCod_mascota` VARCHAR(3) CHARSET utf8, IN `HFecha_Created` DATE, IN `HHora` TIME, IN `HUltVacuna` DATE, IN `HUltDespa` DATE)  NO SQL
BEGIN
	INSERT INTO historial_clinico (codHisto,Cod_mascota,Fecha_Created,Hora,UltVacuna,UltDespa)
    VALUES (hcodHIsto,HCod_mascota,HFecha_Created,HHora,HUltVacuna,HUltDespa);
END$$

DROP PROCEDURE IF EXISTS `add_llena`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_llena` (IN `cod_historialL` VARCHAR(4) CHARSET utf8, IN `CMVPL` VARCHAR(5) CHARSET utf8)  NO SQL
BEGIN
	INSERT INTO llena (cod_historial,CMVP)
    VALUES (cod_historialL,CMVPL);
END$$

DROP PROCEDURE IF EXISTS `add_mascota`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_mascota` (IN `codM` VARCHAR(3) CHARSET utf8, IN `DNID` VARCHAR(8) CHARSET utf8, IN `nombreM` VARCHAR(30) CHARSET utf8, IN `especieM` VARCHAR(30) CHARSET utf8, IN `razaM` VARCHAR(30) CHARSET utf8, IN `sexoM` VARCHAR(1) CHARSET utf8, IN `pesoM` DECIMAL(4,2), IN `fechaNacimientoM` DATE, IN `fechaMuerteM` DATE)  NO SQL
INSERT INTO mascota(codigo_mascota,DNI_dueno,nombre,especie,raza,sexo,peso,fechaNacimiento,fechaMuerte)
    values (codM,DNID,nombreM,especieM,razaM,sexoM,pesoM,fechaNacimientoM,fechaMuerteM)$$

DROP PROCEDURE IF EXISTS `add_veterinario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_veterinario` (IN `CMVPV` VARCHAR(5) CHARSET utf8, IN `nombreV` VARCHAR(100) CHARSET utf8, IN `correoV` VARCHAR(100) CHARSET utf8, IN `telefonoV` VARCHAR(100) CHARSET utf8)  NO SQL
INSERT INTO medico_veterinario (CMVP,nom_veterinario,correo_veterinario,telefono_veterinario) values(CMVPV,nombreV,correoV,telefonoV)$$

DROP PROCEDURE IF EXISTS `del_veterinario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `del_veterinario` (IN `dcmvp` VARCHAR(5))  NO SQL
BEGIN
DELETE FROM medico_veterinario where CMVP = dcmvp;
END$$

DROP PROCEDURE IF EXISTS `get_login`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_login` (IN `correo` VARCHAR(100) CHARSET utf8, IN `codigo` VARCHAR(5) CHARSET utf8)  NO SQL
begin 
	select * from medico_veterinario
		where CMVP = codigo and correo_veterinario = correo;
end$$

DROP PROCEDURE IF EXISTS `rep_craza`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `rep_craza` ()  NO SQL
BEGIN
SELECT m.raza as RAZA, min((YEAR(now()) - YEAR(m.FechaNacimiento)))
'MINIMO EDAD', max((YEAR(now()) - YEAR(m.FechaNacimiento))) 'maximo', max(co.motivo_consulta) 'consulta'
FROM mascota m
INNER JOIN historial_clinico h
ON h.Cod_mascota = m.codigo_mascota
INNER JOIN consultas co
ON co.cod_historial = h.codHisto
GROUP BY m.raza
HAVING min((YEAR(now()) - YEAR(m.FechaNacimiento)))!=max((YEAR(now()) - YEAR(m.FechaNacimiento)));
END$$

DROP PROCEDURE IF EXISTS `rep_duenos`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `rep_duenos` (IN `dueno` VARCHAR(100))  NO SQL
BEGIN
SELECT m.nombre, m.raza,v.CMVP, v.nom_veterinario, d.Nom_Dueno  
FROM mascota m  
INNER JOIN atiende a
ON a.Cod_mascota = m.codigo_mascota
INNER JOIN medico_veterinario v   
ON v.CMVP = a.vet_CMVP
INNER JOIN dueno d 
ON m.DNI_dueno = d.DNI
WHERE d.DNI = dueno;
END$$

DROP PROCEDURE IF EXISTS `rep_encargados`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `rep_encargados` ()  NO SQL
BEGIN
SELECT h.CodHisto, v.CMVP, v.nom_veterinario, m.nombre
FROM historial_clinico h
INNER JOIN llena l
ON h.CodHisto =  l.cod_historial
INNER JOIN medico_veterinario v
ON L.CMVP = v.CMVP
INNER JOIN mascota m
ON h.Cod_mascota = m.codigo_mascota;
END$$

DROP PROCEDURE IF EXISTS `rep_examenes`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `rep_examenes` (IN `minimo` INT(11), IN `maximo` INT(11))  NO SQL
BEGIN
SELECT m.codigo_mascota, m.nombre, m.raza, h.Fecha_Created, e.descripcion_SIS
FROM historial_clinico h 
INNER JOIN mascota m  
ON m.codigo_mascota = h.Cod_mascota  
INNER JOIN examen_sis e
ON e.cod_historial = h.codHisto  
WHERE (YEAR(CURDATE()) - YEAR(m.fechaNacimiento))  
BETWEEN minimo AND maximo;
END$$

DROP PROCEDURE IF EXISTS `rep_fallecidos`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `rep_fallecidos` ()  NO SQL
BEGIN
SELECT m.codigo_mascota, m.nombre, m.sexo, d.Nom_Dueno, d.Correo_Dueno, m.fechaMuerte  
FROM dueno d  
INNER JOIN mascota m  
ON m.DNI_dueno = d.DNI 
WHERE m.fechaMuerte IS NOT NULL 
ORDER BY m.codigo_mascota ASC;
END$$

DROP PROCEDURE IF EXISTS `rep_hvacunacion`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `rep_hvacunacion` ()  NO SQL
BEGIN
SELECT m.codigo_mascota, m.Nombre, d.nom_dueno, h.fecha_created as 'fecha de consulta', CONCAT(DAY(h.UltVacuna),"/",MONTH(h.UltVacuna), "/",year(h.UltVacuna)+1 ) 'Proxima vacuna Programada'
FROM historial_clinico h
INNER JOIN mascota m
ON h.cod_mascota=m.codigo_mascota
INNER JOIN dueno d
ON m.DNI_dueno=d.DNI
WHERE YEAR(curdate())-year(h.UltVacuna)<1;
END$$

DROP PROCEDURE IF EXISTS `rep_publicidad`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `rep_publicidad` ()  NO SQL
BEGIN
SELECT d.Nom_Dueno,d.Correo_Dueno, d.Telefono_Dueno, m.nombre
FROM dueno d   
INNER JOIN mascota m
ON m.DNI_dueno = d.DNI
INNER JOIN historial_clinico h   
ON h.Cod_mascota = m.codigo_mascota AND h.Fecha_Created >= YEAR(NOW())-3;
END$$

DROP PROCEDURE IF EXISTS `rep_realizados`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `rep_realizados` (IN `mes` INT(11))  NO SQL
BEGIN
SELECT m.codigo_mascota, m.nombre, m.especie, m.raza, v.CMVP, v.nom_veterinario, h.Fecha_Created
FROM historial_clinico h   
INNER JOIN llena l
ON h.codHisto = l.cod_historial
INNER JOIN medico_veterinario v   
ON v.CMVP = l.CMVP  
INNER JOIN mascota m  
ON m.codigo_mascota = h.Cod_mascota 
WHERE MONTH(h.Fecha_Created) = mes; 
END$$

DROP PROCEDURE IF EXISTS `rep_tratamiento`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `rep_tratamiento` ()  NO SQL
BEGIN
SELECT h.codHisto, m.nombre, m.raza, h.Fecha_Created, co.tratamiento, v.nom_veterinario
FROM historial_clinico h
INNER JOIN mascota m
ON m.codigo_mascota = h.Cod_mascota
INNER JOIN llena l
ON l.cod_historial = h.codHIsto
INNER JOIN medico_veterinario v
ON v.CMVP = l.CMVP
INNER JOIN consultas co
ON co.cod_historial = h.codHisto;
END$$

DROP PROCEDURE IF EXISTS `rep_vacunas`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `rep_vacunas` ()  NO SQL
BEGIN
SELECT h.UltVacuna as 'ultima vacuna', h.codHisto, h.Cod_mascota, m.nombre,
IF((year(now())-year(h.UltVacuna) > 1),"NECESITA VACUNARSE", "NO") AS 'LISTA PARA VACUNAS'
FROM historial_clinico h
INNER JOIN mascota m
ON m.codigo_mascota = h.Cod_mascota
ORDER BY h.codHisto ASC;
END$$

DROP PROCEDURE IF EXISTS `upd_veterinario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `upd_veterinario` (IN `nCMVP` VARCHAR(5), IN `nnom_veterinario` VARCHAR(100), IN `ncorreo_veterinario` VARCHAR(100), IN `ntelefono_veterinario` VARCHAR(100))  NO SQL
BEGIN
update medico_veterinario set
nom_veterinario=nnom_veterinario,
correo_veterinario=ncorreo_veterinario, 
telefono_veterinario=ntelefono_veterinario
WHERE CMVP=nCMVP;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atiende`
--

DROP TABLE IF EXISTS `atiende`;
CREATE TABLE IF NOT EXISTS `atiende` (
  `vet_CMVP` varchar(5) NOT NULL,
  `Cod_mascota` varchar(3) NOT NULL,
  PRIMARY KEY (`vet_CMVP`,`Cod_mascota`),
  KEY `Cod_mascota` (`Cod_mascota`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `atiende`
--

INSERT INTO `atiende` (`vet_CMVP`, `Cod_mascota`) VALUES
('45891', '001'),
('66755', '002'),
('85723', '003'),
('66755', '004'),
('66755', '005'),
('85723', '006'),
('85723', '007'),
('66755', '008'),
('66755', '009'),
('66755', '010'),
('85723', '011'),
('66755', '012'),
('85723', '013'),
('66755', '014'),
('66755', '015');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

DROP TABLE IF EXISTS `consultas`;
CREATE TABLE IF NOT EXISTS `consultas` (
  `cod_consulta` varchar(6) NOT NULL,
  `cod_historial` varchar(4) NOT NULL,
  `motivo_consulta` text,
  `tratamiento` text,
  PRIMARY KEY (`cod_consulta`),
  KEY `cod_historial` (`cod_historial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`cod_consulta`, `cod_historial`, `motivo_consulta`, `tratamiento`) VALUES
('000001', '0001', 'deshidratacion', 'administrar pastillas via oral y suero para una mejor hidratacion'),
('000002', '0002', 'vacuna antirabica', 'aplicacion de vacuna'),
('000003', '0003', 'fractura', 'operacion y yeso por 3 meses'),
('000004', '0004', 'Supuesta Rabia', 'Vacuna contra la rabia'),
('000005', '0005', 'Esterelizacion', 'Operacion'),
('000006', '0006', 'Supuesta Rabia', 'Vacuna contra la rabia'),
('000007', '0007', 'Fractura de pata derecha', 'yeso y reposo'),
('000008', '0008', 'parasitos', 'desparasitacion'),
('000009', '0009', 'sangrado nariz', 'curaciones'),
('000010', '0010', 'heridas por mordedura', 'amoxicilina-acido clavulanico 2 dosis al dia'),
('000011', '0011', 'intoxicacion por envenenamiento', 'suministrar carbon activado y Lavado Gastrico'),
('000012', '0012', 'fractura pata izquierda', 'yeso por 3  meses'),
('000013', '0013', 'vomitos', 'Hidratacion mediante suero'),
('000014', '0014', 'convulsiones', 'Pastilla tranquilizante mas CBD'),
('000015', '0015', 'infeccion a la piel', 'Bano medicado cada mes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dueno`
--

DROP TABLE IF EXISTS `dueno`;
CREATE TABLE IF NOT EXISTS `dueno` (
  `DNI` varchar(8) NOT NULL,
  `Nom_Dueno` varchar(100) DEFAULT NULL,
  `Correo_Dueno` varchar(100) DEFAULT NULL,
  `Direccion_Dueno` varchar(100) DEFAULT NULL,
  `Telefono_Dueno` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`DNI`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `dueno`
--

INSERT INTO `dueno` (`DNI`, `Nom_Dueno`, `Correo_Dueno`, `Direccion_Dueno`, `Telefono_Dueno`) VALUES
('04547832', 'Percy Torres', 'percy@gmail.com', 'calle los pinos 107', '951123654'),
('67821530', 'Manuel Campos', 'manuel123@gmail.com', 'Dolores 325', '834920178'),
('71234567', 'Pamela Torres', 'pamelatorres32@gmail.com', 'Av. Arequipa 533 Arequipa', '983745612'),
('72312578', 'Luciano Escalante', 'luci4314@gmail.com', 'Selva Alegre s/n ASA', '98236653'),
('72468973', 'Mariano Caneda Rodriguez', 'mariano21@gmail.com', 'Huasacache Mz Y 2-A', '942343082'),
('73234598', 'Lenin Aragon', 'lpat@gmail.com', 'urbanizacion challapampa', '999204049'),
('73926173', 'Carlos Ramos', 'null', 'Av. Bolognesi 28', '932817350'),
('74254536', 'Kevin Gutierrez', 'kevin12@hotmail.com', 'las lomas', '973159852'),
('74584123', 'Piero Levano Olin', 'levano@hotmail.com', 'Urb. Tres Marias Mz A', '951234897'),
('75071676', 'Cristian Huaman', 'cristianH@gmail.com', 'Av. Lima 17', '926183520'),
('75434589', 'Marcos Guzman', 'marcosguzman12@gmail.com', 'Calle Alfornso Ugarte 312-A Arequipa', '998234567'),
('76987231', 'Jorge Chirinos Ramirez', 'jcm@gmail.com', 'Urb Quinta Tristan Mz J', '921369584'),
('78458723', 'Manuel Manrique', 'mmanrique@hotmail.com', 'Challapampa E-4', '914270124'),
('78934123', 'Ana Cruz', ' anacruz1234@gmail.com', 'Calle Alfornso Ugarte 312-A Arequipa', '987678345'),
('79365321', 'Miguel Rosas', 'miguelluis@gmail.com', 'Av. Brasil 345 Hunter', '97236601');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen_og`
--

DROP TABLE IF EXISTS `examen_og`;
CREATE TABLE IF NOT EXISTS `examen_og` (
  `cod_examenog` varchar(6) NOT NULL,
  `cod_historial` varchar(4) DEFAULT NULL,
  `aus_cardiaca` varchar(100) DEFAULT NULL,
  `aus_pulmonar` varchar(100) DEFAULT NULL,
  `linfonodulos` varchar(100) DEFAULT NULL,
  `temperatura` varchar(100) NOT NULL,
  `mucosa` varchar(100) DEFAULT NULL,
  `hidratacion` varchar(100) DEFAULT NULL,
  `sensorio` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cod_examenog`),
  KEY `cod_historial` (`cod_historial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `examen_og`
--

INSERT INTO `examen_og` (`cod_examenog`, `cod_historial`, `aus_cardiaca`, `aus_pulmonar`, `linfonodulos`, `temperatura`, `mucosa`, `hidratacion`, `sensorio`) VALUES
('000001', '0001', 'normal', 'normal', 'normal', '36 C', 'normal', 'normal', 'normal'),
('000002', '0002', 'normal', 'normal', 'normal', '35 C', 'normal', 'normal', 'normal'),
('000003', '0003', 'normal', 'normal', 'normal', '35 C', 'normal', 'normal', 'normal'),
('000004', '0004', 'Bien', 'Normal', 'Preescapular', '38 C', 'Rosadas', 'Normal', 'Bien'),
('000005', '0005', 'Bien', 'Normal', 'Mandibular', '37 C', 'Rosadas', 'Normal', 'Bien'),
('000006', '0006', 'Bien', 'Normal', 'Axilar', '37 C', 'Rosadas', 'Normal', 'Bien'),
('000007', '0007', 'Mal', 'Anormal', 'Mandibular', '35 C', 'Rosadas', 'Normal', 'Mal'),
('000008', '0008', 'Mal', 'Anormal', 'Mandibular', '36 C', 'Palidas', 'Normal', 'Bien'),
('000009', '0009', 'Bien', 'Normal', 'Axilar', '40 C', 'Rosadas', 'Normal', 'Bien'),
('000010', '0010', 'Bien', 'Normal', 'Preescapular', '40 C', 'Rosadas', 'Normal', 'Mal'),
('000011', '0011', 'Mal', 'Anormal', 'Mandibular', '38 C', 'Palidas', 'Deshidratado', 'Mal '),
('000012', '0012', 'Bien', 'Normal', 'Axilar', '39 C', 'Rosadas', 'Normal', 'Bien'),
('000013', '0013', 'Bien', 'Acelerada', 'Mandibular', '35.2 C', 'Palida', 'Baja', 'Mal'),
('000014', '0014', 'Regular', 'Anormal', 'Null', '38.5 C', 'Rosadas', 'Baja', 'Mal'),
('000015', '0015', 'Bien', 'Normal', 'Null', ' 38 C', 'Rosadas', 'Normal', 'Bien');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen_sis`
--

DROP TABLE IF EXISTS `examen_sis`;
CREATE TABLE IF NOT EXISTS `examen_sis` (
  `cod_examenSis` varchar(6) NOT NULL,
  `cod_historial` varchar(4) DEFAULT NULL,
  `descripcion_SIS` text,
  PRIMARY KEY (`cod_examenSis`),
  KEY `cod_historial` (`cod_historial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `examen_sis`
--

INSERT INTO `examen_sis` (`cod_examenSis`, `cod_historial`, `descripcion_SIS`) VALUES
('000001', '0001', 'normal'),
('000002', '0002', 'normal'),
('000003', '0003', 'normal'),
('000004', '0004', 'Normal'),
('000005', '0005', 'Normal'),
('000006', '0006', 'Normal'),
('000007', '0007', 'Inflamacion de la zona afectada'),
('000008', '0008', 'Situacion cronica'),
('000009', '0009', 'Perdida de apetito'),
('000010', '0010', 'Inflamacion de la zona afectada'),
('000011', '0011', 'Eosinofilos:Grave'),
('000012', '0012', 'Perdida de Peso'),
('000013', '0013', 'Deshidratacion por el color de las mucosas'),
('000014', '0014', 'Retraccion muscular y movimientos bruscos'),
('000015', '0015', 'Perdida de pelo y heridas en la piel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exa_lab`
--

DROP TABLE IF EXISTS `exa_lab`;
CREATE TABLE IF NOT EXISTS `exa_lab` (
  `codExamenLab` varchar(6) NOT NULL,
  `cod_historial` varchar(4) DEFAULT NULL,
  `creatina` varchar(20) DEFAULT NULL,
  `tgp` varchar(20) DEFAULT NULL,
  `FECHA_examLAB` date NOT NULL,
  `fas` varchar(20) DEFAULT NULL,
  `HG` varchar(20) DEFAULT NULL,
  `TGO` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`codExamenLab`),
  KEY `cod_historial` (`cod_historial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `exa_lab`
--

INSERT INTO `exa_lab` (`codExamenLab`, `cod_historial`, `creatina`, `tgp`, `FECHA_examLAB`, `fas`, `HG`, `TGO`) VALUES
('000001', '0001', 'normal', 'normal', '2021-05-04', 'normal', 'normal', 'normal'),
('000002', '0002', 'normal', 'normal', '2021-04-05', 'normal', 'normal', 'normal'),
('000003', '0003', 'normal', 'normal', '2021-09-25', 'normal', 'normal', 'normal'),
('000004', '0004', '1.9 mg/dl', 'Alto', '2020-07-26', 'Normal', 'Normal', 'Alto'),
('000005', '0005', '2.1 mg/dl', 'Normal', '2020-08-12', 'Normal', 'Alto', 'Normal'),
('000006', '0006', '2.6 mg/dl', 'Normal', '2021-10-12', 'Alto', 'Normal', 'Normal'),
('000007', '0007', '2.2 mg/dl', 'Alto', '2020-12-16', 'Normal', 'Normal', 'Alto'),
('000008', '0008', '1.4 mg/dl', 'Normal', '2020-09-13', 'Normal', 'Normal', 'Normal'),
('000009', '0009', '1.9 mg/dl', 'Normal', '2021-09-11', 'Normal', 'Normal', 'Normal'),
('000010', '0010', '1.2 mg/dl', 'Normal', '2019-02-06', 'Normal', 'Normal', 'Normal'),
('000011', '0011', '2.4 mg/dl', 'Alto', '2020-08-23', 'Alta', 'Normal', 'Alto'),
('000012', '0012', '0.9 mg/dl', 'tgp', '2021-08-21', 'Normal', 'Normal', 'Normal'),
('000013', '0013', '2.0 mg/dl', 'Normal', '2020-12-14', 'Normal', 'Normal', 'Normal'),
('000014', '0014', '1.9 mg/dl', 'Alto', '2020-08-21', 'Alta', 'Normal', 'Alto'),
('000015', '0015', '1.0 mg/dl', 'Normal', '2019-09-17', 'Normal', 'Normal', 'Normal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_clinico`
--

DROP TABLE IF EXISTS `historial_clinico`;
CREATE TABLE IF NOT EXISTS `historial_clinico` (
  `codHIsto` varchar(4) NOT NULL,
  `Cod_mascota` varchar(3) NOT NULL,
  `Fecha_Created` date NOT NULL,
  `Hora` time NOT NULL,
  `UltVacuna` date NOT NULL,
  `UltDespa` date NOT NULL,
  PRIMARY KEY (`codHIsto`),
  KEY `Cod_mascota` (`Cod_mascota`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `historial_clinico`
--

INSERT INTO `historial_clinico` (`codHIsto`, `Cod_mascota`, `Fecha_Created`, `Hora`, `UltVacuna`, `UltDespa`) VALUES
('0001', '001', '2019-06-09', '08:40:21', '2019-02-02', '2018-12-20'),
('0002', '002', '2021-10-01', '11:03:44', '2020-10-01', '2020-02-19'),
('0003', '003', '2021-10-02', '15:08:01', '2021-01-14', '2021-05-25'),
('0004', '004', '2015-05-12', '12:00:00', '2021-03-20', '2021-10-13'),
('0005', '006', '2020-01-23', '12:30:00', '2021-04-23', '2021-10-23'),
('0006', '006', '2020-03-05', '13:00:00', '2021-06-14', '2021-07-15'),
('0007', '007', '2020-07-22', '08:00:23', '2021-08-11', '2021-09-28'),
('0008', '008', '2021-01-10', '06:16:45', '2021-06-13', '2021-10-14'),
('0009', '009', '2021-05-26', '13:25:17', '2021-09-28', '2021-11-09'),
('0010', '010', '2019-02-02', '10:30:23', '2021-02-20', '2021-10-08'),
('0011', '011', '2020-08-20', '16:26:45', '2021-09-23', '2021-08-24'),
('0012', '012', '2021-08-19', '17:05:17', '2021-01-14', '2021-11-17'),
('0013', '013', '2020-12-12', '12:15:01', '2021-07-13', '2021-07-21'),
('0014', '014', '2020-08-20', '17:10:25', '2021-11-23', '2021-08-24'),
('0015', '015', '2019-09-15', '12:30:05', '2020-10-07', '2021-12-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `llena`
--

DROP TABLE IF EXISTS `llena`;
CREATE TABLE IF NOT EXISTS `llena` (
  `cod_historial` varchar(4) NOT NULL,
  `CMVP` varchar(5) NOT NULL,
  PRIMARY KEY (`cod_historial`,`CMVP`),
  KEY `CMVP` (`CMVP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `llena`
--

INSERT INTO `llena` (`cod_historial`, `CMVP`) VALUES
('0001', '45891'),
('0002', '66755'),
('0004', '66755'),
('0005', '66755'),
('0008', '66755'),
('0009', '66755'),
('0010', '66755'),
('0012', '66755'),
('0014', '66755'),
('0015', '66755'),
('0003', '85723'),
('0006', '85723'),
('0007', '85723'),
('0011', '85723'),
('0013', '85723');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

DROP TABLE IF EXISTS `mascota`;
CREATE TABLE IF NOT EXISTS `mascota` (
  `codigo_mascota` varchar(3) NOT NULL,
  `DNI_dueno` varchar(8) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `especie` varchar(30) NOT NULL,
  `raza` varchar(30) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `peso` decimal(4,2) NOT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `fechaMuerte` date DEFAULT NULL,
  PRIMARY KEY (`codigo_mascota`),
  KEY `DNI_dueno` (`DNI_dueno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`codigo_mascota`, `DNI_dueno`, `nombre`, `especie`, `raza`, `sexo`, `peso`, `fechaNacimiento`, `fechaMuerte`) VALUES
('001', '73234598', 'rambo', 'perro', 'san bernardo', 'm', '8.20', '2019-06-09', NULL),
('002', '04547832', 'chicho', 'perro', 'pug', 'm', '9.90', '2021-10-01', NULL),
('003', '74254536', 'pelusa', 'gato', 'egipcio', 'h', '3.50', '2021-10-02', NULL),
('004', '71234567', 'Blanca', 'perro', 'chihuahua', 'h', '4.30', '2016-01-03', NULL),
('005', '75434589', 'Lucas', 'perro', 'bull dog', 'm', '25.23', '2019-04-09', NULL),
('006', '78934123', 'Rex', 'perro', 'pastor aleman', 'm', '34.20', '2021-01-03', NULL),
('007', '72312578', 'Rocky', 'perro', 'golden retriver', 'm', '33.80', '2019-06-13', NULL),
('008', '78458723', 'Kitty', 'gato', 'persa', 'h', '43.20', '2012-08-18', '2018-02-08'),
('009', '79365321', 'Peluche', 'perro', 'shit zuu', 'h', '48.15', '2015-02-22', NULL),
('010', '72468973', 'Beethoven', 'perro', 'San Bernardo', 'm', '64.00', '2015-02-20', NULL),
('011', '74584123', 'Anubis', 'gato', 'Persa', 'h', '5.50', '2017-09-23', NULL),
('012', '76987231', 'Toby', 'perro', 'Husky', 'm', '25.20', '2021-01-14', NULL),
('013', '73926173', 'Maylon', 'perro', 'Dogo Argentino', 'm', '40.20', '2015-05-01', NULL),
('014', '67821530', 'Maca', 'gato', 'Persa', 'h', '4.50', '2018-02-25', NULL),
('015', '75071676', 'Max', 'perro', 'Pastor Aleman', 'm', '20.00', '2020-12-10', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico_veterinario`
--

DROP TABLE IF EXISTS `medico_veterinario`;
CREATE TABLE IF NOT EXISTS `medico_veterinario` (
  `CMVP` varchar(5) NOT NULL,
  `nom_veterinario` varchar(100) DEFAULT NULL,
  `correo_veterinario` varchar(100) DEFAULT NULL,
  `telefono_veterinario` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`CMVP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `medico_veterinario`
--

INSERT INTO `medico_veterinario` (`CMVP`, `nom_veterinario`, `correo_veterinario`, `telefono_veterinario`) VALUES
('45891', 'Diego Gaona Ramirez', 'diegogr@gmail.com', '945623847'),
('66755', 'Yamali Loli Chavez', 'yamalilc@gmail.com', '987523568'),
('85723', 'Rodrigo Gago Lopez', 'rodrigogp@gmail.com', '982354719');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `atiende`
--
ALTER TABLE `atiende`
  ADD CONSTRAINT `atiende_ibfk_1` FOREIGN KEY (`Cod_mascota`) REFERENCES `mascota` (`codigo_mascota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `atiende_ibfk_2` FOREIGN KEY (`vet_CMVP`) REFERENCES `medico_veterinario` (`CMVP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD CONSTRAINT `consultas_ibfk_1` FOREIGN KEY (`cod_historial`) REFERENCES `historial_clinico` (`codHIsto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `examen_og`
--
ALTER TABLE `examen_og`
  ADD CONSTRAINT `examen_og_ibfk_1` FOREIGN KEY (`cod_historial`) REFERENCES `historial_clinico` (`codHIsto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `examen_sis`
--
ALTER TABLE `examen_sis`
  ADD CONSTRAINT `examen_sis_ibfk_1` FOREIGN KEY (`cod_historial`) REFERENCES `historial_clinico` (`codHIsto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `exa_lab`
--
ALTER TABLE `exa_lab`
  ADD CONSTRAINT `exa_lab_ibfk_1` FOREIGN KEY (`cod_historial`) REFERENCES `historial_clinico` (`codHIsto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `historial_clinico`
--
ALTER TABLE `historial_clinico`
  ADD CONSTRAINT `Cod_mascota` FOREIGN KEY (`Cod_mascota`) REFERENCES `mascota` (`codigo_mascota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `llena`
--
ALTER TABLE `llena`
  ADD CONSTRAINT `llena_ibfk_1` FOREIGN KEY (`CMVP`) REFERENCES `medico_veterinario` (`CMVP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `llena_ibfk_2` FOREIGN KEY (`cod_historial`) REFERENCES `historial_clinico` (`codHIsto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `mascota_ibfk_1` FOREIGN KEY (`DNI_dueno`) REFERENCES `dueno` (`DNI`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
