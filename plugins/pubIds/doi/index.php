<?php

/**
 * @defgroup plugins_pubIds_doi
 */

/**
 * @file plugins/pubIds/doi/index.php
 *
 * Copyright (c) 2003-2012 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_pubIds_doi
 * @brief Wrapper for DOI plugin.
 *
 */
require_once('DoiPubIdPlugin.inc.php');

return new DoiPubIdPlugin();

?>