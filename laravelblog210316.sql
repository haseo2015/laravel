/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : laravelblog

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-03-21 17:13:29
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `cd_articles`
-- ----------------------------
DROP TABLE IF EXISTS `cd_articles`;
CREATE TABLE `cd_articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `is_published` tinyint(1) NOT NULL,
  `published_at` datetime NOT NULL,
  `meta_keys` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `articles_slug_index` (`slug`),
  KEY `articles_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cd_articles
-- ----------------------------
INSERT INTO cd_articles VALUES ('1', 'Possimus ea dolor sint porro quibusdam.', 'possimus-ea-dolor-sint-porro-quibusdam', '<p>Reprehenderit id dolorum consequatur et et. Tempore quis sit qui aut alias nulla. Consequatur rerum recusandae quod dolor et temporibus consequatur ducimus. Quas earum repellat nobis. In a reprehenderit doloremque eaque velit. Consectetur aut est explicabo molestias aspernatur amet sed. Quia nemo quisquam pariatur amet eveniet nemo. Inventore a voluptatum dolor sit ipsum ab. Aut odio iure ut ad aut excepturi qui. Harum consequatur voluptatibus et et quam. Omnis ipsa et officia in sit sunt tenetur. Veritatis tenetur atque tempore quia.</p>', '1', '2015-09-12 16:29:18', 'molestias,aut,in,exercitationem,facere', 'Illum error voluptates repudiandae quam.', '2', '2015-12-23 11:14:05', '2015-12-23 11:14:05');
INSERT INTO cd_articles VALUES ('2', 'Et ipsam ut et voluptate quia optio omnis.', 'et-ipsam-ut-et-voluptate-quia-optio-omnis', '<p>Temporibus repudiandae ut aut qui a. Voluptatem et nisi nihil odit. Debitis deserunt quia dolorem laboriosam blanditiis harum eveniet. Cupiditate quia temporibus molestias culpa voluptatum. Repellat cumque et dolorum facilis. Qui dolor at suscipit molestiae laborum. Libero consectetur eligendi perferendis consequatur sit repellat doloremque mollitia. Placeat assumenda provident consequatur voluptatum debitis harum. Fugiat eveniet nulla nemo exercitationem nam quos. Alias et ratione aliquid et voluptas et aspernatur dolores. Possimus quibusdam unde fugit in et assumenda suscipit. Sequi saepe et corporis autem corrupti dolor quisquam. Dolor officia voluptatem quam ab et sint quas.</p>', '1', '2015-06-13 08:00:57', 'provident,nulla,et,doloremque,enim', 'Cum consectetur repellat aliquam ab velit quasi facere.', '1', '2015-12-23 11:14:05', '2015-12-23 11:14:05');
INSERT INTO cd_articles VALUES ('3', 'Aliquid quis quos sed odio enim a.', 'aliquid-quis-quos-sed-odio-enim-a', '<p>Error ea autem iusto inventore veritatis id laboriosam laboriosam. At iste numquam quae occaecati dicta ipsum velit vero. Quasi placeat omnis possimus enim quia nobis aut. Unde id repellat quis labore. Minus ducimus explicabo vitae dolorem. Similique aut aspernatur ut molestiae aut illo vel ipsam. Maxime sed et aut modi exercitationem.</p>', '0', '2015-02-06 09:01:26', 'dolorem,aut,perferendis,itaque,ut', 'Necessitatibus excepturi iusto eius dolorem qui harum aut.', '2', '2015-12-23 11:14:05', '2015-12-23 11:14:05');
INSERT INTO cd_articles VALUES ('4', 'Autem aut ratione suscipit.', 'autem-aut-ratione-suscipit', '<p>Et recusandae minima tempore quis. Commodi voluptatem et nostrum odio. Aut minima pariatur quam. Reiciendis est soluta reiciendis quis tempora. Dolorum molestiae quos expedita ut tempora fugit. Culpa in rerum voluptas voluptatum voluptatem. Ut tempora velit a quaerat. Aut molestiae fuga occaecati voluptatibus et vero. Iure ipsum et eaque doloribus inventore. Et suscipit quam autem voluptatem. Aut laudantium esse et nesciunt ipsum et.</p>', '1', '2015-11-12 20:28:40', 'molestiae,possimus,iusto,perspiciatis,possimus', 'Accusantium possimus voluptatibus dolor provident.', '2', '2015-12-23 11:14:05', '2015-12-23 11:14:05');
INSERT INTO cd_articles VALUES ('5', 'Debitis impedit corporis sint cum.', 'debitis-impedit-corporis-sint-cum', '<p>Laboriosam maiores sit iste incidunt dolore quia. Et sunt et rerum harum ut. Nesciunt sunt quisquam nostrum laudantium nihil. Soluta omnis dolor est accusamus non reiciendis corrupti. Temporibus consectetur ab accusantium inventore eveniet asperiores enim. Voluptatem sunt tempora eum ab est tempore. Aut magnam exercitationem omnis quo id. Quasi et aut eum nulla.</p>', '1', '2015-02-25 23:27:33', 'eius,pariatur,dignissimos,cum,eveniet', 'Consequatur modi autem voluptatem eos qui eligendi.', '2', '2015-12-23 11:14:05', '2015-12-23 11:14:05');
INSERT INTO cd_articles VALUES ('6', 'Tenetur ut excepturi et quas.', 'tenetur-ut-excepturi-et-quas', '<p>Quam neque ullam ullam rerum et assumenda. Sunt architecto nulla blanditiis est. Rerum beatae dignissimos dolorum cupiditate. Illum iure consequatur ea iure est atque tempore. Excepturi et totam odio ipsum unde est. Nostrum inventore veniam et voluptatum itaque doloremque at. Et voluptates ullam est cum voluptatem repellendus ut excepturi. Dicta tempore consectetur aspernatur sit. Pariatur placeat est nostrum molestiae. Et explicabo sint sed similique natus voluptas nemo. Incidunt eos quod quo alias fuga ea qui. Quia dolores sunt esse ad consequatur odit et. Ad deleniti eligendi nesciunt odit.</p>', '0', '2015-01-21 09:08:56', 'sit,voluptas,consectetur,cupiditate,repellendus', 'Voluptatem quis cumque est voluptas nihil.', '2', '2015-12-23 11:14:06', '2015-12-23 11:14:06');
INSERT INTO cd_articles VALUES ('7', 'Mollitia in aut quasi.', 'mollitia-in-aut-quasi', '<p>Pariatur aperiam exercitationem tenetur sequi ea vel. Qui qui soluta doloremque repellendus cum aliquam. Esse quaerat eius soluta tempore iure. Dolorem quasi perspiciatis iusto qui. Amet hic omnis earum adipisci debitis amet distinctio. Eius et quis sunt repudiandae corporis est rerum ipsam. Quam aut et harum autem repellendus harum.</p>', '1', '2015-07-08 20:20:02', 'et,dolore,quam,voluptatem,est', 'Atque est debitis qui est sit quidem et.', '2', '2015-12-23 11:14:06', '2015-12-23 11:14:06');
INSERT INTO cd_articles VALUES ('8', 'Quia quas expedita eligendi quaerat laborum a et molestiae.', 'quia-quas-expedita-eligendi-quaerat-laborum-a-et-molestiae', '<p>Molestiae neque quis et omnis doloremque. Voluptas pariatur repudiandae asperiores soluta praesentium sed. Omnis expedita eligendi libero non voluptatem sint. Consectetur esse aliquid officia veritatis animi vel ea. Voluptatem maiores minus non provident odio. Ipsum cumque sunt molestiae. Aut quasi laudantium in atque. Sed dolorum corporis enim. Doloribus porro harum quisquam qui dolorem nam rerum. Dignissimos eum eum ut quia voluptas vel. Numquam eaque dolorem quaerat dolorum corporis non. Natus explicabo odio eos et tempore.</p>', '1', '2015-01-24 13:24:12', 'voluptas,vel,dolorem,molestias,vel', 'Non voluptate nesciunt qui voluptas accusamus quia ea.', '2', '2015-12-23 11:14:06', '2015-12-23 11:14:06');
INSERT INTO cd_articles VALUES ('9', 'Veniam adipisci autem in et quibusdam enim minima.', 'veniam-adipisci-autem-in-et-quibusdam-enim-minima', '<p>Autem voluptas autem porro aut ut sint. Id tempore et voluptatibus ea vitae sequi debitis. Dolores quia ad numquam molestiae. Ab reprehenderit repellat qui unde incidunt nisi quia. Perspiciatis aliquam nemo corporis. Ut facere ipsam praesentium in dolore a magni. Mollitia fugit minus voluptate ipsam a. Et laudantium et nesciunt expedita sed ipsam reiciendis.</p>', '1', '2015-12-15 02:18:33', 'odio,veritatis,quos,consequatur,beatae', 'Sequi dolores consequatur ab culpa.', '2', '2015-12-23 11:14:06', '2015-12-23 11:14:06');
INSERT INTO cd_articles VALUES ('10', 'Sed placeat repellendus eum ut quia dolore.', 'sed-placeat-repellendus-eum-ut-quia-dolore', '<p>Laboriosam minus laborum temporibus corporis omnis. Rerum et temporibus eum recusandae et sint. Consequuntur in consequatur et porro. Enim ratione aliquam fugit dolores. Numquam aut necessitatibus nam recusandae sunt. Ratione eos ex commodi ab facilis. Sapiente voluptatem officiis atque quas. Explicabo voluptate consequuntur vel harum ducimus delectus voluptas. Eos eius sequi et sequi ducimus dignissimos laborum. Numquam quis commodi quam qui repellendus dolorem autem. Nulla nihil et aut autem magnam blanditiis mollitia harum. Eius sapiente amet ullam reprehenderit nam ducimus excepturi. Dolor est architecto voluptas. Laborum aut voluptas commodi esse ab ut recusandae libero.</p>', '0', '2015-02-14 02:26:05', 'ut,velit,quia,voluptas,dolores', 'Sit animi ea maiores quia est repudiandae aut.', '1', '2015-12-23 11:14:06', '2015-12-23 11:14:06');
INSERT INTO cd_articles VALUES ('11', 'Illo iste est consequatur illum qui fuga ratione.', 'illo-iste-est-consequatur-illum-qui-fuga-ratione', '<p>Numquam amet labore molestiae aspernatur. Dolorem voluptas alias animi dolor rerum nihil harum. Alias voluptatem minima animi qui reprehenderit. Id voluptatem non maiores eius ad et a sunt. Voluptatibus eius animi et. Quas nesciunt saepe aut in labore rerum ut. Hic optio minus qui. Laboriosam maiores quod sed qui. Mollitia quod ut mollitia incidunt voluptatem pariatur fugiat.</p>', '1', '2015-07-29 07:35:15', 'id,nemo,incidunt,consectetur,minus', 'Reiciendis consequatur atque consequatur aperiam sint.', '1', '2015-12-23 11:14:06', '2015-12-23 11:14:06');
INSERT INTO cd_articles VALUES ('12', 'Sequi explicabo tenetur debitis exercitationem.', 'sequi-explicabo-tenetur-debitis-exercitationem', '<p>Maiores nobis error consectetur sed repellendus eum qui. Ducimus corporis natus dolorum fugit accusantium nemo aut. Sunt autem totam quos quas ex vel recusandae quis. Et quaerat enim amet quia. Harum laboriosam aut fugit sunt quas vitae harum. Omnis vel illum consequatur alias maiores. Est sunt nostrum aperiam ab esse est. Error ea quae ab molestiae in vel voluptatem. Aperiam ex et voluptas explicabo rerum beatae.</p>', '1', '2015-04-26 01:33:45', 'et,ex,inventore,quae,pariatur', 'Commodi et praesentium sint optio.', '2', '2015-12-23 11:14:06', '2015-12-23 11:14:06');
INSERT INTO cd_articles VALUES ('13', 'Iste accusantium beatae tempore mollitia consequatur inventore numquam eos.', 'iste-accusantium-beatae-tempore-mollitia-consequatur-inventore-numquam-eos', '<p>Sint laudantium mollitia error ea eum est perspiciatis eveniet. Aspernatur explicabo possimus sed et architecto. Ipsum vitae architecto sunt ea. Libero quia natus nulla incidunt aut alias. Incidunt velit exercitationem ut. Quisquam sed eveniet quia dolorem aut. Aut et et corrupti ipsam.</p>', '0', '2015-05-06 08:08:35', 'sunt,consectetur,ab,et,distinctio', 'Illo sapiente iure quibusdam autem repellat velit.', '2', '2015-12-23 11:14:06', '2015-12-23 11:14:06');
INSERT INTO cd_articles VALUES ('14', 'Vel repellat in blanditiis animi porro distinctio.', 'vel-repellat-in-blanditiis-animi-porro-distinctio', '<p>Dolores voluptas officiis eos eaque. Accusantium sed molestiae sed qui vel. Repellat saepe rerum repudiandae amet vero. Tempora et ea voluptatem distinctio hic. Aut aperiam quo amet. Eius cumque fugit assumenda enim. Enim impedit non rerum quibusdam consequatur sit possimus. Nihil mollitia voluptatibus ut consectetur sapiente consequatur et assumenda. Maiores perspiciatis dignissimos ut facere rerum eveniet voluptate perferendis. Quibusdam qui qui et. Sed sint dolores ab.</p>', '0', '2015-07-22 19:19:21', 'nesciunt,enim,beatae,qui,inventore', 'Soluta qui aut qui autem qui necessitatibus earum.', '1', '2015-12-23 11:14:07', '2015-12-23 11:14:07');
INSERT INTO cd_articles VALUES ('15', 'Ipsam delectus quis ratione fugiat tempore omnis voluptates.', 'ipsam-delectus-quis-ratione-fugiat-tempore-omnis-voluptates', '<p>Dicta accusantium mollitia labore perspiciatis. Aut fugit quis consequuntur voluptas iste vero accusamus natus. Ut deserunt unde saepe animi sit sit ea adipisci. Fugit eaque distinctio est et. Velit laudantium dolores in officiis modi. Sit sint repellendus possimus nam consequatur autem quae. Aperiam dolorem quas officiis at ut similique ut. Cupiditate molestiae sed dolor est sequi ducimus qui. Laudantium repellendus ipsam fugiat autem sint. Aliquam ut quia quod dignissimos nostrum. Aspernatur veritatis vitae voluptates. Beatae qui et explicabo ipsa ut. Incidunt eligendi harum cum sequi et qui eveniet. Et quaerat dolores quam accusamus laudantium iure. Maxime velit eaque saepe aliquid.</p>', '1', '2015-06-18 12:09:27', 'voluptas,tenetur,eligendi,quaerat,quod', 'Sapiente dolor enim aliquid soluta quas et dolor.', '1', '2015-12-23 11:14:07', '2015-12-23 11:14:07');
INSERT INTO cd_articles VALUES ('16', 'Voluptas veniam corrupti velit voluptatem dolorem.', 'voluptas-veniam-corrupti-velit-voluptatem-dolorem', '<p>Doloremque dolore aliquid saepe error eos explicabo est. Rerum sapiente aperiam vel id esse consequatur pariatur. Suscipit et sit qui quos. Quis ut recusandae rem pariatur quo iste quisquam. Eum reiciendis illum et repudiandae. Et ullam odio facere ipsam alias. Dolore quidem ea dolorem ipsam non officia. Quidem quibusdam sit perspiciatis totam non nihil reiciendis.</p>', '0', '2015-06-06 20:10:02', 'impedit,porro,et,quia,fuga', 'Dolor commodi amet soluta.', '2', '2015-12-23 11:14:07', '2015-12-23 11:14:07');
INSERT INTO cd_articles VALUES ('17', 'Fugit eos quae et eius.', 'fugit-eos-quae-et-eius', '<p>Inventore assumenda aut assumenda ut ex quisquam. Eius odit labore enim officia repellat. Fugit doloremque impedit ducimus quia laudantium. Nostrum ullam et voluptas voluptas. Cum ipsa aut cumque quibusdam delectus aut. Sit quia sunt et expedita et esse. Delectus numquam aut accusamus reiciendis nesciunt incidunt incidunt. Repudiandae rem eum quisquam magni et quia harum. Laudantium aliquid est non harum eum esse. Exercitationem assumenda magnam accusantium quaerat. Sunt aliquam voluptatem ad repellendus non minima. Corrupti illo aliquam asperiores officiis omnis.</p>', '1', '2015-10-31 19:46:26', 'deleniti,quia,aut,blanditiis,molestiae', 'Nobis necessitatibus dolore ad delectus.', '2', '2015-12-23 11:14:07', '2015-12-23 11:14:07');
INSERT INTO cd_articles VALUES ('18', 'Reprehenderit deserunt omnis eligendi.', 'reprehenderit-deserunt-omnis-eligendi', '<p>Ipsam cupiditate modi eaque nobis possimus. Ut laborum quia magnam delectus velit et. Quis sunt et qui aut sit. Nobis iusto tenetur ipsam fugit inventore velit. Autem expedita ex quis ipsam. Molestiae debitis at cum occaecati magnam amet. Aut amet cupiditate consequatur quos eos ducimus. Tempore illo ex adipisci distinctio nostrum est magni.</p>', '1', '2015-01-27 03:30:34', 'nam,eos,dignissimos,harum,non', 'Sequi natus amet aut voluptates voluptatibus velit quia.', '1', '2015-12-23 11:14:07', '2015-12-23 11:14:07');
INSERT INTO cd_articles VALUES ('19', 'Ratione sunt adipisci illo quidem.', 'ratione-sunt-adipisci-illo-quidem', '<p>Reprehenderit dolores ut eos iste accusantium. Minima quia ratione iure nostrum sit enim. Explicabo et corrupti dicta odio tenetur nesciunt. Voluptatibus veritatis quia adipisci delectus. Necessitatibus in aliquam nulla voluptas et. At quas id alias assumenda esse. Laudantium porro voluptas voluptatem. Dolorem maiores illo voluptatibus. Tempore rem deleniti id autem. Veritatis et esse iure a. Doloribus sunt inventore placeat est.</p>', '1', '2014-12-24 05:30:37', 'doloribus,nihil,at,atque,quod', 'Consequatur quia est ea quibusdam qui qui enim.', '1', '2015-12-23 11:14:07', '2015-12-23 11:14:07');
INSERT INTO cd_articles VALUES ('20', 'Eligendi quis ab et nostrum.', 'eligendi-quis-ab-et-nostrum', '<p>Voluptatem minima enim nostrum ut vero reprehenderit. Eum natus et culpa est quia odit ducimus in. Corporis a excepturi ab doloremque recusandae quia qui. Reiciendis necessitatibus voluptas dolores magnam ut qui accusamus et. Neque provident numquam reprehenderit corrupti atque aliquid quo. Fuga repudiandae qui tenetur delectus odio. Culpa quibusdam omnis aut. Culpa cum est dolor. Ea et aut ipsum facilis asperiores.</p>', '1', '2015-02-24 15:12:58', 'iure,aliquid,ut,hic,autem', 'Ullam rerum eos sapiente dolorem nobis.', '2', '2015-12-23 11:14:07', '2015-12-23 11:14:07');
INSERT INTO cd_articles VALUES ('21', 'Omnis voluptatibus esse corporis et.', 'omnis-voluptatibus-esse-corporis-et', '<p>Ut impedit aut error deleniti. Tempora dolorem maiores quaerat dolores quo iusto ipsum. Officiis qui et cum itaque molestias qui quidem. Magnam velit neque qui. Consequatur aut in culpa iusto alias. Tenetur voluptas a odit placeat culpa ex et. In tempore architecto voluptas ratione.</p>', '0', '2015-02-18 23:54:55', 'dolores,fugit,laborum,aut,a', 'Non sint natus eaque ea qui nisi.', '2', '2015-12-23 11:14:07', '2015-12-23 11:14:07');
INSERT INTO cd_articles VALUES ('22', 'Cum sed ex quas non.', 'cum-sed-ex-quas-non', '<p>Repellendus quod expedita suscipit minima quo perferendis incidunt. Nihil saepe architecto nihil optio excepturi magnam totam. Deserunt placeat molestias necessitatibus enim qui natus. Perferendis commodi vitae ex id animi omnis. In quos adipisci qui non provident aspernatur sapiente enim. Soluta et laboriosam nam nemo. In illum voluptatem reiciendis rem. Dignissimos id odit asperiores cum quo. Ea fugit non mollitia doloremque sunt harum.</p>', '0', '2015-05-30 13:44:31', 'earum,alias,quo,animi,accusamus', 'Nobis et ut rem sed fuga earum.', '2', '2015-12-23 11:14:08', '2015-12-23 11:14:08');
INSERT INTO cd_articles VALUES ('23', 'Eum debitis cumque consequatur qui.', 'eum-debitis-cumque-consequatur-qui', '<p>Omnis neque aspernatur voluptate et. Omnis eum voluptas quibusdam sunt quia. Consequatur qui ut ea praesentium numquam. Reprehenderit et aperiam est qui est est. Distinctio tempora reiciendis corporis sunt est qui. Occaecati velit est velit cupiditate. Non repellendus aspernatur eum et maxime molestiae ea. Consequatur incidunt mollitia consequatur nemo dolores quibusdam aut. Corrupti et eaque facere facilis. Facere praesentium ab id rem magni quisquam tempore sequi. Sed laborum nemo omnis maiores sit non est aut. Qui nulla architecto eos sapiente.</p>', '0', '2015-09-19 04:09:04', 'aut,perspiciatis,repudiandae,omnis,eos', 'Accusantium non eos atque placeat voluptatem.', '2', '2015-12-23 11:14:08', '2015-12-23 11:14:08');
INSERT INTO cd_articles VALUES ('24', 'Aut ab aut qui laudantium totam quibusdam aut.', 'aut-ab-aut-qui-laudantium-totam-quibusdam-aut', '<p>Inventore quos molestias vel eos accusantium minus. Laudantium officiis quis consectetur debitis quia. Veniam quod esse officia necessitatibus itaque facere. Vel rerum vel numquam dolores aut eaque praesentium nihil. Non est dolorum non nulla et. Dolor et itaque perferendis cupiditate itaque nulla voluptatem. Animi et eum enim ea voluptate esse voluptas.</p>', '1', '2015-11-19 02:32:39', 'dolor,vero,dolores,quia,fugiat', 'Maiores beatae id iure qui qui ut.', '2', '2015-12-23 11:14:08', '2015-12-23 11:14:08');
INSERT INTO cd_articles VALUES ('25', 'Assumenda accusamus autem quis sunt accusantium.', 'assumenda-accusamus-autem-quis-sunt-accusantium', '<p>Assumenda excepturi iusto sit dolorem. Sunt sit possimus officiis earum sunt cum. Nostrum earum aliquam iure eos. Voluptates ex ad est inventore officia mollitia dicta. Magni ut hic architecto voluptatem eos magnam. Aut distinctio consequuntur est dolor quia. Asperiores qui quia dolorum quidem et eaque. Est nostrum quisquam earum nesciunt odio voluptate.</p>', '1', '2015-09-09 15:28:54', 'omnis,et,rerum,dolores,consequatur', 'Officiis eligendi animi quos eos voluptas.', '1', '2015-12-23 11:14:08', '2015-12-23 11:14:08');
INSERT INTO cd_articles VALUES ('26', 'Officiis aperiam minus vitae quaerat velit delectus sit.', 'officiis-aperiam-minus-vitae-quaerat-velit-delectus-sit', '<p>Est nesciunt quaerat aliquam recusandae quod. Inventore non deserunt culpa. Eius sint aut sint alias eum. Culpa quia voluptatem natus consectetur debitis. Odio dolor eveniet nostrum maiores delectus. Ratione nisi ratione rerum soluta deleniti excepturi. Quibusdam unde neque sunt odio. Blanditiis optio corrupti itaque dolore et quia cupiditate. Culpa adipisci cumque itaque aut praesentium dolore porro ut. Ut voluptas dolores excepturi quia ea. Libero odit aperiam ipsum deleniti iusto et. Repellendus laboriosam consequatur ad qui eaque ut placeat. Et nisi quis architecto iure vitae ad. At qui eos ut hic voluptatum voluptatum adipisci.</p>', '1', '2015-10-18 09:58:42', 'animi,autem,aut,accusamus,similique', 'Aut amet est ducimus ullam qui.', '1', '2015-12-23 11:14:08', '2015-12-23 11:14:08');
INSERT INTO cd_articles VALUES ('27', 'Animi fugit quia distinctio culpa in sint aperiam.', 'animi-fugit-quia-distinctio-culpa-in-sint-aperiam', '<p>Recusandae omnis tempore nobis perspiciatis ut quia nam deserunt. Omnis quam iste nemo architecto quaerat nihil. Culpa dolorem numquam quis animi. Et minima doloremque facere dolor vitae repudiandae repellendus. Amet voluptas rerum delectus ipsam. Qui veritatis distinctio aperiam minus suscipit accusamus adipisci. Architecto cum placeat quam nam officia.</p>', '1', '2015-08-18 12:45:05', 'deleniti,minus,natus,aut,quia', 'Numquam ipsam eius eos qui.', '1', '2015-12-23 11:14:08', '2015-12-23 11:14:08');
INSERT INTO cd_articles VALUES ('28', 'Accusantium tempora rerum velit est est numquam repellat.', 'accusantium-tempora-rerum-velit-est-est-numquam-repellat', '<p>Asperiores incidunt occaecati dolor nulla. Blanditiis enim est quia libero. Pariatur in minus aut et. Assumenda cumque culpa fugiat reprehenderit alias saepe quas. Voluptatem vel nemo nihil eum rerum reprehenderit. Suscipit fugiat qui nulla dolor itaque molestias cupiditate sit. Illum et nisi voluptas quod omnis laborum ut. Est eum dolorem quis dolorem qui. Sapiente adipisci officia non enim. Architecto amet laborum praesentium enim.</p>', '0', '2015-08-23 00:24:57', 'placeat,eveniet,omnis,repudiandae,sequi', 'Perspiciatis rerum deleniti dolorem repellendus.', '2', '2015-12-23 11:14:08', '2015-12-23 11:14:08');
INSERT INTO cd_articles VALUES ('29', 'Suscipit asperiores sed similique praesentium.', 'suscipit-asperiores-sed-similique-praesentium', '<p>Cum necessitatibus sunt minima consectetur quia sit sint. Error minima cupiditate maxime enim. Voluptas est recusandae ipsum temporibus nulla placeat. Sunt nesciunt architecto sed minima ut fugiat. Sit soluta est doloremque consequatur ut rerum. Perspiciatis quia sunt corrupti aspernatur. Dicta totam delectus aut eos nisi non dolorum. Modi et nihil assumenda sed quos vitae. Ut vitae quia et sapiente. Consequuntur veniam voluptatem eaque placeat. Asperiores tenetur odio placeat illum numquam. Explicabo molestiae alias corporis nobis eligendi in.</p>', '1', '2015-06-25 01:51:21', 'placeat,omnis,et,qui,eum', 'Aliquid animi quidem adipisci tempora incidunt suscipit non.', '2', '2015-12-23 11:14:08', '2015-12-23 11:14:08');
INSERT INTO cd_articles VALUES ('30', 'Totam est veniam ut vero est.', 'totam-est-veniam-ut-vero-est', '<p>Voluptatem officia amet enim voluptate illum assumenda. Qui exercitationem nihil maxime molestias ipsam voluptatem. Exercitationem eos sed dolore. Voluptatem aut voluptatem perspiciatis dolor dignissimos neque occaecati veritatis. Eveniet dicta iste id est. Et voluptatem fuga eos et expedita dicta et. Magni sit porro autem maiores. Incidunt ullam blanditiis sint et dolor odio consequatur. Laudantium dolor iure laudantium aliquam. Reprehenderit et atque modi fugiat inventore ut. Magni natus ea maxime repellat inventore.</p>', '1', '2015-03-19 11:22:33', 'voluptates,reiciendis,aliquid,odit,nam', 'Beatae vitae et est dolor officiis perspiciatis molestias.', '2', '2015-12-23 11:14:09', '2015-12-23 11:14:09');
INSERT INTO cd_articles VALUES ('31', 'Dolor omnis et voluptas autem accusantium aut.', 'dolor-omnis-et-voluptas-autem-accusantium-aut', '<p>Velit id odit quod. Dolorum perspiciatis delectus est dolor earum. Blanditiis saepe iure cupiditate deserunt et harum. Rerum amet nemo odit. Sed autem voluptatem voluptate fuga illo harum et. Consequatur quidem occaecati et consequatur quas mollitia. Aut temporibus minima voluptas error est. Incidunt quia et laudantium natus. Minus libero ut corporis rem est repellat. Ea rerum eius porro distinctio in voluptatem quis voluptatem. Atque illo deleniti pariatur iure saepe enim beatae. Iure ab accusantium quia aliquid reiciendis unde. Ut velit nam id facere reprehenderit fugiat non. Dolorem vero corporis pariatur.</p>', '1', '2015-04-05 00:20:01', 'modi,sit,consectetur,ipsam,aut', 'Velit modi fuga illum est alias necessitatibus.', '1', '2015-12-23 11:14:09', '2015-12-23 11:14:09');
INSERT INTO cd_articles VALUES ('32', 'Et beatae reprehenderit labore voluptatibus aut at.', 'et-beatae-reprehenderit-labore-voluptatibus-aut-at', '<p>Mollitia ut odit temporibus dicta. Sed accusamus atque quibusdam ullam. Blanditiis iste similique esse vel asperiores et omnis. Voluptate dolore soluta saepe et est. Dignissimos porro qui repellat molestiae quia. Voluptatem expedita amet aspernatur temporibus ut. Qui modi qui amet similique vero. Alias est est vero fugit distinctio tenetur. Vel optio et mollitia assumenda. Est doloribus vitae dolore ea accusamus. Non ab sed nesciunt delectus vel. Optio impedit quas assumenda cumque. Porro qui aspernatur sint voluptas est quae. Iure sunt fugiat dolore placeat est officiis temporibus non.</p>', '1', '2015-10-02 09:29:40', 'laborum,voluptate,soluta,maiores,sequi', 'Iure eligendi nisi laboriosam velit.', '2', '2015-12-23 11:14:09', '2015-12-23 11:14:09');
INSERT INTO cd_articles VALUES ('33', 'Possimus voluptatem nulla dignissimos est.', 'possimus-voluptatem-nulla-dignissimos-est', '<p>Quia fugit id est modi sit inventore ut. Quo est recusandae architecto iste sed voluptas. Inventore asperiores tempore culpa eos. Consequuntur velit illo ea quis non fuga adipisci. Ea blanditiis nihil et eius aut ab. Unde ut nesciunt dolores eveniet perferendis neque animi enim. Earum natus eum ab deleniti nostrum magni. Rem ea sapiente possimus sed et est quia. Rem possimus magni sunt nemo voluptas delectus delectus. Aspernatur tenetur optio atque. Dolor accusantium et est sint placeat est.</p>', '0', '2015-02-17 22:36:01', 'amet,vel,et,et,fuga', 'Delectus suscipit voluptatum nihil sequi quisquam incidunt eius.', '2', '2015-12-23 11:14:09', '2015-12-23 11:14:09');
INSERT INTO cd_articles VALUES ('34', 'Possimus sed blanditiis cumque voluptatem reprehenderit.', 'possimus-sed-blanditiis-cumque-voluptatem-reprehenderit', '<p>Aperiam atque ea est quaerat voluptates est. Repudiandae ipsa atque voluptatibus quis iure. Reprehenderit hic nisi voluptate illum quos hic inventore. Eum quis cumque asperiores fuga voluptas est possimus. Nihil et voluptas a libero ea dolorum nostrum. Quia repellendus dignissimos animi provident enim eius. Aliquid expedita reprehenderit ipsa. Voluptates modi ducimus optio voluptates aspernatur sed omnis ut.</p>', '1', '2015-02-13 03:50:44', 'perferendis,accusamus,maxime,aut,provident', 'Aut eum veritatis tempore sit odio aut placeat.', '1', '2015-12-23 11:14:09', '2015-12-23 11:14:09');
INSERT INTO cd_articles VALUES ('35', 'Voluptas vitae voluptatem quia harum quia.', 'voluptas-vitae-voluptatem-quia-harum-quia', '<p>In laboriosam pariatur unde aut qui odit tempore necessitatibus. Quod quia possimus quisquam consequuntur est velit. Expedita ipsam blanditiis facere. Doloremque et in quia praesentium quidem. Illo earum rerum sint ea harum. Neque tenetur sed vero sed atque non eius. Aliquam maxime a expedita vel. Necessitatibus qui fugiat qui perferendis accusantium quasi. Quis aliquid voluptatem nihil autem eaque cum et cupiditate. Velit ut praesentium autem neque ullam. Ut veniam repellat accusantium quo aut. Quibusdam laboriosam consectetur dolores voluptate sapiente. Nostrum sit nostrum sint ab et.</p>', '0', '2015-11-09 08:06:00', 'cumque,cum,labore,culpa,totam', 'Non quas vitae sunt.', '1', '2015-12-23 11:14:09', '2015-12-23 11:14:09');
INSERT INTO cd_articles VALUES ('36', 'Dicta officiis molestias enim harum non non.', 'dicta-officiis-molestias-enim-harum-non-non', '<p>Sequi id quia consequatur necessitatibus fuga ea eveniet. Quis reprehenderit minima velit dolores quae asperiores. Porro tenetur non molestiae harum aut eum. Qui cupiditate assumenda recusandae. Voluptas ut et autem commodi magni. Qui sed non omnis amet. Dolores qui dolor aperiam neque rerum corporis. Exercitationem voluptatum repudiandae reiciendis impedit et. Eaque vel quia accusantium et et voluptas quos.</p>', '1', '2015-05-03 19:23:08', 'amet,sunt,cumque,earum,ab', 'In cupiditate culpa cumque qui iusto commodi fugiat.', '2', '2015-12-23 11:14:09', '2015-12-23 11:14:09');
INSERT INTO cd_articles VALUES ('37', 'Illum facere officiis dolor quod optio.', 'illum-facere-officiis-dolor-quod-optio', '<p>Sit quisquam facilis dolor velit id ipsam inventore. Cum quod nisi quae tempora ut. Sint quas magni vero laudantium. Odio modi aut eaque fuga et atque et. Consequuntur rerum molestiae enim totam sint. Suscipit suscipit praesentium maxime. Ullam ipsam quaerat qui illum inventore aliquam atque. Praesentium doloribus minus qui doloremque non. Officia atque reiciendis est repellendus molestiae saepe ut. Magnam harum accusamus voluptas delectus et non ea.</p>', '1', '2015-05-21 09:36:02', 'non,unde,consectetur,et,quasi', 'Et laudantium dolorem nisi quod pariatur et.', '1', '2015-12-23 11:14:09', '2015-12-23 11:14:09');
INSERT INTO cd_articles VALUES ('38', 'Voluptas est ex est doloremque fugiat aut sequi cupiditate.', 'voluptas-est-ex-est-doloremque-fugiat-aut-sequi-cupiditate', '<p>Deleniti dolores dolor repellendus consectetur voluptas asperiores. Doloremque non iure provident quam qui aut occaecati. Aut est deleniti necessitatibus ipsam similique eos iste ducimus. Ducimus vel at occaecati necessitatibus. Cupiditate omnis odio assumenda neque. Harum doloremque veritatis commodi. Quo est deserunt enim adipisci dignissimos. Quos blanditiis temporibus pariatur. Explicabo impedit quia ab ut blanditiis dolores doloremque dicta. Porro nam animi facilis aut dolorem quos et.</p>', '1', '2015-07-11 00:15:54', 'et,qui,et,nisi,pariatur', 'Officiis quia consequatur sit voluptas.', '2', '2015-12-23 11:14:09', '2015-12-23 11:14:09');
INSERT INTO cd_articles VALUES ('39', 'Quo eveniet fugiat nesciunt perspiciatis.', 'quo-eveniet-fugiat-nesciunt-perspiciatis', '<p>Laudantium quia iste minima est. Impedit eius et pariatur quibusdam tempora dolor. Et maxime non nisi saepe. Et beatae voluptatem qui dolor rerum quaerat. Odio perspiciatis hic consequatur labore autem eos numquam. Voluptate fuga iure aliquid officiis et voluptas. Quos quo mollitia eligendi et iste perspiciatis est. Praesentium ab delectus labore ipsum vitae eligendi fugiat. Dolores et et expedita ea ipsum officia. Voluptatem ipsa consequatur labore ipsa consequatur. Quod est est quia sapiente et ullam.</p>', '0', '2015-08-23 16:45:09', 'veritatis,a,distinctio,consectetur,voluptates', 'Totam sit aspernatur ab est ducimus.', '1', '2015-12-23 11:14:09', '2015-12-23 11:14:09');
INSERT INTO cd_articles VALUES ('40', 'Possimus voluptatem et illo provident voluptatem rerum.', 'possimus-voluptatem-et-illo-provident-voluptatem-rerum', '<p>Eum veritatis doloribus ut quidem dolores. Dicta quod iste velit itaque iusto. Excepturi quo est qui magni. Veritatis eum dicta est sint. Qui necessitatibus nisi ex ex. Ducimus et et quod molestias occaecati ea dolorum. Enim iure sit eveniet occaecati error dolor quo. Sequi et animi porro repellat ad reprehenderit. Minima velit sed expedita. Officiis magnam unde et nobis sint blanditiis.</p>', '1', '2015-10-23 11:38:23', 'corporis,rem,soluta,quia,repellat', 'Optio et dolore amet voluptatem.', '1', '2015-12-23 11:14:09', '2015-12-23 11:14:09');
INSERT INTO cd_articles VALUES ('41', 'Id et temporibus et culpa quia.', 'id-et-temporibus-et-culpa-quia', '<p>Enim quasi qui beatae. Id pariatur iusto odit dolorem. Non quidem dolores aliquam placeat quae velit. Id quis ullam sed vel. Eaque eos maiores sunt repellendus. Ea nobis laborum eveniet quidem debitis asperiores. Libero ea inventore veritatis consectetur perferendis libero. Aut et vero id hic natus sit dolores. Deserunt libero quia nisi in molestiae molestiae. Blanditiis quia quod nihil aut eos fugiat repellendus qui.</p>', '1', '2015-02-14 17:57:39', 'dolores,rerum,consequatur,possimus,odit', 'Voluptatum id qui architecto consectetur qui.', '1', '2015-12-23 11:14:10', '2015-12-23 11:14:10');
INSERT INTO cd_articles VALUES ('42', 'Sunt inventore dolores pariatur fuga at.', 'sunt-inventore-dolores-pariatur-fuga-at', '<p>Reiciendis neque non voluptatem. Inventore laborum exercitationem quae error impedit cupiditate. Deserunt consectetur ut quia recusandae explicabo. Perspiciatis commodi aspernatur dolore non et et. Possimus dolores molestiae quod est exercitationem. Assumenda soluta laudantium velit. Quia nulla rem ratione cumque autem facilis. At dignissimos eligendi sint culpa aliquam laudantium vero id. Id nam dolorem molestiae error. Est fugiat asperiores voluptatum voluptas enim et natus.</p>', '0', '2015-10-29 07:30:34', 'non,non,aut,debitis,animi', 'Reiciendis ullam nihil ea officia esse quia.', '1', '2015-12-23 11:14:10', '2015-12-23 11:14:10');
INSERT INTO cd_articles VALUES ('43', 'Quasi cumque voluptate laboriosam est sequi dicta.', 'quasi-cumque-voluptate-laboriosam-est-sequi-dicta', '<p>Quia deleniti magnam sed corporis. Occaecati tempora voluptatem quae et itaque illum ratione incidunt. Nemo quaerat rerum velit id officia explicabo. Aut et tempore culpa laborum sed. Quis temporibus quia ea consequatur expedita animi. Molestiae voluptas et sed vel et autem aut. Quibusdam dolores corporis cupiditate facilis ullam. Quod molestiae odio veniam totam officia hic eum. At ullam explicabo nihil doloribus est sapiente. Ut voluptas dolores dolore tempore et. Sit iure quae eligendi iusto sunt autem quaerat. Pariatur eum vel aut et delectus et. In quam in beatae debitis voluptatibus magni dolorem quisquam. Neque impedit veniam sed sit dolores.</p>', '1', '2015-11-23 22:52:36', 'iste,est,dignissimos,enim,veritatis', 'Atque aliquid velit quo et illo ut sed magnam.', '2', '2015-12-23 11:14:10', '2015-12-23 11:14:10');
INSERT INTO cd_articles VALUES ('44', 'Quia quia est qui molestiae voluptatibus porro in.', 'quia-quia-est-qui-molestiae-voluptatibus-porro-in', '<p>Enim et ex facilis explicabo voluptas repellendus et. Reiciendis eos et excepturi velit alias. Qui dolorem sapiente qui tempore accusamus odit aperiam. Labore ut qui assumenda consequatur architecto molestiae quae sunt. Ipsum nesciunt voluptates commodi fuga harum sed. Rerum expedita facilis id sit earum veniam. Cumque neque enim ea et nemo. Rerum ex sed sit praesentium expedita voluptatem. Consectetur ea hic dolorem libero.</p>', '1', '2015-03-27 01:15:35', 'eos,dolores,repudiandae,recusandae,id', 'Corporis sunt et molestiae et.', '1', '2015-12-23 11:14:10', '2015-12-23 11:14:10');
INSERT INTO cd_articles VALUES ('45', 'Ut magni eum qui est quod.', 'ut-magni-eum-qui-est-quod', '<p>Iste non unde maiores debitis est quia eum fugit. A nulla nihil mollitia et sint saepe magni voluptatem. Dignissimos beatae est ut voluptate deserunt. Assumenda sit harum dolores quasi consequatur aut consequuntur eligendi. Autem laborum facere corrupti cupiditate rerum vel illum. Id cumque omnis expedita harum. Ipsam dolorem est incidunt. Aut incidunt dolorem voluptates et. Unde id suscipit sequi quis quo est aut. Qui occaecati rerum distinctio est autem provident debitis. Earum omnis modi reiciendis magni ut et et. Modi architecto alias itaque sapiente. Ipsam harum neque eveniet expedita enim.</p>', '0', '2015-06-07 10:39:47', 'consequatur,corrupti,illo,ex,sunt', 'Beatae voluptatibus quisquam corrupti suscipit laudantium.', '2', '2015-12-23 11:14:11', '2015-12-23 11:14:11');
INSERT INTO cd_articles VALUES ('46', 'Iusto aut et accusamus voluptatem.', 'iusto-aut-et-accusamus-voluptatem', '<p>Quia quisquam sit aut aliquid non inventore placeat. Totam alias quisquam soluta ipsa exercitationem perferendis quo voluptas. Odit reprehenderit qui quae veniam ut nam. Voluptatum ea fugiat repellendus eligendi. Fugiat praesentium perferendis delectus molestiae quae suscipit. Commodi dolor laboriosam neque repellendus. Deserunt non sit voluptatem quis aut sint. Officia sit nulla sed deleniti sit inventore in. Suscipit repellat qui saepe qui corporis. Ut qui ut aut dolor fugit fugiat. Unde occaecati facilis qui doloremque tenetur nihil. Ut natus nostrum ipsa aut. Autem facilis corrupti error ratione.</p>', '1', '2015-04-03 15:50:01', 'qui,magnam,occaecati,unde,impedit', 'Possimus distinctio velit voluptas necessitatibus.', '2', '2015-12-23 11:14:11', '2015-12-23 11:14:11');
INSERT INTO cd_articles VALUES ('47', 'Nam omnis totam pariatur.', 'nam-omnis-totam-pariatur', '<p>Velit ad eaque saepe at aut consequatur. Est sed placeat atque reprehenderit. Deleniti aliquid deleniti omnis autem ducimus expedita quia. Qui inventore recusandae quia voluptatum quae fugit. In molestias hic est error. In quidem consequatur repellat quis facere dolor nisi. Quod numquam et repellat beatae illum eaque. Molestiae hic ut qui dignissimos eum quae et. Eaque optio non minus modi ut. Eos officiis excepturi non. Eius ea quia consequatur repellat. Eveniet consequatur excepturi tenetur eum. Ut consequatur esse et vitae unde.</p>', '1', '2015-10-04 11:41:10', 'libero,tempore,veritatis,ut,voluptatum', 'Nam et atque quia voluptas modi enim.', '1', '2015-12-23 11:14:11', '2015-12-23 11:14:11');
INSERT INTO cd_articles VALUES ('48', 'Aliquam neque veritatis cumque qui non.', 'aliquam-neque-veritatis-cumque-qui-non', '<p>Reprehenderit et nihil fugit consequatur qui rerum rerum. Suscipit tempore ducimus velit ut veritatis. Fugit molestiae aut commodi voluptatem dolor doloremque. Numquam quis suscipit fugiat ut. Odit et neque eum placeat voluptatem et in facilis. Omnis sint facere qui maxime maxime quos consequatur. Sit ipsam neque quo id. Qui cupiditate quia et voluptates cum assumenda.</p>', '0', '2015-12-12 21:05:18', 'omnis,non,et,nostrum,tempora', 'Quam sapiente inventore nulla voluptatem rerum.', '1', '2015-12-23 11:14:11', '2015-12-23 11:14:11');
INSERT INTO cd_articles VALUES ('49', 'Voluptatem in molestias quo harum.', 'voluptatem-in-molestias-quo-harum', '<p>Porro doloremque libero animi voluptatibus sint sed distinctio. Temporibus amet et expedita unde est dignissimos. Exercitationem incidunt explicabo vitae tempore. Sed est maxime natus occaecati alias similique. Asperiores animi dolorem quibusdam est. Non omnis expedita perspiciatis aspernatur accusantium velit est. Corrupti blanditiis reiciendis rerum id mollitia dolor.</p>', '1', '2015-07-25 08:46:14', 'omnis,non,dicta,voluptatem,error', 'Et sunt et explicabo voluptas.', '1', '2015-12-23 11:14:11', '2015-12-23 11:14:11');
INSERT INTO cd_articles VALUES ('50', 'Sed accusamus sunt consequatur officia eum quia autem.', 'sed-accusamus-sunt-consequatur-officia-eum-quia-autem', '<p>Placeat voluptatibus qui vero at. Suscipit et nihil aut cumque. Aliquam ut dolorem ullam rerum. Dolorem laboriosam et qui voluptatibus. Consequatur aliquam velit beatae fugit ullam non. Exercitationem aut voluptas dolorum cumque rerum architecto eos. Sunt iure ipsam molestiae doloribus labore sunt excepturi. Officiis perspiciatis quaerat dolorem voluptatem excepturi autem. Ut quia ea et dolorem. Ex voluptas laboriosam autem mollitia neque et amet. Tenetur sunt enim rerum voluptas reiciendis. Et necessitatibus sunt in velit voluptatem dolore sint. Sint autem pariatur placeat quia ut neque.</p>', '1', '2015-10-14 16:05:42', 'velit,et,et,modi,consectetur', 'Minima praesentium consequatur harum quia placeat perspiciatis.', '2', '2015-12-23 11:14:11', '2015-12-23 11:14:11');

