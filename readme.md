  A laravel package for sending contact query as a mail and save to database table

##  Installation proccess

open your termnial on laravel project directory and give this command for package install.
`composer require eftia/contact`

Then give this command for vendor publish
`php artisan vendor:publish`

After play this command you can see bounch of package list, Select this package from the list, It must be the number one like this
` Which provider or tag's files would you like to publish?`
 ` All providers and tags ................. 0  `
  `Provider: Eftia\Contact\ContactServiceProvider ............. 1`
Select **1** and hit enter to vendor  publish for this package.

You can see on you project on **resource/views** folder there a folder created which name is **vendor/contact/** Into this directory see can see the view files.

Also on your application see the **/config** folder there is a file created name **contact.php** for configuration.

You may able to see the view on browser , just hit the url after your project root url **/contact** 