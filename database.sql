-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.8-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table sports_manager.clubs
CREATE TABLE IF NOT EXISTS `clubs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sports_manager.clubs: ~0 rows (approximately)
/*!40000 ALTER TABLE `clubs` DISABLE KEYS */;
INSERT INTO `clubs` (`id`, `name`, `created`, `modified`) VALUES
	(1, 'Abbey Bowmen (St Albans) Archery Club', '2021-06-28 14:10:26', '2021-06-28 14:10:26');
/*!40000 ALTER TABLE `clubs` ENABLE KEYS */;

-- Dumping structure for table sports_manager.clubs_sports
CREATE TABLE IF NOT EXISTS `clubs_sports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `club_id` int(11) NOT NULL,
  `sport_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_clubs_sports_clubs` (`club_id`),
  KEY `FK_clubs_sports_sports` (`sport_id`),
  CONSTRAINT `FK_clubs_sports_clubs` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_clubs_sports_sports` FOREIGN KEY (`sport_id`) REFERENCES `sports` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sports_manager.clubs_sports: ~0 rows (approximately)
/*!40000 ALTER TABLE `clubs_sports` DISABLE KEYS */;
INSERT INTO `clubs_sports` (`id`, `club_id`, `sport_id`) VALUES
	(1, 1, 1);
/*!40000 ALTER TABLE `clubs_sports` ENABLE KEYS */;

-- Dumping structure for table sports_manager.coaches_players
CREATE TABLE IF NOT EXISTS `coaches_players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coach_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_coaches_players_users` (`coach_id`),
  KEY `FK_coaches_players_users_2` (`player_id`),
  CONSTRAINT `FK_coaches_players_users` FOREIGN KEY (`coach_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_coaches_players_users_2` FOREIGN KEY (`player_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sports_manager.coaches_players: ~0 rows (approximately)
/*!40000 ALTER TABLE `coaches_players` DISABLE KEYS */;
/*!40000 ALTER TABLE `coaches_players` ENABLE KEYS */;

-- Dumping structure for table sports_manager.coaches_teams
CREATE TABLE IF NOT EXISTS `coaches_teams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coach_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_coaches_teams_users` (`coach_id`),
  KEY `FK_coaches_teams_teams` (`team_id`),
  CONSTRAINT `FK_coaches_teams_teams` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_coaches_teams_users` FOREIGN KEY (`coach_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sports_manager.coaches_teams: ~0 rows (approximately)
/*!40000 ALTER TABLE `coaches_teams` DISABLE KEYS */;
/*!40000 ALTER TABLE `coaches_teams` ENABLE KEYS */;

-- Dumping structure for table sports_manager.matches
CREATE TABLE IF NOT EXISTS `matches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `sport_id` int(11) NOT NULL,
  `date_from` datetime NOT NULL,
  `date_to` datetime NOT NULL,
  `apply_from` datetime NOT NULL,
  `apply_to` datetime NOT NULL,
  `match_type` tinyint(4) NOT NULL COMMENT '0=Individual, 1=Team',
  `organizer_id` int(11) NOT NULL,
  `ticket_price` decimal(10,2) NOT NULL,
  `total_tickets` int(11) NOT NULL,
  `sold_tickets` int(11) NOT NULL,
  `match_status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=Pending, 1 = In Progress, 2 = Finished',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_matches_sports` (`sport_id`),
  KEY `FK_matches_users` (`organizer_id`),
  CONSTRAINT `FK_matches_sports` FOREIGN KEY (`sport_id`) REFERENCES `sports` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_matches_users` FOREIGN KEY (`organizer_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sports_manager.matches: ~0 rows (approximately)
/*!40000 ALTER TABLE `matches` DISABLE KEYS */;
/*!40000 ALTER TABLE `matches` ENABLE KEYS */;