-- ----------------------------
-- Table structure for `cd_article_category`
-- ----------------------------
DROP TABLE IF EXISTS `cd_article_category`;
CREATE TABLE `cd_article_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cd_article_category
-- ----------------------------
INSERT INTO cd_article_category VALUES ('1', '1', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('2', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('3', '2', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('4', '3', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('5', '3', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('6', '4', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('7', '4', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('8', '5', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('9', '6', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('10', '6', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('11', '7', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('12', '7', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('13', '8', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('14', '8', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('15', '9', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('16', '10', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('17', '10', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('18', '11', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('19', '12', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('20', '12', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('21', '13', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('22', '13', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('23', '14', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('24', '15', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('25', '16', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('26', '16', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('27', '17', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('28', '18', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('29', '18', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('30', '19', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('31', '19', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('32', '20', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('33', '20', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('34', '21', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('35', '21', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('36', '22', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('37', '22', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('38', '23', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('39', '24', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('40', '24', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('41', '25', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('42', '25', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('43', '26', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('44', '27', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('45', '28', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('46', '28', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('47', '29', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('48', '29', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('49', '30', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('50', '30', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('51', '31', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('52', '32', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('53', '32', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('54', '33', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('55', '33', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('56', '34', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('57', '34', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('58', '35', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('59', '36', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('60', '37', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('61', '38', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('62', '39', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('63', '39', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('64', '40', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('65', '40', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('66', '41', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('67', '42', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('68', '42', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('69', '43', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('70', '43', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('71', '44', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('72', '45', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('73', '45', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('74', '46', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('75', '47', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('76', '48', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('77', '48', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('78', '49', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('79', '49', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_article_category VALUES ('80', '50', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `cd_categories`
-- ----------------------------
DROP TABLE IF EXISTS `cd_categories`;
CREATE TABLE `cd_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `categories_slug_index` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cd_categories
-- ----------------------------
INSERT INTO cd_categories VALUES ('1', 'News', 'news', 'Aliquam iste aperiam quia sint consectetur quo sapiente. Est occaecati accusantium vitae excepturi deleniti. Asperiores velit nesciunt nam perspiciatis dolorem neque. Ut ab quasi eum provident minima.', '2015-12-23 11:08:47', '2015-12-23 11:08:47');
INSERT INTO cd_categories VALUES ('2', 'Interviste', 'interviste', 'Facilis est non laudantium impedit dolor officiis. Voluptatem soluta aut architecto perferendis cum. Asperiores enim quis expedita sapiente repellendus. Veritatis ea et aperiam officiis eveniet qui quibusdam.', '2015-12-23 11:08:47', '2015-12-23 11:08:47');
INSERT INTO cd_categories VALUES ('3', 'Reportage', 'reportage', 'Error est eaque quia illo autem dicta optio labore. Quia rerum et debitis nesciunt. Provident sint nostrum deserunt.', '2015-12-23 11:08:47', '2015-12-23 11:08:47');

