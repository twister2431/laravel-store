/*
 Navicat Premium Data Transfer


 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : dblaravelstore

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 30/06/2024 10:05:56
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Records of brands
-- ----------------------------
INSERT INTO `brands` VALUES (1, 'Garnier', '2024-06-30 09:57:25', NULL);
INSERT INTO `brands` VALUES (2, 'Biore', '2024-06-30 09:57:25', NULL);
INSERT INTO `brands` VALUES (3, 'Neutrogena', '2024-06-30 09:57:25', NULL);
INSERT INTO `brands` VALUES (4, 'Clinique', '2024-06-30 09:57:25', NULL);


-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (1, 'Garnier SkinActive Charcoal Blackhead Eliminating Scrub', 'Un exfoliante con carbón que ayuda a eliminar los puntos negros y purificar los poros', 'product/photo-1.png', 123.43, 1, '2024-06-30 09:59:48', NULL);
INSERT INTO `products` VALUES (2, 'Biore Charcoal Deep Cleansing Pore Strips', 'Tiras limpiadoras de poros con carbón que eliminan impurezas y puntos negros', 'product/photo-1.png', 564.43, 2, '2024-06-30 10:02:52', NULL);
INSERT INTO `products` VALUES (3, 'Biore Charcoal Acne Clearing Cleanser', 'Limpiador de carbón que ayuda a tratar el acné y prevenir brotes futuros.', 'product/photo-1.png', 223.34, 3, '2024-06-30 10:03:37', NULL);
INSERT INTO `products` VALUES (4, 'Clinique City Block Purifying Charcoal Cleansing Gel', 'Gel limpiador con carbón que purifica la piel y elimina las impurezas.', 'product/photo-1.png', 50.00, 4, '2024-06-30 10:04:30', NULL);
INSERT INTO `products` VALUES (5, 'Neutrogena Deep Clean Purifying Cleanser/Mask with Charcoal', 'Limpiador y mascarilla con carbón que purifica profundamente la piel.', 'product/photo-1.png', 30.00, 3, '2024-06-30 10:05:16', NULL);

INSERT INTO `users` VALUES (1, 'MARLON MANUEL MENA CHABLE', 'supermario@admin.com', NULL, '$2y$12$67uaXskU9H65Sld87Gy1lu22Dogx/nLVON7AAaJCENHoDzo/T9jo.', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-30 15:18:50', '2024-06-30 15:18:50');

SET FOREIGN_KEY_CHECKS = 1;
