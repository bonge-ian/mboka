@if (session('status'))
	@php
		$status = session('status');

		$statuses = [
		'profile-information-updated' => __('Your profile information has been updated'),
		'password-updated' => __('Your password has been updated'),
		'recovery-codes-generated' => __('Two Factor recovery codes have been regenerated'),
		'two-factor-authentication-enabled' => __('Two factor authentication has been enabled'),
		'two-factor-authentication-disabled' => __('Two factor authentication has been disabled'),
		'verification-link-sent' => __('A new verification link has been sent to the email address you provided during registration.'),
        'create-listing' => __('Successfully, created your listing'),
		];

		$message = array_key_exists($status, $statuses) ? $statuses[$status]: $status;
	@endphp
	<x-alert type="success" close="true" :message="$message"/>
@endif
