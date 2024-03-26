<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
  /**
   * Show the login page
   */
  public function loginView()
  {
    if (auth()->user()) {
      return redirect('/');
    }
    return $this->render('auth.login');
  }

  /**
   * Show the register page
   */
  public function registerView()
  {
    if (auth()->user()) {
      return redirect('/');
    }
    return $this->render('auth.register');
  }


  /**
   * Show the forgot password page
   */
  public function forgotPasswordView()
  {
    if (auth()->user()) {
      return redirect('/');
    }
    return $this->render('auth.forgot-password');
  }


  /**
   * Show the magic link page
   */
  public function magicLinkView()
  {
    if (auth()->user()) {
      return redirect('/');
    }
    return $this->render('auth.magic-link-form');
  }

  /**
   * Show the reset password page
   *
   * @return void
   */
  public function resetPasswordView()
  {
    if (!auth()->user()) {
      return redirect('/login');
    }
    return $this->render('auth.reset-password');
  }

  /**
   * Handle the password reset
   *
   * @return void
   */
  public function handleResetPassword()
  {
    $password = (string) request()->getPost('password');
    $passwordConfirm = request()->getPost('password_confirm');

    if (strlen($password) < 8) {
      return redirect()->back()->with('error', lang('Auth.errorPasswordLength'));
    }
    if ($password !== $passwordConfirm) {
      return redirect()->back()->with('error', lang('Auth.passwordNoMatch'));
    }

    // Save the new password
    $user = auth()->user();
    $user->setPasswordHash(password_hash($password, PASSWORD_BCRYPT));
    $userModel = new UserModel();
    $userModel->save($user);

    // Redirect to the home page
    return redirect()->to('/')->with('success', lang('Auth.passwordChanged'));
  }
}
