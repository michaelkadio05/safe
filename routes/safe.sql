/** Base de donnée Safe v1 **/

CREATE TABLE `pays` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `etat` enum('Actif','Inactif','') NOT NULL DEFAULT 'Actif',
  `record_pays` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `etat` enum('Actif','Inactif','') NOT NULL DEFAULT 'Actif',
  `record_region` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `ville` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `etat` enum('Actif','Inactif','') NOT NULL DEFAULT 'Actif',
  `record_ville` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `commune` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `etat` enum('Actif','Inactif','') NOT NULL DEFAULT 'Actif',
  `record_commune` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `age` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `etat` enum('Actif','Inactif','') NOT NULL DEFAULT 'Actif',
  `record_age` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `situation_pro` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `etat` enum('Actif','Inactif','') NOT NULL DEFAULT 'Actif',
  `record_situation_pro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `nscolaire` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `etat` enum('Actif','Inactif','') NOT NULL DEFAULT 'Actif',
  `record_nscolaire` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `classe` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `etat` enum('Actif','Inactif','') NOT NULL DEFAULT 'Actif',
  `record_classe` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `thematique` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `etat` enum('Actif','Inactif','') NOT NULL DEFAULT 'Actif',
  `record_thematique` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `accompagnement` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `etat` enum('Actif','Inactif','') NOT NULL DEFAULT 'Actif',
  `record_accompagnement` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `minorite` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `etat` enum('Actif','Inactif','') NOT NULL DEFAULT 'Actif',
  `record_minorite` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
