<?php
/**
 * Return a mailer [PHPMailer](https://github.com/PHPMailer/PHPMailer) instance of the requested mailer
 * @param    {String}    [$name=null]    The mailer name requested. If not passed, will take the email.default_mailer config.
 * @return    {PHPMailer\PHPMailer\PHPMailer}    A phpmailer instance to work with
 *
 * @example    php
 * $mailer = Thorin::mailer('gmail');
 * $mailer->addAddress('john.doe@ecample.com', 'John Doe');
 * $mailer->isHTML(true);
 * // etc...
 * if ($mailer->send()) {
 *   // do something on success
 * } else {
 *   // do something on error
 * }
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_mailer($name = null) {
	return Thorin::mailer_factory($name);
}