<?php

namespace MediaWiki\Extension\Notifications\Test\Integration\Push;

use MediaWiki\Extension\Notifications\Push\Utils;
use MediaWikiIntegrationTestCase;

/**
 * @covers \MediaWiki\Extension\Notifications\Push\Utils
 * @group Database
 */
class UtilsTest extends MediaWikiIntegrationTestCase {

	public function testGetLoggedInPushId(): void {
		$user = $this->getTestUser()->getUser();
		$this->assertGreaterThan( 0, Utils::getPushUserId( $user ) );
	}

	public function testGetLoggedOutPushId(): void {
		$user = $this->getTestUser()->getUser();
		$user->doLogout();
		$this->assertSame( 0, Utils::getPushUserId( $user ) );
	}

}
