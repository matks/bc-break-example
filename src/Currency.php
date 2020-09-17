<?php

declare(strict_types=1);

namespace Matks\BcBreakExample;

class Currency
{
	/** @var string */
	private $symbol;

	public function __construct(string $symbol)
	{
		$this->symbol = $symbol;
	}

	/**
     * @param Currency $otherCurrency
     *
     * @return bool
     */
	public function isSame(Currency $otherCurrency)
	{
		return ($this->symbol === $otherCurrency->getSymbol());
	}

	/**
     * @return string
     */
	public function getSymbol()
	{
		return $this->symbol;
	}
}