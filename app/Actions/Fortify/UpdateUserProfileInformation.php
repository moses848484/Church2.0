<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  User  $user
     * @param  array<string, mixed>  $input
     */
    public function update(User $user, array $input): void
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:4096'], // Adjusted max size to 2048 KB (2 MB)
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $this->updateProfilePhoto($user, $input['photo']);
        }

        if ($input['email'] !== $user->email && $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
            ])->save();
        }
    }

    /**
     * Update the user's profile photo.
     *
     * @param  User  $user
     * @param  mixed  $photo
     */
    protected function updateProfilePhoto(User $user, $photo): void
    {
        // Optionally delete the old photo
        if ($user->profile_photo_path) {
            // Remove the old file from storage
            \Storage::disk('public')->delete($user->profile_photo_path);
        }

        // Store the new photo
        $path = $photo->store('profile-photos', 'public');

        // Update the user's profile photo path with the public URL
        $user->forceFill([
            'profile_photo_path' => \Storage::url($path), // Generate the URL for public access
        ])->save();
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  User  $user
     * @param  array<string, string>  $input
     */
    protected function updateVerifiedUser(User $user, array $input): void
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
