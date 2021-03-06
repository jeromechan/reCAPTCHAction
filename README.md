# reCAPTCHAction

The reCAPTCHAction PHP Lirary helps you easy use the Google reCAPTCHA API. 

## Installation

Git clone reCAPTCHAction package follow the link below

GitHub: [https://github.com/jeromechan/reCAPTCHAction.git](https://github.com/jeromechan/reCAPTCHAction.git)

## Usage

### 1. Place reCAPTCHAction package

Choose the right directory, and place the reCAPTCHAction package there.
And then, follow the directory tree to fix the include code `require_once('recaptcha/action.php');` to the right path.

### 2. Config
Don't forget to set publickey/privatekey by replacing your_public_key/your_private_key with your API public key.

	define("CAP_PUBLIC_KEY", "your_public_key");
	define("CAP_PRIVATE_KEY", "your_private_key");

### 3. Generate the captcha form
	require_once('recaptcha/action.php');
    echo_captcha_form();

### 4. Verify user captcha POST data
	require_once('recaptcha/action.php');
	verify_captcha_response();
	
### 5. Have fun, haha!

## Other Documentation / Tutorials
	
* [Google reCAPTCHA Product Reference](https://developers.google.com/recaptcha/) 


[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/jeromechan/recaptchaction/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

