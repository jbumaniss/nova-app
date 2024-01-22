### Setup

```
git clone git@github.com:jbumaniss/nova-app.git
cd nova-app
composer install
cp .env.example .env
./vendor/bin/sail up -d
```

### Create new user

```
sail artisan tinker
```

$user = new \App\Models\User();
$user->name = “John Doe”;
$user->email = "johndoe@example.com";
$user->password = Hash::make('password');
$user->save();

### Login 

$url = 'localhost/nova';
username: johndoes@example.com
password: password
