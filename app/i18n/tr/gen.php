<?php

/******************************************************************************/
/* Each entry of that file can be associated with a comment to indicate its   */
/* state. When there is no comment, it means the entry is fully translated.   */
/* The recognized comments are (comment matching is case-insensitive):        */
/*   + TODO: the entry has never been translated.                             */
/*   + DIRTY: the entry has been translated but needs to be updated.          */
/*   + IGNORE: the entry does not need to be translated.                      */
/* When a comment is not recognized, it is discarded.                         */
/******************************************************************************/

return array(
	'action' => array(
		'actualize' => 'Yenile akışlarınız',
		'add' => 'Ekle',
		'back_to_rss_feeds' => '← RSS akışlarınız için geri gidin',
		'cancel' => 'İptal',
		'close' => 'Close',	// TODO
		'create' => 'Oluştur',
		'delete_all_feeds' => 'Delete all feeds',	// TODO
		'delete_errored_feeds' => 'Delete feeds with errors',	// TODO
		'delete_muted_feeds' => 'Sessize alınmış akışları sil',
		'demote' => 'Yöneticilikten al',
		'disable' => 'Pasif',
		'download' => 'İndir',
		'empty' => 'Boş',
		'enable' => 'Aktif',
		'export' => 'Dışa Aktar',
		'filter' => 'Filtrele',
		'import' => 'İçe Aktar',
		'load_default_shortcuts' => 'Öntanımlı kısayolları yükle',
		'manage' => 'Yönet',
		'mark_read' => 'Okundu olarak işaretle',
		'menu' => array(
			'open' => 'Menüyü aç',
		),
		'nav_buttons' => array(
			'next' => 'Sonraki makale',
			'prev' => 'Önceki makale',
			'up' => 'Yukarı çık',
		),
		'open_url' => 'URLyi aç',
		'promote' => 'Yöneticilik ata',
		'purge' => 'Temizle',
		'refresh_opml' => 'OPML yenile',
		'remove' => 'Sil',
		'rename' => 'Yeniden adlandır',
		'see_website' => 'Siteyi gör',
		'submit' => 'Onayla',
		'truncate' => 'Tüm makaleleri sil',
		'update' => 'Güncelle',
	),
	'auth' => array(
		'accept_tos' => '<a href="%s">Kullanım koşullarını</a> kabul ediyorum.',
		'email' => 'Email adresleri',
		'keep_logged_in' => '<small>(%s günler)</small> oturumu açık tut',
		'login' => 'Giriş',
		'logout' => 'Çıkış',
		'password' => array(
			'_' => 'Şifre',
			'format' => '<small>En az 7 karakter</small>',
		),
		'registration' => array(
			'_' => 'Yeni hesap',
			'ask' => 'Yeni bir hesap oluştur',
			'title' => 'Hesap oluşturma',
		),
		'username' => array(
			'_' => 'Kullancı adı',
			'format' => '<small>En fazla 16 alfanümerik karakter</small>',
		),
	),
	'date' => array(
		'Apr' => '\\N\\i\\s\\a\\n',
		'Aug' => '\\A\\ğ\\u\\s\\t\\o\\s',
		'Dec' => '\\A\\r\\a\\l\\ı\\k',
		'Feb' => '\\Ş\\u\\b\\a\\t',
		'Jan' => '\\O\\c\\a\\k',
		'Jul' => '\\T\\e\\m\\m\\u\\z',
		'Jun' => '\\H\\a\\z\\i\\r\\a\\n',
		'Mar' => '\\M\\a\\r\\t',
		'May' => '\\M\\a\\y\\ı\\s',
		'Nov' => '\\K\\a\\s\\ı\\m',
		'Oct' => '\\E\\k\\i\\m',
		'Sep' => '\\E\\y\\l\\ü\\l',
		'apr' => 'nis',
		'april' => 'Nis',
		'aug' => 'ağu',
		'august' => 'Ağu',
		'before_yesterday' => 'Dünden önceki gün',
		'dec' => 'ara',
		'december' => 'Ara',
		'feb' => 'şub',
		'february' => 'Şub',
		'format_date' => 'j %s Y',	// IGNORE
		'format_date_hour' => 'j %s Y \\a\\t H\\:i',	// IGNORE
		'fri' => 'Cum',
		'jan' => 'oca',
		'january' => 'Oca',
		'jul' => 'tem',
		'july' => 'Tem',
		'jun' => 'haz',
		'june' => 'Haz',
		'last_2_year' => 'Son 2 yıl',
		'last_3_month' => 'Son 3 ay',
		'last_3_year' => 'Son 3 yıl',
		'last_5_year' => 'Son 5 yıl',
		'last_6_month' => 'Son 6 ay',
		'last_month' => 'Geçen ay',
		'last_week' => 'Geçen hafta',
		'last_year' => 'Geçen yıl',
		'mar' => 'mar',
		'march' => 'Mar',
		'may' => 'Mayıs',
		'may_' => 'May',	// IGNORE
		'mon' => 'Pzt',
		'month' => 'ay',
		'nov' => 'kas',
		'november' => 'Kas',
		'oct' => 'ekm',
		'october' => 'Ekm',
		'sat' => 'Cts',
		'sep' => 'eyl',
		'september' => 'Eyl',
		'sun' => 'Pzr',
		'thu' => 'Per',
		'today' => 'Bugün',
		'tue' => 'Sal',
		'wed' => 'Çar',
		'yesterday' => 'Dün',
	),
	'dir' => 'ltr',	// IGNORE
	'freshrss' => array(
		'_' => 'FreshRSS',	// IGNORE
		'about' => 'FreshRSS hakkında',
	),
	'js' => array(
		'category_empty' => 'Boş kategori',
		'confirm_action' => 'Bunu yapmak istediğinize emin misiniz ? Daha sonra iptal edilemez!',
		'confirm_action_feed_cat' => 'Bunu yapmak istediğinize emin misiniz ? Favorileriniz ve sorgularınız silinecek. Daha sonra iptal edilemez!',
		'feedback' => array(
			'body_new_articles' => 'FreshRSS de okunmaz üzere %%d yeni makale mevcut.',
			'body_unread_articles' => '(unread: %%d)',	// IGNORE
			'request_failed' => 'Hata. İnternet bağlantınızı kontrol edin.',
			'title_new_articles' => 'FreshRSS: yeni makaleler!',
		),
		'labels_empty' => 'Etiketsiz',
		'new_article' => 'Yeni makaleler mevcut. Sayfayı yenilemek için tıklayın.',
		'should_be_activated' => 'JavaScript aktif olmalıdır.',
	),
	'lang' => array(
		'cs' => 'Čeština',	// IGNORE
		'de' => 'Deutsch',	// IGNORE
		'el' => 'Ελληνικά',	// IGNORE
		'en' => 'English',	// IGNORE
		'en-us' => 'English (United States)',	// IGNORE
		'es' => 'Español',	// IGNORE
		'fa' => 'فارسی',	// IGNORE
		'fi' => 'Suomi',	// IGNORE
		'fr' => 'Français',	// IGNORE
		'he' => 'עברית',	// IGNORE
		'hu' => 'Magyar',	// IGNORE
		'id' => 'Bahasa Indonesia',	// IGNORE
		'it' => 'Italiano',	// IGNORE
		'ja' => '日本語',	// IGNORE
		'ko' => '한국어',	// IGNORE
		'lv' => 'Latviešu',	// IGNORE
		'nl' => 'Nederlands',	// IGNORE
		'oc' => 'Occitan',	// IGNORE
		'pl' => 'Polski',	// IGNORE
		'pt-br' => 'Português (Brasil)',	// IGNORE
		'pt-pt' => 'Português (Portugal)',	// IGNORE
		'ru' => 'Русский',	// IGNORE
		'sk' => 'Slovenčina',	// IGNORE
		'tr' => 'Türkçe',	// IGNORE
		'zh-cn' => '简体中文',	// IGNORE
		'zh-tw' => '正體中文',	// IGNORE
	),
	'menu' => array(
		'about' => 'Hakkında',
		'account' => 'Hesap',
		'admin' => 'Yönetim',
		'archiving' => 'Arşiv',
		'authentication' => 'Kimlik doğrulama',
		'check_install' => 'Kurulum kontrolü',
		'configuration' => 'Yapılandırma',
		'display' => 'Görünüm',
		'extensions' => 'Eklentiler',
		'logs' => 'Log kayıtları',
		'privacy' => 'Gizlilik',
		'queries' => 'Kullanıcı sorguları',
		'reading' => 'Okuma',
		'search' => 'Kelime veya #etiket ara',
		'search_help' => 'Daha detaylı bilgi için dökümantasyonu inceleyin <a href="https://freshrss.github.io/FreshRSS/en/users/10_filter.html#with-the-search-field" target="_blank">Arama parametreleri</a>',
		'sharing' => 'Paylaşım',
		'shortcuts' => 'Kısayollar',
		'stats' => 'İstatistikler',
		'system' => 'Sistem yapılandırması',
		'update' => 'Güncelleme',
		'user_management' => 'Kullanıcıları yönet',
		'user_profile' => 'Profil',
	),
	'period' => array(
		'days' => 'gün',
		'hours' => 'saat',
		'months' => 'ay',
		'weeks' => 'hafta',
		'years' => 'yıl',
	),
	'share' => array(
		'Known' => 'Bilinen siteler',
		'archiveIS' => 'archive.is',	// IGNORE
		'archiveORG' => 'archive.org',	// IGNORE
		'archivePH' => 'archive.ph',	// IGNORE
		'bluesky' => 'Bluesky',	// TODO
		'buffer' => 'Buffer',	// IGNORE
		'clipboard' => 'Kopyala',
		'diaspora' => 'Diaspora*',	// IGNORE
		'email' => 'Email',	// IGNORE
		'email-webmail-firefox-fix' => 'Email (webmail - Firefox için düzeltme)',
		'facebook' => 'Facebook',	// IGNORE
		'gnusocial' => 'GNU social',	// IGNORE
		'jdh' => 'Journal du hacker',	// IGNORE
		'lemmy' => 'Lemmy',	// IGNORE
		'linkding' => 'Linkding',	// IGNORE
		'linkedin' => 'LinkedIn',	// IGNORE
		'mastodon' => 'Mastodon',	// IGNORE
		'movim' => 'Movim',	// IGNORE
		'omnivore' => 'Omnivore',	// IGNORE
		'pinboard' => 'Pinboard',	// IGNORE
		'pinterest' => 'Pinterest',	// IGNORE
		'pocket' => 'Pocket',	// IGNORE
		'print' => 'Print',	// IGNORE
		'raindrop' => 'Raindrop.io',	// IGNORE
		'reddit' => 'Reddit',	// IGNORE
		'shaarli' => 'Shaarli',	// IGNORE
		'telegram' => 'Telegram',	// IGNORE
		'twitter' => 'Twitter',	// IGNORE
		'wallabag' => 'wallabag v1',	// IGNORE
		'wallabagv2' => 'wallabag v2',	// IGNORE
		'web-sharing-api' => 'Sistem paylaşımı',
		'whatsapp' => 'Whatsapp',	// IGNORE
		'xing' => 'Xing',	// IGNORE
	),
	'short' => array(
		'attention' => 'Tehlike!',
		'blank_to_disable' => 'Devredışı bırakmak için boş bırakın',
		'by_author' => 'Tarafından:',
		'by_default' => 'Öntanımlı',
		'damn' => 'Hay aksi!',
		'default_category' => 'Kategorisiz',
		'no' => 'Hayır',
		'not_applicable' => 'Uygun değil',
		'ok' => 'Tamam!',
		'or' => 'ya da',
		'yes' => 'Evet',
	),
	'stream' => array(
		'load_more' => 'Daha fazla makale yükle',
		'mark_all_read' => 'Tümünü okundu say',
		'nothing_to_load' => 'Başka makale yok',
	),
);
