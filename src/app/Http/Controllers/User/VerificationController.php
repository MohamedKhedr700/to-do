<?php

namespace App\Http\Controllers\User;

use App\Http\Authentication\Channels\TwoFactorEmailChannel;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Controller;
use App\Http\Requests\User as Requests;
use App\Http\Transformers\User\UserTransformer as Transformer;
use App\Services\UserService as Service;
use Illuminate\Http\JsonResponse;

class VerificationController extends AuthenticationController
{
    public function __construct(Service $service)
    {
        $this->setService($service);
    }

    public function verifyTwoFactor(Requests\VerifyTwoFactorRequest $request): JsonResponse
    {
        $user = $this->getService()->find($request->input('verifiableId'));

        return $this->authenticationResponse(
            $this->getService()->login($user),
            new Transformer,
        );
    }
}
