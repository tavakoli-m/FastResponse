# Fast Response

<p>Easily manage your app's API responses</p>

## Installation

### Requirements

`PHP >= 8.3`
<br>
<br>
`Laravel >= 10`

---

#### 1. Install the package via Composer:

```
composer require fastresponse/fastresponse
```

#### 1. Add `FastResponse\FastResponse\Providers\FastResponseServiceProvider::class` To application:

### laravel <= 10

you should add provider in `config/app.php`

### laravel >= 11

you should add provider in `bootstrap/providers.php`

## Usage Fast Response

use fast response facade

```php
use FastResponse\FastResponse\Facades\Response;
```

## Set Response Status

```php
return Response::withStatus(200)->send();
```

## Set Response Data

```php
return Response::withData(['key' => 'value'])->send();
```

## Set Response Message

```php
return Response::withMessage('my message')->send();
```

## Set Response Appends Data

```php
return Response::withAppends(['appends' => 'some data'])->send();
```

## Merge All Methods

```php
return Response::withStatus(200)->withData(['key' => 'value'])->withAppends(['user' => ['id' => 1, 'email' => 'email@email.com']])->withMessage('response message')->send();
```