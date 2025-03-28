<?php
declare(strict_types=1);

require_once(LIB_PATH . '/lib_date.php');

/**
 * Contains a search from the search form.
 *
 * It allows to extract meaningful bits of the search and store them in a
 * convenient object
 */
class FreshRSS_Search implements \Stringable {

	/**
	 * This contains the user input string
	 */
	private string $raw_input = '';

	// The following properties are extracted from the raw input
	/** @var list<string>|null */
	private ?array $entry_ids = null;
	/** @var list<int>|null */
	private ?array $feed_ids = null;
	/** @var list<int>|'*'|null */
	private $label_ids = null;
	/** @var list<string>|null */
	private ?array $label_names = null;
	/** @var list<string>|null */
	private ?array $intitle = null;
	/** @var list<string>|null */
	private ?array $intitle_regex = null;
	/** @var list<string>|null */
	private ?array $intext = null;
	/** @var list<string>|null */
	private ?array $intext_regex = null;
	/** @var int|false|null */
	private $min_date = null;
	/** @var int|false|null */
	private $max_date = null;
	/** @var int|false|null */
	private $min_pubdate = null;
	/** @var int|false|null */
	private $max_pubdate = null;
	/** @var list<string>|null */
	private ?array $inurl = null;
	/** @var list<string>|null */
	private ?array $inurl_regex = null;
	/** @var list<string>|null */
	private ?array $author = null;
	/** @var list<string>|null */
	private ?array $author_regex = null;
	/** @var list<string>|null */
	private ?array $tags = null;
	/** @var list<string>|null */
	private ?array $tags_regex = null;
	/** @var list<string>|null */
	private ?array $search = null;
	/** @var list<string>|null */
	private ?array $search_regex = null;

	/** @var list<string>|null */
	private ?array $not_entry_ids = null;
	/** @var list<int>|null */
	private ?array $not_feed_ids = null;
	/** @var list<int>|'*'|null */
	private $not_label_ids = null;
	/** @var list<string>|null */
	private ?array $not_label_names = null;
	/** @var list<string>|null */
	private ?array $not_intitle = null;
	/** @var list<string>|null */
	private ?array $not_intitle_regex = null;
	/** @var list<string>|null */
	private ?array $not_intext = null;
	/** @var list<string>|null */
	private ?array $not_intext_regex = null;
	/** @var int|false|null */
	private $not_min_date = null;
	/** @var int|false|null */
	private $not_max_date = null;
	/** @var int|false|null */
	private $not_min_pubdate = null;
	/** @var int|false|null */
	private $not_max_pubdate = null;
	/** @var list<string>|null */
	private ?array $not_inurl = null;
	/** @var list<string>|null */
	private ?array $not_inurl_regex = null;
	/** @var list<string>|null */
	private ?array $not_author = null;
	/** @var list<string>|null */
	private ?array $not_author_regex = null;
	/** @var list<string>|null */
	private ?array $not_tags = null;
	/** @var list<string>|null */
	private ?array $not_tags_regex = null;
	/** @var list<string>|null */
	private ?array $not_search = null;
	/** @var list<string>|null */
	private ?array $not_search_regex = null;

	public function __construct(string $input) {
		$input = self::cleanSearch($input);
		$input = self::unescape($input);
		$input = FreshRSS_BooleanSearch::unescapeLiteralParentheses($input);
		$this->raw_input = $input;

		$input = $this->parseNotEntryIds($input);
		$input = $this->parseNotFeedIds($input);
		$input = $this->parseNotLabelIds($input);
		$input = $this->parseNotLabelNames($input);

		$input = $this->parseNotPubdateSearch($input);
		$input = $this->parseNotDateSearch($input);

		$input = $this->parseNotIntitleSearch($input);
		$input = $this->parseNotIntextSearch($input);
		$input = $this->parseNotAuthorSearch($input);
		$input = $this->parseNotInurlSearch($input);
		$input = $this->parseNotTagsSearch($input);

		$input = $this->parseEntryIds($input);
		$input = $this->parseFeedIds($input);
		$input = $this->parseLabelIds($input);
		$input = $this->parseLabelNames($input);

		$input = $this->parsePubdateSearch($input);
		$input = $this->parseDateSearch($input);

		$input = $this->parseIntitleSearch($input);
		$input = $this->parseIntextSearch($input);
		$input = $this->parseAuthorSearch($input);
		$input = $this->parseInurlSearch($input);
		$input = $this->parseTagsSearch($input);

		$input = $this->parseQuotedSearch($input);
		$input = $this->parseNotSearch($input);
		$this->parseSearch($input);
	}

