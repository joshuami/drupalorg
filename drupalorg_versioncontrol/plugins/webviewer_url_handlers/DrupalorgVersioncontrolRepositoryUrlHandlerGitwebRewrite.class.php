<?php
/**
 * @file
 * Repository Url handler class for gitweb with pathinfo feature enabled.
 */

/**
 * Support pathinfo gitweb feature.
 *
 * All this overwriten methods avoid using blob hashes and use just
 * commit hashes. See plugin file for details in URLs.
 */
class DrupalorgVersioncontrolRepositoryUrlHandlerGitwebRewrite extends VersioncontrolRepositoryUrlHandler {

  protected $prefix;

  public function __construct($repository, $base_url, $template_urls) {
    parent::__construct($repository, $base_url, $template_urls);

    // Figure out if this is a sandbox project's repo, and the owner's git_username.
    $project = node_load($this->repository->project_nid);
    if (project_promote_project_is_sandbox($project)) {
      $this->prefix = 'sandbox/' . user_load($project->uid)->git_username;
    }
    else {
      $this->prefix = 'project';
    }
  }

  public function getTemplateUrl($name) {
    if (!isset($this->templateUrls[$name]) || empty($this->templateUrls[$name])) {
      return '';
    }
    return strtr($this->templateUrls[$name], array(
      '%base_url' => $this->baseUrl,
      '%prefix'   => $this->prefix,
    ));
  }

  public function getItemLogViewUrl($item, $current_label = NULL) {
    $placeholders = array(
      '%repo_name' => $this->repository->name,
      '%path'      => $item->path,
      '%revision'  => $item->revision,
    );

    if ($item->isFile()) {
      return strtr($this->getTemplateUrl('file_log_view'), $placeholders);
    }
    else { // directory
      return strtr($this->getTemplateUrl('directory_log_view'), $placeholders);
    }
  }

  public function getItemViewUrl($item, $current_label = NULL) {
    if ($item->isDeleted()) {
      // Do not link to deleted items.
      return '';
    }

    $placeholders = array(
      '%repo_name' => $this->repository->name,
      '%path'      => $item->path,
      '%revision'  => $item->revision,
    );

    $view_url = $item->isFile()
      ? $this->getTemplateUrl('file_view')
      : $this->getTemplateUrl('directory_view');

    return strtr($view_url, $placeholders);
  }

  public function getDiffUrl($file_item_new, $file_item_old, $current_label = NULL) {
    $placeholders = array(
      '%repo_name'    => $this->repository->name,
      '%path'         => $file_item_new->path,
      '%old_revision' => $file_item_new->revision,
      '%new_revision' => $file_item_old->revision,
    );

    return strtr($this->getTemplateUrl('diff'), $placeholders);
  }
}
