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
	'archiving' => array(
		'_' => '보관',
		'exception' => '제거 에외 사항',
		'help' => '더 자세한 옵션은 개별 피드 설정에 있습니다',
		'keep_favourites' => '즐겨찾기 삭제 안 함',
		'keep_labels' => '라벨 삭제 안 함',
		'keep_max' => '피드별 보관할 글 최대 개수',
		'keep_min_by_feed' => '피드별 보관할 글 최소 개수',
		'keep_period' => '보관할 글 최대 기간',
		'keep_unreads' => '읽지 않은 글 삭제 안 함',
		'maintenance' => '유지 보수',
		'optimize' => '데이터베이스 최적화',
		'optimize_help' => '데이터베이스 크기를 줄이기 위해 가끔씩 수행해주세요',
		'policy' => '제거 정책',
		'policy_warning' => '아무런 제거 정책이 선택되지 않은 경우, 모든 글은 보관됩니다.',
		'purge_now' => '지금 제거',
		'title' => '보관',
		'ttl' => '다음 시간이 지나기 전에 새로고침 금지',
	),
	'display' => array(
		'_' => '표시',
		'darkMode' => array(
			'_' => '자동 다크 모드',
			'auto' => '자동',
			'help' => 'For compatible themes only',	// TODO
			'no' => '끄기',
		),
		'icon' => array(
			'bottom_line' => '하단',
			'display_authors' => '저자',
			'entry' => '문서 아이콘',
			'publication_date' => '발행일',
			'related_tags' => '관련 태그',
			'sharing' => '공유',
			'summary' => '요약',
			'top_line' => '상단',
		),
		'language' => '언어',
		'notif_html5' => array(
			'seconds' => '초 (0: 타임아웃 없음)',
			'timeout' => 'HTML5 알림 타임아웃',
		),
		'show_nav_buttons' => '내비게이션 버튼 보이기',
		'theme' => array(
			'_' => '테마',
			'deprecated' => array(
				'_' => '더 이상 사용되지 않음',
				'description' => '이 테마는 더이상 지원되지 않으며 <a href="https://freshrss.github.io/FreshRSS/en/users/05_Configuration.html#theme" target="_blank">FreshRSS 이후 릴리즈</a>에서 사용할 수 없습니다.',
			),
		),
		'theme_not_available' => '“%s” 테마는 더이상 사용할 수 없습니다. 다른 테마를 선택해 주세요.',
		'thumbnail' => array(
			'label' => '섬네일',
			'landscape' => '가로 방향',
			'none' => '없음',
			'portrait' => '세로 방향',
			'square' => '정사각형',
		),
		'timezone' => '시간대',
		'title' => '표시',
		'website' => array(
			'full' => '아이콘 및 이름',
			'icon' => '아이콘',
			'label' => '웹사이트',
			'name' => '이름',
			'none' => '없음',
		),
		'width' => array(
			'content' => '내용 표시 너비',
			'large' => '넓게',
			'medium' => '중간',
			'no_limit' => '제한 없음',
			'thin' => '얇게',
		),
	),
	'logs' => array(
		'loglist' => array(
			'level' => '로그 수준',
			'message' => '로그 메세지',
			'timestamp' => '시간 표기',
		),
		'pagination' => array(
			'first' => '처음으로',
			'last' => '마지막으로',
			'next' => '다음',
			'previous' => '이전',
		),
	),
	'mark_read_button' => array(
		'_' => '“모두 읽음으로 표시” button',	// DIRTY
		'big' => 'Big',	// TODO
		'none' => 'None',	// TODO
		'small' => 'Small',	// TODO
	),
	'privacy' => array(
		'_' => 'Privacy',	// TODO
		'retrieve_extension_list' => 'Retrieve extension list',	// TODO
	),
	'profile' => array(
		'_' => '프로필 관리',
		'api' => array(
			'_' => 'API 관리',
			'api_not_set' => 'API password not set',	// TODO
			'api_set' => 'API password set',	// TODO
			'check_link' => 'Check API status via: <kbd><a href="../api/" target="_blank">%s</a></kbd>',	// TODO
			'disabled' => 'The API access is disabled.',	// TODO
			'documentation_link' => 'See the <a href="https://freshrss.github.io/FreshRSS/en/users/06_Mobile_access.html#access-via-mobile-app" target="_blank">documentation and list of known apps</a>',	// TODO
			'help' => 'See <a href="http://freshrss.github.io/FreshRSS/en/users/06_Mobile_access.html#access-via-mobile-app" target=_blank>documentation</a>',	// TODO
		),
		'delete' => array(
			'_' => '계정 삭제',
			'warn' => '당신의 계정과 관련된 모든 데이터가 삭제됩니다.',
		),
		'email' => '메일 주소',
		'password_api' => 'API 암호<br /><small>(예: 모바일 애플리케이션)</small>',
		'password_form' => '암호<br /><small>(웹폼 로그인 방식 사용시)</small>',
		'password_format' => '7 글자 이상이어야 합니다',
		'title' => '프로필',
	),
	'query' => array(
		'_' => '사용자 쿼리',
		'deprecated' => '이 쿼리는 더 이상 유효하지 않습니다. 해당하는 카테고리나 피드가 삭제되었습니다.',
		'description' => 'Description',	// TODO
		'filter' => array(
			'_' => '필터 적용:',
			'categories' => '카테고리별로 표시',
			'feeds' => '피드별로 표시',
			'order' => '날짜순으로 정렬',
			'search' => '정규 표현식',
			'shareOpml' => '해당 카테고리와 피드에 대한 OPML 공유 활성화',
			'shareRss' => 'HTML 및 RSS 공유 활성화',
			'state' => '상태',
			'tags' => '태그별로 표시',
			'type' => '유형',
		),
		'get_A' => 'Show all feeds, also those shown in their category',	// TODO
		'get_Z' => 'Show all feeds, also archived ones',	// TODO
		'get_all' => '모든 글 표시',
		'get_all_labels' => '라벨이 있는 글 표시',
		'get_category' => '“%s” 카테고리 표시',
		'get_favorite' => '즐겨찾기에 등록된 글 표시',
		'get_feed' => '“%s” 피드 표시',
		'get_important' => '중요 피드의 글 표시',
		'get_label' => '“%s” 라벨을 가진 글 표시',
		'help' => '<a href="https://freshrss.github.io/FreshRSS/en/users/user_queries.html" target="_blank">유저 쿼리 및 HTML / RSS / OPML을 사용한 재공유 방법 문서</a> 살펴보기.',
		'image_url' => 'Image URL',	// TODO
		'name' => '이름',
		'no_filter' => '필터가 없습니다',
		'no_queries' => array(
			'_' => 'No user queries are saved yet.',	// TODO
			'help' => 'See <a href="https://freshrss.github.io/FreshRSS/en/users/user_queries.html" target="_blank">documentation</a>',	// TODO
		),
		'number' => '쿼리 #%d',
		'order_asc' => '오래된 글 먼저 표시',
		'order_desc' => '최근 글 먼저 표시',
		'search' => '“%s”의 검색 결과',
		'share' => array(
			'_' => '링크로 쿼리 공유',
			'disabled' => array(
				'_' => 'disabled',	// TODO
				'title' => 'Sharing',	// TODO
			),
			'greader' => 'Shareable link to the GReader JSON',	// TODO
			'help' => '링크를 사용해서 쿼리를 공유하세요',
			'html' => 'HTML 공유 링크',
			'opml' => 'OPML 피드 목록 공유 링크',
			'rss' => 'RSS 피드 공유 링크',
		),
		'state_0' => '모든 글 표시',
		'state_1' => '읽은 글 표시',
		'state_2' => '읽지 않은 글 표시',
		'state_3' => '모든 글 표시',
		'state_4' => '즐겨찾기에 등록된 글 표시',
		'state_5' => '즐겨찾기에 등록된 읽은 글 표시',
		'state_6' => '즐겨찾기에 등록된 읽지 않은 글 표시',
		'state_7' => '즐겨찾기에 등록된 글 표시',
		'state_8' => '즐겨찾기에 등록되지 않은 글 표시',
		'state_9' => '즐겨찾기에 등록되지 않고 읽은 글 표시',
		'state_10' => '즐겨찾기에 등록되지 않고 읽지 않은 글 표시',
		'state_11' => '즐겨찾기에 등록되지 않은 글 표시',
		'state_12' => '모든 글 표시',
		'state_13' => '읽은 글 표시',
		'state_14' => '읽지 않은 글 표시',
		'state_15' => '모든 글 표시',
		'title' => '사용자 쿼리',
	),
	'reading' => array(
		'_' => '읽기',
		'after_onread' => '“모두 읽음으로 표시” 후,',
		'always_show_favorites' => '기본으로 즐겨찾기에 있는 모든 글을 표시',
		'apply_to_individual_feed' => 'Applies to feeds individually',	// TODO
		'article' => array(
			'authors_date' => array(
				'_' => '작성자, 작성일',
				'both' => '머리말과 꼬리말에 모두',
				'footer' => '꼬리말에',
				'header' => '머리말에',
				'none' => '숨김',
			),
			'feed_name' => array(
				'above_title' => '제목/태그 위에',
				'none' => '숨김',
				'with_authors' => '작성자, 작성일과 같은 줄에',
			),
			'feed_title' => '피드 제목',
			'icons' => array(
				'_' => 'Article icons position<br /><small>(Reading view only)</small>',	// TODO
				'above_title' => 'Above title',	// TODO
				'with_authors' => 'In authors and date row',	// TODO
			),
			'tags' => array(
				'_' => '태그',
				'both' => '머리말과 꼬리말에',
				'footer' => '꼬리말에',
				'header' => '머리말에',
				'none' => '숨김',
			),
			'tags_max' => array(
				'_' => ' 표시할 최대 태그 수',
				'help' => '0 으로 설정하면 모든 태그를 표시하고 숨기지 않습니다',
			),
		),
		'articles_per_page' => '페이지당 글 수',
		'auto_load_more' => '페이지 하단에 다다르면 글 더 불러오기',
		'auto_remove_article' => '글을 읽은 후 숨기기',
		'confirm_enabled' => '“모두 읽음으로 표시” 실행시 확인 창 표시',
		'display_articles_unfolded' => '글을 펼쳐진 상태로 보여주기',
		'display_categories_unfolded' => '다음 카테고리를 펼치기',
		'headline' => array(
			'articles' => '기사: 열기/닫기',
			'articles_header_footer' => '기사: 머리말/꼬리말',
			'categories' => '좌측 탐색 메뉴: 카테고리',
			'mark_as_read' => '읽음으로 표시',
			'misc' => '기타',
			'view' => '보기',
		),
		'hide_read_feeds' => '읽지 않은 글이 없는 카테고리와 피드 감추기 (“모든 글 표시”가 설정된 경우 동작하지 않습니다)',
		'img_with_lazyload' => '그림을 불러오는 데에 <em>lazy load</em> 모드 사용하기',
		'jump_next' => '다음 읽지 않은 항목으로 이동',
		'mark_updated_article_unread' => '갱신 된 글을 읽지 않음으로 표시',
		'number_divided_when_reader' => '읽기 모드에서는 절반만 표시됩니다.',
		'read' => array(
			'article_open_on_website' => '글이 게재된 웹사이트를 방문했을 때',
			'article_viewed' => '글을 읽었을 때',
			'focus' => '포커스 됐을 때 (중요 피드 제외)',
			'keep_max_n_unread' => '읽지 않은 상태로 유지할 최대 글 개수',
			'scroll' => '스크롤을 하며 지나갈 때 (except for important feeds)',	// DIRTY
			'upon_gone' => '원본 뉴스 피드에서 글 삭제 되었을 때',
			'upon_reception' => '글을 가져오자마자',
			'when' => '읽음으로 표시…',
			'when_same_title_in_category' => 'if an identical title already exists in the top <i>n</i> newest articles of the category',	// TODO
			'when_same_title_in_feed' => '상위 <i>n</i>개의 최신 글에 동일한 제목이 이미 있는 경우 (of the feed)',	// DIRTY
		),
		'show' => array(
			'_' => '글 표시 방식',
			'active_category' => '활성화 된 카테고리',
			'adaptive' => 'Show unreads if any, all articles otherwise',	// TODO
			'all_articles' => '모든 글 표시',
			'all_categories' => '모든 카테고리',
			'no_category' => '카테고리 없음',
			'remember_categories' => '열린 카테고리 기억',
			'unread' => '읽지 않은 글만 표시',
			'unread_or_favorite' => 'Show unreads and favourites',	// TODO
		),
		'show_fav_unread_help' => '라벨에도 적용하기',
		'sides_close_article' => '글 영역 바깥을 클릭하면 글 접기',
		'sort' => array(
			'_' => '정렬 순서',
			'newer_first' => '최근 글 먼저',
			'older_first' => '오래된 글 먼저',
		),
		'star' => array(
			'when' => 'Mark an article as favourite…',	// TODO
		),
		'sticky_post' => '글이 펼쳐진 경우 최상단에 고정하기',
		'title' => '읽기',
		'view' => array(
			'default' => '기본 보기 모드',
			'global' => '전체 모드',
			'normal' => '일반 모드',
			'reader' => '읽기 모드',
		),
	),
	'sharing' => array(
		'_' => '공유',
		'add' => '공유 방법 추가',
		'bluesky' => 'Bluesky',	// TODO
		'deprecated' => '이 서비스는 더 이상 사용되지 않으며 <a href="https://freshrss.github.io/FreshRSS/en/users/08_sharing_services.html" title="상세 정보 문서 열기" target="_blank">추후 릴리즈</a> FreshRSS에서 삭제 될 것 입니다.',
		'diaspora' => 'Diaspora*',	// IGNORE
		'email' => '메일',
		'facebook' => 'Facebook',	// IGNORE
		'more_information' => '자세한 정보',
		'print' => '인쇄',
		'raindrop' => 'Raindrop.io',	// IGNORE
		'remove' => '공유 방법 삭제',
		'shaarli' => 'Shaarli',	// IGNORE
		'share_name' => '표시할 이름',
		'share_url' => '사용할 공유 URL',
		'title' => '공유',
		'twitter' => 'Twitter',	// IGNORE
		'wallabag' => 'wallabag',	// IGNORE
	),
	'shortcut' => array(
		'_' => '단축키',
		'article_action' => '글 관련 동작',
		'auto_share' => '공유',
		'auto_share_help' => '공유 옵션이 하나만 설정되어 있다면 해당 공유 옵션을 사용하고, 그렇지 않다면 공유 옵션을 번호로 선택할 수 있습니다.',
		'close_dropdown' => '메뉴 닫기',
		'collapse_article' => '접기',
		'first_article' => '첫 글 보기',
		'focus_search' => '검색창 사용하기',
		'global_view' => '전체 모드로 전환',
		'help' => '도움말 보기',
		'javascript' => '단축키를 사용하기 위해선 자바스크립트를 사용하도록 설정하여야 합니다',
		'last_article' => '마지막 글 보기',
		'load_more' => '글 더 불러오기',
		'mark_favorite' => '즐겨찾기에 등록',
		'mark_read' => '읽음으로 표시',
		'navigation' => '탐색',
		'navigation_help' => '<kbd>⇧ Shift</kbd> 키를 누른 상태에선 탐색 단축키가 피드에 적용됩니다.<br/><kbd>Alt ⎇</kbd> 키를 누른 상태에선 탐색 단축키가 카테고리에 적용됩니다.',
		'navigation_no_mod_help' => '아래 탐색 단축키에는 "Shift"와 "Alt" 키가 적용되지 않습니다.',
		'next_article' => '다음 글 보기',
		'next_unread_article' => '읽지 않은 다음 글 보기',
		'non_standard' => '일부 키는 (<kbd>%s</kbd>) 단축키로 작동하지 않을 수 도 있습니다.',
		'normal_view' => '일반 모드로 전환',
		'other_action' => '다른 동작',
		'previous_article' => '이전 글 보기',
		'reading_view' => '읽기 모드로 전환',
		'rss_view' => 'RSS 피드로 열기',
		'see_on_website' => '글이 게재된 웹사이트에서 보기',
		'shift_for_all_read' => '+ <kbd>Alt ⎇</kbd> 로 이전 글을 읽음으로 표시<br />+ <kbd>⇧ Shift</kbd> 로 모든 글을 읽음으로 표시',
		'skip_next_article' => '다음 글로 커서 이동',
		'skip_previous_article' => '이전 글로 커서 이동',
		'title' => '단축키',
		'toggle_media' => '미디어 재생/일시정지',
		'user_filter' => '사용자 필터 사용하기',
		'user_filter_help' => '사용자 필터가 하나만 설정되어 있다면 해당 필터를 사용하고, 그렇지 않다면 필터를 번호로 선택할 수 있습니다.',
		'views' => '표시',
	),
	'user' => array(
		'articles_and_size' => '%s 개의 글 (%s)',
		'current' => '현재 사용자',
		'is_admin' => '관리자입니다',
		'users' => '전체 사용자',
	),
);