	#[\Override]
	public function __toString(): string {
		return $this->getRawInput();
	}

	public function getRawInput(): string {
		return $this->raw_input;
	}

	/** @return list<string>|null */
	public function getEntryIds(): ?array {
		return $this->entry_ids;
	}
	/** @return list<string>|null */
	public function getNotEntryIds(): ?array {
		return $this->not_entry_ids;
	}

	/** @return list<int>|null */
	public function getFeedIds(): ?array {
		return $this->feed_ids;
	}
	/** @return list<int>|null */
	public function getNotFeedIds(): ?array {
		return $this->not_feed_ids;
	}

	/** @return list<int>|'*'|null */
	public function getLabelIds(): array|string|null {
		return $this->label_ids;
	}
	/** @return list<int>|'*'|null */
	public function getNotLabelIds(): array|string|null {
		return $this->not_label_ids;
	}
	/** @return list<string>|null */
	public function getLabelNames(): ?array {
		return $this->label_names;
	}
	/** @return list<string>|null */
	public function getNotLabelNames(): ?array {
		return $this->not_label_names;
	}

	/** @return list<string>|null */
	public function getIntitle(): ?array {
		return $this->intitle;
	}
	/** @return list<string>|null */
	public function getIntitleRegex(): ?array {
		return $this->intitle_regex;
	}
	/** @return list<string>|null */
	public function getNotIntitle(): ?array {
		return $this->not_intitle;
	}
	/** @return list<string>|null */
	public function getNotIntitleRegex(): ?array {
		return $this->not_intitle_regex;
	}

	/** @return list<string>|null */
	public function getIntext(): ?array {
		return $this->intext;
	}
	/** @return list<string>|null */
	public function getIntextRegex(): ?array {
		return $this->intext_regex;
	}
	/** @return list<string>|null */
	public function getNotIntext(): ?array {
		return $this->not_intext;
	}
	/** @return list<string>|null */
	public function getNotIntextRegex(): ?array {
		return $this->not_intext_regex;
	}

	public function getMinDate(): ?int {
		return $this->min_date ?: null;
	}
	public function getNotMinDate(): ?int {
		return $this->not_min_date ?: null;
	}
	public function setMinDate(int $value): void {
		$this->min_date = $value;
	}

	public function getMaxDate(): ?int {
		return $this->max_date ?: null;
	}
	public function getNotMaxDate(): ?int {
		return $this->not_max_date ?: null;
	}
	public function setMaxDate(int $value): void {
		$this->max_date = $value;
	}

	public function getMinPubdate(): ?int {
		return $this->min_pubdate ?: null;
	}
	public function getNotMinPubdate(): ?int {
		return $this->not_min_pubdate ?: null;
	}

	public function getMaxPubdate(): ?int {
		return $this->max_pubdate ?: null;
	}
	public function getNotMaxPubdate(): ?int {
		return $this->not_max_pubdate ?: null;
	}

	/** @return list<string>|null */
	public function getInurl(): ?array {
		return $this->inurl;
	}
	/** @return list<string>|null */
	public function getInurlRegex(): ?array {
		return $this->inurl_regex;
	}
	/** @return list<string>|null */
	public function getNotInurl(): ?array {
		return $this->not_inurl;
	}
	/** @return list<string>|null */
	public function getNotInurlRegex(): ?array {
		return $this->not_inurl_regex;
	}

	/** @return list<string>|null */
	public function getAuthor(): ?array {
		return $this->author;
	}
	/** @return list<string>|null */
	public function getAuthorRegex(): ?array {
		return $this->author_regex;
	}
	/** @return list<string>|null */
	public function getNotAuthor(): ?array {
		return $this->not_author;
	}
	/** @return list<string>|null */
	public function getNotAuthorRegex(): ?array {
		return $this->not_author_regex;
	}

