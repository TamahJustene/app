<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: TAMAH JUSTENE NKWAGOH <tamahjustin@gmail.com>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\ZingerApp\AppInfo;

use OCP\AppFramework\App;

class Application extends App {
	public const APP_ID = 'zingerapp';

	public function __construct() {
		parent::__construct(self::APP_ID);
	}
}
