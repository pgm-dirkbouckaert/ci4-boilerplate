<?php

namespace Myth\Auth\Language\nl;

return [

  // User
  'firstname'                 => 'Voornaam',
  'lastname'                  => 'Familienaam',
  'username'                  => 'Gebruikersnaam',
  'email'                     => 'E-mailadres',
  'emailAddress'              => 'E-mailadres',
  'password'                  => 'Wachtwoord',
  'passwordConfirm'           => 'Bevestig wachtwoord',
  'repeatPassword'            => 'Herhaal wachtwoord',

  // Login
  'login'                     => 'Inloggen',
  'logout'                    => 'Uitloggen',
  'badAttempt'                => 'Inloggen mislukt. Controleer je gegevens.',
  'loginSuccess'              => 'Welkom terug!',
  'invalidPassword'           => 'Inloggen mislukt. Controleer je wachtwoord.',
  'signIn'                    => 'Inloggen',
  'rememberMe'                => 'Wachtwoord onthouden',
  'noAccount'                 => 'Geen account? Registreren.',
  'needAnAccount'             => 'Account nodig?',
  'haveAccount'               => 'Heb je al een account?',
  'alreadyRegistered'         => 'Al geregistreerd?',
  'errorPasswordTooLongBytes' => 'Wachtwoord is te lang.',
  'forgotPassword'            => 'Wachtwoord vergeten?',
  'forgotYourPassword'        => 'Wachtwoord vergeten?',
  'passwordNoMatch'           => 'Wachtwoorden komen niet overeen.',
  'errorPasswordLength'       => 'Het wachtwoord moet minimaal 8 karakters lang zijn.',
  'passwordChanged'           => 'Je wachtwoord is succesvol veranderd',

  // Registration
  'register'                  => 'Registreren',
  'registerDisabled'          => 'Sorry, nieuwe gebruikersaccounts zijn momenteel niet toegestaan.',
  'registerNotAllowed'        => 'Sorry, u kan momenteel niet registreren.',
  'registerSuccess'           => 'Welkom! Log in met uw nieuwe inloggegevens.',
  'registerCLI'               => 'Nieuwe gebruiker aangemaakt: {0}, #{1}',
  'personnelOnly'             => 'Alleen voor personeel van CVO GENT.',

  // Exceptions
  'unknownAuthenticator'  => '{0} is geen geldige authenticator.',
  'unknownUserProvider'   => 'Kan geen geldige gebruikersprovider bepalen.',
  'invalidUser'           => 'Kan de opgegeven gebruiker niet vinden.',
  'bannedUser'            => 'Je kan niet inloggen omdat je account geblokkeerd is.',
  'logOutBannedUser'      => 'Je bent uitgelogd omdat je account geblokkeerd is.',
  'noPassword'            => 'Kan een gebruiker zonder wachtwoord niet valideren.',
  'noToken'               => 'Elk verzoek moet een bearer token hebben in de {0} header.',
  'badToken'              => 'Ongeldige toegangstoken.',
  'oldToken'              => 'Vervallen toegangstoken.',
  'noUserEntity'          => 'Gebruikersentiteit moet worden opgegeven voor wachtwoordvalidatie.',
  'invalidEmail'          => 'We kunnen geen gebruiker vinden met dat e-mailadres.',
  'unableSendEmailToUser' => 'Sorry, er is een probleem opgetreden bij het verzenden van de e-mail. We konden geen e-mail versturen naar "{0}".',
  'throttled'             => 'Te veel inlogpogingen van dit IP adres. Probeer het over {0} seconden opnieuw.',
  'notEnoughPrivilege'    => 'U hebt niet de nodige rechten om de gewenste bewerking uit te voeren.',
  // JWT Exceptions
  'invalidJWT'     => 'De token ongeldig.',
  'expiredJWT'     => 'De token is verlopen.',
  'beforeValidJWT' => 'De token is nog niet geldig.',

  // Buttons
  'confirm' => 'Bevestig',
  'send'    => 'Verzend',


  // Activation
  'activationNoUser'       => 'Geen gebruiker gevonden met deze activatie code.',
  'activationSubject'      => 'Activeer je account',
  'activationSuccess'      => 'Activeer je account door op de activatielink in de e-mail te klikken. Daarna kan je inloggen.',
  'activationResend'       => 'Verstuur activatielink opnieuw.',
  'notActivated'           => 'Deze gebruiker is nog niet geactiveerd.',
  'errorSendingActivation' => 'Versturen van activiatielink aan {0} mislukt.',

  // Magic Link
  'useMagicLink'           => 'Gebruik een link om in te loggen.',
  'magicLinkSubject'       => 'Jouw login link',
  'magicTokenNotFound'     => 'Kan de link niet verifiëren.',
  'magicLinkExpired'       => 'Sorry, de login link verlopen. Vraag een nieuwe aan.',
  'checkYourEmail'         => 'Check je e-mail!',
  'magicLinkDetails'       => 'Er is net een e-mail met een login link verstuurd. Deze blijft {0} minuten geldig.',
  'afterMagicLinkLogin'    => 'Na het inloggen word je automatisch doorverwezen naar de pagina om je wachtwoord te wijzigen.',
  'magicLinkDisabled'      => 'Login link gebruiken is momenteel niet toegestaan.',
  'successLogout'          => 'Je bent uitgelogd.',
  'backToLogin'            => 'Terug naar inloggen',
  'token'                  => 'Token',


  // Forgotten Passwords
  'forgotDisabled'  => 'Wachtwoord vergeten is uitgeschakeld.',
  'forgotNoUser'    => 'Er kan geen gebruiker met dit e-mailadres gevonden worden.',
  'forgotSubject'   => 'Instructies wachtwoord herstellen',
  'resetSuccess'    => 'Je wachtwoord is succesvol gewijzigd. Login met je nieuwe wachtwoord.',
  'forgotEmailSent' => 'Een beveiligingscode is naar het e-mailadres gestuurd. Vul de code in onderstaand veld in om door te gaan.',
  'errorEmailSent'  => 'Kan geen instructies voor wachtwoord herstel naar {0} sturen.',
  'errorResetting'  => 'Kan geen instructies voor wachtwoord herstel sturen naar {0}',

  // Passwords
  'suggestPasswordLength'     => 'Een wachtwoord zin - maximaal 255 karakters - zorgt voor een makkelijk te onthouden, maar sterk wachtwoord.',
  'errorPasswordCommon'       => 'Het wachtwoord mag geen algemeen gebruikt wachtwoord zijn.',
  'suggestPasswordCommon'     => 'Het wachtwoord is gecontroleerd aan de hand van een lijst met 65 duizend veel gebruikte wachtwoorden of wachtwoorden die betrokken zijn geweest bij een datalek.',
  'errorPasswordPersonal'     => 'Het wachtwoord mag geen persoonlijke informatie bevatten.',
  'suggestPasswordPersonal'   => 'Variaties van je e-mailadres en gebruikersnaam horen niet in je wachtwoord voor te komen.',
  'errorPasswordTooSimilar'   => 'Het wachtwoord lijkt te veel op de gebruikersnaam.',
  'suggestPasswordTooSimilar' => 'Je wachtwoord mag geen overeenkomsten bevatten met de gebruikersnaam.',
  'errorPasswordPwned'        => 'Het wachtwoord {0} is betrokken geweest bij een datalek en komt {1, number} keer voor in {2} van buitgemaakte wachtwoorden.',
  'suggestPasswordPwned'      => '{0} is niet toegestaan als wachtwoord. Als je dit wachtwoord ergens anders ook gebruikt moet je dit zo snel mogelijk wijzigen.',
  'errorPasswordEmpty'        => 'Wachtwoord verplicht.',
  'passwordChangeSuccess'     => 'Wachtwoord succesvol gewijzigd.',
  'userDoesNotExist'          => 'Wachtwoord niet gewijzigd. Gebruiker bestaat niet.',
  'resetTokenExpired'         => 'Sorry. Je reset code is verlopen.',

  // Email Globals
  'emailInfo'      => 'Informatie over de persoon:',
  'emailIpAddress' => 'IP Addres:',
  'emailDevice'    => 'Toestel:',
  'emailDate'      => 'Datum:',

  // 2FA
  'email2FATitle'       => 'Twee Factor Authenticatie',
  'confirmEmailAddress' => 'Bevestig je e-mailadres',
  'emailEnterCode'      => 'Bevestig je e-mailadres',
  'emailConfirmCode'    => 'Voer de 6-cijferige code in die we zojuist naar je e-mailadres hebben gestuurd.',
  'email2FASubject'     => 'Je authenticatie code',
  'email2FAMailBody'    => 'Je authenticatie code is:',
  'invalid2FAToken'     => 'Jouw code is ongeldig.',
  'need2FA'             => 'Je moet een tweefactorverificatie voltooien..',
  'needVerification'    => 'Controleer je e-mail om je accountactivatie te voltooien.',

  // Activate
  'emailActivateTitle'    => 'Email Activatie',
  'emailActivateBody'     => 'We hebben je zojuist een e-mail gestuurd met een code om je e-mailadres te bevestigen. Kopieer die code en plak het hieronder.',
  'emailActivateSubject'  => 'Jouw activatie code',
  'emailActivateMailBody' => 'Gebruik de onderstaande code om je account te activeren en de site te gebruiken.',
  'invalidActivateToken'  => 'De code was niet correct.',
  'needActivate'          => 'Je moet je registratie voltooien door de code te bevestigen die naar je e-mailadres is gestuurd.',
  'activationBlocked'     => 'Je moet je account activeren voordat je kunt inloggen.',

  // Groups
  'groupNotFound'   => 'Kan groep {0} niet vinden.',
  'unknownGroup'    => '{0} is geen geldige groep.',
  'missingTitle'    => 'Groepen moeten een titel hebben.',

  // Permissions
  'permissionNotFound'  => 'Kan rechten {0} niet vinden.',
  'unknownPermission'   => '{0} is geen geldige permissie.',

  // Banned
  'userIsBanned' => 'Gebruiker is verbannen. Neem contact op met de administrator.',

  // Too many requests
  'tooManyRequests' => 'Te veel verzoeken. Wacht {0, number} seconden.',

  // Login views
  'home'                      => 'Home',
  'current'                   => 'Huidig',
  'enterEmailForInstructions' => 'Geen probleem! Voer hier beneden je e-mailadres in en we sturen je instructies om je wachtwoord te wijzigen.',
  'sendInstructions'          => 'Verstuur instructies',
  'loginTitle'                => 'Login',
  'loginAction'               => 'Login',
  'emailOrUsername'           => 'E-mail of gebruikersnaam',
  'weNeverShare'              => 'We delen je e-mailadres nooit met iemand anders.',
  'resetYourPassword'         => 'Reset je wachtwoord',
  'enterCodeEmailPassword'    => 'Voer de code uit de e-mail, je e-mailadres en nieuwe wachtwoord in.',
  'newPassword'               => 'Nieuw wachtwoord',
  'newPasswordRepeat'         => 'Herhaal nieuw wachtwoord',
  'resetPassword'             => 'Reset wachtwoord',
];
