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
		'_' => 'O serwisie',
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
		'bugs_reports' => 'Zgłaszanie problemów',
		'documentation' => 'Dokumentacja',
		'freshrss_description' => 'FreshRSS jest agregatorem kanałów RSS przeznaczonym do zainstalowania na własnym serwerze. Jest lekki i łatwy do schowania w kieszeni, pozostając przy tym potężnym i konfigurowalnym narzędziem.',
		'github' => '<a href="https://github.com/FreshRSS/FreshRSS/issues">na GitHubie</a>',
		'license' => 'Licencja',
		'project_website' => 'Strona projektu',
		'title' => 'O serwisie',
		'version' => 'Wersja',
	),
	'feed' => array(
		'empty' => 'Brak wiadomości do wyświetlenia.',
		'received' => array(
			'before_yesterday' => 'Received before yesterday',	// TODO
			'today' => 'Received today',	// TODO
			'yesterday' => 'Received yesterday',	// TODO
		),
		'rss_of' => 'Kanał RSS: %s',
		'title' => 'Kanał główny',
		'title_fav' => 'Ulubione',
		'title_global' => 'Widok globalny',
	),
	'log' => array(
		'_' => 'Dziennik',
		'clear' => 'Usuń wpisy z dziennika',
		'empty' => 'Dziennik jest pusty',
		'title' => 'Dziennik',
	),
	'menu' => array(
		'about' => 'O serwisie FreshRSS',
		'before_one_day' => 'Starsze niż dzień',
		'before_one_week' => 'Starsze niż tydzień',
		'bookmark_query' => 'Zapisz bieżące zapytanie',
		'favorites' => 'Ulubione (%s)',
		'global_view' => 'Widok globalny',
		'important' => 'Ważne kanały',
		'main_stream' => 'Kanał główny',
		'mark_all_read' => 'Oznacz wszystkie jako przeczytane',
		'mark_cat_read' => 'Oznacz kategorię jako przeczytaną',
		'mark_feed_read' => 'Oznacz kanał jako przeczytany',
		'mark_selection_unread' => 'Oznacz wiadomości jako nieprzeczytane',
		'mylabels' => 'Własne etykiety',
		'newer_first' => 'Najpierw najnowsze',
		'non-starred' => 'Pokaż wiadomości, które nie są ulubione',
		'normal_view' => 'Widok normalny',
		'older_first' => 'Najpierw najstarsze',
		'queries' => 'Zapisane wyszukiwania',
		'read' => 'Pokaż przeczytane',
		'reader_view' => 'Widok czytania',
		'rss_view' => 'Kanał RSS',
		'search_short' => 'Szukaj',
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
		'starred' => 'Pokaż ulubione',
		'stats' => 'Statystyki',
		'subscription' => 'Zarządzanie subskrypcjami',
		'unread' => 'Pokaż nieprzeczytane',
	),
	'share' => 'Podaj dalej',
	'tag' => array(
		'related' => 'Tagi',
	),
	'tos' => array(
		'title' => 'Warunki użytkowania',
	),
);