-- Dumping structure for table sports_manager.matche_applications
CREATE TABLE IF NOT EXISTS `matche_applications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `match_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL DEFAULT 0,
  `player_id` int(11) NOT NULL DEFAULT 0,
  `application_status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=Pending, 1=Approved, 2=Rejected',
  `notes` varchar(255) DEFAULT '',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_matches_teams_matches` (`match_id`),
  KEY `FK_matches_teams_teams` (`team_id`),
  KEY `FK_matches_teams_users` (`player_id`),
  CONSTRAINT `FK_matches_teams_matches` FOREIGN KEY (`match_id`) REFERENCES `matches` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_matches_teams_teams` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_matches_teams_users` FOREIGN KEY (`player_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sports_manager.matche_applications: ~0 rows (approximately)
/*!40000 ALTER TABLE `matche_applications` DISABLE KEYS */;
/*!40000 ALTER TABLE `matche_applications` ENABLE KEYS */;

-- Dumping structure for table sports_manager.match_rounds
CREATE TABLE IF NOT EXISTS `match_rounds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `match_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_match_rounds_matches` (`match_id`),
  CONSTRAINT `FK_match_rounds_matches` FOREIGN KEY (`match_id`) REFERENCES `matches` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sports_manager.match_rounds: ~0 rows (approximately)
/*!40000 ALTER TABLE `match_rounds` DISABLE KEYS */;
/*!40000 ALTER TABLE `match_rounds` ENABLE KEYS */;

-- Dumping structure for table sports_manager.match_round_matches
CREATE TABLE IF NOT EXISTS `match_round_matches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `match_round_id` int(11) NOT NULL,
  `player1` int(11) NOT NULL,
  `player2` int(11) NOT NULL,
  `team1` int(11) NOT NULL,
  `team2` int(11) NOT NULL,
  `winner` int(11) NOT NULL,
  `match_status` int(11) NOT NULL COMMENT '0=Pending, 1=In Progress, 2=Finished',
  PRIMARY KEY (`id`),
  KEY `FK_match_round_matches_match_rounds` (`match_round_id`),
  KEY `FK_match_round_matches_users` (`player1`),
  KEY `FK_match_round_matches_users_2` (`player2`),
  KEY `FK_match_round_matches_teams` (`team1`),
  KEY `FK_match_round_matches_teams_2` (`team2`),
  CONSTRAINT `FK_match_round_matches_match_rounds` FOREIGN KEY (`match_round_id`) REFERENCES `match_rounds` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_match_round_matches_teams` FOREIGN KEY (`team1`) REFERENCES `teams` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_match_round_matches_teams_2` FOREIGN KEY (`team2`) REFERENCES `teams` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_match_round_matches_users` FOREIGN KEY (`player1`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_match_round_matches_users_2` FOREIGN KEY (`player2`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sports_manager.match_round_matches: ~0 rows (approximately)
/*!40000 ALTER TABLE `match_round_matches` DISABLE KEYS */;
/*!40000 ALTER TABLE `match_round_matches` ENABLE KEYS */;

-- Dumping structure for table sports_manager.player_points
CREATE TABLE IF NOT EXISTS `player_points` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `player_id` int(11) NOT NULL,
  `match_round_id` int(11) NOT NULL,
  `points` decimal(10,1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_player_points_users` (`player_id`),
  KEY `FK_player_points_match_round_matches` (`match_round_id`),
  CONSTRAINT `FK_player_points_match_round_matches` FOREIGN KEY (`match_round_id`) REFERENCES `match_round_matches` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_player_points_users` FOREIGN KEY (`player_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sports_manager.player_points: ~0 rows (approximately)
/*!40000 ALTER TABLE `player_points` DISABLE KEYS */;
/*!40000 ALTER TABLE `player_points` ENABLE KEYS */;

-- Dumping structure for table sports_manager.sports
CREATE TABLE IF NOT EXISTS `sports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sports_manager.sports: ~0 rows (approximately)
/*!40000 ALTER TABLE `sports` DISABLE KEYS */;
INSERT INTO `sports` (`id`, `name`, `created`, `modified`) VALUES
	(1, 'Archery', '2021-06-28 14:09:56', '2021-06-28 14:09:56');
/*!40000 ALTER TABLE `sports` ENABLE KEYS */;

-- Dumping structure for table sports_manager.teams
CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `club_id` int(11) NOT NULL,
  `sport_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_teams_clubs` (`club_id`),
  KEY `FK_teams_sports` (`sport_id`),
  CONSTRAINT `FK_teams_clubs` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_teams_sports` FOREIGN KEY (`sport_id`) REFERENCES `sports` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sports_manager.teams: ~0 rows (approximately)
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;

-- Dumping structure for table sports_manager.teams_users
CREATE TABLE IF NOT EXISTS `teams_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_teams_users_teams` (`team_id`),
  KEY `FK_teams_users_users` (`user_id`),
  CONSTRAINT `FK_teams_users_teams` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_teams_users_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sports_manager.teams_users: ~0 rows (approximately)
/*!40000 ALTER TABLE `teams_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `teams_users` ENABLE KEYS */;

-- Dumping structure for table sports_manager.team_points
CREATE TABLE IF NOT EXISTS `team_points` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` int(11) NOT NULL,
  `match_round_id` int(11) NOT NULL,
  `points` decimal(10,1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_team_points_teams` (`team_id`),
  KEY `FK_team_points_match_round_matches` (`match_round_id`),
  CONSTRAINT `FK_team_points_match_round_matches` FOREIGN KEY (`match_round_id`) REFERENCES `match_round_matches` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_team_points_teams` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sports_manager.team_points: ~0 rows (approximately)
/*!40000 ALTER TABLE `team_points` DISABLE KEYS */;
/*!40000 ALTER TABLE `team_points` ENABLE KEYS */;

-- Dumping structure for table sports_manager.ticket_sales
CREATE TABLE IF NOT EXISTS `ticket_sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `match_id` int(11) NOT NULL,
  `buyer_name` varchar(255) NOT NULL DEFAULT 'Direct visitor',
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_ticket_sales_match_round_matches` (`match_id`),
  CONSTRAINT `FK_ticket_sales_match_round_matches` FOREIGN KEY (`match_id`) REFERENCES `match_round_matches` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sports_manager.ticket_sales: ~0 rows (approximately)
/*!40000 ALTER TABLE `ticket_sales` DISABLE KEYS */;
/*!40000 ALTER TABLE `ticket_sales` ENABLE KEYS */;

-- Dumping structure for table sports_manager.training_schedules
CREATE TABLE IF NOT EXISTS `training_schedules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coach_id` int(11) NOT NULL,
  `sport_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `date_from` datetime NOT NULL,
  `date_to` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_training_schedules_users` (`coach_id`),
  KEY `FK_training_schedules_sports` (`sport_id`),
  KEY `FK_training_schedules_users_2` (`player_id`),
  KEY `FK_training_schedules_teams` (`team_id`),
  CONSTRAINT `FK_training_schedules_sports` FOREIGN KEY (`sport_id`) REFERENCES `sports` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_training_schedules_teams` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_training_schedules_users` FOREIGN KEY (`coach_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_training_schedules_users_2` FOREIGN KEY (`player_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sports_manager.training_schedules: ~0 rows (approximately)
/*!40000 ALTER TABLE `training_schedules` DISABLE KEYS */;
/*!40000 ALTER TABLE `training_schedules` ENABLE KEYS */;

-- Dumping structure for table sports_manager.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=Club Manager, 1=Match Organizer, 2=Coach, 3=Player',
  `club_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_users_clubs` (`club_id`),
  CONSTRAINT `FK_users_clubs` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sports_manager.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
