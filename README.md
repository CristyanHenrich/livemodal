<br/>
<p align="center">
  <a href="https://github.com/cristyanhenrich/livemodal">
    <img src="https://static.vecteezy.com/system/resources/previews/016/835/349/non_2x/modal-line-gradient-circle-background-icon-vector.jpg" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">Livemodal - Livewire Modals</h3>

  <p align="center">
    Add a simple and functional modal to be used with Livewire!
    <br/>
    <br/>
    <a href="https://github.com/cristyanhenrich/livemodal/issues">Report Bug</a>
    .
    <a href="https://github.com/cristyanhenrich/livemodal/issues">Request Feature</a>
  </p>
</p>

![Downloads](https://img.shields.io/github/downloads/cristyanhenrich/livemodal/total) ![Contributors](https://img.shields.io/github/contributors/cristyanhenrich/livemodal?color=dark-green) ![Stargazers](https://img.shields.io/github/stars/cristyanhenrich/livemodal?style=social) ![Issues](https://img.shields.io/github/issues/cristyanhenrich/livemodal) 

## Table Of Contents

* [About the Project](#about-the-project)
* [Getting Started](#getting-started)
  * [Prerequisites](#prerequisites)
  * [Installation](#installation)
* [Usage](#usage)
* [Authors](#authors)

## About The Project

![Screen Shot](https://i.ibb.co/0YK0Kw3/Screenshot-2023-12-02-at-13-53-14-Screenshot.png)

Welcome to `livemodal`, a Laravel Livewire package designed to simplify the creation and manipulation of modals. This package provides an elegant and efficient approach to integrating dynamic modals into your Laravel applications, making the process of creating interactive user interfaces faster and easier.

## Getting Started

Get started quickly with `livemodal`: Follow these simple steps to integrate dynamic modals into your Laravel application.

### Prerequisites

This is a list of items needed to use the software.

* livewire


### Installation

1. install package

```sh
composer require cristyanhenrich/livemodal
```

2. Publish assets

```sh
php artisan vendor:publish --tag=livemodal-assets
```

3. Add Provider

```php
'providers' => [
    // Other Service Providers...

    cristyanhenrich\livemodal\ModalServiceProvider::class,
],
```

4. Import Scripts and Styles

```html
<html>
<head>
    ...

    @livemodalStyles

</head>
<body>
    ...

    @livemodalScripts

    @livewire('modal', ['idModal' => 'livemodal-modal-id', 'title' => ''])

</body>
</html>
```

## Usage

Import the modal and control the modal and its properties using the button, pass information and models to the view of your Livewire component

```html
<button onclick="livemodalShow('Modal Title', 'modal-id', 'component-livewire-name', 'model', {{ json_encode(['other' => 'informations']) }})">Open</button>

@livewire('modal', ['idModal' => 'modal-id', 'title' => 'Modal Title'])
```

### Creating A Pull Request

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## Authors

* **Cristyan Henrich** - *Comp Sci Student* - [Cristyan Henrich](https://github.com/CristyanHenrich/) - *Project Creator*
