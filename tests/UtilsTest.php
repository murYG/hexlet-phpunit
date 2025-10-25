<?php

namespace Hexlet\Phpunit\Tests;

use PHPUnit\Framework\TestCase;
use function Hexlet\Phpunit\Utils\reverseString;

// Класс UtilsTest наследует класс TestCase
// Имя класса совпадает с именем файла
class UtilsTest extends TestCase
{
    // Метод (функция), определенный внутри класса,
    // Должен начинаться со слова test
    // Ключевое слово public нужно, чтобы PHPUnit мог вызвать этот тест снаружи
    public function testReverse(): void
    {
        // Сначала идет ожидаемое значение (expected)
        // И только потом актуальное (actual)
        $this->assertEquals('', reverseString(''));
        $this->assertEquals('olleh', reverseString('hello'));
		
		$this->assertStringEqualsFile($this->getFixtureFullPath('fishtext.txt'), reverseString('Значимость этих проблем настолько очевидна, что постоянный количественный рост и сфера нашей активности способствует подготовки и реализации систем массового участия. Равным образом сложившаяся структура организации требуют от нас анализа новых предложений. Не следует, однако забывать, что сложившаяся структура организации позволяет выполнять важные задания по разработке существенных финансовых и административных условий. Разнообразный и богатый опыт реализация намеченных плановых заданий позволяет оценить значение новых предложений.'));
    }
	
	public function getFixtureFullPath(string $fixtureName): string
	{
		$parts = [__DIR__, 'fixtures', $fixtureName];
		return realpath(implode('/', $parts));
	}	
}
