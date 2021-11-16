<?php

/**
 * Copyright (C) 2016-2021  Daniel Dolejška
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

namespace RiotAPI\LeagueAPI\Objects;


/**
 *   Class StatusDto
 *
 * Used in:
 *   lol-status (v4)
 *     - @see LeagueAPI::getPlatformData
 *       @link https://developer.riotgames.com/apis#lol-status-v4/GET_getPlatformData
 *
 * @package RiotAPI\LeagueAPI\Objects
 */
class StatusDto extends ApiObject
{
	/**
	 * Available when received from:
	 *   - @see LeagueAPI::getPlatformData
	 *
	 * @var int $id
	 */
	public $id;

	/**
	 * (Legal values: scheduled, in_progress, complete).
	 *
	 * Available when received from:
	 *   - @see LeagueAPI::getPlatformData
	 *
	 * @var string $maintenance_status
	 */
	public $maintenance_status;

	/**
	 * (Legal values: info, warning, critical).
	 *
	 * Available when received from:
	 *   - @see LeagueAPI::getPlatformData
	 *
	 * @var string $incident_severity
	 */
	public $incident_severity;

	/**
	 * Available when received from:
	 *   - @see LeagueAPI::getPlatformData
	 *
	 * @var ContentDto[] $titles
	 */
	public $titles;

	/**
	 * Available when received from:
	 *   - @see LeagueAPI::getPlatformData
	 *
	 * @var UpdateDto[] $updates
	 */
	public $updates;

	/**
	 * Available when received from:
	 *   - @see LeagueAPI::getPlatformData
	 *
	 * @var string $created_at
	 */
	public $created_at;

	/**
	 * Available when received from:
	 *   - @see LeagueAPI::getPlatformData
	 *
	 * @var string $archive_at
	 */
	public $archive_at;

	/**
	 * Available when received from:
	 *   - @see LeagueAPI::getPlatformData
	 *
	 * @var string $updated_at
	 */
	public $updated_at;

	/**
	 * (Legal values: windows, macos, android, ios, ps4, xbone, switch).
	 *
	 * Available when received from:
	 *   - @see LeagueAPI::getPlatformData
	 *
	 * @var string[] $platforms
	 */
	public $platforms;
}
