  A laravel package for sending contact query as a mail and save to database table

##  Installation proccess

open your termnial on laravel project directory and give this command for package install. <br>
`composer require eftia/contact`
<br>
Then give this command for vendor publish <br>
`php artisan vendor:publish`
<br>
After play this command you can see bounch of package list, Select this package from the list, It must be the number one like this <br>
```
 Which provider or tag's files would you like to publish? 
 All providers and tags ................. 0  
Provider: Eftia\Contact\ContactServiceProvider ............. 1
```
Select **1** and hit enter to vendor  publish for this package.

You can see on you project on **resource/views** folder there a folder created which name is **vendor/contact/** Into this directory see can see the view files.

Also on your application see the **/config** folder there is a file created name **contact.php** for configuration.

You may able to see the view on browser , just hit the url after your project root url **/contact** 

**Before you submit the form you need to migrate the table with this command 

`php artisan migrate`

And Finally setup mail configuration

```
MAIL_MAILER=mailer
MAIL_HOST=host
MAIL_PORT=port
MAIL_USERNAME=username
MAIL_PASSWORD=password
MAIL_ENCRYPTION=encryption

```

If You want customize route then go to **app/Providers/RouteServiceProvider.php** file and put below code 

```
 Route::middleware('web')
        ->group(base_path('routes/contact/web.php'));
```
Into 
```
 $this->routes(function () {

 });
```
This function