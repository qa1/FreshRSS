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
	'about' => array(
		'_' => 'Hakkında',
		'agpl3' => '<a href="https://www.gnu.org/licenses/agpl-3.0.html">AGPL 3</a>',	// IGNORE
		'bug_reports' => array(
			'environment_information' => array(
				'_' => 'System information',	// TODO
				'browser' => 'Browser',	// TODO
				'database' => 'Database',	// TODO
				'server_software' => 'Server software',	// TODO
				'version_curl' => 'cURL version',	// TODO
				'version_frss' => 'FreshRSS version',	// TODO
				'version_php' => 'PHP version',	// TODO
			),
		),
		'bugs_reports' => 'Hata raporu',
		'documentation' => 'Dökümantasyon',
		'freshrss_description' => 'FreshRSS kendi hostunuzda çalışan bir RSS akış toplayıcısıdır. Güçlü ve yapılandırılabilir araçlarıyla basit ve kullanımı kolay bir uygulamadır.',
		'github' => '<a href="https://github.com/FreshRSS/FreshRSS/issues">GitHub sayfası</a>',
		'license' => 'Lisans',
		'project_website' => 'Proje sayfası',
		'title' => 'Hakkında',
		'version' => 'Sürüm',
	),
	'feed' => array(
		'empty' => 'Gösterilecek makale yok.',
		'received' => array(
			'before_yesterday' => 'Received before yesterday',	// TODO
			'today' => 'Received today',	// TODO
			'yesterday' => 'Received yesterday',	// TODO
		),
		'rss_of' => '%s kaynağına ait RSS akışı',
		'title' => 'Ana akış',
		'title_fav' => 'Favoriler',
		'title_global' => 'Evrensel görünüm',
	),
	'log' => array(
		'_' => 'Log Kayıtları',
		'clear' => 'Log kayıt dosyasını temizle',
		'empty' => 'Log kayır dosyası boş',
		'title' => 'Log Kayıtları',
	),
	'menu' => array(
		'about' => 'FreshRSS hakkında',
		'before_one_day' => 'Bir gün önce',
		'before_one_week' => 'Bir hafta önce',
		'bookmark_query' => 'Şuana ait yer imi sorgusu',
		'favorites' => 'Favoriler (%s)',
		'global_view' => 'Evrensel görünüm',
		'important' => 'Önemli akışlar',
		'main_stream' => 'Ana akış',
		'mark_all_read' => 'Hepsini okundu olarak işaretle',
		'mark_cat_read' => 'Kategoriyi okundu olarak işaretle',
		'mark_feed_read' => 'Akışı okundu olarak işaretle',
		'mark_selection_unread' => 'Seçilenleri okunmadı olarak işaretleMark selection as unread',
		'mylabels' => 'Etiketlerim',
		'newer_first' => 'Önce yeniler',
		'non-starred' => 'Favori dışındakileri göster',
		'normal_view' => 'Normal görünüm',
		'older_first' => 'Önce eskiler',
		'queries' => 'Kullanıcı sorguları',
		'read' => 'Okunmuşları göster',
		'reader_view' => 'Okuma görünümü',
		'rss_view' => 'RSS akışı',
		'search_short' => 'Ara',
		'sort' => array(
			'_' => 'Sorting criteria',	// TODO
			'date_asc' => 'Publication date 1→9',	// TODO
			'date_desc' => 'Publication date 9→1',	// TODO
			'id_asc' => 'Freshly received last',	// TODO
			'id_desc' => 'Freshly received first',	// TODO
			'link_asc' => 'Link A→Z',	// TODO
			'link_desc' => 'Link Z→A',	// TODO
			'rand' => 'Random order',	// TODO
			'title_asc' => 'Title A→Z',	// TODO
			'title_desc' => 'Title Z→A',	// TODO
		),
		'starred' => 'Favorileri göster',
		'stats' => 'İstatistikler',
		'subscription' => 'Abonelik yönetimi',
		'unread' => 'Okunmamışları göster',
	),
	'share' => 'Paylaş',
	'tag' => array(
		'related' => 'İlgili etiketler',
	),
	'tos' => array(
		'title' => 'Hizmet Kullanım Şartları',
	),
);
