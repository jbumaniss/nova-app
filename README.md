![alt text](issue.png "Issue")

# Nova Application Setup Guide

This guide provides instructions on setting up the Nova application, creating a new user, and outlines a current issue within the Nova User Resource.


## Setup Instructions

1. **Clone the Repository:**

```
git clone git@github.com:jbumaniss/nova-app.git
```

2. **Navigate to the nova-app directory:**

```
cd nova-app
```

3. **Install Composer Dependencies:**

```
composer install
```

4. **Set Up Environment File:**

```
cp .env.example .env
```

5. **Generate an App Encryption Key:**

```
php artisan key:generate
```

6. **Start Laravel Sail:**

```
./vendor/bin/sail up -d
```

## Create new user

1. **Enter Tinker Environment:**

```
./vendor/bin/sail artisan tinker
```

2. **Create a new user:**

```
$user = new \App\Models\User();
$user->name = “John Doe”;
$user->email = "johndoe@example.com";
$user->password = Hash::make('password');
$user->save();
```

### Login Information

- URL = http://localhost/nova

- Username: johndoes@example.com

- Password: password
