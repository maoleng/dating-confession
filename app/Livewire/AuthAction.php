<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app-auth')]
class AuthAction extends Component
{

    public function render(): View
    {
        return view('livewire.auth.login');
    }

    public function google(): RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback(): Response
    {
        $user = Socialite::driver('google')->user();

        $user = User::query()->updateOrCreate(
            [
                'google_id' => $user->getId(),
                'email' => $user->getEmail(),
            ],
            [
                'name' => $user->getName(),
            ],
        );
        Auth::login($user);

        return response("<script>window.close()</script>");
    }

    public function logout(): void
    {
        Auth::logout();
    }

}