	/** @return list<string>|null */
	public function getTags(): ?array {
		return $this->tags;
	}
	/** @return list<string>|null */
	public function getTagsRegex(): ?array {
		return $this->tags_regex;
	}
	/** @return list<string>|null */
	public function getNotTags(): ?array {
		return $this->not_tags;
	}
	/** @return list<string>|null */
	public function getNotTagsRegex(): ?array {
		return $this->not_tags_regex;
	}

	/** @return list<string>|null */
	public function getSearch(): ?array {
		return $this->search;
	}
	/** @return list<string>|null */
	public function getSearchRegex(): ?array {
		return $this->search_regex;
	}
	/** @return list<string>|null */
	public function getNotSearch(): ?array {
		return $this->not_search;
	}
	/** @return list<string>|null */
	public function getNotSearchRegex(): ?array {
		return $this->not_search_regex;
	}

	/**
	 * @param list<string>|null $anArray
	 * @return list<string>
	 */
	private static function removeEmptyValues(?array $anArray): array {
		return empty($anArray) ? [] : array_values(array_filter($anArray, static fn(string $value) => $value !== ''));
	}

	/**
	 * @param list<string>|string $value
	 * @return ($value is string ? string : list<string>)
	 */
	private static function decodeSpaces(array|string $value): array|string {
		if (is_array($value)) {
			foreach ($value as &$val) {
				$val = self::decodeSpaces($val);
			}
		} else {
			$value = trim(str_replace('+', ' ', $value));
		}
		return $value;
	}

	/**
	 * @param list<string> $strings
	 * @return list<string>
	 */
	private static function htmlspecialchars_decodes(array $strings): array {
		return array_map(static fn(string $s) => htmlspecialchars_decode($s, ENT_QUOTES), $strings);
	}

	/**
	 * Parse the search string to find entry (article) IDs.
	 */
	private function parseEntryIds(string $input): string {
		if (preg_match_all('/\\be:(?P<search>[0-9,]*)/', $input, $matches)) {
			$input = str_replace($matches[0], '', $input);
			$ids_lists = $matches['search'];
			$this->entry_ids = [];
			foreach ($ids_lists as $ids_list) {
				$entry_ids = explode(',', $ids_list);
				$entry_ids = self::removeEmptyValues($entry_ids);
				if (!empty($entry_ids)) {
					$this->entry_ids = array_merge($this->entry_ids, $entry_ids);
				}
			}
		}
		return $input;
	}

	private function parseNotEntryIds(string $input): string {
		if (preg_match_all('/(?<=[\\s(]|^)[!-]e:(?P<search>[0-9,]*)/', $input, $matches)) {
			$input = str_replace($matches[0], '', $input);
			$ids_lists = $matches['search'];
			$this->not_entry_ids = [];
			foreach ($ids_lists as $ids_list) {
				$entry_ids = explode(',', $ids_list);
				$entry_ids = self::removeEmptyValues($entry_ids);
				if (!empty($entry_ids)) {
					$this->not_entry_ids = array_merge($this->not_entry_ids, $entry_ids);
				}
			}
		}
		return $input;
	}

	private function parseFeedIds(string $input): string {
		if (preg_match_all('/\\bf:(?P<search>[0-9,]*)/', $input, $matches)) {
			$input = str_replace($matches[0], '', $input);
			$ids_lists = $matches['search'];
			$this->feed_ids = [];
			foreach ($ids_lists as $ids_list) {
				$feed_ids = explode(',', $ids_list);
				$feed_ids = self::removeEmptyValues($feed_ids);
				/** @var list<int> $feed_ids */
				$feed_ids = array_map('intval', $feed_ids);
				if (!empty($feed_ids)) {
					$this->feed_ids = array_merge($this->feed_ids, $feed_ids);
				}
			}
		}
		return $input;
	}

