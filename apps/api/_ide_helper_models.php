<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Admin
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUpdatedAt($value)
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Company
 *
 * @property int $id
 * @property string $sid
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $legal_name
 * @property string|null $legal_address
 * @property string|null $legal_contact
 * @property string|null $logo
 * @property string|null $phone
 * @property string|null $website
 * @property string $type
 * @property string $size
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property \Illuminate\Support\Carbon|null $legal_verified_at
 * @property \Illuminate\Support\Carbon|null $phone_verified_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\CompanyFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereLegalAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereLegalContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereLegalName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereLegalVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company wherePhoneVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereSid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereWebsite($value)
 */
	class Company extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Listing
 *
 * @property int $id
 * @property string $creator_type
 * @property int $creator_id
 * @property string $sid
 * @property string $type
 * @property string|null $title_en
 * @property string|null $title_de
 * @property string|null $title_fr
 * @property string|null $description_en
 * @property string|null $description_de
 * @property string|null $description_fr
 * @property int $salary_min
 * @property int $salary_max
 * @property bool $is_permanent_employment
 * @property string $workload
 * @property bool $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Listing newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Listing newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Listing query()
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereCreatorType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereDescriptionDe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereDescriptionFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereIsPermanentEmployment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereSalaryMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereSalaryMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereSid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereTitleDe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereTitleEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereTitleFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereWorkload($value)
 */
	class Listing extends \Eloquent {}
}

namespace App\Models\Perk{
/**
 * App\Models\Perk\Perk
 *
 * @property int $id
 * @property string $name
 * @property int|null $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\Perk\PerkFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Perk newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Perk newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Perk query()
 * @method static \Illuminate\Database\Eloquent\Builder|Perk whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perk whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perk whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perk whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perk whereUpdatedAt($value)
 */
	class Perk extends \Eloquent {}
}

namespace App\Models\Perk{
/**
 * App\Models\Perk\PerkCategory
 *
 * @property int $id
 * @property string $name
 * @property int|null $parent_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\Perk\PerkCategoryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|PerkCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PerkCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PerkCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|PerkCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PerkCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PerkCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PerkCategory whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PerkCategory whereUpdatedAt($value)
 */
	class PerkCategory extends \Eloquent {}
}

namespace App\Models\Skill{
/**
 * App\Models\Skill\Skill
 *
 * @property int $id
 * @property string $name
 * @property int|null $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\Skill\SkillFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Skill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Skill query()
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereUpdatedAt($value)
 */
	class Skill extends \Eloquent {}
}

namespace App\Models\Skill{
/**
 * App\Models\Skill\SkillCategory
 *
 * @property int $id
 * @property string $name
 * @property int|null $parent_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\Skill\SkillCategoryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SkillCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SkillCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|SkillCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillCategory whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillCategory whereUpdatedAt($value)
 */
	class SkillCategory extends \Eloquent {}
}

namespace App\Models\Translation{
/**
 * App\Models\Translation\Translation
 *
 * @property int $id
 * @property string $key
 * @property string $en
 * @property string|null $de
 * @property string|null $fr
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Translation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Translation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Translation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Translation whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation whereDe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation whereEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation whereFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation whereUpdatedAt($value)
 */
	class Translation extends \Eloquent {}
}

namespace App\Models\Translation{
/**
 * App\Models\Translation\TranslationCategory
 *
 * @property int $id
 * @property string $name
 * @property int|null $parent_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TranslationCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TranslationCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TranslationCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|TranslationCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TranslationCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TranslationCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TranslationCategory whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TranslationCategory whereUpdatedAt($value)
 */
	class TranslationCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $sid
 * @property string $name
 * @property string $surname
 * @property string $gender
 * @property int $phone
 * @property string $email
 * @property string $password
 * @property \Illuminate\Support\Carbon $birthday
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property \Illuminate\Support\Carbon|null $phone_verified_at
 * @property \Illuminate\Support\Carbon|null $identity_verified_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIdentityVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

