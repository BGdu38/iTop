<?php

namespace Combodo\iTop\Test\UnitTest\Setup;

use Combodo\iTop\Test\UnitTest\ItopTestCase;
use DOMDocument;
use iTopDesignFormat;


/**
 * Class iTopDesignFormatTest
 *
 * @runTestsInSeparateProcesses
 * @preserveGlobalState disabled
 * @backupGlobals disabled
 *
 * @covers iTopDesignFormat
 *
 * @since 2.7.0 N°2586
 * @package Combodo\iTop\Test\UnitTest\Setup
 */
class TestForITopDesignFormatClass extends ItopTestCase
{
	protected function setUp()
	{
		parent::setUp();

		require_once APPROOT.'setup/modelfactory.class.inc.php';
		require_once APPROOT.'setup/itopdesignformat.class.inc.php';
	}

	/**
	 * @covers       iTopDesignFormat::Convert
	 * @dataProvider ConvertProvider
	 *
	 * @param string $sTargetVersion
	 * @param string $sInputXmlFileName example "1.7_to_1.6.input"
	 * @param string $sExpectedXmlFileName example "1.7_to_1.6.expected"
	 *
	 * @throws \Exception
	 */
	public function testConvert($sTargetVersion, $sXmlFileName)
	{
		$sSamplesRelDirPath = 'Convert-samples/';
		$sInputXml = $this->GetFileContent($sSamplesRelDirPath.$sXmlFileName.'.input');
		$sExpectedXml = $this->GetFileContent($sSamplesRelDirPath.$sXmlFileName.'.expected');

		$oInputDocument = new DOMDocument();
		libxml_clear_errors();
		$oInputDocument->preserveWhiteSpace = false;
		$oInputDocument->loadXML($sInputXml);
		$oInputDocument->formatOutput = true;
		$oDesignFormat = new iTopDesignFormat($oInputDocument);
		$oDesignFormat->Convert($sTargetVersion);
		$sConvertedXml = $oInputDocument->saveXML();

		$this->assertEquals($sExpectedXml, $sConvertedXml);
	}

	public function ConvertProvider()
	{
		return array(
			'1.7 to 1.6' => array('1.6', '1.7_to_1.6'),
			'1.7 to 3.0' => array('3.0', '1.7_to_3.0'),
			'3.0 to 1.7' => array('1.7', '3.0_to_1.7'),
		);
	}

	private function GetFileContent($sFileName)
	{
		$sCurrentPath = __DIR__;

		return file_get_contents($sCurrentPath.DIRECTORY_SEPARATOR.$sFileName.'.xml');
	}
}