	private function parseNotFeedIds(string $input): string {
		if (preg_match_all('/(?<=[\\s(]|^)[!-]f:(?P<search>[0-9,]*)/', $input, $matches)) {
			$input = str_replace($matches[0], '', $input);
			$ids_lists = $matches['search'];
			$this->not_feed_ids = [];
			foreach ($ids_lists as $ids_list) {
				$feed_ids = explode(',', $ids_list);
				$feed_ids = self::removeEmptyValues($feed_ids);
				/** @var list<int> $feed_ids */
				$feed_ids = array_map('intval', $feed_ids);
				if (!empty($feed_ids)) {
					$this->not_feed_ids = array_merge($this->not_feed_ids, $feed_ids);
				}
			}
		}
		return $input;
	}

	/**
	 * Parse the search string to find tags (labels) IDs.
	 */
	private function parseLabelIds(string $input): string {
		if (preg_match_all('/\\b[lL]:(?P<search>[0-9,]+|[*])/', $input, $matches)) {
			$input = str_replace($matches[0], '', $input);
			$ids_lists = $matches['search'];
			$this->label_ids = [];
			foreach ($ids_lists as $ids_list) {
				if ($ids_list === '*') {
					$this->label_ids = '*';
					break;
				}
				$label_ids = explode(',', $ids_list);
				$label_ids = self::removeEmptyValues($label_ids);
				/** @var list<int> $label_ids */
				$label_ids = array_map('intval', $label_ids);
				if (!empty($label_ids)) {
					$this->label_ids = array_merge($this->label_ids, $label_ids);
				}
			}
		}
		return $input;
	}

	private function parseNotLabelIds(string $input): string {
		if (preg_match_all('/(?<=[\\s(]|^)[!-][lL]:(?P<search>[0-9,]+|[*])/', $input, $matches)) {
			$input = str_replace($matches[0], '', $input);
			$ids_lists = $matches['search'];
			$this->not_label_ids = [];
			foreach ($ids_lists as $ids_list) {
				if ($ids_list === '*') {
					$this->not_label_ids = '*';
					break;
				}
				$label_ids = explode(',', $ids_list);
				$label_ids = self::removeEmptyValues($label_ids);
				/** @var list<int> $label_ids */
				$label_ids = array_map('intval', $label_ids);
				if (!empty($label_ids)) {
					$this->not_label_ids = array_merge($this->not_label_ids, $label_ids);
				}
			}
		}
		return $input;
	}

	/**
	 * Parse the search string to find tags (labels) names.
	 */
	private function parseLabelNames(string $input): string {
		$names_lists = [];
		if (preg_match_all('/\\blabels?:(?P<delim>[\'"])(?P<search>.*)(?P=delim)/U', $input, $matches)) {
			$names_lists = $matches['search'];
			$input = str_replace($matches[0], '', $input);
		}
		if (preg_match_all('/\\blabels?:(?P<search>[^\s"]*)/', $input, $matches)) {
			$names_lists = array_merge($names_lists, $matches['search']);
			$input = str_replace($matches[0], '', $input);
		}
		if (!empty($names_lists)) {
			$this->label_names = [];
			foreach ($names_lists as $names_list) {
				$names_array = explode(',', $names_list);
				$names_array = self::removeEmptyValues($names_array);
				if (!empty($names_array)) {
					$this->label_names = array_merge($this->label_names, $names_array);
				}
			}
		}
		return $input;
	}

	/**
	 * Parse the search string to find tags (labels) names to exclude.
	 */
	private function parseNotLabelNames(string $input): string {
		$names_lists = [];
		if (preg_match_all('/(?<=[\\s(]|^)[!-]labels?:(?P<delim>[\'"])(?P<search>.*)(?P=delim)/U', $input, $matches)) {
			$names_lists = $matches['search'];
			$input = str_replace($matches[0], '', $input);
		}
		if (preg_match_all('/(?<=[\\s(]|^)[!-]labels?:(?P<search>[^\\s"]*)/', $input, $matches)) {
			$names_lists = array_merge($names_lists, $matches['search']);
			$input = str_replace($matches[0], '', $input);
		}
		if (!empty($names_lists)) {
			$this->not_label_names = [];
			foreach ($names_lists as $names_list) {
				$names_array = explode(',', $names_list);
				$names_array = self::removeEmptyValues($names_array);
				if (!empty($names_array)) {
					$this->not_label_names = array_merge($this->not_label_names, $names_array);
				}
			}
		}
		return $input;
	}

