<?php
// $Id$

/**
 * @file View for Docs maintainers / admins to check status of pages
 */
$view = new view;
$view->name = 'drupalorg_docs_management';
$view->description = 'View for Docs maintainers / admins to check status of pages';
$view->tag = '';
$view->view_php = '';
$view->base_table = 'node';
$view->is_cacheable = FALSE;
$view->api_version = 2;
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */
$handler = $view->new_display('default', 'Defaults', 'default');
$handler->override_option('relationships', array(
  'bid' => array(
    'label' => 'Top level book',
    'required' => 0,
    'id' => 'bid',
    'table' => 'book',
    'field' => 'bid',
    'relationship' => 'none',
  ),
  'uid' => array(
    'label' => 'user',
    'required' => 0,
    'id' => 'uid',
    'table' => 'node_revisions',
    'field' => 'uid',
    'relationship' => 'none',
  ),
));
$handler->override_option('fields', array(
  'counter' => array(
    'label' => '#',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'counter_start' => '1',
    'exclude' => 0,
    'id' => 'counter',
    'table' => 'views',
    'field' => 'counter',
    'relationship' => 'none',
  ),
  'title' => array(
    'label' => 'Title',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 1,
    'exclude' => 0,
    'id' => 'title',
    'table' => 'node',
    'field' => 'title',
    'relationship' => 'none',
  ),
  'title_1' => array(
    'label' => 'Top level book',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 0,
    'exclude' => 0,
    'id' => 'title_1',
    'table' => 'node',
    'field' => 'title',
    'relationship' => 'bid',
  ),
  'tid' => array(
    'label' => 'All terms',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'type' => 'separator',
    'separator' => ', ',
    'link_to_taxonomy' => 1,
    'limit' => 1,
    'vids' => array(
      '5' => 5,
      '38' => 38,
      '31' => 31,
      '1' => 0,
      '40' => 0,
      '42' => 0,
      '6' => 0,
      '9' => 0,
      '4' => 0,
      '44' => 0,
      '46' => 0,
      '3' => 0,
      '7' => 0,
      '2' => 0,
      '32' => 0,
      '33' => 0,
      '34' => 0,
    ),
    'exclude' => 0,
    'id' => 'tid',
    'table' => 'term_node',
    'field' => 'tid',
    'relationship' => 'none',
  ),
  'comment_count' => array(
    'label' => 'Comments',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'set_precision' => FALSE,
    'precision' => 0,
    'decimal' => '.',
    'separator' => ',',
    'prefix' => '',
    'suffix' => '',
    'exclude' => 0,
    'id' => 'comment_count',
    'table' => 'node_comment_statistics',
    'field' => 'comment_count',
    'relationship' => 'none',
  ),
  'changed' => array(
    'id' => 'changed',
    'table' => 'node',
    'field' => 'changed',
  ),
  'status' => array(
    'label' => 'Published',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'type' => 'yes-no',
    'not' => 0,
    'exclude' => 0,
    'id' => 'status',
    'table' => 'node',
    'field' => 'status',
    'relationship' => 'none',
  ),
));
$handler->override_option('filters', array(
  'comment_count' => array(
    'operator' => '>=',
    'value' => array(
      'value' => '',
      'min' => '',
      'max' => '',
    ),
    'group' => '0',
    'exposed' => TRUE,
    'expose' => array(
      'use_operator' => 1,
      'operator' => 'comment_count_op',
      'identifier' => 'comment_count',
      'label' => 'Comment count',
      'optional' => 1,
      'remember' => 0,
    ),
    'id' => 'comment_count',
    'table' => 'node_comment_statistics',
    'field' => 'comment_count',
    'relationship' => 'none',
  ),
  'type' => array(
    'operator' => 'in',
    'value' => array(
      'book' => 'book',
    ),
    'group' => '0',
    'exposed' => FALSE,
    'expose' => array(
      'operator' => 'type_op',
      'label' => 'Node: Type',
      'use_operator' => FALSE,
      'identifier' => 'type',
      'remember' => FALSE,
      'single' => TRUE,
      'optional' => TRUE,
      'reduce' => FALSE,
    ),
    'id' => 'type',
    'table' => 'node',
    'field' => 'type',
    'relationship' => 'none',
  ),
  'status' => array(
    'operator' => '=',
    'value' => 'All',
    'group' => '0',
    'exposed' => TRUE,
    'expose' => array(
      'operator' => '',
      'identifier' => 'status',
      'label' => 'Published',
      'optional' => 1,
      'remember' => 0,
    ),
    'id' => 'status',
    'table' => 'node',
    'field' => 'status',
    'relationship' => 'none',
  ),
  'title' => array(
    'operator' => 'contains',
    'value' => '',
    'group' => '0',
    'exposed' => TRUE,
    'expose' => array(
      'use_operator' => 1,
      'operator' => 'title_op',
      'identifier' => 'title',
      'label' => 'Top level book',
      'optional' => 1,
      'remember' => 0,
    ),
    'case' => 1,
    'id' => 'title',
    'table' => 'node',
    'field' => 'title',
    'relationship' => 'bid',
  ),
  'tid' => array(
    'operator' => 'or',
    'value' => array(),
    'group' => '0',
    'exposed' => TRUE,
    'expose' => array(
      'use_operator' => 0,
      'operator' => 'tid_op',
      'identifier' => 'tid',
      'label' => 'Page status',
      'optional' => 1,
      'single' => 1,
      'remember' => 0,
      'reduce' => 0,
    ),
    'type' => 'select',
    'limit' => TRUE,
    'vid' => '31',
    'id' => 'tid',
    'table' => 'term_node',
    'field' => 'tid',
    'hierarchy' => 0,
    'relationship' => 'none',
    'reduce_duplicates' => 0,
  ),
  'title_1' => array(
    'operator' => 'contains',
    'value' => '',
    'group' => '0',
    'exposed' => TRUE,
    'expose' => array(
      'use_operator' => 0,
      'operator' => 'title_1_op',
      'identifier' => 'title_1',
      'label' => 'Title contains',
      'optional' => 1,
      'remember' => 0,
    ),
    'case' => 0,
    'id' => 'title_1',
    'table' => 'node',
    'field' => 'title',
    'relationship' => 'none',
  ),
  'tid_1' => array(
    'operator' => 'or',
    'value' => array(),
    'group' => '0',
    'exposed' => TRUE,
    'expose' => array(
      'use_operator' => 0,
      'operator' => 'tid_1_op',
      'identifier' => 'tid_1',
      'label' => 'Drupal version',
      'optional' => 1,
      'single' => 1,
      'remember' => 0,
      'reduce' => 0,
    ),
    'type' => 'select',
    'limit' => TRUE,
    'vid' => '5',
    'id' => 'tid_1',
    'table' => 'term_node',
    'field' => 'tid',
    'hierarchy' => 0,
    'relationship' => 'none',
    'reduce_duplicates' => 0,
  ),
  'term_node_tid_depth' => array(
    'operator' => 'or',
    'value' => array(),
    'group' => '0',
    'exposed' => TRUE,
    'expose' => array(
      'use_operator' => 0,
      'operator' => 'term_node_tid_depth_op',
      'identifier' => 'term_node_tid_depth',
      'label' => 'Audience type',
      'optional' => 1,
      'single' => 1,
      'remember' => 0,
      'reduce' => 0,
    ),
    'type' => 'select',
    'limit' => TRUE,
    'vid' => '38',
    'depth' => '0',
    'id' => 'term_node_tid_depth',
    'table' => 'node',
    'field' => 'term_node_tid_depth',
    'hierarchy' => 0,
    'relationship' => 'none',
    'reduce_duplicates' => 0,
  ),
));
$handler->override_option('access', array(
  'type' => 'none',
));
$handler->override_option('cache', array(
  'type' => 'none',
));
$handler->override_option('title', 'Documentation status/management');
$handler->override_option('header', 'All headings are sortable.');
$handler->override_option('header_format', '1');
$handler->override_option('header_empty', 0);
$handler->override_option('items_per_page', 100);
$handler->override_option('use_pager', '1');
$handler->override_option('style_plugin', 'table');
$handler->override_option('style_options', array(
  'grouping' => '',
  'override' => 1,
  'sticky' => 0,
  'order' => 'desc',
  'columns' => array(
    'counter' => 'counter',
    'title' => 'title',
    'title_1' => 'title_1',
    'tid' => 'tid',
    'comment_count' => 'comment_count',
    'changed' => 'changed',
    'status' => 'status',
  ),
  'info' => array(
    'counter' => array(
      'separator' => '',
    ),
    'title' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'title_1' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'tid' => array(
      'separator' => '',
    ),
    'comment_count' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'changed' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'status' => array(
      'sortable' => 1,
      'separator' => '',
    ),
  ),
  'default' => 'changed',
));
$handler = $view->new_display('page', 'Page', 'page_1');
$handler->override_option('path', 'documentation/manage');
$handler->override_option('menu', array(
  'type' => 'none',
  'title' => '',
  'description' => '',
  'weight' => 0,
  'name' => 'navigation',
));
$handler->override_option('tab_options', array(
  'type' => 'none',
  'title' => '',
  'description' => '',
  'weight' => 0,
  'name' => 'navigation',
));
