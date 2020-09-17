<?php

declare(strict_types=1);

namespace Matks\BcBreakExample;

class Money
{
	/** @var float */
	private $amount;
	/** @var Currency */
	private $currency;

	public function __construct(float $amount, Currency $currency)
	{
		$this->amount = $amount;
		$this->currency = $currency;
	}

	/**
     * @param Money $otherMoney
     *
     * @return bool
     */
	public function isEqual(Money $otherMoney)
	{
		$equalAmounts = ($otherMoney->amount === $this->amount);
		$sameCurrency = ($otherMoney->getCurrency()->isSame($this->currency));

		return ($equalAmounts && $sameCurrency);
	}

	/**
     * @return Currency
     */
	public function getCurrency()
	{
		return $this->currency;
	}

	/**
     * @return float
     */
	public function getAmount()
	{
		return $this->amount;
	}

	/**
	 * @return string
	 */
	public function __toString()
	{
		return sprintf('%d%s', $this->amount, $this->currency->getSymbol());
	}
}