	/**
	 * Parse the search string to find intitle keyword and the search related to it.
	 */
	private function parseIntitleSearch(string $input): string {
		if (preg_match_all('#\\bintitle:(?P<search>/.*?(?<!\\\\)/[im]*)#', $input, $matches)) {
			$this->intitle_regex = self::htmlspecialchars_decodes($matches['search']);
			$input = str_replace($matches[0], '', $input);
		}
		if (preg_match_all('/\\bintitle:(?P<delim>[\'"])(?P<search>.*)(?P=delim)/U', $input, $matches)) {
			$this->intitle = $matches['search'];
			$input = str_replace($matches[0], '', $input);
		}
		if (preg_match_all('/\\bintitle:(?P<search>[^\s"]*)/', $input, $matches)) {
			$this->intitle = array_merge($this->intitle ?? [], $matches['search']);
			$input = str_replace($matches[0], '', $input);
		}
		$this->intitle = self::removeEmptyValues($this->intitle);
		if (empty($this->intitle)) {
			$this->intitle = null;
		}
		return $input;
	}

	private function parseNotIntitleSearch(string $input): string {
		if (preg_match_all('#(?<=[\\s(]|^)[!-]intitle:(?P<search>/.*?(?<!\\\\)/[im]*)#', $input, $matches)) {
			$this->not_intitle_regex = self::htmlspecialchars_decodes($matches['search']);
			$input = str_replace($matches[0], '', $input);
		}
		if (preg_match_all('/(?<=[\\s(]|^)[!-]intitle:(?P<delim>[\'"])(?P<search>.*)(?P=delim)/U', $input, $matches)) {
			$this->not_intitle = $matches['search'];
			$input = str_replace($matches[0], '', $input);
		}
		if (preg_match_all('/(?<=[\\s(]|^)[!-]intitle:(?P<search>[^\s"]*)/', $input, $matches)) {
			$this->not_intitle = array_merge($this->not_intitle ?? [], $matches['search']);
			$input = str_replace($matches[0], '', $input);
		}
		$this->not_intitle = self::removeEmptyValues($this->not_intitle);
		if (empty($this->not_intitle)) {
			$this->not_intitle = null;
		}
		return $input;
	}

	/**
	 * Parse the search string to find intext keyword and the search related to it.
	 */
	private function parseIntextSearch(string $input): string {
		if (preg_match_all('#\\bintext:(?P<search>/.*?(?<!\\\\)/[im]*)#', $input, $matches)) {
			$this->intext_regex = self::htmlspecialchars_decodes($matches['search']);
			$input = str_replace($matches[0], '', $input);
		}
		if (preg_match_all('/\\bintext:(?P<delim>[\'"])(?P<search>.*)(?P=delim)/U', $input, $matches)) {
			$this->intext = $matches['search'];
			$input = str_replace($matches[0], '', $input);
		}
		if (preg_match_all('/\\bintext:(?P<search>[^\s"]*)/', $input, $matches)) {
			$this->intext = array_merge($this->intext ?? [], $matches['search']);
			$input = str_replace($matches[0], '', $input);
		}
		$this->intext = self::removeEmptyValues($this->intext);
		if (empty($this->intext)) {
			$this->intext = null;
		}
		return $input;
	}

	private function parseNotIntextSearch(string $input): string {
		if (preg_match_all('#(?<=[\\s(]|^)[!-]intext:(?P<search>/.*?(?<!\\\\)/[im]*)#', $input, $matches)) {
			$this->not_intext_regex = self::htmlspecialchars_decodes($matches['search']);
			$input = str_replace($matches[0], '', $input);
		}
		if (preg_match_all('/(?<=[\\s(]|^)[!-]intext:(?P<delim>[\'"])(?P<search>.*)(?P=delim)/U', $input, $matches)) {
			$this->not_intext = $matches['search'];
			$input = str_replace($matches[0], '', $input);
		}
		if (preg_match_all('/(?<=[\\s(]|^)[!-]intext:(?P<search>[^\s"]*)/', $input, $matches)) {
			$this->not_intext = array_merge($this->not_intext ?? [], $matches['search']);
			$input = str_replace($matches[0], '', $input);
		}
		$this->not_intext = self::removeEmptyValues($this->not_intext);
		if (empty($this->not_intext)) {
			$this->not_intext = null;
		}
		return $input;
	}

