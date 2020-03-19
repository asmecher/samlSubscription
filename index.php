<?php

/**
 * @file index.php
 *
 * Copyright (c) 2015-2020 Simon Fraser University
 * Copyright (c) 2015-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file LICENSE.
 *
 * @brief Wrapper for SAML Subscription plugin.
 */

require_once('SamlSubscriptionPlugin.inc.php');
return new SamlSubscriptionPlugin();