-- ----------------------------
-- Table structure for `cd_descriptions`
-- ----------------------------
DROP TABLE IF EXISTS `cd_descriptions`;
CREATE TABLE `cd_descriptions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `step` int(11) NOT NULL,
  `step_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `is_published` tinyint(1) NOT NULL,
  `published_at` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `step_title_index` (`step_title`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cd_descriptions
-- ----------------------------
INSERT INTO cd_descriptions VALUES ('1', '9', null, 'Minus laborum molestiae cumque.', '1', '2016-01-02 16:35:46', '2016-01-22 09:19:32', '2016-01-22 09:19:32');
INSERT INTO cd_descriptions VALUES ('2', '7', null, 'Molestiae praesentium qui quia enim omnis veniam.', '1', '2015-04-12 20:45:19', '2016-01-22 09:19:32', '2016-01-22 09:19:32');
INSERT INTO cd_descriptions VALUES ('3', '1', 'Il costume base', 'Voluptas veritatis eum illum laborum amet omnis qui consequatur.', '1', '2015-10-14 18:41:24', '2016-01-22 09:19:32', '2016-01-22 09:19:32');
INSERT INTO cd_descriptions VALUES ('4', '9', 'Creiamo lo scheletro del casco', 'Eos atque corrupti laboriosam assumenda molestiae et ut.', '1', '2015-02-07 15:35:32', '2016-01-22 09:19:33', '2016-01-22 09:19:33');
INSERT INTO cd_descriptions VALUES ('5', '3', 'Materiali necessari', '<p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua franca va esser plu simplic e regulari quam li existent Europan lingues. It va esser tam simplic quam Occidental in fact, it va esser Occidental. A un Angleso it va semblar un simplificat Angles, quam un skeptic Cambridge amico dit me que Occidental es.Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles.</p>', '1', '2015-02-22 07:28:30', '2016-01-22 09:19:33', '2016-01-22 09:19:33');
INSERT INTO cd_descriptions VALUES ('6', '1', 'Introduzione', 'Ma la volpe col suo balzo ha raggiunto il quieto Fido. Quel vituperabile xenofobo zelante assaggia il whisky ed esclama: alleluja! Aquel vituperable xenófobo apasionado prueba su güisqui y exclama: ¡Aleluya! Ma la volpe col suo balzo ha raggiunto il quieto Fido. Quel vituperabile xenofobo zelante assaggia il whisky ed esclama: alleluja! Aquel vituperable xenófobo apasionado prueba su güisqui y exclama: ¡Aleluya! Ma la volpe col suo balzo ha raggiunto il quieto Fido. Quel vituperabile xenofobo zelante assaggia il whisky ed esclama: alleluja! Aquel vituperable xenófobo apasionado prueba su güisqui y exclama: ¡Aleluya!Ma la volpe col suo balzo ha', '1', '2015-08-15 16:29:48', '2016-01-22 09:19:33', '2016-01-22 09:19:33');
INSERT INTO cd_descriptions VALUES ('7', '2', 'Le basi del casco', '<p>In una terra lontana, dietro le montagne Parole, lontani dalle terre di Vocalia e Consonantia, vivono i testi casuali. Vivono isolati nella cittadina di Lettere, sulle coste del Semantico, un immenso oceano linguistico. Un piccolo ruscello chiamato Devoto Oli attraversa quei luoghi, rifornendoli di tutte le regolalie di cui hanno bisogno. È una terra paradismatica, un paese della cuccagna in cui golose porzioni di proposizioni arrostite volano in bocca a chi le desideri. Non una volta i testi casuali sono stati dominati dall’onnipotente Interpunzione, una vita davvero non ortografica. Un giorno però accadde che la piccola riga di un testo casuale, di nome Lorem ipsum, decise di andare a esplorare la vasta Grammatica. Il grande Oximox tentò di dissuaderla, poiché quel luogo pullulava di virgole spietate, punti interrogativi selvaggi e subdoli punti e virgola, ma il piccolo testo casuale non si fece certo fuorviare. Raccolse le sue sette maiuscole, fece scorrere la sua iniziale nella cintura, e si mise in cammino. Quando superò i primi colli dei monti Corsivi, si voltò a guardare un’ultima volta la skyline di Lettere, la sua città, la headline del villaggio Alfabeto e la subline della sua stessa strada, il vicolo Riga. Una domanda retorica</p>', '1', '2015-01-27 00:02:05', '2016-01-22 09:19:33', '2016-01-22 09:19:33');
INSERT INTO cd_descriptions VALUES ('8', '6', null, 'Mollitia soluta accusamus ducimus nihil hic consequatur quis.', '1', '2016-01-08 06:40:05', '2016-01-22 09:19:33', '2016-01-22 09:19:33');
INSERT INTO cd_descriptions VALUES ('9', '2', 'How to train your dragon?', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua franca va esser plu simplic e regulari quam li existent Europan', '1', '2015-06-02 21:03:33', '2016-01-22 09:19:33', '2016-01-22 09:19:33');
INSERT INTO cd_descriptions VALUES ('10', '2', null, 'Quibusdam neque reprehenderit nostrum quos quis maiores fugit.', '1', '2015-07-30 18:02:02', '2016-01-22 09:19:33', '2016-01-22 09:19:33');
INSERT INTO cd_descriptions VALUES ('11', '2', 'Creiamo le pistole', 'This project was initially started in 2008 as a personal project, but commissions put this on the back burner. It was revived when Cathy of godsavethequeenfashions.com needed them for her accompanying Haseo costume commission....', '1', '2015-05-04 08:48:31', '2016-01-22 09:19:33', '2016-01-22 09:19:33');

-- ----------------------------
-- Table structure for `cd_descriptions_copy`
-- ----------------------------
DROP TABLE IF EXISTS `cd_descriptions_copy`;
CREATE TABLE `cd_descriptions_copy` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `step` int(11) NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `gallery_id` int(10) unsigned NOT NULL,
  `is_published` tinyint(1) NOT NULL,
  `published_at` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `project_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `descriptions_gallery_id_index` (`gallery_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cd_descriptions_copy
-- ----------------------------
INSERT INTO cd_descriptions_copy VALUES ('1', '6', 'Ipsa voluptatem quibusdam necessitatibus magni mollitia voluptatem.', '7', '1', '2015-02-05 00:33:57', '2016-01-14 22:59:42', '2016-01-14 22:59:42', '0');
INSERT INTO cd_descriptions_copy VALUES ('2', '5', 'Ea in rem totam iusto quia.', '9', '1', '2015-11-17 16:51:48', '2016-01-14 22:59:42', '2016-01-14 22:59:42', '0');
INSERT INTO cd_descriptions_copy VALUES ('3', '8', 'Cumque ut hic qui eum deleniti assumenda aut.', '6', '1', '2015-11-06 11:14:44', '2016-01-14 22:59:42', '2016-01-14 22:59:42', '0');
INSERT INTO cd_descriptions_copy VALUES ('4', '6', 'Aut tempora cupiditate voluptas delectus accusamus qui.', '9', '1', '2015-06-22 09:42:44', '2016-01-14 22:59:42', '2016-01-14 22:59:42', '0');
INSERT INTO cd_descriptions_copy VALUES ('5', '1', 'Ad non est quisquam commodi.', '8', '1', '2015-07-05 02:46:41', '2016-01-14 22:59:42', '2016-01-14 22:59:42', '0');
INSERT INTO cd_descriptions_copy VALUES ('6', '8', 'Eum quia facilis deleniti dolorem autem similique.', '9', '1', '2015-06-20 18:41:40', '2016-01-14 22:59:42', '2016-01-14 22:59:42', '0');
INSERT INTO cd_descriptions_copy VALUES ('7', '8', 'Dignissimos dolorem rem ut quia eos possimus.', '9', '1', '2015-06-22 18:25:52', '2016-01-14 22:59:42', '2016-01-14 22:59:42', '0');
INSERT INTO cd_descriptions_copy VALUES ('8', '8', 'Quia aut enim praesentium.', '8', '1', '2015-11-07 03:43:20', '2016-01-14 22:59:43', '2016-01-14 22:59:43', '0');
INSERT INTO cd_descriptions_copy VALUES ('9', '3', 'Eum aut animi natus enim laboriosam voluptate.', '3', '1', '2015-01-28 18:05:15', '2016-01-14 22:59:43', '2016-01-14 22:59:43', '0');
INSERT INTO cd_descriptions_copy VALUES ('10', '6', 'In vel voluptates rerum eius tenetur.', '3', '1', '2015-02-18 10:09:28', '2016-01-14 22:59:43', '2016-01-14 22:59:43', '0');
INSERT INTO cd_descriptions_copy VALUES ('11', '7', 'Qui consequatur aut adipisci autem.', '7', '1', '2015-02-13 13:17:09', '2016-01-14 22:59:43', '2016-01-14 22:59:43', '0');

-- ----------------------------
-- Table structure for `cd_description_gallery`
-- ----------------------------
DROP TABLE IF EXISTS `cd_description_gallery`;
CREATE TABLE `cd_description_gallery` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description_id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cd_description_gallery
-- ----------------------------
INSERT INTO cd_description_gallery VALUES ('1', '7', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_description_gallery VALUES ('2', '7', '7', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_description_gallery VALUES ('3', '7', '8', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_description_gallery VALUES ('4', '7', '9', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_description_gallery VALUES ('5', '11', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_description_gallery VALUES ('6', '11', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_description_gallery VALUES ('7', '11', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `cd_description_project`
-- ----------------------------
DROP TABLE IF EXISTS `cd_description_project`;
CREATE TABLE `cd_description_project` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(10) unsigned NOT NULL,
  `description_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cd_description_project
-- ----------------------------
INSERT INTO cd_description_project VALUES ('1', '9', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_description_project VALUES ('2', '8', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_description_project VALUES ('3', '6', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_description_project VALUES ('4', '7', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_description_project VALUES ('5', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_description_project VALUES ('6', '5', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_description_project VALUES ('7', '5', '7', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_description_project VALUES ('8', '4', '8', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_description_project VALUES ('9', '10', '9', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_description_project VALUES ('10', '2', '10', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_description_project VALUES ('11', '6', '11', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `cd_galleries`
-- ----------------------------
DROP TABLE IF EXISTS `cd_galleries`;
CREATE TABLE `cd_galleries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `caption` mediumtext COLLATE utf8_unicode_ci,
  `order` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cd_galleries
-- ----------------------------
INSERT INTO cd_galleries VALUES ('1', 'Step-1-Card-Helmet.jpg', 'Il modello 3D dell\\\'elmo', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_galleries VALUES ('2', 'Step-1-Card-Helmet.jpg', null, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_galleries VALUES ('3', 'cos0293-1.jpg', 'Il costume| Gli accesori', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_galleries VALUES ('4', 's_xth_form_gun_blades.jpg', 'Le pistole', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_galleries VALUES ('5', 'wipset.jpg', 'Modello', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_galleries VALUES ('6', 'haseogun_003.jpg', 'Le pistole', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_galleries VALUES ('7', 'Step-1-Craft-Robo.jpg', 'Il robot che modifica', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_galleries VALUES ('8', 'Step-1-Pep-Software.jpg', 'Il software che ho utilizato. Pep Software', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_galleries VALUES ('9', 'Step-1-Pep-Stock.jpg', 'Il materiale che ho utilizzato', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `cd_genders`
-- ----------------------------
DROP TABLE IF EXISTS `cd_genders`;
CREATE TABLE `cd_genders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `genders_slug_index` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cd_genders
-- ----------------------------
INSERT INTO cd_genders VALUES ('1', 'anime', 'anime', '1', '2016-03-08 17:13:56', '2016-03-08 17:13:56');
INSERT INTO cd_genders VALUES ('2', 'manga', 'manga', '1', '2016-03-08 17:13:56', '2016-03-08 17:13:56');
INSERT INTO cd_genders VALUES ('3', 'videogames', 'videogames', '1', '2016-03-08 17:13:57', '2016-03-08 17:13:57');
INSERT INTO cd_genders VALUES ('4', 'films', 'films', '1', '2016-03-08 17:13:57', '2016-03-08 17:13:57');
INSERT INTO cd_genders VALUES ('5', 'telefilms', 'telefilms', '1', '2016-03-08 17:13:57', '2016-03-08 17:13:57');
INSERT INTO cd_genders VALUES ('6', 'serie tv', 'serie-tv', '1', '2016-03-08 17:13:57', '2016-03-08 17:13:57');
INSERT INTO cd_genders VALUES ('7', 'altro', 'altro', '1', '2016-03-08 17:13:57', '2016-03-08 17:13:57');

-- ----------------------------
-- Table structure for `cd_macro_categories`
-- ----------------------------
DROP TABLE IF EXISTS `cd_macro_categories`;
CREATE TABLE `cd_macro_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_color` text COLLATE utf8_unicode_ci NOT NULL,
  `fonticon` text COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `is_published` tinyint(1) NOT NULL,
  `published_at` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `macro_categories_slug_index` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cd_macro_categories
-- ----------------------------
INSERT INTO cd_macro_categories VALUES ('1', '0', 'Armi', 'armi', 'danger', 'fa-yelp', '1', '1', '2015-04-21 23:50:17', '2016-01-22 09:19:32', '2016-01-22 09:19:32');
INSERT INTO cd_macro_categories VALUES ('2', '0', 'Accessori', 'accessori', 'warning', 'fa-rebel', '2', '1', '2015-09-07 21:15:56', '2016-01-22 09:19:32', '2016-01-22 09:19:32');
INSERT INTO cd_macro_categories VALUES ('3', '0', 'Costumi', 'costumi', 'success', 'fa-qq', '3', '1', '2015-10-08 16:11:34', '2016-01-22 09:19:32', '2016-01-22 09:19:32');

-- ----------------------------
-- Table structure for `cd_materials`
-- ----------------------------
DROP TABLE IF EXISTS `cd_materials`;
CREATE TABLE `cd_materials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `material_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `is_published` tinyint(1) NOT NULL,
  `published_at` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `materials_slug_index` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cd_materials
-- ----------------------------
INSERT INTO cd_materials VALUES ('1', 'Legno', 'legno', '2', '1', '2015-12-01 06:55:54', '2016-02-26 21:54:39', '2016-02-26 21:54:39');
INSERT INTO cd_materials VALUES ('2', 'Plastica', 'plastica', '5', '1', '2015-07-19 11:37:51', '2016-02-26 21:56:40', '2016-02-26 21:56:40');
INSERT INTO cd_materials VALUES ('3', 'Licra', 'licra', '9', '1', '2015-07-06 00:33:13', '2016-02-26 21:56:40', '2016-02-26 21:56:40');
INSERT INTO cd_materials VALUES ('4', 'Vinile', 'vinile', '8', '1', '2015-12-06 01:12:35', '2016-02-26 21:56:40', '2016-02-26 21:56:40');
INSERT INTO cd_materials VALUES ('5', 'Stoffa', 'stoffa', '1', '1', '2015-09-28 13:41:05', '2016-02-26 21:56:40', '2016-02-26 21:56:40');
INSERT INTO cd_materials VALUES ('6', 'Componenti elettronici', 'componenti-elettronici', '6', '1', '2015-07-11 07:36:08', '2016-02-26 21:56:41', '2016-02-26 21:56:41');
INSERT INTO cd_materials VALUES ('7', 'Cuoio', 'cuoio', '9', '1', '2016-01-30 17:21:40', '2016-02-26 21:56:41', '2016-02-26 21:56:41');
INSERT INTO cd_materials VALUES ('8', 'Ferro', 'ferro', '7', '1', '2016-02-25 14:49:43', '2016-02-26 21:56:41', '2016-02-26 21:56:41');
INSERT INTO cd_materials VALUES ('9', 'Vetro resina', 'vetro-resina', '6', '1', '2015-08-30 03:17:45', '2016-02-26 21:56:41', '2016-02-26 21:56:41');
INSERT INTO cd_materials VALUES ('10', 'Pellicola', 'pellicola', '2', '1', '2015-04-11 07:48:03', '2016-02-26 21:56:41', '2016-02-26 21:56:41');
INSERT INTO cd_materials VALUES ('11', 'Cartoncino', 'cartoncino', '4', '1', '2015-06-23 09:08:51', '2016-02-26 21:56:41', '2016-02-26 21:56:41');
INSERT INTO cd_materials VALUES ('12', 'Silicone', 'silicone', '4', '1', '2015-11-14 17:04:12', '2016-02-26 21:56:42', '2016-02-26 21:56:42');
INSERT INTO cd_materials VALUES ('13', 'Alluminio', 'alluminio', '5', '1', '2015-07-13 14:46:10', '2016-02-26 21:56:42', '2016-02-26 21:56:42');
INSERT INTO cd_materials VALUES ('14', 'Colla vinilica', 'colla-vinilica', '7', '1', '2015-12-29 10:10:03', '2016-02-26 21:56:42', '2016-02-26 21:56:42');
INSERT INTO cd_materials VALUES ('15', 'Carta igienica', 'carta-igienica', '5', '1', '2015-04-07 04:11:11', '2016-02-26 21:56:42', '2016-02-26 21:56:42');
INSERT INTO cd_materials VALUES ('16', 'Cuoio', 'cuoio', '2', '1', '2015-06-13 01:09:09', '2016-02-26 21:56:43', '2016-02-26 21:56:43');
INSERT INTO cd_materials VALUES ('17', 'Polistirolo', 'polistirolo', '3', '1', '2016-02-24 13:11:49', '2016-02-26 21:56:43', '2016-02-26 21:56:43');
INSERT INTO cd_materials VALUES ('18', 'Poliuretano espanso', 'poliuretano-espanso', '7', '1', '2015-08-12 08:21:04', '2016-02-26 21:56:43', '2016-02-26 21:56:43');
INSERT INTO cd_materials VALUES ('19', 'Vernici', 'vernici', '3', '1', '2016-01-16 12:30:13', '2016-02-26 21:56:43', '2016-02-26 21:56:43');
INSERT INTO cd_materials VALUES ('20', 'Altro', 'altro', '8', '1', '2015-04-10 14:00:38', '2016-02-26 21:56:44', '2016-02-26 21:56:44');
INSERT INTO cd_materials VALUES ('21', 'Et ab magnam aut saepe.', 'et-ab-magnam-aut-saepe', '1', '1', '2015-03-19 06:38:08', '2016-02-26 21:56:44', '2016-02-26 21:56:44');
INSERT INTO cd_materials VALUES ('22', 'Sint pariatur sed eius.', 'sint-pariatur-sed-eius', '1', '1', '2015-06-12 03:52:07', '2016-02-26 21:56:44', '2016-02-26 21:56:44');
INSERT INTO cd_materials VALUES ('23', 'Ex vel illum illum.', 'ex-vel-illum-illum', '2', '1', '2015-04-06 10:59:10', '2016-02-26 21:56:44', '2016-02-26 21:56:44');
INSERT INTO cd_materials VALUES ('24', 'Magnam error ut est ea.', 'magnam-error-ut-est-ea', '5', '1', '2016-02-09 20:36:01', '2016-02-26 21:56:44', '2016-02-26 21:56:44');
INSERT INTO cd_materials VALUES ('25', 'Et fuga dolor fugit.', 'et-fuga-dolor-fugit', '4', '1', '2015-04-04 00:14:48', '2016-02-26 21:56:44', '2016-02-26 21:56:44');
INSERT INTO cd_materials VALUES ('26', 'Quis quia rem et.', 'quis-quia-rem-et', '6', '1', '2016-01-12 20:02:05', '2016-02-26 21:56:45', '2016-02-26 21:56:45');
INSERT INTO cd_materials VALUES ('27', 'Ut qui ut non et.', 'ut-qui-ut-non-et', '6', '1', '2015-05-15 09:03:57', '2016-02-26 21:56:45', '2016-02-26 21:56:45');
INSERT INTO cd_materials VALUES ('28', 'Qui vel quae cupiditate.', 'qui-vel-quae-cupiditate', '5', '1', '2015-06-01 22:32:14', '2016-02-26 21:56:45', '2016-02-26 21:56:45');
INSERT INTO cd_materials VALUES ('29', 'Et unde ut corporis qui.', 'et-unde-ut-corporis-qui', '1', '1', '2015-03-03 22:15:57', '2016-02-26 21:56:45', '2016-02-26 21:56:45');
INSERT INTO cd_materials VALUES ('30', 'Sit autem ut et quia.', 'sit-autem-ut-et-quia', '9', '1', '2015-03-21 20:13:41', '2016-02-26 21:56:45', '2016-02-26 21:56:45');
INSERT INTO cd_materials VALUES ('31', 'Nemo ut aut incidunt.', 'nemo-ut-aut-incidunt', '2', '1', '2015-05-11 03:31:00', '2016-02-26 21:56:46', '2016-02-26 21:56:46');

-- ----------------------------
-- Table structure for `cd_material_project`
-- ----------------------------
DROP TABLE IF EXISTS `cd_material_project`;
CREATE TABLE `cd_material_project` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(10) unsigned NOT NULL,
  `material_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cd_material_project
-- ----------------------------
INSERT INTO cd_material_project VALUES ('1', '8', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('2', '9', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('3', '4', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('4', '6', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('5', '9', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('6', '8', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('7', '2', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('8', '2', '18', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('9', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('10', '10', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('11', '9', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('12', '6', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('13', '3', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('14', '9', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('15', '8', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('16', '5', '7', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('17', '10', '7', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('18', '6', '7', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('19', '4', '7', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('20', '10', '8', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('21', '8', '8', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('22', '4', '8', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('23', '10', '9', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('24', '5', '9', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('25', '4', '9', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('27', '4', '10', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('28', '2', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('29', '5', '10', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('30', '2', '7', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('31', '10', '11', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('32', '9', '11', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('33', '6', '12', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('35', '2', '9', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('36', '7', '12', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('37', '9', '12', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('38', '7', '14', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('39', '1', '13', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('42', '3', '14', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('43', '2', '11', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('45', '6', '15', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('47', '1', '16', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('48', '5', '16', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('50', '1', '17', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('51', '7', '16', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('58', '3', '19', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('62', '1', '20', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('64', '1', '21', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('68', '3', '22', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('74', '3', '23', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('85', '7', '19', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_material_project VALUES ('91', '7', '13', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `cd_migrations`
-- ----------------------------
DROP TABLE IF EXISTS `cd_migrations`;
CREATE TABLE `cd_migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cd_migrations
-- ----------------------------
INSERT INTO cd_migrations VALUES ('2016_01_21_180515_Setup', '1');

-- ----------------------------
-- Table structure for `cd_projects`
-- ----------------------------
DROP TABLE IF EXISTS `cd_projects`;
CREATE TABLE `cd_projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `macro_category_id` int(10) unsigned NOT NULL,
  `serie_id` int(11) DEFAULT NULL,
  `name` varchar(54) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  `progress` int(11) NOT NULL,
  `meta_keys` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `approximate_cost` double(11,2) NOT NULL DEFAULT '0.00',
  `timing_completion` int(11) NOT NULL DEFAULT '0',
  `cover_image` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `materials_id` int(11) NOT NULL,
  `is_published` tinyint(1) NOT NULL,
  `published_at` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `projects_macro_category_id_index` (`macro_category_id`),
  KEY `projects_slug_index` (`slug`),
  KEY `projects_user_id_index` (`user_id`),
  KEY `projects_serie_id_index` (`serie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cd_projects
-- ----------------------------
INSERT INTO cd_projects VALUES ('1', '1', '1', '2', 'Dinasty Warriors Dual Lance', 'dw-superior-weapon-02', '0', '10', 'assumenda,omnis,ratione,molestiae,praesentium', 'Voluptatem dolorum corrupti quo accusamus optio ipsa harum.', '50.00', '120', 'Superior_Weapon_02.jpg', '3', '1', '2015-10-13 19:49:01', '2016-01-22 09:19:32', '2016-01-22 09:19:32');
INSERT INTO cd_projects VALUES ('2', '1', '2', '2', 'Elmo Ma Chao DW 7', 'elmo-ma-chao-dw-7', '0', '80', 'Dinasty Warriors,Ma Chao,Guerriero', 'Optio quae quod in temporibus et at.', '40.00', '8', 'ma_chao_helmet___dynasty_warriors_7.jpg', '3', '1', '2015-08-02 04:56:25', '2016-01-22 09:19:32', '2016-01-22 09:19:32');
INSERT INTO cd_projects VALUES ('3', '1', '2', '2', 'Elmo Wen Iang Dinasty Warriors 7', 'elmo-wen-yang-dw-7', '0', '20', 'rerum,eos,esse,et,recusandae', 'Atque ullam tempora a vero perferendis minus consequatur.', '100.00', '100', 'dynasty_warriors_8_wen_yang_helmet.jpg', '3', '1', '2015-07-06 09:29:57', '2016-01-22 09:19:32', '2016-01-22 09:19:32');
INSERT INTO cd_projects VALUES ('4', '2', '1', '2', 'Dinasty Warriors Shield Sword', 'dw-shield-sword', '0', '50', 'provident,est,voluptates,ea,adipisci', 'Nobis est qui dolore et numquam.', '60.00', '15', 'Superior_Weapon_03.jpg', '3', '1', '2015-03-30 12:16:15', '2016-01-22 09:19:32', '2016-01-22 09:19:32');
INSERT INTO cd_projects VALUES ('5', '2', '3', '10', 'Ironman w motorized', 'ironman-w-motorized', '1', '100', 'qui,soluta,consequatur,harum,beatae', 'Unde ex perferendis tempora rerum unde.', '0.00', '0', 'Stealth-Photo-by-David-Lee.jpg', '0', '1', '2015-10-22 19:24:42', '2016-01-22 09:19:32', '2016-01-22 09:19:32');
INSERT INTO cd_projects VALUES ('6', '1', '3', '1', 'Haseo Xth Form', 'haseo-xth-form', '1', '70', '.hack,.Hack G.U.,Haseo Xth Form', 'After having his PC data heavily damaged by Corbenik\'s \"Rebirth\", Haseo finds himself stranded on the outer fringes of \"The World\'s\" systems. He is rescued by Zelkova who brings him to his base, Net Slum Tartarga...', '100.00', '100', 'haseo-xth-form.jpg', '0', '1', '2015-09-11 02:09:32', '2016-01-22 09:19:32', '2016-01-22 09:19:32');
INSERT INTO cd_projects VALUES ('7', '1', '2', '2', 'Dinasty Warriors Stivali', 'dw-stivali', '1', '100', 'Dinasty Warriors, Quin Yang', 'Occaecati quidem est nemo voluptatem totam.', '0.00', '0', 'dinast-warriors-boots.jpg', '0', '1', '2015-12-04 23:42:37', '2016-01-22 09:19:32', '2016-01-22 09:19:32');
INSERT INTO cd_projects VALUES ('8', '1', '1', '2', 'DW Superior_Weapon 01', 'dw-superior-weapon-01', '0', '40', 'architecto,assumenda,ut,quis,tempore', 'Dolores id et veniam nostrum ab recusandae impedit.', '50.00', '12', 'Superior_Weapon_01.jpg', '3', '1', '2015-05-21 08:33:04', '2016-01-22 09:19:32', '2016-01-22 09:19:32');
INSERT INTO cd_projects VALUES ('9', '2', '1', '11', 'Soul Calibur Kafziel Weapon', 'soul-calibur-kafziel-weapon', '1', '100', 'sequi,iste,consequatur,est,assumenda', 'Sint optio quaerat est odit omnis.', '20.00', '20', 'Kafziel.jpg', '3', '1', '2015-10-03 22:20:21', '2016-01-22 09:19:32', '2016-01-22 09:19:32');
INSERT INTO cd_projects VALUES ('10', '4', '3', '2', 'XiahouBa Dinasty Warriors 7 costume v. fantasy', 'dw7-xiaouba-costume', '1', '100', 'excepturi,rem,omnis,ut,dolorum', 'Adipisci iure sit dolores repellat est voluptate.', '130.00', '60', 'XiahouBa-DW7-DLC-Fantasy_Costume.jpg', '3', '1', '2015-12-29 08:59:34', '2016-01-22 09:19:32', '2016-01-22 09:19:32');
INSERT INTO cd_projects VALUES ('11', '3', '3', '2', 'Dinasty Warriors 7  Lian Shi Costme', 'dw7-lianshi-costume', '0', '33', 'lianshi, dinasty warriors, costume', 'dlkasj dlajd lajsdlajs dajsdoias dpoaijsdalsdjasida osida sd', '150.00', '60', 'Lianshi-DW7-DLC-Wu_Fairytale_Costume.jpg', '3', '1', '2016-03-14 18:08:36', '2016-03-14 18:08:44', '2016-03-14 18:08:48');

-- ----------------------------
-- Table structure for `cd_project_document`
-- ----------------------------
DROP TABLE IF EXISTS `cd_project_document`;
CREATE TABLE `cd_project_document` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(10) unsigned NOT NULL,
  `document_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cd_project_document
-- ----------------------------
INSERT INTO cd_project_document VALUES ('1', '5', 'buoni-sconto-knorr.pdf', '1', '2016-03-21 16:13:28', '0000-00-00 00:00:00');
INSERT INTO cd_project_document VALUES ('2', '5', 'pagamento-rata-findomestic-21.03.16.pdf', '1', '2016-03-21 16:13:32', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `cd_project_gender`
-- ----------------------------
DROP TABLE IF EXISTS `cd_project_gender`;
CREATE TABLE `cd_project_gender` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `gender_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cd_project_gender
-- ----------------------------
INSERT INTO cd_project_gender VALUES ('1', '7', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_project_gender VALUES ('2', '8', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_project_gender VALUES ('3', '9', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_project_gender VALUES ('4', '7', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_project_gender VALUES ('5', '5', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_project_gender VALUES ('6', '4', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_project_gender VALUES ('7', '7', '7', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_project_gender VALUES ('8', '6', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_project_gender VALUES ('9', '10', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_project_gender VALUES ('10', '11', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_project_gender VALUES ('11', '6', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_project_gender VALUES ('12', '5', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_project_gender VALUES ('13', '5', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_project_gender VALUES ('14', '5', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_project_gender VALUES ('15', '2', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_project_gender VALUES ('16', '3', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `cd_project_media`
-- ----------------------------
DROP TABLE IF EXISTS `cd_project_media`;
CREATE TABLE `cd_project_media` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(10) unsigned NOT NULL,
  `media_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cd_project_media
-- ----------------------------
INSERT INTO cd_project_media VALUES ('1', '5', 'https://www.youtube.com/embed/zFwetUXh8qA', '1', '2016-03-21 16:13:38', '0000-00-00 00:00:00');
INSERT INTO cd_project_media VALUES ('2', '5', 'https://www.youtube.com/embed/teoV6aLOFQ8', '1', '2016-03-21 16:13:41', '0000-00-00 00:00:00');
INSERT INTO cd_project_media VALUES ('3', '9', 'https://www.youtube.com/embed/OJ2eUDAupQw', '1', '2016-03-21 17:03:47', '0000-00-00 00:00:00');
INSERT INTO cd_project_media VALUES ('4', '2', 'https://www.youtube.com/embed/owwBuWvPkVU', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `cd_series`
-- ----------------------------
DROP TABLE IF EXISTS `cd_series`;
CREATE TABLE `cd_series` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `serie_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `serie_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `series_serie_name_index` (`serie_name`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cd_series
-- ----------------------------
INSERT INTO cd_series VALUES ('1', '.hack G.U.', 'hack-gu', '2015-12-18 22:10:12', '2015-05-25 06:08:28');
INSERT INTO cd_series VALUES ('2', 'Dinasty Warriors', 'dinasty-warriors', '2015-09-25 19:17:46', '2015-10-17 04:12:29');
INSERT INTO cd_series VALUES ('3', 'Tales of..', 'tales-of', '2015-10-19 16:26:28', '2015-12-22 05:00:38');
INSERT INTO cd_series VALUES ('4', 'Resident Evil', 'resident-evil', '2016-03-05 02:28:35', '2015-07-20 06:11:22');
INSERT INTO cd_series VALUES ('5', 'Dr. Who', 'dr-who', '2016-01-17 16:04:39', '2015-12-03 18:17:08');
INSERT INTO cd_series VALUES ('6', 'Ar Gear', 'ar-gear', '2015-10-01 05:28:42', '2015-05-08 14:34:16');
INSERT INTO cd_series VALUES ('7', 'Serie A', 'serie-a', '2015-04-08 08:45:47', '2015-10-03 18:59:57');
INSERT INTO cd_series VALUES ('8', 'Serie B', 'serie-b', '2015-07-15 19:11:26', '2015-12-14 10:55:37');
INSERT INTO cd_series VALUES ('9', 'Serie C', 'serie-c', '2016-01-05 02:29:23', '2015-06-25 05:03:58');
INSERT INTO cd_series VALUES ('10', 'Altro', 'altro', '2015-12-08 04:55:13', '2015-12-07 20:05:41');
INSERT INTO cd_series VALUES ('11', 'Soul Calibur', 'soul-calibur', '2016-03-17 11:07:51', '2016-03-17 11:07:54');

-- ----------------------------
-- Table structure for `cd_users`
-- ----------------------------
DROP TABLE IF EXISTS `cd_users`;
CREATE TABLE `cd_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`,`username`,`password`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_slug_index` (`slug_username`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cd_users
-- ----------------------------
INSERT INTO cd_users VALUES ('1', 'Fabio', 'Monti', 'Haseo Xth', 'haseo-xth', 'fabio.monti@gmail.com', '$2y$10$bVVH.5CM.M9hlfmp8ob7luf4Fk5T/BmopqtkP4mfaMyVg4bQ/PY9y', null, '2016-03-09 13:47:24', '2016-03-09 13:47:24');
INSERT INTO cd_users VALUES ('2', 'Sara', 'Dotti', 'Atoli 16', 'atoli16', 'sara.dotti@hotmail.it', '$2y$10$PDBI9GXnjN82Rg8GkpXDQuLKrVv4.vRRcUYVFI3kyUqmMo/kl8jVC', null, '2016-03-09 13:47:24', '2016-03-09 13:47:24');
INSERT INTO cd_users VALUES ('3', 'Elisa', 'Dotti', 'The Pest 2009', 'the-pest-2009', 'elisa.dotti@fabiomonti.it', '$2y$10$8kWaMjAWDgXj/YEKw/OQTOZaHAAA/q.34NZKaFjKWexdnj89P/K1u', null, '2016-03-09 13:47:24', '2016-03-09 13:47:24');
INSERT INTO cd_users VALUES ('4', 'Gabriel', 'Monti', 'Earthquake 2013', 'earthquake2013', 'gabriel.monti@fabiomonti.it', '$2y$10$cG77L2kO69xl9DKIXEGF0efdDT37V4/3OgSGpvlZoHN9KKSgajQtW', null, '2016-03-09 13:47:24', '2016-03-09 13:47:24');
INSERT INTO cd_users VALUES ('5', 'Rosalba', 'Pullara', 'La Pully', 'la-pully', 'la-pully@fabiomonti.it', '$2y$10$v3YbDRRFGoGNAn8x/oAW9uC.3v/zbve/E2wvxctXb4u30bNh2go.m', null, '2016-03-09 13:47:24', '2016-03-09 13:47:24');
INSERT INTO cd_users VALUES ('6', 'Adriano', 'Finatti', 'Il rompipalle', 'il-rompipalle', 'a.finatti@fabiomonti.it', '$2y$10$1lLPjEse4HR4rkdxg13Er.m9vuu/LmLz4ooREUIhzRXtx2Vyzg8Qi', null, '2016-03-09 13:47:24', '2016-03-09 13:47:24');
INSERT INTO cd_users VALUES ('7', 'Ilaria', 'Dotti', 'Iladotti', 'iladotti', 'ilaria.dotti@hotmail.it', '$2y$10$nzeiGCNdq6OZY/XLlsH1B.HmAqbnHveuz8Qf3zbTdzCEfilehCO.6', null, '2016-03-09 13:47:24', '2016-03-09 13:47:24');
INSERT INTO cd_users VALUES ('8', 'Luisa', 'Dotti', 'la Suocera 2.0', 'la-suocera-2-0', 'luisa.dotti@hotmail.it', '$2y$10$0CE7fJQ/Log52SWNBOvxe.hufBT7LuGj05L5Uyrp.Jmyiys5zuFLO', null, '2016-03-09 13:47:25', '2016-03-09 13:47:25');

-- ----------------------------
-- Table structure for `cd_user_detail`
-- ----------------------------
DROP TABLE IF EXISTS `cd_user_detail`;
CREATE TABLE `cd_user_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `avatar` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'no-image.png',
  `bio` text COLLATE utf8_unicode_ci NOT NULL,
  `motto` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` date NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` text COLLATE utf8_unicode_ci,
  `twitter` text COLLATE utf8_unicode_ci,
  `google` text COLLATE utf8_unicode_ci,
  `youtube` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cd_user_detail
-- ----------------------------
INSERT INTO cd_user_detail VALUES ('1', '1', 'fbma81h01b639x.jpg', 'Ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', 'Cosplay Power!!', '1981-06-01', 'www.fabiomonti.it', 'HaseoXth', 'haseo2011', 'FabioMonti81', 'FabioMonti81', 'FabioMonti81', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO cd_user_detail VALUES ('2', '2', 'no-image.png', 'Moglie di un grandissimo', 'Cosplay Power! I\'m in!', '1986-11-25', null, 'Sara.Dotti', null, null, 'SaraTattoo86', null, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