	/**
	 * Parse the search string to find author keyword and the search related to it.
	 * The search is the first word following the keyword except when using
	 * a delimiter. Supported delimiters are single quote (') and double quotes (").
	 */
	private function parseAuthorSearch(string $input): string {
		if (preg_match_all('#\\bauthor:(?P<search>/.*?(?<!\\\\)/[im]*)#', $input, $matches)) {
			$this->author_regex = self::htmlspecialchars_decodes($matches['search']);
			$input = str_replace($matches[0], '', $input);
		}
		if (preg_match_all('/\\bauthor:(?P<delim>[\'"])(?P<search>.*)(?P=delim)/U', $input, $matches)) {
			$this->author = $matches['search'];
			$input = str_replace($matches[0], '', $input);
		}
		if (preg_match_all('/\\bauthor:(?P<search>[^\s"]*)/', $input, $matches)) {
			$this->author = array_merge($this->author ?? [], $matches['search']);
			$input = str_replace($matches[0], '', $input);
		}
		$this->author = self::removeEmptyValues($this->author);
		if (empty($this->author)) {
			$this->author = null;
		}
		return $input;
	}

	private function parseNotAuthorSearch(string $input): string {
		if (preg_match_all('#(?<=[\\s(]|^)[!-]author:(?P<search>/.*?(?<!\\\\)/[im]*)#', $input, $matches)) {
			$this->not_author_regex = self::htmlspecialchars_decodes($matches['search']);
			$input = str_replace($matches[0], '', $input);
		}
		if (preg_match_all('/(?<=[\\s(]|^)[!-]author:(?P<delim>[\'"])(?P<search>.*)(?P=delim)/U', $input, $matches)) {
			$this->not_author = $matches['search'];
			$input = str_replace($matches[0], '', $input);
		}
		if (preg_match_all('/(?<=[\\s(]|^)[!-]author:(?P<search>[^\s"]*)/', $input, $matches)) {
			$this->not_author = array_merge($this->not_author ?? [], $matches['search']);
			$input = str_replace($matches[0], '', $input);
		}
		$this->not_author = self::removeEmptyValues($this->not_author);
		if (empty($this->not_author)) {
			$this->not_author = null;
		}
		return $input;
	}

	/**
	 * Parse the search string to find inurl keyword and the search related to it.
	 * The search is the first word following the keyword.
	 */
	private function parseInurlSearch(string $input): string {
		if (preg_match_all('#\\binurl:(?P<search>/.*?(?<!\\\\)/[im]*)#', $input, $matches)) {
			$this->inurl_regex = self::htmlspecialchars_decodes($matches['search']);
			$input = str_replace($matches[0], '', $input);
		}
		if (preg_match_all('/\\binurl:(?P<delim>[\'"])(?P<search>.*)(?P=delim)/U', $input, $matches)) {
			$this->inurl = $matches['search'];
			$input = str_replace($matches[0], '', $input);
		}
		if (preg_match_all('/\\binurl:(?P<search>[^\\s]*)/', $input, $matches)) {
			$this->inurl = $matches['search'];
			$input = str_replace($matches[0], '', $input);
		}
		$this->inurl = self::removeEmptyValues($this->inurl);
		if (empty($this->inurl)) {
			$this->inurl = null;
		}
		return $input;
	}

