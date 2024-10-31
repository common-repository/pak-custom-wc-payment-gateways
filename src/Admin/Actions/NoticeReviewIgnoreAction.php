<?php

namespace panastasiadist\PAK_Custom_WC_Payment_Gateways\Admin\Actions;

use panastasiadist\PAK_Custom_WC_Payment_Gateways\Base\Action;
use panastasiadist\PAK_Custom_WC_Payment_Gateways\Entities\Result;

/**
 * Handles a request made through an admin-side notice claiming that the user has already written a review.
 */
class NoticeReviewIgnoreAction extends Action {
	public function handle( array $query, array $data ): Result {
		return new Result( Result::CODE_SUCCESS, [
			'dismiss' => true,
		] );
	}
}