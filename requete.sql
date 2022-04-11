
//Permet d'extraire les post_title de cours ayant la forme:
//582-1w1 Mise en page web

SELECT `post_title` FROM `wp_posts` WHERE `post_title` LIKE "___-___ %"

SELECT SUBSTR(`post_title`,5) FROM `wp_posts` WHERE `post_title` LIKE "___-___ %"

UPDATE `wp_posts` SET `post_title` = SUBSTR(`post_title`, 5)