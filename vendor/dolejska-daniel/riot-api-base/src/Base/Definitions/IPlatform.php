<?php

/**
 * Copyright (C) 2016-2020  Daniel Dolejška
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace RiotAPI\Base\Definitions;


/**
 *   Interface IPlatform
 *
 * @package RiotAPI\Base\Definitions
 */
interface IPlatform
{
	/**
	 *   Returns platform list by region.
	 *
	 * @return array
	 */
	public function getList(): array;

	/**
	 *   Returns platform name based on region identifier (can either be string or internal numeric ID).
	 *
	 * @param $region
	 * @return string
	 */
	public function getPlatformNameOfRegion($region): string;

	/**
	 *   Returns region name based on platform identifier (can either be string or internal numeric ID).
	 *
	 * @param $region
	 * @return string
	 */
	public function getCorrespondingContinentRegion($region): string;
}