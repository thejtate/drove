<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

<div class="outer-wrapper">
  <header id="site-header" class="site-header">
    <div class="container">

      <?php if ($logo): ?>
        <div class="logo">
          <a href="<?php print $front_page; ?>">
            <img src="<?php print $logo; ?>"/>
          </a>
        </div>
      <?php endif; ?>

      <div class="btn-nav"><a href="#"></a></div>
      <div class="navigation">
        <div class="top-menu">
          <?php print render($page['top_header']); ?>
          <?php if (!$logged_in): ?>
            <div class="btn-wrap"><a href="#" class="btn-login"
                                     data-toggle="modal"
                                     data-target="#login"><?php print t('LOGIN') ?></a>
            </div>
          <?php endif; ?>
        </div>
        <nav class="bottom-menu">
          <?php print render($page['header']); ?>
        </nav>
      </div>
    </div>
  </header>

  <?php print $messages; ?>

  <div class="inner-wrapper">
    <div id="main" class="clearfix">

      <div id="content" class="column">
        <div class="section">
          <section class="section section-media">
            <?php if (!empty($top_image)): ?>
              <div class="bg"
                   style="background-image: url(<?php print $top_image; ?>)">
                <?php if (!empty($home_mp4_video) || !empty($home_webm_video)): ?>
                  <video id="video" width="420"
                         poster="<?php print ($home_poster_video); ?>"
                         preload="auto" autoplay="autoplay"
                         loop="loop" muted="muted">
                    <source src="<?php print ($home_mp4_video); ?>"
                            type="video/mp4">
                    <source src="<?php print ($home_webm_video); ?>"
                            type="video/webm">
                    Your browser does not support HTML5 video.
                  </video>
                <?php endif; ?>
              </div>
            <?php endif; ?>
            <div class="btn-play"><a href="#video">Play Sound</a></div>
          </section>
          <section class="section section-media section-default">
            <?php if (!empty($top_image)): ?>
              <div class="bg"
                   style="background-image: url(<?php print $top_image; ?>)"></div>
            <?php endif; ?>
            <div class="valign">
              <div class="container">
                <?php if (!empty($title)): ?>
                  <?php print render($title_prefix); ?>
                  <h1>  <?php print render($title); ?></h1>
                  <?php print render($title_suffix); ?>
                <?php endif; ?>
                <?php if (!empty($top_text)): ?>
                  <div class="text">
                    <?php print render($top_text); ?>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </section>

          <?php if ($tabs): ?>
            <div
              class="tabs"><?php print render($tabs); ?>
            </div>
          <?php endif; ?>

          <?php print render($page['help']); ?>
          <?php if ($action_links): ?>
            <ul class="action-links">
              <?php print render($action_links); ?>
            </ul>
          <?php endif; ?>

          <div <?php print !empty($content_class) ? 'class="' . $content_class . '"' : '' ?>>
            <div <?php print !empty($content_wrapper) ? 'class="' . $content_wrapper . '"' : '' ?>>
              <?php if (!empty($top_text)): ?>
                <div class="columnizer container">
                  <div class="text">
                    <?php print render($top_text); ?>
                  </div>
                </div>
              <?php endif; ?>
              <?php print render($page['content']); ?>
            </div>
          </div>

          <?php print $feed_icons; ?>
        </div>
      </div> <!-- /.section, /#content -->

    </div>
  </div> <!-- /#main, /#main-wrapper -->

  <footer id="site-footer" class="site-footer">


    <div class="container">
      <div class="right-part">

        <?php if ($logo): ?>
          <div class="logo">
            <a href="<?php print $front_page; ?>">
              <img src="<?php print $logo; ?>"/>
            </a>
          </div>
        <?php endif; ?>

        <?php if (!empty($copyright)): ?>
          <p class="copy"><?php print ($copyright); ?></p>
        <?php endif; ?>
      </div>
      <div class="left-part">
        <?php if (!empty($siteinfo_map)): ?>
          <div class="location"><a
              href="http://maps.google.com/?q=<?php print render($siteinfo_map); ?>"
              target="_blank"><?php print render($siteinfo_map); ?>
            </a>
          </div>
        <?php endif; ?>

        <?php if (!empty($siteinfo_office_tel) || !empty($siteinfo_mobile_tel)): ?>
          <div class="phone">
            <?php if (!empty($siteinfo_office_tel)): ?>
              Office <a
                href="tel:<?php print render($siteinfo_office_tel); ?>">
                <?php print render($siteinfo_office_tel_title); ?></a>
            <?php endif; ?>

            <?php if (!empty($siteinfo_mobile_tel)): ?>
              Mobile <a
                href="tel:<?php print render($siteinfo_mobile_tel); ?>">
                <?php print render($siteinfo_mobile_tel_title); ?></a>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <?php if (!empty($siteinfo_email)): ?>
        <div class="mail"><a
            href="mailto:<?php print render($siteinfo_email); ?>"> <?php print render($siteinfo_email); ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </footer>

  <?php print render($page['login_popup']); ?>
</div> <!-- /#page, /#page-wrapper -->