	private function parseNotInurlSearch(string $input): string {
		if (preg_match_all('#(?<=[\\s(]|^)[!-]inurl:(?P<search>/.*?(?<!\\\\)/[im]*)#', $input, $matches)) {
			$this->not_inurl_regex = self::htmlspecialchars_decodes($matches['search']);
			$input = str_replace($matches[0], '', $input);
		}
		if (preg_match_all('/(?<=[\\s(]|^)[!-]inurl:(?P<delim>[\'"])(?P<search>.*)(?P=delim)/U', $input, $matches)) {
			$this->not_inurl = $matches['search'];
			$input = str_replace($matches[0], '', $input);
		}
		if (preg_match_all('/(?<=[\\s(]|^)[!-]inurl:(?P<search>[^\\s]*)/', $input, $matches)) {
			$this->not_inurl = $matches['search'];
			$input = str_replace($matches[0], '', $input);
		}
		$this->not_inurl = self::removeEmptyValues($this->not_inurl);
		if (empty($this->not_inurl)) {
			$this->not_inurl = null;
		}
		return $input;
	}

	/**
	 * Parse the search string to find date keyword and the search related to it.
	 * The search is the first word following the keyword.
	 */
	private function parseDateSearch(string $input): string {
		if (preg_match_all('/\\bdate:(?P<search>[^\\s]*)/', $input, $matches)) {
			$input = str_replace($matches[0], '', $input);
			$dates = self::removeEmptyValues($matches['search']);
			if (!empty($dates[0])) {
				[$this->min_date, $this->max_date] = parseDateInterval($dates[0]);
			}
		}
		return $input;
	}

	private function parseNotDateSearch(string $input): string {
		if (preg_match_all('/(?<=[\\s(]|^)[!-]date:(?P<search>[^\\s]*)/', $input, $matches)) {
			$input = str_replace($matches[0], '', $input);
			$dates = self::removeEmptyValues($matches['search']);
			if (!empty($dates[0])) {
				[$this->not_min_date, $this->not_max_date] = parseDateInterval($dates[0]);
			}
		}
		return $input;
	}


	/**
	 * Parse the search string to find pubdate keyword and the search related to it.
	 * The search is the first word following the keyword.
	 */
	private function parsePubdateSearch(string $input): string {
		if (preg_match_all('/\\bpubdate:(?P<search>[^\\s]*)/', $input, $matches)) {
			$input = str_replace($matches[0], '', $input);
			$dates = self::removeEmptyValues($matches['search']);
			if (!empty($dates[0])) {
				[$this->min_pubdate, $this->max_pubdate] = parseDateInterval($dates[0]);
			}
		}
		return $input;
	}

	private function parseNotPubdateSearch(string $input): string {
		if (preg_match_all('/(?<=[\\s(]|^)[!-]pubdate:(?P<search>[^\\s]*)/', $input, $matches)) {
			$input = str_replace($matches[0], '', $input);
			$dates = self::removeEmptyValues($matches['search']);
			if (!empty($dates[0])) {
				[$this->not_min_pubdate, $this->not_max_pubdate] = parseDateInterval($dates[0]);
			}
		}
		return $input;
	}

	/**
	 * Parse the search string to find tags keyword (# followed by a word)
	 * and the search related to it.
	 * The search is the first word following the #.
	 */
	private function parseTagsSearch(string $input): string {
		if (preg_match_all('%#(?P<search>/.*?(?<!\\\\)/[im]*)%', $input, $matches)) {
			$this->tags_regex = self::htmlspecialchars_decodes($matches['search']);
			$input = str_replace($matches[0], '', $input);
		}
		if (preg_match_all('/#(?P<delim>[\'"])(?P<search>.*)(?P=delim)/U', $input, $matches)) {
			$this->tags = $matches['search'];
			$input = str_replace($matches[0], '', $input);
		}
		if (preg_match_all('/#(?P<search>[^\\s]+)/', $input, $matches)) {
			$this->tags = $matches['search'];
			$input = str_replace($matches[0], '', $input);
		}
		$this->tags = self::removeEmptyValues($this->tags);
		if (empty($this->tags)) {
			$this->tags = null;
		} else {
			$this->tags = self::decodeSpaces($this->tags);
		}
		return $input;
	}

