<?php
namespace OCA\Theme\AppInfo;

use OC\Theme;

/** @var Theme\ThemeService $themeService */
$themeService = \OC::$server->query('ThemeService');
$themeService->setAppTheme('oc-app-theme');