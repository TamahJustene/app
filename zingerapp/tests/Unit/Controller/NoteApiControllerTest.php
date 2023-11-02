<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: TAMAH JUSTENE NKWAGOH <tamahjustin@gmail.com>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\ZingerApp\Tests\Unit\Controller;

use OCA\ZingerApp\Controller\NoteApiController;

class NoteApiControllerTest extends NoteControllerTest {
	public function setUp(): void {
		parent::setUp();
		$this->controller = new NoteApiController($this->request, $this->service, $this->userId);
	}
}