	private function parseNotTagsSearch(string $input): string {
		if (preg_match_all('%(?<=[\\s(]|^)[!-]#(?P<search>/.*?(?<!\\\\)/[im]*)%', $input, $matches)) {
			$this->not_tags_regex = self::htmlspecialchars_decodes($matches['search']);
			$input = str_replace($matches[0], '', $input);
		}
		if (preg_match_all('/(?<=[\\s(]|^)[!-]#(?P<delim>[\'"])(?P<search>.*)(?P=delim)/U', $input, $matches)) {
			$this->not_tags = $matches['search'];
			$input = str_replace($matches[0], '', $input);
		}
		if (preg_match_all('/(?<=[\\s(]|^)[!-]#(?P<search>[^\\s]+)/', $input, $matches)) {
			$this->not_tags = $matches['search'];
			$input = str_replace($matches[0], '', $input);
		}
		$this->not_tags = self::removeEmptyValues($this->not_tags);
		if (empty($this->not_tags)) {
			$this->not_tags = null;
		} else {
			$this->not_tags = self::decodeSpaces($this->not_tags);
		}
		return $input;
	}

	/**
	 * Parse the search string to find search values.
	 * Every word is a distinct search value using a delimiter.
	 * Supported delimiters are single quote (') and double quotes (") and regex (/).
	 */
	private function parseQuotedSearch(string $input): string {
		$input = self::cleanSearch($input);
		if ($input === '') {
			return '';
		}
		if (preg_match_all('#(?<=[\\s(]|^)(?<![!-\\\\])(?P<search>/.*?(?<!\\\\)/[im]*)#', $input, $matches)) {
			$this->search_regex = self::htmlspecialchars_decodes($matches['search']);
			//TODO: Replace all those str_replace with PREG_OFFSET_CAPTURE
			$input = str_replace($matches[0], '', $input);
		}
		if (preg_match_all('/(?<=[\\s(]|^)(?<![!-\\\\])(?P<delim>[\'"])(?P<search>.*)(?P=delim)/U', $input, $matches)) {
			$this->search = $matches['search'];
			//TODO: Replace all those str_replace with PREG_OFFSET_CAPTURE
			$input = str_replace($matches[0], '', $input);
		}
		return $input;
	}

	/**
	 * Parse the search string to find search values.
	 * Every word is a distinct search value.
	 */
	private function parseSearch(string $input): string {
		$input = self::cleanSearch($input);
		if ($input === '') {
			return '';
		}
		if (is_array($this->search)) {
			$this->search = array_merge($this->search, explode(' ', $input));
		} else {
			$this->search = explode(' ', $input);
		}
		return $input;
	}

	private function parseNotSearch(string $input): string {
		$input = self::cleanSearch($input);
		if ($input === '') {
			return '';
		}
		if (preg_match_all('#(?<=[\\s(]|^)[!-](?P<search>(?<!\\\\)/.*?(?<!\\\\)/[im]*)#', $input, $matches)) {
			$this->not_search_regex = self::htmlspecialchars_decodes($matches['search']);
			$input = str_replace($matches[0], '', $input);
		}
		if (preg_match_all('/(?<=[\\s(]|^)[!-](?P<delim>[\'"])(?P<search>.*)(?P=delim)/U', $input, $matches)) {
			$this->not_search = $matches['search'];
			$input = str_replace($matches[0], '', $input);
		}
		$input = self::cleanSearch($input);
		if ($input === '') {
			return '';
		}
		if (preg_match_all('/(?<=[\\s(]|^)[!-](?P<search>[^\\s]+)/', $input, $matches)) {
			$this->not_search = array_merge(is_array($this->not_search) ? $this->not_search : [], $matches['search']);
			$input = str_replace($matches[0], '', $input);
		}
		$this->not_search = self::removeEmptyValues($this->not_search);
		return $input;
	}

	/**
	 * Remove all unnecessary spaces in the search
	 */
	private static function cleanSearch(string $input): string {
		$input = preg_replace('/\\s+/', ' ', $input);
		if (!is_string($input)) {
			return '';
		}
		return trim($input);
	}

	/** Remove escaping backslashes for parenthesis logic */
	private static function unescape(string $input): string {
		return str_replace(['\\(', '\\)'], ['(', ')'], $input);
	}
}
